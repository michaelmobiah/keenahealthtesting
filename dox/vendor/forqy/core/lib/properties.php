<?php

/**
 * Properties
 *
 * @package forqy/core
 * @since 1.0.1
 */

if ( ! function_exists( 'forqy_properties_enqueue_style' ) ) {

	/**
	 * Render Properties and Add Inline Style
	 */
	function forqy_properties_enqueue_style() {

		// Prefix
		$prefix = apply_filters( 'forqy_properties_prefix', 'fy' ); // Default

		// Get defined properties
		$properties = apply_filters( 'forqy_properties', __return_empty_array() );

		// Render properties
		if ( ! empty( $properties ) && ! empty( $prefix ) ) {

			wp_register_style( get_template() . '-properties', false );
			wp_enqueue_style( get_template() . '-properties' );

			$style = ":root { ";

			foreach ( (array) $properties as $property => $value ) {

				$style .= "--" . esc_html( $prefix ) . "--" . $property . ": " . $value . ";";

				/**
				 * Convert colors to RGB
				 *
				 * @param array $colors_to_rgb = [ 'property-handle' => 'property-opacity-handle' ]
				 */
				$colors_to_rgb = apply_filters( 'forqy_properties_colors_to_rgb', array(
					'background-overlay-color',
					'off-overlay-color',
					'header-color-background',
					'header-sticky-color-background',
					'heading-color-background',
					'heading-background-overlay-color',
					'navigation-color-background',
					'navigation-mobile-overlay-color',
					'content-color',
					'image-overlay-color',
					'post-color',
					'footer-color',
					'search-overlay-color',
					'lightbox-color-background',
					'btt-color-background',
				) );

				// Check existence of the defined property
				if ( in_array( $property, $colors_to_rgb ) ) {

					// Convert property HEX value to RGB
					if ( function_exists( 'forqy_color_is_hex' ) && forqy_color_is_hex( $value ) ) {
						$rgb = forqy_color_hex_to_rgb( $value );

						// Render property
						$style .= "--" . esc_html( $prefix ) . "--" . $property . "--rgb: " . $rgb['r'] . ',' . $rgb['g'] . ',' . $rgb['b'] . ";";
					}
				}
			}

			$style .= " }";

			// Add as an inline style
			wp_add_inline_style( get_template() . '-properties', $style );

		}

	}

	add_action( 'wp_enqueue_scripts', 'forqy_properties_enqueue_style', 10 );

}
