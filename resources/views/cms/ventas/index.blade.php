@extends('cms.layout.main')
@section('title')
    Ventas
@endsection

@section('content')
<div class="d-flex justify-content-between">
    <h2>Ordenes realizadas</h2>
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
      <table class="table table-striped table-sm">
        <thead>
          <tr>
          	<th>#</th>
          	<th>Usuario</th>
          	<th>Estatus</th>
            <th>Fecha</th>
          	<th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach($orders as $orden)
          <tr>
            <td>{{$orden->id}}</td>
            <td>{{$orden->user->name}}</td>
            <td>{{$orden->status}}</td>
            <td>{{$orden->created_at}}</td>
            <td>
            	<button class="btn btn-sm btn-primary">Ver detalles</button>
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
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Producto</h5>
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



@endsection