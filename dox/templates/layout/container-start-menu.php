<?php

/*

Layout Container Start Template

*/

$posts_gutter = forqy_gutter( get_theme_mod( 'dox_posts_gutter', dox_default( 'dox_posts_gutter' ) ) );

if ( get_theme_mod( 'dox_posts_layout', dox_default( 'dox_posts_layout' ) ) == 'default' ) { ?>

    <div class="fy-grid fy-flex-container fy-flex-container-top-center fy-flex-gutter-<?php echo esc_attr( $posts_gutter ); ?>">

<?php } else {

	if ( get_theme_mod( 'dox_content_layout', dox_default( 'dox_content_layout' ) ) == '100' ) { ?>
        <div class="fy-masonry js-masonry">
	<?php } else { ?>
        <div class="fy-masonry fy-masonry-full js-masonry">
	<?php } ?>
    <div class="fy-masonry-size fy-masonry-item js-masonry-size"></div>

<?php }
