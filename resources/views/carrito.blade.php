@extends('layouts.app')

@section('title')
	Carrito
@endsection

@section('content')


<div class="container">
	<div class="row mt-5">
		@if (session('error'))
		    <div class="alert alert-danger col-12" role="alert">
		        {{ session('error') }}
		        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		            <span aria-hidden="true">&times;</span>
		          </button>
		    </div>
		@endif
		<div class="col-12" id="alerts_container">
			
		</div>
		@if(isset($cart_details))
			<div class="col-7" style="border-right: 1px solid #333">
				@foreach($cart_details as $detail)
					<div class="mb-4">
						<div class="row">
							<div class="col-5">
								<img src="{{asset('storage/'. $detail->product->image)}}" style="width: 250px; height: 150px">
							</div>
							<div class="col-4 d-flex" style="flex-direction: column;flex:1; justify-content: center;">
								<h5><a href="{{route('producto.show', $detail->product->slug)}}">{{$detail->product->title}}</a></h5>
								<p>Costo: <strong>{{$detail->product->price}} $</strong></p>
								<form action="{{route('cart.detail.destroy', $detail->id)}}" method="POST">
									@csrf
									<input type="submit" class="btn btn-sm btn-outline-primary" value="Eliminar producto">
								</form>
							</div>
							<div class="col-3 d-flex" style="flex-direction: column;flex:1; justify-content: center;">
								<h5>Cantidad</h5>
								<select id="{{$detail->id}}" class="form-control selector_carrito">
									@if($detail->cantidad <= 10)
										<option <?php if($detail->cantidad == 1) echo "selected";?> >1</option>
										<option <?php if($detail->cantidad == 2) echo "selected";?> >2</option>
										<option <?php if($detail->cantidad == 3) echo "selected";?> >3</option>
										<option <?php if($detail->cantidad == 4) echo "selected";?> >4</option>
										<option <?php if($detail->cantidad == 5) echo "selected";?> >5</option>
										<option <?php if($detail->cantidad == 6) echo "selected";?> >6</option>
										<option <?php if($detail->cantidad == 7) echo "selected";?> >7</option>
										<option <?php if($detail->cantidad == 8) echo "selected";?> >8</option>
										<option <?php if($detail->cantidad == 9) echo "selected";?> >9</option>
										<option <?php if($detail->cantidad == 10) echo "selected";?> >10</option>
									@elseif($detail->cantidad > 10)
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
										<option>6</option>
										<option>7</option>
										<option>8</option>
										<option>9</option>
										<option>10</option>
										<option selected>{{$detail->cantidad}}</option>
									@endif
								</select>
							</div>
						</div>
					</div>
				@endforeach
				@if(count($cart_details) > 0)
					<div class="col-12 my-3">
						<a href="{{route('cart.destroy')}}" class="btn btn-danger btn-block">Vaciar carrito</a>
					</div>
				@else
					<h2>No hay productos en el carrito</h2>
				@endif
			</div>
			<div class="col-3 offset-1 d-flex justify-content-center" style="align-items: center;">
				<a href="{{route('order.store')}}" class="btn btn-primary">Contactar</a>
			</div>
		@else
			<div class="col-7" id="storage_container" style="border-right: 1px solid #333">
				
			</div>
			<div class="col-3 offset-1 d-flex justify-content-center" style="align-items: center;">
				<a href="#" class="btn btn-primary">Registrarse</a>
			</div>
		@endif
	</div>
</div>


<script type="text/javascript">
	document.addEventListener('DOMContentLoaded', () =>{
		let cantidadSelect = document.querySelectorAll('.selector_carrito');
		loadStorage()
		if(cantidadSelect){
			cantidadSelect.forEach(cantidad => {
				cantidad.addEventListener('change', (e) =>{
					let id = e.target.id,
						count = e.target.value;

					changeCount(id, count)
				});
			})
		}
	});

	function changeCount(id, count){
		axios.post(`/cart/change/count`, {
			detalle_id: id,
			cantidad: count 
		})
		.then(res => {
			alertCount(res.data, 'success')
			callingCart();
		})
	}

	function alertCount(message, alert)
	{
		let container = document.getElementById('alerts_container')

		container.innerHTML += `
			<div class="alert alert-${alert} col-12" role="alert">
			    ${message}
			    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			        <span aria-hidden="true">&times;</span>
			      </button>
			</div>
		`
	}
</script>

<script type="text/javascript">

