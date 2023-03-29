<?php

/*

Album Single Content Template

*/

// Post
$post_class = array( 'fy-post', 'fy-post-single', 'fy-post-album' );

// Tracks
$tracks = forqy_meta( 'fy_album_tracks', true ); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class( $post_class ); ?>>

    <div class="fy-centerer">

        <div class="fy-post-content fy-main-content fy-content">

            <div class="fy-flex-container fy-flex-container-top-center fy-flex-gutter-large">
                <div class="fy-post-image-column fy-flex-column-auto fy-flex-column-desktop-100 fy-flex-column-phone-100">

					<?php if ( has_post_thumbnail() ) {
						if ( ! empty( $tracks ) ) {
							get_template_part( 'templates/image/thumbnail', 'square-single' );
						} else { ?>
                            <div class="fy-centerer fy-centerer-<?php echo esc_attr( get_theme_mod( 'dox_post_single_width', dox_default( 'dox_post_single_width' ) ) ); ?>">
								<?php get_template_part( 'templates/image/thumbnail', 'square-single' ); ?>
                            </div>
						<?php }
					} ?>

                </div>

				<?php if ( ! empty( $tracks ) ) { ?>
                    <div class="fy-post-playlist-column fy-flex-column-auto fy-flex-column-tablet-100 fy-flex-column-phone-100">
						<?php get_template_part( 'templates/post/single/album/playlist' ); ?>
                    </div>
				<?php } ?>

            </div>

        </div>

    </div>

	<?php get_template_part( 'templates/post/single/content' ); ?>

    <div class="fy-centerer fy-centerer-<?php echo esc_attr( get_theme_mod( 'dox_post_single_width', dox_default( 'dox_post_single_width' ) ) ); ?>">
		<?php
		get_template_part( 'templates/post/single/album/artist' );
		get_template_part( 'templates/post/single/album/meta', 'custom' );
		get_template_part( 'templates/post/single/footer' );
		?>
    </div>

	<?php
	get_template_part( 'templates/post/microdata/album' );
	get_template_part( 'templates/post/microdata/image' );
	?>
</article>
