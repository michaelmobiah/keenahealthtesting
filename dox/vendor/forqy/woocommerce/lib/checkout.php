<?php

/*

WooCommerce Checkout

*/

/*
 * If the WooCommerce plugin is not activated, return early
 */
if ( ! forqy_woocommerce_activated() ) {
	return;
}


if ( ! function_exists( 'forqy_woocommerce_shipping_hide_when_free_is_available' ) ) {

	/**
	 * Hide Shipping Options when Free Shipping is Available (Except 'Local Pickup')
	 * @url https://gist.github.com/woogists/57e4cf73f083190c0e00bd59f060f87d
	 *
	 * @param $rates
	 * @param $package
	 *
	 * @return mixed
	 */
	function forqy_woocommerce_shipping_hide_when_free_is_available( $rates, $package ) {
		$new_rates = array();

		foreach ( $rates as $rate_id => $rate ) {
			if ( 'free_shipping' === $rate->method_id ) {
				$new_rates[ $rate_id ] = $rate;
				break;
			}
		}

		if ( ! empty( $new_rates ) ) {

			foreach ( $rates as $rate_id => $rate ) {
				if ( 'local_pickup' === $rate->method_id ) {
					$new_rates[ $rate_id ] = $rate;
				}
			}

			return $new_rates;

		}

		return $rates;

	}

	add_filter( 'woocommerce_package_rates', 'forqy_woocommerce_shipping_hide_when_free_is_available', 10, 2 );

}

if ( ! function_exists( 'forqy_woocommerce_shipping_free_add_zero_price' ) ) {

	/**
	 * Display Zero Price for the Free Shipping
	 * To Remove the Price Use the Filter 'add_filter( 'forqy_woocommerce_shipping_free_price', '__return_empty_string' );'
	 *
	 * @param $label
	 * @param $method
	 *
	 * @return mixed
	 */
	function forqy_woocommerce_shipping_free_add_zero_price( $label, $method ) {

		$method_id   = $method->method_id;
		$method_cost = $method->cost;

		// If shipping rate is 0, concatenate ": $0.00" to the label
		if ( ( $method_cost == 0 ) && ( $method_id == 'free_shipping' ) ) {
			$label .= apply_filters( 'forqy_woocommerce_shipping_free_price', ': ' . wc_price( 0 ) );
		}

		return $label;

	}

	add_filter( 'woocommerce_cart_shipping_method_full_label', 'forqy_woocommerce_shipping_free_add_zero_price', 10, 2 );

}

if ( ! function_exists( 'forqy_woocommerce_is_free_shipping_available' ) ) {

	/**
	 * Check If Free Shipping is Available and Get Cart & Free Shipping Amounts
	 *
	 * @return array
	 */
	function forqy_woocommerce_is_free_shipping_available(): array {

		$packages   = WC()->cart->get_shipping_packages();
		$package    = reset( $packages );
		$zone       = wc_get_shipping_zone( $package );
		$cart_total = WC()->cart->get_displayed_subtotal();

		if ( WC()->cart->display_prices_including_tax() ) {
			$cart_total = round( $cart_total - ( WC()->cart->get_discount_total() + WC()->cart->get_discount_tax() ), wc_get_price_decimals() );
		} else {
			$cart_total = round( $cart_total - WC()->cart->get_discount_total(), wc_get_price_decimals() );
		}

		foreach ( $zone->get_shipping_methods( true ) as $method ) {

			$amount_min    = (int) $method->get_option( 'min_amount' );
			$amount_remain = ( $amount_min - $cart_total );

			if ( $method->id == 'free_shipping' && ! empty( $amount_min ) ) {

				if ( $cart_total < $amount_min && $cart_total != '0' ) {

					// 'Free Shipping' not available, remaining
					return array(
						'available'     => false,
						'amount_min'    => $amount_min,
						'amount_remain' => $amount_remain,
						'cart_total'    => $cart_total,
					);

				} else if ( $cart_total >= $amount_min ) {

					// 'Free Shipping' available
					return array(
						'available'     => true,
						'amount_min'    => $amount_min,
						'amount_remain' => $amount_remain,
						'cart_total'    => $cart_total,
					);

				} else if ( $cart_total == 0 ) {

					// 'Free Shipping' not available, cart empty
					return array(
						'available'     => true,
						'amount_min'    => $amount_min,
						'amount_remain' => $amount_remain,
						'cart_total'    => $cart_total,
					);

				}
			}
		}

		// 'Free Shipping' not available
		return array(
			'available' => false,
		);

	}

}
