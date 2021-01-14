@extends('common.main')

@section('title')
    <title>Formulario</title>
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
        <div class="swiper-slide vh-15 swiper-slide-prev" >
          <div class="image image-overlay" style="background-image:url({{asset('images/portada/portada2.jpg')}})"></div>
          <div class="caption">
            <div class="container">
              <div class="row justify-content-between vh-15">
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide vh-15 swiper-slide-active" >
          <div class="image image-overlay" style="background-image:url({{asset('images/portada/portada3.jpg')}})"></div>
        
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
    .radius-left { /* radius botones inferiores */
      border-top-right-radius: 45px;
      border-bottom-right-radius: 45px;
      border-bottom-left-radius: 100px;
    }
    .radius-right { /* radius botones inferiores */
      border-top-right-radius: 100px;
      border-top-left-radius: 45px;
      border-bottom-left-radius: 45px;
    }
    .box-shadow-user { /* smbra del circulo de usuario */
      box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    }
    .py-btn { /* padding bonton carrito-formulario */
      padding-top: 5px;
      padding-bottom: 5px;
    }
    .wh-user { /* medidas circulo user */
      height: 80px;
      width: 80px;
    }
    .btn-steps { /* mmedidas fijas boton next-step */
      height: 35px;
      width: 35px;
    }
    .show {
      display: block;
    }
    .hide {
      display: none;
    }
    
    </style>

  <section id=formulario1 class="p-0 m-0 show">
    <!-- usuario -->
      <section class="pb-0 pt-2">
        <div class="container">
          <div class="row py-1">
            <div class="col-3 mb-0 d-flex justify-content-center pr-0 col-md-2 col-lg-1">
              <div class="box-shadow-user pr-0 m-0 bg-secondary rounded-circle wh-user d-flex align-items-center justify-content-center">
                <svg class="p-1" width="53" height="53" viewBox="0 0 38 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M37.7631 10.5274L34.2066 3.51869V0.739127C34.2066 0.330981 33.8758 0 33.4675 0H4.37549C3.96734 0 3.63636 0.330981 3.63636 0.739127V3.51906L0.0799736 10.5274C0.0274216 10.631 0 10.7457 0 10.8618V12.6802C0 14.8408 1.57464 16.6395 3.63636 16.992V32.5215H2.88001C2.47179 32.5215 2.14088 32.8524 2.14088 33.2606C2.14088 33.6687 2.47179 33.9997 2.88001 33.9997H4.36979C4.37164 33.9997 4.37356 34 4.37549 34H24.598H30.5111H33.4676H34.9631C35.3712 34 35.7022 33.669 35.7022 33.2609C35.7022 32.8527 35.3712 32.5217 34.9631 32.5217H34.2067V16.992C36.2685 16.6395 37.8432 14.8409 37.8432 12.6802V10.8618C37.8432 10.7457 37.8157 10.631 37.7631 10.5274ZM5.11461 1.47825H32.7283V2.95673H27.6493H21.8308H16.0125H10.1939H5.11461V1.47825ZM23.2934 10.7872L22.6488 4.43498H27.1017L29.092 10.9718V12.6802C29.092 14.2777 27.7922 15.5774 26.1946 15.5774C24.597 15.5774 23.2971 14.2777 23.2971 12.6802V10.8618C23.2971 10.8369 23.2959 10.812 23.2934 10.7872ZM21.8189 10.8992V12.6802H21.8188C21.8188 14.2777 20.5191 15.5774 18.9217 15.5774C17.324 15.5774 16.0242 14.2777 16.0242 12.6802V10.8992L16.6804 4.43498H21.1629L21.8189 10.8992ZM15.1946 4.43506L14.5498 10.7873C14.5472 10.812 14.5459 10.8369 14.5459 10.8618V12.6802C14.5459 14.2777 13.2463 15.5774 11.6486 15.5774C10.051 15.5774 8.75134 14.2777 8.75134 12.6802V10.9719L10.7417 4.43506H15.1946ZM1.47825 12.6802V11.0386L4.82931 4.43498H9.19629L7.30509 10.6465C7.28388 10.7163 7.27301 10.7889 7.27301 10.8618V12.6802C7.27301 14.2777 5.97318 15.5774 4.37549 15.5774C2.77794 15.5774 1.47825 14.2777 1.47825 12.6802ZM29.772 32.5217H25.3371V30.3042V27.3477H26.0763C26.4846 27.3477 26.8155 27.0168 26.8155 26.6086C26.8155 26.2004 26.4846 25.8695 26.0763 25.8695H25.3371V20.6957H29.772V32.5217ZM32.7283 32.5217H31.2501V19.9566C31.2501 19.5484 30.9192 19.2175 30.5109 19.2175H24.5979H7.33207C6.92377 19.2175 6.59294 19.5484 6.59294 19.9566V30.3042C6.59294 30.7124 6.92377 31.0433 7.33207 31.0433H23.8589V32.5217H5.11461V16.992C6.31895 16.7862 7.35705 16.0875 8.01214 15.1106C8.79798 16.2825 10.1345 17.0557 11.6486 17.0557C13.1626 17.0557 14.4991 16.2825 15.285 15.1106C16.0709 16.2825 17.4076 17.0557 18.9216 17.0557C20.4355 17.0557 21.7721 16.2825 22.5579 15.1106C23.3438 16.2825 24.6804 17.0557 26.1944 17.0557C27.7085 17.0557 29.0451 16.2825 29.8309 15.1106C30.486 16.0875 31.5241 16.7862 32.7283 16.992V32.5217ZM15.28 20.6957H17.8551L16.4496 22.1009C16.161 22.3895 16.161 22.8575 16.4496 23.1462C16.5939 23.2906 16.7831 23.3628 16.9723 23.3628C17.1614 23.3628 17.3505 23.2906 17.4948 23.1463L19.9457 20.6957H23.8588V29.5651H8.07119V27.9045L15.28 20.6957ZM8.07119 25.8139V20.6957H13.1894L8.07119 25.8139ZM36.3649 12.6802C36.3649 14.2777 35.0652 15.5774 33.4676 15.5774C31.87 15.5774 30.5702 14.2777 30.5702 12.6802V10.8618C30.5702 10.7889 30.5594 10.7163 30.5381 10.6465L28.6469 4.43498H33.0139L36.3649 11.0386V12.6802Z" fill="#838383"/>
                  <path d="M15.4583 24.8768C15.6468 24.8768 15.8353 24.8051 15.9795 24.6618L15.9918 24.6496C16.2813 24.3618 16.2827 23.8938 15.9949 23.6043C15.707 23.3148 15.239 23.3134 14.9496 23.6012L14.9372 23.6135C14.6477 23.9013 14.6465 24.3693 14.9341 24.6588C15.0786 24.8041 15.2684 24.8768 15.4583 24.8768Z" fill="#838383"/>
                  <path d="M0.756571 32.5215H0.739127C0.330907 32.5215 0 32.8525 0 33.2606C0 33.6688 0.330907 33.9997 0.739127 33.9997H0.756571C1.16472 33.9997 1.4957 33.6688 1.4957 33.2606C1.4957 32.8525 1.16479 32.5215 0.756571 32.5215Z" fill="#838383"/>
                  <path d="M37.104 32.522H37.0866C36.6784 32.522 36.3475 32.853 36.3475 33.2611C36.3475 33.6692 36.6784 34.0002 37.0866 34.0002H37.104C37.5123 34.0002 37.8432 33.6692 37.8432 33.2611C37.8432 32.853 37.5123 32.522 37.104 32.522Z" fill="#838383"/>
                </svg>
              </div>
            </div>
            <div class="col-9 pl-0  d-flex align-items-center col-md-10 col-lg-11">
              <div class="user-info py-0 pl-1">
                  <div class="wrapper-info">
                    <h5 class="font-weight-bold mb-0">Hola, Eutuxia Group CA</h5>
                    <p class="fs-12 p-0 m-0">Verifica tus datos para completar la compra</p>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <!-- / usuario -->
  
    <!-- Carrito formulario-->
    <section class="p-0 d-block d-md-none">
      <div class="container">
        <div class="row">
            <div class="col text-center">
              <button type="button" class="btn btn-primary btn-block py-btn" data-toggle="modal" data-target="#modalFormulario">
                <div class="row">
                  <div class="col-4 px-0 d-flex align-items-center">
                    <p class="text-white fs-14 text-left font-weight-bold">2,000.00 $</p>
                  </div>
                  <div class="col-8 px-0">
                    <p class="text-white fs-14 text-right font-weight-bold">Camion de compras
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
              <div class="modal fade" id="modalFormulario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header d-block pt-2 pb-1"> <!--  Modal header-->
                        <div class="row">
                            <div class="col-10 pt-3">
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

                      <div class="container-fluid pt-1">

                        <h5 class="text-left font-weight-bold fs-18 pl-1">Listado de productos</h5>
                        
                        <!--  modal-body-->

                        <div class="row px-1 pt-1 pb-0 mb-0"> 
                          <div class="col">
                            <div class="row boxed border shadow radeus">
                              <div class="col-4 col-md-4 px-0">
                                <img class="img-border" src="{{asset('images/lineas/linea-viveres.jpg')}}" alt="Product-related">
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
                                      <form class="text-center">
                                        <div class="form-group m-0">
                                          <label class="labelfs" for="cantidad">Cantidad</label>
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
                            <div class="row boxed border shadow radeus">
                              <div class="col-4 col-md-4 px-0">
                                <img class="img-border" src="{{asset('images/lineas/linea-viveres.jpg')}}" alt="Product-related">
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
                                      <form class="text-center">
                                        <div class="form-group m-0">
                                          <label class="labelfs" for="cantidad">Cantidad</label>
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
                            <div class="row boxed border shadow radeus">
                              <div class="col-4 col-md-4 px-0">
                                <img class="img-border" src="{{asset('images/lineas/linea-viveres.jpg')}}" alt="Product-related">
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
                                      <form class="text-center">
                                        <div class="form-group m-0">
                                          <label class="labelfs" for="cantidad">Cantidad</label>
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

      <div class="container">
        <div class="row p-1">
          <div class="col-2 my-0 pr-0 col-md-1 col-lg-1">
            <button class="rounded-circle btn-steps bg-primary border-0">
              <p class="text-white small">1</p>
            </button>
          </div>
          <div class="col-10 d-flex align-items-center pl-0 col-md-11 col-lg-11">
            <p class="font-weight-bold m-0 small text-black">Datos del comprador</p>
          </div>
        </div>
      </div>
  
        <!-- trj datos de usuario-->
      <div class="container mt-1">
        <div class="boxed border shadow">
          <div class="info-container p-2">
            <div class="row mb-3">
              <div class="col-6">
                <p class="text-black font-weight-bold small">Nombre y apellido</p>
              </div>
              <div class="col-6">
                <p class="small text-md-center">Juan Perez</p>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-6">
                <p class="text-black font-weight-bold small">Documento</p>
              </div>
              <div class="col-6">
                <p class="small text-md-center">C.I. 20.409.372</p>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-6">
                <p class="text-black font-weight-bold small">Telefono</p>
              </div>
              <div class="col-6">
                <p class="small text-md-center">+58 412 786 9664</p>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-6">
                <p class="text-black font-weight-bold small">Telefono alternativo</p>
              </div>
              <div class="col-6">
                <p class="small text-md-center">+58 412 786 9664</p>
              </div>
            </div>
            <div class="row">
              <div class="col-12 text-center">
                <a href="#" class="small font-weight-bold">Editar datos de comprador</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /datos de usuario-->

    <!-- Buttoms-->

    <section class="my-0 py-1">
      <div class="container">
        <div class="row">
          <div class="col-5 pr-0">
            <button type="button" class="btn btn-secondary btn-sm btn-block radius-right text-secondary" disabled>x</button>
          </div>
          <div class="col-7 pl-0">
            <button id=btn_next1 class="btn btn-primary btn-sm btn-block radius-left font-weight-bold">Siguiente</button>
          </div>
        </div>
      </div>
    </section>
    <!-- /Buttoms-->
  
