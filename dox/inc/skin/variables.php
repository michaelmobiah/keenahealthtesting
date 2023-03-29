<?php

/*

Theme Variables

*/

/*
====================================================================================================
Set Variables
====================================================================================================
*/

if ( class_exists( 'forqy_less' ) ) {

	if ( ! function_exists( 'dox_variables' ) ) {

		function dox_variables( $vars ) {

			/**
			 * Fonts
			 */
			$vars['font-primary']   = apply_filters( 'dox_font_primary', get_theme_mod( 'dox_font_primary', dox_default( 'dox_font_primary' ) ) ) . ', ' . apply_filters( 'dox_font_primary_type', get_theme_mod( 'dox_font_primary_type', dox_default( 'dox_font_primary_type' ) ) );
			$vars['font-secondary'] = apply_filters( 'dox_font_secondary', get_theme_mod( 'dox_font_secondary', dox_default( 'dox_font_secondary' ) ) ) . ', ' . apply_filters( 'dox_font_secondary_type', get_theme_mod( 'dox_font_secondary_type', dox_default( 'dox_font_secondary_type' ) ) );

			$vars['font-size-base'] = get_theme_mod( 'dox_font_size', dox_default( 'dox_font_size' ) );

			$vars['font-scale']     = get_theme_mod( 'dox_font_scale', dox_default( 'dox_font_scale' ) );
			$vars['font-weight']    = get_theme_mod( 'dox_font_weight', dox_default( 'dox_font_weight' ) );
			$vars['letter-spacing'] = get_theme_mod( 'dox_letter_spacing', dox_default( 'dox_letter_spacing' ) );
			$vars['text-transform'] = get_theme_mod( 'dox_text_transform', dox_default( 'dox_text_transform' ) );
			$vars['line-height']    = get_theme_mod( 'dox_line_height', dox_default( 'dox_line_height' ) );

			// Heading
			$vars['font-size-heading']      = get_theme_mod( 'dox_font_size_heading', dox_default( 'dox_font_size_heading' ) );
			$vars['font-weight-heading']    = get_theme_mod( 'dox_font_weight_heading', dox_default( 'dox_font_weight_heading' ) );
			$vars['letter-spacing-heading'] = get_theme_mod( 'dox_letter_spacing_heading', dox_default( 'dox_letter_spacing_heading' ) );
			$vars['text-transform-heading'] = get_theme_mod( 'dox_text_transform_heading', dox_default( 'dox_text_transform_heading' ) );
			$vars['line-height-heading']    = get_theme_mod( 'dox_line_height_heading', dox_default( 'dox_line_height_heading' ) );

			// Navigation
			if ( get_theme_mod( 'dox_font_family_navigation', dox_default( 'dox_font_family_navigation' ) ) == 'font-primary' ) {
				$vars['font-navigation'] = $vars['font-primary'];
			} else {
				$vars['font-navigation'] = $vars['font-secondary'];
			}
			$vars['font-size-navigation']      = get_theme_mod( 'dox_font_size_navigation', dox_default( 'dox_font_size_navigation' ) );
			$vars['font-weight-navigation']    = get_theme_mod( 'dox_font_weight_navigation', dox_default( 'dox_font_weight_navigation' ) );
			$vars['letter-spacing-navigation'] = get_theme_mod( 'dox_letter_spacing_navigation', dox_default( 'dox_letter_spacing_navigation' ) );
			$vars['text-transform-navigation'] = get_theme_mod( 'dox_text_transform_navigation', dox_default( 'dox_text_transform_navigation' ) );

			// Button
			$vars['font-button']           = get_theme_mod( 'dox_font_family_button', dox_default( 'dox_font_family_button' ) ) == 'font-primary' ? $vars['font-primary'] : $vars['font-secondary'];
			$vars['font-size-button']      = get_theme_mod( 'dox_font_size_button', dox_default( 'dox_font_size_button' ) );
			$vars['font-weight-button']    = get_theme_mod( 'dox_font_weight_button', dox_default( 'dox_font_weight_button' ) );
			$vars['letter-spacing-button'] = get_theme_mod( 'dox_letter_spacing_button', dox_default( 'dox_letter_spacing_button' ) );
			$vars['text-transform-button'] = get_theme_mod( 'dox_text_transform_button', dox_default( 'dox_text_transform_button' ) );

			/**
			 * Logo
			 */
			$vars['logo-padding'] = get_theme_mod( 'dox_logo_padding', dox_default( 'dox_logo_padding' ) );

			/**
			 * Overlay
			 */
			$vars['image-overlay-color']   = get_theme_mod( 'dox_overlay_color', dox_default( 'dox_overlay_color' ) );
			$vars['image-overlay-opacity'] = get_theme_mod( 'dox_overlay_opacity', dox_default( 'dox_overlay_opacity' ) ) . '%';

			/**
			 * Pattern
			 */
			$vars['pattern']         = get_theme_mod( 'dox_pattern', dox_default( 'dox_pattern' ) );
			$vars['pattern-color']   = get_theme_mod( 'dox_pattern_color', dox_default( 'dox_pattern_color' ) );
			$vars['pattern-opacity'] = get_theme_mod( 'dox_pattern_opacity', dox_default( 'dox_pattern_opacity' ) ) . '%';

			/**
			 * Border
			 */
			$vars['border']        = get_theme_mod( 'dox_border', dox_default( 'dox_border' ) );
			$vars['border-width']  = get_theme_mod( 'dox_border_width', dox_default( 'dox_border_width' ) ) . 'px';
			$vars['border-radius'] = get_theme_mod( 'dox_border_radius', dox_default( 'dox_border_radius' ) ) . 'px';

			/**
			 * Filter
			 */
			$vars['filter']           = get_theme_mod( 'dox_filter', dox_default( 'dox_filter' ) );
			$vars['filter-opacity']   = get_theme_mod( 'dox_filter_opacity', dox_default( 'dox_filter_opacity' ) ) . '%';
			$vars['filter-intensity'] = get_theme_mod( 'dox_filter_intensity', dox_default( 'dox_filter_intensity' ) ) . '%';

			/**
			 * Mask
			 */
			$vars['mask'] = get_theme_mod( 'dox_mask', dox_default( 'dox_mask' ) );

			/**
			 * Loading
			 */
			$vars['loading']                  = get_theme_mod( 'dox_loading', dox_default( 'dox_loading' ) );
			$vars['loading-color']            = get_theme_mod( 'dox_loading_color', dox_default( 'dox_loading_color' ) );
			$vars['loading-color-background'] = get_theme_mod( 'dox_loading_color_background', dox_default( 'dox_loading_color_background' ) );

			/**
			 * Background
			 */
			$vars['background-color']           = get_theme_mod( 'dox_background_color', dox_default( 'dox_background_color' ) );
			$vars['background-overlay-color']   = get_theme_mod( 'dox_background_overlay_color', dox_default( 'dox_background_overlay_color' ) );
			$vars['background-overlay-opacity'] = get_theme_mod( 'dox_background_overlay_opacity', dox_default( 'dox_background_overlay_opacity' ) ) . '%';

			/**
			 * Bar
			 */
			$vars['bar-color']            = get_theme_mod( 'dox_bar_color', dox_default( 'dox_bar_color' ) );
			$vars['bar-color-opacity']    = get_theme_mod( 'dox_bar_color_opacity', dox_default( 'dox_bar_color_opacity' ) ) . '%';
			$vars['bar-color-accent']     = get_theme_mod( 'dox_bar_color_accent', dox_default( 'dox_bar_color_accent' ) );
			$vars['bar-color-background'] = get_theme_mod( 'dox_bar_color_background', dox_default( 'dox_bar_color_background' ) );

			/**
			 * Header
			 */
			$vars['header-color']                    = get_theme_mod( 'dox_header_color', dox_default( 'dox_header_color' ) );
			$vars['header-color-accent']             = get_theme_mod( 'dox_header_color_accent', dox_default( 'dox_header_color_accent' ) );
			$vars['header-color-background']         = get_theme_mod( 'dox_header_color_background', dox_default( 'dox_header_color_background' ) );
			$vars['header-color-background-opacity'] = get_theme_mod( 'dox_header_color_background_opacity', dox_default( 'dox_header_color_background_opacity' ) ) . '%';

			// Sticky
			$vars['header-sticky-color']                    = get_theme_mod( 'dox_header_sticky_color', dox_default( 'dox_header_sticky_color' ) );
			$vars['header-sticky-color-accent']             = get_theme_mod( 'dox_header_sticky_color_accent', dox_default( 'dox_header_sticky_color_accent' ) );
			$vars['header-sticky-color-background']         = get_theme_mod( 'dox_header_sticky_color_background', dox_default( 'dox_header_sticky_color_background' ) );
			$vars['header-sticky-color-background-opacity'] = get_theme_mod( 'dox_header_sticky_color_background_opacity', dox_default( 'dox_header_sticky_color_background_opacity' ) ) . '%';

			// Settings
			$vars['header-padding'] = get_theme_mod( 'dox_header_padding', dox_default( 'dox_header_padding' ) );

			/**
			 * Heading
			 */
			$vars['heading-color']                    = get_theme_mod( 'dox_heading_color', dox_default( 'dox_heading_color' ) );
			$vars['heading-color-accent']             = get_theme_mod( 'dox_heading_color_accent', dox_default( 'dox_heading_color_accent' ) );
			$vars['heading-color-background']         = get_theme_mod( 'dox_heading_color_background', dox_default( 'dox_heading_color_background' ) );
			$vars['heading-color-background-opacity'] = get_theme_mod( 'dox_heading_color_background_opacity', dox_default( 'dox_heading_color_background_opacity' ) ) . '%';

			// Font
			$vars['heading-font-multiplier'] = get_theme_mod( 'dox_heading_font_multiplier', dox_default( 'dox_heading_font_multiplier' ) );

			// Overlay
			$vars['heading-background-overlay-color']   = get_theme_mod( 'dox_heading_overlay_color', dox_default( 'dox_heading_overlay_color' ) );
			$vars['heading-background-overlay-opacity'] = get_theme_mod( 'dox_heading_overlay_opacity', dox_default( 'dox_heading_overlay_opacity' ) ) . '%';
			// Gradient
			$vars['heading-background-gradient-color']   = get_theme_mod( 'dox_heading_gradient_color', dox_default( 'dox_heading_gradient_color' ) );
			$vars['heading-background-gradient-opacity'] = get_theme_mod( 'dox_heading_gradient_opacity', dox_default( 'dox_heading_gradient_opacity' ) ) . '%';
			$vars['heading-background-gradient-angle']   = get_theme_mod( 'dox_heading_gradient_angle', dox_default( 'dox_heading_gradient_angle' ) ) . 'deg';
			// Background
			$vars['heading-background-image-size']       = get_theme_mod( 'dox_heading_background_image_size', dox_default( 'dox_heading_background_image_size' ) );
			$vars['heading-background-image-position-x'] = get_theme_mod( 'dox_heading_background_image_position_x', dox_default( 'dox_heading_background_image_position_x' ) );
			$vars['heading-background-image-position-y'] = get_theme_mod( 'dox_heading_background_image_position_y', dox_default( 'dox_heading_background_image_position_y' ) );

			/**
			 * Navigation
			 */
			$vars['navigation-padding'] = str_replace( 'px', '', get_theme_mod( 'dox_navigation_padding', dox_default( 'dox_navigation_padding' ) ) ) . 'px';

			$vars['navigation-color']                    = get_theme_mod( 'dox_navigation_color', dox_default( 'dox_navigation_color' ) );
			$vars['navigation-color-accent']             = get_theme_mod( 'dox_navigation_color_accent', dox_default( 'dox_navigation_color_accent' ) );
			$vars['navigation-color-background']         = get_theme_mod( 'dox_navigation_color_background', dox_default( 'dox_navigation_color_background' ) );
			$vars['navigation-color-background-opacity'] = get_theme_mod( 'dox_navigation_color_background_opacity', dox_default( 'dox_navigation_color_background_opacity' ) ) . '%';

			// Sub-navigation
			$vars['navigation-sub-color']            = get_theme_mod( 'dox_navigation_sub_color', dox_default( 'dox_navigation_sub_color' ) );
			$vars['navigation-sub-color-accent']     = get_theme_mod( 'dox_navigation_sub_color_accent', dox_default( 'dox_navigation_sub_color_accent' ) );
			$vars['navigation-sub-color-background'] = get_theme_mod( 'dox_navigation_sub_color_background', dox_default( 'dox_navigation_sub_color_background' ) );

			// Mobile
			$vars['navigation-mobile-color']            = get_theme_mod( 'dox_navigation_mobile_color', dox_default( 'dox_navigation_mobile_color' ) );
			$vars['navigation-mobile-color-accent']     = get_theme_mod( 'dox_navigation_mobile_color_accent', dox_default( 'dox_navigation_mobile_color_accent' ) );
			$vars['navigation-mobile-color-background'] = get_theme_mod( 'dox_navigation_mobile_color_background', dox_default( 'dox_navigation_mobile_color_background' ) );

			$vars['navigation-mobile-overlay-color']   = get_theme_mod( 'dox_navigation_mobile_overlay_color', dox_default( 'dox_navigation_mobile_overlay_color' ) );
			$vars['navigation-mobile-overlay-opacity'] = get_theme_mod( 'dox_navigation_mobile_overlay_opacity', dox_default( 'dox_navigation_mobile_overlay_opacity' ) ) . '%';

			/**
			 * Slideshow
			 */
			$vars['slideshow-color']                    = get_theme_mod( 'dox_slideshow_color', dox_default( 'dox_slideshow_color' ) );
			$vars['slideshow-color-accent']             = get_theme_mod( 'dox_slideshow_color_accent', dox_default( 'dox_slideshow_color_accent' ) );
			$vars['slideshow-color-background']         = get_theme_mod( 'dox_slideshow_color_background', dox_default( 'dox_slideshow_color_background' ) );
			$vars['slideshow-color-background-opacity'] = get_theme_mod( 'dox_slideshow_color_background_opacity', dox_default( 'dox_slideshow_color_background_opacity' ) ) . '%';

			// Font
			$vars['slideshow-font-multiplier'] = get_theme_mod( 'dox_slideshow_font_multiplier', dox_default( 'dox_slideshow_font_multiplier' ) );

			// Slide
			$vars['slideshow-slide-color-background']         = get_theme_mod( 'dox_slideshow_slide_color_background', dox_default( 'dox_slideshow_slide_color_background' ) );
			$vars['slideshow-slide-color-background-opacity'] = get_theme_mod( 'dox_slideshow_slide_color_background_opacity', dox_default( 'dox_slideshow_slide_color_background_opacity' ) ) . '%';

			$vars['slideshow-slide-overlay-color']         = get_theme_mod( 'dox_slideshow_slide_overlay_color', dox_default( 'dox_slideshow_slide_overlay_color' ) );
			$vars['slideshow-slide-overlay-color-opacity'] = get_theme_mod( 'dox_slideshow_slide_overlay_color_opacity', dox_default( 'dox_slideshow_slide_overlay_color_opacity' ) ) . '%';

			$vars['slideshow-slide-gradient-color']   = get_theme_mod( 'dox_slideshow_slide_gradient_color', dox_default( 'dox_slideshow_slide_gradient_color' ) );
			$vars['slideshow-slide-gradient-opacity'] = get_theme_mod( 'dox_slideshow_slide_gradient_opacity', dox_default( 'dox_slideshow_slide_gradient_opacity' ) ) . '%';
			$vars['slideshow-slide-gradient-angle']   = get_theme_mod( 'dox_slideshow_slide_gradient_angle', dox_default( 'dox_slideshow_slide_gradient_angle' ) ) . 'deg';

			$vars['slideshow-slide-image-position-x'] = get_theme_mod( 'dox_slideshow_slide_image_position_x', dox_default( 'dox_slideshow_slide_image_position_x' ) );
			$vars['slideshow-slide-image-position-y'] = get_theme_mod( 'dox_slideshow_slide_image_position_y', dox_default( 'dox_slideshow_slide_image_position_y' ) );
			$vars['slideshow-slide-image-size']       = get_theme_mod( 'dox_slideshow_slide_image_size', dox_default( 'dox_slideshow_slide_image_size' ) );

			// Settings
			$vars['slideshow-speed']         = get_theme_mod( 'dox_slideshow_speed', dox_default( 'dox_slideshow_speed' ) ) . 'ms';
			$vars['slideshow-slides-gutter'] = get_theme_mod( 'dox_slideshow_gutter', dox_default( 'dox_slideshow_gutter' ) ) . 'px';

			// Background
			$vars['slideshow-image-overlay-color']   = get_theme_mod( 'dox_slideshow_image_overlay_color', dox_default( 'dox_slideshow_image_overlay_color' ) );
			$vars['slideshow-image-overlay-opacity'] = get_theme_mod( 'dox_slideshow_image_overlay_opacity', dox_default( 'dox_slideshow_image_overlay_opacity' ) ) . '%';

			$vars['slideshow-image-gradient-color']   = get_theme_mod( 'dox_slideshow_image_gradient_color', dox_default( 'dox_slideshow_image_gradient_color' ) );
			$vars['slideshow-image-gradient-opacity'] = get_theme_mod( 'dox_slideshow_image_gradient_opacity', dox_default( 'dox_slideshow_image_gradient_opacity' ) ) . '%';
			$vars['slideshow-image-gradient-angle']   = get_theme_mod( 'dox_slideshow_image_gradient_angle', dox_default( 'dox_slideshow_image_gradient_angle' ) ) . 'deg';

			/**
			 * Carousel
			 */
			$vars['carousel-slides-gutter'] = get_theme_mod( 'dox_carousel_gutter', dox_default( 'dox_carousel_gutter' ) ) . 'px';

			/**
			 * Content
			 */
			$vars['content-color']            = get_theme_mod( 'dox_content_color', dox_default( 'dox_content_color' ) );
			$vars['content-color-opacity']    = get_theme_mod( 'dox_content_color_opacity', dox_default( 'dox_content_color_opacity' ) ) . '%';
			$vars['content-color-accent']     = get_theme_mod( 'dox_content_color_accent', dox_default( 'dox_content_color_accent' ) );
			$vars['content-color-background'] = get_theme_mod( 'dox_content_color_background', dox_default( 'dox_content_color_background' ) );

			/**
			 * Posts
			 */
			$vars['post-gutter'] = get_theme_mod( 'dox_posts_gutter', dox_default( 'dox_posts_gutter' ) ) . 'px';

			/**
			 * Post
			 */
			$vars['post-color']            = get_theme_mod( 'dox_post_color', dox_default( 'dox_post_color' ) );
			$vars['post-color-opacity']    = get_theme_mod( 'dox_post_color_opacity', dox_default( 'dox_post_color_opacity' ) ) . '%';
			$vars['post-color-accent']     = get_theme_mod( 'dox_post_color_accent', dox_default( 'dox_post_color_accent' ) );
			$vars['post-color-background'] = get_theme_mod( 'dox_post_color_background', dox_default( 'dox_post_color_background' ) );

			/**
			 * Categories
			 */
			$vars['category-gutter'] = get_theme_mod( 'dox_categories_gutter', dox_default( 'dox_categories_gutter' ) ) . 'px';

			/**
			 * Category
			 */
			$vars['category-color']            = get_theme_mod( 'dox_category_color', dox_default( 'dox_category_color' ) );
			$vars['category-color-accent']     = get_theme_mod( 'dox_category_color_accent', dox_default( 'dox_category_color_accent' ) );
			$vars['category-color-background'] = get_theme_mod( 'dox_category_color_background', dox_default( 'dox_category_color_background' ) );

			/**
			 * Newsletter
			 */
			$vars['newsletter-color']            = get_theme_mod( 'dox_newsletter_color', dox_default( 'dox_newsletter_color' ) );
			$vars['newsletter-color-accent']     = get_theme_mod( 'dox_newsletter_color_accent', dox_default( 'dox_newsletter_color_accent' ) );
			$vars['newsletter-color-background'] = get_theme_mod( 'dox_newsletter_color_background', dox_default( 'dox_newsletter_color_background' ) );

			/**
			 * Footer
			 */
			$vars['footer-padding'] = str_replace( 'px', '', get_theme_mod( 'dox_footer_padding', dox_default( 'dox_footer_padding' ) ) ) . 'px';

			$vars['footer-color']                    = get_theme_mod( 'dox_footer_color', dox_default( 'dox_footer_color' ) );
			$vars['footer-color-opacity']            = get_theme_mod( 'dox_footer_color_opacity', dox_default( 'dox_footer_color_opacity' ) ) . '%';
			$vars['footer-color-accent']             = get_theme_mod( 'dox_footer_color_accent', dox_default( 'dox_footer_color_accent' ) );
			$vars['footer-color-background']         = get_theme_mod( 'dox_footer_color_background', dox_default( 'dox_footer_color_background' ) );
			$vars['footer-color-background-opacity'] = get_theme_mod( 'dox_footer_color_background_opacity', dox_default( 'dox_footer_color_background_opacity' ) ) . '%';

			/**
			 * Off-canvas
			 */
			$vars['off-overlay-color']   = get_theme_mod( 'dox_off_overlay_color', dox_default( 'dox_off_overlay_color' ) );
			$vars['off-overlay-opacity'] = get_theme_mod( 'dox_off_overlay_opacity', dox_default( 'dox_off_overlay_opacity' ) ) . '%';
			
			/**
			 * Search
			 */
			$vars['search-color']            = get_theme_mod( 'dox_search_color', dox_default( 'dox_search_color' ) );
			$vars['search-color-accent']     = get_theme_mod( 'dox_search_color_accent', dox_default( 'dox_search_color_accent' ) );
			$vars['search-color-background'] = get_theme_mod( 'dox_search_color_background', dox_default( 'dox_search_color_background' ) );

			/**
			 * Call to Action
			 */
			$vars['call-to-action-color']            = get_theme_mod( 'dox_call_to_action_color', dox_default( 'dox_call_to_action_color' ) );
			$vars['call-to-action-color-accent']     = get_theme_mod( 'dox_call_to_action_color_accent', dox_default( 'dox_call_to_action_color_accent' ) );
			$vars['call-to-action-color-background'] = get_theme_mod( 'dox_call_to_action_color_background', dox_default( 'dox_call_to_action_color_background' ) );

			/**
			 * Datepicker
			 */
			$vars['datepicker-color']            = get_theme_mod( 'dox_datepicker_color', dox_default( 'dox_datepicker_color' ) );
			$vars['datepicker-color-accent']     = get_theme_mod( 'dox_datepicker_color_accent', dox_default( 'dox_datepicker_color_accent' ) );
			$vars['datepicker-color-background'] = get_theme_mod( 'dox_datepicker_color_background', dox_default( 'dox_datepicker_color_background' ) );

			/**
			 * Player
			 */
			$vars['player-color']            = get_theme_mod( 'dox_player_color', dox_default( 'dox_player_color' ) );
			$vars['player-color-accent']     = get_theme_mod( 'dox_player_color_accent', dox_default( 'dox_player_color_accent' ) );
			$vars['player-color-background'] = get_theme_mod( 'dox_player_color_background', dox_default( 'dox_player_color_background' ) );

			/**
			 * Lightbox
			 */
			$vars['lightbox-color']                    = get_theme_mod( 'dox_lightbox_color', dox_default( 'dox_lightbox_color' ) );
			$vars['lightbox-color-background']         = get_theme_mod( 'dox_lightbox_color_background', dox_default( 'dox_lightbox_color_background' ) );
			$vars['lightbox-color-background-opacity'] = get_theme_mod( 'dox_lightbox_color_background_opacity', dox_default( 'dox_lightbox_color_background_opacity' ) ) . '%';

			/**
			 * States
			 */
			$vars['error-color']   = get_theme_mod( 'dox_error_color', dox_default( 'dox_error_color' ) );
			$vars['success-color'] = get_theme_mod( 'dox_success_color', dox_default( 'dox_success_color' ) );

			return $vars;

		}

		add_filter( 'less_vars', 'dox_variables', 10, 1 );
		add_filter( 'forqy_properties', 'dox_variables', 10, 1 );
		add_filter( 'forqy_editor_properties', 'dox_variables', 10, 1 );

	}

}

/*
====================================================================================================
Set Global Variables
====================================================================================================
*/

if ( ! function_exists( 'dox_variables_global' ) ) {

	function dox_variables_global( $vars ) {

		// Theme URL

		$vars['template_directory_uri']   = '~"' . get_template_directory_uri() . '"';
		$vars['stylesheet_directory_uri'] = '~"' . get_stylesheet_directory_uri() . '"';

		return $vars;

	}

	add_filter( 'less_vars', 'dox_variables_global', 10, 2 );

}
