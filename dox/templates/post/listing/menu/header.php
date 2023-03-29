<?php

/*

Menu Header Template

*/

?>

<header class="fy-post-header">

    <div class="fy-flex-container fy-flex-container-top">

        <div class="fy-flex-column-auto fy-flex-column-phone-100">
			<?php echo is_tax( 'section' ) || is_tax( 'ingredient' ) ? '<h2>' : '<h3>';
			if ( get_theme_mod( 'dox_menu_single', dox_default( 'dox_menu_single' ) ) != 'enabled' ) {
				the_title();
			} else { ?>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			<?php }
			echo is_tax( 'section' ) || is_tax( 'ingredient' ) ? '</h2>' : '</h3>'; ?>
        </div>

    </div>
</header>