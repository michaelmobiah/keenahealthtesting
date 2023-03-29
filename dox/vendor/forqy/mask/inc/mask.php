<?php

/*

Mask

*/

if ( ! function_exists( 'forqy_mask_options' ) ) {

	/**
	 * Mask Options
	 *
	 * @return array
	 */
	function forqy_mask_options(): array {

		return array(
			'none'            => 'None',

			// Sector
			'sector-r'        => 'Sector - Right',
			'sector-l'        => 'Sector - Left',

			// Bevel
			'bevel-t-r'       => 'Bevel - Top Right',
			'bevel-b-r'       => 'Bevel - Bottom Right',

			// Letters
			'x'               => 'X',
			'v'               => 'V',

			// Rhombus
			'rhombus'         => 'Rhombus',

			// Parallelogram
			'parallelogram-v' => 'Parallelogram - Vertical',
			'parallelogram-h' => 'Parallelogram - Horizontal',

			// Triangle
			'triangle-t'      => 'Triangle - Top',
			'triangle-r'      => 'Triangle - Right',
			'triangle-b'      => 'Triangle - Bottom',
			'triangle-l'      => 'Triangle - Left',

			// Inset
			'inset'           => 'Inset',

			// Circle
			'circle'          => 'Circle',
			'circle-s'        => 'Circle - Small',
			'circle-l'        => 'Circle - Large',

			// Circle - Quarter
			'circle-q-t-r'    => 'Circle - Quarter - Top Right',
			'circle-q-t-l'    => 'Circle - Quarter - Top Left',
			'circle-q-c-r'    => 'Circle - Quarter - Center Right',
			'circle-q-c-l'    => 'Circle - Quarter - Center Left',
			'circle-q-b-r'    => 'Circle - Quarter - Bottom Right',
			'circle-q-b-l'    => 'Circle - Quarter - Bottom Left',

			// Stripe
			'stripe-r'        => 'Stripe - Right',
			'stripe-l'        => 'Stripe - Left',
		);

	}

}
