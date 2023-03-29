<?php

/*

Template Name: Menu

*/

// Main
$main_class = is_active_sidebar( 'menu' ) ? 'sidebar-active' : 'sidebar-inactive';

get_header();
get_template_part( 'templates/heading/menu' );
get_template_part( 'templates/layout/wrap', 'start' );
?>

    <div class="fy-centerer fy-centerer-<?php echo esc_attr( get_theme_mod( 'dox_content_layout', dox_default( 'dox_content_layout' ) ) ); ?>">

        <div class="fy-flex-container fy-flex-gutter-large">

            <main id="<?php echo esc_attr( forqy_title_to_slug( _x( 'content', 'anchor', 'dox' ) ) ); ?>"
                  class="fy-main fy-main-menu fy-flex-column-auto <?php echo esc_attr( $main_class );
			      if ( get_theme_mod( 'dox_menu_single' ) != 'enabled' ) { ?> js-images<?php } ?>">

				<?php
				// Content
				get_template_part( 'templates/page/content' );

				// Query
				if ( post_type_exists( 'menu' ) ) {

					$count = 1;

					/**
					 * Get Terms
					 */
					$terms = get_terms( 'section', array(
						'orderby'    => 'none',
						'order'      => 'ASC',
						'hide_empty' => 1,
						'parent'     => 0,
					) );

					if ( $terms ) {
						foreach ( $terms as $term ) {
							if ( ! empty( $term ) || ! is_wp_error( $term ) ) {

								/**
								 * Terms Query
								 */
								$query = new WP_Query( array(
									'post_type'           => 'menu',
									'tax_query'           => array(
										array(
											'taxonomy'         => 'section',
											'terms'            => $term->slug,
											'field'            => 'slug',
											'include_children' => 0,
										),
									),
									'post_status'         => 'publish',
									'order'               => 'ASC',
									'orderby'             => 'date',
									'ignore_sticky_posts' => 1,
									'no_found_rows'       => true,
									'posts_per_page'      => 99,
								) ); ?>

                                <section id="<?php echo esc_attr( $term->slug ); ?>"
                                         class="fy-menu-section fy-menu-section-<?php echo esc_attr( $count ); ?>" itemscope itemtype="https://schema.org/MenuSection">

                                    <header class="fy-menu-header">
                                        <h2 itemprop="name"><?php echo esc_html( $term->name ); ?></h2>

										<?php if ( term_description( $term, 'section' ) ) { ?>
                                            <div class="fy-menu-content fy-content" itemprop="description">
												<?php echo term_description( $term, 'section' ); ?>
                                            </div>
										<?php } ?>
                                    </header>

									<?php
									if ( $query->have_posts() ) {

										get_template_part( 'templates/layout/container', 'start-menu' );

										while ( $query->have_posts() ) {
											$query->the_post();

											get_template_part( 'templates/layout/column', 'start-menu' );
											get_template_part( 'templates/post/menu' );
											get_template_part( 'templates/layout/column', 'end' );

										}

										get_template_part( 'templates/layout/container', 'end' );

									}

									/**
									 * Children
									 */
									$children = get_terms( array(
										'taxonomy' => 'section',
										'child_of' => $term->term_id,
										'order'    => 'ASC',
										'orderby'  => 'date',
									) );

									foreach ( $children as $child ) {

										/**
										 * Child Query
										 */
										$query_child = new WP_Query( array(
											'post_type'           => 'menu',
											'tax_query'           => array(
												array(
													'taxonomy'         => 'section',
													'terms'            => $child->slug,
													'field'            => 'slug',
													'include_children' => 0,
												),
											),
											'post_status'         => 'publish',
											'order'               => 'ASC',
											'orderby'             => 'date',
											'ignore_sticky_posts' => 1,
											'no_found_rows'       => true,
											'posts_per_page'      => 99,
										) );

										if ( $query_child->have_posts() ) { ?>
                                            <header class="fy-menu-header-child fy-menu-header">
                                                <h3><?php echo esc_html( $child->name ); ?></h3>

												<?php if ( term_description( $child, 'section' ) ) { ?>
                                                    <div class="fy-menu-content fy-content">
														<?php echo term_description( $child, 'section' ); ?>
                                                    </div>
												<?php } ?>
                                            </header>

											<?php
											get_template_part( 'templates/layout/container', 'start-menu' );

											while ( $query_child->have_posts() ) {
												$query_child->the_post();

												get_template_part( 'templates/layout/column', 'start-menu' );
												get_template_part( 'templates/post/menu' );
												get_template_part( 'templates/layout/column', 'end' );

											}

											get_template_part( 'templates/layout/container', 'end' );
										}
									} ?>

                                </section>

								<?php
								$count ++;
							}
						}

						wp_reset_postdata();
					} else {
						get_template_part( 'templates/page/empty' );
					}
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
