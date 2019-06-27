$('#pic-changer').change(function(){ //if the select value gets changed
    var imageSource = $(this).val(); //get the selected value
    if(imageSource && imageSource != ""){ //if it has data
       $('#image-location').html('<img src="'+imageSource+'">'); // insert image in div image-location
    } else {
       $('#image-location').html(''); //remove content from div image-location, thus removing the image
    }
 })
