<?php

/*

Post Content Template

*/

$content = get_the_content();

// Property
$itemprop = array();

if ( ! is_singular( 'album' ) ) {

	if ( is_singular( array( 'post', 'gallery' ) ) ) {
		array_push( $itemprop, 'articleBody' );
	} else {
		array_push( $itemprop, 'description' );
	}

}

if ( ! empty( $content ) ) { ?>
    <div class="fy-centerer fy-centerer-<?php echo esc_attr( get_theme_mod( 'dox_post_single_width', dox_default( 'dox_post_single_width' ) ) ); ?>">
        <div class="fy-post-content fy-main-content fy-content js-images" <?php forqy_itemprop( $itemprop ); ?>>
			<?php
			the_content();
			wp_link_pages();
			?>
        </div>
    </div>
<?php } else {
	the_content();
}
