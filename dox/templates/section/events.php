<?php

/*

Events Section Template

*/

// Type
$type = 'event';

// Current Date
$current_date = date( 'Y/m/d', current_time( 'timestamp' ) );

// Query
$query = new WP_Query( array(
	'post_type'           => $type,
	'meta_key'            => 'fy_event_date',
	'meta_value'          => 'fy_event_date_end',
	'meta_compare'        => '<',
	'meta_query'          => array(
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
	'order'               => 'ASC',
	'orderby'             => 'meta_value',
	'ignore_sticky_posts' => true,
	'no_found_rows'       => true,
	'posts_per_page'      => get_theme_mod( 'dox_homepage_events_count', dox_default( 'dox_homepage_events_count' ) ),
) );

if ( $query->have_posts() ) { ?>

    <section id="<?php echo esc_attr_x( 'events', 'section anchor', 'dox' ); ?>" class="fy-section fy-section--events cs-events">

        <div class="fy-section__container fy-centerer fy-centerer-<?php echo esc_attr( get_theme_mod( 'dox_content_layout', dox_default( 'dox_content_layout' ) ) ); ?>">

            <div class="fy-centerer fy-centerer-50 fy-align-center">

                <header class="fy-section__header cs-events-title">
                    <h2>
						<?php if ( get_theme_mod( 'dox_homepage_events_button_page' ) ) { ?>
                            <a href="<?php echo get_permalink( get_theme_mod( 'dox_homepage_events_button_page' ) ); ?>">
								<?php echo esc_html( get_theme_mod( 'dox_homepage_events_title', esc_html__( 'Events', 'dox' ) ) ); ?>
                            </a>
						<?php } else {
							echo esc_html( get_theme_mod( 'dox_homepage_events_title', esc_html__( 'Events', 'dox' ) ) );
						} ?>
                    </h2>
                </header>

				<?php if ( get_theme_mod( 'dox_homepage_events_content' ) ) { ?>
                    <div class="fy-section__content fy-content cs-events-content js-images">
						<?php echo do_shortcode( get_theme_mod( 'dox_homepage_events_content' ) ); ?>
                    </div>
				<?php } ?>

            </div>

			<?php
			get_template_part( 'templates/layout/container', 'start' );

			while ( $query->have_posts() ) {
				$query->the_post();

				get_template_part( 'templates/layout/column', 'start' );
				get_template_part( 'templates/post/' . $type );
				get_template_part( 'templates/layout/column', 'end' );
			}

			get_template_part( 'templates/layout/container', 'end' );

			if ( get_theme_mod( 'dox_homepage_events_button_page' ) ) { ?>
                <div class="fy-section__actions">
                    <a class="fy-button fy-button-bordered" href="<?php echo get_permalink( get_theme_mod( 'dox_homepage_events_button_page' ) ); ?>">
						<?php if ( get_theme_mod( 'dox_homepage_events_button' ) ) {
							echo esc_html( get_theme_mod( 'dox_homepage_events_button' ) );
						} else {
							echo get_the_title( get_theme_mod( 'dox_homepage_events_button_page' ) );
						} ?>
                    </a>
                </div>
			<?php } ?>

        </div>

    </section>

	<?php
	wp_reset_postdata();
}
