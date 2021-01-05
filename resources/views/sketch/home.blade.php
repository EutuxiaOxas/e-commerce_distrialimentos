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
<style>
.categoria {
  border: 1px solid rgba(0, 0, 0, .24)
}
</style>
<div class="swiper-container swiper-container-carousel">
  <div class="swiper-wrapper">
    <div class="swiper-slide bg-dark">
        <div class="image image-gradient-horizontal-light" style="background-image:url({{asset('images/portada/portada3.jpg')}})">
        </div>
        
        <div class="caption" data-swiper-parallax-y="-100%">
          <div class="container">
            <div class="row align-items-end vh-15">
            </div>
          </div>
    </div>
  </div>
</div>
  
  {{-- cover --}}
  


<!-- productos destacados -->
  <section class="pt-6">
    <div class="container">
     <h2>Productos destacados</h2>
      <div class="owl-carousel" data-items="[5,1]" data-loop="true" data-autoheight="true" data-margin="10" data-dots="true" data-nav="true" data-autoplay="true">
        <figure class="photo">
          <img src="{{asset('images/cta/compras.jpg')}}" alt="Image">
        </figure>
        <figure class="photo">
          <img src="{{asset('images/cta/productos.jpg')}}" alt="Image">
        </figure>
        <figure class="photo">
          <img src="{{asset('images/cta/envios.jpg')}}" alt="Image">
        </figure>
        <figure class="photo">
          <img src="{{asset('images/cta/ubicacion.jpg')}}" alt="Image">
        </figure>
        <figure class="photo">
          <img src="{{asset('images/cta/envios.jpg')}}" alt="Image">
        </figure>
        <figure class="photo">
          <img src="{{asset('images/cta/productos.jpg')}}" alt="Image">
        </figure>
      </div>
    </div>
  </section>

  <!-- categorias -->
  <section>
  <div class="container">
    <h2>Categoria de productos</h2>
      <div class="row mb-0 py-0">
        <div class="col-12 col-md-3">
          <a href="#">
            <div class="boxed rising align-self-center text-center categoria">
               <i class="center-block">
                  <svg xmlns="http://www.w3.org/2000/svg" max-width="65" height="65" fill="currentColor" class="bi bi-shop mt-2" viewBox="0 0 16 16">
                    <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z"/>
                  </svg>
                </i>
                <h4 class="fs-20 font-weight-bold text-blue my-1 pb-2 text-center">Viveres</h4>
            </div>
          </a>
        </div>
        <div class="col-12 col-md-3">
          <a href="#">
            <div class="boxed rising align-self-center text-center categoria">
              <i class="center-block">
                <svg xmlns="http://www.w3.org/2000/svg" max-width="65" height="65" fill="currentColor" class="bi bi-shop mt-2" viewBox="0 0 16 16">
                <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z"/>
                </svg>
              </i>
              <h4 class="fs-20 font-weight-bold text-blue my-1 pb-2 text-center">Viveres</h4>
            </div>
          </a>
        </div>
        <div class="col-12 col-md-3">
          <a href="#">
          <div class="boxed rising align-self-center text-center categoria">
              <i class="center-block">
              <svg xmlns="http://www.w3.org/2000/svg" max-width="65" height="65" fill="currentColor" class="bi bi-shop mt-2" viewBox="0 0 16 16">
                  <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z"/>
                </svg>
              </i>
              <h4 class="fs-20 font-weight-bold text-blue my-1 pb-2 text-center">Viveres</h4>
          </div>
          </a>
        </div>
        <div class="col-12 mb-3 col-md-3 mb-0">
          <a href="#">
            <div class="boxed rising align-self-center text-center categoria">
              <i>
                <svg xmlns="http://www.w3.org/2000/svg" max-width="65" height="65" fill="currentColor" class="bi bi-shop mt-2" viewBox="0 0 16 16">
                <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z"/>
                </svg>
              </i>
              <h4 class="fs-20 font-weight-bold text-blue my-1 pb-2 text-center">Viveres</h4>
            </div>
          </a>
        </div>           
      </div>
    <div class="row mt-0 py-0">
    <div class="col-12 col-md-3">
          <a href="#">
            <div class="boxed rising align-self-center text-center categoria">
               <i class="center-block">
                  <svg xmlns="http://www.w3.org/2000/svg" max-width="65" height="65" fill="currentColor" class="bi bi-shop mt-2" viewBox="0 0 16 16">
                    <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z"/>
                  </svg>
                </i>
                <h4 class="fs-20 font-weight-bold text-blue my-1 pb-2 text-center">Viveres</h4>
            </div>
          </a>
        </div>
        <div class="col-12 col-md-3">
          <a href="#">
            <div class="boxed rising align-self-center text-center categoria">
              <i class="center-block">
                <svg xmlns="http://www.w3.org/2000/svg" max-width="65" height="65" fill="currentColor" class="bi bi-shop mt-2" viewBox="0 0 16 16">
                <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z"/>
                </svg>
              </i>
              <h4 class="fs-20 font-weight-bold text-blue my-1 pb-2 text-center">Viveres</h4>
            </div>
          </a>
        </div>
        <div class="col-12 col-md-3">
          <a href="#">
          <div class="boxed rising align-self-center text-center categoria">
              <i class="center-block">
              <svg xmlns="http://www.w3.org/2000/svg" max-width="65" height="65" fill="currentColor" class="bi bi-shop mt-2" viewBox="0 0 16 16">
                  <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z"/>
                </svg>
              </i>
              <h4 class="fs-20 font-weight-bold text-blue my-1 pb-2 text-center">Viveres</h4>
          </div>
          </a>
        </div>
        <div class="col-12 mb-3 col-md-3 mb-0">
          <a href="#">
            <div class="boxed rising align-self-center text-center categoria">
              <i>
                <svg xmlns="http://www.w3.org/2000/svg" width="65" height="65" fill="currentColor" class="bi bi-basket mt-2" viewBox="0 0 16 16">
                  <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z"/>
                </svg>
              </i>
              <h4 class="fs-20 font-weight-bold text-blue my-1 pb-2 text-center">Viveres</h4>
            </div>
          </a>
        </div>            
    </div>
  </div>
  </div>

  </section>
  
 




   <!-- cover -->
   <section class="pb-2">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10 text-center p-5">
          <h1 data-swiper-parallax="-100%" class="display-3"><b>Distribución</b> de productos de consumo masivo.</h1>
          <a href="/productos" class="btn btn-blue btn-rounded px-5">Nuestros Productos</a>
        </div>
      </div>
      <div class="row" data-aos="fade-up" data-aos-delay="250">
        <div class="col">
          <div class="owl-carousel visible gallery align-bottom" data-items="[3,2,2]" data-margin="20" data-loop="true" data-autoplay="true">
            @for ($i = 2 ; $i < 7; $i++)
            <figure class="photo equal">
              <a href="{{asset('images/promo/promo'.$i.'.jpg')}}" 
                style="background-image: url({{asset('images/promo/promo'.$i.'.jpg')}});">
              </a>
            </figure>
           @endfor
           @for ($i = 8 ; $i < 9; $i++)
            <figure class="photo equal" >
              <a href="{{asset('images/promo/promo'.$i.'.jpg')}}" 
                style="background-image: url({{asset('images/promo/promo'.$i.'.jpg')}});">
              </a>
            </figure>
           @endfor
           @for ($i = 10 ; $i < 11; $i++)
            <figure class="photo equal" >
              <a href="{{asset('images/promo/promo'.$i.'.jpg')}}" 
                style="background-image: url({{asset('images/promo/promo'.$i.'.jpg')}});">
              </a>
            </figure>
           @endfor
           
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / cover -->
 <!-- presentation -->
 <section class="section-lg">
   <div class="container">
     <div class="row my-10">
       <div class="col-lg-6">
         <div class="row">
           <div class="col">
            <h2>Los <b>Beneficios</b> <br> para tu establecimiento.</h2>
           </div>
         </div>
         <div class="row gutter-3">

          <div class="col-md-6" data-aos="fade-up">
            <div class="media">
              <i class="icon-check-circle2 fs-30 text-primary mr-2"></i>
              <div class="media-body">
                <h5 class="mt-0 text-uppercase font-weight-bold fs-14 letter-spacing">Productos</h5>
                <p>Tenemos como aliados a las principales marcas más reconocidas del país.</p>
              </div>
            </div>
          </div>

           <div class="col-md-6" data-aos="fade-up">
             <div class="media">
               <i class="icon-laptop fs-30 text-primary mr-2"></i>
               <div class="media-body">
                 <h5 class="mt-0 text-uppercase font-weight-bold fs-14 letter-spacing">Canales</h5>
                 <p>Toma de los pedidos vía online, whatsapp Business, o presencial con nuestros vendedores.</p>
                </div>
             </div>
           </div>
           <div class="col-md-6" data-aos="fade-up">
             <div class="media">
               <i class="icon-truck fs-30 text-primary mr-2"></i>
               <div class="media-body">
                 <h5 class="mt-0 text-uppercase font-weight-bold fs-14 letter-spacing">Despacho</h5>
                 <p>Despacho garantizado a la puerta de su establecimiento en un plazo entre 48 y 72 horas.</p>
               </div>
             </div>
            </div>
            <div class="col-md-6" data-aos="fade-up">
              <div class="media">
                <i class="icon-user2 fs-30 text-primary mr-2"></i>
                <div class="media-body">
                  <h5 class="mt-0 text-uppercase font-weight-bold fs-14 letter-spacing">Vendedores</h5>
                  <p>Atención de nuestros vendedores en sus establecimientos si así lo desean.</p>
                </div>
              </div>
            </div>
           
         </div>
       </div>
       <div class="col-12 col-lg-6 presentation presentation-responsive d-none d-md-block">
         <img class="left-0 vertical-align" src="{{asset('images/cta/camion.jpg')}}" alt="Image">
       </div>
     </div>
   </div>
 </section>
 <!-- / presentation -->

 <!-- faq -->
 <section class="bg-light separator-top">
   <div class="container">
     <div class="row justify-content-between align-items-center">
       <div class="col-md-6 pr-md-4">
        
         <div class="accordion-group accordion-group-highlight" data-accordion-group>
           <div class="accordion open" data-accordion data-aos="fade-up">
             <div class="accordion-control" data-control>
               <h5>QUIENES SOMOS</h5>
             </div>
             <div class="accordion-content" data-content>
               <div class="accordion-content-wrapper">
                  <p>Somos una empresa distribuidora de consumo masivo, fundada bajo los cimientos de la experiencia en el sector, producto de más de seis (6) años de trabajo con otras empresas especializadas en la distribución e importación de productos en el área del Food Service, para cadenas de Supermercados, hipermercados, mini-mercados, panaderías, carnicerías, bodegones, restaurantes y otras empresas de la industria. </p> 
               </div>
             </div>
           </div>
           <div class="accordion" data-accordion data-aos="fade-up">
             <div class="accordion-control" data-control>
               <h5>MISIÓN</h5>
             </div>
             <div class="accordion-content" data-content>
               <div class="accordion-content-wrapper">
                 <p>Contribuir y aportar al mercado venezolano variedad y calidad de productos de alto valor, fortaleciendo nuestro estilo de negocio, distribución y venta apoyándonos con marcas de reconocimiento nacional e internacional en el área de consumo masivo. </p>
               </div>
             </div>
           </div>
           <div class="accordion" data-accordion data-aos="fade-up">
             <div class="accordion-control" data-control>
               <h5>VISIÓN</h5>
             </div>
             <div class="accordion-content" data-content>
               <div class="accordion-content-wrapper">
                 <p>Convertirnos en una de las principales compañías de distribución e importación de consumo masivo de alta calidad, para así obtener presencia en todo el territorio nacional, fortaleciendo lazos con nuestros proveedores a nivel nacional e internacional, con nuevas marcas en mercado nacional. </p>
               </div>
             </div>
           </div>
           <div class="accordion" data-accordion data-aos="fade-up">
            <div class="accordion-control" data-control>
              <h5>LINEAS DE PRODUCTOS</h5>
            </div>
            <div class="accordion-content" data-content>
              <div class="accordion-content-wrapper">
                <p>Nos dedicamos a la distribución de alimentos para el consumo humano y del hogar tales como: Víveres, Lácteos, Avena y cereales, Pastas, harinas y azucares, Granos, Enlatados, Bebidas, Condimentos, Galletas, tortas y ponqués, Especies, Aceites y mantequillas, Snack, Higiene personal, Cuidado y mantenimientos del hogar.</p>
              </div>
            </div>
          </div>
          <div class="accordion" data-accordion data-aos="fade-up">
            <div class="accordion-control" data-control>
              <h5>DISTRIBUCIÓN</h5>
            </div>
            <div class="accordion-content" data-content>
              <div class="accordion-content-wrapper">
                <p>Actualmente estamos en la zona Centro – Occidente del país, distribuyendo en los estados Carabobo, Aragua, Falcón y próximamente en otros estados del territorio nacional, contamos con un equipo de vendedores capacitados para atender las necesidades de nuestros clientes.</p>
              </div>
            </div>
          </div>


         </div>
       </div>
       <div class="col-md-6">
         <img src="{{asset('images/portada/logo-full.png')}}" alt="Image">
         {{-- <h2><b>Distrialimentos del centro</b></h2> --}}
         <h3  class="mb-4">Trabajamos para tu comodidad y la de tu familia.</h3>
       </div>
     </div>
   </div>
 </section>
 <!-- / faq -->

