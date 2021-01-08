@extends('common.main')

@section('title')
    <title>Productos</title>
@endsection


@section('content')
    {{-- header principal --}}
    @include('common.header')
 
   <style>
   .marb {
     margin-bottom:3px;
   }
   .smaller {
     font-size: 70%;
   }
   .text-card {
    font-size: 67%
   }
   .padt { 
     padding-top: 3px;
   }
   .mart {
     margin-top: 6px;
   }
   </style>
   <!-- Prdoduct -->
    <section>
      <div class="container px-3">
        <div class="row">
          <div class="col">
            <figure>
              <img src="{{asset('images/lineas/linea-enlatados.jpg')}}" alt="Detalle-product">
            </figure>
          </div>
        </div>
        <div class="row">
         <div class="col">
          <div class="product-details">
              <p class="text-muted text-right smaller mb-0"><strong class="text-muted">SKU:</strong>00005644545</p>
              <h4 class="card-title font-weight-bold text-blue mb-0 marb">Titulo del producto</h4>
              <p class="small text-muted marb">Descripcion del producto</p>
              <p class="card-text small marb">(100 Disponibles)</p>
              <a href="#" class="small marb">Categoria</a>
              <div class="row">
                <div class="col-6">
                  <p class="small text-black font-weight-bold">2,00 $ / Undidad</p>
                </div>
                <div class="col-6">
                  <p class="small text-right">IVA incluido</p>
                </div>
                
              </div>
                <div class="card-pricing text-center">
                  <h3 class="font-weight-bold mb-0 mt-3">20,00 $</h3>
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
   <section>
    <div class="container">
      <h3 class="text-primary">Productos relacionados</h3>
      <div class="row px-2 mb-1">
        <div class="col p-0">
          <div class="row boxed border shadow p-0">
            <div class="col-5 p-0">
              <img src="{{asset('images/lineas/linea-viveres.jpg')}}" alt="Product-related">
            </div>
            <div class="col-7 p-0">
              <h5 class="text-blue font-weight-bold px-1 pt-1 pb-0 m-0">Titulo del producto</h5>
              <p class="small px-1 m-0 pb-0">Descripcion del producto</p>
                <div class="row p-0 m-0">
                  <div class="col-7 pl-1 pb-0 m-0">
                    <p class="text-card">(24 disponibles)</p>
                  </div>
                  <div class="col-5 p-0 m-0">
                    <p class="smaller pr-1">IVA incluido</p>
                  </div>
                </div>
              <p class="smaller px-1 m-0 font-weight-bold text-black">2,00 $ / Undidad</p>
                <div class="row px-4 my-0 padt">
                  <div class="col-10 p-0 m-0">
                    <p class="smaller px-1 fs-18 mb-0 font-weight-bold text-black text-center">20,00 $</p>
                    <p class="text-card text-center">Caja - 30 unidades</p>
                  </div>
                  <div class="col-2 p-0 m-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="mart font-weight-bold bi bi-plus-circle text-primary align-center" viewBox="0 0 16 16">
                      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                      <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                    </svg>          
                  </div>
                </div>

            </div>        
          </div>
        </div>
      </div>

      <div class="row px-2 mt-0 mb-1">
        <div class="col p-0">
          <div class="row boxed border shadow p-0">
            <div class="col-5 p-0">
              <img src="{{asset('images/lineas/linea-viveres.jpg')}}" alt="Product-related">
            </div>
            <div class="col-7 p-0">
              <h5 class="text-blue font-weight-bold px-1 pt-1 pb-0 m-0">Titulo del producto</h5>
              <p class="small px-1 m-0 pb-0">Descripcion del producto</p>
                <div class="row p-0 m-0">
                  <div class="col-7 pl-1 pb-0 m-0">
                    <p class="text-card">(24 disponibles)</p>
                  </div>
                  <div class="col-5 p-0 m-0">
                    <p class="smaller pr-1">IVA incluido</p>
                  </div>
                </div>
              <p class="smaller px-1 m-0 font-weight-bold text-black">2,00 $ / Undidad</p>
                <div class="row px-4 my-0 padt">
                  <div class="col-10 p-0 m-0">
                    <p class="smaller px-1 fs-18 mb-0 font-weight-bold text-black text-center">20,00 $</p>
                    <p class="text-card text-center">Caja - 30 unidades</p>
                  </div>
                  <div class="col-2 p-0 m-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="mart font-weight-bold bi bi-plus-circle text-primary align-center" viewBox="0 0 16 16">
                      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                      <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                    </svg>          
                  </div>
                </div>

            </div>        
          </div>
        </div>
      </div>

      <div class="row px-2 mt-0 mb-1">
        <div class="col p-0">
          <div class="row boxed border shadow p-0">
            <div class="col-5 p-0">
              <img src="{{asset('images/lineas/linea-viveres.jpg')}}" alt="Product-related">
            </div>
            <div class="col-7 p-0">
              <h5 class="text-blue font-weight-bold px-1 pt-1 pb-0 m-0">Titulo del producto</h5>
              <p class="small px-1 m-0 pb-0">Descripcion del producto</p>
                <div class="row p-0 m-0">
                  <div class="col-7 pl-1 pb-0 m-0">
                    <p class="text-card">(24 disponibles)</p>
                  </div>
                  <div class="col-5 p-0 m-0">
                    <p class="smaller pr-1">IVA incluido</p>
                  </div>
                </div>
              <p class="smaller px-1 m-0 font-weight-bold text-black">2,00 $ / Undidad</p>
                <div class="row px-4 my-0 padt">
                  <div class="col-10 p-0 m-0">
                    <p class="smaller px-1 fs-18 mb-0 font-weight-bold text-black text-center">20,00 $</p>
                    <p class="text-card text-center">Caja - 30 unidades</p>
                  </div>
                  <div class="col-2 p-0 m-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="mart font-weight-bold bi bi-plus-circle text-primary align-center" viewBox="0 0 16 16">
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
   </section>



<!-- / Product-relacionados -->


      <!-- / bordered -->
      {{-- / cta --}}

@endsection