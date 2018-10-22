<?php global $chefdeco; ?>


<div class="carruSlider" id="carruSliderTit">
	<?php	

		$args = array(
		'post_type' => array( 'post' ),
		'orderby' => 'ASC',
		'cat' => $chefdeco["sel_cattitPreheader"]
		);
		
		$loop = new WP_Query( $args );
		if ( $loop->have_posts() ) :
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<div>
				<article class="hentry">
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
					<a href="<?php the_permalink(); ?>"><h4 class="title entry-title"><?php echo get_the_title(); ?></h4></a>
				</article>
				
			</div>
			<?php endwhile;
		endif;
	
	
	wp_reset_postdata();
	?>	
</div>

