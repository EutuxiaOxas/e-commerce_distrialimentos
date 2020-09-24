//----------------- UI cart class --------------


class CarritoUI {
  constructor(carrito, cart_body) {
    this.cart_body = cart_body;
    this.carrito = carrito;
  }


  agregarCarrito(productos)
  {
  	
  	if(productos.length > 0)
  	{
  		console.log(productos)
  		this.cart_body.innerHTML = '';
  		productos.forEach(producto => {
  			let template = ''
  			if(producto.producto){
  				template = `
  					<div class="d-flex pl-2 mb-2">
  						<img src='/storage/${producto.imagen}' class="mr-2" style="width: 25px; height: 25px ;object-fit: cover;">
  						<p>	
  							${producto.producto.title} 

  							<span>(${producto.cantidad})</span>
  						</p>

  					</div>
  				`;
  			}else{
  				template = `
  					<div class="d-flex pl-2 mb-2">
  						<p>	
  							${producto.title} 
  						</p>

  					</div>
  				`;
  			}
  			this.cart_body.innerHTML+= template;
  			
  		})
  		this.cart_body.innerHTML+= `
  				<div class="text-center">
  					<a href="/cart/ver" class="btn btn-sm btn-primary">Ver Carrito</a>
  				</div>
  			`
  		this.carrito.children[0].children[0].classList.add('cart_on')
  	}else {
  		this.cart_body.innerHTML = 'No hay productos en el carrito';
  	}

  }

  addingAlert(alert){

  	alert.style.display = 'block';

  	setTimeout( () => {
  		alert.style.display = 'none';
  	}, 1500);
  }




}

//----------------- API CALLS class --------------

class CartApi {
	async getCart(){
		return axios.get('/cart')	 
	}

	async addToCart(id){

		return axios.post(`/cart/add`, {
			product_id: id,
		})
		
	}
}




//----------------- LocalSorage class --------------


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

let cart_main = document.getElementById('cart_main'),
    cart_body = document.getElementById('cart_body'),
    session = document.getElementById('sesion');

let productos = [];

//-------------------- Inicio de clases -----------------

let storage = new Storage();
let carrito = new CarritoUI(cart_main, cart_body);
let apiCart = new CartApi();



//-------------------- inicio de script -----------------
	
	//-------------------- Sesion no iniciada-----------------
if(session.value == 0)
{
	productos = storage.getStorage();
	let buttonsStorage = document.querySelectorAll('.to_storage');
	
	carrito.agregarCarrito(productos);
	
	if(buttonsStorage)
	{
		events(session.value, buttonsStorage);
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
				let name = e.target.parentNode.parentNode.children[0].textContent,
					id = e.target.id,
					alert = document.getElementById('add_alert');

				let producto = {title: name, id: id}
				productos.push(producto);


				storage.addStorage(productos)
					.then(res => {
						carrito.agregarCarrito(productos);
						carrito.addingAlert(alert);
					})
			});
		});
	}

	//-------------------- Servidor -----------------

	if(value == 1){
		elements.forEach(element => {
			element.addEventListener('click', (e) => {
				let id = e.target.id,
					alert = document.getElementById('add_alert');


				//productos.push(producto);
				
				apiCart.addToCart(id)
					.then(res => {
						if(res.status == 200){
							callingCart();
							carrito.addingAlert(alert)
						}
					})
			});
		});
	}
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
		})
}




