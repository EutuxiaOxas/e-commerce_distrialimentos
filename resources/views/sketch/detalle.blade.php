@extends('layouts.main')

@section('title')
  Productos
@endsection

@section('menu-perfil')
  {{-- header nav--}}
  @include('common.header.nav_header_mobile')
@endsection

@section('content')
 
   <style>
  .productDetail__componenteCamion {
    height:25px;
    width: 112px;
    padding: 0 8px;
    border-radius: 12px;
    background: #FF9417;
    color:white;
    font-weight:bold;
    font-size: 13px;
    display:flex;
    justify-content: space-evenly;
    align-items:center;
    
  }
  .productDetail__componenteCamion img{
    width: fit-content;
    padding-top:4px;
  }
  @media(min-width:768px)
  {
    .productDetail__componenteCamion-desktop {
      position: absolute;
      left: 365px;
      top: 5px;
    }
  }
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

   .productDetail__CardCambios {
      display: flex; 
      margin:0;
    }
    .productDetail__fontCaracteristicas {
      font-size: 0.85rem;
      color:white;
    }
    .fs-20{
      font-size: 20px;
    }
    .productDetail__priceBodyCambio {
      display: flex;
      flex-direction: column;                
      justify-content: center;
    }
    .productDetail__CardSpacingRight {
      padding-right: 0.25rem;
      padding-left: 0;
    }
    .productDetail__CardSpacingleft {
      padding-left: 0.25rem;
      padding-right: 0;
    }
    @media (max-width:768px){
      .productDetail__CardSpacingRight {
        padding-right: 0;
        padding-left: 0;
        
      }
    .productDetail__CardSpacingleft {
        padding-left: 0;
        padding-right: 0;
        padding-top: 0.3rem;
      }
    }
    .productDetail__fs-14 {
      font-size: 0.75rem;
    }
   </style>
   <!-- Prdoduct -->
    <section class="pb-3 bg-white">
      <div class="container px-3">
        <div class="row">
          <div class="col-12 col-md-6 pt-5 pb-0 px-5">
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

              <p class="text-right productDetail__bodySku smaller mb-0 d-sm-block d-md-none"><strong>SKU:</strong> 00005644545</p>
              <div class="productDetail__agregadoIcon">
                    <span class="inCart-icon productDetail__productAdded" id="{{$product->id}}"> 
                      <div class="productDetail__componenteCamion productDetail__componenteCamion-desktop">
                        <img src="{{asset('images/imgs/check.svg')}}" alt="Check-Nike">
                        <p>En camión</p>
                      </div>
                    </span> 
                  </div>
              <h4 class="productDetail__bodyTitle mb-0">{{$product->title}}</h4>
              <p class="productDetail__bodyDescription small text-muted">{{$product->description}}</p>
              <p class="text-muted smaller mb-0 d-block d-md-none"><strong class="text-muted">SKU:</strong> {{$product->sku}}</p>
              <p class="productDetail__bodyProductUnits small marb">({{$product->units_packaging}} Disponibles)</p>

              <div class="row mb-3">
                <div class="col-12">
                  <p><b class="text-secondary">Categoria: </b><a href="#" class="marb productDetail__body-categories">Viveres</a></p>
                </div>
                <div class="col-6 col-md-12">
                  <p class="text-primary"><b>Marca: </b><a href="#" class="text-primary productDetail__body-categories">Carabobo</a></p>
                </div>
                <div class="col-6 col-md-12 d-md-none d-sm-block">
                  <p class="small text-right">IVA incluido</p>
                </div>
                <div class="col-6 col-md-12 d-none d-md-block">
                  <p class="small">IVA incluido</p>
                </div>         
              </div>

              <!-- PRICE CARDS -->
              <div class="container">
                <div class="row">
                  <div class="col-12 col-md-6 productDetail__CardSpacingRight">
                    <div class="productDetail__priceCardsMain">
                      <div class="productDetail__priceCard productDetail__CardCambios py-4 active">
                        <div class="productDetail__priceBody productDetail__priceBodyCambio">
                          <h3 class="productDetail__priceBody-title productDetail__fontCaracteristicas pb-1">Precio al mayor</h3>
                          <p class="productDetail__priceBody-subtitle text-white m-0 pt-1">Menos de {{$product->amount_min_big_wholesale}} cajas </p>
                        </div>
                        <div class="productDetail__priceDescription active">
                          <h3 class="productDetail__priceDescription-price fs-20">
                            {{session('currency') == 'USD' ? '$' : 'Bs'}} 
                            {{$product->getPrice(session('currency'), $product->wholesale_price)}} 
                          </h3>
                          <p class="productDetail__priceDescription-unitPrice productDetail__fs-14">
                            {{$product->getPrice(session('currency'), $alMayorUnitPrice)}}  
                            {{session('currency') == 'USD' ? '$' : 'Bs'}}
                            / unidad
                          </p>
                        </div>
                      </div>
                    </div>
                  </div> 
                  
                  <div class="col-12 col-md-6 productDetail__CardSpacingleft">
                    <div class="productDetail__priceCard productDetail__CardCambios py-4">
                      <div class="productDetail__priceBody productDetail__priceBodyCambio">
                        <h3 class="productDetail__priceBody-title pb-1 productDetail__fontCaracteristicas text-primary">Al gran mayor</h3>
                        <p class="productDetail__priceBody-subtitle m-0 pt-1">Menos de {{$product->amount_min_big_wholesale}} cajas </p>
                      </div>
                      <div class="productDetail__priceDescription">
                        <h3 class="productDetail__priceDescription-price fs-20">
                          {{session('currency') == 'USD' ? '$' : 'Bs'}}
                          {{$product->getPrice(session('currency'), $product->big_wholesale_price)}} 
                        </h3>
                        <p class="productDetail__priceDescription-unitPrice normal productDetail__fs-14">
                          {{$product->getPrice(session('currency'), $alGranMayorUnitPrice)}}  
                          {{session('currency') == 'USD' ? '$' : 'Bs'}}
                          / unidad
                        </p>
                      </div>
                    </div> 
                  </div>
                </div>
              </div>

  
                <!-- <div class="productDetail__priceCard">
                  <div class="productDetail__priceBody">
                    <h3 class="productDetail__priceBody-title">Precio VIP</h3>
                    <p class="productDetail__priceBody-subtitle normal">Más de {{$product->amount_min_vip}} cajas </p>
                  </div>
                  <div class="productDetail__priceDescription">
                    <h3 class="productDetail__priceDescription-price">
                      {{session('currency') == 'USD' ? '$' : 'Bs'}}
                      {{$product->getPrice(session('currency'), (float) $product->vip_price)}} 
                    </h3>
                    <p class="productDetail__priceDescription-unitPrice normal">
                      {{$product->getPrice(session('currency'), $vipUnitPrice)}} 
                      {{session('currency') == 'USD' ? '$' : 'Bs'}} / unidad
                      </p>
                  </div>
                </div>
              </div> -->

              <!-- ADD TO CARD -->
              <h4 class="productDetail__addAnnouncement">Seleccione la cantidad de cajas a comprar</h4>
              <!-- <div class="productDetail__addToCart">
                <button type="button" class="productDetail__addToCart-add">Agregar</button>
              </div> -->
              <div class="productDetail__agregado">
                  <div class="productDetail__agregadoSelect ">
                    <p class="productDetail__agregarProducto-text">Selecciona una cantidad para agregar al camión </p>
                    @php $disponible = $product->available_stock; @endphp
                    @guest
                      <select id="{{$product->id}}" class="form-control">
                          <option value="0">0</option>
                          @for($i = 1; $i <= $disponible; $i++)
                            <option value="{{$i}}">{{$i}}</option>
                          @endfor
                      </select>
                    @else 
                      <select id="{{$product->id}}" class="form-control to_server productSelectStock">
                          <option value="0">0</option>
                          @for($i = 1; $i <= $disponible; $i++)
                            <option value="{{$i}}">{{$i}}</option>
                          @endfor>
                      </select>
                    @endguest
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