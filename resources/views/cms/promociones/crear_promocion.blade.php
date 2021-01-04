@extends('cms.layout.main')
@section('title')
   Crear Promocion
@endsection


@section('content')
<div class="d-flex justify-content-between mt-4 mb-3">
	<h1 class="">Crear Promocion</h1>
	<div>
		<a class="btn btn-outline-primary" href="{{route('promociones.home')}}">Volver</a>
	</div>
</div>

@if (session('message'))
    <div class="alert alert-success" role="alert">
        {{ session('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
    </div>
@endif

<form action="{{route('promociones.store')}}" method="POST" enctype="multipart/form-data">
	@csrf

	<div class="form-group">
		<h5>Nombre</h5>
		<input class="form-control" type="text" maxlength="191" required name="name">
	</div>

	<div class="form-group">
		<h5>Orden</h5>
		<input class="form-control" type="text" maxlength="191" required name="order">
	</div>

	<div class="form-group">
		<h5>URL</h5>
		<input class="form-control" type="text" maxlength="191" required name="url">
	</div>

	<div class="form-group">
		<h5>Imagen</h5>
		<input type="file" required name="image">
	</div>

	<input type="submit" class="btn btn-primary" value="Agregar promocion">
</form>

@endsection