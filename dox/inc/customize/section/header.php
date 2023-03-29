<?php

/*

Customize Header Image

*/

/*
----------------------------------------------------------------------------------------------------
Add Section
----------------------------------------------------------------------------------------------------
*/

if ( ! function_exists( 'dox_customize_add_section_header' ) ) {

	function dox_customize_add_section_header( $wp_customize ) {

		$wp_customize->add_section( 'header', array(
			'title'       => esc_html__( 'Header', 'dox' ),
			'description' => esc_html__( 'Set up the header appearance.', 'dox' ),
			'panel'       => 'theme',
			'priority'    => 51,
		) );

	}

	add_action( 'customize_register', 'dox_customize_add_section_header' );

}

/*
----------------------------------------------------------------------------------------------------
Add Settings
----------------------------------------------------------------------------------------------------
*/

if ( ! function_exists( 'dox_customize_add_settings_header' ) ) {

	function dox_customize_add_settings_header( $wp_customize ) {

		$wp_customize->add_setting( 'dox_header_color_heading', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_header_color', array(
			'default'           => dox_default( 'dox_header_color' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_header_color_accent', array(
			'default'           => dox_default( 'dox_header_color_accent' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_header_color_background', array(
			'default'           => dox_default( 'dox_header_color_background' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_header_color_background_opacity', array(
			'default'           => dox_default( 'dox_header_color_background_opacity' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_header_background_type', array(
			'default'           => 'solid',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );

		/**
		 * Sticky
		 */

		$wp_customize->add_setting( 'dox_header_sticky_heading', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_header_sticky', array(
			'default'           => dox_default( 'dox_header_sticky' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_header_sticky_color', array(
			'default'           => dox_default( 'dox_header_sticky_color' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_header_sticky_color_accent', array(
			'default'           => dox_default( 'dox_header_sticky_color_accent' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_header_sticky_color_background', array(
			'default'           => dox_default( 'dox_header_sticky_color_background' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_header_sticky_color_background_opacity', array(
			'default'           => dox_default( 'dox_header_sticky_color_background_opacity' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		// Logo
		$wp_customize->add_setting( 'dox_logo_sticky_heading', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_logo_image_sticky', array(
			'default'           => '',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );

		/**
		 * Settings
		 */

		$wp_customize->add_setting( 'dox_header_settings_header', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		// Layout
		$wp_customize->add_setting( 'dox_header_layout', array(
			'default'           => dox_default( 'dox_header_layout' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		// Padding
		$wp_customize->add_setting( 'dox_header_padding', array(
			'default'           => dox_default( 'dox_header_padding' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		// Width
		$wp_customize->add_setting( 'dox_header_width', array(
			'default'           => dox_default( 'dox_header_width' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );

		// Text
		$wp_customize->add_setting( 'dox_header_text', array(
			'default'           => '',
			'transport'         => 'refresh',
			'sanitize_callback' => 'wp_kses_post',
		) );
		$wp_customize->selective_refresh->add_partial( 'dox_header_text', array(
			'selector' => '.cs-header-text'
		) );

		// Socials
		$wp_customize->add_setting( 'dox_header_socials', array(
			'default'           => dox_default( 'dox_header_socials' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );

		if ( forqy_woocommerce_activated() ) {
			// Toolbar
			$wp_customize->add_setting( 'dox_header_shop_toolbar', array(
				'default'           => 'enabled',
				'sanitize_callback' => 'sanitize_text_field',
			) );
		}

	}

	add_action( 'customize_register', 'dox_customize_add_settings_header' );

}

/*
----------------------------------------------------------------------------------------------------
Add Controls
----------------------------------------------------------------------------------------------------
*/

if ( ! function_exists( 'dox_customize_add_controls_header' ) ) {

	function dox_customize_add_controls_header( $wp_customize ) {

		if ( class_exists( 'forqy_Customize_Heading_Control' ) ) {
			$wp_customize->add_control( new forqy_Customize_Heading_Control( $wp_customize, 'dox_header_color_heading', array(
				'label'   => esc_html__( 'Colors', 'dox' ),
				'type'    => 'heading',
				'section' => 'header',
			) ) );
		}
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dox_header_color', array(
			'label'    => esc_html__( 'Color', 'dox' ),
			'settings' => 'dox_header_color',
			'section'  => 'header',
		) ) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dox_header_color_accent', array(
			'label'    => esc_html__( 'Accent Color', 'dox' ),
			'settings' => 'dox_header_color_accent',
			'section'  => 'header',
		) ) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dox_header_color_background', array(
			'label'    => esc_html__( 'Background Color', 'dox' ),
			'settings' => 'dox_header_color_background',
			'section'  => 'header',
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_header_color_background_opacity', array(
			'label'    => esc_html__( 'Background Opacity', 'dox' ),
			'settings' => 'dox_header_color_background_opacity',
			'section'  => 'header',
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
		// Background Type
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_header_background_type', array(
			'label'    => esc_html__( 'Background Type', 'dox' ),
			'settings' => 'dox_header_background_type',
			'section'  => 'header',
			'type'     => 'select',
			'choices'  => array(
				'solid'    => esc_html__( 'Solid', 'dox' ),
				'gradient' => esc_html__( 'Gradient', 'dox' ),
			),
		) ) );

		/**
		 * Sticky
		 */

		if ( class_exists( 'forqy_Customize_Heading_Control' ) ) {
			$wp_customize->add_control( new forqy_Customize_Heading_Control( $wp_customize, 'dox_header_sticky_heading', array(
				'label'   => esc_html__( 'Sticky', 'dox' ),
				'type'    => 'heading',
				'section' => 'header',
			) ) );
		}
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_header_sticky', array(
			'label'    => esc_html__( 'Sticky', 'dox' ),
			'settings' => 'dox_header_sticky',
			'section'  => 'header',
			'type'     => 'select',
			'choices'  => array(
				'enabled'  => esc_html__( 'Enabled', 'dox' ),
				'disabled' => esc_html__( 'Disabled', 'dox' ),
			),
		) ) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dox_header_sticky_color', array(
			'label'    => esc_html__( 'Color', 'dox' ),
			'settings' => 'dox_header_sticky_color',
			'section'  => 'header',
		) ) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dox_header_sticky_color_accent', array(
			'label'    => esc_html__( 'Accent Color', 'dox' ),
			'settings' => 'dox_header_sticky_color_accent',
			'section'  => 'header',
		) ) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dox_header_sticky_color_background', array(
			'label'    => esc_html__( 'Background Color', 'dox' ),
			'settings' => 'dox_header_sticky_color_background',
			'section'  => 'header',
		) ) );
		// Background Opacity
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_header_sticky_color_background_opacity', array(
			'label'    => esc_html__( 'Background Opacity', 'dox' ),
			'settings' => 'dox_header_sticky_color_background_opacity',
			'section'  => 'header',
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

		// Logo
		if ( class_exists( 'forqy_Customize_Subheading_Control' ) ) {
			$wp_customize->add_control( new forqy_Customize_Subheading_Control( $wp_customize, 'dox_logo_sticky_heading', array(
				'label'   => esc_html__( 'Sticky Logo', 'dox' ),
				'type'    => 'subheading',
				'section' => 'header',
			) ) );
		}
		$wp_customize->add_control( new WP_Customize_Upload_Control( $wp_customize, 'dox_logo_image_sticky', array(
			'label'       => esc_html__( 'Logo', 'dox' ),
			'description' => esc_html__( 'Upload the logo image. Required size at least 144px of height.', 'dox' ),
			'settings'    => 'dox_logo_image_sticky',
			'section'     => 'header',
		) ) );

		/**
		 * Settings
		 */

		if ( class_exists( 'forqy_Customize_Heading_Control' ) ) {
			$wp_customize->add_control( new forqy_Customize_Heading_Control( $wp_customize, 'dox_header_settings_header', array(
				'label'   => esc_html__( 'Settings', 'dox' ),
				'type'    => 'heading',
				'section' => 'header',
			) ) );
		}

		// Layout
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_header_layout', array(
			'label'    => esc_html__( 'Layout', 'dox' ),
			'settings' => 'dox_header_layout',
			'section'  => 'header',
			'type'     => 'select',
			'choices'  => array(
				'left'     => esc_html__( 'Left-aligned Logo', 'dox' ),
				'center'   => esc_html__( 'Center-aligned Logo', 'dox' ),
				'centered' => esc_html__( 'Center-aligned Logo & Navigation', 'dox' ),
			),
		) ) );

		// Padding
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_header_padding', array(
			'label'    => esc_html__( 'Padding', 'dox' ),
			'settings' => 'dox_header_padding',
			'section'  => 'header',
			'type'     => 'select',
			'choices'  => array(
				'0px'  => esc_html__( 'None', 'dox' ),
				'5px'  => esc_html__( 'XSmall', 'dox' ),
				'10px' => esc_html__( 'Small', 'dox' ),
				'20px' => esc_html__( 'Medium', 'dox' ),
				'30px' => esc_html__( 'Large', 'dox' ),
				'40px' => esc_html__( 'XLarge', 'dox' ),
			),
		) ) );

		// Width
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_header_width', array(
			'label'    => esc_html__( 'Width', 'dox' ),
			'settings' => 'dox_header_width',
			'section'  => 'header',
			'type'     => 'select',
			'choices'  => array(
				'full'     => esc_html__( 'Full-width', 'dox' ),
				'centered' => esc_html__( 'Centered', 'dox' ),
			),
		) ) );

		// Text
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_header_text', array(
			'label'    => esc_html__( 'Text', 'dox' ),
			'settings' => 'dox_header_text',
			'section'  => 'header',
			'type'     => 'text',
		) ) );

		// Socials
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_header_socials', array(
			'label'       => esc_html__( 'Socials', 'dox' ),
			'description' => esc_html__( 'Enable/disable the socials.', 'dox' ),
			'settings'    => 'dox_header_socials',
			'section'     => 'header',
			'type'        => 'select',
			'choices'     => array(
				'enabled'  => esc_html__( 'Enabled', 'dox' ),
				'disabled' => esc_html__( 'Disabled', 'dox' ),
			),
		) ) );

		if ( forqy_woocommerce_activated() ) {
			// Toolbar
			$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_header_shop_toolbar', array(
				'label'       => esc_html__( 'Toolbar', 'dox' ),
				'description' => esc_html__( 'Enable/disable displaying of shop toolbar in the header.', 'dox' ),
				'settings'    => 'dox_header_shop_toolbar',
				'section'     => 'header',
				'type'        => 'select',
				'choices'     => array(
					'enabled'  => esc_html__( 'Enabled', 'dox' ),
					'disabled' => esc_html__( 'Disabled', 'dox' ),
				),
			) ) );
		}

	}

	add_action( 'customize_register', 'dox_customize_add_controls_header' );

}
