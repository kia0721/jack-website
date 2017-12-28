@extends('layouts.mobile')

@section('css_link')
    
    <link href="{{ asset('/css/mobi-style.css') }}" rel="stylesheet">
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
    <div class="col-xs-12 col-sm-12 " >
    &nbsp;
    </div>
    <section id="month-01">
    
        <div class="col-md-12 col-sm-12">
        
            <div class="col-md-8 col-md-offset-2">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 month-event">
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
                <div class="col-xs-12 col-sm-12 " >
                &nbsp;
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 month-event">
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
    </div>
    </section>
</div>
@endsection
@section('script_link')
   
    <script type="text/javascript" >
    $('#month-btn').html("JANUARY &nbsp;&nbsp;<span class='glyphicon glyphicon-chevron-down' style='top:5px;'></span>");
    </script>
@endsection