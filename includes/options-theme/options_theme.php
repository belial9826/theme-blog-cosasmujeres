<?php

    /**
     * ReduxFramework Barebones Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "chefdeco";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => '1.0',
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'Opciones', 'redux-framework-demo' ),
        'page_title'           => __( 'Opciones', 'redux-framework-demo' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => false,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => false,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => false,
        // Show the time the page took to load, etc
        'update_notice'        => false,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '_options',
        // Page slug used to denote the panel
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!

        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        //'compiler'             => true,

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'light',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

    // ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.
/*    $args['admin_bar_links'][] = array(
        'id'    => 'redux-docs',
        'href'  => 'http://docs.reduxframework.com/',
        'title' => __( 'Documentation', 'redux-framework-demo' ),
    );

    $args['admin_bar_links'][] = array(
        'id'    => 'redux-support',
        'href'  => 'https://github.com/ReduxFramework/redux-framework/issues',
        'title' => __( 'Support', 'redux-framework-demo' ),
    );

    $args['admin_bar_links'][] = array(
        'id'    => 'redux-extensions',
        'href'  => 'reduxframework.com/extensions',
        'title' => __( 'Extensions', 'redux-framework-demo' ),
    );*/

    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
    /*$args['share_icons'][] = array(
        'url'   => 'https://github.com/ReduxFramework/ReduxFramework',
        'title' => 'Visit us on GitHub',
        'icon'  => 'el el-github'
        //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
    );*/
    /*$args['share_icons'][] = array(
        'url'   => 'https://www.facebook.com/jagonzalez.org/',
        'title' => 'Sigueme en Facebook',
        'icon'  => 'el el-facebook'
    );
    $args['share_icons'][] = array(
        'url'   => 'https://twitter.com/belial9826',
        'title' => 'Follow us on Twitter',
        'icon'  => 'el el-twitter'
    );
    $args['share_icons'][] = array(
        'url'   => 'https://co.linkedin.com/in/juliangonzalezvillanueva',
        'title' => 'Find us on LinkedIn',
        'icon'  => 'el el-linkedin'
    );*/

    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
        //$args['intro_text'] = sprintf( __( '<p>Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: <strong>$%1$s</strong></p>', 'redux-framework-demo' ), $v );
    } else {
        //$args['intro_text'] = __( '<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'redux-framework-demo' );
    }

    // Add content after the form.
    //$args['footer_text'] = __( '<p>This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.</p>', 'redux-framework-demo' );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */

    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'redux-framework-demo' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'redux-framework-demo' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'redux-framework-demo' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    /*

        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


     */

    


    /*Header del sitio*/
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Header', 'redux-framework-demo' ),
        'id'     => 'confHeaderGeneral',
        'desc'   => __( 'Configuración de la apariencia del header.', 'redux-framework-demo' ),
        'icon'   => 'el el-chevron-up',        
    ) ); 

    Redux::setSection( $opt_name, array(
        'title'  => __( 'Header', 'redux-framework-demo' ),
        'id'     => 'confHeader',
        'subsection'    => true,
        'desc'   => __( 'Configuración para mostrar titulo, imagen, publicidad, etc.', 'redux-framework-demo' ),
        'fields' => array(
            array(
                'id'       => 'chk_act_logo',
                'type'     => 'checkbox',
                'title'    => __('Mostrar logo en el header', 'redux-framework-demo'), 
                'subtitle' => __('', 'redux-framework-demo'),
                'desc'     => __('Si esta marcado el check, se mostrará el logo en el header. En caso contrario se muestra titulo y descripcion del sitio', 'redux-framework-demo'),
                'default'  => '1'// 1 = on | 0 = off
            ),
            array(
                'id'       => 'img_logo_header',
                'type'     => 'media',
                'url'      => true,
                'title'    => __( 'Imagen del logo en el header', 'redux-framework-demo' ),
                'compiler' => 'true',
                //'mode'      => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'desc'     => __( 'Carga la imagen que se mostrará en el logo. Tamaño recomendado: 155px x 150px.', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'default'  => array( 'url' => 'http://s.wordpress.org/style/images/codeispoetry.png' ),
                'hint'      => array(
                    'title'     => '',
                    'content'   => 'Tamaño recomendado: 1000px x 464px.',
                )
            ),
        )
    ) ); 


    /*Footer del sitio*/
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Footer', 'redux-framework-demo' ),
        'id'     => 'confFooter',
        'desc'   => __( 'Configuración de las opciones del footer.', 'redux-framework-demo' ),
        'icon'   => 'el el-chevron-down',        
    ) );   

    Redux::setSection( $opt_name, array(
        'title'         => __( 'Pre Footer', 'redux-framework-demo' ),
        'id'            => 'confPreFooter',
        'subsection'    => true,
        'desc'          => __( 'Configuración datos del Pre Footer.', 'redux-framework-demo' ),
        'fields' => array( 
            array(
                'id'       => 'chk_act_prefooter',
                'type'     => 'checkbox',
                'title'    => __('Mostrar Pre Footer en el sitio ', 'redux-framework-demo'), 
                'subtitle' => __('', 'redux-framework-demo'),
                'desc'     => __('Si esta marcado el check, se mostrará el Pre Footer del sitio.', 'redux-framework-demo'),
                'default'  => '1'// 1 = on | 0 = off
            ),
            array(
               'id' => 'start_col1_prefooter',
               'type' => 'section',
               'title' => __('Columna 1', 'redux-framework-demo'),
               'subtitle' => __('Configura el texto, opciones y demas información de que se visualiza en la primera columna del Pre Footer.', 'redux-framework-demo'),
               'indent' => true 
            ),             
            array(
                'id'               => 'text_info_col1',
                'type'             => 'editor',
                'title'            => __('Texto de información de la sección del Pre Footer en la primer columna', 'redux-framework-demo'), 
                'subtitle'         => __('Digita el texto a mostrar de la columna 1.', 'redux-framework-demo'),
                'default'          => '',
                'args'   => array(
                    'teeny'            => false,
                    'textarea_rows'    => 10
                )
            ),
            array(
                'id'     => 'end_col1_prefooter',
                'type'   => 'section',
                'indent' => true,
            ),

            array(
               'id' => 'start_col2_prefooter',
               'type' => 'section',
               'title' => __('Columna 2', 'redux-framework-demo'),
               'subtitle' => __('Configura el texto, opciones y demas información de que se visualiza en la segunda columna del Pre Footer.', 'redux-framework-demo'),
               'indent' => true 
            ),   
            array(
                'id'       => 'text_titcol2_footer',
                'type'     => 'text',
                'title'    => __('Titulo de la columna', 'redux-framework-demo'),
                'subtitle' => __('', 'redux-framework-demo'),
                'desc'     => __('', 'redux-framework-demo'),
            ), 
            array(      
                'title'    => __( 'Categorias a mostrar', 'zaga_theme' ),
                'id'       => 'sel_catefooter',
                'type'     => 'select',
                'data'     => 'categories',
                'sortable' => false,
                'multi'    => true,
            ),
            array(
                'id'     => 'end_co2_prefooter',
                'type'   => 'section',
                'indent' => true,
            ),
            
        )
    ) );     

    Redux::setSection( $opt_name, array(
        'title'  => __( 'Copyright', 'redux-framework-demo' ),
        'id'     => 'confCopyFoot',
        'subsection'    => true,
        'desc'   => __( 'Configuración del Copyright en el footer del sitio.', 'redux-framework-demo' ),
        'fields' => array(
            array(
                'id'               => 'text_copy_footer',
                'type'             => 'editor',
                'title'            => __('Texto de información del Copyright de la sección del Footer.', 'redux-framework-demo'), 
                'subtitle'         => __('Digita el texto a mostrar.', 'redux-framework-demo'),
                'default'          => '',
                'args'   => array(
                    'teeny'            => false,
                    'textarea_rows'    => 10
                )
            ),
            array(
                'id'               => 'text_autor_footer',
                'type'             => 'editor',
                'title'            => __('Texto de información del autor de la sección del Footer.', 'redux-framework-demo'), 
                'subtitle'         => __('Digita el texto a mostrar.', 'redux-framework-demo'),
                'default'          => '',
                'args'   => array(
                    'teeny'            => false,
                    'textarea_rows'    => 10
                )
            )
            
        )
    ));


    /*Home del sitio */
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Home', 'redux-framework-demo' ),
        'id'     => 'confHome',
        'desc'   => __( 'Configuración del home.', 'redux-framework-demo' ),
        'icon'   => 'el el-home',        
    ) );

    Redux::setSection( $opt_name, array(
        'title'         => __( 'Slider', 'redux-framework-demo' ),
        'id'            => 'confBloq1Home',
        'subsection'    => true,
        'desc'          => __( 'Configuración del slider en el Home.', 'redux-framework-demo' ),
        'fields'        => array(
            array(
               'id' => 'start_section_infoslider',
               'type' => 'section',
               'title' => __('Opciones a configurar', 'redux-framework-demo'),
               'subtitle' => __('', 'redux-framework-demo'),
               'indent' => true 
            ), 
            array(
                'id'       => 'chk_most_bloque1home',
                'type'     => 'checkbox',
                'title'    => __('Mostrar Slider', 'redux-framework-demo'), 
                'subtitle' => __('', 'redux-framework-demo'),
                'desc'     => __('Si esta marcado el check, se mostrará el slider.', 'redux-framework-demo'),
                'default'  => '1'// 1 = on | 0 = off
            ),
            array(
                'id'     => 'end_section_infoslider',
                'type'   => 'section',
                'indent' => true,
            ),            
                             
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'         => __( 'Articulos', 'redux-framework-demo' ),
        'id'            => 'confBloq2Home',
        'subsection'    => true,
        'desc'          => __( 'Configuración del bloque de Articulos en el Home.', 'redux-framework-demo' ),
        'fields'        => array(            
            array(
                'id'       => 'nume_bloque2home',
                'type'     => 'text',
                'title'    => __('Número de articulos a mostrar', 'redux-framework-demo'),
                'subtitle' => __('', 'redux-framework-demo'),
                'desc'     => __('El minimo de articulos a mostrar es de 4.', 'redux-framework-demo'),
                'default'  => '4'
            ), 
            array(
                'id'       => 'numeresu_bloque2home',
                'type'     => 'text',
                'title'    => __('Número de caracteres a mostrar en el resumen post', 'redux-framework-demo'),
                'subtitle' => __('', 'redux-framework-demo'),
                'desc'     => __('El máximo de palabras es de 40', 'redux-framework-demo'),
                'default'  => '40'
            ), 

            array(
               'id' => 'start_seccpublibloque2pc',
               'type' => 'section',
               'title' => __('Publicidad bloque Articulos para PC', 'redux-framework-demo'),
               'subtitle' => __('Configura el codigo de la publicidad a mostrar.', 'redux-framework-demo'),
               'indent' => true 
            ), 

            array(
                'id'       => 'cod_bloque2_pc',
                'type'     => 'ace_editor',
                'title'    => __('Código de la publicidad', 'redux-framework-demo'),
                'subtitle' => __('Pegue el código para incluir la publicidad en el bloque de articulos desde computadores.', 'redux-framework-demo'),
                'mode'     => 'js',
                'theme'    => 'monokai',
                'desc'     => 'Possible modes can be found at <a href="http://ace.c9.io" target="_blank">http://ace.c9.io/</a>.',
                'default'  => ""
            ),
            array(
               'id' => 'end_seccpublibloque2pc',
               'type' => 'section',
               'indent' => true 
            ), 

            array(
               'id' => 'start_seccpublibloque2movil',
               'type' => 'section',
               'title' => __('Publicidad bloque Articulos para Dispositivos Moviles', 'redux-framework-demo'),
               'subtitle' => __('Configura el codigo de la publicidad a mostrar.', 'redux-framework-demo'),
               'indent' => true 
            ), 

            array(
                'id'       => 'cod_bloque2_movil',
                'type'     => 'ace_editor',
                'title'    => __('Código de la publicidad', 'redux-framework-demo'),
                'subtitle' => __('Pegue el código para incluir la publicidad en el bloque de articulos desde moviles.', 'redux-framework-demo'),
                'mode'     => 'js',
                'theme'    => 'monokai',
                'desc'     => 'Possible modes can be found at <a href="http://ace.c9.io" target="_blank">http://ace.c9.io/</a>.',
                'default'  => ""
            ),
            array(
               'id' => 'end_seccpublibloque2movil',
               'type' => 'section',
               'indent' => true 
            ),
            
                             
        )
    ) );  


    /*Opciones Generales del Sitio */
    Redux::setSection( $opt_name, array(
        'title'  => __( 'General', 'redux-framework-demo' ),
        'id'     => 'confGeneral',
        'desc'   => __( 'Configuración general del sitio.', 'redux-framework-demo' ),
        'icon'   => 'el el-cog',        
    ) );

    Redux::setSection( $opt_name, array(
        'title'         => __( 'Configuraciónes', 'redux-framework-demo' ),
        'id'            => 'conf_opciones_generales',
        'subsection'    => true,
        'desc'          => __( 'Configuración de las redes sociales.', 'redux-framework-demo' ),
        'fields'        => array(
            array(
                'id'       => 'med_favicon',
                'type'     => 'media',
                'url'      => true,
                'title'    => __( 'Imagen del Favicon', 'redux-framework-demo' ),
                'compiler' => 'true',
                //'mode'      => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'desc'     => __( 'Carga la imagen que se mostrará en el Favicon.', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'default'  => array( 'url' => 'http://s.wordpress.org/style/images/codeispoetry.png' ),
                'hint'      => array(
                    'title'     => '',
                    'content'   => 'Tamaño ideal 110 x 110 px en formaton png.',
                )
            ),
            array(
                'id'       => 'url_social_facebook',
                'type'     => 'text',
                'title'    => __('URL Facebook', 'redux-framework-demo'),
                'subtitle' => __('', 'redux-framework-demo'),
                'desc'     => __('Esta url se usa en diversas partes del sitio', 'redux-framework-demo'),
            ), 
            array(
                'id'       => 'url_social_instagram',
                'type'     => 'text',
                'title'    => __('URL Instagram', 'redux-framework-demo'),
                'subtitle' => __('', 'redux-framework-demo'),
                'desc'     => __('Esta url se usa en diversas partes del sitio', 'redux-framework-demo'),
            ), 
            array(
                'id'       => 'url_social_pinterest',
                'type'     => 'text',
                'title'    => __('URL Pinterest', 'redux-framework-demo'),
                'subtitle' => __('', 'redux-framework-demo'),
                'desc'     => __('Esta url se usa en diversas partes del sitio', 'redux-framework-demo'),
            ), 
            array(
                'id'       => 'url_social_twitter',
                'type'     => 'text',
                'title'    => __('URL Twitter', 'redux-framework-demo'),
                'subtitle' => __('', 'redux-framework-demo'),
                'desc'     => __('Esta url se usa en diversas partes del sitio', 'redux-framework-demo'),
            ), 
            array(
                'id'       => 'url_social_youtube',
                'type'     => 'text',
                'title'    => __('URL Youtube', 'redux-framework-demo'),
                'subtitle' => __('', 'redux-framework-demo'),
                'desc'     => __('Esta url se usa en diversas partes del sitio', 'redux-framework-demo'),
            ), 
            array(
                'id'       => 'url_social_googleplus',
                'type'     => 'text',
                'title'    => __('URL Google Plus', 'redux-framework-demo'),
                'subtitle' => __('', 'redux-framework-demo'),
                'desc'     => __('Esta url se usa en diversas partes del sitio', 'redux-framework-demo'),
            ), 
            array(
                'id'       => 'act_btn_topsite',
                'type'     => 'checkbox',
                'title'    => __('Activar boton fixed "ir arriba"', 'redux-framework-demo'),
                'subtitle' => __('', 'redux-framework-demo'),
                'desc'     => __('', 'redux-framework-demo'),
                'default'  => '0'// 1 = on | 0 = off
            ),
            array(
                'id'       => 'cod_analytics',
                'type'     => 'ace_editor',
                'title'    => __('Código Google Analytics', 'redux-framework-demo'),
                'subtitle' => __('Pegue el código para incluir el analizador de visitas.', 'redux-framework-demo'),
                'mode'     => 'js',
                'theme'    => 'monokai',
                'desc'     => 'Possible modes can be found at <a href="http://ace.c9.io" target="_blank">http://ace.c9.io/</a>.',
                'default'  => ""
            ),
            array(
                'id'       => 'cod_pixel',
                'type'     => 'ace_editor',
                'title'    => __('Código Pixel Facebook', 'redux-framework-demo'),
                'subtitle' => __('Pegue el código para incluir el Pixel de Facebook.', 'redux-framework-demo'),
                'mode'     => 'js',
                'theme'    => 'monokai',
                'desc'     => 'Possible modes can be found at <a href="http://ace.c9.io" target="_blank">http://ace.c9.io/</a>.',
                'default'  => ""
            ),
            array(
                'id'       => 'cod_chat',
                'type'     => 'ace_editor',
                'title'    => __('Código chat de la página', 'redux-framework-demo'),
                'subtitle' => __('Pegue el código para incluir el chat en el sitio web.', 'redux-framework-demo'),
                'mode'     => 'js',
                'theme'    => 'monokai',
                'desc'     => 'Possible modes can be found at <a href="http://ace.c9.io" target="_blank">http://ace.c9.io/</a>.',
                'default'  => ""
            ),
            
                             
        )
    ) ); 

    Redux::setSection( $opt_name, array(
        'title'  => __( 'Publicidad', 'redux-framework-demo' ),
        'id'     => 'confPublicidadGeneral',
        'subsection'    => true,
        'desc'   => __( 'Configuración de la publicidad que se muestra en algunas secciones del sitio.', 'redux-framework-demo' ),
        'fields' => array(

            array(
               'id' => 'start_seccpubliheader',
               'type' => 'section',
               'title' => __('Publicidad header', 'redux-framework-demo'),
               'subtitle' => __('Configura el codigo de la publicidad a mostrar tanto en computadores como en moviles.', 'redux-framework-demo'),
               'indent' => true 
            ), 
            array(
                'id'       => 'cod_header_pc',
                'type'     => 'ace_editor',
                'title'    => __('Código de la publicidad', 'redux-framework-demo'),
                'subtitle' => __('Pegue el código para incluir la publicidad en el header desde computadores.', 'redux-framework-demo'),
                'mode'     => 'js',
                'theme'    => 'monokai',
                'desc'     => 'Possible modes can be found at <a href="http://ace.c9.io" target="_blank">http://ace.c9.io/</a>.',
                'default'  => ""
            ),
            array(
                'id'       => 'cod_header_movil',
                'type'     => 'ace_editor',
                'title'    => __('Código de la publicidad', 'redux-framework-demo'),
                'subtitle' => __('Pegue el código para incluir la publicidad en el header desde moviles.', 'redux-framework-demo'),
                'mode'     => 'js',
                'theme'    => 'monokai',
                'desc'     => 'Possible modes can be found at <a href="http://ace.c9.io" target="_blank">http://ace.c9.io/</a>.',
                'default'  => ""
            ),
            array(
               'id' => 'end_seccpubliheader',
               'type' => 'section',
               'indent' => true 
            ), 

            array(
               'id' => 'start_seccpublicategoria',
               'type' => 'section',
               'title' => __('Publicidad pagina Categorias', 'redux-framework-demo'),
               'subtitle' => __('Configura el codigo de la publicidad a mostrar tanto en computadores como en moviles.', 'redux-framework-demo'),
               'indent' => true 
            ), 

            array(
                'id'       => 'cod_categoria_pc1',
                'type'     => 'ace_editor',
                'title'    => __('Código de la publicidad 1', 'redux-framework-demo'),
                'subtitle' => __('Pegue el código para incluir la publicidad en la categoria desde computadores.', 'redux-framework-demo'),
                'mode'     => 'js',
                'theme'    => 'monokai',
                'desc'     => 'Possible modes can be found at <a href="http://ace.c9.io" target="_blank">http://ace.c9.io/</a>.',
                'default'  => ""
            ),
            array(
                'id'       => 'cod_categoria_movil1',
                'type'     => 'ace_editor',
                'title'    => __('Código de la publicidad 1', 'redux-framework-demo'),
                'subtitle' => __('Pegue el código para incluir la publicidad en la categoria desde moviles.', 'redux-framework-demo'),
                'mode'     => 'js',
                'theme'    => 'monokai',
                'desc'     => 'Possible modes can be found at <a href="http://ace.c9.io" target="_blank">http://ace.c9.io/</a>.',
                'default'  => ""
            ),

            array(
                'id'       => 'cod_categoria_pc2',
                'type'     => 'ace_editor',
                'title'    => __('Código de la publicidad 2', 'redux-framework-demo'),
                'subtitle' => __('Pegue el código para incluir la publicidad en la categoria desde computadores.', 'redux-framework-demo'),
                'mode'     => 'js',
                'theme'    => 'monokai',
                'desc'     => 'Possible modes can be found at <a href="http://ace.c9.io" target="_blank">http://ace.c9.io/</a>.',
                'default'  => ""
            ),
            array(
                'id'       => 'cod_categoria_movil2',
                'type'     => 'ace_editor',
                'title'    => __('Código de la publicidad 2', 'redux-framework-demo'),
                'subtitle' => __('Pegue el código para incluir la publicidad en la categoria desde moviles.', 'redux-framework-demo'),
                'mode'     => 'js',
                'theme'    => 'monokai',
                'desc'     => 'Possible modes can be found at <a href="http://ace.c9.io" target="_blank">http://ace.c9.io/</a>.',
                'default'  => ""
            ),

            
            array(
               'id' => 'end_seccpublicategoria',
               'type' => 'section',
               'indent' => true 
            ), 

            array(
               'id' => 'start_seccpublietiqueta',
               'type' => 'section',
               'title' => __('Publicidad Pagina Etiquetas', 'redux-framework-demo'),
               'subtitle' => __('Configura el codigo de la publicidad a mostrar tanto en computadores como en moviles.', 'redux-framework-demo'),
               'indent' => true 
            ), 

            array(
                'id'       => 'cod_etiqueta_pc1',
                'type'     => 'ace_editor',
                'title'    => __('Código de la publicidad 1', 'redux-framework-demo'),
                'subtitle' => __('Pegue el código para incluir la publicidad en la pagina de etiqueta desde computadores.', 'redux-framework-demo'),
                'mode'     => 'js',
                'theme'    => 'monokai',
                'desc'     => 'Possible modes can be found at <a href="http://ace.c9.io" target="_blank">http://ace.c9.io/</a>.',
                'default'  => ""
            ),
            array(
                'id'       => 'cod_etiqueta_movil1',
                'type'     => 'ace_editor',
                'title'    => __('Código de la publicidad 1', 'redux-framework-demo'),
                'subtitle' => __('Pegue el código para incluir la publicidad en la pagina de etiqueta desde moviles.', 'redux-framework-demo'),
                'mode'     => 'js',
                'theme'    => 'monokai',
                'desc'     => 'Possible modes can be found at <a href="http://ace.c9.io" target="_blank">http://ace.c9.io/</a>.',
                'default'  => ""
            ),

            array(
                'id'       => 'cod_etiqueta_pc2',
                'type'     => 'ace_editor',
                'title'    => __('Código de la publicidad 2', 'redux-framework-demo'),
                'subtitle' => __('Pegue el código para incluir la publicidad en la pagina de etiqueta desde computadores.', 'redux-framework-demo'),
                'mode'     => 'js',
                'theme'    => 'monokai',
                'desc'     => 'Possible modes can be found at <a href="http://ace.c9.io" target="_blank">http://ace.c9.io/</a>.',
                'default'  => ""
            ),
            array(
                'id'       => 'cod_etiqueta_movil2',
                'type'     => 'ace_editor',
                'title'    => __('Código de la publicidad 2', 'redux-framework-demo'),
                'subtitle' => __('Pegue el código para incluir la publicidad en la pagina de etiqueta desde moviles.', 'redux-framework-demo'),
                'mode'     => 'js',
                'theme'    => 'monokai',
                'desc'     => 'Possible modes can be found at <a href="http://ace.c9.io" target="_blank">http://ace.c9.io/</a>.',
                'default'  => ""
            ),

            
            array(
               'id' => 'end_seccpublietiqueta',
               'type' => 'section',
               'indent' => true 
            ), 

            array(
               'id' => 'start_seccpublibuscador',
               'type' => 'section',
               'title' => __('Publicidad Pagina del Buscador', 'redux-framework-demo'),
               'subtitle' => __('Configura el codigo de la publicidad a mostrar en la pagina de resultados del buscador.', 'redux-framework-demo'),
               'indent' => true 
            ), 

            array(
                'id'       => 'chk_most_buscadorpubli',
                'type'     => 'checkbox',
                'title'    => __('Mostrar bloque', 'redux-framework-demo'), 
                'subtitle' => __('', 'redux-framework-demo'),
                'desc'     => __('Si esta marcado el check, se usara el buscador de la publicidad de Google.', 'redux-framework-demo'),
                'default'  => '1'// 1 = on | 0 = off
            ),
            array(      
                'title'    => __( 'Pagina a usar para mostrar resultados', 'zaga_theme' ),
                'id'       => 'sel_pagebuscadorpubli',
                'type'     => 'select',
                'data'     => 'pages',
                'sortable' => false,
                'multi'    => false,
            ),
            array(
                'id'       => 'codpart_buscadorpubli',
                'type'     => 'text',
                'title'    => __('Codigo del partner para el formulario', 'redux-framework-demo'),
                'subtitle' => __('', 'redux-framework-demo'),
                'desc'     => __('Ingrese el texto de "var cx" pegado en el codigo de abajo.', 'redux-framework-demo'),
            ),
            array(
                'id'       => 'cod_buscadorpubli',
                'type'     => 'ace_editor',
                'title'    => __('Código de la publicidad', 'redux-framework-demo'),
                'subtitle' => __('Pegue el código para incluir la publicidad en la pagina del buscador.', 'redux-framework-demo'),
                'mode'     => 'js',
                'theme'    => 'monokai',
                'desc'     => 'Possible modes can be found at <a href="http://ace.c9.io" target="_blank">http://ace.c9.io/</a>.',
                'default'  => ""
            ),
            array(
               'id' => 'end_seccpublibuscador',
               'type' => 'section',
               'indent' => true 
            ), 
            
            
            
        )
    ));  

    /*
     * <--- END SECTIONS
     */