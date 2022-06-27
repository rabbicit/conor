<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Top Wave Music - Dashboard</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- plugins:css -->
        <link rel="stylesheet" href="{{ asset('dashboard/vendors/mdi/css/materialdesignicons.min.css')}}">
        <link rel="stylesheet" href="{{ asset('dashboard/vendors/flag-icon-css/css/flag-icon.min.css')}}">
        <link rel="stylesheet" href="{{ asset('dashboard/vendors/css/vendor.bundle.base.css')}}">
        <!-- endinject -->
        <!-- Plugin css for this page -->
        <link rel="stylesheet" href="{{ asset('dashboard/vendors/jquery-bar-rating/css-stars.css')}}" />
        <link rel="stylesheet" href="{{ asset('dashboard/vendors/font-awesome/css/font-awesome.min.css')}}" />
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <!-- endinject --> 
        <!-- Layout styles -->
        <link rel="stylesheet" href="{{ asset('dashboard/css/style.cs')}}s" />
        <!-- plugins:js -->
        <script src="{{ asset('dashboard/vendors/js/vendor.bundle.base.js')}}"></script>
        <!-- endinject -->
        @livewireStyles
    </head>
<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item pt-3 border-bottom">
                    <a class="nav-link d-block" href="">
                  <img class="sidebar-brand-logo" src="{{ asset('images/anime-logo.gif') }}" alt="" />
                  <img class="sidebar-brand-logomini" src="{{ asset('images/anime-logo.gif') }}" alt="" />
                </a>
                </li>
                <li class="nav-item border-bottom">
                    <a href="#" class="nav-link flex-column">
                        <div class="nav-profile-text d-flex ms-0 flex-column">
                            <span class="font-weight-semibold mb-1 mt-2 text-center">{{Auth::user()->name}}</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('member.dashboard')}}">
                  <i class="mdi mdi-compass-outline menu-icon"></i>
                  <span class="menu-title">Dashboard</span>
                </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('member.albums')}}">
                        <i class="mdi mdi-image-album menu-icon"></i>
                  <span class="menu-title">Album</span>
                </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('member.tracks')}}">
                        <i class="mdi mdi-library-music  menu-icon"></i>
                  <span class="menu-title">Tracks</span>
                </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('member.calendar')}}">
                        <i class="mdi mdi-calendar  menu-icon"></i>
                  <span class="menu-title">Calendar</span>
                </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('member.subscription')}}">
                  <i class="mdi mdi-account-multiple-outline menu-icon"></i>
                  <span class="menu-title">Membership</span>
                </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('member.profile')}}">
                  <i class="mdi mdi-account-multiple-outline menu-icon"></i>
                  <span class="menu-title">Profile</span>
                </a>
                </li>
            </ul>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
                <div class="navbar-menu-wrapper d-flex align-items-stretch">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                  <span class="mdi mdi-chevron-double-left"></span>
                </button>
                    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                        <a class="navbar-brand brand-logo-mini" href="{{route('index')}}"><img src="{{ asset('images/logo.png') }}" alt="logo" /></a>
                    </div>
                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item nav-logout d-none d-md-block me-3">
                            <a class="nav-link"  href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        </li>
                        <form action="{{route('logout')}}" method="POST" id="logout-form">
                            @csrf
                        </form>
                    </ul><button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                        <span class="mdi mdi-menu"></span>
                      </button>
                </div>
            </nav>
            <!-- partial -->

            <div class="main-panel">
                <div class="content-wrapper pb-0">
                    {{$slot}}
                </div>
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2022. All rights reserved.</span>
                    </div>
                </footer>
            <!-- partial -->
            </div>
        </div>

    </div>
    <!-- container-scroller -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('dashboard/vendors/jquery-bar-rating/jquery.barrating.min.js')}}"></script>
    <script src="{{ asset('dashboard/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{ asset('dashboard/vendors/flot/jquery.flot.js')}}"></script>
    <script src="{{ asset('dashboard/vendors/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{ asset('dashboard/vendors/flot/jquery.flot.categories.js')}}"></script>
    <script src="{{ asset('dashboard/vendors/flot/jquery.flot.fillbetween.js')}}"></script>
    <script src="{{ asset('dashboard/vendors/flot/jquery.flot.stack.js')}}"></script>
    <script src="{{ asset('dashboard/js/jquery.cookie.js')}}" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('dashboard/js/off-canvas.js')}}"></script>
    <script src="{{ asset('dashboard/js/hoverable-collapse.js')}}"></script>
    <script src="{{ asset('dashboard/js/misc.js')}}"></script>
    <script src="{{ asset('dashboard/js/settings.js')}}"></script>
    <script src="{{ asset('dashboard/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('dashboard/js/dashboard.js')}}"></script>
    <!-- End custom js for this page -->
    @livewireScripts
  </body>
</html>