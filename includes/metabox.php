<?php 
/*Custom Metabox*/


/*Metabox Testimonio*/

function cmb2_testimonios() {

    $prefix = 'cmb2_testimonio_';

    $cmb = new_cmb2_box( array(
        'id'           => $prefix.'datos_adicionales',
        'title'        => 'Datos Adicionales',
        'object_types' => array( 'testimonio' ),
        'show_names'   => true
    ) );
    
    $cmb->add_field( array(
        'name'    => 'Imagen del autor',
        'desc'    => 'Carga una imagen o usa una URL',
        'id'      => $prefix.'imagen',
        'type'    => 'file',
        // Optional:
        'options' => array(
        'url' => false, // Hide the text input for the url
        ),
        /*'text'    => array(
        'add_upload_file_text' => 'Add File' // Change upload button text. Default: "Add or Upload File"
        ),*/
        // query_args are passed to wp.media's library query.
        /*'query_args' => array(
        'type' => 'application/pdf', // Make library only display PDFs.
        ),*/
    ) );

    $cmb->add_field( array(
        'name' => 'Texto Enlace Autor',
        'id'   => $prefix.'txt_enlace',
        'type' => 'text',
        'desc' => 'Escribe el texto del enlace del autor del testimonio.',
    ) );

    $cmb->add_field( array(
        'name' => 'URL Enlace Autor',
        'id'   => $prefix.'enlace',
        'type' => 'text_url',
        'desc' => 'Escribe el enlace del autor del testimonio.',
    ) );

}
add_action( 'cmb2_admin_init', 'cmb2_testimonios' );


/*Metabox pagina FAQ*/

add_action( 'cmb2_init', 'metaBox_FAQ' );
function metaBox_FAQ() {   

    $prefix = 'cmb_pageFAQ_';

        $cmb = new_cmb2_box( array(
            'id'            => $prefix . 'metabox',
            'title'         => 'Datos Adicionales', 
            'object_types' => array( 'page' ), // post type
            'show_on'      => array( 'key' => 'page-template', 'value' => 'page-faq.php' ),
            'context'      => 'normal',
            'priority'     => 'high',
            'show_names'   => true
        ) );

        $cmb->add_field( array(
            'name'    => 'Imagen de Fondo',
            'desc'    => 'Carga una imagen o usa una URL',
            'id'      => $prefix.'imgSeccion1',
            'type'    => 'file',
            // Optional:
            'options' => array(
                'url' => false, // Hide the text input for the url
            ),
            /*'text'    => array(
                'add_upload_file_text' => 'Add File' // Change upload button text. Default: "Add or Upload File"
            ),*/
            // query_args are passed to wp.media's library query.
            /*'query_args' => array(
                'type' => 'application/pdf', // Make library only display PDFs.
            ),*/
        ) );

        $cmb->add_field( array(
            'name'    => 'Titulo de la pagina',
            'desc'    => '',
            'default' => '',
            'id'      => $prefix.'titPagina',
            'type'    => 'text',
        ) );
   
}


/*Metabox pagina PQR*/

add_action( 'cmb2_init', 'metaBox_PQR' );
function metaBox_PQR() {   

    $prefix = 'cmb_pagePQR_';

        $cmb = new_cmb2_box( array(
            'id'            => $prefix . 'metabox',
            'title'         => 'Datos Adicionales', 
            'object_types' => array( 'page' ), // post type
            'show_on'      => array( 'key' => 'page-template', 'value' => 'page-pqr.php' ),
            'context'      => 'normal',
            'priority'     => 'high',
            'show_names'   => true
        ) );

        $cmb->add_field( array(
            'name'    => 'Imagen de Fondo',
            'desc'    => 'Carga una imagen o usa una URL',
            'id'      => $prefix.'imgSeccion1',
            'type'    => 'file',
            // Optional:
            'options' => array(
                'url' => false, // Hide the text input for the url
            ),
            /*'text'    => array(
                'add_upload_file_text' => 'Add File' // Change upload button text. Default: "Add or Upload File"
            ),*/
            // query_args are passed to wp.media's library query.
            /*'query_args' => array(
                'type' => 'application/pdf', // Make library only display PDFs.
            ),*/
        ) );

        $cmb->add_field( array(
            'name'    => 'Titulo de la pagina',
            'desc'    => '',
            'default' => '',
            'id'      => $prefix.'titPagina',
            'type'    => 'text',
        ) );
   
}


