@extends('layouts.app')

@section('title')
	Productos
@endsection

@section('content')


<div class="container-fluid">
	<div class="row">
		<div class=" col-2">
			<h3 class="my-4">Categorias</h3>
			@foreach($categorias as $categoria)
				<div>
					<a href="{{route('product.category.show', $categoria->slug)}}">{{$categoria->title}}</a>
				</div>
			@endforeach
		</div>
		<div class="col-9">
			@if(isset($product_categorie))
			<h1 class="my-3">Productos en categoria: <small>{{$product_categorie->title}}</small></h1>
			@else
			<h1 class="my-3">Productos</h1>

			@endif
			<div id="add_alert" style="display: none;" class="alert alert-success">Producto Agregado con éxito!</div>
			<div class="d-flex" style="flex-wrap: wrap;">
				@foreach($productos as $producto)
					<div class="card mb-4" style="width: 15rem;">
					  <img src="{{asset('storage/'. $producto->image)}}" style="height: 10rem; object-fit: cover;" class="card-img-top" alt="...">
					  <div class="card-body">
					    <h5 class="card-title">{{$producto->title}}</h5>
					    <p class="card-text">{{substr($producto->description, 0, 100)}} ...</p>
					    <strong>Precio:</strong>
					    <p>{{$producto->price}} <span>$</span></p>


					    <div class="text-center mb-3">
					    	<a href="{{route('producto.show', $producto->slug)}}" class="btn btn-primary">Ver producto</a>
					    </div>
					    <div class="text-center">
					    	@if(auth()->user())
					    		<button id="{{$producto->id}}" class="btn btn-outline-success to_server">Agregar al carrito</button>
					    	@else
					    		<button id="{{$producto->id}}" class="btn btn-outline-success to_storage">Agregar al carrito</button>
					    	@endif
					    </div>
					  </div>
					</div>
				@endforeach
			</div>
			<div class="mt-5">
				{{ $productos->links() }}
			</div>
		</div>
	</div>
</div>


@endsection