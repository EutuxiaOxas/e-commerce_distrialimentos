<header class="header__mobileMain fixed-top">
	<div class="header__mobileContainer">
		<div class="header__logoMobile">
			<a href="/">
				<img class="header__logoMobile-image" src="{{asset('images/logo-mobile.svg')}}">
			</a>
		</div>
		<div class="header__searchMobile">
			<form action="{{route('almacen.all')}}">
				<input class="header__searchMobile-input" type="search" name="search" placeholder="Buscar productos, marcas y más...">
			</form>
			{{-- <div class="header__searchMobile-icon">
				<svg width="23" height="23" viewBox="0 0 23 20" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M12.3532 11.9094L12.6718 11.524L12.2528 11.1777L11.9426 11.6241L12.3532 11.9094ZM12.3787 11.8725L11.9663 11.5898L12.7869 12.1612L12.3787 11.8725ZM12.9303 11.0927L13.2489 10.7073L12.8335 10.3639L12.5222 10.8039L12.9303 11.0927ZM21.5082 18.1836L21.9164 18.4724L22.1842 18.0937L21.8267 17.7982L21.5082 18.1836ZM20.9307 19L20.6121 19.3854L21.0275 19.7288L21.3388 19.2887L20.9307 19ZM7.30722 14.1364C10.4766 14.1364 13.1144 11.3471 13.1144 7.81818H12.1144C12.1144 10.8654 9.85619 13.1364 7.30722 13.1364V14.1364ZM1.5 7.81818C1.5 11.3471 4.13785 14.1364 7.30722 14.1364V13.1364C4.75825 13.1364 2.5 10.8654 2.5 7.81818H1.5ZM7.30722 1.5C4.13785 1.5 1.5 4.2893 1.5 7.81818H2.5C2.5 4.77092 4.75825 2.5 7.30722 2.5V1.5ZM13.1144 7.81818C13.1144 4.2893 10.4766 1.5 7.30722 1.5V2.5C9.85619 2.5 12.1144 4.77092 12.1144 7.81818H13.1144ZM7.30722 15.1364C9.55111 15.1364 11.5297 13.9707 12.7638 12.1947L11.9426 11.6241C10.8754 13.1599 9.19005 14.1364 7.30722 14.1364V15.1364ZM0.5 7.81818C0.5 11.8225 3.51173 15.1364 7.30722 15.1364V14.1364C4.13594 14.1364 1.5 11.345 1.5 7.81818H0.5ZM7.30722 0.5C3.51173 0.5 0.5 3.81385 0.5 7.81818H1.5C1.5 4.29136 4.13594 1.5 7.30722 1.5V0.5ZM14.1144 7.81818C14.1144 3.81385 11.1027 0.5 7.30722 0.5V1.5C10.4785 1.5 13.1144 4.29136 13.1144 7.81818H14.1144ZM12.7912 12.1551C13.6244 10.9391 14.1144 9.43812 14.1144 7.81818H13.1144C13.1144 9.23526 12.6861 10.5394 11.9663 11.5898L12.7912 12.1551ZM12.7869 12.1612L13.3385 11.3814L12.5222 10.8039L11.9705 11.5837L12.7869 12.1612ZM12.6118 11.4781L21.1896 18.569L21.8267 17.7982L13.2489 10.7073L12.6118 11.4781ZM21.1 17.8948L20.5225 18.7112L21.3388 19.2887L21.9164 18.4724L21.1 17.8948ZM21.2492 18.6146L12.6718 11.524L12.0347 12.2948L20.6121 19.3854L21.2492 18.6146Z" fill="#EBE7E7"/>
				</svg>
			</div> --}}
		</div>
		<div class="header__menuMobile-icon" id="header_menuIcon" style="position: relative; top: 0px;">
			<span class="header__menuMobile-icon_container active"  id="header_menuMobile_open" >
				<svg width=30 height=30 viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M36 0H0V36H36V0Z" fill="white" fill-opacity="0.01"/>
					<path d="M5.96234 8.9624H29.9624" stroke="#838383" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
					<path d="M5.96234 17.9624H29.9624" stroke="#838383" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
					<path d="M5.96234 26.9624H29.9624" stroke="#838383" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>
			</span>
			<span id="header_menuMobile_close" class="header__menuMobile-icon_container">
				<svg width="22" height="22" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M15.2535 12.4992L24.6006 3.15163C24.8577 2.89431 24.9996 2.55102 25 2.18496C25 1.8187 24.8581 1.475 24.6006 1.21809L23.7815 0.399187C23.524 0.14126 23.1807 0 22.8142 0C22.4484 0 22.1051 0.14126 21.8476 0.399187L12.5004 9.74614L3.15285 0.399187C2.89573 0.14126 2.55224 0 2.18598 0C1.82012 0 1.47663 0.14126 1.21951 0.399187L0.4 1.21809C-0.133333 1.75142 -0.133333 2.6189 0.4 3.15163L9.74736 12.4992L0.4 21.8463C0.142683 22.1041 0.00101626 22.4474 0.00101626 22.8134C0.00101626 23.1795 0.142683 23.5228 0.4 23.7803L1.21931 24.5992C1.47642 24.8569 1.82012 24.9984 2.18577 24.9984C2.55203 24.9984 2.89553 24.8569 3.15264 24.5992L12.5002 15.252L21.8474 24.5992C22.1049 24.8569 22.4482 24.9984 22.814 24.9984H22.8144C23.1805 24.9984 23.5238 24.8569 23.7813 24.5992L24.6004 23.7803C24.8575 23.523 24.9994 23.1795 24.9994 22.8134C24.9994 22.4474 24.8575 22.1041 24.6004 21.8465L15.2535 12.4992Z" fill="#838383"/>
				</svg>					
			</span>
		</div>
	</div>
	<div class="header__mobileMenuNav_container {{auth()->user() ? 'logged' : 'guest'}}" id="header_mobileMenuNav">
		<div class="header__mobileMenuBody ">
			<div class="userSection__mobileMenu ">
				@guest
					<div class="userSection__mobileMenu_guest">
						<h5 class="userSection__mobileMenu-title">Bienvenido</h5>
						<p class="userSection__mobileMenu-subtitle">Ingresa tu cuenta o registrate para disfrutar la experiencia</p>
						<div class="userSection__mobileMenu_guest-actions">
							<a href="/login">Iniciar sesión</a>
							<a href="/register">Registrarse</a>
						</div>
					</div>
				@else
					<div class="userSection__mobileMenu_logged">
						<div class="formularios__iconUser">
							<svg width="88" height="88" viewBox="0 0 88 88" fill="none" xmlns="http://www.w3.org/2000/svg">
								<g filter="url(#filter0_d)">
								<rect x="4" width="80" height="80" rx="40" fill="#E5E5E5"/>
								<path d="M62.7631 33.5274L59.2066 26.5187V23.7391C59.2066 23.331 58.8758 23 58.4675 23H29.3755C28.9673 23 28.6364 23.331 28.6364 23.7391V26.5191L25.08 33.5274C25.0274 33.631 25 33.7457 25 33.8618V35.6802C25 37.8408 26.5746 39.6395 28.6364 39.992V55.5215H27.88C27.4718 55.5215 27.1409 55.8524 27.1409 56.2606C27.1409 56.6687 27.4718 56.9997 27.88 56.9997H29.3698C29.3716 56.9997 29.3736 57 29.3755 57H49.598H55.5111H58.4676H59.9631C60.3712 57 60.7022 56.669 60.7022 56.2609C60.7022 55.8527 60.3712 55.5217 59.9631 55.5217H59.2067V39.992C61.2685 39.6395 62.8432 37.8409 62.8432 35.6802V33.8618C62.8432 33.7457 62.8157 33.631 62.7631 33.5274ZM30.1146 24.4783H57.7283V25.9567H52.6493H46.8308H41.0125H35.1939H30.1146V24.4783ZM48.2934 33.7872L47.6488 27.435H52.1017L54.092 33.9718V35.6802C54.092 37.2777 52.7922 38.5774 51.1946 38.5774C49.597 38.5774 48.2971 37.2777 48.2971 35.6802V33.8618C48.2971 33.8369 48.2959 33.812 48.2934 33.7872ZM46.8189 33.8992V35.6802H46.8188C46.8188 37.2777 45.5191 38.5774 43.9217 38.5774C42.324 38.5774 41.0242 37.2777 41.0242 35.6802V33.8992L41.6804 27.435H46.1629L46.8189 33.8992ZM40.1946 27.4351L39.5498 33.7873C39.5472 33.812 39.5459 33.8369 39.5459 33.8618V35.6802C39.5459 37.2777 38.2463 38.5774 36.6486 38.5774C35.051 38.5774 33.7513 37.2777 33.7513 35.6802V33.9719L35.7417 27.4351H40.1946ZM26.4783 35.6802V34.0386L29.8293 27.435H34.1963L32.3051 33.6465C32.2839 33.7163 32.273 33.7889 32.273 33.8618V35.6802C32.273 37.2777 30.9732 38.5774 29.3755 38.5774C27.7779 38.5774 26.4783 37.2777 26.4783 35.6802ZM54.772 55.5217H50.3371V53.3042V50.3477H51.0763C51.4846 50.3477 51.8155 50.0168 51.8155 49.6086C51.8155 49.2004 51.4846 48.8695 51.0763 48.8695H50.3371V43.6957H54.772V55.5217ZM57.7283 55.5217H56.2501V42.9566C56.2501 42.5484 55.9192 42.2175 55.5109 42.2175H49.5979H32.3321C31.9238 42.2175 31.5929 42.5484 31.5929 42.9566V53.3042C31.5929 53.7124 31.9238 54.0433 32.3321 54.0433H48.8589V55.5217H30.1146V39.992C31.3189 39.7862 32.3571 39.0875 33.0121 38.1106C33.798 39.2825 35.1345 40.0557 36.6486 40.0557C38.1626 40.0557 39.4991 39.2825 40.285 38.1106C41.0709 39.2825 42.4076 40.0557 43.9216 40.0557C45.4355 40.0557 46.7721 39.2825 47.5579 38.1106C48.3438 39.2825 49.6804 40.0557 51.1944 40.0557C52.7085 40.0557 54.0451 39.2825 54.8309 38.1106C55.486 39.0875 56.5241 39.7862 57.7283 39.992V55.5217ZM40.28 43.6957H42.8551L41.4496 45.1009C41.161 45.3895 41.161 45.8575 41.4496 46.1462C41.5939 46.2906 41.7831 46.3628 41.9723 46.3628C42.1614 46.3628 42.3505 46.2906 42.4948 46.1463L44.9457 43.6957H48.8588V52.5651H33.0712V50.9045L40.28 43.6957ZM33.0712 48.8139V43.6957H38.1894L33.0712 48.8139ZM61.3649 35.6802C61.3649 37.2777 60.0652 38.5774 58.4676 38.5774C56.87 38.5774 55.5702 37.2777 55.5702 35.6802V33.8618C55.5702 33.7889 55.5594 33.7163 55.5381 33.6465L53.6469 27.435H58.0139L61.3649 34.0386V35.6802Z" fill="#838383"/>
								<path d="M40.4583 47.8763C40.6468 47.8763 40.8353 47.8046 40.9795 47.6613L40.9918 47.6491C41.2813 47.3613 41.2827 46.8933 40.9949 46.6038C40.707 46.3143 40.239 46.3129 39.9496 46.6008L39.9372 46.613C39.6477 46.9008 39.6465 47.3689 39.9341 47.6583C40.0786 47.8036 40.2684 47.8763 40.4583 47.8763Z" fill="#838383"/>
								<path d="M25.7566 55.5215H25.7391C25.3309 55.5215 25 55.8525 25 56.2606C25 56.6688 25.3309 56.9997 25.7391 56.9997H25.7566C26.1647 56.9997 26.4957 56.6688 26.4957 56.2606C26.4957 55.8525 26.1648 55.5215 25.7566 55.5215Z" fill="#838383"/>
								<path d="M62.104 55.5215H62.0866C61.6784 55.5215 61.3475 55.8525 61.3475 56.2606C61.3475 56.6688 61.6784 56.9997 62.0866 56.9997H62.104C62.5123 56.9997 62.8432 56.6688 62.8432 56.2606C62.8432 55.8525 62.5123 55.5215 62.104 55.5215Z" fill="#838383"/>
								</g>
								<defs>
								<filter id="filter0_d" x="0" y="0" width="88" height="88" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
								<feFlood flood-opacity="0" result="BackgroundImageFix"/>
								<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
								<feOffset dy="4"/>
								<feGaussianBlur stdDeviation="2"/>
								<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
								<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
								<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
								</filter>
								</defs>
								</svg>
								
						</div>
						<div class="mx-3">
							<h5 class="userSection__mobileMenu-title">
								Hola, {{auth()->user()->name}}
							</h5>
							<p class="userSection__mobileMenu-subtitle">
								{{auth()->user()->email}}
							</p>
						</div>
					</div>
				@endguest
			</div>
		</div>
		<div class="navSection__mobileMenu">
			<div class="navSection__mobileMenu-container">
				<a href="{{route('home')}}">Inicio</a>
			</div>
			<div class="navSection__mobileMenu-container">
				<a href="{{route('almacen.all')}}">Almacen</a>
			</div>
			@guest
			<div class="navSection__mobileMenu-container">
				<a href="{{route('soy-nuevo')}}">Soy nuevo</a>
			</div>
			@else
			<div class="navSection__mobileMenu-container">
				<a href="{{route('perfil.home')}}">Mi cuenta</a>
			</div>
			@endguest
			<div class="navSection__mobileMenu-container">
				<a href="#">Nosotros</a>
			</div>
			<div class="navSection__mobileMenu-container">
				<a href="{{route('ayuda')}}">Ayuda</a>
			</div>
			<div class="navSection__mobileMenu-container">
				@guest
				<a href="/login">Iniciar sesión</a>
				@else
					<form action="/logout" method="POST" id="form_logout_headerNavMobile">
						@csrf
					</form>
					<a href="#" onclick="document.getElementById('form_logout_headerNavMobile').submit()">Cerrar Sesión</a>
				@endguest
			</div>
		</div>
	</div>
