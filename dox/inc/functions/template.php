<?php

/*

Templates

*/

if ( ! function_exists( 'dox_templates' ) ) {

	/**
	 * Un-assign Page Templates if the Post Type Doesn't Exists
	 *
	 * @param $templates
	 *
	 * @return mixed
	 */
	function dox_templates( $templates ) {

		// Project
		if ( ! post_type_exists( 'project' ) ) {
			unset( $templates['template-portfolio.php'] );
			unset( $templates['template-portfolio-categories.php'] );
		}

		// Menu
		if ( ! post_type_exists( 'menu' ) ) {
			unset( $templates['template-menu.php'] );
			unset( $templates['template-menu-sections.php'] );
		}

		// Album
		if ( ! post_type_exists( 'album' ) ) {
			unset( $templates['template-albums.php'] );
			unset( $templates['template-albums-categories.php'] );
		}

		// Event
		if ( ! post_type_exists( 'event' ) ) {
			unset( $templates['template-events.php'] );
			unset( $templates['template-events-categories.php'] );
			unset( $templates['template-events-past.php'] );
			unset( $templates['template-events-upcoming-past.php'] );
		}

		// Gallery
		if ( ! post_type_exists( 'gallery' ) ) {
			unset( $templates['template-gallery.php'] );
			unset( $templates['template-gallery-categories.php'] );
		}

		// Reservation
		if ( ! post_type_exists( 'reservation' ) ) {
			unset( $templates['template-reservations.php'] );
		}

		return $templates;

	}

	add_filter( 'theme_page_templates', 'dox_templates' );

}
