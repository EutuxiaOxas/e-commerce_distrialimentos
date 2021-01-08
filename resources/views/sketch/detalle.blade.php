@extends('common.main')

@section('title')
    <title>Productos</title>
@endsection


@section('content')
    {{-- header principal --}}
    @include('common.header')
 
   <style>
   .marb {  /* margen entre palabras vista movil */
     margin-bottom:3px;
   }
   .smaller { /* tamaño palabras vista movil */
     font-size: 70%;
   }
   .text-card { /* tamaño palabras mas pequeñas vista movil */
    font-size: 67%
   }
   .padt { /* padding separacion vista movil */
     padding-top: 3px;
   }
   .mart { /* margen separacion vista movil */
     margin-top: 6px;
   }
   @media(min-width: 767px){
     .arg { /* padding fila inferior desktop */
       padding-right: 0 !important;
       padding-left: 0 !important;
     }
     .tl { /* centrado precio desktop */
      text-align: left !important;
     }
     .centr { /* centrado tarjeta desktop */
      padding-bottom: 10px;
      padding-top: 5px;
      padding-left: 10px;
     }
     
   }
   </style>
   <!-- Prdoduct -->
    <section class="pb-3">
      <div class="container px-3">
        <div class="row">
          <div class="col-12 col-md-6 my-0">
            <figure>
              <img class="img-fluid" src="{{asset('images/lineas/linea-enlatados.jpg')}}" alt="Detalle-product">
            </figure>
          </div>
         <div class="col-12 col-md-6">
          <div class="product-details p-2">
              <p class="text-muted text-right smaller mb-0 d-sm-block d-md-none"><strong class="text-muted">SKU:</strong>00005644545</p>
              <h4 class="card-title font-weight-bold text-blue mb-0 marb">Titulo del producto</h4>
              <p class="small text-muted marb">Descripcion del producto Lorem ipsum dolor sit amet consectetur, adipisicing elit. In, vero.</p>
              <p class="text-muted smaller mb-0 d-none d-md-block"><strong class="text-muted">SKU:</strong>00005644545</p>
              <p class="card-text small marb">(100 Disponibles)</p>
              <a href="#" class="small marb">Categoria</a>
              <div class="row mb-0">
                <div class="col-6 col-md-12">
                  <p class="small text-black font-weight-bold">2,00 $ / Undidad</p>
                </div>
                <div class="col-6 col-md-12 d-md-none d-sm-block">
                  <p class="small text-right">IVA incluido</p>
                </div>
                <div class="col-6 col-md-12 d-none d-md-block">
                  <p class="small">IVA incluido</p>
                </div>
                
              </div>
                <div class="card-pricing text-center">
                  <h3 class="font-weight-bold mt-2">20,00 $</h3>
                  <p class="small">Caja - 20 unidades</p>
                  <a href="#" class="btn btn-primary px-7">Agregar</a>
                </div>
          </div>
         </div>
        </div>
      </div>
    </section>
<!-- / Product -->


