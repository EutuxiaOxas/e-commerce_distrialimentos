<section id="formulario3" class="formularios__sections hide show">
    
    <!-- Datos de usuario-->
    <section class="py-1">
      <!-- Number-->
      <div class="container">
          <div class="row p-1">
            <div class="formularios__numberWidth pt-1 pr-0 d-block d-md-none">
              <button id=btn_clr1 class="formularios__btnNumber bg-blue">
                <p class="text-white small">1</p>
              </button>
            </div>
            <div class="formularios__numberWidth pt-1 pr-0 d-md-none">
              <button id=btn_clr2 class="formularios__btnNumber bg-blue">
                <p class="text-white small">2</p>
              </button>
            </div>
            <div class="formularios__numberWidth pt-1 pr-0 col-md-1">
              <button class="formularios__btnNumber bg-primary">
                <p class="text-white small">3</p>
              </button>
            </div>
            <div class="col-6 d-flex align-items-center pl-3 col-md-11">
              <p class="font-weight-bold m-0 texto-small text-black">Datos de envío</p>
            </div>
          </div>
      </div>
      <!-- Fin Number-->
      <!-- trj datos de envio-->
      <div class="container mt-1">
          <div class="row">
            <div class="col">
              <div class="border shadow">
                <div class="info-container p-3 mb-1">
                  <p class="font-weight-bold text-black texto-small">Direccion de envio</p>
                  <p class="font-weight-bold text-black px-3 pb-0 pt-2 texto-small">Calle 1 Avenida 10 Local 45 </p>
                  <p class="texto-small px-3 my-0 py-0 text-muted">Cerca de colegio Moral y Luces</p>
                  <p class="texto-small px-3 my-0 py-0 text-muted">Carabobo, Valencia (2001)</p>
                  <p class="texto-small px-3 my-0 py-0 pb-2 text-muted">Juan Perez +58 414 543 4563</p>
                  <div class="row mb-1 py-2">
                    <div class="col-6 pr-0">
                      <p class="font-weight-bold text-black texto-small">Ruta de entrega</p>
                    </div>
                    <div class="col-6 text-md-center">
                      <p class="texto-small pl-0 text-muted">Valencia, Lunes 8:00AM - 11:00AM</p>
                    </div>
                  </div>
                  <div class="row pt-2 padding-modal">
                    <div class="col-12 text-center">
                      <a href="#" data-toggle="modal" data-target="#modal-envio_edit" class="texto-small font-weight-bold text-secondary">Cambiar dirección de envío</a>
                    </div>
                    <div class="modal fade" id="modal-envio_edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content p-3">

                        <!-- Modal header-->

                          <div class="modal-header p-2 border-bottom-0">
                            <div class="container">
                              <div class="row">
                                <div class="col-10 mb-0">
                                  <h4 class="modal-title text-secondary font-weight-bold" id="exampleModalLabel">Datos de envío</h4>
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

                        <!-- fin Modal header-->

                        <!-- Modal body-->
                          <div class="modal-body px-2 pt-1 pb-2">
                            <div class="form-title container">
                              <div class="row">
                                <div class="col text-center">
                                  <p class="text-black font-weight-bold">Dirección de envío</p>
                                </div>
                              </div>
                            </div>
                            <form>
                              <div class="form">
                                <div class="col">
                                  <input type="text" class="form-control-plaintext formularios__inputBorders" placeholder="Estado">
                                </div>
                                <div class="col">
                                  <input type="text" class="form-control-plaintext formularios__inputBorders" placeholder="Ciudad">
                                </div>
                                <div class="col">
                                  <input type="text" class="form-control-plaintext formularios__inputBorders" placeholder="Codigo postal">
                                </div>
                                <div class="col">
                                  <input type="text" class="form-control-plaintext formularios__inputBorders" placeholder="Dirección">
                                </div>
                                <div class="col">
                                  <input type="text" class="form-control-plaintext formularios__inputBorders" placeholder="Responsable">
                                </div>
                                <div class="col">
                                  <input type="text" class="form-control-plaintext formularios__inputBorders" placeholder="Telefono Oficina">
                                </div>
                              </div>
                            </form>
                            <div class="form-title container pt-4">
                              <div class="row">
                                <div class="col text-center">
                                  <p class="text-black font-weight-bold">Ruta de entrega sugerida</p>
                                </div>
                              </div>
                            </div>
                            <form>
                              <div class="form">
                                <div class="col">
                                  <input type="text" class="form-control-plaintext formularios__inputBorders" placeholder="Ruta de entrega">
                                </div>
                              </div>
                            </form>
                          </div>
                        <!-- fin Modal body-->

                        <!-- Modal footer-->
                          <div class="modal-footer pt-5 border-0">
                            <div class="container">
                              <div class="row mb-0">
                                  <button type="button" class="btn btn-primary btn-block">Editar</button>
                              </div>
                              <div class="row">
                                <p class="text-muted small text-center">Al hacer click en continuar usted confirma que los datos administrados son reales</p>
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
          </div>
      </div>
      <!-- Fin trj datos de envio-->
    </section>
    <!-- Fin Datos de usuario-->

    <!-- Buttoms-->
    <section class="my-0 py-3">
      <div class="container">
        <div class="row">
          <div class="col-5 pr-0">
            <button id="btn_prior2" class="btn btn-sm btn-block formularios__btn-left text-muted">Anterior</button>
          </div>
          <div class="col-7 pl-0">
            <a id="" href="{{route('order.store')}}" class="btn btn-primary btn-sm btn-block formularios__btn-right">Finalizar Compra</a>
          </div>
        </div>
      </div>
    </section>
    <!-- /Buttoms-->
  </section>
</div>