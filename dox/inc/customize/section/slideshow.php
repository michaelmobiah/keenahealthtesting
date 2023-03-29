<?php

/*

Customize Slideshow

*/

/*
----------------------------------------------------------------------------------------------------
Add Section
----------------------------------------------------------------------------------------------------
*/

if ( ! function_exists( 'dox_customize_add_section_slideshow' ) ) {

	function dox_customize_add_section_slideshow( $wp_customize ) {

		$wp_customize->add_section( 'slideshow', array(
			'title'       => esc_html__( 'Slideshow', 'dox' ),
			'description' => esc_html__( 'Set up the slideshow appearance.', 'dox' ),
			'panel'       => 'theme',
			'priority'    => 55,
		) );

	}

	add_action( 'customize_register', 'dox_customize_add_section_slideshow' );

}

/*
----------------------------------------------------------------------------------------------------
Add Settings
----------------------------------------------------------------------------------------------------
*/

if ( ! function_exists( 'dox_customize_add_settings_slideshow' ) ) {

	function dox_customize_add_settings_slideshow( $wp_customize ) {

		$wp_customize->add_setting( 'dox_slideshow_posts', array(
			'default'           => dox_default( 'dox_slideshow_posts' ),
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_slideshow_posts_count', array(
			'default'           => dox_default( 'dox_slideshow_posts_count' ),
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_slideshow_shortcode', array(
			'default'           => dox_default( 'dox_slideshow_shortcode' ),
			'sanitize_callback' => 'sanitize_text_field',
		) );

		/**
		 * Colors
		 */

		$wp_customize->add_setting( 'dox_slideshow_colors_heading', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_slideshow_color', array(
			'default'           => dox_default( 'dox_slideshow_color' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_slideshow_color_accent', array(
			'default'           => dox_default( 'dox_slideshow_color_accent' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_slideshow_color_background', array(
			'default'           => dox_default( 'dox_slideshow_color_background' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_slideshow_color_background_opacity', array(
			'default'           => dox_default( 'dox_slideshow_color_background_opacity' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->selective_refresh->add_partial( 'dox_slideshow_color', array(
			'selector' => '.cs-slideshow'
		) );

		/**
		 * Slide
		 */

		$wp_customize->add_setting( 'dox_slideshow_slide_heading', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_slideshow_slide_color_background', array(
			'default'           => dox_default( 'dox_slideshow_slide_color_background' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_slideshow_slide_color_background_opacity', array(
			'default'           => dox_default( 'dox_slideshow_slide_color_background_opacity' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );

		// Overlay
		$wp_customize->add_setting( 'dox_slideshow_slide_overlay_heading', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_slideshow_slide_overlay_color', array(
			'default'           => dox_default( 'dox_slideshow_slide_overlay_color' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_slideshow_slide_overlay_color_opacity', array(
			'default'           => dox_default( 'dox_slideshow_slide_overlay_color_opacity' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );

		// Gradient
		$wp_customize->add_setting( 'dox_slideshow_slide_gradient_heading', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_slideshow_slide_gradient_color', array(
			'default'           => dox_default( 'dox_slideshow_slide_gradient_color' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_slideshow_slide_gradient_opacity', array(
			'default'           => dox_default( 'dox_slideshow_slide_gradient_opacity' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_slideshow_slide_gradient_angle', array(
			'default'           => dox_default( 'dox_slideshow_slide_gradient_angle' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );

		// Image
		$wp_customize->add_setting( 'dox_slideshow_slide_image_heading', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_slideshow_slide_image_position_x', array(
			'default'           => dox_default( 'dox_slideshow_slide_image_position_x' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_slideshow_slide_image_position_y', array(
			'default'           => dox_default( 'dox_slideshow_slide_image_position_y' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_slideshow_slide_image_size', array(
			'default'           => dox_default( 'dox_slideshow_slide_image_size' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );

		// Settings
		$wp_customize->add_setting( 'dox_slideshow_slide_settings_heading', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_slideshow_slides', array(
			'default'           => dox_default( 'dox_slideshow_slides' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_slideshow_gutter', array(
			'default'           => dox_default( 'dox_slideshow_gutter' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_slideshow_slide_layout', array(
			'default'           => dox_default( 'dox_slideshow_slide_layout' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );

		/**
		 * Caption
		 */

		$wp_customize->add_setting( 'dox_slideshow_caption_heading', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );

		// Title
		$wp_customize->add_setting( 'dox_slideshow_caption_title_heading', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_slideshow_font_multiplier', array(
			'default'           => dox_default( 'dox_slideshow_font_multiplier' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );

		// Settings
		$wp_customize->add_setting( 'dox_slideshow_caption_settings_heading', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_slideshow_caption_position', array(
			'default'           => dox_default( 'dox_slideshow_caption_position' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_slideshow_caption_position_v', array(
			'default'           => dox_default( 'dox_slideshow_caption_position_v' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_slideshow_caption_background', array(
			'default'           => 'transparent',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_slideshow_caption_excerpt', array(
			'default'           => dox_default( 'dox_slideshow_caption_excerpt' ),
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_slideshow_caption_button', array(
			'default'           => dox_default( 'dox_slideshow_caption_button' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_slideshow_caption_button_secondary', array(
			'default'           => dox_default( 'dox_slideshow_caption_button_secondary' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );

		/**
		 * Pagination
		 */

		$wp_customize->add_setting( 'dox_slideshow_pagination_heading', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_slideshow_pagination', array(
			'default'           => dox_default( 'dox_slideshow_pagination' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_slideshow_pagination_align', array(
			'default'           => dox_default( 'dox_slideshow_pagination_align' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );

		/**
		 * Settings
		 */

		$wp_customize->add_setting( 'dox_slideshow_settings_heading', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_slideshow_height', array(
			'default'           => dox_default( 'dox_slideshow_height' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_slideshow_direction', array(
			'default'           => dox_default( 'dox_slideshow_direction' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_slideshow_effect', array(
			'default'           => dox_default( 'dox_slideshow_effect' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_slideshow_speed', array(
			'default'           => dox_default( 'dox_slideshow_speed' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_slideshow_loop', array(
			'default'           => dox_default( 'dox_slideshow_loop' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_slideshow_autoplay', array(
			'default'           => dox_default( 'dox_slideshow_autoplay' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );

		/**
		 * Background Image
		 */

		$wp_customize->add_setting( 'dox_slideshow_image_heading', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_slideshow_image', array(
			'default'           => '',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		// Overlay
		$wp_customize->add_setting( 'dox_slideshow_image_overlay_color', array(
			'default'           => dox_default( 'dox_slideshow_image_overlay_color' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_slideshow_image_overlay_opacity', array(
			'default'           => dox_default( 'dox_slideshow_image_overlay_opacity' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		// Gradient
		$wp_customize->add_setting( 'dox_slideshow_image_gradient_heading', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_slideshow_image_gradient_color', array(
			'default'           => dox_default( 'dox_slideshow_image_gradient_color' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_slideshow_image_gradient_opacity', array(
			'default'           => dox_default( 'dox_slideshow_image_gradient_opacity' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_slideshow_image_gradient_angle', array(
			'default'           => dox_default( 'dox_slideshow_image_gradient_angle' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );

	}

	add_action( 'customize_register', 'dox_customize_add_settings_slideshow' );

}

/*
----------------------------------------------------------------------------------------------------
Add Controls
----------------------------------------------------------------------------------------------------
*/

if ( ! function_exists( 'dox_customize_add_controls_slideshow' ) ) {

	function dox_customize_add_controls_slideshow( $wp_customize ) {

		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_slideshow_posts', array(
			'label'    => esc_html__( 'Type of Posts', 'dox' ),
			'settings' => 'dox_slideshow_posts',
			'section'  => 'slideshow',
			'type'     => 'select',
			'choices'  => array(
				'slide'   => esc_html__( 'Slides', 'dox' ),
				'sticky'  => esc_html__( 'Sticky Posts', 'dox' ),
				'project' => esc_html__( 'Projects', 'dox' ),
				'event'   => esc_html__( 'Events', 'dox' ),
				'gallery' => esc_html__( 'Galleries', 'dox' ),
			),
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_slideshow_posts_count', array(
			'label'       => esc_html__( 'Number of Items', 'dox' ),
			'settings'    => 'dox_slideshow_posts_count',
			'section'     => 'slideshow',
			'type'        => 'number',
			'input_attrs' => array(
				'min'  => - 1,
				'max'  => 10,
				'step' => 1,
			),
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_slideshow_shortcode', array(
			'label'       => esc_html__( 'Shortcode', 'dox' ),
			'description' => esc_html__( 'Add the shortcode of your slideshow from the favorite slider plugin like "Slider Revolution". Then you can ignore the settings on this tab!', 'dox' ),
			'settings'    => 'dox_slideshow_shortcode',
			'section'     => 'slideshow',
		) ) );

		/**
		 * Colors
		 */
		if ( class_exists( 'forqy_Customize_Heading_Control' ) ) {
			$wp_customize->add_control( new forqy_Customize_Heading_Control( $wp_customize, 'dox_slideshow_colors_heading', array(
				'label'   => esc_html__( 'Colors', 'dox' ),
				'type'    => 'heading',
				'section' => 'slideshow',
			) ) );
		}
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dox_slideshow_color', array(
			'label'    => esc_html__( 'Color', 'dox' ),
			'settings' => 'dox_slideshow_color',
			'section'  => 'slideshow',
		) ) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dox_slideshow_color_accent', array(
			'label'    => esc_html__( 'Accent Color', 'dox' ),
			'settings' => 'dox_slideshow_color_accent',
			'section'  => 'slideshow',
		) ) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dox_slideshow_color_background', array(
			'label'    => esc_html__( 'Background Color', 'dox' ),
			'settings' => 'dox_slideshow_color_background',
			'section'  => 'slideshow',
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_slideshow_color_background_opacity', array(
			'label'    => esc_html__( 'Background Opacity', 'dox' ),
			'settings' => 'dox_slideshow_color_background_opacity',
			'section'  => 'slideshow',
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
		 * Slide
		 */

		if ( class_exists( 'forqy_Customize_Heading_Control' ) ) {
			$wp_customize->add_control( new forqy_Customize_Heading_Control( $wp_customize, 'dox_slideshow_slide_heading', array(
				'label'   => esc_html__( 'Slide', 'dox' ),
				'type'    => 'heading',
				'section' => 'slideshow',
			) ) );
		}
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dox_slideshow_slide_color_background', array(
			'label'    => esc_html__( 'Background Color', 'dox' ),
			'settings' => 'dox_slideshow_slide_color_background',
			'section'  => 'slideshow',
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_slideshow_slide_color_background_opacity', array(
			'label'    => esc_html__( 'Background Opacity', 'dox' ),
			'settings' => 'dox_slideshow_slide_color_background_opacity',
			'section'  => 'slideshow',
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
			$wp_customize->add_control( new forqy_Customize_Subheading_Control( $wp_customize, 'dox_slideshow_slide_overlay_heading', array(
				'label'   => esc_html__( 'Overlay', 'dox' ),
				'type'    => 'subheading',
				'section' => 'slideshow',
			) ) );
		}
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dox_slideshow_slide_overlay_color', array(
			'label'    => esc_html__( 'Color', 'dox' ),
			'settings' => 'dox_slideshow_slide_overlay_color',
			'section'  => 'slideshow',
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_slideshow_slide_overlay_color_opacity', array(
			'label'    => esc_html__( 'Opacity', 'dox' ),
			'settings' => 'dox_slideshow_slide_overlay_color_opacity',
			'section'  => 'slideshow',
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
			$wp_customize->add_control( new forqy_Customize_Subheading_Control( $wp_customize, 'dox_slideshow_slide_gradient_heading', array(
				'label'   => esc_html__( 'Gradient', 'dox' ),
				'type'    => 'subheading',
				'section' => 'slideshow',
			) ) );
		}
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dox_slideshow_slide_gradient_color', array(
			'label'    => esc_html__( 'Color', 'dox' ),
			'settings' => 'dox_slideshow_slide_gradient_color',
			'section'  => 'slideshow',
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_slideshow_slide_gradient_opacity', array(
			'label'    => esc_html__( 'Opacity', 'dox' ),
			'settings' => 'dox_slideshow_slide_gradient_opacity',
			'section'  => 'slideshow',
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
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_slideshow_slide_gradient_angle', array(
			'label'       => esc_html__( 'Angle', 'dox' ),
			'settings'    => 'dox_slideshow_slide_gradient_angle',
			'section'     => 'slideshow',
			'type'        => 'number',
			'input_attrs' => array(
				'min'  => '0',
				'max'  => '360',
				'step' => '5',
			),
		) ) );

		// Image
		if ( class_exists( 'forqy_Customize_Subheading_Control' ) ) {
			$wp_customize->add_control( new forqy_Customize_Subheading_Control( $wp_customize, 'dox_slideshow_slide_image_heading', array(
				'label'   => esc_html__( 'Image', 'dox' ),
				'type'    => 'subheading',
				'section' => 'slideshow',
			) ) );
		}
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_slideshow_slide_image_size', array(
			'label'    => esc_html__( 'Image Size', 'dox' ),
			'settings' => 'dox_slideshow_slide_image_size',
			'section'  => 'slideshow',
			'type'     => 'select',
			'choices'  => array(
				'cover'   => esc_html__( 'Cover', 'dox' ),
				'contain' => esc_html__( 'Contain', 'dox' ),
				'fill'    => esc_html__( 'Fill', 'dox' ),
				'none'    => esc_html__( 'None', 'dox' ),
			),
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_slideshow_slide_image_position_x', array(
			'label'    => esc_html__( 'Image Position X', 'dox' ),
			'settings' => 'dox_slideshow_slide_image_position_x',
			'section'  => 'slideshow',
			'type'     => 'select',
			'choices'  => array(
				'left'   => esc_html__( 'Left', 'dox' ),
				'center' => esc_html__( 'Center', 'dox' ),
				'right'  => esc_html__( 'Right', 'dox' ),
			),
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_slideshow_slide_image_position_y', array(
			'label'    => esc_html__( 'Image Position Y', 'dox' ),
			'settings' => 'dox_slideshow_slide_image_position_y',
			'section'  => 'slideshow',
			'type'     => 'select',
			'choices'  => array(
				'top'    => esc_html__( 'Top', 'dox' ),
				'center' => esc_html__( 'Center', 'dox' ),
				'bottom' => esc_html__( 'Bottom', 'dox' ),
			),
		) ) );

		// Settings
		if ( class_exists( 'forqy_Customize_Subheading_Control' ) ) {
			$wp_customize->add_control( new forqy_Customize_Subheading_Control( $wp_customize, 'dox_slideshow_slide_settings_heading', array(
				'label'   => esc_html__( 'Settings', 'dox' ),
				'type'    => 'subheading',
				'section' => 'slideshow',
			) ) );
		}
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_slideshow_slides', array(
			'label'    => esc_html__( 'Slides per View', 'dox' ),
			'settings' => 'dox_slideshow_slides',
			'section'  => 'slideshow',
			'type'     => 'select',
			'choices'  => array(
				'1' => '1',
				'2' => '2',
				'3' => '3',
			),
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_slideshow_gutter', array(
			'label'    => esc_html__( 'Gap', 'dox' ),
			'settings' => 'dox_slideshow_gutter',
			'section'  => 'slideshow',
			'type'     => 'select',
			'choices'  => array(
				'0'  => esc_html__( 'None', 'dox' ),
				'1'  => esc_html__( 'Hairline', 'dox' ),
				'2'  => esc_html__( 'Hairline - Double', 'dox' ),
				'5'  => esc_html__( 'XXSmall', 'dox' ),
				'10' => esc_html__( 'XSmall', 'dox' ),
				'20' => esc_html__( 'Small', 'dox' ),
				'40' => esc_html__( 'Medium', 'dox' ),
			),
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_slideshow_slide_layout', array(
			'label'    => esc_html__( 'Layout', 'dox' ),
			'settings' => 'dox_slideshow_slide_layout',
			'section'  => 'slideshow',
			'type'     => 'select',
			'choices'  => array(
				'default'   => esc_html__( 'Default', 'dox' ),
				'split-v'   => esc_html__( 'Split', 'dox' ),
				'split-v-2' => esc_html__( 'Split - Bigger', 'dox' ),
			),
		) ) );

		/**
		 * Caption
		 */

		if ( class_exists( 'forqy_Customize_Heading_Control' ) ) {
			$wp_customize->add_control( new forqy_Customize_Heading_Control( $wp_customize, 'dox_slideshow_caption_heading', array(
				'label'   => esc_html__( 'Caption', 'dox' ),
				'type'    => 'heading',
				'section' => 'slideshow',
			) ) );
		}

		// Title
		if ( class_exists( 'forqy_Customize_Subheading_Control' ) ) {
			$wp_customize->add_control( new forqy_Customize_Subheading_Control( $wp_customize, 'dox_slideshow_caption_title_heading', array(
				'label'   => esc_html__( 'Title', 'dox' ),
				'type'    => 'subheading',
				'section' => 'slideshow',
			) ) );
		}
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_slideshow_font_multiplier', array(
			'label'       => esc_html__( 'Font Size', 'dox' ),
			'settings'    => 'dox_slideshow_font_multiplier',
			'section'     => 'slideshow',
			'type'        => 'number',
			'input_attrs' => array(
				'min'  => '0.8',
				'max'  => '2.8',
				'step' => '0.1',
			),
		) ) );

		// Settings
		if ( class_exists( 'forqy_Customize_Subheading_Control' ) ) {
			$wp_customize->add_control( new forqy_Customize_Subheading_Control( $wp_customize, 'dox_slideshow_caption_settings_heading', array(
				'label'   => esc_html__( 'Settings', 'dox' ),
				'type'    => 'subheading',
				'section' => 'slideshow',
			) ) );
		}
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_slideshow_caption_position', array(
			'label'    => esc_html__( 'Position - Horizontal', 'dox' ),
			'settings' => 'dox_slideshow_caption_position',
			'section'  => 'slideshow',
			'type'     => 'select',
			'choices'  => array(
				'left'   => esc_html__( 'Left', 'dox' ),
				'center' => esc_html__( 'Center', 'dox' ),
				'right'  => esc_html__( 'Right', 'dox' ),
			),
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_slideshow_caption_position_v', array(
			'label'    => esc_html__( 'Position - Vertical', 'dox' ),
			'settings' => 'dox_slideshow_caption_position_v',
			'section'  => 'slideshow',
			'type'     => 'select',
			'choices'  => array(
				'center' => esc_html__( 'Center', 'dox' ),
				'bottom' => esc_html__( 'Bottom', 'dox' ),
			),
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_slideshow_caption_background', array(
			'label'    => esc_html__( 'Background', 'dox' ),
			'settings' => 'dox_slideshow_caption_background',
			'section'  => 'slideshow',
			'type'     => 'select',
			'choices'  => array(
				'transparent' => esc_html__( 'Transparent', 'dox' ),
				'bordered'    => esc_html__( 'Bordered', 'dox' ),
				'solid'       => esc_html__( 'Solid', 'dox' ),
			),
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_slideshow_caption_excerpt', array(
			'label'       => esc_html__( 'Excerpt', 'dox' ),
			'description' => esc_html__( 'Enable/disable displaying of the post excerpt.', 'dox' ),
			'settings'    => 'dox_slideshow_caption_excerpt',
			'section'     => 'slideshow',
			'type'        => 'select',
			'choices'     => array(
				'enabled'  => esc_html__( 'Enabled', 'dox' ),
				'disabled' => esc_html__( 'Disabled', 'dox' ),
			),
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_slideshow_caption_button', array(
			'label'    => '1. ' . esc_html__( 'Button', 'dox' ),
			'settings' => 'dox_slideshow_caption_button',
			'section'  => 'slideshow',
			'type'     => 'select',
			'choices'  => array(
				'default'  => esc_html__( 'Default', 'dox' ),
				'bordered' => esc_html__( 'Bordered', 'dox' ),
				'accent'   => esc_html__( 'Accent', 'dox' ),
			),
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_slideshow_caption_button_secondary', array(
			'label'    => '2. ' . esc_html__( 'Button', 'dox' ),
			'settings' => 'dox_slideshow_caption_button_secondary',
			'section'  => 'slideshow',
			'type'     => 'select',
			'choices'  => array(
				'default'  => esc_html__( 'Default', 'dox' ),
				'bordered' => esc_html__( 'Bordered', 'dox' ),
				'accent'   => esc_html__( 'Accent', 'dox' ),
			),
		) ) );

		/**
		 * Pagination
		 */

		if ( class_exists( 'forqy_Customize_Heading_Control' ) ) {
			$wp_customize->add_control( new forqy_Customize_Heading_Control( $wp_customize, 'dox_slideshow_pagination_heading', array(
				'label'   => esc_html__( 'Pagination', 'dox' ),
				'type'    => 'heading',
				'section' => 'slideshow',
			) ) );
		}
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_slideshow_pagination', array(
			'label'    => esc_html__( 'Pagination', 'dox' ),
			'settings' => 'dox_slideshow_pagination',
			'section'  => 'slideshow',
			'type'     => 'select',
			'choices'  => array(
				'enabled'  => esc_html__( 'Enabled', 'dox' ),
				'disabled' => esc_html__( 'Disabled', 'dox' ),
			),
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_slideshow_pagination_align', array(
			'label'    => esc_html__( 'Alignment', 'dox' ),
			'settings' => 'dox_slideshow_pagination_align',
			'section'  => 'slideshow',
			'type'     => 'select',
			'choices'  => array(
				'left'   => esc_html__( 'Left', 'dox' ),
				'center' => esc_html__( 'Center', 'dox' ),
				'right'  => esc_html__( 'Right', 'dox' ),
			),
		) ) );

		/**
		 * Settings
		 */

		if ( class_exists( 'forqy_Customize_Heading_Control' ) ) {
			$wp_customize->add_control( new forqy_Customize_Heading_Control( $wp_customize, 'dox_slideshow_settings_heading', array(
				'label'   => esc_html__( 'Settings', 'dox' ),
				'type'    => 'heading',
				'section' => 'slideshow',
			) ) );
		}
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_slideshow_height', array(
			'label'    => esc_html__( 'Height', 'dox' ),
			'settings' => 'dox_slideshow_height',
			'section'  => 'slideshow',
			'type'     => 'select',
			'choices'  => array(
				'default' => esc_html__( 'Default', 'dox' ),
				'full'    => esc_html__( 'Full-height', 'dox' ),
			),
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_slideshow_direction', array(
			'label'    => esc_html__( 'Direction', 'dox' ),
			'settings' => 'dox_slideshow_direction',
			'section'  => 'slideshow',
			'type'     => 'select',
			'choices'  => array(
				'horizontal' => esc_html__( 'Horizontal', 'dox' ),
				'vertical'   => esc_html__( 'Vertical', 'dox' ),
			),
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_slideshow_effect', array(
			'label'    => esc_html__( 'Effect', 'dox' ),
			'settings' => 'dox_slideshow_effect',
			'section'  => 'slideshow',
			'type'     => 'select',
			'choices'  => array(
				'slide' => esc_html__( 'Slide', 'dox' ),
				'fade'  => esc_html__( 'Fade', 'dox' ),
			),
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_slideshow_speed', array(
			'label'       => esc_html__( 'Speed', 'dox' ),
			'description' => esc_html__( 'Fill in the duration of transition between slides in milliseconds.', 'dox' ),
			'settings'    => 'dox_slideshow_speed',
			'section'     => 'slideshow',
			'type'        => 'number',
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_slideshow_loop', array(
			'label'    => esc_html__( 'Loop', 'dox' ),
			'settings' => 'dox_slideshow_loop',
			'section'  => 'slideshow',
			'type'     => 'select',
			'choices'  => array(
				'true'  => esc_html__( 'Enabled', 'dox' ),
				'false' => esc_html__( 'Disabled', 'dox' ),
			),
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_slideshow_autoplay', array(
			'label'    => esc_html__( 'Autoplay', 'dox' ),
			'settings' => 'dox_slideshow_autoplay',
			'type'     => 'number',
			'section'  => 'slideshow',
		) ) );

		/**
		 * Background Image
		 */

		if ( class_exists( 'forqy_Customize_Heading_Control' ) ) {
			$wp_customize->add_control( new forqy_Customize_Heading_Control( $wp_customize, 'dox_slideshow_image_heading', array(
				'label'   => esc_html__( 'Background Image', 'dox' ),
				'type'    => 'heading',
				'section' => 'slideshow',
			) ) );
		}
		$wp_customize->add_control( new WP_Customize_Upload_Control( $wp_customize, 'dox_slideshow_image', array(
			'label'       => esc_html__( 'Image', 'dox' ),
			'description' => esc_html__( 'Upload an image. Required size at least 1920px of width.', 'dox' ),
			'settings'    => 'dox_slideshow_image',
			'section'     => 'slideshow',
		) ) );
		// Overlay
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dox_slideshow_image_overlay_color', array(
			'label'    => esc_html__( 'Overlay Color', 'dox' ),
			'settings' => 'dox_slideshow_image_overlay_color',
			'section'  => 'slideshow',
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_slideshow_image_overlay_opacity', array(
			'label'    => esc_html__( 'Overlay Opacity', 'dox' ),
			'settings' => 'dox_slideshow_image_overlay_opacity',
			'section'  => 'slideshow',
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
			$wp_customize->add_control( new forqy_Customize_Subheading_Control( $wp_customize, 'dox_slideshow_image_gradient_heading', array(
				'label'   => esc_html__( 'Gradient', 'dox' ),
				'type'    => 'subheading',
				'section' => 'slideshow',
			) ) );
		}
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dox_slideshow_image_gradient_color', array(
			'label'    => esc_html__( 'Color', 'dox' ),
			'settings' => 'dox_slideshow_image_gradient_color',
			'section'  => 'slideshow',
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_slideshow_image_gradient_opacity', array(
			'label'    => esc_html__( 'Opacity', 'dox' ),
			'settings' => 'dox_slideshow_image_gradient_opacity',
			'section'  => 'slideshow',
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
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_slideshow_image_gradient_angle', array(
			'label'       => esc_html__( 'Angle', 'dox' ),
			'settings'    => 'dox_slideshow_image_gradient_angle',
			'section'     => 'slideshow',
			'type'        => 'number',
			'input_attrs' => array(
				'min'  => '0',
				'max'  => '360',
				'step' => '5',
			),
		) ) );


	}

	add_action( 'customize_register', 'dox_customize_add_controls_slideshow' );

}
