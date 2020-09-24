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
		<div class="col-7" style="border-right: 1px solid #333">
			@foreach($cart_details as $detail)
				<div class="mb-4">
					<div class="row">
						<div class="col-5">
							<img src="{{asset('storage/'. $detail->product->image)}}" style="width: 250px; height: 150px">
						</div>
						<div class="col-4 d-flex" style="flex-direction: column;flex:1; justify-content: center;">
							<h5>{{$detail->product->title}}</h5>
							<p>Costo: <strong>{{$detail->product->price}} $</strong></p>
							<form action="{{route('cart.detail.destroy', $detail->id)}}" method="POST">
								@csrf
								<input type="submit" class="btn btn-sm btn-outline-primary" value="Eliminar producto">
							</form>
						</div>
						<div class="col-3 d-flex" style="flex-direction: column;flex:1; justify-content: center;">
							<h5>Cantidad</h5>
							<select id="{{$detail->id}}" class="form-control selector_carrito">
								@if($detail->cantidad == 1 && $detail->cantidad < 5)
									<option selected>{{$detail->cantidad}}</option>
									<option>5</option>
									<option>7</option>
								@elseif($detail->cantidad == 5)
									<option>1</option>
									<option selected>{{$detail->cantidad}}</option>
									<option>7</option>
								@elseif($detail->cantidad > 5 &&  $detail->cantidad < 7)
									<option>1</option>
									<option>5</option>
									<option selected>{{$detail->cantidad}}</option>
									<option>7</option>
								@elseif($detail->cantidad == 7)
									<option>1</option>
									<option>5</option>
									<option selected>{{$detail->cantidad}}</option>
								@elseif($detail->cantidad > 7)
									<option>1</option>
									<option>5</option>
									<option>7</option>
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
			<a href="#" class="btn btn-primary">Contactar</a>
		</div>
	</div>
</div>


<script type="text/javascript">
	document.addEventListener('DOMContentLoaded', () =>{
		let cantidadSelect = document.querySelectorAll('.selector_carrito');

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
			alertCount(res.data)
			callingCart();
		})
	}

	function alertCount(message)
	{
		let container = document.getElementById('alerts_container')

		container.innerHTML += `
			<div class="alert alert-success col-12" role="alert">
			    ${message}
			    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			        <span aria-hidden="true">&times;</span>
			      </button>
			</div>
		`
	}

</script>

@endsection