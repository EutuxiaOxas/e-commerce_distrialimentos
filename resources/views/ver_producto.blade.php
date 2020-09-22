@extends('layouts.app')


@section('content')
<div class="container">
	<div class="card mb-3 mt-5">
	  <img src="{{asset('storage/'.$product->image)}}" class="card-img-top" style="width: 100%; height: 50vh;object-fit: cover;" alt="...">
	  <div class="card-body">
	    <h5 class="card-title">{{$product->title}}</h5>
	    <p class="card-text">{{$product->description}}.</p>
	    <p class="card-text"><small class="text-muted">{{$product->price}}$</small></p>
	    <p>Categoria: <strong>{{$product->category->title}}</strong></p>
	  </div>
	</div>
</div>



@endsection