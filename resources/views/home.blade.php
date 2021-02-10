@extends('layouts.main')

@section('title')
    Inicio - Distrialimentos del centro
@endsection


@section('content')
    {{-- header principal --}}
    @include('perfil.perfil_navMobile')


 

  {{-- Banner principal --}}
    <section class="main_banner">
      <div id="carousel-main" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          @foreach($banners_principales as $banner)
            @if($loop->first)
            <div class="carousel-item active">
              <img class="d-block w-100 main_img" src="{{asset('storage/'.$banner->image)}}" alt="first slide">
            </div>
            @else
            <div class="carousel-item">
              <img class="d-block w-100 main_img" src="{{asset('storage/'.$banner->image)}}" alt="Others slide">
            </div>
            @endif
          @endforeach
        </div>
        <a class="carousel-control-prev" href="#carousel-main" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-main" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section>
{{-- Final de banner principal --}}


 <!-- banner de Promociones movil -->
 
 <section class="banner_movil pt-1 pb-3">
    <div class="owl-carousel" id="promociones">
      @foreach($banners_promocionales as $banner)
        @if($loop->first)
        <div class="promocion">
          <img src="{{asset('storage/'.$banner->image)}}" class="d-block w-100" alt="...">
        </div>
        @else
        <div class="promocion">
          <img src="{{asset('storage/'.$banner->image)}}" class="d-block w-100" alt="...">
        </div>
        @endif
      @endforeach
    </div>
