@extends('layouts.main')

@section('content')

<div class="login__container">
    <h1 class="login__container-title">Crear cuenta</h1>
    <p class="login__container-subtitle">Para continuar, por favor ingresa los datos</p>
    <form action="{{ route('register') }}" method="POST" class="login__form">
        @csrf

        <div class="login__inputContainer">
            <input type="text" class="login__inputContainer-input" name="name" id="name" placeholder="Nombre y Apellido" autocomplete="off">
        </div>

        <div class="login__inputContainer">
            <input type="email" class="login__inputContainer-input" name="email" id="email" placeholder="Correo" autocomplete="off">
        </div>

        <div class="login__inputContainer">
            <input id="password" type="password" class="login__inputContainer-input" name="password" placeholder="Contraseña">
        </div>

        <div class="login__inputContainer last">
            <input id="password_confirmation" type="password" class="login__inputContainer-input" name="password_confirmation" placeholder="Confirmar contraseña">
        </div>

        <div class="register__messageContainer">
            <p class="register__messageContainer-message">Al registrarse, confirma que ha leído y aceptado nuestras Condiciones del Servicio y nuestra Política de Privacidad.</p>
        </div>

        <div class="login__submitContainer">
            <button class="login__submitContainer-submit" type="submit">Registrarse</button>
        </div>
    </form>
    
    <div class="login__separadorContainer">
        <p class="login__separadorContainer-item">O</p>
    </div>

    <div class="login__googleContainer">
        <a href="{{route('google.login')}}" class="login__googleContainer-button">
            iniciar con Gmail
            <spans class="login__googleContainer-icon">
                <img src="{{asset('icons/login-google-icon.png')}}" alt="">
            </span>
        </a>
    </div>

    <hr class="login__separador">

    <div class="login__actionContainer">
        <a href="/login" class="login__actionContainer-option">¿Ya tienes una cuenta? Inicia sesión</a>
    </div>

</div>

{{-- <!-- <div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-3">
            <div class="card">
                <!-- <div class="card-header">{{ __('Registrarse') }}</div> -->

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                       <div class="row">
                           <div class="form-group mb-4 col-md-6">
                              <!--  <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label> -->

                               <div class="col-md-12">
                                   <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nombre">

                                   @error('name')
                                       <span class="invalid-feedback" role="alert">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                   @enderror
                               </div>
                           </div>

                           <div class="form-group col-md-6">
                               <!-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Apellido') }}</label> -->

                               <div class="col-md-12">
                                   <input id="apellido" type="text" class="form-control @error('apellido') is-invalid @enderror" name="apellido" value="{{ old('apellido') }}" required autocomplete="email" placeholder="Apellido">

                                   @error('apellido')
                                       <span class="invalid-feedback" role="alert">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                   @enderror
                               </div>
                           </div>

                           <div class="form-group mb-4 col-md-6">
                               <!-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo') }}</label> -->

                               <div class="col-md-12">
                                   <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                                   @error('email')
                                       <span class="invalid-feedback" role="alert">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                   @enderror
                               </div>
                           </div>

                           <div class="form-group col-md-6">
                               <!-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Telefono') }}</label> -->

                               <div class="col-md-12">
                                   <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="off" placeholder="Telefono">

                                   @error('phone')
                                       <span class="invalid-feedback" role="alert">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                   @enderror
                               </div>
                           </div>

                           <div class="form-group col-md-6">
                               <!-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label> -->

                               <div class="col-md-12">
                                   <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Contraseña">
                                   <a href="#"><small class="inactive pass_watcher">Ver contraseña</small></a>
                                   @error('password')
                                       <span class="invalid-feedback" role="alert">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                   @enderror
                               </div>
                           </div>

                           <div class="form-group col-md-6">
                              <!--  <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Contraseña') }}</label> -->

                               <div class="col-md-12">
                                   <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmar contraseña">
                                   <a href="#"><small class="inactive pass_watcher">Ver contraseña</small></a>
                               </div>
                           </div>
                       </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <div class="d-flex ">
                                    <button type="submit" class="btn btn-primary mb-2 mr-3">
                                        {{ __('Registrarse') }}
                                    </button>
                                    <div>
                                        <a href="{{route('google.login')}}" class="btn btn-outline-primary">Registrarse con google</a>
                                    </div>
                                </div>
                                <hr>
                                <h5>¿Ya tienes una cuenta? Inicia sesión aquí</h4>
                                <hr>
                                <a href="/login" class="btn btn-outline-info">Iniciar sesión</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --> --}}
<!-- 
<script type="text/javascript">
    let passChange = document.querySelectorAll('.pass_watcher');

    passChange.forEach(button => {
        button.addEventListener('click', (e) => {
            e.preventDefault();
            let inputPass = e.target.parentNode.parentNode.children[0];
            let accion = e.target;


            if(accion.classList.contains('inactive'))
            {
                inputPass.type = "text"
                accion.classList.remove('inactive')
                accion.classList.add('active')

                accion.textContent = 'Ocultar contraseña';
            } else if(accion.classList.contains('active')) {
                inputPass.type = "password"
                accion.classList.remove('active')
                accion.classList.add('inactive')

                accion.textContent = 'Ver contraseña';
            }
        });
    });
</script> -->

@endsection
