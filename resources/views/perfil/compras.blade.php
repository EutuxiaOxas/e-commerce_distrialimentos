@extends('layouts.main')

@section('content')

    @include('perfil.perfil_navMobile')

    <section class="perfil__container">
        @include('perfil.perfil_nav')
        <div class="perfil__body compras">
            <h2 class="perfil__body-title">Mis compras</h2>
            @if ($ordenes)
                @foreach ($ordenes->take(5) as $orden)
                    {{-- tarjeta Por pagar --}}
                    <div class="perfil__cardBody compras">
                        <div class="perfil__comprasInfo">
                            <h2 class="perfil__comprasInfo-title  @if($orden->status_id >= 2 && $orden->status_id < 4 ) pendiente @endif @if($orden->status_id == 4 ) completed @endif  @if($orden->status_id == 5 ) canceled @endif  ">{{$orden->statusorder->status}}</h2>
                            <p class="perfil__comprasInfo-alert">{{$orden->statusorder->msg}}</p>
                            <div class="perfil__comprasInfoDetails">
                                <p class="perfil__comprasInfoDetails-info id">ID: {{str_pad($orden->id, 9, '0', STR_PAD_LEFT)}}</p>
                                <p class="perfil__comprasInfoDetails-info date">Fecha: {{$orden->created_at}}</p>
                            </div>
                        </div>
                        
                        <div class="perfil__comprasMount">
                            <h3 class="perfil__comprasMount-title">Monto: {{$orden->total_amount}},00 USD</h3>
                            <p class="perfil__comprasMount-mount">Monto: {{($orden->total_amount)*($tasa_bs_dolar->value)}},00 BS</p>
                        </div>
                        
                        <div class="perfil__comprasActions">
                            @if($orden->status_id =='1' )
                             <a href="#" class="perfil__comprasActions-cancelar">Cancelar compra</a>
                             @endif
                             <a data-toggle="modal" data-target="#modal_DetalleOrden" class="perfil__comprasActions-detalle"> Ver detalle</a>
                        </div>
                    </div>
                    {{--  Fin Por pagar --}}
                @endforeach     
            @else
                <h2>Sin Pedidos...</h2>
            @endif

            
            <div class="perfil__cardMasCompras">
                <a class="perfil__cardMasCompras-option" href="#">Ver mas compras</a>
            </div>
        </div>
    </section>
    
    
    {{-- modal de detalles --}}
	<div class="modal fade" id="modal_DetalleOrden" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content p-3">
                {{-- Header del modal --}}
				<div class="modal-header p-2 border-bottom-0">
					<div class="container">
						<div class="row">
						<div class="col-10 mb-0">
							<h4 class="text-secondary font-weight-bold" id="exampleModalLabel">Detalle de pedido</h4>
							<p class="texto-small texto-muted">Este pedido fue completado con exito...</p>
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
                    {{-- datos de pedido --}}
					<div class="form-title container pb-2">
						<div class="row">
						<div class="col text-left">
							<h5 class="font-weight-bold">Datos de pedido</h5>
						</div>
						</div>
					</div>
                    <div class="form">
                        <div class="col">
                            <p class="text-muted"><b>ID:</b> 000000254</p>
                            <p class="text-muted"><b>Fecha:</b> 000000254</p>
                            <p class="text-muted"><b>Ultima modificacion:</b> 000000254</p>
                            <p class="text-muted"><b>Monto:</b> 000000254</p>
                        </div>
                    </div>
                    {{-- datos de envio --}}
                    <div class="form-title container pb-2">
						<div class="row">
						<div class="col text-left">
							<h5 class="font-weight-bold">Datos de pedido</h5>
						</div>
						</div>
					</div>
                    <div class="perfil__cardDireccion">
                        <p class="text-muted"><b>Calle 1 Avenida 10 Local 45</b></p>
                        <p class="text-muted">Carabobo, Valencia (2001)</p>
                        <p class="text-muted">Carlos Maita - +58 414 453 3456</p>
                    </div>
                    <div class="form-title container pb-2">
						<div class="row">
						<div class="col text-left">
							<h5 class="font-weight-bold">Rutas de entrega</h5>
						</div>
						</div>
					</div>
                    <div class="form">
                        <div class="col">
                            <p class="text-muted"><b>Ruta:</b> Valencia, Lunes 08:00 AM</p>
                        </div>
                    </div>
                    <hr>
                    <div class="form-title container pb-2">
						<div class="row">
						<div class="col text-left">
							<h5 class="font-weight-bold">Lista de Productos</h5>
						</div>
						</div>
					</div>      
                    
				</div>

			</div>
		</div>
	</div>
	<!-- Fin Modal datos de empresa -->

@endsection