</section>



<!-------------------------- Formulario II ----------------------------->
<section id="formulario2" class="p-0 m-0 hide show">

    <!-- usuario -->
      <section class="pb-0 pt-2">
        <div class="container">
          <div class="row py-1">
            <div class="col-3 mb-0 d-flex justify-content-center pr-0 col-md-2 col-lg-1">
              <div class="box-shadow-user pr-0 m-0 bg-secondary rounded-circle wh-user d-flex align-items-center justify-content-center">
                <svg class="p-1" width="53" height="53" viewBox="0 0 38 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M37.7631 10.5274L34.2066 3.51869V0.739127C34.2066 0.330981 33.8758 0 33.4675 0H4.37549C3.96734 0 3.63636 0.330981 3.63636 0.739127V3.51906L0.0799736 10.5274C0.0274216 10.631 0 10.7457 0 10.8618V12.6802C0 14.8408 1.57464 16.6395 3.63636 16.992V32.5215H2.88001C2.47179 32.5215 2.14088 32.8524 2.14088 33.2606C2.14088 33.6687 2.47179 33.9997 2.88001 33.9997H4.36979C4.37164 33.9997 4.37356 34 4.37549 34H24.598H30.5111H33.4676H34.9631C35.3712 34 35.7022 33.669 35.7022 33.2609C35.7022 32.8527 35.3712 32.5217 34.9631 32.5217H34.2067V16.992C36.2685 16.6395 37.8432 14.8409 37.8432 12.6802V10.8618C37.8432 10.7457 37.8157 10.631 37.7631 10.5274ZM5.11461 1.47825H32.7283V2.95673H27.6493H21.8308H16.0125H10.1939H5.11461V1.47825ZM23.2934 10.7872L22.6488 4.43498H27.1017L29.092 10.9718V12.6802C29.092 14.2777 27.7922 15.5774 26.1946 15.5774C24.597 15.5774 23.2971 14.2777 23.2971 12.6802V10.8618C23.2971 10.8369 23.2959 10.812 23.2934 10.7872ZM21.8189 10.8992V12.6802H21.8188C21.8188 14.2777 20.5191 15.5774 18.9217 15.5774C17.324 15.5774 16.0242 14.2777 16.0242 12.6802V10.8992L16.6804 4.43498H21.1629L21.8189 10.8992ZM15.1946 4.43506L14.5498 10.7873C14.5472 10.812 14.5459 10.8369 14.5459 10.8618V12.6802C14.5459 14.2777 13.2463 15.5774 11.6486 15.5774C10.051 15.5774 8.75134 14.2777 8.75134 12.6802V10.9719L10.7417 4.43506H15.1946ZM1.47825 12.6802V11.0386L4.82931 4.43498H9.19629L7.30509 10.6465C7.28388 10.7163 7.27301 10.7889 7.27301 10.8618V12.6802C7.27301 14.2777 5.97318 15.5774 4.37549 15.5774C2.77794 15.5774 1.47825 14.2777 1.47825 12.6802ZM29.772 32.5217H25.3371V30.3042V27.3477H26.0763C26.4846 27.3477 26.8155 27.0168 26.8155 26.6086C26.8155 26.2004 26.4846 25.8695 26.0763 25.8695H25.3371V20.6957H29.772V32.5217ZM32.7283 32.5217H31.2501V19.9566C31.2501 19.5484 30.9192 19.2175 30.5109 19.2175H24.5979H7.33207C6.92377 19.2175 6.59294 19.5484 6.59294 19.9566V30.3042C6.59294 30.7124 6.92377 31.0433 7.33207 31.0433H23.8589V32.5217H5.11461V16.992C6.31895 16.7862 7.35705 16.0875 8.01214 15.1106C8.79798 16.2825 10.1345 17.0557 11.6486 17.0557C13.1626 17.0557 14.4991 16.2825 15.285 15.1106C16.0709 16.2825 17.4076 17.0557 18.9216 17.0557C20.4355 17.0557 21.7721 16.2825 22.5579 15.1106C23.3438 16.2825 24.6804 17.0557 26.1944 17.0557C27.7085 17.0557 29.0451 16.2825 29.8309 15.1106C30.486 16.0875 31.5241 16.7862 32.7283 16.992V32.5217ZM15.28 20.6957H17.8551L16.4496 22.1009C16.161 22.3895 16.161 22.8575 16.4496 23.1462C16.5939 23.2906 16.7831 23.3628 16.9723 23.3628C17.1614 23.3628 17.3505 23.2906 17.4948 23.1463L19.9457 20.6957H23.8588V29.5651H8.07119V27.9045L15.28 20.6957ZM8.07119 25.8139V20.6957H13.1894L8.07119 25.8139ZM36.3649 12.6802C36.3649 14.2777 35.0652 15.5774 33.4676 15.5774C31.87 15.5774 30.5702 14.2777 30.5702 12.6802V10.8618C30.5702 10.7889 30.5594 10.7163 30.5381 10.6465L28.6469 4.43498H33.0139L36.3649 11.0386V12.6802Z" fill="#838383"/>
                  <path d="M15.4583 24.8768C15.6468 24.8768 15.8353 24.8051 15.9795 24.6618L15.9918 24.6496C16.2813 24.3618 16.2827 23.8938 15.9949 23.6043C15.707 23.3148 15.239 23.3134 14.9496 23.6012L14.9372 23.6135C14.6477 23.9013 14.6465 24.3693 14.9341 24.6588C15.0786 24.8041 15.2684 24.8768 15.4583 24.8768Z" fill="#838383"/>
                  <path d="M0.756571 32.5215H0.739127C0.330907 32.5215 0 32.8525 0 33.2606C0 33.6688 0.330907 33.9997 0.739127 33.9997H0.756571C1.16472 33.9997 1.4957 33.6688 1.4957 33.2606C1.4957 32.8525 1.16479 32.5215 0.756571 32.5215Z" fill="#838383"/>
                  <path d="M37.104 32.522H37.0866C36.6784 32.522 36.3475 32.853 36.3475 33.2611C36.3475 33.6692 36.6784 34.0002 37.0866 34.0002H37.104C37.5123 34.0002 37.8432 33.6692 37.8432 33.2611C37.8432 32.853 37.5123 32.522 37.104 32.522Z" fill="#838383"/>
                </svg>
              </div>
            </div>
            <div class="col-9 pl-0 d-flex align-items-center col-md-10 col-lg-11">
              <div class="user-info py-0 pl-1">
                  <div class="wrapper-info">
                    <h5 class="font-weight-bold mb-0">Hola, Eutuxia Group CA</h5>
                    <p class="fs-12 p-0 m-0">Verifica tus datos para completar la compra</p>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <!-- / usuario -->
    
      <!-- Carrito formulario-->
      <section class="p-0 d-block d-md-none">
        <div class="container">
          <div class="row">
              <div class="col text-center">
                <button type="button" class="btn btn-primary btn-block py-btn" data-toggle="modal" data-target="#modalFormulario">
                  <div class="row">
                    <div class="col-4 px-0 d-flex align-items-center">
                      <p class="text-white fs-14 text-left font-weight-bold">2,000.00 $</p>
                    </div>
                    <div class="col-8 px-0">
                      <p class="text-white fs-14 text-right font-weight-bold">Camion de compras
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
                <div class="modal fade" id="modalFormulario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header d-block pt-2 pb-1"> <!--  Modal header-->
                          <div class="row">
                              <div class="col-10 pt-3">
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

                        <div class="container-fluid pt-1">

                          <h5 class="text-left font-weight-bold fs-18 pl-1">Listado de productos</h5>
                          
                          <!--  modal-body-->

                          <div class="row px-1 pt-1 pb-0 mb-0"> 
                            <div class="col">
                              <div class="row boxed border shadow radeus">
                                <div class="col-4 col-md-4 px-0">
                                  <img class="img-border" src="{{asset('images/lineas/linea-viveres.jpg')}}" alt="Product-related">
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
                                        <form class="text-center">
                                          <div class="form-group m-0">
                                            <label class="labelfs" for="cantidad">Cantidad</label>
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
                              <div class="row boxed border shadow radeus">
                                <div class="col-4 col-md-4 px-0">
                                  <img class="img-border" src="{{asset('images/lineas/linea-viveres.jpg')}}" alt="Product-related">
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
                                        <form class="text-center">
                                          <div class="form-group m-0">
                                            <label class="labelfs" for="cantidad">Cantidad</label>
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
                              <div class="row boxed border shadow radeus">
                                <div class="col-4 col-md-4 px-0">
                                  <img class="img-border" src="{{asset('images/lineas/linea-viveres.jpg')}}" alt="Product-related">
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
                                        <form class="text-center">
                                          <div class="form-group m-0">
                                            <label class="labelfs" for="cantidad">Cantidad</label>
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
                        </div>
                      </div>
                    </div>
                </div>
              </div>
          </div>
        </div>
      </section>
    <!-- /Carrito formulario-->

  <!-- datos de empresa-->

    <section class="py-1">

      <div class="container">
        <div class="row p-1">
          <div class="col-2 my-0 pr-0 d-block d-md-none">
            <button id=btn_clr class="rounded-circle btn-steps bg-blue border-0">
              <p class="text-white small">1</p>
            </button>
          </div>
          <div class="col-2 my-0 pr-0 col-md-1">
            <button class="rounded-circle btn-steps bg-primary border-0">
              <p class="text-white small">2</p>
            </button>
          </div>
          <div class="col-8 d-flex align-items-center pl-0 col-md-11">
            <p class="font-weight-bold m-0 small text-black">Datos de facturacion</p>
          </div>
        </div>
      </div>
  <!-- /datos de empresa-->

        <!-- trj datos de empresa-->
        <div class="container mt-1">
          <div class="boxed border shadow">
            <div class="info-container p-2">
              <div class="row mb-3">
                <div class="col-6">
                  <p class="text-black font-weight-bold small">Empresa</p>
                </div>
                <div class="col-6">
                  <p class="small text-md-center">Eutuxia Group C.A</p>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-6">
                  <p class="text-black font-weight-bold small">R.I.F</p>
                </div>
                <div class="col-6">
                  <p class="small text-md-center">R.I.F J- 239872321 - 2</p>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-6">
                  <p class="text-black font-weight-bold small">SADA</p>
                </div>
                <div class="col-6">
                  <p class="small text-md-center">4127869664432</p>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-6">
                  <p class="text-black font-weight-bold small">Horario de atencion</p>
                </div>
                <div class="col-6">
                  <p class="small text-md-center">8:00 AM - 11:00 AM</p>
                </div>
              </div>
              <div class="row">
                <div class="col-12 text-center">
                  <a href="#" class="small font-weight-bold">Editar datos de empresa</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- trj extra datos de empresa-->  
        <div class="container mt-1 pt-0">
          <div class="row">
            <div class="col">
              <div class="boxed border shadow">
                <div class="info p-2 mb-1">
                  <p class="font-weight-bold text-black small pl-1">Direccion Juridica</p>
                  <p class="font-weight-bold text-black px-3 pb-0 mb-0 small">Calle 1 Avenida 10 Local 45 </p>
                  <p class="small px-3 my-0 py-0">Cerca de colegio Moral y Luces</p>
                  <p class="small px-3 my-0 py-0">Carabobo, Valencia (2001)</p>
                  <p class="small px-3 my-0 py-0 pb-2">Juan Perez +58 414 543 4563</p>
                  <div class="row">
                    <div class="col-12 text-center">
                      <a href="#" class="small font-weight-bold">Editar dirección Jurídica</a>
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
      <section class="my-0 py-1">
        <div class="container">
          <div class="row">
            <div class="col-5 pr-0">
              <button id=btn_prior1 class="btn btn-secondary btn-sm btn-block radius-right text-muted font-weight-bold">Anterior</button>
            </div>
            <div class="col-7 pl-0">
              <button id=btn_next2 class="btn btn-primary btn-sm btn-block radius-left font-weight-bold">Siguiente</button>
            </div>
          </div>
        </div>
      </section>
    <!-- /Buttoms-->
