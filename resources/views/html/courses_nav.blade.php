@section('css_link_2')
<style type="text/css">
    .navigation:before {
        background: url(../../images/courses-nav.png) no-repeat 0 0px;
        bottom: 100%;
        content: '';
        display: block;
        height: 85px;
        margin-bottom: -5px;
        position: absolute;
        left: 56%;
        width: 90px;
        top: -82px;
    }

    .navigation .Summer {
        background-position: 0 -85px;
        height: 57px !important;
        /*width: 84px;*/
    }
    .icon.Summer .label{
        color: #eca220 !important;
    }

    .navigation .Novice {
        background-position: 0 -85px;
        height: 57px !important;
        /*width: 84px;*/
    }
    .icon.Novice .label{
        color: #eca220 !important;
    }

    .navigation .Junior {
        background-position: 0 -143px;
        height: 53px !important;
        
    }

    .icon.Junior .label{
        top: 17px;
        color: #0b52a4 !important;
    }

    .navigation .Master {
        background-position: 0 -198px;
        height: 76px !important;
    }

    .icon.Master .label{
        top: 35px;
        color: #db4242 !important;
    }

    .navigation li {
        position: relative;
        margin-bottom: 3px;
    }

    .navigation .icon {
        display: block;
        background-image: url("{{ asset('/images/courses-nav.png') }}");
        cursor: pointer;
        height: 88px;
        width: 88px;
    }

    .navigation .label {
        display: none;
        background-color: #fff;
        margin-right: 15px;
        left: 115%;
        top: 10px;
        padding: 7px 5px 10px;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        -webkit-box-shadow: 0px 1px 1px 0px rgba(0,0,0,0.15);
        -moz-box-shadow: 0px 1px 1px 0px rgba(0,0,0,0.15);
        box-shadow: 0px 1px 1px 0px rgba(0,0,0,0.15);
        color:black;
        width:80px;
        height: 24px;
        
    }
 
    .navigation .label, .navigation .label:after {
        position: absolute;
    }

    .navigation .label:after {
        content: '';
        height: 0;
        right: 100%;
        margin-top: -5px;
        top: 2px;
        top: 50%;
        width: 0;
        border-top: 5px solid #ce0c0c00;
        border-right: 10px solid #fff;
        border-bottom: 5px solid transparent;
    }
    

    .navigation{
        margin-top: -207px;
        position: fixed;
        left: -38px;
        top: 83%;
        z-index: 20;
    }



    .wrapper {
        margin: 0 auto;
        max-width: 1064px;
    }
    .banner .banner-content {
        position: relative;
    }
    .wrapper > div {
        padding: 0 10px;
    }
    @media (min-width: 896px){
        .wrapper > div {
            padding: 0 20px;
        }
    }


    @media (min-width: 768px){
        .course-descr-d {
            width: 60%;
            float: left;
        }
        .course-descr2-d {
            width: 30%;
          float: left;
        }
    }
    .banner h2, .price {
        display: inline-block;
        vertical-align: middle;
    }

    .clr, .clrf:before, .clrf:after {
        width: 100%!important;
        float: none!important;
        clear: both;
        content: '';
        display: block;
    }

    .course-title
    {
        color: white;
        font-size: 65px;
    }
    
    .btn-orange {
        padding: 6px 25px;
        margin-top: 30px;
        margin-right: 5px;
        color: black;
    }

    .btn-orange {
        background-color: #f8c91b;
    }

    .btn-orange:hover {
        background-color: #e8be20;
        color: #020101;
    }

    p.course-detail{
        font-size: 12px;
    }

    .course-sec{
        background-color: #efefef; 
        padding: 20px 0px !important; 
        border-radius: 5px;

    }

</style>
@endsection
<div class="navigation" >
    <ul >
            
        <li >
            <a href="{{ url('/courses/summer') }}"><p class="icon Summer"><span class="label">Summer</span></p></a>
        </li>
        <li >
            <a href="{{ url('/courses/novice') }}"><p class="icon Novice"><span class="label">Novice</span></p></a>
        </li>
        <li >
            <a href="{{ url('/courses/junior') }}"><p class="icon Junior"><span class="label">Junior</span></p></a>
        </li>
        <li >
            <a href="{{ url('/courses/master') }}"><p class="icon Master"><span class="label">Master</span></p></a>
        </li>
    </ul>
</div>

@section('script_link')
<script type="text/javascript">
   $('p.icon').bind('mouseover', function() {
            
        var classN = $(this).attr('class');  
        var divId = classN.split(' ')[1];
        $("."+divId+" .label").show();

    }).on('mouseleave', function() { 
        $(".icon .label").hide();
    });
</script>
@endsection