<?php

/*

Widgets on Homepage - Top Template

*/

if ( is_active_sidebar( 'homepage-top' ) ) { ?>
    <div class="fy-section fy-section--widgets fy-section--widgets-top">

        <div class="fy-section__container fy-centerer fy-centerer-<?php echo esc_attr( get_theme_mod( 'dox_content_layout', dox_default( 'dox_content_layout' ) ) ); ?>">

            <div class="fy-flex-container">
				<?php dynamic_sidebar( 'homepage-top' ); ?>
            </div>

        </div>

    </div>
<?php }
