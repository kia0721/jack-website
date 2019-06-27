@extends('layouts.mobile')

@section('css_link')
    
    <link href="{{ asset('/css/mobile.home.css') }}" rel="stylesheet">
    <style type="text/css">
        button.collapsed{
            text-align: left;
            white-space: normal;
        }

    </style>
@endsection

@section('content')

<div class="main-wrapper">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="col-md-12 col-sm-12 text-center">

                <img src="{{ asset('assets/images/faqs/FAQS Banner.png') }}" class="img-responsive"  />
                
            </div>

            <div class="col-md-12 col-sm-12">

               <div id="accordion">
                  <div class="card">
                    <div class="card-header" id="headingOne">
                      <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          WHAT ARE THE CLASS SCHEDULES?
                        </button>
                      </h5>
                    </div>

                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                      <div class="card-body">
                        <p class="mbr-fonts-style panel-text display-7">
                           <strong><u> Summer Program:</u></strong></br>
                            April and May (whole month)</br>
                            June (Week 3 and 4)</br>
                            July (Week 1 and 2)</br>
                            </br>
                            Monday to Friday</br>
                            8AM to 12NN</br>
                            1PM to 5PM</br>
                            </br>
                            <strong><u>Weekend Program:</u></strong></br>
                            July (Week 3) to December (Week 1)</br>
                            </br>
                            Saturdays</br>
                            8:30AM to 12:30PM</br>
                            1:30PM to 1:30PM</br>
                            </br>
                            See the detailed list of the class schedules <a href="{{ url('program') }}">here</a>.</p>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingTwo">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          WHERE WILL THE CLASSES BE HELD?
                        </button>
                      </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                      <div class="card-body">
                         <p class="mbr-fonts-style panel-text display-7">
                           JACK is located at Penthouse East Tower Philippine Stock Exchange Center, Exchange Road, Ortigas Center, Pasig City 1605 Metro Manila Philippines.</p>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingThree">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          WHO MAY ENROLL?
                        </button>
                      </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                      <div class="card-body">
                        <p class="mbr-fonts-style panel-text display-7">
                           Novice Coder: 6 to 8 years old </br>
                           Junior Coder: 9 to 11 years old </br>
                           Master Coder: 12 to 17 years old</p>
                      </div>
                    </div>
                  </div>

                  <div class="card">
                    <div class="card-header" id="headingFour">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                          CAN MY CHILD ENROLL IF HE OR SHE HAS NO BACKGROUND KNOWLEDGE IN CODING?
                        </button>
                      </h5>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                      <div class="card-body">
                        <p class="mbr-fonts-style panel-text display-7">
                           Of course, JACK’s beginner courses are designed to introduce your child to the world of coding. If you’re unsure about the best course for your child, you may schedule a consultation a <a href="https://calendly.com/learncoding"> consultation </a> with us.</p>
                      </div>
                    </div>
                  </div>

                  <div class="card">
                    <div class="card-header" id="headingFive">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                          DOES MY CHILD NEED TO BRING A LAPTOP OR TABLET?
                        </button>
                      </h5>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                      <div class="card-body">
                        <p class="mbr-fonts-style panel-text display-7">
                           For Novice and Junior Coder classes, JACK provides the necessary equipment for the class.
                           However, for Master Coder classes, we highly encourage students to bring their own.
                       </p>
                      </div>
                    </div>
                  </div>

                  <div class="card">
                    <div class="card-header" id="headingSix">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                          WHO ARE THE TEACHERS?
                        </button>
                      </h5>
                    </div>
                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                      <div class="card-body">
                        <p class="mbr-fonts-style panel-text display-7">
                        JACK teachers are subject matter experts with a passion for teaching kids. They have the mind and heart to help unlock your child’s full potential and to inspire the next generation of innovators.</p>
                      </div>
                    </div>
                  </div>

                  <div class="card">
                    <div class="card-header" id="headingSeven">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                          WHAT IS THE CLASS SIZE OF EACH COURSE?
                        </button>
                      </h5>
                    </div>
                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                      <div class="card-body">
                        <p class="mbr-fonts-style panel-text display-7">
                           Depending on the course, the class size may range from 5 to 20 students. The average class size is 10.</p>
                      </div>
                    </div>
                  </div>


                </div>
            </div>
         </div>   
    </div>

</div>

@endsection
@section('script_link')
  
@endsection