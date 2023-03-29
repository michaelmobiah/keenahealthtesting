<?php

/*

Import

*/

if ( ! function_exists( 'dox_import' ) ) {

	/**
	 * Import
	 *
	 * @return array[]
	 */
	function dox_import(): array {
		return array(
			array(
				'import_file_name'           => 'Dox — Creative',
				'import_file_url'            => esc_url( 'https://dox.forqy.website/content/creative/content.xml' ),
				'import_customizer_file_url' => esc_url( 'https://dox.forqy.website/content/creative/settings.dat' ),
				'import_widget_file_url'     => esc_url( 'https://dox.forqy.website/content/creative/widgets.json' ),
				'import_preview_image_url'   => esc_url( 'https://dox.forqy.website/content/dox-creative.png' ),
				'preview_url'                => 'https://dox.forqy.website/creative/',
			),
			array(
				'import_file_name'           => 'Dox — Corporate',
				'import_file_url'            => esc_url( 'https://dox.forqy.website/content/corporate/content.xml' ),
				'import_customizer_file_url' => esc_url( 'https://dox.forqy.website/content/corporate/settings.dat' ),
				'import_widget_file_url'     => esc_url( 'https://dox.forqy.website/content/corporate/widgets.json' ),
				'import_preview_image_url'   => esc_url( 'https://dox.forqy.website/content/dox-corporate.png' ),
				'preview_url'                => 'https://dox.forqy.website/corporate/',
			),
			array(
				'import_file_name'           => 'Dox — Shop',
				'import_file_url'            => esc_url( 'https://dox.forqy.website/content/shop/content.xml' ),
				'import_customizer_file_url' => esc_url( 'https://dox.forqy.website/content/shop/settings.dat' ),
				'import_widget_file_url'     => esc_url( 'https://dox.forqy.website/content/shop/widgets.json' ),
				'import_preview_image_url'   => esc_url( 'https://dox.forqy.website/content/dox-shop.png' ),
				'preview_url'                => 'https://dox.forqy.website/shop/',
			),
			array(
				'import_file_name'           => 'Dox — Creator',
				'import_file_url'            => esc_url( 'https://dox.forqy.website/content/creator/content.xml' ),
				'import_customizer_file_url' => esc_url( 'https://dox.forqy.website/content/creator/settings.dat' ),
				'import_widget_file_url'     => esc_url( 'https://dox.forqy.website/content/creator/widgets.json' ),
				'import_preview_image_url'   => esc_url( 'https://dox.forqy.website/content/dox-creator.png' ),
				'preview_url'                => 'https://dox.forqy.website/creator/',
			),
			array(
				'import_file_name'           => 'Dox — Blog',
				'import_file_url'            => esc_url( 'https://dox.forqy.website/content/blog/content.xml' ),
				'import_customizer_file_url' => esc_url( 'https://dox.forqy.website/content/blog/settings.dat' ),
				'import_widget_file_url'     => esc_url( 'https://dox.forqy.website/content/blog/widgets.json' ),
				'import_preview_image_url'   => esc_url( 'https://dox.forqy.website/content/dox-blog.png' ),
				'preview_url'                => 'https://dox.forqy.website/blog/',
			),
			array(
				'import_file_name'           => 'Dox — Restaurant',
				'import_file_url'            => esc_url( 'https://dox.forqy.website/content/restaurant/content.xml' ),
				'import_customizer_file_url' => esc_url( 'https://dox.forqy.website/content/restaurant/settings.dat' ),
				'import_widget_file_url'     => esc_url( 'https://dox.forqy.website/content/restaurant/widgets.json' ),
				'import_preview_image_url'   => esc_url( 'https://dox.forqy.website/content/dox-restaurant.png' ),
				'preview_url'                => 'https://dox.forqy.website/restaurant/',
			),
			array(
				'import_file_name'           => 'Dox — Music',
				'import_file_url'            => esc_url( 'https://dox.forqy.website/content/music/content.xml' ),
				'import_customizer_file_url' => esc_url( 'https://dox.forqy.website/content/music/settings.dat' ),
				'import_widget_file_url'     => esc_url( 'https://dox.forqy.website/content/music/widgets.json' ),
				'import_preview_image_url'   => esc_url( 'https://dox.forqy.website/content/dox-music.png' ),
				'preview_url'                => 'https://dox.forqy.website/music/',
			),
			array(
				'import_file_name'           => 'Dox — Architecture',
				'import_file_url'            => esc_url( 'https://dox.forqy.website/content/architecture/content.xml' ),
				'import_customizer_file_url' => esc_url( 'https://dox.forqy.website/content/architecture/settings.dat' ),
				'import_widget_file_url'     => esc_url( 'https://dox.forqy.website/content/architecture/widgets.json' ),
				'import_preview_image_url'   => esc_url( 'https://dox.forqy.website/content/dox-architecture.png' ),
				'preview_url'                => 'https://dox.forqy.website/architecture/',
			),
			array(
				'import_file_name'           => 'Dox — Technology',
				'import_file_url'            => esc_url( 'https://dox.forqy.website/content/technology/content.xml' ),
				'import_customizer_file_url' => esc_url( 'https://dox.forqy.website/content/technology/settings.dat' ),
				'import_widget_file_url'     => esc_url( 'https://dox.forqy.website/content/technology/widgets.json' ),
				'import_preview_image_url'   => esc_url( 'https://dox.forqy.website/content/dox-technology.png' ),
				'preview_url'                => 'https://dox.forqy.website/technology/',
			),
			array(
				'import_file_name'           => 'Dox — Café',
				'import_file_url'            => esc_url( 'https://dox.forqy.website/content/cafe/content.xml' ),
				'import_customizer_file_url' => esc_url( 'https://dox.forqy.website/content/cafe/settings.dat' ),
				'import_widget_file_url'     => esc_url( 'https://dox.forqy.website/content/cafe/widgets.json' ),
				'import_preview_image_url'   => esc_url( 'https://dox.forqy.website/content/dox-cafe.png' ),
				'preview_url'                => 'https://dox.forqy.website/cafe/',
			),
			array(
				'import_file_name'           => 'Dox — Personal',
				'import_file_url'            => esc_url( 'https://dox.forqy.website/content/personal/content.xml' ),
				'import_customizer_file_url' => esc_url( 'https://dox.forqy.website/content/personal/settings.dat' ),
				'import_widget_file_url'     => esc_url( 'https://dox.forqy.website/content/personal/widgets.json' ),
				'import_preview_image_url'   => esc_url( 'https://dox.forqy.website/content/dox-personal.png' ),
				'preview_url'                => 'https://dox.forqy.website/personal/',
			),
			array(
				'import_file_name'           => 'Dox — Design',
				'import_file_url'            => esc_url( 'https://dox.forqy.website/content/design/content.xml' ),
				'import_customizer_file_url' => esc_url( 'https://dox.forqy.website/content/design/settings.dat' ),
				'import_widget_file_url'     => esc_url( 'https://dox.forqy.website/content/design/widgets.json' ),
				'import_preview_image_url'   => esc_url( 'https://dox.forqy.website/content/dox-design.png' ),
				'preview_url'                => 'https://dox.forqy.website/design/',
			),
			array(
				'import_file_name'           => 'Dox — Interior',
				'import_file_url'            => esc_url( 'https://dox.forqy.website/content/interior/content.xml' ),
				'import_customizer_file_url' => esc_url( 'https://dox.forqy.website/content/interior/settings.dat' ),
				'import_widget_file_url'     => esc_url( 'https://dox.forqy.website/content/interior/widgets.json' ),
				'import_preview_image_url'   => esc_url( 'https://dox.forqy.website/content/dox-interior.png' ),
				'preview_url'                => 'https://dox.forqy.website/interior/',
			),
			array(
				'import_file_name'           => 'Dox — Fashion',
				'import_file_url'            => esc_url( 'https://dox.forqy.website/content/fashion/content.xml' ),
				'import_customizer_file_url' => esc_url( 'https://dox.forqy.website/content/fashion/settings.dat' ),
				'import_widget_file_url'     => esc_url( 'https://dox.forqy.website/content/fashion/widgets.json' ),
				'import_preview_image_url'   => esc_url( 'https://dox.forqy.website/content/dox-fashion.png' ),
				'preview_url'                => 'https://dox.forqy.website/fashion/',
			),
			array(
				'import_file_name'           => 'Dox — Artsy',
				'import_file_url'            => esc_url( 'https://dox.forqy.website/content/artsy/content.xml' ),
				'import_customizer_file_url' => esc_url( 'https://dox.forqy.website/content/artsy/settings.dat' ),
				'import_widget_file_url'     => esc_url( 'https://dox.forqy.website/content/artsy/widgets.json' ),
				'import_preview_image_url'   => esc_url( 'https://dox.forqy.website/content/dox-artsy.png' ),
				'preview_url'                => 'https://dox.forqy.website/artsy/',
			),
			array(
				'import_file_name'           => 'Dox — Personal',
				'import_file_url'            => esc_url( 'https://dox.forqy.website/content/personal/content.xml' ),
				'import_customizer_file_url' => esc_url( 'https://dox.forqy.website/content/personal/settings.dat' ),
				'import_widget_file_url'     => esc_url( 'https://dox.forqy.website/content/personal/widgets.json' ),
				'import_preview_image_url'   => esc_url( 'https://dox.forqy.website/content/dox-personal.png' ),
				'preview_url'                => 'https://dox.forqy.website/personal/',
			),
			array(
				'import_file_name'           => 'Dox — Minimal',
				'import_file_url'            => esc_url( 'https://dox.forqy.website/content/minimal/content.xml' ),
				'import_customizer_file_url' => esc_url( 'https://dox.forqy.website/content/minimal/settings.dat' ),
				'import_widget_file_url'     => esc_url( 'https://dox.forqy.website/content/minimal/widgets.json' ),
				'import_preview_image_url'   => esc_url( 'https://dox.forqy.website/content/dox-minimal.png' ),
				'preview_url'                => 'https://dox.forqy.website/minimal/',
			),
			array(
				'import_file_name'           => 'Dox — Band',
				'import_file_url'            => esc_url( 'https://dox.forqy.website/content/band/content.xml' ),
				'import_customizer_file_url' => esc_url( 'https://dox.forqy.website/content/band/settings.dat' ),
				'import_widget_file_url'     => esc_url( 'https://dox.forqy.website/content/band/widgets.json' ),
				'import_preview_image_url'   => esc_url( 'https://dox.forqy.website/content/dox-band.png' ),
				'preview_url'                => 'https://dox.forqy.website/band/',
			),
			array(
				'import_file_name'           => 'Dox — Diary',
				'import_file_url'            => esc_url( 'https://dox.forqy.website/content/diary/content.xml' ),
				'import_customizer_file_url' => esc_url( 'https://dox.forqy.website/content/diary/settings.dat' ),
				'import_widget_file_url'     => esc_url( 'https://dox.forqy.website/content/diary/widgets.json' ),
				'import_preview_image_url'   => esc_url( 'https://dox.forqy.website/content/dox-diary.png' ),
				'preview_url'                => 'https://dox.forqy.website/diary/',
			),
			array(
				'import_file_name'           => 'Dox — Spaceman',
				'import_file_url'            => esc_url( 'https://dox.forqy.website/content/spaceman/content.xml' ),
				'import_customizer_file_url' => esc_url( 'https://dox.forqy.website/content/spaceman/settings.dat' ),
				'import_widget_file_url'     => esc_url( 'https://dox.forqy.website/content/spaceman/widgets.json' ),
				'import_preview_image_url'   => esc_url( 'https://dox.forqy.website/content/dox-spaceman.png' ),
				'preview_url'                => 'https://dox.forqy.website/spaceman/',
			),
		);
	}

	add_filter( 'ocdi/import_files', 'dox_import' );

}

