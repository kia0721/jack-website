function savePersonalInfoEnable(enable){

    $('#savePersonalInfo').prop("disabled", enable);
    $('#submitRegistration').prop("disabled", enable);

    if(enable){
        $('#savePersonalInfo').addClass("disabled");
        $('#submitRegistration').addClass("disabled");
    } else {
        $('#savePersonalInfo').removeClass("disabled");
        $('#submitRegistration').removeClass("disabled");
    }
} 

var dataStudentInfo;
var currentPage = "";
$(document).ready (function(){
    initializePersonalInfo(); 
    $('#studentBackground').hide();
    $('#personalDetails').hide();
    $('#oldStudentContainer').hide();

    initializeBirthdatePicker();

    $("body").on("click","#newStudentBtn",function(e){
        $('#personalDetails').show();
        $('#oldStudentContainer').hide();
        disabledSubmitRegistration();
        $(this).addClass('active');
        currentPage = "New";
    });

    $("body").on("click","#oldStudentBtn",function(e){
        $('#personalDetails').hide();
        $('#oldStudentContainer').show();
        disabledSubmitRegistration();
        $(this).addClass('active');
        currentPage = "Old";
    });

    function disabledSubmitRegistration(){
        $('.agreeTermPolicy').prop('checked', false); 
        $('.jackStudent').removeClass('active');
        savePersonalInfoEnable(true);
    }

     $("body").on("click",".agreeTermPolicy",function(e){
        if($(this).prop("checked") == true){
            savePersonalInfoEnable(false);
        } else {
            savePersonalInfoEnable(true);
        }

        if(cart.length == 0){

            $('#submitRegistration').hide();
        }

    });

    $("#birthdate").change(function() {
        var age = getAge($(this).val());
        $('#age').val(age);
        $('#ageVal').val(age);
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

        if(value=="Referred by a friend/Student"){
            $('#referByVal').show();
            $('#referByVal').val("");

            $('#findJackVal').hide();
            $('#findJackVal').val(value);
        }
        else if(value == 0 ){
            $('#findJackVal').show();
            $('#findJackVal').val("");

            $('#referByVal').hide();
            $('#referByVal').val("");
        } else {
            $('#findJackVal').hide();
            $('#findJackVal').val(value);

            $('#referByVal').hide();
            $('#referByVal').val("");
        }
    });

});

function initializePersonalInfo(){
    url = URL + "/getStudentInfo";
        
    var currentParams = {};
    var success = function(data) {
        dataStudentInfo = data;
        $('#studGivenName').val(data.studGivenName);
        $('#studLastName').val(data.studLastName);
        $('#school').val(data.school),
        $('#gradeLevel').val(data.gradeLevel);
        $('#birthdate').val(data.birthdate);
        $('#age').val(data.age);
        $('#ageVal').val(data.age);
        $('#contactPerson').val(data.contactPerson);
        $('#relationship').val(data.relationship);
        $('#parentEmail').val(data.parentEmail);
        $('#parentContactNum').val(data.parentContactNum);
        $('#completeAddress').val(data.completeAddress);
        
        // 'allowPhotograph' : $('#allowPhotograph').is(':checked')  ? 1 : 0,
       
        $('#promo_code').val(data.promo_code);
        populateCodingBackground(data.studentBackground);
        populateFindJack(data.findJack, data.referByVal, data.findJackVal);

        $('#birthdate').change();
    };
    var failure = function(data) {

    };
    
    restApiCallGET(url, currentParams, success, failure, failure);
}

function initializeBirthdatePicker(){
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
}
function getAge(dateString) {
    var today = new Date();
    var birthDate = new Date(dateString);
    var age = today.getFullYear() - birthDate.getFullYear();
    var m = today.getMonth() - birthDate.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
        age--;
    }

    if(isNaN(age))
        return "";
    return age;
}

function populateCodingBackground(codingBackground){
    $("input[name=codingBg][value='" + codingBackground + "']").attr('checked', 'checked');
    if (!$("input[name='codingBg']").is(':checked')) {
       $("input[name=codingBg][value='0']").attr('checked', 'checked');
       $('#studentBackground').show();
    }
    $('#studentBackground').val(codingBackground);
}

function populateFindJack(findJack, referByVal, findJackVal){
    console.log(findJack +" "+findJackVal);
    $("input[name=findJack][value='" + findJack + "']").attr('checked', 'checked');
    if(findJack == "Referred by a friend/Student"){
       $('#referByVal').show();
       $('#referByVal').val(referByVal);
       $('#findJackVal').val(findJack);
    } else if (findJack == 0) {
       $('#findJackVal').show();
       $('#findJackVal').val(findJackVal);
    } else {
       $('#findJackVal').val(findJack);
    }
}


$("body").on("click","#savePersonalInfo",function(e){
    
    $(this).parents("form").attr('action', URL+'/saveStudentInfo');
    console.log($(this).attr('action'));
    $(this).parents("form").ajaxForm(saveStudentInfo);
});

var saveStudentInfo = {
    beforeSubmit:function(formData, jqForm, options){
        
        
        var isCourseComplete = true;
        isCourseComplete = validateFindJack();

        isCourseComplete ? isCourseComplete = validateCodingBg() : getStudentInfoFromInput();;
        
        if(!isCourseComplete){
            // saveStudentInfoAjax();
            return false;
        }

        
    },
    complete: function(response) 
    {

        var data = response.responseJSON;

        if(data.isSuccessful)
            JackBootstrap.openModal("Success", data.result.message, 'primary');
        else
            JackBootstrap.openModal("Error", data.result.message, 'danger');
    }
};

