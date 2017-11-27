@extends('layouts.site')

@section('css_link_2')

    <style type="text/css">
        body{
            height: 100%;
            background-color: white;
        }
        .banner{
            background-color: #52DEFF;
            position: relative;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 50%;
            background:transparent url({{ asset('images/coder_banner.jpg') }});

        }
        #main-wrapper {
    padding-bottom: 0;
}
    .banner, .price:after {
    background-color: #f1b754;
}
    .banner {
    color: white;
    padding: 92px 0 0px;
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
    font-size: 65px;
}
.banner .btn {
    padding: 6px 25px;
    margin-top: 30px;
    margin-right: 5px;
    color: black;
}

.banner .btn-orange {
    background-color: #f8c91b;
}

.banner .btn-orange:hover {
    background-color: #e8be20;
}

    </style>
@endsection

@section('content')
    <div id="main-wrapper">

        <div class="banner">
          <div class="wrapper">
            <div class="banner-content clrf">
              <div class="course-descr-d">
                <div>
                  <h1 class="course-title">CODER</h1>
                <H3>Be a junior or master coder and learn the art of Java, C and Python.</H3>

                  <a href="{{ url('/products/TruConnect') }}" class="btn btn-orange">GO BACK TO COURSES</a> 
                </div>
              </div>
              <div class="course-descr2-d">
                <div ><img  src="{{ asset('/images/twitty.png')}}" style="margin:auto;"></div>
              </div>
            </div>
          </div>
        </div>


        <section>
          <div class="wrapper">
                <div class="entry-content">
              <h3 style="text-align: center;">CUSTOM WEB ELEMENTS</h3>
        <p style="text-align: center;">Our starter website package effortlessly activates a powerful branding solution for your business. These elements are carefully selected to stimulate rapid online exposure through striking designs, excellent usability, and tools with pinpoint accuracy to turn client prospects into loyal customers.</p>
            </div>
                <div class="packages-default">
                  <ul>
                      <li class="post-111 shop-products type-shop-products status-publish has-post-thumbnail hentry">
          <img width="105" height="99" src="http://maverickheroes.com/wp-content/uploads/homepage.jpg" class="attachment-products-thumb size-products-thumb wp-post-image" alt="homepage">  <h4>Home Page</h4>
          <p>We create custom designed homepages with the ... <a data-id="111" class="detail">(More)</a></p>
        </li>
                <li class="post-112 shop-products type-shop-products status-publish has-post-thumbnail hentry">
          <img width="105" height="105" src="http://maverickheroes.com/wp-content/uploads/banner-design.jpg" class="attachment-products-thumb size-products-thumb wp-post-image" alt="banner-design">  <h4>Banner Design</h4>
          <p>Greet 'em with a bang! The banner works side-... <a data-id="112" class="detail">(More)</a></p>
        </li>
                <li class="post-113 shop-products type-shop-products status-publish has-post-thumbnail hentry">
          <img width="105" height="99" src="http://maverickheroes.com/wp-content/uploads/inner-pages.jpg" class="attachment-products-thumb size-products-thumb wp-post-image" alt="inner-pages">  <h4>5-8 Inner Pages</h4>
          <p>Our inner pages are created with focus on eng... <a data-id="113" class="detail">(More)</a></p>
        </li>
                <li class="post-114 shop-products type-shop-products status-publish has-post-thumbnail hentry">
          <img width="121" height="91" src="http://maverickheroes.com/wp-content/uploads/text-management.jpg" class="attachment-products-thumb size-products-thumb wp-post-image" alt="text-management">  <h4>Text Management</h4>
          <p>Easily update your website with engaging and ... <a data-id="114" class="detail">(More)</a></p>
        </li>
                <li class="post-115 shop-products type-shop-products status-publish has-post-thumbnail hentry">
          <img width="113" height="70" src="http://maverickheroes.com/wp-content/uploads/image-management.jpg" class="attachment-products-thumb size-products-thumb wp-post-image" alt="image-management">  <h4>Image Management</h4>
          <p>How often do you find a pointless image to a ... <a data-id="115" class="detail">(More)</a></p>
        </li>
                <li class="post-336 shop-products type-shop-products status-publish has-post-thumbnail hentry">
          <img width="105" height="103" src="http://maverickheroes.com/wp-content/uploads/inquiry-contact-feature.jpg" class="attachment-products-thumb size-products-thumb wp-post-image" alt="inquiry-contact-feature">  <h4>Inquiry/ Contact Feature</h4>
          <p>The Contact us page is where customer interac... <a data-id="336" class="detail">(More)</a></p>
        </li>
                <li class="post-117 shop-products type-shop-products status-publish has-post-thumbnail hentry">
          <img width="143" height="120" src="http://maverickheroes.com/wp-content/uploads/faq-page-143x120.png" class="attachment-products-thumb size-products-thumb wp-post-image" alt="faq-page" srcset="http://maverickheroes.com/wp-content/uploads/faq-page-143x120.png 143w, http://maverickheroes.com/wp-content/uploads/faq-page.png 194w" sizes="(max-width: 143px) 100vw, 143px">  <h4>FAQ Page</h4>
          <p>Have your website answer your customers' ques... <a data-id="117" class="detail">(More)</a></p>
        </li>
                <li class="post-118 shop-products type-shop-products status-publish has-post-thumbnail hentry">
          <img width="134" height="120" src="http://maverickheroes.com/wp-content/uploads/3-social-media-designs-134x120.png" class="attachment-products-thumb size-products-thumb wp-post-image" alt="3-social-media-designs" srcset="http://maverickheroes.com/wp-content/uploads/3-social-media-designs-134x120.png 134w, http://maverickheroes.com/wp-content/uploads/3-social-media-designs.png 171w" sizes="(max-width: 134px) 100vw, 134px">  <h4>3 Social Media Designs</h4>
          <p>Extend your business to the social world. Soc... <a data-id="118" class="detail">(More)</a></p>
        </li>
              </ul>
                      </div>
          </div>
        </section>
    </div>


@endsection
@section('script_link')
  <script type="text/javascript">
  
</script>
@endsection