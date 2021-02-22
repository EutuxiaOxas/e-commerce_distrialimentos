@extends('layouts.main')

@section('title')
    Formulario
@endsection


@section('content')
 
<style>

  .formularios__btn-right {
      border-top-right-radius: 45px;
      border-bottom-right-radius: 45px;
      border-bottom-left-radius: 100px;
      font-weight:bold;
      height: 2.52rem;
      font-size: 1rem;
    }
    .formularios__btn-left { 
      border-top-right-radius: 100px;
      border-top-left-radius: 45px;
      border-bottom-left-radius: 45px;
      background-color: #dad8d8;
      color: #dad8d8;
      font-weight:bold;
      height: 2.52rem;
      font-size: 1rem;
    }
    
    .formularios__padding-btnCarrito {
      padding: 5px 1.8rem;
    }

    .formularios__btnNumber {
      height: 35px;
      width: 35px;
      border-radius: 50%;
      border:none;
    }
    .formularios__iconUser {
      height: 80px;
      width: 80px;
      box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
      border-radius: 50%;
      background: #e6e5e5;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .formularios__btn-Precio{
      display:flex;
      padding: 0;
      align-items:center;
      color:white;
      font-weight:bold;
    }

    .formularios__inputBorders {
      border-bottom: 1px solid #FD6721;
      padding: 1.5rem 0.25rem 0.25rem;
    }

    .formularios__inputBorders:focus {
      outline:none;
    }

    .formularios__containerBtn-Precio {
      display:flex;
      justify-content: center;
      margin-bottom:0.25rem;
      padding-right: 0;
    }
    
    .bg-blue {
      background-color: #02528A;
    }
    .texto-small {
      font-size: 90%;
    }
    .show {
      display: block;
    }
    .hide {
      display: none;
    }
    .info-container {
      background:white;
    }
    
    .formulario__modalBtn 
    {
      padding:0.6rem;
    }
    .formularios__sectionColor {
      height: 100vh;
      background-color: #F5F5F5;
    }
    @media(max-width:767px)
    {
      .formularios__numberWidth {
        position: relative;
        width: 100%;
        padding-left: 15px;
        flex: 0 0 14.666667%;
        max-width: 14.666667%;
      }
      .noMostrar {
        display: none;
      }
    }
    
    @media(min-width:768px)
    {
      .formularios__sections {
        margin: auto;
        padding:0;
        max-width: 720px;
      }
      .info-container{
        padding: 3rem 3rem 1.5rem !important;
      }
      .padding_modal {
        padding-top: 2rem;
      }
      .formularios__Saludo {
        padding-left: 0;
      }
      .formularios__Height {
        padding-top:2.5rem;
      }
      .formularios__Finalizarcompra {
        padding-top: 2rem;
        margin: 3rem 0 0;
      }
    }
    
   
</style>

<section class="formularios__sectionColor">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-7 px-0">

  {{-- saludos al usuario --}}
  @include('formulario.saludo')

  <!---------------------------------- Formulario I ----------------------------->
  {{-- datos del comprador --}}
  @include('formulario.datos-comprador')

  <!-------------------------- Formulario II ----------------------------->
  {{-- datos de la empresa --}}
  @include('formulario.datos-empresa')

  <!-------------------------- Formulario III ----------------------------->
  {{-- datos de la direccion  --}}
  @include('formulario.datos-direcciones')

  <!-------------------------- Seccion de Total del camion ----------------------------->
  {{-- datos de la direccion  --}}
  @include('formulario.total-compra')
        
      </div>
    </div>
  </div>
</section>
<!-------------------------- Javascript ----------------------------->

<script>
// formularios
const $form1 = document.getElementById('formulario1');
const $form2 = document.getElementById('formulario2');
const $form3 = document.getElementById('formulario3');

// botones de siguiente
const $btn_next1 = document.getElementById('btn_next1');
const $btn_next2 = document.getElementById('btn_next2');
// botones de atras
const $btn_prior1 = document.getElementById('btn_prior1');
const $btn_prior2 = document.getElementById('btn_prior2');
//botones de circulos de pasos 
const $btn_clr = document.getElementById('btn_clr');
const $btn_clr1 = document.getElementById('btn_clr1');
const $btn_clr2 = document.getElementById('btn_clr2');

const $mq = window.matchMedia("(min-width:768px)")

/* next */
$btn_next1.addEventListener('click', () => {
  $form1.classList.toggle('hide')&$form2.classList.toggle('hide');
});

$btn_next2.addEventListener('click', () => {
$form2.classList.toggle('hide')&$form3.classList.toggle('hide');
});




/* prior */

$btn_prior1.addEventListener('click', () => {
$form2.classList.toggle('hide')&$form1.classList.toggle('hide');
});
$btn_clr.addEventListener('click', () => {
$form2.classList.toggle('hide')&$form1.classList.toggle('hide');
});

$btn_prior2.addEventListener('click', () => {
$form3.classList.toggle('hide')&$form2.classList.toggle('hide');
});
$btn_clr2.addEventListener('click', () => {
$form3.classList.toggle('hide')&$form2.classList.toggle('hide');
});

$btn_clr1.addEventListener('click', () => {
$form3.classList.toggle('hide')&$form1.classList.toggle('hide');
});


</script>

@endsection