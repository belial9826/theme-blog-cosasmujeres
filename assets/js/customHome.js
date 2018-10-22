jQuery(document).ready(function($) {

	$('.bxslider').bxSlider({

	        mode: 'fade',
	        preloadImages: 'all',
	        speed: 3400,	
	        easing: 'ease-in',
	        controls: false,  
	        infiniteLoop: true,
	        adaptiveHeight:false,
	        captions: true,
	        video: false,
	        responsive: true,
	        pager: false,
	        pagerCustom: '#bx-pager',
	        pagerType: 'full',
	        controls: false,
	        auto: true,
	        autoStart: true,    
	        autoHover: false,
	        autoDelay: 2500,
	        stopAuto:false

	});
});