<?php

/**
 * Date Functions
 *
 * @package forqy/core
 * @since 1.0.0
 */

if ( ! function_exists( 'forqy_date' ) ) {

	/**
	 * Date
	 *
	 * @param array $params
	 */
	function forqy_date( array $params ) {

		// Defaults
		$defaults = apply_filters( 'forqy_date_defaults', array(
			'date'      => '',
			'format'    => 'd m Y',
			'delimiter' => '/',
		) );

		// Parameters
		$params = array_merge( $defaults, $params );

		if ( $params['date'] ) {

			// Date
			$date         = strtotime( $params['date'] );
			$date_day     = date( 'd', $date );
			$date_month   = date( 'm', $date );
			$date_year    = date( 'Y', $date );
			$date_iso8601 = function_exists( 'date_i18n' ) ? date_i18n( 'Y-m-d', $date ) : false;

			// Date Format
			if ( $params['format'] == 'd m Y' ) {
				// 01 02 2000

				$date_formatted = $date_day . $params['delimiter'] . $date_month . $params['delimiter'] . $date_year;

			} else if ( $params['format'] == 'm d Y' ) {
				// 02 01 2000

				$date_formatted = $date_month . $params['delimiter'] . $date_day . $params['delimiter'] . $date_year;

			} else if ( $params['format'] == 'Y m d' ) {
				// 2000 02 01

				$date_formatted = $date_year . $params['delimiter'] . $date_month . $params['delimiter'] . $date_day;

			} else if ( $params['format'] == 'Y d m' ) {
				// 2000 01 02

				$date_formatted = $date_year . $params['delimiter'] . $date_month . $params['delimiter'] . $date_day;

			} else if ( $params['format'] == 'l, j m Y' ) {
				// Monday, 01 02 2000

				$date_day_name = function_exists( 'date_i18n' ) ? date_i18n( 'l', $date ) : date( 'l', $date );
				$date_day      = date( 'j', $date );
				$date_month    = date( 'm', $date );
				$date_year     = date( 'Y', $date );

				$date_formatted = $date_day_name . ', ' . $date_day . $params['delimiter'] . $date_month . $params['delimiter'] . $date_year;

			} else if ( $params['format'] == 'F j, Y' ) {
				// January 1, 2000

				$date_day   = date( 'j', $date );
				$date_month = function_exists( 'date_i18n' ) ? date_i18n( 'F', $date ) : date( 'F', $date );
				$date_year  = date( 'Y', $date );

				$date_formatted = $date_month . ' ' . $date_day . ', ' . $date_year;

			} else if ( $params['format'] == 'j M, Y' ) {
				// 1 Jan, 2000

				$date_day   = date( 'j', $date );
				$date_month = function_exists( 'date_i18n' ) ? date_i18n( 'M', $date ) : date( 'M', $date );
				$date_year  = date( 'Y', $date );

				$date_formatted = $date_day . ' ' . $date_month . ', ' . $date_year;

			} else if ( $params['format'] == 'j. F Y' ) {
				// 1. January 2000

				$start_day   = date( 'j', $date );
				$start_month = function_exists( 'date_i18n' ) ? date_i18n( 'F', $date ) : date( 'F', $date );
				$start_year  = date( 'Y', $date );

				$date_formatted = $start_day . '. ' . $start_month . ' ' . $start_year;

			} else {
				// Default // 01 02 2000

				$date_formatted = $date_day . $params['delimiter'] . $date_month . $params['delimiter'] . $date_year;
			}

			if ( ! empty( $date ) ) {
				echo '<time datetime="' . $date_iso8601 . '">' . $date_formatted . '</time>';
			}

		}

	}

}

