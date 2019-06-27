@extends('layouts.site_3')

@section('content')

<div class="py-4 bg-white w-100"></div> 

<section class="header4 align-top p-0 pt-3 mbr-fullscreen-programs mbr-fullscreen_home mbr-parallax-background cid-r4JXUweXvX" id="program_banner" >
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="mbr-white">

                <h1 class="pt-5 mbr-section-title align-center text-color mbr-fonts-style display-Kbold" style="line-height: .7;">PROGRAMS</h1>

                <div class="row pt-5">
                    <div class="col-md-3">
                        <b><h3 class="text-color mbr-fonts-style display-1c" style="color: #f9c921">CREATIVE &nbsp; COMPUTING</h3></b>
                        <p class="text-color display-7">The Creative Computing program empowers young minds to use their creative potential to develop new technologies. This program puts emphasis on both creativity and computational fluency, as students solve creative challenges and develop new worlds.</p>
                    </div>

                    <div class="col-md-3">
                        <b><h3 class="text-color mbr-fonts-style display-1c" style="color: #40904b"><br/>THINKERING</h3></b>
                        <p class="text-color display-7">The Thinkering program develops the students’ ability to create using hardware technology. This program uses fun educational tools that students can tinker with to fuel their inquisitive minds.</p>
                    </div>

                    <div class="col-md-3">
                        <b><h3 class="text-color mbr-fonts-style display-1c" style="color: #3a91c7">APPLICATIONS DEVELOPMENT</h3></b>
                        <p class="text-color display-7">The App Development program inspires young creators to solve problems using technology. This program equips students with the necessary knowledge and skills to turn their ideas into reality, as they create their very own app.</p>
                    </div>

                    <div class="col-md-3">
                        <b><h3 class="text-color mbr-fonts-style display-1c" style="color: #e45a5a"><br/>ELECTIVES</h3></b>
                        <p class="text-color display-7">Students can choose among electives that are designed to equip them with the skills needed to build creative projects. These can be taken as individual courses or as complementary courses for other programming classes.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="buttonCalendar">
            <button class="btn btn-lg btn-secondary float-right display-4"><b>VIEW CALENDAR</b></button>
        </div> -->
    </div>
    
</section>
<section class="header4 align-top p-0 mbr-fullscreen-programs mbr-fullscreen_home mentoring_banner" id="mentoring_banner">
    <div class="align-center col-md-12">
        <h1 class="pt-5 mbr-section-title align-center text-color mbr-fonts-style display-Kbold" style="line-height: .7;">PROGRAMS</h1>
    </div>
</section>