</section>

<!-------------------------- Formulario III ----------------------------->

<section id="formulario3" class="p-0 m-0 hide show">
    <!-- usuario -->
      <section class="pb-0 pt-2">
          <div class="container">
            <div class="row py-1">
              <div class="col-3 mb-0 d-flex justify-content-center pr-0 col-md-2 col-lg-1">
                <div class="box-shadow-user pr-0 m-0 bg-secondary rounded-circle wh-user d-flex align-items-center justify-content-center">
                  <svg class="p-1" width="53" height="53" viewBox="0 0 38 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M37.7631 10.5274L34.2066 3.51869V0.739127C34.2066 0.330981 33.8758 0 33.4675 0H4.37549C3.96734 0 3.63636 0.330981 3.63636 0.739127V3.51906L0.0799736 10.5274C0.0274216 10.631 0 10.7457 0 10.8618V12.6802C0 14.8408 1.57464 16.6395 3.63636 16.992V32.5215H2.88001C2.47179 32.5215 2.14088 32.8524 2.14088 33.2606C2.14088 33.6687 2.47179 33.9997 2.88001 33.9997H4.36979C4.37164 33.9997 4.37356 34 4.37549 34H24.598H30.5111H33.4676H34.9631C35.3712 34 35.7022 33.669 35.7022 33.2609C35.7022 32.8527 35.3712 32.5217 34.9631 32.5217H34.2067V16.992C36.2685 16.6395 37.8432 14.8409 37.8432 12.6802V10.8618C37.8432 10.7457 37.8157 10.631 37.7631 10.5274ZM5.11461 1.47825H32.7283V2.95673H27.6493H21.8308H16.0125H10.1939H5.11461V1.47825ZM23.2934 10.7872L22.6488 4.43498H27.1017L29.092 10.9718V12.6802C29.092 14.2777 27.7922 15.5774 26.1946 15.5774C24.597 15.5774 23.2971 14.2777 23.2971 12.6802V10.8618C23.2971 10.8369 23.2959 10.812 23.2934 10.7872ZM21.8189 10.8992V12.6802H21.8188C21.8188 14.2777 20.5191 15.5774 18.9217 15.5774C17.324 15.5774 16.0242 14.2777 16.0242 12.6802V10.8992L16.6804 4.43498H21.1629L21.8189 10.8992ZM15.1946 4.43506L14.5498 10.7873C14.5472 10.812 14.5459 10.8369 14.5459 10.8618V12.6802C14.5459 14.2777 13.2463 15.5774 11.6486 15.5774C10.051 15.5774 8.75134 14.2777 8.75134 12.6802V10.9719L10.7417 4.43506H15.1946ZM1.47825 12.6802V11.0386L4.82931 4.43498H9.19629L7.30509 10.6465C7.28388 10.7163 7.27301 10.7889 7.27301 10.8618V12.6802C7.27301 14.2777 5.97318 15.5774 4.37549 15.5774C2.77794 15.5774 1.47825 14.2777 1.47825 12.6802ZM29.772 32.5217H25.3371V30.3042V27.3477H26.0763C26.4846 27.3477 26.8155 27.0168 26.8155 26.6086C26.8155 26.2004 26.4846 25.8695 26.0763 25.8695H25.3371V20.6957H29.772V32.5217ZM32.7283 32.5217H31.2501V19.9566C31.2501 19.5484 30.9192 19.2175 30.5109 19.2175H24.5979H7.33207C6.92377 19.2175 6.59294 19.5484 6.59294 19.9566V30.3042C6.59294 30.7124 6.92377 31.0433 7.33207 31.0433H23.8589V32.5217H5.11461V16.992C6.31895 16.7862 7.35705 16.0875 8.01214 15.1106C8.79798 16.2825 10.1345 17.0557 11.6486 17.0557C13.1626 17.0557 14.4991 16.2825 15.285 15.1106C16.0709 16.2825 17.4076 17.0557 18.9216 17.0557C20.4355 17.0557 21.7721 16.2825 22.5579 15.1106C23.3438 16.2825 24.6804 17.0557 26.1944 17.0557C27.7085 17.0557 29.0451 16.2825 29.8309 15.1106C30.486 16.0875 31.5241 16.7862 32.7283 16.992V32.5217ZM15.28 20.6957H17.8551L16.4496 22.1009C16.161 22.3895 16.161 22.8575 16.4496 23.1462C16.5939 23.2906 16.7831 23.3628 16.9723 23.3628C17.1614 23.3628 17.3505 23.2906 17.4948 23.1463L19.9457 20.6957H23.8588V29.5651H8.07119V27.9045L15.28 20.6957ZM8.07119 25.8139V20.6957H13.1894L8.07119 25.8139ZM36.3649 12.6802C36.3649 14.2777 35.0652 15.5774 33.4676 15.5774C31.87 15.5774 30.5702 14.2777 30.5702 12.6802V10.8618C30.5702 10.7889 30.5594 10.7163 30.5381 10.6465L28.6469 4.43498H33.0139L36.3649 11.0386V12.6802Z" fill="#838383"/>
                    <path d="M15.4583 24.8768C15.6468 24.8768 15.8353 24.8051 15.9795 24.6618L15.9918 24.6496C16.2813 24.3618 16.2827 23.8938 15.9949 23.6043C15.707 23.3148 15.239 23.3134 14.9496 23.6012L14.9372 23.6135C14.6477 23.9013 14.6465 24.3693 14.9341 24.6588C15.0786 24.8041 15.2684 24.8768 15.4583 24.8768Z" fill="#838383"/>
                    <path d="M0.756571 32.5215H0.739127C0.330907 32.5215 0 32.8525 0 33.2606C0 33.6688 0.330907 33.9997 0.739127 33.9997H0.756571C1.16472 33.9997 1.4957 33.6688 1.4957 33.2606C1.4957 32.8525 1.16479 32.5215 0.756571 32.5215Z" fill="#838383"/>
                    <path d="M37.104 32.522H37.0866C36.6784 32.522 36.3475 32.853 36.3475 33.2611C36.3475 33.6692 36.6784 34.0002 37.0866 34.0002H37.104C37.5123 34.0002 37.8432 33.6692 37.8432 33.2611C37.8432 32.853 37.5123 32.522 37.104 32.522Z" fill="#838383"/>
                  </svg>
                </div>
              </div>
              <div class="col-9 pl-0  d-flex align-items-center col-md-10 col-lg-11">
                <div class="user-info py-0 pl-1">
                    <div class="wrapper-info">
                      <h5 class="font-weight-bold mb-0">Hola, Eutuxia Group CA</h5>
                      <p class="fs-12 p-0 m-0">Verifica tus datos para completar la compra</p>
                    </div>
                </div>
              </div>
            </div>
          </div>
      </section>
    <!-- / usuario -->
    
      <!-- Carrito formulario-->
      <section class="p-0 d-block d-md-none">
      

        <div class="container">
          <div class="row">
              <div class="col text-center">
                <button type="button" class="btn btn-primary btn-block py-btn" data-toggle="modal" data-target="#modalFormulario">
                  <div class="row">
                    <div class="col-4 px-0 d-flex align-items-center">
                      <p class="text-white fs-14 text-left font-weight-bold">2,000.00 $</p>
                    </div>
                    <div class="col-8 px-0">
                      <p class="text-white fs-14 text-right font-weight-bold">Camion de compras
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
                <div class="modal fade" id="modalFormulario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header d-block pt-2 pb-1"> <!--  Modal header-->
                          <div class="row">
                              <div class="col-10 pt-3">
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

                        <div class="container-fluid pt-1">

                          <h5 class="text-left font-weight-bold fs-18 pl-1">Listado de productos</h5>
                          
                          <!--  modal-body-->

                          <div class="row px-1 pt-1 pb-0 mb-0"> 
                            <div class="col">
                              <div class="row boxed border shadow radeus">
                                <div class="col-4 col-md-4 px-0">
                                  <img class="img-border" src="{{asset('images/lineas/linea-viveres.jpg')}}" alt="Product-related">
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
                                        <form class="text-center">
                                          <div class="form-group m-0">
                                            <label class="labelfs" for="cantidad">Cantidad</label>
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
                              <div class="row boxed border shadow radeus">
                                <div class="col-4 col-md-4 px-0">
                                  <img class="img-border" src="{{asset('images/lineas/linea-viveres.jpg')}}" alt="Product-related">
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
                                        <form class="text-center">
                                          <div class="form-group m-0">
                                            <label class="labelfs" for="cantidad">Cantidad</label>
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
                              <div class="row boxed border shadow radeus">
                                <div class="col-4 col-md-4 px-0">
                                  <img class="img-border" src="{{asset('images/lineas/linea-viveres.jpg')}}" alt="Product-related">
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
                                        <form class="text-center">
                                          <div class="form-group m-0">
                                            <label class="labelfs" for="cantidad">Cantidad</label>
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

        <div class="container">
          <div class="row p-1">
            <div class="col-2 my-0 pr-0 d-block d-md-none">
              <button id=btn_clr1 class="rounded-circle btn-steps bg-blue border-0">
                <p class="text-white small">1</p>
              </button>
            </div>
            <div class="col-2 my-0 pr-0 d-md-none">
              <button id=btn_clr2 class="rounded-circle btn-steps bg-blue border-0">
                <p class="text-white small">2</p>
              </button>
            </div>
            <div class="col-2 my-0 pr-0 col-md-1">
              <button class="rounded-circle btn-steps bg-primary border-0">
                <p class="text-white small">3</p>
              </button>
            </div>
            <div class="col-6 d-flex align-items-center pl-1 col-md-11">
              <p class="font-weight-bold m-0 small text-black">Datos de envío</p>
            </div>
          </div>
        </div>
    
          <!-- trj datos de envio-->
        <div class="container mt-1">
          <div class="row">
            <div class="col">
              <div class="boxed border shadow">
                <div class="info p-2 mb-1">
                  <p class="font-weight-bold text-black small">Direccion de envio</p>
                  <p class="font-weight-bold text-black px-2 pb-0 mb-0 small">Calle 1 Avenida 10 Local 45 </p>
                  <p class="small px-2 my-0 py-0">Cerca de colegio Moral y Luces</p>
                  <p class="small px-2 my-0 py-0">Carabobo, Valencia (2001)</p>
                  <p class="small px-2 my-0 py-0 pb-2">Juan Perez +58 414 543 4563</p>
                  <div class="row mb-1">
                    <div class="col-6 pr-0">
                      <p class="font-weight-bold text-black small">Sugerencia de entrega</p>
                    </div>
                    <div class="col-6 text-md-center">
                      <p class="small pl-0">8:00AM - 11:00AM</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 text-center">
                      <a href="#" class="small font-weight-bold">Cambiar dirección de envío</a>
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
      <section class="my-0 py-1">
        <div class="container">
          <div class="row">
            <div class="col-5 pr-0">
              <button id=btn_prior2 class="btn btn-secondary btn-sm btn-block radius-right text-muted font-weight-bold">Anterior</button>
            </div>
            <div class="col-7 pl-0">
              <button id=btn_next3 class="btn btn-primary btn-sm btn-block radius-left font-weight-bold">Finalizar Compra</button>
            </div>
          </div>
        </div>
      </section>
    <!-- /Buttoms-->
