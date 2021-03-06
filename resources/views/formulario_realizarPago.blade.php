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

        
        <!-------------------------- Formulario IV ----------------------------->
        {{-- datos de pago --}}
        @include('formulario.datos-pago-uno')
    
        
        
        <!-------------------------- Seccion de Total del camion ----------------------------->
        {{-- datos de la direccion  --}}
        @include('formulario.total-compra')
  
  
      </div>
    </div>
  </div>
</section>
<!-------------------------- Javascript ----------------------------->
<div class="modal fade" id="pagosRealizadosModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pagos realizados</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <table class="table table-striped table-sm" id="table1">
        <thead>
          <tr>
          	<th>ID</th>
          	<th>Titular</th>
          	<th>identificacion</th>
          	<th>monto</th>
          	<th>Método pago</th>
            <th>Opcion</th>
          </tr>
        </thead>
        <tbody id="modalPagosRealizadosLoadTable">
          <tr>
            <td>1</td>
            <td>Omega</td>
            <td>25.985.506</td>
            <td>40,00 $</td>
            <td>Zelle</td>
            <td>
              <button class="btn btn-sm btn-danger delete-btn">Eliminar</button>
            </td>
          </tr>
        </tbody>
      </table>
      </div>
    </div>
  </div>
</div>
@endsection