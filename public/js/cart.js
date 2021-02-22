//----------------- UI cart class -------------
class CarritoUI {
  constructor(carrito, cart_body, api) {
    this.cart_body = cart_body;
	this.carrito = carrito;
	this.api = api;
  }


  agregarCarrito(productos)
  {
  	console.log(productos)
  	if(productos.length > 0)
  	{
  		this.cart_body.innerHTML = '';
  		productos.forEach(producto => {
  			let template = ''
  			if(producto.producto){
  				template = `
				  <div class="carritoCompras__productCardMain"> 
					<div class="col">
						<div class="row boxed border shadow radeus">
						<div class="col-4 col-md-4 px-0">
							<img class="img-border" src="/storage/${producto.imagen}" alt="Product-related">
						</div>

						<div class="col-8 col-md-8 px-0">
							<div class="prod-details p-1">
							<div class="row mb-0">
								<div class="col-10 my-0 py-0">
									<h5 class="text-blue carritoProductCard__title font-weight-bold pb-0 text-left">${producto.producto.title}</h5>
									</div>
									<div class="col-2">
									<button type="button"  class="close py-0 text-right "  aria-label="Close">
										<span class="p-0 cart_modal_delete_server" id="${producto.producto.id}"  aria-hidden="true">&times;</span>
									</button>
								</div>
												
								<div class="col-12 my-0 py-0">
								<p class="small carritoProductCard__iva text-left">${producto.iva}</p>
								</div>
							</div>
							<div class="row my-0 py-0">                   
								<div class="col-12 my-0 py-0 pr-0 carritoProductCard__caracteristicas ">
									<div class="carritoProductCard__caracteristicasInfo">
										<p class="small carritoProductCard__caracteristicasInfo-price font-weight-bold text-black my-0 pb-0 fs-18 pt-1">${producto.producto.wholesale_price.toFixed(2)} $</p>
										<p class="small carritoProductCard__caracteristicasInfo-empaque my-0 py-0">${producto.empaque} - ${producto.producto.units_packaging} unidades</p>
									</div>
									<div class="carritoProductCard__caracteristicasCantidad">
										<label class="labelfs" style="margin:0;" for="cantidad">Cantidad</label>
										<input type="number" value="${producto.cantidad}" min="1" max="${producto.disponible}" class="form-control form-control-sm cart_modal_cantidad_producto" id="${producto.producto.id}">
									</div>
								</div>
							</div>
							</div>
						</div>        
						</div>
					</div>
				</div>
  				`;
  			}else{
  				template = `
				<div class="row px-1 pt-1 pb-0 mb-0"> 
					<div class="col">
						<div class="row boxed border shadow radeus">
						<div class="col-4 col-md-4 px-0">
							<img class="img-border" src="/images/lineas/linea-viveres.jpg" alt="Product-related">
						</div>

						<div class="col-8 col-md-8 px-0">
							<div class="prod-details p-1">
							<div class="row mb-0">
								<div class="col-10 my-0 py-0">
								<h5 class="text-blue font-weight-bold my-0 pb-0 text-left">Titulo del producto</h5>
								</div>
								<div class="col-2">
								<button type="button" class="close py-0 text-right" data-dismiss="modal" aria-label="Close">
									<span class="p-0" aria-hidden="true">&times;</span>
								</button>
								</div>
												
								<div class="col-12 my-0 py-0">
								<p class="small text-left">IVA incluido</p>
								</div>
							</div>
							<div class="row my-0 py-0">                   
								<div class="col-7 my-0 py-0 pr-0">
								<p class="small font-weight-bold text-black my-0 pb-0 fs-18 pt-1">20,00 $</p>
								<p class="small my-0 py-0">Caja - 30 unidades</p>
								</div>
								<div class="col-5 pl-0">                         
								<form class="text-center">
									<div class="form-group m-0">
									<label class="labelfs" for="cantidad">Cantidad</label>
									<input type="number" class="form-control form-control-sm" id="cantidadProductos">
									</div>
								</form>
								</div>
							</div>
							</div>
						</div>        
						</div>
					</div>
				</div>
  				`;
  			}
  			this.cart_body.innerHTML+= template;
  			
  		})
		  // this.carrito.children[0].children[0].classList.add('cart_on')
		  this.eventosModal()
		  this.totalCart();
  	}else {
  		this.cart_body.innerHTML = 'No hay productos en el carrito';
  		// this.carrito.children[0].children[0].classList.remove('cart_on')
		this.totalCart();
  	}
	
  }

