<?php

/*

PhotoSwipe Scripts

*/

if ( ! function_exists( 'dox_scripts_photoswipe' ) ) {

	function dox_scripts_photoswipe() {

		/**
		 * PhotoSwipe
		 * @url https://github.com/dimsemenov/PhotoSwipe
		 * @source https://github.com/dimsemenov/PhotoSwipe/blob/master/dist/photoswipe.js
		 * @source https://github.com/dimsemenov/PhotoSwipe/blob/master/dist/photoswipe-ui-default.js
		 */
		wp_enqueue_script( 'photoswipe', trailingslashit( get_template_directory_uri() ) . 'vendor/forqy/core/js/lib/photoswipe.js', array(
			'jquery',
		), '4.1.3', true );
		wp_enqueue_script( 'photoswipe-ui-default', trailingslashit( get_template_directory_uri() ) . 'vendor/forqy/core/js/lib/photoswipe-ui-default.js', array(
			'jquery',
			'photoswipe',
		), '4.1.3', true );

		/**
		 * CORE Images
		 */
		wp_enqueue_script( get_template() . '-images', trailingslashit( get_template_directory_uri() ) . 'vendor/forqy/core/js/images.js', array(
			'jquery',
			'photoswipe',
			'photoswipe-ui-default',
		), '1.0.1', true );

	}

	add_action( 'wp_enqueue_scripts', 'dox_scripts_photoswipe', 30 );

}