if ( ! function_exists( 'dox_import_plugins' ) ) {

	/**
	 * Import Recommended Plugins
	 *
	 * @return array
	 */
	function dox_import_plugins(): array {
		return array(
			array(
				'name'        => 'FORQY',
				'description' => '',
				'slug'        => 'forqy',
				'source'      => esc_url( 'https://plugin.forqy.website/forqy-' . FORQY_PLUGIN_VERSION . '.zip' ),
				'required'    => true,
				'preselected' => true,
			),
			array(
				'name'        => 'FORQY reCAPTCHA',
				'description' => 'Adds a Google reCAPTCHA to FORQY forms.',
				'slug'        => 'forqy-recaptcha',
				'source'      => esc_url( 'https://plugin.forqy.website/forqy-recaptcha-1.0.3.zip' ),
				'required'    => false,
				'preselected' => false,
			),
			array(
				'name'        => 'WooCommerce',
				'description' => 'An eCommerce toolkit that helps you sell anything. Beautifully.',
				'slug'        => 'woocommerce',
				'required'    => false,
				'preselected' => false,
			),
			array(
				'name'        => 'Envato Market',
				'description' => 'WordPress Theme & Plugin management for the Envato Market.',
				'slug'        => 'envato-market',
				'source'      => esc_url( 'https://envato.github.io/wp-envato-market/dist/envato-market.zip' ),
				'required'    => false,
				'preselected' => false,
			),
		);
	}

	add_filter( 'ocdi/register_plugins', 'dox_import_plugins' );

}

