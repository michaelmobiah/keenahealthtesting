<?php

/*

Customize Global

*/

if ( ! function_exists( 'dox_customize_add_section_global' ) ) {

	/**
	 * Add Section
	 *
	 * @param $wp_customize
	 */
	function dox_customize_add_section_global( $wp_customize ) {

		$wp_customize->add_section( 'global', array(
			'title'       => esc_html_x( 'Global', 'customize', 'dox' ),
			'description' => esc_html_x( 'Global settings of site elements.', 'customize', 'dox' ),
			'panel'       => 'theme',
			'priority'    => 41,
		) );

	}

	add_action( 'customize_register', 'dox_customize_add_section_global' );

}

if ( ! function_exists( 'dox_customize_add_settings_global' ) ) {

	/**
	 * Add Settings
	 *
	 * @param $wp_customize
	 */
	function dox_customize_add_settings_global( $wp_customize ) {

		/**
		 * Loading
		 */
		$wp_customize->add_setting( 'dox_global_loading_heading', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_loading', array(
			'default'           => dox_default( 'dox_loading' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_loading_transition', array(
			'default'           => dox_default( 'dox_loading_transition' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		// Logo
		$wp_customize->add_setting( 'dox_loading_logo', array(
			'default'           => '',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		// Colors
		$wp_customize->add_setting( 'dox_loading_color', array(
			'default'           => dox_default( 'dox_loading_color' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_loading_color_background', array(
			'default'           => dox_default( 'dox_loading_color_background' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );

		/**
		 * Off-canvas
		 */
		$wp_customize->add_setting( 'dox_global_off_heading', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_off_overlay_color', array(
			'default'           => dox_default( 'dox_off_overlay_color' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_off_overlay_opacity', array(
			'default'           => dox_default( 'dox_off_overlay_opacity' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );

		/**
		 * Date
		 */
		$wp_customize->add_setting( 'dox_global_date_heading', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_date_format', array(
			'default'           => dox_default( 'dox_date_format' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_date_delimiter', array(
			'default'           => dox_default( 'dox_date_delimiter' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );

	}

	add_action( 'customize_register', 'dox_customize_add_settings_global' );

}

if ( ! function_exists( 'dox_customize_add_controls_global' ) ) {

	/**
	 * Add Controls
	 *
	 * @param $wp_customize
	 */
	function dox_customize_add_controls_global( $wp_customize ) {

		/**
		 * Loading
		 */
		if ( class_exists( 'forqy_Customize_Heading_Control' ) ) {
			$wp_customize->add_control( new forqy_Customize_Heading_Control( $wp_customize, 'dox_global_loading_heading', array(
				'label'   => esc_html_x( 'Loading', 'customize', 'dox' ),
				'type'    => 'heading',
				'section' => 'global',
			) ) );
		}
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_loading', array(
			'label'    => esc_html_x( 'Loading', 'customize', 'dox' ),
			'settings' => 'dox_loading',
			'section'  => 'global',
			'type'     => 'select',
			'choices'  => array(
				'none'           => esc_html_x( 'None', 'customize', 'dox' ),
				'spinner'        => esc_html_x( 'Spinner', 'customize', 'dox' ),
				'classic'        => esc_html_x( 'Classic', 'customize', 'dox' ),
				'classic-center' => esc_html_x( 'Classic - Center', 'customize', 'dox' ),
				'simple-top'     => esc_html_x( 'Simple - Top', 'customize', 'dox' ),
				'simple-center'  => esc_html_x( 'Simple - Center', 'customize', 'dox' ),
				'full'           => esc_html_x( 'Full', 'customize', 'dox' ),
			),
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_loading_transition', array(
			'label'    => esc_html_x( 'Transition', 'customize', 'dox' ),
			'settings' => 'dox_loading_transition',
			'section'  => 'global',
			'type'     => 'select',
			'choices'  => array(
				'fade'           => esc_html_x( 'Fade', 'customize', 'dox' ),
				'slide'          => esc_html_x( 'Slide - Horizontal', 'customize', 'dox' ),
				'slide-vertical' => esc_html_x( 'Slide - Vertical', 'customize', 'dox' ),
			),
		) ) );
		// Logo
		$wp_customize->add_control( new WP_Customize_Cropped_Image_Control( $wp_customize, 'dox_loading_logo', array(
			'label'       => esc_html_x( 'Logo', 'customize', 'dox' ),
			'description' => esc_html_x( 'Upload the logo image. The image should be square of 240x240 pixels.', 'customize', 'dox' ),
			'settings'    => 'dox_loading_logo',
			'section'     => 'global',
			'width'       => 240,
			'height'      => 240,
		) ) );
		// Colors
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dox_loading_color', array(
			'label'    => esc_html_x( 'Color', 'customize', 'dox' ),
			'settings' => 'dox_loading_color',
			'section'  => 'global',
		) ) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dox_loading_color_background', array(
			'label'    => esc_html_x( 'Background Color', 'customize', 'dox' ),
			'settings' => 'dox_loading_color_background',
			'section'  => 'global',
		) ) );

		/**
		 * Off-canvas
		 */
		if ( class_exists( 'forqy_Customize_Heading_Control' ) ) {
			$wp_customize->add_control( new forqy_Customize_Heading_Control( $wp_customize, 'dox_global_off_heading', array(
				'label'   => esc_html_x( 'Off-canvas', 'customize', 'dox' ),
				'type'    => 'heading',
				'section' => 'global',
			) ) );
		}
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dox_off_overlay_color', array(
			'label'    => esc_html_x( 'Overlay Color', 'customize', 'dox' ),
			'settings' => 'dox_off_overlay_color',
			'section'  => 'global',
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_off_overlay_opacity', array(
			'label'    => esc_html_x( 'Overlay Opacity', 'customize', 'dox' ),
			'settings' => 'dox_off_overlay_opacity',
			'section'  => 'global',
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
		 * Date
		 */
		if ( class_exists( 'forqy_Customize_Heading_Control' ) ) {
			$wp_customize->add_control( new forqy_Customize_Heading_Control( $wp_customize, 'dox_global_date_heading', array(
				'label'   => esc_html_x( 'Date', 'customize', 'dox' ),
				'type'    => 'heading',
				'section' => 'global',
			) ) );
		}
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_date_format', array(
			'label'    => esc_html_x( 'Date Format', 'customize', 'dox' ),
			'settings' => 'dox_date_format',
			'section'  => 'global',
			'type'     => 'select',
			'choices'  => array(
				'd m Y'    => 'd m Y (' . date( 'd m Y' ) . ')',
				'm d Y'    => 'm d Y (' . date( 'm d Y' ) . ')',
				'Y m d'    => 'Y m d (' . date( 'Y m d' ) . ')',
				'Y d m'    => 'Y d m (' . date( 'Y d m' ) . ')',
				'l, j m Y' => 'l, j m Y (' . date( 'l, j m Y' ) . ')',
				'F j, Y'   => 'F j, Y (' . date( 'F j, Y' ) . ')',
				'j M, Y'   => 'j M, Y (' . date( 'j M, Y' ) . ')',
			),
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_date_delimiter', array(
			'label'    => esc_html_x( 'Date Delimiter', 'customize', 'dox' ),
			'settings' => 'dox_date_delimiter',
			'section'  => 'global',
			'type'     => 'select',
			'choices'  => array(
				'&nbsp;' => esc_html_x( 'Space', 'customize', 'dox' ),
				'/'      => '/',
				'.'      => '.',
				'-'      => '-',
			),
		) ) );

	}

	add_action( 'customize_register', 'dox_customize_add_controls_global' );

}
