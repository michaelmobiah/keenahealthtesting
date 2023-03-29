<?php

/**
 * Image Functions
 *
 * @package forqy/core
 * @since 1.0.1
 */

if ( ! function_exists( 'forqy_image_placeholder' ) ) {

	/**
	 * Image Placeholder - Base64
	 *
	 * @param int|null $width
	 * @param int|null $height
	 *
	 * @return string|void
	 */
	function forqy_image_placeholder( ?int $width = 4, ?int $height = 3 ) {

		return esc_attr( 'data:image/svg+xml,%3Csvg%20width%3D%22' . $width . '%22%20height%3D%22' . $height . '%22%20xmlns%3D%22http://www.w3.org/2000/svg%22%20viewBox%3D%220%200%20' . $width . '%20' . $height . '%22%3E%3C/svg%3E' );

	}

	add_filter( 'forqy_image_placeholder', 'forqy_image_placeholder', 10, 2 );

}

if ( ! function_exists( 'forqy_image_loading' ) ) {

	/**
	 * Image Loading
	 *
	 * @return false|string
	 */
	function forqy_image_loading() {

		ob_start();

		get_template_part( 'templates/image/loading' );

		return ob_get_clean();

	}

	add_filter( 'forqy_image_loading', 'forqy_image_loading', 10 );

}

if ( ! function_exists( 'forqy_get_image_ratio' ) ) {

	/**
	 * Image Aspect Ratio
	 *
	 * @param $width
	 * @param $height
	 * @param string $divider
	 *
	 * @return string|void
	 */
	function forqy_get_image_ratio( $width, $height, string $divider = '-' ) {

		// search for greatest common divisor
		$greatestCommonDivisor = static function ( $width, $height ) use ( &$greatestCommonDivisor ) {
			return ( $width % $height ) ? $greatestCommonDivisor( $height, $width % $height ) : $height;
		};

		$divisor = $greatestCommonDivisor( $width, $height );

		return esc_attr( $width / $divisor . $divider . $height / $divisor );

	}

}

if ( ! function_exists( 'forqy_image_attributes' ) ) {

	/**
	 * Image Lazy Loading 'data-src', 'data-srcset', 'data-sizes' on Frontend Images
	 *
	 * @param $attr
	 * @param $size
	 *
	 * @return mixed
	 */
	function forqy_image_attributes( $attr, $size ) {

		if ( ! is_admin() && current_theme_supports( 'forqy-image' ) ) {

			// image metadata
			if ( ! empty( $size ) ) {
				$image = wp_get_attachment_metadata( $size->ID );
			}
			// available image sizes
			$image_sizes = get_intermediate_image_sizes();

			// 'class'
			$attr['class'] = 'fy-lazy js-lazy' . ' ' . $attr['class'];

			// 'src' to 'data-src'
			$src              = $attr['src'];
			$attr['data-src'] = $src;

			// 'src' as placeholder
			foreach ( $image_sizes as $image_size ) {

				if ( ! empty( $image['sizes'][ $image_size ] ) ) {
					$attr['src'] = forqy_image_placeholder( $image['sizes'][ $image_size ]['width'], $image['sizes'][ $image_size ]['height'] );
				} else {
					$attr['src'] = forqy_image_placeholder();
				}

			}

			// 'srcset' to 'data-srcset'
			if ( isset( $attr['srcset'] ) ) {
				$srcset              = $attr['srcset'];
				$attr['data-srcset'] = $srcset;
				unset( $attr['srcset'] );
			}

			// 'sizes' to 'data-sizes'
			if ( isset( $attr['sizes'] ) ) {
				$sizes              = $attr['sizes'];
				$attr['data-sizes'] = $sizes;
				unset( $attr['sizes'] );
			}

			/**
			 * WooCommerce
			 */

			if ( function_exists( 'forqy_woocommerce_activated' ) && forqy_woocommerce_activated() ) {

				// preserve original image for woocommerce checkout
				if ( is_cart() || is_checkout() ) {
					$attr['src']   = $src;
					$attr['class'] = 'fy-image fy-image-responsive';
					unset( $attr['data-src'] );
					unset( $attr['data-srcset'] );
					unset( $attr['data-sizes'] );
				}

				// add 'wp-post-image' class to woocommerce product image to work with variable product switching
				if ( is_product() ) {
					$attr['class'] = $attr['class'] . ' wp-post-image';
				}

			}

		}

		return $attr;

	}

	add_filter( 'wp_get_attachment_image_attributes', 'forqy_image_attributes', 100, 2 );

}

