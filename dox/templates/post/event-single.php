<?php

/*

Event Single Content Template

*/

// Current Date
$current_date = date( 'Y/m/d', current_time( 'timestamp' ) );

// Post
$post_class = array( 'fy-post', 'fy-post-single', 'fy-post-event', 'fy-post-event-single' );

// Event
if ( forqy_meta( 'fy_event_date_end' ) < $current_date ) {
	array_push( $post_class, 'fy-post-event-past' );
} ?>

<article id="post-<?php the_ID(); ?>" <?php post_class( $post_class ); ?>>

	<?php
    get_template_part( 'templates/post/single/content' );
    get_template_part( 'templates/image/gallery' );
    ?>

    <div class="fy-centerer fy-centerer-<?php echo esc_attr( get_theme_mod( 'dox_post_single_width', dox_default( 'dox_post_single_width' ) ) ); ?>">
		<?php
		get_template_part( 'templates/post/single/event/location' );
		get_template_part( 'templates/post/single/event/footer' );
		?>
    </div>

	<?php
	get_template_part( 'templates/post/microdata/event' );
	get_template_part( 'templates/post/microdata/image' );
	?>
</article>
