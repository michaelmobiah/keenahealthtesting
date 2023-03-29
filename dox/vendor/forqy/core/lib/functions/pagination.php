<?php

/**
 * Pagination Functions
 *
 * @package forqy/core
 * @since 1.0.1
 */

if ( ! function_exists( 'forqy_pagination' ) ) {

	/**
	 * Pagination
	 *
	 * @param null $pages
	 * @param null $paged
	 * @param null $page_range
	 */
	function forqy_pagination( $pages = null, $paged = null, $page_range = null ) {
		global $paged;

		if ( $pages == '' ) {
			global $wp_query;

			$pages = $wp_query->max_num_pages;

			if ( ! $pages ) {
				$pages = 1;
			}
		}

		if ( empty( $paged ) ) {
			$current = 1;
		} else {
			$current = $paged;
		}

		if ( empty( $page_range ) ) {
			$page_range = 2;
		}

		if ( $pages > 1 ) { ?>

            <nav class="fy-pagination" itemscope itemtype="https://schema.org/SiteNavigationElement"
                 aria-label="<?php echo apply_filters( 'forqy_theme_translation', 'pagination_label' ); ?>">
				<?php echo paginate_links( array(
					'total'     => $pages,
					'current'   => $current,
					'mid_size'  => $page_range,
					'prev_text' => apply_filters( 'forqy_theme_translation', 'pagination_previous' ),
					'next_text' => apply_filters( 'forqy_theme_translation', 'pagination_next' ),
				) ); ?>
            </nav>

		<?php }

	}

}

if ( ! function_exists( 'forqy_pagination_post' ) ) {

	/**
	 * Pagination for Post
	 *
	 * @param $defaults
	 *
	 * @return array|object|string
	 */
	function forqy_pagination_post( $defaults ) {

		return wp_parse_args( array(
			'before'   => '<nav class="fy-pagination fy-pagination-post" itemscope itemtype="https://schema.org/SiteNavigationElement" aria-label="' . apply_filters( 'forqy_theme_translation', 'pagination_label' ) . '">',
			'after'    => '</nav>',
			'pagelink' => '<span>%</span>',
		), $defaults );

	}

	add_filter( 'wp_link_pages_args', 'forqy_pagination_post' );

}
