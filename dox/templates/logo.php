<?php

/*

Logo Template

*/

// Class
$logo_class = array( 'fy-logo', 'cs-logo' );

if ( get_theme_mod( 'dox_logo_image_sticky' ) ) {
	array_push( $logo_class, 'has-sticky-logo' );
}

if ( is_front_page() || is_page_template( 'template-homepage.php' ) || is_page_template( 'template-homepage-blog.php' ) || is_page_template( 'template-homepage-shop.php' ) ) { ?>
    <h1 <?php forqy_class( $logo_class ); ?>>
		<?php get_template_part( 'templates/logo/link' ); ?>
    </h1>
<?php } else { ?>
    <p <?php forqy_class( $logo_class ); ?>>
		<?php get_template_part( 'templates/logo/link' ); ?>
    </p>
<?php }
