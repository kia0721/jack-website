<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Hotel Management System') }}</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="https://fonts.gstatic.com"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css"> -->

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">


    <link href="{{ asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('external/bootstrap3-dialog-master/dist/css/bootstrap-dialog.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css">

    
    <script src="{{ asset('external/jquery-3.3.1.min.js') }}"></script>
     <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
     <script src="{{ asset('external/bootstrap3-dialog-master/dist/js/bootstrap-dialog.min.js') }}"></script>
     <script src="{{ asset('js/common-html/common-page.js') }}"></script>
     <script src="{{ asset('js/helper-util.js') }}"></script>
     @yield('css')
     <script >
         var URL_JS = "{{asset('js')}}";
         var URL_CSS = "{{asset('css')}}";
         var URL_IMAGES = "{{asset('images')}}";
         var URL = "{{url('/')}}";
     </script>
</head>
<body>
    <div id="app">
        @guest
        @else
        <nav class="navbar navbar-default mainNavbar">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="{{ url('/') }}"><img id="logo" src="{{asset('images/logo.png')}}" width="100" /></a>
                </div>

                 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                           
                        @else
                           

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->firstname }}  {{ Auth::user()->lastname }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/profile') }}" >
                                            Profile
                                        </a>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>

                            @if(Auth::user()->hasAnyRole(['SMSGT Admin']))
                            <li class="nav-item">
                                <a href="{{ url('/settings') }}" class="btn-link">
                                  <span class="glyphicon glyphicon-cog"></span>
                                </a>
                            </li>

                            @endif
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        @endguest
        <main class="py-4">
            @guest
            <center>
                <br><br>
                <img src="{{asset('images/logo.png')}}" />

            </center>
            @endguest
            <div class="container">
                @yield('content')

                <div class="modal fade" id="loadingModal"  role="dialog" data-backdrop="static" data-keyboard="false">
                  <div class="modal-dialog modal-lg modal-sm">
                    <div class="modal-content">
                      <div class="modal-header js-blue-block">
                        
                        <h3 class="modal-title"></h3>
                      </div>
                      <div class="modal-body bg-lightblue">
                        <div class="loadSpin">
                            <i class="fa fa-refresh fa-spin"></i>
                        </div>
                      </div>
                      <!--    <div class="modal-footer"><a data-dismiss="modal" aria-hidden="true" role="button" class="btn btn-primary btn-lg">CREATE</a></div> -->
                    </div>
                  </div>
                </div>
            </div>
        </main>
    </div>


</body>

@yield('scripts')
</html>
