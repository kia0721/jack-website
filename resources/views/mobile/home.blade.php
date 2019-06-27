@extends('layouts.mobile')

@section('css_link')
    
    <link href="{{ asset('/css/mobile.home.css') }}" rel="stylesheet">
@endsection

@section('content')

<div class="main-wrapper">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="col-md-12 col-sm-12 text-center">

                <img src="{{ asset('images/mobile/01_HOMEPAGE_LOGO.png') }}" />
                <h4 class="no-padding">EMPOWERING KIDS TO BE </h4>
                <h2 class="no-padding">INNOVATORS </2>
            
                <img src="{{ asset('images/mobile/01_HOMEPAGE_BANNER.png') }}"  class="img-responsive"  />
                
            </div>
            <div class="col-md-12 col-sm-12 text-xs-center">
                <H3 class="title">WHY JACK?</H3>

                <img src="{{ asset('assets/images/photos/BB8.jpg') }}" alt="Programming using BB-8" class="img-responsive">
                <div class="line-mentor green" > </div>
                <h4 class="whyJackTitle green" >
                    Hands-on and Project-based Learning
                </h4>
                <p class="text-center">Our carefully crafted programs are executed by a team of passionate educators that develop young minds to create and innovate through project-based and hands-on learning.</p>
            </div>
            <div class="col-md-12 col-sm-12 text-xs-center">

                <img src="{{ asset('assets/images/photos/scratch.jpg') }}" alt="Scratch Programming" class="img-responsive">
                <div class="line-mentor blue" > </div>
                <h4 class="whyJackTitle blue" >
                    Latest Hardware Trends and Innovations
                </h4>
                <p class="text-center">Our carefully crafted programs are executed by a team of passionate educators that develop young minds to create and innovate through project-based and hands-on learning.</p>
            </div>
            <div class="col-md-12 col-sm-12 text-xs-center">

                <img src="{{ asset('assets/images/photos/EV3.jpg') }}" alt="Scratch Programming" class="img-responsive">
                <div class="line-mentor red" > </div>
                <h4 class="whyJackTitle red" >
                   Fun and Engaging IT Environment
                </h4>
                <p class="text-center">Our carefully crafted programs are executed by a team of passionate educators that develop young minds to create and innovate through project-based and hands-on learning.</p>
            </div>
        
           <div class="col-md-12 col-sm-12 text-xs-center">
                <H3 class="title">PROGRAMS</H3>

                <div class="col-md-8 col-md-offset-2 course-event">
                    <div class="row" onclick="window.location='{{ url('program') }}#noviceTab';">
                        <div class="col-xs-4 col-sm-4 text-xs-center">
                            <img src="{{ asset('images/mobile/01_HOMEPAGE_NOVICE.png')}}" class="img-responsive">
                        </div>
                        <div class="col-xs-6 col-sm-6 text-left">
                            <h4 class="title">Novice</h4>
                            <p>Ages 6-8</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 col-md-offset-2 course-event">
                    <div class="row" onclick="window.location='{{ url('program') }}#juniorTab';">
                        <div class="col-xs-4 col-sm-4 text-xs-center">
                            <img src="{{ asset('images/mobile/01_HOMEPAGE_JUNIOR.png')}}" class="img-responsive">
                        </div>
                        <div class="col-xs-6 col-sm-6 text-left">
                            <h4 class="title">Junior</h4>
                            <p>Ages 9-11</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-md-offset-2 course-event">
                    <div class="row" onclick="window.location='{{ url('program') }}#masterTab';">
                        <div class="col-xs-4 col-sm-4 text-xs-center">
                            <img src="{{ asset('images/mobile/01_HOMEPAGE_MASTER.png')}}" class="img-responsive">
                        </div>
                        <div class="col-xs-6 col-sm-6 text-left">
                            <h4 class="title">Master</h4>
                            <p>Ages 12-17</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-md-offset-2 course-event">
                    <div class="row" onclick="window.location='{{ url('program') }}#mentoringTab';">
                        <div class="col-xs-4 col-sm-4 text-xs-center">
                            <img src="{{ asset('images/mobile/01_HOMEPAGE_MENTORING.png')}}" class="img-responsive">
                        </div>
                        <div class="col-xs-6 col-sm-6 text-left">
                            <h4 class="title">Mentoring</h4>
                            <p>All Ages</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-sm-12 one-on-one">
                <h3>One-on-One with the Team</h3>
                <img src="{{ asset('assets/images/mentoring-1014x722.jpg') }}"  class="img-responsive">

                <p>We’re here to help you kickstart your child’s coding journey. Schedule a consultation with the team and know the best course for your child.</p>

                <a class="btn btn-md scheduleNowBtn" href="https://calendly.com/learncoding">Schedule Now</a>
            </div>

            <div>
                <script type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/unique-methods/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">window.dojoRequire(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us16.list-manage.com","uuid":"6fa5e0e86cfe8671d7276f835","lid":"044bd70ce5","uniqueMethods":true}) })</script>
            </div>
        </div>
    </div>

</div>

<div id="videoShowFormModal" class="modal fade" role="dialog" >
    <div class="modal-dialog modal-md" >
        <!-- Modal content-->
        <div class="modal-content" style="border-radius: 30px; background-color: #f7b11b;">
            
            
            <div class="modal-body" style="padding: 20px 30px; ">
                <div class="row">
                    <div class="col-md-12">
                        <button type="button" class="close pull-right" data-dismiss="modal">&times;</button>
                    </div>
                    <br>
                    <div class="col-md-12" style="padding:35px;">
                        <video width="100%" controls>
                          <source src="{{ asset('images/jack_video.mp4') }}" type="video/mp4">
                          Your browser does not support HTML5 video.
                        </video>
                    </div>
                    <br>
                </div>
            </div>
            
        </div><!-- // modal-content // -->
            
    </div><!-- // modal-dialog // -->
</div>
@endsection
@section('script_link')
  
@endsection