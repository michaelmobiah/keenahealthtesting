<?php

/*

Slideshow Background Template

*/

// Filter
$filter = get_theme_mod( 'dox_filter', dox_default( 'dox_filter' ) );

// Background
$background_id = attachment_url_to_postid( get_theme_mod( 'dox_slideshow_image' ) );
$background    = wp_get_attachment_image_src( $background_id, FORQY_THEME_SLUG . '-huge-fixed' );
// Background Alt
$background_alt = get_post_meta( $background_id, '_wp_attachment_image_alt', true );

if ( get_theme_mod( 'dox_slideshow_image' ) ) { ?>
    <div class="fy-background-slideshow fy-background">
        <div class="fy-background-image fy-image-cover fy-filter">
            <img class="fy-filter-<?php echo esc_attr( $filter ); ?> fy-lazy js-lazy"
                 alt="<?php echo esc_attr( $background_alt ); ?>"
                 src="<?php echo forqy_image_placeholder(); ?>"
                 data-src="<?php echo esc_url( $background[0] ); ?>">
        </div>
    </div>
<?php }
