<section id="formulario1" class="formularios__sections show">

  <!-- datos de usuario-->                                
  <section class="py-1">
    <!-- Number-->
    <div class="container">
      <div class="row p-1">
        <div class="col-2 pt-1 pr-0 col-md-1 col-lg-1">
          <button class="formularios__btnNumber bg-primary">
            <p class="text-white small">1</p>
          </button>
        </div>
        <div class="col-10 d-flex align-items-center pl-0 col-md-11 col-lg-11">
          <p class="font-weight-bold texto-small">Datos del comprador</p>
        </div>
      </div>
    </div>
    <!-- fin Number-->
    @if ($user->documento_identidad && $user->phone )
      <!--  datos de usuario-->
    <div class="container mt-1 px-3">
      <div class="border shadow">
        <div class="info-container p-3">
          <div class="row mb-3">
            <div class="col-6">
              <p class="font-weight-bold texto-small">Nombre y apellido</p>
            </div>
            <div class="col-6">
              <p class="texto-small text-muted text-md-right">{{$user->name}}</p>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-6">
              <p class="font-weight-bold texto-small">Documento</p>
            </div>
            <div class="col-6">
              <p class="texto-small text-muted text-md-right">C.I. {{ $user->documento_identidad ?? 'no definida' }}</p>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-6">
              <p class="font-weight-bold texto-small">Telefono</p>
            </div>
            <div class="col-6">
              <p class="texto-small text-muted text-md-right">{{$user->phone}}</p>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-6">
              <p class="font-weight-bold texto-small">Telefono alternativo</p>
            </div>
            <div class="col-6">
              <p class="texto-small text-muted text-md-right">{{$user->phone_alternative ?? '  -  '}}</p>
            </div>
          </div>
          <div class="row">
            <div class="col-12 text-center pt-3 padding_modal">
              <a href="#" class="texto-small font-weight-bold text-secondary" data-toggle="modal" data-target="#moda-user-edit">Editar datos de comprador</a>
            </div>

            <div class="modal fade" id="moda-user-edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content p-3">
                <div class="modal-header p-2 border-bottom-0">
                  <div class="container">
                    <div class="row">
                      <div class="col-10 mb-0">
                        <h5 class="modal-title text-secondary font-weight-bold lead" id="exampleModalLabel">Datos de usuario</h5>
                        <p class="texto-small text-muted">Agregue los datos solicitados...</p>
                      </div>
                      <div class="col-2">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>        
                      </div>
                  </div>
                </div>
              </div>
              <div class="modal-body px-2 pt-1 pb-2">
                <div class="form-title container">
                  <div class="row">
                    <div class="col text-center">
                      <p class="font-weight-bold">Datos de usuario</p>
                    </div>
                  </div>
                </div>
                <form action="{{route('user.info.update')}}" method="POST">
                  @csrf
                  <div class="form">
                    <div class="col">
                      <input type="text" class="form-control-plaintext formularios__inputBorders" value="{{$user->name ?? ''}}" name="name" placeholder="Nombre completo">
                    </div>
                    <div class="col">
                      <input type="text" class="form-control-plaintext formularios__inputBorders" value="{{$user->documento_identidad ?? ''}}" name="documento_identidad"  placeholder="Cedula [ej: v-23432578]">
                    </div>
                    <div class="col">
                      <input type="text" class="form-control-plaintext formularios__inputBorders" value="{{$user->phone ?? ''}}"  name="phone" placeholder="Telefono [ej: 0241-8524234]">
                    </div>
                    <div class="col pb-3">
                      <input type="text" class="form-control-plaintext formularios__inputBorders" value="{{$user->phone_alternative ?? ''}}" name="phone_alternative" placeholder="Telefono Alt. [ej: 0241-8524234]">
                    </div>
                  </div>
                  <div class="container">
                    <div class="row mb-1">
                      <button type="submit" class="btn btn-primary btn-block formulario__modalBtn">Editar</button>
                    </div>
                    <div class="row">
                      <p class="text-muted texto-small text-center">Al hacer click en continuar usted confirma que los datos administrados son reales</p>
                    </div>
                  </div>
                </form>
              </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /datos de usuario-->
    @else
    {{-- Aun falta datos por agregar --}}
    <div class="perfil__cardBody direccion">
      <div class="container p-5 text-center">
        <img src="{{asset('images/void-01.svg')}}" alt="sin datos">
        <p class="perfil__cardListItem-content" style="">Aun sin datos personales...</p>
      </div>
      <div class="perfil__agregarDatos ">
        <a href="#" data-toggle="modal" data-target="#modal_userEdit">Agregar los datos personales</a>
      </div>
    </div>
    @endif
  </section>
    
  <!-- Buttoms-->
  <section class="my-0 pt-3">
    <div class="container">
      <div class="row">
        <div class="col-5 pr-0">
          <button type="button" class="btn btn-sm btn-block formularios__btn-left" disabled><span></span></button>
        </div>
        <div class="col-7 pl-0">
          <button id="btn_next1" class="btn btn-primary btn-sm btn-block formularios__btn-right" @if( !$user->documento_identidad && !$user->phone ) disabled @endif >Siguiente</button>
        </div>
      </div>
    </div>
  </section>
  <!-- /Buttoms-->
                    
</section>


{{-- Modales --}}

<!-- Modal datos de usuario -->
<div class="modal fade" id="modal_userEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content p-3">
      <div class="modal-header p-2 border-bottom-0">
        <div class="container">
          <div class="row">
            <div class="col-10 mb-0">
              <h4 class="text-secondary font-weight-bold" id="exampleModalLabel">Datos de usuario</h4>
              <p class="texto-small text-muted">Agregue los datos solicitados...</p>
            </div>
            <div class="col-2">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>        
            </div>
          </div>
        </div>
      </div>
      <div class="modal-body px-2 pt-1 pb-2">
        <div class="form-title container">
          <div class="row">
            <div class="col text-center">
              <h5 class="font-weight-bold">Datos de usuario</h5>
            </div>
          </div>
        </div>
        <form action="{{route('user.info.update')}}" method="POST">
          @csrf
          <div class="form">
            <div class="col">
              <input type="text" class="form-control-plaintext formularios__inputBorders" name="name" placeholder="Nombre completo" required>
            </div>
            <div class="col">
              <input type="text" class="form-control-plaintext formularios__inputBorders" name="documento_identidad" placeholder="Cedula [ej: v-23432578]" required>
            </div>
            <div class="col">
              <input type="text" class="form-control-plaintext formularios__inputBorders" name="phone" placeholder="Telefono [ej: 0241-8524234]" required>
            </div>
            <div class="col pb-3">
              <input type="text" class="form-control-plaintext formularios__inputBorders" name="phone_alternative" placeholder="Telefono Alt. [ej: 0241-8524234]">
            </div>
          </div>
          <div class="container">
            <div class="row mb-1 mt-4 pt-4">
              <button type="submit" class="btn btn-primary btn-block formulario__modalBtn">Agregar</button>
            </div>
            <div class="row">
              <p class="text-muted texto-small text-center">Al hacer click en agregar usted confirma que los datos administrados son reales</p>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Fin Modal datos de usuario -->