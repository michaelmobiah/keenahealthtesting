<?php

/*

Images

*/

/*
====================================================================================================
Add Image Sizes
====================================================================================================
*/

// Medium

add_image_size( FORQY_THEME_SLUG . '-medium', 800, '', true );
add_image_size( FORQY_THEME_SLUG . '-medium-square', 800, 800, array( 'center', 'center' ) );
add_image_size( FORQY_THEME_SLUG . '-medium-fixed', 800, 600, array( 'center', 'center' ) );

// XLarge

add_image_size( FORQY_THEME_SLUG . '-large-square', 1280, 1280, array( 'center', 'center' ) );
add_image_size( FORQY_THEME_SLUG . '-large-fixed', 1280, 960, array( 'center', 'center' ) );

// Huge

add_image_size( FORQY_THEME_SLUG . '-huge', 1920, '', array( 'center', 'center' ) );
add_image_size( FORQY_THEME_SLUG . '-huge-fixed', 1920, 1440, array( 'center', 'center' ) );

if ( ! function_exists( 'dox_image_size_names_choose' ) ) {

	/**
	 * Add Image Sizes to Media Uploader and Gutenberg
	 *
	 * @param $sizes
	 *
	 * @return array
	 */
	function dox_image_size_names_choose( $sizes ): array {

		return array_merge( $sizes, array(
			FORQY_THEME_SLUG . '-medium'        => FORQY_THEME_NAME . ' ' . _x( 'Medium', 'image size', 'dox' ),
			FORQY_THEME_SLUG . '-medium-square' => FORQY_THEME_NAME . ' ' . _x( 'Medium - Square', 'image size', 'dox' ),
			FORQY_THEME_SLUG . '-medium-fixed'  => FORQY_THEME_NAME . ' ' . _x( 'Medium - Fixed', 'image size', 'dox' ),
			FORQY_THEME_SLUG . '-large'         => FORQY_THEME_NAME . ' ' . _x( 'Large', 'image size', 'dox' ),
			FORQY_THEME_SLUG . '-large-square'  => FORQY_THEME_NAME . ' ' . _x( 'Large - Square', 'image size', 'dox' ),
			FORQY_THEME_SLUG . '-large-fixed'   => FORQY_THEME_NAME . ' ' . _x( 'Large - Fixed', 'image size', 'dox' ),
			FORQY_THEME_SLUG . '-huge'          => FORQY_THEME_NAME . ' ' . _x( 'Huge', 'image size', 'dox' ),
			FORQY_THEME_SLUG . '-huge-fixed'    => FORQY_THEME_NAME . ' ' . _x( 'Huge - Fixed', 'image size', 'dox' ),
		) );

	}

	add_filter( 'image_size_names_choose', 'dox_image_size_names_choose' );

}
