@extends('layouts.site')

@section('css_link_2')
    @include('css.courses_nav') 
    <style type="text/css">
        
    .banner{
        background-color: #e45d51;
        background:transparent url({{ asset('images/master_banner.jpg') }}) no-repeat center bottom;
    }
    .banner, .price:after {
        background-color: #e45d51;
    }

    </style>
@endsection

@section('content')
@include('html.courses_nav') 
    <div id="main-wrapper">

        <div class="banner">
          <div class="wrapper">
            <div class="banner-content clrf">
              <div class="course-descr-d" style="width:60%;">
                <div>
                    <h1 class="course-title" style="margin: 0;">MASTER CODER</h1>
                    <H2>UPGRADE YOUR PROGRAMMING SKILLS!</H2>
                    <h4>The Master Coder classes allow students ages 12 to 17 to specialize in a programming language. Choose  from three tracks (App Development, Game Development, and Electronics Engineering) and be a master coder in Java, Python, or C Programming.</h4>
                  
                    <a href="{{ url('/courses') }}" class="btn btn-orange">GO BACK TO COURSES</a> 
                    <br> <br>
                </div>
              </div>
            </div>
          </div>
        </div>


        <section>
          <div class="wrapper">
            <div class="entry-content">
                <h3 style="text-align: center;"> <br></h3>
                
            </div>
            <div class="col-md-12 course-sec section-course" >
                <div class="col-md-3">
                    <img  src="{{ asset('/images/java.png')}}" style="margin:auto;">
                </div>

                
                <div class="col-md-6">
                    <h4 class="ccourse-title2"><b>App Development: Java Programming</b></h4>
                    <p class="course-detail">This course provides a solid foundation on how to develop a web and mobile enterprise application using the Java programming language. At the end of this course, students should be able to become well-versed in the Java programming language, understand the theory and engineering behind object-oriented development, platform independence and the Java ecosystem, and apply their knowledge in developing their own enterprise system application. </p>

                </div>
                <div class="col-md-3">
                    <h3 class="to-be-annc">TBA</h3>
                    <p><b>Schedule and course fee for 2018 to be determined</b></p>
                    <!-- <a href="{{ url('/products/TruConnect') }}" class="btn btn-orange">ENROLL NOW</a>  -->
                </div>

            </div> 
            <div class="col-md-12"><br></div>
            <div class="col-md-12  section-course" >
                <div class="col-md-3">
                    <img  src="{{ asset('/images/c_prog.png')}}" style="margin:auto;">
                </div>

                
                <div class="col-md-6">
                    <h4 class="ccourse-title2"><b>Electronics Engineering: C Programming</b></h4>
                    <p class="course-detail">This course provides a solid foundation on how to develop an embedded system application using the C programming language. At the end of this course, students should be able to become well-versed in the C programming language, understand the theory and engineering behind embedded systems, and apply their knowledge in developing their own embedded system application. </p>

                </div>
                <div class="col-md-3">
                    <h3 class="to-be-annc">TBA</h3>
                    <p><b>Schedule and course fee for 2018 to be determined</b></p>
                    <!-- <a href="{{ url('/products/TruConnect') }}" class="btn btn-orange">ENROLL NOW</a>  -->
                </div>

            </div> 
            <div class="col-md-12"><br></div>
            <div class="col-md-12 course-sec section-course" >
                <div class="col-md-3">
                    <img  src="{{ asset('/images/python.png')}}" style="margin:auto;">
                </div>

                
                <div class="col-md-6">
                    <h4 class="ccourse-title2"><b>Game Development: Python Programming</b></h4>
                    <p class="course-detail">This course provides a solid foundation on how to develop a game using the Python programming language. At the end of this course, students should be able to become well-versed in the Python programming language, understand the theory, physics, math, play, design, and core concepts behind games, and apply their knowledge in developing their own game. </p>

                </div>
                <div class="col-md-3">
                    <h3 class="to-be-annc">TBA</h3>
                    <p><b>Schedule and course fee for 2018 to be determined</b></p>
                    <!-- <a href="{{ url('/products/TruConnect') }}" class="btn btn-orange">ENROLL NOW</a>  -->
                </div>

            </div> 
            <div class="col-md-12"><br></div>
            
          </div>
        </section>
    </div>


@endsection
@section('script_link')
  <script type="text/javascript">
  
</script>
@endsection