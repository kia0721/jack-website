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
    </style>
@endsection

@section('content')

<div class="main-wrapper">
    
    <div class="col-md-8 col-md-offset-2" style="background-color: #f2f2f2; padding: 20px 0px;">
        <div class="row">
            <div class="col-sm-3 col-xs-3">
                <p class="btn-next-prev"><span class="glyphicon glyphicon-chevron-left btn-next-prev"></span> Prev</p>
                
            </div>
            <div class="col-sm-6 col-xs-6 ">
                <center>
                <button class="month-button" id="month-btn"> </button>
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
                <p class="btn-next-prev pull-right">Next <span class="glyphicon glyphicon-chevron-right btn-next-prev"></span></p>
                
            </div>
            
        </div>
    
    </div>
    <div class="">
        <section id="month-01" class="months-sec">
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
        <section id="month-02" class="months-sec">
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

        <section id="month-03" class="months-sec">
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

        <section id="month-04" class="months-sec">
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

        <section id="month-05" class="months-sec">
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
    
    </div>
</div>

@endsection
@section('script_link')
   
    <script type="text/javascript" >
    $('#month-btn').html("JANUARY &nbsp;&nbsp;<span class='glyphicon glyphicon-chevron-down' style='top:5px;'></span>");
    </script>
@endsection