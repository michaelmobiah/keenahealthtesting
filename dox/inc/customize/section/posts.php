<?php

/*

Customize Posts

*/

/*
----------------------------------------------------------------------------------------------------
Add Section
----------------------------------------------------------------------------------------------------
*/

if ( ! function_exists( 'dox_customize_add_section_posts' ) ) {

	function dox_customize_add_section_posts( $wp_customize ) {

		$wp_customize->add_section( 'posts', array(
			'title'       => esc_html__( 'Posts', 'dox' ),
			'description' => esc_html__( 'Set up the posts appearance.', 'dox' ),
			'panel'       => 'theme',
			'priority'    => 61,
		) );

	}

	add_action( 'customize_register', 'dox_customize_add_section_posts' );

}

/*
----------------------------------------------------------------------------------------------------
Add Settings
----------------------------------------------------------------------------------------------------
*/

if ( ! function_exists( 'dox_customize_add_settings_posts' ) ) {

	function dox_customize_add_settings_posts( $wp_customize ) {

		$wp_customize->add_setting( 'dox_posts_layout', array(
			'default'           => dox_default( 'dox_posts_layout' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_posts_gutter', array(
			'default'           => dox_default( 'dox_posts_gutter' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );

		/**
		 * Post
		 */

		$wp_customize->add_setting( 'dox_post_heading', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		// Colors
		$wp_customize->add_setting( 'dox_post_color', array(
			'default'           => dox_default( 'dox_post_color' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_hex_color',
		) );
		$wp_customize->add_setting( 'dox_post_color_opacity', array(
			'default'           => dox_default( 'dox_post_color_opacity' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_post_color_accent', array(
			'default'           => dox_default( 'dox_post_color_accent' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_hex_color',
		) );
		$wp_customize->add_setting( 'dox_post_color_background', array(
			'default'           => dox_default( 'dox_post_color_background' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_hex_color',
		) );
		// Settings
		$wp_customize->add_setting( 'dox_post_layout', array(
			'default'           => dox_default( 'dox_post_layout' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->selective_refresh->add_partial( 'dox_post_layout', array(
			'selector' => '.cs-post'
		) );
		$wp_customize->add_setting( 'dox_post_appearance', array(
			'default'           => dox_default( 'dox_post_appearance' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_post_overlay_type', array(
			'default'           => dox_default( 'dox_post_overlay_type' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_post_meta', array(
			'default'           => dox_default( 'dox_post_meta' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_post_button', array(
			'default'           => 'enabled',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_post_excerpt', array(
			'default'           => dox_default( 'dox_post_excerpt' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_post_excerpt_length', array(
			'default'           => dox_default( 'dox_post_excerpt_length' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );

		/**
		 * Single Post
		 */

		$wp_customize->add_setting( 'dox_post_single_sub_heading', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_post_single_width', array(
			'default'           => '75',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_post_single_navigation', array(
			'default'           => 'enabled',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );

		/**
		 * Menu
		 */

		if ( post_type_exists( 'menu' ) ) {

			$wp_customize->add_setting( 'dox_menu_heading', array(
				'default'           => '',
				'sanitize_callback' => 'sanitize_text_field',
			) );
			$wp_customize->add_setting( 'dox_menu_post_layout', array(
				'default'           => dox_default( 'dox_menu_post_layout' ),
				'transport'         => 'refresh',
				'sanitize_callback' => 'sanitize_text_field',
			) );
			$wp_customize->add_setting( 'dox_menu_images', array(
				'default'           => 'enabled',
				'transport'         => 'refresh',
				'sanitize_callback' => 'sanitize_text_field',
			) );
			$wp_customize->add_setting( 'dox_menu_content', array(
				'default'           => 'excerpt',
				'transport'         => 'refresh',
				'sanitize_callback' => 'sanitize_text_field',
			) );
			$wp_customize->add_setting( 'dox_menu_filter_by_ingredients', array(
				'default'           => 'enabled',
				'transport'         => 'refresh',
				'sanitize_callback' => 'sanitize_text_field',
			) );
			$wp_customize->add_setting( 'dox_menu_single', array(
				'default'           => 'enabled',
				'transport'         => 'refresh',
				'sanitize_callback' => 'sanitize_text_field',
			) );

		}

	}

	add_action( 'customize_register', 'dox_customize_add_settings_posts' );

}

/*
----------------------------------------------------------------------------------------------------
Add Controls
----------------------------------------------------------------------------------------------------
*/

if ( ! function_exists( 'dox_customize_add_controls_posts' ) ) {

	function dox_customize_add_controls_posts( $wp_customize ) {

		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_posts_layout', array(
			'label'       => esc_html__( 'Layout', 'dox' ),
			'description' => esc_html__( 'Select the layout of the posts.', 'dox' ),
			'settings'    => 'dox_posts_layout',
			'section'     => 'posts',
			'type'        => 'select',
			'choices'     => array(
				'default'        => esc_html__( 'Grid', 'dox' ),
				'masonry'        => esc_html__( 'Masonry Grid', 'dox' ),
				'masonry-broken' => esc_html__( 'Masonry Grid - Broken', 'dox' ),
			),
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_posts_gutter', array(
			'label'       => esc_html__( 'Gap', 'dox' ),
			'description' => esc_html__( 'Select the gap size between items.', 'dox' ),
			'settings'    => 'dox_posts_gutter',
			'section'     => 'posts',
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
		 * Post
		 */

		if ( class_exists( 'forqy_Customize_Heading_Control' ) ) {
			$wp_customize->add_control( new forqy_Customize_Heading_Control( $wp_customize, 'dox_post_heading', array(
				'label'   => esc_html__( 'Post', 'dox' ),
				'type'    => 'heading',
				'section' => 'posts',
			) ) );
		}

		// Colors
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dox_post_color', array(
			'label'    => esc_html__( 'Color', 'dox' ),
			'settings' => 'dox_post_color',
			'section'  => 'posts',
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_post_color_opacity', array(
			'label'    => esc_html__( 'Color Opacity', 'dox' ),
			'settings' => 'dox_post_color_opacity',
			'section'  => 'posts',
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
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dox_post_color_accent', array(
			'label'    => esc_html__( 'Accent Color', 'dox' ),
			'settings' => 'dox_post_color_accent',
			'section'  => 'posts',
		) ) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dox_post_color_background', array(
			'label'    => esc_html__( 'Background Color', 'dox' ),
			'settings' => 'dox_post_color_background',
			'section'  => 'posts',
		) ) );

		// Settings
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_post_layout', array(
			'label'       => esc_html__( 'Layout', 'dox' ),
			'description' => esc_html__( 'Select the layout of the post.', 'dox' ),
			'settings'    => 'dox_post_layout',
			'section'     => 'posts',
			'type'        => 'select',
			'choices'     => array(
				'default' => esc_html__( 'Default', 'dox' ),
				'side'    => esc_html__( 'Side', 'dox' ),
				'slide'   => esc_html__( 'Slide', 'dox' ),
				'cover'   => esc_html__( 'Cover', 'dox' ),
			),
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_post_appearance', array(
			'label'       => esc_html__( 'Appearance', 'dox' ),
			'description' => esc_html__( 'Select the appearance of the post.', 'dox' ),
			'settings'    => 'dox_post_appearance',
			'section'     => 'posts',
			'type'        => 'select',
			'choices'     => array(
				'classic' => esc_html__( 'Classic', 'dox' ),
				'card'    => esc_html__( 'Card', 'dox' ),
			),
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_post_overlay_type', array(
			'label'    => esc_html__( 'Image Overlay', 'dox' ),
			'settings' => 'dox_post_overlay_type',
			'section'  => 'posts',
			'type'     => 'select',
			'choices'  => array(
				'default'  => esc_html__( 'Default', 'dox' ),
				'reversed' => esc_html__( 'Reversed', 'dox' ),
			),
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_post_meta', array(
			'label'       => esc_html__( 'Meta', 'dox' ),
			'description' => esc_html__( 'Enable/disable the post meta information on the category listing.', 'dox' ),
			'settings'    => 'dox_post_meta',
			'section'     => 'posts',
			'type'        => 'select',
			'choices'     => array(
				'enabled'  => esc_html__( 'Enabled', 'dox' ),
				'disabled' => esc_html__( 'Disabled', 'dox' ),
			),
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_post_button', array(
			'label'    => esc_html__( 'Button', 'dox' ),
			'settings' => 'dox_post_button',
			'section'  => 'posts',
			'type'     => 'select',
			'choices'  => array(
				'enabled'  => esc_html__( 'Enabled', 'dox' ),
				'disabled' => esc_html__( 'Disabled', 'dox' ),
			),
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_post_excerpt', array(
			'label'       => esc_html__( 'Excerpt', 'dox' ),
			'description' => esc_html__( 'Enable/disable the post excerpt on the category listing.', 'dox' ),
			'settings'    => 'dox_post_excerpt',
			'section'     => 'posts',
			'type'        => 'select',
			'choices'     => array(
				'enabled'  => esc_html__( 'Enabled', 'dox' ),
				'disabled' => esc_html__( 'Disabled', 'dox' ),
			),
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_post_excerpt_length', array(
			'label'       => esc_html__( 'Excerpt Length', 'dox' ),
			'description' => esc_html__( 'Fill in the length of the excerpt - a number of words.', 'dox' ),
			'settings'    => 'dox_post_excerpt_length',
			'section'     => 'posts',
			'type'        => 'number',
		) ) );

		/**
		 * Single Post
		 */

		if ( class_exists( 'forqy_Customize_Subheading_Control' ) ) {
			$wp_customize->add_control( new forqy_Customize_Heading_Control( $wp_customize, 'dox_post_single_sub_heading', array(
				'label'   => esc_html__( 'Single Post', 'dox' ),
				'type'    => 'subheading',
				'section' => 'posts',
			) ) );
		}
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_post_single_width', array(
			'label'    => esc_html__( 'Width', 'dox' ),
			'settings' => 'dox_post_single_width',
			'section'  => 'posts',
			'type'     => 'select',
			'choices'  => array(
				'stretched' => esc_html__( 'Stretched', 'dox' ),
				'100'       => esc_html__( '100%', 'dox' ),
				'75'        => esc_html__( '75%', 'dox' ),
				'50'        => esc_html__( '50%', 'dox' ),
			),
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_post_single_navigation', array(
			'label'       => esc_html__( 'Navigation', 'dox' ),
			'description' => esc_html__( 'Enable/disable the post navigation (Prev/Next).', 'dox' ),
			'settings'    => 'dox_post_single_navigation',
			'section'     => 'posts',
			'type'        => 'select',
			'choices'     => array(
				'enabled'  => esc_html__( 'Enabled', 'dox' ),
				'disabled' => esc_html__( 'Disabled', 'dox' ),
			),
		) ) );

		/**
		 * Menu
		 */

		if ( post_type_exists( 'menu' ) ) {

			if ( class_exists( 'forqy_Customize_Heading_Control' ) ) {
				$wp_customize->add_control( new forqy_Customize_Heading_Control( $wp_customize, 'dox_menu_heading', array(
					'label'   => esc_html__( 'Menu', 'dox' ),
					'type'    => 'heading',
					'section' => 'posts',
				) ) );
			}
			$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_menu_post_layout', array(
				'label'    => esc_html__( 'Layout', 'dox' ),
				'settings' => 'dox_menu_post_layout',
				'section'  => 'posts',
				'type'     => 'select',
				'choices'  => array(
					'default' => esc_html__( 'Default', 'dox' ),
					'side'    => esc_html__( 'Side', 'dox' ),
				),
			) ) );
			$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_menu_images', array(
				'label'    => esc_html__( 'Images', 'dox' ),
				'settings' => 'dox_menu_images',
				'section'  => 'posts',
				'type'     => 'select',
				'choices'  => array(
					'enabled'  => esc_html__( 'Enabled', 'dox' ),
					'disabled' => esc_html__( 'Disabled', 'dox' ),
				),
			) ) );
			$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_menu_content', array(
				'label'    => esc_html__( 'Content', 'dox' ),
				'settings' => 'dox_menu_content',
				'section'  => 'posts',
				'type'     => 'select',
				'choices'  => array(
					'excerpt' => esc_html__( 'Excerpt', 'dox' ),
					'content' => esc_html__( 'Content', 'dox' ),
				),
			) ) );
			$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_menu_filter_by_ingredients', array(
				'label'       => esc_html__( 'Filter by Ingredients', 'dox' ),
				'description' => esc_html__( 'Enable/disable the filtering menu items by ingredients.', 'dox' ),
				'settings'    => 'dox_menu_filter_by_ingredients',
				'section'     => 'posts',
				'type'        => 'select',
				'choices'     => array(
					'enabled'  => esc_html__( 'Enabled', 'dox' ),
					'disabled' => esc_html__( 'Disabled', 'dox' ),
				),
			) ) );
			$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_menu_single', array(
				'label'       => esc_html__( 'Single Page', 'dox' ),
				'description' => esc_html__( 'Enable/disable the menu item single page.', 'dox' ),
				'settings'    => 'dox_menu_single',
				'section'     => 'posts',
				'type'        => 'select',
				'choices'     => array(
					'enabled'  => esc_html__( 'Enabled', 'dox' ),
					'disabled' => esc_html__( 'Disabled', 'dox' ),
				),
			) ) );

		}

	}

	add_action( 'customize_register', 'dox_customize_add_controls_posts' );

}
