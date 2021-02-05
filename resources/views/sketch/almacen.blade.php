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
    @include('perfil.perfil_navMobile')
 
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
                      <div class="col-12 pb-1">
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
                    <h4 class="font-weight-bold mb-0 mt-3">{{$producto->wholesale_price}} $</h4>
                    <p class="smaller">{{$producto->packaging->packaging}} de {{$producto->units_packaging}} unidades</p>
                    {{-- boton de agregar  --}}
                    <div class="agregar-01 pt-2">
                      <a href="#" class="btn btn-primary px-3 py-1">Agregar</a>
                    </div>
                    {{-- producto agregado --}}
                    <div class="agregado-01 pt-4">
                      <div class="row align-item-center">
                        <div class="col-6 productos__text-agregado m-0 p-0">
                          <p><i class="svg-checked">
                            <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <g clip-path="url(#clip0)">
                              <path d="M12.8096 1.91695C12.5558 1.6631 12.1443 1.6631 11.8904 1.91695L4.10299 9.70444L1.10963 6.71109C0.855804 6.45723 0.444273 6.45726 0.190392 6.71109C-0.0634639 6.96492 -0.0634639 7.37645 0.190392 7.6303L3.64336 11.0832C3.89712 11.3371 4.30895 11.3369 4.56261 11.0832L12.8096 2.8362C13.0635 2.58237 13.0635 2.17081 12.8096 1.91695Z" fill="#FF9417"/>
                              </g>
                              <defs>
                              <clipPath id="clip0">
                              <rect width="13" height="13" fill="white"/>
                              </clipPath>
                              </defs>
                              </svg>
                          </i>En camión</p>
                        </div>
                        <div class="col-6 productos__select-agregado ">
                          <label for="cantidad" class="mb-0">Cantidad</label>
                          <select name="cantidad" id="cantidad" class="form-control">
                            <option value="0">0</option>
                            <option value="1" selected>1</option>
                            <option value="2">2</option>
                          </select>
                        </div>
                      </div>
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
  @include('common.carrito-compras')

@endsection