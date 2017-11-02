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
        background-color:#343333;
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


    </style>
    <!-- Scripts -->
    <script>
        window.Jack_Website = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div  class="navbar-brand">
                        <a id="menu-toggle" href="#" class="glyphicon glyphicon-align-justify btn-menu toggle">
                            <i class="fa fa-bars"></i>
                        </a>
                        <a href="#" style="color:white;">Jack Portal</a>
                    </div>
                </div>
                <div id="navbar" class="collapse navbar-right navbar-collapse" >
                    <ul class="nav navbar-nav">
                        <!-- <li class="active"><a href="#">Home</a></li>
                        <li><a href="#about">About</a></li>
                    </ul> -->

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
                </div><!--/.nav-collapse -->
            </div>
        </nav>
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <nav id="spy">
                <ul class="sidebar-nav nav">
                    
                    <li class="item">
                        <a href="{{ url('dashboard') }}" data-toggle="tooltip" data-placement="right" title="Dashboard"><i class="glyphicon glyphicon-blackboard pads"></i> Dashboard</a>
                    </li>
                    <li class="item">
                        <a href="{{ url('courses') }}" data-toggle="tooltip" data-placement="right" title="Courses" ><i class="glyphicon glyphicon-folder-open pads"></i> Courses</a>
                    </li>
                    <li class="item">
                        <a href="{{ url('students') }}" data-toggle="tooltip" data-placement="right" title="Students"><i class="glyphicon glyphicon-list-alt pads"></i> Students</a>
                    </li>
                    <li class="item">
                        <a href="{{ url('gallery') }}" data-toggle="tooltip" data-placement="right" title="Gallery"><i class="glyphicon glyphicon-th pads"></i> Gallery</a>
                    </li>
                    <li class="item">
                        <a href="{{ url('events') }}" data-toggle="tooltip" data-placement="right" title="Events"><i class="glyphicon glyphicon-star pads"></i> Events</a>
                    </li>
                    <li class="item">
                       <a href="{{ url('promo-code') }}" data-toggle="tooltip" data-placement="right" title="Promo Code"><i class="glyphicon glyphicon-edit pads"></i> Promo Code</a>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- Page content -->
        <div id="page-content-wrapper">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel panel-danger">
                                <div class="panel-heading">
                                        Panel 1
                                </div>
                                <div class="panel-body">
                                    content body
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">                    
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                        Panel 1
                                </div>
                                <div class="panel-body">
                                    content body
                                </div>
                            </div>
                        </div>
                    </div>

                    @yield('content')
                </div>
            </div>
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
    <script type="text/javascript">
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("active");
            
        });
    </script>
    @yield('script_link')
</body>
</html>
