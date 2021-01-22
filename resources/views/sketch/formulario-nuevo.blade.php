@extends('layouts.main')

@section('title')
    <title>formulario</title>
@endsection

@php
// importante para el color de las letras del header
$color_header='dark';
@endphp

@section('content')
    {{-- header principal --}}
    @include('perfil.perfil_navMobile')

{{-- cover --}}
    

<style>
    .radius-buton-left { /* radius botones inferiores */
      border-top-right-radius: 45px;
      border-bottom-right-radius: 45px;
      border-bottom-left-radius: 100px;
    }
    .radius-buton-right { /* radius botones inferiores */
      border-top-right-radius: 100px;
      border-top-left-radius: 45px;
      border-bottom-left-radius: 45px;
    }
    .fs-14 { /*  */
      font-size: 0.9rem;
    }
    .circle_user { /* medidas circulo user */
      height: 80px;
      width: 80px;
      box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
      border-radius: 50%;
      background: #e6e5e5;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .circle_number { /* medidas fijas boton next-step */
      height: 35px;
      width: 35px;
    }

    .img-width {
      max-width: inherit;
    }

    @media(min-width:768px)
    {
      .container-width-md {
        max-width: 720px;
      }
    }
    </style>




<!------------------------------- Formulalio registro nuevo usuario ---------------------------------->
<section id=form_new_user>
  <!-- User-header -->
  <section class="user-header-circle mt-3 py-2">
      <div class="user-header-circle container container-width-md">
        <div class="user-header row">
          <div class="col-3 col-sm-2">
            <div class="user-header-img circle_user text-center">
              <svg class="align-self-center" width="40" height="40" viewBox="0 0 38 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M37.7631 10.5274L34.2066 3.51869V0.739127C34.2066 0.330981 33.8758 0 33.4675 0H4.37549C3.96734 0 3.63636 0.330981 3.63636 0.739127V3.51906L0.0799736 10.5274C0.0274216 10.631 0 10.7457 0 10.8618V12.6802C0 14.8408 1.57464 16.6395 3.63636 16.992V32.5215H2.88001C2.47179 32.5215 2.14088 32.8524 2.14088 33.2606C2.14088 33.6687 2.47179 33.9997 2.88001 33.9997H4.36979C4.37164 33.9997 4.37356 34 4.37549 34H24.598H30.5111H33.4676H34.9631C35.3712 34 35.7022 33.669 35.7022 33.2609C35.7022 32.8527 35.3712 32.5217 34.9631 32.5217H34.2067V16.992C36.2685 16.6395 37.8432 14.8409 37.8432 12.6802V10.8618C37.8432 10.7457 37.8157 10.631 37.7631 10.5274ZM5.11461 1.47825H32.7283V2.95673H27.6493H21.8308H16.0125H10.1939H5.11461V1.47825ZM23.2934 10.7872L22.6488 4.43498H27.1017L29.092 10.9718V12.6802C29.092 14.2777 27.7922 15.5774 26.1946 15.5774C24.597 15.5774 23.2971 14.2777 23.2971 12.6802V10.8618C23.2971 10.8369 23.2959 10.812 23.2934 10.7872ZM21.8189 10.8992V12.6802H21.8188C21.8188 14.2777 20.5191 15.5774 18.9217 15.5774C17.324 15.5774 16.0242 14.2777 16.0242 12.6802V10.8992L16.6804 4.43498H21.1629L21.8189 10.8992ZM15.1946 4.43506L14.5498 10.7873C14.5472 10.812 14.5459 10.8369 14.5459 10.8618V12.6802C14.5459 14.2777 13.2463 15.5774 11.6486 15.5774C10.051 15.5774 8.75134 14.2777 8.75134 12.6802V10.9719L10.7417 4.43506H15.1946ZM1.47825 12.6802V11.0386L4.82931 4.43498H9.19629L7.30509 10.6465C7.28388 10.7163 7.27301 10.7889 7.27301 10.8618V12.6802C7.27301 14.2777 5.97318 15.5774 4.37549 15.5774C2.77794 15.5774 1.47825 14.2777 1.47825 12.6802ZM29.772 32.5217H25.3371V30.3042V27.3477H26.0763C26.4846 27.3477 26.8155 27.0168 26.8155 26.6086C26.8155 26.2004 26.4846 25.8695 26.0763 25.8695H25.3371V20.6957H29.772V32.5217ZM32.7283 32.5217H31.2501V19.9566C31.2501 19.5484 30.9192 19.2175 30.5109 19.2175H24.5979H7.33207C6.92377 19.2175 6.59294 19.5484 6.59294 19.9566V30.3042C6.59294 30.7124 6.92377 31.0433 7.33207 31.0433H23.8589V32.5217H5.11461V16.992C6.31895 16.7862 7.35705 16.0875 8.01214 15.1106C8.79798 16.2825 10.1345 17.0557 11.6486 17.0557C13.1626 17.0557 14.4991 16.2825 15.285 15.1106C16.0709 16.2825 17.4076 17.0557 18.9216 17.0557C20.4355 17.0557 21.7721 16.2825 22.5579 15.1106C23.3438 16.2825 24.6804 17.0557 26.1944 17.0557C27.7085 17.0557 29.0451 16.2825 29.8309 15.1106C30.486 16.0875 31.5241 16.7862 32.7283 16.992V32.5217ZM15.28 20.6957H17.8551L16.4496 22.1009C16.161 22.3895 16.161 22.8575 16.4496 23.1462C16.5939 23.2906 16.7831 23.3628 16.9723 23.3628C17.1614 23.3628 17.3505 23.2906 17.4948 23.1463L19.9457 20.6957H23.8588V29.5651H8.07119V27.9045L15.28 20.6957ZM8.07119 25.8139V20.6957H13.1894L8.07119 25.8139ZM36.3649 12.6802C36.3649 14.2777 35.0652 15.5774 33.4676 15.5774C31.87 15.5774 30.5702 14.2777 30.5702 12.6802V10.8618C30.5702 10.7889 30.5594 10.7163 30.5381 10.6465L28.6469 4.43498H33.0139L36.3649 11.0386V12.6802Z" fill="#838383"/>
                <path d="M15.4583 24.8768C15.6468 24.8768 15.8353 24.8051 15.9795 24.6618L15.9918 24.6496C16.2813 24.3618 16.2827 23.8938 15.9949 23.6043C15.707 23.3148 15.239 23.3134 14.9496 23.6012L14.9372 23.6135C14.6477 23.9013 14.6465 24.3693 14.9341 24.6588C15.0786 24.8041 15.2684 24.8768 15.4583 24.8768Z" fill="#838383"/>
                <path d="M0.756571 32.5215H0.739127C0.330907 32.5215 0 32.8525 0 33.2606C0 33.6688 0.330907 33.9997 0.739127 33.9997H0.756571C1.16472 33.9997 1.4957 33.6688 1.4957 33.2606C1.4957 32.8525 1.16479 32.5215 0.756571 32.5215Z" fill="#838383"/>
                <path d="M37.104 32.522H37.0866C36.6784 32.522 36.3475 32.853 36.3475 33.2611C36.3475 33.6692 36.6784 34.0002 37.0866 34.0002H37.104C37.5123 34.0002 37.8432 33.6692 37.8432 33.2611C37.8432 32.853 37.5123 32.522 37.104 32.522Z" fill="#838383"/>
              </svg>
            </div>
          </div>
          <div class="col-9 col-sm-10 d-flex align-items-center">
            <div class="user-info">
              <h5 class="font-weight-bold">Bienvenido</h5>
              <p class="small text-muted">Verifica tus datos para completar la compra</p>
            </div>
          </div>
        </div>
      </div>
  </section>
  <!-- / User-header -->

  <!-- Carrito formulario-->
  <section class="form-shoppingCar d-block d-md-none">
    <div class="form-shoppingCar container">
      <div class="row">
          <div class="col text-center">
            <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#modalFormulario">
              <div class="row">
                <div class="col-4 d-flex align-items-center">
                  <p class="text-white fs-14 font-weight-bold">2,000.00 $</p>
                </div>
                <div class="col-8 d-flex align-items-center justify-content-end">
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
          </div>
      </div>
    </div>
    <!-------- Modal body --------->
    <div class="modal fade" id="modalFormulario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <!-------------  Modal header------------>
            <div class="modal-header d-block pt-2 pb-1"> 
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
          <!------------- // Modal header------------>
          <!------------   Modal-body --------------->
          <div class="Modal-body container-fluid pt-1">

                    <h5 class="text-left font-weight-bold fs-18 pl-1">Listado de productos</h5>
                    <div class="row px-1 pt-1 pb-0 mb-0"> 
                      <div class="col">
                        <div class="Modal-body-card row boxed border shadow radeus">
                          <div class="Modal-body_img col-4 col-md-4 px-0">
                            <img class="img-border" src="{{asset('images/lineas/linea-viveres.jpg')}}" alt="Product-related">
                          </div>

                          <div class="Modal-body_info col-8 col-md-8 px-0">
                            <div class="prod-details p-1">
                              <div class="row mb-0">
                                <div class="prod-details_title col-10 my-0 py-0">
                                  <h5 class="text-blue font-weight-bold my-0 pb-0 text-left">Titulo del producto</h5>
                                </div>
                                <div class="prod-details_delete col-2">
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
    <!-------- /Modal body --------->
  </section>   
  <!-- /Carrito formulario-->

  <!-- User_info-->
  <section class="user-info">
    <div class="user-info container container-width-md p-4">
      <div class="wrapper boxed border shadow p-4">
        <div class="user_info-img row"> 
          <div class="col text-center">
            <img class="img-width" src="{{asset('images/imgs/new-user.svg')}}" alt="">
          </div>
        </div>
        <div class="user-info-text row py-2">
          <div class="col text-center">
            <p class="small text-muted">Aun no te has registrado... <br> Para continuar debes tener una cuenta</p>            
          </div>
        </div>
        <div class="user-info-modal row pt-3">
          <div class="col  text-center">
            <a href="#" data-toggle="modal" data-target="#exampleModal"> <p class="font-weight-bold text center fs-14">Crear cuenta</p></a>          
          </div>
        </div>
      </div>
    </div>

        </div>     
      </div>
    </div>       
  </section>
  <!--/User_infoo-->

  <!-- Buttoms-->
  <section>
        <div class="container container-width-md">
          <div class="row">
            <div class="col-5 pr-0">
              <button type="button" class="btn btn-secondary btn-sm btn-block radius-buton-right text-secondary" disabled>x</button>
            </div>
            <div class="col-7 pl-0">
              <button id=btn_next1 class="btn btn-primary btn-sm btn-block radius-buton-left font-weight-bold">Registrarse</button>
            </div>
          </div>
        </div>
  </section>
  <!-- /Buttoms-->     
