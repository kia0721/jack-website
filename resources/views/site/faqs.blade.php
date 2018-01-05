@extends('layouts.site')

@section('css_link_2')
<style type="text/css">
    body{
        background-color: #d3cac1;
    }
    .bg1 {
        background-image: url("{{ asset('images/faqs_bg.png') }}");
        background-color: #d3cac1;
    }

    .layer-holder {
        background-position: center center;
        background-repeat: no-repeat;
        height: 100%;
        min-height: 100%;
        overflow: hidden;
    }


    .sub-con{
        height: 768px;
        margin-top: -396px;
        position: absolute;
        top: 50%;
        width: 100%;
        margin-left: -15px;
        
    }
    .sub-con > div {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 202px;
    }

    .top-img{
        z-index: 12;
    }

    .container{
        height: 100%;
        margin: 0 auto;
        max-width: 1024px;
        position: relative;
    }

    .faqs_div::-webkit-scrollbar {
      width: 10px;
      background-color: #e1e2e8;
    }

    .top-description > div{
        position: absolute;
    }

</style>
@endsection

@section('content')


   
    <div class="main-wrapper">

        <section data-name="Faqs" class="layer pos1" >
            <div class="layer-holder layer-bg bg1"  id="Welcome">
                <div class="container">
                    <div class="sub-con" >
                        <div class="top-description" >
                            <div class="faqs_div" style="padding-right: 15px; color:#f8f9ff; left: 250px; max-width: 550px; max-height: 350px;     overflow-y: overlay;" >
                                
                                <h1>What is JACK?</h1>
                                <p>Junior Academy for Coding Knowledge, Inc. (JACK) is a learning center that aims to equip kids with fundamental coding knowledge and develop their skills to create using the latest hardware trends and innovations. JACK’s mission is to provide them the highest quality learning experience by celebrating and encouraging their creativity through dynamic and project-based learning - all in a fun and engaging environment.
                                </p>
                                <br>
                                <h2>Frequently Asked Questions</h2>
                                <br>

                                <h4>WHAT ARE THE CLASS SCHEDULES?</h4>
                                <p>Summer classes are held during weekdays from 8am to 12pm. Our Junior Coder and Master Coder classes are held during weekends, from 8:30am to 12:30pm or 1:30pm to 5:30pm. The Junior Coder classes are usually in the morning, while the Master Coder class may have an afternoon schedule. All classes have a 30-minute break. To know the specific schedule of a course, kindly check our Courses (link) page.</p>

                                <br>
                                <h4>WHERE WILL IT BE HELD?</h4>
                                <p>JACK is located at Penthouse, East Tower, Philippine Stock Exchange Center, Exchange Road, Ortigas Center, Pasig City.</p>
                                <br>
                                <h4>WHO MAY ENROLL?</h4>
                                <p>Summer classes are open for ages 7 to 16. The Junior Coder classes are open to students ages 8 to 11, while the Master Coder classes are for ages 12 to 17 years old.</p>
                                <br>

                                <h4>CAN MY CHILD ENROLL IF HE OR SHE HAS NO KNOWLEDGE IN CODING?</h4>
                                <p>Of course, JACK’s Foundations of Coding program is designed to introduce your child to the world of coding. If your child wants to enroll in the other courses, we highly recommend that he or she undergo this program first.</p>
                                <br>

                                <h4>WHO ARE THE TEACHERS?</h4>
                                <P>JACK teachers are graduates of the University of the Philippines, who are also current IT industry practitioners. Armed with industry knowledge, skills, as well as experience in teaching kids, JACK teachers have the mind and heart to help unlock your kid’s full potential.</P>
                                <br>
                                
                                <h4>WHAT IS THE CLASS SIZE OF EACH COURSE?</h4>
                                <p>Each class is composed of 10 to 20 students.</p>
                                <br>
                                <br>

                                <h2>Registration and Payment</h2>
                                <br>
                                <h4>HOW TO REGISTER ?</h4>
                                <p>To register, please go to jack.com.ph/register and follow the instructions that will be sent in your email.</p>
                                <br>

                                <h4>HOW DO WE AVAIL COURSE FEE DISCOUNTS?</h4>
                                <p>JACK offers a buddy/sibling discount. Enroll with a buddy and get 5% off on the total amount due for the two enrollees.</p>
                                <br>

                                <h4>HOW DO WE PAY?</h4>
                                <p>Payments can be made through bank deposit or directly at JACK's office. We will advise you on the details once you have completed your registration.</p>
                                <br>

                                <h4>WHAT ARE THE INCLUSIONS OF THE COURSE FEE?</h4>
                                <p>Course fees are inclusive of the admission to the course, a hands-on training, as well as the necessary equipment for the class, unless otherwise stated. A certificate of completion is also given at the end of the course.</p>
                                <br>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


@endsection
@section('script_link')

@endsection