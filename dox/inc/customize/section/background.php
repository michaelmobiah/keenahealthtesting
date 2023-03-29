<?php

/*

Customize Header Image

*/

/*
----------------------------------------------------------------------------------------------------
Add Section
----------------------------------------------------------------------------------------------------
*/

if ( ! function_exists( 'dox_customize_add_section_background' ) ) {

	function dox_customize_add_section_background( $wp_customize ) {

		$wp_customize->add_section( 'background', array(
			'title'       => esc_html__( 'Background', 'dox' ),
			'description' => esc_html__( 'Set up the background appearance.', 'dox' ),
			'panel'       => 'theme',
			'priority'    => 45,
		) );

		// remove default wp background_color control
		$wp_customize->remove_control( 'background_color' );

	}

	add_action( 'customize_register', 'dox_customize_add_section_background' );

}


/*
----------------------------------------------------------------------------------------------------
Add Settings
----------------------------------------------------------------------------------------------------
*/

if ( ! function_exists( 'dox_customize_add_settings_background' ) ) {

	function dox_customize_add_settings_background( $wp_customize ) {

		$wp_customize->add_setting( 'dox_background_color', array(
			'default'           => dox_default( 'dox_background_color' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );

		// Overlay
		$wp_customize->add_setting( 'dox_background_overlay_color', array(
			'default'           => dox_default( 'dox_background_overlay_color' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_background_overlay_opacity', array(
			'default'           => dox_default( 'dox_background_overlay_opacity' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );

	}

	add_action( 'customize_register', 'dox_customize_add_settings_background' );

}

/*
----------------------------------------------------------------------------------------------------
Add Controls
----------------------------------------------------------------------------------------------------
*/

if ( ! function_exists( 'dox_customize_add_controls_background' ) ) {

	function dox_customize_add_controls_background( $wp_customize ) {

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dox_background_color', array(
			'label'    => esc_html__( 'Background Color', 'dox' ),
			'settings' => 'dox_background_color',
			'section'  => 'background',
		) ) );

		// Overlay
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dox_background_overlay_color', array(
			'label'    => esc_html__( 'Overlay Color', 'dox' ),
			'settings' => 'dox_background_overlay_color',
			'section'  => 'background',
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_background_overlay_opacity', array(
			'label'    => esc_html__( 'Overlay Opacity', 'dox' ),
			'settings' => 'dox_background_overlay_opacity',
			'section'  => 'background',
			'type'     => 'select',
			'choices'  => array(
				'100' => '100%',
				'95'  => '95%',
				'90'  => '90%',
				'85'  => '85%',
				'80'  => '80%',
				'75'  => '75%',
				'70'  => '70%',
				'65'  => '65%',
				'60'  => '60%',
				'55'  => '55%',
				'50'  => '50%',
				'45'  => '45%',
				'40'  => '40%',
				'35'  => '35%',
				'30'  => '30%',
				'25'  => '25%',
				'20'  => '20%',
				'15'  => '15%',
				'10'  => '10%',
				'5'   => '5%',
				'0'   => '0%',
			),
		) ) );

	}

	add_action( 'customize_register', 'dox_customize_add_controls_background' );

}
