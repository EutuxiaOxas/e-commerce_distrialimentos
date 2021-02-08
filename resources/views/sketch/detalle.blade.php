@extends('layouts.main')

@section('title')
    <title>Productos</title>
@endsection


@section('content')
    {{-- header nav--}}
    @include('common.header.nav_header_mobile')
 
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
          <div class="col-12 col-md-6 p-5">
            <figure>
              <img class="img-fluid" src="{{asset('storage/'.$product->image)}}" alt="Detalle-product">
            </figure>
          </div>
         <div class="col-12 col-md-6 p-2 mt-3">
          <div class="row d-none d-md-block">
              <div class="col-12 text-right">
                <p class="small text-muted marb">Dimensiones(LxWxH): 200 x 500 x 800 cm</p>
                <p class="small text-muted marb">Codigo de Barra: {{$product->bar_code}}</p>
                <p class="small text-muted marb">SKU: {{$product->sku}}</p>
                <hr>
              </div>
          </div> 
          <div class="productDetail">

              <p class="text-right productDetail__bodySku  smaller mb-0 d-sm-block d-md-none"><strong>SKU:</strong> 00005644545</p>
              <h4 class="productDetail__bodyTitle mb-0 marb">{{$product->title}}</h4>
              <p class="productDetail__bodyDescription small text-muted marb">{{$product->description}}</p>
              <p class="text-muted smaller mb-0 d-none d-md-block"><strong class="text-muted">SKU:</strong> {{$product->sku}}</p>
              <p class="productDetail__bodyProductUnits small marb">({{$product->units_packaging}} Disponibles)</p>

              <div class="row mb-3">
                <div class="col-6 col-md-12">
                <a href="#" class="small marb productDetail__body-categories">Viveres</a>
                </div>
                <div class="col-6 col-md-12 d-md-none d-sm-block">
                  <p class="small text-right">IVA incluido</p>
                </div>
                <div class="col-6 col-md-12 d-none d-md-block">
                  <p class="small">IVA incluido</p>
                </div>
                
              </div>
              <!-- PRICE CARDS -->
              <div class="productDetail__priceCardsMain">
                <div class="productDetail__priceCard active">
                  <div class="productDetail__priceBody">
                    <h3 class="productDetail__priceBody-title">Al mayor</h3>
                    <p class="productDetail__priceBody-subtitle">menos de 50 cajas </p>
                  </div>
                  <div class="productDetail__priceDescription active">
                    <h3 class="productDetail__priceDescription-price">$ 20,00 </h3>
                    <p class="productDetail__priceDescription-unitPrice">2,00 $ / unidad</p>
                  </div>
                </div>
  
                <div class="productDetail__priceCard">
                  <div class="productDetail__priceBody">
                    <h3 class="productDetail__priceBody-title">Al Gran Mayor</h3>
                    <p class="productDetail__priceBody-subtitle normal">entre de 50 - 150 cajas </p>
                  </div>
                  <div class="productDetail__priceDescription">
                    <h3 class="productDetail__priceDescription-price">$ 20,00 </h3>
                    <p class="productDetail__priceDescription-unitPrice normal">1,80 $ / unidad</p>
                  </div>
                </div>
  
                <div class="productDetail__priceCard">
                  <div class="productDetail__priceBody">
                    <h3 class="productDetail__priceBody-title">Precio VIP</h3>
                    <p class="productDetail__priceBody-subtitle normal">Más de 150 cajas </p>
                  </div>
                  <div class="productDetail__priceDescription">
                    <h3 class="productDetail__priceDescription-price">$ 20,00 </h3>
                    <p class="productDetail__priceDescription-unitPrice normal">1,60 $ / unidad</p>
                  </div>
                </div>
              </div>

              <!-- ADD TO CARD -->
              <h4 class="productDetail__addAnnouncement">Seleccione la cantidad de cajas a comprar</h4>
              <div class="productDetail__addToCart">
                <button type="button" class="productDetail__addToCart-add">Agregar</button>
              </div>
              <div class="productDetail__agregado">
                  <div class="productDetail__agregadoIcon">
                    <p><i class="svg-checked">
                      <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0)">
                        <path d="M12.8096 1.91695C12.5558 1.6631 12.1443 1.6631 11.8904 1.91695L4.10299 9.70444L1.10963 6.71109C0.855804 6.45723 0.444273 6.45726 0.190392 6.71109C-0.0634639 6.96492 -0.0634639 7.37645 0.190392 7.6303L3.64336 11.0832C3.89712 11.3371 4.30895 11.3369 4.56261 11.0832L12.8096 2.8362C13.0635 2.58237 13.0635 2.17081 12.8096 1.91695Z" fill="#FF9417"/>
                        </g>
                        <defs>
                        <clipPath id="clip0">
                        <rect width="13" height="13" fill="white"/>
                        </clipPath>
                        </defs>
                      </svg>
                    </i>En camión</p>
                  </div>
                  <div class="productDetail__agregadoSelect ">
                    <label for="cantidad" class="mb-0 productDetail__agregadoSelect-cantidad">Cantidad</label>
                    <select name="cantidad" id="cantidad" class="form-control">
                      <option value="0">0</option>
                      <option value="1" selected>1</option>
                      <option value="2">2</option>
                    </select>
                  </div>
              </div>
          </div>
         </div>
        </div>
      </div>
    </section>
<!-- / Product -->


<!--  Product-relacionados-->
  {{-- <section class="p-0">
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

--}}

<!-- / Product-relacionados -->


      <!-- / bordered -->
      {{-- / cta --}}

@endsection