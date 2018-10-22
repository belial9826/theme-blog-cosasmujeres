<?php
global $chefdeco;
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <!--=== META TAGS ===-->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0"> -->
   

    <!--=== TITLE ===-->
    <title><?php wp_title(); ?> - <?php bloginfo( 'name' ); ?></title>
    <!--=== WP_HEAD() ===-->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
    <script async src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>

    <script async>
      jQuery(document).ready(function($) {
        if (screen.width <= 480) {
              $("nav.navbar").addClass("navbar-fixed-top");
          } else {
          }

          jQuery('ul.nav li.dropdown').hover(function() {
                jQuery(this).children('.dropdown-menu').stop(true, true).delay(200).fadeIn();
                }, function() {
                jQuery(this).children('.dropdown-menu').stop(true, true).delay(200).fadeOut();
            });
      });
    </script>

    <?php wp_head(); ?>

    <?php /*get_template_part( 'includes/estilos-programados' );*/ ?>
   
    <!-- belial9826 -->

    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#279ea4">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#279ea4">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#279ea4">

    
  </head>
  <body <?php identiClassB(); ?>  >

<header> 
  
  <div id="info-header">
    <div class="divInfo imgLogo">
      <div>
        <?php logo_header(); ?>
      </div>
    </div>

    <div class="divInfo contMenu">
      <div>
        <nav class="navbar navbar-default" >
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed hidden-lg hidden-md" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Men&uacute;</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse navbar-ex1-collapse ">
            <?php
            wp_nav_menu( array(
            'theme_location' => 'top_menu',
            'depth' => 4,
            'container' => false,
            'menu_class' => 'nav navbar-nav',
            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
            'walker'            => new wp_bootstrap_navwalker())
            );
            ?>
            </div><!-- /.navbar-collapse -->
          </nav>
        </div>
      </div>
    </div>
</header>

<div id="publi-header">
    <?php echo publi_header(); ?>
</div>