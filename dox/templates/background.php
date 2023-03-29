<?php

/*

Background Template

*/

if ( get_background_image() ) { ?>

    <div class="fy-background-wrap fy-filter" aria-hidden="true">
        <div class="fy-background-site fy-filter-<?php echo esc_attr( get_theme_mod( 'dox_filter', dox_default( 'dox_filter' ) ) ); ?>"></div>
    </div>

<?php }
