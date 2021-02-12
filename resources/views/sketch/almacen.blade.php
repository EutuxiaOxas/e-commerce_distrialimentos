@extends('layouts.main')

@section('title')
    <title>Almacen</title>
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
    padding-top:4px;}

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
      @foreach($productos as $producto)
        <div class="col-6 col-md-2 espaciado d-flex">
            <div class="card rising border">
              <a href="{{route('producto.show', $producto->slug)}}">
                <img class="card-img-top" src="{{asset('storage/'.$producto->image)}}" alt="Card image cap">
              </a>
             <!-- card-body-->
              <div class="card-body pt-1 px-1 flex-fill">
                <div class="wrapper d-flex flex-wrap h-100 justify-content-center p-2">
                  <div class="row mb-0">
                      <div class="col-12 pb-1 d-flex justify-content-between align-items-center">
                        <span class="inCart-icon almacen__productAdded" id="{{$producto->id}}">
                          <div class="productDetail__componenteCamion productDetail__componenteCamion-desktop">
                            <img src="{{asset('images/imgs/check.svg')}}" alt="Check-Nike">
                            <p>En camión</p>
                          </div>
                        </span>
                        <p class="text-muted text-right smaller-2"><strong class="text-muted">SKU:</strong>{{$producto->sku}}</p>
                      </div>
                      <div class="col-12">
                        <h6 class="card-title font-weight-bold mb-0 text-blue pb-1">{{$producto->title}}</h6>
                      </div>
                      <div class="col-12">
                        <h6 class="text-black mb-0 smaller-3 pb-1">{{$producto->description}}</h6>
                      </div>
                      <div class="col-12">
                        <p class="card-text smaller">({{$producto->available_stock}}) Disponibles</p>
                      </div>
                      <div class="col-12">
                      <a href="#" class="smaller">{{$producto->category->title}}</a>
                      </div>
                      <div class="col-12">
                        <p class="smaller">{{$producto->iva->msg}}</p>
                      </div>
                  </div>
                  <div class="card-pricing text-center align-self-end">
                    <h4 class="font-weight-bold mb-0 mt-3">
                      {{$producto->getPrice(session('currency'), $producto->wholesale_price)}} 
                      {{session('currency') == 'USD' ? 'USD' : 'Bs'}}
                    </h4>
                    <p class="smaller">{{$producto->packaging->packaging}} de {{$producto->units_packaging}} unidades</p>
                    {{-- producto agregado --}}
                    <div class="almancen__agregarProducto pt-2">
                        <p class="almancen__agregarProducto-text">Selecciona una cantidad </p>
                        @php $disponible = $producto->available_stock; @endphp
                        <select id="{{$producto->id}}" class="form-control to_server productSelectStock">
                          <option value="0">0</option>
                          @for($i = 1; $i <= $disponible; $i++)
                            <option value="{{$i}}">{{$i}}</option>
                          @endfor
                        </select>
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