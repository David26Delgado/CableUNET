<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand"
                href="  
                    @guest
                        {{ url('/') }}
                    @else
                        @if(Auth::user()->is_admin)
                            {{ url('/admin/dashboard') }}
                        @else
                            {{ url('/user/dashboard') }}
                        @endif
                    @endguest"
                >
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>
                    
                    <!-- Center Side Of Navbar -->
                    @guest

                    @else
                        <div class="mx-auto" style="width: auto;">
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                        @if (Auth::user()->is_admin)
                                  <li class="nav-item">
                                    <a class="nav-link" href="{{ route('adminServicios') }}">Creación de Servicios</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="{{ route('adminPaquetes') }}">Creación de Paquetes</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="{{ route('adminFacturas') }}">Emitir Facturas</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="{{ route('adminAutorizacion') }}">Autorizaciones</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="{{ route('adminUsuarios') }}">Administración de Usuarios</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="{{ route('adminProgramacion') }}">Programación</a>
                                  </li>
                        @else
                                  <li class="nav-item">
                                    <a class="nav-link" href="{{ route('userContrar') }}">Contratar Servicios</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="{{ route('userFactura') }}">Factura</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="{{ route('userProgramacion') }}">Programación</a>
                                  </li>
                        @endif
                                </ul>
                            </div>
                        </div>
                    @endguest

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registro') }}</a>
                                @endif
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->apellido }}, {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesión') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">@yield('header')</div>

                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
