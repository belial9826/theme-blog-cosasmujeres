<div class="carruSlider" id="carru_relacionados">
	<?php
		$cpt_cats = get_the_category();
		$cpt_cat = $cpt_cats[0]->term_id;
		$args = array(
			'orderby' => 'ASC',
			'post_per_page' => 6,
			'cat' => $cpt_cat,
			'post__not_in' => array(get_the_ID()),
		);
		$loop = new WP_Query( $args );
		if ( $loop->have_posts() ) :
	while ( $loop->have_posts() ) : $loop->the_post(); ?>
	<div>
		<div class="cont-post col-md-12 col-sm-12 col-xs-12">
			<article class="disTable hentry">

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
				<div class="contImgz">
					<a href="<?php the_permalink(); ?>" rel="nofollow"> <?php the_post_thumbnail('large', array('class' => 'imgz')); ?> </a>
				</div>
				<div class="info-texto disTable entry entry-content">
					<a href="<?php the_permalink(); ?>"><h3 class="title entry-title"><?php echo strip_tags(substr(get_the_title(), 0, 40)); ?></h3></a>
					<p><?php echo strip_tags(substr(get_the_content( ), 0, 70)); ?></p>
				</div>
				<a href="<?php the_permalink(); ?>" class="btnTransGris btnBoxShadow">Leer más...</a>
			</article>
		</div>
	</div>
	<?php endwhile;
	endif;
	
	
	wp_reset_postdata();
	?>
	
</div>

