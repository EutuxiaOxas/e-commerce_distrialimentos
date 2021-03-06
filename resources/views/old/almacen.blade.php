@extends('layouts.main')

@section('title')
  Almacen
@endsection

@section('metas')
<!-- Primary Meta Tags -->
<title>Almacén de productos</title>
<meta name="title" content="Almacén de productos">
<meta name="description" content="Entra y descubre la amplia gama de productos nacionales e importados que ofrecemos para ti. Contamos con los estándares más altos de calidad en la comercialización y distribución de productos de consumo masivo.">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://metatags.io/">
<meta property="og:title" content="Almacén de productos">
<meta property="og:description" content="Entra y descubre la amplia gama de productos nacionales e importados que ofrecemos para ti. Contamos con los estándares más altos de calidad en la comercialización y distribución de productos de consumo masivo.">
<meta property="og:image" content="{{asset('images/cta/Envios.jpg')}}">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://metatags.io/">
<meta property="twitter:title" content="Almacén de productos">
<meta property="twitter:description" content="Entra y descubre la amplia gama de productos nacionales e importados que ofrecemos para ti. Contamos con los estándares más altos de calidad en la comercialización y distribución de productos de consumo masivo.">
<meta property="twitter:image" content="{{asset('images/cta/Envios.jpg')}}">
@endsection


@section('menu-perfil')
  {{-- header principal --}}
  @include('perfil.perfil_navMobile')
@endsection

