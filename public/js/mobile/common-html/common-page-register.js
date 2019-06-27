$.wishCourseContainer = 
'<div class="row " id="container_{id}">'+
	'<div class="col-md-12 wishCourse">'+
		'<div class="row ">' +
			'<div class="col-md-12 col-xs-12 py-1 text-center">' +
				'<img src="{icon}" class="img-responsive"><br>' +
				'<button class="jack-btn btn-red removeCourse" data-course-id="{id}" id="remove_{id}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>' +
			'</div>'+
			'<div class="col-md-12 col-xs-12 py-3">'+
	        	'<h4 class="courseTitle">{courseTitle}</h4>'+
				'<p>{description}</p>'+
				'<p>&#8369; {price}</p>'+
				'<div class="row ">'+
	        		'<div class="col-md-12">'+
	        			'<select id="schedule_{id}" class="form-control">'+
						  '<option value="0" >Please select schedule</option>'+
						'</select>'+
					'</div>'+
				'</div>'
			'</div>'+
		'</div>'+
	'</div>'+
'</div>';