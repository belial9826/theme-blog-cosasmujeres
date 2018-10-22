<?php global $chefdeco; get_header();  ?>


<div class="jumbotron disTable text-center tit-taxonomia">
	<h1>Está viendo articulos etiquetados con <?php echo single_cat_title(); ?></h1>
	<?php echo tag_description(); ?>
</div>

<div id="infoEtiqueta" class="cont-informacion disInlineB">
	<div class="container">
		<div class="row">
			<div class="col-md-8">

				<div class="cont-articulo">
					<?php
						$nume_resu = 40;
						$adcounter = 0;

						if ($chefdeco['numeresu_bloque2home']< 40 ) {
							$nume_resu = $chefdeco['numeresu_bloque2home'];
						}
						if ( have_posts() ) :
							while ( have_posts() ) : the_post(); ?>

								<?php if ($adcounter == 2) { ?>

									<div class="secc-public-center disTable text-center">
										<?php echo publi_bloque1categoria(); ?>
									</div>
									
								<?php } ?>

								<?php if ($adcounter == 4) { ?>

									<div class="secc-public-center disTable text-center">
										<?php echo publi_bloque2categoria(); ?>
									</div>
									
								<?php } ?>

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

										<div class="info-articulo">											
											<a href="<?php the_permalink(); ?>"><h3 class="title entry-title"><?php echo get_the_title(); ?></h3></a>
											<div class="datos">
												<p><?php echo get_the_date( 'd/m/Y' ); ?></p>
												<span> | </span>
												<p><?php echo get_the_author_meta( 'first_name' )." ".get_the_author_meta( 'last_name' ) ?></p>
											</div>
										</div>
										<div class="contImgz">
											<a href="<?php the_permalink(); ?>" rel="nofollow"> <?php the_post_thumbnail('large', array('class' => 'imgz')); ?> </a>
										</div>
										<div class="info-texto disTable">
											
											<p><?php echo resumenPerso($nume_resu); ?></p>
										</div>
										<a href="<?php the_permalink(); ?>" class="btnTransGris btnBoxShadow">Continuar leyendo</a>
									</article>
								</div>							
					<?php $adcounter++; endwhile;
						endif;
					?>

					<?php // Wordpress Pagination
					$big = 999999999; // need an unlikely integer
					$links = paginate_links( array(
						'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
						'format' => '?paged=%#%',
						'current' => max( 1, get_query_var('paged') ),
						'total' => $wp_query->max_num_pages,
						'prev_text'    => '<',
						'next_text'    => '>',
						'type' => 'array'
					) );
					if(!empty($links)){ ?>
					<ul class="pagination">
						<?php
						foreach($links as $link){
						?>
						<li><?php echo $link; ?></li>
						<?php
						}
						wp_reset_query(); wp_reset_postdata();?>
					</ul>
					<?php } ?>
				</div>
			</div>

			<div class="col-md-4">
				<?php get_template_part( 'template-parts/lateral-derecha' ); ?>
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>