if ( ! function_exists( 'dox_import_after' ) ) {

	/**
	 * Actions After Import
	 *
	 * @param $selected
	 */
	function dox_import_after( $selected ) {

		// Set navigation
		$primary_menu = get_term_by( 'name', 'Primary Menu', 'nav_menu' );
		$bar_menu     = get_term_by( 'name', 'Bar Menu', 'nav_menu' );
		$footer_menu  = get_term_by( 'name', 'Footer Menu', 'nav_menu' );

		if ( 'Dox Writer' === $selected['import_file_name'] ) {
			set_theme_mod( 'nav_menu_locations', array(
				'navigation_bar'    => $primary_menu->term_id,
				'navigation_footer' => $footer_menu->term_id,
			) );
		} else {
			set_theme_mod( 'nav_menu_locations', array(
				'navigation_primary' => $primary_menu->term_id,
				'navigation_bar'     => $bar_menu->term_id,
				'navigation_footer'  => $footer_menu->term_id,
			) );
		}

		// Set pages
		$front_page_id = get_page_by_title( 'Home' );
		$blog_page_id  = get_page_by_title( 'Blog' );

		update_option( 'show_on_front', 'page' );
		update_option( 'page_on_front', $front_page_id->ID );
		update_option( 'page_for_posts', $blog_page_id->ID );

	}

	add_action( 'ocdi/after_import', 'dox_import_after' );

}

