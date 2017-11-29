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
        margin-top: -107px;
        position: fixed;
        left: -38px;
        top: 83%;
        z-index: 20;
    }
</style>