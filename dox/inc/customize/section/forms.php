<?php

/*

Customize Forms

*/

/*
----------------------------------------------------------------------------------------------------
Change Section
----------------------------------------------------------------------------------------------------
*/

// If plugin active
if ( function_exists( 'forqy' ) ) {

	if ( ! function_exists( 'dox_customize_change_section_forms' ) ) {

		function dox_customize_change_section_forms( $wp_customize ) {
			$wp_customize->get_section( 'forms' )->panel    = 'theme';
			$wp_customize->get_section( 'forms' )->priority = 101;
		}

		add_action( 'customize_register', 'dox_customize_change_section_forms' );

	}

}
