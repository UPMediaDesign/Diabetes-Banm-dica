
(function($){
	
$(document).ready(function() {
	
	

	svgeezy.init(false, 'png');

			jQuery('a[href^="#"]').on('click', function(event) {
				var target = jQuery( jQuery(this).attr('href') );

				if( target.length ) {
					event.preventDefault();
					jQuery('html, body').animate({
						scrollTop: target.offset().top - 50
					}, 1000);
				}
			});

	


});
})(jQuery);	
	
	