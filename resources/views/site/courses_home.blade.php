@extends('layouts.site')

@section('css_link_2')
<style type="text/css">
    body{
        background-color: #e3e3e8;
    }
    .bg1 {
        background-image: url(../images/courses_home_bg.png);
        background-color: #e3e3e8;
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
    }

    .top-img{
        z-index: 14;
    }
    .top-description{
        z-index: 14;
    }

    .ball{
        cursor: pointer !important;
    }

    .yellow.ball {
        animation: MoveUpDown 4s linear infinite;
        position: absolute;
        left: 72px;
        bottom: 400px;
    }

    @keyframes MoveUpDown {
      0% {
        bottom: 400px;
      }
      50% {
        bottom: 500px;
      }
      100% {
        bottom: 400px;
      }
    }

   
    .blue.ball {
        animation: MoveUpDown_blue 3.5s cubic-bezier(0, 0, 0.24, 0.43) infinite;
        position: absolute;
        left: 309px;
        bottom: 420px;
    }

    @keyframes MoveUpDown_blue {
      0% {
        bottom: 420px;
      }
      50% {
        bottom: 520px;
      }
      100% {
        bottom: 420px;
      }
    }

    .red.ball {
        animation: MoveUpDown_red 3.8s cubic-bezier(0, 0, 0.24, 0.43) infinite;
        position: absolute;
        left: 553px;
        bottom: 380px;
    }

    @keyframes MoveUpDown_red {
      0% {
        bottom: 380px;
      }
      50% {
        bottom: 450px;
      }
      100% {
        bottom: 380px;
      }
    }

    .green.ball {
        animation: MoveUpDown_green 3s cubic-bezier(0, 0, 0.24, 0.43) infinite;
        position: absolute;
        left: 801px;
        bottom: 370px;
    }

    @keyframes MoveUpDown_green {
      0% {
        bottom: 370px;
      }
      50% {
        bottom: 480px;
      }
      100% {
        bottom: 370px;
      }
    }

    .container{
        height: 100%;
        margin: 0 auto;
        max-width: 1024px;
        position: relative;
    }


    .top-description > div{
        position: absolute;
    }

    .top-img > div{
        position: absolute;
    }
    .bubble 
    {
        position: relative;
        width: 480px;
        height: 120px;
        padding: 0px;
        background: #ffb15e;
        -webkit-border-radius: 10px;
        -moz-border-radius: 10px;
        border-radius: 10px;
        top: 385px;left: 322px;
        padding: 20px 20px; 
        height: auto;
    }

    .bubble:after 
    {
        content: '';
        position: absolute;
        border-style: solid;
        border-width: 13px 30px 13px 0;
        border-color: transparent #ffb15e;
        display: block;
        width: 0;
        z-index: 1;
        left: -30px;
        top: 20px;
    }

</style>
@endsection

@section('content')

    <div class="main-wrapper">

        <section data-name="Faqs" class="layer pos1" >
            <div class="layer-holder layer-bg bg1"  id="Courses">
                <div class="container">
                    <div class="sub-con" >
                        <div class="top-description" >

                            <div class="" style="top: 385px;left: 112px;">
                                <img src="../images/black_char.png" />
                            </div>
                            <div class="default bubble" style="background-color: #ffb15e; color: black; ">
                                Jack  offers four different main courses. Feel free to choose!
                            </div>

                            <div class="yellow bubble" >
                                Be a junior or master coder and learn the art of Java, C and Python.
                            </div>
                            <div class="blue bubble" >
                                Delve into the wonderful world of coding by learning how to develop applications where you can create your very own stories and games.
                            </div>

                            <div class="red bubble" >
                                Teach BB8 Droids and Parrot Drones to follow rules, avoid obstructions, and execute maneuvers. Learn the basics of programming by coding these machines to life.
                            </div>
                            <div class="green bubble" >
                                Specialize on courses that will mold you into a young engineer. Build robots or circuits, as you learn the core concepts about coding, robotics, engineering, and electricity through hands-on activities in track.
                            </div>
                            
                        </div>
                        <div class="top-img" >
                            <div class="yellow ball"  >
                                <a href="{{ url('/courses/coder') }}" id="contactUsLink"><img src="../images/yellow_ball.png" /></a>
                            </div>
                            <div class="blue ball">
                                <img src="../images/blue_ball.png" />
                            </div>

                            <div class="red ball" >
                                <img src="../images/red_ball.png" />
                            </div>

                            <div class="green ball" >
                                <img src="../images/green_ball.png" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


@endsection
@section('script_link')

<script type="text/javascript">
    $('.bubble').hide();
    $('.default.bubble').fadeIn("slow");
    $( ".ball" ).hover(function() {
        var className = '.'+$(this).attr('class').split(' ')[0];
        console.log(className);
        $('.bubble').hide();
        $(className+'.bubble').fadeIn("slow");
      }, function() {
        $('.bubble').hide();
        $('.default.bubble').fadeIn("slow");
      }
    );

    $(window).resize( $.debounce( 250, true, function(e){
                 resizeLayerBg();
                 console.log('resize');
            })).resize( $.debounce( 250, false, function(e){
                 resizeLayerBg();
        }));
</script>
@endsection