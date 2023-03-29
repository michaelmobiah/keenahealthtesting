<?php

/*

Pace Scripts

*/

if ( ! function_exists( 'dox_scripts_pace' ) ) {

	function dox_scripts_pace() {

		// If Loading Activated, Load Script
		if ( get_theme_mod( 'dox_loading', dox_default( 'dox_loading' ) ) != 'none' ) {

			/**
			 * Pace
			 * @url https://github.com/CodeByZach/pace/
			 * @source https://github.com/CodeByZach/pace/blob/master/pace.js
			 */
			wp_enqueue_script( 'pace', trailingslashit( get_template_directory_uri() ) . 'vendor/forqy/core/js/lib/pace.js', false, '1.2.4', true );

			/**
			 * CORE Pace
			 */
			wp_enqueue_script( get_template() . '-pace', trailingslashit( get_template_directory_uri() ) . 'vendor/forqy/core/js/pace.js', array(
				'pace',
			), '1.0.0', true );

			/**
			 * CORE Transition
			 */
			if ( get_theme_mod( 'dox_loading_transition', dox_default( 'dox_loading_transition' ) ) != 'none' ) {

				wp_enqueue_script( get_template() . '-transition', trailingslashit( get_template_directory_uri() ) . 'vendor/forqy/core/js/transition.js', array(
					'jquery',
					'pace',
					get_template() . '-pace',
				), '1.0.2', true );
			}

		}

	}

	add_action( 'wp_enqueue_scripts', 'dox_scripts_pace', 5 );

}
