 {{-- Banner principal --}}
<section class="main_banner">
    <div id="carousel-main" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
    @foreach($banners_principales as $banner)
    @if($loop->first)
    <div class="carousel-item active">
    <img class="d-block w-100 main_img" src="{{asset('storage/'.$banner->image)}}" alt="first slide">
    </div>
    @else
    <div class="carousel-item">
    <img class="d-block w-100 main_img" src="{{asset('storage/'.$banner->image)}}" alt="Others slide">
    </div>
    @endif
    @endforeach
    </div>
    <a class="carousel-control-prev" href="#carousel-main" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-main" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
    </a>
    </div>
</section>
