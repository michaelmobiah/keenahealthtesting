<?php

/*

Search Content Template

*/

// Post
$post_overlay = get_theme_mod( 'dox_post_overlay_type', dox_default( 'dox_post_overlay_type' ) );

$post_class = array( 'fy-post-listing', 'fy-post-search', 'cs-post', 'js-post' );

array_push( $post_class, 'fy-post-overlay-' . $post_overlay ); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class( $post_class ); ?>>
    <div class="fy-flex-container fy-flex-container-center">

		<?php if ( has_post_thumbnail() ) { ?>
            <div class="fy-flex-column-20 fy-flex-column-tablet-25 fy-flex-column-phone-40 fy-flex-column-phone-min-100">
				<?php get_template_part( 'templates/image/thumbnail' ); ?>
            </div>
		<?php } ?>

        <div class="fy-flex-column-auto">

            <div class="fy-post-container">

                <header class="fy-post-header">
                    <h2>
                        <a href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
                        </a>
                    </h2>
                </header>

				<?php
				get_template_part( 'templates/post/listing/excerpt' );
				get_template_part( 'templates/post/listing/meta' );
				?>
            </div>

        </div>

    </div>
</article>
