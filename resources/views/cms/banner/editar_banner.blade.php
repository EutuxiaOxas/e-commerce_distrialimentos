@extends('cms.layout.main')
@section('title')
    Editar Banner
@endsection


@section('content')
    <style type="text/css">
        .banner_container {
            position: relative;
            width: 100%;
            height: 70vh;
            background-color: black;
        }

        .banner_imagen {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .inputs {
            position: absolute;
            top: 0;
            width: 100%;
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .button_select {
            position: relative;
            left: 100%;
            transform: translateX(-100%);
            cursor: pointer;
        }

        .input_file {
            position: absolute;
            top: 0;
            right: 0;
            opacity: 0;
            height: 50px;
            cursor: pointer;
        }

        .inputs_body {

            display: flex;
            flex: 1;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }


        .options_buttons {
            width: 50%;
            margin: 0 auto;
        }

        .inputs_body textarea {
            background-color: inherit;
            border: 0px;
            text-align: center;
            color: white;
			resize: none;
        }

        .inputs_body textarea:focus {
            background-color: rgba(1, 1, 1, 0.2);
            outline: none;
        }

        .inputs_body input {
            background-color: inherit;
            border: 0px;
            font-size: 1.8rem;
            text-align: center;
            color: white;
        }

        .inputs_body input:hover,
        .inputs_body textarea:hover {
            cursor: pointer;
        }

        .inputs_body input:focus {
            background-color: rgba(1, 1, 1, 0.2);
            outline: none;
        }

        .inputs_body input::-webkit-input-placeholder,
		.inputs_body textarea::-webkit-input-placeholder {
            /* WebKit, Blink, Edge */
            color: #eee;
        }

        .inputs_body input:-moz-placeholder,
		.inputs_body textarea:-moz-placeholder {
            /* Mozilla Firefox 4 to 18 */
            color: #eee;
            ;
        }

        .inputs_body input::-moz-placeholder,
		.inputs_body textarea::-moz-placeholder {
            /* Mozilla Firefox 19+ */
            color: #eee;
        }

        .inputs_body input:-ms-input-placeholder,
		.inputs_body textarea:-ms-input-placeholder {
            /* Internet Explorer 10-11 */
            color: #eee;
        }

    </style>

    <div class="alert alert-danger" style="display: none;" id="errors_main">
    </div>
    @if (session('message'))
        <div class="alert alert-success my-4" role="alert">
            {{ session('message') }}
        </div>
    @endif
    <h3>Editar Banner</h3>
    <section class="my-3" id="container">
        <div class="banner_container">
            <img class="banner_imagen" id="image_fondo" src="{{ asset('storage/' . $banner->image) }}">
            <form action="{{ route('banners.update', $banner->id) }}" class="inputs" id="form" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="d-flex">
                    <button type="button" class="btn btn-success button_select px-3">
                        Agregar Imagen
                    </button>
                </div>
                <input type="file" id="file" name="image" class="input_file">
                <div class="inputs_body">
                    <input class="mb-2" style="width: 50%;" id="i_title" type="text" class="mb-5" name="title"
                        placeholder="Ingresa aquí el titulo" value="{{ $banner->title }}">
                    <textarea name="description" style="width: 50%;" id="i_description"
                        placeholder="Ingresa aquí la descripción" rows="3">{{ $banner->description }}</textarea>
                </div>
            </form>
        </div>

        <div class="d-flex justify-content-center my-3 ">
            <button type="button" id="button_submit" class="btn btn-success mr-5 px-5">Actualizar</button>
            <a href="{{ route('banners.home') }}" class="btn btn-outline-danger">Cancelar</a>
        </div>
    </section>


    <script type="text/javascript">
        let title = document.getElementById('i_title'),
            description = document.getElementById('i_description'),
            submit = document.getElementById('button_submit'),
            image = document.getElementById('image_fondo'),
            inputFile = document.querySelectorAll('.input_file'),
            form = document.getElementById('form'),
            file = document.getElementById('file'),
            container = document.getElementById('container');

        inputFile.forEach(input => {
            input.onchange = function(e) {

                let reader = new FileReader();
                reader.readAsDataURL(e.target.files[0]);

                reader.onload = function() {
                    image.src = reader.result;
                }

            }
        });


        submit.addEventListener('click', (e) => {

            let errors = []
            let container_errors = document.getElementById('errors_main');

            container_errors.innerHTML = '';
            container_errors.style.display = 'none';

            if (title.value === '') {
                errors.push('Debes agregar un titulo');
            }

            if (description.value === '') {
                errors.push('Debes agregar una descripción');
            }


            if (errors.length > 0) {
                let alerta_main = document.createElement('ul')

                errors.forEach(error => {
                    alerta_main.innerHTML += `
          <li> ${error} </li>
         `
                });

                container_errors.appendChild(alerta_main)
                container_errors.style.display = 'block';
            } else {
                form.submit();
            }
        });

    </script>
@endsection
