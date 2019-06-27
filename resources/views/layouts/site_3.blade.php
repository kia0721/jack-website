<!DOCTYPE html>
<html lang="en" class="borderWeb">
<head>
 <!-- Site made with Mobirise Website Builder v4.8.3, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.8.3, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="{{ asset('assets/images/jack-lno-letters-128x128.png') }}" type="image/x-icon">
  <meta name="description" content="Home">
  <!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Home Page</title>


  <link rel="stylesheet" href="{{ asset('assets/custom/css/style.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('assets/web/assets/mobirise-icons/mobirise-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/tether/tether.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">

  <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap-grid.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap-reboot.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/dropdown/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/theme/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/mobirise/css/mbr-additional.css') }}" type="text/css">


  <link rel="stylesheet" href="{{ asset('css/custom.css') }}" type="text/css">
    <script src="{{ asset('assets/js/code.jquery.com.js') }}" type="text/javascript"></script>
    @yield('css_link_2')
    <!-- Scripts -->
    <script>
        window.Jack_Website = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
 <section class="menu cid-r5hypQ6Vvj" once="menu" id="menu2-10">

     <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="{{ url('home') }}">
                        <img src="{{ asset('assets/images/jack-lno-letters-122x122.jpg') }}" alt="JACK" title="" style="height: 5rem;">
                    </a>
                </span>
                
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                
                <li class="nav-item">
                    <a class="nav-link link text-black display-4" href="{{ url('about') }}">
                        About</a>
                </li>
                <li class="nav-item dropdown ">
                    <a class="nav-link link text-black dropdown-toggle progLink display-4" href="{{ url('program') }}" data-toggle="dropdown-submenu" aria-expanded="true">
                        Programs</a>
                        <div class="dropdown-menu programLink">
                            <a class="text-black dropdown-item display-4"  id="head_novice" href="{{ url('program') }}#noviceTab"  data-btn="noviceTab" onclick="ClassTab(this.id);">Novice Coder</a>
                            <a class="text-black dropdown-item display-4" href="{{ url('program') }}#juniorTab"   aria-expanded="false" id="head_junior" data-btn="juniorTab"onclick="ClassTab(this.id);">Junior Coder</a>
                            <a class="text-black dropdown-item display-4" href="{{ url('program') }}#masterTab"  data-btn="masterTab" aria-expanded="false" id="head_master" onclick="ClassTab(this.id);">Master Coder</a>
                            <a class="text-black dropdown-item display-4" href="{{ url('program') }}#mentoringTab" data-btn="mentoringTab" aria-expanded="true" id="head_mentoring" onclick="ClassTab(this.id);">Mentoring</a>
                        </div>
                </li>
                <li class="nav-item"><a class="nav-link link text-black display-4" href="{{ url('error') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-black display-4" href="{{ url('register') }}">
                        Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-black display-4" href="{{ url('cart') }}">
                        <img src="{{ asset('assets/images/cart icon-41.png') }}">

                        <span class="notification" style="
                            font-size: 10px;
                            background-color: red;
                            color: white;
                            border-radius: 50%;
                            padding: 8px;
                            margin-left: -11px;
                            margin-top: -13px;
                        "></span>
                    </a>
                        
                </li>
            </ul>
        </div>

        <div class="alert-wish alert-success" id="success-alert" style="margin-left: 25%; margin-top: 60px;">
            <button type="button" class="close" onclick="$('#success-alert').removeClass('active');">x</button>
            <strong>SUCCESS!</strong>
            <p id="alertMessage"></p>
        </div> 
</nav>



