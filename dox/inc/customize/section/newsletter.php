<?php

/*

Customize Newsletter

*/

// Ff plugin MailChimp for WordPress
if ( function_exists( 'mc4wp' ) ) {

	/*
	----------------------------------------------------------------------------------------------------
	Add Section
	----------------------------------------------------------------------------------------------------
	*/

	if ( ! function_exists( 'dox_customize_add_section_newsletter' ) ) {

		function dox_customize_add_section_newsletter( $wp_customize ) {

			$wp_customize->add_section( 'newsletter', array(
				'title'       => esc_html__( 'Newsletter', 'dox' ),
				'description' => esc_html__( 'Set up the "Newsletter" section of the "MailChimp for WordPress" plugin.', 'dox' ),
				'panel'       => 'theme',
				'priority'    => 75,
			) );

		}

		add_action( 'customize_register', 'dox_customize_add_section_newsletter' );

	}

	/*
	----------------------------------------------------------------------------------------------------
	Add Settings
	----------------------------------------------------------------------------------------------------
	*/

	if ( ! function_exists( 'dox_customize_add_settings_newsletter' ) ) {

		function dox_customize_add_settings_newsletter( $wp_customize ) {

			$wp_customize->add_setting( 'dox_newsletter', array(
				'default'           => 1,
				'transport'         => 'refresh',
				'sanitize_callback' => 'sanitize_text_field',
			) );
			$wp_customize->add_setting( 'dox_newsletter_title', array(
				'default'           => esc_html__( 'Subscribe to Newsletter', 'dox' ),
				'transport'         => 'refresh',
				'sanitize_callback' => 'sanitize_text_field',
			) );
			$wp_customize->add_setting( 'dox_newsletter_content', array(
				'default'           => esc_html__( 'Subscribe to our newsletter to get the latest scoop right to your inbox.', 'dox' ),
				'transport'         => 'refresh',
				'sanitize_callback' => 'sanitize_text_field',
			) );
			$wp_customize->add_setting( 'dox_newsletter_footer', array(
				'default'           => esc_html__( 'No spam ever. That\'s a promise.', 'dox' ),
				'transport'         => 'refresh',
				'sanitize_callback' => 'sanitize_text_field',
			) );

			// Colors

			$wp_customize->add_setting( 'dox_newsletter_color', array(
				'default'           => dox_default( 'dox_newsletter_color' ),
				'transport'         => 'refresh',
				'sanitize_callback' => 'sanitize_text_field',
			) );
			$wp_customize->add_setting( 'dox_newsletter_color_accent', array(
				'default'           => dox_default( 'dox_newsletter_color_accent' ),
				'transport'         => 'refresh',
				'sanitize_callback' => 'sanitize_text_field',
			) );
			$wp_customize->add_setting( 'dox_newsletter_color_background', array(
				'default'           => dox_default( 'dox_newsletter_color_background' ),
				'transport'         => 'refresh',
				'sanitize_callback' => 'sanitize_text_field',
			) );

		}

		add_action( 'customize_register', 'dox_customize_add_settings_newsletter' );

	}

	/*
	----------------------------------------------------------------------------------------------------
	Add Controls
	----------------------------------------------------------------------------------------------------
	*/

	if ( ! function_exists( 'dox_customize_add_controls_newsletter' ) ) {

		function dox_customize_add_controls_newsletter( $wp_customize ) {

			$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_newsletter', array(
				'label'       => esc_html__( 'Newsletter', 'dox' ),
				'description' => esc_html__( 'Enable/disable the newsletter section.', 'dox' ),
				'settings'    => 'dox_newsletter',
				'type'        => 'checkbox',
				'section'     => 'newsletter',
			) ) );
			$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_newsletter_title', array(
				'label'    => esc_html__( 'Title', 'dox' ),
				'settings' => 'dox_newsletter_title',
				'section'  => 'newsletter',
			) ) );
			$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_newsletter_content', array(
				'label'    => esc_html__( 'Content', 'dox' ),
				'settings' => 'dox_newsletter_content',
				'type'     => 'textarea',
				'section'  => 'newsletter',
			) ) );
			$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_newsletter_footer', array(
				'label'    => esc_html__( 'Footer', 'dox' ),
				'settings' => 'dox_newsletter_footer',
				'section'  => 'newsletter',
			) ) );

			// Colors
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dox_newsletter_color', array(
				'label'    => esc_html__( 'Color', 'dox' ),
				'settings' => 'dox_newsletter_color',
				'section'  => 'newsletter',
			) ) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dox_newsletter_color_accent', array(
				'label'    => esc_html__( 'Accent Color', 'dox' ),
				'settings' => 'dox_newsletter_color_accent',
				'section'  => 'newsletter',
			) ) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dox_newsletter_color_background', array(
				'label'    => esc_html__( 'Background Color', 'dox' ),
				'settings' => 'dox_newsletter_color_background',
				'section'  => 'newsletter',
			) ) );

		}

		add_action( 'customize_register', 'dox_customize_add_controls_newsletter' );

	}

}
