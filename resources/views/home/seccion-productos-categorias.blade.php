 <!----------------------  Productos mas vendidos Desktop ------------------>
 <section class="Productos_masVendidos px-3">
  <div class="tittle-section container d-block d-md-none">
    <div class="product_top-tittle row">
      <div class="product_top-details pb-2">
        <h6 class="text-primary">{{$dos_categorias[0]->title}}</h6>
        <p class="small text-muted">{{$dos_categorias[0]->description}}</p>
      </div>
    </div>
  </div>
  <div class="Titulo-seccion row my-1 pl-2 py-4 d-none d-md-block">
      <div class="col">
        <h5 class="mb-0 font-weight-bold text-primary">{{$dos_categorias[0]->title}}</h5>
        <h6 class="font-weight-bold text-muted">{{$dos_categorias[0]->description}}</h6>
      </div>
  </div>
  
  <div class="container-fluid">
    <div class="row">
      <div class="owl-carousel" id="productos2">
          {{-- Agregando los productos --}}
          @foreach ($productos_cat_uno as $p)
            @include('home.producto-home')
          @endforeach

      </div>    
    </div>
  </div>

</section>



<!----------------------  Productos mas vendidos Desktop ------------------>

<section class="Productos_masVendidos px-3">
  <div class="tittle-section container d-block d-md-none">
    <div class="product_top-tittle row">
      <div class="product_top-details pb-2">
        <h6 class="text-primary">{{$dos_categorias[1]->title}}</h6>
        <p class="small text-muted">{{$dos_categorias[1]->description}}</p>
      </div>
    </div>
  </div>
  <div class="Titulo-seccion row my-1 pl-2 py-4 d-none d-md-block">
      <div class="col">
        <h5 class="mb-0 font-weight-bold text-primary">{{$dos_categorias[1]->title}}</h5>
        <h6 class="font-weight-bold text-muted">{{$dos_categorias[1]->description}}</h6>
      </div>
    </div>
  <div class="container-fluid">
    <div class="row">
      <div class="owl-carousel" id="productos2">
          {{-- Agregando los productos --}}
          @foreach ($productos_cat_dos as $p)
            @include('home.producto-home')
          @endforeach

      </div>    
    </div>
  </div>
</section>