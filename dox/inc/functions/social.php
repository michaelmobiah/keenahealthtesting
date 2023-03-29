<?php

/*

Socials

*/

if ( ! function_exists( 'dox_socials_exists' ) ) {

	/**
	 * Check If Socials Exists
	 *
	 * @return bool
	 */
	function dox_socials_exists(): bool {

		if ( function_exists( 'forqy_socials_exists' ) && forqy_socials_exists() ) {
			return true;
		} else {
			return false;
		}

	}

}
