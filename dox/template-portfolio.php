<?php

/*

Template Name: Portfolio

*/

// Main
$main_class = is_active_sidebar( 'project' ) ? 'sidebar-active' : 'sidebar-inactive';

get_header();
get_template_part( 'templates/heading/portfolio' );
get_template_part( 'templates/layout/wrap', 'start-stretched' );
?>

    <div class="fy-centerer fy-centerer-<?php echo esc_attr( get_theme_mod( 'dox_content_layout', dox_default( 'dox_content_layout' ) ) ); ?>">

        <div class="fy-flex-container fy-flex-gutter-large">

            <main id="<?php echo esc_attr( forqy_title_to_slug( _x( 'content', 'anchor', 'dox' ) ) ); ?>" class="fy-main fy-main-portfolio fy-flex-column-auto <?php echo esc_attr( $main_class ); ?>">

				<?php
				// Content
				get_template_part( 'templates/page/content' );

				// Query
				if ( post_type_exists( 'project' ) ) {

					if ( get_query_var( 'paged' ) ) {
						$paged = get_query_var( 'paged' );
					} elseif ( get_query_var( 'page' ) ) {
						$paged = get_query_var( 'page' );
					} else {
						$paged = 1;
					}

					$query = new WP_Query( array(
						'post_type'      => 'project',
						'orderby'        => array(
							'menu_order' => 'ASC',
							'date'       => 'DESC',
						),
						'paged'          => $paged,
						'posts_per_page' => get_option( 'posts_per_page' ),
					) );

					if ( $query->have_posts() ) {

						get_template_part( 'templates/layout/container', 'start' );

						while ( $query->have_posts() ) {
							$query->the_post();

							get_template_part( 'templates/layout/column', 'start' );
							get_template_part( 'templates/post/project' );
							get_template_part( 'templates/layout/column', 'end' );
						}

						get_template_part( 'templates/layout/container', 'end' );

						if ( function_exists( 'forqy_pagination' ) ) {
							forqy_pagination( $query->max_num_pages, $paged );
						}

						wp_reset_postdata();
					} else {
						get_template_part( 'templates/page/empty' );
					}
				} ?>

            </main>

			<?php if ( is_active_sidebar( 'project' ) ) {
				get_sidebar( 'project' );
			} ?>

        </div>

    </div>

<?php
get_template_part( 'templates/layout/wrap', 'end' );
get_footer();
