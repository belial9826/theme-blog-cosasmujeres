<?php global $chefdeco; //print_r($chefdeco);?>

<?php if ($chefdeco['chk_act_prefooter']==1 ) {  ?>

  <div id="preFooter" class="disTable">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-xs-12">
          <div class="texto col col-izq">
            <?php echo do_shortcode(wpautop($chefdeco['text_info_col1'])); ?>
          </div>
        </div>
        <div class="col-md-6 col-xs-12">

          <div class="texto col col-der">
            <h3><?php echo $chefdeco['text_titcol2_footer']; ?></h3>
            <ul>
              <?php
                foreach($chefdeco['sel_catefooter'] as $category) { 
                    echo '<li> <a href="'.get_category_link($category).'">'.get_cat_name($category).'</a></li>'; 
                } 
              ?>
            </ul>
          </div>          
        </div>
      </div>
    </div>
  </div>
<?php } ?>

<footer class="disInlineB">
  <div class="container">
    <div class="row">
      <div class="cont-copy col-md-6 col-xs-12">
        <?php echo do_shortcode($chefdeco['text_copy_footer']); ?>
      </div>
      <div class="cont-autor col-md-6 col-xs-12">
        <?php echo $chefdeco['text_autor_footer']; ?>
      </div>
    </div>
  </div>
</footer>

<?php  wp_footer(); ?>

<?php include locate_template('/includes/scripts_footer.php'); ?> <!-- Scripts con condicionales dependiendo de la pagina -->

<script async defer type="text/javascript">
  WebFontConfig = {
    google: { families: [ 'Courgette::latin', 'Open+Sans::latin', 'Roboto::latin', 'Oswald::latin', 'Poppins::latin', 'Source+Sans+Pro::latin', 'Lobster::latin', 'Shrikhand::latin' ] }
  };
  (function() {
    var wf = document.createElement('script');
    wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
  })(); 

  document.getElementsByTagName('body')[0].click();
</script>

<script async>
  jQuery(document).ready(function($) {
    
    $('.btnBoxShadow').hover(function() {

      if ($(this).hasClass('btnNegro') ) {
        colTrans = "#ff6600";
      }
      if ($(this).hasClass('btnTransGris') ) {
        colTrans = "#eeeeee";
      }
      

      wid = $(this).outerWidth();
      fondo = $(this).css("background-color");

      estilo = 'inset '+wid+'px 0px 0px '+colTrans;

      $(this).css('box-shadow', estilo); 
    }, function() {
      $(this).css('box-shadow', ''); 
    });
  });
</script>

</body>

</html>

