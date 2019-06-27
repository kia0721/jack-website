@extends('layouts.mobile')

@section('css_link_2')

    <style type="text/css">
    
    .checkbox{
        display: table-row;
    }

    .register-div{
        background-color: rgba(227, 234, 234, 0.4117647058823529);
        margin-top: 30px;
    }

    .errorCourseMsg{
        color:red;
        font-style: italic;
    }

    .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th{

        border-top: 1px solid #0075ff;
    }

    .table-striped>tbody>tr:nth-of-type(odd){
        background-color: rgba(0, 94, 255, 0.11);

    }

    #termConditionLink{
        font-weight: bold;
        
    }
    #termConditionLink:hover{
        color: blue;
    }
    
    div.jackStudent{
        background-color: rgba(227, 234, 234, 0.4117647058823529);
        padding: 20px;
        margin-top: 20px;
        text-align: center;
        font-size: 16px;
        width: calc(46% - 2px);
    }
    div.jackStudent:hover, div.jackStudent.active{
        color: #00bdf4;
        font-weight: bold !important;
        cursor: pointer;   
        box-shadow: 1px 1px 9px 1px rgba(136, 136, 136, 0.72);
    }

    .studentTitle{
        color: #00bdf4;
        font-weight: bold;
        text-align: center;
    }

    #savePersonalInfo.disabled, #submitRegistration.disabled, #submitRegistration:disabled,
    #submitRegistration[disabled] {
        background-color: #968f8f;
        color: white;
        cursor: default;
    }
   

    </style>
@endsection

@section('content')

