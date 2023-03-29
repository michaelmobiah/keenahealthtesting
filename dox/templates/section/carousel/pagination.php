<?php

/*

Slideshow Pagination Template

*/

if ( get_theme_mod( 'dox_slideshow_pagination', dox_default( 'dox_slideshow_pagination' ) ) != 'disabled' ) { ?>
    <div class="fy-carousel__pagination js-carousel-pagination" aria-controls="<?php echo esc_attr( forqy_title_to_slug( _x( 'carousel', 'section anchor', 'dox' ) ) ); ?>"></div>
<?php }
