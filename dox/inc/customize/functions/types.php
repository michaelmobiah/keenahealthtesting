<?php

/*

Types

*/

if ( ! function_exists( 'dox_customize_type_options' ) ) {

	/**
	 * Get Type Options
	 *
	 * @return array
	 */
	function dox_customize_type_options(): array {

		$types = array();

		$types['sticky'] = esc_html__( 'Posts - Sticky', 'dox' );
		$types['post']   = esc_html__( 'Posts', 'dox' );

		if ( post_type_exists( 'project' ) ) {
			$types['project'] = esc_html__( 'Projects', 'dox' );
		}
		if ( post_type_exists( 'album' ) ) {
			$types['album'] = esc_html__( 'Albums', 'dox' );
		}
		if ( post_type_exists( 'event' ) ) {
			$types['event'] = esc_html__( 'Events', 'dox' );
		}
		if ( post_type_exists( 'gallery' ) ) {
			$types['gallery'] = esc_html__( 'Galleries', 'dox' );
		}

		return $types;

	}

}

if ( ! function_exists( 'dox_customize_taxonomy_options' ) ) {

	/**
	 * Get Taxonomy Options
	 *
	 * @return array
	 */
	function dox_customize_taxonomy_options(): array {

		$taxonomies = array();

		$taxonomies['category'] = esc_html__( 'Post Categories', 'dox' );

		if ( taxonomy_exists( 'section' ) ) {
			$taxonomies['section'] = esc_html__( 'Menu Sections', 'dox' );
		}
		if ( taxonomy_exists( 'category-portfolio' ) ) {
			$taxonomies['category-portfolio'] = esc_html__( 'Portfolio Categories', 'dox' );
		}
		if ( taxonomy_exists( 'category-album' ) ) {
			$taxonomies['category-album'] = esc_html__( 'Album Categories', 'dox' );
		}
		if ( taxonomy_exists( 'category-event' ) ) {
			$taxonomies['category-event'] = esc_html__( 'Event Categories', 'dox' );
		}
		if ( taxonomy_exists( 'category-gallery' ) ) {
			$taxonomies['category-gallery'] = esc_html__( 'Gallery Categories', 'dox' );
		}
		if ( taxonomy_exists( 'product_cat' ) ) {
			$taxonomies['product_cat'] = esc_html__( 'Product Categories', 'dox' );
		}

		return $taxonomies;

	}

}
