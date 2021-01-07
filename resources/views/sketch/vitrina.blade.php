@extends('common.main')

@section('title')
    <title>Nosotros</title>
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
  .colorG {
    color: #999;
  }
  .smaller {
    font-size: 11px;
  }
  .smaller-2 {
    font-size: 10px;
  }
  .smaller-3 {
    font-size: 12px;
  }
  .espaciado {
    padding: 0 6px;
  }
  </style>


   <!-- vitrina-->
   <section>
    <div class="container-fluid">
      <div class="row my-1 px-2 py-0">
        <div class="col mb-2">
          <h3 class="mb-0 font-weight-bold text-primary">Pastas, harinas y azucares</h3>
          <h5 class="font-weight-bold text-muted">Las mejores marcas nacionales e importadas</h5>
        </div>
      </div>

      <div class="row mb-3 px-2">
        <div class="col-6 col-md-2 espaciado">
          <a href="#">
            <div class="card rising border h-100">
              <img class="card-img-top" src="{{asset('images/lineas/linea-lacteos.jpg')}}" alt="Card image cap">
              <div class="card-body pt-1 px-1">
                <p class="text-muted text-right smaller-2"><strong class="text-muted">SKU:</strong>00005644545</p>
                <h5 class="card-title font-weight-bold mb-0 text-blue">Leche Descremada</h5>
                <h6 class="text-black mb-0 smaller-3">Descripcion del producto</h6>
                <p class="card-text smaller">(100 Disponibles)</p>
                <a href="#" class="smaller">Categoria</a>
                <p class="smaller">IVA incluido</p>
                <div class="card-pricing text-center align-bottom">
                  <h4 class="font-weight-bold mb-0 mt-3">20,00 $</h4>
                  <p class="smaller">Caja de 20 unidades</p>
                  <a href="#" class="btn btn-primary px-3 py-1">Agregar</a>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-6 col-md-2 espaciado">
          <a href="#">
            <div class="card rising border h-100">
              <img class="card-img-top" src="{{asset('images/lineas/linea-enlatados.jpg')}}" alt="Card image cap">
              <div class="card-body pt-1 px-1">
                <p class="text-muted text-right smaller-2"><strong class="text-muted">SKU:</strong>00005644545</p>
                <h5 class="card-title font-weight-bold mb-0 text-blue">Titulo del producto</h5>
                <h6 class="text-black mb-0 smaller-3">Descripcion del producto</h6>
                <p class="card-text smaller">(100 Disponibles)</p>
                <a href="#" class="smaller">Categoria</a>
                <p class="smaller">IVA incluido</p>
                <div class="card-pricing text-center align-bottom">
                  <h4 class="font-weight-bold mb-0 mt-3">20,00 $</h4>
                  <p class="smaller">Caja de 20 unidades</p>
                  <a href="#" class="btn btn-primary px-3 py-1">Agregar</a>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-6 col-md-2 espaciado">
          <a href="#">
            <div class="card rising border h-100">
              <img class="card-img-top" src="{{asset('images/lineas/linea-viveres.jpg')}}" alt="Card image cap">
              <div class="card-body pt-1 px-1">
                <p class="text-muted text-right smaller-2"><strong class="text-muted">SKU:</strong>00005644545</p>
                <h5 class="card-title font-weight-bold mb-0 text-blue">Titulo del producto</h5>
                <h6 class="text-black mb-0 smaller-3">Descripcion del producto</h6>
                <p class="card-text smaller">(100 Disponibles)</p>
                <a href="#" class="smaller">Categoria</a>
                <p class="smaller">IVA incluido</p>
                <div class="card-pricing text-center align-bottom">
                  <h4 class="font-weight-bold mb-0 mt-3">20,00 $</h4>
                  <p class="smaller">Caja de 20 unidades</p>
                  <a href="#" class="btn btn-primary px-3 py-1">Agregar</a>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-6 col-md-2 espaciado">
          <a href="#">
            <div class="card rising border h-100">
              <img class="card-img-top" src="{{asset('images/lineas/linea-lacteos.jpg')}}" alt="Card image cap">
              <div class="card-body pt-1 px-1">
                <p class="text-muted text-right smaller-2"><strong class="text-muted">SKU:</strong>00005644545</p>
                <h5 class="card-title font-weight-bold mb-0 text-blue">Leche Descremada</h5>
                <h6 class="text-black mb-0 smaller-3">Descripcion del producto</h6>
                <p class="card-text smaller">(100 Disponibles)</p>
                <a href="#" class="smaller">Categoria</a>
                <p class="smaller">IVA incluido</p>
                <div class="card-pricing text-center align-bottom">
                  <h4 class="font-weight-bold mb-0 mt-3">20,00 $</h4>
                  <p class="smaller">Caja de 20 unidades</p>
                  <a href="#" class="btn btn-primary px-3 py-1">Agregar</a>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-6 col-md-2 espaciado">
          <a href="#">
            <div class="card rising border h-100">
              <img class="card-img-top" src="{{asset('images/lineas/linea-enlatados.jpg')}}" alt="Card image cap">
              <div class="card-body pt-1 px-1">
                <p class="text-muted text-right smaller-2"><strong class="text-muted">SKU:</strong>00005644545</p>
                <h5 class="card-title font-weight-bold mb-0 text-blue">Titulo del producto</h5>
                <h6 class="text-black mb-0 smaller-3">Descripcion del producto</h6>
                <p class="card-text smaller">(100 Disponibles)</p>
                <a href="#" class="smaller">Categoria</a>
                <p class="smaller">IVA incluido</p>
                <div class="card-pricing text-center align-bottom">
                  <h4 class="font-weight-bold mb-0 mt-3">20,00 $</h4>
                  <p class="smaller">Caja de 20 unidades</p>
                  <a href="#" class="btn btn-primary px-3 py-1">Agregar</a>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-6 col-md-2 espaciado">
          <a href="#">
            <div class="card rising border">
              <img class="card-img-top" src="{{asset('images/lineas/linea-viveres.jpg')}}" alt="Card image cap">
              <div class="card-body pt-1 px-1">
                <p class="text-muted text-right smaller-2"><strong class="text-muted">SKU:</strong>00005644545</p>
                <h5 class="card-title font-weight-bold mb-0 text-blue">Titulo del producto</h5>
                <h6 class="text-black mb-0 smaller-3">Descripcion del producto</h6>
                <p class="card-text smaller">(100 Disponibles)</p>
                <a href="#" class="smaller">Categoria</a>
                <p class="smaller">IVA incluido</p>
                <div class="card-pricing text-center align-bottom">
                  <h4 class="font-weight-bold mb-0 mt-3">20,00 $</h4>
                  <p class="smaller">Caja de 20 unidades</p>
                  <a href="#" class="btn btn-primary px-3 py-1">Agregar</a>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>

      <div class="row mb-1 px-2">
        <div class="col-6 col-md-2 espaciado">
          <a href="#">
            <div class="card rising border">
              <img class="card-img-top" src="{{asset('images/lineas/linea-lacteos.jpg')}}" alt="Card image cap">
              <div class="card-body pt-1 px-1">
                <p class="text-muted text-right smaller-2"><strong class="text-muted">SKU:</strong>00005644545</p>
                <h5 class="card-title font-weight-bold mb-0 text-blue">Leche Descremada</h5>
                <h6 class="text-black mb-0 smaller-3">Descripcion del producto</h6>
                <p class="card-text smaller">(100 Disponibles)</p>
                <a href="#" class="smaller">Categoria</a>
                <p class="smaller">IVA incluido</p>
                <div class="card-pricing text-center align-bottom">
                  <h4 class="font-weight-bold mb-0 mt-3">20,00 $</h4>
                  <p class="smaller">Caja de 20 unidades</p>
                  <a href="#" class="btn btn-primary px-3 py-1">Agregar</a>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-6 col-md-2 espaciado">
          <a href="#">
            <div class="card rising border">
              <img class="card-img-top" src="{{asset('images/lineas/linea-enlatados.jpg')}}" alt="Card image cap">
              <div class="card-body pt-1 px-1">
                <p class="text-muted text-right smaller-2"><strong class="text-muted">SKU:</strong>00005644545</p>
                <h5 class="card-title font-weight-bold mb-0 text-blue">Titulo del producto</h5>
                <h6 class="text-black mb-0 smaller-3">Descripcion del producto</h6>
                <p class="card-text smaller">(100 Disponibles)</p>
                <a href="#" class="smaller">Categoria</a>
                <p class="smaller">IVA incluido</p>
                <div class="card-pricing text-center align-bottom">
                  <h4 class="font-weight-bold mb-0 mt-3">20,00 $</h4>
                  <p class="smaller">Caja de 20 unidades</p>
                  <a href="#" class="btn btn-primary px-3 py-1">Agregar</a>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-6 col-md-2 espaciado">
          <a href="#">
            <div class="card rising border">
              <img class="card-img-top" src="{{asset('images/lineas/linea-viveres.jpg')}}" alt="Card image cap">
              <div class="card-body pt-1 px-1">
                <p class="text-muted text-right smaller-2"><strong class="text-muted">SKU:</strong>00005644545</p>
                <h5 class="card-title font-weight-bold mb-0 text-blue">Titulo del producto</h5>
                <h6 class="text-black mb-0 smaller-3">Descripcion del producto</h6>
                <p class="card-text smaller">(100 Disponibles)</p>
                <a href="#" class="smaller">Categoria</a>
                <p class="smaller">IVA incluido</p>
                <div class="card-pricing text-center align-bottom">
                  <h4 class="font-weight-bold mb-0 mt-3">20,00 $</h4>
                  <p class="smaller">Caja de 20 unidades</p>
                  <a href="#" class="btn btn-primary px-3 py-1">Agregar</a>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-6 col-md-2 espaciado">
          <a href="#">
            <div class="card rising border">
              <img class="card-img-top" src="{{asset('images/lineas/linea-lacteos.jpg')}}" alt="Card image cap">
              <div class="card-body pt-1 px-1">
                <p class="text-muted text-right smaller-2"><strong class="text-muted">SKU:</strong>00005644545</p>
                <h5 class="card-title font-weight-bold mb-0 text-blue">Leche Descremada</h5>
                <h6 class="text-black mb-0 smaller-3">Descripcion del producto</h6>
                <p class="card-text smaller">(100 Disponibles)</p>
                <a href="#" class="smaller">Categoria</a>
                <p class="smaller">IVA incluido</p>
                <div class="card-pricing text-center align-bottom">
                  <h4 class="font-weight-bold mb-0 mt-3">20,00 $</h4>
                  <p class="smaller">Caja de 20 unidades</p>
                  <a href="#" class="btn btn-primary px-3 py-1">Agregar</a>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-6 col-md-2 espaciado">
          <a href="#">
            <div class="card rising border">
              <img class="card-img-top" src="{{asset('images/lineas/linea-enlatados.jpg')}}" alt="Card image cap">
              <div class="card-body pt-1 px-1">
                <p class="text-muted text-right smaller-2"><strong class="text-muted">SKU:</strong>00005644545</p>
                <h5 class="card-title font-weight-bold mb-0 text-blue">Titulo del producto</h5>
                <h6 class="text-black mb-0 smaller-3">Descripcion del producto</h6>
                <p class="card-text smaller">(100 Disponibles)</p>
                <a href="#" class="smaller">Categoria</a>
                <p class="smaller">IVA incluido</p>
                <div class="card-pricing text-center align-bottom">
                  <h4 class="font-weight-bold mb-0 mt-3">20,00 $</h4>
                  <p class="smaller">Caja de 20 unidades</p>
                  <a href="#" class="btn btn-primary px-3 py-1">Agregar</a>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-6 col-md-2 espaciado">
          <a href="#">
            <div class="card rising border">
              <img class="card-img-top" src="{{asset('images/lineas/linea-viveres.jpg')}}" alt="Card image cap">
              <div class="card-body pt-1 px-1">
                <p class="text-muted text-right smaller-2"><strong class="text-muted">SKU:</strong>00005644545</p>
                <h5 class="card-title font-weight-bold mb-0 text-blue">Titulo del producto</h5>
                <h6 class="text-black mb-0 smaller-3">Descripcion del producto</h6>
                <p class="card-text smaller">(100 Disponibles)</p>
                <a href="#" class="smaller">Categoria</a>
                <p class="smaller">IVA incluido</p>
                <div class="card-pricing text-center align-bottom">
                  <h4 class="font-weight-bold mb-0 mt-3">20,00 $</h4>
                  <p class="smaller">Caja de 20 unidades</p>
                  <a href="#" class="btn btn-primary px-3 py-1">Agregar</a>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>

    

   </section>
  <!-- / cover -->
 
 
    
<section class="pb-2 bg-blue text-white">
    <div class="container">
      <div class="row justify-content-center">
        
        <div class="col-md-10 text-center">
          <h1>Solicita nuestro <b>Catálogo de productos</b></h1>
          <a href="https://api.whatsapp.com/send?phone=584244010776&text=Hola,%20Estoy%20interesado%20en%20tener%20el%20catalogo%20de%20sus%20productos.%20Gracias%20" class="btn btn-lg btn-primary btn-rounded mt-2 py-2 px-7">Solicitar catalogo</a>
        </div>
       
      </div>
    </div>
  </section>

@endsection