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
					<img data-toggle="modal" data-target="#modal_userEdit" class="perfil__cardEditar-icon cardLists" src="{{asset('/images/editar-icon.svg')}}">
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
							<img src="{{asset('/images/void-01.svg')}}" alt="">
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
					<img data-toggle="modal" data-target="#modal_FacturationEdit" class="perfil__cardEditar-icon cardLists" src="{{asset('/images/editar-icon.svg')}}">
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
						<img src="{{asset('/images/void-02.svg')}}" alt="">
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
				
				@if($direcciones->isNotEmpty())
				<div class="perfil__cardBody direccion">
					@foreach($direcciones as $direccion)
					<div class="direccionCard">
						<div class="perfil__cardTitle direccion">
							<h2 class="perfil__card-title direccion">{{$direccion->type}}</h2>
							<img data-toggle="modal" class="perfilDirectionsEdit" id="directionEdit-{{$direccion->id}}" data-target="#modal-directionEditar" src="{{asset('/images/editar-icon.svg')}}">
						</div>
						<div class="perfil__cardDireccion">
							<h3 class="perfil__cardDireccion-title">{{$direccion->address}}</h3>
							<p class="perfil__cardDireccion-content">{{$direccion->state->state}}, {{$direccion->city->city}} ({{$direccion->postal_code}})</p>
							<p class="perfil__cardDireccion-content">{{$direccion->responsable}} - {{$direccion->responsable_phone}}</p>
						</div>
					</div>
					@endforeach
					<div class="perfil__agregarDatos">
						<a href="#" data-toggle="modal" data-target="#modal-directionEdit">Agregar nueva dirección</a>
					</div>
				</div>
					@else
						{{-- si no exiten direcciones --}}
						<div class="perfil__cardBody direccion">
							<div class="container p-5 text-center">
								<img src="{{asset('/images/void-03.svg')}}" alt="">
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
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content p-3">
				<div class="modal-header p-2 border-bottom-0">
					<div class="container">
						<div class="row">
							<div class="col-10 mb-0">
								<h4 class="text-secondary font-weight-bold" id="exampleModalLabel">Datos de usuario</h4>
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
								<h5 class="font-weight-bold">Datos de usuario</h5>
							</div>
						</div>
					</div>
					<form action="{{route('user.info.update')}}" method="POST">
						@csrf
						<div class="form">
							<div class="col">
								<input type="text" class="form-control-plaintext formularios__inputBorders" value="{{$user->name ?? ''}}" name="name" placeholder="Nombre completo" required>
							</div>
							<div class="col">
								<input type="text" class="form-control-plaintext formularios__inputBorders" value="{{$user->documento_identidad ?? ''}}" name="documento_identidad" placeholder="Cedula [ej: v-23432578]" required>
							</div>
							<div class="col">
								<input type="text" class="form-control-plaintext formularios__inputBorders"  value="{{$user->phone ?? ''}}" name="phone" placeholder="Telefono [ej: 0241-8524234]" required>
							</div>
							<div class="col pb-3">
								<input type="text" class="form-control-plaintext formularios__inputBorders" value="{{$user->phone_alternative ?? ''}}"  name="phone_alternative" placeholder="Telefono Alt. [ej: 0241-8524234]">
							</div>
						</div>
						<div class="container">
							<div class="row mb-1 mt-4 pt-4">
								<button type="submit" class="btn btn-primary btn-block formulario__modalBtn">Agregar</button>
							</div>
							<div class="row">
								<p class="text-muted texto-small text-center">Al hacer click en agregar usted confirma que los datos administrados son reales</p>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Fin Modal datos de usuario -->

	<!-- Modal datos de empresa -->
	<div class="modal fade" id="modal_FacturationEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content p-3">
				<div class="modal-header p-2 border-bottom-0">
					<div class="container">
						<div class="row">
						<div class="col-10 mb-0">
							<h4 class="text-secondary font-weight-bold" id="exampleModalLabel">Datos de Empresa</h4>
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
							<h5 class="font-weight-bold">Datos de empresa</h5>
						</div>
						</div>
					</div>
					<form action="{{route('user.enterprise.update')}}" method="POST">
						@csrf
						<div class="form">
						<div class="col">
							<input type="text" class="form-control-plaintext formularios__inputBorders" value="{{$empresa->name ?? ''}}" required required name="name" placeholder="Nombre de empresa">
						</div>
						<div class="col">
							<input type="text" class="form-control-plaintext formularios__inputBorders" value="{{$empresa->RIF ?? ''}}" required required name="RIF" placeholder="RIF [ej: j-20180578-4]">
						</div>
						<div class="col">
							<input type="text" class="form-control-plaintext formularios__inputBorders" value="{{$empresa->legal_address ?? ''}}" required required name="legal_address" placeholder="Direccion legal [ej: Avenida Bolivar, calle 132, local #23]">
						</div>
						<div class="col">
							<input type="text" class="form-control-plaintext formularios__inputBorders" value="{{$empresa->postal_code ?? ''}}" required required name="postal_code" placeholder="Código postal [ej: 2002]">
						</div>
						<div class="col">
							<input type="text" class="form-control-plaintext formularios__inputBorders" value="{{$empresa->SADA ?? ''}}" required required name="SADA" placeholder="SADA">
						</div>
						<div class="col mb-3">
							<select class="form-control-plaintext formularios__inputBorders" required required name="state_id" >
								<option value="">Escoge un estado</option>
								@foreach($estados as $estado)
									<option value="{{$estado->id}}" 
										@if(isset($empresa))
											{{$empresa->state->id == $estado->id ? 'selected' : ''}}
										@endif
									>{{$estado->state}}</option>
								@endforeach
							</select>
							<select class="form-control-plaintext formularios__inputBorders" required required name="city_id" >
								<option value="">Escoge una ciudad</option>
								@foreach($ciudades as $ciudad)
									<option value="{{$ciudad->id}}" 
										@if(isset($empresa))
											{{$empresa->city->id == $ciudad->id ? 'selected' : ''}}
										@endif
									>{{$ciudad->city}}</option>
								@endforeach
							</select>
						</div>
						<div class="col form-group my-4 py-4">
							<h5 class="mt-2 pt-2 font-weight-bold">Horario de atención <small>(apertura - cierre)</small></h5>
							<input type="time" class="form-control-plaintext formularios__inputBorders" value="{{$empresa->opening_time ?? ''}}" required required name="opening_time">
							<input type="time" class="form-control-plaintext formularios__inputBorders" value="{{$empresa->closing_time ?? ''}}" required required name="closing_time">
						</div>
						</div>
						<div class="container">
							<div class="row mb-1 mt-4 pt-4">
								<button type="submit" class="btn btn-primary btn-block formulario__modalBtn">Agregar</button>
							</div>
							<div class="row">
								<p class="text-muted texto-small text-center">Al hacer click en agregar usted confirma que los datos administrados son reales</p>
							</div>
						</div>
					</form>                                      
				</div>
			</div>
		</div>
	</div>
	<!-- Fin Modal datos de empresa -->

	<!-- Modal datos de Direccion -->
	<div class="modal fade" id="modal-directionEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content p-3">
				<div class="modal-header p-2 border-bottom-0">
					<div class="container">
						<div class="row">
						<div class="col-10 mb-0">
							<h4 class="modal-title text-secondary font-weight-bold" id="exampleModalLabel">Datos de dirección</h4>
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
								<h5 class="text-black font-weight-bold">Direccion Juridica</h5>
							</div>
						</div>
					</div>
					<form action="{{route('user.addreses.add')}}" method="POST">
						@csrf
						<div class="form">
							<div class="col">
								<select class="form-control-plaintext formularios__inputBorders" required name="state_id" >
									<option value="">Escoge un estado</option>
									@foreach($estados as $estado)
										<option value="{{$estado->id}}">{{$estado->state}}</option>
									@endforeach
								</select>
								<select class="form-control-plaintext formularios__inputBorders"  required name="city_id" >
									<option value="">Escoge una ciudad</option>
									@foreach($ciudades as $ciudad)
										<option value="{{$ciudad->id}}">{{$ciudad->city}}</option>
									@endforeach
								</select>
								<select class="form-control-plaintext formularios__inputBorders" required name="township_id" >
									<option value="">Escoge un municipio</option>
									@foreach($municipios as $municipio)
										<option value="{{$municipio->id}}">{{$municipio->township}}</option>
									@endforeach
								</select>
							</div>
							<div class="col">
								<input type="text" class="form-control-plaintext formularios__inputBorders" required name="postal_code" placeholder="Codigo postal">
							</div>
							<div class="col">
								<input type="text" class="form-control-plaintext formularios__inputBorders" required name="address" placeholder="Dirección">
							</div>
							<div class="col">
								<input type="text" class="form-control-plaintext formularios__inputBorders" required name="responsable" placeholder="Responsable">
							</div>
							<div class="col">
								<input type="text" class="form-control-plaintext formularios__inputBorders" required name="responsable_phone" placeholder="Telefono Oficina">
							</div>
							<div class="col text-center my-4 py-2">
								<p class="text-black font-weight-bold">Ruta de entrega sugerida</p>
								<select class="form-control-plaintext formularios__inputBorders" required name="delivery_route_id" >
									<option value="">Escoge una ruta de entrega</option>
									@foreach($rutaEntregas as $rutaEntrega)
										<option value="{{$rutaEntrega->id}}">{{$rutaEntrega->name}}</option>
									@endforeach
								</select>
							</div>
							<div class="container">
								<div class="row mb-0 mt-4 pt-4">
									<button type="submit" class="btn btn-primary btn-block">Agregar</button>
								</div>
								<div class="row">
								<p class="text-muted texto-small text-center">Al hacer click en agregar usted confirma que los datos administrados son reales</p>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Fin Modal datos de Direccion -->

	<!-- Fin Modal datos de editar Direccion -->
	<div class="modal fade" id="modal-directionEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content p-3">
				<div class="modal-header p-2 border-bottom-0">
					<div class="container">
						<div class="row">
						<div class="col-10 mb-0">
							<h4 class="modal-title text-secondary font-weight-bold" id="exampleModalLabel">Datos de dirección</h4>
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
								<h5 class="text-black font-weight-bold">Direccion Juridica</h5>
							</div>
						</div>
					</div>
					<form action="" method="POST" id="formEditDirectionModal">
						@csrf
						<div class="form">
							<div class="col">
								<select class="form-control-plaintext formularios__inputBorders" id="directionEditState" required name="state_id" >
									<option value="">Escoge un estado</option>
									@foreach($estados as $estado)
										<option value="{{$estado->id}}">{{$estado->state}}</option>
									@endforeach
								</select>
								<select class="form-control-plaintext formularios__inputBorders" id="directionEditCity"  required name="city_id" >
									<option value="">Escoge una ciudad</option>
									@foreach($ciudades as $ciudad)
										<option value="{{$ciudad->id}}">{{$ciudad->city}}</option>
									@endforeach
								</select>
								<select class="form-control-plaintext formularios__inputBorders" id="directionEditTownship" required name="township_id" >
									<option value="">Escoge un municipio</option>
									@foreach($municipios as $municipio)
										<option value="{{$municipio->id}}">{{$municipio->township}}</option>
									@endforeach
								</select>
							</div>
							<div class="col">
								<input type="text" class="form-control-plaintext formularios__inputBorders" id="directionEditPostalCode" required name="postal_code" placeholder="Codigo postal">
							</div>
							<div class="col">
								<input type="text" class="form-control-plaintext formularios__inputBorders" id="directionEditAddress" required name="address" placeholder="Dirección">
							</div>
							<div class="col">
								<input type="text" class="form-control-plaintext formularios__inputBorders" id="directionEditResponsable" required name="responsable" placeholder="Responsable">
							</div>
							<div class="col">
								<input type="text" class="form-control-plaintext formularios__inputBorders" id="directionEditResponsablePhone" required name="responsable_phone" placeholder="Telefono Oficina">
							</div>
							<div class="col text-center my-4 py-2">
								<p class="text-black font-weight-bold">Ruta de entrega sugerida</p>
								<select class="form-control-plaintext formularios__inputBorders" id="directionEditDeliveryRoute" required name="delivery_route_id" >
									<option value="">Escoge una ruta de entrega</option>
									@foreach($rutaEntregas as $rutaEntrega)
										<option value="{{$rutaEntrega->id}}">{{$rutaEntrega->name}}</option>
									@endforeach
								</select>
							</div>
							<div class="container">
								<div class="row mb-0 mt-4 pt-4">
									<button type="submit" class="btn btn-primary btn-block">Actualizar</button>
								</div>
								<div class="row">
								<p class="text-muted texto-small text-center">Al hacer click en actualizar usted confirma que los datos administrados son reales</p>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

