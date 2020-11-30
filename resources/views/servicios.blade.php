@extends('common.main')

@section('title')
    <title>Servicios</title>
@endsection


@section('content')
    {{-- header principal --}}
    @include('common.header')
    <!-- cover -->
    <section class="pb-2">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10 text-center p-10">
            <h1 data-swiper-parallax="-100%" class="display-3">Make Beautifull Websites. <b>Effective</b> & <i>Creative</i></h1>
            <a href="" class="btn btn-purple btn-rounded px-5">Get Started</a>
          </div>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="250">
          <div class="col">
            <div class="owl-carousel visible gallery align-bottom" data-items="[3,2,2]" data-margin="20" data-loop="true" data-autoplay="true">
              <figure class="photo equal equal-short">
                <a href="#" 
                  style="background-image: url({{asset('images/demo/image-1.jpg')}});">
                </a>
              </figure>
              <figure class="photo equal">
                <a href="#" 
                  style="background-image: url({{asset('images/demo/image-2.jpg')}});">
                </a>
              </figure>
              <figure class="photo equal equal-short">
                <a href="#" 
                  style="background-image: url({{asset('images/demo/image-3.jpg')}});">
                </a>
              </figure>
              <figure class="photo equal">
                <a href="#" 
                  style="background-image: url({{asset('images/demo/image-4.jpg')}});">
                </a>
              </figure>
              <figure class="photo equal equal-short">
                <a href="#" 
                  style="background-image: url({{asset('images/demo/image-5.jpg')}});">
                </a>
              </figure>
              <figure class="photo equal">
                <a href="#"
                  style="background-image: url({{asset('images/demo/image-2.jpg')}});">
                </a>
              </figure>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- / cover -->
 	<!-- presentation -->
 	<section class="section-lg">
 	  <div class="container">
 	    <div class="row my-10">
 	      <div class="col-lg-6">
 	        <div class="row">
 	          <div class="col">
 	            <h2>The <b>right way</b> <br>to build your startup.</h2>
 	          </div>
 	        </div>
 	        <div class="row gutter-3">
 	          <div class="col-md-6" data-aos="fade-up">
 	            <div class="media">
 	              <i class="icon-bar-chart-2 fs-30 text-primary mr-2"></i>
 	              <div class="media-body">
 	                <h5 class="mt-0 text-uppercase font-weight-bold fs-14 letter-spacing">Analytics</h5>
 	                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
 	              </div>
 	            </div>
 	          </div>
 	          <div class="col-md-6" data-aos="fade-up">
 	            <div class="media">
 	              <i class="icon-award fs-30 text-primary mr-2"></i>
 	              <div class="media-body">
 	                <h5 class="mt-0 text-uppercase font-weight-bold fs-14 letter-spacing">Award Winning</h5>
 	                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
 	              </div>
 	            </div>
 	          </div>
 	          <div class="col-md-6" data-aos="fade-up">
 	            <div class="media">
 	              <i class="icon-command fs-30 text-primary mr-2"></i>
 	              <div class="media-body">
 	                <h5 class="mt-0 text-uppercase font-weight-bold fs-14 letter-spacing">Control</h5>
 	                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
 	              </div>
 	            </div>
 	          </div>
 	          <div class="col-md-6" data-aos="fade-up">
 	            <div class="media">
 	              <i class="icon-check-circle2 fs-30 text-primary mr-2"></i>
 	              <div class="media-body">
 	                <h5 class="mt-0 text-uppercase font-weight-bold fs-14 letter-spacing">Support</h5>
 	                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
 	              </div>
 	            </div>
 	          </div>
 	        </div>
 	      </div>
 	      <div class="col-12 col-lg-6 presentation presentation-responsive">
 	        <img class="left-0 vertical-align" src="{{asset('images/demo/service/macbook.png')}}" alt="Image">
 	      </div>
 	    </div>
 	  </div>
 	</section>
 	<!-- / presentation -->

 	<!-- faq -->
 	<section class="bg-light separator-top">
 	  <div class="container">
 	    <div class="row justify-content-between align-items-center">
 	      <div class="col-md-6 pr-md-4">
 	        <h2 class="mb-4"><b>Unleash the power</b><br> of branding.</h2>
 	        <div class="accordion-group accordion-group-highlight" data-accordion-group>
 	          <div class="accordion open" data-accordion data-aos="fade-up">
 	            <div class="accordion-control" data-control>
 	              <h5>Do I have to sign a lease agreement ?</h5>
 	            </div>
 	            <div class="accordion-content" data-content>
 	              <div class="accordion-content-wrapper">
 	                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quam odit voluptatum, rem libero modi labore porro commodi inventore architecto explicabo reiciendis, perspiciatis voluptatibus odio, sequi nobis?</p>
 	              </div>
 	            </div>
 	          </div>
 	          <div class="accordion" data-accordion data-aos="fade-up">
 	            <div class="accordion-control" data-control>
 	              <h5>What are your standard working hours ?</h5>
 	            </div>
 	            <div class="accordion-content" data-content>
 	              <div class="accordion-content-wrapper">
 	                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quam odit voluptatum, rem libero modi labore porro commodi inventore architecto explicabo reiciendis, perspiciatis voluptatibus odio, sequi nobis?</p>
 	              </div>
 	            </div>
 	          </div>
 	          <div class="accordion" data-accordion data-aos="fade-up">
 	            <div class="accordion-control" data-control>
 	              <h5>Can guests visit me at my private office ?</h5>
 	            </div>
 	            <div class="accordion-content" data-content>
 	              <div class="accordion-content-wrapper">
 	                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quam odit voluptatum, rem libero modi labore porro commodi inventore architecto explicabo reiciendis, perspiciatis voluptatibus odio, sequi nobis?</p>
 	              </div>
 	            </div>
 	          </div>
 	        </div>
 	      </div>
 	      <div class="col-md-6">
 	        <img src="{{asset('images/demo/service/service-2.svg')}}" alt="Image">
 	      </div>
 	    </div>
 	  </div>
 	</section>
 	<!-- / faq -->

 	<section class="bg-light pt-0">
 	  <div class="container">
 	    <div class="row align-items-center">
 	      <div class="col-md-6 pr-md-5">
 	        <img src="{{asset('images/demo/service/service-3.svg')}}" alt="Image">
 	      </div>
 	      <div class="col-md-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
 	        <div class="owl-carousel">
 	          <blockquote class="blockquote">
 	            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
 	            <footer class="blockquote-footer">Valerie Campbel</footer>
 	          </blockquote>
 	          <blockquote class="blockquote">
 	            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
 	            <footer class="blockquote-footer">Valerie Campbel</footer>
 	          </blockquote>
 	        </div>
 	      </div>
 	    </div>
 	  </div>
 	</section>

 	<!-- blog -->
 	<section class="bg-light">
 	  <div class="container">
 	    <div class="row justify-content-center">
 	      <div class="col-lg-6 text-center">
 	        <h2>See our <b>case studies.</b></h2>
 	      </div>
 	    </div>
 	    <div class="row mb-1">
 	      <div class="col">
 	        <ul class="masonry row gutter-1">
 	          <li class="col-md-4" data-aos="fade-up">
 	            <article class="tile">
 	              <div class="tile-image" style="background-image: url({{asset('images/demo/image-1.jpg')}})"></div>
 	              <a href="" class="tile-content">
 	                <div class="tile-footer">
 	                  <span class="eyebrow mb-1">Design</span>
 	                  <h3>Quick guide on traveling with friends.</h3>
 	                </div>
 	              </a>
 	            </article>
 	          </li>
 	          <li class="col-md-4" data-aos="fade-up">
 	            <article class="tile tile-long">
 	              <div class="tile-image" style="background-image: url({{asset('images/demo/image-6.jpg')}})"></div>
 	              <a href="" class="tile-content">
 	                <div class="tile-footer">
 	                  <span class="eyebrow mb-1">Design</span>
 	                  <h3>Quick guide on traveling with friends.</h3>
 	                </div>
 	              </a>
 	            </article>
 	          </li>
 	          <li class="col-md-4" data-aos="fade-up">
 	            <article class="tile">
 	              <div class="tile-image" style="background-image: url({{asset('images/demo/image-3.jpg')}})"></div>
 	              <a href="" class="tile-content">
 	                <div class="tile-footer">
 	                  <span class="eyebrow mb-1">Design</span>
 	                  <h3>Quick guide on traveling with friends.</h3>
 	                </div>
 	              </a>
 	            </article>
 	          </li>
 	          <li class="col-md-4" data-aos="fade-up">
 	            <article class="tile tile-long">
 	              <div class="tile-image" style="background-image: url({{asset('images/demo/image-4.jpg')}})"></div>
 	              <a href="" class="tile-content">
 	                <div class="tile-footer">
 	                  <span class="eyebrow mb-1">Design</span>
 	                  <h3>Quick guide on traveling with friends.</h3>
 	                </div>
 	              </a>
 	            </article>
 	          </li>
 	          <li class="col-md-4" data-aos="fade-up">
 	            <article class="tile tile-long">
 	              <div class="tile-image" style="background-image: url({{asset('images/demo/image-5.jpg')}})"></div>
 	              <a href="" class="tile-content">
 	                <div class="tile-footer">
 	                  <span class="eyebrow mb-1">Design</span>
 	                  <h3>Quick guide on traveling with friends.</h3>
 	                </div>
 	              </a>
 	            </article>
 	          </li>
 	          <li class="col-md-4" data-aos="fade-up">
 	            <article class="tile">
 	              <div class="tile-image" style="background-image: url({{asset('images/demo/image-2.jpg')}})"></div>
 	              <a href="" class="tile-content">
 	                <div class="tile-footer">
 	                  <span class="eyebrow mb-1">Design</span>
 	                  <h3>Quick guide on traveling with friends.</h3>
 	                </div>
 	              </a>
 	            </article>
 	          </li>
 	        </ul>
 	      </div>
 	    </div>
 	    <div class="row" data-aos="fade-up">
 	      <div class="col text-center">
 	        <a href="" class="btn btn-block btn-lg btn-secondary">Load More</a>
 	      </div>
 	    </div>
 	  </div>
 	</section>
 	<!-- / blog -->



@endsection