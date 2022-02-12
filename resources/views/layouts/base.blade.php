<!doctype html>
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Top Wave Music</title>
    <meta name="description" content="">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/color-lightblue.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    @livewireStyles
</head>

<body data-spy="scroll" class="palettelightblue" data-target="#navbar-muziq" data-offset="80">

    <!-- LOADER -->
    <div id="mask">
        <div class="loader">
            <!-- <img src="images/loading.gif" alt='loading'> -->
            <div class="cssload-container">
                <div class="cssload-shaft1"></div>
                <div class="cssload-shaft2"></div>
                <div class="cssload-shaft3"></div>
                <div class="cssload-shaft4"></div>
                <div class="cssload-shaft5"></div>
                <div class="cssload-shaft6"></div>
                <div class="cssload-shaft7"></div>
                <div class="cssload-shaft8"></div>
                <div class="cssload-shaft9"></div>
                <div class="cssload-shaft10"></div>
            </div>
        </div>
    </div>


    <!-- HEADER -->
    <header id="jHeader">
        <nav class="navbar navbar-default" role="navigation">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Desplegar navegación</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
                <a class="navbar-brand" href="{{route('index')}}"><img src="{{ asset('images/logo.png') }}" alt="logo"></a>
            </div>

            <div class="collapse navbar-collapse navbar-ex1-collapse" id="navbar-muziq">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{route('index')}}">Home</a></li>
                    @if(Route::has('login'))
                        @auth 
                            @if(Auth::user()->role === 'admin')

                            @elseif(Auth::user()->role === 'seller')

                            @else 
                            <li><a href="{{route('dashboard')}}">Dashboard</a></li>
                            @endif
                        @else 
                            <li><a href="{{route('login')}}">Login</a></li>
                            <li><a href="{{route('register')}}">Sign Up</a></li>
                        @endif

                    @endif
                    <li><a href="{{route('about')}}">About Us</a></li>
                    <li><a href="{{route('contact')}}">Contact</a></li>
                    <li><a href="{{route('faqs')}}">FAQs</a></li>
                </ul>
            </div>

        </nav>
    </header>

    {{$slot}}

    <!-- CONTACTS -->
    <section class="inverse-color contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="col-contact">
                        <h4 class="title small">TOP Wave Music</h4>
                        <div class="voffset20"></div>
                        <p>1000 NE Miami Gardens Suite #100</p>
                        <p>Miami Beach, FL, 3343</p>
                        <ul class="contact">
                            <li><i class="fa fa-envelope"></i> support@topwavemusic.com</li>
                        </ul>
                        <h4 class="title small">Get socialized with us</h4>
                        <ul class="social-links">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="col-contact">
                        <h4 class="title small">Useful Links</h4>
                        <ul class="listings">
                            <li><a href="#">Musics</a></li>
                            <li><a href="#">Distribute your music</a></li>
                            <li><a href="#">How it works</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <div class="container">
            <p class="copy">© 2022. All Rights Reserved. Designed by Ajroni Web</p>
            <ul class="menu-footer">
                <li><a href="#">Disclaimer</a></li>
                <li><a href="#">terms & conditions</a></li>
                <li><a href="#">privacy policy</a></li>
            </ul>
        </div>
    </footer>
    

    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/colorpicker.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    @livewireScripts
</body>
</html>