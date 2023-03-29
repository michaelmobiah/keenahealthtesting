<?php

/*

Border Template

*/

if ( get_theme_mod( 'dox_border', dox_default( 'dox_border' ) ) ) { ?>
    <div class="fy-border fy-border-<?php echo esc_attr( get_theme_mod( 'dox_border', dox_default( 'dox_border' ) ) ); ?>">
		<?php get_template_part( 'vendor/forqy/border/inc/border/' . get_theme_mod( 'dox_border', dox_default( 'dox_border' ) ) ); ?>
    </div>
<?php }
