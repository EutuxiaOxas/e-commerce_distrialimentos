<!----------- Productos destacados ----------------------------->
<section id="products_top" class="px-3">
    
  {{-- productos destacados desktop--}}
  <div class="Titulo-seccion row my-1 pl-2 py-4 d-none d-md-block">
    <div class="col">
      <h5 class="mb-0 font-weight-bold text-primary">Productos destacados</h5>
      <h6 class="font-weight-bold text-muted">Las mejores marcas nacionales e importadas</h6>
    </div>
  </div>
  {{-- titulo de los productos destacados Movil --}}
  <div class="tittle-section container py-3 d-block d-md-none">
    <div class="product_top-tittle row">
      <div class="product_top-details pb-2">
        <h6 class="text-primary">Productos Destacados</h6>
        <p class="small text-muted">Las mejores marcas nacionales e importadas</p>
      </div>
    </div>
  </div>
    
    <div class="container-fluid">
      <div class="row">
        <div class="owl-carousel" id="productos2">
            {{-- Agregando los productos --}}
            @foreach ($productos_destacados as $p)
              @include('home.producto-home')
            @endforeach

        </div>    
      </div>
    </div>
  </section>