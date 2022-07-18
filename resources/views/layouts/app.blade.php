<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Ilkoom - Community Blog') }}</title>
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/x-icon">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <nav id="main-navbar" class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm py-0">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <span class="d-none">{{ config('app.name', 'Ilkoom - Community Blog') }}</span>
                <img src="{{ asset('img/ilkoom_logo.png') }}" class="main-logo d-none d-md-inline" alt="ilkoom logo">
                <img src="{{ asset('img/ilkoom_logo.png') }}" class="small-logo d-inline d-md-none" alt="ilkoom logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link p-4 active" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-4" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-4" href="#">Article</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-4" href="#">Gallery</a>
                    </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link " href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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
    </nav>
    @yield('content')
    <footer id="main-footer" class="text-white bg-dark py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-3 text-center text-md-start text-lg-start">
                    <a href="index.html">
                        <img src="{{ asset('img/ilkoom_logo.png') }}" style="height: 60px;">
                    </a>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Aperiam cumque, esse modi maxime veniam nulla delectus dolorem
                    </p>
                </div>
                <div class="col-md-3 text-center">
                    <h5>Community</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Activity</a></li>
                        <li><a href="#" class="text-white">Members</a></li>
                        <li><a href="#" class="text-white">Groups</a></li>
                        <li><a href="#" class="text-white">Forums</a></li>
                    </ul>
                </div>
                <div class="col-md-3 text-center">
                    <h5>Our Services</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Our mission</a></li>
                        <li><a href="#" class="text-white">Help/Contact Us</a></li>
                        <li><a href="#" class="text-white">Privacy Policy</a></li>
                        <li><a href="#" class="text-white">Cookie Policy</a></li>
                        <li><a href="#" class="text-white">Terms & Conditions</a></li>
                    </ul>
                </div>
                <div class="col-md-3 text-center text-md-start text-lg-start">
                    <h5>Hubungi Kami</h5>
                    <div class="text-nowrap">
                        <i class="fas fa-envelope fa-fw mr-3"></i>
                        andre@ilkoom.com
                    </div>
                    <div class="text-nowrap">
                        <i class="fas fa-phone fa-fw mr-3"></i>
                        (021) 123456
                    </div>
                    <div class="text-nowrap">
                        <i class="fas fa-globe fa-fw mr-3"></i>
                        www.ilkoom.com
                    </div>
                </div>
            </div>
            <div class="row mt-3 mt-md-0 justify-content-between align-items-center">
                <div class="col-md-3 mr-md-auto text-center text-md-start text-lg-start">
                    <small>&copy; ILKOOM 2018</small>
                </div>
                <div class="col-md-3 text-center text-md-end text-lg-end">
                    <div>
                        <a href="#" class="text-white mr-2 text-decoration-none">
                            <i class="fab fa-facebook fa-lg"></i>
                        </a>
                        <a href="#" class="text-white mr-2 text-decoration-none">
                            <i class="fab fa-twitter fa-lg"></i>
                        </a>
                        <a href="#" class="text-white mr-2 text-decoration-none">
                            <i class="fab fa-instagram fa-lg"></i>
                        </a>
                        <a href="#" class="text-white mr-2 text-decoration-none">
                            <i class="fab fa-google-plus fa-lg"></i>
                        </a>
                        <a href="#" class="text-white mr-2 text-decoration-none">
                            <i class="fab fa-github fa-lg"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
