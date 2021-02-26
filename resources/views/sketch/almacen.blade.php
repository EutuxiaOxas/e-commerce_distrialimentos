@extends('layouts.main')

@section('title')
    Almacén
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

@php
// importante para el color de las letras del header
$color_header='dark';
@endphp

@section('content')
    {{-- header principal --}}
    @include('common.header.nav_header_mobile')
 
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
    
    .almacen__textProduct {
      background: #FF661B;
      color:white;
      text-align: center;
      font-size:80%;
    }
    .almacen__textCard {
      position: absolute;
      width: 100%;
      bottom: 0px;
    }
    .almacen__cardImg {
      position:relative;
    }
    @media (max-width:560px) {
      .almacen__textProduct {
        font-size:60%;
      }
    }

  </style>


   <!-- Almacen-->

      <!----- Banner de almacen------>
      <section>
        <div class="container-fluid p-0">
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('images/portada/portada2.jpg')}}" alt="First slide">
              </div>
              <div class="carousel-item">
                
              </div>
            </div>
          </div>
        </div>
      </section>
      <!----- FIN Banner de almacen------>

   <section>
    <div class="container-fluid pt-5">
      <div class="row my-1 px-2 py-0">
        <div class="col mb-2">
          <h3 class="mb-0 font-weight-bold text-primary">Pastas, harinas y azucares</h3>
          <h5 class="font-weight-bold text-muted">Las mejores marcas nacionales e importadas</h5>
        </div>
      </div>
      
    <div class="row mb-3 px-2">
      @foreach($productos as $producto)
        <div class="col-6 col-md-2 espaciado d-flex">
            <div class="card rising border">
              <a class="almacen__cardImg" href="{{route('producto.show', $producto->slug)}}">
                <img class="card-img-top" src="{{asset('storage/'.$producto->image)}}" alt="Card image cap">
                <div class="almacen__textCard">
                  <p class="almacen__textProduct">Disponible Al gran Mayor 18.00 $</p>
                </div>
                <div class="almacen__textCard">
                  <p class="almacen__textProduct almacen__productAdded">Más de 20 - 18.00 $ Al gran Mayor</p>
                </div>
              </a>
             <!-- card-body-->
              <div class="card-body pt-1 px-1 flex-fill">
                <div class="wrapper flex-wrap h-100 justify-content-center p-2">
                  <div class="row mb-0">
                      <div class="col-6 pb-1 d-flex justify-content-between align-items-center">
                        <span class="inCart-icon almacen__productAdded" id="{{$producto->id}}">
                          <div class="productDetail__componenteCamion productDetail__componenteCamion-desktop">
                            <img src="{{asset('images/imgs/check.svg')}}" alt="Check-Nike">
                            <p>En camión</p>
                          </div>
                        </span>
                      </div>
                      <div class="col-12">
                        <p class="text-muted text-right smaller-2"><strong class="text-muted">SKU:</strong>{{$producto->sku}}</p>
                      </div>
                      <div class="col-12">
                        <h6 class="card-title font-weight-bold mb-0 text-secondary pb-1">{{$producto->title}}</h6>
                      </div>
                      <div class="col-12">
                        <h6 class="text-black mb-0 smaller-3 pb-1">{{$producto->description}}</h6>
                      </div>
                      <div class="col-12">
                        <p class="card-text smaller">({{$producto->available_stock}}) Disponibles</p>
                      </div>
                      <div class="col-12">
                        <a href="{{route('product.brand.show', $producto->brand->brand)}}" class="almacen__marcaText smaller">Marca: <span>{{ucfirst(strtolower($producto->brand->brand))}}</span></a>
                        <a href="{{route('product.category.show', $producto->category->slug)}}" class="almacen__categoriaText smaller">Categoria: <span>{{ucfirst(strtolower($producto->category->title))}}</span></a>
                      </div>
                      <div class="col-12">
                        <p class="smaller">{{$producto->iva->msg}}</p>
                      </div>
                  </div>
                  <div class="card-pricing text-center align-self-end">
                    <h4 class="font-weight-bold mb-0 mt-3">
                      {{$producto->getPrice(session('currency'), $producto->wholesale_price)}} 
                      {{session('currency') == 'USD' ? '$' : 'Bs'}}
                    </h4>
                    <p class="smaller">{{$producto->packaging->packaging}} de {{$producto->units_packaging}} unidades</p>
                    {{-- producto agregado --}}
                    <div class="almancen__agregarProducto pt-2">
                        <div class="almacen__productoAgregado">
                          <p class="almancen__agregarProducto-text">Selecciona una cantidad </p>
                          @php $disponible = $producto->available_stock; @endphp
                          <select id="{{$producto->id}}" class="form-control to_server productSelectStock">
                            <option value="0">0</option>
                            @for($i = 1; $i <= $disponible; $i++)
                              <option value="{{$i}}">{{$i}}</option>
                            @endfor
                          </select>
                        </div>
                        <button class="almacen__agregarProducto-button agregarButtons agregarButtons-server" data-id="{{$producto->id}}">
                          Añadir al camión 
                        </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- //card-body-->
            </div>
        </div>
      @endforeach
      {{$productos->links()}}
    </div>
   </section>
  <!-- / Almacen -->
  

@endsection