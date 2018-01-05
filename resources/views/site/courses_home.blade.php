@extends('layouts.site')

@section('css_link_2')
<style type="text/css">
    body{
        background-color: #e3e3e8;
    }
    .bg1 {
        background-image: url("{{ asset('images/courses_home_bg.png') }}");
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
        left: 186px;
        bottom: 400px;
    }

    @keyframes MoveUpDown {
      0% {
        bottom: 400px;
      }
      50% {
        bottom: 470px;
      }
      100% {
        bottom: 400px;
      }
    }

   
    .blue.ball {
        animation: MoveUpDown_blue 3.5s cubic-bezier(0, 0, 0.24, 0.43) infinite;
        position: absolute;
        left: 443px;
        bottom: 420px;
    }

    @keyframes MoveUpDown_blue {
      0% {
        bottom: 420px;
      }
      50% {
        bottom: 490px;
      }
      100% {
        bottom: 420px;
      }
    }

    .red.ball {
        animation: MoveUpDown_red 3.8s cubic-bezier(0, 0, 0.24, 0.43) infinite;
        position: absolute;
        left: 678px;
        bottom: 380px;
    }

    @keyframes MoveUpDown_red {
      0% {
        bottom: 390px;
      }
      50% {
        bottom: 470px;
      }
      100% {
        bottom: 390px;
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
                        <h1 class="hide">Courses</h1>
                            <div class="" style="top: 385px;left: 112px;">
                                <img src="{{ asset('images/black_char.png') }}" />
                            </div>
                            <div class="default bubble" style="background-color: #ffb15e; color: black; ">
                                Jack  offers 3 different main courses. Feel free to choose!
                            </div>

                            <div class="yellow bubble" >
                                <b>LEARN TO CODE. PLAY AND HAVE FUN!</b><br>
                                JACK’s summer courses are open for students ages 7 to 16. Here, kids can discover, learn, and enjoy the world of coding.
                            </div>
                            <div class="blue bubble" >
                                <b>START THEM YOUNG!</b><br>
                                The Junior Coder classes are specifically crafted for ages 8 to 11. Have a  head start in coding and learn more advanced classes like Python Programming and Mobile App Development.
                            </div>

                            <div class="red bubble" >
                                <b>UPGRADE YOUR PROGRAMMING SKILLS!</b><br>
                                The Master Coder classes allow students ages 12 to 17 to specialize in a programming language. 
                            </div>
                            
                        </div>
                        <div class="top-img" >
                            <div class="yellow ball"  >
                                <a href="{{ url('/courses/summer') }}" ><img src="{{ asset('images/summer_ball.png') }}" /></a>
                            </div>
                            <div class="blue ball">
                                <a href="{{ url('/courses/junior') }}" ><img src="{{ asset('images/junior_ball.png') }}" /></a>
                            </div>

                            <div class="red ball" >
                                <a href="{{ url('/courses/master') }}" ><img src="{{ asset('images/master_ball.png') }}" /></a>
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

</script>
@endsection