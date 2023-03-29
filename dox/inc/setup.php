<?php

/*

Setup

*/


const FORQY_THEME_NAME     = 'Dox';
const FORQY_THEME_SLUG     = 'dox';
const FORQY_PLUGIN_VERSION = '1.2.3';


if ( ! function_exists( 'dox_setup' ) ) {

	/**
	 * Setup
	 */
	function dox_setup() {

		// Add Custom Logo Support
		add_theme_support( 'custom-logo', array(
			'width'       => '300',
			'height'      => '144',
			'flex-width'  => true,
			'flex-height' => true,
		) );

		// Add Custom Header Support
		add_theme_support( 'custom-header', array(
			'default-image'      => '',
			'width'              => '1920',
			'height'             => '1280',
			'flex-width'         => true,
			'flex-height'        => true,
			'uploads'            => true,
			'random-default'     => false,
			'header-text'        => false,
			'default-text-color' => '',
		) );

		// Add Custom Background Support
		add_theme_support( 'custom-background', array(
			'wp-head-callback' => 'forqy_background_custom',
		) );

		// Add Semantic Markup Support
		add_theme_support( 'html5', array(
			'navigation-widgets',
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		) );

		// Add Post Formats Support
		add_theme_support( 'post-formats', array(
			'audio',
			'video',
			'gallery',
		) );

		// Add Title Tag Support
		add_theme_support( 'title-tag' );

		// Add Post Thumbnails Support
		add_theme_support( 'post-thumbnails' );

		// Add Responsive Embeds Support
		add_theme_support( 'responsive-embeds' );

		// Add Wide Align Support
		add_theme_support( 'align-wide' );

		// Add Custom Line Height Support
		add_theme_support( 'custom-line-height' );

		// Add Custom Spacing Support
		add_theme_support( 'custom-spacing' );

		// Add Custom Units Support
		add_theme_support( 'custom-units', '%', 'px', 'em', 'rem', 'vh', 'vw' );

		// Add Automatic Feed Links Support
		add_theme_support( 'automatic-feed-links' );

		// Add Widget Customizer Support
		add_theme_support( 'widget-customizer' );

		// Add Customize Selective Refresh Support
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add Editor Styles Support
		add_theme_support( 'editor-styles' );

		// Add Editor Style
		add_editor_style( 'css/editor.css' );

		// Add Editor Colors Palette
		add_theme_support( 'editor-color-palette', array(
			array(
				'name'  => _x( 'Color', 'color name', 'dox' ),
				'slug'  => 'cnt',
				'color' => get_theme_mod( 'dox_content_color', dox_default( 'dox_content_color' ) ),
			),
			array(
				'name'  => _x( 'Color Accent', 'color name', 'dox' ),
				'slug'  => 'cnt-ac',
				'color' => get_theme_mod( 'dox_content_color_accent', dox_default( 'dox_content_color_accent' ) ),
			),
			array(
				'name'  => _x( 'Color Background', 'color name', 'dox' ),
				'slug'  => 'cnt-bg',
				'color' => get_theme_mod( 'dox_content_color_background', dox_default( 'dox_content_color_background' ) ),
			),
		) );

		// Add Editor Gradient Presets
		add_theme_support( 'editor-gradient-presets', array_merge( array(
			array(
				'name'     => esc_attr_x( 'Primary', 'gradient name', 'dox' ),
				'gradient' => 'linear-gradient(135deg, ' . get_theme_mod( 'dox_content_color', dox_default( 'dox_content_color' ) ) . ' 0%, ' . get_theme_mod( 'dox_content_color_accent', dox_default( 'dox_content_color_accent' ) ) . ' 100%)',
				'slug'     => 'primary',
			),
			array(
				'name'     => esc_attr_x( 'Secondary', 'gradient name', 'dox' ),
				'gradient' => 'linear-gradient(135deg, ' . get_theme_mod( 'dox_content_color_background', dox_default( 'dox_content_color_background' ) ) . ' 0%, ' . get_theme_mod( 'dox_content_color_accent', dox_default( 'dox_content_color_accent' ) ) . ' 100%)',
				'slug'     => 'secondary',
			),
		), function_exists( 'forqy_gutenberg_editor_gradient_presets' ) ? forqy_gutenberg_editor_gradient_presets() : array() ) );

		// Add Editor Font Sizes
		add_theme_support( 'editor-font-sizes', array(
			array(
				'name' => _x( 'Small', 'font size', 'dox' ),
				'slug' => 'small',
				'size' => 'var(--fy--font-size--small)',
			),
			array(
				'name' => _x( 'Medium', 'font size', 'dox' ),
				'slug' => 'medium',
				'size' => 'var(--fy--font-size)',
			),
			array(
				'name' => _x( 'Large', 'font size', 'dox' ),
				'slug' => 'large',
				'size' => 'var(--fy--font-size--large--fluid)',
			),
			array(
				'name' => _x( 'XLarge', 'font size', 'dox' ),
				'slug' => 'xlarge',
				'size' => 'var(--fy--font-size--xlarge--fluid)',
			),
			array(
				'name' => _x( 'XXLarge', 'font size', 'dox' ),
				'slug' => 'xxlarge',
				'size' => 'var(--fy--font-size--xxlarge--fluid)',
			),
			array(
				'name' => _x( 'Huge', 'font size', 'dox' ),
				'slug' => 'huge',
				'size' => 'var(--fy--heading--font-size--h2--fluid)',
			),
			array(
				'name' => _x( 'Gigantic', 'font size', 'dox' ),
				'slug' => 'gigantic',
				'size' => 'var(--fy--heading--font-size--h1--fluid)',
			),
		) );

		// Add Custom Spacing Support
		add_theme_support( 'custom-spacing' );

		// Add Translation Support
		load_theme_textdomain( FORQY_THEME_SLUG, trailingslashit( get_template_directory() ) . 'languages' );

		// Set Post Thumbnail Size
		set_post_thumbnail_size( 800, 800, array(
			'center',
			'center',
		) );

		/**
		 * FORQY
		 */

		// Shortcodes
		add_theme_support( 'forqy-shortcodes' );
		add_theme_support( 'forqy-shortcodes-section' );

		// Image
		add_theme_support( 'forqy-image' );
		add_theme_support( 'forqy-image-photoswipe' );

		// Socials
		add_theme_support( 'forqy-socials' );

		// Taximage
		add_theme_support( 'forqy-taximage' );

		// Video Metabox
		add_theme_support( 'forqy-metabox-video' );

		// Slide
		add_theme_support( 'forqy-slide' );
		add_theme_support( 'forqy-slide-url-target' );

		// Event
		add_theme_support( 'forqy-event' );

		/**
		 * WooCommerce
		 */

		add_theme_support( 'woocommerce', array(
			'thumbnail_image_width'         => 620,
			'single_image_width'            => 1280,
			'gallery_thumbnail_image_width' => 480,

			'product_grid' => array(
				'default_rows'    => 3,
				'min_rows'        => 2,
				'max_rows'        => 8,
				'default_columns' => 3,
				'min_columns'     => 2,
				'max_columns'     => 4,
			),
		) );

		// Gallery Zoom Support
		add_theme_support( 'wc-product-gallery-zoom' );
		// Gallery Lightbox Support
		add_theme_support( 'wc-product-gallery-lightbox' );
		// Gallery Slider Support
		add_theme_support( 'wc-product-gallery-slider' );

	}

	add_action( 'after_setup_theme', 'dox_setup' );

}

if ( ! function_exists( 'dox_prefix' ) ) {

	/**
	 * Prefix of the Theme
	 *
	 * @return string
	 */
	function dox_prefix(): string {
		return FORQY_THEME_SLUG;
	}

	add_filter( 'forqy_theme_prefix', 'dox_prefix' );

}
