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

/**
 * Remove Coupon Code Field on Checkout Page
 */
remove_action( 'woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form', 10 );


if ( ! function_exists( 'dox_woocommerce_heading_shipping' ) ) {

	/**
	 * Add Headings - Before Shipping/Payment
	 */
	function dox_woocommerce_heading_shipping() { ?>

        <tr class="shipping-heading">
            <td colspan="2">
                <h4 class="fy-checkout-heading fy-heading-shipping">
					<?php esc_html_e( 'Shipping', 'woocommerce' ); ?>
                </h4>
            </td>
        </tr>

	<?php }

	add_filter( 'woocommerce_review_order_before_shipping', 'dox_woocommerce_heading_shipping', 100 );

}

if ( ! function_exists( 'dox_woocommerce_heading_payment' ) ) {

	function dox_woocommerce_heading_payment() { ?>

        <h4 class="fy-checkout-heading fy-heading-payment">
			<?php esc_html_e( 'Payment', 'woocommerce' ); ?>
        </h4>

	<?php }

	add_filter( 'woocommerce_review_order_before_payment', 'dox_woocommerce_heading_payment', 100 );

}
