<?php 

	if (wc_get_page_id( 'cart' ) == get_the_ID()) {
		get_template_part( 'template-parts/page', 'cart' );
	}
	else if (wc_get_page_id( 'myaccount' ) == get_the_ID()) {
		get_template_part( 'template-parts/page', 'myaccount' );
	}
	else if (wc_get_page_id( 'checkout' ) == get_the_ID()) {
		get_template_part( 'template-parts/page', 'checkout' );
	}
	else{
		get_template_part( 'template-parts/page' );
	}