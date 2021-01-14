@extends('layouts.main')

@section('content')

    @include('perfil.perfil_navMobile')

    <section class="perfil__container">
        @include('perfil.perfil_nav')
        <div class="perfil__body compras">
            <h2 class="perfil__body-title">Mis compras</h2>
            <div class="perfil__cardBody compras">

                <div class="perfil__comprasInfo">
                    <h2 class="perfil__comprasInfo-title">Por pagar</h2>
                    <p class="perfil__comprasInfo-alert">Realice el pago los mas pronto posible...</p>
                    <div class="perfil__comprasInfoDetails">
                        <p class="perfil__comprasInfoDetails-info id">ID: 0000000001</p>
                        <p class="perfil__comprasInfoDetails-info date">Fecha:  21 diciembre  2020</p>
                    </div>
                </div>

                <div class="perfil__comprasMount">
                    <h3 class="perfil__comprasMount-title">Monto: 400,00 USD</h3>
                    <p class="perfil__comprasMount-mount">Monto: 700.000.000,00 BS</p>
                </div>

                <div class="perfil__comprasActions">
                    <a href="#" class="perfil__comprasActions-cancelar">Cancelar compra</a>
                    <a href="#" class="perfil__comprasActions-detalle"> Ver detalle</a>
                </div>
            </div>
            <div class="perfil__cardBody compras">

                <div class="perfil__comprasInfo">
                    <h2 class="perfil__comprasInfo-title pendiente">Por empaquetar</h2>
                    <p class="perfil__comprasInfo-alert">Realice el pago los mas pronto posible...</p>
                    <div class="perfil__comprasInfoDetails">
                        <p class="perfil__comprasInfoDetails-info id">ID: 0000000001</p>
                        <p class="perfil__comprasInfoDetails-info date">Fecha:  21 diciembre  2020</p>
                    </div>
                </div>

                <div class="perfil__comprasMount">
                    <h3 class="perfil__comprasMount-title">Monto: 400,00 USD</h3>
                    <p class="perfil__comprasMount-mount">Monto: 700.000.000,00 BS</p>
                </div>

                <div class="perfil__comprasActions completed">
                    <a href="#" class="perfil__comprasActions-detalle"> Ver detalle</a>
                </div>
            </div>
            <div class="perfil__cardBody compras">

                <div class="perfil__comprasInfo">
                    <h2 class="perfil__comprasInfo-title pendiente">Enviado</h2>
                    <p class="perfil__comprasInfo-alert">Realice el pago los mas pronto posible...</p>
                    <div class="perfil__comprasInfoDetails">
                        <p class="perfil__comprasInfoDetails-info id">ID: 0000000001</p>
                        <p class="perfil__comprasInfoDetails-info date">Fecha:  21 diciembre  2020</p>
                    </div>
                </div>

                <div class="perfil__comprasMount">
                    <h3 class="perfil__comprasMount-title">Monto: 400,00 USD</h3>
                    <p class="perfil__comprasMount-mount">Monto: 700.000.000,00 BS</p>
                </div>

                <div class="perfil__comprasActions completed">
                    <a href="#" class="perfil__comprasActions-detalle"> Ver detalle</a>
                </div>
            </div>
            <div class="perfil__cardBody compras">

                <div class="perfil__comprasInfo">
                    <h2 class="perfil__comprasInfo-title completed">Completado</h2>
                    <p class="perfil__comprasInfo-alert">Realice el pago los mas pronto posible...</p>
                    <div class="perfil__comprasInfoDetails">
                        <p class="perfil__comprasInfoDetails-info id">ID: 0000000001</p>
                        <p class="perfil__comprasInfoDetails-info date">Fecha:  21 diciembre  2020</p>
                    </div>
                </div>

                <div class="perfil__comprasMount">
                    <h3 class="perfil__comprasMount-title">Monto: 400,00 USD</h3>
                    <p class="perfil__comprasMount-mount">Monto: 700.000.000,00 BS</p>
                </div>

                <div class="perfil__comprasActions completed">
                    <a href="#" class="perfil__comprasActions-detalle"> Ver detalle</a>
                </div>
            </div>
            <div class="perfil__cardBody compras">

                <div class="perfil__comprasInfo">
                    <h2 class="perfil__comprasInfo-title completed">Completado</h2>
                    <p class="perfil__comprasInfo-alert">Realice el pago los mas pronto posible...</p>
                    <div class="perfil__comprasInfoDetails">
                        <p class="perfil__comprasInfoDetails-info id">ID: 0000000001</p>
                        <p class="perfil__comprasInfoDetails-info date">Fecha:  21 diciembre  2020</p>
                    </div>
                </div>

                <div class="perfil__comprasMount">
                    <h3 class="perfil__comprasMount-title">Monto: 400,00 USD</h3>
                    <p class="perfil__comprasMount-mount">Monto: 700.000.000,00 BS</p>
                </div>

                <div class="perfil__comprasActions completed">
                    <a href="#" class="perfil__comprasActions-detalle"> Ver detalle</a>
                </div>
            </div>

            <div class="perfil__cardMasCompras">
                <a class="perfil__cardMasCompras-option" href="#">Ver mas compras</a>
            </div>
        </div>
    </section>
@endsection