@section('content')
<div class="main-wrapper">
    <div class="col-md-8 col-md-offset-2">
        <div class="col-md-12"  style="text-align: center;">
            <h1 class="color-1">REGISTRATION</h1>
        </div>
            
        <div class="row jackStudentContainer justify-content-md-center my-3">
            <div class="col-md-12 col-xs-12" >
                <h5>To start your registration, kindly choose whether the student is new or returning to JACK:</h5>
            </div>
            <div class="col-md-12 col-xs-12" >
                <div class="col-md-5 col-xs-5 jackStudent" id="newStudentBtn">
                    <img src="{{ asset('images/new_student_icon.png') }}" class="img-responsive" /><br>
                    New Student
                </div>
                <div class="col-md-1 col-xs-1" style="width: 4px;"></div>
                <div class="col-md-5 col-xs-5 jackStudent"  id="oldStudentBtn" >
                    <img src="{{ asset('images/old_student_icon.png') }}" class="img-responsive" /><br>
                    Old Student
                </div>
            </div>
            
        </div>        
        <div class="py-2 btn-secondary w-100 my-4"></div>
            <div id="personalDetails">
               
                <form id="personalInfoForm" method="POST" action="" >
                    @csrf
                <!-- <div class="col-md-12"> -->
                <h2 class="studentTitle">NEW STUDENT</h2>
                <div class="col-md-12 py-3 register-div">
                    <div class="row">
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
                        </div>
                        <div class="row">
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
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-6">
                                <div class="form-group">
                                <label class="form-control-label" for="birthdate">Birthday<span class="form-asterisk">*</span></label>
                                    <input id="birthdate" type="date" class="form-control" name="birthdate" value="" required/>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <div class="form-group">
                                <label class="form-control-label" for="age">Age</label>
                                    <input id="age" type="text" disabled class="form-control" value="" >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="age">Please describe the student’s background on coding/programming:<span class="form-asterisk">*</span></label>
                                    
                                    <div class="col-sm-12 radio">
                                      <label><input type="radio" name="codingBg" class="optradio codingBg" value="Not yet" required />None yet</label>
                                    </div>
                                    <div class="col-sm-12 radio">
                                      <label><input type="radio" name="codingBg" class="optradio codingBg" value="Self-taugth"/>Self-taught</label>
                                    </div>
                                    <div class="col-sm-12 radio">
                                      <label><input type="radio" name="codingBg" class="optradio codingBg" value="Previously enrolled with JACK"/>Previously enrolled with JACK</label>
                                    </div>
                                    <div class="col-sm-12 radio">
                                        <label><input type="radio" name="codingBg" class="optradio codingBg" value="Previously enrolled with other school"/>Previously enrolled with other school</label>
                                    </div>
                                    <div class="col-sm-12 radio">
                                      <label><input type="radio" name="codingBg" class="optradio codingBg" value="0"/>Other </label>
                                    </div>
                                    <div class="col-sm-12 radio studentBackground" >
                                        <input type="text" class="form-control" name="studentBackground" id="studentBackground" value="" placeholder="Please specify" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">

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
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-6">
                                <div class="form-group">
                                <label class="form-control-label" for="parentEmail">Email<span class="form-asterisk">*</span></label>
                                    <input id="parentEmail" type="email" class="form-control" name="parentEmail" value="" required />
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <div class="form-group">
                                <label class="form-control-label" for="parentContactNum">Contact number<span class="form-asterisk">*</span></label>
                                    <input id="parentContactNum" type="text" class="form-control" name="parentContactNum" placeholder="09XX XXX XXXX" value="" required />
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-control-label" for="completeAddress">Address/Location</label>
                            <input id="completeAddress" type="text" class="form-control" name="completeAddress" value="" required />
                        </div>

                        <div class="form-group">
                           
                            <label class="form-control-label" for="find">How did you find out about JACK?<span class="form-asterisk">*</span></label>
                        </div>

                        <div class="row">
                                
                                
                            <div class="col-md-6 col-xs-12 radio">
                                <label><input type="radio" name="findJack" class="findJack" value="Google Search Result" required />Google Search Result</label><br>
                                <label><input type="radio" name="findJack" class="findJack" value="Facebook Ad">Facebook Ad</label><br>
                                <label><input type="radio" name="findJack" class="findJack" value="Instagram Ad">Instagram Ad</label><br>
                                <label><input type="radio" name="findJack" class="findJack" value="School">School</label>
                            </div>
                            <div class="col-md-6 col-xs-12 radio">
                                
                                <label style="margin-top: 11px;"><input type="radio" name="findJack" class="findJack" value="Flyers">Flyers</label><br>
                                <label><input type="radio" name="findJack" class="findJack" value="Email Updates">Email Updates</label><br>
                                <label><input type="radio" name="findJack" class="findJack" value="Referred by a friend/Student">Referred by a friend/Student</label>
                                <input type="text" class="form-control" name="referByVal" id="referByVal" style="display:none;" placeholder="Referral name">
                                <br>
                                <label><input type="radio" name="findJack" class="findJack" value="0">Other </label>
                                <input type="text" class="form-control" name="findJackVal" id="findJackVal" style="display:none;" placeholder="Please specify">
                            </div>
                                
                        </div>
                        <div class="form-group">
                            Before you proceed you must read and agree with our <a href="{{ url('policies') }}" class="btn-link" id="termConditionLink" target="_blank"> Terms and Privacy Policy</a>.
                            <label>
                                <input type="checkbox" class="allowPhotograph" id="allowPhotographNew" checked="checked">  
                                <small><i>I allow JACK to photograph or video my child in the school setting, and I understand that these materials may be used in print or electronic media that will be displayed in platforms owned or supported by JACK. </i></small>
                            </label>
                            <div class="checkbox">
                              <label><input type="checkbox" id="agreeNewStudent" class="agreeTermPolicy"><small><i> I have read and agree to the terms and policy.</i></small></label>
                            </div>

                        </div>
                        
                        <div class="form-group text-center">
                            <button class="jack-btn btn-lg btn-orange disabled" id="savePersonalInfo" disabled>SAVE INFO</button>
                        </div>
                </div>
            </div>

            <div id="oldStudentContainer">
                <h2 class="studentTitle">OLD STUDENT</h2>
                <div class="col-md-12 py-3 register-div ">
                    <div class="form-group">
                        <label class="form-control-label" for="studentId">Please provide student ID.</label>
                        <input id="studentId" type="text" class="form-control" name="studentId" value="" />
                    </div>

                    <div class="form-group">
                        Before you proceed you must read and agree with our <a href="{{ url('policies') }}" class="btn-link" id="termConditionLink" target="_blank"> Terms and Privacy Policy</a>.
                        <label>
                            <input type="checkbox" class="allowPhotograph" id="allowPhotographOld" checked="checked">  

                            <small><i>I allow JACK to photograph or video my child in the school setting, and I understand that these materials may be used in print or electronic media that will be displayed in platforms owned or supported by JACK. </i></small>
                        </label>
                        <div class="checkbox">
                          <label><input type="checkbox" id="agreeStudentOld" class="agreeTermPolicy"><small><i> I have read and agree to the terms and policy.</i></small></label>
                        </div>

                    </div>

                    <div class="form-group">
                        <a class="btn-link" data-toggle="modal" data-target="#forgotStudentIdModal" id="forgotStudentLink" >Forgot your student id?</a>
                    </div>
                </div>
            </div>

            <div class="col-md-12 py-4 courseList">
                <h2 class="studentTitle">COURSES</h2>
                <p>Your enlisted courses will be shown here. You may add, delete, or edit courses. Please specify your desired batch/schedule.</p>
            </div>
            <div class="col-md-12" id="courseListContainer">
                
                
            </div>
            <div class="col-md-12 wishCourse text-center py-3" id="addNewCourse">
                <h4><span class="glyphicon glyphicon-plus"> </span>Add new course</h4>
            </div>

            <div class="col-md-12 py-3 text-center">
                <div class="g-recaptcha" data-sitekey="6Le4v38UAAAAAEbpZNMl4JT7nE2eWu2yTFsyi1T-"></div>
                <br>
                <input type="hidden" name="schedules" id="schedules" />
                <input type="hidden" name="allowPhotographVal" id="allowPhotographVal" />
                <input type="hidden" name="registerAction" id="registerAction" />
                <input type="hidden" class="form-control" name="age" id="ageVal" >
                <button id="submitRegistration" class="jack-btn btn-orange btn-lg disabled" disabled>SUBMIT REGISTRATION
                </button>
            </div>
            
            
            </form>
    </div>
