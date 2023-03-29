<?php

/*

Fonts

*/

if ( ! function_exists( 'dox_fonts' ) ) {

	/**
	 * Fonts
	 *
	 * @return array
	 */
	function dox_fonts(): array {

		return array(
			'font_primary'          => apply_filters( 'dox_font_primary', get_theme_mod( 'dox_font_primary', dox_default( 'dox_font_primary' ) ) ),
			'font_primary_styles'   => apply_filters( 'dox_font_primary_styles', get_theme_mod( 'dox_font_primary_styles', dox_default( 'dox_font_primary_styles' ) ) ),
			'font_secondary'        => apply_filters( 'dox_font_secondary', get_theme_mod( 'dox_font_secondary', dox_default( 'dox_font_secondary' ) ) ),
			'font_secondary_styles' => apply_filters( 'dox_font_secondary_styles', get_theme_mod( 'dox_font_secondary_styles', dox_default( 'dox_font_secondary_styles' ) ) ),
			'font_display'          => apply_filters( 'dox_font_display', get_theme_mod( 'dox_font_display', dox_default( 'dox_font_display' ) ) ),
		);

	}

	add_filter( 'forqy_fonts', 'dox_fonts', 1 );

}