</section>

<!------------------------------- /Formulalio registro nuevo usuario --------------------------------->



<!------------------------------ Formulalio datos usuario ----------------------------------->
<section id=form_datos>
    <!-- User-header -->
    <section class="datos-header mt-3 py-2">
        <div class="user-header container container-width-md">
          <div class="user-header row">
            <div class="col-3 col-sm-2">
              <div class="circle_user text-center">
                <svg class="align-self-center" width="40" height="40" viewBox="0 0 38 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M37.7631 10.5274L34.2066 3.51869V0.739127C34.2066 0.330981 33.8758 0 33.4675 0H4.37549C3.96734 0 3.63636 0.330981 3.63636 0.739127V3.51906L0.0799736 10.5274C0.0274216 10.631 0 10.7457 0 10.8618V12.6802C0 14.8408 1.57464 16.6395 3.63636 16.992V32.5215H2.88001C2.47179 32.5215 2.14088 32.8524 2.14088 33.2606C2.14088 33.6687 2.47179 33.9997 2.88001 33.9997H4.36979C4.37164 33.9997 4.37356 34 4.37549 34H24.598H30.5111H33.4676H34.9631C35.3712 34 35.7022 33.669 35.7022 33.2609C35.7022 32.8527 35.3712 32.5217 34.9631 32.5217H34.2067V16.992C36.2685 16.6395 37.8432 14.8409 37.8432 12.6802V10.8618C37.8432 10.7457 37.8157 10.631 37.7631 10.5274ZM5.11461 1.47825H32.7283V2.95673H27.6493H21.8308H16.0125H10.1939H5.11461V1.47825ZM23.2934 10.7872L22.6488 4.43498H27.1017L29.092 10.9718V12.6802C29.092 14.2777 27.7922 15.5774 26.1946 15.5774C24.597 15.5774 23.2971 14.2777 23.2971 12.6802V10.8618C23.2971 10.8369 23.2959 10.812 23.2934 10.7872ZM21.8189 10.8992V12.6802H21.8188C21.8188 14.2777 20.5191 15.5774 18.9217 15.5774C17.324 15.5774 16.0242 14.2777 16.0242 12.6802V10.8992L16.6804 4.43498H21.1629L21.8189 10.8992ZM15.1946 4.43506L14.5498 10.7873C14.5472 10.812 14.5459 10.8369 14.5459 10.8618V12.6802C14.5459 14.2777 13.2463 15.5774 11.6486 15.5774C10.051 15.5774 8.75134 14.2777 8.75134 12.6802V10.9719L10.7417 4.43506H15.1946ZM1.47825 12.6802V11.0386L4.82931 4.43498H9.19629L7.30509 10.6465C7.28388 10.7163 7.27301 10.7889 7.27301 10.8618V12.6802C7.27301 14.2777 5.97318 15.5774 4.37549 15.5774C2.77794 15.5774 1.47825 14.2777 1.47825 12.6802ZM29.772 32.5217H25.3371V30.3042V27.3477H26.0763C26.4846 27.3477 26.8155 27.0168 26.8155 26.6086C26.8155 26.2004 26.4846 25.8695 26.0763 25.8695H25.3371V20.6957H29.772V32.5217ZM32.7283 32.5217H31.2501V19.9566C31.2501 19.5484 30.9192 19.2175 30.5109 19.2175H24.5979H7.33207C6.92377 19.2175 6.59294 19.5484 6.59294 19.9566V30.3042C6.59294 30.7124 6.92377 31.0433 7.33207 31.0433H23.8589V32.5217H5.11461V16.992C6.31895 16.7862 7.35705 16.0875 8.01214 15.1106C8.79798 16.2825 10.1345 17.0557 11.6486 17.0557C13.1626 17.0557 14.4991 16.2825 15.285 15.1106C16.0709 16.2825 17.4076 17.0557 18.9216 17.0557C20.4355 17.0557 21.7721 16.2825 22.5579 15.1106C23.3438 16.2825 24.6804 17.0557 26.1944 17.0557C27.7085 17.0557 29.0451 16.2825 29.8309 15.1106C30.486 16.0875 31.5241 16.7862 32.7283 16.992V32.5217ZM15.28 20.6957H17.8551L16.4496 22.1009C16.161 22.3895 16.161 22.8575 16.4496 23.1462C16.5939 23.2906 16.7831 23.3628 16.9723 23.3628C17.1614 23.3628 17.3505 23.2906 17.4948 23.1463L19.9457 20.6957H23.8588V29.5651H8.07119V27.9045L15.28 20.6957ZM8.07119 25.8139V20.6957H13.1894L8.07119 25.8139ZM36.3649 12.6802C36.3649 14.2777 35.0652 15.5774 33.4676 15.5774C31.87 15.5774 30.5702 14.2777 30.5702 12.6802V10.8618C30.5702 10.7889 30.5594 10.7163 30.5381 10.6465L28.6469 4.43498H33.0139L36.3649 11.0386V12.6802Z" fill="#838383"/>
                  <path d="M15.4583 24.8768C15.6468 24.8768 15.8353 24.8051 15.9795 24.6618L15.9918 24.6496C16.2813 24.3618 16.2827 23.8938 15.9949 23.6043C15.707 23.3148 15.239 23.3134 14.9496 23.6012L14.9372 23.6135C14.6477 23.9013 14.6465 24.3693 14.9341 24.6588C15.0786 24.8041 15.2684 24.8768 15.4583 24.8768Z" fill="#838383"/>
                  <path d="M0.756571 32.5215H0.739127C0.330907 32.5215 0 32.8525 0 33.2606C0 33.6688 0.330907 33.9997 0.739127 33.9997H0.756571C1.16472 33.9997 1.4957 33.6688 1.4957 33.2606C1.4957 32.8525 1.16479 32.5215 0.756571 32.5215Z" fill="#838383"/>
                  <path d="M37.104 32.522H37.0866C36.6784 32.522 36.3475 32.853 36.3475 33.2611C36.3475 33.6692 36.6784 34.0002 37.0866 34.0002H37.104C37.5123 34.0002 37.8432 33.6692 37.8432 33.2611C37.8432 32.853 37.5123 32.522 37.104 32.522Z" fill="#838383"/>
                </svg>
              </div>
            </div>
            <div class="col-9 col-sm-10 d-flex align-items-center">
              <div class="user-info">
                <h5 class="font-weight-bold">Hola, Eutuxia Group CA</h5>
                <p class="small text-muted">Verifica los datos para completar la compra</p>
              </div>
            </div>
          </div>
        </div>
    </section>
    <!-- / datos-header -->
  
    <!-- Carrito formulario-->
    <section class="form-shoppingCar d-block d-md-none">
      <div class="form-shoppingCar container">
        <div class="row">
            <div class="col text-center">
              <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#modalFormulario">
                <div class="row">
                  <div class="col-4 d-flex align-items-center">
                    <p class="text-white fs-14 font-weight-bold">2,000.00 $</p>
                  </div>
                  <div class="col-8 d-flex align-items-center justify-content-end">
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
            </div>
        </div>
      </div>
      <!-------- Modal body --------->
      <div class="modal fade" id="modalFormulario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <!-------------  Modal header------------>
              <div class="modal-header d-block pt-2 pb-1"> 
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
            <!------------- // Modal header------------>
            <!------------   Modal-body --------------->
            <div class="Modal-body container-fluid pt-1">

                      <h5 class="text-left font-weight-bold fs-18 pl-1">Listado de productos</h5>
                      <div class="row px-1 pt-1 pb-0 mb-0"> 
                        <div class="col">
                          <div class="Modal-body-card row boxed border shadow radeus">
                            <div class="Modal-body_img col-4 col-md-4 px-0">
                              <img class="img-border" src="{{asset('images/lineas/linea-viveres.jpg')}}" alt="Product-related">
                            </div>

                            <div class="Modal-body_info col-8 col-md-8 px-0">
                              <div class="prod-details p-1">
                                <div class="row mb-0">
                                  <div class="prod-details_title col-10 my-0 py-0">
                                    <h5 class="text-blue font-weight-bold my-0 pb-0 text-left">Titulo del producto</h5>
                                  </div>
                                  <div class="prod-details_delete col-2">
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
      <!-------- /Modal body --------->
    </section>   
    <!-- /Carrito formulario-->

    <!-- User-datos_info-->
    <section class="datos-info">
      <div class="datos-info container container-width-md px-4 pb-4">
        <div class="circle row p-3">
            <div class="circle-number col-2 col-sm-1 p-0">
            <button class="rounded-circle circle_number bg-primary border-0">
                <p class="text-white small">1</p>
              </button>
            </div>
            <div class="circle-text col-8 col-11-9 d-flex align-items-center pl-0">
              <p class="font-weight-bold small text-black">Datos del comprador</p>
            </div>
        </div>  
        <div class="wrapper boxed border shadow p-4">
          <div class="datos_info-img row"> 
            <div class="col text-center">
              <img class="img-width" src="{{asset('images/imgs/new-user.svg')}}" alt="">
            </div>
          </div>
          <div class="datos-info-text row py-2">
            <div class="col text-center">
              <p class="small text-muted">Agrega tus datos para continuar</p>            
            </div>
          </div>
          <div class="datos-info-link row pt-3">
            <div class="col  text-center">
              <a href="#" data-toggle="modal" data-target="#modal-user_data"> <p class="font-weight-bold text center fs-14">Agregar datos del comprador</p></a>          
            </div>
            <div class="modal fade" id="modal-user_data" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                 <div class="modal-header p-2">
                  <div class="container">
                    <div class="row">
                      <div class="col-10 mb-0">
                        <h5 class="modal-title text-blue font-weight-bold lead" id="exampleModalLabel">Datos de usuario</h5>
                        <p class="small">Agregue los datos solicitados</p>
                      </div>
                      <div class="col-2">
                      <button type="button" class="close p-0" data-dismiss="modal" aria-label="Close">
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
                      <p class="text-black font-weight-bold">Datos de usuario</p>
                    </div>
                  </div>
                </div>
                <form>
                  <div class="form">
                    <div class="col">
                      <input type="text" class="form-control-plaintext border-bottom pb-1 px-1" placeholder="Nombre completo">
                    </div>
                    <div class="col">
                      <input type="text" class="form-control-plaintext border-bottom pb-1 px-1" placeholder="Cedula [ej: v-23432578]">
                    </div>
                    <div class="col">
                      <input type="text" class="form-control-plaintext border-bottom pb-1 px-1" placeholder="Telefono [ej:0241-8524234]">
                    </div>
                    <div class="col">
                      <input type="text" class="form-control-plaintext border-bottom pb-1 px-1" placeholder="Telefono Alt. [ej:0241-8524234]">
                    </div>
                  </div>
                </form>
              </div>
              <div class="modal-footer pt-6">
                <div class="container">
                  <div class="row mb-0">
                    <button type="button" class="btn btn-primary btn-block">Editar</button>
                  </div>
                <div class="row">
                  <p class="text-muted small text-center">Al hacer click en continuar usted confirma que los datos administrados son reales</p>
                </div>
              </div>
            </div>
            




            
          </div>     
        </div>
      </div>       
    </section>
    <!--/User-datos_info-->

    <!-- Buttoms-->
    <section>
          <div class="container container-width-md">
            <div class="row">
              <div class="col-5 pr-0">
                <button type="button" class="btn btn-secondary btn-sm btn-block radius-buton-right text-secondary" disabled>x</button>
              </div>
              <div class="col-7 pl-0">
                <button id=btn_next1 class="btn btn-primary btn-sm btn-block radius-buton-left font-weight-bold">Siguiente</button>
              </div>
            </div>
          </div>
    </section>
    <!-- /Buttoms-->     
