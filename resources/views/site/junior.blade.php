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
                    <H2>START THEM YOUNG!</H2>
                    <h4>The Junior Coder classes are specifically crafted for ages <b>8 to 11</b>. Have a  head start in coding and learn more advanced classes like Python Programming and Mobile App Development. Here, kids are introduced to text based programming. </h4>
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
                <h2 class="division-title" > NOVICE CODER</h2>
                
            </div>
            <div class="col-md-12 section-course">
                <div class="col-md-3">
                    <img  src="{{ asset('/images/python_jr.png')}}" style="margin:auto;">
                </div>

                
                <div class="col-md-6">
                   
                    <h4 class="ccourse-title2"><b>Scratch: Welcome to the World of Coding</b></h4>
                    <p class="course-detail">This is an introductory course on coding that uses the Scratch programming platform. In this class, students use block-based programming to create their own stories, animations, mini games, and more.</p>

                </div>
                <div class="col-md-3">
                    <p class="date detail"><B>Date:</B><br>&nbsp; &nbsp; &nbsp; Batch 1: July 7, 14, 21, 28<br>
                    <B>Time:</B><br>&nbsp; &nbsp; &nbsp; 8:30AM to 12:30PM</p>
                    <p class="time detail"><B>Date:</B><br>&nbsp; &nbsp; &nbsp; Batch 2: August 11, 18, 25 and September 1<br>
                    <B>Time:</B><br>&nbsp; &nbsp; &nbsp; 1:30AM to 5:30PM</p>
                    <p class="date detail"><B>Date:</B><br>&nbsp; &nbsp; &nbsp; Batch 3: September 15, 22, 29 and October 6<br>
                    <B>Time:</B><br>&nbsp; &nbsp; &nbsp; 8:30AM to 12:30PM</p>
                    <p class="fee detail">
                    <b>Course fee:</b><br><br>&nbsp;<span style="font-size:18px; ">Php 8,800 per module</span></p>
                    <!-- <a href="{{ url('/register') }}"  class="btn btn-orange">RESCHEDULED</a>  -->
                </div>

            </div> 
            <div class="col-md-12"><br></div>
            <div class="entry-content">
                <h2 class="division-title" > JUNIOR CODER</h2>
                
            </div>
            <div class="col-md-12 course-sec section-course" >
                <div class="col-md-3">
                    <img  src="{{ asset('/images/lua_logo.png')}}" style="margin:auto;">
                </div>

                <div class="col-md-6">
                    <h4 class="ccourse-title2"><b>Power your Imagination with LUA</b></h4>
                    <p class="course-detail">This course provides introductory sessions on a powerful, efficient, embeddable scripting language, the programming language used for games such as World of Warcraft and Angry Birds. In this class, students will experience to learn how to build and code their own interactive 3D Roblox world. </p>

                </div>
                <div class="col-md-3">
                    <p class="date detail"><B>Date:</B><br>&nbsp; &nbsp; &nbsp; July 7, 14, 21, and 28</p>
                    <p class="time detail"><B>Time:</B><br>&nbsp; &nbsp; &nbsp; 8:30AM to 12:30PM</p>
                    <p class="fee detail">
                    <b>Course fee:</b><br><br>&nbsp;<span style="font-size:18px; ">Php 8,400 per module</span></p>
                    <a href="{{ url('/register') }}" class="btn btn-orange">ENROLL NOW</a> 
                </div>

            </div> 
            <div class="col-md-12"><br></div>
            <div class="col-md-12 section-course">
                <div class="col-md-3">
                    <img  src="{{ asset('/images/python_jr.png')}}" style="margin:auto;">
                </div>

                
                <div class="col-md-6">
                   
                    <h4 class="ccourse-title2"><b>Be PYTHON Ready</b></h4>
                    <p class="course-detail">This course is designed to show the simplicity of Python syntax and its powerful libraries, often used as a support language for software developers, for build control, management, testing and in many other ways. In this class, students will experience building a game base and defeat enemies through a variety of unique and challenging coding activities through CheckiO.org.</p>

                </div>
                <div class="col-md-3">
                    <p class="date detail"><B>Date:</B><br>&nbsp; &nbsp; &nbsp; August 11, 18, 25, and<br>&nbsp; &nbsp; &nbsp; September 1</p>
                    <p class="time detail"><B>Time:</B><br>&nbsp; &nbsp; &nbsp; 8:30AM to 12:30PM</p>
                    <p class="fee detail">
                    <b>Course fee:</b><br><br>&nbsp;<span style="font-size:18px; ">Php 8,800 per module</span></p>
                    <!-- <a href="{{ url('/register') }}"  class="btn btn-orange">RESCHEDULED</a>  -->
                </div>

            </div> 
            <div class="col-md-12"><br></div>
            <div class="col-md-12 course-sec section-course" >
                <div class="col-md-3">
                    <img  src="{{ asset('/images/mobile_c1.png')}}" style="margin:auto;">
                </div>

                <div class="col-md-6">
                    <h4 class="ccourse-title2"><b>Mobile App Dev 1: Meet App Inventor</b></h4>
                    <p class="course-detail">This course introduces the world of mobile app development at your fingertips. In this class, students will learn the basic development of apps using an intuitive, visual programming environment that allows everyone to build fully functional apps for smartphones and tablets. Students will also learn how to test, debug and follow the app development lifecycle.</p>

                </div>
                <div class="col-md-3">
                    <p class="date detail"><B>Date:</B><br>&nbsp; &nbsp; &nbsp; September 15, 22, 29,<br>&nbsp; &nbsp; &nbsp; October 6</p>
                    <p class="time detail"><B>Time:</B><br>&nbsp; &nbsp; &nbsp; 8:30AM to 12:30PM</p>
                    <p class="fee detail">
                    <b>Course fee:</b><br><br>&nbsp;<span style="font-size:18px; ">Php 10,200 per module</span></p>
                    <a href="{{ url('/register') }}" class="btn btn-orange">ENROLL NOW</a> 
                </div>

            </div> 
            <div class="col-md-12"><br></div>

            <div class="col-md-12 section-course">
                <div class="col-md-3">
                    <img  src="{{ asset('/images/mobile_c2.png')}}" style="margin:auto;">
                </div>

                
                <div class="col-md-6">
                   
                    <h4 class="ccourse-title2"><b>Mobile App Dev 2: Innovate with App Inventor</b></h4>
                    <p class="course-detail">This course aims to produce a useful application using MIT App Inventor. In this class, students will bring forth their thinking caps and creativity to solve a specific problem by programming a useful application. They will also learn to follow and apply the design thinking framework.</p>

                </div>
                <div class="col-md-3">
                    <p class="date detail"><B>Date:</B><br>&nbsp; &nbsp; &nbsp; November 10, 17, 24, December 1</p>
                    <p class="time detail"><B>Time:</B><br>&nbsp; &nbsp; &nbsp; 8:30AM to 12:30PM</p>
                    <p class="fee detail">
                    <b>Course fee:</b><br><br>&nbsp;<span style="font-size:18px; ">Php 10,500 per module</span></p>
                    <!-- <a href="{{ url('/register') }}"  class="btn btn-orange">RESCHEDULED</a>  -->
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