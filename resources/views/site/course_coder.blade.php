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
                <h3 style="text-align: center;"> <br></h3>
                
            </div>
            <div class="col-md-12 course-sec" >
                <div class="col-md-3">
                    <img width="100%" src="{{ asset('/images/junior_c.png')}}" style="margin:auto;">
                </div>

                
                <div class="col-md-6">
                    <h4><b>JUNIOR CODER CLASS</b></h4>
                    <p class="course-detail">This course provides an overview of Algorithms, Data, Programming, Computers and the Internet. At the end of this course, students should be able to show understanding of algorithms and what they can be used for, create a simple program using Python, use data types and simple data structures in coding that program, explain the main components of a computer system and how they fit together, and explain how the internet works.</p>

                </div>
                <div class="col-md-3">
                    <p>
                    <br>
                    <b>For ages 8 to 11 years old</b>
                    <br><br>
                    Time : 8:30am - 12:30nn <br>
                    July 22 and 29, August 5, 12, and 19
                    <br><br>
                    <b>P12,000 per module</b>

                    </p>
                    <a href="{{ url('/products/TruConnect') }}" class="btn btn-orange">ENROLL NOW</a> 
                </div>

            </div> 
            <div class="col-md-12">
            <br>
            </div>
            <div class="col-md-12">
                <div class="col-md-3">
                    <img width="100%" src="{{ asset('/images/mobile_c.png')}}" style="margin:auto;">
                </div>

                
                <div class="col-md-6">
                    <h6>JUNIOR CODER CLASS:</h6>
                    <h4><b>MOBILE APP DEVELOPMENT</b></h4>
                    <p class="course-detail">Learn the basics of creating mobile apps, as you design, program, and deploy them in your android or IOS device. </p>

                </div>
                <div class="col-md-3">
                    <p>
                    <br>
                    For ages 8 to 11 years old
                    <br><br>
                    Time : 8:30am - 12:30nn <BR>
                    January 20 and 27, February 3, 10, and 17, 2018
                    <br><br>
                    <b>P12,000 per module</b>

                    </p>
                    <a href="{{ url('/products/TruConnect') }}" class="btn btn-orange">ENROLL NOW</a> 
                </div>

            </div> 
            <div class="col-md-12">
            <br>
            </div>
            <div class="col-md-12 course-sec">
                <div class="col-md-3 ">
                    <img src="{{ asset('/images/java.png')}}" style="margin:auto;">
                </div>

                
                <div class="col-md-6">
                    <h6>APP DEVELOPMENT:</h6>
                    <h4><b>JAVA PROGRAMMING</b></h4>
                    <p class="course-detail">This course provides a solid foundation on how to develop a web and mobile enterprise application using the Java programming language. At the end of this course, students should be able to become well-versed in the Java programming language, understand the theory and engineering behind object-oriented development, platform independence and the Java ecosystem, and apply their knowledge in developing their own enterprise system application. </p>

                </div>
                <div class="col-md-3">
                    <p>
                    <br>
                    For ages 12 to 16 years old
                    <br><br>
                    Time :  8:30am - 12:30nn  <BR>
                    •  <b>Beginner:</b>July 22 and 29, August 5 and 12   <br><br>
                    •  <b>Intermediate:</b>August 19 and 26, September 2 and 9 <br><br>
                    •  <b>Advanced:</b>September 16, 23, and 30, October 7
                    <br><br>
                    <b>P15,000 per module</b>

                    </p>
                    <a href="{{ url('/products/TruConnect') }}" class="btn btn-orange">ENROLL NOW</a> 
                </div>

            </div> 
            <div class="col-md-12">
            <br>
            </div>
            <div class="col-md-12">
                <div class="col-md-3 ">
                    <img src="{{ asset('/images/c_prog.png')}}" style="margin:auto;">
                </div>

                
                <div class="col-md-6">
                    <h6>Electronics Engineering:</h6>
                    <h4><b>C Programming</b></h4>
                    <p class="course-detail">This course provides a solid foundation on how to develop an embedded system application using the C programming language. At the end of this course, students should be able to become well-versed in the C programming language, understand the theory and engineering behind embedded systems, and apply their knowledge in developing their own embedded system application. </p>

                </div>
                <div class="col-md-3">
                    <p>
                    <br>
                    For ages 12 to 16 years old
                    <br><br>
                    Time :  8:30am - 12:30nn  <BR>
                    •  <b>Beginner:</b>August 19 and 26, September 2, and 9 <br><br>
                    •  <b>Intermediate:</b>September 16, 23, 30, October 7<br><br>
                    •  <b>Advanced:</b>August 19 and 26, September 2, and 9 
                    <br><br>
                    <b>P15,000 per module</b>

                    </p>
                    <a href="{{ url('/products/TruConnect') }}" class="btn btn-orange">ENROLL NOW</a> 
                </div>

            </div> 

            <div class="col-md-12">
            <br>
            </div>
            <div class="col-md-12 course-sec">
                <div class="col-md-3 ">
                    <img src="{{ asset('/images/python.png')}}" style="margin:auto;">
                </div>

                
                <div class="col-md-6">
                    <h6>Game Development:</h6>
                    <h4><b>Python Programming</b></h4>
                    <p class="course-detail">This course provides a solid foundation on how to develop a game using the Python programming language. At the end of this course, students should be able to become well-versed in the Python programming language, understand the theory, physics, math, play, design, and core concepts behind games, and apply their knowledge in developing their own game. </p>

                </div>
                <div class="col-md-3">
                    <p>
                    <br>
                    For ages 12 to 16 years old
                    <br><br>
                    Time :  01:30pm - 05:30pm<BR>
                    •  <b>Beginner:</b>September 16, 23, and 30, October 7<br><br>
                    •  <b>Intermediate:</b>October 14, 21, and 28, November 4<br><br>
                    •  <b>Advanced:</b>November 11, 18, and 25, December 2
                    <br><br>
                    <b>P15,000 per module</b>

                    </p>
                    <a href="{{ url('/products/TruConnect') }}" class="btn btn-orange">ENROLL NOW</a> 
                </div>

            </div> 
          </div>
        </section>
    </div>


@endsection
@section('script_link')
  <script type="text/javascript">
  
</script>
@endsection