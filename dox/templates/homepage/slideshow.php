<?php

/*

Homepage Slideshow Template

*/

if ( post_type_exists( 'slide' ) ) {

	// Posts
	$slideshow_posts = get_theme_mod( 'dox_slideshow_posts', dox_default( 'dox_slideshow_posts' ) );

	if ( get_theme_mod( 'dox_slideshow_shortcode', dox_default( 'dox_slideshow_shortcode' ) ) ) {
		// Get Slideshow Shortcode
		echo do_shortcode( get_theme_mod( 'dox_slideshow_shortcode', dox_default( 'dox_slideshow_shortcode' ) ) );
	} else {

		if ( $slideshow_posts == 'gallery' || $slideshow_posts == 'project' || $slideshow_posts == 'event' ) {
			get_template_part( 'templates/section/slideshow', 'type' );
		} else if ( $slideshow_posts == 'sticky' ) {
			get_template_part( 'templates/section/slideshow', 'posts' );
		} else {
			get_template_part( 'templates/section/slideshow' );
		}
	}

} else {
	get_template_part( 'templates/heading' );
}
