<?php

/*

Footer Widgets

*/

if ( is_active_sidebar( 'footer' ) ) { ?>

    <div class="fy-footer-widgets fy-footer-section">
		<?php get_template_part( 'templates/design/border' ); ?>

        <div class="fy-centerer fy-centerer-<?php echo esc_attr( get_theme_mod( 'dox_footer_width', dox_default( 'dox_footer_width' ) ) ); ?>">

            <div class="fy-flex-container fy-flex-container-top<?php if ( get_theme_mod( 'dox_footer_width', dox_default( 'dox_footer_width' ) ) == 'full' ) { ?> fy-flex-gutter-xlarge<?php } ?>">
				<?php dynamic_sidebar( 'footer' ); ?>
            </div>

        </div>
    </div>

<?php }
