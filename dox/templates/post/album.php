<?php

/*

Album Content Template

*/

// Post
$post_layout     = get_theme_mod( 'dox_post_layout', dox_default( 'dox_post_layout' ) );
$post_appearance = get_theme_mod( 'dox_post_appearance', dox_default( 'dox_post_appearance' ) );
$post_overlay    = get_theme_mod( 'dox_post_overlay_type', dox_default( 'dox_post_overlay_type' ) );

$post_class = array( 'fy-post', 'fy-post-listing', 'fy-post-album', 'cs-post', 'js-post' );

array_push( $post_class, 'fy-post-' . $post_layout );
array_push( $post_class, 'fy-post-' . $post_appearance );
array_push( $post_class, 'fy-post-overlay-' . $post_overlay ); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class( $post_class ); ?>>

    <div class="fy-flex-container fy-flex-container-stretch fy-flex-gutter-0">

		<?php if ( has_post_thumbnail() ) { ?>
            <div class="fy-post-image-column fy-flex-column-100">
				<?php get_template_part( 'templates/image/thumbnail', 'square' ); ?>
            </div>
		<?php } ?>

        <div class="fy-post-content-column fy-flex-column-100">

            <div class="fy-post-container">
				<?php
                get_template_part( 'templates/post/listing/header' );
                get_template_part( 'templates/post/listing/album/artist' );
                get_template_part( 'templates/post/listing/excerpt' );
                get_template_part( 'templates/post/listing/album/footer' );
                ?>
            </div>

        </div>

    </div>

</article>
