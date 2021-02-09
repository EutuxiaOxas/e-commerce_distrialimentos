@extends('layouts.main')


@section('content')
	@include('perfil.perfil_navMobile')

	<style>
		.formularios__inputBorders {
      border-bottom: 1px solid #FD6721;
      padding: 1.5rem 0.25rem 0.25rem;
    }

    .formularios__inputBorders:focus {
      outline:none;
    }
	</style>

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
					@if($user->documento_identidad && $user->phone)
					<img class="perfil__cardEditar-icon cardLists" src="{{asset('/images/editar-icon.svg')}}">
					@endif
				</div>
				@if($user->documento_identidad && $user->phone)
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
				@else
					{{-- Aun falta datos por agregar --}}
					<div class="perfil__cardBody direccion">
						<div class="container p-5 text-center">
							<img src="{{asset('icons/void-01.svg')}}" alt="">
							<p class="perfil__cardListItem-content" style="">Aun sin datos personales...</p>
						</div>
						<div class="perfil__agregarDatos ">
							<a href="#" data-toggle="modal" data-target="#modal_userEdit">Agregar los datos personales</a>
						</div>
					</div>
				@endif
			</div>

			<div class="perfil__card">
				<div class="perfil__cardTitle">
					<h2 class="perfil__card-title">Datos de empresa</h2>
					@if($empresa)
					<img class="perfil__cardEditar-icon cardLists"  src="{{asset('/images/editar-icon.svg')}}">
					@endif
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
						<li class="perfil__cardListItem">
							{{-- Direccion Juridica --}}
							<h2 class="perfil__cardListItem-title">Dirección jurídica</h2>
							<div class="perfil__cardListItem-content">
								<h3 class="perfil__cardDireccion-title">{{$empresa->legal_address}}</h3>
								<p class="perfil__cardListItem-content">{{$empresa->state->state}}, {{$empresa->city->city}} ({{$empresa->postal_code}})</p>
							</div>
						</li>
					</ul>
				</div>
				@else
				{{-- si no exite la empresa --}}
				<div class="perfil__cardBody direccion">
					<div class="container p-5 text-center">
						<img src="{{asset('icons/void-02.svg')}}" alt="">
						<p class="perfil__cardListItem-content" style="">Aun sin datos de empresa...</p>
					</div>
					<div class="perfil__agregarDatos ">
						<a href="#" data-toggle="modal" data-target="#modal_FacturationEdit">Agregar los datos de empresa</a>
					</div>
				</div>
				@endif
			</div>

			<div class="perfil__card">
				<div class="perfil__cardTitle">
					<h2 class="perfil__card-title">Direcciones</h2>
				</div>
				
				@if($direcciones)
				<div class="perfil__cardBody direccion">
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
					<div class="perfil__agregarDatos">
						<a href="#">Agregar nueva dirección</a>
					</div>
				</div>
					@else
						{{-- si no exiten direcciones --}}
						<div class="perfil__cardBody direccion">
							<div class="container p-5 text-center">
								<img src="{{asset('icons/void-03.svg')}}" alt="">
								<p class="perfil__cardListItem-content" style="">Aun sin direcciones de envio...</p>
							</div>
							<div class="perfil__agregarDatos ">
								<a href="#" data-toggle="modal" data-target="#modal-directionEdit">Agregar nueva dirección</a>
							</div>
						</div>
					@endif

				
			</div>
		</div>
	</section>


