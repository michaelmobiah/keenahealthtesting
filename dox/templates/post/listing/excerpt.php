<?php

/*

Post Excerpt Template

*/

$excerpt = get_the_excerpt();

if ( ! empty ( $excerpt ) && get_theme_mod( 'dox_post_excerpt', dox_default( 'dox_post_excerpt' ) ) != 'disabled' ) { ?>
    <div class="fy-post-excerpt">
		<?php the_excerpt(); ?>
    </div>
<?php }
