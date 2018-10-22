<?php global $chefdeco; ?>

<div class="cse-branding-bottom" >
  <div class="cse-branding-form">

    <?php if ($chefdeco['chk_most_buscadorpubli']==1){ ?>
      <form action="<?php echo get_permalink( $chefdeco['sel_pagebuscadorpubli'] ); ?>" id="cse-search-box">
        <div>
          <input type="hidden" name="cx" value="<?php echo $chefdeco['codpart_buscadorpubli']; ?>" />
          <input type="hidden" name="cof" value="FORID:10" />
          <input type="hidden" name="ie" value="UTF-8" />
          <input type="text" name="q" size="55" placeholder="Buscar en el sitio..." class="form-control" />
          <button type="submit" name="sa" class="btn"><i class="fa fa-search"></i></button>
        </div>
      </form>
    <?php }else { ?>

      <form method="get" id="cse-search-box" action="<?php echo home_url( '/' ); ?>">
          <input type="text" class="field form-control" name="s" id="s" placeholder="<?php _e( 'Buscador', 'mytheme' ); ?>" value="<?php the_search_query(); ?>" />
          <button type="submit" name="submit" id="searchsubmit" class="btn"><i class="fa fa-search"></i></button>   
      </form>

    <?php  } ?>
    
  </div>
</div>