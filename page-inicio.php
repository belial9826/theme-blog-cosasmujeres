<?php /* Template Name: Inicio */ ?>

<?php global $chefdeco; get_header(); ?>


<?php if ($chefdeco['chk_most_bloque1home']==1) { ?>
	<div id="cont-sliderhome" class="disInlineB">
		<?php get_template_part( 'assets/slider/slider-home' ); ?>
	</div>
<?php } ?>

<div id="infoHome" class="cont-informacion disInlineB">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="cont-articulo ">					
					<?php

						$nume_art = 4;
						$nume_resu = 40;
						$adcounter = 0;

						if ($chefdeco['nume_bloque2home']!=""  && $chefdeco['nume_bloque2home'] <= 4) {
							$nume_art = $chefdeco['nume_bloque2home'];
						}

						if ($chefdeco['numeresu_bloque2home'] < 40 ) {
							$nume_resu = $chefdeco['numeresu_bloque2home'];
						}

						$args = array(
						'orderby' => 'ASC',
						'posts_per_page'=> $nume_art
						);
						$loop = new WP_Query( $args );
						if ( $loop->have_posts() ) :
							while ( $loop->have_posts() ) : $loop->the_post(); ?>

							<?php $categories = get_the_category();
							$separator = ' ';
							$output = '';
							if ( ! empty( $categories ) ) {
								foreach( $categories as $category ) {
								$output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'Ver todos los articulos en %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
								}
							$categorias = trim( $output, $separator );
							} ?>

								<?php if ($adcounter == 2) { ?>

									<div class="secc-public-center disTable text-center">
										<?php echo publi_bloquehome(); ?>
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
											<div class="categoria">
												<i class="fa fa-bookmark-o" aria-hidden="true"></i>
												<h4 class="categoria-post"><?php echo $categorias; ?></h4>
											</div>
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
						wp_reset_postdata();
					?>
				</div>
			</div>

			<div class="col-md-4">
				<?php get_template_part( 'template-parts/lateral-derecha' ); ?>
			</div>
		</div>
	</div>
</div>

<div class="ultimos-post disTable">
	<div class="container">
		<div class="row">


			
			
		</div>
	</div>
</div>

<?php get_footer(); ?>