</section>

<!-------------------------- Formulario IV ----------------------------->

  <section id="formulario4" class="p-0 m-0 hide show">


        <section class="pb-1 pt-2">

          <div class="container">
            <div class="row p-1">
              <div class="col-2 my-0 pr-0 col-md-1">
                <button class="rounded-circle btn-steps bg-blue border-0" disabled>
                  <p class="text-white small">1</p>
                </button>
              </div>
              <div class="col-2 my-0 pr-0 col-md-1">
                <button class="rounded-circle btn-steps bg-blue border-0" disabled>
                  <p class="text-white small">2</p>
                </button>
              </div>
              <div class="col-2 my-0 pr-0 col-md-1">
                <button class="rounded-circle btn-steps bg-blue border-0" disabled>
                  <p class="text-white small">3</p>
                </button>
              </div>
              <div class="col-6 d-flex align-items-center pl-1 col-md-9">
                <p class="font-weight-bold m-0 small text-black">Fin del proceso</p>
              </div>
            </div>
          </div>
      
            <!-- trj compra-->
            <div class="container mt-1">
            <div class="boxed border shadow">
              <div class="box-body p-2">
                <figure class="text-center pb-2">
                  <img src="{{asset('images/imgs/logistic.svg')}}" alt="imag">  
                </figure>
                <h4 class="font-weight-bold text-center text-primary pb-1 m-0">Gracias por su compra</h4>
                <div class="col text-info pt-1 pb-2 px-1 col-md-6 offset-md-3 ">
                  <p class="fs-14">Eutuxia Group CA</p>
                  <p class="small text-muted">Para coordinar tu pedido uno de nuestros asesores comerciales se pondra en contacto a la brevedad</p>
                </div>
              </div>
            </div>
            <div class="boxed border shadow">

            </div>

        </section>

      <!-- /datos de usuario-->

      <!-- Buttoms-->
      <section class="my-0 py-1">
        <div class="container">
          <div class="row">
            <div class="col-5 pr-0">
              <button class="btn btn-secondary btn-sm btn-block radius-right text-secondary" disabled>x</button>
            </div>
            <div class="col-7 pl-0">
              <button class="btn btn-primary btn-sm btn-block radius-left font-weight-bold">Ver Compras</button>
            </div>
          </div>
        </div>
      </section>
      <!-- /Buttoms-->

  </section>
