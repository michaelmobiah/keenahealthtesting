<?php

/*

Slideshow Slide Caption

*/

// Video
$video = forqy_meta( 'fy_video' );

// Caption
$caption_title        = forqy_meta( 'fy_slide_caption_title' );
$caption_subtitle     = forqy_meta( 'fy_slide_caption_subtitle' );
$caption_content_meta = forqy_meta( 'fy_slide_caption_content' );

if ( current_theme_supports( 'forqy-slide' ) ) {
	$caption_content = get_the_content( $post );
}

// Caption - Button
$caption_button                      = forqy_meta( 'fy_slide_caption_button' );
$caption_button_url                  = forqy_meta( 'fy_slide_caption_url' );
$caption_button_url_target           = forqy_meta( 'fy_slide_caption_url_target' );
$caption_button_secondary            = forqy_meta( 'fy_slide_caption_button_secondary' );
$caption_button_secondary_url        = forqy_meta( 'fy_slide_caption_secondary_url' );
$caption_button_secondary_url_target = forqy_meta( 'fy_slide_caption_secondary_url_target' );

if ( $caption_title == '1' || ! empty( $caption_content ) || ! empty( $caption_button ) ) { ?>

    <div class="fy-caption-centerer">

        <div class="fy-caption fy-caption-<?php echo esc_attr( get_theme_mod( 'dox_slideshow_caption_background', dox_default( 'dox_slideshow_caption_background' ) ) ); ?> cs-slideshow-caption">

			<?php if ( ! empty ( $video ) ) {
				get_template_part( 'templates/video/controls' );
			} ?>

            <header class="fy-caption-header<?php if ( ! $caption_title ) { ?> screen-reader-text<?php } ?>">
				<?php if ( ! empty( $caption_subtitle ) ) { ?>
                    <p class="fy-caption-subtitle">
						<?php echo wp_kses_post( $caption_subtitle ); ?>
                    </p>
				<?php } ?>
                <h2><?php the_title(); ?></h2>
            </header>
            
			<?php if ( ! empty( $caption_content ) || ! empty( $caption_content_meta ) ) { ?>
                <div class="fy-caption-content fy-content">
					<?php if ( isset( $caption_content ) && ! empty ( $caption_content ) ) {
						the_content();
					} else {
						// Backward compatibility with the old meta content
						echo do_shortcode( wp_kses_post( $caption_content_meta ) );
					} ?>
                </div>
			<?php }

			if ( ! empty( $caption_button ) || ! empty( $caption_button_secondary ) ) { ?>
                <footer class="fy-caption-footer">

                    <div class="fy-caption-buttons">
						<?php if ( ! empty( $caption_button ) && ! empty( $caption_button_url ) ) { ?>
                            <a href="<?php echo esc_url( $caption_button_url ); ?>"
                               class="fy-caption-button fy-button fy-button-<?php echo esc_attr( get_theme_mod( 'dox_slideshow_caption_button', dox_default( 'dox_slideshow_caption_button' ) ) ); ?>"
								<?php echo $caption_button_url_target ? ' target="_blank" rel="noopener"' : ''; ?>>
								<?php echo esc_html( $caption_button ); ?>
                            </a>
						<?php }

						if ( ! empty( $caption_button_secondary ) && ! empty( $caption_button_secondary_url ) ) { ?>
                            <a href="<?php echo esc_url( $caption_button_secondary_url ); ?>"
                               class="fy-caption-button fy-button fy-button-<?php echo esc_attr( get_theme_mod( 'dox_slideshow_caption_button_secondary', dox_default( 'dox_slideshow_caption_button_secondary' ) ) ); ?>"
								<?php echo $caption_button_secondary_url_target ? ' target="_blank" rel="noopener"' : ''; ?>>
								<?php echo esc_html( $caption_button_secondary ); ?>
                            </a>
						<?php } ?>
                    </div>

                </footer>
			<?php } ?>

        </div>

    </div>

<?php }