function validateFindJack(){
    var value = $('input[name=findJack]:checked').val();
    if(value == "Referred by a friend/Student" && $('#referByVal').val() == ""){
        $('#referByVal').css('border-color', 'red');
        return false;
    }else if(value == 0 && $('#findJackVal').val() == ""){
        $('#findJackVal').css('border-color', 'red');
        return false;
    }
    $('#findJackVal').css('border-color', '#ccc');

    return true;
}


function validateCodingBg(){
    var value = $('input[name=codingBg]:checked').val();

    if(value == 0 && $('#studentBackground').val() == "" ){
        $('#studentBackground').css('border-color', 'red');
        return false;
    }
    $('#studentBackground').css('border-color', '#ccc');

    return true;
}


function saveStudentInfoAjax(){
    url = URL + "/saveStudentInfo";

    var currentParams = getStudentInfoFromInput();

    var success = function(data) {
    
        if(data.isSuccessful){
            dataStudentInfo = currentParams;
        }
    };
    var failure = function(data) {

    };
    
    restApiCallPOST(url, currentParams, success, failure, failure);
}

function getStudentInfoFromInput(){
    var currentParams = { 
        'studGivenName' : $('#studGivenName').val(),
        'studLastName' : $('#studLastName').val(),
        'school' : $('#school').val(),
        'gradeLevel' : $('#gradeLevel').val(),
        'birthdate' : $('#birthdate').val(),
        'age' : $('#ageVal').val(),
        'codingBackground' : $('#studentBackground').val(),
        'contactPerson' : $('#contactPerson').val(),
        'relationship' : $('#relationship').val(),
        'parentEmail' : $('#parentEmail').val(),
        'parentContactNum' : $('#parentContactNum').val(),
        'completeAddress' : $('#completeAddress').val(),
        'findjack' : $('#findJackVal').val(),
        'allowPhotograph' : $('#allowPhotograph').is(':checked')  ? 1 : 0,
        'courseSelected' : $('#courseSelected').val(),
        'promo_code' : $('#promo_code').val()

    };

    return currentParams;
}


$("body").on("click","#submitRegistration",function(e){

    $('#registerAction').val(currentPage);

    if(currentPage == "New"){
       $('form#personalInfoForm').removeAttr('novalidate');
    } else {
        $('form#personalInfoForm').attr('novalidate','novalidate');
    }

    $('#allowPhotographVal').val($('#allowPhotograph'+currentPage).is(':checked')  ? 1 : 0);

    validateCourseSchedule();

    $('#personalInfoForm').attr('action', URL+'/registerStudent');
    console.log("action "+$('#personalInfoForm').attr('action'));
    $('#personalInfoForm').ajaxForm(registerStudent);
    
});



var registerStudent = { 
    beforeSubmit:function(formData, jqForm, options){


        if(cart.length == 0)
            return false;

        var isCourseComplete = true;
        $("#submitRegistration").prop("disabled", true);
        

        if(currentPage == "New"){
            isCourseComplete = validateFindJack();
            // var currentParams = getStudentInfoFromInput();
        } else {
            isCourseComplete = validateOldStudentForm();
        }

        if(isCourseComplete)
            isCourseComplete = validateCourseSchedule();

    
        if(!isCourseComplete)
            $("#submitRegistration").prop("disabled", false);
        

        console.log("isCourseComplete" +isCourseComplete);

        return isCourseComplete;

    },
    complete: function(response) 
    {

        $("#submitRegistration").prop("disabled", false);
        var data = response.responseJSON;

        console.log(data);

        if(data.isSuccessful){
            JackBootstrap.openModal("Success", data.result, 'primary');

            $('#jackModalClose').click(function() {
                window.location = URL;
            });
        }
        else
            JackBootstrap.openModal("Error", data.result, 'danger');
    }
};


function validateCourseSchedule(){
    var schedules = [];

    for(var x=0; x<cart.length; x++){
        $('#schedule_'+cart[x].courseID).css('border-color', '#ced4da');

        var scheduleID = $('#schedule_'+cart[x].courseID).val();

        console.log(cart[x].courseID +"  =  "+scheduleID);
        if(scheduleID == "0"){
            JackBootstrap.openModal("Validation Error", "Please select schedule", 'danger');
            $('#schedule_'+cart[x].courseID).css('border-color', 'red');
            return false;
        } else {
            schedules.push(scheduleID);
        }
    }

    $('#schedules').val(schedules.join(','));

    return true;
}


function validateOldStudentForm(){
    if(!UtilsCMS.isDefinedAndNotEmpty($('#studentId').val())){
        JackBootstrap.openModal("Validation Error", "Please input student ID", 'danger');

        return false;
    }
    return true;
}

$("body").on("click","#submitForgotStudId",function(e){
    $(this).parents("form").ajaxForm(formForgotStudentId);
});


var formForgotStudentId = {
    beforeSubmit:function(formData, jqForm, options){
        // forgotStudentAjax();
        // return false;

        $("#submitForgotStudId").prop("disabled", true);
    },
    complete: function(response) {
        
        $("#submitForgotStudId").prop("disabled", false);
        var data = response.responseJSON;

        $('#forgotStudentIdModal').modal('hide');
        if(data.isSuccessful){
            JackBootstrap.openModal("Success", data.result, 'primary');
            $('#jackModalClose').click(function() {
                window.location = URL;
            });
        }
        else{
            JackBootstrap.openModal("Error", data.result, 'danger');
            $('#jackModalClose').click(function() {
                $('#forgotStudentIdModal').modal('show');
            });
        }

    }
};
