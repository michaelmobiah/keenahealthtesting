<?php

/*

Functions

*/

// Library
require_once trailingslashit( get_template_directory() ) . 'lib/library.php';

// Setup
require_once trailingslashit( get_template_directory() ) . 'inc/setup.php';

// Fonts
require_once trailingslashit( get_template_directory() ) . 'inc/fonts.php';
// Theme
require_once trailingslashit( get_template_directory() ) . 'inc/theme.php';
// Styles
require_once trailingslashit( get_template_directory() ) . 'inc/styles.php';
// Scripts
require_once trailingslashit( get_template_directory() ) . 'inc/scripts.php';
// Sidebars
require_once trailingslashit( get_template_directory() ) . 'inc/sidebars.php';
// WooCommerce
require_once trailingslashit( get_template_directory() ) . 'inc/woocommerce.php';

// Customize
require_once trailingslashit( get_template_directory() ) . 'inc/customize.php';

// Plugins
require_once trailingslashit( get_template_directory() ) . 'inc/plugins.php';
// Import
require_once trailingslashit( get_template_directory() ) . 'inc/import.php';

//add_filter( 'dox_section_products_featured_shortcode', function () {
//	return '[products visibility="featured" order="DESC" limit="1"]';
//} );
