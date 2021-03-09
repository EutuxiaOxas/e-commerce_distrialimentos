<section id="formulario2" class="formularios__sections hide show">           
  <!-- Datos de empresa-->
  <section class="py-1">
    <!-- Numbers-->                                          
    <div class="container">
      <div class="row p-1">
        <div class="formularios__numberWidth pt-1 pr-0 d-block d-md-none">
          <button id="btn_clr" class="formularios__btnNumber bg-blue">
            <p class="text-white small">1</p>
          </button>
        </div>
        <div class="formularios__numberWidth pt-1 pr-0 col-md-1">
          <button class="formularios__btnNumber bg-primary">
            <p class="text-white small">2</p>
          </button>
        </div>
        <div class="col-8 d-flex align-items-center pl-3 col-md-11">
          <p class="font-weight-bold m-0 texto-small text-black">Datos de facturación</p>
        </div>
      </div>
    </div>
    <!-- Fin Numbers-->


  	@if($empresa)
          <!-- trj 1 datos de empresa-->
          <div class="container mt-1">
            <div class="border shadow mb-3" id="formEnterpriseContainer">
              <div class="info-container p-3">
                <div class="row mb-3">
                  <div class="col-6">
                    <p class="text-black font-weight-bold texto-small">Empresa/ Nombre</p>
                  </div>
                  <div class="col-6">
                    <p class="texto-small text-right text-muted">{{$empresa->name}}</p>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-6">
                    <p class="text-black font-weight-bold texto-small">R.I.F/ C.I</p>
                  </div>
                  <div class="col-6">
                    <p class="texto-small text-right text-muted">R.I.F {{$empresa->RIF}}</p>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-6">
                    <p class="text-black font-weight-bold texto-small">SADA (Opcional)</p>
                  </div>
                  <div class="col-6">
                    <p class="texto-small text-right text-muted">{{$empresa->SADA}}</p>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-6">
                    <p class="text-black font-weight-bold texto-small">Horario de atención</p>
                  </div>
                  <div class="col-6">
                    <p class="texto-small text-right text-muted">{{$empresa->getOperationTime()}}</p>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-6">
                    <p class="text-black font-weight-bold texto-small">Direccion Jurídica</p>
                  </div>
                  <div class="col-6">
                    <p class="font-weight-bold text-black texto-small text-right">{{$empresa->legal_address}}</p>
                    <p class="texto-small text-muted text-right">{{$empresa->state->state}}, {{$empresa->city->city}} ({{$empresa->postal_code}})</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12 text-center padding_modal">
                    <a href="#" data-toggle="modal" data-target="#modal-facturation_edit" class="texto-small font-weight-bold text-secondary">Editar datos de empresa</a>
                  </div>
                </div>
              </div>
            </div>
        </div>
    @else
        	{{-- si no exite la empresa --}}
				<div class="perfil__cardBody direccion" id="formEnterpriseContainer">
					<div class="container p-5 text-center">
						<img src="{{asset('/images/void-02.svg')}}" alt="">
						<p class="perfil__cardListItem-content">Aun sin datos de facturación...</p>
					</div>
					<div class="perfil__agregarDatos ">
						<a href="#" data-toggle="modal" data-target="#modal-facturation_edit">Agregar los datos de empresa</a>
					</div>
				</div>
    @endif
   
  </section>
  <!-- Fin Datos de empresa-->
  <!-- Buttoms-->
  <section class="my-0 pt-3">
    <div class="container">
      <div class="row">
        <div class="col-5 pr-0">
          <button id="btn_prior1" class="btn btn-sm btn-block formularios__btn-left text-muted">Anterior</button>
        </div>
        <div class="col-7 pl-0">
          <button id="btn_next2" class="btn btn-primary btn-sm btn-block formularios__btn-right" @if(!$empresa) disabled @endif>Siguiente</button>
        </div>
      </div>
    </div>
  </section>
  <!-- /Buttoms-->
</section>

