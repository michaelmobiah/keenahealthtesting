<?php

/*

States

*/

if ( ! function_exists( 'dox_admin_post_states' ) ) {

	/**
	 * Add Custom Post States to Pages
	 *
	 * @param $states
	 *
	 * @return mixed
	 */
	function dox_admin_post_states( $states ) {
		global $post;

		if ( $post ) {

			if ( get_post_type( $post->ID ) == 'page' ) {

				if ( get_page_template_slug( $post->ID ) == 'template-portfolio.php' ) {
					$states[] = __( 'Portfolio Page', 'dox' );
				} else if ( get_page_template_slug( $post->ID ) == 'template-menu.php' ) {
					$states[] = __( 'Menu Page', 'dox' );
				} else if ( get_page_template_slug( $post->ID ) == 'template-albums.php' ) {
					$states[] = __( 'Albums Page', 'dox' );
				} else if ( get_page_template_slug( $post->ID ) == 'template-events.php' || get_page_template_slug( $post->ID ) == 'template-events-upcoming-past.php' ) {
					$states[] = __( 'Events Page', 'dox' );
				} else if ( get_page_template_slug( $post->ID ) == 'template-gallery.php' ) {
					$states[] = __( 'Gallery Page', 'dox' );
				} else if ( get_page_template_slug( $post->ID ) == 'template-about.php' ) {
					$states[] = __( 'About Page', 'dox' );
				} else if ( get_page_template_slug( $post->ID ) == 'template-reservations.php' ) {
					$states[] = __( 'Reservations Page', 'dox' );
				} else if ( get_page_template_slug( $post->ID ) == 'template-contact.php' ) {
					$states[] = __( 'Contact Page', 'dox' );
				}
			}
		}

		return $states;

	}

	add_filter( 'display_post_states', 'dox_admin_post_states' );

}
