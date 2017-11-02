/**
 * Module for displaying "Waiting for..." dialog using Bootstrap
 *
 * @author Eugene Maslovich <ehpc@em42.ru>
 * @modified Jerahmeel Vincent Acebuche
 */

var waitingDialog = waitingDialog || (function ($) {
    'use strict';

	// Creating modal dialog's DOM
	var $dialog = $(
		'<div class="modal fade" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true" style="padding-top:15%; overflow-y:visible;">' +
		'<div class="modal-dialog modal-m">' +
		'<div class="modal-content">' +
			'<div class="modal-header"><button type="button" class="close" data-dismiss="modal">×</button><h3 style="margin:0;"></h3></div>' +
			'<div class="modal-body">' +
				'<div class="progress progress-striped active" style="margin-bottom:0;"><div class="progress-bar" style="width: 100%"></div></div>' +
			'</div>' +
			'<div class="footers"></div>' +
		'</div></div></div>');

	return {
		/**
		 * Opens our dialog
		 * @param message Custom message
		 * @param options Custom options:
		 * 				  options.dialogSize - bootstrap postfix for dialog size, e.g. "sm", "m";
		 * 				  options.progressType - bootstrap postfix for progress bar type, e.g. "success", "warning".
		 */



		show: function (message, options) {
			// Assigning defaults
			if (typeof options === 'undefined') {
				options = {};
			}
			if (typeof message === 'undefined') {
				message = 'Loading';
			}
			var settings = $.extend({
				modalHeader: '',
				dialogSize: 'm',
				dialog: '',
				progressType: '',
				progressFinished: '',
				footer: '',
				timeOut: 0,
				onHide: null // This callback runs after the dialog was hidden
			}, options);

			// Configuring dialog
			$dialog.find('.modal-header').attr('class', 'modal-header');
			$dialog.find('.modal-dialog').attr('class', 'modal-dialog').addClass('modal-' + settings.dialogSize);
			$dialog.find('.modal-body').html('<div class="progress progress-striped active" style="margin-bottom:0;"><div class="progress-bar" style="width: 100%"></div></div>');
			$dialog.find('.footers').attr('class', 'footers').html("");
			$dialog.find('.progress-bar').attr('class', 'progress-bar')
			$dialog.find('.progress').attr('class', 'progress').addClass('progress-striped active');

			if(settings.progressType) {
				$dialog.find('.progress-bar').addClass('progress-bar-' + settings.progressType);
			}
			if(settings.modalHeader) {
				$dialog.find('.modal-header').addClass('modal-header-'+settings.modalHeader);
			}
			if(settings.progressFinished){
				$dialog.find('.progress').removeClass('active progress-striped');
			}
			if(settings.dialog) {
				$dialog.find('.modal-body').html("<p>"+settings.dialog+"</p>");
			}
			if(settings.footer) {
				$dialog.find('.footers').addClass('modal-footer').html('<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>');
			}
			if(settings.timeOut) {
				setTimeout(function(){
					$dialog.modal('hide');
				}, settings.timeOut);
			}
			$dialog.find('h3').text(message);
			// Adding callbacks
			if (typeof settings.onHide === 'function') {
				$dialog.off('hidden.bs.modal').on('hidden.bs.modal', function (e) {
					settings.onHide.call($dialog);
				});
			}
			// Opening dialog
			$dialog.modal();

			

		},
		/**
		 * Closes dialog
		 */
		hide: function () {
			$dialog.modal('hide');
		}
	};

})(jQuery);
$(document.body)
.on('show.bs.modal', function () {
    if (this.clientHeight <= window.innerHeight) {
        return;
    }
    // Get scrollbar width
    var scrollbarWidth = getScrollBarWidth()
    if (scrollbarWidth) {
        $(document.body).css('padding-right', scrollbarWidth);
        $('.navbar-fixed-top').css('padding-right', scrollbarWidth);    
    }
})
.on('hidden.bs.modal', function () {
    $(document.body).css('padding-right', 0);
    $('.navbar-fixed-top').css('padding-right', 0);
});

function getScrollBarWidth () {
    var inner = document.createElement('p');
    inner.style.width = "100%";
    inner.style.height = "200px";

    var outer = document.createElement('div');
    outer.style.position = "absolute";
    outer.style.top = "0px";
    outer.style.left = "0px";
    outer.style.visibility = "hidden";
    outer.style.width = "200px";
    outer.style.height = "150px";
    outer.style.overflow = "hidden";
    outer.appendChild (inner);

    document.body.appendChild (outer);
    var w1 = inner.offsetWidth;
    outer.style.overflow = 'scroll';
    var w2 = inner.offsetWidth;
    if (w1 == w2) w2 = outer.clientWidth;

    document.body.removeChild (outer);

    return (w1 - w2);
};