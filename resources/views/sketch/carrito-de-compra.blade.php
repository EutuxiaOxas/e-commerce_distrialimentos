@extends('common.main')

@section('title')
    <title>Carrito</title>
@endsection

@php
// importante para el color de las letras del header
$color_header='dark';
@endphp

@section('content')
    {{-- header principal --}}
    @include('common.header')
 
{{-- cover --}}
<section class="p-0">
    <div class="swiper-container text-white swiper-container-fade swiper-container-horizontal skrollable skrollable-between" data-top-top="transform: translateY(0px);" data-top-bottom="transform: translateY(250px);" style="transform: translateY(0px);">
      <div class="swiper-wrapper">
        <div class="swiper-slide vh-25 swiper-slide-prev" >
          <div class="image image-overlay" style="background-image:url({{asset('images/portada/portada2.jpg')}})"></div>
          <div class="caption">
            <div class="container">
              <div class="row justify-content-between vh-25">
                <div class="col-md-8 align-self-center" data-swiper-parallax-y="-250%" >
                  <h1 class="display-5 font-weight-bold text-uppercase">Distrialimentos del centro</h1>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide vh-25 swiper-slide-active" >
          <div class="image image-overlay" style="background-image:url({{asset('images/portada/portada3.jpg')}})"></div>
          <div class="caption">
            <div class="container">
              <div class="row vh-25">
                <div class="col-lg-6 align-self-center" data-swiper-parallax-y="-250%">
                  <h1 class="display-3">Los <b>Estándares</b> más altos de calidad.</h1>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col text-center">
                <div class="mouse"></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="swiper-pagination swiper-pagination-vertical swiper-pagination-0 swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 2"></span></div>
    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
</section>
  {{-- cover --}}

  <style>
    .labelfs {
      font-size: 70%
    }
  </style>

   <!-- Carrito -->
