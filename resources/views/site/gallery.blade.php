@extends('layouts.site')

@section('css_link_2')
<link href="{{ asset('lightbox/css/lightbox.css') }}" rel="stylesheet">
<style type="text/css">
    body{
        background-color: #d3cac1;
    }

     #main-wrapper {
    padding-bottom: 0;
}
    .banner, .price:after {
    background-color: #3fa5b4;

}
    .banner {
    color: white;
    padding: 83px 0 0px;
    -webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.1);
    -moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.1);
    box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.1);
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
.jack-images{
    width: 15em;
    border-radius: 4px;
    vertical-align: bottom;
}

.jack-image-link{
    display: inline-block;
    padding: 2px;
    margin: 0 0.5rem 1rem 0.5rem;
    background-color: #fff;
    line-height: 0;
    border-radius: 4px;
    transition: background-color 0.5s ease-out;
}
</style>

@endsection

@section('content')


   
    <div id="main-wrapper">

        <section>
            <div class="wrapper">
                <div class="col-md-12">
                <br>&nbsp; <br><br>&nbsp; <br>
                <br>&nbsp; <br>
                </div>
                <div class="col-md-12" style="text-align: center;">
                @for ($i = 0; $i < count($images); $i++)
                    
                    <div class="image-row"><div class="image-set">
                    <?php 
                        $optionLength = $i+3;
                        if($i+3 >= count($images))
                            $optionLength =  count($images);
                    ?>
                    @for ($a = $i; $a < $optionLength; $a++)
                        <?php $image = $images[$a]; ?>
                        <!-- <div class="col-xs-12 col-md-4 "> -->

                            <a class="jack-image-link" href="../portal/{{ $image->image_location }}" data-lightbox="image-1" >
                            <img  class="jack-images" src="../portal/{{ $image->image_location }}" ></a> 
                        <!-- </div><br> -->
                    @endfor
                    <?php 
                                                        
                        if($i+2 >= count($images))
                            $i = count($images);
                        else
                            $i = $i+2;
                    ?>
                </div></div>
                @endfor
                </div>
            </div>
        </section>

    </div> 

@endsection
@section('script_link')
<script src="{{ asset('lightbox/js/lightbox.js') }}"></script>

@endsection