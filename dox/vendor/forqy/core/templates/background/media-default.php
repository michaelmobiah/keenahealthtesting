<?php

/**
 * Default Media Background Template
 */

/**
 * Variables
 * Passed from Template
 */

// Size
$size = ! empty( get_query_var( 'forqy_background_size' ) ) ? get_query_var( 'forqy_background_size' ) : 'full';
// Object
$object = ! empty( get_query_var( 'forqy_background_object' ) ) ? get_query_var( 'forqy_background_object' ) : 'cover';
// Filter
$filter = ! empty( get_query_var( 'forqy_background_filter' ) ) ? get_query_var( 'forqy_background_filter' ) : 'none';

/**
 * Video
 */

if ( is_home() && get_option( 'page_for_posts' ) ) {
	$videos = forqy_meta( 'fy_video', array(), get_option( 'page_for_posts' ) );
} else {
	$videos = forqy_meta( 'fy_video' );
}

/**
 * Category
 */

if ( is_category() && function_exists( 'forqy_get_category_image_src' ) ) {
	$category       = get_category( get_query_var( 'cat' ) );
	$category_image = forqy_get_category_image_src( $category, $size );
}

/**
 * Term
 */

if ( is_tax() && function_exists( 'forqy_get_taxonomy_image_src' ) ) {
	$term       = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
	$term_image = forqy_get_taxonomy_image_src( $term, $size );
}

/**
 * Class
 */

// Media
$media_class = array( 'fy-background-media' );

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

if ( has_header_image() ) {

	/**
	 * Header
	 */
	$image_url    = get_header_image();
	$image_id     = get_custom_header()->attachment_id;
	$image_alt    = get_post_meta( $image_id, '_wp_attachment_image_alt', true );
	$image_width  = get_custom_header()->width;
	$image_height = get_custom_header()->height;

	array_push( $media_class, 'fy-background-image fy-background-image--header' ); ?>

    <figure <?php forqy_class( $media_class ); ?>>
        <img <?php forqy_class( $image_class ); ?>
                width="<?php echo esc_attr( $image_width ); ?>"
                height="<?php echo esc_attr( $image_height ); ?>"
                alt="<?php echo esc_attr( $image_alt ); ?>"
                src="<?php echo forqy_image_placeholder( $image_width, $image_height ); ?>"
                data-src="<?php echo esc_url( $image_url ); ?>">
    </figure>

<?php } else { ?>

    <div class="fy-background-media fy-background-empty"></div>

<?php }