<section class="bg-light pt-0">
   <div class="container">
     <div class="row align-items-center">
       <div class="col-md-6 pr-md-5 d-none d-md-block">
         <img src="{{asset('images/cta/clientes.png')}}" alt="Image">
       </div>
     
       <div class="col-md-6 pr-md-4">
        <h2><b>Nuestro proposito</b></h2>
        <h5  class="mb-4">Llegar a cada rincón de Venezuela, con los estándares más altos de calidad en la comercialización y distribución de productos consumo masivo.</h5>
       </div>
    </div>
  </div>
</section>

 <!-- blog -->
 <section class="bg-light">
   <div class="container">
     <div class="row justify-content-center">
       <div class="col-lg-6 text-center">
         <h2>Algunas de nuestras <b>Lineas de productos.</b></h2>
       </div>
     </div>
     <div class="row mb-1">
       <div class="col">
         <ul class="masonry row gutter-1">
           <li class="col-md-4" data-aos="fade-up">
             <article class="tile">
               <div class="tile-image" style="background-image: url({{asset('images/lineas/linea-enlatados.jpg')}})"></div>
               <a href="" class="tile-content">
                 <div class="tile-footer">
                   <span class="eyebrow mb-1">Enlatados</span>
                   <h3>Completa recetas con nuestros productos enlatados.</h3>
                 </div>
               </a>
             </article>
           </li>
           <li class="col-md-4" data-aos="fade-up">
             <article class="tile tile-long">
               <div class="tile-image" style="background-image: url({{asset('images/lineas/linea-snacks.jpg')}})"></div>
               <a href="" class="tile-content">
                 <div class="tile-footer">
                   <span class="eyebrow mb-1">Snack</span>
                   <h3>Ideal para compartir con familiares y amigos.</h3>
                 </div>
               </a>
             </article>
           </li>
           <li class="col-md-4" data-aos="fade-up">
             <article class="tile">
               <div class="tile-image" style="background-image: url({{asset('images/lineas/linea-pasta.jpg')}})"></div>
               <a href="" class="tile-content">
                 <div class="tile-footer">
                   <span class="eyebrow mb-1">Pastas, harinas y azucares</span>
                   <h3>Los mejores pasta y harinas para tus almuerzos.</h3>
                 </div>
               </a>
             </article>
           </li>
           <li class="col-md-4" data-aos="fade-up">
             <article class="tile tile-long">
               <div class="tile-image" style="background-image: url({{asset('images/lineas/linea-lacteos.jpg')}})"></div>
               <a href="" class="tile-content">
                 <div class="tile-footer">
                   <span class="eyebrow mb-1">Lacteos</span>
                   <h3>Bebidas lácteas para toda la familia.</h3>
                 </div>
               </a>
             </article>
           </li>
           <li class="col-md-4" data-aos="fade-up">
             <article class="tile tile-long">
               <div class="tile-image" style="background-image: url({{asset('images/lineas/linea-galletas.jpg')}})"></div>
               <a href="" class="tile-content">
                 <div class="tile-footer">
                   <span class="eyebrow mb-1">Galletas, tortas y ponqués</span>
                   <h3>Para consentir a los más pequeños y a la familia.</h3>
                 </div>
               </a>
             </article>
           </li>
           <li class="col-md-4" data-aos="fade-up">
             <article class="tile">
               <div class="tile-image" style="background-image: url({{asset('images/lineas/linea-viveres.jpg')}})"></div>
               <a href="" class="tile-content">
                 <div class="tile-footer">
                   <span class="eyebrow mb-1">Viveres</span>
                   <h3>Para Refrescar y compartir.</h3>
                 </div>
               </a>
             </article>
           </li>
         </ul>
         
       </div>
     </div>
     <div class="row" data-aos="fade-up">
       <div class="col text-center">
         <a href="/productos" class="btn btn-block btn-lg btn-blue">Ver los Productos</a>
       </div>
     </div>
   </div>
 </section>
 <!-- / blog -->
 
    
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