/*Metabox pagina Servicios*/

add_action( 'cmb2_init', 'metaBox_servicios' );
function metaBox_servicios() {   

    $prefix = 'cmb_pageservicios_';

        $cmb = new_cmb2_box( array(
            'id'            => $prefix . 'metabox',
            'title'         => 'Datos Adicionales', 
            'object_types' => array( 'page' ), // post type
            'show_on'      => array( 'key' => 'page-template', 'value' => 'page-servicios.php' ),
            'context'      => 'normal',
            'priority'     => 'high',
            'show_names'   => true
        ) );

        $cmb->add_field( array(
            'name'    => 'Imagen de Fondo',
            'desc'    => 'Carga una imagen o usa una URL',
            'id'      => $prefix.'imgSeccion1',
            'type'    => 'file',
            // Optional:
            'options' => array(
                'url' => false, // Hide the text input for the url
            ),            
        ) );
   
}


/*Metabox pagina Cotizacion*/

add_action( 'cmb2_init', 'metaBox_cotizacion' );
function metaBox_cotizacion() {   

    $prefix = 'cmb_pagecotizacion_';

        $cmb = new_cmb2_box( array(
            'id'            => $prefix . 'metabox',
            'title'         => 'Datos Adicionales', 
            'object_types' => array( 'page' ), // post type
            'show_on'      => array( 'key' => 'page-template', 'value' => 'page-cotizacion.php' ),
            'context'      => 'normal',
            'priority'     => 'high',
            'show_names'   => true
        ) );

        $cmb->add_field( array(
            'name'    => 'Imagen de Fondo',
            'desc'    => 'Carga una imagen o usa una URL',
            'id'      => $prefix.'imgSeccion1',
            'type'    => 'file',
            // Optional:
            'options' => array(
                'url' => false, // Hide the text input for the url
            ),            
        ) );
   
}


/*Metabox pagina Vision y Mision*/

add_action( 'cmb2_init', 'metaBox_misionvision' );
function metaBox_misionvision() {   

    $prefix = 'cmb_pagemisionvision_';

        $cmb = new_cmb2_box( array(
            'id'            => $prefix . 'metabox',
            'title'         => 'Datos Adicionales', 
            'object_types' => array( 'page' ), // post type
            'show_on'      => array( 'key' => 'page-template', 'value' => 'page-visionmision.php' ),
            'context'      => 'normal',
            'priority'     => 'high',
            'show_names'   => true
        ) );

        $cmb->add_field( array(
            'name'    => 'Imagen de Fondo Sección 1',
            'desc'    => 'Carga una imagen o usa una URL',
            'id'      => $prefix.'imgSeccion1',
            'type'    => 'file',
            // Optional:
            'options' => array(
                'url' => false, // Hide the text input for the url
            ),            
        ) );

        $cmb->add_field( array(
            'name'    => 'Imagen de Fondo Sección 2',
            'desc'    => 'Carga una imagen o usa una URL',
            'id'      => $prefix.'imgSeccion2',
            'type'    => 'file',
            // Optional:
            'options' => array(
                'url' => false, // Hide the text input for the url
            ),            
        ) );

        $cmb->add_field( array(
            'name'    => 'Texto Sección 2',
            'desc'    => 'Escribe el texto a mostrar en la segunda sección',
            'id'      => $prefix.'texto_seccion2',
            'type'    => 'wysiwyg',
            'options' => array(
                'wpautop' => true, // use wpautop?
                'media_buttons' => true, // show insert/upload button(s)
                'textarea_name' => $editor_id, // set the textarea name to something different, square brackets [] can be used here
                'textarea_rows' => get_option('default_post_edit_rows', 10), // rows="..."
                'tabindex' => '',
                'editor_css' => '', // intended for extra styles for both visual and HTML editors buttons, needs to include the `<style>` tags, can use "scoped".
                'editor_class' => '', // add extra class(es) to the editor textarea
                'teeny' => false, // output the minimal editor config used in Press This
                'dfw' => false, // replace the default fullscreen with DFW (needs specific css)
                'tinymce' => true, // load TinyMCE, can be used to pass settings directly to TinyMCE using an array()
                'quicktags' => true // load Quicktags, can be used to pass settings directly to Quicktags using an array()
            ),
        ) );
   
}


