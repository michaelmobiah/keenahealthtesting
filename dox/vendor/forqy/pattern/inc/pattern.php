<?php

/*

Pattern

*/

if ( ! function_exists( 'forqy_pattern_options' ) ) {

	/**
	 * Pattern Options
	 *
	 * @return array
	 */
	function forqy_pattern_options(): array {

		return array(
			'none'                  => 'None',
			// Dots 1px
			'dots-01-01'            => 'Dots 1px - 1px spacing',
			'dots-01-01-iso'        => 'Dots 1px - 1px spacing - Isometric',
			'dots-01-02'            => 'Dots 1px - 2px spacing',
			'dots-01-02-iso'        => 'Dots 1px - 2px spacing - Isometric',
			'dots-01-04'            => 'Dots 1px - 4px spacing',
			'dots-01-04-iso'        => 'Dots 1px - 4px spacing - Isometric',
			'dots-01-08'            => 'Dots 1px - 8px spacing',
			'dots-01-08-iso'        => 'Dots 1px - 8px spacing - Isometric',
			'dots-01-16'            => 'Dots 1px - 16px spacing',
			'dots-01-16-iso'        => 'Dots 1px - 16px spacing - Isometric',
			// Dots 2px
			'dots-02-01'            => 'Dots 2px - 1px spacing',
			'dots-02-01-iso'        => 'Dots 2px - 1px spacing - Isometric',
			'dots-02-02'            => 'Dots 2px - 2px spacing',
			'dots-02-02-iso'        => 'Dots 2px - 2px spacing - Isometric',
			'dots-02-04'            => 'Dots 2px - 4px spacing',
			'dots-02-04-iso'        => 'Dots 2px - 4px spacing - Isometric',
			'dots-02-06'            => 'Dots 2px - 6px spacing',
			'dots-02-06-iso'        => 'Dots 2px - 6px spacing - Isometric',
			'dots-02-08'            => 'Dots 2px - 8px spacing',
			'dots-02-08-iso'        => 'Dots 2px - 8px spacing - Isometric',
			'dots-02-16'            => 'Dots 2px - 16px spacing',
			'dots-02-16-iso'        => 'Dots 2px - 16px spacing - Isometric',
			// Lines 1px
			'lines-01-02-dia-left'  => 'Lines 1px - 2px spacing - Diagonal - Left',
			'lines-01-02-dia-right' => 'Lines 1px - 2px spacing - Diagonal - Right',
			'lines-01-07-dia-left'  => 'Lines 1px - 7px spacing - Diagonal - Left',
			'lines-01-07-dia-right' => 'Lines 1px - 7px spacing - Diagonal - Right',
			'lines-01-11-dia-left'  => 'Lines 1px - 11px spacing - Diagonal - Left',
			'lines-01-11-dia-right' => 'Lines 1px - 11px spacing - Diagonal - Right',
			'lines-01-15-dia-left'  => 'Lines 1px - 15px spacing - Diagonal - Left',
			'lines-01-15-dia-right' => 'Lines 1px - 15px spacing - Diagonal - Right',
			// Lines 2px
			'lines-02-02-dia-left'  => 'Lines 2px - 2px spacing - Diagonal - Left',
			'lines-02-02-dia-right' => 'Lines 2px - 2px spacing - Diagonal - Right',
			'lines-02-04-dia-left'  => 'Lines 2px - 4px spacing - Diagonal - Left',
			'lines-02-04-dia-right' => 'Lines 2px - 4px spacing - Diagonal - Right',
			'lines-02-06-dia-left'  => 'Lines 2px - 6px spacing - Diagonal - Left',
			'lines-02-06-dia-right' => 'Lines 2px - 6px spacing - Diagonal - Right',
			'lines-02-10-dia-left'  => 'Lines 2px - 10px spacing - Diagonal - Left',
			'lines-02-10-dia-right' => 'Lines 2px - 10px spacing - Diagonal - Right',
			'lines-02-14-dia-left'  => 'Lines 2px - 14px spacing - Diagonal - Left',
			'lines-02-14-dia-right' => 'Lines 2px - 14px spacing - Diagonal - Right',
			// Chessboard
			'chessboard-02'         => 'Chessboard 2px',
			'chessboard-04'         => 'Chessboard 4px',
			'chessboard-08'         => 'Chessboard 8px',
			'chessboard-12'         => 'Chessboard 12px',
			'chessboard-18'         => 'Chessboard 18px',
			'chessboard-36'         => 'Chessboard 36px',
			// Grid
			'grid-02'               => 'Grid 2px',
			'grid-04'               => 'Grid 4px',
			'grid-08'               => 'Grid 8px',
			'grid-12'               => 'Grid 12px',
			'grid-16'               => 'Grid 16px',
			// Bubbles
			'bubbles-08'            => 'Bubbles 8px',
			'bubbles-08-iso'        => 'Bubbles 8px - Isometric',
			'bubbles-12'            => 'Bubbles 12px',
			'bubbles-12-iso'        => 'Bubbles 12px - Isometric',
			'bubbles-18'            => 'Bubbles 18px',
			'bubbles-18-iso'        => 'Bubbles 18px - Isometric',
			'bubbles-36'            => 'Bubbles 36px',
			'bubbles-36-iso'        => 'Bubbles 36px - Isometric',
			// Crosses
			'crosses-08'            => 'Crosses 8px',
			'crosses-08-iso'        => 'Crosses 8px - Isometric',
			'crosses-12'            => 'Crosses 12px',
			'crosses-12-iso'        => 'Crosses 12px - Isometric',
			'crosses-18'            => 'Crosses 18px',
			'crosses-18-iso'        => 'Crosses 18px - Isometric',
			'crosses-36'            => 'Crosses 36px',
			'crosses-36-iso'        => 'Crosses 36px - Isometric',
			// Stitches
			'stitches-01-01'        => 'Stitches 1px - 1px spacing',
			'stitches-01-02'        => 'Stitches 1px - 2px spacing',
			'stitches-01-03'        => 'Stitches 1px - 3px spacing',
			'stitches-01-05'        => 'Stitches 1px - 5px spacing',
			'stitches-01-07'        => 'Stitches 1px - 7px spacing',
			'stitches-02-01'        => 'Stitches 2px - 1px spacing',
			'stitches-02-02'        => 'Stitches 2px - 2px spacing',
			'stitches-02-04'        => 'Stitches 2px - 4px spacing',
			'stitches-02-06'        => 'Stitches 2px - 6px spacing',
			'stitches-02-08'        => 'Stitches 2px - 8px spacing',
			// Stairs
			'stairs-04-left'        => 'Stairs 4px - Left',
			'stairs-04-right'       => 'Stairs 4px - Right',
			'stairs-08-left'        => 'Stairs 8px - Left',
			'stairs-08-right'       => 'Stairs 8px - Right',
			'stairs-12-left'        => 'Stairs 12px - Left',
			'stairs-12-right'       => 'Stairs 12px - Right',
			'stairs-18-left'        => 'Stairs 18px - Left',
			'stairs-18-right'       => 'Stairs 18px - Right',
			'stairs-36-left'        => 'Stairs 36px - Left',
			'stairs-36-right'       => 'Stairs 36px - Right',
			// Waves
			'waves-32-left'         => 'Waves 32px - Left',
			'waves-32-right'        => 'Waves 32px - Right',
		);

	}

}
