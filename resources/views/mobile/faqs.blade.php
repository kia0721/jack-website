@extends('layouts.mobile')

@section('css_link_2')
@endsection
<style type="text/css">
    
    .title{
        color: #ff9c34;
        font-size: 20px;
        margin-top: 0px;
        padding: 10px;
    }

    .Q-title{
        color: #ff9c34;
        font-size: 35px;
        font-weight: bold;
        margin: 0;
    }

    .A-title{
        color: #00bef3;
        font-size: 35px;
        font-weight: bold;
        margin: 0;
        margin-top: 13px;
    }

    div.question{
        border-right-color: #ff9c34;   
        border-right-width: 1px;
        border-right-style: solid;
    }

    p.question{
        vertical-align: middle;
        font-size: 16px;
    }

    /*div.answer{
        border-right-color: #00bef3;   
        border-right-width: 1px;
        border-right-style: solid;
    }*/

    .bubble 
    {
        position: relative;
        width: 100%;
        height: auto;
        padding: 0px;
        background: #00bef3;
        -webkit-border-radius: 10px;
        -moz-border-radius: 10px;
        border-radius: 10px;
        padding: 20px 20px; 
        height: auto;
    }

    .bubble:after 
    {
        content: '';
        position: absolute;
        border-style: solid;
        border-width: 10px 0 10px 15px;
        border-color: transparent #00bef3;
        display: block;
        width: 0;
        z-index: 1;
        right: -15px;
        top: 20px;
    }
</style>
@section('content')

