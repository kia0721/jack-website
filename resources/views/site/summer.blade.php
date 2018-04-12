@extends('layouts.site')

@section('css_link_2')
@include('css.courses_nav') 
    <style type="text/css">
        .banner{
            background-color: #ff932b;
            position: relative;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 50%;
            background:transparent url("{{ asset('images/coder_banner.jpg') }}") no-repeat center bottom;

        }
        .banner, .price:after {
            background-color: #ff932b;

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
                    <h1 class="course-title" style="margin: 0;">SUMMER</h1>
                    <H2>LEARN TO CODE. PLAY AND HAVE FUN!</H2>
                    <h4>JACK’s summer courses are open for students ages 7 to 16. Here, kids can discover, learn, and enjoy the world of coding. Whether you want to explore coding or pursue a specific track, we’ve got you covered. Start with the Foundations of Coding or take specialized courses like Game Development, iOS App Development, or Robotics.</h4>
                    
                    <a href="{{ url('/courses') }}" class="btn btn-orange">GO BACK TO COURSES</a> <br><br>
                </div>
              </div>
            </div>
          </div>
        </div>


        <section>
          <div class="wrapper">
            <div class="entry-content">
                <h2 class="division-title" > FOUNDATIONS OF CODING</h2>
                
            </div>
            <div class="col-md-12 course-sec section-course" >
                <div class="col-md-3">
                    <img src="{{ asset('/images/scratch.png')}}" style="margin:auto;">
                </div>

                
                <div class="col-md-6">
                    <h4 class="ccourse-title2"><b>Scratch: Welcome to the World of Coding</b></h4>
                    <p class="course-detail">This is an introductory course on coding that uses the Scratch programming platform. In this class, students use block-based programming to create their own stories, animations, mini games, and more.</p>

                </div>
                <div class="col-md-3">
                    <p class="date detail">
                   
                    <B>Date:</B> <br>&nbsp; &nbsp; &nbsp; Batch 1: April 2 to 6
                    <br>&nbsp; &nbsp; &nbsp; Batch 2: May 14 to 18
                    <br>&nbsp; &nbsp; &nbsp; Batch 3: June 18 to 22
                    <br>&nbsp; &nbsp; &nbsp; Batch 4: July 2 to 6

                    </p>
                    <p class="time detail"><B>Time:</B><br>&nbsp; &nbsp; &nbsp; 8AM to 12NN
                    </p>
                    <p class="fee detail">
                    <b>Course fee:</b><br><br>&nbsp;<span style="font-size:20px; ">Php 8,800 per module</span></p>
                    <a href="{{ url('/register') }}" class="btn btn-orange">ENROLL NOW</a> 
                </div>

            </div> 
            <div class="col-md-12"><br></div>
            <div class="col-md-12 section-course">
                <div class="col-md-3">
                    <img src="{{ asset('/images/tynker.png')}}" style="margin:auto;">
                </div>

                
                <div class="col-md-6">
                    <h4 class="ccourse-title2"><b>Tynker: Start your Coding Adventure</b></h4>
                    <p class="course-detail">This course provides introductory sessions on coding using visual code blocks in order to pilot drones, program sensors, solve STEM challenges, build and deploy Minecraft mods, and have the chance to transition to basic text coding via Swift, JavaScript, and Python with ease.</p>

                </div>
                <div class="col-md-3">
                    <p class="date detail">
                   
                    <B>Date: </B><br>&nbsp; &nbsp; &nbsp; Batch 1: April 9 to 13
                    <br>&nbsp; &nbsp; &nbsp; Batch 2: May 21 to 25
                    </p>
                    <p class="time detail">
                    <B>Time:</B><br>&nbsp; &nbsp; &nbsp; 8AM to 12NN</p>
                    <p class="fee detail">
                    <b>Course fee:</b><br><br>&nbsp;<span style="font-size:20px; ">Php 8,800 per module</span></p>
                    <a href="{{ url('/register') }}" class="btn btn-orange">ENROLL NOW</a> 
                </div>

            </div> 
            <div class="col-md-12"><br><hr></div>

            <div class="entry-content">
                <h2 class="division-title" >iOS APP DEVELOPMENT</h2>
                
            </div>
            <div class="col-md-12 course-sec section-course">
                <div class="col-md-3 ">
                    <img src="{{ asset('/images/swift_playground.png')}}" style="margin:auto;">
                </div>

                
                <div class="col-md-6">
                    <h4 class="ccourse-title2"><b>Swift Playgrounds 1: Learn to Code with Swift</b></h4>
                    <p class="course-detail">This course develops the students’ fundamental skills in coding by writing in Swift, the programming language used for iOS App Development, and be able to control robots such as Sphero BB-8, Lego Mindstorms, and Parrot Drones.</p>

                </div>
                <div class="col-md-3">
                    <p class="date detail">
                   
                    <B>Date: </B><br>&nbsp; &nbsp; &nbsp; April 16 to 20
                    </p>
                    <p class="time detail">
                    <B>Time:</B><br>&nbsp; &nbsp; &nbsp; 8AM to 12NN
                    </p>
                    <p class="fee detail">
                    <b>Course fee:</b><br><br>&nbsp;<span style="font-size:20px; ">Php 9,000 per module
                    </span></p>

                    <a href="{{ url('/register') }}" class="btn btn-orange">ENROLL NOW</a> 
                </div>

            </div> 
            <div class="col-md-12"><br></div>

            <div class="col-md-12 section-course">
                <div class="col-md-3 ">
                    <img src="{{ asset('/images/swift2.png')}}" style="margin:auto;">
                </div>

                
                <div class="col-md-6">
                    <h4 class="ccourse-title2"><b>Swift Playgrounds 2: Deep Dive on Swift </b></h4>
                    <p class="course-detail">This course is designed to deepen the students’ understanding of Swift towards App Development by using the integrated development environment used for iOS App Development (Playground Books and Xcode 9).</p>

                </div>
                <div class="col-md-3">
                    <p class="date detail"><B>Date:</B><br>&nbsp; &nbsp; &nbsp; April 23 to 27</p>
                    <p class="time detail"><B>Time:</B><br>&nbsp; &nbsp; &nbsp; 8AM to 12NN</p>
                    <p class="fee detail">
                    <b>Course fee:</b><br><br>&nbsp;<span style="font-size:20px; ">Php 9,500 per module</span></p>
                    <a href="{{ url('/register') }}" class="btn btn-orange">ENROLL NOW</a> 
                </div>

            </div> 

            <div class="col-md-12"><br><hr></div>
            <div class="entry-content">
                <h2 class="division-title" >GAME DEVELOPMENT</h2>
            </div>

            <div class="col-md-12 course-sec section-course">
                <div class="col-md-3 ">
                    <img src="{{ asset('/images/code_n_mode.png')}}" style="margin:auto;">
                </div>

                
                <div class="col-md-6">
                    <h4 class="ccourse-title2"><b>Minecraft 1: Code and Mod</b></h4>
                    <p class="course-detail">This course teaches the fundamentals of Game Asset Creation and Game Animation. It includes a discussion on Game Environment, which is implemented using Minecraft’s blocks, items, mobs, and mods in Blender. This is then ported to Scratch for Game Programming.</p>

                </div>
                <div class="col-md-3">
                    <p class="date detail">
                    <B>Date:</B><br>&nbsp; &nbsp; &nbsp; Batch 1: April 23 to 27
                    <br>&nbsp; &nbsp; &nbsp; Batch 2: June 25 to 29
                    <br>&nbsp; &nbsp; &nbsp; Batch 3: July 9 to 13</p>
                    <p class="time detail">
                    <B>Time:</B><br>&nbsp; &nbsp; &nbsp; 8AM to 12NN
                    </p>
                    <p class="fee detail">
                    <b>Course fee:</b><br><br>&nbsp;<span style="font-size:20px; ">Php 9,000 per module
                    </span></p>
                    <a href="{{ url('/register') }}" class="btn btn-orange">ENROLL NOW</a> 
                </div>

            </div> 

            <div class="col-md-12"><br> </div>
            <div class="col-md-12 section-course">
                <div class="col-md-3 ">
                    <img src="{{ asset('/images/world_vr.png')}}" style="margin:auto;">
                </div>

                
                <div class="col-md-6">
                    <h4 class="ccourse-title2"><b>Minecraft 2: World and VR</b></h4>
                    <p class="course-detail">This course teaches the concepts of space in its 3D virtual-spatial representation. It uses Minecraft Assets (basic blocks, items, mobs, etc.) built with the game development platform Unity, which is then ported to an Android Device to be viewed using a Google Cardboard.</p>

                </div>
                <div class="col-md-3">
                    <p class="date detail"><B>Date:</B><br>&nbsp; &nbsp; &nbsp; May 7 to 11</p>
                    <p class="time detail"><B>Time:</B><br>&nbsp; &nbsp; &nbsp; 8AM to 12NN</p>
                    <p class="fee detail">
                    <b>Course fee:</b><br><br>&nbsp;<span style="font-size:20px; ">Php 9,800 per module</span></p>
                    <a href="{{ url('/register') }}" class="btn btn-orange">ENROLL NOW</a> 
                </div>

            </div>


           

            <div class="col-md-12"><br><hr> </div>
            <div class="entry-content">
                <h2 class="division-title" >MULTIMEDIA</h2>
            </div>
            <div class="col-md-12 course-sec section-course">
                <div class="col-md-3 ">
                    <img src="{{ asset('/images/digital_animation.png')}}" style="margin:auto;">
                </div>

                
                <div class="col-md-6">
                    <h4 class="ccourse-title2"><b>Bring your Ideas to Life through Digital Animation</b></h4>
                    <p class="course-detail">This course aims to equip students with the necessary knowledge and skills to produce their own vector-based graphics and eventually create their own animated short films. Aside from this, students will also learn the foundations of professional animation. In this class, Flash will be used as the main platform in creating animations. Students will learn how to use the software, be familiarized with its interface, toolbar and overall working area.</p>

                </div>
                <div class="col-md-3">
                    <p class="date detail"><B>Date:</B> <br>&nbsp; &nbsp; &nbsp; May 21 to 25</p>
                    <p class="time detail"><B>Time:</B><br>&nbsp; &nbsp; &nbsp; 8AM to 12NN</p>
                    <p class="fee detail">
                    <b>Course fee:</b><br><br>&nbsp;<span style="font-size:19px; ">Php 9,800 per module</span></p>
                    <a href="{{ url('/register') }}" class="btn btn-orange">ENROLL NOW</a> 
                </div>

            </div>

            <div class="col-md-12"><br> </div>
            <div class="col-md-12 section-course">
                <div class="col-md-3 ">
                    <img src="{{ asset('/images/stop_motion.png')}}" style="margin:auto;">
                </div>

                
                <div class="col-md-6">
                    <h4 class="ccourse-title2"><b>Explore the World of Stop-Motion Animation</b></h4>
                    <p class="course-detail">This course develops a fundamental understanding of stop-motion animation, while exploring an exciting variety of animation techniques. Students will use clay, paper, lego, toys, found objects and more to bring their imaginations to life. Through short screenings and demos, the class will draw inspiration from winning animation stop-motion works. Taught by an award-winning animation director, students will learn the full creative process from start to finish, including camera set up and shooting, character and story creation, set building and more.</p>

                </div>
                <div class="col-md-3">
                    <p class="date detail"><B>Date:</B><br>&nbsp; &nbsp; &nbsp; May 14 to 18</p>
                    <p class="time detail"><B>Time:</B><br>&nbsp; &nbsp; &nbsp; 8AM to 12NN</p>
                    <p class="fee detail">
                    <b>Course fee:</b><br><br>&nbsp;<span style="font-size:20px; ">Php 9,800 per module</span></p>
                    <a href="{{ url('/register') }}" class="btn btn-orange">ENROLL NOW</a> 
                </div>

            </div>
            <div class="col-md-12"><br> </div>
           
          </div>
        </section>
    </div>


@endsection
@section('script_link')
  
@endsection