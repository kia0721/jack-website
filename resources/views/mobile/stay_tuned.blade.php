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
        
      <img src="{{ asset('images/mobile/stay_tuned.png') }}" alt="JACK"  class="img-responsive">

    </div>
    <section >
        <div class="main-wrapper mobile-footer">
            <div class="row">
                <div class="col-xs-12 ">

                    <form class="block mbr-form" action="contactUs" method="post" data-form-title="Mobirise Form">
                        <input type="hidden" name="email" data-form-email="true" value="bMdb8UDHML/Ppr6gAqACPSdRNKuKPnxpqtpCnNepNW07l03xStAsRs74lFIcrIQqErnZRJ56tnSUcP4GGA+f1aU64R/I05Y9aCAa+NuTVfw8LCEeikpiCzW9XB3Rt2rl">

                        @csrf
                        <div class="col-md-6 col-xs-12 text-center">
                            <div class="row">
                                <div class="col-xs-12 ">
                                    <h4>Contact Us</h4>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="fullname" data-form-field="Name" placeholder="Your Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="contactEmail" data-form-field="email" placeholder="Email">
                                    </div>

                                    <div class="form-group">
                                        <textarea class="form-control" name="messageDetail" data-form-field="message" placeholder="Your Message"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <div class="g-recaptcha" data-sitekey="6Le4v38UAAAAAEbpZNMl4JT7nE2eWu2yTFsyi1T-"></div>
                                    </div>

                                    <div class="form-group">
                                        <button class="form-control" name="contactUsBtn" >SEND MESSAGE</button> 
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
                            <img src="{{ asset('assets/images/footer/icon_address.png') }}" alt="address"> Penthouse, East Tower, Philippine Stock Exchange Center, Exchange Road, Ortigas Center, Pasig City, 1605
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
 
    
    @yield('script_link')
</body>
</html>
