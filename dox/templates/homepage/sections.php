<?php

/*

Sections Template

*/

// Define sections
$sections = array(
	array(
		"order" => get_theme_mod( 'dox_homepage_carousel_order', dox_default( 'dox_homepage_carousel_order' ) ),
		"slug"  => "carousel",
	),
	array(
		"order" => get_theme_mod( 'dox_homepage_about_order', dox_default( 'dox_homepage_about_order' ) ),
		"slug"  => "about",
	),
	( post_type_exists( 'project' ) ? array(
		"order" => get_theme_mod( 'dox_homepage_projects_order', dox_default( 'dox_homepage_projects_order' ) ),
		"slug"  => "projects",
	) : null ),
	( post_type_exists( 'album' ) ? array(
		"order" => get_theme_mod( 'dox_homepage_albums_order', dox_default( 'dox_homepage_albums_order' ) ),
		"slug"  => "albums",
	) : null ),
	( post_type_exists( 'event' ) ? array(
		"order" => get_theme_mod( 'dox_homepage_events_order', dox_default( 'dox_homepage_events_order' ) ),
		"slug"  => "events",
	) : null ),
	( post_type_exists( 'gallery' ) ? array(
		"order" => get_theme_mod( 'dox_homepage_galleries_order', dox_default( 'dox_homepage_galleries_order' ) ),
		"slug"  => "galleries",
	) : null ),
	array(
		"order" => get_theme_mod( 'dox_homepage_posts_order', dox_default( 'dox_homepage_posts_order' ) ),
		"slug"  => "posts",
	),
	array(
		"order" => get_theme_mod( 'dox_homepage_categories_order', dox_default( 'dox_homepage_categories_order' ) ),
		"slug"  => "categories",
	),
	( post_type_exists( 'product' ) ? array(
		"order" => get_theme_mod( 'dox_homepage_products_featured_order', dox_default( 'dox_homepage_products_featured_order' ) ),
		"slug"  => "products-featured",
	) : null ),
	( post_type_exists( 'product' ) ? array(
		"order" => get_theme_mod( 'dox_homepage_products_recent_order', dox_default( 'dox_homepage_products_recent_order' ) ),
		"slug"  => "products-recent",
	) : null ),
);

// Sort sections
sort( $sections );

foreach ( $sections as $section ) {

	if ( isset( $section['slug'] ) ) {

		if ( $section['slug'] == 'carousel' && get_theme_mod( 'dox_homepage_carousel', dox_default( 'dox_homepage_carousel' ) ) != 'disabled' ) {

			get_template_part( 'templates/section/carousel' );

		} else if ( $section['slug'] == 'about' && get_theme_mod( 'dox_homepage_about' ) != 'disabled' ) {

			get_template_part( 'templates/section/about' );

		} else if ( $section['slug'] == 'projects' && get_theme_mod( 'dox_homepage_projects' ) != 'disabled' ) {

			get_template_part( 'templates/section/projects' );

		} else if ( $section['slug'] == 'albums' && get_theme_mod( 'dox_homepage_albums' ) != 'disabled' ) {

			get_template_part( 'templates/section/albums' );

		} else if ( $section['slug'] == 'events' && get_theme_mod( 'dox_homepage_events' ) != 'disabled' ) {

			get_template_part( 'templates/section/events' );

		} else if ( $section['slug'] == 'galleries' && get_theme_mod( 'dox_homepage_galleries' ) != 'disabled' ) {

			get_template_part( 'templates/section/galleries' );

		} else if ( $section['slug'] == 'posts' && get_theme_mod( 'dox_homepage_posts' ) != 'disabled' ) {

			get_template_part( 'templates/section/posts' );

		} else if ( $section['slug'] == 'categories' && get_theme_mod( 'dox_homepage_categories' ) != 'disabled' ) {

			get_template_part( 'templates/section/categories' );

		} else if ( $section['slug'] == 'products-featured' && get_theme_mod( 'dox_homepage_products_featured' ) != 'disabled' ) {

			get_template_part( 'templates/section/products', 'featured' );

		} else if ( $section['slug'] == 'products-recent' && get_theme_mod( 'dox_homepage_products_recent' ) != 'disabled' ) {

			get_template_part( 'templates/section/products', 'recent' );
		}
	}
}
