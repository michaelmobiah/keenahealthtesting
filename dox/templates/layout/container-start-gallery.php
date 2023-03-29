<?php

/*

Layout Container Start Template

*/

if ( get_theme_mod( 'dox_posts_layout', dox_default( 'dox_posts_layout' ) ) == 'default' ) { ?>

    <div class="fy-grid-gallery fy-flex-container fy-flex-container-top-center">

<?php } else {

	if ( get_theme_mod( 'dox_content_layout', dox_default( 'dox_content_layout' ) ) == '100' ) { ?>
        <div class="fy-masonry-gallery fy-masonry js-masonry">
	<?php } else { ?>
        <div class="fy-masonry-gallery fy-masonry fy-masonry-full js-masonry">
	<?php } ?>
    <div class="fy-masonry-size fy-masonry-item js-masonry-size"></div>

<?php }
