<?php

/*

Styles

*/

if ( ! function_exists( 'dox_styles' ) ) {

	/**
	 * Theme
	 */
	function dox_styles() {

		if ( class_exists( 'forqy_less' ) ) {
			// Compile LESS
			wp_enqueue_style( get_template(), trailingslashit( get_template_directory_uri() ) . 'style.less', array(), wp_get_theme()->get( 'Version' ) );
		} else {
			// Fallback CSS
			wp_enqueue_style( get_template(), trailingslashit( get_template_directory_uri() ) . 'css/theme.css', array(), wp_get_theme()->get( 'Version' ) );
		}

	}

	add_action( 'wp_enqueue_scripts', 'dox_styles', 10 );

}

if ( ! function_exists( 'dox_styles_admin_bar' ) ) {

	/**
	 * Admin Bar
	 */
	function dox_styles_admin_bar() {

		if ( is_admin_bar_showing() ) {

			$admin_bar_css = "#wpadminbar { z-index: 90 !important; }";

			wp_add_inline_style( is_child_theme() ? get_stylesheet() : get_template(), $admin_bar_css );

		}

	}

	add_action( 'wp_enqueue_scripts', 'dox_styles_admin_bar', 90 );

}
