<?php

/*

Shop Image Background Template

*/

/**
 * Variables
 */

// Object
$object = get_theme_mod( 'dox_heading_background_image_size', dox_default( 'dox_heading_background_image_size' ) );
// Filter
$filter = get_theme_mod( 'dox_filter', dox_default( 'dox_filter' ) );

/**
 * Class
 */

// Background
$background_class = array( 'fy-background' );

if ( get_theme_mod( 'dox_heading_background_width', dox_default( 'dox_heading_background_width' ) ) ) {
	array_push( $background_class, 'fy-background-width-' . esc_attr( get_theme_mod( 'dox_heading_background_width', dox_default( 'dox_heading_background_width' ) ) ) );
}

// Media
$media_class = array( 'fy-background-media', 'fy-background-image', 'fy-background-image--shop' );

if ( $object ) {
	array_push( $media_class, 'fy-image-' . esc_attr( $object ) );
}
if ( $filter != 'none' ) {
	array_push( $media_class, 'fy-filter' );
}

// Image
$image_class = array( 'fy-lazy', 'js-lazy' );

if ( $filter != 'none' ) {
	array_push( $image_class, 'fy-filter-' . esc_attr( $filter ) );
}

if ( get_theme_mod( 'dox_shop_heading_image' ) ) {

	$heading_image_id  = attachment_url_to_postid( get_theme_mod( 'dox_shop_heading_image' ) );
	$heading_image_alt = strip_tags( get_post_meta( $heading_image_id, '_wp_attachment_image_alt', true ) );
	?>

    <div <?php forqy_class( $background_class ); ?>>
        <div <?php forqy_class( $media_class ); ?>>
            <img <?php forqy_class( $image_class ); ?>
                    alt="<?php echo esc_attr( $heading_image_alt ); ?>"
                    src="<?php echo forqy_image_placeholder(); ?>"
                    data-src="<?php echo esc_url( get_theme_mod( 'dox_shop_heading_image' ) ); ?>">
        </div>
    </div>

<?php } else {

	get_template_part( 'templates/image/background', 'default' );

}