if ( ! function_exists( 'forqy_date_event' ) ) {

	/**
	 * Date - Event
	 *
	 * @param array $params
	 */
	function forqy_date_event( array $params ) {

		// Defaults
		$defaults = apply_filters( 'forqy_date_defaults', array(
			'date_start' => function_exists( 'forqy_meta' ) ? forqy_meta( 'fy_event_date' ) : '',
			'date_end'   => function_exists( 'forqy_meta' ) ? forqy_meta( 'fy_event_date_end' ) : '',
			'format'     => 'd m Y',
			'delimiter'  => '/'
		) );

		// Parameters
		$params = array_merge( $defaults, $params );

		if ( $params['date_start'] ) {

			// Start
			$start         = strtotime( $params['date_start'] );
			$start_day     = date( 'd', $start );
			$start_month   = date( 'm', $start );
			$start_year    = date( 'Y', $start );
			$start_iso8601 = function_exists( 'date_i18n' ) ? date_i18n( 'Y-m-d', $start ) : false;

			// End
			$end         = strtotime( $params['date_end'] );
			$end_day     = date( 'd', $end );
			$end_month   = date( 'm', $end );
			$end_year    = date( 'Y', $end );
			$end_iso8601 = function_exists( 'date_i18n' ) ? date_i18n( 'Y-m-d', $end ) : false;

			// Format
			if ( $params['format'] == 'd m Y' ) {
				// 01 02 2000
				$date_formatted_start = $start_day . $params['delimiter'] . $start_month . $params['delimiter'] . $start_year;
				$date_formatted_end   = $end_day . $params['delimiter'] . $end_month . $params['delimiter'] . $end_year;

			} else if ( $params['format'] == 'm d Y' ) {
				// 02 01 2000
				$date_formatted_start = $start_month . $params['delimiter'] . $start_day . $params['delimiter'] . $start_year;
				$date_formatted_end   = $end_month . $params['delimiter'] . $end_day . $params['delimiter'] . $end_year;

			} else if ( $params['format'] == 'Y m d' ) {
				// 2000 02 01
				$date_formatted_start = $start_year . $params['delimiter'] . $start_month . $params['delimiter'] . $start_day;
				$date_formatted_end   = $end_year . $params['delimiter'] . $end_month . $params['delimiter'] . $end_day;

			} else if ( $params['format'] == 'Y d m' ) {
				// 2000 01 02
				$date_formatted_start = $start_year . $params['delimiter'] . $start_month . $params['delimiter'] . $start_day;
				$date_formatted_end   = $end_year . $params['delimiter'] . $end_month . $params['delimiter'] . $end_day;

			} else if ( $params['format'] == 'l, j m Y' ) {
				// Monday, 01 02 2000

				$start_day_name = function_exists( 'date_i18n' ) ? date_i18n( 'l', $start ) : date( 'l', $start );
				$start_day      = date( 'j', $start );
				$start_month    = date( 'm', $start );
				$start_year     = date( 'Y', $start );

				$end_day_name = function_exists( 'date_i18n' ) ? date_i18n( 'l', $end ) : date( 'l', $end );
				$end_day      = date( 'j', $end );
				$end_month    = date( 'm', $end );
				$end_year     = date( 'Y', $end );

				$date_formatted_start = $start_day_name . ', ' . $start_day . $params['delimiter'] . $start_month . $params['delimiter'] . $start_year;
				$date_formatted_end   = $end_day_name . ', ' . $end_day . $params['delimiter'] . $end_month . $params['delimiter'] . $end_year;

			} else if ( $params['format'] == 'F j, Y' ) {
				// January 1, 2000

				$start_day   = date( 'j', $start );
				$start_month = function_exists( 'date_i18n' ) ? date_i18n( 'F', $start ) : date( 'F', $start );
				$start_year  = date( 'Y', $start );

				$end_day   = date( 'j', $end );
				$end_month = function_exists( 'date_i18n' ) ? date_i18n( 'F', $end ) : date( 'F', $end );
				$end_year  = date( 'Y', $end );

				$date_formatted_start = $start_month . ' ' . $start_day . ', ' . $start_year;
				$date_formatted_end   = $end_month . ' ' . $end_day . ', ' . $end_year;

			} else if ( $params['format'] == 'j M, Y' ) {
				// 1 Jan, 2000

				$start_day   = date( 'j', $start );
				$start_month = function_exists( 'date_i18n' ) ? date_i18n( 'M', $start ) : date( 'M', $start );
				$start_year  = date( 'Y', $start );

				$end_day   = date( 'j', $end );
				$end_month = function_exists( 'date_i18n' ) ? date_i18n( 'M', $end ) : date( 'M', $end );
				$end_year  = date( 'Y', $end );

				$date_formatted_start = $start_day . ' ' . $start_month . ', ' . $start_year;
				$date_formatted_end   = $end_day . ' ' . $end_month . ', ' . $end_year;

			} else if ( $params['format'] == 'j. F Y' ) {
				// 1. January 2000

				$start_day   = date( 'j', $start );
				$start_month = function_exists( 'date_i18n' ) ? date_i18n( 'F', $start ) : date( 'F', $start );
				$start_year  = date( 'Y', $start );

				$end_day   = date( 'j', $end );
				$end_month = function_exists( 'date_i18n' ) ? date_i18n( 'F', $end ) : date( 'F', $end );
				$end_year  = date( 'Y', $end );

				$date_formatted_start = $start_day . '. ' . $start_month . ' ' . $start_year;
				$date_formatted_end   = $end_day . '. ' . $end_month . ' ' . $end_year;

			} else {
				// Default // 01 02 2000

				$date_formatted_start = $start_day . $params['delimiter'] . $start_month . $params['delimiter'] . $start_year;
				$date_formatted_end   = $end_day . $params['delimiter'] . $end_month . $params['delimiter'] . $end_year;
			}

			if ( ! empty( $start ) && ! empty( $end ) ) {

				if ( $start == $end ) {
					echo '<time datetime="' . $start_iso8601 . '">' . $date_formatted_start . '</time>';
				} else {
					echo '<time datetime="' . $start_iso8601 . '">' . $date_formatted_start . '</time><span> &mdash; </span><time datetime="' . $end_iso8601 . '">' . $date_formatted_end . '</time>';
				}

			} else if ( ! empty( $start ) ) {
				echo '<time datetime="' . $start_iso8601 . '">' . $date_formatted_start . '</time>';
			}

		}

	}

}

if ( ! function_exists( 'forqy_date_format_options' ) ) {

	/**
	 * Date Format Options
	 *
	 * @return array
	 */
	function forqy_date_format_options(): array {

		return array(
			'd m Y'    => 'd m Y (' . date( 'd m Y' ) . ')',
			'm d Y'    => 'm d Y (' . date( 'm d Y' ) . ')',
			'Y m d'    => 'Y m d (' . date( 'Y m d' ) . ')',
			'Y d m'    => 'Y d m (' . date( 'Y d m' ) . ')',
			'l, j m Y' => 'l, j m Y (' . date( 'l, j m Y' ) . ')',
			'F j, Y'   => 'F j, Y (' . date( 'F j, Y' ) . ')',
			'j M, Y'   => 'j M, Y (' . date( 'j M, Y' ) . ')',
			'j. F Y'   => 'j. F Y (' . date( 'j. F Y' ) . ')',
		);

	}

}

if ( ! function_exists( 'forqy_date_delimiter_options' ) ) {

	/**
	 * Date Delimiter Options
	 *
	 * @return array
	 */
	function forqy_date_delimiter_options(): array {

		return array(
			'/' => '/',
			'.' => '.',
			'-' => '-',
			'–' => '–',
			'—' => '—',
			'·' => '·',
		);

	}

}
