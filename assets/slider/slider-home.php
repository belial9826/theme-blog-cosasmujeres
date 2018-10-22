<?php global $chefdeco; ?>

<!-- Cargando script slider home -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>

<!-- Cargando estilos slider home -->
<link async rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css">
<link async rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.theme.default.css">

<div class="owl-carousel owl-theme" id="sliderHome">
	<?php
		$args = array(
		'cat' => $chefdeco["sel_catbloque1home"],
		'orderby' => 'ASC',
		'posts_per_page'=>5
		);
		$loop = new WP_Query( $args );
		if ( $loop->have_posts() ) :
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<div class="info-slider disTable">
					<div class="contInfo">
						<article class="hentry">

							<div itemscope itemtype="http://schema.org/NewsArticle" class="hidden">
								<meta itemscope itemprop="mainEntityOfPage"  itemType="https://schema.org/WebPage" itemid="https://google.com/article"/>
								<h2 itemprop="headline"><?php echo get_the_title(); ?></h2>
								<h3 itemprop="author" itemscope itemtype="https://schema.org/Person">
								By <span itemprop="name"><?php the_author(); ?></span>
								</h3>
								<span itemprop="description"><?php echo substr(strip_tags($post->post_content), 0, 181);?>...</span>
								<div itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
									<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>"/>
									<meta itemprop="url" content="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>">
									<meta itemprop="width" content="800">
									<meta itemprop="height" content="800">
								</div>
								<div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
									<div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
										<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>"/>
										<meta itemprop="url" content="https://google.com/logo.jpg">
										<meta itemprop="width" content="600">
										<meta itemprop="height" content="60">
									</div>
									<meta itemprop="name" content="Google">
								</div>
								<meta itemprop="datePublished" content="<?php echo get_the_date( 'd/m/Y' ); ?>"/>
								<meta itemprop="dateModified" content="<?php echo get_the_date( 'd/m/Y' ); ?>"/>
							</div>

							<div class="entry-meta hidden">
								<span class="vcard author">
									Por <span class="fn" ><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php echo get_the_author_meta( 'first_name' )." ".get_the_author_meta( 'last_name' ) ?></a> </span>
								</span>
								<span class="meta_date updated">publicado el <?php echo get_the_date( 'd/m/Y' ); ?> </span>
								<span class="category">en <?php echo $category[0]->cat_name; ?></span>
								
								<span class="comentario">
									<?php //mostrar_comentarios(); ?>
								</span>
							</div>
							<a href="<?php the_permalink(); ?>" rel="nofollow">
								<div class="contimg disTable" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
									<div>									
										<h3 class="title entry-title"><?php echo get_the_title(); ?></h3>									
									</div>
								</div>	
							</a>						
						</article>
					</div>
				</div>
	<?php endwhile;
		endif;

		wp_reset_postdata();
	?>
</div>

<script>
	jQuery(document).ready(function($) {
		var alto = 0;		
        $("#sliderHome").owlCarousel({
            loop: true,
            autoplay: true,
            dots: false,
            navSpeed: 3000,
            smartSpeed: 3000,
            fluidSpeed: 3500,
            stagePadding: 0,
            nav: false,
            navText: ["<img src='<?php echo get_template_directory_uri(); ?>/assets/imagenes/bnt-next.png'>", "<img src='<?php echo get_template_directory_uri(); ?>/assets/imagenes/bnt-next.png'>"],
            margin: 0,
            items: 3,
            responsive: {
                // breakpoint from 0 up
                0: {
                    items: 1,
                },
                // breakpoint from 480 up
                480: {
                    items: 1,
                },
                // breakpoint from 768 up
                768: {
                    items: 2,
                },
                // breakpoint from 1150 up
                1150: {
                    items: 3,
                }
            }
        });

		$(window).load(function() {			
		});
	});
</script>