<!DOCTYPE html>
{{-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> --}}
<html>

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">



        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    

        <title>@yield('title', 'TrashProject')</title>


        {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

        @yield('styles')
        @yield('extra-css')


        <script src="{{ asset('js/app.js') }}" defer></script>

</head>

<body class="goto-here">
        @yield('scripts')
    <div id="app">
            <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar  ftco-navbar-light" style="position:absolute" id="ftco-navbar">
                    <div class="container">
                        <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="oi oi-menu"></span> Menu
                        </button>

                        <div class="collapse navbar-collapse" id="ftco-nav">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a href="" class="nav-link">Home</a>
                                </li>
                                <li class="nav-item active">
                                    <a href="" class="nav-link">About</a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link">News</a>
                                </li>
                                <li class="nav-item dropdown">

                                    @guest

                                        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">LOGIN</a>

                                        <div class="dropdown-menu bg-mytheme" style="border-radius:3px; opacity: 0.8" aria-labelledby="dropdown04">
                                            <a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a>
                                            @if (Route::has('register'))
                                                <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>
                                            @endif
                                        </div>

                                    @else

                                        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
                                        <div class="dropdown-menu bg-mytheme" style="border-radius:3px; opacity: 0.8" aria-labelledby="dropdown04">
                                            <a class="dropdown-item" href="{{ route('profile') }}">My account</a>

                                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">Log out</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    @endguest

                                </li>


                                @auth
                                    <li class="nav-item cta cta-colored">
                                    <a href="{{ route('cart.index') }}" class="nav-link">
                                            <span class="icon-shopping_cart"></span>[0]
                                        </a>
                                    </li>
                                @endauth
                            </ul>
                        </div>
                    </div>
                </nav>

                <div class="hero-wrap hero-bread" style="background-image: url({{ asset('images/bg_6.jpg') }});">
                    <div class="container">
                            
                      {{-- <div class="row no-gutters slider-text align-items-center justify-content-center">
                        <div class="col-md-9 ftco-animate text-center">
                            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>About</span></p>
                          <h1 class="mb-0 bread">About Us</h1>
                        </div>
                      </div> --}}
                    </div>
                  </div>
        </div>
        @yield('content')

        @yield('extra-js')


        </body>
        </html>
