<?php

/**
 * Head Functions
 *
 * @package forqy/core
 * @since 1.0.1
 */

if ( ! function_exists( 'forqy_head_pingback' ) ) {

	/**
	 *  Add a Pingback URL Auto-discovery Header for Single Posts, Pages, or Attachments
	 */
	function forqy_head_pingback() {

		if ( is_singular() && pings_open() ) {
			echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
		}

	}

	add_action( 'wp_head', 'forqy_head_pingback' );

}
