<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Jack {{ $titlePage }}</title>
    <link rel="shortcut icon" href="{{ asset('images/jack_icon.png') }}">
    @yield('css_link')
    <!-- Styles -->
    <!-- <link href="{{ asset('/css/app.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/mobi-style.css') }}" rel="stylesheet">
    <style type="text/css">
        

        .main-container {
            height: auto!important;
            min-height: 100%;
            margin-bottom: 63px;
        }

        div.outer { 
            right: 0px;
            bottom: 0px;
            position: fixed; 
            z-index: 20;
            cursor: pointer;
            background-color: #00bff3;
            color: white;
            width: 100%;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .main-wrapper{
            margin-top: 61px;
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
    
    <div id="main-wrapper" class="main-container">
        
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-brand">
                        <span class="navbar-logo">
                            <a href="{{ url('home') }}">
                                <img src="{{ asset('assets/images/jack-lno-letters-122x122.jpg') }}" alt="JACK" title="" style="height: 3.8rem;">
                            </a>
                        </span>
                        
                    </div>
                <div class="navbar-header">

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="nav-link link cartLink" href="{{ url('cart') }}">
                        <img src="{{ asset('assets/images/cart icon-41.png') }}">

                        <span class="notification" ></span>
                    </a>
                </div>
                <div id="navbar" class="collapse navbar-right navbar-collapse" >

                    <ul class="nav navbar-nav" >
                        
                        <li><a href="{{ url('about') }}">About</a></li>
                        <li><a href="{{ url('program') }}">Programs</a></li>
                        <li><a href="{{ url('stayTuned') }}"> Blog</a></li>
                        <li><a href="{{ url('register') }}">Register</a></li>

                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
        @yield('content')
        

    </div>
    <section >
        <div class="main-wrapper mobile-footer">
            <div class="row">
                <div class="col-xs-12 ">
                    <form class="block mbr-form" action="contactUs" method="post" data-form-title="Mobirise Form">
                        <!-- <input type="hidden" name="email" data-form-email="true" value="bMdb8UDHML/Ppr6gAqACPSdRNKuKPnxpqtpCnNepNW07l03xStAsRs74lFIcrIQqErnZRJ56tnSUcP4GGA+f1aU64R/I05Y9aCAa+NuTVfw8LCEeikpiCzW9XB3Rt2rl"> -->

                        @csrf
                        <div class="col-md-6 col-xs-12 text-center">
                            <div class="row">
                                <div class="col-xs-12 ">
                                    <h4>Contact Us</h4>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="fullname" data-form-field="Name" placeholder="Your Name" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="contactEmail" data-form-field="email" placeholder="Email" required>
                                    </div>

                                    <div class="form-group">
                                        <textarea class="form-control" name="messageDetail" data-form-field="message" placeholder="Your Message" required></textarea>
                                    </div>

                                    <div class="form-group">
                                        <div class="g-recaptcha" data-sitekey="6Le4v38UAAAAAEbpZNMl4JT7nE2eWu2yTFsyi1T-"></div>
                                    </div>

                                    <div class="form-group">
                                        <button class="form-control" id="contactUsBtn" name="contactUsBtn" >SEND MESSAGE</button> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="col-md-6 col-xs-12 text-center">
                        <div class="row">
                            <div class="col-xs-3 text-center">

                                <img src="{{ asset('images/mobile/00_FOOTER_EMAIL.png') }}" class="img-responsive">
                            </div>
                            <div class="col-xs-3 text-center">

                                <img src="{{ asset('images/mobile/00_FOOTER_FACEBOOK.png') }}" class="img-responsive">
                            </div>
                            <div class="col-xs-3 text-center">

                                <img src="{{ asset('images/mobile/00_FOOTER_LANDLINE.png') }}" class="img-responsive">
                            </div>
                            <div class="col-xs-3 text-center">

                                <img src="{{ asset('images/mobile/00_FOOTER_TELEGRAM.png') }}" class="img-responsive">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12"><br>
                        <p class="mbr-text align-left mbr-fonts-style display-7">
                            <img src="{{ asset('assets/images/footer/icon_mail.png') }}" alt="email"> learncoding@jack.com.ph
                        </p>
                        <p class="mbr-text align-left mbr-fonts-style display-7">
                            <img src="{{ asset('assets/images/footer/icon_landline.png') }}" alt="phone"> (02) 636 7499 loc. 887
                        </p>
                        <p class="mbr-text align-left mbr-fonts-style display-7">
                            <img src="{{ asset('assets/images/footer/icon_mail.png') }}" alt="facebook"> facebook.com/JackSchoolPH
                        </p>
                        <br>
                        <p class="mbr-text align-left mbr-fonts-style display-7">
                            <img src="{{ asset('assets/images/footer/icon_address.png') }}" alt="address"> Penthouse East Tower Philippine Stock Exchange Center, </br> Exchange Road, Ortigas Center, Pasig City 1605 Metro Manila Philippines
                        </p>

                        <p>
                        <a href="https://www.google.com.ph/maps/place/Junior+Academy+for+Coding+Knowledge/@14.5829355,121.0604788,18.75z/data=!4m5!3m4!1s0x3397c814080a2083:0xacbc4b9edefd2d32!8m2!3d14.5826061!4d121.0621077"><img src="{{ asset('assets/images/footer/footer_map.png')}}" class="img-responsive"></a></p> 
                    </div>
                </div>
                <div class="col-xs-12">
                    <p class="copyright">
                        © Copyright 2018 Junior Academy for Coding Knowledge<br>All Rights Reserved
                    </p>
                </div>
            </div>
        </div>
    </section>

    
<div class="modal" id="jackModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
         
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" id="jackModalClose" class="btn" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>
<!-- 
    
        <div class="outer"  onclick="location.href='{{ url('/register') }}';">
            <center><button class="btn" style="border-radius: 5px; border-color: white; background-color: transparent;">REGISTER HERE!</button></center>
        </div> -->
   <!--  <footer class="footer" >
    
        <div class="container">
            <p class="text-xs-center">Copyright © JACK | 2016</p>
        </div>
    </footer> -->

   
    <script src="{{ asset('/js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/js/dialog.js') }}"></script>
    <script src="{{ asset('/js/ba-debug.js') }}" ></script>

    <script src="{{ asset('js/helper-util.js') }}"></script>

    <script src="{{ asset('/js/jquery.form.js') }}"></script>
    {!! NoCaptcha::renderJs() !!}
   <script type="text/javascript">
    var URL = '{{ url("/") }}';
    var cart = [];

    </script>


  @yield('script_link')
  

<script type="text/javascript">
   
    $(document).ready (function(){
        var currentParams = {
        
        };
        var success = function(data) {
            cart = data;
            updateNotification();
            populateSavedCourses();
        };
        var failure = function(data) {

        };
        var url = "getSavedCart";
        restApiCallGET(url, currentParams, success, failure, failure);


    });


    function updateNotification(){
        if(cart.length >= 1){
            $('.notification').html(cart.length);
            $('.notification').addClass('active');
        } else {

            $('.notification').removeClass('active');
        }
    }

    $("body").on("click","#contactUsBtn",function(e){
        $(this).parents("form").ajaxForm(contactUs);
    });



    var contactUs = { 
        beforeSubmit:function(formData, jqForm, options){
            $("#contactUsBtn").prop("disabled", true);
        },
        complete: function(response) 
        {
            $("#contactUsBtn").prop("disabled", false);
            var data = response.responseJSON;
            if(data.isSuccessful){
                JackBootstrap.openModal("Success", data.result, 'primary');

                $('#jackModalClose').click(function() {
                    window.location = URL;
                });
            }
            else
                JackBootstrap.openModal("Error", data.result, 'danger');
        }
    };

  </script>
</body>
</html>
