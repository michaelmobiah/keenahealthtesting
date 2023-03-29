<?php

/*

Customize Content

*/

/*
----------------------------------------------------------------------------------------------------
Add Section
----------------------------------------------------------------------------------------------------
*/

if ( ! function_exists( 'dox_customize_add_section_content' ) ) {

	function dox_customize_add_section_content( $wp_customize ) {

		$wp_customize->add_section( 'content', array(
			'title'       => esc_html__( 'Content', 'dox' ),
			'description' => esc_html__( 'Set up the content appearance.', 'dox' ),
			'panel'       => 'theme',
			'priority'    => 60,
		) );

	}

	add_action( 'customize_register', 'dox_customize_add_section_content' );

}

/*
----------------------------------------------------------------------------------------------------
Add Settings
----------------------------------------------------------------------------------------------------
*/

if ( ! function_exists( 'dox_customize_add_settings_content' ) ) {

	function dox_customize_add_settings_content( $wp_customize ) {

		/**
		 * Content
		 */

		$wp_customize->add_setting( 'dox_content_heading', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_content_layout', array(
			'default'           => dox_default( 'dox_content_layout' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_content_color', array(
			'default'           => dox_default( 'dox_content_color' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_hex_color',
		) );
		$wp_customize->add_setting( 'dox_content_color_opacity', array(
			'default'           => dox_default( 'dox_content_color_opacity' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_content_color_accent', array(
			'default'           => dox_default( 'dox_content_color_accent' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_hex_color',
		) );
		$wp_customize->add_setting( 'dox_content_color_background', array(
			'default'           => dox_default( 'dox_content_color_background' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_hex_color',
		) );

		/**
		 * Image
		 */

		$wp_customize->add_setting( 'dox_image_heading', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_overlay_color', array(
			'default'           => dox_default( 'dox_overlay_color' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_hex_color',
		) );
		$wp_customize->add_setting( 'dox_overlay_opacity', array(
			'default'           => dox_default( 'dox_overlay_opacity' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );

		/**
		 * Page
		 */

		$wp_customize->add_setting( 'dox_page_heading', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_page_width', array(
			'default'           => dox_default( 'dox_page_width' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );

		/**
		 * Categories
		 */

		$wp_customize->add_setting( 'dox_categories_heading', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_categories_gutter', array(
			'default'           => dox_default( 'dox_categories_gutter' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );

		/**
		 * Category
		 */

		$wp_customize->add_setting( 'dox_category_heading', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_category_color', array(
			'default'           => dox_default( 'dox_category_color' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_hex_color',
		) );
		$wp_customize->add_setting( 'dox_category_color_accent', array(
			'default'           => dox_default( 'dox_category_color_accent' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_hex_color',
		) );
		$wp_customize->add_setting( 'dox_category_color_background', array(
			'default'           => dox_default( 'dox_category_color_background' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_hex_color',
		) );

		/**
		 * Call-to-Action
		 */

		$wp_customize->add_setting( 'dox_call_to_action_heading', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_call_to_action_color', array(
			'default'           => dox_default( 'dox_call_to_action_color' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_hex_color',
		) );
		$wp_customize->add_setting( 'dox_call_to_action_color_accent', array(
			'default'           => dox_default( 'dox_call_to_action_color_accent' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_hex_color',
		) );
		$wp_customize->add_setting( 'dox_call_to_action_color_background', array(
			'default'           => dox_default( 'dox_call_to_action_color_background' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_hex_color',
		) );

		/**
		 * Datepicker
		 */

		$wp_customize->add_setting( 'dox_datepicker_heading', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_datepicker_color', array(
			'default'           => dox_default( 'dox_datepicker_color' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_hex_color',
		) );
		$wp_customize->add_setting( 'dox_datepicker_color_accent', array(
			'default'           => dox_default( 'dox_datepicker_color_accent' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_hex_color',
		) );
		$wp_customize->add_setting( 'dox_datepicker_color_background', array(
			'default'           => dox_default( 'dox_datepicker_color_background' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_hex_color',
		) );

		/**
		 * Player
		 */

		$wp_customize->add_setting( 'dox_player_heading', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_player_color', array(
			'default'           => dox_default( 'dox_player_color' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_hex_color',
		) );
		$wp_customize->add_setting( 'dox_player_color_accent', array(
			'default'           => dox_default( 'dox_player_color_accent' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_hex_color',
		) );
		$wp_customize->add_setting( 'dox_player_color_background', array(
			'default'           => dox_default( 'dox_player_color_background' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_hex_color',
		) );

		/**
		 * Lightbox
		 */

		$wp_customize->add_setting( 'dox_lightbox_heading', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_lightbox_color', array(
			'default'           => dox_default( 'dox_lightbox_color' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_hex_color',
		) );
		$wp_customize->add_setting( 'dox_lightbox_color_background', array(
			'default'           => dox_default( 'dox_lightbox_color_background' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_hex_color',
		) );
		$wp_customize->add_setting( 'dox_lightbox_color_background_opacity', array(
			'default'           => dox_default( 'dox_lightbox_color_background_opacity' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );

		/**
		 * States
		 */

		$wp_customize->add_setting( 'dox_state_heading', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_error_color', array(
			'default'           => dox_default( 'dox_error_color' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_hex_color',
		) );
		$wp_customize->add_setting( 'dox_success_color', array(
			'default'           => dox_default( 'dox_success_color' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_hex_color',
		) );

	}

	add_action( 'customize_register', 'dox_customize_add_settings_content' );

}

/*
----------------------------------------------------------------------------------------------------
Add Controls
----------------------------------------------------------------------------------------------------
*/

if ( ! function_exists( 'dox_customize_add_controls_content' ) ) {

	function dox_customize_add_controls_content( $wp_customize ) {

		/**
		 * Content
		 */

		if ( class_exists( 'forqy_Customize_Heading_Control' ) ) {
			$wp_customize->add_control( new forqy_Customize_Heading_Control( $wp_customize, 'dox_content_heading', array(
				'label'   => esc_html__( 'Content', 'dox' ),
				'type'    => 'heading',
				'section' => 'content',
			) ) );
		}
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_content_layout', array(
			'label'       => esc_html__( 'Layout', 'dox' ),
			'description' => esc_html__( 'Select a layout of the content.', 'dox' ),
			'settings'    => 'dox_content_layout',
			'section'     => 'content',
			'type'        => 'select',
			'choices'     => array(
				'stretched' => esc_html__( 'Full-width', 'dox' ),
				'100'       => esc_html__( 'Centered', 'dox' ),
			),
		) ) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dox_content_color', array(
			'label'    => esc_html__( 'Color', 'dox' ),
			'settings' => 'dox_content_color',
			'section'  => 'content',
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_content_color_opacity', array(
			'label'    => esc_html__( 'Color Opacity', 'dox' ),
			'settings' => 'dox_content_color_opacity',
			'section'  => 'content',
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
			),
		) ) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dox_content_color_accent', array(
			'label'    => esc_html__( 'Accent Color', 'dox' ),
			'settings' => 'dox_content_color_accent',
			'section'  => 'content',
		) ) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dox_content_color_background', array(
			'label'    => esc_html__( 'Background Color', 'dox' ),
			'settings' => 'dox_content_color_background',
			'section'  => 'content',
		) ) );

		/**
		 * Image
		 */

		if ( class_exists( 'forqy_Customize_Heading_Control' ) ) {
			$wp_customize->add_control( new forqy_Customize_Heading_Control( $wp_customize, 'dox_image_heading', array(
				'label'   => esc_html__( 'Image', 'dox' ),
				'type'    => 'heading',
				'section' => 'content',
			) ) );
		}
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dox_overlay_color', array(
			'label'    => esc_html__( 'Overlay Color', 'dox' ),
			'settings' => 'dox_overlay_color',
			'section'  => 'content',
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_overlay_opacity', array(
			'label'    => esc_html__( 'Overlay Opacity', 'dox' ),
			'settings' => 'dox_overlay_opacity',
			'section'  => 'content',
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
		 * Page
		 */

		if ( class_exists( 'forqy_Customize_Heading_Control' ) ) {
			$wp_customize->add_control( new forqy_Customize_Heading_Control( $wp_customize, 'dox_page_heading', array(
				'label'   => esc_html__( 'Page', 'dox' ),
				'type'    => 'heading',
				'section' => 'content',
			) ) );
		}
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_page_width', array(
			'label'       => esc_html__( 'Width', 'dox' ),
			'settings'    => 'dox_page_width',
			'section'     => 'content',
			'type'        => 'select',
			'choices'     => array(
				'stretched' => esc_html__( 'Stretched', 'dox' ),
				'100'       => esc_html__( '100%', 'dox' ),
				'75'        => esc_html__( '75%', 'dox' ),
				'50'        => esc_html__( '50%', 'dox' ),
			),
		) ) );

		/**
		 * Categories
		 */

		if ( class_exists( 'forqy_Customize_Heading_Control' ) ) {
			$wp_customize->add_control( new forqy_Customize_Heading_Control( $wp_customize, 'dox_categories_heading', array(
				'label'   => esc_html__( 'Categories', 'dox' ),
				'type'    => 'heading',
				'section' => 'content',
			) ) );
		}
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_categories_gutter', array(
			'label'       => esc_html__( 'Gap', 'dox' ),
			'description' => esc_html__( 'Select the gap size between items.', 'dox' ),
			'settings'    => 'dox_categories_gutter',
			'section'     => 'content',
			'type'        => 'select',
			'choices'     => array(
				'0'  => esc_html__( 'None', 'dox' ),
				'1'  => esc_html__( 'Hairline', 'dox' ),
				'10' => esc_html__( 'XSmall', 'dox' ),
				'20' => esc_html__( 'Small', 'dox' ),
				'40' => esc_html__( 'Medium', 'dox' ),
				'80' => esc_html__( 'Large', 'dox' ),
			),
		) ) );

		/**
		 * Category
		 */

		if ( class_exists( 'forqy_Customize_Heading_Control' ) ) {
			$wp_customize->add_control( new forqy_Customize_Heading_Control( $wp_customize, 'dox_category_heading', array(
				'label'   => esc_html__( 'Category', 'dox' ),
				'type'    => 'heading',
				'section' => 'content',
			) ) );
		}
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dox_category_color', array(
			'label'    => esc_html__( 'Color', 'dox' ),
			'settings' => 'dox_category_color',
			'section'  => 'content',
		) ) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dox_category_color_accent', array(
			'label'    => esc_html__( 'Accent Color', 'dox' ),
			'settings' => 'dox_category_color_accent',
			'section'  => 'content',
		) ) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dox_category_color_background', array(
			'label'    => esc_html__( 'Background Color', 'dox' ),
			'settings' => 'dox_category_color_background',
			'section'  => 'content',
		) ) );

		/**
		 * Call-to-Action
		 */

		if ( class_exists( 'forqy_Customize_Heading_Control' ) ) {
			$wp_customize->add_control( new forqy_Customize_Heading_Control( $wp_customize, 'dox_call_to_action_heading', array(
				'label'   => esc_html__( 'Call to Action', 'dox' ),
				'type'    => 'heading',
				'section' => 'content',
			) ) );
		}
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dox_call_to_action_color', array(
			'label'    => esc_html__( 'Color', 'dox' ),
			'settings' => 'dox_call_to_action_color',
			'section'  => 'content',
		) ) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dox_call_to_action_color_accent', array(
			'label'    => esc_html__( 'Accent Color', 'dox' ),
			'settings' => 'dox_call_to_action_color_accent',
			'section'  => 'content',
		) ) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dox_call_to_action_color_background', array(
			'label'    => esc_html__( 'Background Color', 'dox' ),
			'settings' => 'dox_call_to_action_color_background',
			'section'  => 'content',
		) ) );

		/**
		 * Datepicker
		 */

		if ( class_exists( 'forqy_Customize_Heading_Control' ) ) {
			$wp_customize->add_control( new forqy_Customize_Heading_Control( $wp_customize, 'dox_datepicker_heading', array(
				'label'   => esc_html__( 'Datepicker', 'dox' ),
				'type'    => 'heading',
				'section' => 'content',
			) ) );
		}
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dox_datepicker_color', array(
			'label'    => esc_html__( 'Color', 'dox' ),
			'settings' => 'dox_datepicker_color',
			'section'  => 'content',
		) ) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dox_datepicker_color_accent', array(
			'label'    => esc_html__( 'Accent Color', 'dox' ),
			'settings' => 'dox_datepicker_color_accent',
			'section'  => 'content',
		) ) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dox_datepicker_color_background', array(
			'label'    => esc_html__( 'Background Color', 'dox' ),
			'settings' => 'dox_datepicker_color_background',
			'section'  => 'content',
		) ) );

		/**
		 * Player
		 */

		if ( class_exists( 'forqy_Customize_Heading_Control' ) ) {
			$wp_customize->add_control( new forqy_Customize_Heading_Control( $wp_customize, 'dox_player_heading', array(
				'label'   => esc_html__( 'Player', 'dox' ),
				'type'    => 'heading',
				'section' => 'content',
			) ) );
		}
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dox_player_color', array(
			'label'    => esc_html__( 'Color', 'dox' ),
			'settings' => 'dox_player_color',
			'section'  => 'content',
		) ) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dox_player_color_accent', array(
			'label'    => esc_html__( 'Accent Color', 'dox' ),
			'settings' => 'dox_player_color_accent',
			'section'  => 'content',
		) ) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dox_player_color_background', array(
			'label'    => esc_html__( 'Background Color', 'dox' ),
			'settings' => 'dox_player_color_background',
			'section'  => 'content',
		) ) );

		/**
		 * Lightbox
		 */

		if ( class_exists( 'forqy_Customize_Heading_Control' ) ) {
			$wp_customize->add_control( new forqy_Customize_Heading_Control( $wp_customize, 'dox_lightbox_heading', array(
				'label'   => esc_html__( 'Lightbox', 'dox' ),
				'type'    => 'heading',
				'section' => 'content',
			) ) );
		}
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dox_lightbox_color', array(
			'label'    => esc_html__( 'Color', 'dox' ),
			'settings' => 'dox_lightbox_color',
			'section'  => 'content',
		) ) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dox_lightbox_color_background', array(
			'label'    => esc_html__( 'Background Color', 'dox' ),
			'settings' => 'dox_lightbox_color_background',
			'section'  => 'content',
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_lightbox_color_background_opacity', array(
			'label'    => esc_html__( 'Background Opacity', 'dox' ),
			'settings' => 'dox_lightbox_color_background_opacity',
			'section'  => 'content',
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
		 * States
		 */

		if ( class_exists( 'forqy_Customize_Heading_Control' ) ) {
			$wp_customize->add_control( new forqy_Customize_Heading_Control( $wp_customize, 'dox_state_heading', array(
				'label'   => esc_html__( 'States', 'dox' ),
				'type'    => 'heading',
				'section' => 'content',
			) ) );
		}
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dox_error_color', array(
			'label'    => esc_html__( 'Error Color', 'dox' ),
			'settings' => 'dox_error_color',
			'section'  => 'content',
		) ) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dox_success_color', array(
			'label'    => esc_html__( 'Success Color', 'dox' ),
			'settings' => 'dox_success_color',
			'section'  => 'content',
		) ) );

	}

	add_action( 'customize_register', 'dox_customize_add_controls_content' );

}
