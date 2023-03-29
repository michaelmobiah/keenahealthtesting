<?php

/*

Menu Ingredients Template

*/

if ( has_term( '', 'ingredient' ) ) { ?>
    <div class="fy-post-ingredients fy-post-tags">
		<?php if ( get_theme_mod( 'dox_menu_filter_by_ingredients' ) == 'disabled' ) {
		    dox_terms_post( $post->ID, 'ingredient', 0 );
		} else {
		    dox_terms_post( $post->ID, 'ingredient', 1 );
		} ?>
    </div>
<?php }
