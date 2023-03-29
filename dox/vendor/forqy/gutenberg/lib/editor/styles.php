<?php

/**
 * Styles
 *
 * @package forqy/gutenberg
 * @since 1.0.0
 */

if ( ! function_exists( 'forqy_gutenberg_editor_styles' ) ) {

	/**
	 * Gutenberg Editor Styles
	 */
	function forqy_gutenberg_editor_styles() {
		global $typenow;

		if ( $typenow == 'slide' ) {
			wp_enqueue_style( 'forqy-editor-slide', get_theme_file_uri( 'vendor/forqy/gutenberg/css/editor-slide.css' ), false );
		}
	}

	add_action( 'enqueue_block_editor_assets', 'forqy_gutenberg_editor_styles' );

}
