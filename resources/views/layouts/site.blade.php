<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Jack Website</title>
    <link rel="shortcut icon" href="{{ asset('images/jack_icon.png') }}">
    @yield('css_link')
    <!-- Styles -->
    <!-- <link href="{{ asset('/css/app.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <style type="text/css">
        

        #main-container {
            height: auto!important;
            min-height: 100%;
        }

        div.outer { 
            right: 0px;
            bottom: 0px;
            position: fixed; 
            z-index: 20;
            cursor: pointer;
        }
       
    </style>
    @yield('css_link_2')
    <!-- Scripts -->
    <script>
        window.Jack_Website = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    
    <div id="wrapper main-container" class="active">
        
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div  class="navbar-brand" style="padding: 0px 15px;">
                        <a id="menu-toggle" href="#" class="glyphicon glyphicon-align-justify btn-menu toggle">
                            <i class="fa fa-bars"></i>
                        </a>

                        <a href="{{ url('/') }}" ><img src="{{ asset('/images/jack_logo.png') }}" /></a>
                    </div>
                </div>

               <!--  <div class="header-secondary">
                  <div class="wrapper">
                    <div>
                      <div id="services" class="set set-one" style="display: block;">
                        <div class="icon">
                          <div>
                            <img src="http://maverickheroes.com/wp-content/themes/maverickheroes/images/template/service-packages.png" alt="Promo Services" style="top: 25px;">
                          </div>
                          <div>
                            <h2>Promo Packages</h2>
                            <nav>
                              <a href="http://maverickheroes.com/services-packages/starter-website/ ">Starter Website</a><a href="http://maverickheroes.com/services-packages/corporate-website/ ">Corporate Website</a><a href="http://maverickheroes.com/services-packages/basic-ecommerce/ ">Basic Ecommerce</a><a href="http://maverickheroes.com/services-packages/advanced-ecommerce/ ">Advanced Ecommerce</a>            </nav>
                          </div>
                        </div>
                        <div class="icon">
                          <div>
                            <img src="http://maverickheroes.com/wp-content/themes/maverickheroes/images/template/service-website.png" alt="Website Services" style="top: 0px;">
                          </div>
                          <div>
                            <h2>Website Services</h2>
                            <nav>
                              <a href="http://maverickheroes.com/services/web-design/ ">Web Design</a><a href="http://maverickheroes.com/services/web-development/ ">Web Development</a><a href="http://maverickheroes.com/services/web-programming/ ">Web Programming</a><a href="http://maverickheroes.com/services/web-copywriting/ ">Web Copywriting</a>            </nav>
                          </div>
                        </div>
                        <div class="icon">
                          <div>
                            <img src="http://maverickheroes.com/wp-content/themes/maverickheroes/images/template/service-marketing.png" alt="Marketing Services" style="top: 10px;">
                          </div>
                          <div>
                            <h2>Marketing Services</h2>
                            <nav>
                              <a href="http://maverickheroes.com/services/corporate-identity/ ">Corporate Identity</a><a href="http://maverickheroes.com/services/marketing-print/ ">Marketing  &amp; Print</a>            </nav>
                          </div>
                        </div>
                        <div class="clr"></div>
                      </div>
                    </div>
                  </div>
                </div> -->
                <div id="navbar" class="collapse navbar-right navbar-collapse" >
                    <ul class="nav navbar-nav" style="font-weight: bold;">
                        <li><a href="{{ url('/courses') }}"><img src="{{ asset('/images/courses.png') }}" class="icon-menu-top"> Courses</a></li>
                        <li><a href="{{ url('/calendar') }}"><img src="{{ asset('/images/calendar.png') }}" class="icon-menu-top"> Calendar</a></li>
                        <li><a href="{{ url('/e-magazine') }}"><img src="{{ asset('/images/e-magazine.png') }}" class="icon-menu-top"> E-Magazine</a></li>
                        <li><a href="{{ url('/faqs') }}"><img src="{{ asset('/images/faqs-icon.png') }}" class="icon-menu-top"> FAQ's</a></li>
                        <li><a href="{{ url('/home#Contact-us') }}" id="contactUsLink"><img src="{{ asset('/images/contact us.png') }}" class="icon-menu-top"> Contact us</a></li>

                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
        <div class="outer" onclick="location.href='{{ url('/register') }}';">
            <img src="{{ asset('/images/register_here.png') }}"/>
        </div>
        @yield('content')
        
    </div>

    
   <!--  <footer class="footer" >
    
        <div class="container">
            <p class="text-xs-center">Copyright © JACK | 2016</p>
        </div>
    </footer> -->

   
    <script src="{{ asset('/js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/js/dialog.js') }}"></script>
    <script src="{{ asset('/js/ba-debug.js') }}" ></script>
    <script src="{{ asset('/js/jquery.ba-throttle-debounce.js') }}"></script>
    <script type="text/javascript">
        resizeLayerBg();
        function resizeLayerBg(){
            var height = $( window ).height();
            console.log(height);

            $('.layer-bg').css( "height", height );
            
            
        }
        
    </script>
    
    @yield('script_link')
</body>
</html>
