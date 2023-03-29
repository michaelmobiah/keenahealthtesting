<?php

/*

Customize Slugs

*/

/*
----------------------------------------------------------------------------------------------------
Change Section
----------------------------------------------------------------------------------------------------
*/

// If plugin active
if ( function_exists( 'forqy' ) ) {

	if ( ! function_exists( 'dox_customize_change_section_slugs' ) ) {

		function dox_customize_change_section_slugs( $wp_customize ) {
			$wp_customize->get_section( 'slugs' )->panel    = 'theme';
			$wp_customize->get_section( 'slugs' )->priority = 102;
		}

		add_action( 'customize_register', 'dox_customize_change_section_slugs' );

	}

}