<section class="tabs3" id="programsTab">
    <div class="container-fluid">
        <div class="row tabcont">
           <div class="nav nav-tabs tab" role="tablist">
                <a class="nav-item tab_links active show text-color display-5 btnnoviceTab" role="tab" data-toggle="tab" data-target="#tab1" onclick="ClassTab(this.id);" id="btnnoviceTab" aria-selected="true" href="program.php#noviceTab" data-btn="noviceTab">
                        Novice Coder 
                </a>
                <a class="nav-item tab_links text-color display-5 btnjuniorTab" role="tab" data-toggle="tab" data-target="#tab2" id="btnjuniorTab" aria-selected="true" href="program.php#juniorTab"  data-btn="juniorTab" onclick="ClassTab(this.id);">
                        Junior Coder
                </a>
                <a class="nav-item tab_links text-color display-5 btnmasterTab" role="tab" data-toggle="tab" data-target="#tab3" id="btnmasterTab" aria-selected="true" href="program.php#masterTab"  data-btn="masterTab" onclick="ClassTab(this.id);">
                        Master Coder
                </a>
                <a class="nav-item tab_links text-color display-5 btnmentoringTab"  role="tab" data-toggle="tab" data-target="#tab4" id="btnmentoringTab" aria-selected="true" href="program.php#mentoringTab"  data-btn="mentoringTab" onclick="ClassTab(this.id);">
                        Mentoring
                </a>
            </div>
        <div class="py-1 w-100" style="background-color: #ff9c37 !important; "></div> 
        </div>
    </div>

    <div class="container">
        <div class="row px-1 pt-5">
            <div class="tab-content">
                <div id="tab1" class="tab-pane in active mbr-table" role="tabpanel">  
                <!--Novice Coder-->
                    <section class="toggle1" id="toggle1-z">
                        <div class="row tab-content-row">
                            <div class="col-12 col-md-12" >
                                <h4><p class="text-color pt-3 col-md-12 display-1e" style="line-height: 1.5;">The Novice Coder classes are beginner courses that allow kids as young as <strong>6 to 8</strong> years old to start their coding adventures. This is an opportunity for them to learn the basics of coding while boosting their creativity and logic.</p></h4>

                                <div class="containerPrograms pt-5">
                                <!---Creative Computing--->
                                    <div class="course_track_cc">
                                        <div class="display-1C mbr-white py-2 course_track_cc_title">CREATIVE COMPUTING</div>
                                        <div class="pt-5">@include('site.novice.cc')</div>
                                    </div>
                                <!---Thinkering--->
                                    <div class="pt-5"></div>
                                    <div class="course_track_t_novice">
                                        <div class="display-1C mbr-white py-2 course_track_t_title">THINKERING</div>
                                        <div class="pt-5">@include('site.novice.thinkering')</div> 
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </section>  
                </div>

                <div id="tab2" class="tab-pane  mbr-table" role="tabpanel">
                    <!--Junior Coder-->
                    <section class="toggle1" id="toggle1-z">
                        <div class="row tab-content-row">
                            <div class="col-12 col-md-12">
                                <h4><p class="text-color pt-3 col-md-12 display-1e" style="line-height: 1.5;">The Junior Coder classes inspire students aged <strong>9 to 11</strong> to create and innovate, as they build a solid foundation for their programming skills. Here, they get an advantage in today’s digital world by acquiring more advanced concepts and skills.</p></h4>

                                <div class="containerPrograms pt-5">
                                <!---Creative Computing--->
                                    <div class="course_track_cc">
                                        <div class="display-1C mbr-white py-2 course_track_cc_title">CREATIVE COMPUTING</div>
                                        <div class="pt-5">@include('site.junior.cc')</div>
                                    </div>
                                <!---Thinkering--->
                                    <div class="pt-5"></div>
                                    <div class="course_track_t">
                                        <div class="display-1C mbr-white py-2 course_track_t_title">THINKERING</div>
                                        <div class="pt-5">@include('site.junior.thinkering')</div> 
                                    </div>
                                <!---App/Game Dev--->
                                    <div class="pt-5"></div>
                                    <div class="course_track_agd">
                                        <div class="display-1C mbr-white py-2 course_track_agd_title">APPLICATIONS DEVELOPMENT</div>
                                        <div class="pt-5">@include('site.junior.agd')</div> 
                                    </div>
                                <!---Multimedia--->
                                    <div class="pt-5"></div>
                                    <div class="course_track_mm">
                                        <div class="display-1C mbr-white py-2 course_track_mm_title">ELECTIVES</div>
                                        <div class="pt-5">@include('site.junior.mm')</div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section> 
                </div>

                <div id="tab3" class="tab-pane  mbr-table" role="tabpanel">
                    <!--Master Coder-->
                    <section class="toggle1" id="toggle1-z">
                        <div class="row tab-content-row">
                            <div class="col-12 col-md-12">
                                <h4><p class="text-color pt-3 col-md-12 display-1e" style="line-height: 1.5;">The Master Coder classes allow students aged <strong>12 to 17</strong> to further strengthen their programming knowledge and skills. In this program, they are trained to use technology to create meaningful projects and relevant solutions to real-world problems.</p></h4>

                                <div class="containerPrograms pt-5">
                                <!---Creative Computing--->
                                    <div class="course_track_cc">
                                        <div class="display-1C mbr-white py-2 course_track_cc_title">CREATIVE COMPUTING</div>
                                        <div class="pt-5">@include('site.master.cc')</div>
                                    </div>
                                <!---Thinkering--->
                                    <div class="pt-5"></div>
                                    <div class="course_track_t">
                                        <div class="display-1C mbr-white py-2 course_track_t_title">THINKERING</div>
                                        <div class="pt-5">@include('site.master.thinkering')</div> 
                                    </div>
                                <!---App/Game Dev--->
                                    <div class="pt-5"></div>
                                    <div class="course_track_agd">
                                        <div class="display-1C mbr-white py-2 course_track_agd_title">APPLICATIONS DEVELOPMENT</div>
                                        <div class="pt-5">@include('site.master.agd')</div> 
                                    </div>
                                <!---Multimedia--->
                                    <div class="pt-5"></div>
                                    <div class="course_track_mm">
                                        <div class="display-1C mbr-white py-2 course_track_mm_title">ELECTIVES</div>
                                        <div class="pt-5">@include('site.master.mm')</div> 
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </section> 
                </div>

                <div id="tab4" class="tab-pane  mbr-table" role="tabpanel">
                    <div class="row tab-content-row">
                        <div class="col-xs-12 col-md-12">
                                <h4><p class="text-color pt-3 col-md-12 display-1e" style="line-height: 1.5;">Do you want a specialized programming course for your child? Contact us at <a href="mailto:learncoding@jack.com.ph">learncoding@jack.com.ph</a> for more information on our mentoring program.</p></h4>
                        </div>

                        <div class="align-center col-md-12" style="padding-top: 2%; padding-bottom: 2%;">
                            <h3 class="text-color display-1b"><strong>
                            MENTORING PROGRAM</strong></h3>
                        </div>
                         

                        <div class="media-container-row">
                            <div class="card p-3 col-12 col-md-6 col-lg-4">
                                <div class="card-wrapper">
                                    <div class="card-img">
                                        <img src="{{ asset('assets/images/programs/Mentoring_Customized Curriculum.jpg') }}">
                                    </div>
                                    <div class="card-img align-center">
                                        <img src="{{ asset('assets/images/homepage/whyjack01.png') }}" alt="Programming using BB-8" style="width: 70%">
                                    </div>
                                    <div>
                                        <h4 class="card-title pb-3 mbr-fonts-style display-5" style="color:#4c874d;text-align: center;">
                                            <b>Customized Curriculum</b>
                                        </h4>
                                        <p class="mbr-text text-color display-4" style="text-align: center;">
                                            Follow a <strong>customized curriculum and schedule</strong> that are specific to your child’s needs.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="card p-3 col-12 col-md-6 col-lg-4">
                                <div class="card-wrapper">
                                    <div class="card-img">
                                        <img src="{{ asset('assets/images/programs/Mentoring_Dedicated Mentoring.jpg') }}">
                                    </div>
                                    <div class="card-img align-center">
                                        <img src="{{ asset('assets/images/homepage/whyjack03.png') }}" alt="Programming using BB-8" style="width: 70%">
                                    </div>
                                    <div>
                                        <h4 class="card-title pb-3 text-color display-5" style="color:#2fa6e0;text-align: center;">
                                            <b>Dedicated Mentor</b>
                                        </h4>
                                        <p class="mbr-text mbr-fonts-style display-4" style="text-align: center;">
                                            Have a <strong>dedicated mentor</strong> that will ensure your child’s learning goals are met.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="card p-3 col-12 col-md-6 col-lg-4">
                                <div class="card-wrapper">
                                    <div class="card-img">
                                        <img src="{{ asset('assets/images/programs/Mentoring_Private Lesson.jpg') }}" alt="Programming using Lego">
                                    </div>
                                    <div class="card-img align-center">
                                        <img src="{{ asset('assets/images/homepage/whyjack02.png') }}" alt="Programming using BB-8" style="width: 70%">
                                    </div>
                                    <div>
                                        <h4 class="card-title pb-3 text-color display-5" style="color:#da4443;text-align: center;">
                                            <b>Private Class</b>
                                        </h4>
                                        <p class="mbr-text mbr-fonts-style display-4" style="text-align: center;">
                                            Enjoy a <strong>one-on-one</strong> session or a private class for a small group (2-3 students).
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection

