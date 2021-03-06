<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('vendor/@fortawesome/fontawesome-free/css/all.min.css')}}">


    @yield('captcha')

    <style type="text/css">
        .cart_on {
            color: blue;
        }
    </style>
</head>
<body>
    @if(isset(auth()->user()->id))
        <input type="hidden" id="sesion" value="1">
    @else 
        <input type="hidden" id="sesion" value="0">
    @endif
    <div id="app">
        @if(isset($navbar_null))
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" style="display: none;">
            <div class="container">

                <a class="navbar-brand" href="{{ url('/') }}">
                    @if(isset($logo))
                        <img src="{{asset('storage/'.$logo->image)}}" width="40" height="40" alt="logo">
                    @else
                        LOGO
                    @endif
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="#" class="nav-link">Productos</a>
                        </li>
                        <li class="nav-item dropdown" id="cart_main">
                            <a id="carritoDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <i class="fas fa-shopping-cart"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" id="cart_body" aria-labelledby="carritoDropdown">
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        @else
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">

                <a class="navbar-brand" href="{{ url('/') }}">
                    @if(isset($logo))
                        <img src="{{asset('storage/'.$logo->image)}}" width="40" height="40" alt="logo">
                    @else
                        LOGO
                    @endif
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="navbar-nav mr-auto col-4">
                        <form action="/productos" class="d-flex">
                            <input class="form-control mr-2" type="search" placeholder="Buscar producto" name="search">
                            <input type="submit" class="btn btn-sm btn-primary" value="buscar">
                        </form>
                    </div>
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="#" class="nav-link">Productos</a>
                        </li>
                        <li class="nav-item dropdown" id="cart_main">
                            <a id="carritoDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <i class="fas fa-shopping-cart"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" id="cart_body" aria-labelledby="carritoDropdown">
                            </div>
                        </li>
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('user.home') }}">
                                        Perfil
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesión') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <!--ul class="navbar-nav ml-auto"-->
                        
                    <!--/ul-->
                </div>
            </div>
        </nav>
        @endif
        <main class="">
            @yield('content')
        </main>
    </div>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="{{ asset('js/cart.js') }}"></script>
</body>
</html>
