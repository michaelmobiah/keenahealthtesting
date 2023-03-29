<?php

/*

Newsletter Section Template

*/

if ( get_theme_mod( 'dox_newsletter', '1' ) ) { ?>

    <section id="<?php echo esc_attr_x( 'newsletter', 'section anchor', 'dox' ); ?>" class="fy-section fy-section--newsletter fy-newsletter cs-newsletter" role="complementary">

        <div class="fy-section__container fy-centerer">

            <div class="fy-flex-container fy-flex-container-center">

                <div class="fy-flex-column-auto fy-flex-column-tablet-100">

                    <div class="fy-section__header">
                        <h2><?php echo wp_kses_post( get_theme_mod( 'dox_newsletter_title', __( 'Subscribe to Newsletter', 'dox' ) ) ); ?></h2>
                    </div>

                    <div class="fy-section__content fy-content">
                        <p><?php echo wp_kses_post( get_theme_mod( 'dox_newsletter_content', __( 'Subscribe to our newsletter to get the latest scoop right to your inbox.', 'dox' ) ) ); ?></p>
                    </div>

                    <div class="fy-section__footer fy-content">
						<?php echo wp_kses_post( get_theme_mod( 'dox_newsletter_footer', __( 'No spam ever. That\'s a promise.', 'dox' ) ) ); ?>
                    </div>

                </div>
                <div class="fy-flex-column fy-flex-column-tablet-100 fy-align-right">

					<?php if ( function_exists( 'mc4wp_show_form' ) ) { ?>
                        <div class="fy-newsletter-form fy-section__form">
							<?php mc4wp_show_form(); ?>
                        </div>
					<?php } ?>

                </div>

            </div>

        </div>

    </section>

<?php }