</section>
<div class="side-padding">

    <div class="border-mascot">
        <a  href="{{ url('register') }}" >
            <img src="{{ asset('assets/images/register_here_jack.png') }}" class=" mascot-size">
        </a>
    </div>
        
        @yield('content')
   

    

    <div class="py-4 bg-white w-100"></div>   
    <div class="py-2 bg-primary w-100"></div>    
    <section class="features3 cid-r4Icowcb9o" id="features3-9">
        <div class="container">
            <div class="media-container-row">
                <div class="card p-3 col-12 col-md-6 col-lg-4">
                    <div class="card-wrapper">
                        <div class="card-img">

                            <!-- About Us -->
                            <img src="{{ asset('assets/images/footer/footer_aboutus.png')}}" alt="About Us">

                            <div>
                                <a href="{{ url('about') }}" class="btn btn-primary display-4 w-75">
                                    <b>ABOUT US</b>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card p-3 col-12 col-md-6 col-lg-4">
                    <div class="card-wrapper">
                        <div class="card-img">

                            <!-- FAQs -->
                            <img src="{{ asset('assets/images/footer/footer_faqs.png') }}" alt="FAQs">

                            <div>
                                <a href="{{ url('faqs') }}" class="btn btn-primary display-4 w-75">
                                    <b>FAQs</b>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card p-3 col-12 col-md-6 col-lg-4">
                    <div class="card-wrapper">
                        <div class="card-img">

                            <!-- E-Magazine -->
                            <img src="{{ asset('assets/images/footer/footer_emag.png') }}" alt="E-Magazine">

                            <div>
                                <a href="{{ url('error') }}" class="btn btn-primary display-4 w-75">
                                    <b>E - MAGAZINE</b>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>
    </section>

    <section class="mbr-section form4 cid-r4IcBQ0MwC" id="form4-b">

        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <h2 class="pb-3 align-left text-color display-Kbold">
                        CONTACT US
                    </h2>
                    <div data-form-type="formoid">
                        <div data-form-alert="" hidden="">
                            Thanks for filling out the form!
                        </div>
                        <form class="block mbr-form" action="contactUs" method="post" data-form-title="Mobirise Form">
                            <!-- <input type="hidden" name="email" data-form-email="true" value="bMdb8UDHML/Ppr6gAqACPSdRNKuKPnxpqtpCnNepNW07l03xStAsRs74lFIcrIQqErnZRJ56tnSUcP4GGA+f1aU64R/I05Y9aCAa+NuTVfw8LCEeikpiCzW9XB3Rt2rl"> -->

                            @csrf
                            <div class="row">
                                <div class="col-md-12" data-for="fullname">
                                    <input type="text" class="form-control input" name="fullname" data-form-field="Name" placeholder="Your Name" required id="name-form4-b">
                                </div>
                                <div class="col-md-12" data-for="contactEmail">
                                    <input type="email" class="form-control input" name="contactEmail" data-form-field="Email" placeholder="Email" required id="email-form4-b">
                                </div>
                                <div class="col-md-12" data-for="messageDetail">
                                    <textarea class="form-control input" name="messageDetail" rows="8" data-form-field="Message" placeholder="Message"required style="resize:none" id="message-form4-b"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <div class="g-recaptcha" data-sitekey="6Le4v38UAAAAAEbpZNMl4JT7nE2eWu2yTFsyi1T-"></div>
                                </div>
                                <div class="col-md-12 align-center" style="margin-top: 10px;">
                                    <button id="contactUsBtn" type="submit" class="btn btn-secondary display-4"><b>SEND MESSAGE</b></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="icon-contacts pb-3">
                            <p class="mbr-text align-left mbr-fonts-style display-7">
                                <img src="{{ asset('assets/images/footer/icon_mail.png') }}" alt="email"> learncoding@jack.com.ph
                            </p>
                            <p class="mbr-text align-left mbr-fonts-style display-7">
                                <img src="{{ asset('assets/images/footer/icon_landline.png') }}" alt="phone"> (02) 636 7499 loc. 887
                            </p>
                            <p class="mbr-text align-left mbr-fonts-style display-7">
                                <img src="{{ asset('assets/images/footer/icon_facebook.png') }}" alt="facebook"> facebook.com/JackSchoolPH
                            </p>
                            <br>
                            <p class="mbr-text align-left mbr-fonts-style display-7">
                                <img src="{{ asset('assets/images/footer/icon_address.png') }}" alt="address"> Penthouse East Tower Philippine Stock Exchange Center, </br> Exchange Road, Ortigas Center, Pasig City 1605 Metro Manila Philippines
                            </p>
                    </div>

                    <div>
                        <div class="card-img">
                            <a href="https://www.google.com.ph/maps/place/Junior+Academy+for+Coding+Knowledge/@14.5829355,121.0604788,18.75z/data=!4m5!3m4!1s0x3397c814080a2083:0xacbc4b9edefd2d32!8m2!3d14.5826061!4d121.0621077"><img src="{{ asset('assets/images/footer/footer_map.png') }}"></a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

</div>
<!---Footer--->
   <section once="" class="cid-r4JXUyBSCx" id="footer6-h">

    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="col-12">
                <p class="mbr-text mb-0 mbr-fonts-style display-7">
                    © Copyright 2018 Junior Academy for Coding Knowledge - All Rights Reserved
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


  <script src="{{ asset('js/helper-util.js') }}"></script>
  <script src="{{ asset('assets/web/assets/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/popper/popper.min.js') }}"></script>
  <script src="{{ asset('assets/tether/tether.min.js') }}"></script>
  <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/smoothscroll/smooth-scroll.js') }}"></script>
  <script src="{{ asset('assets/mbr-tabs/mbr-tabs.js') }}"></script>
  <script src="{{ asset('assets/mbr-switch-arrow/mbr-switch-arrow.js') }}"></script>
  <script src="{{ asset('assets/dropdown/js/script.min.js') }}"></script>
  <script src="{{ asset('assets/touchswipe/jquery.touch-swipe.min.js') }}"></script>
  <script src="{{ asset('assets/parallax/jarallax.min.js') }}"></script>
  <script src="{{ asset('assets/theme/js/script.js') }}"></script>

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
