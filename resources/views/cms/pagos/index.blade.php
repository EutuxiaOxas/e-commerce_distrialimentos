@extends('cms.layout.main')
@section('title')
    Pagos Realizados
@endsection

@section('content')
<div class="d-flex justify-content-between">
    <h2>Pagos realizados</h2>
</div>
<hr>
<section class="container-fluid">
    @if(session('message'))
        <div class="alert alert-success" role="alert">
            {{ session('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
        </div>
    @endif

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
            <th>Número Orden</th>
            <th>Monto</th>
            <th>Banco emisor</th>
            <th>Banco receptor</th>
            <th>Rerefencia</th>
            <th>Titular de cuenta</th>
            <th>Identidad titular</th>
            <th>fecha</th>
          </tr>
        </thead>
        <tbody>
          @foreach($pagos as $pago)
          <tr>
            <td>{{$pago->id}}</td>
            <td>{{$pago->user->name}}</td>
            <td>{{$pago->orden_id}}</td>
            <td>{{$pago->monto}} $</td>
            <td>{{$pago->emisor->title}}</td>
            <td>{{$pago->receptor->title}}</td>
            <td>{{$pago->referencia}}</td>
            <td>{{$pago->titular_cuenta}}</td>
            <td>{{$pago->documento_identidad_titular}}</td>
            <td>{{$pago->fecha}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
</section>

<div class="modal fade" id="modalCrearBanco" tabindex="-1" aria-labelledby="modalCrearBanco" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCrearBanco">Agregar Banco</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{route('bank.store')}}" id="form_agregarBanco">
                  @csrf
                  <div class="form-group">
                    <h5>Titulo del banco</h5>
                    <input class="form-control" type="text" maxlength="191" required name="title">
                  </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" id="agregar_banco_submit" class="btn btn-primary">Agregar banco</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalEditarBanco" tabindex="-1" aria-labelledby="modalEditarBanco" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEditarBanco">Editar Banco</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="" id="form_editarBanco">
                  @csrf
                  <div class="form-group">
                    <h5>Titulo del banco</h5>
                    <input id="editar_banco" class="form-control" type="text" maxlength="191" required name="title">
                  </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" id="editar_banco_submit" class="btn btn-primary">Agregar banco</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
  const agregar_banco = document.getElementById('agregar_banco_submit'),
        editar_banco = document.getElementById('editar_banco_submit'),
        editarButtons = document.querySelectorAll('.editar_banco'),
        form_agregar = document.getElementById('form_agregarBanco');

  agregar_banco.addEventListener('click', () => {
    form_agregar.submit();
  })

  editar_banco.addEventListener('click', () => {
    let form = document.getElementById('form_editarBanco')

    form.submit();
  })

  if(editarButtons){
    editarButtons.forEach(button => {
      button.addEventListener('click', e => {
        let id = e.target.id
        getBank(id);
      })
    });
  }


  function getBank(id){
    axios.get(`/cms/get/bank/${id}`)
      .then(res => {
        editModal(res.data)
      })
  }

  function editModal(data){
    let form = document.getElementById('form_editarBanco'),
        input = document.getElementById('editar_banco');

    input.value = data.title
    form.action = `/cms/update/banco/${data.id}`
  }
</script>

@endsection