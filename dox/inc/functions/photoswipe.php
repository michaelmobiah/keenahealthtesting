<?php

/*

PhotoSwipe

*/

if ( ! function_exists( 'dox_photoswipe' ) ) {

	/**
	 * PhotoSwipe Template
	 */
	function dox_photoswipe() {
		get_template_part( 'templates/image/photoswipe' );
	}

	add_action( 'dox_footer', 'dox_photoswipe', 10 );

}
