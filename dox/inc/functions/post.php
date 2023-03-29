<?php

/*

Post

*/

if ( ! function_exists( 'dox_post_excerpt_length' ) ) {

	/**
	 * Excerpt - Length
	 *
	 * @return mixed
	 */
	function dox_post_excerpt_length() {

		// Number of Words
		return get_theme_mod( 'dox_post_excerpt_length', dox_default( 'dox_post_excerpt_length' ) );

	}

	add_filter( 'excerpt_length', 'dox_post_excerpt_length', 999 );

}

if ( ! function_exists( 'dox_post_excerpt_more' ) ) {

	/**
	 * Excerpt - More
	 *
	 * @return string
	 */
	function dox_post_excerpt_more(): string {
		return ' ...';
	}

	add_filter( 'excerpt_more', 'dox_post_excerpt_more', 999 );

}
