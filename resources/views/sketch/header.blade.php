<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
<header class="header__main">
	<div class="header__container">
		<div class="header__body">
			<div class="header__logo">
				<a href="/">
					<img class="header__logo-image" class="" src="{{asset('images/logo.png')}}">
				</a>
			</div>
			<div class="header__search">
				<form>
					<input class="header__search-input" type="search" name="search" placeholder="Buscar productos, marcas y más...">
				</form>
				<div class="header__search--icon">
					<svg width="48" height="41" viewBox="0 0 48 41" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M26.5461 23.8187L27.4573 22.6271L26.2555 21.7081L25.3468 22.9178L26.5461 23.8187ZM26.5902 23.7597L25.386 22.8652L27.7817 24.6709L26.5902 23.7597ZM27.1529 23.0238L28.0641 21.8323L26.8725 20.9211L25.9614 22.1126L27.1529 23.0238ZM45.6984 37.2056L46.8899 38.1168L47.8011 36.9253L46.6095 36.0141L45.6984 37.2056ZM45.0909 38L44.1797 39.1915L45.3713 40.1027L46.2824 38.9112L45.0909 38ZM15.6364 29.7727C23.4437 29.7727 29.7727 23.4437 29.7727 15.6364H26.7727C26.7727 21.7868 21.7868 26.7727 15.6364 26.7727V29.7727ZM1.5 15.6364C1.5 23.4437 7.82907 29.7727 15.6364 29.7727V26.7727C9.48592 26.7727 4.5 21.7868 4.5 15.6364H1.5ZM15.6364 1.5C7.82907 1.5 1.5 7.82907 1.5 15.6364H4.5C4.5 9.48592 9.48592 4.5 15.6364 4.5V1.5ZM29.7727 15.6364C29.7727 7.82907 23.4437 1.5 15.6364 1.5V4.5C21.7868 4.5 26.7727 9.48592 26.7727 15.6364H29.7727ZM15.6364 30.7727C20.5892 30.7727 24.9864 28.3924 27.7454 24.7196L25.3468 22.9178C23.1301 25.8687 19.6058 27.7727 15.6364 27.7727V30.7727ZM0.5 15.6364C0.5 23.996 7.27678 30.7727 15.6364 30.7727V27.7727C8.93364 27.7727 3.5 22.3391 3.5 15.6364H0.5ZM15.6364 0.5C7.27678 0.5 0.5 7.27678 0.5 15.6364H3.5C3.5 8.93364 8.93364 3.5 15.6364 3.5V0.5ZM30.7727 15.6364C30.7727 7.27678 23.996 0.5 15.6364 0.5V3.5C22.3391 3.5 27.7727 8.93364 27.7727 15.6364H30.7727ZM27.7943 24.6541C29.6653 22.1354 30.7727 19.013 30.7727 15.6364H27.7727C27.7727 18.347 26.8859 20.8461 25.386 22.8652L27.7943 24.6541ZM27.7817 24.6709L28.3444 23.935L25.9614 22.1126L25.3986 22.8485L27.7817 24.6709ZM26.2417 24.2153L44.7872 38.3972L46.6095 36.0141L28.0641 21.8323L26.2417 24.2153ZM44.5068 36.2945L43.8994 37.0888L46.2824 38.9112L46.8899 38.1168L44.5068 36.2945ZM46.0021 36.8085L27.4573 22.6271L25.6349 25.0102L44.1797 39.1915L46.0021 36.8085Z" fill="#3A95FF"/>
					</svg>
				</div>
			</div>
			<div class="header__sesion">
				<a href="#">Iniciar sesión</a>
			</div>
		</div>
	</div>
	<nav class="navbar__container">
		<div class="navbar__body">
			<ul class="navbar__list">
				<li class="navbar__list-item">
					<a href="#">Categoría</a>
				</li>
				<li class="navbar__list-item">
					<a href="#">Mas vendidos</a>
				</li>
				<li class="navbar__list-item">
					<a href="#">Productos recientes</a>
				</li>
				<li class="navbar__list-item">
					<a href="#">Ayuda</a>
				</li>
				<li class="navbar__list-item">
					<a href="#">Crea tu cuenta</a>
				</li>
			</ul>
			<div id="currency_change" class="navbar__currency">
				<a  class="navbar__currency--choose" href="#">
					USD
					<span>
						<svg width="14" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M9 15L0.339745 0L17.6603 0L9 15Z" fill="white"/>
						</svg>
					</span>
				</a>
				<div id="currency_list" class="navbar__currencyList hide">
					<div class="navbar__currencyList--item title">
						<a href="#">DIVISAS</a>
					</div>
					<div class="navbar__currencyList--item  usd">
						<a class="navbar__currencyList--itemOption" href="#">USD <span>(Dolares)</span></a>
					</div>
					<div class="navbar__currencyList--item ves">
						<a class="navbar__currencyList--itemOption " href="#">VES <span>(Bolivares)</span></a>
					</div>
				</div>
			</div>
			<div class="navbar__icon">
				<a href="#">
					<img class="navbar__icon--option" src="{{asset('icons/camion.svg')}}">
				</a>
			</div>
		</div>
	</nav>

</header>

<script type="text/javascript">
	const currency = document.getElementById('currency_change')

	currency.addEventListener('click', (e) => {
		const currencyList = document.getElementById('currency_list')
		currencyList.classList.toggle('hide');
	})
</script>