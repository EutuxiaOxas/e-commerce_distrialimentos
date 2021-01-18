@extends('common.main')

@section('title')
    <title>Productos</title>
@endsection


@section('content')
    {{-- header principal --}}
    @include('common.header')
 
     <!-- cover -->
     <section class="hero hero-with-header">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <h1 data-swiper-parallax="-100%" class="display-3"><b>Nuestros productos</b><br>Lo que tenemos para tí.</h1>
            </div>
          </div>
        </div>
      </section>
      <!-- / cover -->

      

    <!-- works -->
    <div>
      <div class="row">
        <div class="col-sm-3">
          <div class="container">
            <div class="row">
              <div class="col d-none d-sm-block" style="cursor: pointer;">
                <ul class="nav flex-column nav-tabs nav-vertical ">
                  <li class="nav-item">
                    <a class="nav-link active" data-filter="All">Todos</a>
                  </li>
                  @foreach($categories as $category)
                  <li class="nav-item ">
                    <a class="nav-item nav-link " data-filter="{{$category->id}}">{{$category->title}}</a>
                  </li>
                  @endforeach
                </ul> 
              </div>

              {{-- smartphone    --}}
              <div class="col d-sm-none p-1">
                <div class="dropdown">
                  <button class="btn  btn-with-ico  btn-lg btn-block btn-outline-primary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-list"></i> Nuestras Lineas
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" data-filter="All">Todos</a>
                    <div class="dropdown-divider"></div>
                    @foreach($categories as $category)
                      <a class="dropdown-item" data-filter="{{$category->id}}" >
                        <span>{{$category->title}}</span>
                        <p>Descripcion base de datos</p>
                      </a>
                      <div class="dropdown-divider"></div>
                    @endforeach
                  </div>
                </div>
             </div>
              
            </div>
          </div>
        </div>

        <div class="col-sm-9">
          <div class="container-full">
            <div class="row">
              <div class="col">
                <ul class="row gutter-0 gallery filtr-container ">
                  @foreach($products as $product)
                  <li class="col-6 col-md-4 col-lg-3 filtr-item" data-category="All, {{$product->category->id}}" data-sort="value">
                    <figure class="photo equal">
                      <a href="{{asset('images/'.$product->image)}}" 
                        style="background-image: url({{asset('images/'.$product->image)}});">
                        <figcaption class="photo-caption">
                          <span>{{$product->title}}</span>
                          <p>{{$product->description}}</p>
                        </figcaption>
                      </a>
                    </figure>
                  </li>
                  @endforeach
                </ul>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div> 
      <!-- / works -->
  

      {{-- CTA --}}
      <!-- bordered -->
      <section id="default" class="">
          <div class="tab-pane show active " id="component-1-1" role="tabpanel" aria-labelledby="component-1-1">
            <div class="component-example">
              <div class="container-fluid">
                <div class="bordered p-4 bg-light">
                  <div class="row justify-content-between align-items-center text-center text-md-left">
                    <div class="col-md-2">
                      <i class="svg-icon fs-60 text-blue">

                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="64px" height="64px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
                          <path fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" d="M32,12L32,32L41,41" style="stroke-dasharray: 33, 35; stroke-dashoffset: 0;"></path>
                          <path fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" d="M4,32L8,32" style="stroke-dasharray: 4, 6; stroke-dashoffset: 0;"></path>
                          <path fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" d="M56,32L60,32" style="stroke-dasharray: 4, 6; stroke-dashoffset: 0;"></path>
                          <path fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" d="M32,60L32,56" style="stroke-dasharray: 4, 6; stroke-dashoffset: 0;"></path>
                          <path fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" d="M32,8L32,4" style="stroke-dasharray: 4, 6; stroke-dashoffset: 0;"></path>
                          <path fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" d="M32,63c17.121,0,31-13.879,31-31S49.121,1,32,1" style="stroke-dasharray: 98, 100; stroke-dashoffset: 0;"></path>
                          <path fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" d="M32,63C14.879,63,1,49.121,1,32
                            c0-6.713,2.134-12.926,5.759-18l5.62-5.621" style="stroke-dasharray: 76, 78; stroke-dashoffset: 0;"></path>
                          <path fill="none" stroke="#000000" stroke-width="2" stroke-linejoin="bevel" stroke-miterlimit="10" d="M13,19L13,8L2,8" style="stroke-dasharray: 22, 24; stroke-dashoffset: 0;"></path>
                          </svg>
                      </i>
                    </div>
                    <div class="col-md-6">
                      <h3 class="mb-1">Catalogo & Disponibilidad</h3>
                      <p>No dudes en preguntar por nuestro catálogo de productos y disponibilidad.</p>
                    </div>
                    <div class="col-md-4 text-lg-right">
                      <a href="https://api.whatsapp.com/send?phone=584244010776&text=Hola,%20Estoy%20interesado%20en%20saber%20la%20disponibilidad%20de%20sus%20productos.%20Gracias." class="btn btn-primary btn-rounded px-5">Preguntar <span class="d-none d-md-block">por Disponibilidad</span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
  
         
      </section>
      <!-- / bordered -->
      {{-- / cta --}}

@endsection