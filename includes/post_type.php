<?php 


/********* Custom Post Type Servicios *********/

/*add_action( 'init', 'posttype_servicios' );

function posttype_servicios() {
	$labels = array(
	'name' => _x( 'Servicios', 'post type general name' ),
        'singular_name' => _x( 'Servicio', 'post type singular name' ),
        'add_new' => _x( 'Añadir nuevo', 'book' ),
        'add_new_item' => __( 'Añadir nuevo Servicio' ),
        'edit_item' => __( 'Editar Servicio' ),
        'new_item' => __( 'Nuevo Servicio' ),
        'view_item' => __( 'Ver Servicio' ),
        'search_items' => __( 'Buscar Servicios' ),
        'not_found' =>  __( 'No se han encontrado Servicios' ),
        'not_found_in_trash' => __( 'No se han encontrado Servicios en la papelera' ),
        'parent_item_colon' => ''
    );

    $args = array( 'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );
 
    register_post_type( 'servicios', $args ); 
}*/

add_action( 'init', 'posttype_servicio' );

function posttype_servicio() {
    register_post_type( 'servicio',
    array(
        'labels' => array(
        'name' => __( 'Servicios' ),
        'singular_name' => __( 'Servicio' )
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    )
    );
}

add_action( 'init', 'posttype_testimonio' );

function posttype_testimonio() {
    register_post_type( 'testimonio',
    array(
        'labels' => array(
        'name' => __( 'Testimonios' ),
        'singular_name' => __( 'Testimonio' )
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    )
    );
}

add_action( 'init', 'posttype_abogado' );

function posttype_abogado() {
    register_post_type( 'abogado',
    array(
        'labels' => array(
        'name' => __( 'Abogados' ),
        'singular_name' => __( 'Abogado' )
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    )
    );
}

// Lo enganchamos en la acción init y llamamos a la función create_book_taxonomies() cuando arranque
//add_action( 'init', 'posttype_catetoria_servicios', 0 );	 
 
// Creamos dos taxonomías, género y autor para el custom post type "libro"
/*function posttype_catetoria_servicios() {

	$labels = array(
		'name' => _x( 'Categorias', 'taxonomy general name' ),
		'singular_name' => _x( 'Categoria', 'taxonomy singular name' ),
		'search_items' =>  __( 'Buscar por Categoria' ),
		'all_items' => __( 'Todos los Categorias' ),
		'parent_item' => __( 'Categoria padre' ),
		'parent_item_colon' => __( 'Categoria padre:' ),
		'edit_item' => __( 'Editar Categoria' ),
		'update_item' => __( 'Actualizar Categoria' ),
		'add_new_item' => __( 'Añadir nuevo Categoria' ),
		'new_item_name' => __( 'Nombre del nuevo Categoria' ),
	); 

	register_taxonomy( 'categoria-servicio', array( 'servicios' ), array(
		'hierarchical' => true,
		'labels' => $labels, 
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'categoria-servicio' ),
	));
	
} 
*/


/********* Custom Post Type FAQ *********/

add_action( 'init', 'posttype_faq' );

function posttype_faq() {
	$labels = array(
	'name' => _x( 'FAQs', 'post type general name' ),
        'singular_name' => _x( 'FAQ', 'post type singular name' ),
        'add_new' => _x( 'Añadir nuevo', 'book' ),
        'add_new_item' => __( 'Añadir nuevo FAQ' ),
        'edit_item' => __( 'Editar FAQ' ),
        'new_item' => __( 'Nuevo FAQ' ),
        'view_item' => __( 'Ver FAQ' ),
        'search_items' => __( 'Buscar FAQs' ),
        'not_found' =>  __( 'No se han encontrado FAQs' ),
        'not_found_in_trash' => __( 'No se han encontrado FAQs en la papelera' ),
        'parent_item_colon' => ''
    );
 
    // Creamos un array para $args
    $args = array( 'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );
 
    register_post_type( 'faq', $args ); /* Registramos y a funcionar */
}


/*add_action( 'init', 'posttype_catetoria_faq', 0 );	 

function posttype_catetoria_faq() {
	$labels = array(
		'name' => _x( 'Categorias', 'taxonomy general name' ),
		'singular_name' => _x( 'Categoria', 'taxonomy singular name' ),
		'search_items' =>  __( 'Buscar por Categoria' ),
		'all_items' => __( 'Todos los Categorias' ),
		'parent_item' => __( 'Categoria padre' ),
		'parent_item_colon' => __( 'Categoria padre:' ),
		'edit_item' => __( 'Editar Categoria' ),
		'update_item' => __( 'Actualizar Categoria' ),
		'add_new_item' => __( 'Añadir nuevo Categoria' ),
		'new_item_name' => __( 'Nombre del nuevo Categoria' ),
	); 

	register_taxonomy( 'categoria-faq', array( 'faq' ), array(
		'hierarchical' => true,
		'labels' => $labels, 
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'categoria-faq' ),
	));
	
} */



/********* Custom Post Type Foro *********/

add_action( 'init', 'posttype_foro' );

function posttype_foro() {
	$labels = array(
	'name' => _x( 'Foro', 'post type general name' ),
        'singular_name' => _x( 'Foros', 'post type singular name' ),
        'add_new' => _x( 'Añadir nuevo', 'foro' ),
        'add_new_item' => __( 'Añadir nuevo Foro' ),
        'edit_item' => __( 'Editar Foro' ),
        'new_item' => __( 'Nuevo Foro' ),
        'view_item' => __( 'Ver Foro' ),
        'search_items' => __( 'Buscar Foro' ),
        'not_found' =>  __( 'No se han encontrado Foro' ),
        'not_found_in_trash' => __( 'No se han encontrado Foro en la papelera' ),
        'parent_item_colon' => ''
    );
 
    // Creamos un array para $args
    $args = array( 'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );
 
    register_post_type( 'foro', $args ); /* Registramos y a funcionar */
}

/*add_action( 'init', 'posttype_catetoria_foro', 0 );	 
 

function posttype_catetoria_foro() {

	$labels = array(
		'name' => _x( 'Categorias', 'taxonomy general name' ),
		'singular_name' => _x( 'Categoria', 'taxonomy singular name' ),
		'search_items' =>  __( 'Buscar por Categoria' ),
		'all_items' => __( 'Todos los Categorias' ),
		'parent_item' => __( 'Categoria padre' ),
		'parent_item_colon' => __( 'Categoria padre:' ),
		'edit_item' => __( 'Editar Categoria' ),
		'update_item' => __( 'Actualizar Categoria' ),
		'add_new_item' => __( 'Añadir nuevo Categoria' ),
		'new_item_name' => __( 'Nombre del nuevo Categoria' ),
	); 

	register_taxonomy( 'categoria-foro', array( 'foro' ), array(
		'hierarchical' => true,
		'labels' => $labels, 
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'categoria-foro' ),
	));
	
} */



