<?php 

	if (is_singular("servicios" )) {
		get_template_part( 'template-parts/single', 'servicios' );
	}
	else if (is_singular("faq" )) {
		get_template_part( 'template-parts/single', 'faq' );
	}
	else if (is_singular("foro" )) {
		get_template_part( 'template-parts/single', 'foro' );
	}
	else{
		get_template_part( 'template-parts/single' );
	}