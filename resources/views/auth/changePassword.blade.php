@extends('layouts.main')



@section('content')

@include('common.header.nav_header_mobile')

<div class="login__viewBody">
    <div class="login__container">
        @if (session('message'))
            <div class="alert alert-success" role="alert">
                {{ session('message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div id="alertContainer">
            
        </div>
        <h1 class="login__container-title">Modificar contraseña</h1>
        <p class="login__container-subtitle">Para continuar, por favor ingresa los datos</p>
        
        <form action="{{route('change.password')}}" method="POST" id="formChangePassword" class="login__form">
            @csrf
            <div class="login__inputContainer">
                <input type="password" class="login__inputContainer-input" name="password" required id="password" placeholder="Contraseña actual" autocomplete="off">
            </div>
    
            <div class="login__inputContainer">
                <input id="new_password" type="password" class="login__inputContainer-input" required name="new_password" placeholder="Nueva contraseña">
            </div>

            <div class="login__inputContainer last">
                <input id="confirm_new_password" type="password" class="login__inputContainer-input" name="confirm_password" required placeholder="Confirmar nueva contraseña">
            </div>
            
            <div class="login__inputContainer last">
                <p class="login__inputContainer-message">Al modificar, confirma que ha leído y aceptado nuestras Condiciones del Servicio y nuestra Política de Privacidad.</p>
            </div>

            <div class="login__submitContainer">
                <button class="login__submitContainer-submit" type="submit">Modificar contraseña</button>
            </div>
        </form>
    
    </div>
</div>

<script>
    function validacionPasswords(newPass, confirmPass) {
        const containerAlert = document.getElementById('alertContainer')
        const template = `
            <div class="alert alert-danger" style="" role="alert">
                <span id="alertContent">Las contraseñas deben coincidir</span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        `

        if(newPass.value !== confirmPass.value) {
            newPass.value = ''
            confirmPass.value = ''
            containerAlert.innerHTML = template;
            return false
        }

        return true;
        
        
    }

    function changePassWord() {
        const formulario = document.getElementById('formChangePassword');

        formulario.addEventListener('submit', (e) => {
            e.preventDefault();
            const [, , newPassword, confirmNewPassword] = e.target


            if(validacionPasswords(newPassword, confirmNewPassword)) {
                e.target.submit();
            }
        })
    }

    changePassWord()
</script>

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
