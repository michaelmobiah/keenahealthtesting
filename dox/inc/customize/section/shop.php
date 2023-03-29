<?php

/*

Customize Shop

*/

// If WooCommerce Activated
if ( forqy_woocommerce_activated() ) {

	/*
	----------------------------------------------------------------------------------------------------
	Add Section
	----------------------------------------------------------------------------------------------------
	*/

	if ( ! function_exists( 'dox_customize_add_section_shop' ) ) {

		function dox_customize_add_section_shop( $wp_customize ) {

			$wp_customize->add_section( 'shop', array(
				'title'       => esc_html__( 'Shop', 'dox' ),
				'description' => esc_html__( 'Set up the shop appearance.', 'dox' ),
				'panel'       => 'theme',
				'priority'    => 80,
			) );

		}

		add_action( 'customize_register', 'dox_customize_add_section_shop' );

	}

	/*
	----------------------------------------------------------------------------------------------------
	Add Settings
	----------------------------------------------------------------------------------------------------
	*/

	if ( ! function_exists( 'dox_customize_add_settings_shop' ) ) {

		function dox_customize_add_settings_shop( $wp_customize ) {

			/**
			 * Toolbar
			 */
			$wp_customize->add_setting( 'dox_shop_toolbar_heading', array(
				'default'           => '',
				'sanitize_callback' => 'sanitize_text_field',
			) );
			$wp_customize->add_setting( 'dox_shop_toolbar_search', array(
				'default'           => dox_default( 'dox_shop_toolbar_search' ),
				'sanitize_callback' => 'sanitize_text_field',
			) );
			$wp_customize->add_setting( 'dox_shop_toolbar_account', array(
				'default'           => dox_default( 'dox_shop_toolbar_account' ),
				'sanitize_callback' => 'sanitize_text_field',
			) );

			// Search
			$wp_customize->add_setting( 'dox_shop_search_heading', array(
				'default'           => '',
				'sanitize_callback' => 'sanitize_text_field',
			) );
			$wp_customize->add_setting( 'dox_search_color', array(
				'default'           => dox_default( 'dox_search_color' ),
				'transport'         => 'refresh',
				'sanitize_callback' => 'sanitize_text_field',
			) );
			$wp_customize->add_setting( 'dox_search_color_accent', array(
				'default'           => dox_default( 'dox_search_color_accent' ),
				'transport'         => 'refresh',
				'sanitize_callback' => 'sanitize_text_field',
			) );
			$wp_customize->add_setting( 'dox_search_color_background', array(
				'default'           => dox_default( 'dox_search_color_background' ),
				'transport'         => 'refresh',
				'sanitize_callback' => 'sanitize_text_field',
			) );

			/**
			 * Heading
			 */
			$wp_customize->add_setting( 'dox_shop_heading_heading', array(
				'default'           => '',
				'sanitize_callback' => 'sanitize_text_field',
			) );
			$wp_customize->add_setting( 'dox_shop_heading_image', array(
				'default'           => '',
				'sanitize_callback' => 'sanitize_text_field',
			) );
			// Title
			$wp_customize->add_setting( 'dox_shop_title', array(
				'default'           => dox_default( 'dox_shop_title' ),
				'sanitize_callback' => 'sanitize_text_field',
			) );

			/**
			 * Products
			 */
			$wp_customize->add_setting( 'dox_shop_products_heading', array(
				'default'           => '',
				'sanitize_callback' => 'sanitize_text_field',
			) );
			$wp_customize->add_setting( 'dox_shop_products_per_page', array(
				'default'           => dox_default( 'dox_shop_products_per_page' ),
				'sanitize_callback' => 'sanitize_text_field',
			) );
			// Breadcrumbs
			$wp_customize->add_setting( 'dox_shop_breadcrumbs', array(
				'default'           => 'disabled',
				'sanitize_callback' => 'sanitize_text_field',
			) );

			/**
			 * Product
			 */
			$wp_customize->add_setting( 'dox_shop_product_heading', array(
				'default'           => '',
				'sanitize_callback' => 'sanitize_text_field',
			) );
			$wp_customize->add_setting( 'dox_shop_product_columns', array(
				'default'           => dox_default( 'dox_shop_product_columns' ),
				'sanitize_callback' => 'sanitize_text_field',
			) );
			$wp_customize->add_setting( 'dox_shop_product_badge_new', array(
				'default'           => '14',
				'sanitize_callback' => 'sanitize_text_field',
			) );
			$wp_customize->add_setting( 'dox_shop_product_add_to_cart', array(
				'default'           => 'enabled',
				'sanitize_callback' => 'sanitize_text_field',
			) );
			$wp_customize->add_setting( 'dox_shop_product_navigation', array(
				'default'           => 'enabled',
				'sanitize_callback' => 'sanitize_text_field',
			) );
			$wp_customize->add_setting( 'dox_shop_product_gallery_zoom', array(
				'default'           => 'enabled',
				'sanitize_callback' => 'sanitize_text_field',
			) );
			$wp_customize->add_setting( 'dox_shop_product_gallery_slider', array(
				'default'           => 'enabled',
				'sanitize_callback' => 'sanitize_text_field',
			) );
		}

		add_action( 'customize_register', 'dox_customize_add_settings_shop' );

	}

	/*
	----------------------------------------------------------------------------------------------------
	Add Controls
	----------------------------------------------------------------------------------------------------
	*/

	if ( ! function_exists( 'dox_customize_add_controls_shop' ) ) {

		function dox_customize_add_controls_shop( $wp_customize ) {

			/**
			 * Toolbar
			 */
			if ( class_exists( 'forqy_Customize_Heading_Control' ) ) {
				$wp_customize->add_control( new forqy_Customize_Heading_Control( $wp_customize, 'dox_shop_toolbar_heading', array(
					'label'   => esc_html__( 'Toolbar', 'dox' ),
					'type'    => 'heading',
					'section' => 'shop',
				) ) );
			}
			$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_shop_toolbar_search', array(
				'label'    => esc_html__( 'Icon - Search', 'dox' ),
				'settings' => 'dox_shop_toolbar_search',
				'section'  => 'shop',
				'type'     => 'select',
				'choices'  => array(
					'enabled'  => esc_html__( 'Enabled', 'dox' ),
					'disabled' => esc_html__( 'Disabled', 'dox' ),
				),
			) ) );
			$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_shop_toolbar_account', array(
				'label'    => esc_html__( 'Icon - Account', 'dox' ),
				'settings' => 'dox_shop_toolbar_account',
				'section'  => 'shop',
				'type'     => 'select',
				'choices'  => array(
					'enabled'  => esc_html__( 'Enabled', 'dox' ),
					'disabled' => esc_html__( 'Disabled', 'dox' ),
				),
			) ) );

			// Search
			if ( class_exists( 'forqy_Customize_Subheading_Control' ) ) {
				$wp_customize->add_control( new forqy_Customize_Subheading_Control( $wp_customize, 'dox_shop_search_heading', array(
					'label'   => esc_html_x( 'Search', 'customize', 'dox' ),
					'type'    => 'subheading',
					'section' => 'shop',
				) ) );
			}
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dox_search_color', array(
				'label'    => esc_html__( 'Color', 'dox' ),
				'settings' => 'dox_search_color',
				'section'  => 'shop',
			) ) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dox_search_color_accent', array(
				'label'    => esc_html__( 'Accent Color', 'dox' ),
				'settings' => 'dox_search_color_accent',
				'section'  => 'shop',
			) ) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dox_search_color_background', array(
				'label'    => esc_html__( 'Background Color', 'dox' ),
				'settings' => 'dox_search_color_background',
				'section'  => 'shop',
			) ) );

			/**
			 * Heading
			 */
			if ( class_exists( 'forqy_Customize_Heading_Control' ) ) {
				$wp_customize->add_control( new forqy_Customize_Heading_Control( $wp_customize, 'dox_shop_heading_heading', array(
					'label'   => esc_html__( 'Heading', 'dox' ),
					'type'    => 'heading',
					'section' => 'shop',
				) ) );
			}
			$wp_customize->add_control( new WP_Customize_Upload_Control( $wp_customize, 'dox_shop_heading_image', array(
				'label'    => esc_html__( 'Heading Image', 'dox' ),
				'settings' => 'dox_shop_heading_image',
				'section'  => 'shop',
			) ) );

			// Title
			$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_shop_title', array(
				'label'       => esc_html__( 'Title', 'dox' ),
				'description' => esc_html__( 'Enable/disable displaying of the title on the main shop page.', 'dox' ),
				'settings'    => 'dox_shop_title',
				'section'     => 'shop',
				'type'        => 'select',
				'choices'     => array(
					'enabled'  => esc_html__( 'Enabled', 'dox' ),
					'disabled' => esc_html__( 'Disabled', 'dox' ),
				),
			) ) );

			/**
			 * Products
			 */
			if ( class_exists( 'forqy_Customize_Heading_Control' ) ) {
				$wp_customize->add_control( new forqy_Customize_Heading_Control( $wp_customize, 'dox_shop_products_heading', array(
					'label'   => esc_html__( 'Products', 'dox' ),
					'type'    => 'heading',
					'section' => 'shop',
				) ) );
			}
			$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_shop_products_per_page', array(
				'label'       => esc_html__( 'Number of Items', 'dox' ),
				'settings'    => 'dox_shop_products_per_page',
				'section'     => 'shop',
				'type'        => 'number',
				'input_attrs' => array(
					'min'  => - 1,
					'max'  => 24,
					'step' => 1,
				),
			) ) );
			// Breadcrumbs
			$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_shop_breadcrumbs', array(
				'label'       => esc_html__( 'Breadcrumbs', 'dox' ),
				'description' => esc_html__( 'Enable/disable displaying of breadcrumbs on the shop pages.', 'dox' ),
				'settings'    => 'dox_shop_breadcrumbs',
				'section'     => 'shop',
				'type'        => 'select',
				'choices'     => array(
					'enabled'  => esc_html__( 'Enabled', 'dox' ),
					'disabled' => esc_html__( 'Disabled', 'dox' ),
				),
			) ) );

			/**
			 * Product
			 */
			if ( class_exists( 'forqy_Customize_Heading_Control' ) ) {
				$wp_customize->add_control( new forqy_Customize_Heading_Control( $wp_customize, 'dox_shop_product_heading', array(
					'label'   => esc_html__( 'Product Catalog', 'dox' ),
					'type'    => 'heading',
					'section' => 'shop',
				) ) );
			}
			$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_shop_product_columns', array(
				'label'       => esc_html__( 'Number of Columns', 'dox' ),
				'description' => esc_html__( 'Select the number of columns in the product category.', 'dox' ),
				'settings'    => 'dox_shop_product_columns',
				'section'     => 'shop',
				'type'        => 'select',
				'choices'     => array(
					'2' => esc_html__( '2 columns', 'dox' ),
					'3' => esc_html__( '3 columns (2 columns with sidebar)', 'dox' ),
					'4' => esc_html__( '4 columns (3 columns with sidebar)', 'dox' ),
					'5' => esc_html__( '5 columns (4 columns with sidebar)', 'dox' ),
				),
			) ) );
			$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_shop_product_add_to_cart', array(
				'label'       => esc_html__( '"Add to Cart" Button', 'dox' ),
				'description' => esc_html__( 'Enable/disable the product button. Need to refresh the page to take a effect!', 'dox' ),
				'settings'    => 'dox_shop_product_add_to_cart',
				'section'     => 'shop',
				'type'        => 'select',
				'choices'     => array(
					'enabled'  => esc_html__( 'Enabled', 'dox' ),
					'disabled' => esc_html__( 'Disabled', 'dox' ),
				),
			) ) );
			$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_shop_product_badge_new', array(
				'label'       => esc_html__( 'Product "New" Badge', 'dox' ),
				'description' => esc_html__( 'Fill in the number of days to keep the "NEW" badge on the product.', 'dox' ),
				'settings'    => 'dox_shop_product_badge_new',
				'section'     => 'shop',
				'type'        => 'number',
				'input_attrs' => array(
					'min'  => '0',
					'max'  => '99',
					'step' => '1',
				),
			) ) );
			$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_shop_product_navigation', array(
				'label'       => esc_html__( 'Navigation', 'dox' ),
				'description' => esc_html__( 'Enable/disable the product navigation (Prev/Next).', 'dox' ),
				'settings'    => 'dox_shop_product_navigation',
				'section'     => 'shop',
				'type'        => 'select',
				'choices'     => array(
					'enabled'  => esc_html__( 'Enabled', 'dox' ),
					'disabled' => esc_html__( 'Disabled', 'dox' ),
				),
			) ) );
			$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_shop_product_gallery_zoom', array(
				'label'       => esc_html__( 'Image Zoom', 'dox' ),
				'description' => esc_html__( 'Enable/disable the product image zoom.', 'dox' ) . ' ' . esc_html__( 'Need to refresh the page to take a effect!', 'dox' ),
				'settings'    => 'dox_shop_product_gallery_zoom',
				'section'     => 'shop',
				'type'        => 'select',
				'choices'     => array(
					'enabled'  => esc_html__( 'Enabled', 'dox' ),
					'disabled' => esc_html__( 'Disabled', 'dox' ),
				),
			) ) );
			$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_shop_product_gallery_slider', array(
				'label'       => esc_html__( 'Gallery Slider', 'dox' ),
				'description' => esc_html__( 'Enable/disable the product gallery slider.', 'dox' ) . ' ' . esc_html__( 'Need to refresh the page to take a effect!', 'dox' ),
				'settings'    => 'dox_shop_product_gallery_slider',
				'section'     => 'shop',
				'type'        => 'select',
				'choices'     => array(
					'enabled'  => esc_html__( 'Enabled', 'dox' ),
					'disabled' => esc_html__( 'Disabled', 'dox' ),
				),
			) ) );

		}

		add_action( 'customize_register', 'dox_customize_add_controls_shop' );

	}

}
