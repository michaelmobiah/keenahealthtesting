<?php

/*

Navigation

*/

if ( ! function_exists( 'dox_navigation_register' ) ) {

	/**
	 * Register Navigation
	 */
	function dox_navigation_register() {

		register_nav_menus( array(
			'navigation_primary' => esc_html__( 'Primary Navigation', 'dox' ),
			'navigation_bar'     => esc_html__( 'Bar Navigation', 'dox' ),
			'navigation_footer'  => esc_html__( 'Footer Navigation', 'dox' )
		) );

	}

	add_action( 'init', 'dox_navigation_register' );

}

if ( ! function_exists( 'dox_navigation' ) ) {

	/**
	 * Primary Navigation
	 */
	function dox_navigation() {

		wp_nav_menu( array(
			'theme_location' => 'navigation_primary',
			'container'      => false,
			'menu_id'        => 'navigation_primary',
			'menu_class'     => 'fy-navigation-list fy-navigation-mobile-list',
			'depth'          => 3,
		) );

	}

}

if ( ! function_exists( 'dox_navigation_bar' ) ) {

	/**
	 * Bar Navigation
	 */
	function dox_navigation_bar() {

		wp_nav_menu( array(
			'theme_location' => 'navigation_bar',
			'container'      => false,
			'menu_class'     => 'fy-navigation-list-bar fy-navigation-mobile-list-bar fy-navigation-list fy-navigation-mobile-list',
			'menu_id'        => 'navigation_bar',
			'depth'          => 3,
		) );

	}

}

if ( ! function_exists( 'dox_navigation_footer' ) ) {

	/**
	 * Footer Navigation
	 */
	function dox_navigation_footer() {

		wp_nav_menu( array(
			'theme_location' => 'navigation_footer',
			'menu_class'     => 'fy-navigation-footer',
			'menu_id'        => 'navigation_footer',
			'fallback_cb'    => false,
			'depth'          => 1,
		) );

	}

}

if ( ! function_exists( 'dox_navigation_remove_current_page_item' ) ) {

	/**
	 * Remove 'current_page_item' Class
	 *
	 * @param $classes
	 *
	 * @return array|mixed
	 */
	function dox_navigation_remove_current_page_item( $classes ): array {

		$post_type = get_query_var( 'post_type' );

		if ( ( get_post_type() == $post_type ) && ( get_post_type() != 'product' ) ) {
			$classes = array_filter( $classes, "dox_navigation_get_current_value" );
		}

		if ( is_search() ) {
			$classes = array_filter( $classes, "dox_navigation_get_current_value" );
		}

		if ( is_tax() ) {
			$classes = array_filter( $classes, "dox_navigation_get_current_value" );
		}

		if ( is_search() || is_404() ) {
			$classes = array_filter( $classes, "dox_navigation_get_current_value" );
		}

		return $classes;

	}

	/**
	 * Get Current Value
	 *
	 * @param $element
	 *
	 * @return bool
	 */
	function dox_navigation_get_current_value( $element ): bool {
		return ( $element != "current_page_parent" );
	}

	add_filter( 'nav_menu_css_class', 'dox_navigation_remove_current_page_item', 10, 1 );

}

if ( ! function_exists( 'dox_navigation_add_current_menu_item' ) ) {

	/**
	 * Add 'current-menu-item' Class for Types
	 *
	 * @param array $classes
	 * @param WP_Post $item
	 *
	 * @return array
	 */
	function dox_navigation_add_current_menu_item( array $classes = array(), $item = false ): array {

		if ( ! $item || ! isset( $item->object_id ) ) {
			return $classes;
		}

		$type     = get_post_type();
		$template = get_post_meta( $item->object_id, '_wp_page_template', true );

		// Search & 404
		if ( is_search() || is_404() ) {
			return $classes;
		}

		// Portfolio
		if ( is_single() && $type == 'project' && ( $template == 'template-portfolio.php' || $template == 'template-portfolio-categories.php' ) ) {
			$classes[] = 'current-menu-item';
		}
		if ( is_tax( 'category-portfolio' ) && ( $template == 'template-portfolio.php' || $template == 'template-portfolio-categories.php' ) ) {
			$classes[] = 'current-menu-item';
		}

		// Albums
		if ( is_single() && $type == 'album' && ( $template == 'template-albums.php' || $template == 'template-albums-categories.php' ) ) {
			$classes[] = 'current-menu-item';
		}
		if ( is_tax( 'category-album' ) && ( $template == 'template-albums.php' || $template == 'template-albums-categories.php' ) ) {
			$classes[] = 'current-menu-item';
		}

		// Menu
		if ( is_single() && $type == 'menu' && ( $template == 'template-menu.php' || $template == 'template-menu-sections.php' ) ) {
			$classes[] = 'current-menu-item';
		}
		if ( ( is_tax( 'section' ) || is_tax( 'ingredient' ) ) && ( $template == 'template-menu.php' || $template == 'template-menu-sections.php' ) ) {
			$classes[] = 'current-menu-item';
		}

		// Events
		if ( is_single() && $type == 'event' && ( $template == 'template-events.php' || $template == 'template-events-categories.php' ) ) {
			$classes[] = 'current-menu-item';
		}
		if ( is_tax( 'category-event' ) && ( $template == 'template-events.php' || $template == 'template-events-categories.php' ) ) {
			$classes[] = 'current-menu-item';
		}

		// Gallery
		if ( is_single() && $type == 'gallery' && ( $template == 'template-gallery.php' || $template == 'template-gallery-categories.php' ) ) {
			$classes[] = 'current-menu-item';
		}
		if ( is_tax( 'category-gallery' ) && ( $template == 'template-gallery.php' || $template == 'template-gallery-categories.php' ) ) {
			$classes[] = 'current-menu-item';
		}

		return $classes;

	}

	add_filter( 'nav_menu_css_class', 'dox_navigation_add_current_menu_item', 10, 2 );

}
