<?php

/*

Lazy Scripts

*/

if ( ! function_exists( 'dox_scripts_lazy' ) ) {

	function dox_scripts_lazy() {

		/**
		 * LazyLoad
		 * @url https://github.com/verlok/vanilla-lazyload
		 * @source https://github.com/verlok/vanilla-lazyload/blob/master/dist/lazyload.js
		 */
		wp_enqueue_script( 'lazyload', trailingslashit( get_template_directory_uri() ) . 'vendor/forqy/core/js/lib/lazyload.js', false, '17.4.0', true );

		/**
		 * CORE Lazy
		 */
		wp_enqueue_script( get_template() . '-lazy', trailingslashit( get_template_directory_uri() ) . 'vendor/forqy/core/js/lazy.js', array(
			'lazyload',
		), '1.0.0', true );

	}

	add_action( 'wp_enqueue_scripts', 'dox_scripts_lazy', 5 );

}
