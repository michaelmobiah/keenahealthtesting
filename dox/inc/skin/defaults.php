<?php

/*

Theme Defaults

*/

if ( ! function_exists( 'dox_defaults' ) ) {

	/**
	 * Set Defaults
	 *
	 * @param $default
	 *
	 * @return mixed
	 */
	function dox_defaults( $default ) {

		/**
		 * Site
		 */
		$default['dox_website_type'] = 'business'; // business | person | restaurant | music

		/**
		 * Fonts
		 */
		$default['dox_font_primary']        = 'Manrope';
		$default['dox_font_primary_type']   = 'sans-serif'; // serif, sans-serif, monospace
		$default['dox_font_primary_styles'] = '400,700';

		$default['dox_font_secondary']        = 'Manrope';
		$default['dox_font_secondary_type']   = 'sans-serif'; // serif, sans-serif, monospace
		$default['dox_font_secondary_styles'] = '400,700';

		// Global
		$default['dox_font_size']      = '16px';
		$default['dox_font_scale']     = '1.150';
		$default['dox_font_weight']    = '400';
		$default['dox_font_display']   = 'swap'; // block [default] | swap | fallback | optional
		$default['dox_letter_spacing'] = '0.025em';
		$default['dox_text_transform'] = 'none';
		$default['dox_line_height']    = '1.7';

		// Heading
		$default['dox_font_size_heading']      = '16px';
		$default['dox_font_weight_heading']    = '700';
		$default['dox_letter_spacing_heading'] = '0';
		$default['dox_text_transform_heading'] = 'none';
		$default['dox_line_height_heading']    = '1.3';

		// Navigation
		$default['dox_font_family_navigation']    = 'font-secondary'; // font-primary | font-secondary
		$default['dox_font_size_navigation']      = '16px';
		$default['dox_font_weight_navigation']    = '400';
		$default['dox_letter_spacing_navigation'] = '0.025em';
		$default['dox_text_transform_navigation'] = 'none';

		// Button
		$default['dox_font_family_button']    = 'font-primary';
		$default['dox_font_size_button']      = '16px';
		$default['dox_font_weight_button']    = '700';
		$default['dox_letter_spacing_button'] = '0';
		$default['dox_text_transform_button'] = 'none';

		/**
		 * Logo
		 */
		$default['dox_logo_padding'] = '0'; // px

		/**
		 * Pattern
		 */
		$default['dox_pattern']         = 'none';
		$default['dox_pattern_color']   = '#ffffff';
		$default['dox_pattern_opacity'] = '20'; // % - max 99.99

		/**
		 * Border
		 */
		$default['dox_border']        = 'break-large';
		$default['dox_border_width']  = '2'; // px
		$default['dox_border_radius'] = '2'; // px

		/**
		 * Filter
		 */
		$default['dox_filter']           = 'none';
		$default['dox_filter_opacity']   = '75'; // %
		$default['dox_filter_intensity'] = '100'; // %

		/**
		 * Mask
		 */
		$default['dox_mask'] = 'none';

		/**
		 * Loading
		 */
		$default['dox_loading']                  = 'none'; // none | simple-top | simple-center | classic | full | spinner
		$default['dox_loading_transition']       = 'fade'; // fade | slide | slide-vertical
		$default['dox_loading_color']            = '#282846';
		$default['dox_loading_color_background'] = '#ffffff';

		/**
		 * Background
		 */
		$default['dox_background_color']           = '#ffffff';
		$default['dox_background_overlay_color']   = '#282846';
		$default['dox_background_overlay_opacity'] = '60'; // %

		/**
		 * Bar
		 */
		$default['dox_bar'] = 'enabled'; // enabled | disabled

		$default['dox_bar_socials'] = 'enabled'; // enabled | disabled
		$default['dox_bar_cart']    = 'enabled'; // enabled | disabled

		$default['dox_bar_color']            = '#282846';
		$default['dox_bar_color_opacity']    = '80'; // %
		$default['dox_bar_color_accent']     = '#282846';
		$default['dox_bar_color_background'] = '#ffffff';

		/**
		 * Header
		 */
		$default['dox_header_color']                    = '#ffffff';
		$default['dox_header_color_accent']             = '#dc7878';
		$default['dox_header_color_background']         = '#141432';
		$default['dox_header_color_background_opacity'] = '0'; // %

		// Settings
		$default['dox_header_layout']  = 'left'; // left | center | centered
		$default['dox_header_padding'] = '40px'; // 0px | 10px | 20px | 30px | 40px
		$default['dox_header_width']   = 'centered'; // full | centered

		$default['dox_header_socials']      = 'enabled'; // enabled | disabled
		$default['dox_header_shop_toolbar'] = 'enabled'; // enabled | disabled

		// Sticky
		$default['dox_header_sticky']                          = 'enabled'; // enabled | disabled
		$default['dox_header_sticky_color']                    = '#282846';
		$default['dox_header_sticky_color_accent']             = '#c84b55';
		$default['dox_header_sticky_color_background']         = '#ffffff';
		$default['dox_header_sticky_color_background_opacity'] = '100'; // %

		/**
		 * Heading
		 */
		$default['dox_heading_color']                    = '#ffffff';
		$default['dox_heading_color_accent']             = '#c84b55';
		$default['dox_heading_color_background']         = '#141432';
		$default['dox_heading_color_background_opacity'] = '100'; // %

		$default['dox_heading_font_multiplier'] = '1.4'; // multiplier 0.8 - 2.4

		$default['dox_heading_height']        = 'small'; // xsmall | small | medium | large | xlarge | full
		$default['dox_heading_height_single'] = 'medium'; // xsmall | small | medium | large | xlarge | full

		$default['dox_heading_align_horizontal'] = 'center'; // left | center | right
		$default['dox_heading_align_vertical']   = 'center'; // top | center | bottom

		// Overlay
		$default['dox_heading_overlay_color']   = '#141432';
		$default['dox_heading_overlay_opacity'] = '50'; // %

		// Gradient
		$default['dox_heading_gradient_color']   = '#141432';
		$default['dox_heading_gradient_opacity'] = '50'; // %
		$default['dox_heading_gradient_angle']   = '0'; // deg

		// Background
		$default['dox_heading_background_width'] = 'full'; // full | two-thirds-left | two-thirds-center | two-thirds-right | half-left | half-center | half-right

		$default['dox_heading_background_image']            = 'enabled'; // enabled | disabled
		$default['dox_heading_background_image_size']       = 'cover'; // cover | contain | fill | none
		$default['dox_heading_background_image_position_x'] = 'center'; // left | center | right
		$default['dox_heading_background_image_position_y'] = 'center'; // top | center | bottom

		/**
		 * Navigation
		 */
		$default['dox_navigation_padding'] = '0'; // 0px | 5px | 10px | 20px | 30px | 40px
		$default['dox_navigation_align']   = 'right'; // default | left | center | right

		$default['dox_navigation_color']                    = '#ffffff';
		$default['dox_navigation_color_accent']             = '#dc7878';
		$default['dox_navigation_color_background']         = '#141432';
		$default['dox_navigation_color_background_opacity'] = '0'; // %

		// Sub-navigation
		$default['dox_navigation_sub_color']            = '#282846';
		$default['dox_navigation_sub_color_accent']     = '#c84b55';
		$default['dox_navigation_sub_color_background'] = '#ffffff';

		// Mobile
		$default['dox_navigation_mobile_color']            = '#282846';
		$default['dox_navigation_mobile_color_accent']     = '#c84b55';
		$default['dox_navigation_mobile_color_background'] = '#ffffff';

		$default['dox_navigation_mobile_overlay_color']   = '#141432';
		$default['dox_navigation_mobile_overlay_opacity'] = '95'; // %

		$default['dox_navigation_mobile_on_desktop'] = 'disabled'; // enabled | disabled
		$default['dox_navigation_mobile_position']   = 'right'; // right | left

		/**
		 * Slideshow
		 */
		$default['dox_slideshow_color']                    = '#ffffff';
		$default['dox_slideshow_color_accent']             = '#c84b55';
		$default['dox_slideshow_color_background']         = '#141432';
		$default['dox_slideshow_color_background_opacity'] = '100'; // %

		// Font
		$default['dox_slideshow_font_multiplier'] = '1.4'; // multiplier 0.8 - 2.4

		// Background
		$default['dox_slideshow_image_overlay_color']   = '#141432';
		$default['dox_slideshow_image_overlay_opacity'] = '0'; // %

		$default['dox_slideshow_image_gradient_color']   = '#141432';
		$default['dox_slideshow_image_gradient_opacity'] = '0'; // %
		$default['dox_slideshow_image_gradient_angle']   = '135'; // deg

		// Slide
		$default['dox_slideshow_slide_color_background']         = '#141432';
		$default['dox_slideshow_slide_color_background_opacity'] = '100'; // %

		$default['dox_slideshow_slide_overlay_color']         = '#141432';
		$default['dox_slideshow_slide_overlay_color_opacity'] = '50'; // %

		$default['dox_slideshow_slide_gradient_color']   = '#141432';
		$default['dox_slideshow_slide_gradient_opacity'] = '50'; // %
		$default['dox_slideshow_slide_gradient_angle']   = '0'; // deg

		$default['dox_slideshow_slide_layout'] = 'default'; // default | split-v | split-v-2

		// Image
		$default['dox_slideshow_slide_image_size']       = 'cover'; // cover | contain | fill | none
		$default['dox_slideshow_slide_image_position_x'] = 'center'; // left | center | right
		$default['dox_slideshow_slide_image_position_y'] = 'center'; // top | center | bottom

		// Caption
		$default['dox_slideshow_caption_background']       = 'transparent'; // transparent | solid
		$default['dox_slideshow_caption_position']         = 'center'; // left | center | right
		$default['dox_slideshow_caption_position_v']       = 'center'; // center | bottom
		$default['dox_slideshow_caption_excerpt']          = 'enabled'; // enabled | disabled
		$default['dox_slideshow_caption_button']           = 'accent'; // default | accent | bordered
		$default['dox_slideshow_caption_button_secondary'] = 'bordered'; // default | accent | bordered

		// Pagination
		$default['dox_slideshow_pagination']       = 'enabled';
		$default['dox_slideshow_pagination_align'] = 'center'; // left | center | right

		// Settings
		$default['dox_slideshow_posts']       = 'slide'; // slide | project | event | gallery | sticky
		$default['dox_slideshow_posts_count'] = '6'; // slide - unlimited | sticky - unlimited | type - up to 10
		$default['dox_slideshow_height']      = 'full'; // default | full
		$default['dox_slideshow_slides']      = '1'; // 1 - 3
		$default['dox_slideshow_gutter']      = '0'; // px
		$default['dox_slideshow_direction']   = 'horizontal'; // horizontal | vertical
		$default['dox_slideshow_effect']      = 'slide'; // slide | fade | creative
		$default['dox_slideshow_speed']       = '600'; // ms
		$default['dox_slideshow_loop']        = 'true'; // true | false
		$default['dox_slideshow_autoplay']    = '10000'; // ms

		// Shortcode
		$default['dox_slideshow_shortcode'] = ''; // [shortcode]

		/**
		 * Carousel
		 */
		$default['dox_carousel_gutter'] = '40'; // px

		/**
		 * Content
		 */
		$default['dox_content_layout'] = '100'; // stretched | 100

		$default['dox_content_color']            = '#282846';
		$default['dox_content_color_opacity']    = '80'; // %
		$default['dox_content_color_accent']     = '#c84b55';
		$default['dox_content_color_background'] = '#ffffff';

		/**
		 * Image
		 */
		$default['dox_overlay_color']   = '#282846';
		$default['dox_overlay_opacity'] = '20'; // %

		/**
		 * Page
		 */
		$default['dox_page_width'] = '100'; // stretched | 100 | 75 | 50

		/**
		 * Posts
		 */
		$default['dox_posts_layout'] = 'masonry-broken'; // default (flex) | masonry | masonry-broken
		$default['dox_posts_gutter'] = '40'; // px

		/**
		 * Post
		 */
		$default['dox_post_layout']         = 'default'; // default | side | slide | cover
		$default['dox_post_appearance']     = 'card'; // classic | card
		$default['dox_post_meta']           = 'enabled'; // enabled | disabled
		$default['dox_post_overlay_type']   = 'reversed'; // default | reversed
		$default['dox_post_excerpt']        = 'enabled'; // enabled | disabled
		$default['dox_post_excerpt_length'] = '36'; // number of words
		// Colors
		$default['dox_post_color']            = '#282846';
		$default['dox_post_color_opacity']    = '80'; // %
		$default['dox_post_color_accent']     = '#c84b55';
		$default['dox_post_color_background'] = '#ffffff';

		// Menu
		$default['dox_menu_post_layout'] = 'default'; // default | side

		/**
		 * Single
		 */
		$default['dox_post_single_width'] = '75'; // stretched | 100 | 75 | 50

		// Menu
		$default['dox_menu_single'] = 'disabled'; // enabled | disabled

		/**
		 * Categories
		 */
		$default['dox_categories_gutter'] = '20'; // px

		/**
		 * Category
		 */
		$default['dox_category_color']            = '#ffffff';
		$default['dox_category_color_accent']     = '#c84b55';
		$default['dox_category_color_background'] = '#282846';

		/**
		 * Newsletter
		 */
		$default['dox_newsletter_color']            = '#ffffff';
		$default['dox_newsletter_color_accent']     = '#c84b55';
		$default['dox_newsletter_color_background'] = '#282846';

		/**
		 * Footer
		 */
		$default['dox_footer']          = 'enabled'; // enabled | disabled
		$default['dox_footer_homepage'] = 'enabled'; // enabled | disabled

		$default['dox_footer_width']   = '100'; // stretched | 100
		$default['dox_footer_padding'] = '20'; // px

		$default['dox_footer_color']                    = '#ffffff';
		$default['dox_footer_color_opacity']            = '80'; // %
		$default['dox_footer_color_accent']             = '#fa7d7d';
		$default['dox_footer_color_background']         = '#141432';
		$default['dox_footer_color_background_opacity'] = '100'; // %

		/**
		 * Off-canvas
		 */
		$default['dox_off_overlay_color']   = '#141432';
		$default['dox_off_overlay_opacity'] = '95'; // %

		/**
		 * Search
		 */
		$default['dox_search_color']            = '#282846';
		$default['dox_search_color_accent']     = '#c84b55';
		$default['dox_search_color_background'] = '#ffffff';

		/**
		 * Call to Action
		 */
		$default['dox_call_to_action_color']            = '#ffffff';
		$default['dox_call_to_action_color_accent']     = '#c84b55';
		$default['dox_call_to_action_color_background'] = '#c84b55';

		/**
		 * Datepicker
		 */
		$default['dox_datepicker_color']            = '#282846';
		$default['dox_datepicker_color_accent']     = '#c84b55';
		$default['dox_datepicker_color_background'] = '#ffffff';

		/**
		 * Player
		 */
		$default['dox_player_color']            = '#282846';
		$default['dox_player_color_accent']     = '#c84b55';
		$default['dox_player_color_background'] = '#ffffff';

		/**
		 * Lightbox
		 */
		$default['dox_lightbox_color']                    = '#ffffff';
		$default['dox_lightbox_color_background']         = '#141432';
		$default['dox_lightbox_color_background_opacity'] = '95'; // %

		/**
		 * States
		 */
		$default['dox_error_color']   = '#c84b55';
		$default['dox_success_color'] = '#508c78';

		/**
		 * Date
		 */
		$default['dox_date_format']    = 'd m Y';
		$default['dox_date_delimiter'] = '/';

		/**
		 * Shop
		 */
		$default['dox_shop_title'] = 'disabled'; // enabled | disabled

		$default['dox_shop_breadcrumbs'] = 'disabled'; // enabled | disabled

		$default['dox_shop_product_columns']   = '4';
		$default['dox_shop_products_per_page'] = '12';

		$default['dox_shop_product_add_to_cart']    = 'enabled'; // enabled | disabled
		$default['dox_shop_product_gallery_zoom']   = 'disabled'; // enabled | disabled
		$default['dox_shop_product_gallery_slider'] = 'enabled'; // enabled | disabled

		// Toolbar
		$default['dox_shop_toolbar_search']  = 'enabled'; // enabled | disabled
		$default['dox_shop_toolbar_account'] = 'enabled'; // enabled | disabled

		/**
		 * About
		 */
		$default['dox_about_currency'] = 'USD'; // ISO 4217 currency format [https://en.wikipedia.org/wiki/ISO_4217]

		/**
		 * Homepage
		 */

		// Slideshow
		$default['dox_homepage_slideshow'] = 'enabled';
		// Carousel
		$default['dox_homepage_carousel']      = 'disabled';
		$default['dox_homepage_carousel_type'] = 'project'; // sticky | post | project | event | album | gallery
		// Categories
		$default['dox_homepage_categories_tax'] = 'category';

		// Order of Sections
		$default['dox_homepage_carousel_order']          = '10';
		$default['dox_homepage_about_order']             = '20';
		$default['dox_homepage_projects_order']          = '30';
		$default['dox_homepage_albums_order']            = '40';
		$default['dox_homepage_events_order']            = '50';
		$default['dox_homepage_galleries_order']         = '60';
		$default['dox_homepage_posts_order']             = '70';
		$default['dox_homepage_categories_order']        = '80';
		$default['dox_homepage_products_featured_order'] = '90';
		$default['dox_homepage_products_recent_order']   = '100';

		// Number of posts
		$default['dox_homepage_posts_count']             = '3';
		$default['dox_homepage_projects_count']          = '3';
		$default['dox_homepage_albums_count']            = '3';
		$default['dox_homepage_events_count']            = '3';
		$default['dox_homepage_galleries_count']         = '3';
		$default['dox_homepage_products_featured_count'] = '3';
		$default['dox_homepage_products_recent_count']   = '3';

		return $default;

	}

}

if ( ! function_exists( 'dox_default' ) ) {

	/**
	 * Get Default
	 *
	 * @param $key
	 *
	 * @return mixed
	 */
	function dox_default( $key ) {
		global $default;

		$defaults = dox_defaults( $default );

		return $defaults[ $key ];

	}

	add_filter( 'forqy_theme_default', 'dox_theme_default', 10, 1 );

}
