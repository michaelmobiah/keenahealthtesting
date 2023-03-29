<?php

/**
 * Meta Functions
 *
 * @package forqy/core
 * @since 1.0.0
 */

if ( ! function_exists( 'forqy_meta' ) ) {

	/**
	 * Meta
	 *
	 * @param string $key
	 * @param array|bool $args
	 * @param int|null $post_id
	 *
	 * @return mixed
	 */
	function forqy_meta( string $key, $args = array(), int $post_id = null ) {

		if ( function_exists( 'rwmb_meta' ) ) {
			return apply_filters( 'forqy_meta', rwmb_meta( $key, $args, $post_id ) );
		} else {
			return false;
		}

	}

}
