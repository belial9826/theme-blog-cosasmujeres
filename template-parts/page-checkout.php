<?php  get_header(); global $chefdeco; ?>
<div id="contImgDestacada">
	<img src="<?php echo $chefdeco['imgheader_compra']['url']; ?>" alt="<?php echo the_title(); ?>">
</div>
<div class="container">
	<div class="row">		

		<div class="col-md-12 col-sm-12 col-xs-12">
			<article class="infoPost col-lg-12 col-md-12 col-sm-12 col-xs-12" id="infoArticulos">
				<?php if (have_posts()) : while (have_posts()) : the_post();?>
				
				<a href="<?php the_permalink(); ?>" ><h1 class="the-title title entry-title"><?php the_title() ;?></h1></a>
				<div class="entry-meta hidden">
					<span class="meta_date updated"><?php the_date();?> / </span>
					<span class="vcard author">
						Por <span class="fn"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a> / </span>
					</span>
					<span class="comentario">
						<?php //mostrar_comentarios(); ?>
					</span>
				</div>
				<!-- <div class="item">
					<a href="<?php //the_permalink(); ?>" rel="nofollow"> <figure><?php //echo get_the_post_thumbnail( ); ?></figure> </a>
					<div class="item-overlay top"></div>
				</div> -->

				<div class="divPadding">
					<div class="entry entry-content paddInfo">
						<?php the_content(); ?>
						
					</div><!--/.entry-->
					<?php	endwhile;
						
					endif; ?>
					
				</div>		
				
			</article>				
		</div>
		
	</div>
</div>


<?php  get_footer();?>