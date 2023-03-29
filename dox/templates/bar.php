<?php

/*

Bar Template

*/

if ( get_theme_mod( 'dox_bar', dox_default( 'dox_bar' ) ) != 'disabled' ) { ?>

    <div class="fy-bar">

        <div class="fy-bar-container">

            <div class="fy-flex-container fy-flex-container-center fy-flex-gutter-xsmall">

                <div class="fy-navigation-column fy-flex-column-auto fy-flex-column-tablet-0 js-off__container">
					<?php if ( has_nav_menu( 'navigation_bar' ) ) {
						get_template_part( 'templates/navigation/menu', 'bar' );
					} ?>
                </div>

				<?php if ( has_nav_menu( 'navigation_bar' ) ) { ?>
                    <div class="fy-flex-column fy-desktop-hide fy-tablet-show">
						<?php get_template_part( 'templates/navigation/trigger', 'bar' ); ?>
                    </div>
				<?php }

				if ( has_action( 'dox_bar_icon' ) || get_theme_mod( 'dox_bar_icon' ) ) { ?>
                    <div class="fy-icon-column fy-flex-column fy-align-center">
                        <div class="fy-bar-icon cs-bar-icon">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" tabindex="-1">
								<?php if ( has_action( 'dox_bar_icon' ) ) {
									do_action( 'dox_bar_icon' );
								} else if ( get_theme_mod( 'dox_bar_icon' ) ) {

									$icon_image_id = attachment_url_to_postid( get_theme_mod( 'dox_bar_icon' ) );
									$icon_image    = wp_get_attachment_image_src( $icon_image_id );
									?>
                                    <img class="fy-bar-icon-img fy-lazy js-lazy"
                                         alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"
                                         width="<?php echo( esc_attr( $icon_image[1] / 2 ) ); ?>"
                                         height="<?php echo( esc_attr( $icon_image[2] / 2 ) ); ?>"
                                         src="<?php echo forqy_image_placeholder( $icon_image[1] / 2, $icon_image[2] / 2 ); ?>"
                                         data-src="<?php echo esc_url( $icon_image[0] ); ?>">
								<?php } ?>
                            </a>
                        </div>
                    </div>
				<?php } ?>

                <div class="fy-flex-column-auto">

                    <div class="fy-flex-container fy-flex-container-center-right fy-flex-gutter-xsmall">

						<?php if ( get_theme_mod( 'dox_bar_text' ) ) { ?>
                            <div class="fy-text-column fy-flex-column-auto fy-align-right fy-tablet-hide fy-phone-hide">
                                <div class="fy-bar-text cs-bar-text">
									<?php echo wp_kses_post( get_theme_mod( 'dox_bar_text' ) ); ?>
                                </div>
                            </div>
						<?php } else { ?>
                            <div class="fy-flex-column-auto"></div>
						<?php }

						if ( dox_socials_exists() && get_theme_mod( 'dox_bar_socials', dox_default( 'dox_bar_socials' ) ) == 'enabled' ) { ?>
                            <div class="fy-socials-column fy-flex-column fy-align-right">
								<?php get_template_part( 'templates/social/socials' ); ?>
                            </div>
						<?php }

						if ( forqy_woocommerce_activated() && get_theme_mod( 'dox_bar_cart', dox_default( 'dox_bar_cart' ) ) == 'enabled' ) { ?>
                            <div class="fy-toolbar-column fy-flex-column fy-align-right">
								<?php get_template_part( 'templates/toolbar/shop' ); ?>
                            </div>
						<?php } ?>

                    </div>

                </div>

            </div>

        </div>

    </div>

<?php }