  addingAlert(alert){

  	alert.style.display = 'block';

  	setTimeout( () => {
  		alert.style.display = 'none';
  	}, 1500);
  }


  totalCart(){
  	const cartSubTotal 			= document.getElementById('modalcartSubTotal');
  	const cartIva 	   			= document.getElementById('modalCartIva');
  	const cartTotal 			= document.getElementById('modalCartTotal');
  	const cartTotalBolivares 	= document.getElementById('modalCartTotalBolivares');

	//Enlace al formulario
	const nextButton			= document.getElementById('carritoComprasBotonSiguiente');
	const alertaMinimo			= document.getElementById('carritoComprasAlertaMinimo');
	const modalCartFinish		= document.getElementById('modalCartFinish');


	  this.api.getTotalCartAmount()
	  	.then(res => {
			  const { total, subTotal, iva, totalBolivar } = res.data;
			  cartSubTotal.innerText 			= `${subTotal} $`;
			  cartTotal.innerText				= `${total} $`;
			  cartIva .innerText				= `${iva} $`;
			  cartTotalBolivares.innerText 		= `${new Intl.NumberFormat('es-ES').format(parseInt(totalBolivar))} Bs`;

			  if(total > 0) {
				modalCartFinish.href = '/formulario'
				modalCartFinish.classList.add('disabled');
				nextButton.disabled = true;
				alertaMinimo.classList.add('active')

				if(total > 40) {
					alertaMinimo.classList.remove('active')
					modalCartFinish.classList.remove('disabled');
					nextButton.disabled = false;
				}
			  }else{ 
				modalCartFinish.classList.add('disabled');
				nextButton.disabled = true;
				alertaMinimo.classList.remove('active')
			  }
		  }) 


  	

  	
  }


  eventosModal(){
	  const deleteButtos = document.querySelectorAll('.cart_modal_delete_server');
	  const cantidadButtons = document.querySelectorAll('.cart_modal_cantidad_producto');

	//--------------EVENTO ELIMINAR PRODUCTO DEL CARRITO
	  if(deleteButtos) {
		  deleteButtos.forEach(button => {
			  button.addEventListener('click', (e) => {
				  const id = e.target.id
				  this.api.deleteItemOfCart(id)
				  	.then(res => {
						callingCart()
					  })
					.catch(err => {
						console.log(err)
					});
			  })
		  })
	  }

	  if(cantidadButtons) {

		cantidadButtons.forEach(button => {
			
			button.addEventListener('change', (e) => {
				const id = e.target.id
				const quantity = parseInt(e.target.value)

				this.api.addQuantity(id, quantity)
					.then(res => {
						callingCart()
					})
					.catch(err => {
						console.log(err)
					})
			})
		})
	  }
  }

  //--------------------- AGREGAR O QUITAR MARCA DE AGREGADO AL PRODUCTO  ---------------------

  addIconOfProductAdded(productos) {
	  const icons = document.querySelectorAll('.inCart-icon');
	  
	  if(icons) {
		if(productos.length > 0) {
			// debugger
			
			icons.forEach(icon => {
				let active = false;
				productos.forEach(producto => {
					if(producto.producto) {
						const id = producto.producto.id
					
						if(parseInt(icon.id) === id) {
							active = true;
							icon.classList.add('active');
							return;
						}
					}
				})
				if(active === false) {
					icon.classList.remove('active');
				}
			})

			
		}else {
			icons.forEach(icon => {
				icon.classList.remove('active');
			})
		}
	  }
  }

  //--------------------- ESTABLECER CANTIDAD EN EL SELECT O REGRESARLO A CERO  ---------------------