</section>
<!----------------------------- /Formulalio nuevo usuario ------------------------------------>


<!------------------------------ Formulalio facturacion ----------------------------------->
<section id=form_bussines>
    <!-- User-header -->
    <section class="datos-header mt-3 py-2">
        <div class="user-header container container-width-md">
          <div class="user-header row">
            <div class="col-3 col-sm-2">
              <div class="circle_user text-center">
                <svg class="align-self-center" width="40" height="40" viewBox="0 0 38 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M37.7631 10.5274L34.2066 3.51869V0.739127C34.2066 0.330981 33.8758 0 33.4675 0H4.37549C3.96734 0 3.63636 0.330981 3.63636 0.739127V3.51906L0.0799736 10.5274C0.0274216 10.631 0 10.7457 0 10.8618V12.6802C0 14.8408 1.57464 16.6395 3.63636 16.992V32.5215H2.88001C2.47179 32.5215 2.14088 32.8524 2.14088 33.2606C2.14088 33.6687 2.47179 33.9997 2.88001 33.9997H4.36979C4.37164 33.9997 4.37356 34 4.37549 34H24.598H30.5111H33.4676H34.9631C35.3712 34 35.7022 33.669 35.7022 33.2609C35.7022 32.8527 35.3712 32.5217 34.9631 32.5217H34.2067V16.992C36.2685 16.6395 37.8432 14.8409 37.8432 12.6802V10.8618C37.8432 10.7457 37.8157 10.631 37.7631 10.5274ZM5.11461 1.47825H32.7283V2.95673H27.6493H21.8308H16.0125H10.1939H5.11461V1.47825ZM23.2934 10.7872L22.6488 4.43498H27.1017L29.092 10.9718V12.6802C29.092 14.2777 27.7922 15.5774 26.1946 15.5774C24.597 15.5774 23.2971 14.2777 23.2971 12.6802V10.8618C23.2971 10.8369 23.2959 10.812 23.2934 10.7872ZM21.8189 10.8992V12.6802H21.8188C21.8188 14.2777 20.5191 15.5774 18.9217 15.5774C17.324 15.5774 16.0242 14.2777 16.0242 12.6802V10.8992L16.6804 4.43498H21.1629L21.8189 10.8992ZM15.1946 4.43506L14.5498 10.7873C14.5472 10.812 14.5459 10.8369 14.5459 10.8618V12.6802C14.5459 14.2777 13.2463 15.5774 11.6486 15.5774C10.051 15.5774 8.75134 14.2777 8.75134 12.6802V10.9719L10.7417 4.43506H15.1946ZM1.47825 12.6802V11.0386L4.82931 4.43498H9.19629L7.30509 10.6465C7.28388 10.7163 7.27301 10.7889 7.27301 10.8618V12.6802C7.27301 14.2777 5.97318 15.5774 4.37549 15.5774C2.77794 15.5774 1.47825 14.2777 1.47825 12.6802ZM29.772 32.5217H25.3371V30.3042V27.3477H26.0763C26.4846 27.3477 26.8155 27.0168 26.8155 26.6086C26.8155 26.2004 26.4846 25.8695 26.0763 25.8695H25.3371V20.6957H29.772V32.5217ZM32.7283 32.5217H31.2501V19.9566C31.2501 19.5484 30.9192 19.2175 30.5109 19.2175H24.5979H7.33207C6.92377 19.2175 6.59294 19.5484 6.59294 19.9566V30.3042C6.59294 30.7124 6.92377 31.0433 7.33207 31.0433H23.8589V32.5217H5.11461V16.992C6.31895 16.7862 7.35705 16.0875 8.01214 15.1106C8.79798 16.2825 10.1345 17.0557 11.6486 17.0557C13.1626 17.0557 14.4991 16.2825 15.285 15.1106C16.0709 16.2825 17.4076 17.0557 18.9216 17.0557C20.4355 17.0557 21.7721 16.2825 22.5579 15.1106C23.3438 16.2825 24.6804 17.0557 26.1944 17.0557C27.7085 17.0557 29.0451 16.2825 29.8309 15.1106C30.486 16.0875 31.5241 16.7862 32.7283 16.992V32.5217ZM15.28 20.6957H17.8551L16.4496 22.1009C16.161 22.3895 16.161 22.8575 16.4496 23.1462C16.5939 23.2906 16.7831 23.3628 16.9723 23.3628C17.1614 23.3628 17.3505 23.2906 17.4948 23.1463L19.9457 20.6957H23.8588V29.5651H8.07119V27.9045L15.28 20.6957ZM8.07119 25.8139V20.6957H13.1894L8.07119 25.8139ZM36.3649 12.6802C36.3649 14.2777 35.0652 15.5774 33.4676 15.5774C31.87 15.5774 30.5702 14.2777 30.5702 12.6802V10.8618C30.5702 10.7889 30.5594 10.7163 30.5381 10.6465L28.6469 4.43498H33.0139L36.3649 11.0386V12.6802Z" fill="#838383"/>
                  <path d="M15.4583 24.8768C15.6468 24.8768 15.8353 24.8051 15.9795 24.6618L15.9918 24.6496C16.2813 24.3618 16.2827 23.8938 15.9949 23.6043C15.707 23.3148 15.239 23.3134 14.9496 23.6012L14.9372 23.6135C14.6477 23.9013 14.6465 24.3693 14.9341 24.6588C15.0786 24.8041 15.2684 24.8768 15.4583 24.8768Z" fill="#838383"/>
                  <path d="M0.756571 32.5215H0.739127C0.330907 32.5215 0 32.8525 0 33.2606C0 33.6688 0.330907 33.9997 0.739127 33.9997H0.756571C1.16472 33.9997 1.4957 33.6688 1.4957 33.2606C1.4957 32.8525 1.16479 32.5215 0.756571 32.5215Z" fill="#838383"/>
                  <path d="M37.104 32.522H37.0866C36.6784 32.522 36.3475 32.853 36.3475 33.2611C36.3475 33.6692 36.6784 34.0002 37.0866 34.0002H37.104C37.5123 34.0002 37.8432 33.6692 37.8432 33.2611C37.8432 32.853 37.5123 32.522 37.104 32.522Z" fill="#838383"/>
                </svg>
              </div>
            </div>
            <div class="col-9 col-sm-10 d-flex align-items-center">
              <div class="user-info">
                <h5 class="font-weight-bold">Hola, Eutuxia Group CA</h5>
                <p class="small text-muted">Verifica los datos para completar la compra</p>
              </div>
            </div>
          </div>
        </div>
    </section>
    <!-- / datos-header -->
  
    <!-- Carrito formulario-->
    <section class="form-shoppingCar d-block d-md-none">
      <div class="form-shoppingCar container">
        <div class="row">
            <div class="col text-center">
              <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#modalFormulario">
                <div class="row">
                  <div class="col-4 d-flex align-items-center">
                    <p class="text-white fs-14 font-weight-bold">2,000.00 $</p>
                  </div>
                  <div class="col-8 d-flex align-items-center justify-content-end">
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
            </div>
        </div>
      </div>
      <!-------- Modal body --------->
      <div class="modal fade" id="modalFormulario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <!-------------  Modal header------------>
              <div class="modal-header d-block pt-2 pb-1"> 
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
            <!------------- // Modal header------------>
            <!------------   Modal-body --------------->
            <div class="Modal-body container-fluid pt-1">
                      <h5 class="text-left font-weight-bold fs-18 pl-1">Listado de productos</h5>
                      <div class="row px-1 pt-1 pb-0 mb-0"> 
                        <div class="col">
                          <div class="Modal-body-card row boxed border shadow radeus">
                            <div class="Modal-body_img col-4 col-md-4 px-0">
                              <img class="img-border" src="{{asset('images/lineas/linea-viveres.jpg')}}" alt="Product-related">
                            </div>

                            <div class="Modal-body_info col-8 col-md-8 px-0">
                              <div class="prod-details p-1">
                                <div class="row mb-0">
                                  <div class="prod-details_title col-10 my-0 py-0">
                                    <h5 class="text-blue font-weight-bold my-0 pb-0 text-left">Titulo del producto</h5>
                                  </div>
                                  <div class="prod-details_delete col-2">
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
      <!-------- /Modal body --------->
    </section>   
    <!-- /Carrito formulario-->

    <!-- bussines-datos_info-->
    <section class="datos-info">
      <div class="datos-info container container-width-md px-4 pb-4">
        <div class="circle row p-3">
          <div class="circle-number col-2 col-md-1 p-0 d-block d-sm-none">
            <button class="rounded-circle circle_number bg-dark border-0">
              <p class="text-white small">1</p>
            </button>
          </div>
          <div class="circle-number col-2 col-sm-1 p-0">
            <button class="rounded-circle circle_number bg-primary border-0">
              <p class="text-white small">2</p>
            </button>
          </div>
          <div class="circle-text col-8 col-11-9 d-flex align-items-center pl-0">
            <p class="font-weight-bold small text-black">Datos de facturación</p>
          </div>
        </div>  
        <div class="wrapper boxed border shadow p-4">
          <div class="datos_info-img row"> 
            <div class="col text-center">
              <img class="img-width" src="{{asset('images/imgs/new-bussines.svg')}}" alt="">
            </div>
          </div>
          <div class="datos-info-text row py-2">
            <div class="col text-center">
              <p class="small text-muted">Agrega los datos de facturacion</p>            
            </div>
          </div>
          <div class="datos-info-modal row pt-3">
            <div class="col  text-center">
              <a href="#" data-toggle="modal" data-target="#modal-facturation"> <p class="font-weight-bold text center fs-14">Agregar datos de empresa</p></a>          
            </div>
            <div class="modal fade" id="modal-facturation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header p-2">
                    <div class="container">
                      <div class="row">
                        <div class="col-10 mb-0">
                          <h4 class="modal-title text-blue font-weight-bold" id="exampleModalLabel">Datos de facturación</h4>
                          <p class="small">Agregue los datos solicitados</p>
                        </div>
                        <div class="col-2">
                          <button type="button" class="close p-0" data-dismiss="modal" aria-label="Close">
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
                          <p class="text-black font-weight-bold">Datos de empresa</p>
                        </div>
                      </div>
                    </div>
                    <form>
                      <div class="form">
                        <div class="col">
                          <input type="text" class="form-control-plaintext border-bottom pb-1 px-1" placeholder="Nombre de empresa">
                        </div>
                        <div class="col">
                          <input type="text" class="form-control-plaintext border-bottom pb-1 px-1" placeholder="RIF [ej: j-20180578-4]">
                        </div>
                        <div class="col">
                          <input type="text" class="form-control-plaintext border-bottom pb-1 px-1" placeholder="SADA">
                        </div>
                        <div class="col">
                          <input type="text" class="form-control-plaintext border-bottom pb-1 px-1" placeholder="Horario de atención">
                        </div>
                      </div>
                    </form>
                    <div class="form-title container pt-4">
                      <div class="row">
                        <div class="col text-center">
                          <p class="text-black font-weight-bold">Direccion Juridica</p>
                        </div>
                      </div>
                    </div>
                    <form>
                      <div class="form">
                        <div class="col">
                          <input type="text" class="form-control-plaintext border-bottom pb-1 px-1" placeholder="Estado">
                        </div>
                        <div class="col">
                          <input type="text" class="form-control-plaintext border-bottom pb-1 px-1" placeholder="Ciudad">
                        </div>
                        <div class="col">
                          <input type="text" class="form-control-plaintext border-bottom pb-1 px-1" placeholder="Codigo postel">
                        </div>
                        <div class="col">
                          <input type="text" class="form-control-plaintext border-bottom pb-1 px-1" placeholder="Dirección">
                        </div>
                        <div class="col">
                          <input type="text" class="form-control-plaintext border-bottom pb-1 px-1" placeholder="Responsable">
                        </div>
                        <div class="col">
                          <input type="text" class="form-control-plaintext border-bottom pb-1 px-1" placeholder="Telefono Oficina">
                        </div>
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer pt-2">
                    <div class="container">
                      <div class="row mb-0">
                          <button type="button" class="btn btn-primary btn-block">Aceptar</button>
                      </div>
                      <div class="row">
                        <p class="text-muted small text-center">Al hacer click en continuar usted confirma que los datos administrados son reales</p>
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
    <!--/bussines-datos_info-->

    <!-- Buttoms-->
    <section>
          <div class="container container-width-md">
            <div class="row">
              <div class="col-5 pr-0">
                <button type="button" class="btn btn-secondary btn-sm btn-block radius-buton-right text-secondary font-weight-bold">Anterior</button>
              </div>
              <div class="col-7 pl-0">
                <button id=btn_next1 class="btn btn-primary btn-sm btn-block radius-buton-left font-weight-bold">Siguiente</button>
              </div>
            </div>
          </div>
    </section>
    <!-- /Buttoms-->     
