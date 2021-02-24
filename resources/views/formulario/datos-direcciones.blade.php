<section id="formulario3" class="formularios__sections hide show">
    
    <!-- Datos de usuario-->
    <section class="py-1">
      <!-- Number-->
      <div class="container">
          <div class="row p-1">
            <div class="formularios__numberWidth pt-1 pr-0 d-block d-md-none">
              <button id=btn_clr1 class="formularios__btnNumber bg-blue">
                <p class="text-white small">1</p>
              </button>
            </div>
            <div class="formularios__numberWidth pt-1 pr-0 d-md-none">
              <button id=btn_clr2 class="formularios__btnNumber bg-blue">
                <p class="text-white small">2</p>
              </button>
            </div>
            <div class="formularios__numberWidth pt-1 pr-0 col-md-1">
              <button class="formularios__btnNumber bg-primary">
                <p class="text-white small">3</p>
              </button>
            </div>
            <div class="col-6 d-flex align-items-center pl-3 col-md-11">
              <p class="font-weight-bold m-0 texto-small text-black">Datos de envío</p>
            </div>
          </div>
      </div>
      <!-- Fin Number-->
    @if ($direcciones->isNotEmpty())
		@foreach ($direcciones->take(1) as $direccion)
			
		
			<!-- trj datos de envio-->
			<div class="perfil__cardBody direccion" id="formAddressMain">
				<div class="info-container p-3 mb-1">
					<p class="font-weight-bold text-black texto-small">Direccion de Envio</p>
					<p class="font-weight-bold text-black px-3 pb-0 pt-2 texto-small" id="formDirectionType">{{$direccion->address}}</p>
					<p class="texto-small px-3 my-0 py-0 text-muted" id="formDirectionLocation">{{$direccion->state->state}}, {{$direccion->city->city}} ({{$direccion->postal_code}})</p>
					<p class="texto-small px-3 my-0 py-0 pb-2 text-muted" id="formDirectionResponsable">{{$direccion->responsable}} / {{$direccion->responsable_phone}}</p>
					<div class="row mb-1 py-2">
					<div class="col-6 pr-0">
						<p class="font-weight-bold text-black texto-small">Ruta de entrega</p>
					</div>
					<div class="col-6 text-md-center">
						<p class="texto-small pl-0 text-muted" id="formDirectionDeliveryRoute">{{$direccion->delivery_route->name}}</p>
					</div>
					</div>
					<div class="row pt-2 padding-modal">
					<div class="col-6 text-center">
						<a href="#" data-toggle="modal" data-target="#modal-directionChange" class="texto-small font-weight-bold text-secondary" id="formChangeAddress">Cambiar dirección de envío</a>
					</div>
					<div class="col-6 text-center">
						<a href="#" data-toggle="modal" data-target="#modal-directionEdit" class="texto-small font-weight-bold text-secondary">Nueva dirección</a>
					</div>
					</div>
				</div>
			</div>
		<!-- Fin trj datos de envio-->
		@endforeach
    @else 
      	{{-- si no exiten direcciones --}}
        <div class="perfil__cardBody direccion" id="formAddressMain">
          <div class="container p-5 text-center">
            <img src="{{asset('/images/void-03.svg')}}" alt="">
            <p class="perfil__cardListItem-content">Aun sin direcciones de envio...</p>
          </div>
          <div class="perfil__agregarDatos ">
            <a href="#" data-toggle="modal" data-target="#modal-directionEdit">Agregar nueva dirección</a>
          </div>
        </div>
    @endif

     

    </section>
    <!-- Fin Datos de usuario-->

    <!-- Buttoms-->
    <section class="my-0 py-3">
      <div class="container">
        <div class="row">
          <div class="col-5 pr-0">
            <button id="btn_prior2" class="btn btn-sm btn-block formularios__btn-left text-muted">Anterior</button>
          </div>
          <div class="col-7 pl-0">
            <form action="{{route('order.store')}}" id="formFinalizarCompra">
				<input type="hidden" value="{{$direcciones[0]->id ?? ''}}" name="address_id" id="finalizarCompraDireccionId">
				<button type="submit" class="btn btn-primary btn-sm btn-block formularios__btn-right" id="btn_finish" @if (!$direcciones->isNotEmpty()) disabled @endif>Finalizar Compra</button>
			</form>
          </div>
        </div>
      </div>
    </section>
    <!-- /Buttoms-->
  </section>
