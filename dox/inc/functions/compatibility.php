<?php

/*

Compatibility
@since 1.0.4

*/

if ( ! function_exists( 'dox_compatibility_migrate_theme_options' ) ) {

	/**
	 * Migrate Theme Options
	 */
	function dox_compatibility_migrate_theme_options() {

		// Header Gradient -> Heading Gradient

		if ( ! get_theme_mod( 'dox_heading_gradient_color' ) && get_theme_mod( 'dox_header_gradient_color' ) ) {
			set_theme_mod( 'dox_heading_gradient_color', get_theme_mod( 'dox_header_gradient_color' ) );
			remove_theme_mod( 'dox_header_gradient_color' );
		}
		if ( ! get_theme_mod( 'dox_heading_gradient_opacity' ) && get_theme_mod( 'dox_header_gradient_opacity' ) ) {
			set_theme_mod( 'dox_heading_gradient_opacity', get_theme_mod( 'dox_header_gradient_opacity' ) );
			remove_theme_mod( 'dox_header_gradient_opacity' );
		}
		if ( ! get_theme_mod( 'dox_heading_gradient_angle' ) && get_theme_mod( 'dox_header_gradient_angle' ) ) {
			set_theme_mod( 'dox_heading_gradient_angle', get_theme_mod( 'dox_header_gradient_angle' ) );
			remove_theme_mod( 'dox_header_gradient_angle' );
		}

		// Header Title -> Heading

		if ( ! get_theme_mod( 'dox_heading_color' ) && get_theme_mod( 'dox_header_title_color' ) ) {
			set_theme_mod( 'dox_heading_color', get_theme_mod( 'dox_header_title_color' ) );
			remove_theme_mod( 'dox_header_title_color' );
		}
		if ( ! get_theme_mod( 'dox_heading_color_accent' ) && get_theme_mod( 'dox_header_title_color_accent' ) ) {
			set_theme_mod( 'dox_heading_color_accent', get_theme_mod( 'dox_header_title_color_accent' ) );
			remove_theme_mod( 'dox_header_title_color_accent' );
		}
		if ( ! get_theme_mod( 'dox_heading_color_background' ) && get_theme_mod( 'dox_header_title_color_background' ) ) {
			set_theme_mod( 'dox_heading_color_background', get_theme_mod( 'dox_header_title_color_background' ) );
			remove_theme_mod( 'dox_header_title_color_background' );
		}

		// Header Overlay -> Heading Overlay

		if ( ! get_theme_mod( 'dox_heading_overlay_color' ) && get_theme_mod( 'dox_header_overlay_color' ) ) {
			set_theme_mod( 'dox_heading_overlay_color', get_theme_mod( 'dox_header_overlay_color' ) );
			remove_theme_mod( 'dox_header_overlay_color' );
		}
		if ( ! get_theme_mod( 'dox_heading_overlay_opacity' ) && get_theme_mod( 'dox_header_overlay_opacity' ) ) {
			set_theme_mod( 'dox_heading_overlay_opacity', get_theme_mod( 'dox_header_overlay_opacity' ) );
			remove_theme_mod( 'dox_heading_overlay_opacity' );
		}

		// Header Image -> Heading Image

		if ( ! get_theme_mod( 'dox_heading_image' ) && get_theme_mod( 'dox_header_image' ) ) {
			set_theme_mod( 'dox_heading_image', get_theme_mod( 'dox_header_image' ) );
			remove_theme_mod( 'dox_header_image' );
		}
		if ( ! get_theme_mod( 'dox_heading_image_position_x' ) && get_theme_mod( 'dox_header_image_position_x' ) ) {
			set_theme_mod( 'dox_heading_image_position_x', get_theme_mod( 'dox_header_image_position_x' ) );
			remove_theme_mod( 'dox_header_image_position_x' );
		}
		if ( ! get_theme_mod( 'dox_heading_image_position_y' ) && get_theme_mod( 'dox_header_image_position_y' ) ) {
			set_theme_mod( 'dox_heading_image_position_y', get_theme_mod( 'dox_header_image_position_y' ) );
			remove_theme_mod( 'dox_header_image_position_y' );
		}
		if ( ! get_theme_mod( 'dox_heading_image_size' ) && get_theme_mod( 'dox_header_image_size' ) ) {
			set_theme_mod( 'dox_heading_image_size', get_theme_mod( 'dox_header_image_size' ) );
			remove_theme_mod( 'dox_header_image_size' );
		}

		// Heading Image -> Heading Background Image

		if ( ! get_theme_mod( 'dox_heading_background_image' ) && get_theme_mod( 'dox_heading_image' ) ) {
			set_theme_mod( 'dox_heading_background_image', get_theme_mod( 'dox_heading_image' ) );
			remove_theme_mod( 'dox_heading_image' );
		}
		if ( ! get_theme_mod( 'dox_heading_background_image_size' ) && get_theme_mod( 'dox_heading_image_size' ) ) {
			set_theme_mod( 'dox_heading_background_image_size', get_theme_mod( 'dox_heading_image_size' ) );
			remove_theme_mod( 'dox_heading_image_size' );
		}
		if ( ! get_theme_mod( 'dox_heading_background_image_position_x' ) && get_theme_mod( 'dox_heading_image_position_x' ) ) {
			set_theme_mod( 'dox_heading_background_image_position_x', get_theme_mod( 'dox_heading_image_position_x' ) );
			remove_theme_mod( 'dox_heading_image_position_x' );
		}
		if ( ! get_theme_mod( 'dox_heading_background_image_position_y' ) && get_theme_mod( 'dox_heading_image_position_y' ) ) {
			set_theme_mod( 'dox_heading_background_image_position_y', get_theme_mod( 'dox_heading_image_position_y' ) );
			remove_theme_mod( 'dox_heading_image_position_y' );
		}

		// Shop Header Image -> Shop Heading Image

		if ( ! get_theme_mod( 'dox_shop_heading_image' ) && get_theme_mod( 'dox_shop_header_image' ) ) {
			set_theme_mod( 'dox_shop_heading_image', get_theme_mod( 'dox_shop_header_image' ) );
			remove_theme_mod( 'dox_shop_header_image' );
		}

		// Heading Title Size -> Heading Font Multiplier
		// @since 1.1.7

		if ( ! get_theme_mod( 'dox_heading_font_multiplier' ) && get_theme_mod( 'dox_heading_title_size' ) ) {
			set_theme_mod( 'dox_heading_font_multiplier', get_theme_mod( 'dox_heading_title_size' ) );
			remove_theme_mod( 'dox_heading_title_size' );
		}

		// Slideshow Caption Title Size -> Slideshow Caption Font Multiplier
		// @since 1.1.7

		if ( ! get_theme_mod( 'dox_slideshow_font_multiplier' ) && get_theme_mod( 'dox_slideshow_caption_title_size' ) ) {
			set_theme_mod( 'dox_slideshow_font_multiplier', get_theme_mod( 'dox_slideshow_caption_title_size' ) );
			remove_theme_mod( 'dox_slideshow_caption_title_size' );
		}

	}

}