<div id="forgotStudentIdModal" class="modal fade" role="dialog" >
    <div class="modal-dialog modal-lg" >
        <div class="modal-content" >
            <div class="modal-header">
                <h4 class="modal-title ">Forgot Student ID</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form id="forgotStudentIdForm"  method="POST" action="{{ url('forgotStudentId') }}">
                @csrf
                <div class="modal-body" >
                    <div class="form-group">
                        <label class="form-control-label" for="forgotEmail">Please provide the email address that you use.</label>
                        <input type="email" id="forgotEmail"  class="form-control" name="forgotEmail" required />

                        <!-- <div class="g-recaptcha" data-sitekey="6Le4v38UAAAAAEbpZNMl4JT7nE2eWu2yTFsyi1T-"></div> -->
                    </div>
                </div>

                <div class="modal-footer">
                    <div class="form-group ">
                      <button class="btn btn-primary btn-sm" data-dismiss="modal">BACK</button>
                    <button class="btn btn-primary btn-sm" id="submitForgotStudId">SUBMIT</button> 
                    </div>
                </div>
            </form>
            
        </div><!-- // modal-content // -->   
    </div><!-- // modal-dialog // -->
</div>

@endsection
@section('script_link')
<script src="{{ asset('js/moment.js') }}"></script>
<script src="{{ asset('js/mobile/common-html/common-page-register.js') }}"></script>
<script src="{{ asset('js/site/cart.js') }}"></script>
<script src="{{ asset('js/site/register.js') }}"></script>

 
@endsection