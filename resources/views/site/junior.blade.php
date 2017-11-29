@extends('layouts.site')

@section('css_link_2')
    @include('css.courses_nav') 
    <style type="text/css">
        body{
            height: 100%;
            background-color: white;
        }
        .banner{
            background-color: #135f6f;
            position: relative;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 50%;
            background:transparent url({{ asset('images/junior_banner.jpg') }}) no-repeat center bottom;

        }
        #main-wrapper {
    padding-bottom: 0;
}
    .banner, .price:after {
    background-color: #135f6f;

}
    .banner {
    color: white;
    padding: 83px 0 0px;
    -webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.1);
    -moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.1);
    box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.1);
}
    .wrapper {
    margin: 0 auto;
    max-width: 1064px;
}
.banner .banner-content {
    position: relative;
}
.wrapper > div {
    padding: 0 10px;
}
@media (min-width: 896px){
    .wrapper > div {
        padding: 0 20px;
    }
}


@media (min-width: 768px){
    .course-descr-d {
        width: 60%;
        float: left;
    }
    .course-descr2-d {
        width: 30%;
      float: left;
    }
}
.banner h2, .price {
    display: inline-block;
    vertical-align: middle;
}

.clr, .clrf:before, .clrf:after {
    width: 100%!important;
    float: none!important;
    clear: both;
    content: '';
    display: block;
}


.btn-orange {
    padding: 6px 25px;
    margin-top: 30px;
    margin-right: 5px;
    color: black;
}

.btn-orange {
    background-color: #f8c91b;
}

.btn-orange:hover {
    background-color: #e8be20;
    color: #020101;
}

p.course-detail{
    font-size: 12px;
}

.course-sec{
    background-color: #efefef; 
    padding: 20px 0px !important; 
    border-radius: 5px;

}
.section-course .col-md-3{
    text-align: center!important;
}
    </style>
@endsection

