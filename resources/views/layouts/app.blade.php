<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('popayan', 'Popayan turims') }}</title>


    <link rel="stylesheet" href="css/estilos_2.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contenedores.css">
    <link rel="shortcut icon" href="css\images\LogoPot.png" type="image/x-icon">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    {{-- <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script> --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="/static/css/bootstrap.min.css" rel="stylesheet">
   

</head>

<body class="body_c">
    {{-- header --}}
    <header id="header">

        <div class="container__header ">
            <div class="logo">
                <img src="css\images\LogoPot.png" alt="">
                <a class="navbar-brand nav__links" href="{{ url('/') }}">
                    {{ config('popayán', 'Popayán Turims') }}
                </a>
            </div>
            <div class="container__nav">
                <nav id="nav">
                    <ul>

                        <ul class="nav__link nav__link--menu">
                            <li class="nav__items">
                                <a class="nav__links" href="{{ route('iglesias') }}">{{ __('Iglesias') }}</a>
                            </li>

                            <li class="nav__items">
                                <a class="nav__links" href="{{ route('hoteles.index') }}">{{ __('Hoteles') }}</a>
                            </li>
                            <li class="nav__items">
                                <a class="nav__links" href="{{ route('museos.index') }}">{{ __('Museos') }}</a>
                            </li>
                            <li class="nav__items">
                                <a class="nav__links"
                                    href="{{ route('senderismo.index') }}">{{ __('Senderismo') }}</a>
                            </li>



                            <!-- Right Side Of Navbar -->

                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <button class="style-button  ">
                                        <span class="boxx">
                                            <a href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </span>
                                    </button>
                                @endif
                                @if (Route::has('register'))
                                    <button class="style-button">
                                        <span class="boxx">
                                            <a href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </span>
                                    </button>
                                @endif
                            @else
                                <li class="nav__items">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle text-danger" href="#"
                                        role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                        v-pre>
                                        <img src="{{ 'http://localhost/popayanturims/public/storage/Avatar/' . Auth::user()->Avatar }}"
                                            style="width: 40px; height:40px; float: left; border-radius:50px; margin-right:25px">

                                    </a>
                                    <p class="text-danger"> {{ Auth::user()->name }}</p>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <a class="dropdown-item" href="{{ route('ActualizarPerfil') }}">
                                            {{ __(' Perfil') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>


                    </ul>
                </nav>


                <div class="btn__menu" id="btn_menu"><i class="fas fa-bars"></i></div>

            </div>

        </div>


    </header>
    {{-- header fin --}}

    @yield('content')




    {{-- Footer  pie de pagina --}}
    <Footer>
        <div class="container__footer">

            <div class="box__footer">
                <div class="logo-footer">
                    <img src="css\images\LogoPot.png" alt="popayán turims">
                </div>
                {{-- <div class="terms">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum reiciendis et quasi aut facere vitae
                    vero. Inventore, minus ab voluptate modi repellat, pariatur tempora quisquam, debitis facilis
                    explicabo voluptatem. A.
                </div> --}}
            </div>

            <div class="box__footer">
                <h2>contantos</h2>
                <a href="#">sdgfsgf</a>
                <a href="#">Adfsdf</a>
                <a href="#">twx</a>
                <a href="#">text</a>
            </div>

            <div class="box__footer">
                <h2>Compañia</h2>
                <a href="#">Acercda de</a>
                <a href="#">Trabajos</a>
                <a href="#">Procesos</a>
                <a href="#">Servicios</a>
            </div>

            <div class="box__footer">
                <h2>Redes Sociales</h2>
                <a href="#"><i class="fab fa-facebook-square"></i> Facebook</a>
                <a href="#"><i class="fab fa-twitter-square"></i> Twitter</a>
                <a href="#"><i class="fab fa-linkedin"></i> Linkedin</a>
                <a href="#"><i class="fab fa-instagram-square"></i> Instagram</a>
            </div>
        </div>

        <div class="box__copyright">
            <hr>
            <p>Todos los derechos reservados © 2022 <b>POPAYÁM_TURIMS@PROGRAMER</b></p>
        </div>
    </Footer>
    {{-- Footer  pie de pagina fin  --}}

    <script src="./js/slider.js"></script>
    <script src="./js/questions.js"></script>
    <script src="./js/menu.js"></script>

    <script src="./js/main.js"></script>
    <script src="./js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="/static/css/bootstrap.min.css" rel="stylesheet">
    <!-- Footer -->


    @yield('js')

</body>

</html>
