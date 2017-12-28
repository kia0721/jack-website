@extends('layouts.mobile')

@section('css_link_2')
<link href="{{ asset('/css/mobi-style.css') }}" rel="stylesheet">
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
            <ul class="nav nav-tabs course-tab" style="background-color: #f2f2f2; padding: 0px 0px;"">
              <li class="active"><a data-toggle="tab" href="#summer"><img id="summer_icon" src="{{ asset('images/summer_active.png') }}"  /><img id="summer_icon_inactive" src="{{ asset('images/summer_inactive.png') }}" /><br>SUMMER</a></li>
              <li><a data-toggle="tab" href="#junior"  style="color:blue;"><img src="{{ asset('images/junior_active.png') }}" /><img id="junior_icon_inactive" src="{{ asset('images/junior_inactive.png') }}"  /><br>JUNIOR</a></li>
              <li><a data-toggle="tab" href="#master"  style="color:red;"><img src="{{ asset('images/master_active.png') }}"  /><img id="master_icon_inactive" src="{{ asset('images/master_inactive.png') }}"  /><br>MASTER</a></li>
            </ul>


            <div class="tab-content">
              <div id="summer" class="tab-pane fade in active">
                <br>
                <div class="col-xs-12 col-sm-12">
        
                        <div class="col-md-8 col-md-offset-2 course-event">
                            <div class="row">
                                <!-- <div class="col-xs-12 col-sm-12 "> -->
                                <br>
                                    <div class="col-xs-3 col-sm-3 text-xs-center">
                                        <img src="{{ asset('images/scratch.png') }}"  width="100%" />
                                    </div>
                                    <div class="col-xs-9 col-sm-9 text-xs-center">
                                        <H4 class="title">Scratch: Welcome to the World of Coding</H4>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 ">
                                    <br>
                                        <p >This is an introductory course on coding that uses the Scratch programming platform. In this class, students use block-based programming to create their own stories, animations, mini games, and more.</p>
                                    </div>

                                    <div class="col-xs-12 col-sm-12">
                                        <p class="date detail">
                   
                                        <B>Date:</B> <br>&nbsp; &nbsp; &nbsp; Batch 1: April 2 to 6
                                        <br>&nbsp; &nbsp; &nbsp; Batch 2: May 14 to 18
                                        <br>&nbsp; &nbsp; &nbsp; Batch 3: June 18 to 22
                                        <br>&nbsp; &nbsp; &nbsp; Batch 4: July 2 to 6

                                        </p>
                                        <p class="time detail"><B>Time:</B><br>&nbsp; &nbsp; &nbsp; 8AM to 12NN
                                        </p>
                                        <p class="fee detail">
                                        <b>Course fee:</b><br><br>&nbsp;<span style="font-size:20px; ">Php 8,500 per module</span></p>
                                        <center>
                                        <a href="{{ url('/products/TruConnect') }}" class="btn btn-orange">ENROLL NOW</a> <br><br>
                                        </center>
                                    </div>
                                </div>
                            </div>
                           <br>
                        <div class="col-md-8 col-md-offset-2 course-event">
                            <div class="row">
                                <br>
                                    <div class="col-xs-3 col-sm-3 text-xs-center">
                                        <img src="{{ asset('images/mobi_junior.png') }}"  width="100%" />
                                    </div>
                                    <div class="col-xs-9 col-sm-9 text-xs-center">
                                        <H4 class="title">JUNIOR</H4>
                                        <p class="sub-title">START THEM YOUNG!</p>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 ">
                                    <br>
                                        <p >The Junior Coder classes are specifically crafted for ages 8 to 11. Have a  head start in coding and learn more advanced classes like Python Programming and Mobile App Development. Here, kids are introduced to text based programming. </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                   
                
              </div>
              <div id="junior" class="tab-pane fade">
                <div class="col-md-12">
                    <br>
                    <h2>JUNIOR</h2>
                </div>
              </div>
              <div id="master" class="tab-pane fade">
                <div class="col-md-12">
                    <br>
                    <h2>MASTER</h2>
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