<script>
	function addDirectionToEditModal({
		id,
		city_id,
		state_id,
		township_id,
		delivery_route_id,
		postal_code,
		responsable,
		responsable_phone,
		type,
		address
	}) 
	{
		// ELEMENTOS
		const editState = document.getElementById('directionEditState')
		const editCity = document.getElementById('directionEditCity')
		const editTownship = document.getElementById('directionEditTownship')
		const editDeliveryRoute = document.getElementById('directionEditDeliveryRoute')
		const editPostalCode = document.getElementById('directionEditPostalCode')
		const editAddress = document.getElementById('directionEditAddress')
		const editResponsable = document.getElementById('directionEditResponsable')
		const editResponsablePhone = document.getElementById('directionEditResponsablePhone')
		const form = document.getElementById('formEditDirectionModal')

		// ESTADO SELECCIONADO
		for(let i = 0; i < editState.children.length; i++) {

			if(editState.children[i].value == state_id) {
				editState.children[i].setAttribute('selected', "true")
			}
		}

		// CIUDAD SELECCIONADO
		for(let i = 0; i < editCity.children.length; i++) {

			if(editCity.children[i].value == city_id) {
				editCity.children[i].setAttribute('selected', "true")
			}
		}

		// MUNICIPIO SELECCIONADO
		for(let i = 0; i < editTownship.children.length; i++) {

			if(editTownship.children[i].value == township_id) {
				editTownship.children[i].setAttribute('selected', "true")
			}
		}

		// RUTA DE ENTREGA SELECCIONADA
		for(let i = 0; i < editDeliveryRoute.children.length; i++) {

			if(editDeliveryRoute.children[i].value == delivery_route_id) {
				editDeliveryRoute.children[i].setAttribute('selected', "true")
			}
		}

		// VALORES COMUNES
		editPostalCode.value = postal_code
		editAddress.value = address
		editResponsable.value = responsable
		editResponsablePhone.value = responsable_phone

		// ACTION FORM
		form.action = `/perfil/userShippingAddreses/update/${id}`
	}

	function misDatosInit() {
		const editarDirecciones = document.querySelectorAll('.perfilDirectionsEdit');


		if(editarDirecciones) {
			editarDirecciones.forEach(direccion => {

				direccion.addEventListener('click', e => {
					const [ , id] = e.target.id.split('directionEdit-');
					axios.get(`/perfil/get/address/${id}`)
						.then(res => {
							addDirectionToEditModal(res.data)
						})
						.catch(err => {
							console.log('Ha ocurrido un error: ', err)
						}); 
				})
				
			})
		}
	}

	document.addEventListener('DOMContentLoaded', () => {
		//inicializar JS en scope
		misDatosInit();
	})
</script>

@endsection