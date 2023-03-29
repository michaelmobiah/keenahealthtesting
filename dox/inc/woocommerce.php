<?php

/*

WooCommerce Component

*/

/*
 * If the WooCommerce plugin is not activated, return early
 */
if ( ! forqy_woocommerce_activated() ) {
	return;
}

// Layout
require_once trailingslashit( get_template_directory() ) . 'inc/woocommerce/layout.php';
// Listing
require_once trailingslashit( get_template_directory() ) . 'inc/woocommerce/listing.php';
// Single
require_once trailingslashit( get_template_directory() ) . 'inc/woocommerce/single.php';
// Checkout
require_once trailingslashit( get_template_directory() ) . 'inc/woocommerce/checkout.php';


if ( ! function_exists( 'dox_woocommerce_styles' ) ) {

	/**
	 * Styles
	 */
	function dox_woocommerce_styles() {

		if ( class_exists( 'forqy_less' ) ) {
			wp_enqueue_style( get_template() . '-shop', trailingslashit( get_template_directory_uri() ) . 'style-woocommerce.less', array(), '', 'all' );
		}

	}

	add_action( 'wp_enqueue_scripts', 'dox_woocommerce_styles', 50 );

}

if ( ! function_exists( 'dox_woocommerce_toolbar_cart' ) ) {

	/**
	 * Toolbar
	 */
	function dox_woocommerce_toolbar_cart() {
		get_template_part( 'templates/toolbar/shop/cart' );
	}

	add_action( 'dox_toolbar_shop_cart', 'dox_woocommerce_toolbar_cart' );

}

if ( ! function_exists( 'dox_woocommerce_toolbar_cart_update' ) ) {

	/**
	 * Toolbar - Update
	 *
	 * @param $fragments
	 *
	 * @return mixed
	 */
	function dox_woocommerce_toolbar_cart_update( $fragments ) {
		ob_start();

		get_template_part( 'templates/toolbar/shop/cart' );

		$fragments['.fy-toolbar__item-cart'] = ob_get_clean();

		return $fragments;
	}

	add_filter( 'woocommerce_add_to_cart_fragments', 'dox_woocommerce_toolbar_cart_update' );

}

if ( ! function_exists( 'dox_woocommerce_badge_new' ) ) {

	/**
	 * Badge 'New'
	 */
	function dox_woocommerce_badge_new() {

		$postdate       = get_the_time( 'Y-m-d' );
		$postdate_stamp = strtotime( $postdate );
		$newness        = 21;

		if ( get_theme_mod( 'dox_shop_product_badge_new' ) > 0 ) {
			if ( ( time() - ( 60 * 60 * 24 * $newness ) ) < $postdate_stamp ) {
				echo '<div class="fy-badge-new">' . __( 'New', 'dox' ) . '</div>';
			}
		}

	}

	add_action( 'woocommerce_single_product_summary', 'dox_woocommerce_badge_new', 1 );

}

if ( ! function_exists( 'dox_woocommerce_pagination' ) ) {

	/**
	 * Pagination
	 *
	 * @param $args
	 *
	 * @return mixed
	 */
	function dox_woocommerce_pagination( $args ) {

		$args['prev_text'] = esc_html__( 'Previous', 'dox' );
		$args['next_text'] = esc_html__( 'Next', 'dox' );

		return $args;
	}

	add_filter( 'woocommerce_pagination_args', 'dox_woocommerce_pagination' );

}