  selectStockOfProduct(productos){
	  const selectButtons = document.querySelectorAll('.productSelectStock');

	  if(selectButtons) {
		if(productos.length > 0) {
			selectButtons.forEach(select => {
				let active = false;
				productos.forEach(producto => {
					if(producto.producto) {
						const { id } = producto.producto;

						if(parseInt(select.id) == id) {
							active = true;
							select.selectedIndex = producto.cantidad;
							return;
						}
					}
				})

				if(!active) {
					select.selectedIndex = 0;
				}
			})
		}else {
			selectButtons.forEach(select => {
				select.selectedIndex = 0;
			})
		}
	  }
  	}

//--------------------- ACTIVAR O DESACTIVAR BUTTON/SELECT DEL PRODUCT CARD ---------------------
  enableOrDisableButtonOrSelect(productos) {
	
	const selectButtons = Array.prototype.slice.call(document.querySelectorAll('.productSelectStock'));
	const agregarButtons = Array.prototype.slice.call(document.querySelectorAll('.agregarButtons'));

	if(selectButtons && agregarButtons) {
	  if(productos.length > 0) {

		//BOTONES DE AGREGAR
		 agregarButtons.forEach(button => {
			 let disabled = false;

			productos.forEach(producto => {
				if(producto.producto) {
				   const { id } = producto.producto;
				   if(button.dataset.id == id) {
						disabled = true;
				   }
				}
			})

			if(disabled) {
				button.classList.add('disabled');
			}else{ 
				button.classList.remove('disabled')
			}
		 })

		//SELECTORES CANTIDAD
		selectButtons.forEach(select => {
			let active = false;

			productos.forEach(producto => {
				if(producto.producto) {
				   const { id } = producto.producto;
				   if(select.id == id) {
					active = true;
				   }
				}
			})

			if(active) {
				select.parentNode.classList.add('active');
			}else{ 
				select.parentNode.classList.remove('remove');
			}
		})

	  // EN CASO DE NO HABER PRODUCTOS	
	  }else {
		selectButtons.forEach(select => {
			select.parentNode.classList.remove('active');
		})

		agregarButtons.forEach(select => {
			select.classList.remove('disabled');
		})
	  }
	}
  }

  
}

//-------------------------------------------------------- API CALLS class ----------------------------------

class CartApi {
	async getCart(){
		return axios.get('/cart')	 
	}

	async addToCart(id, cantidad){

		return axios.post(`/cart/add`, {
			product_id: id,
			cantidad
		})
		
	}

	async addQuantity(id, quantity) {
		return axios.post(`/cart/quantity/${id}`, {
			cantidad: quantity
		})
	}

	async deleteItemOfCart(id) {
		return axios.post(`/cart/item/delete/${id}`)
		.catch(err => {
			console.log(err)
		})
	}

	async getTotalCartAmount() {
		return axios.get('/cart/amount')
		.catch(err => {
			console.log(err)
		}) 
	}
}




//--------------------------------------------------- LocalSorage class ------------------------------------------


class Storage{
	constructor()
	{
		this.storage = '';
	}


	getStorage(){
		let datos = localStorage.getItem('carrito');
		let cart = JSON.parse(datos)


		if(cart)
		{

			this.storage = cart;
			return this.storage


		}else {
			let cartBody = [];

			localStorage.setItem('carrito', JSON.stringify(cartBody));
			
			cart = localStorage.getItem('carrito');
			this.storage = JSON.parse(cart)
			return this.storage
		}
	}


	async addStorage(products)
	{
		localStorage.setItem('carrito', JSON.stringify(products));
	}

}





//-------------------- Declaracion de variables -----------------
const total_container = document.getElementById('total_container');
let cart_main = document.getElementById('cart_main'),
    cart_body = document.getElementById('cart_body'),
    session = document.getElementById('verifyLogin');

let productos = [];

//-------------------- Inicio de clases -----------------
let storage = new Storage();
let apiCart = new CartApi();
let carrito = new CarritoUI(cart_main, cart_body, apiCart);



//-------------------- inicio de script -----------------
	
	//-------------------- Sesion no iniciada-----------------
if(session.value == 0)
{
	productos = storage.getStorage();
	let buttonsStorage = document.querySelectorAll('.to_storage'),
		buttonsVerStorage = document.querySelectorAll('.ver_storage');
	
	carrito.agregarCarrito(productos);
	
	if(buttonsStorage)
	{
		events(session.value, buttonsStorage);
	}

	if(buttonsVerStorage){
		events(2, buttonsVerStorage);
	}
}
	
	//-------------------- Sesion iniciada -----------------

if(session.value == 1){
	let	buttonsServer = document.querySelectorAll('.to_server');
	
	productos = storage.getStorage();
	addingStorageToServer(productos);

	// apiCart.getCart()
	// 	.then(res => {
	// 		productos = res.data
	// 		carrito.agregarCarrito(productos)
	// });


	if(buttonsServer)
	{
		events(session.value, buttonsServer);
	}

}



//-------------------- Agregar productos -----------------

