@extends('layouts.mobile')

@section('css_link_2')

<style type="text/css">
   
    .course-tab>li{
        width: 33.10%;
        text-align: center;
    }
    .month-button{
        color: #20bff7;
        font-size: 22px;
        border-color: #f2f2f2;
        background-color: #f2f2f2;
        margin-top: -3px;
        text-align: center; 
        border-style: none; 
    }

    .course-event{
        border-style: outset;
        background-color: #efefef;
        border-radius: 15px;
    }

    .nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover{
        border-bottom-color: #d26a00;
        border-bottom-width: 3px;
    }

    .nav-tabs>li>a{
        color: #b8b8b8;
    }

    .division-title{
        text-align: center;
        color: #00bef3;
        text-shadow: 2px 2px 2px black;
        font-stretch: semi-condensed;
        font-weight: bolder;
        font-size: 23px;
        letter-spacing: 2px;
    }

    .to-be-annc{
        font-weight: bolder;
        text-shadow: 2px 2px 2px black;
        color: red;
        font-size: 32px;
        border-color: red;
        border-width: 2px;
        border-style: dashed;
        padding: 10px;
        letter-spacing: 3px;
        text-align: center;
    }

    .detail{
        padding: 5px 10px; 
        border-radius: 5px;
    }
    .date.detail{
        background-color: rgba(0, 190, 243, 0.4117647058823529);       
    }

    .time.detail{
        background-color: rgba(255, 156, 55, 0.5019607843137255);   
    }

    .fee.detail{
        background-color: rgba(85, 229, 160, 0.72);
    }
</style>
@endsection

@section('content')
<div class="main-wrapper">
    
    <div class="col-md-8 col-md-offset-2" ">
        <div class="row">

            <div class="col-xs-12 col-sm-12">
                <H3 class="division-title">START THEM YOUNG!</H3>
                <h4>The Junior Coder classes are specifically crafted for ages 8 to 11. Have a  head start in coding and learn more advanced classes like Python Programming and Mobile App Development. Here, kids are introduced to text based programming.</h4>
            </div><br><br>
            <div class="col-xs-12 col-sm-12">
                <div class="col-md-8 col-md-offset-2 course-event">
                    <div class="row">
                        <!-- <div class="col-xs-12 col-sm-12 "> -->
                        <br>
                        <div class="col-xs-3 col-sm-3 text-xs-center">
                            <img src="{{ asset('images/mobile_c.png') }}"  width="100%" />
                        </div>
                        <div class="col-xs-9 col-sm-9 text-xs-center">
                            <H4 class="title">Junior Coder: Mobile App Development</H4>
                        </div>
                        <div class="col-xs-12 col-sm-12 ">
                        <br>
                            <p >This course teaches the basics of creating a mobile app. In this class, students learn to design their app’s screens, implement their app ideas by programming them, and deploying them in their iOS or Android device. They also learn about testing, debugging, and the app development life cycle.</p>
                        </div>

                        <div class="col-xs-12 col-sm-12">
                            <p class="date detail"><B>Date:</B><br>&nbsp; &nbsp; &nbsp; Jan. 20, 27,<br>&nbsp; &nbsp; &nbsp; Feb. 3, 10, 17</p>
                            <p class="time detail"><B>Time:</B><br>&nbsp; &nbsp; &nbsp; 8:30AM to 12:30PM</p>
                            <p class="fee detail">
                            <b>Course fee:</b><br><br>&nbsp;<span style="font-size:18px; ">Php 12,000 per module</span></p>
                            <center>
                            <a href="{{ url('/register') }}" class="btn btn-orange">ENROLL NOW</a> <br><br>
                            </center>
                        </div>
                    </div>
                </div>
                <br>
                <div class="col-md-8 col-md-offset-2 course-event">
                    <div class="row">
                        <!-- <div class="col-xs-12 col-sm-12 "> -->
                        <br>
                        <div class="col-xs-3 col-sm-3 text-xs-center">
                            <img src="{{ asset('images/python_jr.png') }}"  width="100%" />
                        </div>
                        <div class="col-xs-9 col-sm-9 text-xs-center">
                            <H4 class="title">Junior Coder: Python Programming</H4>
                        </div>
                        <div class="col-xs-12 col-sm-12 ">
                        <br>
                            <p >This course provides an overview of Algorithms, Data, Programming, Computers and the Internet. At the end of this course, students should be able to show understanding an of algorithms and what they can be used for, create a simple program using Python, use data types and simple data structures in coding that program, explain the main components of a computer system and how they fit together, and explain how the internet works.</p>
                        </div>

                        <div class="col-xs-12 col-sm-12">
                            <h3 class="to-be-annc">TBA</h3>
                            <p><b>Schedule for 2018  to be determined</b>
                            <p class="fee detail">
                            <b>Course fee:</b><br><br>&nbsp;<span style="font-size:18px; ">Php 12,000 per module</span></p>
                            <center>
                            <a href="{{ url('/register') }}" class="btn btn-orange">ENROLL NOW</a> <br><br>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
@section('script_link')

<script type="text/javascript">
</script>
@endsection