<?php

/*

Locales

*/

if ( ! function_exists( 'dox_locales_date_defaults' ) ) {

	/**
	 * Date Defaults
	 *
	 * @return array
	 */
	function dox_locales_date_defaults(): array {

		return array(
			'format'    => get_theme_mod( 'dox_date_format', dox_default( 'dox_date_format' ) ),
			'delimiter' => get_theme_mod( 'dox_date_delimiter', dox_default( 'dox_date_delimiter' ) )
		);

	}

	add_filter( 'forqy_date_defaults', 'dox_locales_date_defaults', 10 );

}

if ( ! function_exists( 'dox_locales_currency' ) ) {

	/**
	 * Currency Default
	 *
	 * @return mixed
	 */
	function dox_locales_currency() {

		return get_theme_mod( 'dox_about_currency', dox_default( 'dox_about_currency' ) );

	}

	add_filter( 'forqy_currency', 'dox_locales_currency', 10 );

}
