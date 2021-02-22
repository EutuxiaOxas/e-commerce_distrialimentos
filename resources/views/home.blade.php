@extends('layouts.main')

@section('title')
    Inicio - Distrialimentos del centro
@endsection


@section('content')
    {{-- header principal --}}
    @include('common.header.nav_header_mobile')
    {{-- carrusel Principal --}}
    @include('home.carrusel-principal')
      {{-- carrusel de promociones --}}
    @include('home.carrusel-promociones')
    
  <style>
  .center-elements{
  width: -webkit-fill-available;
  }
/* -------------------------Inicio CSS footer----------------------------------- */
  .social {
    padding: 15px 10px;
  }

  .footer__social-wrapper {
    display:flex;
    flex-direction:column;
    justify-content: center;
  }
  .footer__redSocial {
    display: flex;
    justify-content: center;
    padding-bottom: 5px;
    padding-left: 10px;
  }

  .footer__redSocial img {
    height:30px;
    width:30px;
  }
  .footer__contactPhone {
    border: 1px solid white;
    width: 110%;
  }

  .footer__contactPhone a{
    color: white;
    width: 100%;
  }

  .footer__main {
    background: #02528A;
  }
  .footer__container {
    display: flex;
    justify-content: space-around;
    align-items: center;
  }


@media(min-width:769px){

  .footer__links-wrapper {
    text-align: center;
    display: block;
    padding-top:40px;
  }

  .footer__links {
    list-style:none;
  }

  .footer__links a {
    color: white;
    letter-spacing:0.1em;
  }

  .oxas {
    position:absolute;
    right: 20px;
  }

  .footer__container {
    height: 35vh;
    padding:1rem;
  }

  .footer__social-wrapper {
    padding-top:40px;
  }

  .footer__redSocial {
    padding-left: 0;
  }

  .footer__logoInfo {
    padding-top:10px;
    width: 45%;
  }

  .footer__logoInfo p {
    margin: auto;
    width: 55%;
  }

  .footer__desktopRight {
    display:flex;
    justify-content:center;
    color:white;
    padding-bottom: 10px;
  }
  .footer__moreInfo{
    display: none;
  }
  .footer__movilRight {
    display:none;
  }
  
} 
  @media(max-width:768px){

  .footer__logoInfo{
    padding: 15px 40px 0;
  }
  .footer__container {
    justify-content: center;
    flex-direction:column;
    height: 55vh;
    padding:0.1rem;
  }
  .footer__links-wrapper {
    display:none
  }
  
  .footer__movilRight {
    display:flex;
    flex-direction:column;
    color:white;
    text-align: center;
  }
  .oxas {
    color:white;
    padding-top:1rem;
    padding-bottom:5px;
  }
  .footer__moreInfo {
    font-weight: bold;
    color:white;
    text-align: center;
    font-size: 1rem;
    padding: 3px 0 8px;
  }
  .footer__desktopRight {
    display: none;
  }

}
/* -------------------------Fin CSS footer----------------------------------- */
  .home__text-container {
      color:#02528A;
      font-weight: bold;
    }
  .home__textImg {   
    font-size: 2.1rem;
  }
  .home__textImg2 {
    font-size: 1.25rem;
  }
  .home_img {
    position: absolute;
    right: calc(100% - 36vw);
  }

  </style>

  {{-- Seccion de productos destacados --}}
  @include('home.seccion-productos-destacados')
  {{-- Seccion de categorias --}}
  @include('home.seccion-categorias')




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
    <div class="container p-5">
      <div class="row text-center">
        <div class="col-12 text-center">
          <h6 class="text-primary">Eres Nuevo, ¡Registrate!</h6>
          <p class="small text-muted pb-2">Haz click en el boton para registrarte</p>
        </div>
          <div class="col-10 offset-1">
            <a href="/register" class="btn btn btn-primary btn-block py-2">Registrarme</a>
          </div>
          <div class="col-12 p-2">
            <p class="small text-muted">Ya tengo una cuenta, <a href="/login">Iniciar sesión</a></p>
          </div>
      </div>
    </div>
  </section>

  {{-- Final version Desktop --}}

  <section class="d-none d-md-block">
    <div class="container">
        <div class="row">
          <div class="col-6 d-flex align-items-center justify-content-center flex-column py-5 my-5">
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
                <p class="small text-muted font-weight-bold">Ya tengo una cuenta, <a class="text-secondary font-weight-bold" href="/login">Iniciar sesión</a></p>
              </div>
            </div>
          
            
          </div>
          <div class="col-6 text-center pt-5 mt-5">
            <div class="home__text-container text-right">
              <p class="home__textImg">¿Y tu ya tienes tu cuenta?</p>
              <p class="home__textImg2">Te estamos esperando...</p>
            </div>
            <figure>
              <img class="home_img" src="{{asset('images/imgs/registro.svg')}}" alt="">
            </figure>
          </div>
        </div>
    </div>
  </section>


 <!----------------------  Footer  ------------------>

<footer class="footer__main">
  <div class="container-fluid footer__container">
    <div class="footer__links-wrapper">
      <ul class="footer__links">
        <li><a href="#">Soy nuevo</a></li>
        <li><a href="#">Politicas de privacidad</a></li>
        <li><a href="#">Terminos y condiciones</a></li>
        <li><a href="#">Politicas de envíos</a></li>
        <li><a href="#">Ayuda</a></li>
      </ul>      
    </div>
    <div class="footer__logoInfo">
      <figure class="text-center m-0 pb-3">
        <img class="" src="{{asset('images/footer/logo2.svg')}}" alt="Logo">
      </figure>
      <p class="text-white text-center">Somos una empresa con más de 6 años distribuyendo productos de consumo masivo para la zona Centro-occidente de Venezuela</p>
      <p class="footer__moreInfo"><a class="text-white" href="#">Más información</a></p>
    </div>
    <div class="footer__social-wrapper">
      <div class="footer__redSocial">
        <div class="social">
          <img src="{{asset('images/footer/facebook.svg')}}" alt="Logo">
        </div>
        <div class="social">
          <img src="{{asset('images/footer/instagram.svg')}}" alt="Logo">
        </div>
        <div class="social">
          <img src="{{asset('images/footer/twitter.svg')}}" alt="Logo">
        </div>
      </div>
        <div class="footer__contactPhone">
          <a href="#" class="btn border-secondary">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
            </svg>
            +58 424 401 0776
          </a>
        </div>
      
    </div>
  </div>
  <div class="footer__movilRight">
    <p>
      <span class="font-weight-bold">Distrialimentos del Centro C. A.</span> <br>Todos los decrechos reservados. 2021
    </p>
    <p class="oxas">Creado por Oxas tech</p>
  </div>
  <div class="footer__desktopRight">
    <p>
      <span class="font-weight-bold">Distrialimentos del Centro C. A.</span> - Todos los decrechos reservados. 2021
    </p>
    <p class="oxas">Creado por Oxas tech</p>
  </div>

  


</footer>




@endsection