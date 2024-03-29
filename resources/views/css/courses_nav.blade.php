<style type="text/css">
    .navigation:before {
        background: url(../../images/courses-nav.png?v2) no-repeat 0 0px;
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
    }
    .icon.Summer .label{
        color: #eca220 !important;
    }

    .navigation .Novice {
        background-position: 0 -277px;
        height: 63px !important;
    }
    .icon.Novice .label{
        color: #264d1d !important;
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
        background-image: url("{{ asset('/images/courses-nav.png?v2') }}");
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
    .banner{
        position: relative;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 50%;
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
    .banner {
        color: white;
        padding: 83px 0 0px;
        -webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.1);
        -moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.1);
        box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.1);
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
    
    

    .course-sec{
        background-color: #efefef; 
        padding: 20px 20px !important; 
        border-radius: 5px;

    }


    .section-course .col-md-3{
        text-align: center!important;
    }

    .section-course .col-md-3 p{
        font-size: 16px;
        text-align: left;
    }
    .section-course .col-md-3 a{
        font-weight: bold;
    }

    
    .course-detail{
        font-size: 16px;
        color:#502d02;
    }

    .division-title{
        text-align: center;
        color: #00bef3;
        text-shadow: 2px 2px 2px black;
        font-stretch: semi-condensed;
        font-weight: bolder;
        font-size: 43px;
        letter-spacing: 2px;
    }

    .ccourse-title2{
        color: #b46500;
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