/*Metabox datos abogados*/

add_action( 'cmb2_init', 'metaBox_datosabogado' );
function metaBox_datosabogado() {   

    $prefix = 'cmb_datosabogado_';

        $cmb = new_cmb2_box( array(
            'id'            => $prefix . 'metabox',
            'title'         => 'Información Adicional', 
            'object_types'  => array( 'abogado' ), // post type
            'context'       => 'normal',
            'priority'      => 'high',
            'show_names'    => true
        ) );

        $cmb->add_field( array(
            'name'    => 'Titulo del abogado',
            'desc'    => '',
            'default' => '',
            'id'      => $prefix.'titabogado',
            'type'    => 'text',
        ) );

        $cmb->add_field( array(
            'name'    => 'Teléfono del abogado',
            'desc'    => '',
            'default' => '',
            'id'      => $prefix.'telabogado',
            'type'    => 'text',
        ) );

        $cmb->add_field( array(
            'name'    => 'E-Mail del abogado',
            'desc'    => '',
            'default' => '',
            'id'      => $prefix.'mailabogado',
            'type'    => 'text',
        ) );

        $cmb->add_field( array(
            'name' => 'Redes Sociales',
            'desc' => 'Ingresa las url de las redes sociales del profesional',
            'type' => 'title',
            'id'   => $prefix.'titseccredes',
        ) );

        $cmb->add_field( array(
            'name'    => 'Facebook',
            'desc'    => '',
            'default' => '',
            'id'      => $prefix.'facebook',
            'type'    => 'text_url',
        ) );
        $cmb->add_field( array(
            'name'    => 'Instagram',
            'desc'    => '',
            'default' => '',
            'id'      => $prefix.'instagram',
            'type'    => 'text_url',
        ) );
        $cmb->add_field( array(
            'name'    => 'Twitter',
            'desc'    => '',
            'default' => '',
            'id'      => $prefix.'twitter',
            'type'    => 'text_url',
        ) );
   
}


/*Metabox pagina quienes somos*/