</section>
 <!-- Fin de banner de Promociones movil  -->


 <style>
   .center-elements{
    width: -webkit-fill-available;
   }
 </style>


  <!----------- Productos destacados ----------------------------->

  <section id="products_top" class="px-3">
    <div class="tittle-section container d-block d-md-none">
      <div class="product_top-tittle row">
        <div class="product_top-details pb-2">
          <h6 class="text-primary">Productos Destacados</h6>
          <p class="small text-muted">Las mejores marcas nacionales e importadas</p>
        </div>
      </div>
    </div>
    <div class="Titulo-seccion row my-1 pl-2 py-4 d-none d-md-block">
        <div class="col">
          <h5 class="mb-0 font-weight-bold text-primary">Productos destacados</h5>
          <h6 class="font-weight-bold text-muted">Las mejores marcas nacionales e importadas</h6>
        </div>
      </div>
    <div class="container-fluid">
      <div class="row">
        <div class="owl-carousel" id="productos2">
          <div class="col spaces">
            <div class="container card radius">
              <div class="row card-body p-0 flex-fill">
                <div class="col-5 p-0 d-block d-md-none imagenIquierda">
                  <img class="mw-100" src="{{asset('images/lineas/linea-viveres.jpg')}}" alt="Product-related">
                </div>
                <div class="d-none d-md-block imagenArriba">
                  <a href="#">
                    <img class="card-img-top" src="{{asset('images/lineas/linea-enlatados.jpg')}}" alt="Card image cap">
                  </a>
                </div>
                <div class="col-7 col-md-12 p-2">
                  <div class="container py-1">
                   <div class="wrapper d-flex flex-wrap h-100 ">
                    <div class="row">
                      <div class="col-12 pb-1 pr-2 d-none d-md-block">
                        <p class="text-muted text-right text-small"><strong class="text-muted">SKU:</strong>00005644545</p>
                      </div>
                      <div class="col-12 p-0 titulo">
                        <h6 class="text-secondary font-weight-bold">Titulo del producto</h6>
                      </div>
                      <div class="col-12 p-0 descripcion">
                        <p class="text-small pl-0">Descripcion del producto</p>
                      </div>
                      <div class="col-7 col-md-12 p-0 unidades">
                        <p class="text-small text-muted">(100 disponibles)</p>
                      </div>
                      <div class="col-md-12 p-0 d-none d-md-block categoria">
                          <a href="#" class="text-small">Categoria</a>
                      </div>
                      <div class="col-5 p-0 iva">
                        <p class="text-small text-muted">IVA incluido</p>
                      </div>
                      <div class="col-12 p-0 d-block d-md-none precioUnidad">
                        <p class="text-small text-black font-weight-bold d-block d-md-none">2,00 $ / Undidad</p>
                      </div>
                      <div class="col-9 text-center p-0 align-self-end d-block d-md-none PrecioTotal">
                        <p class="text-black font-weight-bold">20,00 $</p>
                        <p class="text-small text-muted">Caja - 30 unidades</p>
                      </div>
                      <div class="col-3 p-0 align-self-end d-block d-md-none Botoncito">
                        <a href="#">
                          <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-plus-circle text-primary align-center" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                          </svg> 
                        </a>
                      </div>
                      <div class="card-pricing text-center center-elements align-self-end pb-2 d-none d-md-block">
                        <h4 class="font-weight-bold mb-0 mt-3">20,00 $</h4>
                        <p class="text-small pb-2">Caja de 20 unidades</p>
                        <a href="#" class="btn btn-primary px-5 py-2">Agregar</a>
                      </div>
                    </div>
                   </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col spaces">
            <div class="container card radius">
              <div class="row card-body p-0 flex-fill">
                <div class="col-5 p-0 d-block d-md-none imagenIquierda">
                  <img class="mw-100" src="{{asset('images/lineas/linea-viveres.jpg')}}" alt="Product-related">
                </div>
                <div class="d-none d-md-block imagenArriba">
                  <a href="#">
                    <img class="card-img-top" src="{{asset('images/lineas/linea-enlatados.jpg')}}" alt="Card image cap">
                  </a>
                </div>
                <div class="col-7 col-md-12 p-2">
                  <div class="container py-1">
                   <div class="wrapper d-flex flex-wrap h-100 ">
                    <div class="row">
                      <div class="col-12 pb-1 pr-2 d-none d-md-block">
                        <p class="text-muted text-right text-small"><strong class="text-muted">SKU:</strong>00005644545</p>
                      </div>
                      <div class="col-12 p-0 titulo">
                        <h6 class="text-secondary font-weight-bold">Titulo del producto</h6>
                      </div>
                      <div class="col-12 p-0 descripcion">
                        <p class="text-small pl-0">Descripcion del producto</p>
                      </div>
                      <div class="col-7 col-md-12 p-0 unidades">
                        <p class="text-small text-muted">(100 disponibles)</p>
                      </div>
                      <div class="col-md-12 p-0 d-none d-md-block categoria">
                          <a href="#" class="text-small">Categoria</a>
                      </div>
                      <div class="col-5 p-0 iva">
                        <p class="text-small text-muted">IVA incluido</p>
                      </div>
                      <div class="col-12 p-0 d-block d-md-none precioUnidad">
                        <p class="text-small text-black font-weight-bold d-block d-md-none">2,00 $ / Undidad</p>
                      </div>
                      <div class="col-9 text-center p-0 align-self-end d-block d-md-none PrecioTotal">
                        <p class="text-black font-weight-bold">20,00 $</p>
                        <p class="text-small text-muted">Caja - 30 unidades</p>
                      </div>
                      <div class="col-3 p-0 align-self-end d-block d-md-none Botoncito">
                        <a href="#">
                          <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-plus-circle text-primary align-center" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                          </svg> 
                        </a>
                      </div>
                      <div class="card-pricing text-center center-elements align-self-end pb-2 d-none d-md-block">
                        <h4 class="font-weight-bold mb-0 mt-3">20,00 $</h4>
                        <p class="text-small pb-2">Caja de 20 unidades</p>
                        <a href="#" class="btn btn-primary px-5 py-2">Agregar</a>
                      </div>
                    </div>
                   </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col spaces">
            <div class="container card radius">
              <div class="row card-body p-0 flex-fill">
                <div class="col-5 p-0 d-block d-md-none imagenIquierda">
                  <img class="mw-100" src="{{asset('images/lineas/linea-viveres.jpg')}}" alt="Product-related">
                </div>
                <div class="d-none d-md-block imagenArriba">
                  <a href="#">
                    <img class="card-img-top" src="{{asset('images/lineas/linea-enlatados.jpg')}}" alt="Card image cap">
                  </a>
                </div>
                <div class="col-7 col-md-12 p-2">
                  <div class="container py-1">
                   <div class="wrapper d-flex flex-wrap h-100 ">
                    <div class="row">
                      <div class="col-12 pb-1 pr-2 d-none d-md-block">
                        <p class="text-muted text-right text-small"><strong class="text-muted">SKU:</strong>00005644545</p>
                      </div>
                      <div class="col-12 p-0 titulo">
                        <h6 class="text-secondary font-weight-bold">Titulo del producto</h6>
                      </div>
                      <div class="col-12 p-0 descripcion">
                        <p class="text-small pl-0">Descripcion del producto</p>
                      </div>
                      <div class="col-7 col-md-12 p-0 unidades">
                        <p class="text-small text-muted">(100 disponibles)</p>
                      </div>
                      <div class="col-md-12 p-0 d-none d-md-block categoria">
                          <a href="#" class="text-small">Categoria</a>
                      </div>
                      <div class="col-5 p-0 iva">
                        <p class="text-small text-muted">IVA incluido</p>
                      </div>
                      <div class="col-12 p-0 d-block d-md-none precioUnidad">
                        <p class="text-small text-black font-weight-bold d-block d-md-none">2,00 $ / Undidad</p>
                      </div>
                      <div class="col-9 text-center p-0 align-self-end d-block d-md-none PrecioTotal">
                        <p class="text-black font-weight-bold">20,00 $</p>
                        <p class="text-small text-muted">Caja - 30 unidades</p>
                      </div>
                      <div class="col-3 p-0 align-self-end d-block d-md-none Botoncito">
                        <a href="#">
                          <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-plus-circle text-primary align-center" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                          </svg> 
                        </a>
                      </div>
                      <div class="card-pricing text-center center-elements align-self-end pb-2 d-none d-md-block">
                        <h4 class="font-weight-bold mb-0 mt-3">20,00 $</h4>
                        <p class="text-small pb-2">Caja de 20 unidades</p>
                        <a href="#" class="btn btn-primary px-5 py-2">Agregar</a>
                      </div>
                    </div>
                   </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col spaces">
            <div class="container card radius">
              <div class="row card-body p-0 flex-fill">
                <div class="col-5 p-0 d-block d-md-none imagenIquierda">
                  <img class="mw-100" src="{{asset('images/lineas/linea-viveres.jpg')}}" alt="Product-related">
                </div>
                <div class="d-none d-md-block imagenArriba">
                  <a href="#">
                    <img class="card-img-top" src="{{asset('images/lineas/linea-enlatados.jpg')}}" alt="Card image cap">
                  </a>
                </div>
                <div class="col-7 col-md-12 p-2">
                  <div class="container py-1">
                   <div class="wrapper d-flex flex-wrap h-100 ">
                    <div class="row">
                      <div class="col-12 pb-1 pr-2 d-none d-md-block">
                        <p class="text-muted text-right text-small"><strong class="text-muted">SKU:</strong>00005644545</p>
                      </div>
                      <div class="col-12 p-0 titulo">
                        <h6 class="text-secondary font-weight-bold">Titulo del producto</h6>
                      </div>
                      <div class="col-12 p-0 descripcion">
                        <p class="text-small pl-0">Descripcion del producto</p>
                      </div>
                      <div class="col-7 col-md-12 p-0 unidades">
                        <p class="text-small text-muted">(100 disponibles)</p>
                      </div>
                      <div class="col-md-12 p-0 d-none d-md-block categoria">
                          <a href="#" class="text-small">Categoria</a>
                      </div>
                      <div class="col-5 p-0 iva">
                        <p class="text-small text-muted">IVA incluido</p>
                      </div>
                      <div class="col-12 p-0 d-block d-md-none precioUnidad">
                        <p class="text-small text-black font-weight-bold d-block d-md-none">2,00 $ / Undidad</p>
                      </div>
                      <div class="col-9 text-center p-0 align-self-end d-block d-md-none PrecioTotal">
                        <p class="text-black font-weight-bold">20,00 $</p>
                        <p class="text-small text-muted">Caja - 30 unidades</p>
                      </div>
                      <div class="col-3 p-0 align-self-end d-block d-md-none Botoncito">
                        <a href="#">
                          <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-plus-circle text-primary align-center" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                          </svg> 
                        </a>
                      </div>
                      <div class="card-pricing text-center center-elements align-self-end pb-2 d-none d-md-block">
                        <h4 class="font-weight-bold mb-0 mt-3">20,00 $</h4>
                        <p class="text-small pb-2">Caja de 20 unidades</p>
                        <a href="#" class="btn btn-primary px-5 py-2">Agregar</a>
                      </div>
                    </div>
                   </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col spaces">
            <div class="container card radius">
              <div class="row card-body p-0 flex-fill">
                <div class="col-5 p-0 d-block d-md-none imagenIquierda">
                  <img class="mw-100" src="{{asset('images/lineas/linea-viveres.jpg')}}" alt="Product-related">
                </div>
                <div class="d-none d-md-block imagenArriba">
                  <a href="#">
                    <img class="card-img-top" src="{{asset('images/lineas/linea-enlatados.jpg')}}" alt="Card image cap">
                  </a>
                </div>
                <div class="col-7 col-md-12 p-2">
                  <div class="container py-1">
                   <div class="wrapper d-flex flex-wrap h-100 ">
                    <div class="row">
                      <div class="col-12 pb-1 pr-2 d-none d-md-block">
                        <p class="text-muted text-right text-small"><strong class="text-muted">SKU:</strong>00005644545</p>
                      </div>
                      <div class="col-12 p-0 titulo">
                        <h6 class="text-secondary font-weight-bold">Titulo del producto</h6>
                      </div>
                      <div class="col-12 p-0 descripcion">
                        <p class="text-small pl-0">Descripcion del producto</p>
                      </div>
                      <div class="col-7 col-md-12 p-0 unidades">
                        <p class="text-small text-muted">(100 disponibles)</p>
                      </div>
                      <div class="col-md-12 p-0 d-none d-md-block categoria">
                          <a href="#" class="text-small">Categoria</a>
                      </div>
                      <div class="col-5 p-0 iva">
                        <p class="text-small text-muted">IVA incluido</p>
                      </div>
                      <div class="col-12 p-0 d-block d-md-none precioUnidad">
                        <p class="text-small text-black font-weight-bold d-block d-md-none">2,00 $ / Undidad</p>
                      </div>
                      <div class="col-9 text-center p-0 align-self-end d-block d-md-none PrecioTotal">
                        <p class="text-black font-weight-bold">20,00 $</p>
                        <p class="text-small text-muted">Caja - 30 unidades</p>
                      </div>
                      <div class="col-3 p-0 align-self-end d-block d-md-none Botoncito">
                        <a href="#">
                          <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-plus-circle text-primary align-center" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                          </svg> 
                        </a>
                      </div>
                      <div class="card-pricing text-center center-elements align-self-end pb-2 d-none d-md-block">
                        <h4 class="font-weight-bold mb-0 mt-3">20,00 $</h4>
                        <p class="text-small pb-2">Caja de 20 unidades</p>
                        <a href="#" class="btn btn-primary px-5 py-2">Agregar</a>
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
    </div>
  </section>
  

  <!---------------------- categorias --------------------->

    <section id="categories-movil" class="bg-light py-3 d-block d-md-none">
      <div class="categories container px-4">
        <div class="categoria_tittle">
          <h6 class="text-primary">Categoria en almacen</h6>
          <p class="small">Inicia la compra con una categoria del almacen</p>
        </div>
        <div class="categories row py-2">
          <div class="col-4 px-1">
            <a href="#" class="s">
              <div class="card radius">
                <div class="card-body px-0 py-3 card-shadow radius card-body-hover">
                  <div class="icon text-center">
                    <i>
                      <svg width="42" height="50" viewBox="0 0 42 50" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M38.1076 14.5245L31.7188 6.49469V2.92967C31.7188 1.31425 30.4045 0 28.7891 0H12.2262C10.6108 0 9.29653 1.31425 9.29653 2.92967V6.49479L2.9076 14.5247C1.20507 16.6645 0 18.4666 0 22.1847V46.1612C0 48.2779 1.64716 50 3.67185 50H37.3433C39.3679 50 41.0152 48.2779 41.0152 46.1612V22.1847C41.0152 18.4666 39.81 16.6646 38.1076 14.5245ZM39.0621 23.1613V42.1873H20.5462V23.1613H39.0621ZM39.0268 21.2082H20.516C20.3206 18.1332 19.1847 16.4681 17.6385 14.5246L12.2981 7.81245H30.2712L36.5792 15.7406C37.9516 17.4656 38.8445 18.7662 39.0268 21.2082ZM11.2496 2.92967C11.2496 2.3912 11.6877 1.95311 12.2262 1.95311H28.789C29.3275 1.95311 29.7655 2.3912 29.7655 2.92967V5.85934H11.2496V2.92967ZM4.43601 15.7407L10.2731 8.40444L16.1101 15.7407C17.4825 17.4656 18.3754 18.7662 18.5577 21.2082H14.88C14.3407 21.2082 13.9034 21.6455 13.9034 22.1847C13.9034 22.724 14.3407 23.1613 14.88 23.1613H18.593V42.1873H1.95311V23.1613H6.09108C6.63033 23.1613 7.06763 22.724 7.06763 22.1847C7.06763 21.6455 6.63033 21.2082 6.09108 21.2082H1.98837C2.17069 18.7662 3.06356 17.4656 4.43601 15.7407ZM1.95311 46.1611V44.1404H18.5931V48.0468H3.67185C2.7241 48.0468 1.95311 47.2009 1.95311 46.1611ZM37.3433 48.0468H20.5462V44.1404H39.0621V46.1611C39.0621 47.2009 38.291 48.0468 37.3433 48.0468Z"/>
                        <path d="M29.8041 37.6358C32.5396 37.6358 34.7651 35.4103 34.7651 32.6748C34.7651 29.9394 32.5396 27.7139 29.8041 27.7139C27.0687 27.7139 24.8432 29.9394 24.8432 32.6748C24.8432 35.4103 27.0688 37.6358 29.8041 37.6358ZM29.8041 29.667C31.4626 29.667 32.8119 31.0162 32.8119 32.6748C32.8119 34.3334 31.4627 35.6827 29.8041 35.6827C28.1455 35.6827 26.7963 34.3334 26.7963 32.6748C26.7963 31.0162 28.1456 29.667 29.8041 29.667Z"/>
                        <path d="M10.4859 23.1621C11.0252 23.1621 11.4625 22.7248 11.4625 22.1855C11.4625 21.6463 11.0252 21.209 10.4859 21.209H10.4851C9.94589 21.209 9.50897 21.6463 9.50897 22.1855C9.50897 22.7248 9.94657 23.1621 10.4859 23.1621Z"/>
                      </svg>
                    </i>
                  </div>
                  <p class="text-center small">Lacteos</p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-4 px-1">
            <a href="#" class="">
              <div class="card radius">
                <div class="card-body px-0 py-3 card-shadow radius card-body-hover">
                  <div class="icon text-center">
                    <i>
                      <svg width="42" height="50" viewBox="0 0 42 50" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M38.1076 14.5245L31.7188 6.49469V2.92967C31.7188 1.31425 30.4045 0 28.7891 0H12.2262C10.6108 0 9.29653 1.31425 9.29653 2.92967V6.49479L2.9076 14.5247C1.20507 16.6645 0 18.4666 0 22.1847V46.1612C0 48.2779 1.64716 50 3.67185 50H37.3433C39.3679 50 41.0152 48.2779 41.0152 46.1612V22.1847C41.0152 18.4666 39.81 16.6646 38.1076 14.5245ZM39.0621 23.1613V42.1873H20.5462V23.1613H39.0621ZM39.0268 21.2082H20.516C20.3206 18.1332 19.1847 16.4681 17.6385 14.5246L12.2981 7.81245H30.2712L36.5792 15.7406C37.9516 17.4656 38.8445 18.7662 39.0268 21.2082ZM11.2496 2.92967C11.2496 2.3912 11.6877 1.95311 12.2262 1.95311H28.789C29.3275 1.95311 29.7655 2.3912 29.7655 2.92967V5.85934H11.2496V2.92967ZM4.43601 15.7407L10.2731 8.40444L16.1101 15.7407C17.4825 17.4656 18.3754 18.7662 18.5577 21.2082H14.88C14.3407 21.2082 13.9034 21.6455 13.9034 22.1847C13.9034 22.724 14.3407 23.1613 14.88 23.1613H18.593V42.1873H1.95311V23.1613H6.09108C6.63033 23.1613 7.06763 22.724 7.06763 22.1847C7.06763 21.6455 6.63033 21.2082 6.09108 21.2082H1.98837C2.17069 18.7662 3.06356 17.4656 4.43601 15.7407ZM1.95311 46.1611V44.1404H18.5931V48.0468H3.67185C2.7241 48.0468 1.95311 47.2009 1.95311 46.1611ZM37.3433 48.0468H20.5462V44.1404H39.0621V46.1611C39.0621 47.2009 38.291 48.0468 37.3433 48.0468Z"/>
                        <path d="M29.8041 37.6358C32.5396 37.6358 34.7651 35.4103 34.7651 32.6748C34.7651 29.9394 32.5396 27.7139 29.8041 27.7139C27.0687 27.7139 24.8432 29.9394 24.8432 32.6748C24.8432 35.4103 27.0688 37.6358 29.8041 37.6358ZM29.8041 29.667C31.4626 29.667 32.8119 31.0162 32.8119 32.6748C32.8119 34.3334 31.4627 35.6827 29.8041 35.6827C28.1455 35.6827 26.7963 34.3334 26.7963 32.6748C26.7963 31.0162 28.1456 29.667 29.8041 29.667Z"/>
                        <path d="M10.4859 23.1621C11.0252 23.1621 11.4625 22.7248 11.4625 22.1855C11.4625 21.6463 11.0252 21.209 10.4859 21.209H10.4851C9.94589 21.209 9.50897 21.6463 9.50897 22.1855C9.50897 22.7248 9.94657 23.1621 10.4859 23.1621Z"/>
                      </svg>
                    </i>
                  </div>
                  <p class="text-center small">Avena y cereal</p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-4 px-1">
            <a href="#" class="">
              <div class="card radius">
                <div class="card-body px-0 py-3 card-shadow radius card-body-hover">
                  <div class="icon text-center">
                    <i>
                      <svg width="42" height="50" viewBox="0 0 42 50" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M38.1076 14.5245L31.7188 6.49469V2.92967C31.7188 1.31425 30.4045 0 28.7891 0H12.2262C10.6108 0 9.29653 1.31425 9.29653 2.92967V6.49479L2.9076 14.5247C1.20507 16.6645 0 18.4666 0 22.1847V46.1612C0 48.2779 1.64716 50 3.67185 50H37.3433C39.3679 50 41.0152 48.2779 41.0152 46.1612V22.1847C41.0152 18.4666 39.81 16.6646 38.1076 14.5245ZM39.0621 23.1613V42.1873H20.5462V23.1613H39.0621ZM39.0268 21.2082H20.516C20.3206 18.1332 19.1847 16.4681 17.6385 14.5246L12.2981 7.81245H30.2712L36.5792 15.7406C37.9516 17.4656 38.8445 18.7662 39.0268 21.2082ZM11.2496 2.92967C11.2496 2.3912 11.6877 1.95311 12.2262 1.95311H28.789C29.3275 1.95311 29.7655 2.3912 29.7655 2.92967V5.85934H11.2496V2.92967ZM4.43601 15.7407L10.2731 8.40444L16.1101 15.7407C17.4825 17.4656 18.3754 18.7662 18.5577 21.2082H14.88C14.3407 21.2082 13.9034 21.6455 13.9034 22.1847C13.9034 22.724 14.3407 23.1613 14.88 23.1613H18.593V42.1873H1.95311V23.1613H6.09108C6.63033 23.1613 7.06763 22.724 7.06763 22.1847C7.06763 21.6455 6.63033 21.2082 6.09108 21.2082H1.98837C2.17069 18.7662 3.06356 17.4656 4.43601 15.7407ZM1.95311 46.1611V44.1404H18.5931V48.0468H3.67185C2.7241 48.0468 1.95311 47.2009 1.95311 46.1611ZM37.3433 48.0468H20.5462V44.1404H39.0621V46.1611C39.0621 47.2009 38.291 48.0468 37.3433 48.0468Z"/>
                        <path d="M29.8041 37.6358C32.5396 37.6358 34.7651 35.4103 34.7651 32.6748C34.7651 29.9394 32.5396 27.7139 29.8041 27.7139C27.0687 27.7139 24.8432 29.9394 24.8432 32.6748C24.8432 35.4103 27.0688 37.6358 29.8041 37.6358ZM29.8041 29.667C31.4626 29.667 32.8119 31.0162 32.8119 32.6748C32.8119 34.3334 31.4627 35.6827 29.8041 35.6827C28.1455 35.6827 26.7963 34.3334 26.7963 32.6748C26.7963 31.0162 28.1456 29.667 29.8041 29.667Z"/>
                        <path d="M10.4859 23.1621C11.0252 23.1621 11.4625 22.7248 11.4625 22.1855C11.4625 21.6463 11.0252 21.209 10.4859 21.209H10.4851C9.94589 21.209 9.50897 21.6463 9.50897 22.1855C9.50897 22.7248 9.94657 23.1621 10.4859 23.1621Z"/>
                      </svg>
                    </i>
                  </div>
                  <p class="text-center small">Pasta</p>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="categories row py-2">
          <div class="col-4 px-1">
            <a href="#" class="">
              <div class="card radius">
                <div class="card-body px-0 py-3 card-shadow radius card-body-hover">
                  <div class="icon text-center">
                    <i>
                      <svg width="42" height="50" viewBox="0 0 42 50" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M38.1076 14.5245L31.7188 6.49469V2.92967C31.7188 1.31425 30.4045 0 28.7891 0H12.2262C10.6108 0 9.29653 1.31425 9.29653 2.92967V6.49479L2.9076 14.5247C1.20507 16.6645 0 18.4666 0 22.1847V46.1612C0 48.2779 1.64716 50 3.67185 50H37.3433C39.3679 50 41.0152 48.2779 41.0152 46.1612V22.1847C41.0152 18.4666 39.81 16.6646 38.1076 14.5245ZM39.0621 23.1613V42.1873H20.5462V23.1613H39.0621ZM39.0268 21.2082H20.516C20.3206 18.1332 19.1847 16.4681 17.6385 14.5246L12.2981 7.81245H30.2712L36.5792 15.7406C37.9516 17.4656 38.8445 18.7662 39.0268 21.2082ZM11.2496 2.92967C11.2496 2.3912 11.6877 1.95311 12.2262 1.95311H28.789C29.3275 1.95311 29.7655 2.3912 29.7655 2.92967V5.85934H11.2496V2.92967ZM4.43601 15.7407L10.2731 8.40444L16.1101 15.7407C17.4825 17.4656 18.3754 18.7662 18.5577 21.2082H14.88C14.3407 21.2082 13.9034 21.6455 13.9034 22.1847C13.9034 22.724 14.3407 23.1613 14.88 23.1613H18.593V42.1873H1.95311V23.1613H6.09108C6.63033 23.1613 7.06763 22.724 7.06763 22.1847C7.06763 21.6455 6.63033 21.2082 6.09108 21.2082H1.98837C2.17069 18.7662 3.06356 17.4656 4.43601 15.7407ZM1.95311 46.1611V44.1404H18.5931V48.0468H3.67185C2.7241 48.0468 1.95311 47.2009 1.95311 46.1611ZM37.3433 48.0468H20.5462V44.1404H39.0621V46.1611C39.0621 47.2009 38.291 48.0468 37.3433 48.0468Z"/>
                        <path d="M29.8041 37.6358C32.5396 37.6358 34.7651 35.4103 34.7651 32.6748C34.7651 29.9394 32.5396 27.7139 29.8041 27.7139C27.0687 27.7139 24.8432 29.9394 24.8432 32.6748C24.8432 35.4103 27.0688 37.6358 29.8041 37.6358ZM29.8041 29.667C31.4626 29.667 32.8119 31.0162 32.8119 32.6748C32.8119 34.3334 31.4627 35.6827 29.8041 35.6827C28.1455 35.6827 26.7963 34.3334 26.7963 32.6748C26.7963 31.0162 28.1456 29.667 29.8041 29.667Z"/>
                        <path d="M10.4859 23.1621C11.0252 23.1621 11.4625 22.7248 11.4625 22.1855C11.4625 21.6463 11.0252 21.209 10.4859 21.209H10.4851C9.94589 21.209 9.50897 21.6463 9.50897 22.1855C9.50897 22.7248 9.94657 23.1621 10.4859 23.1621Z"/>
                      </svg>
                    </i>
                  </div>
                  <p class="text-center small">Azucares</p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-4 px-1">
            <a href="#" class="">
              <div class="card radius">
                <div class="card-body px-0 py-3 card-shadow radius card-body-hover">
                  <div class="icon text-center">
                    <i>
                      <svg width="42" height="50" viewBox="0 0 42 50" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M38.1076 14.5245L31.7188 6.49469V2.92967C31.7188 1.31425 30.4045 0 28.7891 0H12.2262C10.6108 0 9.29653 1.31425 9.29653 2.92967V6.49479L2.9076 14.5247C1.20507 16.6645 0 18.4666 0 22.1847V46.1612C0 48.2779 1.64716 50 3.67185 50H37.3433C39.3679 50 41.0152 48.2779 41.0152 46.1612V22.1847C41.0152 18.4666 39.81 16.6646 38.1076 14.5245ZM39.0621 23.1613V42.1873H20.5462V23.1613H39.0621ZM39.0268 21.2082H20.516C20.3206 18.1332 19.1847 16.4681 17.6385 14.5246L12.2981 7.81245H30.2712L36.5792 15.7406C37.9516 17.4656 38.8445 18.7662 39.0268 21.2082ZM11.2496 2.92967C11.2496 2.3912 11.6877 1.95311 12.2262 1.95311H28.789C29.3275 1.95311 29.7655 2.3912 29.7655 2.92967V5.85934H11.2496V2.92967ZM4.43601 15.7407L10.2731 8.40444L16.1101 15.7407C17.4825 17.4656 18.3754 18.7662 18.5577 21.2082H14.88C14.3407 21.2082 13.9034 21.6455 13.9034 22.1847C13.9034 22.724 14.3407 23.1613 14.88 23.1613H18.593V42.1873H1.95311V23.1613H6.09108C6.63033 23.1613 7.06763 22.724 7.06763 22.1847C7.06763 21.6455 6.63033 21.2082 6.09108 21.2082H1.98837C2.17069 18.7662 3.06356 17.4656 4.43601 15.7407ZM1.95311 46.1611V44.1404H18.5931V48.0468H3.67185C2.7241 48.0468 1.95311 47.2009 1.95311 46.1611ZM37.3433 48.0468H20.5462V44.1404H39.0621V46.1611C39.0621 47.2009 38.291 48.0468 37.3433 48.0468Z"/>
                        <path d="M29.8041 37.6358C32.5396 37.6358 34.7651 35.4103 34.7651 32.6748C34.7651 29.9394 32.5396 27.7139 29.8041 27.7139C27.0687 27.7139 24.8432 29.9394 24.8432 32.6748C24.8432 35.4103 27.0688 37.6358 29.8041 37.6358ZM29.8041 29.667C31.4626 29.667 32.8119 31.0162 32.8119 32.6748C32.8119 34.3334 31.4627 35.6827 29.8041 35.6827C28.1455 35.6827 26.7963 34.3334 26.7963 32.6748C26.7963 31.0162 28.1456 29.667 29.8041 29.667Z"/>
                        <path d="M10.4859 23.1621C11.0252 23.1621 11.4625 22.7248 11.4625 22.1855C11.4625 21.6463 11.0252 21.209 10.4859 21.209H10.4851C9.94589 21.209 9.50897 21.6463 9.50897 22.1855C9.50897 22.7248 9.94657 23.1621 10.4859 23.1621Z"/>
                      </svg>
                    </i>
                  </div>
                  <p class="text-center small">Granos</p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-4 px-1">
            <a href="#" class="">
              <div class="card radius">
                <div class="card-body px-0 py-3 card-shadow radius card-body-hover">
                  <div class="icon text-center">
                    <i>
                      <svg width="42" height="50" viewBox="0 0 42 50" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M38.1076 14.5245L31.7188 6.49469V2.92967C31.7188 1.31425 30.4045 0 28.7891 0H12.2262C10.6108 0 9.29653 1.31425 9.29653 2.92967V6.49479L2.9076 14.5247C1.20507 16.6645 0 18.4666 0 22.1847V46.1612C0 48.2779 1.64716 50 3.67185 50H37.3433C39.3679 50 41.0152 48.2779 41.0152 46.1612V22.1847C41.0152 18.4666 39.81 16.6646 38.1076 14.5245ZM39.0621 23.1613V42.1873H20.5462V23.1613H39.0621ZM39.0268 21.2082H20.516C20.3206 18.1332 19.1847 16.4681 17.6385 14.5246L12.2981 7.81245H30.2712L36.5792 15.7406C37.9516 17.4656 38.8445 18.7662 39.0268 21.2082ZM11.2496 2.92967C11.2496 2.3912 11.6877 1.95311 12.2262 1.95311H28.789C29.3275 1.95311 29.7655 2.3912 29.7655 2.92967V5.85934H11.2496V2.92967ZM4.43601 15.7407L10.2731 8.40444L16.1101 15.7407C17.4825 17.4656 18.3754 18.7662 18.5577 21.2082H14.88C14.3407 21.2082 13.9034 21.6455 13.9034 22.1847C13.9034 22.724 14.3407 23.1613 14.88 23.1613H18.593V42.1873H1.95311V23.1613H6.09108C6.63033 23.1613 7.06763 22.724 7.06763 22.1847C7.06763 21.6455 6.63033 21.2082 6.09108 21.2082H1.98837C2.17069 18.7662 3.06356 17.4656 4.43601 15.7407ZM1.95311 46.1611V44.1404H18.5931V48.0468H3.67185C2.7241 48.0468 1.95311 47.2009 1.95311 46.1611ZM37.3433 48.0468H20.5462V44.1404H39.0621V46.1611C39.0621 47.2009 38.291 48.0468 37.3433 48.0468Z"/>
                        <path d="M29.8041 37.6358C32.5396 37.6358 34.7651 35.4103 34.7651 32.6748C34.7651 29.9394 32.5396 27.7139 29.8041 27.7139C27.0687 27.7139 24.8432 29.9394 24.8432 32.6748C24.8432 35.4103 27.0688 37.6358 29.8041 37.6358ZM29.8041 29.667C31.4626 29.667 32.8119 31.0162 32.8119 32.6748C32.8119 34.3334 31.4627 35.6827 29.8041 35.6827C28.1455 35.6827 26.7963 34.3334 26.7963 32.6748C26.7963 31.0162 28.1456 29.667 29.8041 29.667Z"/>
                        <path d="M10.4859 23.1621C11.0252 23.1621 11.4625 22.7248 11.4625 22.1855C11.4625 21.6463 11.0252 21.209 10.4859 21.209H10.4851C9.94589 21.209 9.50897 21.6463 9.50897 22.1855C9.50897 22.7248 9.94657 23.1621 10.4859 23.1621Z"/>
                      </svg>
                    </i>
                  </div>
                  <p class="text-center small">Harinas</p>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="categories row py-2">
          <div class="col-4 px-1">
            <a href="#" class="">
              <div class="card radius">
                <div class="card-body px-0 py-3 card-shadow radius card-body-hover">
                  <div class="icon text-center">
                    <i>
                      <svg width="42" height="50" viewBox="0 0 42 50" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M38.1076 14.5245L31.7188 6.49469V2.92967C31.7188 1.31425 30.4045 0 28.7891 0H12.2262C10.6108 0 9.29653 1.31425 9.29653 2.92967V6.49479L2.9076 14.5247C1.20507 16.6645 0 18.4666 0 22.1847V46.1612C0 48.2779 1.64716 50 3.67185 50H37.3433C39.3679 50 41.0152 48.2779 41.0152 46.1612V22.1847C41.0152 18.4666 39.81 16.6646 38.1076 14.5245ZM39.0621 23.1613V42.1873H20.5462V23.1613H39.0621ZM39.0268 21.2082H20.516C20.3206 18.1332 19.1847 16.4681 17.6385 14.5246L12.2981 7.81245H30.2712L36.5792 15.7406C37.9516 17.4656 38.8445 18.7662 39.0268 21.2082ZM11.2496 2.92967C11.2496 2.3912 11.6877 1.95311 12.2262 1.95311H28.789C29.3275 1.95311 29.7655 2.3912 29.7655 2.92967V5.85934H11.2496V2.92967ZM4.43601 15.7407L10.2731 8.40444L16.1101 15.7407C17.4825 17.4656 18.3754 18.7662 18.5577 21.2082H14.88C14.3407 21.2082 13.9034 21.6455 13.9034 22.1847C13.9034 22.724 14.3407 23.1613 14.88 23.1613H18.593V42.1873H1.95311V23.1613H6.09108C6.63033 23.1613 7.06763 22.724 7.06763 22.1847C7.06763 21.6455 6.63033 21.2082 6.09108 21.2082H1.98837C2.17069 18.7662 3.06356 17.4656 4.43601 15.7407ZM1.95311 46.1611V44.1404H18.5931V48.0468H3.67185C2.7241 48.0468 1.95311 47.2009 1.95311 46.1611ZM37.3433 48.0468H20.5462V44.1404H39.0621V46.1611C39.0621 47.2009 38.291 48.0468 37.3433 48.0468Z"/>
                        <path d="M29.8041 37.6358C32.5396 37.6358 34.7651 35.4103 34.7651 32.6748C34.7651 29.9394 32.5396 27.7139 29.8041 27.7139C27.0687 27.7139 24.8432 29.9394 24.8432 32.6748C24.8432 35.4103 27.0688 37.6358 29.8041 37.6358ZM29.8041 29.667C31.4626 29.667 32.8119 31.0162 32.8119 32.6748C32.8119 34.3334 31.4627 35.6827 29.8041 35.6827C28.1455 35.6827 26.7963 34.3334 26.7963 32.6748C26.7963 31.0162 28.1456 29.667 29.8041 29.667Z"/>
                        <path d="M10.4859 23.1621C11.0252 23.1621 11.4625 22.7248 11.4625 22.1855C11.4625 21.6463 11.0252 21.209 10.4859 21.209H10.4851C9.94589 21.209 9.50897 21.6463 9.50897 22.1855C9.50897 22.7248 9.94657 23.1621 10.4859 23.1621Z"/>
                      </svg>
                    </i>
                  </div>
                  <p class="text-center small">Enlatados</p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-4 px-1">
            <a href="#" class="">
              <div class="card radius">
                <div class="card-body px-0 py-3 card-shadow radius card-body-hover">
                  <div class="icon text-center">
                    <i>
                      <svg width="42" height="50" viewBox="0 0 42 50" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M38.1076 14.5245L31.7188 6.49469V2.92967C31.7188 1.31425 30.4045 0 28.7891 0H12.2262C10.6108 0 9.29653 1.31425 9.29653 2.92967V6.49479L2.9076 14.5247C1.20507 16.6645 0 18.4666 0 22.1847V46.1612C0 48.2779 1.64716 50 3.67185 50H37.3433C39.3679 50 41.0152 48.2779 41.0152 46.1612V22.1847C41.0152 18.4666 39.81 16.6646 38.1076 14.5245ZM39.0621 23.1613V42.1873H20.5462V23.1613H39.0621ZM39.0268 21.2082H20.516C20.3206 18.1332 19.1847 16.4681 17.6385 14.5246L12.2981 7.81245H30.2712L36.5792 15.7406C37.9516 17.4656 38.8445 18.7662 39.0268 21.2082ZM11.2496 2.92967C11.2496 2.3912 11.6877 1.95311 12.2262 1.95311H28.789C29.3275 1.95311 29.7655 2.3912 29.7655 2.92967V5.85934H11.2496V2.92967ZM4.43601 15.7407L10.2731 8.40444L16.1101 15.7407C17.4825 17.4656 18.3754 18.7662 18.5577 21.2082H14.88C14.3407 21.2082 13.9034 21.6455 13.9034 22.1847C13.9034 22.724 14.3407 23.1613 14.88 23.1613H18.593V42.1873H1.95311V23.1613H6.09108C6.63033 23.1613 7.06763 22.724 7.06763 22.1847C7.06763 21.6455 6.63033 21.2082 6.09108 21.2082H1.98837C2.17069 18.7662 3.06356 17.4656 4.43601 15.7407ZM1.95311 46.1611V44.1404H18.5931V48.0468H3.67185C2.7241 48.0468 1.95311 47.2009 1.95311 46.1611ZM37.3433 48.0468H20.5462V44.1404H39.0621V46.1611C39.0621 47.2009 38.291 48.0468 37.3433 48.0468Z"/>
                        <path d="M29.8041 37.6358C32.5396 37.6358 34.7651 35.4103 34.7651 32.6748C34.7651 29.9394 32.5396 27.7139 29.8041 27.7139C27.0687 27.7139 24.8432 29.9394 24.8432 32.6748C24.8432 35.4103 27.0688 37.6358 29.8041 37.6358ZM29.8041 29.667C31.4626 29.667 32.8119 31.0162 32.8119 32.6748C32.8119 34.3334 31.4627 35.6827 29.8041 35.6827C28.1455 35.6827 26.7963 34.3334 26.7963 32.6748C26.7963 31.0162 28.1456 29.667 29.8041 29.667Z"/>
                        <path d="M10.4859 23.1621C11.0252 23.1621 11.4625 22.7248 11.4625 22.1855C11.4625 21.6463 11.0252 21.209 10.4859 21.209H10.4851C9.94589 21.209 9.50897 21.6463 9.50897 22.1855C9.50897 22.7248 9.94657 23.1621 10.4859 23.1621Z"/>
                      </svg>
                    </i>
                  </div>
                  <p class="text-center small">Bebidas</p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-4 px-1">
            <a href="#" class="">
              <div class="card radius">
                <div class="card-body px-0 py-3 card-shadow radius card-body-hover">
                  <div class="icon text-center">
                    <i>
                      <svg width="42" height="50" viewBox="0 0 42 50" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M38.1076 14.5245L31.7188 6.49469V2.92967C31.7188 1.31425 30.4045 0 28.7891 0H12.2262C10.6108 0 9.29653 1.31425 9.29653 2.92967V6.49479L2.9076 14.5247C1.20507 16.6645 0 18.4666 0 22.1847V46.1612C0 48.2779 1.64716 50 3.67185 50H37.3433C39.3679 50 41.0152 48.2779 41.0152 46.1612V22.1847C41.0152 18.4666 39.81 16.6646 38.1076 14.5245ZM39.0621 23.1613V42.1873H20.5462V23.1613H39.0621ZM39.0268 21.2082H20.516C20.3206 18.1332 19.1847 16.4681 17.6385 14.5246L12.2981 7.81245H30.2712L36.5792 15.7406C37.9516 17.4656 38.8445 18.7662 39.0268 21.2082ZM11.2496 2.92967C11.2496 2.3912 11.6877 1.95311 12.2262 1.95311H28.789C29.3275 1.95311 29.7655 2.3912 29.7655 2.92967V5.85934H11.2496V2.92967ZM4.43601 15.7407L10.2731 8.40444L16.1101 15.7407C17.4825 17.4656 18.3754 18.7662 18.5577 21.2082H14.88C14.3407 21.2082 13.9034 21.6455 13.9034 22.1847C13.9034 22.724 14.3407 23.1613 14.88 23.1613H18.593V42.1873H1.95311V23.1613H6.09108C6.63033 23.1613 7.06763 22.724 7.06763 22.1847C7.06763 21.6455 6.63033 21.2082 6.09108 21.2082H1.98837C2.17069 18.7662 3.06356 17.4656 4.43601 15.7407ZM1.95311 46.1611V44.1404H18.5931V48.0468H3.67185C2.7241 48.0468 1.95311 47.2009 1.95311 46.1611ZM37.3433 48.0468H20.5462V44.1404H39.0621V46.1611C39.0621 47.2009 38.291 48.0468 37.3433 48.0468Z"/>
                        <path d="M29.8041 37.6358C32.5396 37.6358 34.7651 35.4103 34.7651 32.6748C34.7651 29.9394 32.5396 27.7139 29.8041 27.7139C27.0687 27.7139 24.8432 29.9394 24.8432 32.6748C24.8432 35.4103 27.0688 37.6358 29.8041 37.6358ZM29.8041 29.667C31.4626 29.667 32.8119 31.0162 32.8119 32.6748C32.8119 34.3334 31.4627 35.6827 29.8041 35.6827C28.1455 35.6827 26.7963 34.3334 26.7963 32.6748C26.7963 31.0162 28.1456 29.667 29.8041 29.667Z"/>
                        <path d="M10.4859 23.1621C11.0252 23.1621 11.4625 22.7248 11.4625 22.1855C11.4625 21.6463 11.0252 21.209 10.4859 21.209H10.4851C9.94589 21.209 9.50897 21.6463 9.50897 22.1855C9.50897 22.7248 9.94657 23.1621 10.4859 23.1621Z"/>
                      </svg>
                    </i>
                  </div>
                  <p class="text-center small">Condimentos</p>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="categories_footer row text-center py-2">
          <div class="col">
            <a href="#"">Ver todas las categorias</a>
          </div>
        </div>
      </div>
    </section>

    <section id="categories-destop" class="px-3 py-2 my-2 bg-light d-none d-md-block">
      <div class="container-fluid">
        <div class="row my-1 py-4">
          <div class="col">
            <h5 class="mb-0 font-weight-bold text-primary">Conoce algunas de nuestras categorias</h5>
            <h6 class="font-weight-bold text-muted">Ingresa a las categorias de nuestros almacenes</h6>            
          </div>
        </div>
        <div class="row">
          <div class="owl-carousel" id="categories">
            @foreach($categories as $category)
              <div class="col px-0">
                <a href="#">
                    <div class="card ">
                      <div class="card-body card-shadow card-body-hover padding-card">
                        <div class="icon text-center">
                          <i class="text-primary">
                            <img src="{{asset('storage/'.$category->icono)}}" alt="">
                          </i>
                        </div>
                        <p class="text-center small">{{$category->title}}</p>
                      </div>
                    </div>
                  </a>
              </div>
              @endforeach
          </div>
        </div>
        
      </div>
    </section>
  <!-- /categorias -->



 <!----------------------  Productos mas vendidos Desktop ------------------>

  <section class="Productos_masVendidos px-3">
    <div class="tittle-section container d-block d-md-none">
      <div class="product_top-tittle row">
        <div class="product_top-details pb-2">
          <h6 class="text-primary">Productos más vendidos</h6>
          <p class="small text-muted">Las mejores marcas nacionales e importadas</p>
        </div>
      </div>
    </div>
    <div class="Titulo-seccion row my-1 pl-2 py-4 d-none d-md-block">
        <div class="col">
          <h5 class="mb-0 font-weight-bold text-primary">Productos más vendidos</h5>
          <h6 class="font-weight-bold text-muted">Las mejores marcas nacionales e importadas</h6>
        </div>
      </div>
    <div class="container-fluid">
      <div class="row">
        <div class="owl-carousel" id="productos">
          <div class="col spaces">
            <div class="container card radius">
              <div class="row card-body p-0 flex-fill">
                <div class="col-5 p-0 d-block d-md-none imagenIquierda">
                  <img class="mw-100" src="{{asset('images/lineas/linea-viveres.jpg')}}" alt="Product-related">
                </div>
                <div class="d-none d-md-block imagenArriba">
                  <a href="#">
                    <img class="card-img-top" src="{{asset('images/lineas/linea-enlatados.jpg')}}" alt="Card image cap">
                  </a>
                </div>
                <div class="col-7 col-md-12 p-2">
                  <div class="container py-1">
                  <div class="wrapper d-flex flex-wrap h-100 ">
                    <div class="row">
                      <div class="col-12 pb-1 pr-2 d-none d-md-block">
                        <p class="text-muted text-right text-small"><strong class="text-muted">SKU:</strong>00005644545</p>
                      </div>
                      <div class="col-12 p-0 titulo">
                        <h6 class="text-secondary font-weight-bold">Titulo del producto</h6>
                      </div>
                      <div class="col-12 p-0 descripcion">
                        <p class="text-small pl-0">Descripcion del producto</p>
                      </div>
                      <div class="col-7 col-md-12 p-0 unidades">
                        <p class="text-small text-muted">(100 disponibles)</p>
                      </div>
                      <div class="col-md-12 p-0 d-none d-md-block categoria">
                          <a href="#" class="text-small">Categoria</a>
                      </div>
                      <div class="col-5 p-0 iva">
                        <p class="text-small text-muted">IVA incluido</p>
                      </div>
                      <div class="col-12 p-0 d-block d-md-none precioUnidad">
                        <p class="text-small text-black font-weight-bold d-block d-md-none">2,00 $ / Undidad</p>
                      </div>
                      <div class="col-9 text-center p-0 align-self-end d-block d-md-none PrecioTotal">
                        <p class="text-black font-weight-bold">20,00 $</p>
                        <p class="text-small text-muted">Caja - 30 unidades</p>
                      </div>
                      <div class="col-3 p-0 align-self-end d-block d-md-none Botoncito">
                        <a href="#">
                          <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-plus-circle text-primary align-center" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                          </svg> 
                        </a>
                      </div>
                      <div class="card-pricing text-center center-elements align-self-end pb-2 d-none d-md-block">
                        <h4 class="font-weight-bold mb-0 mt-3">20,00 $</h4>
                        <p class="text-small pb-2">Caja de 20 unidades</p>
                        <a href="#" class="btn btn-primary px-5 py-2">Agregar</a>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col spaces">
            <div class="container card radius">
              <div class="row card-body p-0 flex-fill">
                <div class="col-5 p-0 d-block d-md-none imagenIquierda">
                  <img class="mw-100" src="{{asset('images/lineas/linea-viveres.jpg')}}" alt="Product-related">
                </div>
                <div class="d-none d-md-block imagenArriba">
                  <a href="#">
                    <img class="card-img-top" src="{{asset('images/lineas/linea-enlatados.jpg')}}" alt="Card image cap">
                  </a>
                </div>
                <div class="col-7 col-md-12 p-2">
                  <div class="container py-1">
                  <div class="wrapper d-flex flex-wrap h-100 ">
                    <div class="row">
                      <div class="col-12 pb-1 pr-2 d-none d-md-block">
                        <p class="text-muted text-right text-small"><strong class="text-muted">SKU:</strong>00005644545</p>
                      </div>
                      <div class="col-12 p-0 titulo">
                        <h6 class="text-secondary font-weight-bold">Titulo del producto</h6>
                      </div>
                      <div class="col-12 p-0 descripcion">
                        <p class="text-small pl-0">Descripcion del producto</p>
                      </div>
                      <div class="col-7 col-md-12 p-0 unidades">
                        <p class="text-small text-muted">(100 disponibles)</p>
                      </div>
                      <div class="col-md-12 p-0 d-none d-md-block categoria">
                          <a href="#" class="text-small">Categoria</a>
                      </div>
                      <div class="col-5 p-0 iva">
                        <p class="text-small text-muted">IVA incluido</p>
                      </div>
                      <div class="col-12 p-0 d-block d-md-none precioUnidad">
                        <p class="text-small text-black font-weight-bold d-block d-md-none">2,00 $ / Undidad</p>
                      </div>
                      <div class="col-9 text-center p-0 align-self-end d-block d-md-none PrecioTotal">
                        <p class="text-black font-weight-bold">20,00 $</p>
                        <p class="text-small text-muted">Caja - 30 unidades</p>
                      </div>
                      <div class="col-3 p-0 align-self-end d-block d-md-none Botoncito">
                        <a href="#">
                          <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-plus-circle text-primary align-center" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                          </svg> 
                        </a>
                      </div>
                      <div class="card-pricing text-center center-elements align-self-end pb-2 d-none d-md-block">
                        <h4 class="font-weight-bold mb-0 mt-3">20,00 $</h4>
                        <p class="text-small pb-2">Caja de 20 unidades</p>
                        <a href="#" class="btn btn-primary px-5 py-2">Agregar</a>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col spaces">
            <div class="container card radius">
              <div class="row card-body p-0 flex-fill">
                <div class="col-5 p-0 d-block d-md-none imagenIquierda">
                  <img class="mw-100" src="{{asset('images/lineas/linea-viveres.jpg')}}" alt="Product-related">
                </div>
                <div class="d-none d-md-block imagenArriba">
                  <a href="#">
                    <img class="card-img-top" src="{{asset('images/lineas/linea-enlatados.jpg')}}" alt="Card image cap">
                  </a>
                </div>
                <div class="col-7 col-md-12 p-2">
                  <div class="container py-1">
                  <div class="wrapper d-flex flex-wrap h-100 ">
                    <div class="row">
                      <div class="col-12 pb-1 pr-2 d-none d-md-block">
                        <p class="text-muted text-right text-small"><strong class="text-muted">SKU:</strong>00005644545</p>
                      </div>
                      <div class="col-12 p-0 titulo">
                        <h6 class="text-secondary font-weight-bold">Titulo del producto</h6>
                      </div>
                      <div class="col-12 p-0 descripcion">
                        <p class="text-small pl-0">Descripcion del producto</p>
                      </div>
                      <div class="col-7 col-md-12 p-0 unidades">
                        <p class="text-small text-muted">(100 disponibles)</p>
                      </div>
                      <div class="col-md-12 p-0 d-none d-md-block categoria">
                          <a href="#" class="text-small">Categoria</a>
                      </div>
                      <div class="col-5 p-0 iva">
                        <p class="text-small text-muted">IVA incluido</p>
                      </div>
                      <div class="col-12 p-0 d-block d-md-none precioUnidad">
                        <p class="text-small text-black font-weight-bold d-block d-md-none">2,00 $ / Undidad</p>
                      </div>
                      <div class="col-9 text-center p-0 align-self-end d-block d-md-none PrecioTotal">
                        <p class="text-black font-weight-bold">20,00 $</p>
                        <p class="text-small text-muted">Caja - 30 unidades</p>
                      </div>
                      <div class="col-3 p-0 align-self-end d-block d-md-none Botoncito">
                        <a href="#">
                          <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-plus-circle text-primary align-center" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                          </svg> 
                        </a>
                      </div>
                      <div class="card-pricing text-center center-elements align-self-end pb-2 d-none d-md-block">
                        <h4 class="font-weight-bold mb-0 mt-3">20,00 $</h4>
                        <p class="text-small pb-2">Caja de 20 unidades</p>
                        <a href="#" class="btn btn-primary px-5 py-2">Agregar</a>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col spaces">
            <div class="container card radius">
              <div class="row card-body p-0 flex-fill">
                <div class="col-5 p-0 d-block d-md-none imagenIquierda">
                  <img class="mw-100" src="{{asset('images/lineas/linea-viveres.jpg')}}" alt="Product-related">
                </div>
                <div class="d-none d-md-block imagenArriba">
                  <a href="#">
                    <img class="card-img-top" src="{{asset('images/lineas/linea-enlatados.jpg')}}" alt="Card image cap">
                  </a>
                </div>
                <div class="col-7 col-md-12 p-2">
                  <div class="container py-1">
                  <div class="wrapper d-flex flex-wrap h-100 ">
                    <div class="row">
                      <div class="col-12 pb-1 pr-2 d-none d-md-block">
                        <p class="text-muted text-right text-small"><strong class="text-muted">SKU:</strong>00005644545</p>
                      </div>
                      <div class="col-12 p-0 titulo">
                        <h6 class="text-secondary font-weight-bold">Titulo del producto</h6>
                      </div>
                      <div class="col-12 p-0 descripcion">
                        <p class="text-small pl-0">Descripcion del producto</p>
                      </div>
                      <div class="col-7 col-md-12 p-0 unidades">
                        <p class="text-small text-muted">(100 disponibles)</p>
                      </div>
                      <div class="col-md-12 p-0 d-none d-md-block categoria">
                          <a href="#" class="text-small">Categoria</a>
                      </div>
                      <div class="col-5 p-0 iva">
                        <p class="text-small text-muted">IVA incluido</p>
                      </div>
                      <div class="col-12 p-0 d-block d-md-none precioUnidad">
                        <p class="text-small text-black font-weight-bold d-block d-md-none">2,00 $ / Undidad</p>
                      </div>
                      <div class="col-9 text-center p-0 align-self-end d-block d-md-none PrecioTotal">
                        <p class="text-black font-weight-bold">20,00 $</p>
                        <p class="text-small text-muted">Caja - 30 unidades</p>
                      </div>
                      <div class="col-3 p-0 align-self-end d-block d-md-none Botoncito">
                        <a href="#">
                          <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-plus-circle text-primary align-center" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                          </svg> 
                        </a>
                      </div>
                      <div class="card-pricing text-center center-elements align-self-end pb-2 d-none d-md-block">
                        <h4 class="font-weight-bold mb-0 mt-3">20,00 $</h4>
                        <p class="text-small pb-2">Caja de 20 unidades</p>
                        <a href="#" class="btn btn-primary px-5 py-2">Agregar</a>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col spaces">
            <div class="container card radius">
              <div class="row card-body p-0 flex-fill">
                <div class="col-5 p-0 d-block d-md-none imagenIquierda">
                  <img class="mw-100" src="{{asset('images/lineas/linea-viveres.jpg')}}" alt="Product-related">
                </div>
                <div class="d-none d-md-block imagenArriba">
                  <a href="#">
                    <img class="card-img-top" src="{{asset('images/lineas/linea-enlatados.jpg')}}" alt="Card image cap">
                  </a>
                </div>
                <div class="col-7 col-md-12 p-2">
                  <div class="container py-1">
                  <div class="wrapper d-flex flex-wrap h-100 ">
                    <div class="row">
                      <div class="col-12 pb-1 pr-2 d-none d-md-block">
                        <p class="text-muted text-right text-small"><strong class="text-muted">SKU:</strong>00005644545</p>
                      </div>
                      <div class="col-12 p-0 titulo">
                        <h6 class="text-secondary font-weight-bold">Titulo del producto</h6>
                      </div>
                      <div class="col-12 p-0 descripcion">
                        <p class="text-small pl-0">Descripcion del producto</p>
                      </div>
                      <div class="col-7 col-md-12 p-0 unidades">
                        <p class="text-small text-muted">(100 disponibles)</p>
                      </div>
                      <div class="col-md-12 p-0 d-none d-md-block categoria">
                          <a href="#" class="text-small">Categoria</a>
                      </div>
                      <div class="col-5 p-0 iva">
                        <p class="text-small text-muted">IVA incluido</p>
                      </div>
                      <div class="col-12 p-0 d-block d-md-none precioUnidad">
                        <p class="text-small text-black font-weight-bold d-block d-md-none">2,00 $ / Undidad</p>
                      </div>
                      <div class="col-9 text-center p-0 align-self-end d-block d-md-none PrecioTotal">
                        <p class="text-black font-weight-bold">20,00 $</p>
                        <p class="text-small text-muted">Caja - 30 unidades</p>
                      </div>
                      <div class="col-3 p-0 align-self-end d-block d-md-none Botoncito">
                        <a href="#">
                          <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-plus-circle text-primary align-center" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                          </svg> 
                        </a>
                      </div>
                      <div class="card-pricing text-center center-elements align-self-end pb-2 d-none d-md-block">
                        <h4 class="font-weight-bold mb-0 mt-3">20,00 $</h4>
                        <p class="text-small pb-2">Caja de 20 unidades</p>
                        <a href="#" class="btn btn-primary px-5 py-2">Agregar</a>
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
    </div>
  </section>





  <!----------------------  Final de pagina  ------------------>
  {{-- Final version movil --}}
    
  <section id="user" class="d-block d-md-none">
    <div class="container pt-3">
      <div class="row text-center">
        <div class="col-12 text-center">
          <h6 class="text-primary">Eres Nuevo, ¡Registrate!</h6>
          <p class="small text-muted pb-2">Haz click en el boton para registrarte</p>
        </div>
          <div class="col-10 offset-1">
            <button type="button" class="btn btn btn-primary btn-block py-2">Registrarme</button>
          </div>
          <div class="col-12">
            <p class="small text-muted">Ya tengo una cuenta, <a href="#">Iniciar sesión</a></p>
          </div>
      </div>
    </div>
  </section>

  {{-- Final version Desktop --}}

  <section class="d-none d-md-block py-5 my-5">
    <div class="container">
        <div class="row">
          <div class="col-6 d-flex align-items-center justify-content-center flex-column">
            <div class="row text-center">
              <div class="col">
                <h4 class="text-primary py-1">Tus pedidos a un click de distancia</h4>
                <p class="py-2 text-muted">Registrate y compra de forma online las <br> mejores marcar nacionales e importadas!</p>
              </div>
            </div>
            <div class="row text-center">
              <div class="col-12 pb-3 pt-4">
                <a href="/register" class="btn btn-primary btn-registro">Registrate</a>
              </div>
              <div class="col">
                <p class="small text-muted">Ya tengo una cuenta, <a href="/login">Iniciar sesión</a></p>
              </div>
            </div>
          
            
          </div>
          <div class="col-6 text-center">
            <figure>
              <img src="{{asset('images/imgs/registro.svg')}}" alt="">
              <p class="small text-muted">Te estamos esperando...</p>
            </figure>
          </div>
        </div>
    </div>
  </section>





@endsection