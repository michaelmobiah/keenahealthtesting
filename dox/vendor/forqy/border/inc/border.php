<?php

/*

Border

*/

if ( ! function_exists( 'forqy_border_options' ) ) {

	/**
	 * Border Options
	 *
	 * @return array
	 */
	function forqy_border_options(): array {

		return array(
			'none'            => 'None',

			// Solid
			'solid'           => 'Solid',
			'solid-double'    => 'Solid - Double',

			// Grunge
			'grunge'          => 'Grunge 1',
			'grunge-2'        => 'Grunge 2',
			'grunge-3'        => 'Grunge 3',
			'grunge-4'        => 'Grunge 4',

			// Cubist
			'cubist'          => 'Cubist',
			'cubist-large'    => 'Cubist - Large',

			// Askew
			'askew'           => 'Askew',
			'askew-large'     => 'Askew - Large',

			// Break
			'break'           => 'Break',
			'break-large'     => 'Break - Large',

			// Arch
			'arch'            => 'Arch',

			// Peak
			'peak'            => 'Peak',
			'peak-large'      => 'Peak - Large',

			// Wave
			'wave'            => 'Wave',
			'wave-large'      => 'Wave - Large',

			// Splashing
			'splashing'       => 'Splashing',
			'splashing-large' => 'Splashing - Large',

			// Step
			'step-left'       => 'Step - Left',
			'step-right'      => 'Step - Right',

			// Greek
			'greek'           => 'Greek',
		);

	}

}
