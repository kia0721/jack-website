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
        background-color: #5feaef;
        border-radius: 33px;
        padding-bottom: 10px;
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
                <form class=""  method="POST" action="{{ url('addRegister2') }}">
                <!-- <div class="col-md-12"> -->
                <div class="col-md-12 register-div">
                    <div class="row">
                    <h3 style="text-align: center;">Personal Details</h3>
                    <!-- <div class="col-md-8 col-md-offset-2"> -->
                    <div class="col-md-12">

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
                            <label class="form-control-label" for="birthdate">Birthday<span class="form-asterisk">*</span></label>
                                <input id="birthdate" type="date" class="form-control" name="birthdate" value="" required/>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="form-group">
                            <label class="form-control-label" for="age">Age</label>
                                <input id="age" type="text" disabled class="form-control" name="age" value="" >
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-12">
                            <div class="col-xs-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="age">Please  describe the student’s background on coding/programming:<span class="form-asterisk">*</span></label>
                                    
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
                            <div class="col-xs-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="modeOfCom">Preferred Mode of Communication
                                        <span class="form-asterisk">*</span></label>
                                    
                                    <div class="col-sm-12 radio">
                                      <label><input type="radio" name="communicationBg" class="optradio communicationBg" value="SMS" required />SMS</label>
                                    </div>
                                    <div class="col-sm-12 radio">
                                      <label><input type="radio" name="communicationBg" class="optradio communicationBg" value="Self-taugth"/>E-mail</label>
                                    </div>
                                    <div class="col-sm-12 radio">
                                      <label><input type="radio" name="communicationBg" class="optradio communicationBg" value="Phone Call"/>Phone Call</label>
                                    </div>
                                    <div class="col-sm-12 radio">
                                        <label><input type="radio" name="communicationBg" class="optradio communicationBg" value="All"/>All of the above</label>
                                    </div>
                                   <br/>
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
                                <input id="address" type="text" class="form-control" name="address" value="" />
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-12 text-center">
                            <button class="btn btn-lg btn-orange" id="personalNextBtn">NEXT</button>
                        </div>
                    </div></div>
                </div>
                </form>
            </div>
            <div id="courseDetails">
                <div class="col-md-12">
                    <br><br><hr>
                    
                </div>
                <form class=""  method="POST" action="{{ url('addRegister2') }}">
                <div class="col-md-12 register-div">
                    <div class="row">
                    <h3 style="text-align: center;">Course Details</h3>
                    <!-- <div class="col-md-8 col-md-offset-2"> -->
                        <div class="col-xs-12 col-md-12">
                            <div class="form-group">
                                <div class="col-md-12">
                                <label class="form-control-label" for="courses">Please select the courses you would like to take?<span class="form-asterisk">*</span> <span class="errorCourseMsg"></span></label>
                                
                                <table class="display table table-striped" id="c4wiUserTable"  width="100%" >
                                    <tbody  width="100%" >

                                    <tr style="background-color: #0075ff;">
                                    <td colspan="2" style="text-align: center; font-weight: bold;">{{ $courses[0]->class }}</td>
                                    </tr>
                                   
                                    @for ($i = 1; $i <= count($courses); $i++)
                                        <?php 
                                            $course = $courses[$i-1];
                                            $currCourseType = $course->class;

                                            $courseTypeCtr = $i;

                                            if($courseTypeCtr >= count($courses)){
                                                $courseTypeCtr = $i-1;
                                            }
                                            $fuCourseType = $courses[$courseTypeCtr]->class;
                                            
                                        ?>
                                        
                                        <tr class="checkbox">
                                            <td  width="60%" style=" width: 70%;">

                                            <label> <input type="checkbox" class="courseCbox" name="courses[]" value="{{ $course->id }}_{{ $course->courseType }}"> {{ $course->courseTitle }} </label>

                                            </td>
                                            <td  width="40%" style="width: 30%;">
                                                @if($course->courseType == 3)
                                                
                                                <?php 
                                                   
                                                    $isSameCourse = true;

                                                    $optionsLevel = "";
                                                    $optionsSchedule = "";
                                                    for($a = $i-1; $isSameCourse == true; $a++){
                                                        $course = $courses[$a]; 

                                                  
                                                        if($i >= count($courses)){
                                                            $isSameCourse = false;
                                                            $i = count($courses) - 1;
                                                        }

                                                        $optionsSchedule .= '<option value="'.$course->levelId.'_'.$course->courseScheduleId.'">'.$course->strDate.'</option>';
                                                        if($course->id !=  $courses[$i]->id){
                                                            $isSameCourse = false;
                                                         
                                                            $optionsLevel .= '<option value="'.$course->id.'_level_'.$course->levelId.'">'.$course->courseLevel.'</option>';
                                                            $currCourseType = $course->class;
                                                            $fuCourseType = $courses[$i]->class;
                                                        } else {
                                                            if($course->levelId !=  $courses[$i]->levelId){
                                                                $optionsLevel .= '<option value="'.$course->levelId.'_'.$course->courseScheduleId.'">'.$course->courseLevel.'</option>';
                                                            }
                                                          
                                                            $i++;
                                                        }
                                                        
                                                    }

                                                ?>
                                                <select class="form-control courseLevelBox" id="courseSelectBox_{{ $course->id }}_{{ $course->courseType }}" style="display: none;">
                                                    <option selected="" disabled="">--Select Level--</option>
                                                    <?php echo $optionsLevel; ?>
                                                </select>

                                                  <select class="form-control {{ $course->id }}_level_{{ $course->levelId }} courseSelectBox_{{ $course->id }}_{{ $course->courseType }}" id="level_{{ $course->id }}" style="display: none;">
                                                    <option selected="" disabled="">--Select Schedule--</option>
                                                    
                                                    <?php echo $optionsSchedule; ?>
                                                   
                                                </select>
                                                
                                                @elseif($course->mobileDev == 1)

                                                    <select class="form-control selectedmobileDev courseSelectBox_{{ $course->id }}_{{ $course->courseType }}" id="selectedmobileDev_{{ $course->id }}" style="display: none;">
                                                        <option value="0" selected="" disabled=""> -- Select Mobile Development -- </option>
                                                        <option value="Android_{{ $course->courseScheduleId }}">Android</option>
                                                        <option value="iOS_{{ $course->courseScheduleId }}">iOS</option>
                                                    </select>
                                                @elseif($course->courseType == 1)
                                                    <select class="form-control courseSelectBox_{{ $course->id }}_{{ $course->courseType }}" id="summer_{{ $course->id }}" style="display: none;">
                                                        <option value="0" selected="" disabled=""> -- Select Schedule -- </option>
                                                        @for ($a = $i-1; $a < count($courses); $a++)
                                                            <?php 
                                                            $tempCourse = $course;
                                                            $course = $courses[$a]; ?>

                                                            @if($tempCourse->id == $course->id)
                                                                <option value="{{ $course->levelId }}_{{ $course->courseScheduleId }}"> {{ $course->strDate }}</option>
                                                            @else
                                                                <?php $i = $a;
                                                                $a = count($courses);
                                                                ?>
                                                            @endif
                                                        @endfor

                                                    </select>
                                                @else
                                                <?php 
                                                   
                                                   $isSameCourse = true;

                                                   $optionsSchedule = "";
                                                   for($a = $i-1; $isSameCourse == true; $a++){
                                                       $course = $courses[$a]; 

                                                 
                                                       if($i >= count($courses)){
                                                           $isSameCourse = false;
                                                           $i = count($courses) - 1;
                                                       }

                                                       $optionsSchedule .= '<option value="'.$course->levelId.'_'.$course->courseScheduleId.'">'.$course->strDate.'</option>';
                                                       if($course->id !=  $courses[$i]->id){
                                                           $isSameCourse = false;
                                                        
                                                           $currCourseType = $course->class;
                                                           $fuCourseType = $courses[$i]->class;
                                                       } else {
                                                           $i++;
                                                       }
                                                       
                                                   }

                                               ?>

                                                 <select class="form-control {{ $course->id }}_level_{{ $course->levelId }} courseSelectBox_{{ $course->id }}_{{ $course->courseType }}" id="junior_{{ $course->id }}" style="display: none;">
                                                   <option selected="" disabled="">--Select Schedule--</option>
                                                   
                                                   <?php echo $optionsSchedule; ?>
                                                  
                                               </select>
                                                @endif
                                            </td>

                                        </tr>

                                        
                                        @if($currCourseType != $fuCourseType)
                                        <tr style="background-color: #0075ff;">
                                            <td colspan="2" style="text-align: center; font-weight: bold;">{{ $fuCourseType }} </td>
                                        </tr>
                                        @endif

                                    @endfor
                                    </tbody>
                                </table>
                                <br>
                                <label class="form-control-label" for="find">How did you find out about JACK?<span class="form-asterisk">*</span></label>
                                
                                <div class="col-md-12">
                                    <div class="col-xs-12 col-md-6 radio">
                                        <label><input type="radio" name="findJack" class="findJack" value="Google Search Result" required />Google Search Result</label><br>
                                        <label><input type="radio" name="findJack" class="findJack" value="Facebook Ad">Facebook Ad</label><br>
                                        <label><input type="radio" name="findJack" class="findJack" value="Instagram Ad">Instagram Ad</label><br>
                                        <label><input type="radio" name="findJack" class="findJack" value="School">School</label>
                                    </div>
                                    <div class="col-xs-12 col-md-6 radio">
                                        
                                        <label style="margin-top: 11px;"><input type="radio" name="findJack" class="findJack" value="Flyers">Flyers</label><br>
                                        <label><input type="radio" name="findJack" class="findJack" value="Email Updates">Email Updates</label><br>
                                        <label><input type="radio" name="findJack" class="findJack" value="Referred by a friend/Student">Referred by a friend/Student</label><br>
                                        <label><input type="radio" name="findJack" class="findJack" value="0">Other </label>
                                        <input type="text" class="form-control" id="findJackVal" style="display:none;" placeholder="Please specify">
                                    </div>
                                </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="col-md-3">
                                <label class="form-control-label" for="promo_code">Promo code</label>
                                </div>
                                <div class="col-md-4">
                                <input name="promo_code" id="promo_code" type="text" class="form-control" value="" placeholder="Promo Code" >
                                </div>
                            </div>
                            
                            <label>
                                <input type="checkbox" name="allowPhotograph" class="allowPhotograph" id="allowPhotograph" checked="checked">  
                                <small><i>I allow JACK to photograph or video my child in the school setting, and I understand that these materials may be used in print or electronic media that will be displayed in platforms owned or supported by JACK. </i></small>
                            </label>
                            
                        </div>
                         <div class="col-xs-12 col-md-12 text-center">
                            <input type="button"  class="btn btn-lg btn-orange" id="coursePrevBtn" value="PREVIOUS">
                            <button class="btn btn-lg btn-orange" id="saveBtn">SUBMIT</button>
                        </div>
                        {{ csrf_field() }}
                        <input type="hidden" name="courseSelected" id="courseSelected"/>
                    </div>
                </div>
                </form>
            </div>
            
            
          </div>
        </section>
    </div>


