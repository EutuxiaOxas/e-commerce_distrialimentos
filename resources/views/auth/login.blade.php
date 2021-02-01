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

<div class="login__viewBody">
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
            <a href="/register" class="login__actionContainer-option">Quiero crear una cuenta</a>
        </div>
    
    </div>
</div>

<!-- <script type="text/javascript">
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
</script>  -->
@endsection
