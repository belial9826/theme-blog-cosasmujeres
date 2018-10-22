<?php get_header(); global $chefdeco;?>
<?php
$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
//echo get_avatar( get_the_author_meta('email') , 90 );
?>
<div id="contenidoAutor" >
    <div class="contImgPrincipal">
        <h1 class="hidden-xs"><?php echo get_the_author_meta( 'first_name' )." ".get_the_author_meta( 'last_name' ); ?></h1>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/imagenes/pagina_autor.jpg" alt="autor chef de cocina">
    </div>
    <div class="cabeHeader container">
        <div class="row">
            <div class="col-md-8 col-sm-12 col-xs-12">
                <div class="contAutor">
                    <?php
                    $author_ID = get_query_var('author');

                    $user_id = get_the_author_meta('ID');

                    //echo $author_ID . "fakljñdfjkladfjklñadf";
                    // Set the image size. Accepts all registered images sizes and array(int, int)
                    $size = array(150, 200);

                    $imgURL = get_cupp_meta($author_ID, $size);
                    echo '<img src="'. $imgURL .'" alt="">';
                    
                    $curauth = get_userdata($author_ID);
                    ?>
                    <?php //echo get_avatar( get_the_author_meta( 'ID' ) , 150 ); ?>
                    <h4><a href="<?php echo get_author_posts_url( get_the_author_meta($author_ID ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php echo get_the_author_meta( 'first_name' )." ".get_the_author_meta( 'last_name' ); ?></a></h4>
                    <p class="web_autor"><a href="<?php echo $curauth->user_url; ?>"><?php echo preg_replace('#^https?://#', '', $curauth->user_url); ?></a></p>                    
                    <?php  echo "<p class='desc_autor'>".get_the_author_meta('description')."</p>"; ?>
                    <?php echo  $chefdeco['cod_redSocial_page_autor']; ?>
                </div>
                
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="ajaxPostAutor">
                    <?php
                    $categorias = explode(",", $chefdeco["id_cate_post_autor"]);
                    if( $terms = get_terms( 'category', array('hide_empty' => 0, 'orderby' => 'name', 'cat' => $categorias, 'parent'   => 0) ) ) : // to make it simple I use default categories
                    echo '<select name="selectPostAutor" class="selectpicker" id="selectPostAutor"><option class="opcRojo" value="aaa">Filtrar Articulos</option>';
                    foreach ( $terms as $term ) :
                    if (in_array($term->term_id, $categorias)) {
                    echo '<option class="opcRojo" value="' . $term->term_id . '">' . $term->name . '</option>'; // ID of the category as the value of an option
                    }
                    
                    endforeach;
                    echo '</select>';
                    endif;
                    ?>
                    <input type="hidden" name="action" value="myfilter">
                    <input type="hidden" name="idAutor" value="<?php echo $author_ID; ?>">
                </form>
            </div>
        </div>
    </div>
    
    <div id="conAjaxAutorPost">
        <h2 id="titRecetas">Contenido del Autor</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <section id="contPagePostAutor">
                      
                        <div class="col-lg-12 col-sm-12 col-xs-12">
                        
                            <?php
                                $args = array(
                                    'post_type'=> 'post',
                                    'orderby' => 'post_date',
                                    'posts_per_page'=>'6',
                                    'author' => $user_id,
                                    'paged' => get_query_var('paged')
                                );

                                wp_reset_query(); wp_reset_postdata();

                                query_posts( $args );

                                if ( have_posts() ) {

                                    while (have_posts()) : the_post();              

                                        $thumb_id = get_post_thumbnail_id();
                                        $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
                                        $thumb_url = $thumb_url_array[0];   

                                        if (in_category('Recetas')) {
                                            $classDiv = "resRecetas";
                                            $icoRecetas = "<img src='".get_template_directory_uri()."/assets/imagenes/icono.jpg' alt=''>";
                                        }else{
                                            $classDiv = "resArticulos";
                                            $icoRecetas= "<div class='divIco'>  </div>";
                                        } 

                                ?>

                                <div class="<?php echo $classDiv; ?> col-md-4 col-sm-6 col-xs-12">
                                    <article>   
                                        <div class="hidden entry-meta">
                                            <span class="meta_date updated"><?php the_time();?></span>
                                            <span class="vcard author">
                                                <span class="fn"><?php the_author(); ?></span>
                                            </span>
                                        </div>
                                                        

                                        <div class="item">
                                             <a href="<?php the_permalink(); ?>" rel="nofollow"> <figure><img class="img-responsive" src="<?php echo $thumb_url; ?>" alt="<?php the_title();?>"></figure> </a>  
                                              
                                            <div class="item-overlay top"></div>
                                        </div>
                                        <a href="<?php the_permalink(); ?>" ><h2 class="the-title title entry-title"><?php the_title() ;?></h2></a>
                                        <?php echo $icoRecetas; ?>
                                        <div class="post-excerpt"><?php echo excerpt_post(14); ?></div>                         
                                    </article>
                                </div>  



                            <?php endwhile; wp_reset_query(); wp_reset_postdata();?>

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



                                <?php }else{
                                    echo "<h2>el autor no tiene articulos....</h2>";
                                }

                                
                            ?>
                                
                           
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    

</div>
<?php get_footer(); ?>