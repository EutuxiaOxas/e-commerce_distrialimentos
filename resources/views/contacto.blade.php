@extends('common.main')

@section('title')
    <title>Contacto</title>
@endsection




@section('content')
    {{-- header principal --}}
	@include('common.header')
	
<!-- cover -->
<section class="pb-2">
	<div class="container">
	  <div class="row justify-content-center">
		<div class="col-md-10 text-center p-sm-10 p-5">
		  <h1 data-swiper-parallax="-100%" class="display-3">Solicita nuestro <b>Catálogo de productos</b></h1>
		  <a href="https://api.whatsapp.com/send?phone=584244010776&text=Hola,%20Estoy%20interesado%20en%20tener%20el%20catalogo%20de%20sus%20productos.%20Gracias%20" class="btn btn-blue btn-rounded px-5">Pedir catalogo</a>
		</div>
	  </div>
	</div>
  </section>
  <!-- / cover -->


 	<section class="bg-light">
 	  <div class="container">
 	    <div class="row">
 	      <div class="col-md-6">
 	        <span class="eyebrow mb-1 text-primary">Envianos un Mail</span>
 	        <h2>Te responderemos lo mas pronto posible.</h2>
 	      </div>
 	    </div>
 	    <div class="row">
 	      <div class="col">
 	        <form>
 	          <div class="form-row mb-1">
 	            <div class="col">
 	              <input type="text" class="form-control form-control-minimal" placeholder="Nombre">
 	            </div>
 	            <div class="col">
 	              <input type="text" class="form-control form-control-minimal" placeholder="Correo">
 	            </div>
 	            <div class="col">
 	              <input type="text" class="form-control form-control-minimal" placeholder="Telefono">
 	            </div>
 	          </div>
 	          <div class="form-row mb-1">
 	            <div class="col">
 	              <textarea class="form-control form-control-minimal" id="exampleFormControlTextarea1" rows="3" placeholder="Tu Mensaje"></textarea>
 	            </div>
 	          </div>
 	          <div class="form-row mt-3">
 	            <div class="col">
 	              <button class="btn btn-primary px-5">Enviar correo</button>
 	            </div>
 	          </div>
 	        </form>
 	      </div>
 	    </div>
 	  </div>
 	</section>
@endsection