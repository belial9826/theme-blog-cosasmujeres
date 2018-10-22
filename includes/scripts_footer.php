<?php global $chefdeco; ?>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/google-analytics.js"></script>

<?php echo $chefdeco['cod_analytics'] ?>
<?php echo $chefdeco['cod_pixel'] ?> 
<?php echo $chefdeco['cod_chat'] ?> 

<link href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.min.css" rel="stylesheet">

<script async type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/slick/slick.min.js"></script>

<link async rel="stylesheet"  type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/js/slick/slick.css"/>
<link async rel="stylesheet"  type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/js/slick/slick-theme.css"/>


<?php if (is_single()) { ?>
<script async>
	jQuery(document).ready(function($) {

		var alto = 0;

		$('#carru_relacionados').slick({
			dots: false,
			arrows: false,
			slidesToShow: 2,
			slidesToScroll: 1,
			autoplay: true,
			speed: 1500,
			autoplaySpeed: 3000,
			responsive: [{
				breakpoint: 1024,
				settings: {
				slidesToShow: 2,
				slidesToScroll: 1,
				infinite: !0,
				dots: !0
				}
				},{
				breakpoint: 780,
				settings: {
				slidesToShow: 1,
				slidesToScroll: 1
				}
				}, {
				breakpoint: 600,
				settings: {
				slidesToShow: 1,
				slidesToScroll: 1
				}
				}, {
				breakpoint: 480,
				settings: {
				slidesToShow: 1,
				slidesToScroll: 1
				}
			}]
		});

		$(window).load(function() {
			/* Act on the event */

			if (screen.width > 768) {

				/*$("#carru_relacionados img").each(function(index, el) {
					if ($(this).height()>= alto) {
						alto = $(this).height();
					}
				});

				$("#carru_relacionados img").height(alto);*/

			}

			
		});
	});	

</script>
<?php } ?>