@section('script_link')

  <script src="{{ asset('js/site/program.js') }}"></script>

<script>
    
    $(document).ready(function(){

        $('.programLink').hide();
        $('.progLink').removeClass('dropdown-toggle');
        $('#program_banner').hide();
        $('#mentoring_banner').hide();
        var url = window.location.href;
        var spl = url.split("#");
        $('.btn'+spl[1]).click();
        // alert(url);
        tabclick(url);


    });

    function tabclick(e){
        var url = e;
        var spl = url.split("#");
        // alert(e);
        $('#program_banner').hide();
        $('#mentoring_banner').hide();
        if(spl[1] == "mentoringTab"){
            $('#program_banner').hide();
            $('#mentoring_banner').show();
            // $('.btn'+spl[1]).click();
        }else{
            $('#mentoring_banner').hide();
            $('#program_banner').show();
        }
            // $('.btn'+spl[1]).click();

    }

     function ClassTab(id){
        var data = $('#'+id).data('btn');

        var href = $('#'+id).attr('href');
        tabclick(href);
        var url = window.location.href;
        var spl = url.split("#");
        location.replace(spl[0]+"#"+data);
        // location.reload();

    }


function change() // no ';' here
{
    var elem = document.getElementById("myWish");
    if (elem.value=="Remove from Cart") elem.value = "Add to Cart";
    else elem.value = "Remove from Cart";
}


</script>
@endsection