add_action( 'cmb2_init', 'metaBox_quienessomos' );
function metaBox_quienessomos() {   

    $prefix = 'cmb_pagequienessomos_';

        $cmb = new_cmb2_box( array(
            'id'            => $prefix . 'metabox',
            'title'         => 'Datos Adicionales', 
            'object_types' => array( 'page' ), // post type
            'show_on'      => array( 'key' => 'page-template', 'value' => 'page-quienessomos.php' ),
            'context'      => 'normal',
            'priority'     => 'high',
            'show_names'   => true
        ) );

        $cmb->add_field( array(
            'name' => 'Texto Principal',
            'desc' => 'Ingresa la información adicional de la primera sección.',
            'type' => 'title',
            'id'   => $prefix.'titSecc1',
        ) );

        $cmb->add_field( array(
            'name'    => 'Imagen de Fondo Sección 1',
            'desc'    => 'Carga una imagen o usa una URL',
            'id'      => $prefix.'imgSeccion1',
            'type'    => 'file',
            // Optional:
            'options' => array(
                'url' => false, // Hide the text input for the url
            ),            
        ) );

        $cmb->add_field( array(
            'name'    => 'Titulo',
            'desc'    => '',
            'default' => '',
            'id'      => $prefix.'titseccion1',
            'type'    => 'text',
        ) );

        $cmb->add_field( array(
            'name' => 'Sección equipo de trabajo',
            'desc' => 'Ingresa la información adicional de la segunda sección.',
            'type' => 'title',
            'id'   => $prefix.'titSecc2',
        ) );

        $cmb->add_field( array(
            'name'    => 'Texto Sección 2',
            'desc'    => 'Escribe el texto a mostrar en la segunda sección',
            'id'      => $prefix.'texto_seccion2',
            'type'    => 'wysiwyg',
            'options' => array(
                'wpautop' => true, // use wpautop?
                'media_buttons' => true, // show insert/upload button(s)
                'textarea_name' => $editor_id, // set the textarea name to something different, square brackets [] can be used here
                'textarea_rows' => get_option('default_post_edit_rows', 10), // rows="..."
                'tabindex' => '',
                'editor_css' => '', // intended for extra styles for both visual and HTML editors buttons, needs to include the `<style>` tags, can use "scoped".
                'editor_class' => '', // add extra class(es) to the editor textarea
                'teeny' => false, // output the minimal editor config used in Press This
                'dfw' => false, // replace the default fullscreen with DFW (needs specific css)
                'tinymce' => true, // load TinyMCE, can be used to pass settings directly to TinyMCE using an array()
                'quicktags' => true // load Quicktags, can be used to pass settings directly to Quicktags using an array()
            ),
        ) );

        $cmb->add_field( array(
            'name' => 'Sección 3',
            'desc' => 'Ingresa la información adicional de la tercera sección.',
            'type' => 'title',
            'id'   => $prefix.'titSecc3',
        ) );

        $cmb->add_field( array(
            'name'    => 'Titulo',
            'desc'    => '',
            'default' => '',
            'id'      => $prefix.'titseccion3',
            'type'    => 'text',
        ) );

        $cmb->add_field( array(
            'name'    => 'Imagen de Fondo Sección 3',
            'desc'    => 'Carga una imagen',
            'id'      => $prefix.'imgSeccion3',
            'type'    => 'file',
            // Optional:
            'options' => array(
                'url' => false, // Hide the text input for the url
            ),            
        ) );

        $cmb->add_field( array(
            'name'    => 'Imagen bloque 1',
            'desc'    => 'Carga una imagen ',
            'id'      => $prefix.'imgBloque1Seccion3',
            'type'    => 'file',
            // Optional:
            'options' => array(
                'url' => false, // Hide the text input for the url
            ),            
        ) );

        $cmb->add_field( array(
            'name'    => 'Texto sección 3 bloque 1',
            'desc'    => 'Escribe el texto a mostrar en la tercera sección',
            'id'      => $prefix.'textoBloque1seccion3',
            'type'    => 'wysiwyg',
            'options' => array(
                'wpautop' => true, // use wpautop?
                'media_buttons' => true, // show insert/upload button(s)
                'textarea_name' => $editor_id, // set the textarea name to something different, square brackets [] can be used here
                'textarea_rows' => get_option('default_post_edit_rows', 10), // rows="..."
                'tabindex' => '',
                'editor_css' => '', // intended for extra styles for both visual and HTML editors buttons, needs to include the `<style>` tags, can use "scoped".
                'editor_class' => '', // add extra class(es) to the editor textarea
                'teeny' => false, // output the minimal editor config used in Press This
                'dfw' => false, // replace the default fullscreen with DFW (needs specific css)
                'tinymce' => true, // load TinyMCE, can be used to pass settings directly to TinyMCE using an array()
                'quicktags' => true // load Quicktags, can be used to pass settings directly to Quicktags using an array()
            ),
        ) );

        $cmb->add_field( array(
            'name'    => 'Imagen bloque 2',
            'desc'    => 'Carga una imagen ',
            'id'      => $prefix.'imgBloque2Seccion3',
            'type'    => 'file',
            // Optional:
            'options' => array(
                'url' => false, // Hide the text input for the url
            ),            
        ) );

        $cmb->add_field( array(
            'name'    => 'Texto sección 3 bloque 2',
            'desc'    => 'Escribe el texto a mostrar en la tecera sección',
            'id'      => $prefix.'textoBloque2seccion3',
            'type'    => 'wysiwyg',
            'options' => array(
                'wpautop' => true, // use wpautop?
                'media_buttons' => true, // show insert/upload button(s)
                'textarea_name' => $editor_id, // set the textarea name to something different, square brackets [] can be used here
                'textarea_rows' => get_option('default_post_edit_rows', 10), // rows="..."
                'tabindex' => '',
                'editor_css' => '', // intended for extra styles for both visual and HTML editors buttons, needs to include the `<style>` tags, can use "scoped".
                'editor_class' => '', // add extra class(es) to the editor textarea
                'teeny' => false, // output the minimal editor config used in Press This
                'dfw' => false, // replace the default fullscreen with DFW (needs specific css)
                'tinymce' => true, // load TinyMCE, can be used to pass settings directly to TinyMCE using an array()
                'quicktags' => true // load Quicktags, can be used to pass settings directly to Quicktags using an array()
            ),
        ) );

        $cmb->add_field( array(
            'name'    => 'Imagen bloque 3',
            'desc'    => 'Carga una imagen ',
            'id'      => $prefix.'imgBloque3Seccion3',
            'type'    => 'file',
            // Optional:
            'options' => array(
                'url' => false, // Hide the text input for the url
            ),            
        ) );

        $cmb->add_field( array(
            'name'    => 'Texto sección 3 bloque 1',
            'desc'    => 'Escribe el texto a mostrar en la tecera sección',
            'id'      => $prefix.'textoBloque3seccion3',
            'type'    => 'wysiwyg',
            'options' => array(
                'wpautop' => true, // use wpautop?
                'media_buttons' => true, // show insert/upload button(s)
                'textarea_name' => $editor_id, // set the textarea name to something different, square brackets [] can be used here
                'textarea_rows' => get_option('default_post_edit_rows', 10), // rows="..."
                'tabindex' => '',
                'editor_css' => '', // intended for extra styles for both visual and HTML editors buttons, needs to include the `<style>` tags, can use "scoped".
                'editor_class' => '', // add extra class(es) to the editor textarea
                'teeny' => false, // output the minimal editor config used in Press This
                'dfw' => false, // replace the default fullscreen with DFW (needs specific css)
                'tinymce' => true, // load TinyMCE, can be used to pass settings directly to TinyMCE using an array()
                'quicktags' => true // load Quicktags, can be used to pass settings directly to Quicktags using an array()
            ),
        ) );
   
}


