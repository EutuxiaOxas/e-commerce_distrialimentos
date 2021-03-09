
<style>
    .header__navMobile {
	width: 100%;
	background-color: $navbar_Background;
	padding-left: .2rem;
    top: 70px !important;
    height:48px;
}

.header__navMain {
    height:48px;
}
.navbar__mobillocationList {
    top: 23% !important;
    left: -44px !important;
    border:none;
    background: #f5f5f5;
    padding:0;
}
.navbar__locationMobilListItems {
    text-decoration: none;
    font-size: 1rem  !important;
    font-family: 'Roboto';
    color: #02528A !important;
    font-weight: bold;
    padding: 0.4rem 0.5rem 0.6rem;
}
.header__navMobileChooseCurrency a {
    padding: 0.4rem 0.5rem 0.6rem;
    width: 105px;
    text-align: left;
    
}
.header__navMobileChooseCurrency{
    top:143%;
   
}

</style>


<nav class="header__navMobile main fixed-top">
    <ul class="header__navMain main">
        <li class="header__navList main" id="ayuda_mobile_icon">
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
                

            <!-- <a href="#" style="visibility: hidden;">Ayuda</a> -->

        </li>
        <li class="header__navList main">
            <svg width="25" height="25" viewBox="0 0 15 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M7.49996 0C3.35781 0 0 3.35785 0 7.50001C0 15 7.50001 24 7.50001 24C7.50001 24 15 15 15 7.50001C15 3.35785 11.6421 0 7.49996 0ZM7.49996 12C5.01466 12 2.99997 9.98531 2.99997 7.50001C2.99997 5.0147 5.01466 3.00001 7.49996 3.00001C9.98526 3.00001 12 5.0147 12 7.50001C12 9.98531 9.98526 12 7.49996 12Z" fill="white"/>
            </svg>

            <a class="dropdown" href="#" id="dropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{session('location')}}</a>
            
            <div class="dropdown-menu navbar__mobillocationList" aria-labelledby="dropdownMenuButton">
					<a class="dropdown-item navbar__locationMobilListItems" href="{{route('active.location', 'carabobo')}}">Carabobo</a>
					<a class="dropdown-item navbar__locationMobilListItems" href="{{route('active.location', 'aragua')}}">Aragua</a>
				</div>
        </li>
        <li class="header__navList main header__navListCurrencyMain">
            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12.5 0C5.59692 0 0 5.59692 0 12.5C0 19.4031 5.59692 25 12.5 25C19.4046 25 25 19.4031 25 12.5C25 5.59692 19.4046 0 12.5 0ZM15.9088 17.3264C15.2938 18.0161 14.4059 18.422 13.2446 18.544V20.3125H11.7645V18.5532C9.82817 18.3548 8.63032 17.2287 8.16802 15.1779L10.4568 14.5813C10.6689 15.8707 11.3708 16.5146 12.5625 16.5146C13.1195 16.5146 13.5315 16.3773 13.7939 16.1011C14.0564 15.8249 14.1876 15.4922 14.1876 15.1016C14.1876 14.6973 14.0563 14.3905 13.7939 14.183C13.5315 13.974 12.9471 13.71 12.0422 13.3896C11.229 13.1073 10.5926 12.8295 10.1349 12.5519C9.6771 12.2772 9.30479 11.8912 9.01943 11.3953C8.73408 10.8978 8.59067 10.318 8.59067 9.65879C8.59067 8.7936 8.84702 8.01387 9.35669 7.32114C9.86636 6.62993 10.6689 6.20723 11.7646 6.05312V4.6875H13.2447V6.05317C14.8987 6.25156 15.9699 7.18691 16.4566 8.86079L14.4181 9.69697C14.0198 8.54951 13.4063 7.97578 12.5733 7.97578C12.1552 7.97578 11.8195 8.10395 11.5677 8.3603C11.3144 8.61665 11.1878 8.92793 11.1878 9.29263C11.1878 9.66494 11.3099 9.95029 11.554 10.1502C11.7966 10.3486 12.32 10.5942 13.1196 10.8887C13.9985 11.2092 14.6882 11.5128 15.1872 11.7981C15.6876 12.0835 16.0859 12.4787 16.385 12.9807C16.6825 13.4843 16.832 14.0718 16.832 14.7447C16.832 15.7776 16.5237 16.6382 15.9088 17.3264Z" fill="white"/>
            </svg>

            <a href="#" id="headerMobileCurrencyChoose">{{session('currency')}}</a>
            <div class="header__navMobileChooseCurrency" id="headerMobileCurrencyMain">
                <a href="{{route('active.curency', 'usd')}}" class="header__navMobileChooseCurrency-option">
                    Dolares
                </a>
                <a href="{{route('active.curency', 'ves')}}" class="header__navMobileChooseCurrency-option">
                    Bolivares
                </a>
            </div>
        </li>
    </ul>
</nav>



<script>
   function init(){

        const ayudaMobileIcon                   =     document.getElementById('ayuda_mobile_icon'),
              categoriesMenu_mobile             =     document.getElementById('categoriesMenu_mobile'),
              botonClose_categorieMenu_mobile   =     document.getElementById('botonClose_categorieMenu_mobile'),
              butonActiveCurrencyChange         =     document.getElementById('headerMobileCurrencyChoose'),
              MobileCurrencyMain                =     document.getElementById('headerMobileCurrencyMain')

        if(ayudaMobileIcon) {
            ayudaMobileIcon.addEventListener('click', (e) => {
                categoriesMenu_mobile.classList.toggle('active')
            })

            botonClose_categorieMenu_mobile.addEventListener('click', () => {
                categoriesMenu_mobile.classList.toggle('active')
            })
        }

        butonActiveCurrencyChange.addEventListener('click', () => {
            MobileCurrencyMain.classList.toggle('active')
        })

   }


   init()
</script>