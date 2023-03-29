<?php

/*

Theme Customize Panel

*/

if ( ! function_exists( 'dox_customize_add_panel_theme' ) ) {

	/**
	 * Add Panel
	 *
	 * @param $wp_customize
	 */
	function dox_customize_add_panel_theme( $wp_customize ) {

		$wp_customize->add_panel( 'theme', array(
			'title'    => is_child_theme() ? wp_get_theme()->parent()->get( 'Name' ) : wp_get_theme()->get( 'Name' ),
			'priority' => 1,
		) );

	}

	add_action( 'customize_register', 'dox_customize_add_panel_theme' );

}
