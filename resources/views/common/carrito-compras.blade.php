
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header d-block py-2" style="border: none;"> <!--  Modal header-->
                        <div class="row">
                            <div class="col-10 pt-4">
                              <h3 class="carritoCompras-title font-weight-bold p-0 my-0 mb-1 text-left fs-28">Camion de compras</h3>
                              <p class="carritoCompras-subtitle py-0 my-0 text-left fs-14">Deposita todo en tu camion de compras</p>
                            </div>
                            <div class="col-2">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <img src="{{asset('images/close-icon.png')}}" alt="Boton Cerrar">
                              </button>
                            </div> 
                        </div> 
                      </div>

                      <div class="container-fluid pt-1">
                      
                        <div class="row pt-0 mb-1">
                          <div class="col-6 text-center pr-0 mb-0">
                              <img src="{{asset('images/cart_camion_icon.png')}}" alt="Camion icono">
                              <p class="carritoCompras-completaTuCompra-text">Completa tu compra</p> 
                          </div>
                          <div class="col-6 pl-0">
                            <button type="button" class="carritoCompras-siguienteButton btn btn-primary btn-block" id="carritoComprasBotonSiguiente">Siguiente</button>
                          </div>
                        </div>
                        <div class="carritoCompras__alertMinimunPrice" id="carritoComprasAlertaMinimo">
                            <h6 class="carritoCompras__alertMinimunPrice-text">**Recuerda que tu compra debe ser mayor a 40 USD</h6>
                        </div>
                        <h5 class="carritoCompras-listadoTitle text-left font-weight-bold mb-2 pl-1 pt-1 fs-18">Listado de productos</h5>
                        
                        <!--  modal-body-->
                        <div class="cart__modalItems" id="cart_body">
                        </div>

                        <!--  Modal footer-->
                        <div class="container pt-4">
                          <div class="row m-0 p-0">
                            <div class="col-6 text-left mb-0">
                              <p class="carritoCompras_subTotal">Subtotal</p>
                            </div>
                            <div class="col-6 text-right mb-0">
                              <p class="carritoCompras_subTotal-amount" id="modalcartSubTotal">0 $</p>
                            </div>
                          </div>
                          <div class="row m-0 p-0">
                            <div class="col-6 text-left mb-1">
                              <p class="carritoCompras_iva">IVA</p>
                            </div>
                            <div class="col-6 text-right mb-1">
                              <p class="carritoCompras_iva-amount" id="modalCartIva">0 $</p>
                            </div>
                          </div>
                          <div class="row m-0 p-0">
                            <div class="col-6 text-left mb-0">
                              <p class="carritoCompras_total text-uppercase text-blue fs-16 font-weight-bold">Total</p>
                            </div>
                            <div class="col-6 text-right mb-0">
                              <p class=" carritoCompras_total-amount font-weight-bold text-black fs-20" id="modalCartTotal">0 $</p>
                            </div>
                          </div>
                          <div class="row m-0 p-0">
                            <div class="col-5 text-left mb-0">
                              <p class="carritoCompras_totalBolivares text-blue">TOTAL (Bs)</p>
                            </div>
                            <div class="col-7 text-right mb-0">
                              <p class="carritoCompras_totalBolivares-amount font-weight-bold text-black" id="modalCartTotalBolivares">0 Bs</p>
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