function events(value, elements)
{
	

	//-------------------- LocalStorage -----------------

	if(value == 0)
	{
		elements.forEach(element => {
			element.addEventListener('click', (e) => {
				console.log(e.target)
				
				// let name = e.target.parentNode.parentNode.children[0].textContent,
				// 	id = e.target.id,
				// 	price = e.target.parentNode.parentNode.children[2].textContent,
				// 	image = e.target.parentNode.parentNode.parentNode.children[0].src,
				// 	slug = e.target.parentNode.parentNode.children[3].value,
				// 	alert = document.getElementById('add_alert');

				// let producto = {title: name, id: id, image: image, price: price, cantidad: 1, link: slug}

				// let verify = verifyProduct(producto);
				// if(verify){
				// 	productos.push(producto);
				// }


				// storage.addStorage(productos)
				// 	.then(res => {
				// 		carrito.agregarCarrito(productos);
				// 		carrito.addingAlert(alert);
				// 	})
			});
		});
	}

	//--------------------Vista producto LocalStorage -----------------
	// if(value == 2){
	// 	elements.forEach(element => {
	// 		element.addEventListener('click', (e) => {
	// 			let id = e.target.id,
	// 				padre = e.target.parentNode.parentNode.children[0].children[0],
	// 				name = padre.children[0].textContent,
	// 				price = padre.children[2].textContent,
	// 				image = e.target.parentNode.parentNode.parentNode.children[0].src,
	// 				slug = padre.children[4].value,
	// 				alert = document.getElementById('add_alert');

	// 			console.log(padre)
	// 			let producto = {title: name, id: id, image: image, price: price, cantidad: 1, link: slug}

				
	// 			let verify = verifyProduct(producto);
	// 			if(verify){
	// 				productos.push(producto);
	// 			}


	// 			storage.addStorage(productos)
	// 				.then(res => {
	// 					carrito.agregarCarrito(productos);
	// 					carrito.addingAlert(alert);
	// 				})
	// 		});
	// 	});
	// }


	//-------------------- Servidor -----------------

	if(value == 1){
		const agregarButtons = document.querySelectorAll('.agregarButtons-server');

		elements.forEach(element => {
			element.addEventListener('change', (e) => {
				const id = e.target.id,
					  element = e.target,
					  value = parseInt(e.target.value)
					alert = document.getElementById('add_alert');

				apiCart.addToCart(id, value)
					.then(res => {
						if(res.status == 200){
							callingCart();
							// carrito.addingAlert(alert)
						}
					})
			});
		});

		//----- BUTTON AGREGAR

		agregarButtons.forEach(button => {
			button.addEventListener('click', (e) => {
				const select = e.target.parentNode.children[0].children[1];
				select.value = 1;

				apiCart.addToCart(select.id, 1)
					.then(res => {
						if(res.status == 200){
							callingCart();
							// carrito.addingAlert(alert)
						}
					})
			})
		})
	}

	

}

	//-------------- VERIFICAR PRODUCTO --------
function verifyProduct(producto){
	let variable;
	let encontrado = '';
	if(productos.length > 0){

		productos.forEach(element => {
			if(element.id == producto.id){
				element.cantidad = element.cantidad + 1;
				variable = false;
				encontrado = 'encontrado';
			}
		});

		if(encontrado.length == 0){
			variable = true;
		}

	}else{
		variable = true;
	}

	return variable;
}

//-------------------- Agregar Storage Al servidor -----------------

function addingStorageToServer(storage){
	if(storage.length > 0)
	{
		axios.post('/cart/storage', {
			products: storage,
		})
		.then(res => {
			if(res.status == 200){
				localStorage.clear();
				callingCart();
			}
		})
	}else{
		callingCart();
	}
}


//-------------------- Llamar carrito de productos -----------------

function callingCart(){
	apiCart.getCart()
		.then(res => {
			productos = res.data;
			carrito.agregarCarrito(productos);
			carrito.addIconOfProductAdded(productos);
			carrito.selectStockOfProduct(productos);
			carrito.enableOrDisableButtonOrSelect(productos);
			// loadProducts(productos);
			// loadTotalProducts(productos, 1)
		})
}






// function loadTotalProducts(elements,value){
// 	if(total_container){
// 		carrito.totalCart(elements, total_container, value)
// 	}
// }


//-------------------- Llenar productos vista carrito -----------------
// function loadProducts(productos){
// 	let container_products = document.getElementById('product_container');
// 	if(container_products){
// 		let boton_comprar = document.getElementById('boton_comprar');
// 		container_products.innerHTML = ''
// 		if(productos.length > 0){
// 			productos.forEach(producto => {
				
