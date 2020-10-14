@extends('layouts.app')

@section('title')
    Perfil | {{$user->name}}
@endsection

@section('content')
<div class="container mt-5">
    @if(session('message'))
        <div class="alert alert-success" role="alert">
            {{ session('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
        </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-5">
                <div class="card-header">{{ __('Perfil') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Has iniciado sesión') }}
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ordenes realizadas</div>
                <div class="card-body ">
                     @foreach($ordenes as $orden)
                        @if($orden->status != 'CANCELADO')
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <div>
                                    <strong>Orden: #{{$orden->id}} | Estatus: {{$orden->status}} | Total: {{$orden->total_amount}} $ | Hace: {{$orden->created_at->diffForHumans()}}</strong>
                                </div>
                                <div>
                                    <button id="{{$orden->id}}" data-toggle="modal" data-target="#modalDetalle" class=" btn btn-sm btn-primary orden-detalle">Detalles</button> 
                                    <button id="{{$orden->id}}" data-toggle="modal" data-target="#modalInfoEnvios" class="btn btn-sm btn-outline-primary orden-envio-info">
                                      Datos de envio
                                    </button>
                                </div>
                            </div>
                        @endif
                     @endforeach
                </div>
                {{ $ordenes->links() }}
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalInfoEnvios" tabindex="-1" aria-labelledby="modalInfoEnvios" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalInfoEnvios">Detalles de envio</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h3 id="detalle_envio_id" class="mb-3"></h3>
                    <div id="modal_info_container">
                      
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalDetalle" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detalles de orden</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h3 id="detalle_id" class="mb-3"></h3>
                <div class="table-responsive">
                  <table class="table table-striped table-sm">
                    <thead>
                      <tr>
                        <th>Imagen</th>
                        <th>Titulo</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                      </tr>
                    </thead>
                    <tbody id="modal_container">
                    </tbody>
                  </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>




<script type="text/javascript">
    let ordenDetails = document.querySelectorAll('.orden-detalle'),
        ordenEnvios = document.querySelectorAll('.orden-envio-info');

    if(ordenDetails){
        ordenDetails.forEach(detalle => {
            detalle.addEventListener('click', e => {
                let id = e.target.id
                getOrdenDetail(id)
            });
        });
    }

    if(ordenEnvios){
      ordenEnvios.forEach(button => {
        button.addEventListener('click', e => {
          let id = e.target.id;
          getOrdenInfo(id)
        })
      })
    }

    function getOrdenDetail(id){
        axios.get(`/order/Detail/${id}`)
            .then(res => {
                modalInfo(res.data, id);
            })
    }


    function modalInfo(detalles, orden){
        let orderId = document.getElementById('detalle_id'),
            container = document.getElementById('modal_container');

        container.innerHTML = ''
        orderId.textContent = `Orden: #${orden}`;

        detalles.forEach(detalle => {
            container.innerHTML += `
                <tr>
                  <td>
                      <img src="/storage/${detalle.img}" width="40">
                  </td>
                  <td>${detalle.title}</td>
                  <td>${detalle.cantidad}</td>
                  <td>${detalle.price}</td>
                </tr>
            `
        });
    }


    function modalEnvioInfo(info, orden){
      let container = document.getElementById('modal_info_container'),
          ordenId = document.getElementById('detalle_envio_id');

      container.innerHTML = '';

      if(Object.entries(info).length > 0){
        ordenId.innerHTML = `Información de envio, Orden: #${info.orden_id}`

        container.innerHTML += `
            <div>Identidad: <strong>${info.documento_de_identidad}</strong></div>
            <div>Dirección 1: <strong>${info.direccion_1}</strong> </div>
            <div>Dirección 2: <strong>${info.direccion_2}</strong> </div>
            <div>Telefono: <strong>${info.telefono}</strong> </div>
            <div>Código postal: <strong>${info.codigo_postal}</strong> </div>
        `
      }else {
        ordenId.innerHTML = 'No has agregado ninguna Información de envio, por favor agrega esta informacion'
        container.innerHTML = `
            <a href="#"id="agregar_datos_envio" class="btn btn-primary" >Agregar datos de envio</a>
        `
        document.getElementById('agregar_datos_envio').addEventListener('click', e => {
            
            modalFormularioDatosEnvio(container,orden)
        })
      }
    }


    function modalFormularioDatosEnvio(container, orden_id){
        container.innerHTML = `
            <form>
                <div class="form-group row">
                    <label for="name" class="col-md-5 col-form-label text-md-right">{{ __('Documento de identidad') }}</label>

                    <div class="col-md-6">
                        <input id="documento_de_identidad" type="text" class="form-control @error('documento_de_identidad') is-invalid @enderror" name="documento_de_identidad" value="{{ old('documento_de_identidad') }}" required autofocus>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="direccion_1" class="col-md-5 col-form-label text-md-right">{{ __('dirección 1') }}</label>

                    <div class="col-md-6">
                        <input id="direccion_1" type="text" class="form-control @error('apellido') is-invalid @enderror" name="direccion_1" value="{{ old('direccion_1') }}" required >
                    </div>
                </div>

                <div class="form-group row">
                    <label for="direccion_2" class="col-md-5 col-form-label text-md-right">{{ __('dirección 2') }}</label>

                    <div class="col-md-6">
                        <input id="direccion_2" type="text" class="form-control @error('email') is-invalid @enderror" name="direccion_2" value="{{ old('direccion_2') }}" required >
                    </div>
                </div>

                <div class="form-group row">
                    <label for="telefono" class="col-md-5 col-form-label text-md-right">{{ __('Telefono') }}</label>

                    <div class="col-md-6">
                        <input id="telefono" type="text" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{ old('telefono') }}" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="codigo_postal" class="col-md-5 col-form-label text-md-right">{{ __('Código_postal') }}</label>

                    <div class="col-md-6">
                        <input id="codigo_postal" type="text" class="form-control @error('codigo_postal') is-invalid @enderror" name="codigo_postal" required>
                    </div>
                </div>
                <div class="col-md-6 offset-md-4">
                    <button type="submit" id="edit_datos_envio" class="btn btn-primary">
                        {{ __('Agregar datos de envio') }}
                    </button>
                </div>
            </form>
        `;

        document.getElementById('edit_datos_envio').addEventListener('click', e => {
            e.preventDefault();
            let documentoIdentidad = document.getElementById('documento_de_identidad'),
                direccion_1 = document.getElementById('direccion_1'),
                direccion_2 = document.getElementById('direccion_2'),
                telefono = document.getElementById('telefono'),
                codigo_postal = document.getElementById('codigo_postal');

            agregarDatosDeEnvio(documentoIdentidad.value, direccion_1.value, direccion_2.value, telefono.value, codigo_postal.value, orden_id)
        })
    }


    function getOrdenInfo(id){
      axios.get(`/get/shiping-info/${id}`)
        .then(res => {
          modalEnvioInfo(res.data, id)
        })
    }

    function agregarDatosDeEnvio(d_identidad, dir_1, dir_2, tlfn, c_postal, orden_id){
        axios.post('/guardar/shiping-data', {
            documento_de_identidad: d_identidad,
            direccion_1: dir_1,
            direccion_2: dir_2,
            telefono: tlfn,
            codigo_postal: c_postal,
            orden_id: orden_id
        })
        .then(res => {
            if(res.status === 204){
                getOrdenInfo(orden_id);
            }
        })
    }
</script>

@endsection
