<?php

/*

Ingredient Taxonomy Template

*/

// Main
$main_class = is_active_sidebar( 'menu' ) ? 'sidebar-active' : 'sidebar-inactive';

get_header();
get_template_part( 'templates/heading/term' );
get_template_part( 'templates/layout/wrap', 'start' );
?>

    <div class="fy-centerer fy-centerer-<?php echo esc_attr( get_theme_mod( 'dox_content_layout', dox_default( 'dox_content_layout' ) ) ); ?>">

        <div class="fy-flex-container fy-flex-gutter-large">

            <main id="<?php echo esc_attr( forqy_title_to_slug( _x( 'content', 'anchor', 'dox' ) ) ); ?>"
                  class="fy-main fy-main-menu fy-flex-column-auto <?php echo esc_attr( $main_class ); ?><?php if ( get_theme_mod( 'dox_menu_single' ) != 'enabled' ) { ?> js-images<?php } ?>"
                  itemscope itemtype="https://schema.org/FoodEstablishment">

				<?php
				/**
				 * Terms Query
				 */
				$term      = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
				$term_slug = is_object( $term ) ? $term->slug : $term['slug'];

				if ( get_query_var( 'paged' ) ) {
					$paged = get_query_var( 'paged' );
				} elseif ( get_query_var( 'page' ) ) {
					$paged = get_query_var( 'page' );
				} else {
					$paged = 1;
				}

				$query = new WP_Query( array(
					'post_type'           => 'menu',
					'tax_query'           => array(
						array(
							'taxonomy'         => 'ingredient',
							'terms'            => $term->slug,
							'field'            => 'slug',
							'include_children' => 0,
						),
					),
					'orderby'             => 'date',
					'order'               => 'ASC',
					'ignore_sticky_posts' => 1,
					'paged'               => $paged,
					'posts_per_page'      => 99,
				) );

				if ( $query->have_posts() ) {

					get_template_part( 'templates/layout/container', 'start-menu' );

					while ( $query->have_posts() ) {
						$query->the_post();

						get_template_part( 'templates/layout/column', 'start-menu' );
						get_template_part( 'templates/post/menu' );
						get_template_part( 'templates/layout/column', 'end' );

					}

					get_template_part( 'templates/layout/container', 'end' );

					wp_reset_postdata();
				} else {
					get_template_part( 'templates/page/empty' );
				} ?>

            </main>

			<?php if ( is_active_sidebar( 'menu' ) ) {
				get_sidebar( 'menu' );
			} ?>

        </div>

    </div>

<?php
get_template_part( 'templates/layout/wrap', 'end' );
get_footer();
