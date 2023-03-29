<?php

/**
 * Properties
 *
 * @package forqy/core
 * @since 1.0.1
 */

if ( ! function_exists( 'forqy_properties' ) ) {

	/**
	 * Define Default Global Properties
	 *
	 * @param $props
	 *
	 * @return mixed
	 */
	function forqy_properties( $props ) {

		// Prefix
		$prefix = apply_filters( 'forqy_properties_prefix', 'fy' ); // Default

		/**
		 * Typography
		 */
		// Size
		$props['font-size--xxsmall'] = '0.75rem';
		$props['font-size--xsmall']  = '0.875rem';
		$props['font-size--small']   = '0.9375rem';

		$props['font-size'] = '1rem';

		$props['font-size--large']   = '1.0625rem';
		$props['font-size--xlarge']  = '1.125rem';
		$props['font-size--xxlarge'] = '1.25rem';

		$props['font-size--large--fluid']   = 'clamp(var(--' . esc_html( $prefix ) . '--font-size, 1rem), calc(1rem + 1vw), var(--' . esc_html( $prefix ) . '--font-size--large, 1.0625rem))';
		$props['font-size--xlarge--fluid']  = 'clamp(var(--' . esc_html( $prefix ) . '--font-size--large, 1.0625rem), calc(1rem + 1vw), var(--' . esc_html( $prefix ) . '--font-size--xlarge, 1.125rem))';
		$props['font-size--xxlarge--fluid'] = 'clamp(var(--' . esc_html( $prefix ) . '--font-size--xlarge, 1.125rem), calc(1rem + 1vw), var(--' . esc_html( $prefix ) . '--font-size--xxlarge, 1.25rem))';

		// Line Height
		$props['line-height--small']   = 'calc(var(--' . esc_html( $prefix ) . '--line-height, 1.7) - 0.2)';
		$props['line-height--xsmall']  = 'calc(var(--' . esc_html( $prefix ) . '--line-height, 1.7) - 0.4)';
		$props['line-height--xxsmall'] = 'calc(var(--' . esc_html( $prefix ) . '--line-height, 1.7) - 0.6)';

		/**
		 * Heading
		 */
		$props['heading--font-size']   = 'var(--' . esc_html( $prefix ) . '--font-size-heading, 1rem)';
		$props['heading--line-height'] = 'var(--' . esc_html( $prefix ) . '--line-height-heading, 1.3)';

		$props['heading--font-size--h1']        = 'calc(var(--' . esc_html( $prefix ) . '--heading--font-size--h2, 2.011rem) * var(--' . esc_html( $prefix ) . '--font-scale, 1.150))';
		$props['heading--font-size--h1--fluid'] = 'clamp(var(--' . esc_html( $prefix ) . '--heading--font-size--h4, 1.521rem), calc(1rem + 2vw), var(--' . esc_html( $prefix ) . '--heading--font-size--h1, 2.313rem))';

		$props['heading--font-size--h2']        = 'calc(var(--' . esc_html( $prefix ) . '--heading--font-size--h3, 1.749rem) * var(--' . esc_html( $prefix ) . '--font-scale, 1.150))';
		$props['heading--font-size--h2--fluid'] = 'clamp(var(--' . esc_html( $prefix ) . '--heading--font-size--h5, 1.322rem), calc(1rem + 1.75vw), var(--' . esc_html( $prefix ) . '--heading--font-size--h2, 2.011rem))';

		$props['heading--font-size--h3']        = 'calc(var(--' . esc_html( $prefix ) . '--heading--font-size--h4, 1.521rem) * var(--' . esc_html( $prefix ) . '--font-scale, 1.150))';
		$props['heading--font-size--h3--fluid'] = 'clamp(var(--' . esc_html( $prefix ) . '--heading--font-size--h6, 1.15rem), calc(1rem + 1.5vw), var(--' . esc_html( $prefix ) . '--heading--font-size--h3, 1.749rem))';

		$props['heading--font-size--h4']        = 'calc(var(--' . esc_html( $prefix ) . '--heading--font-size--h5, 1.322rem) * var(--' . esc_html( $prefix ) . '--font-scale, 1.150))';
		$props['heading--font-size--h4--fluid'] = 'clamp(var(--' . esc_html( $prefix ) . '--font-size--large, 1.0625rem), calc(1rem + 1.25vw), var(--' . esc_html( $prefix ) . '--heading--font-size--h4, 1.521rem))';

		$props['heading--font-size--h5']        = 'calc(var(--' . esc_html( $prefix ) . '--heading--font-size--h6, 1.15rem) * var(--' . esc_html( $prefix ) . '--font-scale, 1.150))';
		$props['heading--font-size--h5--fluid'] = 'clamp(var(--' . esc_html( $prefix ) . '--font-size, 1rem), calc(1rem + 1.25vw), var(--' . esc_html( $prefix ) . '--heading--font-size--h5, 1.322rem))';

		$props['heading--font-size--h6']        = 'calc(var(--' . esc_html( $prefix ) . '--heading--font-size, 1rem) * var(--' . esc_html( $prefix ) . '--font-scale, 1.150))';
		$props['heading--font-size--h6--fluid'] = 'clamp(var(--' . esc_html( $prefix ) . '--heading--font-size, 1rem), calc(1rem + 1.25vw), var(--' . esc_html( $prefix ) . '--heading--font-size--h6, 1.15rem))';

		$props['dropcap-size'] = '3.25em';

		/**
		 * Post
		 */
		$props['post-container-gap'] = '20px';
		if ( has_post_thumbnail() ) {
			$props['post-thumbnail-url'] = 'url(' . esc_url( get_the_post_thumbnail_url( get_the_ID(), 'full' ) ) . ')';
		}

		return $props;

	}

	add_filter( 'forqy_properties', 'forqy_properties', 20, 1 );
	add_filter( 'forqy_editor_properties', 'forqy_properties', 20, 1 );

}
