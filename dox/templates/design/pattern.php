<?php

/*

Pattern Template

*/

if ( get_theme_mod( 'dox_pattern', dox_default( 'dox_pattern' ) ) ) { ?>
    <div class="fy-pattern fy-pattern-<?php echo esc_attr( get_theme_mod( 'dox_pattern', dox_default( 'dox_pattern' ) ) ); ?>"></div>
<?php }