<!-- Modal editar datos empresa--> 
<div class="modal fade" id="modal-facturation_edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content p-3">
      <div class="modal-header p-2 border-bottom-0">
        <div class="container">
          <div class="row">
            <div class="col-10 mb-0">
              <h4 class="modal-title text-secondary font-weight-bold" id="exampleModalLabel">Datos de facturación</h4>
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
        <form action="{{route('user.enterprise.update')}}" id="formEditOrCreateEnterprise" method="POST">
          @csrf
          <div class="form">
            <div class="col">
              <input type="text" class="form-control-plaintext formularios__inputBorders" value="{{$empresa->name ?? ''}}" required  name="name" placeholder="Nombre de empresa/ Usuario">
            </div>
            <div class="col">
              <input type="text" class="form-control-plaintext formularios__inputBorders" value="{{$empresa->RIF ?? ''}}"  required name="RIF" placeholder="RIF/ C.I">
            </div>
            <div class="col">
              <input type="text" class="form-control-plaintext formularios__inputBorders" value="{{$empresa->legal_address ?? ''}}"  required name="legal_address" placeholder="Direccion legal [ej: Avenida Bolivar, calle 132, local #23]">
            </div>
            <div class="col">
              <input type="text" class="form-control-plaintext formularios__inputBorders" value="{{$empresa->postal_code ?? ''}}"  required name="postal_code" placeholder="Código postal [ej: 2002]">
            </div>
            <div class="col">
              <input type="text" class="form-control-plaintext formularios__inputBorders" value="{{$empresa->SADA ?? ''}}"  required name="SADA" placeholder="SADA (Opcional)">
            </div>
            <div class="col mb-3">
              <select class="form-control-plaintext formularios__inputBorders" id="modalEmpresaEstados"  required name="state_id" >
                <option value="">Escoge un estadoss</option>
                @foreach($estados as $estado)
                  <option value="{{$estado->id}}" 
                    @if(isset($empresa))
                      {{$empresa->state->id == $estado->id ? 'selected' : ''}}
                    @endif
                    >{{$estado->state}}</option>
                @endforeach
              </select>
              <select class="form-control-plaintext formularios__inputBorders" id="modalEmpresaCiudades" required name="city_id" >
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
            <div class="row mb-1">
              <button type="submit" class="btn btn-primary btn-block formulario__modalBtn">
                @if(isset($empresa))
                  {{'Editar'}}
                @else
                  {{'Agregar'}}
                @endif
              </button>
            </div>
            <div class="row">
              <p class="text-muted small text-center">Al hacer click en continuar usted confirma que los datos administrados son reales</p>
            </div>
          </div>
        </form>                                      
      </div>
    </div>
  </div>
</div>

