<?php

/*

Customize Bar

*/

/*
----------------------------------------------------------------------------------------------------
Add Section
----------------------------------------------------------------------------------------------------
*/

if ( ! function_exists( 'dox_customize_add_section_bar' ) ) {

	function dox_customize_add_section_bar( $wp_customize ) {

		$wp_customize->add_section( 'bar', array(
			'title'       => esc_html__( 'Bar', 'dox' ),
			'description' => esc_html__( 'Set up the bar appearance.', 'dox' ),
			'panel'       => 'theme',
			'priority'    => 50,
		) );

	}

	add_action( 'customize_register', 'dox_customize_add_section_bar' );

}

/*
----------------------------------------------------------------------------------------------------
Add Settings
----------------------------------------------------------------------------------------------------
*/

if ( ! function_exists( 'dox_customize_add_settings_bar' ) ) {

	function dox_customize_add_settings_bar( $wp_customize ) {

		$wp_customize->add_setting( 'dox_bar', array(
			'default'           => dox_default( 'dox_bar' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );

		/**
		 *
		 * Colors
		 *
		 */

		$wp_customize->add_setting( 'dox_bar_color_heading', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_bar_color', array(
			'default'           => dox_default( 'dox_bar_color' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_bar_color_opacity', array(
			'default'           => dox_default( 'dox_bar_color_opacity' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_bar_color_accent', array(
			'default'           => dox_default( 'dox_bar_color_accent' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_bar_color_background', array(
			'default'           => dox_default( 'dox_bar_color_background' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );

		/**
		 *
		 * Settings
		 *
		 */

		$wp_customize->add_setting( 'dox_bar_settings_heading', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		// Icon
		$wp_customize->add_setting( 'dox_bar_icon', array(
			'default'           => '',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->selective_refresh->add_partial( 'dox_bar_icon', array(
			'selector' => '.cs-bar-icon'
		) );
		// Socials
		$wp_customize->add_setting( 'dox_bar_socials', array(
			'default'           => dox_default( 'dox_bar_socials' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		// Cart
		$wp_customize->add_setting( 'dox_bar_cart', array(
			'default'           => dox_default( 'dox_bar_cart' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		// Text
		$wp_customize->add_setting( 'dox_bar_text', array(
			'default'           => '',
			'transport'         => 'refresh',
			'sanitize_callback' => 'wp_kses_post',
		) );
		$wp_customize->selective_refresh->add_partial( 'dox_bar_text', array(
			'selector' => '.cs-bar-text'
		) );

	}

	add_action( 'customize_register', 'dox_customize_add_settings_bar' );

}

/*
----------------------------------------------------------------------------------------------------
Add Controls
----------------------------------------------------------------------------------------------------
*/

if ( ! function_exists( 'dox_customize_add_controls_bar' ) ) {

	function dox_customize_add_controls_bar( $wp_customize ) {

		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_bar', array(
			'label'       => esc_html__( 'Bar', 'dox' ),
			'description' => esc_html__( 'Enable/disable the bar.', 'dox' ),
			'settings'    => 'dox_bar',
			'section'     => 'bar',
			'type'        => 'select',
			'choices'     => array(
				'enabled'  => esc_html__( 'Enabled', 'dox' ),
				'disabled' => esc_html__( 'Disabled', 'dox' ),
			),
		) ) );

		/**
		 *
		 * Colors
		 *
		 */

		if ( class_exists( 'forqy_Customize_Heading_Control' ) ) {
			$wp_customize->add_control( new forqy_Customize_Heading_Control( $wp_customize, 'dox_bar_color_heading', array(
				'label'   => esc_html__( 'Colors', 'dox' ),
				'type'    => 'heading',
				'section' => 'bar',
			) ) );
		}
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dox_bar_color', array(
			'label'    => esc_html__( 'Color', 'dox' ),
			'settings' => 'dox_bar_color',
			'section'  => 'bar',
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_bar_color_opacity', array(
			'label'    => esc_html__( 'Color Opacity', 'dox' ),
			'settings' => 'dox_bar_color_opacity',
			'section'  => 'bar',
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
				'50'  => '50%'
			),
		) ) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dox_bar_color_accent', array(
			'label'    => esc_html__( 'Accent Color', 'dox' ),
			'settings' => 'dox_bar_color_accent',
			'section'  => 'bar',
		) ) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dox_bar_color_background', array(
			'label'    => esc_html__( 'Background Color', 'dox' ),
			'settings' => 'dox_bar_color_background',
			'section'  => 'bar',
		) ) );

		/**
		 *
		 * Settings
		 *
		 */

		if ( class_exists( 'forqy_Customize_Heading_Control' ) ) {
			$wp_customize->add_control( new forqy_Customize_Heading_Control( $wp_customize, 'dox_bar_settings_heading', array(
				'label'   => esc_html__( 'Settings', 'dox' ),
				'type'    => 'heading',
				'section' => 'bar',
			) ) );
		}
		// Icon
		$wp_customize->add_control( new WP_Customize_Upload_Control( $wp_customize, 'dox_bar_icon', array(
			'label'       => esc_html__( 'Icon Image', 'dox' ),
			'description' => esc_html__( 'Upload an icon image. Required size is 72x72 pixels.', 'dox' ),
			'settings'    => 'dox_bar_icon',
			'section'     => 'bar',
		) ) );
		// Socials
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_bar_socials', array(
			'label'       => esc_html__( 'Socials', 'dox' ),
			'description' => esc_html__( 'Enable/disable the socials.', 'dox' ),
			'settings'    => 'dox_bar_socials',
			'section'     => 'bar',
			'type'        => 'select',
			'choices'     => array(
				'enabled'  => esc_html__( 'Enabled', 'dox' ),
				'disabled' => esc_html__( 'Disabled', 'dox' ),
			),
		) ) );
		// Cart
		if ( forqy_woocommerce_activated() ) {
			$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_bar_cart', array(
				'label'       => esc_html__( 'Cart', 'dox' ),
				'description' => esc_html__( 'Enable/disable the cart.', 'dox' ),
				'settings'    => 'dox_bar_cart',
				'section'     => 'bar',
				'type'        => 'select',
				'choices'     => array(
					'enabled'  => esc_html__( 'Enabled', 'dox' ),
					'disabled' => esc_html__( 'Disabled', 'dox' ),
				),
			) ) );
		}
		// Text
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_bar_text', array(
			'label'    => esc_html__( 'Custom Text', 'dox' ),
			'settings' => 'dox_bar_text',
			'section'  => 'bar',
			'type'     => 'text',
		) ) );

	}

	add_action( 'customize_register', 'dox_customize_add_controls_bar' );

}
