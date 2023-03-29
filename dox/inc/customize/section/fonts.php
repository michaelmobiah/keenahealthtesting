<?php

/*

Customize Fonts

*/

/*
----------------------------------------------------------------------------------------------------
Add Section
----------------------------------------------------------------------------------------------------
*/

if ( ! function_exists( 'dox_customize_add_section_fonts' ) ) {

	function dox_customize_add_section_fonts( $wp_customize ) {

		$wp_customize->add_section( 'fonts', array(
			'title'       => esc_html__( 'Fonts', 'dox' ),
			'description' => /* translators: %s url to Google Fonts */ sprintf( wp_kses( __( 'First, please choose the fonts by your choice from <a href="%s" target="_blank" rel="noopener">Google Fonts</a>', 'dox' ), array(
				'a' => array(
					'href'   => array(),
					'target' => array()
				)
			) ), esc_url( 'https://fonts.google.com/' ) ),
			'panel'       => 'theme',
			'priority'    => 30,
		) );

	}

	add_action( 'customize_register', 'dox_customize_add_section_fonts' );

}

/*
----------------------------------------------------------------------------------------------------
Add Settings
----------------------------------------------------------------------------------------------------
*/

if ( ! function_exists( 'dox_customize_add_settings_fonts' ) ) {

	function dox_customize_add_settings_fonts( $wp_customize ) {

		// Primary Font
		$wp_customize->add_setting( 'dox_font_primary_heading', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_font_primary', array(
			'default'           => dox_default( 'dox_font_primary' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_font_primary_type', array(
			'default'           => dox_default( 'dox_font_primary_type' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_font_primary_styles', array(
			'default'           => dox_default( 'dox_font_primary_styles' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );

		// Secondary Font
		$wp_customize->add_setting( 'dox_font_secondary_heading', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_font_secondary', array(
			'default'           => dox_default( 'dox_font_secondary' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_font_secondary_type', array(
			'default'           => dox_default( 'dox_font_secondary_type' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_font_secondary_styles', array(
			'default'           => dox_default( 'dox_font_secondary_styles' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );

		/**
		 * Global
		 */
		$wp_customize->add_setting( 'dox_font_global_heading', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_font_size', array(
			'default'           => dox_default( 'dox_font_size' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_font_weight', array(
			'default'           => dox_default( 'dox_font_weight' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_letter_spacing', array(
			'default'           => dox_default( 'dox_letter_spacing' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_text_transform', array(
			'default'           => dox_default( 'dox_text_transform' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_line_height', array(
			'default'           => dox_default( 'dox_line_height' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );

		/**
		 * Navigation
		 */
		$wp_customize->add_setting( 'dox_font_navigation_heading', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_font_family_navigation', array(
			'default'           => dox_default( 'dox_font_family_navigation' ),
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_font_size_navigation', array(
			'default'           => dox_default( 'dox_font_size_navigation' ),
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_font_weight_navigation', array(
			'default'           => dox_default( 'dox_font_weight_navigation' ),
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_letter_spacing_navigation', array(
			'default'           => dox_default( 'dox_letter_spacing_navigation' ),
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_text_transform_navigation', array(
			'default'           => dox_default( 'dox_text_transform_navigation' ),
			'sanitize_callback' => 'sanitize_text_field',
		) );

		/**
		 * Heading
		 */
		$wp_customize->add_setting( 'dox_font_heading_heading', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_font_size_heading', array(
			'default'           => dox_default( 'dox_font_size_heading' ),
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_font_weight_heading', array(
			'default'           => dox_default( 'dox_font_weight_heading' ),
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_letter_spacing_heading', array(
			'default'           => dox_default( 'dox_letter_spacing_heading' ),
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_text_transform_heading', array(
			'default'           => dox_default( 'dox_text_transform_heading' ),
			'sanitize_callback' => 'sanitize_text_field',
		) );

		/**
		 * Button
		 */
		$wp_customize->add_setting( 'dox_font_button_heading', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_font_family_button', array(
			'default'           => dox_default( 'dox_font_family_button' ),
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_font_size_button', array(
			'default'           => dox_default( 'dox_font_size_button' ),
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_font_weight_button', array(
			'default'           => dox_default( 'dox_font_weight_button' ),
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_letter_spacing_button', array(
			'default'           => dox_default( 'dox_letter_spacing_button' ),
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_text_transform_button', array(
			'default'           => dox_default( 'dox_text_transform_button' ),
			'sanitize_callback' => 'sanitize_text_field',
		) );


	}

	add_action( 'customize_register', 'dox_customize_add_settings_fonts' );

}

/*
----------------------------------------------------------------------------------------------------
Add Controls
----------------------------------------------------------------------------------------------------
*/

if ( ! function_exists( 'dox_customize_add_controls_fonts' ) ) {

	function dox_customize_add_controls_fonts( $wp_customize ) {

		// Primary Font
		if ( class_exists( 'forqy_Customize_Heading_Control' ) ) {
			$wp_customize->add_control( new forqy_Customize_Heading_Control( $wp_customize, 'dox_font_primary_heading', array(
				'label'   => esc_html__( 'Primary Font', 'dox' ),
				'type'    => 'heading',
				'section' => 'fonts',
			) ) );
		}
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_font_primary', array(
			'label'       => esc_html__( 'Font Family', 'dox' ),
			'description' => esc_html__( 'Fill in the full name of the font from Google Fonts.', 'dox' ),
			'settings'    => 'dox_font_primary',
			'section'     => 'fonts',
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_font_primary_type', array(
			'label'    => esc_html__( 'Font Type', 'dox' ),
			'settings' => 'dox_font_primary_type',
			'type'     => 'select',
			'section'  => 'fonts',
			'choices'  => array(
				'serif'      => esc_html__( 'Serif', 'dox' ),
				'sans-serif' => esc_html__( 'Sans-serif', 'dox' ),
				'monospace'  => esc_html__( 'Monospace', 'dox' ),
			),
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_font_primary_styles', array(
			'label'       => esc_html__( 'Font Styles', 'dox' ),
			'description' => esc_html__( 'Fill in styles separated by a comma. E.g.: "400,700"', 'dox' ),
			'settings'    => 'dox_font_primary_styles',
			'section'     => 'fonts',
		) ) );

		// Secondary Font
		if ( class_exists( 'forqy_Customize_Heading_Control' ) ) {
			$wp_customize->add_control( new forqy_Customize_Heading_Control( $wp_customize, 'dox_font_secondary_heading', array(
				'label'   => esc_html__( 'Secondary Font', 'dox' ),
				'type'    => 'heading',
				'section' => 'fonts',
			) ) );
		}
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_font_secondary', array(
			'label'       => esc_html__( 'Font Family', 'dox' ),
			'description' => esc_html__( 'Fill in the full name of the font from Google Fonts.', 'dox' ),
			'settings'    => 'dox_font_secondary',
			'section'     => 'fonts',
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_font_secondary_type', array(
			'label'    => esc_html__( 'Font Type', 'dox' ),
			'settings' => 'dox_font_secondary_type',
			'type'     => 'select',
			'section'  => 'fonts',
			'choices'  => array(
				'serif'      => esc_html__( 'Serif', 'dox' ),
				'sans-serif' => esc_html__( 'Sans-serif', 'dox' ),
				'monospace'  => esc_html__( 'Monospace', 'dox' ),
			),
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_font_secondary_styles', array(
			'label'       => esc_html__( 'Font Styles', 'dox' ),
			'description' => esc_html__( 'Fill in styles separated by a comma. E.g.: "400,700"', 'dox' ),
			'settings'    => 'dox_font_secondary_styles',
			'section'     => 'fonts',
		) ) );

		/**
		 * Global
		 */
		if ( class_exists( 'forqy_Customize_Heading_Control' ) ) {
			$wp_customize->add_control( new forqy_Customize_Heading_Control( $wp_customize, 'dox_font_global_heading', array(
				'label'   => esc_html__( 'Global', 'dox' ),
				'type'    => 'heading',
				'section' => 'fonts',
			) ) );
		}
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_font_size', array(
			'label'    => esc_html__( 'Font Size', 'dox' ),
			'settings' => 'dox_font_size',
			'type'     => 'select',
			'section'  => 'fonts',
			'choices'  => array(
				'12px' => esc_html__( 'XXSmall', 'dox' ),
				'14px' => esc_html__( 'XSmall', 'dox' ),
				'15px' => esc_html__( 'Small', 'dox' ),
				'16px' => esc_html__( 'Medium', 'dox' ),
				'17px' => esc_html__( 'Large', 'dox' ),
				'18px' => esc_html__( 'XLarge', 'dox' ),
				'21px' => esc_html__( 'XXLarge', 'dox' ),
			),
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_font_weight', array(
			'label'    => esc_html__( 'Font Weight', 'dox' ),
			'settings' => 'dox_font_weight',
			'type'     => 'select',
			'section'  => 'fonts',
			'choices'  => array(
				'100' => esc_html__( 'Thin 100', 'dox' ),
				'200' => esc_html__( 'Extra-Light 200', 'dox' ),
				'300' => esc_html__( 'Light 300', 'dox' ),
				'400' => esc_html__( 'Regular 400', 'dox' ),
				'500' => esc_html__( 'Medium 500', 'dox' ),
				'600' => esc_html__( 'Semi-bold 600', 'dox' ),
				'700' => esc_html__( 'Bold 700', 'dox' ),
				'800' => esc_html__( 'Extra-Bold 800', 'dox' ),
				'900' => esc_html__( 'Black 900', 'dox' ),
			),
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_letter_spacing', array(
			'label'    => esc_html__( 'Letter Spacing', 'dox' ),
			'settings' => 'dox_letter_spacing',
			'type'     => 'select',
			'section'  => 'fonts',
			'choices'  => array(
				'-0.1em'   => '-0.1em',
				'-0.075em' => '-0.075em',
				'-0.05em'  => '-0.05em',
				'-0.025em' => '-0.025em',
				'0'        => '0',
				'0.025em'  => '0.025em',
				'0.05em'   => '0.05em',
				'0.075em'  => '0.075em',
				'0.1em'    => '0.1em',
				'0.125em'  => '0.125em',
				'0.15em'   => '0.15em',
				'0.175em'  => '0.175em',
				'0.2em'    => '0.2em',
				'0.225em'  => '0.225em',
				'0.25em'   => '0.25em',
				'0.275em'  => '0.275em',
				'0.3em'    => '0.3em',
			),
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_text_transform', array(
			'label'    => esc_html__( 'Text Transform', 'dox' ),
			'settings' => 'dox_text_transform',
			'type'     => 'select',
			'section'  => 'fonts',
			'choices'  => array(
				'none'       => esc_html__( 'None', 'dox' ),
				'uppercase'  => esc_html__( 'Uppercase', 'dox' ),
				'capitalize' => esc_html__( 'Capitalize', 'dox' ),
			),
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_line_height', array(
			'label'       => esc_html__( 'Line Height', 'dox' ),
			'settings'    => 'dox_line_height',
			'type'        => 'number',
			'section'     => 'fonts',
			'input_attrs' => array(
				'min'  => 1.3,
				'max'  => 2.0,
				'step' => 0.1,
			),
		) ) );

		/**
		 * Navigation
		 */
		if ( class_exists( 'forqy_Customize_Heading_Control' ) ) {
			$wp_customize->add_control( new forqy_Customize_Heading_Control( $wp_customize, 'dox_font_navigation_heading', array(
				'label'   => esc_html__( 'Navigation', 'dox' ),
				'type'    => 'heading',
				'section' => 'fonts',
			) ) );
		}
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_font_family_navigation', array(
			'label'    => esc_html__( 'Font Family', 'dox' ),
			'settings' => 'dox_font_family_navigation',
			'type'     => 'select',
			'section'  => 'fonts',
			'choices'  => array(
				'font-primary'   => esc_html__( 'Primary Font', 'dox' ),
				'font-secondary' => esc_html__( 'Secondary Font', 'dox' ),
			),
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_font_size_navigation', array(
			'label'    => esc_html__( 'Font Size', 'dox' ),
			'settings' => 'dox_font_size_navigation',
			'type'     => 'select',
			'section'  => 'fonts',
			'choices'  => array(
				'12px' => esc_html__( 'XXSmall', 'dox' ),
				'14px' => esc_html__( 'XSmall', 'dox' ),
				'15px' => esc_html__( 'Small', 'dox' ),
				'16px' => esc_html__( 'Medium', 'dox' ),
				'17px' => esc_html__( 'Large', 'dox' ),
				'18px' => esc_html__( 'XLarge', 'dox' ),
				'21px' => esc_html__( 'XXLarge', 'dox' ),
			),
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_font_weight_navigation', array(
			'label'    => esc_html__( 'Font Weight', 'dox' ),
			'settings' => 'dox_font_weight_navigation',
			'type'     => 'select',
			'section'  => 'fonts',
			'choices'  => array(
				'100' => esc_html__( 'Thin 100', 'dox' ),
				'200' => esc_html__( 'Extra-Light 200', 'dox' ),
				'300' => esc_html__( 'Light 300', 'dox' ),
				'400' => esc_html__( 'Regular 400', 'dox' ),
				'500' => esc_html__( 'Medium 500', 'dox' ),
				'600' => esc_html__( 'Semi-bold 600', 'dox' ),
				'700' => esc_html__( 'Bold 700', 'dox' ),
				'800' => esc_html__( 'Extra-Bold 800', 'dox' ),
				'900' => esc_html__( 'Black 900', 'dox' ),
			),
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_letter_spacing_navigation', array(
			'label'    => esc_html__( 'Letter Spacing', 'dox' ),
			'settings' => 'dox_letter_spacing_navigation',
			'type'     => 'select',
			'section'  => 'fonts',
			'choices'  => array(
				'-0.1em'   => '-0.1em',
				'-0.075em' => '-0.075em',
				'-0.05em'  => '-0.05em',
				'-0.025em' => '-0.025em',
				'0'        => '0',
				'0.025em'  => '0.025em',
				'0.05em'   => '0.05em',
				'0.075em'  => '0.075em',
				'0.1em'    => '0.1em',
				'0.125em'  => '0.125em',
				'0.15em'   => '0.15em',
				'0.175em'  => '0.175em',
				'0.2em'    => '0.2em',
				'0.225em'  => '0.225em',
				'0.25em'   => '0.25em',
				'0.275em'  => '0.275em',
				'0.3em'    => '0.3em',
			),
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_text_transform_navigation', array(
			'label'    => esc_html__( 'Text Transform', 'dox' ),
			'settings' => 'dox_text_transform_navigation',
			'type'     => 'select',
			'section'  => 'fonts',
			'choices'  => array(
				'none'       => esc_html__( 'None', 'dox' ),
				'uppercase'  => esc_html__( 'Uppercase', 'dox' ),
				'capitalize' => esc_html__( 'Capitalize', 'dox' ),
			),
		) ) );

		/**
		 * Heading
		 */
		if ( class_exists( 'forqy_Customize_Heading_Control' ) ) {
			$wp_customize->add_control( new forqy_Customize_Heading_Control( $wp_customize, 'dox_font_heading_heading', array(
				'label'   => esc_html__( 'Heading', 'dox' ),
				'type'    => 'heading',
				'section' => 'fonts',
			) ) );
		}
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_font_size_heading', array(
			'label'    => esc_html__( 'Font Size', 'dox' ),
			'settings' => 'dox_font_size_heading',
			'type'     => 'select',
			'section'  => 'fonts',
			'choices'  => array(
				'12px' => esc_html__( 'XXSmall', 'dox' ),
				'14px' => esc_html__( 'XSmall', 'dox' ),
				'15px' => esc_html__( 'Small', 'dox' ),
				'16px' => esc_html__( 'Medium', 'dox' ),
				'17px' => esc_html__( 'Large', 'dox' ),
				'18px' => esc_html__( 'XLarge', 'dox' ),
				'21px' => esc_html__( 'XXLarge', 'dox' ),
			),
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_font_weight_heading', array(
			'label'    => esc_html__( 'Font Weight', 'dox' ),
			'settings' => 'dox_font_weight_heading',
			'type'     => 'select',
			'section'  => 'fonts',
			'choices'  => array(
				'100' => esc_html__( 'Thin 100', 'dox' ),
				'200' => esc_html__( 'Extra-Light 200', 'dox' ),
				'300' => esc_html__( 'Light 300', 'dox' ),
				'400' => esc_html__( 'Regular 400', 'dox' ),
				'500' => esc_html__( 'Medium 500', 'dox' ),
				'600' => esc_html__( 'Semi-bold 600', 'dox' ),
				'700' => esc_html__( 'Bold 700', 'dox' ),
				'800' => esc_html__( 'Extra-Bold 800', 'dox' ),
				'900' => esc_html__( 'Black 900', 'dox' ),
			),
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_letter_spacing_heading', array(
			'label'    => esc_html__( 'Letter Spacing', 'dox' ),
			'settings' => 'dox_letter_spacing_heading',
			'type'     => 'select',
			'section'  => 'fonts',
			'choices'  => array(
				'-0.1em'   => '-0.1em',
				'-0.075em' => '-0.075em',
				'-0.05em'  => '-0.05em',
				'-0.025em' => '-0.025em',
				'0'        => '0',
				'0.025em'  => '0.025em',
				'0.05em'   => '0.05em',
				'0.075em'  => '0.075em',
				'0.1em'    => '0.1em',
				'0.125em'  => '0.125em',
				'0.15em'   => '0.15em',
				'0.175em'  => '0.175em',
				'0.2em'    => '0.2em',
				'0.225em'  => '0.225em',
				'0.25em'   => '0.25em',
				'0.275em'  => '0.275em',
				'0.3em'    => '0.3em',
			),
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_text_transform_heading', array(
			'label'    => esc_html__( 'Text Transform', 'dox' ),
			'settings' => 'dox_text_transform_heading',
			'type'     => 'select',
			'section'  => 'fonts',
			'choices'  => array(
				'none'       => esc_html__( 'None', 'dox' ),
				'uppercase'  => esc_html__( 'Uppercase', 'dox' ),
				'capitalize' => esc_html__( 'Capitalize', 'dox' ),
			),
		) ) );

		/**
		 * Button
		 */
		if ( class_exists( 'forqy_Customize_Heading_Control' ) ) {
			$wp_customize->add_control( new forqy_Customize_Heading_Control( $wp_customize, 'dox_font_button_heading', array(
				'label'   => esc_html__( 'Button', 'dox' ),
				'type'    => 'heading',
				'section' => 'fonts',
			) ) );
		}
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_font_family_button', array(
			'label'    => esc_html__( 'Font Family', 'dox' ),
			'settings' => 'dox_font_family_button',
			'type'     => 'select',
			'section'  => 'fonts',
			'choices'  => array(
				'font-primary'   => esc_html__( 'Primary Font', 'dox' ),
				'font-secondary' => esc_html__( 'Secondary Font', 'dox' ),
			),
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_font_size_button', array(
			'label'    => esc_html__( 'Font Size', 'dox' ),
			'settings' => 'dox_font_size_button',
			'type'     => 'select',
			'section'  => 'fonts',
			'choices'  => array(
				'12px' => esc_html__( 'XXSmall', 'dox' ),
				'14px' => esc_html__( 'XSmall', 'dox' ),
				'15px' => esc_html__( 'Small', 'dox' ),
				'16px' => esc_html__( 'Medium', 'dox' ),
				'17px' => esc_html__( 'Large', 'dox' ),
				'18px' => esc_html__( 'XLarge', 'dox' ),
				'21px' => esc_html__( 'XXLarge', 'dox' ),
			),
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_font_weight_button', array(
			'label'    => esc_html__( 'Font Weight', 'dox' ),
			'settings' => 'dox_font_weight_button',
			'type'     => 'select',
			'section'  => 'fonts',
			'choices'  => array(
				'100' => esc_html__( 'Thin 100', 'dox' ),
				'200' => esc_html__( 'Extra-Light 200', 'dox' ),
				'300' => esc_html__( 'Light 300', 'dox' ),
				'400' => esc_html__( 'Regular 400', 'dox' ),
				'500' => esc_html__( 'Medium 500', 'dox' ),
				'600' => esc_html__( 'Semi-bold 600', 'dox' ),
				'700' => esc_html__( 'Bold 700', 'dox' ),
				'800' => esc_html__( 'Extra-Bold 800', 'dox' ),
				'900' => esc_html__( 'Black 900', 'dox' ),
			),
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_letter_spacing_button', array(
			'label'    => esc_html__( 'Letter Spacing', 'dox' ),
			'settings' => 'dox_letter_spacing_button',
			'type'     => 'select',
			'section'  => 'fonts',
			'choices'  => array(
				'-0.1em'   => '-0.1em',
				'-0.075em' => '-0.075em',
				'-0.05em'  => '-0.05em',
				'-0.025em' => '-0.025em',
				'0'        => '0',
				'0.025em'  => '0.025em',
				'0.05em'   => '0.05em',
				'0.075em'  => '0.075em',
				'0.1em'    => '0.1em',
				'0.125em'  => '0.125em',
				'0.15em'   => '0.15em',
				'0.175em'  => '0.175em',
				'0.2em'    => '0.2em',
				'0.225em'  => '0.225em',
				'0.25em'   => '0.25em',
				'0.275em'  => '0.275em',
				'0.3em'    => '0.3em',
			),
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_text_transform_button', array(
			'label'    => esc_html__( 'Text Transform', 'dox' ),
			'settings' => 'dox_text_transform_button',
			'type'     => 'select',
			'section'  => 'fonts',
			'choices'  => array(
				'none'       => esc_html__( 'None', 'dox' ),
				'uppercase'  => esc_html__( 'Uppercase', 'dox' ),
				'capitalize' => esc_html__( 'Capitalize', 'dox' ),
			),
		) ) );

	}

	add_action( 'customize_register', 'dox_customize_add_controls_fonts' );

}
