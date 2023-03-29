<?php

/*

Menu Thumbnail Template

*/

global $index;

// Attachment Image
$attachment_image = wp_get_attachment_image_src( get_post_thumbnail_id(), FORQY_THEME_SLUG . '-huge' );
// Attachment URL
$attachment_url = $attachment_image[0];
// Attachment Width
$attachment_width = $attachment_image[1];
// Attachment Height
$attachment_height = $attachment_image[2];

// Thumbnail
$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id(), FORQY_THEME_SLUG . '-medium-fixed' );
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

// Image Lightbox
if ( get_theme_mod( 'dox_menu_single', dox_default( 'dox_menu_single' ) ) != 'enabled' ) {
	array_push( $image_class, 'js-image' );
} ?>

<figure class="fy-post-image">

	<?php if ( get_theme_mod( 'dox_menu_single', dox_default( 'dox_menu_single' ) ) != 'enabled' ) { ?>

        <a href="<?php echo esc_url( $attachment_url ); ?>" <?php forqy_class( $image_class ); ?>
           data-size="<?php echo esc_attr( $attachment_width ); ?>x<?php echo esc_attr( $attachment_height ); ?>"
           data-index="<?php echo esc_attr( $index ++ ); ?>">

			<?php
			the_post_thumbnail( FORQY_THEME_SLUG . '-medium-fixed' );
			get_template_part( 'templates/image/loading' );
			?>
        </a>

	<?php } else { ?>

        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" <?php forqy_class( $image_class ); ?>>
			<?php
			the_post_thumbnail( FORQY_THEME_SLUG . '-medium-fixed' );
			get_template_part( 'templates/image/loading' );
			?>
        </a>

	<?php } ?>

    <figcaption class="fy-post-image-caption screen-reader-text">

        <small class="pswp__caption-terms">
			<?php if ( function_exists( 'dox_menu_sections' ) ) {
				dox_menu_sections( false );
			} ?>
        </small>
        <strong class="pswp__caption-title">
			<?php the_title(); ?>
        </strong>
        <small class="pswp__caption-prices">
			<?php get_template_part( 'templates/post/listing/menu/prices' ); ?>
        </small>

    </figcaption>

</figure>
