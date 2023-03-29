<?php

/*

Galleries Slideshow Section Template

*/

/*
 * If the slideshow is not enabled, return early
 */
if ( get_theme_mod( 'dox_homepage_slideshow', dox_default( 'dox_homepage_slideshow' ) == 'disabled' ) ) {
	return;
}

// Effects
$filter = get_theme_mod( 'dox_filter', dox_default( 'dox_filter' ) );
$mask   = get_theme_mod( 'dox_mask', dox_default( 'dox_mask' ) );

// Counter
$slide_count = 1;

// Query
if ( get_theme_mod( 'dox_slideshow_posts', dox_default( 'dox_slideshow_posts' ) ) == 'event' ) {

	// Current Date
	$current_date = date( 'Y/m/d', current_time( 'timestamp' ) );

	$slideshow = new WP_Query( array(
		'post_type'      => get_theme_mod( 'dox_slideshow_posts', dox_default( 'dox_slideshow_posts' ) ),
		'meta_key'       => 'fy_event_date',
		'meta_value'     => 'fy_event_date_end',
		'meta_compare'   => '<',
		'meta_query'     => array(
			'relation' => 'AND',
			array(
				'key'     => 'fy_event_date',
				'value'   => 'fy_event_date_end',
				'compare' => '<=',
			),
			array(
				'key'     => 'fy_event_date_end',
				'value'   => $current_date,
				'compare' => '>=',
			),
		),
		'orderby'        => 'meta_value',
		'order'          => 'ASC',
		'no_found_rows'  => true,
		'posts_per_page' => get_theme_mod( 'dox_slideshow_posts_count', dox_default( 'dox_slideshow_posts_count' ) ),
	) );

} else {

	$slideshow = new WP_Query( array(
		'post_type'      => get_theme_mod( 'dox_slideshow_posts', dox_default( 'dox_slideshow_posts' ) ),
		'orderby'        => array(
			'menu_order' => 'ASC',
			'date'       => 'DESC',
		),
		'no_found_rows'  => true,
		'posts_per_page' => get_theme_mod( 'dox_slideshow_posts_count', dox_default( 'dox_slideshow_posts_count' ) ),
	) );

}

// Total
$slideshow_total = $slideshow->post_count;
set_query_var( 'dox_slideshow_total', $slideshow_total );

if ( $slideshow->have_posts() ) {

	// Class
	$slideshow_class = array( 'fy-slideshow', 'fy-slideshow--posts' );

	if ( $slideshow_total >= 2 ) {
		// Activate js slideshow
		array_push( $slideshow_class, 'js-slideshow' );
	} else if ( $slideshow_total == 1 ) {
		array_push( $slideshow_class, 'fy-slideshow-one-slide' );
	}
	if ( get_theme_mod( 'dox_slideshow_slides', dox_default( 'dox_slideshow_slides' ) ) > 1 && $slideshow_total > 1 ) {
		array_push( $slideshow_class, 'fy-slideshow-more-slides-per-view' );
	} ?>

    <div class="fy-slideshow-background">

        <div class="fy-slideshow-container cs-slideshow">

            <div <?php forqy_class( $slideshow_class ); ?>>

                <div id="slideshow" class="fy-slideshow-wrapper swiper-wrapper">

					<?php while ( $slideshow->have_posts() ) {
						$slideshow->the_post();

						// Video
						$slide_video = forqy_meta( 'fy_video' );

						// Class
						$slide_class = array( 'fy-slide', 'fy-slide-' . esc_attr( $slide_count ), 'swiper-slide' );

						array_push( $slide_class, 'fy-slide-layout-' . esc_attr( get_theme_mod( 'dox_slideshow_slide_layout', 'default' ) ) );

						array_push( $slide_class, 'fy-slide-caption-position-h-' . esc_attr( get_theme_mod( 'dox_slideshow_caption_position', dox_default( 'dox_slideshow_caption_position' ) ) ) );
						array_push( $slide_class, 'fy-slide-caption-position-v-' . esc_attr( get_theme_mod( 'dox_slideshow_caption_position_v', dox_default( 'dox_slideshow_caption_position_v' ) ) ) );

						if ( ! empty ( $slide_video ) ) {
							array_push( $slide_class, 'js-video-container' );
						} ?>

                        <article <?php post_class( $slide_class ); ?>>

							<?php
							get_template_part( 'templates/section/slideshow/slide/background' );
							get_template_part( 'templates/section/slideshow/slide/caption', 'type' );
							?>

                        </article>

						<?php
						$slide_count ++;
					} ?>

                </div>

				<?php if ( $slideshow_total >= 2 ) {
					get_template_part( 'templates/section/slideshow/navigation' );

					if ( get_theme_mod( 'dox_slideshow_slides', dox_default( 'dox_slideshow_slides' ) ) < $slideshow_total ) {
						get_template_part( 'templates/section/slideshow/pagination' );
					}
				} ?>

            </div>

        </div>

		<?php get_template_part( 'templates/section/slideshow/background' ); ?>
    </div>

	<?php
	wp_reset_postdata();
} else {
	get_template_part( 'templates/section/slideshow' );
}
