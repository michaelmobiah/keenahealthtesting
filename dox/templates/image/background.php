<?php

/*

Image Background Template

*/

/**
 * Variables
 */

// Size
set_query_var( 'forqy_background_size', FORQY_THEME_SLUG . '-huge-fixed' );
// Object
set_query_var( 'forqy_background_object', get_theme_mod( 'dox_heading_background_image_size', dox_default( 'dox_heading_background_image_size' ) ) );
// Filter
set_query_var( 'forqy_background_filter', get_theme_mod( 'dox_filter', dox_default( 'dox_filter' ) ) );

/**
 * Class
 */

// Background
$background_class = array( 'fy-background' );

if ( get_theme_mod( 'dox_heading_background_width', dox_default( 'dox_heading_background_width' ) ) ) {
	array_push( $background_class, 'fy-background-width-' . esc_attr( get_theme_mod( 'dox_heading_background_width', dox_default( 'dox_heading_background_width' ) ) ) );
} ?>

<div <?php forqy_class( $background_class ); ?>>

	<?php if ( get_theme_mod( 'dox_heading_background_image', dox_default( 'dox_heading_background_image' ) ) != 'disabled' ) {

		get_template_part( 'vendor/forqy/core/templates/background/media' );
		get_template_part( 'templates/design/pattern' );

	} else { ?>

        <div class="fy-background-media fy-background-empty"></div>

	<?php } ?>

</div>
