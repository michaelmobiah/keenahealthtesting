<?php

/*

Widgets on Homepage - Call to Action Template

*/

if ( is_active_sidebar( 'homepage-call-to-action' ) ) { ?>
    <div class="fy-section fy-section--widgets fy-section--widgets-cta">

        <div class="fy-section__container">

            <div class="fy-centerer fy-centerer-<?php echo esc_attr( get_theme_mod( 'dox_content_layout', dox_default( 'dox_content_layout' ) ) ); ?>">

                <div class="fy-flex-container fy-flex-gutter-small">
					<?php dynamic_sidebar( 'homepage-call-to-action' ); ?>
                </div>

            </div>

        </div>

    </div>
<?php }
