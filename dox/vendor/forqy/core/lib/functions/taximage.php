<?php

/**
 * Taximage Functions
 *
 * @package forqy/core
 * @since 1.0.0
 */

if ( ! function_exists( 'forqy_get_taxonomy_image_src' ) ) {

	/**
	 * Get Taxonomy Image Source
	 *
	 * @param $term
	 * @param string $size
	 *
	 * @return array|false
	 */
	function forqy_get_taxonomy_image_src( $term, string $size = 'thumbnail' ) {

		if ( ! is_object( $term ) ) {
			return false;
		}

		$image_id = get_option( 'fy_tax_image_' . $term->taxonomy . '_' . $term->term_id );
		$image    = false;

		if ( is_numeric( $image_id ) ) {

			$image = wp_get_attachment_image_src( $image_id, $size );

			if ( $image && ! is_wp_error( $image ) && is_array( $image ) && count( $image ) >= 3 ) {

				$image = array(
					'ID'     => $image_id,
					'src'    => $image[0],
					'width'  => $image[1],
					'height' => $image[2]
				);

			} else {
				return false;
			}

		} else if ( ! empty( $image_id ) ) {
			$image = array( 'src' => $image_id );
		}

		if ( $image && ! is_wp_error( $image ) && is_array( $image ) && isset( $image['src'] ) ) {
			return $image;
		} else {
			return false;
		}

	}

}

if ( ! function_exists( 'forqy_get_category_image_src' ) ) {

	/**
	 * Get Category Image Source
	 *
	 * @param $category
	 * @param string $size
	 *
	 * @return array|false
	 */
	function forqy_get_category_image_src( $category, string $size = 'thumbnail' ) {

		$image_id = get_option( 'fy_tax_image_' . $category->taxonomy . '_' . $category->term_id );
		$image    = false;

		if ( is_numeric( $image_id ) ) {

			$image = wp_get_attachment_image_src( $image_id, $size );

			if ( $image && ! is_wp_error( $image ) && is_array( $image ) && count( $image ) >= 3 ) {

				$image = array(
					'ID'     => $image_id,
					'src'    => $image[0],
					'width'  => $image[1],
					'height' => $image[2]
				);

			} else {
				return false;
			}

		} else if ( ! empty( $image_id ) ) {
			$image = array( 'src' => $image_id );
		}

		if ( $image && ! is_wp_error( $image ) && is_array( $image ) && isset( $image['src'] ) ) {
			return $image;
		} else {
			return false;
		}

	}

}

if ( ! function_exists( 'forqy_get_taxonomy_image' ) ) {

	/**
	 * Get Taxonomy Image with Markup
	 *
	 * @param $term
	 * @param string $size
	 *
	 * @return false|string
	 */
	function forqy_get_taxonomy_image( $term, string $size = 'thumbnail' ) {

		$image = function_exists( 'forqy_get_taxonomy_image_src' ) ? forqy_get_taxonomy_image_src( $term, $size ) : '';

		if ( empty( $image ) ) {
			return false;
		}

		// get image size
		list( $image_width, $image_height ) = getimagesize( $image['src'] );

		// get image placeholder
		$image_placeholder = apply_filters( 'forqy_image_placeholder', $image_width, $image_height );

		return '<img src="' . $image_placeholder . '" data-src="' . $image['src'] . '" width="' . $image_width . '" width="' . $image_height . '" alt="' . $term->name . '" class="fy-lazy js-lazy">';

	}

}
