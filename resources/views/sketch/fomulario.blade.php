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
        <div class="swiper-slide vh-100 swiper-slide-prev" >
          <div class="image image-overlay" style="background-image:url({{asset('images/portada/portada2.jpg')}})"></div>
          <div class="caption">
            <div class="container">
              <div class="row justify-content-between vh-100">
                <div class="col-md-8 align-self-center" data-swiper-parallax-y="-250%" >
                  <h1 class="display-5 font-weight-bold text-uppercase">Distrialimentos del centro</h1>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide vh-100 swiper-slide-active" >
          <div class="image image-overlay" style="background-image:url({{asset('images/portada/portada3.jpg')}})"></div>
          <div class="caption">
            <div class="container">
              <div class="row vh-100">
                <div class="col-lg-6 align-self-center" data-swiper-parallax-y="-250%">
                  <h1 class="display-3">Los <b>Estándares</b> más altos de calidad.</h1>
                </div>
              </div>
            </div>
          </div>
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