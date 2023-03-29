<?php

/*

Filters

*/

if ( ! function_exists( 'dox_filter' ) ) {

	/**
	 * Pass Filter Settings
	 *
	 * @return mixed
	 */
	function dox_filter() {

		return get_theme_mod( 'dox_filter', dox_default( 'dox_filter' ) );

	}

	add_filter( 'forqy_theme_filter', 'dox_filter' );

}
