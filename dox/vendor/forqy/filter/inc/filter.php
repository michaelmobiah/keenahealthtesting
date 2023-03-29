<?php

/*

Filter

*/

if ( ! function_exists( 'forqy_filter_options' ) ) {

	/**
	 * Filter Options
	 *
	 * @return array
	 */
	function forqy_filter_options(): array {

		return array(
			'none' => 'None',

			'grayscale'     => 'Grayscale',
			'sepia'         => 'Sepia',
			'duotone'       => 'Duotone',
			'duotone-red'   => 'Duotone - Red',
			'duotone-green' => 'Duotone - Green',
			'duotone-blue'  => 'Duotone - Blue',
			'hard'          => 'Hard',
			'soft'          => 'Soft',
			'old'           => 'Old',
			'oldschool'     => 'Oldschool',
			'revival'       => 'Revival',
			'country'       => 'Country',
			'vegas'         => 'Vegas',
		);

	}

}
