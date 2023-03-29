<?php

/*

Layout Column Start Template

*/

if ( get_theme_mod( 'dox_posts_layout', dox_default( 'dox_posts_layout' ) ) == 'default' ) {

	if ( get_theme_mod( 'dox_content_layout', dox_default( 'dox_content_layout' ) ) == '100' ) {
		if ( get_theme_mod( 'dox_post_layout', dox_default( 'dox_post_layout' ) ) == 'side' ) { ?>
            <div class="fy-post-column fy-flex-column-100">
		<?php } else { ?>
            <div class="fy-post-column fy-flex-column-33 fy-flex-column-desktop-wide-50 fy-flex-column-phone-100">
		<?php }
	} else {
		if ( get_theme_mod( 'dox_post_layout', dox_default( 'dox_post_layout' ) ) == 'side' ) { ?>
            <div class="fy-post-column fy-flex-column-100">
		<?php } else { ?>
            <div class="fy-post-column fy-flex-column-25 fy-flex-column-desktop-super-wide-33 fy-flex-column-desktop-wide-50 fy-flex-column-phone-100">
		<?php }
	}

} else { ?>
    <div class="fy-masonry-item js-masonry-item">
<?php }
