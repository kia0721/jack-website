@extends('layouts.site')

@section('css_link')

    <style type="text/css">
     

    .navigation:before {
        background: url(../images/nav.png) no-repeat 0 -2px;
        bottom: 100%;
        content: '';
        display: block;
        height: 90px;
        margin-bottom: -5px;
        position: absolute;
        left: 70%;
        width: 90px;
        top: -80px;
    }

    .navigation .Welcome {
        background-position: 0 -88px;
        height: 40px !important;
        /*width: 84px;*/
    }
    .icon.Welcome .label{
        color: #eca220 !important;
    }

    .navigation .About-us {
        background-position: 0 -135px;
        height: 40px !important;
        width: 84px !important;
        
    }

    .icon.About-us .label{
        color: #0b52a4 !important;
    }

    .navigation .Courses {
        background-position: 0 -175px;
        
    }

    .icon.Courses .label{
        top: 15px;
        color: #357625 !important;
    }


    .navigation .Gallery {
        background-position: 0 -229px;
        /*height: 46px;
        width: 84px;*/
    }
    .icon.Gallery .label{
       color: #b50a06 !important;
    }
    .navigation .Contact-us {
        background-position: 0 -280px;
       /* height: 50px;
        width: 84px;*/
    }
    .icon.Contact-us .label{
       color: #7d40a8 !important;
    }
    .navigation li {
        position: relative;
        margin-bottom: 3px;
    }
   
    .navigation .icon {
        display: block;
        background-image: url(../images/nav.png);
        cursor: pointer;
        height: 51px;
        width: 84px;
    }

    .navigation .label {
        display: none;
        background-color: #fff;
        margin-right: 15px;
        left: 115%;
        top: 10px;
        padding: 7px 5px 10px;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        -webkit-box-shadow: 0px 1px 1px 0px rgba(0,0,0,0.15);
        -moz-box-shadow: 0px 1px 1px 0px rgba(0,0,0,0.15);
        box-shadow: 0px 1px 1px 0px rgba(0,0,0,0.15);
        color:black;
        width:80px;
        height: 24px;
        
    }
 
    .navigation .label, .navigation .label:after {
        position: absolute;
    }

    .navigation .label:after {
        content: '';
        height: 0;
        right: 100%;
        margin-top: -5px;
        top: 2px;
        top: 50%;
        width: 0;
        border-top: 5px solid #ce0c0c00;
        border-right: 10px solid #fff;
        border-bottom: 5px solid transparent;
    }
    
    .navigation .label, .navigation .label:after {
        position: absolute;
    }

    .navigation{
        margin-top: -105px;position: fixed;    left: 0px;    top: 50%;    z-index: 20;
    }


    .bg1 {
        background-image: url(../images/01_BG.png);
        background-color: #d3cac1;
    }

    .bg2 {
        background-image: url(../images/02_BG.png);
        background-color: #d6f2e7;
    }
    .bg3 {
        background-image: url(../images/03_BG.png);
        background-color: #fff0f1;
    }

    .bg4 {
        background-image: url(../images/04_BG.png);
        background-color: #a9bec7;
    }
    .bg5 {
        background-image: url(../images/05_BG.png);
        background-color: #fff0f0;
    }

    
    .layer-holder {
        background-position: center center;
        background-repeat: no-repeat;
        height: 100%;
        min-height: 100%;
        overflow: hidden;
    }

    .sub-con{
        height: 768px;
        margin-top: -396px;
        position: absolute;
        top: 50%;
        width: 100%;
        margin-left: -15px;
        
    }


    .container{
        height: 100%;
        margin: 0 auto;
        max-width: 1024px;
        position: relative;
    }

    .characters {
        height: 768px;
        left: 50%;
        margin-left: -512px;
        margin-top: -354px;
        min-height: 768px;
        position: fixed;
        top: 50%;
        width: 1024px;
        z-index: 10;
        
    }

    .char-pos{
        -webkit-transition-property: top, bottom;
        /* -webkit-transition-duration: 5s; */
        -webkit-transition: all 1s ease;
        -moz-transition: all 1s ease;
        -o-transition: all 1s ease;
        transition: all 1s ease;

        position: absolute;
        bottom: 28px;
    /*bottom: 17px;*/
    }

    .sub-con > div {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 14px;
    }

    .top-img{
        z-index: 14;
    }
    .top-description{
        z-index: 14;
        
    }

    .top-description > div{
        position: absolute;
    }
    img {
        max-width: 100%;
        height: auto;
    }

    .form-control{
        margin-bottom: 10px;
    }


    #submitContactUs {
      background: #00bef3;
      background-image: -webkit-linear-gradient(top, #00bef3, #00abda);
      background-image: -moz-linear-gradient(top, #00bef3, #00abda);
      background-image: -ms-linear-gradient(top, #00bef3, #00abda);
      background-image: -o-linear-gradient(top, #00bef3, #00abda);
      background-image: linear-gradient(to bottom, #00bef3, #00abda);
      -webkit-border-radius: 9;
      -moz-border-radius: 9;
      border-radius: 9px;
      color: black;
      font-size: 20px;
      padding: 10px 20px 10px 20px;
      text-decoration: none;
      width: 200px;
    }

    #submitContactUs:hover {
      background: #00abda;
      background-image: -webkit-linear-gradient(top, #00abda, #00bef3);
      background-image: -moz-linear-gradient(top, #00abda, #00bef3);
      background-image: -ms-linear-gradient(top, #00abda, #00bef3);
      background-image: -o-linear-gradient(top, #00abda, #00bef3);
      background-image: linear-gradient(to bottom, #00abda, #00bef3);
      text-decoration: none;
    }
    </style>
@endsection

@section('content')

<div class="navigation" >
            <ul >
                    
                <li >
                    <p class="icon Welcome"><span class="label">Welcome</span></p>
                </li>
                <li >
                    <p class="icon About-us"><span class="label">About Us</span></p>
                </li>
                <li >
                    <p class="icon Courses"><span class="label">Courses</span></p>
                </li>
                <li >
                    <p class="icon Gallery"><span class="label">Gallery</span></p>
                </li>
                <li >
                    <p class="icon Contact-us"><span class="label">Contact us</span></p>
                </li>
            </ul>
        </div>
        <div class="main-wrapper">

            <div class="characters charpos2">
                <div class="char-pos">
                    <img src="../images/CHARACTERS.png" />
                </div>
                 <div class="mouse-scroll"></div>
            </div>
            <!-- Page content -->

            <section data-name="Welcome" class="layer pos1" >
                <div class="layer-holder layer-bg bg1"  id="Welcome">
                    <div class="container">
                        <div class="sub-con" >
                            <div class="top-img" >
                                <img src="../images/01_TOP.png" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section data-name="About-us"  class="layer  pos2" >
                <div class="layer-holder layer-bg bg2" id="About-us">
                    <div class="container">
                        <div class="sub-con" >
                            <div class="top-description" style="z-index: 16;">
                                <div style="top: 176px; left: 243px;" >
                                    <h1>ABOUT THE ACADEMY</h1>
                                </div>
                                <div  style="top: 239px; left: 64px; max-width: 800px;" >
                                    <p>In today's digital world, coding has become a fundamental skill that is best taught at an early age. When kids learn how to create using the latest hardware trends and innovations, they also learn how to be more creative, at the same time, using logic, to solve problems.
                                    </p>
                                    <p style="max-width: 700px;">
                                    JACK's mission is to provide kids with the highest quality learning experience by celebrating and encouraging their creativity through dynamic and project-based learning all in a fun and engaging environment.</p>
                                </div>
                                <div style="top: 135px; left: 653px; cursor: pointer;" >
                                    <IMG SRC="../images/play-btn.gif"/>
                                </div>
                            </div>
                            <div class="top-img" >
                                <img src="../images/02_TOP.png" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section data-name="Courses" class="layer  pos3" >
                <div class="layer-holder layer-bg bg3"  id="Courses">
                    <div class="container">
                        <div class="sub-con" >
                            <div class="top-description" style="z-index: 16;">
                                <div style="top: 145px; left: 380px;" >
                                    <h1>COURSES OFFERED</h1>
                                </div>
                                <div  style="top: 239px; left: 200px; max-width: 800px;" >
                                    <p>In today's digital world, coding has become a fundamental skill that is best taught at an early age. When kids learn how to create using the latest hardware trends and innovations, they also learn how to be more creative, at the same time, using logic, to solve problems.
                                    </p>
                                </div>
                                <div  style="top: 372px; left: 94px; width: 169px; height:72px; cursor: pointer;" onclick="location.href='{{ url('/courses') }}';" >
                                    &nbsp
                                </div>
                            </div>
                            <div class="top-img" >
                                <img src="../images/03_TOP.png" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section data-name="Gallery" class="layer pos4" >
                <div class="layer-holder layer-bg bg4"  id="Gallery">
                    <div class="container">
                        <div class="sub-con" >
                            <div class="top-description" style="z-index:16 !important;" >
                                <div style="top: 372px; left: 89px; text-align: center; width: 180px; height:71px; cursor: pointer;" onclick="location.href='{{ url('/gallery') }}';">
                                    <IMG SRC="../images/gallery.gif" style="margin-top: 10px;"/>
                                </div>
                            </div>
                            <div class="top-img" >
                                <img src="../images/04_TOP.png" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section data-name="Contact-us"  class="layer pos5" >
                <div class="layer-holder layer-bg bg5" id="Contact-us">
                    <div class="container">
                        <div class="sub-con" >
                            <div class="top-description" style="z-index: 16; padding-right: 42px;">
                                <div style="top: 165px; left: 380px;" >
                                    <h1>CONTACT US!</h1>
                                </div>
                                <div  style="top: 239px; left: 230px; max-width: 800px;" >
                                    <p>We like to create things with fun, open-minded people. Feel free to say hello!
                                    </p>
                                </div>

                                <div style="top: 275px; left: 201px; max-width: 800px; background-color: #ffffff91; border-radius: 10px; padding-right: 40px;" >
                                    <div class="col-md-12" style="border-radius: 10px; border-width: 2px; border-color: #f5af0a; border-style: solid; margin: 20px;">
                                        <div class="col-md-6">
                                            <p><b>ADDRESS<br></b></p>
                                            <p>Penthouse, East Tower, <br>
                                            Philippine Stock Exchange<br>
                                            Center, Exchange Road, Ortigas<br>
                                            Center, Pasig City, 1605</p>
                                        </div>
                                        <div class="col-md-6">
                                            
                                            <p><b>CONTACTS<br></b></p>
                                            <p>Email: learncoding@jack.com.ph <br>
                                            Phone: +63977 841 0482<br>
                                            Landline: (02) 636 74 99 loc. 887<br>
                                            <a href="http://www.facebook.com/JackSchoolPH" target="_blank">facebook.com/JackSchoolPH</a> </p>
                                        </div>
                                    </div>
                                </div>
                                <div id="contactUsShowFormBtn" data-toggle="modal" data-target="#contactUsShowFormModal" style="top: 130px; left: 653px; cursor: pointer;" >
                                    <IMG SRC="../images/mail-btn.gif"/>
                                </div>
                            </div>
                            <div class="top-img" >
                                <img src="../images/05_TOP.png" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>


        <div id="contactUsShowFormModal" class="modal fade" role="dialog" >
        <div class="modal-dialog modal-md" style="width:800px;">
                <!-- Modal content-->
                <div class="modal-content" style="border-radius: 30px; background-color: #f7b11b;">
                    
                    <form class="form-horizontal"  method="POST" action="{{ url('contactUs') }}">
                    <div class="modal-body" style="padding: 20px 30px; ">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 style="margin-top: 10px;     display: inline-block;">CONTACT FORM</h2>
                                <button type="button" class="close pull-right" data-dismiss="modal">&times;</button>
                            </div>
                                {{ csrf_field() }}
                                <input type="hidden" name="user_type" id="user_type"/>

                                 <div class="col-md-6" style="margin-top: 20px;">
                                    <input id="fullname" type="text" class="form-control" name="fullname" placeholder="FULLNAME" required autofocus>
                                    <input id="email" type="email" class="form-control" name="email" placeholder="EMAIL"  required>
                                    <input id="contactNum" type="text" class="form-control" name="contactNum" placeholder="CONTACT NUMBER" required >

                                    <textarea id="message_detail" type="text" class="form-control" maxlength="140"  name="message_detail" placeholder="MESSAGE" style="height:177px;" required ></textarea>
                                </div>  
                                <div class="col-md-6 text-xs-center"><br>
                                    <img src="../images/blue_char_cf.png"  width="150" />
                                </div> 
                                <div class="col-md-6 text-xs-center" style="margin-top: 20px;">
                                    <button type="submit" class="btn btn-primary center" id="submitContactUs"><span class="btn-text">SEND</span><i class="btn-loader"></i></button>
                                </div>               
                        </div>
                    </div>
                    
                    </form>
                </div><!-- // modal-content // -->
                
        </div><!-- // modal-dialog // -->
    </div>


@endsection
@section('script_link')
  <script type="text/javascript" >
   
      
        var divPos = getDivPos(window.location.hash);

        var lastScrollTop = 1, delta = 5;
        var currentHash = getDivId(divPos);
        history.pushState(null, null, '#'+getDivId(divPos));
        window.location.hash = ('#'+getDivId(divPos));
        var blocksArr = $('.layer-bg');
          

        console.log("cBlock: "+currentHash +" lastScrollTop: "+lastScrollTop);
    
        var isClicked = true;
        $('#contactUsShowFormBtn').bind('click', function() {
            // $('#contactUsShowFormModal').modal('show');

        });
        $('p.icon').bind('mouseover', function() {
            
            var classN = $(this).attr('class');  
            var divId = classN.split(' ')[1];
            $("."+divId+" .label").show();

        }).on('mouseleave', function() { 
            $(".icon .label").hide();
        });

        $('#contactUsLink').bind('click', function() {
        	isClicked = false;
            $('html, body').animate({
                scrollTop: $('#Contact-us').offset().top
            }, 500, function () {
                isClicked = true;

            });
        	window.location.hash = ('#Contact-us');
              history.pushState(null, null, '#Contact-us');
              currentHash = '#Contact-us';
        });
        $('p.icon').bind('click', function() {
            $(".icon .label").hide();
            var classN = $(this).attr('class');  
            var divId = classN.split(' ')[1];
            $("."+divId+" .label").show();
            isClicked = false;
            $('html, body').animate({
                scrollTop: $("#"+divId).offset().top
            }, 500, function () {
                isClicked = true;

            });

            
              window.location.hash = (divId);
              history.pushState(null, null, '#'+divId);
              currentHash = divId;
        });

    


        function getDivId(divPosP){
            if(divPosP == 1)
                return "Welcome";
            else if(divPosP == 2)
                return "About-us";
            else if(divPosP == 3)
                return "Courses";
            else if(divPosP == 4)
                return "Gallery";
            else if(divPosP == 5)
                return "Contact-us";
            else 
                return "Welcome";
        }

        function getDivPos(divPosN){
            if(divPosN == "#Welcome")
                return 1;
            else if(divPosN == "#About-us")
                return 2;
            else if(divPosN == "#Courses")
                return 3;
            else if(divPosN == "#Gallery")
                return 4;
            else if(divPosN == "#Contact-us")
                return 5;
            else
                return 1;
        }

        function resizeLayerBg2(){

            var curHashDiv = window.location.hash;
            if(window.location.hash == "")
                curHashDiv = "#Welcome";

            $('html, body').animate({
                scrollTop: $(curHashDiv).offset().top
            }, 500, function () {
                // isClicked = true;

            });
        }


        function checkForm(){
            $('#fullname').val();
        }
    </script>
     
    <script src="{{ asset('/js/ba-debug.js') }}" ></script>
    <script src="{{ asset('/js/jquery.ba-throttle-debounce.js') }}"></script>
    <script type="text/javascript">
        

            var isSettle = false;
            $(window).scroll($.debounce( 250, true, function(){
                $('#scrollMsg').html('SCROLLING!');
                console.log('SCROLLING!');
                isSettle = false;
            } ) );
            var x=1;
            $(window).scroll($.debounce( 250, function(){
                console.log('DONE! '+x);
                x++;
                var st = $(this).scrollTop();
                var currentTop = window.pageYOffset/1;
                
                 for (var i=0; i < blocksArr.length; i++){
                    
                     var currentElementTop = $(blocksArr[i]).offset().top;
                     var hash = $(blocksArr[i]).attr('id');
                     console.log("111 currentElementTop: "+currentElementTop +" currentTop: " + currentTop +" height: "+$(blocksArr[i]).height() + " currentHash: "+currentHash);

                     if ((currentElementTop-100 <= currentTop || currentElementTop == currentTop ) && currentTop <= (currentElementTop + $(blocksArr[i]).height() - 100 ) && currentHash!=hash){
                        if(history.pushState) {
                            history.pushState(null, null, '#'+hash);
                            console.log("pushState "+hash);
                            isClicked = false;
                            $('html, body').animate({
                                scrollTop: $("#"+hash).offset().top
                            }, 500, function () {
                                isClicked = true;
                            });
                        }
                        else {
                            location.hash = '#'+hash;
                            console.log("location.hash");
                        }
                        currentHash = hash;
                        i = blocksArr.length;
                        isSettle = true;
                        break;

                     } 
                    } 

                    for (var i=0; i < blocksArr.length; i++){
                    
                         var currentElementTop = $(blocksArr[i]).offset().top;
                         var hash = $(blocksArr[i]).attr('id');
                        if(st > lastScrollTop && isSettle == false ){
                        // var ctr = i+1;
                        if(currentHash==hash){
                            console.log("currentElementTop: "+currentElementTop +" currentTop: " + currentTop +" height: "+$(blocksArr[i]).height() + " currentHash: "+currentHash);
                            console.log("downscroll");

                            // if((currentElementTop > currentTop && currentTop > currentElementTop + $(blocksArr[i]).height() && currentHash!=hash)){
                            if(currentTop > $(blocksArr[i]).height() * i+1){
                                if(history.pushState) {
                                    if(i >= blocksArr.length-1){
                                        i = blocksArr.length - 2;
                                    }
                                    console.log(i);
                                    var hash = $(blocksArr[i+1]).attr('id');
                                    history.pushState(null, null, '#'+hash);
                                    console.log("downscroll pushState "+hash);
                                    isClicked = false;
                                    $('html, body').animate({
                                        scrollTop: $("#"+hash).offset().top
                                    }, 500, function () {
                                        isClicked = true;
                                    });

                                    currentHash = hash;
                                    i = blocksArr.length;
                                    break;
                                }
                            }
                        }
                     }

                 }
            } ) );

       
            $(window)
            .resize( $.debounce( 250, true, function(e){
                 // resizeLayerBg();
                 // resizeLayerBg2();
                 console.log('resize');
            }))
            .resize( $.debounce( 250, false, function(e){
                 resizeLayerBg();
                 resizeLayerBg2();
        }));
    </script>
@endsection