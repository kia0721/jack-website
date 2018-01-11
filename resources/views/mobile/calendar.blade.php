@extends('layouts.mobile')

@section('css_link')
    
    <style type="text/css">
        .btn-next-prev{
            display: inline !important;
            font-size: 18px;
            color: #676565;
        }

        .month-sel{
            color: #20bff7;
            font-size: 22px;
            border-color: #f2f2f2;
            background-color: #f2f2f2;
            margin-top: -3px;
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

        .month-event{
            border-style: outset;
            background-color: #efefef;
            border-radius: 15px;
        }

        .date-title{
            color: orange;
            font-size: 24px;
            margin-top: 0px;
        }

        .no-classes{
            padding: 20px 20px;
            text-align: center;
            font-size: 24px;
        }

        .col-xs-5.month-option-div {
            text-align: center;
            margin: 10px;
            border-style: solid;
            border-width: 1px;
            padding-bottom: 20px;
            padding-top: 20px;
            border-color: #ff9c37;
            background-color: #ff9c37;

        }
        a.month-option {
            font-size: 18px;
            font-weight: bold;
            color: black;
        }
    </style>
@endsection

@section('content')

<div class="main-wrapper">
    
    <div class="col-md-8 col-md-offset-2" style="background-color: #f2f2f2; padding: 20px 0px;">
        <div class="row">
            <div class="col-sm-3 col-xs-3">
                <p class="btn-next-prev" id="previous-btn"><span class="glyphicon glyphicon-chevron-left btn-next-prev"></span> Prev</p>
                
            </div>
            <div class="col-sm-6 col-xs-6 no-padding">
                <center>
                <button class="month-button" id="month-btn"  data-toggle="modal" data-target="#showMonthsModal"> </button>
                <!-- <select class="month-sel">
                    <option>JANUARY</option>
                    <option>FEBRUARY</option>
                    <option>MARCH</option>
                    <option>APRIL</option>
                    <option>MAY</option>
                    <option>JUNE</option>
                    <option>JULY</option>
                    <option>AUGUST</option>
                    <option>SEPTEMBER</option>
                    <option>OCTOBER</option>
                    <option>NOVEMBER</option>
                    <option>DECEMBER</option>
                </select> --></center>
            </div>
            <div class="col-sm-3 col-xs-3">
                <p class="btn-next-prev pull-right" id="next-btn">Next <span class="glyphicon glyphicon-chevron-right btn-next-prev"></span></p>
                
            </div>
            
        </div>
    
    </div>
    <div class="">
        <section name="month-1" class="months-sec" id="JANUARY">
            <div class="col-xs-12" >&nbsp;</div>
            <div class="col-md-12 col-sm-12">
            
                <div class="col-md-8 col-md-offset-2">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 month-event">
                        <br>
                            <div class="col-xs-4 col-sm-4 text-xs-center no-padding">
                                <img src="{{ asset('images/mobile_c.png') }}"  width="100%" />
                            </div>
                            <div class="col-xs-8 col-sm-8 text-xs-center">
                                <H4 class="date-title">JAN 20, SAT</H4>
                                <p class="course-title">Junior Coder: Mobile App Development (Day 1)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 " >
                    &nbsp;
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 month-event">
                        <br>
                            <div class="col-xs-4 col-sm-4 text-xs-center no-padding">
                                <img src="{{ asset('images/mobile_c.png') }}"  width="100%" />
                            </div>
                            <div class="col-xs-8 col-sm-8 text-xs-center">
                                <H4 class="date-title">JAN 27, SAT</H4>
                                <p class="course-title">Junior Coder: Mobile App Development (Day 2)</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        
        </section>
        <section name="month-2" class="months-sec" id="FEBRUARY">
            <div class="col-xs-12" >&nbsp;</div>
            <div class="col-md-12 col-sm-12">
            
                <div class="col-md-8 col-md-offset-2">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 month-event">
                        <br>
                            <div class="col-xs-4 col-sm-4 text-xs-center no-padding">
                                <img src="{{ asset('images/mobile_c.png') }}"  width="100%" />
                            </div>
                            <div class="col-xs-8 col-sm-8 text-xs-center">
                                <H4 class="date-title">FEB 3, SAT</H4>
                                <p class="course-title">Junior Coder: Mobile App Development (Day 3)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12" >&nbsp;</div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 month-event">
                        <br>
                            <div class="col-xs-4 col-sm-4 text-xs-center no-padding">
                                <img src="{{ asset('images/mobile_c.png') }}"  width="100%" />
                            </div>
                            <div class="col-xs-8 col-sm-8 text-xs-center">
                                <H4 class="date-title">FEB 10, SAT</H4>
                                <p class="course-title">Junior Coder: Mobile App Development (Day 4)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12" >&nbsp;</div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 month-event">
                        <br>
                            <div class="col-xs-4 col-sm-4 text-xs-center no-padding">
                                <img src="{{ asset('images/mobile_c.png') }}"  width="100%" />
                            </div>
                            <div class="col-xs-8 col-sm-8 text-xs-center">
                                <H4 class="date-title">FEB 17, SAT</H4>
                                <p class="course-title">Junior Coder: Mobile App Development (Day 5)</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        
        </section>

        <section name="month-3" class="months-sec" id="MARCH">
            <div class="col-xs-12" >&nbsp;</div>
            <div class="col-md-12 col-sm-12">
            
                <div class="col-md-8 col-md-offset-2">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 month-event">
                            <H4 class="no-classes">NO CLASSES</H4>
                        </div>
                    </div>
                </div>
            </div>
        
        </section>

        <section name="month-4" class="months-sec" id="APRIL">
            <div class="col-xs-12" >&nbsp;</div>
            <div class="col-md-12 col-sm-12">
            
                <div class="col-md-8 col-md-offset-2">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 month-event">
                        <br>
                            <div class="col-xs-4 col-sm-4 text-xs-center no-padding">
                                <img src="{{ asset('images/scratch.png') }}"  width="100%" />
                            </div>
                            <div class="col-xs-8 col-sm-8 text-xs-center">
                                <H4 class="date-title">APR 2-6<br>Mon-Fri</H4>
                                <p class="course-title">Scratch: Welcome to the World of Coding (Day 1 to 5)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12" >&nbsp;</div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 month-event">
                        <br>
                            <div class="col-xs-4 col-sm-4 text-xs-center no-padding">
                                <img src="{{ asset('images/tynker.png') }}"  width="100%" />
                            </div>
                            <div class="col-xs-8 col-sm-8 text-xs-center">
                                <H4 class="date-title">APR 9-13<br>Mon-Fri</H4>
                                <p class="course-title">Tynker: Start your Coding Adventure (Day 1 to 5)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12" >&nbsp;</div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 month-event">
                        <br>
                            <div class="col-xs-4 col-sm-4 text-xs-center no-padding">
                                <img src="{{ asset('images/swift_playground.png') }}"  width="100%" />
                            </div>
                            <div class="col-xs-8 col-sm-8 text-xs-center">
                                <H4 class="date-title">APR 16-20<br>Mon-Fri</H4>
                                <p class="course-title">Swift Playgrounds I: Learn to Code with Swift (Day 1 to 5)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12" >&nbsp;</div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 month-event">
                        <br>
                            <div class="col-xs-4 col-sm-4 text-xs-center no-padding">
                                <img src="{{ asset('images/swift2.png') }}"  width="100%" />
                            </div>
                            <div class="col-xs-8 col-sm-8 text-xs-center">
                                <H4 class="date-title">APR 23-27<br>Mon-Fri</H4>
                                <p class="course-title">Swift Playgrounds II: Deep Dive on Swift (Day 1 to 5)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12" >&nbsp;</div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 month-event">
                        <br>
                            <div class="col-xs-4 col-sm-4 text-xs-center no-padding">
                                <img src="{{ asset('images/code_n_mode.png') }}"  width="100%" />
                            </div>
                            <div class="col-xs-8 col-sm-8 text-xs-center">
                                <H4 class="date-title">APR 23-27<br>Mon-Fri</H4>
                                <p class="course-title">Minecraft I: Code and Mod (Day 1 to 5)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12" >&nbsp;</div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 month-event">
                        <br>
                            <div class="col-xs-4 col-sm-4 text-xs-center no-padding">
                                <img src="{{ asset('images/code_n_mode.png') }}"  width="100%" />
                            </div>
                            <div class="col-xs-8 col-sm-8 text-xs-center">
                                <H4 class="date-title">APR 30, Mon</H4>
                                <p class="course-title">Minecraft II: World and VR (Day 1)</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        
        </section>

        <section name="month-5" class="months-sec" id="MAY">
            <div class="col-xs-12" >&nbsp;</div>
            <div class="col-md-12 col-sm-12">
            
                <div class="col-md-8 col-md-offset-2">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 month-event">
                        <br>
                            <div class="col-xs-4 col-sm-4 text-xs-center no-padding">
                                <img src="{{ asset('images/world_vr.png') }}"  width="100%" />
                            </div>
                            <div class="col-xs-8 col-sm-8 text-xs-center">
                                <H4 class="date-title">MAY 1-4<br>Tue to Fri</H4>
                                <p class="course-title">Minecraft II: World and VR (Day 2 to 4)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12" >&nbsp;</div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 month-event">
                        <br>
                            <div class="col-xs-4 col-sm-4 text-xs-center no-padding">
                                <img src="{{ asset('images/minecraft3.png') }}"  width="100%" />
                            </div>
                            <div class="col-xs-8 col-sm-8 text-xs-center">
                                <H4 class="date-title">MAY 7-11<BR>Mon-Fri</H4>
                                <p class="course-title">Minecraft III: Advanced World and VR (Day 1 to 5)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12" >&nbsp;</div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 month-event">
                        <br>
                            <div class="col-xs-4 col-sm-4 text-xs-center no-padding">
                                <img src="{{ asset('images/scratch.png') }}"  width="100%" />
                            </div>
                            <div class="col-xs-8 col-sm-8 text-xs-center">
                                <H4 class="date-title">MAY 14-18<BR>Mon-Fri</H4>
                                <p class="course-title">Scratch: Welcome to the World of Coding (Day 1 to 5)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12" >&nbsp;</div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 month-event">
                        <br>
                            <div class="col-xs-4 col-sm-4 text-xs-center no-padding">
                                <img src="{{ asset('images/coding_robotics.png') }}"  width="100%" />
                            </div>
                            <div class="col-xs-8 col-sm-8 text-xs-center">
                                <H4 class="date-title">MAY 14-18<BR>Mon-Fri</H4>
                                <p class="course-title">Robotics I (Day 1 to 5)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12" >&nbsp;</div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 month-event">
                        <br>
                            <div class="col-xs-4 col-sm-4 text-xs-center no-padding">
                                <img src="{{ asset('images/tynker.png') }}"  width="100%" />
                            </div>
                            <div class="col-xs-8 col-sm-8 text-xs-center">
                                <H4 class="date-title">MAY 21-25<BR>Mon-Fri</H4>
                                <p class="course-title">Tynker: Start your Coding Adventure (Day 1 to 5)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12" >&nbsp;</div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 month-event">
                        <br>
                            <div class="col-xs-4 col-sm-4 text-xs-center no-padding">
                                <img src="{{ asset('images/advanced_coding_robotics.png') }}"  width="100%" />
                            </div>
                            <div class="col-xs-8 col-sm-8 text-xs-center">
                                <H4 class="date-title">MAY 21-25<BR>Mon-Fri</H4>
                                <p class="course-title">Robotics II (Day 1 to 5)</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        
        </section>

        <section name="month-6" class="months-sec" id="JUNE">
            <div class="col-xs-12" >&nbsp;</div>
            <div class="col-md-12 col-sm-12">
            
                <div class="col-md-8 col-md-offset-2">
                    
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 month-event">
                        <br>
                            <div class="col-xs-4 col-sm-4 text-xs-center no-padding">
                                <img src="{{ asset('images/scratch.png') }}"  width="100%" />
                            </div>
                            <div class="col-xs-8 col-sm-8 text-xs-center">
                                <H4 class="date-title">JUNE 18-22<BR>Mon-Fri</H4>
                                <p class="course-title">Scratch: Welcome to the World of Coding (Day 1 to 5)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12" >&nbsp;</div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 month-event">
                        <br>
                            <div class="col-xs-4 col-sm-4 text-xs-center no-padding">
                                <img src="{{ asset('images/coding_robotics.png') }}"  width="100%" />
                            </div>
                            <div class="col-xs-8 col-sm-8 text-xs-center">
                                <H4 class="date-title">JUNE 25-29<BR>Mon-Fri</H4>
                                <p class="course-title">Robotics I (Day 1 to 5)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12" >&nbsp;</div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 month-event">
                        <br>
                            <div class="col-xs-4 col-sm-4 text-xs-center no-padding">
                                <img src="{{ asset('images/game_salad.png') }}"  width="100%" />
                            </div>
                            <div class="col-xs-8 col-sm-8 text-xs-center">
                                <H4 class="date-title">JUNE 25-29<BR>Mon-Fri</H4>
                                <p class="course-title">A Taste of Game Salad (Day 1 to 5)</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        
        </section>

        <section name="month-7" class="months-sec" id="JULY">
            <div class="col-xs-12" >&nbsp;</div>
            <div class="col-md-12 col-sm-12">
            
                <div class="col-md-8 col-md-offset-2">
                    
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 month-event">
                        <br>
                            <div class="col-xs-4 col-sm-4 text-xs-center no-padding">
                                <img src="{{ asset('images/scratch.png') }}"  width="100%" />
                            </div>
                            <div class="col-xs-8 col-sm-8 text-xs-center">
                                <H4 class="date-title">JULY 2-6<BR>Mon-Fri</H4>
                                <p class="course-title">Scratch: Welcome to the World of Coding (Day 1 to 5)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12" >&nbsp;</div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 month-event">
                        <br>
                            <div class="col-xs-4 col-sm-4 text-xs-center no-padding">
                                <img src="{{ asset('images/coding_robotics.png') }}"  width="100%" />
                            </div>
                            <div class="col-xs-8 col-sm-8 text-xs-center">
                                <H4 class="date-title">JULY 9-13<BR>Mon-Fri</H4>
                                <p class="course-title">Robotics I (Day 1 to 5)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12" >&nbsp;</div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 month-event">
                        <br>
                            <div class="col-xs-4 col-sm-4 text-xs-center no-padding">
                                <img src="{{ asset('images/game_salad.png') }}"  width="100%" />
                            </div>
                            <div class="col-xs-8 col-sm-8 text-xs-center">
                                <H4 class="date-title">JULY 9-13<BR>Mon-Fri</H4>
                                <p class="course-title">A Taste of Game Salad (Day 1 to 5)</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        
        </section>
        <section name="month-8" class="months-sec" id="AUGUST">
            <div class="col-xs-12" >&nbsp;</div>
            <div class="col-md-12 col-sm-12">
            
                <div class="col-md-8 col-md-offset-2">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 month-event">
                            <H4 class="no-classes">NO CLASSES</H4>
                        </div>
                    </div>
                </div>
            </div>
        
        </section>
        <section name="month-9" class="months-sec" id="SEPTEMBER">
            <div class="col-xs-12" >&nbsp;</div>
            <div class="col-md-12 col-sm-12">
            
                <div class="col-md-8 col-md-offset-2">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 month-event">
                            <H4 class="no-classes">NO CLASSES</H4>
                        </div>
                    </div>
                </div>
            </div>
        
        </section>
        <section name="month-10" class="months-sec" id="OCTOBER">
            <div class="col-xs-12" >&nbsp;</div>
            <div class="col-md-12 col-sm-12">
            
                <div class="col-md-8 col-md-offset-2">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 month-event">
                            <H4 class="no-classes">NO CLASSES</H4>
                        </div>
                    </div>
                </div>
            </div>
        
        </section>
        <section name="month-11" class="months-sec" id="NOVEMBER">
            <div class="col-xs-12" >&nbsp;</div>
            <div class="col-md-12 col-sm-12">
            
                <div class="col-md-8 col-md-offset-2">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 month-event">
                            <H4 class="no-classes">NO CLASSES</H4>
                        </div>
                    </div>
                </div>
            </div>
        
        </section>
        <section name="month-12" class="months-sec" id="DECEMBER">
            <div class="col-xs-12" >&nbsp;</div>
            <div class="col-md-12 col-sm-12">
            
                <div class="col-md-8 col-md-offset-2">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 month-event">
                            <H4 class="no-classes">NO CLASSES</H4>
                        </div>
                    </div>
                </div>
            </div>
        
        </section>
    </div>

    <div id="showMonthsModal" class="modal fade" role="dialog" >
        <div class="modal-dialog modal-md">
            <!-- Modal content-->
            <div class="modal-content" style="border-radius: 30px; background-color: #ffecd9;">
                
                
                <div class="modal-body" style=" ">
                    <div class="row">
                        <div class="col-xs-12">
                            <button type="button" class="close pull-right" data-dismiss="modal">&times;</button>
                        </div>
                        <br>
                        <div class="col-xs-12">
                            <div class="col-xs-5 month-option-div" >
                                <a href="#JANUARY" class="month-option">JANUARY</a>
                            </div>
                            <div class="col-xs-5 month-option-div" >

                                <a href="#FEBRUARY" class="month-option">FEBRUARY</a>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-5 month-option-div">
                                <a href="#MARCH" class="month-option">MARCH</a>
                            </div>
                            <div class="col-xs-5 month-option-div" >
                                <a href="#APRIL" class="month-option">APRIL</a>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-5 month-option-div" >

                                <a href="#MAY" class="month-option">MAY</a>
                            </div>
                            <div class="col-xs-5 month-option-div">
                                <a href="#JUNE" class="month-option">JUNE</a>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-5 month-option-div" >
                                <a href="#JULY" class="month-option">JULY</a>
                            </div>
                            <div class="col-xs-5 month-option-div">

                                <a href="#AUGUST" class="month-option">AUGUST</a>
                            </div>

                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-5 month-option-div">
                                <a href="#SEPTEMBER" class="month-option">SEPTEMBER</a>
                            </div>
                            <div class="col-xs-5 month-option-div" >
                                <a href="#OCTOBER" class="month-option">OCTOBER</a>
                            </div>

                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-5 month-option-div" >

                                <a href="#NOVEMBER" class="month-option">NOVEMBER</a>
                            </div>
                            <div class="col-xs-5 month-option-div">
                                <a href="#DECEMBER" class="month-option">DECEMBER</a>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
                
            </div><!-- // modal-content // -->
                
        </div><!-- // modal-dialog // -->
    </div>
</div>

@endsection
@section('script_link')
   
    <script type="text/javascript" >
        $('.months-sec').hide();
        var monthSelected = window.location.hash;
        $(monthSelected).show();

        var monthStr = monthSelected.split('#')[1];
        var MONTH_ICON = " &nbsp;&nbsp;<span class='glyphicon glyphicon-chevron-down' style='top:5px;'></span>";
        $('#month-btn').html(monthStr+MONTH_ICON);

        $(window).on('hashchange', function(e){
            monthSelected = window.location.hash;
            monthStr = monthSelected.split('#')[1];
            console.log(monthSelected);
            // history.pushState(null, null, monthSelected);
            $('#showMonthsModal').modal('hide');
            $('.months-sec').hide();
            $(monthSelected).show();
            
            $('#month-btn').html(monthStr+MONTH_ICON);

            
            
        });

        $('#next-btn').on('click', function(e){
            var monthNum = $(monthSelected).attr("name").split('-')[1];
            if(monthNum == 12){
                monthNum = 0;
            }
            monthNum++;
            $('.months-sec').hide();
            $('.month-'+monthNum).show();
            console.log(monthNum);
            monthSelected = getMontStr(monthNum);
            $('#month-btn').html(monthStr+MONTH_ICON);
            window.location.hash = monthSelected;
        });

        $('#previous-btn').on('click', function(e){
            var monthNum = $(monthSelected).attr("name").split('-')[1];
            if(monthNum == 1){
                monthNum = 13;
            }
            monthNum--;
            $('.months-sec').hide();
            $('.month-'+monthNum).show();
            console.log(monthNum);
            monthSelected = getMontStr(monthNum);
            $('#month-btn').html(monthStr+MONTH_ICON);
            window.location.hash = monthSelected;
        });
        function getMontStr(monthInt){
            switch(monthInt){
                case 1:   return "JANUARY"; 
                case 2: return "FEBRUARY";
                case 3: return "MARCH";
                case 4: return "APRIL";
                case 5: return "MAY";
                case 6: return "JUNE";
                case 7: return "JULY" ;
                case 8: return "AUGUST";
                case 9: return "SEPTEMBER";
                case 10: return "OCTOBER";
                case 11: return "NOVEMBER";
                case 12: return "DECEMBER";
                default : return "JANUARY";
            }
            
        }
    </script>
@endsection