<?php

/*

Carousel Thumbnail Template [Square]

*/

// Thumbnail
if ( get_post_type() == 'album' ) {
	$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id(), FORQY_THEME_SLUG . '-medium-square' );
} else {
	$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id(), FORQY_THEME_SLUG . '-medium-fixed' );
}
// Thumbnail Alt
$thumbnail_alt = get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true );
// Thumbnail Image
$thumbnail_image = $thumbnail[0];
// Thumbnail Width
$thumbnail_width = $thumbnail[1];
// Thumbnail Height
$thumbnail_height = $thumbnail[2];

// Image
$image_class = array( 'fy-image-cover' );

// Image Ratio
if ( get_post_type() == 'album' ) {
	array_push( $image_class, 'fy-image-square' );
} else {
	if ( $thumbnail_width > $thumbnail_height ) {
		array_push( $image_class, 'fy-image-landscape-' . forqy_get_image_ratio( $thumbnail_width, $thumbnail_height ) );
	} else if ( $thumbnail_width < $thumbnail_height ) {
		array_push( $image_class, 'fy-image-portrait-' . forqy_get_image_ratio( $thumbnail_width, $thumbnail_height ) );
	} else if ( $thumbnail_width == $thumbnail_height ) {
		array_push( $image_class, 'fy-image-square' );
	} else {
		array_push( $image_class, 'fy-image-default' );
	}
}
?>

<figure class="fy-post-image">
    <a href="<?php the_permalink(); ?>" <?php forqy_class( $image_class ); ?> tabindex="-1">

        <img class="fy-lazy js-lazy"
             alt="<?php echo esc_attr( $thumbnail_alt ); ?>"
             src="<?php echo forqy_image_placeholder(); ?>"
             data-src="<?php echo esc_url( $thumbnail_image ); ?>">

		<?php
		get_template_part( 'templates/image/loading' );

		if ( get_post_format() == 'video' || get_post_format() == 'audio' ) { ?>
            <div class="fy-post-play">
				<?php get_template_part( 'images/icon/play' ); ?>
            </div>
		<?php } ?>
    </a>
</figure>
