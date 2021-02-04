@extends('cms.layout.main')
@section('title')
    Admin - Banners
@endsection


@section('content')
        <section>
            <h3>Configuración de Banners</h3>
            <hr>
        </section>
        <div class="alert alert-danger" style="display: none;" id="error_container">
        </div>
        @if (session('error'))
            <div class="alert alert-danger my-4" role="alert">
                {{ session('error') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
            </div>
        @endif
        @if (session('message'))
            <div class="alert alert-success my-4" role="alert">
                {{ session('message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
            </div>
        @endif
      
        <section>
            <div class="my-3 d-flex justify-content-between">
                <h6>Listado de Banners</h6>

                <div>
                    <a class="btn btn-outline-primary btn-sm px-4" href="{{ route('banners.create') }}">Nuevo Banner</a>
                </div>
			</div>

            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                        <tr class="text-center">
                            <th width='20%'>Imagen</th>
                            <th width='20%'>Tipo</th>
                            <th width='20%'>Estatus</th>
                            <th width='40%'>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($banners as $banner)
                            <tr class="text-center">
                                {{-- <td>{{ $banner->id }}</td> --}}
                                <td width='20%'>
                                    <img src="{{ asset('storage/' . $banner->image) }}" width="50">
                                </td>
                                <td width='20%'>{{ $banner->tipo}}</td>
                                <td width='20%'>{{ $banner->status }}</td>
                                <td  width='40%'>
                                    <a href="{{ route('banners.show', $banner->id) }}"
                                        class="btn btn-outline-success btn-sm mr-1">Editar</a>
                                    @if ($banner->status == 1)
                                        <a href="{{ route('banners.desactive', $banner->id) }}"
                                            class="btn btn-outline-success btn-sm mr-1">Ocultar</a>
                                    @elseif($banner->status == 0)
                                        <a href="{{ route('banners.active', $banner->id) }}"
                                            class="btn btn-outline-info btn-sm mr-1">Mostrar</a>
                                    @endif
                                    <button type="button" id="{{ $banner->id }}" class="btn btn-outline-danger btn-sm eliminar"
                                        data-toggle="modal" data-target="#modalEliminar">Eliminar</button>
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
                        <h5 class="modal-title" id="exampleModalLabel">Eliminar Banner</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" id="eliminar_form" method="POST">
                            @csrf
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" id="eliminar_submit" class="btn btn-danger">Eliminar Banner</button>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript">
            let eliminarButtons = document.querySelectorAll('.eliminar');
            let deleteSubmit = document.getElementById('eliminar_submit');
            let inputFile = document.querySelectorAll('.image_file');
            let image = document.getElementById('logo_image');

            let guardarSubmit = document.getElementById('guardar_submit'),
                errors = document.getElementById('error_container'),
                logoFile = document.getElementById('file_image'),
                formImage = document.getElementById('form_logo');


            guardarSubmit.addEventListener('click', () => {

                let alerts = [];

                errors.innerHTML = ''
                errors.style.display = 'none'


                if (logoFile.files.length <= 0) {
                    alerts.push('Debes cargar un logo');
                }

                if (alerts.length > 0) {
                    let alertsMain = document.createElement('ul')

                    alerts.forEach(alert => {
                        alertsMain.innerHTML += `
                      <li>${alert}</li>

                     `
                    });


                    errors.appendChild(alertsMain);
                    errors.style.display = 'block';

                } else {
                    formImage.submit();
                }


            });

            //borrar banner
            deleteSubmit.addEventListener('click', (e) => {
                let form = document.getElementById('eliminar_form');

                form.submit();
            });

            //cargar logo
            inputFile.forEach(input => {
                input.onchange = function(e) {

                    let reader = new FileReader();
                    reader.readAsDataURL(e.target.files[0]);

                    reader.onload = function() {
                        image.src = reader.result;
                    }

                }
            });

            //modal eliminar
            if (eliminarButtons) {
                eliminarButtons.forEach(buttons => {
                    buttons.addEventListener('click', (e) => {
                        let id = e.target.id
                        modalEliminar(id)
                    });
                });
            }

            function modalEliminar(id) {
                let formEliminar = document.getElementById('eliminar_form');
                formEliminar.action = `/cms/eliminar/banner/${id}`;
            }

        </script>
    @endsection
