<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Jack Website</title>

    @yield('css_link')
    <!-- Styles -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/custom_style.css') }}" rel="stylesheet">
    <style type="text/css">
        td, th {
    vertical-align: middle !important;
    }
.left, .right {
        float:left;
        height:100vh;
    }
    
.left {
        background: #337ab7;
        display: inline-block;
        white-space: nowrap;
        width: 50px;
        transition: width 1s ;
    }

.right {
        background: #fff;
        width: 350px;
        transition: width 1s;
        border-style:solid;
        border-color:#ccc;
        border-width:1px;
    }    

.left:hover {
        width: 250px;
    }    
    
.item:hover {
        background-color:#ccc;
        }
        
.left .glyphicon {
        margin:15px;
        width:20px;
        color:#fff;
    }
    
.right .glyphicon {
        color:#a9a9a9;
    }
span.glyphicon.glyphicon-refresh{
    font-size:17px;
    vertical-align: middle !important;
    }
    
.item {
        height:50px;
        overflow:hidden;
        color:#fff;
    }
.title {
        background-color:#eee;
        border-style:solid;
        border-color:#ccc;
        border-width:1px;
        box-sizing: border-box;
    }
.search:hover {
        border-color:#4aa9fb;
        border-width:1px;
    }
.search {
    padding:3px 8px 3px !important;
    }
input[type=search] {
    padding: 10px 0px 10px;
    border: 0px solid #fff;
    background: #eee;
    -webkit-appearance: none;
    width:90%;
    float:none;
}
input[type=search]:focus {
    outline:none;
    }
.type{
    height: 47px;;
    }
.date{
    background-color:#f7f7f7
    }
.docdate {
    vertical-align:bottom !important;
    }
.distr {
    margin: 0 0 5px;
    font-size: 12px;
    }
.ndoc {
    margin: 0 0 5px;
    }
.storage {
    margin: 0;
    color: #aaa !important;
    font-size: 12px;
    }
        
    
    
   

    


    </style>
    <!-- Scripts -->
    <script>
        window.Jack_Website = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                       Jack Website <span style="font-size: 8px">
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <!-- <li><a href="{{ url('/register') }}">Register</a></li> -->
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
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        <div class="left">
            <div class="item">
                <span class="glyphicon glyphicon-th-large"></span>
            </div>
            
            <div class="item active">
                <span class="glyphicon glyphicon-th-list"></span>
                <a href="{{ url('dashboard') }}">Dashboard</a></div>
            <div class="item">
            <span class="glyphicon glyphicon-log-out"></span>
                <a href="{{ url('surveys') }}">Survey List</a></div>
            
            <div class="item">
                <span class="glyphicon glyphicon-random"></span>
                <a href="{{ url('create-survey') }}">Create Survey</a></div>
            
            @if(Auth::user()->user_type == 'Admin')
            <div class="item">
                <span class="glyphicon glyphicon-log-in"></span>
                <a href="{{ url('accounts') }}">Account</a></div> 
            @endif
        </div>
           
            <div class="right">
                
                @yield('content')
            </div>
        
         
        </div>

    <footer class="footer" >
    
        <div class="container">
            <p class="text-xs-center"><strong>Jack Website</strong> | Copyright © Jack, Inc. 2017</p>
        </div>
    </footer>

    <script src="{{ asset('/js/jquery-3.1.1.min.js') }}"></script>
    

    <!-- <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> -->
    <!--script src="/js/bootstrap.min.js"></script -->
    <script src="{{ asset('/js/app.js') }}"></script>
    <script src="{{ asset('/js/dialog.js') }}"></script>
    @yield('script_link')
</body>
</html>
