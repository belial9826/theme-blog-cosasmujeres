<?php

/*Shortcode Temas de Interes Paginado*/
function funcshort_listapostwidget($atts) {

	ob_start();

	// Valores recibidos
	$atts = shortcode_atts(
		array(
			'nume' => '',
			'pagi' => '',
			'tipo' => '',
		),
		$atts
	);

	$numepost = 4;
	$longitxt = 90;
	$tipo = 'post';	

	$args = array(
		'post_type'=> $tipo,
		'orderby' => 'post_date',
		'post__not_in' => array(get_the_ID()),
		'posts_per_page' => $numepost
	);

	$loopnotishort = new WP_Query($args);
	?>

	<div class="clearfix"></div>
	<div id="post-widgetshort" class="disInlineB">
		<?php
		if ( $loopnotishort->have_posts() ) :
			while ( $loopnotishort->have_posts() ) : $loopnotishort->the_post(); ?>
			<div class="artinoti disInlineB" >
				
				<article class="disTable">

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
						<span class="category">en <?php echo $categorias; ?></span>
						
						<span class="comentario">
							<?php /*mostrar_comentarios();*/ ?>
						</span>
					</div>

					<a href="<?php the_permalink(); ?>" rel="follow" title="<?php echo get_the_title(); ?>">

					<div class="contimg disTable" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')"> </div>

					<div class="continfo disTable">
						<div class="cont-titulo disTable">
							<h3 class="the-title title"><?php echo substr(strip_tags(get_the_title()), 0, 47) ?>...</h3>
						</div>
						<div class="texto disTable text-justify">
							<p class="resumen">
								<?php echo substr(strip_tags(get_the_content()), 0, $longitxt) ?>...
							</p>
						</div>
					</div>
					</a>
				</article>
				

			</div>
			<?php
			endwhile;
		endif;
		
		?>
		<div class="clearfix"></div>		
		<script>
			jQuery(document).ready(function($) {
				
			});
		</script>
	</div>
<?php	
	wp_reset_postdata();
    wp_reset_query(); 

	return ob_get_clean();
}
add_shortcode('shortpost_widget', 'funcshort_listapostwidget');