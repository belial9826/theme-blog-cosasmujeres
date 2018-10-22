<?php 

// Remove Canonical Link Added By Yoast WordPress SEO Plugin
function at_remove_dup_canonical_link() {
return false;
}
add_filter( 'wpseo_canonical', 'at_remove_dup_canonical_link' );


add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
	add_theme_support( 'woocommerce' );
}

add_theme_support('post-thumbnails', array('post', 'page'));


if ( file_exists( get_template_directory() . '/cmb2/init.php' ) ) {
  require_once  get_template_directory() . '/cmb2/init.php';
} elseif ( file_exists(  get_template_directory() . '/CMB2/init.php' ) ) {
  require_once  get_template_directory() . '/CMB2/init.php';
}

function identiClassB(){

	$clasCss = "";

	if(is_home() || is_front_page()) {
		$clasCss .= "bodyHome ";
	}

	if(is_single( )){
		if (is_singular("servicios" )) {
			$clasCss .= "bodyServicios ";
		}
		else if (is_singular("faq" )) {
			$clasCss .= "bodyFAQ ";
		}
		else if (is_singular("foro" )) {
			$clasCss .= "bodyForo ";
		}else $clasCss .= "bodyPost ";
	}

	if (is_page( )) {
		$clasCss .= "bodyPage page-".get_the_ID()." ";
	}

	if(is_page_template()){
		$nombPT = get_post_meta( get_the_ID(), '_wp_page_template', true );
		$clasCss .= "bodyPageTemplate pageTemplate-".substr($nombPT, 0, -4)." ";
	}

	if(is_category( )){
		$clasCss .= "bodyCate ";
	}

	if(is_tag()){
		$clasCss .= "bodyTag ";
	}

	if ( is_user_logged_in() ) {		
		$clasCss .= "logged-in ";
	}

	/*if ( is_woocommerce() ) { $clasCss .= " woocommerce"; }

	if (is_cart()) {
		$clasCss .= " cartWoo";
	}

	if (is_account_page()) {
		$clasCss .= " cuentaWoo";
	}

	if (is_checkout()) {
		$clasCss .= " finalizarWoo";
	}*/

	

	echo "class='".$clasCss."'";
}


function redsocial_comun() { 

	global $chefdeco;

	$msg = "";

	if ($chefdeco['url_social_facebook']!= "") {
		$msg .= '<a href="'.$chefdeco['url_social_facebook'].'" target="_blank" class="icon-button facebook"><i class="fa fa-facebook"></i><span></span></a>';
	}
	if ($chefdeco['url_social_twitter']!= "") {
		$msg .= '<a href="'.$chefdeco['url_social_twitter'].'" target="_blank" class="icon-button twitter"><i class="fa fa-twitter"></i><span></span></a>';
	}
	if ($chefdeco['url_social_youtube']!= "") {
		$msg .= '<a href="'.$chefdeco['url_social_youtube'].'" target="_blank" class="icon-button youtube"><i class="fa fa-youtube"></i><span></span></a>';
	}	
	if ($chefdeco['url_social_googleplus']!= "") {
		$msg .= '<a href="'.$chefdeco['url_social_googleplus'].'" target="_blank" class="icon-button google-plus"><i class="fa fa-google-plus"></i><span></span></a>';
	}

	echo $msg;

}


function logo_header() {

	global $chefdeco;

	$msg = "";


	if ($chefdeco['chk_act_logo']==1 && $chefdeco['img_logo_header']['url']!="") {
		if (is_home() || is_front_page() ) {
			$msg .= "<a href='".site_url()."'><h1 class='tituloH'><img src='".$chefdeco['img_logo_header']['url']."' alt='HTF Asesores' title='HTF Asesores'></h1></a>";
		}else{
			$msg .= "<a href='".site_url()."'><img src='".$chefdeco['img_logo_header']['url']."' alt='HTF Asesores' title='HTF Asesores'></a>";
		}
	}else{
		if (is_home() || is_front_page() ) {
			$msg .= "<a href='".site_url()."'><h1 class='tituloH'>".get_bloginfo( 'name' )."</h1> <h2 class='subtiH'>".get_bloginfo( 'description' )."</h2></a>"; 
		}else{
			$msg .= "<a href='".site_url()."'><h2 class='tituloH'>".get_bloginfo( 'name' )."</h2> <h3 class='subtiH'>".get_bloginfo( 'description' )."</h3></a>"; 
		}
		
	}

	echo $msg;

}


function resumenPerso($limit) {
	

	$content = wp_strip_all_tags(get_the_content() , true );
    echo wp_trim_words($content, $limit);
     
     /*$content = explode(' ', get_the_content(), $limit);
	  if (count($content)>=$limit) {
	    array_pop($content);
	    $content = implode(" ",$content).'...';
	  } else {
	    $content = implode(" ",$content);
	  }	
	  $content = preg_replace('/[.+]/','', $content);
	  $content = apply_filters('the_content', $content); 
	  $content = str_replace(']]>', ']]&gt;', $content);*/

	  return strip_tags($excerpt);
}


/*Widgets*/

add_filter('widget_text','do_shortcode');

function widget_post() {

	register_sidebar( array(
		'name'          => 'Lateral Derecha',
		'id'            => 'post_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) ); 
}

add_action( 'widgets_init', 'widget_post' );



/*Publicidad Sitio*/

function publi_header(){

	global $chefdeco;
	$msj = "";

	if (!wp_is_mobile()) {
		$msj = $chefdeco['cod_header_pc'];
	}else{
		$msj = $chefdeco['cod_header_movil'];
	}

	return $msj;
}


/*Publicidad post, categoria, etiquetas*/


function publi_bloquehome(){

	global $chefdeco;
	$msj = "";

	if (!wp_is_mobile()) {
		$msj = $chefdeco['cod_bloque2_pc'];
	}else{
		$msj = $chefdeco['cod_bloque2_movil'];
	}

	return $msj;

}


function publi_bloque1categoria(){

	global $chefdeco;
	$msj = "";

	if (!wp_is_mobile()) {
		$msj = $chefdeco['cod_categoria_pc1'];
	}else{
		$msj = $chefdeco['cod_categoria_movil1'];
	}

	return $msj;
}

function publi_bloque2categoria(){

	global $chefdeco;
	$msj = "";

	if (!wp_is_mobile()) {
		$msj = $chefdeco['cod_categoria_pc2'];
	}else{
		$msj = $chefdeco['cod_categoria_movil2'];
	}

	return $msj;
}

function publi_bloque1Etiqueta(){

	global $chefdeco;
	$msj = "";

	if (!wp_is_mobile()) {
		$msj = $chefdeco['cod_etiqueta_pc1'];
	}else{
		$msj = $chefdeco['cod_etiqueta_movil1'];
	}

	return $msj;
}

function publi_bloque2Etiqueta(){

	global $chefdeco;
	$msj = "";

	if (!wp_is_mobile()) {
		$msj = $chefdeco['cod_etiqueta_pc2'];
	}else{
		$msj = $chefdeco['cod_etiqueta_movil2'];
	}

	return $msj;
}