<div class="main-wrapper">
    <div class="row">
        <div class="col-md-12 col-sm-12 " style="background-color: #f2f2f2; text-align: center;">
            <h1 class="title">Frequently Asked Questions</h1>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="col-md-12 col-sm-12">
                <div class="row"><br>
                    <div class="col-xs-2 col-sm-2 question">
                        <h2 class="Q-title">Q</h2>
                    </div>
                    <div class="col-xs-10 col-sm-10">
                        <p class="question">What is JACK?</p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xs-10 col-sm-10 answer">
                        <div class="bubble" >
                             <p class="answer">Junior Academy for Coding Knowledge, Inc. (JACK) is a learning center that aims to equip kids with fundamental coding knowledge and develop their skills to create using the latest hardware trends and innovations. JACK’s mission is to provide them the highest quality learning experience by celebrating and encouraging their creativity through dynamic and project-based learning - all in a fun and engaging environment.</p>
                        </div>
                    </div>
                    <div class="col-xs-2 col-sm-2">
                        <h2 class="A-title">A</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12">
                <div class="row"><br>
                    <div class="col-xs-2 col-sm-2 question">
                        <h2 class="Q-title">Q</h2>
                    </div>
                    <div class="col-xs-10 col-sm-10">
                        <p class="question">WHAT ARE THE CLASS SCHEDULES?</p>
                    </div>
                </div>

                <br>
                <div class="row">
                    <div class="col-xs-10 col-sm-10 answer">
                        <div class="bubble" >
                             <p class="answer">Summer classes are held during weekdays from 8am to 12pm. Our Junior Coder and Master Coder classes are held during weekends, from 8:30am to 12:30pm or 1:30pm to 5:30pm. The Junior Coder classes are usually in the morning, while the Master Coder class may have an afternoon schedule. All classes have a 30-minute break. To know the specific schedule of a course, kindly check our Courses (link) page.</p>
                        </div>
                    </div>
                    <div class="col-xs-2 col-sm-2">
                        <h2 class="A-title">A</h2>
                    </div>
                </div>
            </div>
           
            <div class="col-md-12 col-sm-12">
                <div class="row"><br>
                    <div class="col-xs-2 col-sm-2 question">
                        <h2 class="Q-title">Q</h2>
                    </div>
                    <div class="col-xs-10 col-sm-10">
                        <p class="question">WHERE WILL IT BE HELD?</p>
                    </div>
                </div>

                <br>
                <div class="row">
                    <div class="col-xs-10 col-sm-10 answer">
                        <div class="bubble" >
                             <p class="answer">JACK is located at Penthouse, East Tower, Philippine Stock Exchange Center, Exchange Road, Ortigas Center, Pasig City.</p>
                        </div>
                    </div>
                    <div class="col-xs-2 col-sm-2">
                        <h2 class="A-title">A</h2>
                    </div>
                </div>
            </div>
            
            <div class="col-md-12 col-sm-12">
                <div class="row"><br>
                    <div class="col-xs-2 col-sm-2 question">
                        <h2 class="Q-title">Q</h2>
                    </div>
                    <div class="col-xs-10 col-sm-10">
                        <p class="question">WHO MAY ENROLL?</p>
                    </div>
                </div>

                <br>
                <div class="row">
                    <div class="col-xs-10 col-sm-10 answer">
                        <div class="bubble" >
                             <p class="answer">Summer classes are open for ages 7 to 16. The Junior Coder classes are open to students ages 8 to 11, while the Master Coder classes are for ages 12 to 17 years old.</p>
                        </div>
                    </div>
                    <div class="col-xs-2 col-sm-2">
                        <h2 class="A-title">A</h2>
                    </div>
                </div>
            </div>
            
            <div class="col-md-12 col-sm-12">
                <div class="row"><br>
                    <div class="col-xs-2 col-sm-2 question">
                        <h2 class="Q-title">Q</h2>
                    </div>
                    <div class="col-xs-10 col-sm-10">
                        <p class="question">CAN MY CHILD ENROLL IF HE OR SHE HAS NO KNOWLEDGE IN CODING?</p>
                    </div>
                </div>

                <br>
                <div class="row">
                    <div class="col-xs-10 col-sm-10 answer">
                        <div class="bubble" >
                             <p class="answer">Of course, JACK’s Foundations of Coding program is designed to introduce your child to the world of coding. If your child wants to enroll in the other courses, we highly recommend that he or she undergo this program first.</p>
                        </div>
                    </div>
                    <div class="col-xs-2 col-sm-2">
                        <h2 class="A-title">A</h2>
                    </div>
                </div>
            </div>
            
            <div class="col-md-12 col-sm-12">
                <div class="row"><br>
                    <div class="col-xs-2 col-sm-2 question">
                        <h2 class="Q-title">Q</h2>
                    </div>
                    <div class="col-xs-10 col-sm-10">
                        <p class="question">WHO ARE THE TEACHERS?</p>
                    </div>
                </div>

                <br>
                <div class="row">
                    <div class="col-xs-10 col-sm-10 answer">
                        <div class="bubble" >
                             <p class="answer">JACK teachers are graduates of the University of the Philippines, who are also current IT industry practitioners. Armed with industry knowledge, skills, as well as experience in teaching kids, JACK teachers have the mind and heart to help unlock your kid’s full potential.</p>
                        </div>
                    </div>
                    <div class="col-xs-2 col-sm-2">
                        <h2 class="A-title">A</h2>
                    </div>
                </div>
            </div>
            
            <div class="col-md-12 col-sm-12">
                <div class="row"><br>
                    <div class="col-xs-2 col-sm-2 question">
                        <h2 class="Q-title">Q</h2>
                    </div>
                    <div class="col-xs-10 col-sm-10">
                        <p class="question">WHAT IS THE CLASS SIZE OF EACH COURSE?</p>
                    </div>
                </div>

                <br>
                <div class="row">
                    <div class="col-xs-10 col-sm-10 answer">
                        <div class="bubble" >
                             <p class="answer">Each class is composed of 10 to 20 students.</p>
                        </div>
                    </div>
                    <div class="col-xs-2 col-sm-2">
                        <h2 class="A-title">A</h2>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="col-md-12 col-sm-12 " style="background-color: #f2f2f2; text-align: center;">
            <h1 class="title">Registration and Payment</h1>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="col-md-12 col-sm-12">
                <div class="row"><br>
                    <div class="col-xs-2 col-sm-2 question">
                        <h2 class="Q-title">Q</h2>
                    </div>
                    <div class="col-xs-10 col-sm-10">
                        <p class="question">HOW TO REGISTER ?</p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xs-10 col-sm-10 answer">
                        <div class="bubble" >
                             <p class="answer">To register, please go to jack.com.ph/register and follow the instructions that will be sent in your email.</p>
                        </div>
                    </div>
                    <div class="col-xs-2 col-sm-2">
                        <h2 class="A-title">A</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12">
                <div class="row"><br>
                    <div class="col-xs-2 col-sm-2 question">
                        <h2 class="Q-title">Q</h2>
                    </div>
                    <div class="col-xs-10 col-sm-10">
                        <p class="question">HOW DO WE AVAIL COURSE FEE DISCOUNTS?</p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xs-10 col-sm-10 answer">
                        <div class="bubble" >
                             <p class="answer">JACK offers a buddy/sibling discount. Enroll with a buddy and get 5% off on the total amount due for the two enrollees.</p>
                        </div>
                    </div>
                    <div class="col-xs-2 col-sm-2">
                        <h2 class="A-title">A</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12">
                <div class="row"><br>
                    <div class="col-xs-2 col-sm-2 question">
                        <h2 class="Q-title">Q</h2>
                    </div>
                    <div class="col-xs-10 col-sm-10">
                        <p class="question">HOW DO WE PAY?</p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xs-10 col-sm-10 answer">
                        <div class="bubble" >
                             <p class="answer">Payments can be made through bank deposit or directly at JACK's office. We will advise you on the details once you have completed your registration.</p>
                        </div>
                    </div>
                    <div class="col-xs-2 col-sm-2">
                        <h2 class="A-title">A</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12">
                <div class="row"><br>
                    <div class="col-xs-2 col-sm-2 question">
                        <h2 class="Q-title">Q</h2>
                    </div>
                    <div class="col-xs-10 col-sm-10">
                        <p class="question">WHAT ARE THE INCLUSIONS OF THE COURSE FEE?</p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xs-10 col-sm-10 answer">
                        <div class="bubble" >
                             <p class="answer">Course fees are inclusive of the admission to the course, a hands-on training, as well as the necessary equipment for the class, unless otherwise stated. A certificate of completion is also given at the end of the course.</p>
                        </div>
                    </div>
                    <div class="col-xs-2 col-sm-2">
                        <h2 class="A-title">A</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
   
    
@endsection
@section('script_link')
@endsection