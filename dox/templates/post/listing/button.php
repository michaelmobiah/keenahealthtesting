<?php

/*

Button Template

*/

if ( get_theme_mod( 'dox_post_button' ) != 'disabled' ) { ?>
    <a href="<?php the_permalink(); ?>" tabindex="-1" class="fy-post-button fy-button fy-button-small fy-button-bordered">
	    <?php /* translators: %s: title of the post */
	    echo sprintf( __( 'View %s', 'dox' ), '<span class="screen-reader-text">' . get_the_title() . '</span>' ); ?>
    </a>
<?php }
