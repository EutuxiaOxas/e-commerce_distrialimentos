@extends('cms.layout.main')
@section('title')
    Tienda virtual
@endsection

@section('content')
<div class="d-flex justify-content-center col-12 mt-5">
	<div class="mr-5">
		<a class="btn btn-outline-success" href="{{route('tienda.category.home')}}">Categorias</a>
	</div>
	<div>
		<a class="btn btn-outline-success" href="{{route('tienda.product.home')}}">Productos</a>
	</div>
</div>
@endsection