 <!-- carrusel de Promociones  -->
<section class="banner_movil pt-1 pb-3">
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