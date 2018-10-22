<?php  get_header();  global $post; global $chefdeco;?>

<div id="contImgDestacada">
	<img src="<?php echo $chefdeco['imgheader_detaservicio']['url']; ?>" alt="<?php echo the_title(); ?>">
</div>

<?php woocommerce_content(); ?>	

<?php  get_footer();?>