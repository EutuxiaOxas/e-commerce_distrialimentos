//Clase para UI


class CarritoUI {
  constructor(carrito, cart_body) {
    this.cart_body = cart_body;
    this.carrito = carrito;
  }


  agregarCarrito(productos)
  {
  	console.log('carrito |', productos);
  	
  	this.cart_body.innerHTML = '';

  	productos.forEach(producto => {
  		let template = `
  			<div>${producto.title}</div>
  		`;
  		this.cart_body.innerHTML+= template;
  	})

  }




}

//Clase para llamado al servidor






// LocalSorage


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

			console.log('llegando storage')
			this.storage = cart;
			console.log(this.storage)
			return this.storage


		}else {
			console.log('creando storage');
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





//variables
let cart_main = document.getElementById('cart_main'),
    cart_body = document.getElementById('cart_body'),
    session = document.getElementById('sesion');

let productos = [];

//clases
let storage = new Storage();
let carrito = new CarritoUI(cart_main, cart_body);





if(session.value == 0)
{
	productos = storage.getStorage();
	let buttonsStorage = document.querySelectorAll('.to_storage');


	if(productos.length > 0)
	{
		carrito.agregarCarrito(productos);
	}
	
	if(buttonsStorage)
	{
		events(session.value, buttonsStorage);
	}
}



function events(value, elements)
{
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

						alert.style.display = 'block';

						setTimeout( () => {
							alert.style.display = 'none';
						}, 1500);
					})
			});
		});
	}
}


function getCart()
{
    cart_body.innerHTML = ''
    axios.get('/cart')
     .then(response => {
         updateCart(response.data, cart_body);
     })
}


function updateCart(details, body)
{
    if(details.length > 0)
    {
        let contador = 0;

        details.forEach(detail => {
            body.innerHTML += `
            <div class="text-center p-2">
                <h6 >${detail.title}</h6>
            </div>
        `
        });


    }else {
        body.innerHTML = `
            <p>No hay productos </p>
        `
    }
}




function addToCart(id){
	axios.post(`/cart/add`, {
		product_id: id,
	})
	.then(response => {
		if(response.status = 200)
		{
			getCart(cart_body)
		}
	})
}