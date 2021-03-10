@extends('layouts.main')

@section('title')
    Fomulario - Sin usuario 
@endsection


@section('content')

    {{-- header principal --}}
     @include('common.header.nav_header_mobile')

{{-- cover --}}
    

<style>
.formularios__btn-right {
  border-top-right-radius: 45px;
  border-bottom-right-radius: 45px;
  border-bottom-left-radius: 100px;
  font-weight:bold;
  height: 2.52rem;
  font-size: 1rem;
  line-height:1.9;
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
.formularios__sections {
  margin: auto;
  padding:0;
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


.texto-small {
  font-size: 90%;
}


.formulario__modalBtn 
{
  padding:0.8rem;
}
.formularios__sectionColor {
  height: 100vh;
  background-color: #F5F5F5;
}
@media(max-width:767px)
{
  .formularios__imgWidth {
    width: 70%;
  }
}

@media(min-width:768px)
{
  .container-width2 {
    width: 720px;
    padding-top:1.5rem;
  }
  .info-container{
    padding: 3rem 3rem 1.5rem !important;
  }
  .padding_modal {
    padding-top: 2rem;
  }
  .formularios__TotalCompra {
      width:510px
  }
  .formularios__containerMain{
    display:flex;
    justify-content: space-evenly;
    }
    .formularios__imgWidth {
      width: 40%;
  }
}



    
</style>

<section class="formularios__sectionColor formularios__containerMain">

  {{-- seccion de sin usuario --}}
  @include('formulario_nuevo.seccion-sin-usuario')

  {{-- Seccion de detalle de carrito de compra --}}
  @include('formulario_nuevo.seccion-carrito')

</section>

@endsection