if ( ! function_exists( 'dox_import_page' ) ) {

	/**
	 * Page Settings
	 *
	 * @param $default_settings
	 *
	 * @return mixed
	 */
	function dox_import_page( $default_settings ) {
		$default_settings['menu_title'] = esc_html__( 'Import Demo', 'dox' );
		$default_settings['menu_slug']  = 'forqy-import';

		return $default_settings;
	}

	add_filter( 'ocdi/plugin_page_setup', 'dox_import_page' );

}

if ( ! function_exists( 'dox_import_page_title' ) ) {

	/**
	 * Page Title
	 *
	 * @return string
	 */
	function dox_import_page_title(): string {
		return '<div class="ocdi__title-container"><h1 class="ocdi__title-container-title">' . esc_html__( 'Import Demo', 'dox' ) . '</h1></div>';
	}

	add_filter( 'ocdi/plugin_page_title', 'dox_import_page_title' );

}

if ( ! function_exists( 'dox_import_styles' ) ) {

	/**
	 * Import Styles
	 */
	function dox_import_styles() {
		global $pagenow;

		if ( $pagenow == 'themes.php' ) {
			$style = '<style>';
			$style .= '.ocdi__content-container-content .ocdi-install-plugins-content-content .plugin-item-wpforms-lite { display: none; }';
			$style .= '.ocdi__content-container-content .ocdi-install-plugins-content-content .plugin-item-all-in-one-seo-pack { display: none; }';
			$style .= '.ocdi__content-container-content .ocdi-install-plugins-content-content .plugin-item-google-analytics-for-wordpress { display: none; }';
			$style .= '.ocdi-install-plugins-content-content .ocdi-content-notice { display: none; }';
			$style .= '</style>';

			echo $style;
		}
	}

	add_action( 'admin_head', 'dox_import_styles' );

}
