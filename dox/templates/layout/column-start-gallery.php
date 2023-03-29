<?php

/*

Layout Column Start Template

*/

if ( get_theme_mod( 'dox_posts_layout', dox_default( 'dox_posts_layout' ) ) == 'default' ) { ?>

	<?php if ( get_theme_mod( 'dox_content_layout', dox_default( 'dox_content_layout' ) ) == '100' ) { ?>
        <div class="fy-image-column fy-flex-column-25 fy-flex-column-desktop-33 fy-flex-column-phone-100">
	<?php } else { ?>
        <div class="fy-image-column fy-flex-column-20 fy-flex-column-desktop-25 fy-flex-column-tablet-33 fy-flex-column-phone-100">
	<?php }

} else { ?>
    <div class="fy-masonry-item js-masonry-item">
<?php }
