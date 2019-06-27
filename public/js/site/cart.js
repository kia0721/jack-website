
$("body").on("click","#addNewCourse",function(e){
	window.location.href= URL + "/program";
});

$("body").on("click","#continueToRegistration",function(e){

	for(var x=0; x < cart.length; x++){
		cart[x].scheduleID = $('#schedule_'+cart[x].courseID).val();
	}

	url = URL + "/saveSchedule";
    
    var currentParams = { schedule: cart };

    var success = function(data) {
    
        if(data.isSuccessful){
            cart = data.result.cart;

            // console.log(cart);
            window.location.href= URL + "/register";
        }
    };
    var failure = function(data) {

    };
    
    restApiCallPOST(url, currentParams, success, failure, failure);

	
});

function populateSavedCourses(){
	for(var x=0; x < cart.length; x++){
		var wish = cart[x];
		var wishCourseContainer = UtilsCMS.applyTemplate($.wishCourseContainer, {
            id: wish.courseID,
            icon: URL + "/assets/images/courses/logos/" +wish.icon,
            courseTitle: wish.courseTitle,
            description: wish.courseDescription,
            price: UtilsCMS.numberWithCommas(wish.fee)
        });
    	$('#courseListContainer').append(wishCourseContainer);
	}

	if(cart.length == 0){
		$('#continueToRegistration').hide();
	} else {
        getCourseSchedule();
	}
}
$("body").on("click",".removeCourse",function(e){
    e.preventDefault();
    var courseId = $(this).data( "courseId" );
   
    url = URL + "/removeSaveCourse";
    
    var currentParams = {
        id: courseId
    };
    var success = function(data) {

        $('#alertMessage').html(data.result.message);
        $("#success-alert").hide();
        $("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
            $("#success-alert").slideUp(500);
        });

    
        if(data.isSuccessful){
            cart = data.result.cart;
            updateNotification();

            $('#container_'+courseId).remove();

            if(cart.length == 0){
            	$('#continueToRegistration').hide();
                $('#submitRegistration').hide();
            }
        }
    };
    var failure = function(data) {

    };
    
    restApiCallGET(url, currentParams, success, failure, failure);
});


function getCourseSchedule(){
	url = URL + "/getCourseSchedule";
    var currentParams = {
    };
    var success = function(data) {
    	console.log(data);
        
        for(var x=0; x<data.length; x++){
        	var course = data[x];

        	console.log("#schedule_"+course.courseID);
            var option = "";
            if(course.strDate == null || course.strDate == "")
        	   option = formatDate(course.startDate) +' - '+ formatDate(course.endDate);
            else 
               option = course.strDate;
            
            $("#schedule_"+course.courseID).append('<option value='+course.courseScheduleId+'>'+ option +'</option>');
            
        }

        for(var x=0; x < cart.length; x++){

            if(UtilsCMS.isDefined(cart[x].scheduleID))
			     $('#schedule_'+cart[x].courseID).val(cart[x].scheduleID);
            else
                $('#schedule_'+cart[x].courseID).val(0);
		}
        
    };
    var failure = function(data) {

    };
	restApiCallGET(url, currentParams, success, failure, failure);
}


function formatDate(date){
	return moment(date.toString()).format("MM/DD/YYYY");
}
