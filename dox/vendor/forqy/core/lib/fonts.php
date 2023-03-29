<?php

/**
 * Fonts
 *
 * @package forqy/core
 * @since 1.0.1
 */

if ( ! function_exists( 'forqy_fonts_url' ) ) {

	/**
	 * Construct Google Fonts API v2 URL
	 * @url https://developers.google.com/fonts/docs/css2
	 *
	 * @return false|string
	 */
	function forqy_fonts_url() {

		$fonts = apply_filters( 'forqy_fonts', __return_empty_array() );

		if ( empty( $fonts ) || empty( $fonts['font_primary'] ) || empty( $fonts['font_secondary'] ) ) {

			return false;

		} else {

			/**
			 * Primary Font
			 */
			$font_primary = esc_attr( $fonts['font_primary'] );
			$font_primary = str_replace( ' ', '+', $font_primary );

			// Styles
			$font_primary_styles = $fonts['font_primary_styles'] ? esc_attr( $fonts['font_primary_styles'] ) : '400,700';
			$font_primary_styles = str_replace( ' ', '', $font_primary_styles );
			$font_primary_styles = str_replace( ',', ';', $font_primary_styles );
			$font_primary_styles = ':wght@' . $font_primary_styles;

			/**
			 * Secondary Font
			 */
			$font_secondary = esc_attr( $fonts['font_secondary'] );
			$font_secondary = str_replace( ' ', '+', $font_secondary );

			// Styles
			$font_secondary_styles = $fonts['font_secondary_styles'] ? esc_attr( $fonts['font_secondary_styles'] ) : '400,700';
			$font_secondary_styles = str_replace( ' ', '', $font_secondary_styles );
			$font_secondary_styles = str_replace( ',', ';', $font_secondary_styles );
			$font_secondary_styles = ':wght@' . $font_secondary_styles;

			/**
			 * Display
			 */
			$font_display = $fonts['font_display'] ? esc_attr( $fonts['font_display'] ) : 'swap';

			/**
			 * Return Fonts URL API v2
			 */
			return esc_url_raw( 'https://fonts.googleapis.com/css2?family=' . $font_primary . $font_primary_styles . '&amp;family=' . $font_secondary . $font_secondary_styles . '&amp;display=' . $font_display );

		}

	}

	add_filter( 'forqy_fonts_google_url', 'forqy_fonts_url' );

}

if ( ! function_exists( 'forqy_fonts_enqueue' ) ) {

	/**
	 * Enqueue Google Fonts
	 */
	function forqy_fonts_enqueue() {

		$url = apply_filters( 'forqy_fonts_google_url', '__return_false' );

		if ( $url && apply_filters( 'forqy_fonts_google_enqueue', '__return_true' ) ) {
			/**
			 * Enqueue Fonts
			 */
			wp_enqueue_style( 'google-fonts', $url, array(), null );
		}

	}

	add_action( 'wp_enqueue_scripts', 'forqy_fonts_enqueue', 1 );
	add_action( 'enqueue_block_editor_assets', 'forqy_fonts_enqueue', 1 );

}

if ( ! function_exists( 'forqy_fonts_enqueue_crossorigin' ) ) {

	/**
     * Add 'crossorigin' Attribute to <link>
     *
	 * @param $html
	 * @param $handle
	 *
	 * @return string|string[]
	 */
	function forqy_fonts_enqueue_crossorigin( $html, $handle ) {

		if ( $handle === 'google-fonts' && apply_filters( 'forqy_fonts_google_url', '__return_false' ) ) {
			return str_replace( "media='all'", "media='all' crossorigin", $html );
		}

		return $html;
	}

	add_filter( 'style_loader_tag', 'forqy_fonts_enqueue_crossorigin', 10, 2 );

}

if ( ! function_exists( 'forqy_fonts_preload' ) ) {

	/**
	 * Preload Google Fonts in <head>
	 *
	 * @param $url
	 */
	function forqy_fonts_preload( $url ) {

		if ( apply_filters( 'forqy_fonts_google_url', '__return_false' ) && apply_filters( 'forqy_fonts_google_preconnect', '__return_true' ) ) { ?>
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<?php }

		if ( apply_filters( 'forqy_fonts_google_url', '__return_false' ) && apply_filters( 'forqy_fonts_google_preload', '__return_true' ) ) { ?>
            <link rel="preload" href="<?php echo apply_filters( 'forqy_fonts_google_url', $url ); ?>" as="style" crossorigin>
		<?php }

	}

	add_action( 'wp_head', 'forqy_fonts_preload', 5 );
	add_action( 'admin_head', 'forqy_fonts_preload', 5 );

}
