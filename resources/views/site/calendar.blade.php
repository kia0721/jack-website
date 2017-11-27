@extends('layouts.site')

@section('css_link_2')
<style type="text/css">
    body{
        background-color: #ffe6bb;
    }
    .bg1 {
        background-image: url(../images/faqs_bg.png);
        background-color: #d3cac1;
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
    .sub-con > div {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 202px;
        max-width: 550px;
        left:250px;
        max-height: 350px;
        overflow-y: overlay;
    }

    .top-img{
        z-index: 12;
    }

    .container{
        height: 100%;
        margin: 0 auto;
        max-width: 1024px;
        position: relative;
    }

    .top-description::-webkit-scrollbar {
      width: 10px;
      background-color: #e1e2e8;
    }

</style>
@endsection

@section('content')


   
    <div class="main-wrapper">

        <section data-name="Faqs" class="layer pos1" >
            <div class="layer-holder layer-bg bg1"  id="Welcome">
                <div class="container">
                    <div class="sub-con" >
                        <div class="top-description" >
                            <div  style="padding-right: 15px; color:#f8f9ff; " >
                                
                                <h1>What is JACK?</h1>
                                <p>Junior Academy for Coding Knowledge, Inc. (JACK) is a learning center that aims to equip kids with fundamental coding knowledge and develop their skills to create using the latest hardware trends and innovations. JACK’s mission is to provide them the highest quality learning experience by celebrating and encouraging their creativity through dynamic and project-based learning - all in a fun and engaging environment.
                                </p>
                                <br>
                                <h2>Frequently Asked Questions</h2>
                                <br>

                                <h4>WHAT ARE THE CLASS SCHEDULES?</h4>
                                <p>Classes for the Junior Coder, App Development (Java Programming), Electronics Engineering (C Programming) will be held from 08:30am to 12:30pm on scheduled Saturdays. Classes for the Game Development (Python Programming) will be held from 01:30pm to 05:30pm on scheduled Saturdays.</p>

                                <br>
                                <h4>WHERE WILL IT BE HELD?</h4>
                                <p>JACK is located at Penthouse, East Tower, Philippine Stock Exchange Center, Exchange Road, Ortigas Center, Pasig City.</p>
                                <br>
                                <h4>WHO MAY ENROLL?</h4>
                                <p>The Junior Coder Classes are open to children ages 8 to 11 while the Master Coder Classes are for 12-17 year old kids</p>
                                <br>

                                <h4>CAN MY CHILD ENROLL IF HE OR SHE HAS NO KNOWLEDGE IN CODING?</h4>
                                <p>JACK trainers are graduates of the University of the Philippines, who are also current IT industry practitioners. Armed with industry knowledge, skills, as well as experience in teaching kids, JACK trainers have the mind and heart to help unlock your kid’s full potential.</p>
                                <br>

                                <h4>WHAT IS THE CLASS SIZE OF EACH COURSE?</h4>
                                <p>Each class is composed of 15 to 20 students.</p>
                                <br>
                                <br>

                                <h2>Registration and Payment</h2>
                                <br>
                                <h4>HOW TO REGISTER ?</h4>
                                <p>To register, please go to www.jack.com.ph/register or you may also click the REGISTER tab in our Facebook page.</p>
                                <br>

                                <h4>WHAT ARE THE INCLUSIONS OF THE COURSE FEE?</h4>
                                <p>Course fees are inclusive of the admission to the five-day course, a hands-on training on coding, as well as the necessary equipment for the class. A certificate of completion is also given at the end of the course.</p>
                                <br>

                                <h4>HOW DO WE AVAIL COURSE FEE DISCOUNTS?</h4>
                                <p>JACK offers a 5% discount on the total amount due for those who enroll witha buddy. Also, we offer a P3000 discount for those who will enroll one time in the 3 levels (beginner, intermediate, and advanced) for each of the Master Coder courses.</p>
                                <br>

                                <h4>HOW DO WE PAY?</h4>
                                <p>Payments could be done through bank deposit or directly at JACK's office. We will advise you on the bank details once you have completed your registration. </p>
                                <br>




                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


@endsection
@section('script_link')
<script src="{{ asset('/js/ba-debug.js') }}" ></script>
<script src="{{ asset('/js/jquery.ba-throttle-debounce.js') }}"></script>
<script type="text/javascript">
    resizeLayerBg();
    function resizeLayerBg(){
        var height = $( window ).height();
        console.log(height);

        $('.layer-bg').css( "height", height );

        $('.char-pos').css( "bottom" ,"28px");


        var curHashDiv = window.location.hash;
        if(window.location.hash == "")
            curHashDiv = "#Welcome";

        $('html, body').animate({
            scrollTop: $(curHashDiv).offset().top
        }, 500, function () {
            // isClicked = true;

        });

        
        
    }
    $(window).resize( $.debounce( 250, true, function(e){
                 resizeLayerBg();
                 console.log('resize');
            })).resize( $.debounce( 250, false, function(e){
                 resizeLayerBg();
        }));
</script>
@endsection