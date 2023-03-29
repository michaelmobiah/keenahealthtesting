<?php

/*

Customize Colors

*/

/*
----------------------------------------------------------------------------------------------------
Add Section
----------------------------------------------------------------------------------------------------
*/

if ( ! function_exists( 'dox_customize_add_section_design' ) ) {

	function dox_customize_add_section_design( $wp_customize ) {

		$wp_customize->add_section( 'design', array(
			'title'       => esc_html__( 'Design', 'dox' ),
			'description' => esc_html__( 'Set up design elements of the theme.', 'dox' ),
			'panel'       => 'theme',
			'priority'    => 40,
		) );

	}

	add_action( 'customize_register', 'dox_customize_add_section_design' );

}

/*
----------------------------------------------------------------------------------------------------
Add Settings
----------------------------------------------------------------------------------------------------
*/

if ( ! function_exists( 'dox_customize_add_settings_design' ) ) {

	function dox_customize_add_settings_design( $wp_customize ) {

		/**
		 * Filter
		 */

		$wp_customize->add_setting( 'dox_filter_heading', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_filter', array(
			'default'           => dox_default( 'dox_filter' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_filter_opacity', array(
			'default'           => dox_default( 'dox_filter_opacity' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_filter_intensity', array(
			'default'           => dox_default( 'dox_filter_intensity' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );

		/**
		 * Pattern
		 */

		$wp_customize->add_setting( 'dox_pattern_heading', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_pattern', array(
			'default'           => dox_default( 'dox_pattern' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_pattern_color', array(
			'default'           => dox_default( 'dox_pattern_color' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_pattern_opacity', array(
			'default'           => dox_default( 'dox_pattern_opacity' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );

		/**
		 * Mask
		 */

		$wp_customize->add_setting( 'dox_mask_heading', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_mask', array(
			'default'           => dox_default( 'dox_mask' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );

		/**
		 * Border
		 */

		$wp_customize->add_setting( 'dox_border_heading', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_border', array(
			'default'           => dox_default( 'dox_border' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_border_width', array(
			'default'           => dox_default( 'dox_border_width' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_border_radius', array(
			'default'           => dox_default( 'dox_border_radius' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );

		/**
		 * Shadow
		 */

		$wp_customize->add_setting( 'dox_shadow_heading', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_style_shadow', array(
			'default'           => 'enabled',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );

	}

	add_action( 'customize_register', 'dox_customize_add_settings_design' );

}

/*
----------------------------------------------------------------------------------------------------
Add Controls
----------------------------------------------------------------------------------------------------
*/

if ( ! function_exists( 'dox_customize_add_controls_design' ) ) {

	function dox_customize_add_controls_design( $wp_customize ) {

		/**
		 * Filter
		 */

		if ( class_exists( 'forqy_Customize_Heading_Control' ) ) {
			$wp_customize->add_control( new forqy_Customize_Heading_Control( $wp_customize, 'dox_filter_heading', array(
				'label'       => esc_html__( 'Filter', 'dox' ),
				'description' => esc_html__( 'Please note, the intensity option works only for some filters, not for all.', 'dox' ),
				'type'        => 'heading',
				'section'     => 'design',
			) ) );
		}
		if ( function_exists( 'forqy_filter_options' ) ) {
			$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_filter', array(
				'label'       => esc_html__( 'Style', 'dox' ),
				'description' => esc_html__( 'Select the filter style applied to the header images.', 'dox' ),
				'settings'    => 'dox_filter',
				'section'     => 'design',
				'type'        => 'select',
				'choices'     => forqy_filter_options()
			) ) );
		}
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_filter_opacity', array(
			'label'    => esc_html__( 'Opacity', 'dox' ),
			'settings' => 'dox_filter_opacity',
			'section'  => 'design',
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
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_filter_intensity', array(
			'label'    => esc_html__( 'Intensity', 'dox' ),
			'settings' => 'dox_filter_intensity',
			'section'  => 'design',
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
		 * Pattern
		 */

		if ( class_exists( 'forqy_Customize_Heading_Control' ) ) {
			$wp_customize->add_control( new forqy_Customize_Heading_Control( $wp_customize, 'dox_pattern_heading', array(
				'label'   => esc_html__( 'Pattern', 'dox' ),
				'type'    => 'heading',
				'section' => 'design',
			) ) );
		}
		if ( function_exists( 'forqy_pattern_options' ) ) {
			$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_pattern', array(
				'label'       => esc_html__( 'Style', 'dox' ),
				'description' => esc_html__( 'Select the pattern style over the header images.', 'dox' ),
				'settings'    => 'dox_pattern',
				'section'     => 'design',
				'type'        => 'select',
				'choices'     => forqy_pattern_options(),
			) ) );
		}
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dox_pattern_color', array(
			'label'    => esc_html__( 'Color', 'dox' ),
			'settings' => 'dox_pattern_color',
			'section'  => 'design',
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_pattern_opacity', array(
			'label'    => esc_html__( 'Opacity', 'dox' ),
			'settings' => 'dox_pattern_opacity',
			'section'  => 'design',
			'type'     => 'select',
			'choices'  => array(
				'99.99' => '100%', // SVG Workaround
				'95'    => '95%',
				'90'    => '90%',
				'85'    => '85%',
				'80'    => '80%',
				'75'    => '75%',
				'70'    => '70%',
				'65'    => '65%',
				'60'    => '60%',
				'55'    => '55%',
				'50'    => '50%',
				'45'    => '45%',
				'40'    => '40%',
				'35'    => '35%',
				'30'    => '30%',
				'25'    => '25%',
				'20'    => '20%',
				'15'    => '15%',
				'10'    => '10%',
				'5'     => '5%',
				'0'     => '0%',
			),
		) ) );

		/**
		 * Mask
		 */

		if ( class_exists( 'forqy_Customize_Heading_Control' ) ) {
			$wp_customize->add_control( new forqy_Customize_Heading_Control( $wp_customize, 'dox_mask_heading', array(
				'label'   => esc_html__( 'Mask', 'dox' ),
				'type'    => 'heading',
				'section' => 'design',
			) ) );
		}
		if ( function_exists( 'forqy_mask_options' ) ) {
			$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_mask', array(
				'label'       => esc_html__( 'Shape', 'dox' ),
				'description' => esc_html__( 'Select a mask shape applied to the header images.', 'dox' ),
				'settings'    => 'dox_mask',
				'section'     => 'design',
				'type'        => 'select',
				'choices'     => forqy_mask_options(),
			) ) );
		}

		/**
		 * Border
		 */

		if ( class_exists( 'forqy_Customize_Heading_Control' ) ) {
			$wp_customize->add_control( new forqy_Customize_Heading_Control( $wp_customize, 'dox_border_heading', array(
				'label'   => esc_html__( 'Border', 'dox' ),
				'type'    => 'heading',
				'section' => 'design',
			) ) );
		}
		if ( function_exists( 'forqy_border_options' ) ) {
			$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_border', array(
				'label'       => esc_html__( 'Decorative', 'dox' ),
				'description' => esc_html__( 'Select the decorative border style.', 'dox' ),
				'settings'    => 'dox_border',
				'section'     => 'design',
				'type'        => 'select',
				'choices'     => forqy_border_options(),
			) ) );
		}
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_border_width', array(
			'label'       => esc_html__( 'Width', 'dox' ),
			'description' => esc_html__( 'Set up the border width in pixels.', 'dox' ),
			'settings'    => 'dox_border_width',
			'section'     => 'design',
			'type'        => 'number',
			'input_attrs' => array(
				'min'  => 1,
				'max'  => 6,
				'step' => 1,
			),
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_border_radius', array(
			'label'       => esc_html__( 'Radius', 'dox' ),
			'description' => esc_html__( 'Set up the border radius in pixels.', 'dox' ),
			'settings'    => 'dox_border_radius',
			'section'     => 'design',
			'type'        => 'number',
			'input_attrs' => array(
				'min'  => 0,
				'max'  => 28,
				'step' => 1,
			),
		) ) );

		/**
		 * Shadows
		 */

		if ( class_exists( 'forqy_Customize_Heading_Control' ) ) {
			$wp_customize->add_control( new forqy_Customize_Heading_Control( $wp_customize, 'dox_shadow_heading', array(
				'label'   => esc_html__( 'Shadow', 'dox' ),
				'type'    => 'heading',
				'section' => 'design',
			) ) );
		}
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_style_shadow', array(
			'label'       => esc_html__( 'Shadow', 'dox' ),
			'description' => esc_html__( 'Enable/disable shadows.', 'dox' ),
			'settings'    => 'dox_style_shadow',
			'section'     => 'design',
			'type'        => 'select',
			'choices'     => array(
				'enabled'  => esc_html__( 'Enabled', 'dox' ),
				'disabled' => esc_html__( 'Disabled', 'dox' ),
			),
		) ) );

	}

	add_action( 'customize_register', 'dox_customize_add_controls_design' );

}