if ( ! function_exists( 'forqy_image_content_attributes' ) ) {

	/**
	 * Content Image Lazy Loading
	 *
	 * @param $content
	 *
	 * @return string|string[]|null
	 */
	function forqy_image_content_attributes( $content ) {

		if ( ! is_admin() && current_theme_supports( 'forqy-image' ) ) {
			return preg_replace_callback( '/<(img)([^>]+?)(>(.*?)<\/\\1>|[\/]?>)/si', 'forqy_image_content_attributes_callback', $content );
		} else {
			return $content;
		}

	}

	add_filter( 'the_content', 'forqy_image_content_attributes' );

}

if ( ! function_exists( 'forqy_image_content_attributes_callback' ) ) {

	/**
	 * Content Image Lazy Loading - Callback
	 *
	 * @param $matches
	 *
	 * @return mixed|string
	 */
	function forqy_image_content_attributes_callback( $matches ) {

		// $matches[0] = original
		// $matches[1] = tag
		// $matches[2] = attributes
		// $matches[3] = >

		// original attributes
		$attributes_o_kses_hair = wp_kses_hair( $matches[2], wp_allowed_protocols() );

		if ( empty( $attributes_o_kses_hair['src'] ) ) {
			return $matches[0];
		}

		// old attributes
		$attributes_o = array();

		foreach ( $attributes_o_kses_hair as $name => $attribute ) {
			$attributes_o[ $name ] = $attribute['value'];
		}

		// new attributes
		$attributes = $attributes_o;

		// image file exists
		if ( file_exists( $attributes['src'] ) ) {

			// image type is *.png
			if ( @exif_imagetype( $attributes['src'] ) == IMAGETYPE_PNG ) {

				if ( ! empty( $attributes['class'] ) ) {
					$attributes['class'] = 'fy-image--png ' . $attributes['class'];
				} else {
					$attributes['class'] = 'fy-image--png';
				}
			}
		}

		// class
		if ( get_post_type() == 'slide' ) {
			$attributes['class'] = 'fy-content__image swiper-lazy ' . ! empty( $attributes['class'] ) ?? $attributes['class'];
		} else {
			$attributes['class'] = 'fy-content__image fy-lazy js-lazy ' . ! empty( $attributes['class'] ) ?? $attributes['class'];
		}

		// size & placeholder
		if ( ! empty( $attributes_o['width'] ) && ! empty( $attributes_o['height'] ) ) {
			$attributes['src'] = forqy_image_placeholder( $attributes_o['width'], $attributes_o['height'] );
		} else {
			list ( $width, $height ) = getimagesize( $attributes_o['src'] );

			$attributes['src']    = forqy_image_placeholder( $width, $height );
			$attributes['width']  = $width;
			$attributes['height'] = $height;
		}

		// 'src' to 'data-src'
		$attributes['data-src'] = $attributes_o['src'];

		// 'srcset' to 'data-srcset'
		if ( ! empty( $attributes['srcset'] ) ) {
			$attributes['data-srcset'] = $attributes_o['srcset'];
			unset( $attributes['srcset'] );
		}

		// 'sizes' to 'data-sizes'
		if ( ! empty( $attributes['sizes'] ) ) {
			$attributes['data-sizes'] = $attributes_o['sizes'];
			unset( $attributes['sizes'] );
		}

		// reformat attributes
		$attributes_s = array();

		foreach ( $attributes as $attribute => $value ) {

			if ( '' === $value ) {
				$attributes_s[] = sprintf( '%s', $attribute );
			} else {
				$attributes_s[] = sprintf( '%s="%s"', $attribute, esc_attr( $value ) );
			}

		}

		$attributes_s = implode( ' ', $attributes_s );

		// loading
		$loading = forqy_image_loading();

		return sprintf( '<img %1$s>%2$s', $attributes_s, $loading );

	}

}

