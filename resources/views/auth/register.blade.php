@extends('layouts.main')

@section('content')
@include('common.header.nav_header_mobile')

<div class="login__viewBody">
    <div class="login__container">
        <h1 class="login__container-title">Crear cuenta</h1>
        <p class="login__container-subtitle">Para continuar, por favor ingresa los datos</p>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="alert alert-danger" style="display: none;" id="alertContainer">

        </div>

        <form action="{{ route('register') }}" id="register_form" method="POST" class="login__form">
            @csrf
    
            <div class="login__inputContainer">
                <input type="text" class="login__inputContainer-input" name="name"  value="{{ old('name') }}" required id="name" placeholder="Nombre y Apellido" autocomplete="off">
            </div>
    
            <div class="login__inputContainer">
                <input type="email" class="login__inputContainer-input" name="email" value="{{ old('email') }}" required id="email" placeholder="Correo" autocomplete="off">
            </div>
    
            <div class="login__inputContainer">
                <input id="password" type="password" class="login__inputContainer-input" required name="password" placeholder="Contraseña">
            </div>
    
            <div class="login__inputContainer last">
                <input id="password_confirmation" type="password" class="login__inputContainer-input" required name="password_confirmation" placeholder="Confirmar contraseña">
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
                Iniciar con Gmail
                <span class="login__googleContainer-icon">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.64 9.20456C17.64 8.56637 17.5827 7.95274 17.4764 7.36365H9V10.845H13.8436C13.635 11.97 13.0009 12.9232 12.0477 13.5614V15.8196H14.9564C16.6582 14.2527 17.64 11.9455 17.64 9.20456Z" fill="#4285F4"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9 18C11.43 18 13.4673 17.1941 14.9564 15.8196L12.0477 13.5614C11.2418 14.1014 10.2109 14.4205 9 14.4205C6.65591 14.4205 4.67182 12.8373 3.96409 10.71H0.957275V13.0418C2.43818 15.9832 5.48182 18 9 18Z" fill="#34A853"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.96409 10.71C3.78409 10.17 3.68182 9.59319 3.68182 9.00001C3.68182 8.40683 3.78409 7.83001 3.96409 7.29001V4.95819H0.957273C0.347727 6.17319 0 7.54774 0 9.00001C0 10.4523 0.347727 11.8268 0.957273 13.0418L3.96409 10.71Z" fill="#FBBC05"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9 3.57955C10.3214 3.57955 11.5077 4.03364 12.4405 4.92545L15.0218 2.34409C13.4632 0.891818 11.4259 0 9 0C5.48182 0 2.43818 2.01682 0.957275 4.95818L3.96409 7.29C4.67182 5.16273 6.65591 3.57955 9 3.57955Z" fill="#EA4335"/>
                        </svg>
                        
                </span>
            </a>
        </div>
    
        <hr class="login__separador">
    
        <div class="login__actionContainer register">
            <a href="/login" class="login__actionContainer-option">¿Ya tienes una cuenta? Inicia sesión</a>
        </div>
    
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

<script>
    function verifyPasswords(){
       const password = document.getElementById('password');
       const passwordConfirmation = document.getElementById('password_confirmation');
       const alertContainer = document.getElementById('alertContainer');

       if(password.value === passwordConfirmation.value) {
           return true;
       }

       alertContainer.innerHTML = `
        <ul>
            <li>Las contraseñas no coinciden</li>
        </ul>
       `

       alertContainer.style.display = 'block'

       return false;

    }

    const formulario = document.getElementById('register_form');


    formulario.addEventListener('submit', (e) =>{ 
        e.preventDefault();

        if(!verifyPasswords()) {
            return ;
        }

        formulario.submit();
    })
</script>





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
