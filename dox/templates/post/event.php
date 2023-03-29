<?php

/*

Event Content Template

*/

// Current Date
$current_date = date( 'Y/m/d', current_time( 'timestamp' ) );

// Post
$post_layout     = get_theme_mod( 'dox_post_layout', dox_default( 'dox_post_layout' ) );
$post_appearance = get_theme_mod( 'dox_post_appearance', dox_default( 'dox_post_appearance' ) );
$post_overlay    = get_theme_mod( 'dox_post_overlay_type', dox_default( 'dox_post_overlay_type' ) );

$post_class = array( 'fy-post', 'fy-post-listing', 'fy-post-event', 'cs-post', 'js-post' );

array_push( $post_class, 'fy-post-' . $post_layout );
array_push( $post_class, 'fy-post-' . $post_appearance );
array_push( $post_class, 'fy-post-overlay-' . $post_overlay );

// Event
if ( forqy_meta( 'fy_event_date_end' ) < $current_date ) {
	array_push( $post_class, 'fy-post-event-past' );
} ?>

<article id="post-<?php the_ID(); ?>" <?php post_class( $post_class ); ?>>

    <div class="fy-flex-container fy-flex-container-stretch fy-flex-gutter-0">

		<?php if ( has_post_thumbnail() ) { ?>
            <div class="fy-post-image-column fy-flex-column-100">

				<?php if ( get_theme_mod( 'dox_posts_layout', dox_default( 'dox_posts_layout' ) ) == 'default' ) {
                    get_template_part( 'templates/image/thumbnail', 'fixed' );
                } else {
                    get_template_part( 'templates/image/thumbnail' );
                } ?>

            </div>
		<?php } ?>

        <div class="fy-post-content-column fy-flex-column-100">

            <div class="fy-post-container">
				<?php
                get_template_part( 'templates/post/listing/event/header' );
                get_template_part( 'templates/post/listing/event/excerpt' );
                get_template_part( 'templates/post/listing/event/footer' );
                ?>
            </div>

        </div>

    </div>

</article>
