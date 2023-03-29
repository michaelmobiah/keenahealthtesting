<?php

/*

Loop Archive Template

*/

if ( have_posts() ) {

	get_template_part( 'templates/layout/container', 'start' );

	while ( have_posts() ) {
		the_post();

		get_template_part( 'templates/layout/column', 'start' );

		if ( get_post_type() != 'post' ) {

			get_template_part( 'templates/post/' . get_post_type() );

		} else if ( get_post_type() == 'post' ) {

			if ( get_post_format() ) {
				get_template_part( 'templates/post/' . get_post_format() );
			} else {
				get_template_part( 'templates/post/standard' );
			}

		}

		get_template_part( 'templates/layout/column', 'end' );

	}

	get_template_part( 'templates/layout/container', 'end' );

	if ( function_exists( 'forqy_pagination' ) ) {
		forqy_pagination();
	}

	wp_reset_query();
} else {
	get_template_part( 'templates/page/empty' );
}
