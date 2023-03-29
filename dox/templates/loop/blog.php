<?php

/*

Loop Blog Template

*/

// Paged
if ( get_query_var( 'paged' ) ) {
	$paged = get_query_var( 'paged' );
} elseif ( get_query_var( 'page' ) ) {
	$paged = get_query_var( 'page' );
} else {
	$paged = 1;
}

// Loop
$query = new WP_Query( array(
	'post_type'           => 'post',
	'paged'               => $paged,
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

	if ( function_exists( 'forqy_pagination' ) ) {
		forqy_pagination();
	}

	wp_reset_query();
} else {
	get_template_part( 'templates/page/empty' );
}
