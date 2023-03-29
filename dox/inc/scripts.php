<?php

/*

Scripts

*/

/**
 * Libraries
 */

// Pace
require_once trailingslashit( get_template_directory() ) . 'inc/scripts/pace.php';
// Lazy
require_once trailingslashit( get_template_directory() ) . 'inc/scripts/lazy.php';
// Swiper
require_once trailingslashit( get_template_directory() ) . 'inc/scripts/swiper.php';
// PhotoSwipe
require_once trailingslashit( get_template_directory() ) . 'inc/scripts/photoswipe.php';


if ( ! function_exists( 'dox_scripts' ) ) {

	/**
	 * Scripts
	 */
	function dox_scripts() {
		global $is_safari;

		/**
		 * FORQY Scripts
		 * -------------
		 */

		/**
		 * Off
		 */
		wp_enqueue_script( get_template() . '-off', get_theme_file_uri( 'vendor/forqy/off/js/off.js' ), false, '1.0.0', true );

		/**
		 * Masonry
		 */
		wp_enqueue_script( get_template() . '-masonry', trailingslashit( get_template_directory_uri() ) . 'vendor/forqy/core/js/masonry.js', array(
			'jquery',
			'imagesloaded',
			'jquery-masonry',
		), '1.0.2', true );

		/**
		 * Links - Safari Fallback
		 */
		if ( $is_safari ) {
			wp_enqueue_script( get_template() . '-links', trailingslashit( get_template_directory_uri() ) . 'vendor/forqy/core/js/links.js', false, '1.0.0', true );
		}

		/**
		 * Sticky
		 */
		if ( get_theme_mod( 'dox_header_sticky', dox_default( 'dox_header_sticky' ) ) != 'disabled' ) {
			wp_enqueue_script( get_template() . '-sticky', trailingslashit( get_template_directory_uri() ) . 'vendor/forqy/core/js/sticky.js', false, '1.0.1', true );
		}

		/**
		 * Video
		 */
		wp_enqueue_script( get_template() . '-video', trailingslashit( get_template_directory_uri() ) . 'vendor/forqy/core/js/video.js', false, '1.0.1', true );

		/**
		 * Comment Reply
		 * -------------
		 */
		if ( is_singular() && get_option( 'thread_comments' ) && comments_open() ) {
			wp_enqueue_script( 'comment-reply' );
		}

	}

	add_action( 'wp_enqueue_scripts', 'dox_scripts', 20 );

}
