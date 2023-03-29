<?php

/*

Template Name: Sitemap

*/

// Current Date
$current_date = date( 'Y/m/d', current_time( 'timestamp' ) );

get_header();
get_template_part( 'templates/heading/page' );
get_template_part( 'templates/layout/wrap', 'start' );
?>

    <div class="fy-centerer fy-centerer-<?php echo esc_attr( get_theme_mod( 'dox_page_width', dox_default( 'dox_page_width' ) ) ); ?>">

        <main id="<?php echo esc_attr( forqy_title_to_slug( _x( 'content', 'anchor', 'dox' ) ) ); ?>" class="fy-main fy-main-page fy-main-sitemap">

			<?php
			// Content
			get_template_part( 'templates/page/content' );

			get_template_part( 'templates/layout/container', 'start' );

			// Pages
			$query = new WP_Query( array(
				'post_type'      => 'page',
				'post_parent'    => 0,
				'orderby'        => array(
					'menu_order' => 'ASC',
					'date'       => 'DESC',
				),
				'order'          => 'ASC',
				'posts_per_page' => - 1,
			) );

			if ( $query->have_posts() ) {
				get_template_part( 'templates/layout/column', 'start' ); ?>

                <section class="fy-sitemap-content fy-page-content fy-content">

                    <h3><?php esc_html_e( 'Pages', 'dox' ); ?></h3>
                    <ul>
						<?php while ( $query->have_posts() ) {
							$query->the_post(); ?>

                            <li>
                                <a href="<?php the_permalink(); ?>" rel="alternate"
                                   title="<?php the_title_attribute(); ?>">
									<?php the_title(); ?>
                                </a>
                            </li>

						<?php } ?>
                    </ul>
                </section>

				<?php
				get_template_part( 'templates/layout/column', 'end' );

				wp_reset_postdata();
			}

			// Posts
			$query = new WP_Query( array(
				'post_type'      => 'post',
				'posts_per_page' => - 1,
			) );

			if ( $query->have_posts() ) {
				get_template_part( 'templates/layout/column', 'start' ); ?>

                <section class="fy-sitemap-content fy-page-content fy-content">

                    <h3><?php esc_html_e( 'Posts', 'dox' ); ?></h3>
                    <ul>
						<?php while ( $query->have_posts() ) {
							$query->the_post(); ?>

                            <li>
                                <a href="<?php the_permalink(); ?>" rel="alternate"
                                   title="<?php the_title_attribute(); ?>">
									<?php the_title(); ?>
                                </a>
                                <div>
									<?php the_time( get_option( 'date_format' ) ); ?>
                                </div>
                            </li>

						<?php } ?>
                    </ul>
                </section>

				<?php
				get_template_part( 'templates/layout/column', 'end' );

				wp_reset_postdata();
			}

			// Events
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
				'posts_per_page' => - 1,
			) );

			if ( $query->have_posts() ) {
				get_template_part( 'templates/layout/column', 'start' ); ?>

                <section class="fy-sitemap-content fy-page-content fy-content">

                    <h3><?php esc_html_e( 'Events', 'dox' ); ?></h3>
                    <ul>
						<?php while ( $query->have_posts() ) {
							$query->the_post(); ?>

                            <li>
								<?php if ( function_exists( 'forqy_date_event' ) ) {
									forqy_date_event( array(
										'date_start' => forqy_meta( 'fy_event_date' ),
										'date_end'   => forqy_meta( 'fy_event_date_end' )
									) );
								} ?>
                                <br>
                                <a href="<?php the_permalink(); ?>" rel="alternate"
                                   title="<?php the_title_attribute(); ?>">
									<?php the_title(); ?>
                                </a>
                            </li>

						<?php } ?>
                    </ul>
                </section>

				<?php
				get_template_part( 'templates/layout/column', 'end' );

				wp_reset_postdata();
			}

			// Galleries
			$query = new WP_Query( array(
				'post_type'      => 'gallery',
				'posts_per_page' => - 1,
			) );

			if ( $query->have_posts() ) {
				get_template_part( 'templates/layout/column', 'start' ); ?>

                <section class="fy-sitemap-content fy-padding fy-page-content fy-content">

                    <h3><?php esc_html_e( 'Gallery', 'dox' ); ?></h3>
                    <ul>
						<?php while ( $query->have_posts() ) {
							$query->the_post(); ?>

                            <li>
                                <a href="<?php the_permalink(); ?>" rel="alternate"
                                   title="<?php the_title_attribute(); ?>">
									<?php the_title(); ?>
                                </a>
                            </li>

						<?php } ?>
                    </ul>
                </section>

				<?php
				get_template_part( 'templates/layout/column', 'end' );

				wp_reset_postdata();
			}

			get_template_part( 'templates/layout/container', 'end' );
			?>

        </main>

    </div>

<?php
get_template_part( 'templates/layout/wrap', 'end' );
get_footer();
