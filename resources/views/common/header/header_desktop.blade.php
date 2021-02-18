<header class="header__main">
	<div class="header__container">
		<div class="header__body">
			<div class="header__logo">
				<a href="/">
					<img class="header__logo-image" class="" src="{{asset('images/logo.png')}}">
				</a>
			</div>
			<div class="header__search">
				<form action="{{route('almacen.all')}}">
					<input class="header__search-input" type="search" name="search" placeholder="Buscar productos, marcas y más...">
				</form>
				{{-- <div class="header__search--icon">
					<svg width="34" height="27" viewBox="0 0 32 27" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M17.0004 15.3336L17.9116 14.1421L16.7098 13.2231L15.8011 14.4327L17.0004 15.3336ZM17.0272 15.2978L15.8231 14.4033L18.2187 16.209L17.0272 15.2978ZM17.6074 14.539L18.5186 13.3474L17.3271 12.4363L16.4159 13.6278L17.6074 14.539ZM28.9408 23.2056L30.1323 24.1168L31.0435 22.9253L29.852 22.0141L28.9408 23.2056ZM28.3333 24L27.4222 25.1915L28.6137 26.1027L29.5249 24.9112L28.3333 24ZM10.3333 19.1667C15.2119 19.1667 19.1667 15.2119 19.1667 10.3333H16.1667C16.1667 13.555 13.555 16.1667 10.3333 16.1667V19.1667ZM1.5 10.3333C1.5 15.2119 5.45482 19.1667 10.3333 19.1667V16.1667C7.11167 16.1667 4.5 13.555 4.5 10.3333H1.5ZM10.3333 1.5C5.45482 1.5 1.5 5.45482 1.5 10.3333H4.5C4.5 7.11167 7.11167 4.5 10.3333 4.5V1.5ZM19.1667 10.3333C19.1667 5.45482 15.2119 1.5 10.3333 1.5V4.5C13.555 4.5 16.1667 7.11167 16.1667 10.3333H19.1667ZM10.3333 20.1667C13.5513 20.1667 16.4082 18.6194 18.1997 16.2346L15.8011 14.4327C14.5519 16.0957 12.5679 17.1667 10.3333 17.1667V20.1667ZM0.5 10.3333C0.5 15.7641 4.90254 20.1667 10.3333 20.1667V17.1667C6.55939 17.1667 3.5 14.1073 3.5 10.3333H0.5ZM10.3333 0.5C4.90254 0.5 0.5 4.90254 0.5 10.3333H3.5C3.5 6.55939 6.55939 3.5 10.3333 3.5V0.5ZM20.1667 10.3333C20.1667 4.90254 15.7641 0.5 10.3333 0.5V3.5C14.1073 3.5 17.1667 6.55939 17.1667 10.3333H20.1667ZM18.2313 16.1923C19.4469 14.5558 20.1667 12.5265 20.1667 10.3333H17.1667C17.1667 11.8604 16.6676 13.2665 15.8231 14.4033L18.2313 16.1923ZM18.2187 16.209L18.799 15.4502L16.4159 13.6278L15.8356 14.3866L18.2187 16.209ZM16.6963 15.7305L28.0296 24.3972L29.852 22.0141L18.5186 13.3474L16.6963 15.7305ZM27.7493 22.2945L27.1418 23.0888L29.5249 24.9112L30.1323 24.1168L27.7493 22.2945ZM29.2445 22.8085L17.9116 14.1421L16.0892 16.5252L27.4222 25.1915L29.2445 22.8085Z" fill="#E5E5E5"/>
					</svg>
				</div> --}}
			</div>
			<div class="header__sesion">
			@guest 
				<div>
					<a class="header__sesion-option" href="/register">Registrarse</a>
				</div>
				<div>
					<a class="header__sesion-option login" href="/login">Iniciar sesión</a>
				</div>
			@endguest 
			
			@auth
				<div>
					<form action="/logout" id="form_logout" method="POST">
						@csrf
					</form>
					<a class="header__sesion-option" onclick="document.getElementById('form_logout').submit()" href="#">
						Cerrar Sesión
					</a>
				</div>
				<div>
					<a class="header__sesion-option login" href="{{route('perfil.home')}}">Ir al perfil</a>
				</div>
			@endauth
			</div>
		</div>
	</div>
	<nav class="navbar__container">
		<div class="navbar__body">
			<ul class="navbar__list">
				<li class="navbar__list-item" id="categoriesIcon_desktop">
					<span class="navbar__list-item-icon">
						<svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g clip-path="url(#clip0)">
							<path d="M5.20833 0H1.04167C0.466667 0 0 0.466667 0 1.04167V5.20833C0 5.78333 0.466667 6.25 1.04167 6.25H5.20833C5.78333 6.25 6.25 5.78333 6.25 5.20833V1.04167C6.25 0.466667 5.78333 0 5.20833 0Z" fill="white"/>
							<path d="M5.20833 9.375H1.04167C0.466667 9.375 0 9.84167 0 10.4167V14.5833C0 15.1583 0.466667 15.625 1.04167 15.625H5.20833C5.78333 15.625 6.25 15.1583 6.25 14.5833V10.4167C6.25 9.84167 5.78333 9.375 5.20833 9.375Z" fill="white"/>
							<path d="M5.20833 18.75H1.04167C0.466667 18.75 0 19.2167 0 19.7917V23.9583C0 24.5333 0.466667 25 1.04167 25H5.20833C5.78333 25 6.25 24.5333 6.25 23.9583V19.7917C6.25 19.2167 5.78333 18.75 5.20833 18.75Z" fill="white"/>
							<path d="M14.5833 0H10.4167C9.84167 0 9.375 0.466667 9.375 1.04167V5.20833C9.375 5.78333 9.84167 6.25 10.4167 6.25H14.5833C15.1583 6.25 15.625 5.78333 15.625 5.20833V1.04167C15.625 0.466667 15.1583 0 14.5833 0Z" fill="white"/>
							<path d="M14.5833 9.375H10.4167C9.84167 9.375 9.375 9.84167 9.375 10.4167V14.5833C9.375 15.1583 9.84167 15.625 10.4167 15.625H14.5833C15.1583 15.625 15.625 15.1583 15.625 14.5833V10.4167C15.625 9.84167 15.1583 9.375 14.5833 9.375Z" fill="white"/>
							<path d="M14.5833 18.75H10.4167C9.84167 18.75 9.375 19.2167 9.375 19.7917V23.9583C9.375 24.5333 9.84167 25 10.4167 25H14.5833C15.1583 25 15.625 24.5333 15.625 23.9583V19.7917C15.625 19.2167 15.1583 18.75 14.5833 18.75Z" fill="white"/>
							<path d="M23.9583 0H19.7917C19.2167 0 18.75 0.466667 18.75 1.04167V5.20833C18.75 5.78333 19.2167 6.25 19.7917 6.25H23.9583C24.5333 6.25 25 5.78333 25 5.20833V1.04167C25 0.466667 24.5333 0 23.9583 0Z" fill="white"/>
							<path d="M23.9583 9.375H19.7917C19.2167 9.375 18.75 9.84167 18.75 10.4167V14.5833C18.75 15.1583 19.2167 15.625 19.7917 15.625H23.9583C24.5333 15.625 25 15.1583 25 14.5833V10.4167C25 9.84167 24.5333 9.375 23.9583 9.375Z" fill="white"/>
							<path d="M23.9583 18.75H19.7917C19.2167 18.75 18.75 19.2167 18.75 19.7917V23.9583C18.75 24.5333 19.2167 25 19.7917 25H23.9583C24.5333 25 25 24.5333 25 23.9583V19.7917C25 19.2167 24.5333 18.75 23.9583 18.75Z" fill="white"/>
							</g>
							<defs>
							<clipPath id="clip0">
							<rect width="25" height="25" fill="white"/>
							</clipPath>
							</defs>
						</svg>
					</span>
					<a href="#">Categorias</a>
				</li>
				<li class="navbar__list-item">
					<a href="{{route('almacen.all')}}">Almacen</a>
				</li>
				<li class="navbar__list-item">
					<a href="{{route('almacen.all')}}">Productos recientes</a>
				</li>
				<li class="navbar__list-item">
					<a href="{{route('almacen.all')}}">Mas vendidos</a>
				</li>
				<li class="navbar__list-item">
					<a href="{{route('ayuda')}}">Ayuda</a>
				</li>
				<li class="navbar__list-item">
					<a href="{{route('soy-nuevo')}}">Soy nuevo</a>
				</li>
			</ul>
			<div id="currency_change" class="navbar__currency">
				<a  class="navbar__currency--choose" href="#">
					<span class="navbar__currency--choose-title">
						{{session('currency')}}
					</span>
					<span>
						<svg width="14" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M9 15L0.339745 0L17.6603 0L9 15Z" fill="white"/>
						</svg>
					</span>
				</a>
				<p class="navbar__currency--subtitle">Divisas</p>
				<div id="currency_list" class="navbar__currencyList hide">
					<div class="navbar__currencyList--item  usd choose">
						<a class="navbar__currencyList--itemOption" href="{{route('active.curency', 'usd')}}">Dolares<span>(USD)</span></a>
					</div>
					<div class="navbar__currencyList--item ves choose">
						<a class="navbar__currencyList--itemOption " href="{{route('active.curency', 'ves')}}">Bolivares<span>(Bs)</span></a>
					</div>
				</div>
			</div>
			<div class="navbar__location">
				<p class="navbar__locationBody-title">Carabobo</p>
				<p class="navbar__locationBody-subtitle">Ubicación</p>
				<div class="navbar__location-img">
					<svg class="px-1" width="25" height="25" viewBox="0 0 15 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M7.49996 0C3.35781 0 0 3.35785 0 7.50001C0 15 7.50001 24 7.50001 24C7.50001 24 15 15 15 7.50001C15 3.35785 11.6421 0 7.49996 0ZM7.49996 12C5.01466 12 2.99997 9.98531 2.99997 7.50001C2.99997 5.0147 5.01466 3.00001 7.49996 3.00001C9.98526 3.00001 12 5.0147 12 7.50001C12 9.98531 9.98526 12 7.49996 12Z" fill="white"/>
					</svg>
				</div>
			</div>
			<div class="navbar__icon">
				<div>
					<a href="#" data-toggle="modal" data-target="#exampleModal" id="cart_main">
						<svg width="44" height="30" viewBox="0 0 54 45" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M53.9788 31.8203V24.2676C53.9788 23.1427 53.5937 22.0179 53.0146 21.0537L47.2446 12.8582C46.666 11.894 45.3163 11.2512 43.9665 11.2512H35.289C33.9392 11.2512 32.782 12.2154 32.782 13.3403V30.5348H30.8536V8.03731C30.8536 6.26966 29.1184 4.82339 26.9969 4.82339H0V33.7487H5.78506C6.74923 31.0168 9.64176 28.9278 13.3054 28.9278C16.9695 28.9278 20.0546 31.0168 20.8262 33.7487H34.9033C35.8675 31.0168 38.76 28.9278 42.4236 28.9278C45.5092 28.9278 48.0156 30.3741 49.1729 32.4631C49.7515 33.2666 50.7011 33.7487 51.6653 33.7487C53.0146 33.7487 54.1719 32.7845 53.9788 31.8203ZM36.6387 22.5V14.4652H44.3521L49.9441 22.5H36.6387Z" fill="white"/>
						<path d="M42.4238 30.5348C39.1458 30.5348 36.6388 32.6238 36.6388 35.3556C36.6388 38.0875 39.1458 40.1765 42.4238 40.1765C45.7019 40.1765 48.2089 38.0875 48.2089 35.3556C48.2089 32.6238 45.7019 30.5348 42.4238 30.5348ZM42.4238 37.6054C40.881 37.6054 39.7244 36.6412 39.7244 35.3556C39.7244 34.0701 40.8812 33.1059 42.4238 33.1059C43.9667 33.1059 45.1233 34.0701 45.1233 35.3556C45.1233 36.6412 43.9667 37.6054 42.4238 37.6054Z" fill="#EBE7E7"/>
						<path d="M13.4986 30.5348C10.2205 30.5348 7.71356 32.6238 7.71356 35.3556C7.71356 38.0875 10.2205 40.1765 13.4986 40.1765C16.7767 40.1765 19.2837 38.0875 19.2837 35.3556C19.2837 32.6238 16.7767 30.5348 13.4986 30.5348ZM13.4986 37.6054C11.9558 37.6054 10.7992 36.6412 10.7992 35.3556C10.7992 34.0701 11.9559 33.1059 13.4986 33.1059C15.0413 33.1059 16.1981 34.0701 16.1981 35.3556C16.1981 36.6412 15.0414 37.6054 13.4986 37.6054Z" fill="#EBE7E7"/>
						<path d="M13.4985 36.1591C14.031 36.1591 14.4627 35.7994 14.4627 35.3556C14.4627 34.9119 14.031 34.5522 13.4985 34.5522C12.966 34.5522 12.5343 34.9119 12.5343 35.3556C12.5343 35.7994 12.966 36.1591 13.4985 36.1591Z" fill="#EBE7E7"/>
						<path d="M42.4238 36.1591C42.9563 36.1591 43.3879 35.7994 43.3879 35.3556C43.3879 34.9119 42.9563 34.5522 42.4238 34.5522C41.8913 34.5522 41.4596 34.9119 41.4596 35.3556C41.4596 35.7994 41.8913 36.1591 42.4238 36.1591Z" fill="#EBE7E7"/>
						</svg>
						<span class="navbar__icon-subtitle">Camion de compra</span>
					</a>
				</div>
				
			</div>
		</div>
	</nav>
</header>

<script>
(() => {
	document.addEventListener('DOMContentLoaded', () => {
		const categoriesMenu_mobile     =     document.getElementById('categoriesMenu_mobile'),
		  categoriesIcon_desktop 	=	  document.getElementById('categoriesIcon_desktop'),
		  botonClose_categorieMenu_mobile   =     document.getElementById('botonClose_categorieMenu_mobile')

		if(categoriesIcon_desktop) {
			categoriesIcon_desktop.addEventListener('click', () => {
				categoriesMenu_mobile.classList.toggle('active')
			})
		}
	})
})()
</script>