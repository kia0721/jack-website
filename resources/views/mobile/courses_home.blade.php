@extends('layouts.mobile')

@section('css_link_2')
<link href="{{ asset('/css/mobi-style.css') }}" rel="stylesheet">
<style type="text/css">
   
    .course-tab>li{
        width: 33.10%;
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

    .course-event{
        border-style: outset;
        background-color: #efefef;
        border-radius: 15px;
    }

    .nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover{
        border-bottom-color: #d26a00;
        border-bottom-width: 3px;
    }

    .nav-tabs>li>a{
        color: #b8b8b8;
    }

    .division-title{
        text-align: center;
        color: #00bef3;
        text-shadow: 2px 2px 2px black;
        font-stretch: semi-condensed;
        font-weight: bolder;
        font-size: 23px;
        letter-spacing: 2px;
    }

    .to-be-annc{
        font-weight: bolder;
        text-shadow: 2px 2px 2px black;
        color: red;
        font-size: 32px;
        border-color: red;
        border-width: 2px;
        border-style: dashed;
        padding: 10px;
        letter-spacing: 3px;
        text-align: center;
    }

    .detail{
        padding: 5px 10px; 
        border-radius: 5px;
    }
    .date.detail{
        background-color: rgba(0, 190, 243, 0.4117647058823529);       
    }

    .time.detail{
        background-color: rgba(255, 156, 55, 0.5019607843137255);   
    }

    .fee.detail{
        background-color: rgba(85, 229, 160, 0.72);
    }
</style>
@endsection

@section('content')
<div class="main-wrapper">
    
    <div class="col-md-8 col-md-offset-2" ">
        <div class="row">
            <ul class="nav nav-tabs course-tab" id="course_ntab" style="background-color: #f2f2f2; padding: 0px 0px;"">
              <li class="active"><a data-toggle="tab" href="#summer">
                  <img class="course_icons" id="summer_icon" src="{{ asset('images/summer_active.png') }}"  />
                  <img class="course_icons_inactive" id="summer_icon_inactive" src="{{ asset('images/summer_inactive.png') }}" /><br>
                  <span class="course_icons" id="summer_span" style="color:orange;">SUMMER</span>
                  <span class="course_icons_inactive" id="summer_span_inactive" style="color:#b8b8b8;">SUMMER</span></a>
                </li>
              <li><a data-toggle="tab" href="#junior"  style="color:blue;"><img class="course_icons" src="{{ asset('images/junior_active.png') }}" id="junior_icon"/><img class="course_icons_inactive" id="junior_icon_inactive" src="{{ asset('images/junior_inactive.png') }}"  /><br>
                <span class="course_icons" id="junior_span" style="color:blue;">JUNIOR</span>
                <span class="course_icons_inactive" id="junior_span_inactive" style="color:#b8b8b8;">JUNIOR</span></a></li>
              <li><a data-toggle="tab" href="#master"  style="color:red;"><img class="course_icons" src="{{ asset('images/master_active.png') }}" id="master_icon" /><img class="course_icons_inactive" id="master_icon_inactive" src="{{ asset('images/master_inactive.png') }}"  /><br>
              <span class="course_icons" id="master_span" style="color:blue;">MASTER</span>
                <span class="course_icons_inactive" id="master_span_inactive" style="color:#b8b8b8;">MASTER</span></a></li>
            </ul>


            <div class="tab-content">
              <div id="summer" class="tab-pane fade in active">
               
                @include('mobile.summer') 
                   
              </div>
              <div id="junior" class="tab-pane fade">
                @include('mobile.junior') 
              </div>
              <div id="master" class="tab-pane fade">
                @include('mobile.master') 
              </div>
            </div>
        
            
        </div>
    </div>
</div>


@endsection
@section('script_link')

<script type="text/javascript">
    $('.course_icons').hide();
    $('.course_icons_inactive').show();
    $('#summer_icon').show();
    $('#summer_icon_inactive').hide();
    $('#summer_span').show();
    $('#summer_span_inactive').hide();
    $('#course_ntab').on("click", "li", function (event) {         
        var activeTab = $(this).find('a').attr('href').split('#')[1];
        $('.course_icons').hide();
        $('.course_icons_inactive').show();
        $('#'+activeTab+'_icon').show();
        $('#'+activeTab+'_icon_inactive').hide();
        $('#'+activeTab+'_span').show();
        $('#'+activeTab+'_span_inactive').hide();
       // FurtherProcessing(activeTab);        
    });
</script>
@endsection