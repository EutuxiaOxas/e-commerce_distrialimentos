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
  </style>


   <!-- vitrina-->
   <section>
    <div class="container">
      <div class="row my-1 py-0">
        <div class="col-6">
          <h2>Categoria</h2>
        </div>
        <div class="col-6 align-self-center text-right">
          <h5 class="text-right font-weight-bold"><a href="#">Ver más</a></h5>
        </div>
      </div>
      <div class="row">
        <div class="col-6 col-md-3">
          <a href="#">
            <div class="card rising">
              <img class="card-img-top" src="{{asset('images/lineas/linea-lacteos.jpg')}}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title font-weight-bold colorG">Producto</h5>
                <p class="card-text">(100 Disponibles)</p>
                <a href="#">Viveres</a>
                <p>IVA incluido</p>
                <div class="card-pricing text-center">
                  <p class="lead">5.77$</p>
                  <a href="#" class="btn btn-primary">Agregar</a>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-6 col-md-3">
          <a href="#">
            <div class="card rising">
              <img class="card-img-top" src="{{asset('images/lineas/linea-enlatados.jpg')}}" alt="Card image cap">
              <div class="card-body">
              <h5 class="card-title font-weight-bold colorG">Producto</h5>
                <p class="card-text">(100 Disponibles)</p>
                <a href="#">Viveres</a>
                <p>IVA incluido</p>
                <div class="card-pricing text-center">
                  <p class="lead">5.77$</p>
                  <a href="#" class="btn btn-primary">Agregar</a>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-6 col-md-3">
          <a href="#">
            <div class="card rising">
              <img class="card-img-top" src="{{asset('images/lineas/linea-viveres.jpg')}}" alt="Card image cap">
              <div class="card-body">
              <h5 class="card-title font-weight-bold colorG">Producto</h5>
                <p class="card-text">(100 Disponibles)</p>
                <a href="#">Viveres</a>
                <p>IVA incluido</p>
                <div class="card-pricing text-center">
                  <p class="lead">5.77$</p>
                  <a href="#" class="btn btn-primary">Agregar</a>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-6 col-md-3">
          <a href="#">
            <div class="card rising">
              <img class="card-img-top" src="{{asset('images/lineas/linea-pasta.jpg')}}" alt="Card image cap">
              <div class="card-body">
              <h5 class="card-title font-weight-bold colorG">Producto</h5>
                <p class="card-text">(100 Disponibles)</p>
                <a href="#">Viveres</a>
                <p>IVA incluido</p>
                <div class="card-pricing text-center">
                  <p class="lead">5.77$</p>
                  <a href="#" class="btn btn-primary">Agregar</a>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>

      <div class="row my-1 py-0">
        <div class="col-6">
          <h2>Categoria</h2>
        </div>
        <div class="col-6 align-self-center text-right">
          <h5 class="text-right font-weight-bold"><a href="#">Ver más</a></h5>
        </div>
      </div>
      <div class="row">
        <div class="col-6 col-md-3">
          <a href="#">
            <div class="card rising">
              <img class="card-img-top" src="{{asset('images/lineas/linea-lacteos.jpg')}}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title font-weight-bold colorG">Producto</h5>
                <p class="card-text">(100 Disponibles)</p>
                <a href="#">Viveres</a>
                <p>IVA incluido</p>
                <div class="card-pricing text-center">
                  <p class="lead">5.77$</p>
                  <a href="#" class="btn btn-primary">Agregar</a>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-6 col-md-3">
          <a href="#">
            <div class="card rising">
              <img class="card-img-top" src="{{asset('images/lineas/linea-enlatados.jpg')}}" alt="Card image cap">
              <div class="card-body">
              <h5 class="card-title font-weight-bold colorG">Producto</h5>
                <p class="card-text">(100 Disponibles)</p>
                <a href="#">Viveres</a>
                <p>IVA incluido</p>
                <div class="card-pricing text-center">
                  <p class="lead">5.77$</p>
                  <a href="#" class="btn btn-primary">Agregar</a>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-6 col-md-3">
          <a href="#">
            <div class="card rising">
              <img class="card-img-top" src="{{asset('images/lineas/linea-viveres.jpg')}}" alt="Card image cap">
              <div class="card-body">
              <h5 class="card-title font-weight-bold colorG">Producto</h5>
                <p class="card-text">(100 Disponibles)</p>
                <a href="#">Viveres</a>
                <p>IVA incluido</p>
                <div class="card-pricing text-center">
                  <p class="lead">5.77$</p>
                  <a href="#" class="btn btn-primary">Agregar</a>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-6 col-md-3">
          <a href="#">
            <div class="card rising">
              <img class="card-img-top" src="{{asset('images/lineas/linea-pasta.jpg')}}" alt="Card image cap">
              <div class="card-body">
              <h5 class="card-title font-weight-bold colorG">Producto</h5>
                <p class="card-text">(100 Disponibles)</p>
                <a href="#">Viveres</a>
                <p>IVA incluido</p>
                <div class="card-pricing text-center">
                  <p class="lead">5.77$</p>
                  <a href="#" class="btn btn-primary">Agregar</a>
                </div>
              </div>
            </div>
          </a>
        </div>
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