<!-------------------------- Formulario V ----------------------------->

<section id="formulario5" class="pt-5 m-0 hide show">
  <div class="container">
    <div class="row container">
      <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3 boxed shadow p-2 border">
        <div class="row Compra mb-0">
          <div class="col">
            <div class="Compra_text_tittle">
              <h3 class="font-weight-bold text-black mb-0">Finalizar la compra</h3>
              <p class="pt-0 pb-2 fs-12">Verifica los datos para completar la compra</p>
            </div>
          </div>
        </div>
        <div class="row boton mb-0 pb-2">
          <div class="col boton_details">
            <button id="sell" class="btn btn-primary btn-sm btn-block font-weight-bold">Finalizar Compra</button>
          </div>
        </div>

        <div class="container">

          <div class="row mb-0 pb">
            <div class="col-6 mb-1">
              <p class="">Subtotal</p>
            </div>
            <div class="col-6 mb-1">
              <p class="text-right">53,76 $</p>
            </div>
          </div>    

          <div class="row mb-0 pb-1">
            <div class="col-6 mb-1">
              <p class="">IVA</p>
            </div>
            <div class="col-6 mb-1">
              <p class="text-right">8,00 $</p>
            </div>  
          </div>

          <div class="row mb-0">
            <div class="col-6 mb-1">
              <p class="lead text-blue font-weight-bold fs-24">TOTAL</p>
            </div>
            <div class="col-6 mb-1">
              <p class="lead font-weight-bold text-black fs-24 text-right">65,00 $</p>
            </div>
          </div> 

          <div class="row mb-0 pb-2">
            <div class="col-6 mb-1">
              <p class=" font-weight-bold text-blue">TOTAL(Bs)</p>
            </div>
            <div class="col-6 mb-1">
              <p class=" font-weight-bold text-black text-right">90.000.000,00 Bs</p>
            </div> 
          </div>
        </div>
        <div class="row mb-0 boton-formulario">
          <div class="col-12 px-0">
            <!-- Carrito formulario-->
            <section class="p-0">
              <div class="container">
                <div class="row">
                    <div class="col text-center">
                      <button type="button" class="btn btn-primary btn-block py-btn" data-toggle="modal" data-target="#modalFormulario">
                        <div class="row">
                          <div class="col-4 px-0 d-flex align-items-center">
                            <p class="text-white fs-14 text-left font-weight-bold">2,000.00 $</p>
                          </div>
                          <div class="col-8 px-0">
                            <p class="text-white fs-14 text-right font-weight-bold">Camion de compras
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
                      <div class="modal fade" id="modalFormulario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header d-block pt-2 pb-1"> <!--  Modal header-->
                                <div class="row">
                                    <div class="col-10 pt-3">
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
  
                              <div class="container-fluid pt-1">
  
                                <h5 class="text-left font-weight-bold fs-18 pl-1">Listado de productos</h5>
                                
                                <!--  modal-body-->
  
                                <div class="row px-1 pt-1 pb-0 mb-0"> 
                                  <div class="col">
                                    <div class="row boxed border shadow radeus">
                                      <div class="col-4 col-md-4 px-0">
                                        <img class="img-border" src="{{asset('images/lineas/linea-viveres.jpg')}}" alt="Product-related">
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
                                              <form class="text-center">
                                                <div class="form-group m-0">
                                                  <label class="labelfs" for="cantidad">Cantidad</label>
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
                                    <div class="row boxed border shadow radeus">
                                      <div class="col-4 col-md-4 px-0">
                                        <img class="img-border" src="{{asset('images/lineas/linea-viveres.jpg')}}" alt="Product-related">
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
                                              <form class="text-center">
                                                <div class="form-group m-0">
                                                  <label class="labelfs" for="cantidad">Cantidad</label>
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
                                    <div class="row boxed border shadow radeus">
                                      <div class="col-4 col-md-4 px-0">
                                        <img class="img-border" src="{{asset('images/lineas/linea-viveres.jpg')}}" alt="Product-related">
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
                                              <form class="text-center">
                                                <div class="form-group m-0">
                                                  <label class="labelfs" for="cantidad">Cantidad</label>
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
                              </div>
                            </div>
                          </div>
                      </div>
                    </div>
                </div>
              </div>
            </section>
            <!-- /Carrito formulario-->
          </div>
        </div>
        
      </div>
    </div>
  </div>
