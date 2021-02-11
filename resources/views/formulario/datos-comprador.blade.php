<section id=formulario1 class="formularios__sections show">
  <!-- Carrito formulario-->
  <section class="p-0 d-block d-md-none">
    <div class="container">
      <div class="row px-1">
        <div class="col text-center">
          <button type="button" class="btn btn-primary btn-block formularios__padding-btnCarrito" data-toggle="modal" data-target="#modalFormulario">
            <div class="row">
              <div class="col-4 formularios__btn-Precio">
                <p>2,000.00 $</p>
              </div>
              <div class="col-8 px-0">
                <p class="text-white text-right font-weight-bold">Camion de compras
                  <svg width="30" height="28" viewBox="0 0 30 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M29.9882 19.5166V14.8843C29.9882 14.1944 29.7743 13.5044 29.4526 12.9131L26.247 7.88651C25.9256 7.29514 25.1757 6.9009 24.4259 6.9009H19.605C18.8551 6.9009 18.2122 7.49227 18.2122 8.18219V18.7281H17.1409V4.9297C17.1409 3.84554 16.1769 2.9585 14.9983 2.9585H0V20.6993H3.21392C3.74957 19.0238 5.35653 17.7425 7.39188 17.7425C9.4275 17.7425 11.1415 19.0238 11.5701 20.6993H19.3907C19.9264 19.0238 21.5333 17.7425 23.5687 17.7425C25.2829 17.7425 26.6753 18.6296 27.3183 19.9109C27.6397 20.4037 28.1673 20.6993 28.7029 20.6993C29.4526 20.6993 30.0955 20.108 29.9882 19.5166ZM20.3548 13.8001V8.87211H24.6401L27.7467 13.8001H20.3548Z" fill="white"/>
                    <path d="M23.5688 18.728C21.7477 18.728 20.3549 20.0093 20.3549 21.6848C20.3549 23.3604 21.7477 24.6416 23.5688 24.6416C25.39 24.6416 26.7828 23.3604 26.7828 21.6848C26.7828 20.0093 25.39 18.728 23.5688 18.728ZM23.5688 23.0647C22.7117 23.0647 22.0691 22.4733 22.0691 21.6848C22.0691 20.8964 22.7118 20.305 23.5688 20.305C24.426 20.305 25.0685 20.8964 25.0685 21.6848C25.0685 22.4733 24.426 23.0647 23.5688 23.0647Z" fill="white"/>
                    <path d="M7.4992 18.728C5.67804 18.728 4.28528 20.0093 4.28528 21.6848C4.28528 23.3604 5.67804 24.6416 7.4992 24.6416C9.32035 24.6416 10.7131 23.3604 10.7131 21.6848C10.7131 20.0093 9.32035 18.728 7.4992 18.728ZM7.4992 23.0647C6.64209 23.0647 5.9995 22.4733 5.9995 21.6848C5.9995 20.8964 6.64215 20.305 7.4992 20.305C8.35624 20.305 8.99889 20.8964 8.99889 21.6848C8.99889 22.4733 8.35631 23.0647 7.4992 23.0647Z" fill="white"/>
                    <path d="M7.49916 22.1775C7.79499 22.1775 8.03481 21.9569 8.03481 21.6847C8.03481 21.4125 7.79499 21.1919 7.49916 21.1919C7.20332 21.1919 6.9635 21.4125 6.9635 21.6847C6.9635 21.9569 7.20332 22.1775 7.49916 22.1775Z" fill="white"/>
                    <path d="M23.5688 22.1775C23.8646 22.1775 24.1044 21.9569 24.1044 21.6847C24.1044 21.4125 23.8646 21.1919 23.5688 21.1919C23.273 21.1919 23.0331 21.4125 23.0331 21.6847C23.0331 21.9569 23.273 22.1775 23.5688 22.1775Z" fill="white"/>
                  </svg>             
                </p>
              </div>
            </div>
          </button>
            <!-- Inicio modal-->
            <div class="modal fade" id="modalFormulario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content p-1">
                  <!--  Modal header-->
                  <div class="modal-header d-block pt-2 pb-1 border-0">
                    <div class="row">
                      <div class="col-10 pt-2">
                        <h3 class="font-weight-bold p-0 my-0 text-left fs-28">Camion de compras</h3>
                        <p class="py-0 my-0 text-left">Todo esta en tu camion de compras!</p>
                      </div>
                      <div class="col-2">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true" class="icon-x"></span>
                        </button>
                      </div> 
                    </div> 
                  </div>
                  <!-- fin  Modal header-->
                  <div class="container-fluid pt-1">
                    <h5 class="text-left font-weight-bold pl-1 pb-2">Listado de productos</h5>
                    
                    <!--  modal-body-->
                    <div class="modal-contains container">
                      <div class="row px-1 pt-1 pb-0 mb-0"> 
                        <div class="col">
                          <div class="row border shadow radeus">
                            <div class="col-4 p-0">
                              <img class="img-border" src="{{asset('images/lineas/linea-viveres.jpg')}}" alt="Product-related">
                            </div>

                            <div class="col-8 p-1">
                              <div class="container p-2">
                                <div class="row">
                                  <div class="col-10">
                                    <p class="text-secondary font-weight-bold text-left">Titulo del producto</p>
                                  </div>
                                  <div class="col-2">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span class="p-0" aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                                  
                                  <div class="col-12">
                                    <p class="text-small text-left">IVA incluido</p>
                                  </div>
                                </div>
                                <div class="row">                   
                                  <div class="col-8 p-0">
                                    <p class="font-weight-bold lead">20,00 $</p>
                                    <p class="text-small">Caja - 30 unidades</p>
                                  </div>
                                  <div class="col-4 pl-0">                         
                                    <form class="text-center">
                                      <div class="form-group m-0 pb-1">
                                        <label class="labelfs m-0" for="cantidad">Cantidad</label>
                                        <input type="number" class="form-control form-control-sm text-secondary font-weight-bold" id="cantidadProductos">
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>        
                          </div>
                        </div>
                      </div>
                    
                    </div>
                    <!--  fin modal-body-->

                    <!--  Modal footer-->
                    <div class="container py-4">
                      <div class="row m-0 p-0">
                        <div class="col-6 text-left mb-0">
                          <p>Subtotal</p>
                        </div>
                        <div class="col-6 text-right mb-0">
                          <p>59,35 $</p>
                        </div>
                      </div>
                      <div class="row m-0 p-0">
                        <div class="col-6 text-left mb-1">
                          <p>IVA</p>
                        </div>
                        <div class="col-6 text-right mb-1">
                          <p>11,65 $</p>
                        </div>
                      </div>
                      <div class="row m-0 p-0">
                        <div class="col-6 text-left mb-0">
                          <p class="text-uppercase text-blue fs-16 font-weight-bold">Total</p>
                        </div>
                        <div class="col-6 text-right mb-0">
                          <p class="font-weight-bold text-black fs-24">70,35 $</p>
                        </div>
                      </div>
                      <div class="row m-0 p-0">
                        <div class="col-5 text-left mb-0">
                          <p class="text-blue">TOTAL (Bs)</p>
                        </div>
                        <div class="col-7 text-right mb-0 pb-6">
                          <p class="font-weight-bold text-black">89,000,000.00 Bs</p>
                        </div>
                      </div>
                    </div>
                    <!-- fin Modal footer-->
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /Carrito formulario-->

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

      <!-- trj datos de usuario-->
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
                <form>
                  <div class="form">
                    <div class="col">
                      <input type="text" class="form-control-plaintext formularios__inputBorders" placeholder="Nombre completo">
                    </div>
                    <div class="col">
                      <input type="text" class="form-control-plaintext formularios__inputBorders" placeholder="Cedula [ej: v-23432578]">
                    </div>
                    <div class="col">
                      <input type="text" class="form-control-plaintext formularios__inputBorders" placeholder="Telefono [ej: 0241-8524234]">
                    </div>
                    <div class="col pb-3">
                      <input type="text" class="form-control-plaintext formularios__inputBorders" placeholder="Telefono Alt. [ej: 0241-8524234]">
                    </div>
                  </div>
                </form>
              </div>
              <div class="modal-footer pt-5 border-0">
                <div class="container">
                  <div class="row mb-1">
                    <button type="button" class="btn btn-primary btn-block formulario__modalBtn">Editar</button>
                  </div>
                  <div class="row">
                    <p class="text-muted texto-small text-center">Al hacer click en continuar usted confirma que los datos administrados son reales</p>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /datos de usuario-->

  <!-- Buttoms-->
  <section class="my-0 pt-3">
    <div class="container">
      <div class="row">
        <div class="col-5 pr-0">
          <button type="button" class="btn btn-sm btn-block formularios__btn-left" disabled><span></span></button>
        </div>
        <div class="col-7 pl-0">
          <button id=btn_next1 class="btn btn-primary btn-sm btn-block formularios__btn-right">Siguiente</button>
        </div>
      </div>
    </div>
  </section>
  <!-- /Buttoms-->
                    
</section>