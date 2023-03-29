<?php

/*

WooCommerce Quantity

*/

/*
 * If the WooCommerce plugin is not activated, return early
 */
if ( ! forqy_woocommerce_activated() ) {
	return;
}


if ( ! function_exists( 'forqy_woocommerce_quantity_input_args' ) ) {

	/**
	 * Simple Product Quantity Input Attributes
	 *
	 * @param $args
	 *
	 * @return mixed
	 */
	function forqy_woocommerce_quantity_input_args( $args ) {

		$args['max_value'] = 99; // Max Quantity

		return $args;

	}

	add_filter( 'woocommerce_quantity_input_args', 'forqy_woocommerce_quantity_input_args' );

}

if ( ! function_exists( 'forqy_woocommerce_quantity_input_args_variation' ) ) {

	/**
	 * Product Variation Quantity Input Attributes
	 *
	 * @param $args
	 *
	 * @return mixed
	 */
	function forqy_woocommerce_quantity_input_args_variation( $args ) {

		$args['max_qty'] = 99; // Max Quantity

		return $args;

	}

	add_filter( 'woocommerce_available_variation', 'forqy_woocommerce_quantity_input_args_variation' );

}
