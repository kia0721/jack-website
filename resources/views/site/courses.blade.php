@extends('layouts.site')

@section('css_link')

    <style type="text/css">
      .left, .right {
        float:left;
        height:100vh;
    }
    
    .left {
        background: #337ab7;
        display: inline-block;
        white-space: nowrap;
        width: 50px;
        transition: width 1s ;
    }

    .right {
        background: #fff;
        width: 350px;
        transition: width 1s;
        border-style:solid;
        border-color:#ccc;
        border-width:1px;
    }    

    .left:hover {
        width: 250px;
    }    
        
    
            
    .left .glyphicon {
        margin:15px;
        width:20px;
        color:#fff;
    }
        
    .right .glyphicon {
        color:#a9a9a9;
    }
    
    .item {
        height:50px;
        overflow:hidden;
        color:#fff;
    }

    nav ul, nav ol, li{
        list-style: none;
        list-style-image: none;
    }

    .navigation:before {
        background: url(../images/nav.png) no-repeat 0 -2px;
        bottom: 100%;
        content: '';
        display: block;
        height: 90px;
        margin-bottom: -5px;
        position: absolute;
        left: 70%;
        width: 90px;
        top: -80px;
    }

    .navigation .Welcome {
        background-position: 0 -88px;
        height: 40px !important;
        /*width: 84px;*/
    }
    .icon.Welcome .label{
        color: #eca220 !important;
    }

    .navigation .About-us {
        background-position: 0 -135px;
        height: 40px !important;
        width: 84px !important;
        
    }

    .icon.About-us .label{
        color: #0b52a4 !important;
    }

    .navigation .Courses {
        background-position: 0 -175px;
        
    }

    .icon.Courses .label{
        top: 15px;
        color: #357625 !important;
    }


    .navigation .Gallery {
        background-position: 0 -229px;
        /*height: 46px;
        width: 84px;*/
    }
    .icon.Gallery .label{
       color: #b50a06 !important;
    }
    .navigation .Contact-us {
        background-position: 0 -280px;
       /* height: 50px;
        width: 84px;*/
    }
    .icon.Contact-us .label{
       color: #7d40a8 !important;
    }
    .navigation li {
        position: relative;
        margin-bottom: 3px;
    }
   
    .navigation .icon {
        display: block;
        background-image: url(../images/nav.png);
        cursor: pointer;
        height: 51px;
        width: 84px;
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
    
    .navigation .label, .navigation .label:after {
        position: absolute;
    }

    .navigation{
        margin-top: -105px;position: fixed;    left: 0px;    top: 50%;    z-index: 20;
    }


    </style>
@endsection

@section('content')

    <div class="navigation" >
        <ul >
                
            <li >
                <p class="icon Welcome"><span class="label">Welcome</span></p>
            </li>
            <li >
                <p class="icon About-us"><span class="label">About Us</span></p>
            </li>
            <li >
                <p class="icon Courses"><span class="label">Courses</span></p>
            </li>
            <li >
                <p class="icon Gallery"><span class="label">Gallery</span></p>
            </li>
            <li >
                <p class="icon Contact-us"><span class="label">Contact us</span></p>
            </li>
        </ul>
    </div>
    <div class="main-wrapper">

        <div class="characters charpos2">
            <div class="char-pos">
                <h1>COURSES</h1>
                <img src="../images/CHARACTERS.png" />
            </div>
             <div class="mouse-scroll"></div>
        </div>
        <!-- Page content -->

    </div>



@endsection
@section('script_link')
  
@endsection