</div>


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
								<h5 class="text-black font-weight-bold">Dirección de envio</h5>
							</div>
						</div>
					</div>
					<form action="" id="formCreateAddress" method="POST">
						@csrf
						<div class="form">
							<div class="col">
								<input type="text" class="form-control-plaintext formularios__inputBorders" required name="type" placeholder="Tipo dirección [ej: Local principal]">
							</div>
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
								<p class="text-black font-weight-bold">Sugerencia de envío</p>
								<select class="form-control-plaintext formularios__inputBorders" required name="delivery_route_id" >
									<option value="">Sugiérenos una hora de entrega</option>
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

  
	<!-- Modal Cambiar direccion seleccionada -->
	<div class="modal fade" id="modal-directionChange" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content p-3">
				<div class="modal-header p-2 border-bottom-0">
					<div class="container">
						<div class="row">
						<div class="col-10 mb-0">
							<h4 class="modal-title text-secondary font-weight-bold" id="exampleModalLabel">Cambiar la dirección de Envio</h4>
							<p class="texto-small text-muted">Seleccione una de sus antiguas direcciones...</p>
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
								<h5 class="text-black font-weight-bold">Dirección de envio</h5>
							</div>
						</div>
					</div>
					<div class="form">
						<select class="form-control-plaintext formularios__inputBorders" required id="formDirectionAddreses" >
							<option value="" disabled>Seleccione una direccion</option>
						</select>
						<div class="container">
							<div class="row mb-0 mt-4 pt-4">
								<button type="submit" class="btn btn-primary btn-block" data-dismiss="modal" id="formButonChangeAddress">Cambiar dirección de envio</button>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<!-- Fin Modal datos de Direccion -->

