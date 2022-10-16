<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ITC Disease</title>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <script src="https://kit.fontawesome.com/45c36f3edb.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg shadow-sm sticky-top" style="background-image: linear-gradient(to right, #4facfe 0%, #00f2fe 100%); text: green">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    ITC<span>Disease</span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true"></i></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="voyagernav navbar-nav me-auto mx-auto">
                        {!!menu('disease', 'bootstrap') !!}
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav mx-auto">
                        <li class="search_fav">
                            <a href="/search" class="btn btn-outline-info"><i class="fas fa-search"></i></a>
                            <a href="/favorite" class="btn btn-outline-danger"><i class="fas fa-heart"></i></a>
                        </li>
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <!-- Example single danger button -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Profile</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <style>
            a,span,li,ul{
                font-family: 'Poppins', sans-serif;
            }
            h1,h2,h3,h4,h5,h6{
                font-family: 'Ubuntu', sans-serif;
            }
            .navbar-brand span{
                margin: 0;
                color: crimson;
            }
            .navbar-brand{
                color: #fff;
                font-size: 25px;
                font-weight: bold;
                margin: 0;
            }
            .navbar-brand:hover{
                color: #fff;

            }
            .voyagernav a span{
                color: #fff;
                font-size: 20px;
                margin: 0 15px;
            }
            .voyagernav a span:hover{
                color: crimson;
            }
            .dropdown-item,
            .dropdown-menu{
                font-size: 20px;
                color: #111!important;
                /* background-image: linear-gradient(45deg, #85FFBD 0%, #FFFB7D 100%); */
                background-color: #4facfe;
                transition: all 0.3s;
            }
            .authstyle{
                font-size: 20px;
                font-weight: bold;
                color: #111;
            }

        </style>
        <main>
            @yield('content')
        </main>
        <footer class="text-left py-3 text-lg-start text-white" style="background-image: linear-gradient(-225deg, #5D9FFF 0%, #B8DCFF 48%, #6BBBFF 100%);">
            <section class="justify-content-left">
                <div class="container text-start text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                    <!-- Grid column -->
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                            <h6 class="text-uppercase fw-bold"><a href="/">ITCDisease</a></h6>
                            <hr
                                class="mb-4 mt-0 d-inline-block mx-auto"
                                style="width: 60px; background-color: #7c4dff; height: 2px"
                                />
                            <p>
                            This website built for patient who don't want to look up doctor
                            while they has symptom or any abnormal behavior and want to knows
                            what happen to them.
                            </p>
                        </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Quick link</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px;"/>
                        {!! menu('disease','bootstrap') !!}
                    </div>
                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold"><a href="/about">Contact</a></h6>
                        <hr
                            class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px"
                            />
                        <p><i class="fas fa-home mr-3"></i>Adress: <span>Sangkat Tuek La'ok Ti #3 Khan Toul Kork Phnom Penh</span></p>
                        <p><i class="fas fa-envelope mr-3"></i>Email: <span>phoeunmony12@gmail.com</span></p>
                        <p><i class="fas fa-phone mr-3"></i>Contact: <span>069444653</span></p>
                        <p><i class="fas fa-print mr-3"></i>Website: <span><a href="https://marioblog0775.web.app/">Mario Blog</a></span></p>
                    </div>
                    <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>
            </section>
        </footer>
    </div>
</body>
<script>
    
</script>
</html>
