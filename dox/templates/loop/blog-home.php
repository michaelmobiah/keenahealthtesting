<?php

/*

Loop Blog Home Template

*/

// Loop
$query = new WP_Query( array(
	'post_type'           => 'post',
	'orderby'             => 'date',
	'order'               => 'DESC',
	'no_found_rows'       => true,
	'ignore_sticky_posts' => true,
	'post__not_in'        => get_option( 'sticky_posts' ),
	'posts_per_page'      => get_option( 'posts_per_page' ),
) );

if ( $query->have_posts() ) {

	get_template_part( 'templates/layout/container', 'start' );

	while ( $query->have_posts() ) {
		$query->the_post();

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

	wp_reset_query();
}