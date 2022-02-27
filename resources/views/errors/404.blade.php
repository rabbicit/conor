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
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,600,700');
@import url('https://fonts.googleapis.com/css?family=Catamaran:400,800');
.error-container {
  text-align: center;
  font-size: 180px;
  font-family: 'Catamaran', sans-serif;
  font-weight: 800;
  margin: 20px 15px;
}
.error-container > span {
  display: inline-block;
  line-height: 0.7;
  position: relative;
  color: #FFB485;
}
.error-container > span {
  display: inline-block;
  position: relative;
  vertical-align: middle;
}
.error-container > span:nth-of-type(1) {
  color: #D1F2A5;
  animation: colordancing 4s infinite;
}
.error-container > span:nth-of-type(3) {
  color: #F56991;
  animation: colordancing2 4s infinite;
}
.error-container > span:nth-of-type(2) {
  width: 120px;
  height: 120px;
  border-radius: 999px;
}
.error-container > span:nth-of-type(2):before,
.error-container > span:nth-of-type(2):after {
	border-radius: 0%;
	content:"";
	position: absolute;
	top: 0; left: 0;
	width: inherit; height: inherit;
  border-radius: 999px;
	box-shadow: inset 30px 0 0 rgba(209, 242, 165, 0.4),
				inset 0 30px 0 rgba(239, 250, 180, 0.4),
				inset -30px 0 0 rgba(255, 196, 140, 0.4),	
				inset 0 -30px 0 rgba(245, 105, 145, 0.4);
  animation: shadowsdancing 4s infinite;
}
.error-container > span:nth-of-type(2):before {
	-webkit-transform: rotate(45deg);
	   -moz-transform: rotate(45deg);
			transform: rotate(45deg);
}

.screen-reader-text {
    position: absolute;
    top: -9999em;
    left: -9999em;
}
@keyframes shadowsdancing {
  0% {
    box-shadow: inset 30px 0 0 rgba(209, 242, 165, 0.4),
				inset 0 30px 0 rgba(239, 250, 180, 0.4),
				inset -30px 0 0 rgba(255, 196, 140, 0.4),	
				inset 0 -30px 0 rgba(245, 105, 145, 0.4);
  }
  25% {
    box-shadow: inset 30px 0 0 rgba(245, 105, 145, 0.4),
				inset 0 30px 0 rgba(209, 242, 165, 0.4),
				inset -30px 0 0 rgba(239, 250, 180, 0.4),	
				inset 0 -30px 0 rgba(255, 196, 140, 0.4);
  }
  50% {
     box-shadow: inset 30px 0 0 rgba(255, 196, 140, 0.4),
				inset 0 30px 0 rgba(245, 105, 145, 0.4),
				inset -30px 0 0 rgba(209, 242, 165, 0.4),	
				inset 0 -30px 0 rgba(239, 250, 180, 0.4);
  }
  75% {
   box-shadow: inset 30px 0 0 rgba(239, 250, 180, 0.4),
				inset 0 30px 0 rgba(255, 196, 140, 0.4),
				inset -30px 0 0 rgba(245, 105, 145, 0.4),	
				inset 0 -30px 0 rgba(209, 242, 165, 0.4);
  }
  100% {
    box-shadow: inset 30px 0 0 rgba(209, 242, 165, 0.4),
				inset 0 30px 0 rgba(239, 250, 180, 0.4),
				inset -30px 0 0 rgba(255, 196, 140, 0.4),	
				inset 0 -30px 0 rgba(245, 105, 145, 0.4);
  }
}
@keyframes colordancing {
  0% {
    color: #D1F2A5;
  }
  25% {
    color: #F56991;
  }
  50% {
    color: #FFC48C;
  }
  75% {
    color: #EFFAB4;
  }
  100% {
    color: #D1F2A5;
  }
}
@keyframes colordancing2 {
  0% {
    color: #FFC48C;
  }
  25% {
    color: #EFFAB4;
  }
  50% {
    color: #D1F2A5;
  }
  75% {
    color: #F56991;
  }
  100% {
    color: #FFC48C;
  }
}

/* demo stuff */
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
body {
  background-color: #416475;
  margin-bottom: 50px;
}
html, button, input, select, textarea {
    font-family: 'Montserrat', Helvetica, sans-serif;
    color: #92a4ad;
}
h1 {
  text-align: center;
  margin: 30px 15px;
}
.zoom-area { 
  max-width: 490px;
  margin: 30px auto 30px;
  font-size: 19px;
  text-align: center;
}
.link-container {
  text-align: center;
}
a.more-link {
  text-transform: uppercase;
  font-size: 13px;
    background-color: #92a4ad;
    padding: 10px 15px;
    border-radius: 0;
    color: #416475;
    display: inline-block;
    margin-right: 5px;
    margin-bottom: 5px;
    line-height: 1.5;
    text-decoration: none;
  margin-top: 50px;
  letter-spacing: 1px;
}
h1 {
	color: #fff;
}
.zoom-area {
	color: #fff;
}
    </style>
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
                <a class="navbar-brand" href="{{route('index')}}"><h1>TOPWAVEMUSIC</h1></a>
            </div>

            <div class="collapse navbar-collapse navbar-ex1-collapse" id="navbar-muziq">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li><a href="{{route('about')}}">About Us</a></li>
                    <li><a href="{{route('contact')}}">Contact</a></li>
                    <li><a href="{{route('faqs')}}">FAQs</a></li>
                    @if(Route::has('login'))
                        @auth 
                            @if(Auth::user()->role === 'admin')
                                <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                                <li><a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                <form action="{{route('logout')}}" method="POST" id="logout-form">
                                    @csrf
                                </form></li>

                            @elseif(Auth::user()->role === 'member')
                                <li><a href="{{route('member.dashboard')}}">Dashboard</a></li>
                                <li><a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                <form action="{{route('logout')}}" method="POST" id="logout-form">
                                    @csrf
                                </form></li>
                            @else 
                                <li><a href="{{route('dashboard')}}">Dashboard</a></li>
                                <li><a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                <form action="{{route('logout')}}" method="POST" id="logout-form">
                                    @csrf
                                </form></li>
                            @endif
                        @else 
                            <li><a href="{{route('login')}}">Login</a></li>
                            <li><a href="{{route('register')}}">Sign Up</a></li>
                        @endif

                    @endif
                </ul>
            </div>

        </nav>
    </header>
    <section class="intro intro-mini full-width jIntro bg-blog" id="anchor00">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="text-center">
                <h1 class="primary-title">Not found</h1>
              </div>
            </div>
          </div>
        </div>
      </section>

    <section class="two-boxes" style="padding:60px 0">
        <h1>404 not found page</h1>
        <p class="zoom-area"><b>You </b> can find more details by going to our main page </p>
        <section class="error-container">
          <span>4</span>
          <span><span class="screen-reader-text">0</span></span>
          <span>4</span>
        </section>
        <div class="link-container">
          <a href="{{route('index')}}" class="more-link">Back to Main page</a>
        </div>
    </section>

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
                            <li><a href="{{route('about')}}">About Us</a></li>
                            <li><a href="{{route('register')}}">Distribute your music</a></li>
                            <li><a href="{{route('index')}}#anchor05">How it works</a></li>
                            <li><a href="{{route('contact')}}">Contact Us</a></li>
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
                <li><a href="{{route('terms')}}">terms & conditions</a></li>
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