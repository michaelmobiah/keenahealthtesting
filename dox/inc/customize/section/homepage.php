<?php

/*

Customize Homepage

*/

/*
----------------------------------------------------------------------------------------------------
Add Section
----------------------------------------------------------------------------------------------------
*/

if ( ! function_exists( 'dox_customize_add_section_homepage' ) ) {

	function dox_customize_add_section_homepage( $wp_customize ) {

		$wp_customize->add_section( 'homepage', array(
			'title'       => esc_html__( 'Homepage', 'dox' ),
			'description' => esc_html__( 'Set up homepage sections.', 'dox' ),
			'panel'       => 'theme',
			'priority'    => 70,
		) );

	}

	add_action( 'customize_register', 'dox_customize_add_section_homepage' );

}

/*
----------------------------------------------------------------------------------------------------
Add Settings
----------------------------------------------------------------------------------------------------
*/

if ( ! function_exists( 'dox_customize_add_settings_homepage' ) ) {

	function dox_customize_add_settings_homepage( $wp_customize ) {

		/**
		 *
		 * Carousel
		 *
		 */

		$wp_customize->add_setting( 'dox_homepage_carousel_heading', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_homepage_carousel', array(
			'default'           => dox_default( 'dox_homepage_carousel' ),
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->selective_refresh->add_partial( 'dox_homepage_carousel', array(
			'selector' => '.cs-carousel'
		) );
		$wp_customize->add_setting( 'dox_homepage_carousel_type', array(
			'default'           => 'sticky',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_homepage_carousel_type_count', array(
			'default'           => '9',
			'sanitize_callback' => 'sanitize_text_field',
		) );

		/**
		 *
		 * About
		 *
		 */

		$wp_customize->add_setting( 'dox_homepage_about_heading', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_homepage_about', array(
			'default'           => 'enabled',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_homepage_about_button_first', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_homepage_about_button_first_page', array(
			'default'           => '0',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_homepage_about_button_second', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_homepage_about_button_second_page', array(
			'default'           => '0',
			'sanitize_callback' => 'sanitize_text_field',
		) );

		$wp_customize->selective_refresh->add_partial( 'dox_homepage_about', array(
			'selector' => '.cs-section-about'
		) );

		if ( post_type_exists( 'project' ) ) {

			/**
			 *
			 * Projects
			 *
			 */

			$wp_customize->add_setting( 'dox_homepage_projects_heading', array(
				'default'           => '',
				'sanitize_callback' => 'sanitize_text_field',
			) );
			$wp_customize->add_setting( 'dox_homepage_projects', array(
				'default'           => 'enabled',
				'sanitize_callback' => 'sanitize_text_field',
			) );
			$wp_customize->add_setting( 'dox_homepage_projects_title', array(
				'default'           => esc_html__( 'Projects', 'dox' ),
				'sanitize_callback' => 'sanitize_text_field',
			) );
			$wp_customize->selective_refresh->add_partial( 'dox_homepage_projects_title', array(
				'selector' => '.cs-projects-title'
			) );
			$wp_customize->add_setting( 'dox_homepage_projects_content', array(
				'default'           => '',
				'transport'         => 'refresh',
				'sanitize_callback' => 'wp_kses_post',
			) );
			$wp_customize->selective_refresh->add_partial( 'dox_homepage_projects_content', array(
				'selector' => '.cs-projects-content'
			) );
			$wp_customize->add_setting( 'dox_homepage_projects_count', array(
				'default'           => dox_default( 'dox_homepage_projects_count' ),
				'sanitize_callback' => 'sanitize_text_field',
			) );
			$wp_customize->add_setting( 'dox_homepage_projects_button', array(
				'default'           => '',
				'sanitize_callback' => 'sanitize_text_field',
			) );
			$wp_customize->add_setting( 'dox_homepage_projects_button_page', array(
				'default'           => '0',
				'sanitize_callback' => 'sanitize_text_field',
			) );

			$wp_customize->selective_refresh->add_partial( 'dox_homepage_projects', array(
				'selector' => '.cs-projects'
			) );

		}

		if ( post_type_exists( 'album' ) ) {

			/**
			 *
			 * Albums
			 *
			 */

			$wp_customize->add_setting( 'dox_homepage_albums_heading', array(
				'default'           => '',
				'sanitize_callback' => 'sanitize_text_field',
			) );
			$wp_customize->add_setting( 'dox_homepage_albums', array(
				'default'           => 'enabled',
				'sanitize_callback' => 'sanitize_text_field',
			) );
			$wp_customize->add_setting( 'dox_homepage_albums_title', array(
				'default'           => esc_html__( 'Albums', 'dox' ),
				'sanitize_callback' => 'sanitize_text_field',
			) );
			$wp_customize->selective_refresh->add_partial( 'dox_homepage_albums_title', array(
				'selector' => '.cs-albums-title'
			) );
			$wp_customize->add_setting( 'dox_homepage_albums_content', array(
				'default'           => '',
				'transport'         => 'refresh',
				'sanitize_callback' => 'wp_kses_post',
			) );
			$wp_customize->selective_refresh->add_partial( 'dox_homepage_albums_content', array(
				'selector' => '.cs-albums-content'
			) );
			$wp_customize->add_setting( 'dox_homepage_albums_count', array(
				'default'           => dox_default( 'dox_homepage_albums_count' ),
				'sanitize_callback' => 'sanitize_text_field',
			) );
			$wp_customize->add_setting( 'dox_homepage_albums_button', array(
				'default'           => '',
				'sanitize_callback' => 'sanitize_text_field',
			) );
			$wp_customize->add_setting( 'dox_homepage_albums_button_page', array(
				'default'           => '0',
				'sanitize_callback' => 'sanitize_text_field',
			) );

			$wp_customize->selective_refresh->add_partial( 'dox_homepage_albums', array(
				'selector' => '.cs-albums'
			) );

		}

		if ( post_type_exists( 'event' ) ) {

			/**
			 *
			 * Events
			 *
			 */

			$wp_customize->add_setting( 'dox_homepage_events_heading', array(
				'default'           => '',
				'sanitize_callback' => 'sanitize_text_field',
			) );
			$wp_customize->add_setting( 'dox_homepage_events', array(
				'default'           => 'enabled',
				'sanitize_callback' => 'sanitize_text_field',
			) );
			$wp_customize->add_setting( 'dox_homepage_events_title', array(
				'default'           => esc_html__( 'Upcoming Events', 'dox' ),
				'sanitize_callback' => 'sanitize_text_field',
			) );
			$wp_customize->selective_refresh->add_partial( 'dox_homepage_events_title', array(
				'selector' => '.cs-events-title'
			) );
			$wp_customize->add_setting( 'dox_homepage_events_content', array(
				'default'           => '',
				'transport'         => 'refresh',
				'sanitize_callback' => 'wp_kses_post',
			) );
			$wp_customize->selective_refresh->add_partial( 'dox_homepage_events_content', array(
				'selector' => '.cs-events-content'
			) );
			$wp_customize->add_setting( 'dox_homepage_events_count', array(
				'default'           => dox_default( 'dox_homepage_events_count' ),
				'sanitize_callback' => 'sanitize_text_field',
			) );
			$wp_customize->add_setting( 'dox_homepage_events_button', array(
				'default'           => '',
				'sanitize_callback' => 'sanitize_text_field',
			) );
			$wp_customize->add_setting( 'dox_homepage_events_button_page', array(
				'default'           => '0',
				'sanitize_callback' => 'sanitize_text_field',
			) );

			$wp_customize->selective_refresh->add_partial( 'dox_homepage_events', array(
				'selector' => '.cs-events'
			) );

		}

		if ( post_type_exists( 'gallery' ) ) {

			/**
			 *
			 * Galleries
			 *
			 */

			$wp_customize->add_setting( 'dox_homepage_galleries_heading', array(
				'default'           => '',
				'sanitize_callback' => 'sanitize_text_field',
			) );
			$wp_customize->add_setting( 'dox_homepage_galleries', array(
				'default'           => 'enabled',
				'sanitize_callback' => 'sanitize_text_field',
			) );
			$wp_customize->add_setting( 'dox_homepage_galleries_title', array(
				'default'           => esc_html__( 'Galleries', 'dox' ),
				'sanitize_callback' => 'sanitize_text_field',
			) );
			$wp_customize->selective_refresh->add_partial( 'dox_homepage_galleries_title', array(
				'selector' => '.cs-galleries-title'
			) );
			$wp_customize->add_setting( 'dox_homepage_galleries_content', array(
				'default'           => '',
				'transport'         => 'refresh',
				'sanitize_callback' => 'wp_kses_post',
			) );
			$wp_customize->selective_refresh->add_partial( 'dox_homepage_galleries_content', array(
				'selector' => '.cs-galleries-content'
			) );
			$wp_customize->add_setting( 'dox_homepage_galleries_count', array(
				'default'           => dox_default( 'dox_homepage_galleries_count' ),
				'sanitize_callback' => 'sanitize_text_field',
			) );
			$wp_customize->add_setting( 'dox_homepage_galleries_button', array(
				'default'           => '',
				'sanitize_callback' => 'sanitize_text_field',
			) );
			$wp_customize->add_setting( 'dox_homepage_galleries_button_page', array(
				'default'           => '0',
				'sanitize_callback' => 'sanitize_text_field',
			) );

			$wp_customize->selective_refresh->add_partial( 'dox_homepage_galleries', array(
				'selector' => '.cs-galleries'
			) );

		}

		/**
		 *
		 * Posts
		 *
		 */

		$wp_customize->add_setting( 'dox_homepage_posts_heading', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_homepage_posts', array(
			'default'           => 'enabled',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_homepage_posts_title', array(
			'default'           => esc_html__( 'Recent News', 'dox' ),
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->selective_refresh->add_partial( 'dox_homepage_posts_title', array(
			'selector' => '.cs-posts-title'
		) );
		$wp_customize->add_setting( 'dox_homepage_posts_content', array(
			'default'           => '',
			'transport'         => 'refresh',
			'sanitize_callback' => 'wp_kses_post',
		) );
		$wp_customize->selective_refresh->add_partial( 'dox_homepage_posts_content', array(
			'selector' => '.cs-posts-content'
		) );
		$wp_customize->add_setting( 'dox_homepage_posts_count', array(
			'default'           => dox_default( 'dox_homepage_posts_count' ),
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_homepage_posts_button', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_homepage_posts_button_page', array(
			'default'           => '0',
			'sanitize_callback' => 'sanitize_text_field',
		) );

		$wp_customize->selective_refresh->add_partial( 'dox_homepage_posts', array(
			'selector' => '.cs-posts'
		) );

		/**
		 *
		 * Categories
		 *
		 */

		$wp_customize->add_setting( 'dox_homepage_categories_heading', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_homepage_categories', array(
			'default'           => 'enabled',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_homepage_categories_tax', array(
			'default'           => dox_default( 'dox_homepage_categories_tax' ),
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_homepage_categories_title', array(
			'default'           => esc_html__( 'Categories', 'dox' ),
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->selective_refresh->add_partial( 'dox_homepage_categories_title', array(
			'selector' => '.cs-categories-title'
		) );
		$wp_customize->add_setting( 'dox_homepage_categories_content', array(
			'default'           => '',
			'transport'         => 'refresh',
			'sanitize_callback' => 'wp_kses_post',
		) );
		$wp_customize->selective_refresh->add_partial( 'dox_homepage_categories_content', array(
			'selector' => '.cs-categories-content'
		) );

		$wp_customize->selective_refresh->add_partial( 'dox_homepage_categories', array(
			'selector' => '.cs-categories'
		) );

		if ( forqy_woocommerce_activated() ) {

			/**
			 *
			 * Featured Products
			 *
			 */

			$wp_customize->add_setting( 'dox_homepage_products_featured_heading', array(
				'default'           => '',
				'sanitize_callback' => 'sanitize_text_field',
			) );
			$wp_customize->add_setting( 'dox_homepage_products_featured', array(
				'default'           => 'enabled',
				'sanitize_callback' => 'sanitize_text_field',
			) );
			$wp_customize->add_setting( 'dox_homepage_products_featured_title', array(
				'default'           => esc_html__( 'Explore Top Products', 'dox' ),
				'sanitize_callback' => 'sanitize_text_field',
			) );
			$wp_customize->selective_refresh->add_partial( 'dox_homepage_products_featured_title', array(
				'selector' => '.cs-products-featured-title'
			) );
			$wp_customize->add_setting( 'dox_homepage_products_featured_content', array(
				'default'           => '',
				'transport'         => 'refresh',
				'sanitize_callback' => 'wp_kses_post',
			) );
			$wp_customize->selective_refresh->add_partial( 'dox_homepage_products_featured_content', array(
				'selector' => '.cs-products-featured-content'
			) );
			$wp_customize->add_setting( 'dox_homepage_products_featured_count', array(
				'default'           => dox_default( 'dox_homepage_products_featured_count' ),
				'sanitize_callback' => 'sanitize_text_field',
			) );

			/**
			 *
			 * Recent Products
			 *
			 */

			$wp_customize->add_setting( 'dox_homepage_products_recent_heading', array(
				'default'           => '',
				'sanitize_callback' => 'sanitize_text_field',
			) );
			$wp_customize->add_setting( 'dox_homepage_products_recent', array(
				'default'           => 'enabled',
				'sanitize_callback' => 'sanitize_text_field',
			) );
			$wp_customize->add_setting( 'dox_homepage_products_recent_title', array(
				'default'           => esc_html__( 'Latest Products', 'dox' ),
				'sanitize_callback' => 'sanitize_text_field',
			) );
			$wp_customize->selective_refresh->add_partial( 'dox_homepage_products_recent_title', array(
				'selector' => '.cs-products-recent-title'
			) );
			$wp_customize->add_setting( 'dox_homepage_products_recent_content', array(
				'default'           => '',
				'transport'         => 'refresh',
				'sanitize_callback' => 'wp_kses_post',
			) );
			$wp_customize->selective_refresh->add_partial( 'dox_homepage_products_recent_content', array(
				'selector' => '.cs-products-recent-content'
			) );
			$wp_customize->add_setting( 'dox_homepage_products_recent_count', array(
				'default'           => dox_default( 'dox_homepage_products_recent_count' ),
				'sanitize_callback' => 'sanitize_text_field',
			) );

		}

		/**
		 *
		 * Order of Sections
		 *
		 */

		$wp_customize->add_setting( 'dox_homepage_order_of_sections', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_homepage_carousel_order', array(
			'default'           => dox_default( 'dox_homepage_carousel_order' ),
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_homepage_about_order', array(
			'default'           => dox_default( 'dox_homepage_about_order' ),
			'sanitize_callback' => 'sanitize_text_field',
		) );
		if ( post_type_exists( 'project' ) ) {
			$wp_customize->add_setting( 'dox_homepage_projects_order', array(
				'default'           => dox_default( 'dox_homepage_projects_order' ),
				'sanitize_callback' => 'sanitize_text_field',
			) );
		}
		if ( post_type_exists( 'album' ) ) {
			$wp_customize->add_setting( 'dox_homepage_albums_order', array(
				'default'           => dox_default( 'dox_homepage_albums_order' ),
				'sanitize_callback' => 'sanitize_text_field',
			) );
		}
		if ( post_type_exists( 'event' ) ) {
			$wp_customize->add_setting( 'dox_homepage_events_order', array(
				'default'           => dox_default( 'dox_homepage_events_order' ),
				'sanitize_callback' => 'sanitize_text_field',
			) );
		}
		if ( post_type_exists( 'gallery' ) ) {
			$wp_customize->add_setting( 'dox_homepage_galleries_order', array(
				'default'           => dox_default( 'dox_homepage_galleries_order' ),
				'sanitize_callback' => 'sanitize_text_field',
			) );
		}
		$wp_customize->add_setting( 'dox_homepage_posts_order', array(
			'default'           => dox_default( 'dox_homepage_posts_order' ),
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_homepage_categories_order', array(
			'default'           => dox_default( 'dox_homepage_categories_order' ),
			'sanitize_callback' => 'sanitize_text_field',
		) );
		if ( forqy_woocommerce_activated() ) {
			$wp_customize->add_setting( 'dox_homepage_products_featured_order', array(
				'default'           => dox_default( 'dox_homepage_products_featured_order' ),
				'sanitize_callback' => 'sanitize_text_field',
			) );
			$wp_customize->add_setting( 'dox_homepage_products_recent_order', array(
				'default'           => dox_default( 'dox_homepage_products_recent_order' ),
				'sanitize_callback' => 'sanitize_text_field',
			) );
		}

	}

	add_action( 'customize_register', 'dox_customize_add_settings_homepage' );

}

/*
----------------------------------------------------------------------------------------------------
Add Controls
----------------------------------------------------------------------------------------------------
*/

if ( ! function_exists( 'dox_customize_add_controls_homepage' ) ) {

	function dox_customize_add_controls_homepage( $wp_customize ) {

		/**
		 *
		 * Carousel
		 *
		 */

		if ( class_exists( 'forqy_Customize_Heading_Control' ) ) {
			$wp_customize->add_control( new forqy_Customize_Heading_Control( $wp_customize, 'dox_homepage_carousel_heading', array(
				'label'   => esc_html__( 'Carousel', 'dox' ),
				'type'    => 'heading',
				'section' => 'homepage',
			) ) );
		}
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_homepage_carousel', array(
			'label'       => esc_html__( 'Carousel', 'dox' ),
			'description' => esc_html__( 'Enable/disable displaying of the section on the homepage.', 'dox' ),
			'settings'    => 'dox_homepage_carousel',
			'section'     => 'homepage',
			'type'        => 'select',
			'choices'     => array(
				'enabled'  => esc_html__( 'Enabled', 'dox' ),
				'disabled' => esc_html__( 'Disabled', 'dox' ),
			),
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_homepage_carousel_type', array(
			'label'       => esc_html__( 'Type of Posts', 'dox' ),
			'settings'    => 'dox_homepage_carousel_type',
			'section'     => 'homepage',
			'type'        => 'select',
			'choices'     => dox_customize_type_options()
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_homepage_carousel_type_count', array(
			'label'       => esc_html__( 'Number of Items', 'dox' ),
			'settings'    => 'dox_homepage_carousel_type_count',
			'section'     => 'homepage',
			'type'        => 'number',
			'input_attrs' => array(
				'min'  => - 1,
				'max'  => 20,
				'step' => 1,
			),
		) ) );

		/**
		 *
		 * About
		 *
		 */

		if ( class_exists( 'forqy_Customize_Heading_Control' ) ) {
			$wp_customize->add_control( new forqy_Customize_Heading_Control( $wp_customize, 'dox_homepage_about_heading', array(
				'label'   => esc_html__( 'About', 'dox' ),
				'type'    => 'heading',
				'section' => 'homepage',
			) ) );
		}
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_homepage_about', array(
			'label'       => esc_html__( 'About', 'dox' ),
			'description' => esc_html__( 'Enable/disable displaying of the section on the homepage.', 'dox' ),
			'settings'    => 'dox_homepage_about',
			'section'     => 'homepage',
			'type'        => 'select',
			'choices'     => array(
				'enabled'  => esc_html__( 'Enabled', 'dox' ),
				'disabled' => esc_html__( 'Disabled', 'dox' ),
			),
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_homepage_about_button_first', array(
			'label'    => '1. ' . esc_html__( 'Button', 'dox' ),
			'settings' => 'dox_homepage_about_button_first',
			'section'  => 'homepage',
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_homepage_about_button_first_page', array(
			'label'       => '1. ' . esc_html__( 'Button Page', 'dox' ),
			'description' => esc_html__( 'Assign the target page of the button.', 'dox' ),
			'settings'    => 'dox_homepage_about_button_first_page',
			'section'     => 'homepage',
			'type'        => 'dropdown-pages',
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_homepage_about_button_second', array(
			'label'    => '2. ' . esc_html__( 'Button', 'dox' ),
			'settings' => 'dox_homepage_about_button_second',
			'section'  => 'homepage',
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_homepage_about_button_second_page', array(
			'label'       => '2. ' . esc_html__( 'Button Page', 'dox' ),
			'description' => esc_html__( 'Assign the target page of the button.', 'dox' ),
			'settings'    => 'dox_homepage_about_button_second_page',
			'section'     => 'homepage',
			'type'        => 'dropdown-pages',
		) ) );

		if ( post_type_exists( 'project' ) ) {

			/**
			 *
			 * Projects
			 *
			 */

			if ( class_exists( 'forqy_Customize_Heading_Control' ) ) {
				$wp_customize->add_control( new forqy_Customize_Heading_Control( $wp_customize, 'dox_homepage_projects_heading', array(
					'label'   => esc_html__( 'Projects', 'dox' ),
					'type'    => 'heading',
					'section' => 'homepage',
				) ) );
			}
			$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_homepage_projects', array(
				'label'       => esc_html__( 'Projects', 'dox' ),
				'description' => esc_html__( 'Enable/disable displaying of the section on the homepage.', 'dox' ),
				'settings'    => 'dox_homepage_projects',
				'section'     => 'homepage',
				'type'        => 'select',
				'choices'     => array(
					'enabled'  => esc_html__( 'Enabled', 'dox' ),
					'disabled' => esc_html__( 'Disabled', 'dox' ),
				),
			) ) );
			$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_homepage_projects_title', array(
				'label'       => esc_html__( 'Title', 'dox' ),
				'settings'    => 'dox_homepage_projects_title',
				'section'     => 'homepage',
			) ) );
			$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_homepage_projects_content', array(
				'label'       => esc_html__( 'Content', 'dox' ),
				'settings'    => 'dox_homepage_projects_content',
				'section'     => 'homepage',
				'type'        => 'textarea',
			) ) );
			$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_homepage_projects_count', array(
				'label'       => esc_html__( 'Number of Items', 'dox' ),
				'settings'    => 'dox_homepage_projects_count',
				'section'     => 'homepage',
				'type'        => 'number',
				'input_attrs' => array(
					'min'  => - 1,
					'max'  => 20,
					'step' => 1,
				),
			) ) );
			$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_homepage_projects_button', array(
				'label'    => esc_html__( 'Button', 'dox' ),
				'settings' => 'dox_homepage_projects_button',
				'section'  => 'homepage',
			) ) );
			$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_homepage_projects_button_page', array(
				'label'       => esc_html__( 'Button Page', 'dox' ),
				'description' => esc_html__( 'Assign the target page of the button.', 'dox' ),
				'settings'    => 'dox_homepage_projects_button_page',
				'section'     => 'homepage',
				'type'        => 'dropdown-pages',
			) ) );

		}

		if ( post_type_exists( 'album' ) ) {

			/**
			 *
			 * Albums
			 *
			 */

			if ( class_exists( 'forqy_Customize_Heading_Control' ) ) {
				$wp_customize->add_control( new forqy_Customize_Heading_Control( $wp_customize, 'dox_homepage_albums_heading', array(
					'label'   => esc_html__( 'Albums', 'dox' ),
					'type'    => 'heading',
					'section' => 'homepage',
				) ) );
			}
			$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_homepage_albums', array(
				'label'       => esc_html__( 'Albums', 'dox' ),
				'description' => esc_html__( 'Enable/disable displaying of the section on the homepage.', 'dox' ),
				'settings'    => 'dox_homepage_albums',
				'section'     => 'homepage',
				'type'        => 'select',
				'choices'     => array(
					'enabled'  => esc_html__( 'Enabled', 'dox' ),
					'disabled' => esc_html__( 'Disabled', 'dox' ),
				),
			) ) );
			$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_homepage_albums_title', array(
				'label'       => esc_html__( 'Title', 'dox' ),
				'settings'    => 'dox_homepage_albums_title',
				'section'     => 'homepage',
			) ) );
			$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_homepage_albums_content', array(
				'label'       => esc_html__( 'Content', 'dox' ),
				'settings'    => 'dox_homepage_albums_content',
				'section'     => 'homepage',
				'type'        => 'textarea',
			) ) );
			$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_homepage_albums_count', array(
				'label'       => esc_html__( 'Number of Items', 'dox' ),
				'settings'    => 'dox_homepage_albums_count',
				'section'     => 'homepage',
				'type'        => 'number',
				'input_attrs' => array(
					'min'  => - 1,
					'max'  => 20,
					'step' => 1,
				),
			) ) );
			$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_homepage_albums_button', array(
				'label'    => esc_html__( 'Button', 'dox' ),
				'settings' => 'dox_homepage_albums_button',
				'section'  => 'homepage',
			) ) );
			$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_homepage_albums_button_page', array(
				'label'       => esc_html__( 'Button Page', 'dox' ),
				'description' => esc_html__( 'Assign the target page of the button.', 'dox' ),
				'settings'    => 'dox_homepage_albums_button_page',
				'section'     => 'homepage',
				'type'        => 'dropdown-pages',
			) ) );

		}

		if ( post_type_exists( 'event' ) ) {

			/**
			 *
			 * Events
			 *
			 */

			if ( class_exists( 'forqy_Customize_Heading_Control' ) ) {
				$wp_customize->add_control( new forqy_Customize_Heading_Control( $wp_customize, 'dox_homepage_events_heading', array(
					'label'   => esc_html__( 'Events', 'dox' ),
					'type'    => 'heading',
					'section' => 'homepage',
				) ) );
			}
			$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_homepage_events', array(
				'label'       => esc_html__( 'Events', 'dox' ),
				'description' => esc_html__( 'Enable/disable displaying of the section on the homepage.', 'dox' ),
				'settings'    => 'dox_homepage_events',
				'section'     => 'homepage',
				'type'        => 'select',
				'choices'     => array(
					'enabled'  => esc_html__( 'Enabled', 'dox' ),
					'disabled' => esc_html__( 'Disabled', 'dox' ),
				),
			) ) );
			$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_homepage_events_title', array(
				'label'       => esc_html__( 'Title', 'dox' ),
				'settings'    => 'dox_homepage_events_title',
				'section'     => 'homepage',
			) ) );
			$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_homepage_events_content', array(
				'label'       => esc_html__( 'Content', 'dox' ),
				'settings'    => 'dox_homepage_events_content',
				'section'     => 'homepage',
				'type'        => 'textarea',
			) ) );
			$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_homepage_events_count', array(
				'label'       => esc_html__( 'Number of Items', 'dox' ),
				'settings'    => 'dox_homepage_events_count',
				'section'     => 'homepage',
				'type'        => 'number',
				'input_attrs' => array(
					'min'  => - 1,
					'max'  => 20,
					'step' => 1,
				),
			) ) );
			$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_homepage_events_button', array(
				'label'    => esc_html__( 'Button', 'dox' ),
				'settings' => 'dox_homepage_events_button',
				'section'  => 'homepage',
			) ) );
			$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_homepage_events_button_page', array(
				'label'       => esc_html__( 'Button Page', 'dox' ),
				'description' => esc_html__( 'Assign the target page of the button.', 'dox' ),
				'settings'    => 'dox_homepage_events_button_page',
				'section'     => 'homepage',
				'type'        => 'dropdown-pages',
			) ) );

		}

		if ( post_type_exists( 'gallery' ) ) {

			/**
			 *
			 * Galleries
			 *
			 */

			if ( class_exists( 'forqy_Customize_Heading_Control' ) ) {
				$wp_customize->add_control( new forqy_Customize_Heading_Control( $wp_customize, 'dox_homepage_galleries_heading', array(
					'label'   => esc_html__( 'Galleries', 'dox' ),
					'type'    => 'heading',
					'section' => 'homepage',
				) ) );
			}
			$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_homepage_galleries', array(
				'label'       => esc_html__( 'Galleries', 'dox' ),
				'description' => esc_html__( 'Enable/disable displaying of the section on the homepage.', 'dox' ),
				'settings'    => 'dox_homepage_galleries',
				'section'     => 'homepage',
				'type'        => 'select',
				'choices'     => array(
					'enabled'  => esc_html__( 'Enabled', 'dox' ),
					'disabled' => esc_html__( 'Disabled', 'dox' ),
				),
			) ) );
			$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_homepage_galleries_title', array(
				'label'       => esc_html__( 'Title', 'dox' ),
				'settings'    => 'dox_homepage_galleries_title',
				'section'     => 'homepage',
			) ) );
			$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_homepage_galleries_content', array(
				'label'       => esc_html__( 'Content', 'dox' ),
				'settings'    => 'dox_homepage_galleries_content',
				'section'     => 'homepage',
				'type'        => 'textarea',
			) ) );
			$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_homepage_galleries_count', array(
				'label'       => esc_html__( 'Number of Items', 'dox' ),
				'settings'    => 'dox_homepage_galleries_count',
				'section'     => 'homepage',
				'type'        => 'number',
				'input_attrs' => array(
					'min'  => - 1,
					'max'  => 20,
					'step' => 1,
				),
			) ) );
			$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_homepage_galleries_button', array(
				'label'    => esc_html__( 'Button', 'dox' ),
				'settings' => 'dox_homepage_galleries_button',
				'section'  => 'homepage',
			) ) );
			$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_homepage_galleries_button_page', array(
				'label'       => esc_html__( 'Button Page', 'dox' ),
				'description' => esc_html__( 'Assign the target page of the button.', 'dox' ),
				'settings'    => 'dox_homepage_galleries_button_page',
				'section'     => 'homepage',
				'type'        => 'dropdown-pages',
			) ) );

		}

		/**
		 *
		 * Posts
		 *
		 */

		if ( class_exists( 'forqy_Customize_Heading_Control' ) ) {
			$wp_customize->add_control( new forqy_Customize_Heading_Control( $wp_customize, 'dox_homepage_posts_heading', array(
				'label'   => esc_html__( 'Posts', 'dox' ),
				'type'    => 'heading',
				'section' => 'homepage',
			) ) );
		}
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_homepage_posts', array(
			'label'       => esc_html__( 'Posts', 'dox' ),
			'description' => esc_html__( 'Enable/disable displaying of the section on the homepage.', 'dox' ),
			'settings'    => 'dox_homepage_posts',
			'section'     => 'homepage',
			'type'        => 'select',
			'choices'     => array(
				'enabled'  => esc_html__( 'Enabled', 'dox' ),
				'disabled' => esc_html__( 'Disabled', 'dox' ),
			),
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_homepage_posts_title', array(
			'label'       => esc_html__( 'Title', 'dox' ),
			'settings'    => 'dox_homepage_posts_title',
			'section'     => 'homepage',
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_homepage_posts_content', array(
			'label'       => esc_html__( 'Content', 'dox' ),
			'settings'    => 'dox_homepage_posts_content',
			'section'     => 'homepage',
			'type'        => 'textarea',
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_homepage_posts_count', array(
			'label'       => esc_html__( 'Number of Items', 'dox' ),
			'settings'    => 'dox_homepage_posts_count',
			'section'     => 'homepage',
			'type'        => 'number',
			'input_attrs' => array(
				'min'  => - 1,
				'max'  => 20,
				'step' => 1,
			),
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_homepage_posts_button', array(
			'label'    => esc_html__( 'Button', 'dox' ),
			'settings' => 'dox_homepage_posts_button',
			'section'  => 'homepage',
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_homepage_posts_button_page', array(
			'label'       => esc_html__( 'Button Page', 'dox' ),
			'description' => esc_html__( 'Assign the target page of the button.', 'dox' ),
			'settings'    => 'dox_homepage_posts_button_page',
			'section'     => 'homepage',
			'type'        => 'dropdown-pages',
		) ) );

		/**
		 *
		 * Categories
		 *
		 */

		if ( class_exists( 'forqy_Customize_Heading_Control' ) ) {
			$wp_customize->add_control( new forqy_Customize_Heading_Control( $wp_customize, 'dox_homepage_categories_heading', array(
				'label'   => esc_html__( 'Categories', 'dox' ),
				'type'    => 'heading',
				'section' => 'homepage',
			) ) );
		}
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_homepage_categories', array(
			'label'       => esc_html__( 'Categories', 'dox' ),
			'description' => esc_html__( 'Enable/disable displaying of the section on the homepage.', 'dox' ),
			'settings'    => 'dox_homepage_categories',
			'section'     => 'homepage',
			'type'        => 'select',
			'choices'     => array(
				'enabled'  => esc_html__( 'Enabled', 'dox' ),
				'disabled' => esc_html__( 'Disabled', 'dox' ),
			),
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_homepage_categories_tax', array(
			'label'       => esc_html__( 'Taxonomy', 'dox' ),
			'description' => esc_html__( 'Select the taxonomy to display.', 'dox' ),
			'settings'    => 'dox_homepage_categories_tax',
			'section'     => 'homepage',
			'type'        => 'select',
			'choices'     => dox_customize_taxonomy_options(),
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_homepage_categories_title', array(
			'label'       => esc_html__( 'Title', 'dox' ),
			'settings'    => 'dox_homepage_categories_title',
			'section'     => 'homepage',
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_homepage_categories_content', array(
			'label'       => esc_html__( 'Content', 'dox' ),
			'settings'    => 'dox_homepage_categories_content',
			'section'     => 'homepage',
			'type'        => 'textarea',
		) ) );

		if ( forqy_woocommerce_activated() ) {

			/**
			 *
			 * Featured Products
			 *
			 */

			if ( class_exists( 'forqy_Customize_Heading_Control' ) ) {
				$wp_customize->add_control( new forqy_Customize_Heading_Control( $wp_customize, 'dox_homepage_products_featured_heading', array(
					'label'   => esc_html__( 'Featured Products', 'dox' ),
					'type'    => 'heading',
					'section' => 'homepage',
				) ) );
			}
			$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_homepage_products_featured', array(
				'label'       => esc_html__( 'Featured Products', 'dox' ),
				'description' => esc_html__( 'Enable/disable displaying of the section on the homepage.', 'dox' ),
				'settings'    => 'dox_homepage_products_featured',
				'section'     => 'homepage',
				'type'        => 'select',
				'choices'     => array(
					'enabled'  => esc_html__( 'Enabled', 'dox' ),
					'disabled' => esc_html__( 'Disabled', 'dox' ),
				),
			) ) );
			$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_homepage_products_featured_title', array(
				'label'       => esc_html__( 'Title', 'dox' ),
				'settings'    => 'dox_homepage_products_featured_title',
				'section'     => 'homepage',
			) ) );
			$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_homepage_products_featured_content', array(
				'label'       => esc_html__( 'Content', 'dox' ),
				'settings'    => 'dox_homepage_products_featured_content',
				'section'     => 'homepage',
				'type'        => 'textarea',
			) ) );
			$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_homepage_products_featured_count', array(
				'label'       => esc_html__( 'Number of Items', 'dox' ),
				'settings'    => 'dox_homepage_products_featured_count',
				'section'     => 'homepage',
				'type'        => 'number',
				'input_attrs' => array(
					'min'  => - 1,
					'max'  => 20,
					'step' => 1,
				),
			) ) );

			/**
			 *
			 * Recent Products
			 *
			 */

			if ( class_exists( 'forqy_Customize_Heading_Control' ) ) {
				$wp_customize->add_control( new forqy_Customize_Heading_Control( $wp_customize, 'dox_homepage_products_recent_heading', array(
					'label'   => esc_html__( 'Recent Products', 'dox' ),
					'type'    => 'heading',
					'section' => 'homepage',
				) ) );
			}
			$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_homepage_products_recent', array(
				'label'       => esc_html__( 'Recent Products', 'dox' ),
				'description' => esc_html__( 'Enable/disable displaying of the section on the homepage.', 'dox' ),
				'settings'    => 'dox_homepage_products_recent',
				'section'     => 'homepage',
				'type'        => 'select',
				'choices'     => array(
					'enabled'  => esc_html__( 'Enabled', 'dox' ),
					'disabled' => esc_html__( 'Disabled', 'dox' ),
				),
			) ) );
			$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_homepage_products_recent_title', array(
				'label'       => esc_html__( 'Title', 'dox' ),
				'settings'    => 'dox_homepage_products_recent_title',
				'section'     => 'homepage',
			) ) );
			$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_homepage_products_recent_content', array(
				'label'       => esc_html__( 'Content', 'dox' ),
				'settings'    => 'dox_homepage_products_recent_content',
				'section'     => 'homepage',
				'type'        => 'textarea',
			) ) );
			$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_homepage_products_recent_count', array(
				'label'       => esc_html__( 'Number of Items', 'dox' ),
				'settings'    => 'dox_homepage_products_recent_count',
				'section'     => 'homepage',
				'type'        => 'number',
				'input_attrs' => array(
					'min'  => - 1,
					'max'  => 20,
					'step' => 1,
				),
			) ) );

		}

		/**
		 *
		 * Order of Sections
		 *
		 */

		if ( class_exists( 'forqy_Customize_Heading_Control' ) ) {
			$wp_customize->add_control( new forqy_Customize_Heading_Control( $wp_customize, 'dox_homepage_order_of_sections', array(
				'label'   => esc_html__( 'Order of Sections', 'dox' ),
				'type'    => 'heading',
				'section' => 'homepage',
			) ) );
		}
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_homepage_carousel_order', array(
			'label'       => esc_html__( 'Carousel', 'dox' ),
			'settings'    => 'dox_homepage_carousel_order',
			'section'     => 'homepage',
			'type'        => 'number',
			'input_attrs' => array(
				'min'  => 0,
				'step' => 1,
			),
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_homepage_about_order', array(
			'label'       => esc_html__( 'About', 'dox' ),
			'settings'    => 'dox_homepage_about_order',
			'section'     => 'homepage',
			'type'        => 'number',
			'input_attrs' => array(
				'min'  => 0,
				'step' => 1,
			),
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_homepage_projects_order', array(
			'label'       => esc_html__( 'Projects', 'dox' ),
			'settings'    => 'dox_homepage_projects_order',
			'section'     => 'homepage',
			'type'        => 'number',
			'input_attrs' => array(
				'min'  => 0,
				'step' => 1,
			),
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_homepage_albums_order', array(
			'label'       => esc_html__( 'Albums', 'dox' ),
			'settings'    => 'dox_homepage_albums_order',
			'section'     => 'homepage',
			'type'        => 'number',
			'input_attrs' => array(
				'min'  => 0,
				'step' => 1,
			),
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_homepage_events_order', array(
			'label'       => esc_html__( 'Events', 'dox' ),
			'settings'    => 'dox_homepage_events_order',
			'section'     => 'homepage',
			'type'        => 'number',
			'input_attrs' => array(
				'min'  => 0,
				'step' => 1,
			),
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_homepage_galleries_order', array(
			'label'       => esc_html__( 'Galleries', 'dox' ),
			'settings'    => 'dox_homepage_galleries_order',
			'section'     => 'homepage',
			'type'        => 'number',
			'input_attrs' => array(
				'min'  => 0,
				'step' => 1,
			),
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_homepage_posts_order', array(
			'label'       => esc_html__( 'Posts', 'dox' ),
			'settings'    => 'dox_homepage_posts_order',
			'section'     => 'homepage',
			'type'        => 'number',
			'input_attrs' => array(
				'min'  => 0,
				'step' => 1,
			),
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_homepage_categories_order', array(
			'label'       => esc_html__( 'Categories', 'dox' ),
			'settings'    => 'dox_homepage_categories_order',
			'section'     => 'homepage',
			'type'        => 'number',
			'input_attrs' => array(
				'min'  => 0,
				'step' => 1,
			),
		) ) );

		if ( forqy_woocommerce_activated() ) {

			$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_homepage_products_featured_order', array(
				'label'       => esc_html__( 'Featured Products', 'dox' ),
				'settings'    => 'dox_homepage_products_featured_order',
				'section'     => 'homepage',
				'type'        => 'number',
				'input_attrs' => array(
					'min'  => 0,
					'step' => 1,
				),
			) ) );
			$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_homepage_products_recent_order', array(
				'label'       => esc_html__( 'Recent Products', 'dox' ),
				'settings'    => 'dox_homepage_products_recent_order',
				'section'     => 'homepage',
				'type'        => 'number',
				'input_attrs' => array(
					'min'  => 0,
					'step' => 1,
				),
			) ) );

		}

	}

	add_action( 'customize_register', 'dox_customize_add_controls_homepage' );

}