<!----------------- Modales --------------->


	<!-- Modal datos de usuario -->
	<div class="modal fade" id="modal_userEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content p-3">
				<div class="modal-header p-2 border-bottom-0">
					<div class="container">
						<div class="row">
							<div class="col-10 mb-0">
								<h5 class="modal-title text-secondary font-weight-bold lead" id="exampleModalLabel">Datos de usuario</h5>
								<p class="texto-small text-muted">Agregue los datos solicitados...</p>
							</div>
							<div class="col-2">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>        
							</div>
						</div>
					</div>
				</div>
				<div class="modal-body px-2 pt-1 pb-2">
					<div class="form-title container">
						<div class="row">
							<div class="col text-center">
								<p class="font-weight-bold">Datos de usuario</p>
							</div>
						</div>
					</div>
					<form>
						<div class="form">
							<div class="col">
								<input type="text" class="form-control-plaintext formularios__inputBorders" placeholder="Nombre completo">
							</div>
							<div class="col">
								<input type="number" class="form-control-plaintext formularios__inputBorders" placeholder="Cedula [ej: v-23432578]">
							</div>
							<div class="col">
								<input type="text" class="form-control-plaintext formularios__inputBorders" placeholder="Telefono [ej: 0241-8524234]">
							</div>
							<div class="col pb-3">
								<input type="text" class="form-control-plaintext formularios__inputBorders" placeholder="Telefono Alt. [ej: 0241-8524234]">
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer pt-5 border-0">
					<div class="container">
						<div class="row mb-1">
							<button type="button" class="btn btn-primary btn-block formulario__modalBtn">Agregar</button>
						</div>
						<div class="row">
							<p class="text-muted texto-small text-center">Al hacer click en continuar usted confirma que los datos administrados son reales</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Fin Modal datos de usuario -->

	<!-- Modal datos de empresa -->
	<div class="modal fade" id="modal_FacturationEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content p-3">
				<div class="modal-header p-2 border-bottom-0">
					<div class="container">
						<div class="row">
						<div class="col-10 mb-0">
							<h4 class="modal-title text-secondary font-weight-bold" id="exampleModalLabel">Datos de Empresa</h4>
							<p class="texto-small texto-muted">Agregue los datos solicitados...</p>
						</div>
						<div class="col-2">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>        
						</div>
						</div>
					</div>
				</div>
				<div class="modal-body px-2 pt-1 pb-2">
					<div class="form-title container">
						<div class="row">
						<div class="col text-center">
							<p class="text-black font-weight-bold">Datos de empresa</p>
						</div>
						</div>
					</div>
					<form>
						<div class="form">
						<div class="col">
							<input type="text" class="form-control-plaintext formularios__inputBorders" placeholder="Nombre de empresa">
						</div>
						<div class="col">
							<input type="text" class="form-control-plaintext formularios__inputBorders" placeholder="RIF [ej: j-20180578-4]">
						</div>
						<div class="col">
							<input type="text" class="form-control-plaintext formularios__inputBorders" placeholder="SADA">
						</div>
						<div class="col">
							<input type="text" class="form-control-plaintext formularios__inputBorders" placeholder="Horario de atención">
						</div>
						</div>
					</form>                                      
				</div>
				<div class="modal-footer pt-5 border-0">
					<div class="container">
						<div class="row mb-1">
						<button type="button" class="btn btn-primary btn-block formulario__modalBtn"">Agregar</button>
						</div>
						<div class="row">
						<p class="text-muted small text-center">Al hacer click en continuar usted confirma que los datos administrados son reales</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Fin Modal datos de empresa -->

	<!-- Modal datos de Direccio -->
	<div class="modal fade" id="modal-directionEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content p-3">
				<div class="modal-header p-2 border-bottom-0">
					<div class="container">
						<div class="row">
						<div class="col-10 mb-0">
							<h4 class="modal-title text-secondary font-weight-bold" id="exampleModalLabel">Datos de facturación</h4>
							<p class="texto-small text-muted">Agregue los datos solicitados...</p>
						</div>
						<div class="col-2">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>        
						</div>
						</div>
					</div>
				</div>
				<div class="modal-body px-2 pt-1 pb-2">                   
					<div class="form-title container">
						<div class="row">
							<div class="col text-center">
								<p class="text-black font-weight-bold">Direccion Juridica</p>
							</div>
						</div>
					</div>
					<form>
						<div class="form">
							<div class="col">
								<input type="text" class="form-control-plaintext formularios__inputBorders" placeholder="Estado">
							</div>
							<div class="col">
								<input type="text" class="form-control-plaintext formularios__inputBorders" placeholder="Ciudad">
							</div>
							<div class="col">
								<input type="text" class="form-control-plaintext formularios__inputBorders" placeholder="Codigo postal">
							</div>
							<div class="col">
								<input type="text" class="form-control-plaintext formularios__inputBorders" placeholder="Dirección">
							</div>
							<div class="col">
								<input type="text" class="form-control-plaintext formularios__inputBorders" placeholder="Responsable">
							</div>
							<div class="col">
								<input type="text" class="form-control-plaintext formularios__inputBordersgit" placeholder="Telefono Oficina">
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer pt-5 border-0">
					<div class="container">
						<div class="row mb-0">
							<button type="button" class="btn btn-primary btn-block">Editar</button>
						</div>
						<div class="row">
						<p class="text-muted small text-center">Al hacer click en continuar usted confirma que los datos administrados son reales</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Fin Modal datos de Direccio -->



@endsection