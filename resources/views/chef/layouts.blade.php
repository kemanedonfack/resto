<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/script.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/GestionMenuChef.css') }}">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand navbar-light bg-white shadow-sm">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   <div class="row">
                        <!-- Left Side Of Navbar -->
                        <div class="col-lg-3 col-md-3 col-sm-1 col-2">
                            <ul class="navbar-nav mr-auto">
                                <i class="fa fa-bars fa-3x text-primary mt-1 " aria-hidden="true" class="openbtn" onclick="openNav()"></i>
                                <img class="img-fluid logo col-5 hidden-sm hidden-sm" src="{{asset('images/logo3.png')}}" alt="">
                            </ul>
                        </div>

                        <div class="col-lg-7 col-md-7 col-sm-8 col-8 m-auto">
                            <!-- Center Side Of Navbar -->
                            <ul class="navbar-nav m-auto">
                                <div class="d-flex justify-content-center h-100">
                                    <div class="searchbar">
                                        <input class="search_input" type="search" name="" placeholder="Recherche...">
                                        <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
                                    </div>
                                </div>
                            </ul>
                        </div>

                        <div class="col-lg-2 col-md-2 col-sm-2 col-1 avatar ml-auto">
                            <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ml-auto">
                                <!-- Authentication Links -->
                                @guest
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <!-- <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li> -->
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                            </ul>
                        </div>
                   </div>
                </div>
            </div>
        </nav>

        <main class="">
            @yield('content')
        </main>
    </div>

<!-- barr  -->
<div id="mySidepanel" class="sidepanel">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a class="sidepanelactive " href="#"> <i class="fa fa-tachometer-alt mr-2 fa-2x" aria-hidden="true"></i> Tableau de bord</a>
    <a href="#"> <i class="fa fa-cookie-bite mr-2 fa-2x" aria-hidden="true"></i> Gestion des menus</a>
    <a href="#"> <i class="fa fa-cart-arrow-down mr-2 fa-2x" aria-hidden="true"></i> Gestion des commandes</a>
    <a href="#"> <i class="fa fa-history mr-2 fa-2x" aria-hidden="true"></i> Historiques</a>
</div>

</body>
</html>
