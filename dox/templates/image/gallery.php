<?php

/*

Gallery Template

*/

// Images
$images = get_post_meta( get_the_ID(), 'fy-gallery-images', true );

if ( ! empty( $images ) ) { ?>
    <div class="fy-gallery fy-post-gallery js-images" itemscope itemtype="https://schema.org/ImageGallery">
        <div class="fy-centerer fy-centerer-<?php echo esc_attr( get_theme_mod( 'dox_page_width', dox_default( 'dox_page_width' ) ) ); ?>">

			<?php
			get_template_part( 'templates/layout/container', 'start-gallery' );

			$index = 0;

			foreach ( $images as $image ) {

				// Attachment
				$attachment = get_post( $image );

				if ( $attachment ) {

					// Attachment Alt
					$attachment_alt = get_post_meta( $attachment->ID, '_wp_attachment_image_alt', true );
					// Attachment Caption
					$attachment_caption = wp_get_attachment_caption( $image );
					// Attachment Image
					if ( get_theme_mod( 'dox_posts_layout', dox_default( 'dox_posts_layout' ) ) == 'default' ) {
						$attachment_image = wp_get_attachment_image_src( $image, FORQY_THEME_SLUG . '-medium-square' );
					} else {
						$attachment_image = wp_get_attachment_image_src( $image, FORQY_THEME_SLUG . '-medium' );
					}
					// Attachment URL
					$attachment_url = wp_get_attachment_url( $image );
					// Attachment Width
					$attachment_width = wp_get_attachment_metadata( $image )['width'];
					// Attachment Height
					$attachment_height = wp_get_attachment_metadata( $image )['height'];

					// Attachment Ratio
					if ( get_theme_mod( 'dox_posts_layout', dox_default( 'dox_posts_layout' ) ) == 'default' ) {
						$attachment_size = 'square';
					} else {
						if ( $attachment_width > $attachment_height ) {
							$attachment_size = 'landscape';
						} else if ( $attachment_width < $attachment_height ) {
							$attachment_size = 'portrait';
						} else if ( $attachment_width == $attachment_height ) {
							$attachment_size = 'square';
						} else {
							$attachment_size = 'default';
						}
					}

					if ( isset( $attachment_image[0] ) ) {

						get_template_part( 'templates/layout/column', 'start-gallery' ); ?>

                        <figure class="fy-gallery-image" itemscope itemprop="associatedMedia" itemtype="https://schema.org/ImageObject">

                            <a href="<?php echo esc_url( $attachment_url ); ?>"
                               data-size="<?php echo esc_attr( $attachment_width ); ?>x<?php echo esc_attr( $attachment_height ); ?>"
                               data-index="<?php echo esc_attr( $index ++ ); ?>"
                               class="fy-image-<?php echo esc_attr( $attachment_size ); ?> fy-image-cover js-image"
                               itemprop="contentUrl">

                                <img class="fy-lazy js-lazy"
                                     alt="<?php echo esc_attr( $attachment_alt ); ?>"
                                     src="<?php echo forqy_image_placeholder(); ?>"
                                     data-src="<?php echo esc_url( $attachment_image[0] ); ?>">

								<?php get_template_part( 'templates/image/loading' ); ?>
                            </a>

							<?php if ( ! empty( $attachment_caption ) ) { ?>
                                <figcaption itemprop="caption description" class="fy-gallery-image-caption screen-reader-text">
									<?php echo esc_html( $attachment_caption ); ?>
                                </figcaption>
							<?php } ?>
                        </figure>

						<?php
						get_template_part( 'templates/layout/column', 'end' );

					}
				}
			}

			get_template_part( 'templates/layout/container', 'end' ); ?>

        </div>
    </div>
<?php }
