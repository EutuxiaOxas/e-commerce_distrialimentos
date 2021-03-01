<header class="header__mobileMain">
	<div class="header__mobileContainer">
		<div class="header__logoMobile">
			<a href="/">
				<img class="header__logoMobile-image" src="{{asset('images/logo-mobile.svg')}}">
			</a>
		</div>
		<div class="header__searchMobile">
			<form action="{{route('almacen.all')}}">
				<input class="header__searchMobile-input" type="search" id="mobileSearch" autocomplete="off" name="search" placeholder="Buscar productos, marcas y más...">
			</form>
			{{-- <div class="header__searchMobile-icon">
				<svg width="23" height="23" viewBox="0 0 23 20" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M12.3532 11.9094L12.6718 11.524L12.2528 11.1777L11.9426 11.6241L12.3532 11.9094ZM12.3787 11.8725L11.9663 11.5898L12.7869 12.1612L12.3787 11.8725ZM12.9303 11.0927L13.2489 10.7073L12.8335 10.3639L12.5222 10.8039L12.9303 11.0927ZM21.5082 18.1836L21.9164 18.4724L22.1842 18.0937L21.8267 17.7982L21.5082 18.1836ZM20.9307 19L20.6121 19.3854L21.0275 19.7288L21.3388 19.2887L20.9307 19ZM7.30722 14.1364C10.4766 14.1364 13.1144 11.3471 13.1144 7.81818H12.1144C12.1144 10.8654 9.85619 13.1364 7.30722 13.1364V14.1364ZM1.5 7.81818C1.5 11.3471 4.13785 14.1364 7.30722 14.1364V13.1364C4.75825 13.1364 2.5 10.8654 2.5 7.81818H1.5ZM7.30722 1.5C4.13785 1.5 1.5 4.2893 1.5 7.81818H2.5C2.5 4.77092 4.75825 2.5 7.30722 2.5V1.5ZM13.1144 7.81818C13.1144 4.2893 10.4766 1.5 7.30722 1.5V2.5C9.85619 2.5 12.1144 4.77092 12.1144 7.81818H13.1144ZM7.30722 15.1364C9.55111 15.1364 11.5297 13.9707 12.7638 12.1947L11.9426 11.6241C10.8754 13.1599 9.19005 14.1364 7.30722 14.1364V15.1364ZM0.5 7.81818C0.5 11.8225 3.51173 15.1364 7.30722 15.1364V14.1364C4.13594 14.1364 1.5 11.345 1.5 7.81818H0.5ZM7.30722 0.5C3.51173 0.5 0.5 3.81385 0.5 7.81818H1.5C1.5 4.29136 4.13594 1.5 7.30722 1.5V0.5ZM14.1144 7.81818C14.1144 3.81385 11.1027 0.5 7.30722 0.5V1.5C10.4785 1.5 13.1144 4.29136 13.1144 7.81818H14.1144ZM12.7912 12.1551C13.6244 10.9391 14.1144 9.43812 14.1144 7.81818H13.1144C13.1144 9.23526 12.6861 10.5394 11.9663 11.5898L12.7912 12.1551ZM12.7869 12.1612L13.3385 11.3814L12.5222 10.8039L11.9705 11.5837L12.7869 12.1612ZM12.6118 11.4781L21.1896 18.569L21.8267 17.7982L13.2489 10.7073L12.6118 11.4781ZM21.1 17.8948L20.5225 18.7112L21.3388 19.2887L21.9164 18.4724L21.1 17.8948ZM21.2492 18.6146L12.6718 11.524L12.0347 12.2948L20.6121 19.3854L21.2492 18.6146Z" fill="#EBE7E7"/>
				</svg>
			</div> --}}
			<div class="header__searchMobileItemsMain" id="mobileSearchedItems">
				<div class="header__searchMobileItems" id="mobileSearchedItemsContainer">
				</div>
			</div>
		</div>
		<div class="header__menuMobile-icon" id="header_menuIcon" style="position: relative; top: -4px;">
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
		<div class="header__mobileMenuBody">
			<div class="userSection__mobileMenu">
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
							<svg class="p-1" width="47" height="47" viewBox="0 0 38 34" fill="none" xmlns="http://www.w3.org/2000/svg">
							  <path d="M37.7631 10.5274L34.2066 3.51869V0.739127C34.2066 0.330981 33.8758 0 33.4675 0H4.37549C3.96734 0 3.63636 0.330981 3.63636 0.739127V3.51906L0.0799736 10.5274C0.0274216 10.631 0 10.7457 0 10.8618V12.6802C0 14.8408 1.57464 16.6395 3.63636 16.992V32.5215H2.88001C2.47179 32.5215 2.14088 32.8524 2.14088 33.2606C2.14088 33.6687 2.47179 33.9997 2.88001 33.9997H4.36979C4.37164 33.9997 4.37356 34 4.37549 34H24.598H30.5111H33.4676H34.9631C35.3712 34 35.7022 33.669 35.7022 33.2609C35.7022 32.8527 35.3712 32.5217 34.9631 32.5217H34.2067V16.992C36.2685 16.6395 37.8432 14.8409 37.8432 12.6802V10.8618C37.8432 10.7457 37.8157 10.631 37.7631 10.5274ZM5.11461 1.47825H32.7283V2.95673H27.6493H21.8308H16.0125H10.1939H5.11461V1.47825ZM23.2934 10.7872L22.6488 4.43498H27.1017L29.092 10.9718V12.6802C29.092 14.2777 27.7922 15.5774 26.1946 15.5774C24.597 15.5774 23.2971 14.2777 23.2971 12.6802V10.8618C23.2971 10.8369 23.2959 10.812 23.2934 10.7872ZM21.8189 10.8992V12.6802H21.8188C21.8188 14.2777 20.5191 15.5774 18.9217 15.5774C17.324 15.5774 16.0242 14.2777 16.0242 12.6802V10.8992L16.6804 4.43498H21.1629L21.8189 10.8992ZM15.1946 4.43506L14.5498 10.7873C14.5472 10.812 14.5459 10.8369 14.5459 10.8618V12.6802C14.5459 14.2777 13.2463 15.5774 11.6486 15.5774C10.051 15.5774 8.75134 14.2777 8.75134 12.6802V10.9719L10.7417 4.43506H15.1946ZM1.47825 12.6802V11.0386L4.82931 4.43498H9.19629L7.30509 10.6465C7.28388 10.7163 7.27301 10.7889 7.27301 10.8618V12.6802C7.27301 14.2777 5.97318 15.5774 4.37549 15.5774C2.77794 15.5774 1.47825 14.2777 1.47825 12.6802ZM29.772 32.5217H25.3371V30.3042V27.3477H26.0763C26.4846 27.3477 26.8155 27.0168 26.8155 26.6086C26.8155 26.2004 26.4846 25.8695 26.0763 25.8695H25.3371V20.6957H29.772V32.5217ZM32.7283 32.5217H31.2501V19.9566C31.2501 19.5484 30.9192 19.2175 30.5109 19.2175H24.5979H7.33207C6.92377 19.2175 6.59294 19.5484 6.59294 19.9566V30.3042C6.59294 30.7124 6.92377 31.0433 7.33207 31.0433H23.8589V32.5217H5.11461V16.992C6.31895 16.7862 7.35705 16.0875 8.01214 15.1106C8.79798 16.2825 10.1345 17.0557 11.6486 17.0557C13.1626 17.0557 14.4991 16.2825 15.285 15.1106C16.0709 16.2825 17.4076 17.0557 18.9216 17.0557C20.4355 17.0557 21.7721 16.2825 22.5579 15.1106C23.3438 16.2825 24.6804 17.0557 26.1944 17.0557C27.7085 17.0557 29.0451 16.2825 29.8309 15.1106C30.486 16.0875 31.5241 16.7862 32.7283 16.992V32.5217ZM15.28 20.6957H17.8551L16.4496 22.1009C16.161 22.3895 16.161 22.8575 16.4496 23.1462C16.5939 23.2906 16.7831 23.3628 16.9723 23.3628C17.1614 23.3628 17.3505 23.2906 17.4948 23.1463L19.9457 20.6957H23.8588V29.5651H8.07119V27.9045L15.28 20.6957ZM8.07119 25.8139V20.6957H13.1894L8.07119 25.8139ZM36.3649 12.6802C36.3649 14.2777 35.0652 15.5774 33.4676 15.5774C31.87 15.5774 30.5702 14.2777 30.5702 12.6802V10.8618C30.5702 10.7889 30.5594 10.7163 30.5381 10.6465L28.6469 4.43498H33.0139L36.3649 11.0386V12.6802Z" fill="#838383"></path>
							  <path d="M15.4583 24.8768C15.6468 24.8768 15.8353 24.8051 15.9795 24.6618L15.9918 24.6496C16.2813 24.3618 16.2827 23.8938 15.9949 23.6043C15.707 23.3148 15.239 23.3134 14.9496 23.6012L14.9372 23.6135C14.6477 23.9013 14.6465 24.3693 14.9341 24.6588C15.0786 24.8041 15.2684 24.8768 15.4583 24.8768Z" fill="#838383"></path>
							  <path d="M0.756571 32.5215H0.739127C0.330907 32.5215 0 32.8525 0 33.2606C0 33.6688 0.330907 33.9997 0.739127 33.9997H0.756571C1.16472 33.9997 1.4957 33.6688 1.4957 33.2606C1.4957 32.8525 1.16479 32.5215 0.756571 32.5215Z" fill="#838383"></path>
							  <path d="M37.104 32.522H37.0866C36.6784 32.522 36.3475 32.853 36.3475 33.2611C36.3475 33.6692 36.6784 34.0002 37.0866 34.0002H37.104C37.5123 34.0002 37.8432 33.6692 37.8432 33.2611C37.8432 32.853 37.5123 32.522 37.104 32.522Z" fill="#838383"></path>
							</svg>
						</div>
						<div>
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

		function showOrHideSearchedItems(value){
			const searchedContainer = document.getElementById('mobileSearchedItems');

			if(value) {
				searchedContainer.classList.add('active');
			}else {
				searchedContainer.classList.remove('active');
			}
		}

		function addProductSearched(items){
			const container = document.getElementById('mobileSearchedItemsContainer');
			container.innerHTML = ''
			if(items.length){
				items.forEach(({ slug ,image, title, sku, available_stock, packaging: { packaging }}) => {
					template = `
						<div>
							<a href="/producto/${slug}" class="header__searchMobileItems-elements">
								<div class="header__searchMobileItems-image">
									<img src="/storage/${image}" alt="Imagen Producto">
								</div>
								<p class="header__searchMobileItems-content">${title} - SKU: ${sku} <span>- ${available_stock} productos por ${packaging}</span></p>
							</a>
						</div>
					`
					container.innerHTML += template
				})
			}else {
				container.innerHTML = `
					<div>
						No se encontraron productos...
					</div>
				`
			}
		}

		const menuHeaderMobile = document.getElementById('header_mobileMenuNav'),
			  headerMenuIcon   = document.getElementById('header_menuIcon'),
			  headerOpenIcon   = document.getElementById('header_menuMobile_open'), 
			  headerCloseIcon   = document.getElementById('header_menuMobile_close') ;

		//INPUT SEARCH
		const inputSearch = document.getElementById('mobileSearch');
		
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


		inputSearch.addEventListener('keyup', (e) => {
			const valueInput = e.target.value;

			showOrHideSearchedItems(valueInput)
			
			axios.get(`/search-product?search=${valueInput}`)
			.then(res => {
				addProductSearched(res.data)
			})
			.catch(err => {
				console.log(err)
			})
		})
	}

	headerInit();
</script>