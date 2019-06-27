@extends('layouts.site_3')

@section('content')
 <div class="py-4 bg-white w-100"></div>   

<section class="header4 align-top p-0 pt-5 cid-r5hOBAS1c7 mbr-fullscreen mbr-fullscreen_home mbr-white mbr-parallax-background" id="header4-17">

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="media-content col-md-10">
                <div class="mbr-figure ">
                    <img src="{{ asset('assets/images/jack.png') }}" alt="JACK" id="logoHome">
                </div>

                <h3 class="align-center text-color mbr-fonts-style pt-2 space-title display-1b">EMPOWERING KIDS TO BE</h3>
                <h1 class="align-center text-color mbr-fonts-style space-title title-home1">INNOVATORS</h1>
                
            </div>
            
        </div>
    </div>
</section>

<section class="mbr-section content4 cid-r4JYNSCsp9" id="content4-m">


<section class="features2 cid-r5Snge4wVq" id="features2-10">
    <div class="container">
        <div class="title col-12 col-md-12">
                <h1 class="align-center pb-3 text-color display-Kbold"><strong>
                    WHY JACK</strong></h1>
        </div>
        <div class="media-container-row">
            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="{{ asset('assets/images/photos/BB8.jpg') }}" alt="Programming using BB-8">
                    </div>
                    <div class="card-img align-center">
                        <img src="{{ asset('assets/images/homepage/whyjack01.png') }}" alt="Programming using BB-8" style="width: 70%">
                    </div>
                    <div>
                        <h4 class="card-title pb-3 mbr-fonts-style display-5" style="color:#4c874d;text-align: center;">
                            <b>Hands-on and Project-based Learning</b>
                        </h4>
                        <p class="mbr-text text-color display-4" style="text-align: center;">
                            Our carefully crafted programs are executed by a team of passionate educators that develop young minds to create and innovate through project-based and hands-on learning.
                        </p>
                    </div>
                </div>
            </div>

            <div class="card p-3 col-1  2 col-md-6 col-lg-4">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="{{ asset('assets/images/photos/scratch.jpg') }}" alt="Scratch Programming">
                    </div>
                    <div class="card-img align-center">
                        <img src="{{ asset('assets/images/homepage/whyjack03.png') }}" alt="Programming using BB-8" style="width: 70%">
                    </div>
                    <div>
                        <h4 class="card-title pb-3 text-color display-5" style="color:#2fa6e0;text-align: center;">
                            <b>Latest Hardware Trends and Innovations</b>
                        </h4>
                        <p class="mbr-text mbr-fonts-style display-4" style="text-align: center;">
                            Our courses incorporate the latest technologies that help in advancing the learning of our students, as well as in giving them an edge to be globally competitive.
                        </p>
                    </div>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="{{ asset('assets/images/photos/EV3.jpg') }}" alt="Programming using Lego">
                    </div>
                    <div class="card-img align-center">
                        <img src="{{ asset('assets/images/homepage/whyjack02.png') }}" alt="Programming using BB-8" style="width: 70%">
                    </div>
                    <div>
                        <h4 class="card-title pb-3 text-color display-5" style="color:#da4443;text-align: center;">
                            <b>Fun and Engaging IT Environment</b>
                        </h4>
                        <p class="mbr-text mbr-fonts-style display-4" style="text-align: center;">
                            Our classes are designed to make coding fun for young programmers and are implemented in an IT company that gives students a peek of what happens in the industry.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="features13 cid-r4JYt1SkDL" id="features13-k">

    <div class="container" style="min-height: 650px;">
        <h1 class="mbr-section-title pb-3 text-color display-Kbold" style="text-align: center">
            PROGRAMS</h1>
             <div class="media-container-row container display-CourseBG" style="min-height: 550px; width:100%; "></div>
            
                <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
             <div class="icons">
                <div class="text-left py-5 novice ball" >
                    <a href="{{ url('program') }}#noviceTab" onclick="tabclick(this.href);"><img class="img-responsive course-icon icon-novice" src="{{ asset('assets/images/homepage/novice.png') }}" alt="Novice" ></a>
                </div>
                 <div class="text-left py-5 junior ball" >
                    <a href="{{ url('program') }}#juniorTab"  onclick="tabclick(this.href);"><img class="img-responsive course-icon icon-junior"src="{{ asset('assets/images/homepage/junior.png') }}" alt="Junior"></a>
                </div>
                 <div class="text-left py-5 master ball mx-auto" >
                    <a href="{{ url('program') }}#masterTab"  onclick="tabclick(this.href);"><img class="img-responsive course-icon icon-master" src="{{ asset('assets/images/homepage/master.png') }}" alt="Master"></a>
                </div>
                <div class="text-left py-5 mentoring ball" >
                    <a href="{{ url('program') }}#mentoringTab"  onclick="tabclick(this.href);"><img class="img-responsive course-icon icon-mentoring" src="{{ asset('assets/images/homepage/mentoring.png') }}" alt="Mentoring"></a>
                </div>
            </div>
    </div>
</section>

<section class="header3 cid-r4JYHqvKbU mbr-parallax-background" id="header3-l" style="margin-top:-250px">

    <div class="container">
        <div class="media-container-row">
            <div class="mbr-figure" style="width: 100%;">
                <img src="{{ asset('assets/images/mentoring-1014x722.jpg') }}">
            </div>

            <div class="media-content">
                <h1 class="mbr-section-title mbr-white pb-3 mbr-fonts-style display-Kbold">One-on-One with the Team</h1>
                
                <div class="mbr-section-text mbr-white pb-3 ">
                    <p class="mbr-text mbr-fonts-style display-4">
                        We’re here to help you kickstart your child’s coding journey. Schedule a consultation with the team and know the best course for your child.
                    </p>
                </div>
                <div class="mbr-section-btn"><a class="btn btn-md btn-primary display-4" href="https://calendly.com/learncoding">Schedule Now</a></div>
            </div>
        </div>
    </div>

</section>

<div>
    <script type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/unique-methods/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">window.dojoRequire(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us16.list-manage.com","uuid":"6fa5e0e86cfe8671d7276f835","lid":"044bd70ce5","uniqueMethods":true}) })</script>
</div>

@endsection

@section('script_link')


<script>
function populateSavedCourses(){}
</script>
@endsection