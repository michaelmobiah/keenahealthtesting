<?php

/*

Menu

*/

if ( ! function_exists( 'dox_menu_sections' ) ) {

	/**
	 * Sections
	 *
	 * @param bool $title
	 */
	function dox_menu_sections( bool $title = true ) {
		global $post;

		if ( has_term( '', 'section' ) ) { ?>

            <div class="fy-menu-sections fy-post-tags">

				<?php if ( $title ) { ?>
                    <h3><?php esc_html_e( 'Sections', 'dox' ); ?></h3>
				<?php }

				dox_terms_post( $post->ID, 'section' ); ?>

            </div>

			<?php
		}

	}

}

if ( ! function_exists( 'dox_menu_ingredients' ) ) {

	/**
	 * Ingredients
	 *
	 * @param bool $title
	 */
	function dox_menu_ingredients( bool $title = true ) {
		global $post;

		if ( has_term( '', 'ingredient' ) ) { ?>

            <div class="fy-post-ingredients fy-post-tags">

				<?php if ( $title ) { ?>
                    <h3><?php esc_html_e( 'Ingredients', 'dox' ); ?></h3>
				<?php }

				if ( get_theme_mod( 'dox_menu_filter_by_ingredients' ) == 'disabled' ) {
					dox_terms_post( $post->ID, 'ingredient', 0 );
				} else {
					dox_terms_post( $post->ID, 'ingredient', 1 );
				} ?>

            </div>

			<?php
		}

	}

}
