$(document).ready(function(){
	$('.saveToCartBtn').click(function() {
        var courseBtn = $(this);
        var courseId = $(this).data( "courseId" );
        var status = $(this).data( "status" );
        var url = "saveToCart";
        
        if(status){
            url = "removeSaveCourse";
        }

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

                if(status){
                    courseBtn.html("Add to cart");
                    courseBtn.data( "status", false );
                } else {
                    courseBtn.html("Remove from cart");
                    courseBtn.data( "status", true );

                }

                cart = data.result.cart;
                updateNotification();
                
            }
            
        };
        var failure = function(data) {

        };
        
        restApiCallGET(url, currentParams, success, failure, failure);
    });
});

function populateSavedCourses(){
    for(var x=0; x < cart.length; x++){
        var course = cart[x];

        $('#'+course.courseID).data("status", true);
        $('#'+course.courseID).html("Remove from cart");
    }

}