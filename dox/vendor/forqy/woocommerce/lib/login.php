<?php

/*

WooCommerce Login

*/

/*
 * If the WooCommerce plugin is not activated, return early
 */
if ( ! forqy_woocommerce_activated() ) {
	return;
}


if ( ! function_exists( 'forqy_woocommerce_checkout_login_close' ) ) {

	/**
	 * Add Close Button to Login Toggle on Checkout and Cart Page
	 */
	function forqy_woocommerce_checkout_login_close() {

		if ( is_checkout() || is_cart() ) { ?>

            <a href="#" class="fy-login__close fy-button showlogin">
                <span class="fy-icon"><?php get_template_part( 'images/icon/close' ); ?></span>
            </a>

		<?php }

	}

	add_filter( 'woocommerce_login_form_start', 'forqy_woocommerce_checkout_login_close' );

}

if ( ! function_exists( 'forqy_woocommerce_before_customer_login_form' ) ) {

	/**
	 * Start Container to Login
	 */
	function forqy_woocommerce_before_customer_login_form() {

		if ( get_option( 'woocommerce_enable_myaccount_registration' ) === 'yes' ) {
			echo '<div class="fy-login fy-login--full">';
		} else {
			echo '<div class="fy-login">';
		}

	}

	add_filter( 'woocommerce_before_customer_login_form', 'forqy_woocommerce_before_customer_login_form' );

}

if ( ! function_exists( 'forqy_woocommerce_after_customer_login_form' ) ) {

    /**
	 * End Container to Login
	 */
	function forqy_woocommerce_after_customer_login_form() {
		echo '</div>';
	}

	add_filter( 'woocommerce_after_customer_login_form', 'forqy_woocommerce_after_customer_login_form' );

}
