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
            <ul class="nav nav-tabs course-tab" style="background-color: #f2f2f2; padding: 0px 0px;"">
              <li class="active"><a data-toggle="tab" href="#summer"><img id="summer_icon" src="{{ asset('images/summer_active.png') }}"  /><img id="summer_icon_inactive" src="{{ asset('images/summer_inactive.png') }}" /><br>SUMMER</a></li>
              <li><a data-toggle="tab" href="#junior"  style="color:blue;"><img src="{{ asset('images/junior_active.png') }}" /><img id="junior_icon_inactive" src="{{ asset('images/junior_inactive.png') }}"  /><br>JUNIOR</a></li>
              <li><a data-toggle="tab" href="#master"  style="color:red;"><img src="{{ asset('images/master_active.png') }}"  /><img id="master_icon_inactive" src="{{ asset('images/master_inactive.png') }}"  /><br>MASTER</a></li>
            </ul>


            <div class="tab-content">
              <div id="summer" class="tab-pane fade in active">
               
                @include('mobile.summer') 
                   
              </div>
              <div id="junior" class="tab-pane fade">
                <div class="col-md-12">
                    <br>
                    <h2>JUNIOR</h2>
                </div>
              </div>
              <div id="master" class="tab-pane fade">
                <div class="col-md-12">
                    <br>
                    <h2>MASTER</h2>
                </div>
              </div>
            </div>
        
            
        </div>
    </div>
</div>


@endsection
@section('script_link')

<script type="text/javascript">
    

</script>
@endsection