<!--  Product-relacionados-->
   <section class="p-0">
    <div class="container">
      <h3 class="text-primary">Productos relacionados</h3>
      <div class="row px-2 mb-1"> <!--  tarjeta-body-->
        <div class="col p-0">
          <div class="row boxed border shadow p-0">
            <div class="col-5 col-md-3 p-0">
              <img src="{{asset('images/lineas/linea-viveres.jpg')}}" alt="Product-related">
            </div>
            <div class="col-7 col-md-9 p-0">
              <div class="prod-details centr">
                <div class="row m-0">
                    <div class="col-12 col-md-6 m-0 p-0">
                      <h5 class="text-blue font-weight-bold px-1 pt-1 pb-0 m-0">Titulo del producto</h5>
                    </div>
                    <div class="col-6 d-none d-md-block">
                      <p class="text-muted text-right smaller pt-1 pr-2 mb-0"><strong class="text-muted">SKU:</strong>00005644545</p>
                    </div>
                </div>
                <p class="small px-1 m-0 pb-0">Descripcion del producto</p>
                <div class="row p-0 m-0">
                    <div class="col-7 col-md-12 pl-1 pb-0 m-0">
                        <p class="text-card">(24 disponibles)</p>
                    </div>
                    <div class="d-none d-md-block pl-1 col-md-12">
                       <a href="#" class="smaller marb">Categoria</a>
                    </div>
                    <div class="col-5 col-md-12 pl-0 m-0">
                       <p class="smaller pl-1">IVA incluido</p>
                    </div>
                </div>
                <p class="smaller px-1 m-0 font-weight-bold text-black d-block d-md-none">2,00 $ / Undidad</p>
                <div class="row px-4 my-0 padt arg">
                    <div class="col-md-4 d-none d-md-block">
                      <p class="smaller px-1 m-0 font-weight-bold text-black">2,00 $ / Undidad</p>
                    </div>
                    <div class="col-10 text-center col-md-4 tl p-0 m-0">
                      <p class="smaller px-1 fs-18 mb-0 font-weight-bold text-black">20,00 $</p>
                      <p class="text-card">Caja - 30 unidades</p>
                    </div>
                    <div class="col-2 col-md-4 p-0 m-0">
                      <a href="#" class="btn btn-primary d-none d-md-inline-block px-4 py-1">Agregar</a>
                      <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="d-md-none mart font-weight-bold bi bi-plus-circle text-primary align-center" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                       </svg>          
                    </div>
                </div>
              </div>
            </div>        
          </div>
        </div>
      </div>
      <div class="row px-2 mb-1"> <!--  tarjeta-body-->
        <div class="col p-0">
          <div class="row boxed border shadow p-0">
            <div class="col-5 col-md-3 p-0">
              <img src="{{asset('images/lineas/linea-viveres.jpg')}}" alt="Product-related">
            </div>
            <div class="col-7 col-md-9 p-0">
              <div class="prod-details centr">
                <div class="row m-0">
                    <div class="col-12 col-md-6 m-0 p-0">
                      <h5 class="text-blue font-weight-bold px-1 pt-1 pb-0 m-0">Titulo del producto</h5>
                    </div>
                    <div class="col-6 d-none d-md-block">
                      <p class="text-muted text-right smaller pt-1 pr-2 mb-0"><strong class="text-muted">SKU:</strong>00005644545</p>
                    </div>
                </div>
                <p class="small px-1 m-0 pb-0">Descripcion del producto</p>
                <div class="row p-0 m-0">
                    <div class="col-7 col-md-12 pl-1 pb-0 m-0">
                        <p class="text-card">(24 disponibles)</p>
                    </div>
                    <div class="d-none d-md-block pl-1 col-md-12">
                       <a href="#" class="smaller marb">Categoria</a>
                    </div>
                    <div class="col-5 col-md-12 pl-0 m-0">
                       <p class="smaller pl-1">IVA incluido</p>
                    </div>
                </div>
                <p class="smaller px-1 m-0 font-weight-bold text-black d-block d-md-none">2,00 $ / Undidad</p>
                <div class="row px-4 my-0 padt arg">
                    <div class="col-md-4 d-none d-md-block">
                      <p class="smaller px-1 m-0 font-weight-bold text-black">2,00 $ / Undidad</p>
                    </div>
                    <div class="col-10 text-center col-md-4 tl p-0 m-0">
                      <p class="smaller px-1 fs-18 mb-0 font-weight-bold text-black">20,00 $</p>
                      <p class="text-card">Caja - 30 unidades</p>
                    </div>
                    <div class="col-2 col-md-4 p-0 m-0">
                      <a href="#" class="btn btn-primary d-none d-md-inline-block px-4 py-1">Agregar</a>
                      <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="d-md-none mart font-weight-bold bi bi-plus-circle text-primary align-center" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                       </svg>          
                    </div>
                </div>
              </div>
            </div>        
          </div>
        </div>
      </div>
      <div class="row px-2 mb-1"> <!--  tarjeta-body-->
        <div class="col p-0">
          <div class="row boxed border shadow p-0">
            <div class="col-5 col-md-3 p-0">
              <img src="{{asset('images/lineas/linea-viveres.jpg')}}" alt="Product-related">
            </div>
            <div class="col-7 col-md-9 p-0">
              <div class="prod-details centr">
                <div class="row m-0">
                    <div class="col-12 col-md-6 m-0 p-0">
                      <h5 class="text-blue font-weight-bold px-1 pt-1 pb-0 m-0">Titulo del producto</h5>
                    </div>
                    <div class="col-6 d-none d-md-block">
                      <p class="text-muted text-right smaller pt-1 pr-2 mb-0"><strong class="text-muted">SKU:</strong>00005644545</p>
                    </div>
                </div>
                <p class="small px-1 m-0 pb-0">Descripcion del producto</p>
                <div class="row p-0 m-0">
                    <div class="col-7 col-md-12 pl-1 pb-0 m-0">
                        <p class="text-card">(24 disponibles)</p>
                    </div>
                    <div class="d-none d-md-block pl-1 col-md-12">
                       <a href="#" class="smaller marb">Categoria</a>
                    </div>
                    <div class="col-5 col-md-12 pl-0 m-0">
                       <p class="smaller pl-1">IVA incluido</p>
                    </div>
                </div>
                <p class="smaller px-1 m-0 font-weight-bold text-black d-block d-md-none">2,00 $ / Undidad</p>
                <div class="row px-4 my-0 padt arg">
                    <div class="col-md-4 d-none d-md-block">
                      <p class="smaller px-1 m-0 font-weight-bold text-black">2,00 $ / Undidad</p>
                    </div>
                    <div class="col-10 text-center col-md-4 tl p-0 m-0">
                      <p class="smaller px-1 fs-18 mb-0 font-weight-bold text-black">20,00 $</p>
                      <p class="text-card">Caja - 30 unidades</p>
                    </div>
                    <div class="col-2 col-md-4 p-0 m-0">
                      <a href="#" class="btn btn-primary d-none d-md-inline-block px-4 py-1">Agregar</a>
                      <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="d-md-none mart font-weight-bold bi bi-plus-circle text-primary align-center" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                       </svg>          
                    </div>
                </div>
              </div>
            </div>        
          </div>
        </div>
      </div>
    </div>
   </section>



<!-- / Product-relacionados -->


      <!-- / bordered -->
      {{-- / cta --}}

@endsection