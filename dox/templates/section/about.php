<?php

/*

About Section Template

*/

if ( get_theme_mod( 'dox_about_headline' ) || get_theme_mod( 'dox_about_description' ) ) { ?>

    <section id="<?php echo esc_attr_x( 'about', 'section anchor', 'dox' ); ?>"
             class="fy-section--about fy-section cs-section-about<?php if ( empty( get_theme_mod( 'dox_about_image' ) )
		         && empty( get_theme_mod( 'dox_about_image_2' ) )
		         && empty( get_theme_mod( 'dox_about_image_3' ) ) ) { ?> has-no-image<?php } else { ?> has-image<?php } ?>">

        <div class="fy-section__container fy-centerer fy-centerer-<?php echo esc_attr( get_theme_mod( 'dox_content_layout', dox_default( 'dox_content_layout' ) ) ); ?>">

            <div class="fy-flex-container fy-flex-container-center fy-flex-gutter-large">

                <div class="fy-about-content-column fy-flex-column-50 fy-flex-column-desktop-50 fy-flex-column-tablet-100 fy-flex-order-tablet-2">

                    <div class="fy-about-centerer">

						<?php if ( get_theme_mod( 'dox_about_headline' ) ) { ?>
                            <header class="fy-section__header cs-section-about-header">
                                <h2><?php echo wp_kses_post( get_theme_mod( 'dox_about_headline' ) ); ?></h2>
                            </header>
						<?php }

						if ( get_theme_mod( 'dox_about_description' ) ) { ?>
                            <div class="fy-section__description fy-section__content fy-content cs-section-about-description">
								<?php echo wp_kses_post( do_shortcode( get_theme_mod( 'dox_about_description' ) ) ); ?>
                            </div>
						<?php }

						if ( get_theme_mod( 'dox_about_content' ) ) { ?>
                            <div class="fy-section__content fy-content cs-section-about-content">
								<?php echo wp_kses_post( wpautop( do_shortcode( get_theme_mod( 'dox_about_content' ) ) ) ); ?>
                            </div>
						<?php }

						if ( get_theme_mod( 'dox_homepage_about_button_first_page' ) || get_theme_mod( 'dox_homepage_about_button_second_page' ) ) { ?>

                            <div class="fy-section__actions">

								<?php if ( get_theme_mod( 'dox_homepage_about_button_first_page' ) ) { ?>
                                    <a href="<?php echo get_permalink( get_theme_mod( 'dox_homepage_about_button_first_page' ) ); ?>" class="fy-button fy-button-accent">
										<?php if ( get_theme_mod( 'dox_homepage_about_button_first' ) ) {
											echo esc_html( get_theme_mod( 'dox_homepage_about_button_first' ) );
										} else {
											echo get_the_title( get_theme_mod( 'dox_homepage_about_button_first_page' ) );
										} ?>
                                    </a>
								<?php }

								if ( get_theme_mod( 'dox_homepage_about_button_second_page' ) ) { ?>
                                    <a href="<?php echo get_permalink( get_theme_mod( 'dox_homepage_about_button_second_page' ) ); ?>" class="fy-button fy-button-bordered">
										<?php if ( get_theme_mod( 'dox_homepage_about_button_second' ) ) {
											echo esc_html( get_theme_mod( 'dox_homepage_about_button_second' ) );
										} else {
											echo get_the_title( get_theme_mod( 'dox_homepage_about_button_second_page' ) );
										} ?>
                                    </a>
								<?php } ?>
                            </div>

						<?php } ?>

                    </div>

                </div>

				<?php if ( get_theme_mod( 'dox_about_image' ) || get_theme_mod( 'dox_about_image_2' ) || get_theme_mod( 'dox_about_image_3' ) ) { ?>
                    <div class="fy-about-image-column fy-position-relative fy-flex-column-50 fy-flex-column-desktop-50 fy-flex-column-tablet-100 fy-flex-order-tablet-1">

						<?php if ( get_theme_mod( 'dox_about_image' ) ) {
							$image_id  = attachment_url_to_postid( get_theme_mod( 'dox_about_image' ) );
							$image     = wp_get_attachment_image_src( $image_id, FORQY_THEME_SLUG . '-medium' );
							$image_alt = get_post_meta( $image_id, '_wp_attachment_image_alt', true );
							?>
                            <div class="fy-about-image fy-about-image-1 fy-image-cover cs-section-about-image">

                                <img class="fy-lazy js-lazy"
                                     alt="<?php echo esc_attr( $image_alt ); ?>"
                                     src="<?php echo forqy_image_placeholder(); ?>"
                                     data-src="<?php echo esc_url( $image[0] ); ?>">

								<?php get_template_part( 'templates/image/loading' ); ?>
                            </div>
						<?php }

						if ( get_theme_mod( 'dox_about_image_2' ) ) {
							$image_2_id  = attachment_url_to_postid( get_theme_mod( 'dox_about_image_2' ) );
							$image_2     = wp_get_attachment_image_src( $image_2_id, FORQY_THEME_SLUG . '-medium' );
							$image_2_alt = get_post_meta( $image_2_id, '_wp_attachment_image_alt', true );
							?>
                            <div class="fy-about-image fy-about-image-2 fy-image-cover cs-section-about-image-2">

                                <img class="fy-lazy js-lazy"
                                     alt="<?php echo esc_attr( $image_2_alt ); ?>"
                                     src="<?php echo forqy_image_placeholder(); ?>"
                                     data-src="<?php echo esc_url( $image_2[0] ); ?>">

								<?php get_template_part( 'templates/image/loading' ); ?>
                            </div>
						<?php }

						if ( get_theme_mod( 'dox_about_image_3' ) ) {
							$image_3_id  = attachment_url_to_postid( get_theme_mod( 'dox_about_image_3' ) );
							$image_3     = wp_get_attachment_image_src( $image_3_id, FORQY_THEME_SLUG . '-medium' );
							$image_3_alt = get_post_meta( $image_3_id, '_wp_attachment_image_alt', true );
							?>
                            <div class="fy-about-image fy-about-image-3 fy-image-cover cs-section-about-image-3">

                                <img class="fy-lazy js-lazy"
                                     alt="<?php echo esc_attr( $image_3_alt ); ?>"
                                     src="<?php echo forqy_image_placeholder(); ?>"
                                     data-src="<?php echo esc_url( $image_3[0] ); ?>">

								<?php get_template_part( 'templates/image/loading' ); ?>
                            </div>
						<?php } ?>

                    </div>
				<?php } ?>

            </div>

        </div>

    </section>

<?php }
