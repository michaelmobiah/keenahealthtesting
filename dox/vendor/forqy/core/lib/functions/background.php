<?php

/**
 * Background Functions
 *
 * @package forqy/core
 * @since 1.0.1
 */

if ( ! function_exists( 'forqy_background_custom' ) ) {

	/**
	 * Move Background Image Style to Custom Element
	 */
	function forqy_background_custom() {
		ob_start();

		_custom_background_cb(); // Default Handler

		$style = ob_get_clean();
		// replace default class with custom
		$style = str_replace( 'body.custom-background', '.fy-background-site', $style );

		print $style;

	}

}