<script>
	
	const $btn_next3 = document.getElementById('btn_finish');


	function compraFormDirection(){

		//------------------- FUNCIONES SCOPE ---------------------

		function addTypeAddressToSelect(addreses){

			const selectAddress = document.getElementById('formDirectionAddreses');
			selectAddress.innerHTML =  '';
			addreses.forEach(address => {
				const option = `<option value="${address.id}">${address.type}</option>`
				selectAddress.innerHTML += option;
			})
		}


		function showAddressInView({
			address,
			delivery_route,
			responsable,
			responsable_phone,
			postal_code,
			state: {state},
			city: {city}
		}) {
			const formAddress = document.getElementById('formDirectionType')
			const formLocation = document.getElementById('formDirectionLocation')
			const formResponsable = document.getElementById('formDirectionResponsable')
			const formDeliveryRoute = document.getElementById('formDirectionDeliveryRoute')

			formAddress.innerText = address
			formLocation.innerText = `${state}, ${city} (${postal_code})`
			formResponsable.innerText = `${responsable} / ${responsable_phone}`
			formDeliveryRoute.innerText = `${delivery_route.name}`
		}

		function addNewAddress(address){
			const mainContainer = document.getElementById('formAddressMain')

			if(mainContainer) {
				addLoaderInFormAddress(mainContainer)
				setTimeout(()=> {
					addNewAddressToView(mainContainer, address)
					$btn_next3.removeAttribute('disabled')
				}, 1500)
			}
			
		}

		function addLoaderInFormAddress(container){
			element = '<div class="loader">Loading...</div>'

			container.innerHTML = element;
		}

		function addNewAddressToView(container, {
			id,
			address,
			delivery_route,
			responsable,
			responsable_phone,
			postal_code,
			state: {state},
			city: {city}
		}) {
			const formAddressValue = document.getElementById('finalizarCompraDireccionId');
			const view = `
			<div class="info-container p-3 mb-1">
                <p class="font-weight-bold text-black texto-small">Direccion de Envio</p>
                <p class="font-weight-bold text-black px-3 pb-0 pt-2 texto-small" id="formDirectionType">${address}</p>
                <p class="texto-small px-3 my-0 py-0 text-muted" id="formDirectionLocation">${state}, ${city} (${postal_code})</p>
                <p class="texto-small px-3 my-0 py-0 pb-2 text-muted" id="formDirectionResponsable">${responsable} / ${responsable_phone}</p>
                <div class="row mb-1 py-2">
                  <div class="col-6 pr-0">
                    <p class="font-weight-bold text-black texto-small">Ruta de entrega</p>
                  </div>
                  <div class="col-6 text-md-center">
                    <p class="texto-small pl-0 text-muted" id="formDirectionDeliveryRoute">${delivery_route.name}</p>
                  </div>
                </div>
                <div class="row pt-2 padding-modal">
                  <div class="col-6 text-center">
                    <a href="#" data-toggle="modal" data-target="#modal-directionChange" class="texto-small font-weight-bold text-secondary" id="formChangeAddress">Cambiar dirección de envío</a>
                  </div>
                  <div class="col-6 text-center">
                    <a href="#" data-toggle="modal" data-target="#modal-directionEdit" class="texto-small font-weight-bold text-secondary">Nueva dirección</a>
                  </div>
                </div>
              </div>
			`

			container.innerHTML = view;
			formAddressValue.value = id
			reloadEvents();
		}

		//------------------------- RECARGAR EVENTOS -------------------------
		function reloadEvents(){
			const changeAddress = document.getElementById('formChangeAddress')
			const butonToSaveAddress = document.getElementById('formButonChangeAddress');
			direcciones = [];
			if(changeAddress) {
				changeAddress.addEventListener('click', () => {
				
				axios.get('/user/address')
					.then(res => {
						direcciones = res.data;
						addTypeAddressToSelect(direcciones)
						$btn_next3.removeAttribute('disabled')
					})
				})
			}
		}


		function loadEventsInAddressScope(){

			const changeAddress = document.getElementById('formChangeAddress')
			const butonToSaveAddress = document.getElementById('formButonChangeAddress');
			const formCreate = document.getElementById('formCreateAddress');
			direcciones = [];

			//------------------------- EVENTOS VISTA -------------------------

			if(changeAddress) {
				changeAddress.addEventListener('click', () => {
				
				axios.get('/user/address')
					.then(res => {
						direcciones = res.data;
						addTypeAddressToSelect(direcciones)
					})
				})
			}

			butonToSaveAddress.addEventListener('click', () => {
				const selectAddress = document.getElementById('formDirectionAddreses');
				const formAddressValue = document.getElementById('finalizarCompraDireccionId');
				const value = selectAddress.value
				
				//get address
				let direccion = direcciones.find(element => element.id == value)
				
				formAddressValue.value = direccion.id;
				showAddressInView(direccion)
			})

			formCreate.addEventListener('submit', (e) => {
				e.preventDefault();
				
				// form data
				const [ , type, stateId, cityId, townshipId, postalCode, address, responsable, responsablePhone, deliveryRouteId] = e.target
				
				// close modal
				$('#modal-directionEdit').modal('hide');
				
				axios.post(`/perfil/userShippingAddreses/add`, {
					type: type.value,
					state_id: stateId.value,
					city_id: cityId.value,
					township_id: townshipId.value,
					postal_code: postalCode.value,
					address: address.value,
					responsable: responsable.value,
					responsable_phone: responsablePhone.value,
					delivery_route_id: deliveryRouteId.value
				})
				.then(res => {
					e.target.reset();
					addNewAddress(res.data)
					$btn_next3.removeAttribute('disabled')
				})
				.catch(err => {
					console.log(err);
				});
			})
		}

		//------------------- STARTING SCRIPT ---------------------
		let direcciones;
		loadEventsInAddressScope();
		

	}	
	
	compraFormDirection();
</script>