</section>
<!----------------------------- /Formulalio facturacion ------------------------------------>


<!------------------------------ Formulalio envio ----------------------------------->
<section id=form_envio>
    <!-- User-header -->
    <section class="datos-header mt-3 py-2">
        <div class="user-header container container-width-md">
          <div class="user-header row">
            <div class="col-3 col-sm-2">
              <div class="circle_user text-center">
                <svg class="align-self-center" width="40" height="40" viewBox="0 0 38 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M37.7631 10.5274L34.2066 3.51869V0.739127C34.2066 0.330981 33.8758 0 33.4675 0H4.37549C3.96734 0 3.63636 0.330981 3.63636 0.739127V3.51906L0.0799736 10.5274C0.0274216 10.631 0 10.7457 0 10.8618V12.6802C0 14.8408 1.57464 16.6395 3.63636 16.992V32.5215H2.88001C2.47179 32.5215 2.14088 32.8524 2.14088 33.2606C2.14088 33.6687 2.47179 33.9997 2.88001 33.9997H4.36979C4.37164 33.9997 4.37356 34 4.37549 34H24.598H30.5111H33.4676H34.9631C35.3712 34 35.7022 33.669 35.7022 33.2609C35.7022 32.8527 35.3712 32.5217 34.9631 32.5217H34.2067V16.992C36.2685 16.6395 37.8432 14.8409 37.8432 12.6802V10.8618C37.8432 10.7457 37.8157 10.631 37.7631 10.5274ZM5.11461 1.47825H32.7283V2.95673H27.6493H21.8308H16.0125H10.1939H5.11461V1.47825ZM23.2934 10.7872L22.6488 4.43498H27.1017L29.092 10.9718V12.6802C29.092 14.2777 27.7922 15.5774 26.1946 15.5774C24.597 15.5774 23.2971 14.2777 23.2971 12.6802V10.8618C23.2971 10.8369 23.2959 10.812 23.2934 10.7872ZM21.8189 10.8992V12.6802H21.8188C21.8188 14.2777 20.5191 15.5774 18.9217 15.5774C17.324 15.5774 16.0242 14.2777 16.0242 12.6802V10.8992L16.6804 4.43498H21.1629L21.8189 10.8992ZM15.1946 4.43506L14.5498 10.7873C14.5472 10.812 14.5459 10.8369 14.5459 10.8618V12.6802C14.5459 14.2777 13.2463 15.5774 11.6486 15.5774C10.051 15.5774 8.75134 14.2777 8.75134 12.6802V10.9719L10.7417 4.43506H15.1946ZM1.47825 12.6802V11.0386L4.82931 4.43498H9.19629L7.30509 10.6465C7.28388 10.7163 7.27301 10.7889 7.27301 10.8618V12.6802C7.27301 14.2777 5.97318 15.5774 4.37549 15.5774C2.77794 15.5774 1.47825 14.2777 1.47825 12.6802ZM29.772 32.5217H25.3371V30.3042V27.3477H26.0763C26.4846 27.3477 26.8155 27.0168 26.8155 26.6086C26.8155 26.2004 26.4846 25.8695 26.0763 25.8695H25.3371V20.6957H29.772V32.5217ZM32.7283 32.5217H31.2501V19.9566C31.2501 19.5484 30.9192 19.2175 30.5109 19.2175H24.5979H7.33207C6.92377 19.2175 6.59294 19.5484 6.59294 19.9566V30.3042C6.59294 30.7124 6.92377 31.0433 7.33207 31.0433H23.8589V32.5217H5.11461V16.992C6.31895 16.7862 7.35705 16.0875 8.01214 15.1106C8.79798 16.2825 10.1345 17.0557 11.6486 17.0557C13.1626 17.0557 14.4991 16.2825 15.285 15.1106C16.0709 16.2825 17.4076 17.0557 18.9216 17.0557C20.4355 17.0557 21.7721 16.2825 22.5579 15.1106C23.3438 16.2825 24.6804 17.0557 26.1944 17.0557C27.7085 17.0557 29.0451 16.2825 29.8309 15.1106C30.486 16.0875 31.5241 16.7862 32.7283 16.992V32.5217ZM15.28 20.6957H17.8551L16.4496 22.1009C16.161 22.3895 16.161 22.8575 16.4496 23.1462C16.5939 23.2906 16.7831 23.3628 16.9723 23.3628C17.1614 23.3628 17.3505 23.2906 17.4948 23.1463L19.9457 20.6957H23.8588V29.5651H8.07119V27.9045L15.28 20.6957ZM8.07119 25.8139V20.6957H13.1894L8.07119 25.8139ZM36.3649 12.6802C36.3649 14.2777 35.0652 15.5774 33.4676 15.5774C31.87 15.5774 30.5702 14.2777 30.5702 12.6802V10.8618C30.5702 10.7889 30.5594 10.7163 30.5381 10.6465L28.6469 4.43498H33.0139L36.3649 11.0386V12.6802Z" fill="#838383"/>
                  <path d="M15.4583 24.8768C15.6468 24.8768 15.8353 24.8051 15.9795 24.6618L15.9918 24.6496C16.2813 24.3618 16.2827 23.8938 15.9949 23.6043C15.707 23.3148 15.239 23.3134 14.9496 23.6012L14.9372 23.6135C14.6477 23.9013 14.6465 24.3693 14.9341 24.6588C15.0786 24.8041 15.2684 24.8768 15.4583 24.8768Z" fill="#838383"/>
                  <path d="M0.756571 32.5215H0.739127C0.330907 32.5215 0 32.8525 0 33.2606C0 33.6688 0.330907 33.9997 0.739127 33.9997H0.756571C1.16472 33.9997 1.4957 33.6688 1.4957 33.2606C1.4957 32.8525 1.16479 32.5215 0.756571 32.5215Z" fill="#838383"/>
                  <path d="M37.104 32.522H37.0866C36.6784 32.522 36.3475 32.853 36.3475 33.2611C36.3475 33.6692 36.6784 34.0002 37.0866 34.0002H37.104C37.5123 34.0002 37.8432 33.6692 37.8432 33.2611C37.8432 32.853 37.5123 32.522 37.104 32.522Z" fill="#838383"/>
                </svg>
              </div>
            </div>
            <div class="col-9 col-sm-10 d-flex align-items-center">
              <div class="user-info">
                <h5 class="font-weight-bold">Hola, Eutuxia Group CA</h5>
                <p class="small text-muted">Verifica los datos para completar la compra</p>
              </div>
            </div>
          </div>
        </div>
    </section>
    <!-- / datos-header -->
  
    <!-- Carrito formulario-->
    <section class="form-shoppingCar d-block d-md-none">
      <div class="form-shoppingCar container">
        <div class="row">
            <div class="col text-center">
              <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#modalFormulario">
                <div class="row">
                  <div class="col-4 d-flex align-items-center">
                    <p class="text-white fs-14 font-weight-bold">2,000.00 $</p>
                  </div>
                  <div class="col-8 d-flex align-items-center justify-content-end">
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
            </div>
        </div>
      </div>
      <!-------- Modal body --------->
      <div class="modal fade" id="modalFormulario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <!-------------  Modal header------------>
              <div class="modal-header d-block pt-2 pb-1"> 
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
            <!------------- // Modal header------------>
            <!------------   Modal-body --------------->
            <div class="Modal-body container-fluid pt-1">

                      <h5 class="text-left font-weight-bold fs-18 pl-1">Listado de productos</h5>
                      <div class="row px-1 pt-1 pb-0 mb-0"> 
                        <div class="col">
                          <div class="Modal-body-card row boxed border shadow radeus">
                            <div class="Modal-body_img col-4 col-md-4 px-0">
                              <img class="img-border" src="{{asset('images/lineas/linea-viveres.jpg')}}" alt="Product-related">
                            </div>

                            <div class="Modal-body_info col-8 col-md-8 px-0">
                              <div class="prod-details p-1">
                                <div class="row mb-0">
                                  <div class="prod-details_title col-10 my-0 py-0">
                                    <h5 class="text-blue font-weight-bold my-0 pb-0 text-left">Titulo del producto</h5>
                                  </div>
                                  <div class="prod-details_delete col-2">
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
      <!-------- /Modal body --------->
    </section>   
    <!-- /Carrito formulario-->

    <!-- info-envio-->
    <section class="envio-info">
      <div class="datos-info container container-width-md px-4 pb-4">
        <div class="circle row p-3">
          <div class="circle-number col-2 col-md-1 p-0 d-block d-sm-none">
            <button class="rounded-circle circle_number bg-dark border-0">
              <p class="text-white small">1</p>
            </button>
          </div>
          <div class="circle-number col-2 col-sm-1 p-0 d-block d-sm-none">
            <button class="rounded-circle circle_number bg-dark border-0">
              <p class="text-white small">2</p>
            </button>
          </div>
          <div class="circle-number col-2 col-sm-1 p-0">
            <button class="rounded-circle circle_number bg-primary border-0">
              <p class="text-white small">3</p>
            </button>
          </div>
          <div class="circle-text col-6 col-11-9 d-flex align-items-center pl-0">
            <p class="font-weight-bold small text-black">Datos de envío</p>
          </div>
        </div>  
        <div class="wrapper boxed border shadow p-4">
          <div class="datos_info-img row"> 
            <div class="col text-center">
              <img class="img-width" src="{{asset('images/imgs/new-delivery.svg')}}" alt="">
            </div>
          </div>
          <div class="datos-info-text row py-2">
            <div class="col text-center">
              <p class="small text-muted">Agrega los datos de envio</p>            
            </div>
          </div>
          <div class="datos-info-modal row pt-3">
            <div class="col  text-center">
              <a href="#" data-toggle="modal" data-target="#modal-envio"> <p class="font-weight-bold text center fs-14">Agregar datos de envio</p></a>          
            </div>
            <div class="modal fade" id="modal-envio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header px-2 pb-1">
                    <div class="container">
                      <div class="row">
                        <div class="col-10 mb-0">
                          <h4 class="modal-title text-blue font-weight-bold" id="exampleModalLabel">Datos de envío</h4>
                          <p class="small">Agregue los datos solicitados</p>
                        </div>
                        <div class="col-2">
                          <button type="button" class="close p-0" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>        
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal-body px-2 pt-1 pb-2">
                    <div class="form-title container">
                      <div class="form-check pb-2">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                        <label class="form-check-label" for="invalidCheck2"> Seleccionar en la dirección de envio la misma dirección juridica.</label>
                      </div>
                      <div class="row">
                        <div class="col text-center">
                          <p class="text-black font-weight-bold">Dirección de envío</p>
                        </div>
                      </div>
                    </div>
                    <form>
                      <div class="form">
                        <div class="col">
                          <input type="text" class="form-control-plaintext border-bottom pb-1 px-1" placeholder="Estado">
                        </div>
                        <div class="col">
                          <input type="text" class="form-control-plaintext border-bottom pb-1 px-1" placeholder="Ciudad">
                        </div>
                        <div class="col">
                          <input type="text" class="form-control-plaintext border-bottom pb-1 px-1" placeholder="Codigo postal">
                        </div>
                        <div class="col">
                          <input type="text" class="form-control-plaintext border-bottom pb-1 px-1" placeholder="Dirección">
                        </div>
                        <div class="col">
                          <input type="text" class="form-control-plaintext border-bottom pb-1 px-1" placeholder="Responsable">
                        </div>
                        <div class="col">
                          <input type="text" class="form-control-plaintext border-bottom pb-1 px-1" placeholder="Telefono Oficina">
                        </div>
                      </div>
                    </form>
                    <div class="form-title container pt-4">
                      <div class="row">
                        <div class="col text-center">
                          <p class="text-black font-weight-bold">Hora de entrega sugerida</p>
                        </div>
                      </div>
                    </div>
                    <form>
                      <div class="form">
                        <div class="col">
                          <input type="text" class="form-control-plaintext border-bottom pb-1 px-1" placeholder="Horario de atención">
                        </div>
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer pt-2">
                    <div class="container">
                      <div class="row mb-0">
                          <button type="button" class="btn btn-primary btn-block">Aceptar</button>
                      </div>
                      <div class="row">
                        <p class="text-muted small text-center">Al hacer click en continuar usted confirma que los datos administrados son reales</p>
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
    <!--/info-envio-->

    <!-- Buttoms-->
    <section>
          <div class="container container-width-md">
            <div class="row">
              <div class="col-5 pr-0">
                <button type="button" class="btn btn-secondary btn-sm btn-block radius-buton-right text-secondary font-weight-bold">Anterior</button>
              </div>
              <div class="col-7 pl-0">
                <button id=btn_next1 class="btn btn-primary btn-sm btn-block radius-buton-left font-weight-bold">Finalizar</button>
              </div>
            </div>
          </div>
    </section>
    <!-- /Buttoms-->     
