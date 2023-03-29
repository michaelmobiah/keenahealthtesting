<?php

/*

Categories Layout Column Start Template

*/

if ( get_theme_mod( 'dox_content_layout', dox_default( 'dox_content_layout' ) ) == '100' ) { ?>
    <div class="fy-category-column fy-flex-column-25 fy-flex-column-desktop-33 fy-flex-column-tablet-50 fy-flex-column-phone-min-100">
<?php } else { ?>
    <div class="fy-category-column fy-flex-column-20 fy-flex-column-desktop-25 fy-flex-column-tablet-33 fy-flex-column-phone-50 fy-flex-column-phone-min-100">
<?php }
