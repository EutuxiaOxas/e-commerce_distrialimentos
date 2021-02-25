<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <!-- Scripts -->
        <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('vendor/@fortawesome/fontawesome-free/css/all.min.css')}}">

        {{--owl carrusel --}}
        <link rel="stylesheet" href="{{ asset('css/owlcarousel/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owlcarousel/owl.theme.default.min.css') }}">

        @yield('captcha')

        <style type="text/css">
            .cart_on {
                color: blue;
            }
        </style>
    </head>
    <body>
        <input id="verifyLogin" type="hidden" value="{{auth()->user() ? '1' : '0'}}">
        @include('common.header.header_desktop')
        @include('common.header.header_mobile')
        
        @include('common.header.menuCategories_mobile')
        @yield('menu-perfil')

        <div class="header__content">
            @yield('content')
        </div>

        {{-- boton flotante de carrito de compra--}}
        <div class="camionIcon__mobile" data-toggle="modal" data-target="#exampleModal" id="cart_main">
            <svg width="30" height="30" viewBox="0 0 48 40" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M47.9811 28.2849V21.5713C47.9811 20.5715 47.6389 19.5716 47.1241 18.7145L41.9952 11.4296C41.4809 10.5726 40.2811 10.0012 39.0814 10.0012H31.368C30.1682 10.0012 29.1395 10.8583 29.1395 11.8582V27.1421H27.4255V7.14442C27.4255 5.57317 25.883 4.2876 23.9973 4.2876H0V29.999H5.14227C5.99932 27.5707 8.57045 25.7137 11.827 25.7137C15.084 25.7137 17.8263 27.5707 18.5122 29.999H31.0252C31.8822 27.5707 34.4533 25.7137 37.7099 25.7137C40.4526 25.7137 42.6805 26.9993 43.7092 28.8562C44.2235 29.5704 45.0676 29.999 45.9247 29.999C47.1241 29.999 48.1528 29.1419 47.9811 28.2849ZM32.5677 20.0001V12.858H39.4241L44.3947 20.0001H32.5677Z" fill="white"/>
            <path d="M37.7101 27.1421C34.7963 27.1421 32.5679 28.999 32.5679 31.4273C32.5679 33.8556 34.7963 35.7125 37.7101 35.7125C40.624 35.7125 42.8524 33.8556 42.8524 31.4273C42.8524 28.999 40.624 27.1421 37.7101 27.1421ZM37.7101 33.4271C36.3387 33.4271 35.3106 32.57 35.3106 31.4273C35.3106 30.2846 36.3389 29.4275 37.7101 29.4275C39.0815 29.4275 40.1096 30.2846 40.1096 31.4273C40.1096 32.57 39.0815 33.4271 37.7101 33.4271Z" fill="white"/>
            <path d="M11.9987 27.1421C9.08487 27.1421 6.85645 28.999 6.85645 31.4273C6.85645 33.8556 9.08487 35.7125 11.9987 35.7125C14.9126 35.7125 17.141 33.8556 17.141 31.4273C17.141 28.999 14.9126 27.1421 11.9987 27.1421ZM11.9987 33.4271C10.6273 33.4271 9.5992 32.57 9.5992 31.4273C9.5992 30.2846 10.6274 29.4275 11.9987 29.4275C13.37 29.4275 14.3982 30.2846 14.3982 31.4273C14.3982 32.57 13.3701 33.4271 11.9987 33.4271Z" fill="white"/>
            <path d="M11.9986 32.1413C12.472 32.1413 12.8557 31.8215 12.8557 31.4271C12.8557 31.0327 12.472 30.7129 11.9986 30.7129C11.5253 30.7129 11.1416 31.0327 11.1416 31.4271C11.1416 31.8215 11.5253 32.1413 11.9986 32.1413Z" fill="white"/>
            <path d="M37.71 32.1413C38.1834 32.1413 38.5671 31.8215 38.5671 31.4271C38.5671 31.0327 38.1834 30.7129 37.71 30.7129C37.2367 30.7129 36.853 31.0327 36.853 31.4271C36.853 31.8215 37.2367 32.1413 37.71 32.1413Z" fill="white"/>
            </svg>
        </div>
        
        @include('common.carrito-compras')

        <script type="text/javascript">
            const currency = document.getElementById('currency_change')

            currency.addEventListener('click', (e) => {
                const currencyList = document.getElementById('currency_list')
                currencyList.classList.toggle('hide');
            })
        </script>
     

        <script src="{{asset('js/main.js')}}"></script>
        <script src="{{asset('js/cart.js')}}"></script>
        <script src="{{asset('js/owlcarousel/owl.carousel.min.js')}}"></script>

        <script>
            $(document).ready(function(){
                //carrusel promocional
              $(".owl-carousel#promociones").owlCarousel({
                    loop:true,
                    margin:10,
                    responsiveClass:true,
                    autoplay:true,
                    autoplayTimeout:5000,
                    autoplayHoverPause:false,
                    responsive:{
                        0:{
                            items:1,
                            nav:false
                        },
                        600:{
                            items:2,
                            nav:false
                        },
                        1000:{
                            items:3,
                            nav:false,
                            loop:false
                        }
                    }
                });
                //carrusel de productos
                $(".owl-carousel#productos").owlCarousel({
                    loop:true,
                    margin:10,
                    responsiveClass:true,
                    autoplay:true,
                    responsive:{
                        0:{
                            items:1,
                            nav:false
                        },
                        600:{
                            items:4,
                            nav:false
                        },
                        1000:{
                            items:6,
                            nav:false,
                            loop:true
                        }
                    }
                });
                //carrusel de productos2
                $(".owl-carousel#productos2").owlCarousel({
                    loop:true,
                    margin:10,
                    responsiveClass:true,
                    autoplay:true,
                    responsive:{
                        0:{
                            items:1,
                            nav:false
                        },
                        600:{
                            items:4,
                            nav:false
                        },
                        1000:{
                            items:6,
                            nav:false,
                            loop:false
                        }
                    }
                });
                //carrusel de categorias
                $(".owl-carousel#categories").owlCarousel({
                    loop:true,
                    margin:10,
                    responsiveClass:true,
                    autoplay:false,
                    responsive:{
                        0:{
                            items:1,
                            nav:false
                        },
                        800:{
                            items:8,
                            nav:false
                        },
                        1050:{
                            items:10,
                            nav:false
                        },
                        1276:{
                            items:12,
                            nav:false,
                            loop:true
                        }
                    }
                });
            });
        </script>
    </body>
</html>