<?php

/*

Slideshow Slide Background

*/

// Total
$total = get_query_var( 'dox_slideshow_total' );

// Effects
$filter = get_theme_mod( 'dox_filter', dox_default( 'dox_filter' ) );
$mask   = get_theme_mod( 'dox_mask', dox_default( 'dox_mask' ) );

// Video
$video          = forqy_meta( 'fy_video' );
$video_autoplay = forqy_meta( 'fy_video_autoplay' );
$video_loop     = forqy_meta( 'fy_video_loop' );
$video_muted    = forqy_meta( 'fy_video_muted' );

$video_class = array( 'fy-slide-video' );

if ( $filter != 'none' ) {
	array_push( $video_class, 'fy-filter-' . esc_attr( $filter ) );
}

// Image
$image_class = array( 'fy-slide-image' );

if ( $total > 1 ) {
	array_push( $image_class, 'swiper-lazy' );
} else {
	array_push( $image_class, 'fy-lazy js-lazy' );
}
if ( $filter != 'none' ) {
	array_push( $image_class, 'fy-filter-' . esc_attr( $filter ) );
}

// Background - Video
if ( ! empty ( $video ) ) {
	foreach ( $video as $vid ) { ?>

        <div class="fy-slide-background fy-filter<?php if ( $mask != 'none' ) { ?> fy-mask-<?php echo esc_attr( $mask ); ?><?php } ?>">

            <div <?php forqy_class( $video_class ); ?>>

                <video class="fy-video js-video fy-lazy js-lazy" data-src="<?php echo esc_url( $vid['src'] ); ?>" preload="none"
					<?php if ( $video_autoplay == 1 ) { ?> autoplay<?php } ?>
					<?php if ( $video_loop == 1 ) { ?> loop<?php } ?>
					<?php if ( $video_muted == 1 ) { ?> muted<?php } ?>>
                </video>

            </div>

			<?php if ( has_post_thumbnail( $vid['ID'] ) ) {

				$video_thumbnail     = wp_get_attachment_image_src( get_post_thumbnail_id( $vid['ID'] ), FORQY_THEME_SLUG . '-huge' );
				$video_thumbnail_alt = get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true );
				?>

                <img <?php forqy_class( $image_class ); ?>
                        alt="<?php echo esc_attr( $video_thumbnail_alt ); ?>"
                        src="<?php echo forqy_image_placeholder( $video_thumbnail[1], $video_thumbnail[2] ); ?>"
                        data-src="<?php echo esc_url( $video_thumbnail[0] ); ?>">

			<?php }

			get_template_part( 'templates/design/pattern', 'masked' );
			?>

        </div>

		<?php
	}

// Background - Image
} else if ( has_post_thumbnail() ) {

	$thumbnail     = wp_get_attachment_image_src( get_post_thumbnail_id(), FORQY_THEME_SLUG . '-huge' );
	$thumbnail_alt = get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true );

	if ( get_theme_mod( 'dox_slideshow_slide_image' ) != 'disabled' ) { ?>

        <div class="fy-slide-background fy-filter fy-mask-<?php echo esc_attr( $mask ); ?>">

            <img <?php forqy_class( $image_class ); ?>
                    alt="<?php echo esc_attr( $thumbnail_alt ); ?>"
                    src="<?php echo forqy_image_placeholder( $thumbnail[1], $thumbnail[2] ); ?>"
                    data-src="<?php echo esc_url( $thumbnail[0] ); ?>">

			<?php get_template_part( 'templates/design/pattern', 'masked' ); ?>
        </div>

	<?php }
} else {
	get_template_part( 'templates/design/pattern', 'masked' );
}
