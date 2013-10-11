jQuery(document).ready(function($){
	$(window).resize(function() {
	 var windowWidth = $(window).width();
	 $('.screen-width').text(windowWidth + 'px');
	});
});