@extends('layouts.mobile')

@section('css_link')
    
    <link href="{{ asset('/css/mobile.about.css') }}" rel="stylesheet">
@endsection

@section('content')

<div class="main-wrapper">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="col-md-12 col-sm-12 text-center">
                <img src="{{ asset('images/mobile/02_ABOUTUS_BANNER.png') }}"  class="img-responsive"  />
                <h4>"Technology is and will inevitably be part of everything we do. At JACK, we want to give the younger generation the opportunity to become architects of their own future by learning how to code."</h4>
                <div class="display-1e pt-3"><i>Rose A. Saulog, Managing Director</i></div>
            </div>
         
         <!--    <div class="col-md-12 col-sm-12 timeLine">
                2014
               
            </div> -->
          
        </div>
    </div>

</div>
@endsection
@section('script_link')
  
@endsection