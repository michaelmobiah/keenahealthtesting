<?php

/*

Customize Navigation

*/

/*
----------------------------------------------------------------------------------------------------
Add Section
----------------------------------------------------------------------------------------------------
*/

if ( ! function_exists( 'dox_customize_add_section_navigation' ) ) {

	function dox_customize_add_section_navigation( $wp_customize ) {

		$wp_customize->add_section( 'navigation', array(
			'title'       => esc_html__( 'Navigation', 'dox' ),
			'description' => esc_html__( 'Set up the navigation appearance.', 'dox' ),
			'panel'       => 'theme',
			'priority'    => 52,
		) );

	}

	add_action( 'customize_register', 'dox_customize_add_section_navigation' );

}

/*
----------------------------------------------------------------------------------------------------
Add Settings
----------------------------------------------------------------------------------------------------
*/

if ( ! function_exists( 'dox_customize_add_settings_navigation' ) ) {

	function dox_customize_add_settings_navigation( $wp_customize ) {

		$wp_customize->add_setting( 'dox_navigation', array(
			'default'           => 'enabled',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );

		/**
		 * Colors
		 */

		$wp_customize->add_setting( 'dox_navigation_colors_heading', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_navigation_color', array(
			'default'           => dox_default( 'dox_navigation_color' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_navigation_color_accent', array(
			'default'           => dox_default( 'dox_navigation_color_accent' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_navigation_color_background', array(
			'default'           => dox_default( 'dox_navigation_color_background' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_navigation_color_background_opacity', array(
			'default'           => dox_default( 'dox_navigation_color_background_opacity' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );

		/**
		 * Sub-navigation
		 */

		$wp_customize->add_setting( 'dox_navigation_subnavigation_heading', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_navigation_sub_color', array(
			'default'           => dox_default( 'dox_navigation_sub_color' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_navigation_sub_color_accent', array(
			'default'           => dox_default( 'dox_navigation_sub_color_accent' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_navigation_sub_color_background', array(
			'default'           => dox_default( 'dox_navigation_sub_color_background' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );

		/**
		 * Mobile
		 */

		$wp_customize->add_setting( 'dox_navigation_mobile_heading', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_navigation_mobile_color', array(
			'default'           => dox_default( 'dox_navigation_mobile_color' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_navigation_mobile_color_accent', array(
			'default'           => dox_default( 'dox_navigation_mobile_color_accent' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_navigation_mobile_color_background', array(
			'default'           => dox_default( 'dox_navigation_mobile_color_background' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );

		/**
		 * Settings
		 */

		$wp_customize->add_setting( 'dox_navigation_settings_heading', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_navigation_padding', array(
			'default'           => dox_default( 'dox_navigation_padding' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_navigation_align', array(
			'default'           => dox_default( 'dox_navigation_align' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		// Navigation Mobile on Desktop
		$wp_customize->add_setting( 'dox_navigation_mobile_on_desktop', array(
			'default'           => dox_default( 'dox_navigation_mobile_on_desktop' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );

	}

	add_action( 'customize_register', 'dox_customize_add_settings_navigation' );

}

/*
----------------------------------------------------------------------------------------------------
Add Controls
----------------------------------------------------------------------------------------------------
*/

if ( ! function_exists( 'dox_customize_add_controls_navigation' ) ) {

	function dox_customize_add_controls_navigation( $wp_customize ) {

		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_navigation', array(
			'label'       => esc_html__( 'Navigation', 'dox' ),
			'description' => esc_html__( 'Enable/disable the navigation.', 'dox' ),
			'settings'    => 'dox_navigation',
			'section'     => 'navigation',
			'type'        => 'select',
			'choices'     => array(
				'enabled'  => esc_html__( 'Enabled', 'dox' ),
				'disabled' => esc_html__( 'Disabled', 'dox' ),
			),
		) ) );

		/**
		 * Colors
		 */

		if ( class_exists( 'forqy_Customize_Heading_Control' ) ) {
			$wp_customize->add_control( new forqy_Customize_Heading_Control( $wp_customize, 'dox_navigation_colors_heading', array(
				'label'   => esc_html__( 'Colors', 'dox' ),
				'type'    => 'heading',
				'section' => 'navigation',
			) ) );
		}
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dox_navigation_color', array(
			'label'    => esc_html__( 'Color', 'dox' ),
			'settings' => 'dox_navigation_color',
			'section'  => 'navigation',
		) ) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dox_navigation_color_accent', array(
			'label'    => esc_html__( 'Accent Color', 'dox' ),
			'settings' => 'dox_navigation_color_accent',
			'section'  => 'navigation',
		) ) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dox_navigation_color_background', array(
			'label'    => esc_html__( 'Background Color', 'dox' ),
			'settings' => 'dox_navigation_color_background',
			'section'  => 'navigation',
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_navigation_color_background_opacity', array(
			'label'    => esc_html__( 'Background Opacity', 'dox' ),
			'settings' => 'dox_navigation_color_background_opacity',
			'section'  => 'navigation',
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

		/**
		 * Sub-navigation
		 */

		if ( class_exists( 'forqy_Customize_Subheading_Control' ) ) {
			$wp_customize->add_control( new forqy_Customize_Subheading_Control( $wp_customize, 'dox_navigation_subnavigation_heading', array(
				'label'   => esc_html__( 'Sub-navigation', 'dox' ),
				'type'    => 'subheading',
				'section' => 'navigation',
			) ) );
		}
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dox_navigation_sub_color', array(
			'label'    => esc_html__( 'Color', 'dox' ),
			'settings' => 'dox_navigation_sub_color',
			'section'  => 'navigation',
		) ) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dox_navigation_sub_color_accent', array(
			'label'    => esc_html__( 'Accent Color', 'dox' ),
			'settings' => 'dox_navigation_sub_color_accent',
			'section'  => 'navigation',
		) ) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dox_navigation_sub_color_background', array(
			'label'    => esc_html__( 'Background Color', 'dox' ),
			'settings' => 'dox_navigation_sub_color_background',
			'section'  => 'navigation',
		) ) );

		/**
		 * Mobile
		 */

		if ( class_exists( 'forqy_Customize_Subheading_Control' ) ) {
			$wp_customize->add_control( new forqy_Customize_Subheading_Control( $wp_customize, 'dox_navigation_mobile_heading', array(
				'label'   => esc_html__( 'Mobile Navigation', 'dox' ),
				'type'    => 'subheading',
				'section' => 'navigation',
			) ) );
		}
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dox_navigation_mobile_color', array(
			'label'    => esc_html__( 'Color', 'dox' ),
			'settings' => 'dox_navigation_mobile_color',
			'section'  => 'navigation',
		) ) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dox_navigation_mobile_color_accent', array(
			'label'    => esc_html__( 'Accent Color', 'dox' ),
			'settings' => 'dox_navigation_mobile_color_accent',
			'section'  => 'navigation',
		) ) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dox_navigation_mobile_color_background', array(
			'label'    => esc_html__( 'Background Color', 'dox' ),
			'settings' => 'dox_navigation_mobile_color_background',
			'section'  => 'navigation',
		) ) );

		/**
		 * Settings
		 */

		if ( class_exists( 'forqy_Customize_Heading_Control' ) ) {
			$wp_customize->add_control( new forqy_Customize_Heading_Control( $wp_customize, 'dox_navigation_settings_heading', array(
				'label'   => esc_html__( 'Settings', 'dox' ),
				'type'    => 'heading',
				'section' => 'navigation',
			) ) );
		}
		// Padding
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_navigation_padding', array(
			'label'    => esc_html__( 'Padding', 'dox' ),
			'settings' => 'dox_navigation_padding',
			'section'  => 'navigation',
			'type'     => 'select',
			'choices'  => array(
				'0'    => esc_html__( 'None', 'dox' ),
				'5px'  => esc_html__( 'XSmall', 'dox' ),
				'10px' => esc_html__( 'Small', 'dox' ),
				'20px' => esc_html__( 'Medium', 'dox' ),
				'30px' => esc_html__( 'Large', 'dox' ),
				'40px' => esc_html__( 'XLarge', 'dox' ),
			),
		) ) );
		// Alignment
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_navigation_align', array(
			'label'       => esc_html__( 'Alignment', 'dox' ),
			'description' => esc_html__( 'Select the alignment of the navigation.', 'dox' ),
			'settings'    => 'dox_navigation_align',
			'section'     => 'navigation',
			'type'        => 'select',
			'choices'     => array(
				'default' => esc_html__( 'Default', 'dox' ),
				'left'    => esc_html__( 'Left', 'dox' ),
				'center'  => esc_html__( 'Center', 'dox' ),
				'right'   => esc_html__( 'Right', 'dox' ),
			),
		) ) );
		// Navigation Mobile on Desktop
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_navigation_mobile_on_desktop', array(
			'label'       => esc_html__( 'Off-canvas Navigation on Desktop', 'dox' ),
			'description' => esc_html__( 'Enable/disable the off-canvas navigation on desktop (hamburger icon).', 'dox' ),
			'settings'    => 'dox_navigation_mobile_on_desktop',
			'section'     => 'navigation',
			'type'        => 'select',
			'choices'     => array(
				'enabled'  => esc_html__( 'Enabled', 'dox' ),
				'disabled' => esc_html__( 'Disabled', 'dox' ),
			),
		) ) );

	}

	add_action( 'customize_register', 'dox_customize_add_controls_navigation' );

}
