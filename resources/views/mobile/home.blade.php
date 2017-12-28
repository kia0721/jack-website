@extends('layouts.mobile')

@section('css_link')
    <link href="{{ captcha_layout_stylesheet_url() }}" type="text/css" rel="stylesheet">
    <style type="text/css">
        .title{
            color: #ff9c34;
        }
        .sub-title{
            color: #00bff3;
        }
        .form-control{
            margin-bottom: 10px;
        }


        #submitContactUs {
          background: #ff9c34;
          background-image: -webkit-linear-gradient(top, #ff9c34, #e88216);
          background-image: -moz-linear-gradient(top, #ff9c34, #e88216);
          background-image: -ms-linear-gradient(top, #ff9c34, #e88216);
          background-image: -o-linear-gradient(top, #ff9c34, #e88216);
          background-image: linear-gradient(to bottom, #ff9c34, #e88216);
          -webkit-border-radius: 9;
          -moz-border-radius: 9;
          border-radius: 9px;
          color: white;
          font-weight: bold;
          font-size: 20px;
          padding: 10px 20px 10px 20px;
          text-decoration: none;
          width: 200px;
          border-color: #e88216;
        }

        #submitContactUs:hover {
          background: #e88216;
          background-image: -webkit-linear-gradient(top, #e88216, #ff9c34);
          background-image: -moz-linear-gradient(top, #e88216, #ff9c34);
          background-image: -ms-linear-gradient(top, #e88216, #ff9c34);
          background-image: -o-linear-gradient(top, #e88216, #ff9c34);
          background-image: linear-gradient(to bottom, #e88216, #ff9c34);
          text-decoration: none;
        }

        .sub-title{
            font-size: 16px;
        }


    </style>
@endsection

@section('content')

<div class="main-wrapper">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="col-md-12 col-sm-12"><br>
                <center>
                    <img src="{{ asset('images/mobi_welcome.png') }}" />
                </center>
            </div>
            <div class="col-md-12 col-sm-12">
            &nbsp;
            </div>
            <div class="col-xs-6 col-sm-6">
                <img src="{{ asset('images/button_photos.png') }}" width="100%" />
            </div>
            <div class="col-xs-6 col-sm-6">
                <img src="{{ asset('images/button_video.png') }}"  width="100%" />
            </div>
            <div class="col-md-12 col-sm-12">
            &nbsp;
            </div>
            <div class="col-md-12 col-sm-12">
                <p>At the Junior Academy for Coding Knowledge (JACK), we equip kids with the fundamental knowledge and skills to be innovators.
                </p>
                <p>Believing that anybody can code, JACK was founded in 2016 with the mission to provide an avenue for  kids to become fluent with technology at their early age. Not only does this make them capable of navigating today’s technology-driven world, this also instills such skills as problem solving and critical thinking - skills that will be valuable to them in the long run.</p>
                <p>And the best part? They can do more with coding. We provide a space where kids can learn concepts and do hands-on activities, mixing learning with play, empowering them to create and innovate. Let’s work together in shaping our future creators and digital leaders!</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12">
        &nbsp;
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="col-md-12 col-sm-12 text-xs-center">
                <H2 class="title">COURSES OFFERED</H2>
            </div>
            <div class="col-xs-3 col-sm-3 text-xs-center">
                <img src="{{ asset('images/mobi_summer.png') }}"  width="100%" />
            </div>
            <div class="col-xs-9 col-sm-9 text-xs-center">
                <H4 class="title">SUMMER</H4>
                <p class="sub-title">LEARN TO CODE. PLAY AND HAVE FUN!</p>
            </div>
            <div class="col-xs-12 col-sm-12 ">
            <br>
                <p >JACK’s summer courses are open for students ages 7 to 16. Here, kids can discover, learn, and enjoy the world of coding. Whether you want to explore coding or pursue a specific track, we’ve got you covered. Start with the Foundations of Coding or take specialized courses like Game Development, iOS App Development, or Robotics.</p>
            </div>
            <div class="col-xs-12 col-sm-12 no-padding " style="background-color: #efefef;">
            <br>
                <div class="col-xs-3 col-sm-3 text-xs-center">
                    <img src="{{ asset('images/mobi_junior.png') }}"  width="100%" />
                </div>
                <div class="col-xs-9 col-sm-9 text-xs-center">
                    <H4 class="title">JUNIOR</H4>
                    <p class="sub-title">START THEM YOUNG!</p>
                </div>
                <div class="col-xs-12 col-sm-12 ">
                <br>
                    <p >The Junior Coder classes are specifically crafted for ages 8 to 11. Have a  head start in coding and learn more advanced classes like Python Programming and Mobile App Development. Here, kids are introduced to text based programming. </p>
                </div>
            </div>

            <div class="col-xs-3 col-sm-3 text-xs-center"><br>
                <img src="{{ asset('images/mobi_master.png') }}"  width="100%" />
            </div>
            <div class="col-xs-9 col-sm-9 text-xs-center"><br>
                <H4 class="title">MASTER</H4>
                <p class="sub-title">UPGRADE YOUR PROGRAMMING SKILLS!</p>
            </div>
            <div class="col-xs-12 col-sm-12 ">
            <br>
                <p>The Master Coder classes allow students ages 12 to 17 to specialize in a programming language. Choose  from three tracks (App Development, Game Development, and Electronics Engineering) and be a master coder in Java, Python, or C Programming.</p>
            </div>

        </div>
        <div class="col-md-12 col-sm-12">
        &nbsp;
        </div>
        <div class="col-md-8 col-md-offset-2">

            <div class="col-md-12 col-sm-12 text-xs-center">
                <H2 class="title">CONTACT US!</H2>
                <h4 class="sub-title">We like to create things with fun, open-minded people. Feel free to say hello!</h4>
            </div>

            <form class="form-horizontal"  method="POST" action="{{ url('contactUs') }}">
                
                {{ csrf_field() }}
                <input type="hidden" name="user_type" id="user_type"/>

                 <div class="col-md-12" style="margin-top: 20px;">
                    <input id="fullname" type="text" class="form-control" name="fullname" placeholder="FULLNAME" required >
                    <input id="email" type="email" class="form-control" name="email" placeholder="EMAIL"  required>
                    <input id="contactNum" type="text" class="form-control" name="contactNum" placeholder="CONTACT NUMBER" required >

                    <textarea id="message_detail" type="text" class="form-control" maxlength="140"  name="message_detail" placeholder="MESSAGE" style="height:177px;" required ></textarea>
                    <br>

                    {!! captcha_image_html('RegisterCaptcha') !!}<BR>
                    <input class="form-control" type="text" id="RegisterCaptcha" name="RegisterCaptcha" placeholder="Enter Captcha" />
                </div>  
                
                <div class="col-md-6 text-xs-center" style="margin-top: 20px;">
                    <button type="submit" class="btn btn-primary center" id="submitContactUs"><span class="btn-text">SEND</span><i class="btn-loader"></i></button>
                </div>   

                <div class="col-md-6 text-xs-center" style="margin-top: 30px;">
                    <label id="returnMessage" style="display: none;">SUCCESS!</label>
                </div>             
                
            
            </form>
        </div>
        
        <div class="col-xs-1 no-padding"></div>
        <div class="col-xs-10 " style="border-radius: 10px; border-width: 2px; border-color: #f5af0a; border-style: solid; margin-left: auto;">
            <div class="col-xs-12">
            <br>
                <p><b>ADDRESS<br></b></p>
                <p>Penthouse, East Tower, <br>
                Philippine Stock Exchange<br>
                Center, Exchange Road, Ortigas<br>
                Center, Pasig City, 1605</p>
            </div>
            <div class="col-xs-12">
                
                <p><b>CONTACTS<br></b></p>
                <p>Email: learncoding@jack.com.ph <br>
                Phone: +63977 841 0482<br>
                Landline: (02) 636 74 99 loc. 887<br>
                <a href="http://www.facebook.com/JackSchoolPH" target="_blank">facebook.com/JackSchoolPH</a> </p><br>
            </div>
        </div>
        <div class="col-xs-1 no-padding"></div>
        
    </div>
</div>
@endsection
@section('script_link')
    <script src="{{ asset('/js/jquery.form.js') }}"></script>
    <script type="text/javascript" >

        $('#RegisterCaptcha_CaptchaImageDiv a').remove();
        $("body").on("click","#submitContactUs",function(e){
            $(this).parents("form").ajaxForm(contactUsSubmit);
        });
        var contactUsSubmit = { 
            beforeSubmit:function(formData, jqForm, options){
                
                waitingDialog.show("Sending contact....");
                $("#contactUsShowFormModal").modal("hide");
                return true;
            },
            complete: function(response) 
            {
                var res = response.responseJSON;
                if(res.isSuccessful){

                    waitingDialog.show("SUCCESS", {
                        modalHeader: 'success',
                        dialog: "Successfully created",
                        footer: true,
                        onHide: function(){
                          // window.location = URL+'/'+res.id;
                          console.log(res.id);
                        }
                    });   


                } else {
                    waitingDialog.hide();
                    $("#contactUsShowFormModal").modal("show");
                    $('#returnMessage').html(res.result);
                }
            }
        };
    </script>
@endsection