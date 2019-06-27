var UtilsCMS = {};

UtilsCMS.applyTemplate = function (html, varObj) {
    var newHtml = html;

    for (var textToReplace in varObj) {
        newHtml = newHtml.replace(new RegExp("{"+textToReplace+"}","g"), varObj[textToReplace]);
    }

    return newHtml;
};

UtilsCMS.isDefined = function (obj) {
    return (typeof obj !== "undefined" && obj !== null);
};
UtilsCMS.isEmpty = function(str) {
    return (!str);
};

UtilsCMS.isDefinedAndNotEmpty = function (obj) {
    return (this.isDefined(obj) && !this.isEmpty(obj));
       
    
};

UtilsCMS.numberWithCommas = function(x) {

    if(UtilsCMS.isDefined(x))
        return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");

    return 0;
}

var restApiCallGET = function (url, urlParams, success, failure, error, async) {
    var currentUrl = url;
    var currentUrlParams = jQuery.param(urlParams);
    var currentAsync = UtilsCMS.isDefined(async) ? async : true;

    if (UtilsCMS.isDefined(currentUrlParams) && currentUrlParams !== ""){
        currentUrl = currentUrl + "?" + currentUrlParams;
    }

    if (!UtilsCMS.isDefined(error)) {
        error = failure;
    }

    $.ajax({
        type: "GET",
        url: currentUrl,
        async: currentAsync,
        success: success,
        failure: failure,
        error: error,
        headers: {
	    	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	 	}
    });
};


var restApiCallPOST = function (url, dataObject, success, failure, error, async) {
    var currentUrl = url;
    var currentData = dataObject;
    var currentAsync = UtilsCMS.isDefined(async) ? async : true;

    if (!UtilsCMS.isDefined(error)) {
        error = failure;
    }

    $.ajax({
        type: "POST",
        url: currentUrl,
        data: JSON.stringify(currentData),
        contentType: "application/json; charset=utf-8",
        async: currentAsync,
        success: success,
        failure: failure,
        error: error,
        headers: {
	    	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	 	}
    });
};


JackBootstrap = {};

JackBootstrap.openModal = function(title, message, headerColor){
    $('#jackModal .modal-header').attr('class', 'modal-header modal-'+headerColor);
    $('#jackModal .modal-title').html(title);
    $('#jackModal .modal-body').html(message);
    $('#jackModal').modal('show');
    $('#jackModalClose').attr('class', 'btn btn-'+headerColor);

};

JackBootstrap.closeModal = function(){
    $('#jackModal').modal('hide');
};