@section('content')
    @include('html.courses_nav') 
    <div id="main-wrapper">

        <div class="banner">
          <div class="wrapper">
            <div class="banner-content clrf">
              <div class="course-descr-d" style="width:60%;">
                <div>
                  <h1 class="course-title">JUNIOR CODER</h1>
                <H3>Delve into the wonderful world of coding by learning how to develop applications where you can create your very own stories and games.</H3>

                  <a href="{{ url('/courses') }}" class="btn btn-orange">GO BACK TO COURSES</a> 
                  <br> <br>
                </div>
              </div>
            </div>
          </div>
        </div>


        <section>
          <div class="wrapper">
            <div class="entry-content">
                <h3 style="text-align: center;"> <br></h3>
                
            </div>
            <div class="col-md-12 course-sec section-course" >
                <div class="col-md-3">
                    <center><img  src="{{ asset('/images/scratch.png')}}" style="margin:auto;"></center>
                </div>

                
                <div class="col-md-6">
                    <h4><b>SCRATCH: WELCOME TO THE WORLD OF CODING</b></h4>
                    <p class="course-detail">This is an introductory course that uses Scratch, a programming platform developed by the MIT (Massachusetts Institute of Technology) Media Lab. In this course, students learn the fundamentals of developing various applications. By dragging blocks of code, students can create their very own stories, animations, and games. </p>

                </div>
                <div class="col-md-3">
                    <p>
                    <br>
                    <b>For ages 8 to 11 years old</b>
                    <br><br>
                    <B>COMPLETED! See you next summer.</B>
                    <br><br>
                    <b>Php 8,500 per module</b>

                    </p>
                    <a href="{{ url('/products/TruConnect') }}" class="btn btn-orange">ENROLL NOW</a> 
                </div>

            </div> 
            <div class="col-md-12">
            <br>
            </div>
            <div class="col-md-12 section-course">
                <div class="col-md-3">
                    <img width="100%" src="{{ asset('/images/swift_playground.png')}}" style="margin:auto;">
                </div>

                
                <div class="col-md-6">
                   
                    <h4><b>SWIFT PLAYGROUNDS</b></h4>
                    <p class="course-detail">This course teaches coding using Apple’s Swift Playgrounds. In this course, students can enjoy interactive activities, solve puzzles, take on new challenges, and build more advanced creations using this dynamic programming language.</p>

                </div>
                <div class="col-md-3">
                    <p>
                    <br>
                    For ages 8 to 11 years old
                    <br><br>
                    Stay tuned for rescheduled dates
                    <br><br>
                    <b>P8,500 per module</b>

                    </p>
                    <a href="{{ url('/products/TruConnect') }}"  class="btn btn-orange">RESCHEDULED</a> 
                </div>

            </div> 
            <div class="col-md-12">
            <br>
            </div>
            <div class="col-md-12 course-sec section-course">
                <div class="col-md-3 ">
                    <img src="{{ asset('/images/game_salad.png')}}" style="margin:auto;">
                </div>

                
                <div class="col-md-6">
                    <h6>GAME SALAD: </h6>
                    <h4><b>GAME DESIGN AND DEVELOPMENT</b></h4>
                    <p class="course-detail">This is a game development course that allows its students to publish their own game. Using the Game Salad tool, students learn the fundamentals of computer science while designing and creating a game. After this, students can publish their program on the App Store and Playstore for others to play, too. </p>

                </div>
                <div class="col-md-3">
                    <p>
                    <br>
                    For ages 12 to 16 years old
                    <br><br>
                    COMPLETED! See you next summer.
                    <br><br>
                    <b>Php 8,500 per module</b>

                    </p>
                    <!-- <a href="{{ url('/products/TruConnect') }}" class="btn btn-orange">ENROLL NOW</a>  -->
                </div>

            </div> 
            <div class="col-md-12">
            <br>
            </div>
            <div class="col-md-12 section-course">
                <div class="col-md-3 ">
                    <img width="100%" src="{{ asset('/images/code_n_mode.png')}}" style="margin:auto;">
                </div>

                
                <div class="col-md-6">
                    <h4><b>MINECRAFT: CODE AND MOD</b></h4>
                    <p class="course-detail">This is a game development course that allows its students to develop their own 2D Minecraft game. In this course, students learn to design and create their own game character and environment, and even animate the game elements by coding. </p>

                </div>
                <div class="col-md-3">
                    <p>
                    <br>
                    For ages 12 to 16 years old
                    <br><br>
                    COMPLETED! See you next summer.
                    <br><br>
                    <b>P8,500 per module</b>

                    </p>
                   <!--  <a href="{{ url('/products/TruConnect') }}" class="btn btn-orange">ENROLL NOW</a>  -->
                </div>

            </div> 

            <div class="col-md-12">
            <br>
            </div>
            <div class="col-md-12 course-sec section-course">
                <div class="col-md-3 ">
                    <img src="{{ asset('/images/world_vr.png')}}" style="margin:auto;">
                </div>

                
                <div class="col-md-6">
                    <h4><b>ADVANCED MINECRAFT: WORLD & VR</b></h4>
                    <p class="course-detail">This course provides a more immersive experience of the Minecraft: Code and Mod class through virtual reality. In this course, students learn to create their Minecraft world in 3D, which they can experience using Google Cardboard. </p>

                </div>
                <div class="col-md-3">
                    <p>
                    <br>
                    For ages 12 to 16 years old
                    <br><br>
                    COMPLETED! See you next summer.
                    <br><br>
                    <b>P9,800 per module</b>

                    </p>
                   <!--  <a href="{{ url('/products/TruConnect') }}" class="btn btn-orange">ENROLL NOW</a>  -->
                </div>

            </div> 
            <div class="col-md-12">
            <br>
            </div>
            <div class="col-md-12 section-course">
                <div class="col-md-3 ">
                    <img src="{{ asset('/images/tilt_brush.png')}}" style="margin:auto;">
                </div>

                
                <div class="col-md-6">
                    <h4><b>ADVANCED MINECRAFT: CODE, MOD, AND PAINT WITH GOOGLE TILT BRUSH</b></h4>
                    <p class="course-detail">This course provides a more advanced training on game development. Using the 3D painting program Google Tilt Brush and the virtual reality system HTC Vive, students not only learn how to design and paint the world they created, but they also gain a deeper understanding of the virtual space as they navigate and interact with it</p>

                </div>
                <div class="col-md-3">
                    <p>
                    <br>
                    For ages 12 to 16 years old
                    <br><br>
                    COMPLETED! See you next summer.
                    <br><br>
                    <b>P10,00 per module</b>

                    </p>
                   <!--  <a href="{{ url('/products/TruConnect') }}" class="btn btn-orange">ENROLL NOW</a>  -->
                </div>

            </div> 
          </div>
        </section>
    </div>


@endsection
@section('script_link')
  <script type="text/javascript">
  
</script>
@endsection