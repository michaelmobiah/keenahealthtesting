<?php

/*

Customize About

*/

/*
----------------------------------------------------------------------------------------------------
Add Section
----------------------------------------------------------------------------------------------------
*/

if ( ! function_exists( 'dox_customize_add_section_about' ) ) {

	function dox_customize_add_section_about( $wp_customize ) {

		$wp_customize->add_section( 'about', array(
			'title'       => esc_html__( 'About', 'dox' ),
			'description' => esc_html__( 'Set up information about you and your business.', 'dox' ),
			'panel'       => 'theme',
			'priority'    => 20,
		) );

	}

	add_action( 'customize_register', 'dox_customize_add_section_about' );

}

/*
----------------------------------------------------------------------------------------------------
Add Settings
----------------------------------------------------------------------------------------------------
*/

if ( ! function_exists( 'dox_customize_add_settings_about' ) ) {

	function dox_customize_add_settings_about( $wp_customize ) {

		// Type

		$wp_customize->add_setting( 'dox_website_type', array(
			'default'           => dox_default( 'dox_website_type' ),
			'sanitize_callback' => 'sanitize_text_field',
		) );

		// About

		$wp_customize->add_setting( 'dox_about_heading', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );

		$wp_customize->add_setting( 'dox_about_headline', array(
			'default'           => '',
			'transport'         => 'refresh',
			'sanitize_callback' => 'wp_kses_post',
		) );
		$wp_customize->selective_refresh->add_partial( 'dox_about_headline', array(
			'selector' => '.cs-section-about-header'
		) );

		$wp_customize->add_setting( 'dox_about_description', array(
			'default'           => '',
			'transport'         => 'refresh',
			'sanitize_callback' => 'wp_kses_post',
		) );
		$wp_customize->selective_refresh->add_partial( 'dox_about_description', array(
			'selector' => '.cs-section-about-description'
		) );

		$wp_customize->add_setting( 'dox_about_content', array(
			'default'           => '',
			'transport'         => 'refresh',
			'sanitize_callback' => 'wp_kses_post',
		) );
		$wp_customize->selective_refresh->add_partial( 'dox_about_content', array(
			'selector' => '.cs-section-about-content'
		) );

		// Images
		$wp_customize->add_setting( 'dox_about_image', array(
			'default'           => '',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->selective_refresh->add_partial( 'dox_about_image', array(
			'selector' => '.cs-section-about-image'
		) );
		$wp_customize->add_setting( 'dox_about_image_2', array(
			'default'           => '',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->selective_refresh->add_partial( 'dox_about_image_2', array(
			'selector' => '.cs-section-about-image-2'
		) );
		$wp_customize->add_setting( 'dox_about_image_3', array(
			'default'           => '',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->selective_refresh->add_partial( 'dox_about_image_3', array(
			'selector' => '.cs-section-about-image-3'
		) );

		// Contact
		$wp_customize->add_setting( 'dox_about_contact_heading', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_about_email', array(
			'default'           => '',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_email',
		) );
		$wp_customize->add_setting( 'dox_about_phone', array(
			'default'           => '',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );

		// Address
		$wp_customize->add_setting( 'dox_about_address_heading', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_about_address_street', array(
			'default'           => '',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_about_address_postal', array(
			'default'           => '',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_about_address_city', array(
			'default'           => '',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_about_address_country', array(
			'default'           => '',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );

		// Restaurant
		$wp_customize->add_setting( 'dox_about_restaurant_heading', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_about_hours', array(
			'default'           => '',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_about_cuisine', array(
			'default'           => '',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_about_price', array(
			'default'           => 'none',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_about_payment', array(
			'default'           => esc_html__( 'Cash, Credit Card', 'dox' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_about_reservations', array(
			'default'           => esc_html__( 'Yes', 'dox' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_about_menu', array(
			'default'           => '0',
			'sanitize_callback' => 'sanitize_text_field',
		) );

		// Publisher
		$wp_customize->add_setting( 'dox_about_publisher_heading', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_about_publisher', array(
			'default'           => get_bloginfo( 'name' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_about_publisher_logo', array(
			'default'           => '',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );

		// Settings
		$wp_customize->add_setting( 'dox_about_settings_heading', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_setting( 'dox_about_currency', array(
			'default'           => dox_default( 'dox_about_currency' ),
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );

	}

	add_action( 'customize_register', 'dox_customize_add_settings_about' );

}

/*
----------------------------------------------------------------------------------------------------
Add Controls
----------------------------------------------------------------------------------------------------
*/

if ( ! function_exists( 'dox_customize_add_controls_about' ) ) {

	function dox_customize_add_controls_about( $wp_customize ) {

		// Type

		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_website_type', array(
			'label'       => esc_html__( 'Website Type', 'dox' ),
			'description' => esc_html__( 'Select a type of the website.', 'dox' ),
			'settings'    => 'dox_website_type',
			'section'     => 'about',
			'type'        => 'select',
			'choices'     => array(
				'business'   => esc_html__( 'Business', 'dox' ),
				'person'     => esc_html__( 'Personal', 'dox' ),
				'restaurant' => esc_html__( 'Restaurant', 'dox' ),
				'music'      => esc_html__( 'Music', 'dox' ),
			),
		) ) );

		// About

		if ( class_exists( 'forqy_Customize_Heading_Control' ) ) {
			$wp_customize->add_control( new forqy_Customize_Heading_Control( $wp_customize, 'dox_about_heading', array(
				'label'   => esc_html__( 'About', 'dox' ),
				'type'    => 'heading',
				'section' => 'about',
			) ) );
		}

		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_about_headline', array(
			'label'       => esc_html__( 'Headline', 'dox' ),
			'description' => esc_html__( 'Fill in the headline.', 'dox' ),
			'settings'    => 'dox_about_headline',
			'section'     => 'about',
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_about_description', array(
			'label'       => esc_html__( 'Description', 'dox' ),
			'description' => esc_html__( 'Fill in the short description.', 'dox' ),
			'settings'    => 'dox_about_description',
			'section'     => 'about',
			'type'        => 'textarea',
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_about_content', array(
			'label'       => esc_html__( 'Content', 'dox' ),
			'description' => esc_html__( 'Fill in the custom content. Shortcodes are enabled.', 'dox' ),
			'settings'    => 'dox_about_content',
			'section'     => 'about',
			'type'        => 'textarea',
		) ) );

		// Images
		$wp_customize->add_control( new WP_Customize_Upload_Control( $wp_customize, 'dox_about_image', array(
			'label'       => esc_html__( 'Image', 'dox' ),
			'description' => esc_html__( 'Upload a representative image. Required size at least 1600px of width.', 'dox' ),
			'settings'    => 'dox_about_image',
			'section'     => 'about',
		) ) );
		$wp_customize->add_control( new WP_Customize_Upload_Control( $wp_customize, 'dox_about_image_2', array(
			'label'       => esc_html__( 'Image', 'dox' ) . '2',
			'description' => esc_html__( 'Upload a representative image. Required size at least 800px of width.', 'dox' ),
			'settings'    => 'dox_about_image_2',
			'section'     => 'about',
		) ) );
		$wp_customize->add_control( new WP_Customize_Upload_Control( $wp_customize, 'dox_about_image_3', array(
			'label'       => esc_html__( 'Image', 'dox' ) . '3',
			'description' => esc_html__( 'Upload a representative image. Required size at least 800px of width.', 'dox' ),
			'settings'    => 'dox_about_image_3',
			'section'     => 'about',
		) ) );

		// Contact
		if ( class_exists( 'forqy_Customize_Heading_Control' ) ) {
			$wp_customize->add_control( new forqy_Customize_Heading_Control( $wp_customize, 'dox_about_contact_heading', array(
				'label'   => esc_html__( 'Contact', 'dox' ),
				'type'    => 'heading',
				'section' => 'about',
			) ) );
		}
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_about_email', array(
			'label'    => esc_html__( 'Email', 'dox' ),
			'settings' => 'dox_about_email',
			'type'     => 'email',
			'section'  => 'about',
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_about_phone', array(
			'label'    => esc_html__( 'Phone', 'dox' ),
			'settings' => 'dox_about_phone',
			'type'     => 'tel',
			'section'  => 'about',
		) ) );

		// Address
		if ( class_exists( 'forqy_Customize_Heading_Control' ) ) {
			$wp_customize->add_control( new forqy_Customize_Heading_Control( $wp_customize, 'dox_about_address_heading', array(
				'label'   => esc_html__( 'Address', 'dox' ),
				'type'    => 'heading',
				'section' => 'about',
			) ) );
		}
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_about_address_street', array(
			'label'    => esc_html__( 'Street', 'dox' ),
			'settings' => 'dox_about_address_street',
			'section'  => 'about',
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_about_address_postal', array(
			'label'    => esc_html__( 'Postal Code', 'dox' ),
			'settings' => 'dox_about_address_postal',
			'section'  => 'about',
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_about_address_city', array(
			'label'    => esc_html__( 'City', 'dox' ),
			'settings' => 'dox_about_address_city',
			'section'  => 'about',
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_about_address_country', array(
			'label'    => esc_html__( 'Country', 'dox' ),
			'settings' => 'dox_about_address_country',
			'section'  => 'about',
		) ) );

		// Restaurant
		if ( class_exists( 'forqy_Customize_Heading_Control' ) ) {
			$wp_customize->add_control( new forqy_Customize_Heading_Control( $wp_customize, 'dox_about_restaurant_heading', array(
				'label'   => esc_html__( 'Restaurant', 'dox' ),
				'type'    => 'heading',
				'section' => 'about',
			) ) );
		}
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_about_hours', array(
			'label'       => esc_html__( 'Hours', 'dox' ),
			'description' => esc_html__( 'Fill in the short opening hours.', 'dox' ),
			'settings'    => 'dox_about_hours',
			'section'     => 'about',
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_about_cuisine', array(
			'label'       => esc_html__( 'Cuisine', 'dox' ),
			'description' => esc_html__( 'Fill in the cuisine of the restaurant. Multiple cuisines separate with commas.', 'dox' ),
			'settings'    => 'dox_about_cuisine',
			'section'     => 'about',
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_about_price', array(
			'label'    => esc_html__( 'Price Range', 'dox' ),
			'settings' => 'dox_about_price',
			'section'  => 'about',
			'type'     => 'select',
			'choices'  => array(
				'none' => esc_html__( 'None', 'dox' ),
				'$'    => '$ ($1 - $10)',
				'$$'   => '$$ ($11 - $30)',
				'$$$'  => '$$$ ($31 - $60)',
				'$$$$' => '$$$$ ($61+)',
			),
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_about_payment', array(
			'label'       => esc_html__( 'Payment Options', 'dox' ),
			'description' => esc_html__( 'Fill in payment options at your restaurant. Multiple options separate with commas.', 'dox' ),
			'settings'    => 'dox_about_payment',
			'section'     => 'about',
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_about_reservations', array(
			'label'    => esc_html__( 'Accepts Reservations?', 'dox' ),
			'settings' => 'dox_about_reservations',
			'section'  => 'about',
			'type'     => 'select',
			'choices'  => array(
				'Yes' => esc_html__( 'Yes', 'dox' ),
				'No'  => esc_html__( 'No', 'dox' ),
			),
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_about_menu', array(
			'label'    => esc_html__( 'Menu Page', 'dox' ),
			'settings' => 'dox_about_menu',
			'section'  => 'about',
			'type'     => 'dropdown-pages',
		) ) );

		// Publisher
		if ( class_exists( 'forqy_Customize_Heading_Control' ) ) {
			$wp_customize->add_control( new forqy_Customize_Heading_Control( $wp_customize, 'dox_about_publisher_heading', array(
				'label'   => esc_html__( 'Publisher', 'dox' ),
				'type'    => 'heading',
				'section' => 'about',
			) ) );
		}
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_about_publisher', array(
			'label'    => esc_html__( 'Name', 'dox' ),
			'settings' => 'dox_about_publisher',
			'section'  => 'about',
		) ) );
		$wp_customize->add_control( new WP_Customize_Cropped_Image_Control( $wp_customize, 'dox_about_publisher_logo', array(
			'label'       => esc_html__( 'Logo', 'dox' ),
			'description' => esc_html__( 'Upload the logo image. The image should be 600x60 pixels.', 'dox' ),
			'settings'    => 'dox_about_publisher_logo',
			'section'     => 'about',
			'width'       => 600,
			'height'      => 60,
		) ) );

		// Settings
		if ( class_exists( 'forqy_Customize_Heading_Control' ) ) {
			$wp_customize->add_control( new forqy_Customize_Heading_Control( $wp_customize, 'dox_about_settings_heading', array(
				'label'   => esc_html__( 'Settings', 'dox' ),
				'type'    => 'heading',
				'section' => 'about',
			) ) );
		}
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dox_about_currency', array(
			'label'       => esc_html__( 'Currency', 'dox' ),
			'description' => sprintf( wp_kses( __( 'Fill in the currency in standard format <a href="%s" target="_blank">ISO 4217 currency format</a> e.g. "USD".', 'dox' ), array(
				'a' => array(
					'href'   => array(),
					'target' => array()
				)
			) ), esc_url( 'https://en.wikipedia.org/wiki/ISO_4217' ) ),
			'settings'    => 'dox_about_currency',
			'section'     => 'about',
		) ) );

	}

	add_action( 'customize_register', 'dox_customize_add_controls_about' );

}
