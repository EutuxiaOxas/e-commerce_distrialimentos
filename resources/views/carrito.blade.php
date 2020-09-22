@extends('layouts.app')

@section('title')
	Carrito
@endsection

@section('content')


<div class="container">
	<div class="row mt-5">
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
						</div>
						<div class="col-3 d-flex" style="flex-direction: column;flex:1; justify-content: center;">
							<h5>Cantidad: <small>{{$detail->cantidad}}</small></h5>
						</div>
					</div>
				</div>
			@endforeach
		</div>
		<div class="col-3 offset-1 d-flex justify-content-center" style="align-items: center;">
			<a href="#" class="btn btn-primary">Contactar</a>
		</div>
	</div>
</div>


@endsection