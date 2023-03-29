<?php

/*

Masked Pattern Template

*/

if ( get_theme_mod( 'dox_pattern', dox_default( 'dox_pattern' ) ) ) { ?>
    <div class="fy-pattern fy-pattern-<?php echo esc_attr( get_theme_mod( 'dox_pattern', dox_default( 'dox_pattern' ) ) ); ?> fy-mask-<?php echo esc_attr( get_theme_mod( 'dox_mask', dox_default( 'dox_mask' ) ) ); ?>"></div>
<?php }
