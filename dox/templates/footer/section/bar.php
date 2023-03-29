<?php

/*

Footer Bar

*/

?>

<div class="fy-footer-bar fy-footer-section">
	<?php if ( ! is_active_sidebar( 'footer' ) ) {
		get_template_part( 'templates/design/border' );
	} ?>

    <div class="fy-centerer fy-centerer-<?php echo esc_attr( get_theme_mod( 'dox_footer_width', dox_default( 'dox_footer_width' ) ) ); ?>">

        <div class="fy-flex-container fy-flex-container-center">

			<?php if ( has_action( 'dox_footer_logo' ) || get_theme_mod( 'dox_footer_logo' ) ) { ?>
                <div class="fy-flex-column fy-flex-column-tablet-100 fy-flex-order-tablet-1">
					<?php get_template_part( 'templates/footer/logo' ); ?>
                </div>
			<?php } ?>

            <div class="fy-flex-column-auto fy-flex-column-tablet-100 fy-flex-order-tablet-2">
				<?php get_template_part( 'templates/footer/copyright' ); ?>
            </div>

            <div class="fy-flex-column fy-flex-column-tablet-100 fy-flex-order-tablet-3">

                <div class="fy-flex-container fy-flex-container-center">

                    <div class="fy-flex-column-auto fy-flex-column-tablet-100">
						<?php if ( has_nav_menu( 'navigation_footer' ) ) { ?>
                            <nav class="fy-footer-navigation" itemscope itemtype="https://schema.org/SiteNavigationElement"
                                 aria-label="<?php echo esc_attr_x( 'Footer Navigation', 'aria label', 'dox' ); ?>">
								<?php dox_navigation_footer(); ?>
                            </nav>
						<?php } ?>
                    </div>

                    <div class="fy-flex-column fy-flex-column-tablet-100">
						<?php get_template_part( 'templates/social/socials' ); ?>
                    </div>

                    <div class="fy-flex-column fy-flex-column-tablet-100">
						<?php get_template_part( 'templates/back-to-top' ); ?>
                    </div>

                </div>

            </div>

        </div>

    </div>

</div>