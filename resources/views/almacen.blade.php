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
    padding: 7px 6px;
  }

  </style>


   <!-- Almacen-->
   @isset($product_categorie)
   <!----- Banner de categoria de almacen------>
   <section>
     <div class="container-fluid p-0">
       <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
         <div class="carousel-inner">
           <div class="carousel-item active">
             <img class="d-block w-100" src="{{asset('storage/'.$product_categorie->image_main)}}" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{{asset('storage/'.$product_categorie->image_main)}}" alt="First slide">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!----- FIN Banner de almacen------>
    @endisset

    @isset($product_brand)
    <!----- Banner marca de almacen------>
    <section>
      <div class="container-fluid p-0">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="{{asset('storage/'.$product_brand->banner)}}" alt="First slide">
             </div>
             <div class="carousel-item">
               <img class="d-block w-100" src="{{asset('storage/'.$product_brand->banner)}}" alt="First slide">
             </div>
           </div>
         </div>
       </div>
     </section>
     <!----- FIN Banner de almacen------>
     @endisset


   <section>
    <div class="container-fluid pt-5">
      {{-- titulo de categoria --}}
      @isset($product_categorie)
      <div class="row my-1 px-2 py-0">
        <div class="col mb-2">
          <h3 class="mb-0 font-weight-bold text-primary">
            @if ($product_categorie)
            {{$product_categorie->title}}
            @endif
        </h3>
          <h5 class="font-weight-bold text-muted">
            @if ($product_categorie)
            {{$product_categorie->description}}
            @endif
          </h5>
        </div>
      </div>
      @endisset

      {{-- titulo de marca --}}
      @isset($product_brand)
      <div class="row my-1 px-2 py-0">
        <div class="col mb-2">
          <h3 class="mb-0 font-weight-bold text-primary">
            @if ($product_brand)
            {{$product_brand->name}}
            @endif
        </h3>
          <h5 class="font-weight-bold text-muted">
            @if ($product_brand)
            {{$product_brand->description}}
            @endif
          </h5>
        </div>
      </div>
      @endisset
      {{-- Titulo de almacen --}}
      @if ((!isset( $product_brand) && !isset( $product_categorie)))
      <div class="row my-1 px-2 py-0">
        <div class="col mb-2">
          <h3 class="mb-0 font-weight-bold text-primary">
            Nuestros productos
          </h3>
          <h5 class="font-weight-bold text-muted">
            Los mejores productos nacionales e importados
          </h5>
        </div>
      </div>
      @endif

    <div class="row mb-3 px-2">
      @foreach($productos as $producto)
        <div class="col-6 col-md-2 espaciado d-flex">
            <div class="card rising border">
              <a class="almacen__cardImg" href="{{route('producto.show', $producto->slug)}}">
                <img class="card-img-top" src="{{asset('storage/'.$producto->image)}}" alt="Card image cap">
                <div class="almacen__textCard">
                  <p class="almacen__textProduct">Más de {{$producto->amount_min_big_wholesale}} {{$producto->packaging->packaging}}  - {{$producto->big_wholesale_price}}.00 $</p>
                </div>
                <div class="almacen__textCard">
                  <p class="almacen__textProduct almacen__productAdded">Más de {{$producto->big_wholesale_price}} - {{$producto->big_wholesale_price}}.00 $ Al gran Mayor</p>
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
                        <a href="{{route('product.brand.show', $producto->brand->name)}}" class="almacen__marcaText smaller">Marca: <span>{{ucfirst(strtolower($producto->brand->name))}}</span></a>
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
                          <select id="{{$producto->id}}" class="form-control {{auth()->user() ? 'to_server' : 'to_storage'}} productSelectStock">
                            <option value="0">0</option>
                            @for($i = 1; $i <= $disponible; $i++)
                              <option value="{{$i}}">{{$i}}</option>
                            @endfor
                          </select>
                        </div>
                        <button class="almacen__agregarProducto-button agregarButtons {{auth()->user() ? 'agregarButtons-server ': 'agregarButtons-storage'}}" data-id="{{$producto->id}}">
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