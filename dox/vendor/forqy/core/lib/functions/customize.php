<?php

/**
 * Customize Functions
 *
 * @package forqy/core
 * @since 1.0.1
 */

if ( ! function_exists( 'forqy_customize_preview_anchor_link' ) ) {

	/**
	 * Anchor Link of the Element
	 *
	 * @param $id
	 */
	function forqy_customize_preview_anchor_link( $id ) {

		if ( is_customize_preview() && ! empty( $id ) ) {
			echo '<div class="fy-customize__anchor">#' . $id . '</div>';
		}

	}

}