/*Metabox pagina CONTACTO*/

add_action( 'cmb2_init', 'metaBox_Contacto' );
function metaBox_Contacto() {   

    $prefix = 'cmb_pageContacto_';

        $cmb = new_cmb2_box( array(
            'id'            => $prefix . 'metabox',
            'title'         => 'Datos Adicionales', 
            'object_types' => array( 'page' ), // post type
            'show_on'      => array( 'key' => 'page-template', 'value' => 'page-contacto.php' ),
            'context'      => 'normal',
            'priority'     => 'high',
            'show_names'   => true
        ) );

        $cmb->add_field( array(
            'name' => 'Texto Sección 1',
            'id' => $prefix.'textSeccion1',
            'type'    => 'wysiwyg',
            'options' => array(
                'textarea_rows' => 12,
                'media_buttons' => false,
            ),
        ) );

        $cmb->add_field( array(
            'name' => 'Texto Sección 2',
            'id' => $prefix.'textSeccion2',
            'type'    => 'wysiwyg',
            'options' => array(
                'textarea_rows' => 12,
                'media_buttons' => false,
            ),
        ) );

        $cmb->add_field( array(
            'name'            => __( 'Iframe Google Maps', 'cmb2' ),
            'desc'            => __( 'Copia el iframe en Google Maps, y pegalo en este campo', 'cmb2' ),
            'id'              => $prefix . 'google_maps',
            'type'            => 'wysiwyg',
            'options'         => array( 'textarea_rows' => 5, ),
            'sanitization_cb' => false,
        ) );
}