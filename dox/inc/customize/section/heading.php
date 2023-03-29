<?php

/*

Customize Heading

*/

/*
----------------------------------------------------------------------------------------------------
Add Section
----------------------------------------------------------------------------------------------------
*/

if ( ! function_exists( 'dox_customize_add_section_heading' ) ) {

	function dox_customize_add_section_heading( $wp_customize ) {

		$wp_customize->add_section( 'heading', array(
			'title'       => esc_html__( 'Heading', 'dox' ),
			'description' => esc_html__( 'Set up the page heading appearance.', 'dox' ),
			'panel'       => 'theme',
			'priority'    => 54,
		) );

	}

	add_action( 'customize_register', 'dox_customize_add_section_heading' );

}

/*
----------------------------------------------------------------------------------------------------
Add Settings
----------------------------------------------------------------------------------------------------
*/

if ( ! function_exists( 'dox_customize_add_settings_heading' ) ) {

	function dox_customize_add_settings_heading( $wp_customize ) {

		$wp_customize->add_setting( 'dox_heading_color_heading', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_heading_color', array(
			'default'           => dox_default( 'dox_heading_color' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_heading_color_accent', array(
			'default'           => dox_default( 'dox_heading_color_accent' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_heading_color_background', array(
			'default'           => dox_default( 'dox_heading_color_background' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );

		// Overlay
		$wp_customize->add_setting( 'dox_heading_overlay_heading', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_heading_overlay_color', array(
			'default'           => dox_default( 'dox_heading_overlay_color' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_heading_overlay_opacity', array(
			'default'           => dox_default( 'dox_heading_overlay_opacity' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );

		// Gradient
		$wp_customize->add_setting( 'dox_heading_gradient_heading', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_heading_gradient_color', array(
			'default'           => dox_default( 'dox_heading_gradient_color' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_heading_gradient_opacity', array(
			'default'           => dox_default( 'dox_heading_gradient_opacity' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_heading_gradient_angle', array(
			'default'           => dox_default( 'dox_heading_gradient_angle' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );

		/**
		 * Background
		 */

		$wp_customize->add_setting( 'dox_heading_background_image_heading', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_heading_background_image', array(
			'default'           => dox_default( 'dox_heading_background_image' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_heading_background_image_position_x', array(
			'default'           => dox_default( 'dox_heading_background_image_position_x' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_heading_background_image_position_y', array(
			'default'           => dox_default( 'dox_heading_background_image_position_y' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_heading_background_image_size', array(
			'default'           => dox_default( 'dox_heading_background_image_size' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );

		/**
		 * Title
		 */

		$wp_customize->add_setting( 'dox_heading_title_heading', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_heading_font_multiplier', array(
			'default'           => dox_default( 'dox_heading_font_multiplier' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );

		/**
		 * Settings
		 */

		$wp_customize->add_setting( 'dox_heading_settings_heading', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_heading_height', array(
			'default'           => dox_default( 'dox_heading_height' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_heading_height_single', array(
			'default'           => dox_default( 'dox_heading_height_single' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_heading_align_horizontal', array(
			'default'           => dox_default( 'dox_heading_align_horizontal' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_heading_align_vertical', array(
			'default'           => dox_default( 'dox_heading_align_vertical' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );

		// Categories
		$wp_customize->add_setting( 'dox_heading_categories', array(
			'default'           => 'enabled',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );

		// Button
		$wp_customize->add_setting( 'dox_heading_button', array(
			'default'           => 'accent',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );

	}

	add_action( 'customize_register', 'dox_customize_add_settings_heading' );

}

/*
----------------------------------------------------------------------------------------------------
Add Controls
----------------------------------------------------------------------------------------------------
*/

if ( ! function_exists( 'dox_customize_add_controls_heading' ) ) {

	function dox_customize_add_controls_heading( $wp_customize ) {

		if ( class_exists( 'forqy_Customize_Heading_Control' ) ) {
			$wp_customize->add_control( new forqy_Customize_Heading_Control( $wp_customize, 'dox_heading_color_heading', array(
				'label'   => esc_html__( 'Colors', 'dox' ),
				'type'    => 'heading',
				'section' => 'heading',
			) ) );
		}
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dox_heading_color', array(
			'label'    => esc_html__( 'Color', 'dox' ),
			'settings' => 'dox_heading_color',
			'section'  => 'heading',
		) ) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dox_heading_color_accent', array(
			'label'    => esc_html__( 'Accent Color', 'dox' ),
			'settings' => 'dox_heading_color_accent',
			'section'  => 'heading',
		) ) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dox_heading_color_background', array(
			'label'    => esc_html__( 'Background Color', 'dox' ),
			'settings' => 'dox_heading_color_background',
			'section'  => 'heading',
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_heading_color_background_opacity', array(
			'label'    => esc_html__( 'Background Opacity', 'dox' ),
			'settings' => 'dox_heading_color_background_opacity',
			'section'  => 'heading',
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

		// Overlay
		if ( class_exists( 'forqy_Customize_Subheading_Control' ) ) {
			$wp_customize->add_control( new forqy_Customize_Subheading_Control( $wp_customize, 'dox_heading_overlay_heading', array(
				'label'   => esc_html__( 'Overlay', 'dox' ),
				'type'    => 'subheading',
				'section' => 'heading',
			) ) );
		}
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dox_heading_overlay_color', array(
			'label'    => esc_html__( 'Color', 'dox' ),
			'settings' => 'dox_heading_overlay_color',
			'section'  => 'heading',
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_heading_overlay_opacity', array(
			'label'    => esc_html__( 'Opacity', 'dox' ),
			'settings' => 'dox_heading_overlay_opacity',
			'section'  => 'heading',
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

		// Gradient
		if ( class_exists( 'forqy_Customize_Subheading_Control' ) ) {
			$wp_customize->add_control( new forqy_Customize_Subheading_Control( $wp_customize, 'dox_heading_gradient_heading', array(
				'label'   => esc_html__( 'Gradient', 'dox' ),
				'type'    => 'subheading',
				'section' => 'heading',
			) ) );
		}
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dox_heading_gradient_color', array(
			'label'    => esc_html__( 'Color', 'dox' ),
			'settings' => 'dox_heading_gradient_color',
			'section'  => 'heading',
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_heading_gradient_opacity', array(
			'label'    => esc_html__( 'Opacity', 'dox' ),
			'settings' => 'dox_heading_gradient_opacity',
			'section'  => 'heading',
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
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_heading_gradient_angle', array(
			'label'    => esc_html__( 'Angle', 'dox' ),
			'settings' => 'dox_heading_gradient_angle',
			'section'  => 'heading',
			'type'        => 'number',
			'input_attrs' => array(
				'min'  => '0',
				'max'  => '360',
				'step' => '5',
			),
		) ) );

		/**
		 * Background
		 */

		if ( class_exists( 'forqy_Customize_Heading_Control' ) ) {
			$wp_customize->add_control( new forqy_Customize_Heading_Control( $wp_customize, 'dox_heading_background_image_heading', array(
				'label'   => esc_html__( 'Background Image', 'dox' ),
				'type'    => 'heading',
				'section' => 'heading',
			) ) );
		}
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_heading_background_image', array(
			'label'    => esc_html__( 'Image', 'dox' ),
			'settings' => 'dox_heading_background_image',
			'section'  => 'heading',
			'type'     => 'select',
			'choices'  => array(
				'enabled'  => esc_html__( 'Enabled', 'dox' ),
				'disabled' => esc_html__( 'Disabled', 'dox' ),
			),
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_heading_background_image_position_x', array(
			'label'    => esc_html__( 'Image Position X', 'dox' ),
			'settings' => 'dox_heading_background_image_position_x',
			'section'  => 'heading',
			'type'     => 'select',
			'choices'  => array(
				'left'   => esc_html__( 'Left', 'dox' ),
				'center' => esc_html__( 'Center', 'dox' ),
				'right'  => esc_html__( 'Right', 'dox' ),
			),
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_heading_background_image_position_y', array(
			'label'    => esc_html__( 'Image Position Y', 'dox' ),
			'settings' => 'dox_heading_background_image_position_y',
			'section'  => 'heading',
			'type'     => 'select',
			'choices'  => array(
				'top'    => esc_html__( 'Top', 'dox' ),
				'center' => esc_html__( 'Center', 'dox' ),
				'bottom' => esc_html__( 'Bottom', 'dox' ),
			),
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_heading_background_image_size', array(
			'label'    => esc_html__( 'Image Size', 'dox' ),
			'settings' => 'dox_heading_background_image_size',
			'section'  => 'heading',
			'type'     => 'select',
			'choices'  => array(
				'auto'    => esc_html__( 'Auto', 'dox' ),
				'contain' => esc_html__( 'Contain', 'dox' ),
				'cover'   => esc_html__( 'Fill', 'dox' ),
			),
		) ) );

		/**
		 * Title
		 */

		if ( class_exists( 'forqy_Customize_Heading_Control' ) ) {
			$wp_customize->add_control( new forqy_Customize_Heading_Control( $wp_customize, 'dox_heading_title_heading', array(
				'label'   => esc_html__( 'Title', 'dox' ),
				'type'    => 'heading',
				'section' => 'heading',
			) ) );
		}
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_heading_font_multiplier', array(
			'label'       => esc_html__( 'Font Size', 'dox' ),
			'settings'    => 'dox_heading_font_multiplier',
			'section'     => 'heading',
			'type'        => 'number',
			'input_attrs' => array(
				'min'  => '0.8',
				'max'  => '2.8',
				'step' => '0.1',
			),
		) ) );

		/**
		 * Settings
		 */

		if ( class_exists( 'forqy_Customize_Heading_Control' ) ) {
			$wp_customize->add_control( new forqy_Customize_Heading_Control( $wp_customize, 'dox_heading_settings_heading', array(
				'label'   => esc_html__( 'Settings', 'dox' ),
				'type'    => 'heading',
				'section' => 'heading',
			) ) );
		}
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_heading_height', array(
			'label'       => esc_html__( 'Height', 'dox' ),
			'description' => esc_html__( 'Global heading height.', 'dox' ),
			'settings'    => 'dox_heading_height',
			'section'     => 'heading',
			'type'        => 'select',
			'choices'     => array(
				'xsmall' => esc_html__( 'XSmall', 'dox' ),
				'small'  => esc_html__( 'Small', 'dox' ),
				'medium' => esc_html__( 'Medium', 'dox' ),
				'large'  => esc_html__( 'Large', 'dox' ),
				'xlarge' => esc_html__( 'XLarge', 'dox' ),
				'full'   => esc_html__( 'Full-height', 'dox' ),
			),
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_heading_height_single', array(
			'label'       => esc_html__( 'Height - Single', 'dox' ),
			'description' => esc_html__( 'Heading height on single pages.', 'dox' ),
			'settings'    => 'dox_heading_height_single',
			'section'     => 'heading',
			'type'        => 'select',
			'choices'     => array(
				'xsmall' => esc_html__( 'XSmall', 'dox' ),
				'small'  => esc_html__( 'Small', 'dox' ),
				'medium' => esc_html__( 'Medium', 'dox' ),
				'large'  => esc_html__( 'Large', 'dox' ),
				'xlarge' => esc_html__( 'XLarge', 'dox' ),
				'full'   => esc_html__( 'Full-height', 'dox' ),
			),
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_heading_align_horizontal', array(
			'label'    => esc_html__( 'Horizontal Align', 'dox' ),
			'settings' => 'dox_heading_align_horizontal',
			'section'  => 'heading',
			'type'     => 'select',
			'choices'  => array(
				'left'   => esc_html__( 'Left', 'dox' ),
				'center' => esc_html__( 'Center', 'dox' ),
				'right'  => esc_html__( 'Right', 'dox' ),
			),
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_heading_align_vertical', array(
			'label'    => esc_html__( 'Vertical Align', 'dox' ),
			'settings' => 'dox_heading_align_vertical',
			'section'  => 'heading',
			'type'     => 'select',
			'choices'  => array(
				'top'    => esc_html__( 'Top', 'dox' ),
				'center' => esc_html__( 'Center', 'dox' ),
				'bottom' => esc_html__( 'Bottom', 'dox' ),
			),
		) ) );

		// Categories
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_heading_categories', array(
			'label'       => esc_html__( 'Category Navigation', 'dox' ),
			'description' => esc_html__( 'Enable/disable the category navigation.', 'dox' ),
			'settings'    => 'dox_heading_categories',
			'section'     => 'heading',
			'type'        => 'select',
			'choices'     => array(
				'enabled'  => esc_html__( 'Enabled', 'dox' ),
				'disabled' => esc_html__( 'Disabled', 'dox' ),
			),
		) ) );

		// Button
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_heading_button', array(
			'label'    => esc_html__( 'Button', 'dox' ),
			'settings' => 'dox_heading_button',
			'section'  => 'heading',
			'type'     => 'select',
			'choices'  => array(
				'default'  => esc_html__( 'Default', 'dox' ),
				'bordered' => esc_html__( 'Bordered', 'dox' ),
				'accent'   => esc_html__( 'Accent', 'dox' ),
			),
		) ) );

	}

	add_action( 'customize_register', 'dox_customize_add_controls_heading' );

}
