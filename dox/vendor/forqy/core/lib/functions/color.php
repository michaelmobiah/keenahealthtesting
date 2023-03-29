<?php

/**
 * Color Functions
 *
 * @package forqy/core
 * @since 1.0.1
 */

if ( ! function_exists( 'forqy_color_is_hex' ) ) {

	/**
	 * Check if Color is HEX
	 *
	 * @param $hex
	 *
	 * @return bool
	 */
	function forqy_color_is_hex( $hex ): bool {

		if ( preg_match( '/^#([0-9a-f]{3}){1,2}$/i', $hex ) ) {
			return true;
		} else {
			return false;
		}

	}

}

if ( ! function_exists( 'forqy_color_hex_to_rgb' ) ) {

	/**
	 * Convert HEX to RGB
	 *
	 * @param $hex
	 *
	 * @return array
	 */
	function forqy_color_hex_to_rgb( $hex ): array {

		return array(
			'r' => hexdec( substr( $hex, 1, 2 ) ),
			'g' => hexdec( substr( $hex, 3, 2 ) ),
			'b' => hexdec( substr( $hex, 5, 2 ) ),
		);

	}

}

if ( ! function_exists( 'forqy_color_dark_or_light' ) ) {

	/**
	 * Check Dark or Light Color
	 *
	 * @param $hex
	 *
	 * @return string
	 */
	function forqy_color_dark_or_light( $hex ): string {

		// Convert to RGB
		$rgb = forqy_color_hex_to_rgb( $hex );

		// YIQ
		// https://en.wikipedia.org/wiki/YIQ
		$yiq = ( ( $rgb['r'] * 299 ) + ( $rgb['g'] * 587 ) + ( $rgb['b'] * 114 ) ) / 1000;

		return ( $yiq >= 128 ) ? 'dark' : 'light';

	}

}
