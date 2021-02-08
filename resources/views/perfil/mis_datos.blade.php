@extends('layouts.main')


@section('content')
	@include('perfil.perfil_navMobile')

	<section class="perfil__container">
		@include('perfil.perfil_nav')
		<div class="perfil__body">
			<h2 class="perfil__body-title">Mis datos</h2>
			<div class="perfil__card">
				<div class="perfil__cardTitle">
					<h2 class="perfil__card-title">Datos de cuenta</h2>
				</div>
				<div class="perfil__cardBody email">
					<h3 class="perfil__cardEmail-title">Correo</h3>
					<p class="perfil__cardEmail-content ">{{$user->email}}</p>
				</div>
			</div>

			<div class="perfil__card">
				<div class="perfil__cardTitle">
					<h2 class="perfil__card-title">Datos personales</h2>
					<img class="perfil__cardEditar-icon cardLists" src="{{asset('/images/editar-icon.svg')}}">
				</div>
				
				<div class="perfil__cardBody ">
					<ul class="perfil__cardList">
						<li class="perfil__cardListItem">
							<h3 class="perfil__cardListItem-title">Nombre y apellido</h3>
							<p class="perfil__cardListItem-content">
								{{$user->name}}
								{{$user->apellido}}
							</p>
						</li>
						<li class="perfil__cardListItem">
							<h3 class="perfil__cardListItem-title">Documento</h3>
							<p class="perfil__cardListItem-content">C.I {{ $user->documento_identidad ?? 'no definida' }}</p>
						</li>
						<li class="perfil__cardListItem">
							<h3 class="perfil__cardListItem-title">Telefono</h3>
							<p class="perfil__cardListItem-content">{{$user->phone}}</p>
						</li>
						<li class="perfil__cardListItem">
							<h3 class="perfil__cardListItem-title">Telefono alternativo</h3>
							<p class="perfil__cardListItem-content">{{$user->phone_alternative ?? 'no definido'}}</p>
						</li>
					</ul>
				</div>
			</div>

			<div class="perfil__card">
				<div class="perfil__cardTitle">
					<h2 class="perfil__card-title">Datos de empresa</h2>
					<img class="perfil__cardEditar-icon cardLists"  src="{{asset('/images/editar-icon.svg')}}">
				</div>
				@if($empresa)
				<div class="perfil__cardBody ">
					<ul class="perfil__cardList">
						<li class="perfil__cardListItem">
							<h3 class="perfil__cardListItem-title">Empresa</h3>
							<p class="perfil__cardListItem-content">{{$empresa->name}}</p>
						</li>
						<li class="perfil__cardListItem">
							<h3 class="perfil__cardListItem-title">R.I.F.</h3>
							<p class="perfil__cardListItem-content">R.I.F. {{$empresa->RIF}}</p>
						</li>
						<li class="perfil__cardListItem">
							<h3 class="perfil__cardListItem-title">SADA</h3>
							<p class="perfil__cardListItem-content">{{$empresa->SADA}}</p>
						</li>
						<li class="perfil__cardListItem">
							<h3 class="perfil__cardListItem-title">Horario disponible</h3>
							<p class="perfil__cardListItem-content">{{$empresa->getOperationTime()}}</p>
						</li>
					</ul>
				</div>
				@else
				{{-- si no exite la empresa --}}
				<div class="perfil__cardBody ">
					<div class="container p-5 text-center">
						<img src="{{asset('icons/void-02.svg')}}" alt="">
						<p class="perfil__cardListItem-content">Agrega los datos de facturacion</p>
					</div>
				</div>
				@endif
			</div>

			<div class="perfil__card">
				<div class="perfil__cardTitle">
					<h2 class="perfil__card-title">Direcciones</h2>
				</div>
				
				<div class="perfil__cardBody direccion">
					@if($empresa)
					{{-- Direccion Juridica --}}
					<div class="direccionCard">
						<div class="perfil__cardTitle direccion">
							<h2 class="perfil__card-title direccion">Dirección jurídica</h2>
							<img src="{{asset('/images/editar-icon.svg')}}">
						</div>
						<div class="perfil__cardDireccion">
							<h3 class="perfil__cardDireccion-title">{{$empresa->legal_address}}</h3>
							<p class="perfil__cardDireccion-content">{{$empresa->state->state}}, {{$empresa->city->city}} ({{$empresa->postal_code}})</p>
						</div>
					</div>
					@endif

					@if($direcciones)
					<div class="direccionCard">
						<div class="perfil__cardTitle direccion">
							<h2 class="perfil__card-title direccion">Dirección de envío</h2>
							<img src="{{asset('/images/editar-icon.svg')}}">
						</div>
						<div class="perfil__cardDireccion">
							<h3 class="perfil__cardDireccion-title">Calle 1 Avenida 10 Local 45</h3>
							<p class="perfil__cardDireccion-content">Cerca del colegio Moral y luces </p>
							<p class="perfil__cardDireccion-content">Carabobo, Valencia (2001)</p>
							<p class="perfil__cardDireccion-content">Carlos Maita - +58 414 453 3456</p>
						</div>
					</div>
					@endif

					<div class="perfil__agregarDireccion">
						<a href="#">Agregar nueva dirección</a>
					</div>
				</div>
				
			</div>
		</div>
	</section>
@endsection