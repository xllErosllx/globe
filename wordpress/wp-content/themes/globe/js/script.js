(function(document, window , $){
	/* submenu-depegable*/
	$('.dropdown-toggle').dropdown();

	/* slide */
	$(document).ready(function(){
		$(".slider").slick({
			prevArrow: '.slider-container .slick-prev',
			nextArrow: '.slider-container .slick-next',
		});
	});
})(document, window, jQuery)