</section>

<!-------------------------- Javascript ----------------------------->

    <script>
    const $form1 = document.getElementById('formulario1');
    const $form2 = document.getElementById('formulario2');
    const $form3 = document.getElementById('formulario3');
    const $form4 = document.getElementById('formulario4');
    const $form5 = document.getElementById('formulario5');
    const $btn_next1 = document.getElementById('btn_next1');
    const $btn_next2 = document.getElementById('btn_next2');
    const $btn_next3 = document.getElementById('btn_next3');
    const $btn_prior1 = document.getElementById('btn_prior1');
    const $btn_prior2 = document.getElementById('btn_prior2');
    const $btn_clr = document.getElementById('btn_clr');
    const $btn_clr1 = document.getElementById('btn_clr1');
    const $btn_clr2 = document.getElementById('btn_clr2');
    const $sell = document.getElementById('sell');

    /* next */
    $btn_next1.addEventListener('click', () => {
      $form1.classList.toggle('hide')&$form2.classList.toggle('hide');
    });

    $btn_next2.addEventListener('click', () => {
      $form2.classList.toggle('hide')&$form3.classList.toggle('hide');
    });

    $btn_next3.addEventListener('click', () => {
      $form3.classList.toggle('hide')&$form5.classList.toggle('hide');
    });

    $sell.addEventListener('click', () => {
      $form5.classList.toggle('hide')&$form4.classList.toggle('hide');
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