<section>
  <div class="container-fluid">
    <div class="row">
        <div class="col text-center">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Camion de compras
          </button>
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header d-block py-2"> <!--  Modal header-->
                    <div class="row">
                        <div class="col-10">
                          <h3 class="font-weight-bold py-0 my-0 text-left">Camion de compras</h3>
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
                        <button type="button" class="btn btn-outline-blue border-0 px-0 py-0 btn-block">
                          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
                            <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                          </svg>
                          <p>Completa tu compra</p> 
                        </button>
                      </div>
                      <div class="col-6 pl-0">
                        <button type="button" class="btn btn-primary btn-block">Siguiente</button>
                      </div>
                    </div>

                    <h5 class="text-left font-weight-bold">Listado de productos</h5>
                    
                    <!--  modal-body-->

                    <div class="row px-1 pt-1 pb-0 mb-0"> 
                      <div class="col">
                        <div class="row boxed border shadow">
                          <div class="col-4 col-md-4 px-0">
                            <img src="{{asset('images/lineas/linea-viveres.jpg')}}" alt="Product-related">
                          </div>

                          <div class="col-8 col-md-8 px-0">
                            <div class="prod-details p-1">
                              <div class="row mb-0">
                                <div class="col-10 my-0 py-0">
                                  <h5 class="text-blue font-weight-bold my-0 pb-0 text-left">Titulo del producto</h5>
                                </div>
                                <div class="col-2">
                                  <button type="button" class="close py-0 text-right" data-dismiss="modal" aria-label="Close">
                                    <span class="p-0" aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                                 
                                <div class="col-12 my-0 py-0">
                                  <p class="small text-left">IVA incluido</p>
                                </div>
                              </div>
                              <div class="row my-0 py-0">                   
                                <div class="col-7 my-0 py-0 pr-0">
                                  <p class="small font-weight-bold text-black my-0 pb-0 fs-18 pt-1">20,00 $</p>
                                  <p class="small my-0 py-0">Caja - 30 unidades</p>
                                </div>
                                <div class="col-5 pl-0">                         
                                  <form class="text-left">
                                    <div class="form-group m-0">
                                      <label class="labelfs fs-10" for="cantidad">Cantidad</label>
                                      <input type="number" class="form-control form-control-sm" id="cantidadProductos">
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>        
                        </div>
                      </div>
                    </div>

                    <div class="row px-1 pt-1 pb-0 mb-0"> 
                      <div class="col">
                        <div class="row boxed border shadow">
                          <div class="col-4 col-md-4 px-0">
                            <img src="{{asset('images/lineas/linea-viveres.jpg')}}" alt="Product-related">
                          </div>

                          <div class="col-8 col-md-8 px-0">
                            <div class="prod-details p-1">
                              <div class="row mb-0">
                                <div class="col-10 my-0 py-0">
                                  <h5 class="text-blue font-weight-bold my-0 pb-0 text-left">Titulo del producto</h5>
                                </div>
                                <div class="col-2">
                                  <button type="button" class="close py-0 text-right" data-dismiss="modal" aria-label="Close">
                                    <span class="p-0" aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                                 
                                <div class="col-12 my-0 py-0">
                                  <p class="small text-left">IVA incluido</p>
                                </div>
                              </div>
                              <div class="row my-0 py-0">                   
                                <div class="col-7 my-0 py-0 pr-0">
                                  <p class="small font-weight-bold text-black my-0 pb-0 fs-18 pt-1">20,00 $</p>
                                  <p class="small my-0 py-0">Caja - 30 unidades</p>
                                </div>
                                <div class="col-5 pl-0">                         
                                  <form class="text-left">
                                    <div class="form-group m-0">
                                      <label class="labelfs fs-10" for="cantidad">Cantidad</label>
                                      <input type="number" class="form-control form-control-sm" id="cantidadProductos">
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>        
                        </div>
                      </div>
                    </div>
                    
                    <div class="row px-1 pt-1 pb-0 mb-0"> 
                      <div class="col">
                        <div class="row boxed border shadow">
                          <div class="col-4 col-md-4 px-0">
                            <img src="{{asset('images/lineas/linea-viveres.jpg')}}" alt="Product-related">
                          </div>

                          <div class="col-8 col-md-8 px-0">
                            <div class="prod-details p-1">
                              <div class="row mb-0">
                                <div class="col-10 my-0 py-0">
                                  <h5 class="text-blue font-weight-bold my-0 pb-0 text-left">Titulo del producto</h5>
                                </div>
                                <div class="col-2">
                                  <button type="button" class="close py-0 text-right" data-dismiss="modal" aria-label="Close">
                                    <span class="p-0" aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                                 
                                <div class="col-12 my-0 py-0">
                                  <p class="small text-left">IVA incluido</p>
                                </div>
                              </div>
                              <div class="row my-0 py-0">                   
                                <div class="col-7 my-0 py-0 pr-0">
                                  <p class="small font-weight-bold text-black my-0 pb-0 fs-18 pt-1">20,00 $</p>
                                  <p class="small my-0 py-0">Caja - 30 unidades</p>
                                </div>
                                <div class="col-5 pl-0">                         
                                  <form class="text-left">
                                    <div class="form-group m-0">
                                      <label class="labelfs fs-10" for="cantidad">Cantidad</label>
                                      <input type="number" class="form-control form-control-sm" id="cantidadProductos">
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>        
                        </div>
                      </div>
                    </div>


                    <!--  Modal footer-->
                    <div class="container pt-4">
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
                          <p class="font-weight-bold text-black fs-20">70,35 $</p>
                        </div>
                      </div>
                      <div class="row m-0 p-0">
                        <div class="col-5 text-left mb-0">
                          <p class="text-blue">TOTAL (Bs)</p>
                        </div>
                        <div class="col-7 text-right mb-0">
                          <p class="font-weight-bold text-black">89,000,000.00 Bs</p>
                        </div>
                      </div>
                    </div>


                    <div class="modal-footer"> 
                      <button type="button" class="btn btn-primary btn-block">Finalizar compra</button>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
    </div>
  </div>
</section>

                          <div class="col-2 col-md-4 p-0 m-0">
                            <form>
                              <div class="form-group">
                                <label for="cantidad">Cantidad</label>
                                  <input type="number" class="form-control form-control-sm" id="cantidadProductos" aria-describedby="emailHelp">
                              </div>
                            </form>
                          </div>

   <!-- /Carrito -->
   

 

@endsection