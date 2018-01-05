@extends('layouts.site')

@section('css_link_2')
<style type="text/css">
    .banner{
        background-color: #98bac0;
        /*background:transparent url("{{ asset('images/calendar_banner.png') }}") no-repeat center bottom;*/
        height: 100%;

    }

    .banner, .price:after {
        background-color: #98bac0;

    }
</style>

<link href="{{ asset('lightbox/css/lightbox.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div id="main-wrapper">

        <div class="banner">
          <div class="wrapper">
            <div class="banner-content clrf">
              <div class="course-descr-d">
                <center><div>
                    <img src="{{ asset('images/calendar_banner.png') }}" style="margin:auto;">
                    <h1 class="hide">CALENDAR</h1>
                </div></center>
              </div>
            </div>
          </div>
        </div>


        <section>
          <div class="wrapper">
            <div class="entry-content">
                <h3 style="text-align: center;"> <a href="{{ url('downloadCalendar') }}" >Download Calendar Here!</a></h3>
                
            </div>
            <div class="col-md-12 section-course">
                <div class="col-md-4">
                    
                    <a href="{{ asset('images/calendar/month_1.jpg') }}" data-lightbox="image-1" data-title="January 2018"><img  width="100%" src="{{ asset('images/calendar/month_1.jpg') }}" ></a>
                </div>

                
                <div class="col-md-4">
                    <a href="{{ asset('images/calendar/month_2.jpg') }}" data-lightbox="image-1" data-title="February 2018"><img  width="100%" src="{{ asset('images/calendar/month_2.jpg') }}" ></a>
                </div>
                <div class="col-md-4">
                    <a href="{{ asset('images/calendar/month_3.jpg') }}" data-lightbox="image-1" data-title="March 2018"><img  width="100%" src="{{ asset('images/calendar/month_3.jpg') }}" ></a>
                </div>


            </div> 
            <div class="col-md-12"><br></div>
            <div class="col-md-12"><br></div>
            <div class="col-md-12 section-course">
                <div class="col-md-4">
                    
                    <a href="{{ asset('images/calendar/month_4.jpg') }}" data-lightbox="image-1" data-title="April 2018"><img  width="100%" src="{{ asset('images/calendar/month_4.jpg') }}" ></a>
                </div>

                
                <div class="col-md-4">
                    <a href="{{ asset('images/calendar/month_5.jpg') }}" data-lightbox="image-1" data-title="May 2018"><img  width="100%" src="{{ asset('images/calendar/month_5.jpg') }}" ></a>
                </div>
                <div class="col-md-4">
                    <a href="{{ asset('images/calendar/month_6.jpg') }}" data-lightbox="image-1" data-title="June 2018"><img  width="100%" src="{{ asset('images/calendar/month_6.jpg') }}" ></a>
                </div>


            </div> 
            <div class="col-md-12"><br></div>
            <div class="col-md-12 section-course">
                <div class="col-md-4">
                    
                    <a href="{{ asset('images/calendar/month_7.jpg') }}" data-lightbox="image-1" data-title="July 2018"><img  width="100%" src="{{ asset('images/calendar/month_7.jpg') }}" ></a>
                </div>

                
                <div class="col-md-4">
                    <a href="{{ asset('images/calendar/month_8.jpg') }}" data-lightbox="image-1" data-title="August 2018"><img  width="100%" src="{{ asset('images/calendar/month_8.jpg') }}" ></a>
                </div>
                <div class="col-md-4">
                    <a href="{{ asset('images/calendar/month_9.jpg') }}" data-lightbox="image-1" data-title="September 2018"><img  width="100%" src="{{ asset('images/calendar/month_9.jpg') }}" ></a>
                </div>


            </div> 
            <div class="col-md-12"><br></div>
            <div class="col-md-12 section-course">
                <div class="col-md-4">
                    
                    <a href="{{ asset('images/calendar/month_10.jpg') }}" data-lightbox="image-1" data-title="October 2018"><img  width="100%" src="{{ asset('images/calendar/month_10.jpg') }}" ></a>
                </div>

                
                <div class="col-md-4">
                    <a href="{{ asset('images/calendar/month_11.jpg') }}" data-lightbox="image-1" data-title="November 2018"><img  width="100%" src="{{ asset('images/calendar/month_11.jpg') }}" ></a>
                </div>
                <div class="col-md-4">
                    <a href="{{ asset('images/calendar/month_12.jpg') }}" data-lightbox="image-1" data-title="December 2018"><img  width="100%" src="{{ asset('images/calendar/month_12.jpg') }}" ></a>
                </div>


            </div> 
            <div class="col-md-12"><br></div>
            
          </div>
        </section>
    </div>

@endsection
@section('script_link')
<script src="{{ asset('lightbox/js/lightbox.js') }}"></script>
<script src="{{ asset('/js/ba-debug.js') }}" ></script>
<script src="{{ asset('/js/jquery.ba-throttle-debounce.js') }}"></script>
<script type="text/javascript">
    

    lightbox.option({
      'fitImagesInViewport': false,
      'wrapAround': true
    });
</script>
@endsection