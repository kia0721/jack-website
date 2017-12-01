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
              <div class="course-descr-d">
                <div>
                    <h1 class="course-title">SUMMER</h1>
                    <H2>For ages 7 to 16</H2>
                    <br><br>
                    <a href="{{ url('/courses') }}" class="btn btn-orange">GO BACK TO COURSES</a> 
                </div>
              </div>
              <div class="course-descr2-d">
                <div ><img  src="{{ asset('/images/twitty.png')}}" style="margin:auto;"></div>
              </div>
            </div>
          </div>
        </div>


        <section>
          <div class="wrapper">
            <div class="entry-content">
                <h2 style="text-align: center;"> FOUNDATIONS OF CODING</h2>
                
            </div>
            <div class="col-md-12 course-sec section-course" >
                <div class="col-md-3">
                    <img src="{{ asset('/images/scratch.png')}}" style="margin:auto;">
                </div>

                
                <div class="col-md-6">
                    <h4><b>Scratch: Welcome to the World of Coding</b></h4>
                    <p class="course-detail">This is an introductory course on coding that uses the Scratch programming platform. In this class, students use block-based programming to create their own stories, animations, mini games, and more.</p>

                </div>
                <div class="col-md-3">
                    <p >
                   
                    <B>Date: <br>&nbsp; &nbsp; &nbsp; Batch 1: April 2 to 6
                    <br>&nbsp; &nbsp; &nbsp; Batch 2: May 14 to 18
                    <br>&nbsp; &nbsp; &nbsp; Batch 3: June 18 to 22
                    <br>&nbsp; &nbsp; &nbsp; Batch 4: July 2 to 6</B>
                    <br><B>Time:<br>&nbsp; &nbsp; &nbsp; 8AM to 12NN</B>
                    <br><br>
                    <b>Course fee:<br>&nbsp; &nbsp; &nbsp; Php 8,500 per module</b>

                    </p>
                    <a href="{{ url('/products/TruConnect') }}" class="btn btn-orange">ENROLL NOW</a> 
                </div>

            </div> 
            <div class="col-md-12"><br></div>
            <div class="col-md-12 section-course">
                <div class="col-md-3">
                    <img src="{{ asset('/images/no.png')}}" style="margin:auto;">
                </div>

                
                <div class="col-md-6">
                    <h4><b>Tynker: Start your Coding Adventure</b></h4>
                    <p class="course-detail">This course provides introductory sessions on coding using visual code blocks in order to pilot drones, program sensors, solve STEM challenges, build and deploy Minecraft mods, and have the chance to transition to basic text coding via Swift, JavaScript, and Python with ease.</p>

                </div>
                <div class="col-md-3">
                    <p >
                   
                    <B>Date: <br>&nbsp; &nbsp; &nbsp; Batch 1: April 9 to 13
                    <br>&nbsp; &nbsp; &nbsp; Batch 2: May 21 to 25</B>
                    <br><B>Time:<br>&nbsp; &nbsp; &nbsp; 8AM to 12NN</B>
                    <br><br>
                    <b>Course fee:<br>&nbsp; &nbsp; &nbsp; Php 8,500 per module</b>

                    </p>
                    <a href="{{ url('/products/TruConnect') }}" class="btn btn-orange">ENROLL NOW</a> 
                </div>

            </div> 
            <div class="col-md-12"><br><hr></div>

            <div class="entry-content">
                <h2 style="text-align: center;">iOS APP DEVELOPMENT</h2>
                
            </div>
            <div class="col-md-12 course-sec section-course">
                <div class="col-md-3 ">
                    <img src="{{ asset('/images/swift_playground.png')}}" style="margin:auto;">
                </div>

                
                <div class="col-md-6">
                    <h4><b>Swift Playgrounds 1: Learn to Code with Swift</b></h4>
                    <p class="course-detail">This course develops the students’ fundamental skills in coding by writing in Swift, the programming language used for iOS App Development, and be able to control robots such as Sphero BB-8, Lego Mindstorms, and Parrot Drones.</p>

                </div>
                <div class="col-md-3">
                    <p >
                   
                    <B>Date: <br>&nbsp; &nbsp; &nbsp; April 16 to 20</B>
                    <br><B>Time:<br>&nbsp; &nbsp; &nbsp; 8AM to 12NN</B>
                    <br><br>
                    <b>Course fee:<br>&nbsp; &nbsp; &nbsp; Php 8,500 per module</b>

                    </p>
                    <a href="{{ url('/products/TruConnect') }}" class="btn btn-orange">ENROLL NOW</a> 
                </div>

            </div> 
            <div class="col-md-12"><br></div>

            <div class="col-md-12 section-course">
                <div class="col-md-3 ">
                    <img src="{{ asset('/images/swift_playground.png')}}" style="margin:auto;">
                </div>

                
                <div class="col-md-6">
                    <h4><b>Swift Playgrounds 2: Deep Dive on Swift </b></h4>
                    <p class="course-detail">This course is designed to deepen the students’ understanding of Swift towards App Development by using the integrated development environment used for iOS App Development (Playground Books and Xcode 9).</p>

                </div>
                <div class="col-md-3">
                    <p ><B>Date: <br>&nbsp; &nbsp; &nbsp; April 23 to 27</B>
                    <br><B>Time:<br>&nbsp; &nbsp; &nbsp; 8AM to 12NN</B>
                    <br><br>
                    <b>Course fee:<br>&nbsp; &nbsp; &nbsp; Php 9,500 per module</b></p>
                    <a href="{{ url('/products/TruConnect') }}" class="btn btn-orange">ENROLL NOW</a> 
                </div>

            </div> 

            <div class="col-md-12"><br><hr></div>
            <div class="entry-content">
                <h2 style="text-align: center;">GAME DEVELOPMENT</h2>
            </div>

            <div class="col-md-12 course-sec section-course">
                <div class="col-md-3 ">
                    <img src="{{ asset('/images/code_n_mode.png')}}" style="margin:auto;">
                </div>

                
                <div class="col-md-6">
                    <h4><b>Minecraft 1: Code and Mod</b></h4>
                    <p class="course-detail">This course teaches the fundamentals of Game Asset Creation and Game Animation. It includes a discussion on Game Environment, which is implemented using Minecraft’s blocks, items, mobs, and mods in Blender. This is then ported to Scratch for Game Programming.</p>

                </div>
                <div class="col-md-3">
                    <p ><B>Date: <br>&nbsp; &nbsp; &nbsp; April 23 to 27</B>
                    <br><B>Time:<br>&nbsp; &nbsp; &nbsp; 8AM to 12NN</B>
                    <br><br>
                    <b>Course fee:<br>&nbsp; &nbsp; &nbsp; Php 8,500 per module</b></p>
                    <a href="{{ url('/products/TruConnect') }}" class="btn btn-orange">ENROLL NOW</a> 
                </div>

            </div> 

            <div class="col-md-12"><br> </div>
            <div class="col-md-12 section-course">
                <div class="col-md-3 ">
                    <img src="{{ asset('/images/world_vr.png')}}" style="margin:auto;">
                </div>

                
                <div class="col-md-6">
                    <h4><b>Minecraft 2: World and VR</b></h4>
                    <p class="course-detail">This course teaches the concepts of space in its 3D virtual-spatial representation. It uses Minecraft Assets (basic blocks, items, mobs, etc.) built with the game development platform Unity, which is then ported to an Android Device to be viewed using a Google Cardboard.</p>

                </div>
                <div class="col-md-3">
                    <p ><B>Date: <br>&nbsp; &nbsp; &nbsp; April 30 to May 4</B>
                    <br><B>Time:<br>&nbsp; &nbsp; &nbsp; 8AM to 12NN</B>
                    <br><br>
                    <b>Course fee:<br>&nbsp; &nbsp; &nbsp; Php 9,500 per module</b></p>
                    <a href="{{ url('/products/TruConnect') }}" class="btn btn-orange">ENROLL NOW</a> 
                </div>

            </div>

            <div class="col-md-12"><br> </div>
            <div class="col-md-12 course-sec section-course">
                <div class="col-md-3 ">
                    <img src="{{ asset('/images/code_n_mode.png')}}" style="margin:auto;">
                </div>

                
                <div class="col-md-6">
                    <h4><b>Minecraft 3: Advanced World and VR</b></h4>
                    <p class="course-detail">This course teaches the basics of 3D virtual interaction with Unity’s Physics Engine (Gravity, Friction, Elasticity, Material-type, Kinematics, etc.). It uses Minecraft Assets  (basic blocks, items, mobs, etc.) with its actual reality-like characteristics, which students can interact with using HTC Vive.</p>

                </div>
                <div class="col-md-3">
                    <p ><B>Date: <br>&nbsp; &nbsp; &nbsp; May 7 to 11</B>
                    <br><B>Time:<br>&nbsp; &nbsp; &nbsp; 8AM to 12NN</B>
                    <br><br>
                    <b>Course fee:<br>&nbsp; &nbsp; &nbsp; Php 10,000 per module</b></p>
                    <a href="{{ url('/products/TruConnect') }}" class="btn btn-orange">ENROLL NOW</a> 
                </div>

            </div>


            <div class="col-md-12"><br> </div>
            <div class="col-md-12 section-course">
                <div class="col-md-3 ">
                    <img src="{{ asset('/images/game_salad.png')}}" style="margin:auto;">
                </div>

                
                <div class="col-md-6">
                    <h4><b>A Taste of Game Salad</b></h4>
                    <p class="course-detail">This course teaches the fundamentals of computer science by allowing students to design and execute their games. After developing a game, students can publish their program on the App Store and Playstore and let other people experience it.</p>

                </div>
                <div class="col-md-3">
                    <p ><B>Date: <br>&nbsp; &nbsp; &nbsp; Batch 1: June 25 to 29
                    <br>&nbsp; &nbsp; &nbsp; Batch 2: July 9 to 13</B>
                    <br><B>Time:<br>&nbsp; &nbsp; &nbsp; 8AM to 12NN</B>
                    <br><br>
                    <b>Course fee:<br>&nbsp; &nbsp; &nbsp; Php 8,500 per module</b></p>
                    <a href="{{ url('/products/TruConnect') }}" class="btn btn-orange">ENROLL NOW</a> 
                </div>

            </div>

            <div class="col-md-12"><br><hr> </div>
            <div class="entry-content">
                <h2 style="text-align: center;">ENGINEERING</h2>
            </div>
            <div class="col-md-12 course-sec section-course">
                <div class="col-md-3 ">
                    <img src="{{ asset('/images/coding_robotics.png')}}" style="margin:auto;">
                </div>

                
                <div class="col-md-6">
                    <h4><b>Robotics 1</b></h4>
                    <p class="course-detail">This course provides a solid foundation of Robotics by building a robot platform from LEGO Mindstorms that can be used to program and simulate basic Artificial Intelligence (AI). Basic Robotic Behaviors and Heuristics are also discussed in order to achieve an intelligent decisive behaviour.</p>

                </div>
                <div class="col-md-3">
                    <p ><B>Date: <br>&nbsp; &nbsp; &nbsp; Batch 1: May 14 to 18
                    <br>&nbsp; &nbsp; &nbsp; Batch 2: June 25 to 29
                    <br>&nbsp; &nbsp; &nbsp; Batch 3: July 9 to 13</B>
                    <br><B>Time:<br>&nbsp; &nbsp; &nbsp; 8AM to 12NN</B>
                    <br><br>
                    <b>Course fee:<br>&nbsp; &nbsp; &nbsp; Php 9,000 per module</b></p>
                    <a href="{{ url('/products/TruConnect') }}" class="btn btn-orange">ENROLL NOW</a> 
                </div>

            </div>
            <div class="col-md-12"><br> </div>
            <div class="col-md-12 section-course">
                <div class="col-md-3 ">
                    <img src="{{ asset('/images/advanced_coding_robotics.png')}}" style="margin:auto;">
                </div>

                
                <div class="col-md-6">
                    <h4><b>Robotics 2</b></h4>
                    <p class="course-detail">This course teaches how to make a simple robot from scratch using a Remote-Control Car. It discusses the fundamentals of designing and building a Wheeled Robot. It also includes discussions on the capabilities of the robot, given its built and make, to perform certain locomotion limited to its characteristics. Simple AI is also implemented using an Arduino microcontroller, and a sensor as Feedback.</p>

                </div>
                <div class="col-md-3">
                    <p ><B>Date: <br>&nbsp; &nbsp; &nbsp; May 21 to 25</B>
                    <br><B>Time:<br>&nbsp; &nbsp; &nbsp; 8AM to 12NN</B>
                    <br><br>
                    <b>Course fee:<br>&nbsp; &nbsp; &nbsp; Php 11,000 per module</b></p>
                    <a href="{{ url('/products/TruConnect') }}" class="btn btn-orange">ENROLL NOW</a> 
                </div>

            </div>
          </div>
        </section>
    </div>


@endsection
@section('script_link')
  
@endsection