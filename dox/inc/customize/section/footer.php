<?php

/*

Customize Footer

*/

/*
----------------------------------------------------------------------------------------------------
Add Section
----------------------------------------------------------------------------------------------------
*/

if ( ! function_exists( 'dox_customize_add_section_footer' ) ) {

	function dox_customize_add_section_footer( $wp_customize ) {

		$wp_customize->add_section( 'footer', array(
			'title'       => esc_html__( 'Footer', 'dox' ),
			'description' => esc_html__( 'Set up the footer appearance.', 'dox' ),
			'panel'       => 'theme',
			'priority'    => 65,
		) );

	}

	add_action( 'customize_register', 'dox_customize_add_section_footer' );

}

/*
----------------------------------------------------------------------------------------------------
Add Settings
----------------------------------------------------------------------------------------------------
*/

if ( ! function_exists( 'dox_customize_add_settings_footer' ) ) {

	function dox_customize_add_settings_footer( $wp_customize ) {

		$wp_customize->add_setting( 'dox_footer', array(
			'default'           => dox_default( 'dox_footer' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_footer_homepage', array(
			'default'           => dox_default( 'dox_footer_homepage' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );

		/**
		 *
		 * Colors
		 *
		 */

		$wp_customize->add_setting( 'dox_footer_colors_header', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_footer_color', array(
			'default'           => dox_default( 'dox_footer_color' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_footer_color_opacity', array(
			'default'           => dox_default( 'dox_footer_color_opacity' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_footer_color_accent', array(
			'default'           => dox_default( 'dox_footer_color_accent' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_footer_color_background', array(
			'default'           => dox_default( 'dox_footer_color_background' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_footer_color_background_opacity', array(
			'default'           => dox_default( 'dox_footer_color_background_opacity' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );

		/**
		 *
		 * Settings
		 *
		 */

		$wp_customize->add_setting( 'dox_footer_settings_header', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		// Width
		$wp_customize->add_setting( 'dox_footer_width', array(
			'default'           => dox_default( 'dox_footer_width' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		// Padding
		$wp_customize->add_setting( 'dox_footer_padding', array(
			'default'           => dox_default( 'dox_footer_padding' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		// Logo
		$wp_customize->add_setting( 'dox_footer_logo', array(
			'default'           => '',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->selective_refresh->add_partial( 'dox_footer_logo', array(
			'selector' => '.cs-footer-logo'
		) );
		// Copyright
		$wp_customize->add_setting( 'dox_copyright', array(
			'default'           => 'All rights reserved.',
			'transport'         => 'refresh',
			'sanitize_callback' => 'wp_kses_post',
		) );
		$wp_customize->selective_refresh->add_partial( 'dox_copyright', array(
			'selector' => '.cs-footer-copyright'
		) );
		// Themeby
		$wp_customize->add_setting( 'dox_themeby', array(
			'default'           => 1,
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );

	}

	add_action( 'customize_register', 'dox_customize_add_settings_footer' );

}

/*
----------------------------------------------------------------------------------------------------
Add Controls
----------------------------------------------------------------------------------------------------
*/

if ( ! function_exists( 'dox_customize_add_controls_footer' ) ) {

	function dox_customize_add_controls_footer( $wp_customize ) {

		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_footer', array(
			'label'       => esc_html__( 'Footer', 'dox' ),
			'description' => esc_html__( 'Enable/disable the footer.', 'dox' ),
			'settings'    => 'dox_footer',
			'section'     => 'footer',
			'type'        => 'select',
			'choices'     => array(
				'enabled'  => esc_html__( 'Enabled', 'dox' ),
				'disabled' => esc_html__( 'Disabled', 'dox' ),
			),
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_footer_homepage', array(
			'label'       => esc_html__( 'Footer on Homepage', 'dox' ),
			'description' => esc_html__( 'Enable/disable the footer on the homepage.', 'dox' ),
			'settings'    => 'dox_footer_homepage',
			'section'     => 'footer',
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
			$wp_customize->add_control( new forqy_Customize_Heading_Control( $wp_customize, 'dox_footer_colors_header', array(
				'label'   => esc_html__( 'Colors', 'dox' ),
				'type'    => 'heading',
				'section' => 'footer',
			) ) );
		}
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dox_footer_color', array(
			'label'    => esc_html__( 'Color', 'dox' ),
			'settings' => 'dox_footer_color',
			'section'  => 'footer',
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_footer_color_opacity', array(
			'label'    => esc_html__( 'Color Opacity', 'dox' ),
			'settings' => 'dox_footer_color_opacity',
			'section'  => 'footer',
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
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dox_footer_color_accent', array(
			'label'    => esc_html__( 'Accent Color', 'dox' ),
			'settings' => 'dox_footer_color_accent',
			'section'  => 'footer',
		) ) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dox_footer_color_background', array(
			'label'    => esc_html__( 'Background Color', 'dox' ),
			'settings' => 'dox_footer_color_background',
			'section'  => 'footer',
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_footer_color_background_opacity', array(
			'label'    => esc_html__( 'Background Opacity', 'dox' ),
			'settings' => 'dox_footer_color_background_opacity',
			'section'  => 'footer',
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
		 *
		 * Settings
		 *
		 */

		if ( class_exists( 'forqy_Customize_Heading_Control' ) ) {
			$wp_customize->add_control( new forqy_Customize_Heading_Control( $wp_customize, 'dox_footer_settings_header', array(
				'label'   => esc_html__( 'Settings', 'dox' ),
				'type'    => 'heading',
				'section' => 'footer',
			) ) );
		}

		// Width
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_footer_width', array(
			'label'       => esc_html__( 'Width', 'dox' ),
			'settings'    => 'dox_footer_width',
			'section'     => 'footer',
			'type'        => 'select',
			'choices'     => array(
				'stretched' => esc_html__( 'Full-width', 'dox' ),
				'100'       => esc_html__( 'Centered', 'dox' ),
			),
		) ) );

		// Padding
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_footer_padding', array(
			'label'    => esc_html__( 'Padding', 'dox' ),
			'settings' => 'dox_footer_padding',
			'section'  => 'footer',
			'type'     => 'select',
			'choices'  => array(
				'0'    => esc_html__( 'None', 'dox' ),
				'10px' => esc_html__( 'XSmall', 'dox' ),
				'20px' => esc_html__( 'Small', 'dox' ),
				'40px' => esc_html__( 'Medium', 'dox' ),
				'60px' => esc_html__( 'Large', 'dox' ),
				'80px' => esc_html__( 'XLarge', 'dox' ),
			),
		) ) );

		// Logo
		$wp_customize->add_control( new WP_Customize_Upload_Control( $wp_customize, 'dox_footer_logo', array(
			'label'       => esc_html__( 'Logo', 'dox' ),
			'description' => esc_html__( 'Upload the logo image. Required size is 128x128 pixels.', 'dox' ),
			'settings'    => 'dox_footer_logo',
			'section'     => 'footer',
		) ) );

		// Copyright
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_copyright', array(
			'label'    => esc_html__( 'Copyright', 'dox' ),
			'settings' => 'dox_copyright',
			'type'     => 'textarea',
			'section'  => 'footer',
		) ) );

		// Themeby
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_themeby', array(
			'label'    => esc_html__( 'Theme by', 'dox' ),
			'settings' => 'dox_themeby',
			'type'     => 'checkbox',
			'section'  => 'footer',
		) ) );

	}

	add_action( 'customize_register', 'dox_customize_add_controls_footer' );

}
