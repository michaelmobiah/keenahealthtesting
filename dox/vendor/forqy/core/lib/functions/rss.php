<?php

/**
 * RSS Functions
 *
 * @package forqy/core
 * @since 1.0.1
 */

if ( ! function_exists( 'forqy_rss_add_post_types' ) ) {

	/**
	 * Add Custom Post Types to RSS
	 *
	 * @param $query
	 *
	 * @return mixed
	 */
	function forqy_rss_add_post_types( $query ) {

		if ( isset( $query['feed'] ) && ! isset( $query['post_type'] ) ) {
			$query['post_type'] = array( 'post', 'project', 'album', 'event', 'gallery' );
		}

		return $query;

	}

	add_filter( 'request', 'forqy_rss_add_post_types' );

}

if ( ! function_exists( 'forqy_rss_add_thumbnails' ) ) {

	/**
	 * Add Thumbnails to RSS
	 *
	 * @param $content
	 *
	 * @return mixed|string
	 */
	function forqy_rss_add_thumbnails( $content ) {

		if ( has_post_thumbnail( get_the_ID() ) ) {

			$image_id  = get_post_thumbnail_id( get_the_ID() );
			$image_alt = get_post_meta( $image_id, '_wp_attachment_image_alt', true );

			$content = '<p><img src="' . esc_url( wp_get_attachment_url( $image_id ) ) . '" alt="' . esc_attr( $image_alt ) . '"></p>';
			$content .= get_the_content();

		}

		return $content;

	}

	add_filter( 'the_excerpt_rss', 'forqy_rss_add_thumbnails' );
	add_filter( 'the_content_feed', 'forqy_rss_add_thumbnails' );

}
