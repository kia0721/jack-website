@extends('layouts.site')

@section('css_link_2')
    @include('css.courses_nav') 
    <style type="text/css">
        
    .banner{
        background-color: #e45d51;
        background:transparent url({{ asset('images/master_banner.jpg') }}) no-repeat center bottom;
    }
    .banner, .price:after {
        background-color: #e45d51;
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
                    <h1 class="course-title" style="margin: 0;">MASTER CODER</h1>
                    <H2>UPGRADE YOUR PROGRAMMING SKILLS!</H2>
                    <h4>The Master Coder classes allow students ages 12 to 17 to specialize in a programming language. Choose  from three tracks (App Development, Game Development, and Electronics Engineering) and be a master coder in Java, Python, or C Programming.</h4>
                  
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
                    <img  src="{{ asset('/images/design.png')}}" style="margin:auto;">
                </div>

                
                <div class="col-md-6">
                    <h4 class="ccourse-title2"><b>Design Thinking</b></h4>
                    <p class="course-detail">This course will bring out the students’ creativity and logic, as they undergo the design thinking process in order to develop new relevant solutions that create a positive impact. In this class, they will also apply this approach that relies on their ability to be intuitive, to interpret what they observe, to develop idea, and to create meaningful projects.</p>

                </div>
                <div class="col-md-3">
                    <p class="date detail">
                    <B>Date:</B> <br>&nbsp; &nbsp; &nbsp; Batch 1: July 7
                    <br>&nbsp; &nbsp; &nbsp; Batch 2: August 11
                    <br>&nbsp; &nbsp; &nbsp; Batch 3: September 15
                    <br>&nbsp; &nbsp; &nbsp; Batch 4: October 6  

                    </p>
                    <p class="time detail"><B>Time:</B><br>&nbsp; &nbsp; &nbsp; 1:30 AM to 5:30 PM</p>
                    <p class="fee detail">
                    <b>Course fee:</b><br><br>&nbsp;<span style="font-size:18px; ">Php 2,200 per module</span></p>
                    <a href="{{ url('/register') }}" class="btn btn-orange">ENROLL NOW</a> 
                </div>

            </div> 
            <div class="col-md-12"><br></div>
            <div class="col-md-12  section-course" >
                <div class="col-md-3">
                    <img  src="{{ asset('/images/java1.png')}}" style="margin:auto;">
                </div>

                
                <div class="col-md-6">
                    <h4 class="ccourse-title2"><b>Java Engineer 1</b></h4>
                    <p class="course-detail">This course provides a solid foundation on how to develop an application using the Java programming language. At the end of this course, students should be able to become well-versed in the Java programming language, understand the theory and engineering behind object-oriented development, platform independence and the Java ecosystem, and apply their knowledge in developing their own game.</p>

                </div>
                <div class="col-md-3">
                    <p class="date detail">
                    <B>Date:</B> <br>&nbsp; &nbsp; &nbsp; Batch 1: July 14, 21, 28, August 4
                    <br>&nbsp; &nbsp; &nbsp; Batch 2: September 22, 29, October 6, 13

                    </p>
                    <p class="time detail"><B>Time:</B><br>&nbsp; &nbsp; &nbsp; 8:30 AM to 12:30 PM</p>
                    <p class="fee detail">
                    <b>Course fee:</b><br><br>&nbsp;<span style="font-size:18px; ">Php 10,800 per module</span></p>
                    <a href="{{ url('/register') }}" class="btn btn-orange">ENROLL NOW</a> 
                </div>

            </div> 
            <div class="col-md-12"><br></div>
            <div class="col-md-12 course-sec section-course" >
                <div class="col-md-3">
                    <img  src="{{ asset('/images/java2.png')}}" style="margin:auto;">
                </div>

                
                <div class="col-md-6">
                    <h4 class="ccourse-title2"><b>Java Engineer 2</b></h4>
                    <p class="course-detail">This course is designed to deepen the knowledge of the students in developing systems with the use of Java programming language. This includes the concepts and ideas behind the use of Standard Query Language (SQL) for the database to produce a working Management Information System (MIS) by the end of the course. </p>

                </div>
                <div class="col-md-3">
                    <p class="date detail">
                    <B>Date:</B> <br>&nbsp; &nbsp; &nbsp; Batch 1: August 18, 25, September 1, 8
                    <br>&nbsp; &nbsp; &nbsp; Batch 2: November 10, 17, 24, December 1

                    </p>
                    <p class="time detail"><B>Time:</B><br>&nbsp; &nbsp; &nbsp; 8:30 AM to 12:30 PM</p>
                    <p class="fee detail">
                    <b>Course fee:</b><br><br>&nbsp;<span style="font-size:18px; ">Php 11,200 per module</span></p>
                    <a href="{{ url('/register') }}" class="btn btn-orange">ENROLL NOW</a> 
                </div>

            </div> 
            <div class="col-md-12"><br></div>
            <div class="col-md-12  section-course" >
                <div class="col-md-3">
                    <img  src="{{ asset('/images/mobile_c1.png')}}" style="margin:auto;">
                </div>

                
                <div class="col-md-6">
                    <h4 class="ccourse-title2"><b>Mobile App Development 1</b></h4>
                    <p class="course-detail">This course teaches the students on how to create an android application using Java as the programming language. The basic concepts on how to use the gradle and deploy an apk to an android device with an operating system not lower than Lollipop will also be taught in this class.</p>

                </div>
                <div class="col-md-3">
                    <p class="date detail">
                    <B>Date:</B> <br>&nbsp; &nbsp; &nbsp; Batch 1: July 14, 21, 28, August 4
                    <br>&nbsp; &nbsp; &nbsp; Batch 2: September 22, 29, October 6, 13

                    </p>
                    <p class="time detail"><B>Time:</B><br>&nbsp; &nbsp; &nbsp; 1:30 PM to 5:30 PM</p>
                    <p class="fee detail">
                    <b>Course fee:</b><br><br>&nbsp;<span style="font-size:18px; ">Php 10,800 per module</span></p>
                    <a href="{{ url('/register') }}" class="btn btn-orange">ENROLL NOW</a> 
                </div>

            </div> 
            <div class="col-md-12"><br></div>
            <div class="col-md-12 course-sec section-course" >
                <div class="col-md-3">
                    <img  src="{{ asset('/images/mobile_c2.png')}}" style="margin:auto;">
                </div>

                
                <div class="col-md-6">
                    <h4 class="ccourse-title2"><b>Mobile App Development  2</b></h4>
                    <p class="course-detail">This course aims to deepen the learning of the students when it comes to mobile application development. This course will include the basic concepts of SQLite for data storage and how to implement a simple management system in an android application.</p>

                </div>
                <div class="col-md-3">
                    <p class="date detail">
                    <B>Date:</B> <br>&nbsp; &nbsp; &nbsp; Batch 1: August 18, 25, September 1, 8
                    <br>&nbsp; &nbsp; &nbsp; Batch 2: November 10, 17, 24, December 1

                    </p>
                    <p class="time detail"><B>Time:</B><br>&nbsp; &nbsp; &nbsp; 1:30 PM to 5:30 PM</p>
                    <p class="fee detail">
                    <b>Course fee:</b><br><br>&nbsp;<span style="font-size:18px; ">Php 11,200 per module</span></p>
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