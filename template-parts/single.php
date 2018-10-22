<?php global $chefdeco; $prefix = 'cmb_pageblog_'; get_header(); ?>

<!-- <div id="img-principal" class="disInlineB">
	<a href="<?php /*the_permalink();*/ ?>" rel="nofollow">
		<div class="contImgz">
			<?php /*echo get_the_post_thumbnail( );*/ ?>
		</div>
	</a>
</div> -->

<div id="infoPost" class="cont-informacion disInlineB">
	<div class="container">
		<div class="row">
			<div class="col-md-8">

				<div class="cont-articulo">
					<article class="infoPost col-lg-12 col-md-12 col-sm-12 col-xs-12 hentry" id="infoArticulos">
						<?php if (have_posts()) : while (have_posts()) : the_post();  $category = get_the_category( $id ); ?>
						
						<h1 class="the-title title entry-title"><?php the_title() ;?></h1>

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
						
						<!-- <div class="item">
							<a href="<?php //the_permalink(); ?>" rel="nofollow">  </a>
							<div class="item-overlay top"></div>
						</div> -->
						<div class="divPadding">
							<div class="entry entry-content paddInfo">
								<?php the_content(); ?>
								
								</div><!--/.entry-->
								<?php	endwhile;
								
								endif; ?>
								
								<div class="clearfix"></div>
								<div class="tagPost">
									<?php the_tags(); ?>
								</div> 
								<div class="clearfix"></div>

								<div id="articulos-relacionados" class="disInlineB">
									<?php get_template_part('assets/carrusel/relacionados'); ?>
								</div>


								<?php comments_template(); ?>
							</div>
							
					</article>
				</div>
			</div>

			<div class="col-md-4">
				<?php get_template_part( 'template-parts/lateral-derecha' ); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>