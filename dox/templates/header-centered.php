<?php

/*

Header Left Template

*/

?>
<header class="fy-header fy-header-centered is-on-top js-header<?php if ( get_theme_mod( 'dox_header_sticky', dox_default( 'dox_header_sticky' ) ) == 'enabled' ) { ?> js-sticky js-autohide<?php } else { ?> fy-header-static<?php } ?>"
        aria-label="<?php echo esc_attr_x( 'Header', 'aria label', 'dox' ); ?>">

	<?php get_template_part( 'templates/bar' ); ?>

    <div class="fy-header-container">

        <div class="fy-flex-container fy-flex-container-center fy-flex-gutter-medium">

			<?php if ( get_theme_mod( 'dox_header_text' ) ) { ?>
                <div class="fy-text-column fy-flex-column-auto fy-align-left">

                    <div class="fy-header-text cs-header-text fy-phone-hide">
						<?php echo do_shortcode( wp_kses_post( get_theme_mod( 'dox_header_text' ) ) ); ?>
                    </div>

                </div>
			<?php } else { ?>
                <div class="fy-flex-column-auto"></div>
			<?php } ?>

            <div class="fy-logo-column fy-flex-column-auto fy-align-center">
				<?php get_template_part( 'templates/logo' ); ?>
            </div>

            <div class="fy-flex-column-auto">

                <div class="fy-flex-container fy-flex-container-center fy-flex-gutter-small">

					<?php if ( dox_socials_exists() && get_theme_mod( 'dox_header_socials', dox_default( 'dox_header_socials' ) ) != 'disabled' ) { ?>
                        <div class="fy-navigation-socials fy-flex-column-auto fy-align-right">
							<?php get_template_part( 'templates/social/socials' ); ?>
                        </div>
					<?php }

					if ( forqy_woocommerce_activated() && get_theme_mod( 'dox_header_shop_toolbar', dox_default( 'dox_header_shop_toolbar' ) ) != 'disabled' ) { ?>
                        <div class="fy-toolbar-column fy-flex-column fy-align-right">
							<?php get_template_part( 'templates/toolbar/shop' ); ?>
                        </div>
					<?php } ?>

                </div>

            </div>

        </div>

        <div class="fy-flex-container fy-flex-container-center fy-flex-gutter-small">

			<?php if ( get_theme_mod( 'dox_navigation' ) != 'disabled' ) { ?>
                <div class="fy-flex-column-100 fy-desktop-hide fy-tablet-show fy-align-center">
					<?php get_template_part( 'templates/navigation/trigger' ); ?>
                </div>
			<?php }

			if ( get_theme_mod( 'dox_navigation' ) != 'disabled' ) { ?>
                <div class="fy-navigation-column fy-flex-column-100 fy-flex-grow-3 fy-align-center js-off__container">
					<?php get_template_part( 'templates/navigation/menu' ); ?>
                </div>
			<?php } ?>

        </div>

    </div>

</header>
