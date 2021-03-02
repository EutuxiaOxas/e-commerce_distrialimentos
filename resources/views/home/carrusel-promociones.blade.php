 <!-- carrusel de Promociones  -->
<section class="banner_movil pt-1 pb-3  px-3">
    <div class="tittle-section container d-block d-md-none">
        <div class="product_top-tittle row">
          <div class="product_top-details pb-2">
            <h6 class="text-primary">Disfruta de las mejores promociones</h6>
            <p class="small text-muted">Conoce lo que traemos para tí</p>
          </div>
        </div>
      </div>
      <div class="Titulo-seccion row my-1 pl-2 py-4 d-none d-md-block">
          <div class="col">
            <h5 class="mb-0 font-weight-bold text-primary">Disfruta de las mejores promociones</h5>
            <h6 class="font-weight-bold text-muted">Conoce lo que traemos para tí</h6>
          </div>
      </div>


    <div class="owl-carousel" id="promociones">
    @foreach($banners_promocionales as $banner)
    @if($loop->first)
    <div class="promocion">
    <img src="{{asset('storage/'.$banner->image)}}" class="d-block w-100" alt="...">
    </div>
    @else
    <div class="promocion">
    <img src="{{asset('storage/'.$banner->image)}}" class="d-block w-100" alt="...">
    </div>
    @endif
    @endforeach
    </div>
</section>