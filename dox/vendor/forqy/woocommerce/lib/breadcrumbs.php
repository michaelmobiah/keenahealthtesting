<?php

/*

WooCommerce Breadcrumbs

*/

/*
 * If the WooCommerce plugin is not activated, return early
 */
if ( ! forqy_woocommerce_activated() ) {
	return;
}


if ( ! function_exists( 'forqy_woocommerce_breadcrumb_defaults' ) ) {

	/**
	 * Breadcrumb Defaults
	 *
	 * @param $defaults
	 *
	 * @return mixed
	 */
	function forqy_woocommerce_breadcrumb_defaults( $defaults ) {

		// Change "Home" to blog name
		$defaults['home'] = get_bloginfo( 'name' );

		return $defaults;

	}

	add_action( 'woocommerce_breadcrumb_defaults', 'forqy_woocommerce_breadcrumb_defaults' );

}
