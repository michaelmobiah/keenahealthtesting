<?php

/*

Menu Content Template

*/

if ( get_theme_mod( 'dox_menu_content' ) == 'content' ) { ?>
    <div class="fy-post-content fy-main-content fy-content">
		<?php the_content(); ?>
    </div>
<?php } else { ?>
    <div class="fy-post-excerpt">
		<?php the_excerpt(); ?>
    </div>
<?php }
