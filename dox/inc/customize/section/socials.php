<?php

/*

Customize Socials

*/

/*
----------------------------------------------------------------------------------------------------
Change Section
----------------------------------------------------------------------------------------------------
*/

// If plugin active
if ( function_exists( 'forqy' ) ) {

	if ( ! function_exists( 'dox_customize_change_section_socials' ) ) {

		function dox_customize_change_section_socials( $wp_customize ) {
			$wp_customize->get_section( 'socials' )->panel    = 'theme';
			$wp_customize->get_section( 'socials' )->priority = 100;
		}

		add_action( 'customize_register', 'dox_customize_change_section_socials' );

	}

}
