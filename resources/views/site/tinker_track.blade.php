@extends('layouts.site')

@section('css_link_2')

    <style type="text/css">
        body{
            height: 100%;
            background-color: white;
        }
        .banner{
            background-color: #feaf60;
            position: relative;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 50%;
            background:transparent url({{ asset('images/tinker_banner.jpg') }}) no-repeat center bottom;

        }
        #main-wrapper {
    padding-bottom: 0;
}
    .banner, .price:after {
    background-color: #feaf60;

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

.course-title
{
    font-size: 65px;
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
    <div id="main-wrapper">

        <div class="banner">
          <div class="wrapper">
            <div class="banner-content clrf">
              <div class="course-descr-d" style="width:60%;">
                <div>
                  <h1 class="course-title">TINKER TRACK</h1>
                <H3>Specialize on courses that will mold you into a young engineer. Build robots or circuits, as you learn the core concepts about coding, robotics, engineering, and electricity through hands-on activities in track.</H3>

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
                    <img  src="{{ asset('/images/coding_robotics.png')}}" style="margin:auto;">
                </div>

                
                <div class="col-md-6">
                    <h4><b>THE ENGINEER: CODING AND ROBOTICS</b></h4>
                    <p class="course-detail">Be a young electronics and communications engineer with Junior Academy for Coding Knowledge. Experience the world of robotics through coding and implementation of your program design with Lego bricks. Bring them to life with the power of microcontrollers, servomotors, and smart sensors. Program complex rules, and watch the bricks execute your very own design. </p>

                </div>
                <div class="col-md-3">
                    <p>
                    <br>
                    <b>For ages 8 to 11 years old</b>
                    <br><br>
                    <B>COMPLETED! See you next summer.</B>
                    <br><br>
                    <b>Php 9,000 per module</b>

                    </p>
                    <!-- <a href="{{ url('/products/TruConnect') }}" class="btn btn-orange">ENROLL NOW</a>  -->
                </div>

            </div> 
            <div class="col-md-12">
            <br>
            </div>
            
            <div class="col-md-12 section-course" >
                <div class="col-md-3">
                    <center><img  src="{{ asset('/images/advanced_coding_robotics.png')}}" style="margin:auto;"></center>
                </div>

                
                <div class="col-md-6">
                    <h4><b>THE ENGINEER II: ADVANCED CODING AND ROBOTICS</b></h4>
                    <p class="course-detail">Designed for students who have already taken The Engineer I course, this course offers an advanced training on robotics. This course teaches more advanced concepts, where students are challenged to design and program their robots to accomplish more complex tasks. </p>

                </div>
                <div class="col-md-3">
                    <p>
                    <br>
                    <b>For ages 8 to 11 years old</b>
                    <br><br>
                    <B>COMPLETED! See you next summer.</B>
                    <br><br>
                    <b>Php 9,500 per module</b>

                    </p>
                    <!-- <a href="{{ url('/products/TruConnect') }}" class="btn btn-orange">ENROLL NOW</a>  -->
                </div>

            </div> 
            <div class="col-md-12">
            <br>
            </div>
          </div>
        </section>
    </div>


@endsection
@section('script_link')
  <script type="text/javascript">
  
</script>
@endsection