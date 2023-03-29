<?php

/**
 * Media Background Template
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
	$videos = forqy_meta( 'fy_video', array(), get_the_ID() );
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

// Video
$video_class = array( 'fy-video', 'js-video', 'fy-lazy', 'js-lazy' );

if ( $filter != 'none' ) {
	array_push( $video_class, 'fy-filter-' . esc_attr( $filter ) );
}

if ( ! empty ( $videos ) && ! is_home() && ! is_tax() && ! is_category() ) {

	/**
	 * Video
	 */
	$video_autoplay = forqy_meta( 'fy_video_autoplay' );
	$video_loop     = forqy_meta( 'fy_video_loop' );
	$video_muted    = forqy_meta( 'fy_video_muted' );

	foreach ( $videos as $video ) { ?>
        <figure class="fy-background-media fy-background-video fy-filter js-video-container">

            <video <?php forqy_class( $video_class ); ?> data-src="<?php echo esc_url( $video['src'] ); ?>" preload="none"
				<?php if ( $video_autoplay == 1 ) { ?> autoplay<?php } ?>
				<?php if ( $video_loop == 1 ) { ?> loop<?php } ?>
				<?php if ( $video_muted == 1 ) { ?> muted<?php } ?>>
            </video>

        </figure>
		<?php
	}

} else if ( is_home() && ( ! empty ( $videos ) || has_post_thumbnail( get_option( 'page_for_posts' ) ) ) ) {

	/**
	 * Page for Posts
	 */

	if ( ! empty ( $videos ) ) {

		/**
		 * Video
		 */
		$video_autoplay = forqy_meta( 'fy_video_autoplay', false, get_option( 'page_for_posts' ) );
		$video_loop     = forqy_meta( 'fy_video_loop', false, get_option( 'page_for_posts' ) );
		$video_muted    = forqy_meta( 'fy_video_muted', false, get_option( 'page_for_posts' ) );

		array_push( $media_class, 'fy-background-video fy-background-video--posts js-video-container' );

		foreach ( $videos as $video ) { ?>
            <figure <?php forqy_class( $media_class ); ?>>

                <video <?php forqy_class( $video_class ); ?> data-src="<?php echo esc_url( $video['src'] ); ?>" preload="none"
					<?php if ( $video_autoplay == 1 ) { ?> autoplay<?php } ?>
					<?php if ( $video_loop == 1 ) { ?> loop<?php } ?>
					<?php if ( $video_muted == 1 ) { ?> muted<?php } ?>>
                </video>

            </figure>
		<?php }

	} else if ( has_post_thumbnail( get_option( 'page_for_posts' ) ) ) {

		/**
		 * Thumbnail
		 */
		$image_url    = get_the_post_thumbnail_url( get_option( 'page_for_posts' ), $size );
		$image_id     = get_post_thumbnail_id( get_option( 'page_for_posts' ) );
		$image_alt    = get_post_meta( $image_id, '_wp_attachment_image_alt', true );
		$image_width  = wp_get_attachment_image_src( $image_id, $size )[1];
		$image_height = wp_get_attachment_image_src( $image_id, $size )[2];

		array_push( $media_class, 'fy-background-image fy-background-image--posts' );
		?>

        <figure <?php forqy_class( $media_class ); ?>>
            <img <?php forqy_class( $image_class ); ?>
                    width="<?php echo esc_attr( $image_width ); ?>"
                    height="<?php echo esc_attr( $image_height ); ?>"
                    alt="<?php echo esc_attr( $image_alt ); ?>"
                    src="<?php echo forqy_image_placeholder( $image_width, $image_height ); ?>"
                    data-src="<?php echo esc_url( $image_url ); ?>">
        </figure>

	<?php }

} else if ( has_post_thumbnail() && ( is_single() || is_singular() ) ) {

	/**
	 * Single
	 */
	$image_url    = get_the_post_thumbnail_url( get_the_ID(), $size );
	$image_id     = get_post_thumbnail_id( get_the_ID() );
	$image_alt    = get_post_meta( $image_id, '_wp_attachment_image_alt', true );
	$image_width  = wp_get_attachment_image_src( $image_id, $size )[1];
	$image_height = wp_get_attachment_image_src( $image_id, $size )[2];

	array_push( $media_class, 'fy-background-image fy-background-image--single' );
	?>

    <figure <?php forqy_class( $media_class ); ?>>
        <img <?php forqy_class( $image_class ); ?>
                width="<?php echo esc_attr( $image_width ); ?>"
                height="<?php echo esc_attr( $image_height ); ?>"
                alt="<?php echo esc_attr( $image_alt ); ?>"
                src="<?php echo forqy_image_placeholder( $image_width, $image_height ); ?>"
                data-src="<?php echo esc_url( $image_url ); ?>">

		<?php if ( get_the_post_thumbnail_caption() ) { ?>
            <figcaption class="fy-background-caption">
				<?php the_post_thumbnail_caption(); ?>
            </figcaption>
		<?php } ?>
    </figure>

<?php } else if ( is_category() && ! empty( $category ) && ! empty( $category_image ) ) {

	/**
	 * Category
	 */
	$image_url    = $category_image['src'];
	$image_id     = attachment_url_to_postid( $image_url );
	$image_alt    = get_post_meta( $image_id, '_wp_attachment_image_alt', true );
	$image_width  = wp_get_attachment_image_src( $image_id, $size )[1];
	$image_height = wp_get_attachment_image_src( $image_id, $size )[2];

	array_push( $media_class, 'fy-background-image fy-background-image--category' );
	?>

    <figure <?php forqy_class( $media_class ); ?>>
        <img <?php forqy_class( $image_class ); ?>
                width="<?php echo esc_attr( $image_width ); ?>"
                height="<?php echo esc_attr( $image_height ); ?>"
                alt="<?php echo esc_attr( $image_alt ); ?>"
                src="<?php echo forqy_image_placeholder( $image_width, $image_height ); ?>"
                data-src="<?php echo esc_url( $image_url ); ?>">
    </figure>

<?php } else if ( is_tax() && ! empty( $term ) && ! empty( $term_image ) ) {

	/**
	 * Term
	 */
	$image_url    = $term_image['src'];
	$image_id     = attachment_url_to_postid( $image_url );
	$image_alt    = get_post_meta( $image_id, '_wp_attachment_image_alt', true );
	$image_width  = wp_get_attachment_image_src( $image_id, $size )[1];
	$image_height = wp_get_attachment_image_src( $image_id, $size )[2];

	array_push( $media_class, 'fy-background-image fy-background-image--term' );
	?>

    <figure <?php forqy_class( $media_class ); ?>>
        <img <?php forqy_class( $image_class ); ?>
                width="<?php echo esc_attr( $image_width ); ?>"
                height="<?php echo esc_attr( $image_height ); ?>"
                alt="<?php echo esc_attr( $image_alt ); ?>"
                src="<?php echo forqy_image_placeholder( $image_width, $image_height ); ?>"
                data-src="<?php echo esc_url( $image_url ); ?>">
    </figure>

<?php } else if ( has_header_image() ) {

	/**
	 * Header
	 */
	$image_url    = get_header_image();
	$image_id     = attachment_url_to_postid( $image_url );
	$image_alt    = get_post_meta( $image_id, '_wp_attachment_image_alt', true );
	$image_width  = get_custom_header()->width;
	$image_height = get_custom_header()->height;

	array_push( $media_class, 'fy-background-image fy-background-image--header' );
	?>

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