if ( ! function_exists( 'forqy_image_content_link_attributes_photoswipe' ) ) {

	/**
	 * Content Images with a PhotoSwipe Support
	 *
	 * @param $content
	 *
	 * @return string|string[]|null
	 */
	function forqy_image_content_link_attributes_photoswipe( $content ) {

		if ( current_theme_supports( 'forqy-image-photoswipe' ) ) {
			return preg_replace_callback( "/<a(.*?)href=('|\")(.*?).(bmp|gif|jpeg|jpg|png|webp)('|\")(.*?)>/", 'forqy_image_content_link_attributes_photoswipe_callback', $content );
		} else {
			return $content;
		}

	}

	add_filter( 'the_content', 'forqy_image_content_link_attributes_photoswipe' );

}

if ( ! function_exists( 'forqy_image_content_link_attributes_photoswipe_callback' ) ) {

	/**
	 * Content Images with a PhotoSwipe Support - Callback
	 *
	 * @param $matches
	 *
	 * @return mixed|string
	 */
	function forqy_image_content_link_attributes_photoswipe_callback( $matches ) {

		// $matches[0] = original
		// $matches[1] = space
		// $matches[2] = quote
		// $matches[3] = path
		// $matches[4] = extension
		// $matches[5] = quote
		// $matches[6] = attributes

		// check path to image
		if ( empty( $matches[3] ) ) {
			return $matches[0];
		}

		// get attachment url
		$url = esc_url( $matches[3] . '.' . $matches[4] );

		// get attachment size
		if ( ! empty( $url ) ) {

			// get image data
			$attachment_id = attachment_url_to_postid( $url );

			if ( ! empty( $attachment_id ) && $attachment_id > 0 ) {
				$attachment_src = wp_get_attachment_image_src( $attachment_id, 'full' );

				$href   = $attachment_src[0] ?? false;
				$width  = $attachment_src[1] ?? false;
				$height = $attachment_src[2] ?? false;
			} else {
				$href = $url;
				list( $width, $height ) = @getimagesize( $url );
			}
		} else {
			return $matches[0];
		}

		// check required attributes
		if ( empty( $href ) || empty( $width ) || empty( $height ) ) {
			return $matches[0];
		}

		// original attributes
		$attributes_o_kses_hair = wp_kses_hair( $matches[6], wp_allowed_protocols() );
		$attributes_o           = array();

		foreach ( $attributes_o_kses_hair as $name => $attribute ) {
			$attributes_o[ $name ] = $attribute['value'];
		}

		// attributes
		$attributes = $attributes_o;

		// class
		if ( ! empty( $attributes['class'] ) ) {
			$attributes['class'] = 'js-image ' . $attributes['class'];
		} else {
			$attributes['class'] = 'js-image';
		}

		// new attributes
		$attributes_n = array();

		foreach ( $attributes as $attribute => $value ) {

			if ( '' === $value ) {
				$attributes_n[] = sprintf( '%s', $attribute );
			} else {
				$attributes_n[] = sprintf( '%s="%s"', $attribute, esc_attr( $value ) );
			}
		}

		$attributes_n = implode( ' ', $attributes_n );

		return sprintf( '<a href="%1$s" data-size="%2$sx%3$s" %4$s>', $href, $width, $height, $attributes_n );

	}

}
