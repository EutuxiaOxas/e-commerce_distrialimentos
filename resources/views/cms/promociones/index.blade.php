@extends('cms.layout.main')
@section('title')
    Promociones
@endsection

@section('content')
<div class="d-flex justify-content-between">
    <h2>Promociones</h2>
    <div>
        <a class="btn btn-outline-primary" href="{{route('promociones.create')}}">Crear Promocion</a>
    </div>
</div>
<hr>
<section class="container-fluid">
    @if(session('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
        </div>
    @endif
    <div class="table-responsive">
      <table class="table table-striped table-sm" id="table1">
        <thead>
          <tr>
          	<th>#</th>
            <th>Imagen</th>
          	<th>Nombre</th>
          	<th>Orden</th>
          	<th>URL</th>
          	<th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach($promotions as $promotion)
          <tr>
            <td>{{$promotion->id}}</td>
            <td>
                <img src="{{asset('storage/'. $promotion->image)}}" width="30">
            </td>
            <td>{{$promotion->name}}</td>
            <td>{{$promotion->order}}</td>
            <td>{{$promotion->url}}</td>
            <td>
            	<a href="{{route('promociones.show', $promotion->id)}}" class="btn btn-sm btn-outline-primary">Editar</a>
            	<button type="button" id="{{$promotion->id}}" data-toggle="modal" data-target="#modalEliminar" class="btn btn-sm btn-outline-danger eliminar_promocion">Eliminar</button>	
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
</section>

<div class="modal fade" id="modalEliminar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Promocion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" id="eliminar_form" method="POST">
                    @csrf
                </form>
                <p id="modal_message"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" id="eliminar_submit" class="btn btn-danger">Eliminar producto</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
	function modalEliminar(id, text)
	{
	    let formEliminar = document.getElementById('eliminar_form'),
	        message = document.getElementById('modal_message');

	    formEliminar.action = `/cms/promociones/eliminar/${id}`;
	    message.innerHTML = `
	        Promoción: <strong>${text}</strong> </br>
	        ¿Seguro que desea eliminar esta promoción?
	    `
	}

	let eliminarButtons = document.querySelectorAll('.eliminar_promocion');
	let eliminarSubmit = document.getElementById('eliminar_submit');

	eliminarSubmit.addEventListener('click', () => {
        let formEliminar = document.getElementById('eliminar_form')

        formEliminar.submit();
    }); 
	
	if(eliminarButtons)
	{
	    eliminarButtons.forEach(button => {
	        button.addEventListener('click', (e) => {
	            let id = e.target.id,
	                message = e.target.parentNode.parentNode.children[2].textContent;
	            
	            modalEliminar(id, message)
	        });
	    });
	}


</script>

@endsection
