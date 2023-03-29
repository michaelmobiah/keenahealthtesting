<?php

/*

Carousel Section Template

*/

// Counter
$slide_count = 1;

// Current Date
$current_date = date( 'Y/m/d', current_time( 'timestamp' ) );

// Posts
$type       = get_theme_mod( 'dox_homepage_carousel_type', dox_default( 'dox_homepage_carousel_type' ) );
$type_count = get_theme_mod( 'dox_homepage_carousel_type_count', '9' );

if ( $type == 'post' ) {

	// Query
	$args = array(
		'post_type'           => $type,
		'ignore_sticky_posts' => true,
		'no_found_rows'       => true,
		'post__not_in'        => get_option( 'sticky_posts' ),
		'posts_per_page'      => $type_count,
	);

} else if ( $type == 'event' ) {

	// Query
	$args = array(
		'post_type'      => $type,
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
		'posts_per_page' => $type_count,
	);

} else if ( $type == 'gallery' ) {

	// Query
	$args = array(
		'post_type'      => $type,
		'orderby'        => array(
			'menu_order' => 'ASC',
			'date'       => 'DESC',
		),
		'no_found_rows'  => true,
		'posts_per_page' => $type_count,
	);

} else if ( $type == 'project' ) {

	// Query
	$args = array(
		'post_type'      => $type,
		'orderby'        => array(
			'menu_order' => 'ASC',
			'date'       => 'DESC'
		),
		'posts_per_page' => $type_count
	);

} else if ( $type == 'album' ) {

	// Query
	$args = array(
		'post_type'      => $type,
		'orderby'        => array(
			'menu_order' => 'ASC',
			'date'       => 'DESC',
		),
		'no_found_rows'  => true,
		'posts_per_page' => $type_count,
	);

} else {
	$type = 'post';

	// Sticky posts
	$posts_sticky = get_option( 'sticky_posts' );
	// Sticky posts by freshness
	rsort( $posts_sticky );

	// Query
	$args = array(
		'post_type'      => $type,
		'post__in'       => $posts_sticky,
		'no_found_rows'  => true,
		'posts_per_page' => $type_count,
	);
}

$carousel = new WP_Query( $args );

if ( $carousel->have_posts() ) {
	$total = $carousel->post_count; ?>

    <section id="<?php echo esc_attr( forqy_title_to_slug( _x( 'carousel', 'section anchor', 'dox' ) ) ); ?>" class="fy-section--carousel fy-section">

        <div class="fy-section__container">

            <div class="fy-carousel-container cs-carousel">

                <div class="fy-slideshow fy-carousel js-carousel">

                    <div class="fy-slideshow-wrapper fy-carousel-wrapper swiper-wrapper">

						<?php while ( $carousel->have_posts() ) {
							$carousel->the_post();

							// Images
							$slide_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), FORQY_THEME_SLUG . '-medium-fixed' );

							// Caption
							$slide_caption_title   = get_the_title();
							$slide_caption_content = get_the_excerpt();
							$slide_caption_url     = get_the_permalink();
							?>

                            <div class="fy-slide swiper-slide">

                                <div class="fy-slide-centerer">

									<?php
									// Post Settings
									$post_layout     = get_theme_mod( 'dox_post_layout', dox_default( 'dox_post_layout' ) );
									$post_appearance = get_theme_mod( 'dox_post_appearance', dox_default( 'dox_post_appearance' ) );
									$post_overlay    = get_theme_mod( 'dox_post_overlay_type', dox_default( 'dox_post_overlay_type' ) );

									// Post Class
									$post_class = array( 'fy-post', 'fy-post-listing' );

									// Post Layout
									if ( $post_layout == 'side' ) {
										array_push( $post_class, 'fy-post-default' );
									} else {
										array_push( $post_class, 'fy-post-' . $post_layout );
									}
									// Post Appearance
									array_push( $post_class, 'fy-post-' . $post_appearance );
									// Post Overlay
									array_push( $post_class, 'fy-post-overlay-' . $post_overlay );
									?>

                                    <article id="post-<?php the_ID(); ?>" <?php post_class( $post_class ); ?>>

										<?php if ( has_post_thumbnail() ) {
											get_template_part( 'templates/image/thumbnail', 'carousel' );
										} ?>

                                        <div class="fy-post-container">

											<?php
											get_template_part( 'templates/post/listing/header' );
											get_template_part( 'templates/post/listing/excerpt' );

											if ( get_post_type() === 'project' ) {
												get_template_part( 'templates/post/listing/project/footer' );
											} else {
												get_template_part( 'templates/post/listing/footer' );
											} ?>

                                        </div>

                                    </article>

                                </div>

                            </div>

							<?php
							$slide_count ++;
						} ?>

                    </div>

                </div>

				<?php if ( $total >= 2 ) {
					get_template_part( 'templates/section/carousel/controls' );
				} ?>
            </div>

        </div>

    </section>

	<?php
	wp_reset_postdata();
}