</section>
<!----------------------------- /Formulalio envio ------------------------------------>



<!------------------------------ Formulalio venta ----------------------------------->
<section id=form_venta>
   
    <!-- info-envio-->
    <section class="venta-info pt-4">
      <div class="envio-info-circle container container-width-md">
        <div class="circle row py-3 px-4">
          <div class="circle-number col-2 col-sm-1 p-0">
            <button class="rounded-circle circle_number bg-dark border-0">
              <p class="text-white small">1</p>
            </button>
          </div>
          <div class="circle-number col-2 col-sm-1 p-0">
            <button class="rounded-circle circle_number bg-dark border-0">
              <p class="text-white small">2</p>
            </button>
          </div>
          <div class="circle-number col-2 col-sm-1 p-0">
            <button class="rounded-circle circle_number bg-dark border-0">
              <p class="text-white small">3</p>
            </button>
          </div>
          <div class="circle-text col-6 col-11-9 d-flex align-items-center pl-0">
            <p class="font-weight-bold small text-black">Fin del proceso</p>
          </div>
        </div> 
        </div>
      <div class="datos-info container container-width-md px-4 pb-4">
        <div class="wrapper boxed border shadow p-4">
          <div class="datos_info-img row"> 
            <div class="col text-center">
              <img class="img-width" src="{{asset('images/imgs/logistic.svg')}}" alt="">
            </div>
          </div>
          <div class="datos-info-text row py-2">
            <div class="col text-center">
              <p class="text-primary font-weight-bold">Gracias por su compra</p>            
            </div>
          </div>
          <div class="datos-info-link row pt-3">
            <div class="col text-muted col-md-6 offset-md-3">
              <p class="small pb-2">Eutuxia Group CA</p>
              <p class="small">Para coordinar tu pedido uno de nuestros asesores comerciales se pondra en contacto a la brevedad</p>         
            </div>
          </div>     
        </div>
      </div>       
    </section>
    <!--/info-envio-->

    <!-- Buttoms-->
    <section>
          <div class="container container-width-md">
            <div class="row">
              <div class="col-5 pr-0">
                <button type="button" class="btn btn-secondary btn-sm btn-block radius-buton-right text-secondary font-weight-bold">Anterior</button>
              </div>
              <div class="col-7 pl-0">
                <button id=btn_next1 class="btn btn-primary btn-sm btn-block radius-buton-left font-weight-bold">Ver compras</button>
              </div>
            </div>
          </div>
    </section>
    <!-- /Buttoms-->     
</section>
<!----------------------------- /Formulalio venta ------------------------------------>


  


<footer class="mt-4">
    <div class="caja">
    <img class="card-img-top" height=200 src="{{asset('images/lineas/linea-enlatados.jpg')}}" alt="Card image cap">
    </div>
    <div class="caja">
    <img class="card-img-top" height=200 src="{{asset('images/lineas/linea-enlatados.jpg')}}" alt="Card image cap">
    </div>
</footer>

@endsection








