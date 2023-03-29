<?php

/*

Newsletter: MailChimp for WP

*/

if ( ! function_exists( 'dox_newsletter_form_classes' ) ) {

	/**
	 * Newsletter Form Class
	 *
	 * @param $classes
	 *
	 * @return mixed
	 */
	function dox_newsletter_form_classes( $classes ) {
		$classes[] = 'fy-form-newsletter';

		return $classes;
	}

	add_filter( 'mc4wp_form_css_classes', 'dox_newsletter_form_classes' );

}