// ------------------- EVENTOS VISTA CARRITO CON LOCAL STORAGE -----------------------

	// ------------------- Cargar elementos del storage -----------------------

	function loadStorage(){
		const container = document.getElementById('storage_container');
		if(container){

			container.innerHTML = '';

			if(productos.length > 0){
				productos.forEach(producto => {
					
					let menorque = `
					<option ${producto.cantidad == 1 ? 'selected' : ''}>1</option>
					<option ${producto.cantidad == 2 ? 'selected' : ''}>2</option>
					<option ${producto.cantidad == 3 ? 'selected' : ''}>3</option>
					<option ${producto.cantidad == 4 ? 'selected' : ''}>4</option>
					<option ${producto.cantidad == 5 ? 'selected' : ''}>5</option>
					<option ${producto.cantidad == 6 ? 'selected' : ''}>6</option>
					<option ${producto.cantidad == 7 ? 'selected' : ''}>7</option>
					<option ${producto.cantidad == 8 ? 'selected' : ''}>8</option>
					<option ${producto.cantidad == 9 ? 'selected' : ''}>9</option>
					<option ${producto.cantidad == 10 ? 'selected' : ''}>10</option>
					`;

					let mayorque = `
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
						<option>6</option>
						<option>7</option>
						<option>8</option>
						<option>9</option>
						<option>10</option>
						<option selected>${producto.cantidad}</option>
					`;

					container.innerHTML += `
						<div class="mb-4">
							<div class="row">
								<div class="col-5">
									<img src="${producto.image}" style="width: 250px; height: 150px">
								</div>
								<div class="col-4 d-flex" style="flex-direction: column;flex:1; justify-content: center;">
									<h5><a href="/producto/${producto.link}">${producto.title}</a></h5>
									<p>Costo: <strong>${producto.price}</strong></p>
									<button id="${producto.id}" class="btn btn-sm btn-outline-primary carrito_eliminar_storage">Eliminar producto</button>
								</div>
								<div class="col-3 d-flex" style="flex-direction: column;flex:1; justify-content: center;">
									<h5>Cantidad</h5>
									<select id="${producto.id}" class="form-control selector_carrito_storage">
											${producto.cantidad <= 10 ? menorque : mayorque}
									</select>
								</div>
							</div>
						</div>
					`
				});
				container.innerHTML += `
					<div class="col-12 my-3">
						<a href="#" id="carrito_vaciar_storage" class="btn btn-danger btn-block">Vaciar carrito</a>
					</div>
				`
				eventosStorage();
			}else {
				container.innerHTML = '<h2>No hay productos disponibles</h2>';
			}
		}
	}



	// ------------------- Cargar eventos a botones de los productos -----------------------
	function eventosStorage(){
		let changeCantidad = document.querySelectorAll('.selector_carrito_storage'),
			vaciarCarrito = document.getElementById('carrito_vaciar_storage'),
			deleteProduct = document.querySelectorAll('.carrito_eliminar_storage');

		if (changeCantidad){

			changeCantidad.forEach(element => {
				element.addEventListener('change', (e) =>{

					let id = e.target.id,
						cantidad = e.target.value;


					updateCount(id, cantidad);
				});
			})
		}

		if(deleteProduct){

			deleteProduct.forEach(element => {

				element.addEventListener('click', e => {

					let id = e.target.id;
					productos = destroyProduct(productos,id)


					storage.addStorage(productos)
						.then(res => {
							carrito.agregarCarrito(productos);
							loadStorage()
							alertCount('Producto eliminado con éxito', 'danger');
						})
				});
			})
		}

		if(vaciarCarrito){

			vaciarCarrito.addEventListener('click', (e) =>{

				e.preventDefault()
				destroyCarrito();
				
			});
		}
	}

	// ------------------- Actualizar cantidad del producto -----------------------
	function updateCount(id, count){
		productos.forEach(producto => {
			if(producto.id == id){
				producto.cantidad = count;
			}
		})

		storage.addStorage(productos)
			.then(res => {
				carrito.agregarCarrito(productos);
				alertCount('Cantidad del producto actualizada con éxito!', 'success');
			})
	}

	// ------------------- Eliminar producto -----------------------
	function destroyProduct(productos, id){
		return productos.filter(function(producto){
			return producto.id !== id
		});
	}


	// ------------------- vaciar el carrito -----------------------

	function destroyCarrito(){
		productos = []

		storage.addStorage(productos)
			.then(res => {
				carrito.agregarCarrito(productos);
				loadStorage()
				alertCount('Carrito vaciado con éxito!', 'danger');
			})
	}
</script>

@endsection