<!-- Modal de direccion juridica-->  
<div class="modal fade" id="modal-direction" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
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
              <input type="text" class="form-control-plaintext formularios__inputBorders" placeholder="Codigo postel">
            </div>
            <div class="col">
              <input type="text" class="form-control-plaintext formularios__inputBorders" placeholder="Dirección">
            </div>
            <div class="col">
              <input type="text" class="form-control-plaintext formularios__inputBorders" placeholder="Responsable">
            </div>
            <div class="col">
              <input type="text" class="form-control-plaintext formularios__inputBorders" placeholder="Telefono Oficina">
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

	<!-- Modal datos de empresa -->
	<div class="modal fade" id="modal_FacturationEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content p-3">
				<div class="modal-header p-2 border-bottom-0">
					<div class="container">
						<div class="row">
						<div class="col-10 mb-0">
							<h4 class="text-secondary font-weight-bold" id="exampleModalLabel">Datos de facturación</h4>
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
					<form action="{{route('user.enterprise.update')}}" id="" method="POST">
						@csrf
						<div class="form">
						<div class="col">
							<input type="text" class="form-control-plaintext formularios__inputBorders" required required name="name" placeholder="Nombre de empresa/Usuario">
						</div>
						<div class="col">
							<input type="text" class="form-control-plaintext formularios__inputBorders" required required name="RIF" placeholder="RIF/ C.I">
						</div>
						<div class="col">
							<input type="text" class="form-control-plaintext formularios__inputBorders" required required name="legal_address" placeholder="Direccion legal [ej: Avenida Bolivar, calle 132, local #23]">
						</div>
						<div class="col">
							<input type="text" class="form-control-plaintext formularios__inputBorders" required required name="postal_code" placeholder="Código postal [ej: 2002]">
						</div>
						<div class="col">
							<input type="text" class="form-control-plaintext formularios__inputBorders" required required name="SADA" placeholder="SADA (Opcional)">
						</div>
						<div class="col mb-3">
							<select class="form-control-plaintext formularios__inputBorders"  required required name="state_id" >
								<option value="">Escoge un estados</option>
								@foreach($estados as $estado)
									<option value="{{$estado->id}}">{{$estado->state}}</option>
								@endforeach
							</select>
							<select class="form-control-plaintext formularios__inputBorders" required required name="city_id" >
								<option value="">Escoge una ciudad</option>
								@foreach($ciudades as $ciudad)
									<option value="{{$ciudad->id}}">{{$ciudad->city}}</option>
								@endforeach
							</select>
						</div>
						<div class="col form-group my-4 py-4">
							<h5 class="mt-2 pt-2 font-weight-bold">Horario de atención <small>(apertura - cierre)</small></h5>
							<input type="time" class="form-control-plaintext formularios__inputBorders" required required name="opening_time">
							<input type="time" class="form-control-plaintext formularios__inputBorders" required required name="closing_time">
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
  <script>
    function compraFormEnterprise() {


      function addLoader(container) {
        element = '<div class="loader">Loading...</div>';
        container.innerHTML = element;
      }

      function addEnterpriseInfoToView(container, time, {
        RIF,
        SADA,
        city: {city},
        state: {state},
        name,
        postal_code,
        legal_address,
      }){ 
        const view = `
              <div class="info-container p-3">
                <div class="row mb-3">
                  <div class="col-6">
                    <p class="text-black font-weight-bold texto-small">Empresa</p>
                  </div>
                  <div class="col-6">
                    <p class="texto-small text-right text-muted">${name}</p>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-6">
                    <p class="text-black font-weight-bold texto-small">R.I.F</p>
                  </div>
                  <div class="col-6">
                    <p class="texto-small text-right text-muted">R.I.F ${RIF}</p>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-6">
                    <p class="text-black font-weight-bold texto-small">SADA</p>
                  </div>
                  <div class="col-6">
                    <p class="texto-small text-right text-muted">${SADA}</p>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-6">
                    <p class="text-black font-weight-bold texto-small">Horario de atención</p>
                  </div>
                  <div class="col-6">
                    <p class="texto-small text-right text-muted">${time}</p>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-6">
                    <p class="text-black font-weight-bold texto-small">Direccion Jurídica</p>
                  </div>
                  <div class="col-6">
                    <p class="font-weight-bold text-black texto-small text-right">${legal_address}</p>
                    <p class="texto-small text-muted text-right">${state}, ${city} (${postal_code})</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12 text-center padding_modal">
                    <a href="#" data-toggle="modal" data-target="#modal-facturation_edit" class="texto-small font-weight-bold text-secondary">Editar datos de empresa</a>
                  </div>
                </div>
              </div>
        `
        container.innerHTML = view;
      }


      function addCitiesToSelect(cities, container){
		
        if(cities.length) {
          container.innerHTML = '<option>Escoge una ciudad</option>'
          cities.forEach(city => {
            template = `
              <option value="${city.id}">
                ${city.city}
              </option>
            `

            container.innerHTML += template;
          })
        }else {
          container.innerHTML = '<option>No hay ciudades disponibles</option>'
        }
      }




      const formEnterprise = document.getElementById('formEditOrCreateEnterprise');
      const enterpriseContainer = document.getElementById('formEnterpriseContainer');
      const $btn_next2 = document.getElementById('btn_next2');


      //ESTADOS
        const modalEmpresEstados = document.getElementById('modalEmpresaEstados');
      //CIUDADES
      const modalEmpresCiudades = document.getElementById('modalEmpresaCiudades');
      

      formEnterprise.addEventListener('submit', (e) => {
        e.preventDefault();
        
        // form data
        const [, name, rif, legalAddress, postalCode, sada, stateId, cityId, openingTime, closingTime] = e.target

        addLoader(enterpriseContainer);

        //close modal
        $('#modal-facturation_edit').modal('hide');

        axios.post(`/perfil/userEnterprise/update`, {
          name: name.value,
          RIF: rif.value,
          legal_address: legalAddress.value,
          postal_code: postalCode.value,
          SADA: sada.value,
          state_id: stateId.value,
          city_id: cityId.value,
          opening_time: openingTime.value,
          closing_time: closingTime.value
        })
        .then(res => {
          const {enterprise, time} = res.data;
          setTimeout(() => {
            addEnterpriseInfoToView(enterpriseContainer, time, enterprise)
            $btn_next2.removeAttribute('disabled')
          }, 2000)
        })
        .catch(err => {
          console.log(err);
        }) 

      })
    
      modalEmpresEstados.addEventListener('change', (e) => {
        const estadoId = e.target.value

        axios.get(`/cities/${estadoId}`)
				.then(res => {
					addCitiesToSelect(res.data, modalEmpresCiudades)
				})
				.catch(err => {
					console.log(err)
				});
      })
    }

    //scope function
    compraFormEnterprise();
  </script>