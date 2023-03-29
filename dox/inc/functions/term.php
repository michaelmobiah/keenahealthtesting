<?php

/*

Terms

*/

if ( ! function_exists( 'dox_terms' ) ) {

	/**
	 * Terms
	 *
	 * @param string $taxonomy
	 * @param bool $counter
	 */
	function dox_terms( string $taxonomy = 'category', bool $counter = true ) {

		if ( taxonomy_exists( $taxonomy ) ) {

			// Counter
			$count = 1;

			// Terms
			$terms = get_terms( $taxonomy, array(
				'orderby'    => 'none',
				'order'      => 'ASC',
				'hide_empty' => 1,
				'parent'     => 0
			) );

			if ( $terms ) {

				get_template_part( 'templates/layout/container', 'start-cats' );

				foreach ( $terms as $term ) {
					if ( ! empty( $term ) || ! is_wp_error( $term ) ) {

						// Filter
						$filter = get_theme_mod( 'dox_filter', dox_default( 'dox_filter' ) );
						// Image
						$term_image = function_exists( 'forqy_get_taxonomy_image_src' ) ? forqy_get_taxonomy_image_src( $term, FORQY_THEME_SLUG . '-medium-fixed' ) : '';

						get_template_part( 'templates/layout/column', 'start-cats' ); ?>

                        <a href="<?php echo get_term_link( $term->slug, $taxonomy ); ?>"
                           class="fy-term fy-term-<?php echo esc_attr( $count ); ?><?php if ( ! empty( $term_image['src'] ) ) { ?> has-image<?php } ?>"
                           aria-label="<?php echo sprintf( esc_attr__( 'View all posts in %s', 'dox' ), $term->name ); ?>">

							<?php if ( ! empty( $term_image['src'] ) ) { ?>
                                <div class="fy-term-image fy-image-cover fy-filter">
                                    <img class="fy-lazy js-lazy fy-filter-<?php echo esc_attr( $filter ); ?>"
                                         alt="<?php echo esc_attr( $term->name ); ?>"
                                         src="<?php echo forqy_image_placeholder(); ?>"
                                         data-src="<?php echo esc_url( $term_image['src'] ); ?>">
                                </div>
							<?php } ?>

                            <header class="fy-term-header">
                                <h3><span><?php echo esc_html( $term->name ); ?></span></h3>
                            </header>

							<?php if ( $term->count > 1 && $counter == true ) { ?>
                                <div class="fy-term-counter"><?php echo esc_html( $term->count ); ?></div>
							<?php } ?>
                        </a>

						<?php
						get_template_part( 'templates/layout/column', 'end' );
						$count ++;
					}

				}

				get_template_part( 'templates/layout/container', 'end' );

			}

		}

	}

}

if ( ! function_exists( 'dox_terms_post' ) ) {

	/**
	 * Post Terms
	 *
	 * @param string $post_id
	 * @param string $taxonomy
	 * @param bool $link
	 * @param string $separator
	 */
	function dox_terms_post( string $post_id = '', string $taxonomy = 'category', bool $link = true, string $separator = ', ' ) {

		$terms = wp_get_post_terms( $post_id, $taxonomy, array(
			'orderby' => 'term_order'
		) );

		if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) { ?>

            <ul class="fy-post-categories">
				<?php foreach ( $terms as $term ) { ?>
                    <li>
						<?php if ( $link ) { ?>
                            <a href="<?php echo get_term_link( $term ); ?>"
                               aria-label="<?php echo sprintf( esc_attr__( 'View all posts in %s', 'dox' ), $term->name ); ?>">
								<?php echo esc_html( $term->name ); ?>
                            </a><span class="fy-separator"><?php echo esc_html( $separator ); ?></span>
						<?php } else {
							echo esc_html( $term->name ); ?><span class="fy-separator"><?php echo esc_html( $separator ); ?></span>
						<?php } ?>
                    </li>
				<?php } ?>
            </ul>

		<?php }

	}

}