</header>

<!-- <div class="camionIcon__mobile" data-toggle="modal" data-target="#exampleModal">
	<span>a</span>
	<svg width="30" height="30" viewBox="0 0 48 40" fill="none" xmlns="http://www.w3.org/2000/svg">
	<path d="M47.9811 28.2849V21.5713C47.9811 20.5715 47.6389 19.5716 47.1241 18.7145L41.9952 11.4296C41.4809 10.5726 40.2811 10.0012 39.0814 10.0012H31.368C30.1682 10.0012 29.1395 10.8583 29.1395 11.8582V27.1421H27.4255V7.14442C27.4255 5.57317 25.883 4.2876 23.9973 4.2876H0V29.999H5.14227C5.99932 27.5707 8.57045 25.7137 11.827 25.7137C15.084 25.7137 17.8263 27.5707 18.5122 29.999H31.0252C31.8822 27.5707 34.4533 25.7137 37.7099 25.7137C40.4526 25.7137 42.6805 26.9993 43.7092 28.8562C44.2235 29.5704 45.0676 29.999 45.9247 29.999C47.1241 29.999 48.1528 29.1419 47.9811 28.2849ZM32.5677 20.0001V12.858H39.4241L44.3947 20.0001H32.5677Z" fill="white"/>
	<path d="M37.7101 27.1421C34.7963 27.1421 32.5679 28.999 32.5679 31.4273C32.5679 33.8556 34.7963 35.7125 37.7101 35.7125C40.624 35.7125 42.8524 33.8556 42.8524 31.4273C42.8524 28.999 40.624 27.1421 37.7101 27.1421ZM37.7101 33.4271C36.3387 33.4271 35.3106 32.57 35.3106 31.4273C35.3106 30.2846 36.3389 29.4275 37.7101 29.4275C39.0815 29.4275 40.1096 30.2846 40.1096 31.4273C40.1096 32.57 39.0815 33.4271 37.7101 33.4271Z" fill="white"/>
	<path d="M11.9987 27.1421C9.08487 27.1421 6.85645 28.999 6.85645 31.4273C6.85645 33.8556 9.08487 35.7125 11.9987 35.7125C14.9126 35.7125 17.141 33.8556 17.141 31.4273C17.141 28.999 14.9126 27.1421 11.9987 27.1421ZM11.9987 33.4271C10.6273 33.4271 9.5992 32.57 9.5992 31.4273C9.5992 30.2846 10.6274 29.4275 11.9987 29.4275C13.37 29.4275 14.3982 30.2846 14.3982 31.4273C14.3982 32.57 13.3701 33.4271 11.9987 33.4271Z" fill="white"/>
	<path d="M11.9986 32.1413C12.472 32.1413 12.8557 31.8215 12.8557 31.4271C12.8557 31.0327 12.472 30.7129 11.9986 30.7129C11.5253 30.7129 11.1416 31.0327 11.1416 31.4271C11.1416 31.8215 11.5253 32.1413 11.9986 32.1413Z" fill="white"/>
	<path d="M37.71 32.1413C38.1834 32.1413 38.5671 31.8215 38.5671 31.4271C38.5671 31.0327 38.1834 30.7129 37.71 30.7129C37.2367 30.7129 36.853 31.0327 36.853 31.4271C36.853 31.8215 37.2367 32.1413 37.71 32.1413Z" fill="white"/>
	</svg>
</div> -->


<script>
	const headerInit = () => {
		const menuHeaderMobile = document.getElementById('header_mobileMenuNav'),
			  headerMenuIcon   = document.getElementById('header_menuIcon'),
			  headerOpenIcon   = document.getElementById('header_menuMobile_open'), 
			  headerCloseIcon   = document.getElementById('header_menuMobile_close') ;
		
		headerOpenIcon.addEventListener('click', e => {
			menuHeaderMobile.classList.toggle('active')
			headerOpenIcon.classList.toggle('active')
			headerCloseIcon.classList.toggle('active')
		})

		headerCloseIcon.addEventListener('click', e => {
			menuHeaderMobile.classList.toggle('active')
			headerCloseIcon.classList.toggle('active')
			headerOpenIcon.classList.toggle('active')
		})

	}

	headerInit();
</script>