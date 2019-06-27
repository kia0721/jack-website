@extends('layouts.site')

@section('css_link_2')
    @include('css.courses_nav') 
    <style type="text/css">
        
        .banner{
            background-color: #135f6f;
            background:transparent url({{ asset('images/novice_banner.jpg') }}) no-repeat center bottom;

        }

        .banner, .price:after {
            background-color: #efffeb;

        }

        .course-descr-d, .course-title{
            color: #264d1d;
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
                    <h1 class="course-title">NOVICE CODER</h1>
                    <H2>EXPLORE THE WORLD OF CODING!</H2>
                    <h4>The Novice Coder classes are beginner courses that allow kids as young as 6 to 8 years old to start their coding adventures. This is an opportunity for them to learn the basics of coding while boosting their creativity and logic.</h4>
                    <br>
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
                <h3> </h3>
                
            </div>
            <div class="col-md-12 section-course">
                <div class="col-md-3">
                    <img  src="{{ asset('/images/scratch.png')}}" style="margin:auto;">
                </div>

                
                <div class="col-md-6">
                   
                    <h4 class="ccourse-title2"><b>Scratch: Welcome to the World of Coding</b></h4>
                    <p class="course-detail">This is an introductory course on coding that uses the Scratch programming platform. In this class, students use block-based programming to create their own stories, animations, mini games, and more.</p>

                </div>
                <div class="col-md-3">
                    
                    <p class="date detail">
                    <B>Date:</B><br>&nbsp; &nbsp; &nbsp; Batch 1: July 7, 14, 21, 28
                    <br>&nbsp; &nbsp; &nbsp; Batch 2: August 11, 18, 25 and September 1
                    <br>&nbsp; &nbsp; &nbsp; Batch 3: September 15, 22, 29 and October 6

                    </p>
                    <p class="time detail"><B>Time:</B><br>&nbsp; &nbsp; &nbsp; 1:30 PM to 5:30 PM</p>
                    <p class="fee detail">
                    <b>Course fee:</b><br><br>&nbsp;<span style="font-size:18px; ">Php 8,000 per module</span><br>
                    &nbsp;(16 hours per course)</p>
                    <a href="{{ url('/register') }}" class="btn btn-orange">ENROLL NOW</a> 
                </div>

            </div> 
            <div class="col-md-12"><br></div>
        
          </div>
        </section>
    </div>


@endsection
@section('script_link')
  <script type="text/javascript">
  
</script>
@endsection