@extends('layouts.mobile')

@section('css_link')
    
    <link href="{{ asset('/css/mobile.program.css') }}" rel="stylesheet">
@endsection

@section('content')

<div class="main-wrapper">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="col-md-12 col-sm-12 text-center">
                <h2>PROGRAMS</h2>

                <!-- <a class="btn btn-md calendarBtn" href="https://calendly.com/learncoding">View Calendar</a> -->
                <img src="{{ asset('images/mobile/03_COURSES_BANNER.png') }}"  class="img-responsive"  />
            </div>
            <div class="col-md-12 col-sm-12">

                <div class="col-md-12 col-sm-12 course-event yellow">
                   
                    <h4 class="title">Creative Computing</h4>
                    <p>The Creative Computing program empowers young minds to use their creative potential to develop new technologies. This program puts emphasis on both creativity and computational fluency, as students solve creative challenges and develop new worlds.</p>
              
                </div>
                <div class="col-md-12 col-sm-12 course-event green">
                   
                    <h4 class="title">Thinkering</h4>
                    <p>The Thinkering program develops the students’ ability to create using hardware technology. This program uses fun educational tools that students can tinker with to fuel their inquisitive minds.</p>
             
                </div>
                <div class="col-md-12 col-sm-12 course-event blue">
                   
                    <h4 class="title">Applications Development</h4>
                    <p>The App Development program inspires young creators to solve problems using technology. This program equips students with the necessary knowledge and skills to turn their ideas into reality, as they create their very own app.</p>
                </div>
                <div class="col-md-12 col-sm-12 course-event red">

                    <h4 class="title">Electives</h4>
                    <p>Students can choose among electives that are designed to equip them with the skills needed to build creative projects. These can be taken as individual courses or as complementary courses for other programming classes.</p>

                </div>
            </div>
            <div class="col-md-12 col-sm-12 text-xs-center">
                <br>
                <ul id="programTab" class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#novice">NOVICE</a></li>
                    <li><a data-toggle="tab" href="#junior">JUNIOR</a></li>
                    <li><a data-toggle="tab" href="#master">MASTER</a></li>
                    <li><a data-toggle="tab" href="#mentoring">MENTORING</a></li>
                </ul>

                <div class="tab-content settingTabWrapper">
                    @include('mobile.novice')
                    @include('mobile.junior')
                    @include('mobile.master')
                    @include('mobile.mentoring')                
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
@section('script_link')

<script src="{{ asset('js/site/program.js') }}"></script>
<script type="text/javascript">
    
$('.courseCbox').on('change', function() {
    var id = $(this).attr('id');
    $('.'+id).removeClass('active');
    $('.'+id+'.'+this.value ).addClass('active');

    $('.'+id).css('display', 'none');
    $('.'+id+'.'+this.value ).css('display', 'block');

});

</script>
@endsection