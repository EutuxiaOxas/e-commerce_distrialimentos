<!DOCTYPE html>
<html>
<head>
	<title>Documento</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

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
					<p class="perfil__cardEmail-content ">admin@distrialimentosdelcentro.com</p>
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
							<p class="perfil__cardListItem-content">Juan perez</p>
						</li>
						<li class="perfil__cardListItem">
							<h3 class="perfil__cardListItem-title">Documento</h3>
							<p class="perfil__cardListItem-content">C.I. 20.100.202</p>
						</li>
						<li class="perfil__cardListItem">
							<h3 class="perfil__cardListItem-title">Telefono</h3>
							<p class="perfil__cardListItem-content">+58 414 568 5268</p>
						</li>
						<li class="perfil__cardListItem">
							<h3 class="perfil__cardListItem-title">Telefono alternativo</h3>
							<p class="perfil__cardListItem-content">+58 414 568 5268</p>
						</li>
					</ul>
				</div>
			</div>

			<div class="perfil__card">
				<div class="perfil__cardTitle">
					<h2 class="perfil__card-title">Datos de empresa</h2>
					<img class="perfil__cardEditar-icon cardLists"  src="{{asset('/images/editar-icon.svg')}}">
				</div>
				
				<div class="perfil__cardBody ">
					<ul class="perfil__cardList">
						<li class="perfil__cardListItem">
							<h3 class="perfil__cardListItem-title">Empresa</h3>
							<p class="perfil__cardListItem-content">Eutuxia Group C.A.</p>
						</li>
						<li class="perfil__cardListItem">
							<h3 class="perfil__cardListItem-title">R.I.F.</h3>
							<p class="perfil__cardListItem-content">R.I.F. J - 231237613 - 2</p>
						</li>
						<li class="perfil__cardListItem">
							<h3 class="perfil__cardListItem-title">SADA</h3>
							<p class="perfil__cardListItem-content">723849732894</p>
						</li>
						<li class="perfil__cardListItem">
							<h3 class="perfil__cardListItem-title">Horario disponible</h3>
							<p class="perfil__cardListItem-content">8:00 AM - 5:00 PM</p>
						</li>
					</ul>
				</div>
			</div>

			<div class="perfil__card">
				<div class="perfil__cardTitle">
					<h2 class="perfil__card-title">Direcciones</h2>
				</div>
				
				<div class="perfil__cardBody direccion">
					<div class="direccionCard">
						<div class="perfil__cardTitle direccion">
							<h2 class="perfil__card-title direccion">Dirección juridica</h2>
							<img src="{{asset('/images/editar-icon.svg')}}">
						</div>
						<div class="perfil__cardDireccion">
							<h3 class="perfil__cardDireccion-title">Calle 1 Avenida 10 Local 45</h3>
							<p class="perfil__cardDireccion-content">Cerca del colegio Moral y luces </p>
							<p class="perfil__cardDireccion-content">Carabobo, Valencia (2001)</p>
							<p class="perfil__cardDireccion-content">Carlos Maita - +58 414 453 3456</p>
						</div>
					</div>

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
					<div class="perfil__agregarDireccion">
						<a href="#">Agregar nueva dirección</a>
					</div>
				</div>
				
			</div>
		</div>
	</section>
</body>
</html>