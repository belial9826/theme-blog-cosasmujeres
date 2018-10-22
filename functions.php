<?php 

// Libreria para instalar plugins requeridos por el theme

if (is_admin())
include locate_template('/includes/class-tgm-plugin-activation.php');

/*Cargar plugins requeridos por el theme*/
include locate_template('/includes/plugins_required.php');

/*Opciones de la plantilla*/
//include locate_template('/includes/options-theme/sample-config.php');

/*Opciones de la plantilla*/
include locate_template('/includes/options-theme/options_theme.php');

/*Todas las funciones para mostrar contenido y demas, estan dentro de este archivo.*/
include locate_template('/includes/functions_theme.php');

/*Todas las funciones para mostrar shortcodes.*/
include locate_template('/includes/shortcodes.php');


/*Creacion Custom post type*/
//include locate_template('/includes/post_type.php');

/*Creacion Meta Box*/
//include locate_template('/includes/metabox.php');


/*Menu Responsive*/
if (!is_admin())
	include('includes/wp_bootstrap_navwalker.php');



/*Menu de la plantilla*/
function mosesMenu() {

	register_nav_menus(
	array(
	'footer_nav' => __( 'Footer Menu', 'bootpress' ),
	'top_menu' => __( 'Top Menu', 'bootpress' ),
	'pre_header_menu' => __( 'Pre Header', 'bootpress' )
	)
	);
}
add_action( 'after_setup_theme', 'mosesMenu' );



/*Carga de scripts y estilos*/
function loadCSS (){

	if( !is_admin() ){

		/*Load CSS*/

		/*register bootstrap*/
		wp_register_style('moses_normalizeCss',  get_template_directory_uri() . '/assets/css/normalize.css', true);
		wp_enqueue_style('moses_normalizeCss');

		wp_register_style('moses_bootstrapCss',  get_template_directory_uri() . '/assets/css/bootstrap.min.css', true);
		wp_enqueue_style('moses_bootstrapCss');

		wp_register_style('moses_Style',  get_template_directory_uri() . '/style.css', true);
		wp_enqueue_style('moses_Style');

		wp_register_style('moses_responsive_Style',  get_template_directory_uri() . '/assets/css/cosasparamujeres-responsive.css', true);
		wp_enqueue_style('moses_responsive_Style');	

		if (is_home() || is_front_page()) {
			/*wp_register_style('moses_bxSliderCSS',  get_template_directory_uri() . '/assets/css/animate.css', '', '', true);
			wp_enqueue_style('moses_bxSliderCSS');*/
		}

		if (!is_admin()) {
			/*wp_register_style('moses_font_awesome',  get_template_directory_uri() . '/assets/css/font-awesome.css', true);
			wp_enqueue_style('moses_font_awesome');*/
		}

	}	
}
add_action("wp_enqueue_scripts", "loadCSS");




function loadJS() {

	if ( !is_admin() ) {

    	/*Load JS*/

    	// comment out the next two lines to load the local copy of jQuery
		//wp_deregister_script('jquery');
		/*wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js', false, '1.9.1', true);
		wp_enqueue_script('jquery');*/

		/*bootstrap*/
		/*wp_register_script('moses_bootstrapJs', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '', true );
		wp_enqueue_script('moses_bootstrapJs');*/

		if (is_home() || is_front_page()) {
			/*wp_register_script('moses_animate', get_template_directory_uri() . '/assets/js/css3-animate-it.js',array('jquery'), true );
			wp_enqueue_script('moses_animate');*/
		}	
	}
}

add_action( 'wp_enqueue_scripts', 'loadJS' );


/**
 * Header cleanup
 */
function theme_cleanup() {
	remove_action('wp_head', 'wp_generator');
	remove_action('wp_head', 'feed_links', 2);
	remove_action('wp_head', 'feed_links_extra', 3);
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
	remove_action('wp_head', 'index_rel_link');
	remove_action('wp_head', 'parent_post_rel_link', 10, 0);
	remove_action('wp_head', 'start_post_rel_link', 10, 0);
	remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
}
add_action('after_setup_theme', 'theme_cleanup', 16);


/**
 * Removes WordPress version from scripts
 */
function theme_remove_version_code($src) {
	if (strpos($src, 'ver=') !== false) {
		$src = remove_query_arg('ver', $src);
	}
	return $src;
}
add_filter('style_loader_src', 'theme_remove_version_code', 99);
add_filter('script_loader_src', 'theme_remove_version_code', 99);


// Custom Scripting to Move JavaScript from the Head to the Footer

function remove_head_scripts() { 
   remove_action('wp_head', 'wp_print_scripts'); 
   remove_action('wp_head', 'wp_print_head_scripts', 9); 
   remove_action('wp_head', 'wp_enqueue_scripts', 1);

   add_action('wp_footer', 'wp_print_scripts', 5);
   add_action('wp_footer', 'wp_enqueue_scripts', 5);
   add_action('wp_footer', 'wp_print_head_scripts', 5); 
} 
add_action( 'wp_enqueue_scripts', 'remove_head_scripts' );


if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
}

// END Custom Scripting to Move JavaScript


/*Funcion para añadir el favicon desde el admin del theme*/

function add_my_favicon() {
   global $chefdeco;
   $favicon_path = $chefdeco['med_favicon']['url'];

   echo "<link rel='shortcut icon' href='$favicon_path' />";
}

add_action( 'wp_head', 'add_my_favicon' ); //front end
add_action( 'admin_head', 'add_my_favicon' ); //admin end



/*Shortcode año actual*/

function anio_actual() {
 return date('Y');
}
add_shortcode('cy', 'anio_actual');


/*Shortcode Redes Sociales*/

function most_redes_sociales() {
	global $chefdeco;

	$msg = "";

	if ($chefdeco['url_social_facebook']!= "") {
		$msg .= '<a href="'.$chefdeco['url_social_facebook'].'" target="_blank" class="icon-button facebook"><i class="fa fa-facebook"></i><span></span></a>';
	}
	if ($chefdeco['url_social_twitter']!= "") {
		$msg .= '<a href="'.$chefdeco['url_social_twitter'].'" target="_blank" class="icon-button twitter"><i class="fa fa-twitter"></i><span></span></a>';
	}
	if ($chefdeco['url_social_pinterest']!= "") {
		$msg .= '<a href="'.$chefdeco['url_social_pinterest'].'" target="_blank" class="icon-button pinterest"><i class="fa fa-pinterest"></i><span></span></a>';
	}
	if ($chefdeco['url_social_youtube']!= "") {
		$msg .= '<a href="'.$chefdeco['url_social_youtube'].'" target="_blank" class="icon-button youtube"><i class="fa fa-youtube"></i><span></span></a>';
	}	
	if ($chefdeco['url_social_googleplus']!= "") {
		$msg .= '<a href="'.$chefdeco['url_social_googleplus'].'" target="_blank" class="icon-button google-plus"><i class="fa fa-google-plus"></i><span></span></a>';
	}

	return $msg;
}
add_shortcode('redes_sociales', 'most_redes_sociales');