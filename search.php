<?php /* Template Name: Resultados */ ?>


<?php  get_header(); global $chefdeco;?>

<div id="infoBusqueda" class="cont-informacion disInlineB">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="cont-articulo">
					<?php echo $chefdeco['cod_buscadorpubli']; ?>						
				</div>
			</div>

			<div class="col-md-4">
				<?php get_template_part( 'template-parts/lateral-derecha' ); ?>
			</div>
		</div>
	</div>
</div>

<?php  get_footer();?>
