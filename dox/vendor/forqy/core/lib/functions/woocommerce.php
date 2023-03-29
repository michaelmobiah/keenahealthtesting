<?php

/**
 * WooCommerce Functions
 *
 * @package forqy/core
 * @since 1.0.0
 */

if ( ! function_exists( 'forqy_woocommerce_activated' ) ) {

	/**
	 * Check If WooCommerce Is Activated
	 *
	 * @return bool
	 */
	function forqy_woocommerce_activated(): bool {

		if ( class_exists( 'woocommerce' ) ) {
			return true;
		} else {
			return false;
		}

	}

}
