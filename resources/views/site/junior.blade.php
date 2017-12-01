@extends('layouts.site')

@section('css_link_2')
    @include('css.courses_nav') 
    <style type="text/css">
        
        .banner{
            background-color: #135f6f;
            background:transparent url({{ asset('images/junior_banner.jpg') }}) no-repeat center bottom;

        }

        .banner, .price:after {
            background-color: #135f6f;

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
                    <H2>For ages 8 to 11</H2>
                    <br> <br>
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
                    <img  src="{{ asset('/images/mobile_c.png')}}" style="margin:auto;">
                </div>

                
                <div class="col-md-6">
                    <h4><b>Junior Coder: Mobile App Development</b></h4>
                    <p class="course-detail">This course teaches the basics of creating a mobile app. In this class, students learn to design their app’s screens, implement their app ideas by programming them, and deploying them in their iOS or Android device. They also learn about testing, debugging, and the app development lifecycle.</p>

                </div>
                <div class="col-md-3">
                    <p >
                   
                    <B>Date: <br>&nbsp; &nbsp; &nbsp; Jan. 20, 27,<br>&nbsp; &nbsp; &nbsp; Feb. 3, 10, 17</B>
                    <br><B>Time:<br>&nbsp; &nbsp; &nbsp; 8:30AM to 12:30PM</B>
                    <br><br>
                    <b>Course fee:<br>&nbsp; &nbsp; &nbsp; Php 12,000 per module</b>

                    </p>
                    <a href="{{ url('/products/TruConnect') }}" class="btn btn-orange">ENROLL NOW</a> 
                </div>

            </div> 
            <div class="col-md-12"><br></div>
            <div class="col-md-12 section-course">
                <div class="col-md-3">
                    <img  src="{{ asset('/images/python_jr.png')}}" style="margin:auto;">
                </div>

                
                <div class="col-md-6">
                   
                    <h4><b>Junior Coder: Python Programming</b></h4>
                    <p class="course-detail">This course provides an overview of Algorithms, Data, Programming, Computers and the Internet. At the end of this course, students should be able to show understanding of algorithms and what they can be used for, create a simple program using Python, use data types and simple data structures in coding that program, explain the main components of a computer system and how they fit together, and explain how the internet works. </p>

                </div>
                <div class="col-md-3">
                    <p><b>Schedule for 2018  to be determined</b>
                    <br><br>
                    <b>Course fee:<br>&nbsp; &nbsp; &nbsp; Php 12,000 per module</p>
                    <!-- <a href="{{ url('/products/TruConnect') }}"  class="btn btn-orange">RESCHEDULED</a>  -->
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