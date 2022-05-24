<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Pensiones estudiantiles</title>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->

        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
<!-- 
                @guest
                    <img src="https://pensionesestudiantiles.com/wp-content/uploads/2021/05/PensionesEstudiantiles-HOR.png"  width="20" height="20" class="d-inline-block align-top "alt="">&nbsp;&nbsp; -->
                </a>
                @else
                <img src="https://pensionesestudiantiles.com/wp-content/uploads/2021/05/PensionesEstudiantiles-HOR.png" width="150" height="50" alt="" >&nbsp;
                &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                   

                </a>
                @endguest
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Entrar') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                                </li>
                            @endif
                        @else

                        
                    <a class="btn btn-default" href="{{route('usuarios')}}">USUARIOS</a>
                    <a class="btn btn-default" href="{{route('representantes')}}">REPRESENTANTES</a>

                    <a class="btn btn-default" href="{{route('pensiones')}}">PENSIONES</a>
                    <a class="btn btn-default" href="{{route('cursos')}}">CURSOS</a>
                    <a class="btn btn-default" href="{{route('especialidad')}}">ESPECIALIDADES</a>
                    <a class="btn btn-default" href="{{route('paralelo')}}">PARALELOS</a>&nbsp;
                &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;
                &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; 


                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->usu_cedula }}
                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right " aria-labelledby="navbarDropdown">
                                   
                                    <div class="">
                                        <img src="https://png.pngtree.com/element_our/png/20181228/avatar-vector-icon-png_296057.jpg" width="150px" height="150px">
                                    </div>

                                    <div>
                                        <h5 style="text-align: center;font-size: 12pt;font-family: BlackWay;">Bienvenido</h5>
                                        <h6 style="text-align: center;font-size: 10pt;font-family: BlackWay;">{{ Auth::user()->usu_nombre }}</h6>
                                    </div>
                                
                                        <a style="text-align: center;" class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <!-- <img src="" width="15px"> -->
                                                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M12.5 15a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5zM10 8a.5.5 0 0 1-.5.5H3.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L3.707 7.5H9.5a.5.5 0 0 1 .5.5z"/>
</svg>
                                        Cerrar Session
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
        </nav>

        <main class="">
            @yield('content')
        </main>
    </div>
</body>
</html>
