@extends('layouts.main')

@section('content')

    @include('perfil.perfil_navMobile')

    <section class="perfil__container">
        @include('perfil.perfil_nav')
        <div class="perfil__body compras">
            <h2 class="perfil__body-title">Mis compras</h2>
            @if ($ordenes)
                @foreach ($ordenes as $orden)
                    {{-- tarjeta Por pagar --}}
                    <div class="perfil__cardBody compras">
                        <div class="perfil__comprasInfo">
                            <h2 class="perfil__comprasInfo-title  @if($orden->status_id >= 2 && $orden->status_id < 4 ) pendiente @endif @if($orden->status_id == 4 ) completed @endif  @if($orden->status_id == 5 ) canceled @endif  ">{{$orden->statusorder->status}}</h2>
                            <p class="perfil__comprasInfo-alert">{{$orden->statusOrder->msg}}</p>
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
                             <a href="#" data-id="{{$orden->id}}" data-toggle="modal" data-target="#modalCancelarOrden"  class="perfil__comprasActions-cancelar cancelarButton">Cancelar compra</a>
                             @endif
                             <a data-toggle="modal" data-id="{{$orden->id}}" data-target="#modal_DetalleOrden" class="perfil__comprasActions-detalle verDetalleOrden"> Ver detalle</a>
                        </div>
                    </div>
                    {{--  Fin Por pagar --}}
                @endforeach     
            @else
                <h2>Sin Pedidos...</h2>
            @endif

            <div class="perfil__comprasPaginacion">
                {{$ordenes->links()}}
            </div>
        </div>
    </section>
    
    <style>
        .perfil__comprasCompletado {
            width:112px;
            height: 25px;
            background: #34A853;
            color:white;
            font-weight: bold;
            padding: 2px;
            text-align: center;
            border-radius: 12px;
        }
        .perfil__comprasPill {
            display: flex;
            justify-content: flex-end;
        }
        .img {
            width: 55px;
            height: 55px;
        }
        .perfil__comprasDetalle {
            background: #E5E5E5;
            
        }
        .perfil__comprasTextProducts{
            font-family:'Roboto';
            color: #6c757d;
            font-size:0.8rem;
        }

        .perfil__comprasWidth {
            flex: 14%;
            max-width: 14%;
            display: flex;
            align-items: center;
        }
        .perfil__comprasWidthProduct {
            flex: 38%;
            max-width: 38%;
            display: flex;
            align-items: center;
        }
        .perfil__comprasWidthImg {
            flex: 16%;
            max-width: 16%;
            display: flex;
            align-items: center;
        }
        .perfil_comprasProducts {
            border-bottom: 2px solid #cecece;
            background: white;
            
        }
        .perfil__comprasTotal {
            font-size:1.25rem;
        }
        .perfil__comprasFilasTotal {
            line-height: 2rem;
            padding: 0;
            margin:0;
        }
        @media(max-width:768px) {
            .perfil__comprasWidth {
                flex: 16%;
                max-width: 16%;
            }
            .perfil__comprasWidthProduct {
                flex: 32%;
                max-width: 32%;
            }
            .perfil__comprasWidthImg {
                flex: 20%;
                max-width: 20%;
            }
        }

        @media (min-width: 576px){
            .modal-dialog {
                max-width: 445px;
            }
        }

        .perfil__comprasBtnModal {
            font-weight:bold;
            padding:12px;
        }

    </style>

    
    {{-- modal de detalles --}}
	<div class="modal fade" id="modal_DetalleOrden" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content py-3 px-2 perfil__comprasDetalle">
                {{-- Header del modal --}}
				<div class="modal-header p-2 border-bottom-0">
					<div class="container">
                        <div class="row">
                            <div class="col-12 perfil__comprasPill">
                                <div class="perfil__comprasCompletado" id="ordenDetailModalStatusMain">
                                    <p id="ordenDetailModalStatus">Completado</p>
                                </div>
                                <button type="button" class="close m-0 py-0 pr-0 pl-2" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">X</span>
                                </button> 
                            </div> 
                        </div>
						<div class="row py-3">
                            <div class="col-12 mb-0">
                                <h4 class="text-secondary font-weight-bold" id="exampleModalLabel">Detalle de pedido</h4>
                                <p class="texto-small text-muted pt-1" id="ordenDetailModalStatusInfo">Este pedido fue completado con exito...</p>
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
                    <div class="form pb-3">
                        <div class="col">
                            <p class="text-muted"><b>ID:</b> <span id="ordenDetailModalId">000000254</span></p>
                            <p class="text-muted"><b>Fecha:</b> <span id="ordenDetailModalFecha">000000254</span> </p>
                            <p class="text-muted"><b>Ultima modificacion:</b> <span id="ordenDetailModalUpdated">000000254</span></p>
                            <p class="text-muted"><b>Monto:</b> <span id="ordenDetailModalTotal">000000254</span></p>
                        </div>
                    </div>
                    {{-- datos de envio --}}
                    <div class="form-title container pb-2">
						<div class="row">
						<div class="col text-left">
							<h5 class="font-weight-bold">Dirección envío</h5>
						</div>
						</div>
					</div>
                    <div class="perfil__cardDireccion pb-3">
                        <p class="text-muted"><b id="ordenDetailModalDireccion-address">Calle 1 Avenida 10 Local 45</b></p>
                        <p class="text-muted" id="ordenDetailModalDireccion-localidad">Carabobo, Valencia (2001)</p>
                        <p class="text-muted" id="ordenDetailModalDireccion-responsable">Carlos Maita - +58 414 453 3456</p>
                    </div>
                    <div class="form-title container pb-2">
						<div class="row">
						<div class="col text-left">
							<h5 class="font-weight-bold">Rutas de entrega</h5>
						</div>
						</div>
					</div>
                    <div class="form">
                        <div class="col pb-2">
                            <p class="text-muted"><b>Ruta:</b> <span id="ordenDetailModalDireccion-delivery">Valencia, Lunes 08:00 AM</span></p>
                        </div>
                    </div>
                    <hr class="">
                    <div class="container form-title pb-2">
						<div class="row pb-3">
                            <div class="col text-left">
                                <h5 class="font-weight-bold">Listado de Productos</h5>
                            </div>
						</div>
                        <div class="row px-2">
                            <div class="perfil__comprasWidthImg pl-0 font-weight-bold">Imagen</div>
                            <div class="perfil__comprasWidthProduct pl-0 font-weight-bold">Productos</div>
                            <div class="perfil__comprasWidth font-weight-bold">Cant.</div>
                            <div class="perfil__comprasWidth font-weight-bold">Precio</div>
                            <div class="perfil__comprasWidth font-weight-bold justify-content-center">Total</div>
                        </div>
                         
                        <div id="perfil__comprasBodyProductsMainContainer">
                             
                            <div class="perfil__comprasBodyProducts pb-1 px-2">
                                <div class="row perfil_comprasProducts">
                                    <div class="perfil__comprasWidthImg pl-0"><img class="img" src="{{asset('images/productos/aceite2.png')}}" alt="Producto"></div>
                                    <div class="perfil__comprasWidthProduct pl-0"><p class="perfil__comprasTextProducts">Leche descremada</p></div>
                                    <div class="perfil__comprasWidth"><p class="perfil__comprasTextProducts">100</p></div>
                                    <div class="perfil__comprasWidth"><p class="perfil__comprasTextProducts">10.00</p></div>
                                    <div class="perfil__comprasWidth justify-content-center"><p class="perfil__comprasTextProducts">1000</p></div>
                                </div>
                            </div>
                        </div>
                        
					</div> 
                        <div class="container">
                          <div class="row perfil__comprasFilasTotal">
                            <div class="col-6 text-left mb-0">
                              <p class="text-muted">Subtotal</p>
                            </div>
                            <div class="col-6 text-right mb-0">
                              <p class="text-muted" id="ordenDetailModalSubTotal">59,35 $</p>
                            </div>
                          </div>
                          <div class="row perfil__comprasFilasTotal">
                            <div class="col-6 text-left mb-1">
                              <p class="text-muted">IVA</p>
                            </div>
                            <div class="col-6 text-right mb-1">
                              <p class="text-muted" id="ordenDetailModalIva">11,65 $</p>
                            </div>
                          </div>
                          <div class="row perfil__comprasFilasTotal">
                            <div class="col-6 text-left mb-0">
                              <p class="text-uppercase text-secondary font-weight-bold perfil__comprasTotal">Total</p>
                            </div>
                            <div class="col-6 text-right mb-0">
                              <p class="font-weight-bold text-black perfil__comprasTotal" id="ordenDetailModalTotalAmount">70,35 $</p>
                            </div>
                          </div>
                          <div class="row perfil__comprasFilasTotal">
                            <div class="col-5 text-left mb-0">
                              <p class="text-secondary">TOTAL (Bs)</p>
                            </div>
                            <div class="col-7 text-right mb-0">
                              <p class="font-weight-bold text-black" id="ordenDetailModalTotalBolivares">89,000,000.00 Bs</p>
                            </div>
                          </div>
                        </div>


                        <div class="modal-footer"> 
                          <button type="button" class="btn btn-primary btn-block perfil__comprasBtnModal" data-dismiss="modal">Volver</button>
                        </div>     
				</div>

			</div>
		</div>
	</div>
	<!-- Fin Modal datos de empresa -->

    <!-- Modal Cancelar orden -->

    <div class="modal fade" id="modalCancelarOrden" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Cancelar compra</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <h5>¿Seguro que desea cancelar su orden?</h5>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <form action="" id="cancelarOrdenForm" method="POST">
                  @csrf
                <button type="submit" class="btn btn-danger">Cancelar orden</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    
