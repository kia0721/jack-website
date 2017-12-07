@extends('layouts.site')

@section('css_link_2')

    <style type="text/css">
        
    body{
        background-color: #f3f3f3;
    }

    .checkbox{
        display: table-row;
    }

    .register-div{
        background-color: #afb9fb;
        border-radius: 33px;
        padding-bottom: 10px;
    }

    </style>
@endsection

@section('content')
    <div id="main-wrapper">
        <section>
          <div class="wrapper">
            <div class="entry-content register-steps">
                <h3> <br></h3>
            </div>
            <div class="col-md-12"  style="text-align: center;">
                <h1 style="font-size: 50px;"><span style="color:#00bff3;">JACK</span> <span style="color: #ff9d34;">REGISTRATION</span></h1>
            </div>
            <div class="col-md-4"  style="text-align: center;">
                <img src="{{ asset('images/reg_step_1.png') }}" />
                <H2>STEP 1</H2>
                <h5>Go to jack.com.ph/register and fill out the form</h5>
            </div>
            <div class="col-md-4"  style="text-align: center;">
                <img src="{{ asset('images/reg_step_2.png') }}" />
                <H2>STEP 2</H2>
                <h5>Proceed with payment via bank deposit or at JACK HQ</h5>
            </div>
            <div class="col-md-4"  style="text-align: center;">
                <img src="{{ asset('images/reg_step_3.png') }}" />
                <H2>STEP 3</H2>
                <h5>You are already booked for the class</h5>
            </div>
            
          </div>
        </section>

        <section id="step_1" style="font-size: 16px;">
          <div class="wrapper">
            <div class="entry-content">
                <h3 style="text-align: center;"> <br> <br> <br></h3>
                
            </div>
            <div id="personalDetails">
                <div class="col-md-12">
                    <br><br><hr>
                    
                </div>
                <div class="col-md-12 register-div">
                    <h3 style="text-align: center;">Personal Details</h3>
                    <div class="col-md-8 col-md-offset-2">
                        <div class="col-xs-12 col-md-6">
                            <div class="form-group">
                            <label class="form-control-label" for="studGivenName">Student's given name<span class="form-asterisk">*</span></label>
                                <input id="studGivenName" type="text" class="form-control" name="studGivenName" value="" required />
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="form-group">
                            <label class="form-control-label" for="studLastName">Student's lastname<span class="form-asterisk">*</span></label>
                                <input id="studLastName" type="text" class="form-control" name="studLastName" value="" required />
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="form-group">
                            <label class="form-control-label" for="school">School<span class="form-asterisk">*</span></label>
                                <input id="school" type="text" class="form-control" name="school" value="" required/>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="form-group">
                            <label class="form-control-label" for="studLastName">Grade level<span class="form-asterisk">*</span></label>
                                <input id="gradeLevel" type="text" class="form-control" name="gradeLevel" value="" required />
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="form-group">
                            <label class="form-control-label" for="birthday">Birthday<span class="form-asterisk">*</span></label>
                                <input id="birthday" type="date" class="form-control" name="birthday" value="" required/>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="form-group">
                            <label class="form-control-label" for="age">Age</label>
                                <input id="age" type="text" disabled class="form-control" name="age" value="" >
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-12">
                            <div class="form-group">
                                <label class="form-control-label" for="age">Please describe the student’s background on coding/programming:<span class="form-asterisk">*</span></label>
                                
                                <div class="col-sm-12 radio">
                                  <label><input type="radio" name="optradio" class="optradio" value="Not yet" required />None yet</label>
                                </div>
                                <div class="col-sm-12 radio">
                                  <label><input type="radio" name="optradio" class="optradio" value="Self-taugth"/>Self-taught</label>
                                </div>
                                <div class="col-sm-12 radio">
                                  <label><input type="radio" name="optradio" class="optradio" value="Previously enrolled with JACK"/>Previously enrolled with JACK</label>
                                </div>
                                <div class="col-sm-12 radio">
                                    <label><input type="radio" name="optradio" class="optradio" value="Previously enrolled with other school"/>Previously enrolled with other school</label>
                                </div>
                                <div class="col-sm-12 radio">
                                  <label><input type="radio" name="optradio" class="optradio" value="0"/>Other</label>
                                </div>
                                <div class="col-sm-12 radio studentBackground" style="display:none;">
                                    <input type="text" name="studentBackground" id="studentBackground" value="" />
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="form-group">
                            <label class="form-control-label" for="contactPerson">Contact Person<span class="form-asterisk">*</span></label>
                                <input id="contactPerson" type="text" class="form-control" name="contactPerson" value="" required/>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="form-group">
                            <label class="form-control-label" for="relationship">Relationship<span class="form-asterisk">*</span></label>
                                <input id="relationship" type="text" class="form-control" name="relationship" value="" required />
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="form-group">
                            <label class="form-control-label" for="email">Email<span class="form-asterisk">*</span></label>
                                <input id="email" type="email" class="form-control" name="email" value="" required />
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="form-group">
                            <label class="form-control-label" for="contactNum">Contact number<span class="form-asterisk">*</span></label>
                                <input id="contactNum" type="text" class="form-control" name="contactNum" placeholder="09XX XXX XXXX" value="" required />
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-12">
                            <div class="form-group">
                            <label class="form-control-label" for="address">Address/Location</label>
                                <input id="address" type="text" class="form-control" name="address" value="" required />
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-12 text-center">
                            <button class="btn btn-lg btn-orange" id="personalNextBtn">NEXT</button>
                        </div>
                    </div>
                </div>

            </div>
            <div id="courseDetails">
                <div class="col-md-12">
                    <br><br><hr>
                    
                </div>
                <div class="col-md-12 register-div">
                    <h3 style="text-align: center;">Course Details</h3>
                    <div class="col-md-8 col-md-offset-2">
                        <div class="col-xs-12 col-md-12">
                            <div class="form-group">
                                <label class="form-control-label" for="courses">Please select the courses you would like to take?<span class="form-asterisk">*</span> </label>
                                
                                <table class="display table table-striped" id="c4wiUserTable"  width="100%" >
                                    <tbody  width="100%" >
                                    @foreach ($courses as $course)
                                        <tr class="checkbox">
                                            <td  width="70%" style=" width: 70%;"><label> <input type="checkbox" class="courseCbox" name="courses[]"  value="{{ $course->id }}"> {{ $course->courseTitle }} </label></td>
                                            <td  width="30%" style="width: 30%;">
                                                @if($course->courseType == 3)
                                                <select class="form-control" id="level_{{ $course->id }}">
                                                    <option selected="" disabled="">--Select Level--</option>
                                                    <option value="1"> Beginner</option>
                                                    <option value="2"> Intermediate</option>
                                                    <option value="3"> Advanced</option>
                                                </select>
                                                @elseif($course->mobileDev == 1)

                                                <select class="form-control selectedmobileDev" id="selectedmobileDev_{{ $course->id }}">
                                                    <option value="0" selected="" disabled=""> -- Select Mobile Development -- </option>
                                                    <option value="Android">Android</option>
                                                    <option value="iOS">iOS</option>
                                                </select>
                                                @else

                                                &nbsp;
                                            @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <br>
                                <label class="form-control-label" for="find">How did you find out about JACK?<span class="form-asterisk">*</span></label>
                                
                                <div class="col-md-12">
                                    <div class="col-xs-12 col-md-6 radio">
                                        <label><input type="radio" name="find" value="Google Search Result" required />Google Search Result</label><br>
                                        <label><input type="radio" name="find" value="Facebook Ad">Facebook Ad</label><br>
                                        <label><input type="radio" name="find" value="Instagram Ad">Instagram Ad</label><br>
                                        <label><input type="radio" name="find" value="School">School</label>
                                    </div>
                                    <div class="col-xs-12 col-md-6 radio">
                                        
                                        <label style="margin-top: 11px;"><input type="radio" name="find" value="Flyers">Flyers</label><br>
                                        <label><input type="radio" name="find" value="Email Updates">Email Updates</label><br>
                                        <label><input type="radio" name="find" value="Referred by a friend/Student">Referred by a friend/Student</label><br>
                                        <label><input type="radio" name="find" value="0">Other <input type="text" class="form-control" id="findJack" style="display:none;"></label>
                                    </div>
                                </div>
                            </div>
                            
                            <label>
                                <input type="checkbox" name="allowPhotograph" class="allowPhotograph" id="allowPhotograph" checked="checked">  
                                <small><i>I allow JACK to photograph or video my child in the school setting, and I understand that these materials may be used in print or electronic media that will be displayed in platforms owned or supported by JACK. </i></small>
                            </label>
                            
                        </div>
                        
                    </div>
                    <div class="col-xs-12 col-md-12 text-center">
                        <button class="btn btn-lg btn-orange" id="coursePrevBtn">PREVIOUS</button>
                        <button class="btn btn-lg btn-orange" id="saveBtn">SUMBIT</button>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
            <br>
            </div>
            
          </div>
        </section>
    </div>


@endsection
@section('script_link')

  <script type="text/javascript">
  $('#courseDetails').hide();
  $('#personalNextBtn').click(function (){
      $('#courseDetails').show();
      $('#personalDetails').hide();

      $('html, body').animate({
            scrollTop: $("#courseDetails").offset().top
        }, 500, function () {
        });
  });
  $('#coursePrevBtn').click(function (){
      $('#courseDetails').hide();
      $('#personalDetails').show();

      $('html, body').animate({
            scrollTop: $("#personalDetails").offset().top
        }, 500, function () {
        });
  });
</script>
@endsection