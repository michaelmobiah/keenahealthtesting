<?php

/*

Translation

*/

if ( ! function_exists( 'dox_translations' ) ) {

	/**
	 * Define Translations of the Theme
	 *
	 * @param $translation
	 *
	 * @return mixed
	 */
	function dox_translations( $translation ) {

		/**
		 * Comments
		 */

		$translation['comments_closed']          = _x( 'Comments are closed.', 'comments', 'dox' );
		$translation['comments_pagination_prev'] = _x( 'Previous', 'comments', 'dox' );
		$translation['comments_pagination_next'] = _x( 'Next', 'comments', 'dox' );

		// Comment
		$translation['comments_comment_first']               = _x( 'You can be the first one to leave a comment.', 'comments', 'dox' );
		$translation['comments_comment_awaiting_moderation'] = _x( 'Your comment is awaiting moderation.', 'comments', 'dox' );

		/**
		 * Pagination
		 */

		$translation['pagination_label']    = _x( 'Pagination', 'pagination', 'dox' );
		$translation['pagination_previous'] = _x( 'Previous', 'pagination', 'dox' );
		$translation['pagination_next']     = _x( 'Next', 'pagination', 'dox' );

		return $translation;

	}

}


if ( ! function_exists( 'dox_translation' ) ) {

	/**
	 * Get the Translation of the Theme
	 *
	 * @param $key
	 *
	 * @return mixed
	 */
	function dox_translation( $key ) {
		global $translation;

		$string = dox_translations( $translation );

		return $string[ $key ];
	}

	add_filter( 'forqy_theme_translation', 'dox_translation', 10, 1 );

}