<script>
    function verMisCompras(){
        async function getOrdenDetails(id) {
           return axios.get(`/order/Detail/${id}`)
                .then(res => {
                    return res.data
                })
                .catch(err => {
                    return err
                }) 
        }

        function modalAddressView(address) {
            //DATA DESESTRUCTURADA
            const { city: { city }, state: { state }, delivery_route, postal_code, responsable, responsable_phone } = address;
            
            // ELEMENTOS MODAL
            const ordenAddress = document.getElementById('ordenDetailModalDireccion-address');
            const ordenAddresLocalidad =document.getElementById('ordenDetailModalDireccion-localidad');
            const ordenAddressResponsable = document.getElementById('ordenDetailModalDireccion-responsable');
            const ordenAddresDelivery = document.getElementById('ordenDetailModalDireccion-delivery');

            //AGREGAR DATA
            ordenAddress.textContent = `${address.address}`;
            ordenAddresLocalidad.textContent = `${state}, ${city} (${postal_code})`
            ordenAddressResponsable.textContent = `${responsable} - ${responsable_phone}`
            ordenAddresDelivery.textContent = `${delivery_route.name}`
        }

        function modalProductsView(products){
            //PRODUCTS 
            const productsDetailContainer = document.getElementById('perfil__comprasBodyProductsMainContainer');
            productsDetailContainer.innerHTML = '';

            products.forEach(product => {
                const { detailTotalAmount, img, productPrice, productQuantity, title } = product

                const template = `
                <div class="perfil__comprasBodyProducts pb-1 px-2">
                    <div class="row perfil_comprasProducts">
                        <div class="perfil__comprasWidthImg pl-0"><img class="img" src="/storage/${img}" alt="Producto"></div>
                        <div class="perfil__comprasWidthProduct pl-0"><p class="perfil__comprasTextProducts">${title}</p></div>
                        <div class="perfil__comprasWidth"><p class="perfil__comprasTextProducts">${productQuantity}</p></div>
                        <div class="perfil__comprasWidth"><p class="perfil__comprasTextProducts">${productPrice} $</p></div>
                        <div class="perfil__comprasWidth justify-content-center"><p class="perfil__comprasTextProducts">${detailTotalAmount} $</p></div>
                    </div>
                </div>  
                `
                productsDetailContainer.innerHTML+= template
            })
        }

        function modalTotalAmountView(totalAmount) {
            //DATA DESESTRUCTURADA
            const { total, subTotal, iva, totalBolivar } = totalAmount;
            console.log(subTotal);
                //TOTAL ELEMENTS
            const modalTotal = document.getElementById('ordenDetailModalTotalAmount');
            const modalIva = document.getElementById('ordenDetailModalIva');
            const modalSubTotal = document.getElementById('ordenDetailModalSubTotal');
            const modalTotalBolivares = document.getElementById('ordenDetailModalTotalBolivares');


                //AGREGAR DATA
            modalTotal.textContent = `${total} $`;
            modalIva.textContent = `${iva.toFixed(2)} $`;
            modalSubTotal.textContent = `${subTotal} $`
            modalTotalBolivares.textContent = `${totalBolivar} Bs`
        }

        function modalOrdenDataView(order) {
            //DATA DESESTRUCTURADA
            const { id, created_at, updated_at, total_amount } = order;

            // ELEMENTOS MODAL
            const ordenId = document.getElementById('ordenDetailModalId');
            const ordenFecha = document.getElementById('ordenDetailModalFecha');
            const ordenUpdated =document.getElementById('ordenDetailModalUpdated');
            const ordenTotal =document.getElementById('ordenDetailModalTotal');

            //AGREGAR DATA A LA VISTA 
            ordenId.textContent = `#${id}`
            ordenFecha.textContent = `${created_at}`;
            ordenUpdated.textContent = `${updated_at}`;
            ordenTotal.innerText = `${total_amount} $`;
        }

        function modalOrdenStatusView({ status, msg, color, background }) {
            
            //ELEMENTOS MODAL
            const ordenModalStatusMain = document.getElementById('ordenDetailModalStatusMain');
            const ordenModalStatus = document.getElementById('ordenDetailModalStatus');
            const ordenModalStatusInfo = document.getElementById('ordenDetailModalStatusInfo');

            //AGREGAR DATA
            ordenModalStatus.textContent = `${status}`;
            ordenModalStatusInfo.textContent = `${msg}`

            //STYLE STATUS CONTAINER
            ordenModalStatusMain.style.backgroundColor = `${background}`;
            ordenModalStatusMain.style.color = `${color}`;
        }

        function addOrdenDataToModal({
            address,
            order,
            status,
            orderDetails,
            orderTotalAmount
        }) {
                
                //STATUS ORDER
            modalOrdenStatusView(status)

                //STEP 1
            modalOrdenDataView(order)

                //STEP 2
            modalAddressView(address)

                //STEP 3
            modalProductsView(orderDetails)

                //STEP 4
            modalTotalAmountView(orderTotalAmount)

        }

        const detalleButtons = document.querySelectorAll('.verDetalleOrden');
        const cancelarButton = document.querySelectorAll('.cancelarButton');

        if(detalleButtons) {
            detalleButtons.forEach(button => {
                button.addEventListener('click', async (e) => {
                    
                    try {

                        const ordenId = e.target.dataset.id
                        orden = await getOrdenDetails(ordenId)
                        addOrdenDataToModal(orden)

                    } catch (error) {
                        console.log(error)
                    }
                    
                })
            })
        }

        if(cancelarButton) {
            cancelarButton.forEach(button => {
                button.addEventListener('click', (e) => {
                    const form = document.getElementById('cancelarOrdenForm');
                    const id = e.target.dataset.id;

                    form.action = `/cancelar/orden/${id}`;
                })
            })
        }
    }

    document.addEventListener('DOMContentLoaded', () => {
        //FUNCTION SCOPE
        verMisCompras()
    })
</script>



   
@endsection