@section('content')
 
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


   <!-- Almacen-->
   <section>
    <div class="container-fluid pt-5">
      <div class="row my-1 px-2 py-0">
        <div class="col mb-2">
          <h3 class="mb-0 font-weight-bold text-primary">Pastas, harinas y azucares</h3>
          <h5 class="font-weight-bold text-muted">Las mejores marcas nacionales e importadas</h5>
        </div>
      </div>
      
    <div class="row mb-3 px-2">

        <div class="col-6 col-md-2 espaciado d-flex">
            <div class="card rising border">
              <a href="#">
                <img class="card-img-top" src="{{asset('images/lineas/linea-lacteos.jpg')}}" alt="Card image cap">
              </a>
             <!-- card-body-->
              <div class="card-body pt-1 px-1 flex-fill">
                <div class="wrapper d-flex flex-wrap h-100 justify-content-center p-2">
                  <div class="row mb-0">
                      <div class="col-12 pb-1">
                        <p class="text-muted text-right smaller-2"><strong class="text-muted">SKU:</strong>00005644545</p>
                      </div>
                      <div class="col-12">
                        <h6 class="card-title font-weight-bold mb-0 text-blue pb-1">Leche Descremada</h6>
                      </div>
                      <div class="col-12">
                        <h6 class="text-black mb-0 smaller-3 pb-1">Leche descremada mi Vaca 1L</h6>
                      </div>
                      <div class="col-12">
                        <p class="card-text smaller">(100 Disponibles)</p>
                      </div>
                      <div class="col-12">
                      <a href="#" class="smaller">Categoria</a>
                      </div>
                      <div class="col-12">
                        <p class="smaller">IVA incluido</p>
                      </div>
                  </div>
                  <div class="card-pricing text-center align-self-end">
                    <h4 class="font-weight-bold mb-0 mt-3">20,00 $</h4>
                    <p class="smaller">Caja de 20 unidades</p>
                    {{-- boton de agregar  --}}
                    <div class="agregar-01">
                      <a href="#" class="btn btn-primary px-3 py-1">Agregar</a>
                    </div>
                    {{-- producto agregado --}}
                    <div class="agregado-01">
                      <div class="row">
                        <div class="col-6">
                          <a href="#" class="btn btn-primary px-3 py-1">Agregar</a>
                        </div>
                        <div class="col-6">
                          <a href="#" class="btn btn-primary px-3 py-1">Agregar</a>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
              <!-- //card-body-->
            </div>
        </div>

        <div class="col-6 col-md-2 espaciado d-flex">
            <div class="card rising border">
              <a href="#">
                <img class="card-img-top" src="{{asset('images/lineas/linea-enlatados.jpg')}}" alt="Card image cap">
              </a>
             <!-- card-body-->
              <div class="card-body pt-1 px-1 flex-fill">
                <div class="wrapper d-flex flex-wrap h-100 justify-content-center p-2">
                  <div class="row mb-0">
                      <div class="col-12 pb-1">
                        <p class="text-muted text-right smaller-2"><strong class="text-muted">SKU:</strong>00005644545</p>
                      </div>
                      <div class="col-12">
                        <h6 class="card-title font-weight-bold mb-0 text-blue pb-1">Titulo del producto</h6>
                      </div>
                      <div class="col-12">
                        <h6 class="text-black mb-0 smaller-3 p-1">Descricion del producto</h6>
                      </div>
                      <div class="col-12">
                        <p class="card-text smaller">(100 Disponibles)</p>
                      </div>
                      <div class="col-12">
                      <a href="#" class="smaller">Categoria</a>
                      </div>
                      <div class="col-12">
                        <p class="smaller">IVA incluido</p>
                      </div>
                  </div>
                  <div class="card-pricing text-center align-self-end">
                    <h4 class="font-weight-bold mb-0 mt-3">20,00 $</h4>
                    <p class="smaller">Caja de 20 unidades</p>
                    <a href="#" class="btn btn-primary px-3 py-1">Agregar</a>
                  </div>
                </div>
              </div>
              <!-- //card-body-->
            </div>
        </div>

        <div class="col-6 col-md-2 espaciado d-flex">
            <div class="card rising border">
              <a href="#">
                <img class="card-img-top" src="{{asset('images/lineas/linea-galletas.jpg')}}" alt="Card image cap">
              </a>
             <!-- card-body-->
              <div class="card-body pt-1 px-1 flex-fill">
                <div class="wrapper d-flex flex-wrap h-100 justify-content-center p-2">
                  <div class="row mb-0">
                      <div class="col-12 pb-1">
                        <p class="text-muted text-right smaller-2"><strong class="text-muted">SKU:</strong>00005644545</p>
                      </div>
                      <div class="col-12">
                        <h6 class="card-title font-weight-bold mb-0 text-blue pb-1">Titulo del producto</h6>
                      </div>
                      <div class="col-12">
                        <h6 class="text-black mb-0 smaller-3 pb-1">Descricion del producto</h6>
                      </div>
                      <div class="col-12">
                        <p class="card-text smaller">(100 Disponibles)</p>
                      </div>
                      <div class="col-12">
                      <a href="#" class="smaller">Categoria</a>
                      </div>
                      <div class="col-12">
                        <p class="smaller">IVA incluido</p>
                      </div>
                  </div>
                  <div class="card-pricing text-center align-self-end">
                    <h4 class="font-weight-bold mb-0 mt-3">20,00 $</h4>
                    <p class="smaller">Caja de 20 unidades</p>
                    <a href="#" class="btn btn-primary px-3 py-1">Agregar</a>
                  </div>
                </div>
              </div>
              <!-- //card-body-->
            </div>
        </div>

        <div class="col-6 col-md-2 espaciado d-flex">
            <div class="card rising border">
              <a href="#">
                <img class="card-img-top" src="{{asset('images/lineas/linea-pasta.jpg')}}" alt="Card image cap">
              </a>
             <!-- card-body-->
              <div class="card-body pt-1 px-1 flex-fill">
                <div class="wrapper d-flex flex-wrap h-100 justify-content-center p-2">
                  <div class="row mb-0">
                      <div class="col-12 pb-1">
                        <p class="text-muted text-right smaller-2"><strong class="text-muted">SKU:</strong>00005644545</p>
                      </div>
                      <div class="col-12">
                        <h6 class="card-title font-weight-bold mb-0 text-blue pb-1">Titulo del producto</h6>
                      </div>
                      <div class="col-12">
                        <h6 class="text-black mb-0 smaller-3 pb-1">Descricion del producto</h6>
                      </div>
                      <div class="col-12">
                        <p class="card-text smaller">(100 Disponibles)</p>
                      </div>
                      <div class="col-12">
                      <a href="#" class="smaller">Categoria</a>
                      </div>
                      <div class="col-12">
                        <p class="smaller">IVA incluido</p>
                      </div>
                  </div>
                  <div class="card-pricing text-center align-self-end">
                    <h4 class="font-weight-bold mb-0 mt-3">20,00 $</h4>
                    <p class="smaller">Caja de 20 unidades</p>
                    <a href="#" class="btn btn-primary px-3 py-1">Agregar</a>
                  </div>
                </div>
              </div>
              <!-- //card-body-->
            </div>
        </div>

        <div class="col-6 col-md-2 espaciado d-flex">
            <div class="card rising border">
              <a href="#">
                <img class="card-img-top" src="{{asset('images/lineas/linea-snacks.jpg')}}" alt="Card image cap">
              </a>
             <!-- card-body-->
              <div class="card-body pt-1 px-1 flex-fill">
                <div class="wrapper d-flex flex-wrap h-100 justify-content-center p-2">
                  <div class="row mb-0">
                      <div class="col-12 pb-1">
                        <p class="text-muted text-right smaller-2"><strong class="text-muted">SKU:</strong>00005644545</p>
                      </div>
                      <div class="col-12">
                        <h6 class="card-title font-weight-bold mb-0 text-blue pb-1">Avena</h6>
                      </div>
                      <div class="col-12">
                        <h6 class="text-black mb-0 smaller-3 pb-1">Descricion del producto</h6>
                      </div>
                      <div class="col-12">
                        <p class="card-text smaller">(100 Disponibles)</p>
                      </div>
                      <div class="col-12">
                      <a href="#" class="smaller">Categoria</a>
                      </div>
                      <div class="col-12">
                        <p class="smaller">IVA incluido</p>
                      </div>
                  </div>
                  <div class="card-pricing text-center align-self-end">
                    <h4 class="font-weight-bold mb-0 mt-3">20,00 $</h4>
                    <p class="smaller">Caja de 20 unidades</p>
                    <a href="#" class="btn btn-primary px-3 py-1">Agregar</a>
                  </div>
                </div>
              </div>
              <!-- //card-body-->
            </div>
        </div>

        <div class="col-6 col-md-2 espaciado d-flex">
            <div class="card rising border">
              <a href="#">
                <img class="card-img-top" src="{{asset('images/lineas/linea-viveres.jpg')}}" alt="Card image cap">
              </a>
             <!-- card-body-->
              <div class="card-body pt-1 px-1 flex-fill">
                <div class="wrapper d-flex flex-wrap h-100 justify-content-center p-2">
                  <div class="row mb-0">
                      <div class="col-12 pb-1">
                        <p class="text-muted text-right smaller-2"><strong class="text-muted">SKU:</strong>00005644545</p>
                      </div>
                      <div class="col-12">
                        <h6 class="card-title font-weight-bold mb-0 text-blue pb-1">Titulo del producto</h6>
                      </div>
                      <div class="col-12">
                        <h6 class="text-black mb-0 smaller-3 pb-1">Descricion del producto</h6>
                      </div>
                      <div class="col-12">
                        <p class="card-text smaller">(100 Disponibles)</p>
                      </div>
                      <div class="col-12">
                      <a href="#" class="smaller">Categoria</a>
                      </div>
                      <div class="col-12">
                        <p class="smaller">IVA incluido</p>
                      </div>
                  </div>
                  <div class="card-pricing text-center align-self-end">
                    <h4 class="font-weight-bold mb-0 mt-3">20,00 $</h4>
                    <p class="smaller">Caja de 20 unidades</p>
                    <a href="#" class="btn btn-primary px-3 py-1">Agregar</a>
                  </div>
                </div>
              </div>
              <!-- //card-body-->
            </div>
        </div>
    </div>
   </section>
  <!-- / Almacen -->


@endsection