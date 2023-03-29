<?php

/*

Widgets on Homepage - Bottom Template

*/

if ( is_active_sidebar( 'homepage-bottom' ) ) { ?>
    <div class="fy-section fy-section--widgets fy-section--widgets-bottom">

        <div class="fy-section__container fy-centerer fy-centerer-<?php echo esc_attr( get_theme_mod( 'dox_content_layout', dox_default( 'dox_content_layout' ) ) ); ?>">

            <div class="fy-flex-container fy-flex-gutter-large">
				<?php dynamic_sidebar( 'homepage-bottom' ); ?>
            </div>

        </div>

    </div>
<?php }