@endsection
@section('script_link')
    <script src="{{ asset('/js/jquery.form.js') }}"></script>
  <script type="text/javascript">
    $('#courseDetails').hide();
    $('#studentBackground').hide();
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1; //January is 0!
    var yyyy = today.getFullYear();
     if(dd<10){
            dd='0'+dd
        } 
        if(mm<10){
            mm='0'+mm
        } 

    today = (yyyy-6)+'-'+mm+'-'+dd;
    document.getElementById("birthdate").setAttribute("max", today);

 
    $(".courseCbox").change(function() {

        var id = $(this).val();
        console.log(id);
        var isChecked = $(this).is(":checked");
        if(isChecked){
            $('.courseSelectBox_'+id).show();
            $('.courseSelectBox_'+id).css('border-color', '#ccc');
        }
        else{
            $('.courseSelectBox_'+id).hide();
        }
       
    });

    $("#birthdate").change(function() {

        $('#age').val(getAge($(this).val()));
       
    });

    $(".codingBg").change(function() {
        var value = $('input[name=codingBg]:checked').val();

        if(value == 0){
            $('#studentBackground').show();
            $('#studentBackground').val("");
        } else {
            $('#studentBackground').hide();
            $('#studentBackground').val(value);
        }
    });

    $(".findJack").change(function() {
        var value = $('input[name=findJack]:checked').val();

        if(value == 0){
            $('#findJackVal').show();
            $('#findJackVal').val("");
        } else {
            $('#findJackVal').hide();
            $('#findJackVal').val(value);
        }
    });

    

    $("body").on("click","#personalNextBtn",function(e){
        $(this).parents("form").ajaxForm(toCourseDetail);
    });
    var toCourseDetail = { 
        beforeSubmit:function(formData, jqForm, options){

            var value = $('input[name=codingBg]:checked').val();

            if(value == 0 && $('#studentBackground').val() == "" ){
                $('#studentBackground').css('border-color', 'red');
                return false;
            }
            $('#studentBackground').css('border-color', '#ccc');
            $('#courseDetails').show();
            $('#personalDetails').hide();
            
            $('html, body').animate({
                scrollTop: $('.register-div').offset().top + 300
            }, 500, function () {
            });
            return false;
        },
        complete: function(response) 
        {
            
        }
    };

    $("body").on("click","#saveBtn",function(e){
        $(this).parents("form").ajaxForm(registerStudent);
    });
    var registerStudent = { 
        beforeSubmit:function(formData, jqForm, options){
            console.log("Validate register");
            var value = $('input[name=findJack]:checked').val();

            if(value == 0 && $('#findJackVal').val() == "" ){
                $('#findJackVal').css('border-color', 'red');
                return false;
            }
            $('#findJackVal').css('border-color', '#ccc');
            
            var checkedCourses = $('.courseCbox:checkbox:checked');
            $('.errorCourseMsg').html("");

            var isCourseComplete = true;
            if(checkedCourses.length == 0){
                isCourseComplete = false;
                $('.errorCourseMsg').html("Please select course");
            }
            var courseArr = [];
            for(var x = 0; x < checkedCourses.length; x++){
                var courseTypeId = checkedCourses[x].value;
                var valueId = $('.courseSelectBox_'+courseTypeId).val();
                console.log("Validate register "+ valueId);
                if(valueId == null){
                    isCourseComplete = false;
                    x = checkedCourses.length;
                    $('.errorCourseMsg').html("Please select schedule");
                    $('.courseSelectBox_'+courseTypeId).css('border-color', 'red');
                    break;
                }

                var courses = courseTypeId.split("_");
                var details = valueId.split("_");

                courseArr.push({
                    id: courses[0],
                    type: courses[1],
                    levelId: details[0],
                    scheduleId: details[1]
                });
            }



            
            if(isCourseComplete){
                waitingDialog.show("Sending registration....");
                $('#saveBtn').prop('disabled', true);
                $('#courseSelected').val(JSON.stringify(courseArr));
                $.ajax({
                    url: "{{ url('registerStudent') }}?_token="+$("input[name=_token]").val(),
                    type: 'post',
                    data: { 
                        'studGivenName' : $('#studGivenName').val(),
                        'studLastName' : $('#studLastName').val(),
                        'school' : $('#school').val(),
                        'gradeLevel' : $('#gradeLevel').val(),
                        'birthdate' : $('#birthdate').val(),
                        'age' : $('#age').val(),
                        'codingBackground' : $('#studentBackground').val(),
                        'modeOfCommunication' : $('input[name=communicationBg]:checked').val(),
                        'parentName' : $('#contactPerson').val(),
                        'relationship' : $('#relationship').val(),
                        'parentEmail' : $('#email').val(),
                        'parentContactNum' : $('#contactNum').val(),
                        'completeAddress' : $('#address').val(),
                        'findjack' : $('#findJackVal').val(),
                        'allowPhotograph' : $('#allowPhotograph').is(':checked')  ? 1 : 0,
                        'courseSelected' : $('#courseSelected').val(),
                        'promo_code' : $('#promo_code').val()

                    },
                    success: function (data) {
                        if(data.isSuccessful){
                            $('html, body').animate({
                                scrollTop: $('.register-steps').offset().top
                            }, 500, function () {
                            });
                            waitingDialog.show("SUCCESS", {
                                modalHeader: 'success',
                                dialog: data.result,
                                footer: true,
                                onHide: function(){
                                   location.reload();
                                
                                }
                            });  
                        } else {
                            waitingDialog.show("ERROR", {
                                modalHeader: 'danger',
                                dialog: data.result,
                                footer: true
                            }); 

                            $('#saveBtn').prop('disabled', false);
                        }
                        
                    },
                    error: function (data){
                        waitingDialog.show("ERROR", {
                            modalHeader: 'danger',
                            dialog: "Can't process your request, please contact administrator",
                            footer: true
                        }); 

                        $('#saveBtn').prop('disabled', false);
                    }
                });
            } else {
                $('html, body').animate({
                    scrollTop: $('.register-div').offset().top + 300
                }, 500, function () {
                });
            }
           
            
            return false;
        },
        complete: function(response) 
        {
            
        }
    };

    

    $("body").on("click","#coursePrevBtn",function(e){
        $('#courseDetails').hide();
        $('#personalDetails').show();
        $('html, body').animate({
            scrollTop: $('.register-div').offset().top + 300
        }, 500, function () {
        });
    });

    function getAge(dateString) {
        var today = new Date();
        var birthDate = new Date(dateString);
        var age = today.getFullYear() - birthDate.getFullYear();
        var m = today.getMonth() - birthDate.getMonth();
        if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
            age--;
        }
        return age;
    }
</script>
@endsection