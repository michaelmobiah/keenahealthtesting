<?php

/*

Template Name: Events - Upcoming + Past

*/

// Current Date
$current_date = date( 'Y/m/d', current_time( 'timestamp' ) );

// Main
$main_class = is_active_sidebar( 'event' ) ? 'sidebar-active' : 'sidebar-inactive';

get_header();
get_template_part( 'templates/heading/events' );
get_template_part( 'templates/layout/wrap', 'start' );
?>

    <div class="fy-centerer fy-centerer-<?php echo esc_attr( get_theme_mod( 'dox_content_layout', dox_default( 'dox_content_layout' ) ) ); ?>">

        <div class="fy-flex-container fy-flex-gutter-large">

            <main id="<?php echo esc_attr( forqy_title_to_slug( _x( 'content', 'anchor', 'dox' ) ) ); ?>"
                  class="fy-main fy-main-events fy-flex-column-auto <?php echo esc_attr( $main_class ); ?>">

				<?php
				// Content
				get_template_part( 'templates/page/content' );

				// Query
				if ( post_type_exists( 'event' ) ) {

					/**
					 * Upcoming Events
					 */

					if ( get_query_var( 'paged' ) ) {
						$paged = get_query_var( 'paged' );
					} elseif ( get_query_var( 'page' ) ) {
						$paged = get_query_var( 'page' );
					} else {
						$paged = 1;
					}

					// Query
					$query = new WP_Query( array(
						'post_type'      => 'event',
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
						'posts_per_page' => 49,
					) );

					if ( $query->have_posts() ) { ?>

                        <section class="fy-section fy-events--upcoming">

                            <div class="fy-section__container">

								<?php
								get_template_part( 'templates/layout/container', 'start' );

								while ( $query->have_posts() ) {
									$query->the_post();

									get_template_part( 'templates/layout/column', 'start' );
									get_template_part( 'templates/post/event' );
									get_template_part( 'templates/layout/column', 'end' );

								}

								get_template_part( 'templates/layout/container', 'end' );

								if ( function_exists( 'forqy_pagination' ) ) {
									forqy_pagination( $query->max_num_pages, $paged );
								} ?>

                            </div>

                        </section>

						<?php
						wp_reset_postdata();
					}

					/**
					 * Past Events
					 */

					$query = new WP_Query( array(
						'post_type'      => 'event',
						'meta_key'       => 'fy_event_date',
						'meta_value'     => 'fy_event_date_end',
						'meta_compare'   => '<',
						'meta_query'     => array(
							array(
								'key'     => 'fy_event_date_end',
								'value'   => $current_date,
								'compare' => '<',
							),
						),
						'orderby'        => 'meta_value',
						'order'          => 'DESC',
						'posts_per_page' => 49,
					) );

					if ( $query->have_posts() ) { ?>

                        <section class="fy-section fy-events--past">

                            <div class="fy-section__container">

                                <header class="fy-section__heading">
                                    <h2><?php esc_html_e( 'Past Events', 'dox' ); ?></h2>
                                </header>

								<?php
								get_template_part( 'templates/layout/container', 'start' );

								while ( $query->have_posts() ) {
									$query->the_post();

									get_template_part( 'templates/layout/column', 'start' );
									get_template_part( 'templates/post/event' );
									get_template_part( 'templates/layout/column', 'end' );
								}

								get_template_part( 'templates/layout/container', 'end' );

								if ( function_exists( 'forqy_pagination' ) ) {
									forqy_pagination( $query->max_num_pages, $paged );
								} ?>

                            </div>

                        </section>

						<?php
						wp_reset_postdata();
					}
				} ?>

            </main>

			<?php if ( is_active_sidebar( 'event' ) ) {
				get_sidebar( 'event' );
			} ?>

        </div>

    </div>

<?php
get_template_part( 'templates/layout/wrap', 'end' );
get_footer();
