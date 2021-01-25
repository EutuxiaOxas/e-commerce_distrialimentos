@extends('layouts.main')

@php

if(isset($_GET['message'])){
    $mensaje = $_GET['message'];
    $msg = explode("-", $mensaje);
    $msg = ucfirst(implode(" ", $msg));
}


@endphp


@section('content')

@include('common.header.nav_header_mobile')

<div class="login__container">
    <h1 class="login__container-title">Hola, bienvenido</h1>
    <p class="login__container-subtitle">Para continuar, por favor ingresa tus datos</p>
    <form action="{{ route('login') }}" method="POST" class="login__form">
        @csrf
        <div class="login__inputContainer">
            <input type="email" class="login__inputContainer-input" name="email" id="email" placeholder="Correo" autocomplete="off">
        </div>

        <div class="login__inputContainer last">
            <input id="password" type="password" class="login__inputContainer-input" name="password" placeholder="Contraseña">
        </div>

        <div class="login__submitContainer">
            <button class="login__submitContainer-submit" type="submit">Iniciar sesión</button>
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
        <a href="#" class="login__actionContainer-option">¿Olvidaste tu contraseña?</a>
        <a href="#" class="login__actionContainer-option">Quiero crear una cuenta</a>
    </div>

</div>

<!-- <div class="container my-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{--@if(isset($mensaje))
                        {{$msg}}
                    @else
                        Iniciar Sesión
                    @endif --}}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                <a href="#"><small class="inactive" id="password_change">Ver Contraseña</small>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Recordarme') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Iniciar sesión') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('¿Olvidaste tu contraseña?') }}
                                    </a>
                                @endif
                                <hr>
                                <a href="{{route('google.login')}}" class="btn btn-outline-primary">Iniciar sesion con google</a>
                                <hr>
                                <h5>¿No tienes cuenta? Registrate aquí</h5>
                                <a href="/register" class="btn btn-outline-info">Registrarse</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    let passInput = document.getElementById('password');
    let change = document.getElementById('password_change');

    change.addEventListener('click', (e) => {
        let elemento = e.target

        if(elemento.classList.contains('inactive'))
        {
            elemento.classList.remove('inactive')
            elemento.classList.add('active')

            passInput.type = "text"
            elemento.textContent = 'Ocultar contraseña';


        } else if(elemento.classList.contains('active')){
            elemento.classList.remove('active')
            elemento.classList.add('inactive')

            passInput.type = "password"

            elemento.textContent = 'Ver contraseña';
        }
    });
</script> -->
@endsection