// 				let menorque = `
// 				<option ${producto.cantidad == 1 ? 'selected' : ''}>1</option>
// 				<option ${producto.cantidad == 2 ? 'selected' : ''}>2</option>
// 				<option ${producto.cantidad == 3 ? 'selected' : ''}>3</option>
// 				<option ${producto.cantidad == 4 ? 'selected' : ''}>4</option>
// 				<option ${producto.cantidad == 5 ? 'selected' : ''}>5</option>
// 				<option ${producto.cantidad == 6 ? 'selected' : ''}>6</option>
// 				<option ${producto.cantidad == 7 ? 'selected' : ''}>7</option>
// 				<option ${producto.cantidad == 8 ? 'selected' : ''}>8</option>
// 				<option ${producto.cantidad == 9 ? 'selected' : ''}>9</option>
// 				<option ${producto.cantidad == 10 ? 'selected' : ''}>10</option>
// 				`;

// 				let mayorque = `
// 					<option>1</option>
// 					<option>2</option>
// 					<option>3</option>
// 					<option>4</option>
// 					<option>5</option>
// 					<option>6</option>
// 					<option>7</option>
// 					<option>8</option>
// 					<option>9</option>
// 					<option>10</option>
// 					<option selected>${producto.cantidad}</option>
// 				`;

// 				container_products.innerHTML += `
// 					<div class="mb-4">
// 						<div class="row">
// 							<div class="col-5">
// 								<img src="/storage/${producto.imagen}" style="width: 250px; height: 150px">
// 							</div>
// 							<div class="col-4 d-flex" style="flex-direction: column;flex:1; justify-content: center;">
// 								<h5><a href="/producto/${producto.producto.slug}">${producto.producto.title}</a></h5>
// 								<p>Costo: <strong>${producto.producto.price}</strong></p>
// 								<button id="${producto.producto.id}" class="btn btn-sm btn-outline-primary carrito_eliminar_storage">Eliminar producto</button>
// 							</div>
// 							<div class="col-3 d-flex" style="flex-direction: column;flex:1; justify-content: center;">
// 								<h5>Cantidad</h5>
// 								<select id="${producto.producto.id}" class="form-control selector_carrito">
// 										${producto.cantidad <= 10 ? menorque : mayorque}
// 								</select>
// 							</div>
// 						</div>
// 					</div>
// 				`
// 			});

// 			container_products.innerHTML += `
// 				<div class="col-12 my-3">
// 					<a href="#" id="vaciar_carrito" class="btn btn-danger btn-block">Vaciar carrito</a>
// 				</div>
// 			`
// 			boton_comprar.style.display = 'block';
// 			loadEventsCartView()
// 		}else{
// 			container_products.innerHTML = `
// 				<h2>No hay productos en el carrito</h2>
// 			`
// 			boton_comprar.style.display = 'none';
// 		}
// 	}
// }

//-------------------- carga de eventos después de cargar productos -----------------
// function loadEventsCartView(){
// 	let cantidadSelect = document.querySelectorAll('.selector_carrito'),
// 		vaciar_carrito = document.getElementById('vaciar_carrito'),
// 		eliminarProduct = document.querySelectorAll('.carrito_eliminar_storage');


// 	//-------------------- Cambiar cantidad del producto -----------------

// 	// if(cantidadSelect){
// 	// 	cantidadSelect.forEach(cantidad => {
// 	// 		cantidad.addEventListener('change', (e) =>{
// 	// 			let id = e.target.id,
// 	// 				count = e.target.value;

// 	// 			changeCount(id, count)
// 	// 		});
// 	// 	})
// 	// }

// 	//-------------------- Eliminar producto del carrito -----------------
// 	// if(eliminarProduct){
// 	// 	eliminarProduct.forEach(button => {
// 	// 		button.addEventListener('click', e =>{
// 	// 			deleteProduct(e.target.id)
// 	// 		})
// 	// 	})
// 	// }

// 	//-------------------- Vaciar carrito -----------------
// 	// if(vaciar_carrito){
// 	// 	vaciar_carrito.addEventListener('click', () =>{
// 	// 		vaciarCarrito()
// 	// 	})
// 	// }

// 	//-------------------- FUNCIONES DE LOS EVENTOS EN LA VISTA CARRITO.BLADE -----------------
// }


