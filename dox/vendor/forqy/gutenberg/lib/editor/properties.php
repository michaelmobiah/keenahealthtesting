<?php

/**
 * Properties
 *
 * @package forqy/gutenberg
 * @since 1.0.0
 */

if ( ! function_exists( 'forqy_gutenberg_editor_properties_head' ) ) {

	/**
	 * Render Variables into <head> Tag
	 */
	function forqy_gutenberg_editor_properties_head() {

		// Get Declared Values
		$properties = apply_filters( 'forqy_editor_properties', __return_empty_array() );

		if ( $properties ) {
			$style = "<style class='forqy-editor-properties'>";
			$style .= "\r\n:root {\r\n";

			foreach ( (array) $properties as $variable => $value ) {
				$style .= '--fy--' . $variable . ':' . $value . ';' . "\r\n";

				if ( in_array( $variable, [ 'content-color', 'content-color-accent', 'content-color-background' ] ) ) {
					if ( function_exists( 'forqy_hex_to_rgb' ) ) {
						$rgb = forqy_hex_to_rgb( $value );

						$style .= '--fy--' . $variable . '--rgb:' . $rgb[0] . ', ' . $rgb[1] . ', ' . $rgb[2] . ';' . "\r\n";
					}

				}
			}

			$style .= "\r\n}\r\n";
			$style .= "</style>";

			echo $style;
		}

	}

	add_action( 'admin_head', 'forqy_gutenberg_editor_properties_head', 10 );

}
