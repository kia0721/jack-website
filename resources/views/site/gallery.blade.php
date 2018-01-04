@extends('layouts.site')

@section('css_link_2')
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

</style>
@endsection

@section('content')


   
    <div id="main-wrapper">

        <div class="banner">
          <div class="wrapper">
            <div class="banner-content clrf">
              <h1>OKAY</h1>

                <img src="../JackWebsite/uploads/image_01.jpg" />
          </div>
        </div>
    </div>

@endsection
@section('script_link')
<script type="text/javascript">

    $(window)
            .resize( $.debounce( 250, true, function(e){
                 // resizeLayerBg();
                
                 console.log('resize');
            }))
            .resize( $.debounce( 250, false, function(e){
                 resizeLayerBg();
               
        }));
</script>

@endsection