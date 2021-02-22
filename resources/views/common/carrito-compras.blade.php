
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header d-block py-2"> <!--  Modal header-->
                        <div class="row">
                            <div class="col-10 pt-2">
                              <h3 class="font-weight-bold p-0 my-0 text-left fs-28">Camion de compras</h3>
                              <p class="py-0 my-0 text-left fs-14">Deposita todo en tu camion de compras</p>
                            </div>
                            <div class="col-2">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true" class="icon-x"></span>
                              </button>
                            </div> 
                        </div> 
                      </div>

                      <div class="container-fluid pt-1">
                      
                        <div class="row pt-0 mb-1">
                          <div class="col-6 pr-0 mb-0">
                              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-truck text-blue" viewBox="0 0 16 16">
                                <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                              </svg>
                              <p>Completa tu compra</p> 
                          </div>
                          <div class="col-6 pl-0">
                            <button type="button" class="btn btn-primary btn-block" id="carritoComprasBotonSiguiente">Siguiente</button>
                          </div>
                        </div>
                        <div class="carritoCompras__alertMinimunPrice" id="carritoComprasAlertaMinimo">
                            <h6 class="carritoCompras__alertMinimunPrice-text">**Recuerda que tu compra debe ser mayor a 40 USD</h6>
                        </div>
                        <h5 class="text-left font-weight-bold mb-2 pl-1 pt-1 fs-18">Listado de productos</h5>
                        
                        <!--  modal-body-->
                        <div class="cart__modalItems" id="cart_body">
                        </div>

                        <!--  Modal footer-->
                        <div class="container pt-4">
                          <div class="row m-0 p-0">
                            <div class="col-6 text-left mb-0">
                              <p>Subtotal</p>
                            </div>
                            <div class="col-6 text-right mb-0">
                              <p id="modalcartSubTotal">0 $</p>
                            </div>
                          </div>
                          <div class="row m-0 p-0">
                            <div class="col-6 text-left mb-1">
                              <p>IVA</p>
                            </div>
                            <div class="col-6 text-right mb-1">
                              <p id="modalCartIva">0 $</p>
                            </div>
                          </div>
                          <div class="row m-0 p-0">
                            <div class="col-6 text-left mb-0">
                              <p class="text-uppercase text-blue fs-16 font-weight-bold">Total</p>
                            </div>
                            <div class="col-6 text-right mb-0">
                              <p class="font-weight-bold text-black fs-20" id="modalCartTotal">0 $</p>
                            </div>
                          </div>
                          <div class="row m-0 p-0">
                            <div class="col-5 text-left mb-0">
                              <p class="text-blue">TOTAL (Bs)</p>
                            </div>
                            <div class="col-7 text-right mb-0">
                              <p class="font-weight-bold text-black" id="modalCartTotalBolivares">0 Bs</p>
                            </div>
                          </div>
                        </div>


                        <div class="modal-footer"> 
                          <a disable href="#" class="btn btn-primary carritoCompras__finalizarButton btn-block" id="modalCartFinish">Finalizar compra</a>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>