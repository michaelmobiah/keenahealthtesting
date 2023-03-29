<?php

/*

Thumbnail Template

*/

// Thumbnail
$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id(), FORQY_THEME_SLUG . '-medium' );
// Thumbnail Width
$thumbnail_width = $thumbnail[1];
// Thumbnail Height
$thumbnail_height = $thumbnail[2];

// Image
$image_class = array( 'fy-image-cover' );

// Image Ratio
if ( $thumbnail_width > $thumbnail_height ) {
	array_push( $image_class, 'fy-image-landscape-' . forqy_get_image_ratio( $thumbnail_width, $thumbnail_height ) );
} else if ( $thumbnail_width < $thumbnail_height ) {
	array_push( $image_class, 'fy-image-portrait-' . forqy_get_image_ratio( $thumbnail_width, $thumbnail_height ) );
} else if ( $thumbnail_width == $thumbnail_height ) {
	array_push( $image_class, 'fy-image-square' );
} else {
	array_push( $image_class, 'fy-image-default' );
}
?>

<figure class="fy-post-image">
    <a href="<?php the_permalink(); ?>" <?php forqy_class( $image_class ); ?> tabindex="-1">

		<?php
		the_post_thumbnail( FORQY_THEME_SLUG . '-medium' );
		get_template_part( 'templates/image/loading' );

		if ( get_post_format() == 'video' || get_post_format() == 'audio' ) { ?>
            <div class="fy-post-play">
				<?php get_template_part( 'images/icon/play' ); ?>
            </div>
		<?php } ?>
    </a>
</figure>
