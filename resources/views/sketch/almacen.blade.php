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
              <a href="#">
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
                        <p class="card-text smaller">({{$producto->in_stock}})</p>
                      </div>
                      <div class="col-12">
                      <a href="#" class="smaller">{{$producto->category->title}}</a>
                      </div>
                      <div class="col-12">
                        <p class="smaller">IVA incluido</p>
                      </div>
                  </div>
                  <div class="card-pricing text-center align-self-end">
                    <h4 class="font-weight-bold mb-0 mt-3">{{$producto->unit_price}} $</h4>
                    <p class="smaller">Caja de 20 unidades</p>
                    <a href="#" class="btn btn-primary px-3 py-1">Agregar</a>
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