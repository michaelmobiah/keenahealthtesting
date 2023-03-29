<?php

/*

Theme Classes

*/

if ( ! function_exists( 'dox_classes' ) ) {

	/**
	 * Set Body Classes
	 *
	 * @param $classes
	 *
	 * @return mixed
	 */
	function dox_classes( $classes ) {

		/**
		 * Mobile
		 */
		if ( get_theme_mod( 'dox_navigation_mobile_on_desktop', dox_default( 'dox_navigation_mobile_on_desktop' ) ) == 'enabled' ) {
			$classes[] = 'navigation-all--enabled';
		}

		/**
		 * Page
		 */
		if ( is_page_template( 'template-homepage.php' ) || is_page_template( 'template-homepage-blog.php' ) || is_page_template( 'template-homepage-shop.php' ) ) {
			$classes[] = 'homepage';

			if ( get_theme_mod( 'dox_homepage_slideshow', dox_default( 'dox_homepage_slideshow' ) == 'disabled' ) ) {
				$classes[] = 'slideshow-disabled';
			}
		}

		/**
		 * Background
		 */
		if ( get_background_image() != '' ) {
			$classes[] = 'custom-background-image';
		}

		/**
		 * Design
		 */
		// Pattern
		$classes[] = 'pattern-' . get_theme_mod( 'dox_pattern', dox_default( 'dox_pattern' ) );
		// Border
		$classes[] = 'border-' . get_theme_mod( 'dox_border', dox_default( 'dox_border' ) );
		if ( get_theme_mod( 'dox_border', dox_default( 'dox_border' ) ) != 'none' ) {
			$classes[] = 'border-enabled';
		}
		// Filter
		$classes[] = 'filter-' . get_theme_mod( 'dox_filter', dox_default( 'dox_filter' ) );
		// Mask
		$classes[] = 'mask-' . get_theme_mod( 'dox_mask', dox_default( 'dox_mask' ) );

		/**
		 * Loading
		 */
		$classes[] = 'loading-' . get_theme_mod( 'dox_loading', dox_default( 'dox_loading' ) );
		$classes[] = 'loading-transition-' . get_theme_mod( 'dox_loading_transition', dox_default( 'dox_loading_transition' ) );

		/**
		 * Bar
		 */
		if ( get_theme_mod( 'dox_bar', dox_default( 'dox_bar' ) ) != 'disabled' ) {
			$classes[] = 'bar-' . get_theme_mod( 'dox_bar', dox_default( 'dox_bar' ) );
			$classes[] = 'bar-socials-' . get_theme_mod( 'dox_bar_socials', dox_default( 'dox_bar_socials' ) );
			$classes[] = 'bar-cart-' . get_theme_mod( 'dox_bar_cart', dox_default( 'dox_bar_cart' ) );
		}

		/**
		 * Header
		 */
		$classes[] = 'header-width-' . get_theme_mod( 'dox_header_width', dox_default( 'dox_header_width' ) );
		$classes[] = 'header-sticky-' . get_theme_mod( 'dox_header_sticky', 'enabled' );
		$classes[] = 'header-layout-' . get_theme_mod( 'dox_header_layout', 'default' );

		if ( get_theme_mod( 'dox_header_color_background_opacity', dox_default( 'dox_header_color_background_opacity' ) ) == '0' ) {
			$classes[] = 'header-background-transparent';
		}

		if ( get_theme_mod( 'dox_header_color_background_opacity', dox_default( 'dox_header_color_background_opacity' ) ) == '100' ) {
			$classes[] = 'header-background-solid';
		}

		// Header Background Color == Bar Background Color
		if ( get_theme_mod( 'dox_bar', dox_default( 'dox_bar' ) ) != 'disabled' ) {
			if ( get_theme_mod( 'dox_header_color_background_opacity', dox_default( 'dox_header_color_background_opacity' ) ) == '100' ) {
				if ( get_theme_mod( 'dox_header_color_background', dox_default( 'dox_header_color_background' ) ) == get_theme_mod( 'dox_bar_color_background', dox_default( 'dox_bar_color_background' ) ) ) {
					$classes[] = 'header-bar-merge';
				}
			}
		}
		// Header Background Color == Content Background Color
		if ( get_theme_mod( 'dox_header_color_background', dox_default( 'dox_header_color_background' ) ) == get_theme_mod( 'dox_content_color_background', dox_default( 'dox_content_color_background' ) ) ) {
			$classes[] = 'header-content-merge';
		}
		if ( get_theme_mod( 'dox_header_background_type', 'solid' ) == 'gradient' ) {
			$classes[] = 'header-background-gradient';
		}
		// Socials
		if ( get_theme_mod( 'dox_header_socials', dox_default( 'dox_header_socials' ) ) == 'disabled' ) {
			$classes[] = 'header-socials-disabled';
		}
		// Cart
		if ( ! forqy_woocommerce_activated() || get_theme_mod( 'dox_header_shop_toolbar', dox_default( 'dox_header_shop_toolbar' ) ) == 'disabled' ) {
			$classes[] = 'header-shop-nav-disabled';
		}

		/**
		 * Heading
		 */
		$classes[] = 'heading-' . get_theme_mod( 'dox_heading_height', dox_default( 'dox_heading_height' ) );
		$classes[] = 'heading-vertical-' . get_theme_mod( 'dox_heading_align_vertical', dox_default( 'dox_heading_align_vertical' ) );
		$classes[] = 'heading-horizontal-' . get_theme_mod( 'dox_heading_align_horizontal', dox_default( 'dox_heading_align_horizontal' ) );

		/**
		 * Navigation
		 */
		if ( get_theme_mod( 'dox_navigation' ) == 'disabled' ) {
			$classes[] = 'navigation-disabled';
		} else {
			$classes[] = 'navigation-align-' . get_theme_mod( 'dox_navigation_align', dox_default( 'dox_navigation_align' ) );
		}

		if ( get_theme_mod( 'dox_navigation_color_background_opacity', dox_default( 'dox_navigation_color_background_opacity' ) ) == '0' ) {
			$classes[] = 'navigation-background-transparent';
		}
		if ( get_theme_mod( 'dox_navigation_color_background_opacity', dox_default( 'dox_navigation_color_background_opacity' ) ) == '100' ) {
			$classes[] = 'navigation-background-solid';
		}

		/**
		 * Slideshow
		 */
		if ( get_theme_mod( 'dox_slideshow_image' ) ) {
			$classes[] = 'slideshow-image-enabled';
		}

		$slides = get_posts( 'post_type=slide' );

		if ( empty ( $slides ) ) {
			$classes[] = 'no-slides';
		}
		if ( get_theme_mod( 'dox_slideshow_height', dox_default( 'dox_slideshow_height' ) ) == 'full' ) {
			$classes[] = 'slideshow-height-full';
		}

		// Pagination
		$classes[] = 'slideshow-pagination-align-' . get_theme_mod( 'dox_slideshow_pagination_align', dox_default( 'dox_slideshow_pagination_align' ) );

		/**
		 * Carousel
		 */
		if ( get_theme_mod( 'dox_homepage_carousel' ) != 'disabled' ) {
			$classes[] = 'carousel-enabled';
		}

		/**
		 * Content
		 */
		$classes[] = 'content-layout-' . get_theme_mod( 'dox_content_layout', dox_default( 'dox_content_layout' ) );

		/**
		 * Post
		 */
		$classes[] = 'posts-layout-' . get_theme_mod( 'dox_posts_layout', dox_default( 'dox_posts_layout' ) );
		$classes[] = 'posts-gutter-' . get_theme_mod( 'dox_posts_gutter', dox_default( 'dox_posts_gutter' ) );

		$classes[] = 'post-layout-' . get_theme_mod( 'dox_post_layout', dox_default( 'dox_post_layout' ) );
		$classes[] = 'post-appearance-' . get_theme_mod( 'dox_post_appearance', dox_default( 'dox_post_appearance' ) );
		$classes[] = 'post-overlay-' . get_theme_mod( 'dox_post_overlay_type', dox_default( 'dox_post_overlay_type' ) );

		// Menu
		$classes[] = 'menu-post-layout-' . get_theme_mod( 'dox_menu_post_layout', dox_default( 'dox_menu_post_layout' ) );

		// Post Background Color == Content Background Color
		if ( get_theme_mod( 'dox_post_color_background', dox_default( 'dox_post_color_background' ) ) == get_theme_mod( 'dox_content_color_background', dox_default( 'dox_content_color_background' ) ) ) {
			$classes[] = 'post-content-merge';
		}

		/**
		 * Widgets
		 */
		if ( is_active_sidebar( 'homepage-call-to-action' ) ) {
			$classes[] = 'cta-enabled';
		}

		/**
		 * Footer
		 */
		$classes[] = 'footer-' . get_theme_mod( 'dox_footer', dox_default( 'dox_footer' ) );

		if ( is_front_page() || is_home() ) {
			$classes[] = 'footer-' . get_theme_mod( 'dox_footer_homepage', dox_default( 'dox_footer_homepage' ) );
		}

		/**
		 * Shop
		 */
		$classes[] = 'shop-breadcrumbs-' . get_theme_mod( 'dox_shop_breadcrumbs', dox_default( 'dox_shop_breadcrumbs' ) );
		$classes[] = 'shop-add-to-cart-' . get_theme_mod( 'dox_shop_product_add_to_cart', dox_default( 'dox_shop_product_add_to_cart' ) );
		$classes[] = 'shop-search-' . get_theme_mod( 'dox_shop_toolbar_search', dox_default( 'dox_shop_toolbar_search' ) );

		/**
		 * Customize
		 */
		if ( is_customize_preview() ) {
			$classes[] = 'customize-preview';
		}

		/**
		 * JS
		 */
		$classes[] = 'js-site';
		$classes[] = 'fy-off__location js-off__location';
		// Sticky
		if ( get_theme_mod( 'dox_header_sticky', dox_default( 'dox_header_sticky' ) ) == 'enabled' ) {
			$classes[] = 'js-sticky-container';
		}

		return $classes;
	}

	add_filter( 'body_class', 'dox_classes' );

}
