<?php

/**
 * Common Functions
 *
 * @package forqy/core
 * @since 1.0.0
 */

if ( ! function_exists( 'forqy_class' ) ) {

	/**
	 * Class
	 *
	 * @param array $class
	 */
	function forqy_class( array $class = array() ) {

		if ( ! empty( $class ) ) {
			echo 'class="' . join( ' ', $class ) . '"';
		}

	}

}

if ( ! function_exists( 'forqy_itemprop' ) ) {

	/**
	 * Property for Structured Data
	 *
	 * @param array $property
	 */
	function forqy_itemprop( array $property = array() ) {

		if ( ! empty( $property ) ) {
			echo 'itemprop="' . join( ' ', $property ) . '"';
		}

	}

}

if ( ! function_exists( 'forqy_gutter' ) ) {

	/**
	 * Gutter
	 *
	 * @param $mod
	 *
	 * @return mixed
	 */
	function forqy_gutter( $mod ) {

		if ( $mod == '0' || $mod == '0px' ) {
			$gutter = '0';
		} else if ( $mod == '1' || $mod == '1px' ) {
			$gutter = '1';
		} else if ( $mod == '10' || $mod == '10px' ) {
			$gutter = 'xsmall';
		} else if ( $mod == '20' || $mod == '20px' ) {
			$gutter = 'small';
		} else if ( $mod == '40' || $mod == '40px' ) {
			$gutter = 'medium';
		} else if ( $mod == '80' || $mod == '80px' ) {
			$gutter = 'large';
		} else if ( $mod == '120' || $mod == '120px' ) {
			$gutter = 'xlarge';
		} else if ( $mod == '160' || $mod == '160px' ) {
			$gutter = 'xxlarge';
		} else {
			// Default
			$gutter = 'medium';
		}

		return apply_filters( 'forqy_gutter', $gutter );

	}

}

if ( ! function_exists( 'forqy_body_class' ) ) {

	/**
	 * Add Device/Browser Type to Body Class
	 *
	 * @param $classes
	 *
	 * @return mixed
	 */
	function forqy_body_class( $classes ) {

		// The list of WordPress global browser checks [https://codex.wordpress.org/Global_Variables#Browser_Detection_Booleans]
		global $is_ios, $is_lynx, $is_iphone, $is_ipad, $is_chrome, $is_safari, $is_NS4, $is_opera, $is_macIE, $is_winIE, $is_gecko, $is_IE, $is_edge;

		if ( $is_chrome ) {
			$classes[] = 'chrome';
		} else if ( $is_safari ) {
			$classes[] = 'safari';
		} else if ( $is_NS4 ) {
			$classes[] = 'ns4';
		} else if ( $is_opera ) {
			$classes[] = 'opera';
		} else if ( $is_macIE ) {
			$classes[] = 'macie';
		} else if ( $is_winIE ) {
			$classes[] = 'winie';
		} else if ( $is_gecko ) {
			$classes[] = 'gecko';
		} else if ( $is_lynx ) {
			$classes[] = 'lynx';
		} else if ( $is_IE ) {
			$classes[] = 'ie';
		} else if ( $is_edge ) {
			$classes[] = 'edge';
		} else {
			$classes[] = 'unknown';
		}

		if ( $is_ios ) {
			$classes[] = 'ios';
		}

		if ( $is_lynx ) {
			$classes[] = 'lynx';
		}

		if ( $is_iphone ) {
			$classes[] = 'iphone';
		}

		if ( $is_ipad ) {
			$classes[] = 'ipad';
		}

		return $classes;

	}

	add_filter( 'body_class', 'forqy_body_class' );

}

if ( ! function_exists( 'forqy_title_to_slug' ) ) {

	/**
	 * Convert Title to Slug
	 *
	 * @param $title
	 *
	 * @return string
	 */
	function forqy_title_to_slug( $title ): string {

		// Strip HTML and PHP tags
		$title = strip_tags( $title );
		// Convert special characters to html entities
		$title = htmlspecialchars( $title );
		// Replace non-letter or digits with dash
		$title = preg_replace( '~[^\\pL\d]+~u', '-', $title );
		// Make a string lowercase
		return mb_strtolower( $title );

	}

}

if ( ! function_exists( 'forqy_mmss_to_ms' ) ) {

	/**
	 * Convert "mm:ss" to "ms"
	 * @url https://stackoverflow.com/a/5334114
	 *
	 * @param $minutes_seconds // mm:ss
	 */
	function forqy_mmss_to_ms( $minutes_seconds ) {

		list( $minutes, $seconds ) = explode( ':', $minutes_seconds );

		return $minutes * 60000 + $seconds * 1000;

	}

}

if ( ! function_exists( 'forqy_hex_to_rgb' ) ) {

	/**
	 * Convert Hex to RGB
	 *
	 * @param $hex
	 *
	 * @return array|null
	 */
	function forqy_hex_to_rgb( $hex ): ?array {

		return sscanf( $hex, "#%02x%02x%02x" );

	}

}
