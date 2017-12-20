@extends('layouts.mobile')

@section('css_link')
    <!-- <link href="{{ captcha_layout_stylesheet_url() }}" type="text/css" rel="stylesheet"> -->
    <style type="text/css">
        .title{
            color: #ff9c34;
        }
        .sub-title{
            color: #00bff3;
        }


    </style>
@endsection

@section('content')

<div class="main-wrapper">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="col-md-12 col-sm-12">
                <center>
                    <img src="{{ asset('images/mobi_welcome.png') }}" />
                </center>
            </div>
            <div class="col-md-12 col-sm-12">
            &nbsp;
            </div>
            <div class="col-xs-6 col-sm-6">
                <img src="{{ asset('images/button_photos.png') }}" width="100%" />
            </div>
            <div class="col-xs-6 col-sm-6">
                <img src="{{ asset('images/button_video.png') }}"  width="100%" />
            </div>
            <div class="col-md-12 col-sm-12">
            &nbsp;
            </div>
            <div class="col-md-12 col-sm-12">
                <p>In today's digital world, coding has become a fundamental skill that is best taught at an early age. When kids learn how to create using the latest hardware trends and innovations, they also learn how to be more creative, at the same time, using logic, to solve problems.
                </p>
                <p>JACK's mission is to provide kids with the highest quality learning experience by celebrating and encouraging their creativity through dynamic and project-based learning all in a fun and engaging environment.</p>
            </div>
            <div class="col-md-12 col-sm-12">
            &nbsp;
            </div>
            <div class="col-md-12 col-sm-12 text-xs-center">
                <H2 class="title">COURSES OFFERED</H2>
                <H4 class="sub-title">Learn how to code, play and have fun!</H4>
            </div>
            <div class="col-xs-3 col-sm-3 text-xs-center">
                <img src="{{ asset('images/mobi_summer.png') }}"  width="100%" />
            </div>
            <div class="col-xs-9 col-sm-9 text-xs-center">
                <H4 class="title">SUMMER</H4>
                <p>Delve into the wonderful world of coding by learning how to develop applications where you can create your very own stories and games.</p>
            </div>
            <div class="col-xs-3 col-sm-3 text-xs-center">
                <img src="{{ asset('images/mobi_summer.png') }}"  width="100%" />
            </div>
            <div class="col-xs-3 col-sm-9 text-xs-center">
                <H4 >JUNIOR</H4>
                <p>Delve into the wonderful world of coding by learning how to develop applications where you can create your very own stories and games.</p>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script_link')
  
@endsection