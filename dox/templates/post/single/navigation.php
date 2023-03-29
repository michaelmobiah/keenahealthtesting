<?php

/*

Navigation Prev/Next Template

*/

// Previous
$prev = get_previous_post();
// Next
$next = get_next_post();

if ( get_theme_mod( 'dox_post_single_navigation', 'enabled' ) != 'disabled' ) {

	if ( $prev || $next ) { ?>

        <div class="fy-post-nav">

            <div class="fy-flex-container fy-flex-container-center">
                <div class="fy-flex-column-auto fy-flex-column-tablet-100">

					<?php if ( $prev ) {

						// Thumbnail
						$thumbnail_url = get_the_post_thumbnail_url( $prev->ID, FORQY_THEME_SLUG . '-medium-fixed' );
						$thumbnail_alt = get_post_meta( get_post_thumbnail_id( $prev->ID ), '_wp_attachment_image_alt', true );
						?>

                        <a href="<?php the_permalink( $prev->ID ); ?>" class="fy-post-nav-post fy-post-prev">

							<?php if ( $thumbnail_url ) { ?>
                                <div class="fy-post-nav-image fy-image-cover fy-filter">
                                    <img class="fy-filter-<?php echo esc_attr( get_theme_mod( 'dox_filter', dox_default( 'dox_filter' ) ) ); ?> fy-lazy js-lazy"
                                         alt="<?php echo esc_attr( $thumbnail_alt ); ?>"
                                         src="<?php echo forqy_image_placeholder(); ?>"
                                         data-src="<?php echo esc_url( $thumbnail_url ); ?>">
                                </div>
							<?php } ?>

                            <div class="fy-post-nav-header">
								<?php esc_html_e( 'Previous', 'dox' ); ?>
                                <h3><span><?php echo get_the_title( $prev->ID ); ?></span></h3>
                            </div>
                        </a>

						<?php
						wp_reset_postdata();
					} ?>

                </div>
                <div class="fy-flex-column-auto fy-flex-column-tablet-100">

					<?php
					if ( $next ) {

						// Thumbnail
						$thumbnail_url = get_the_post_thumbnail_url( $next->ID, FORQY_THEME_SLUG . '-medium-fixed' );
						$thumbnail_alt = get_post_meta( get_post_thumbnail_id( $next->ID ), '_wp_attachment_image_alt', true );
						?>

                        <a href="<?php the_permalink( $next->ID ); ?>" class="fy-post-nav-post fy-post-next">

							<?php if ( $thumbnail_url ) { ?>
                                <div class="fy-post-nav-image fy-image-cover fy-filter">
                                    <img class="fy-filter-<?php echo esc_attr( get_theme_mod( 'dox_filter', dox_default( 'dox_filter' ) ) ); ?> fy-lazy js-lazy"
                                         alt="<?php echo esc_attr( $thumbnail_alt ); ?>"
                                         src="<?php echo forqy_image_placeholder(); ?>"
                                         data-src="<?php echo esc_url( $thumbnail_url ); ?>">
                                </div>
							<?php } ?>

                            <div class="fy-post-nav-header">
								<?php esc_html_e( 'Next', 'dox' ); ?>
                                <h3><span><?php echo get_the_title( $next->ID ); ?></span></h3>
                            </div>
                        </a>

						<?php
						wp_reset_postdata();
					} ?>

                </div>

            </div>

        </div>

	<?php }
}
