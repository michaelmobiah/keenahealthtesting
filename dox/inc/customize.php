<?php

/*

Customize

*/

/*
 * If the required plugin isn't installed, return early
 */
if ( ! function_exists( 'forqy' ) ) {
	return;
}

// Functions
require_once trailingslashit( get_template_directory() ) . 'inc/customize/functions/types.php';

/**
 * Panel
 */
require_once trailingslashit( get_template_directory() ) . 'inc/customize/panel/theme.php';

/**
 * Section
 */

// About // 20
require_once trailingslashit( get_template_directory() ) . 'inc/customize/section/about.php';
// Fonts // 30
require_once trailingslashit( get_template_directory() ) . 'inc/customize/section/fonts.php';
// Design // 40
require_once trailingslashit( get_template_directory() ) . 'inc/customize/section/design.php';
// Global // 41
require_once trailingslashit( get_template_directory() ) . 'inc/customize/section/global.php';
// Background // 45
require_once trailingslashit( get_template_directory() ) . 'inc/customize/section/background.php';
// Bar // 50
require_once trailingslashit( get_template_directory() ) . 'inc/customize/section/bar.php';
// Header // 51
require_once trailingslashit( get_template_directory() ) . 'inc/customize/section/header.php';
// Navigation // 52
require_once trailingslashit( get_template_directory() ) . 'inc/customize/section/navigation.php';
// Heading // 54
require_once trailingslashit( get_template_directory() ) . 'inc/customize/section/heading.php';
// Slideshow // 55
require_once trailingslashit( get_template_directory() ) . 'inc/customize/section/slideshow.php';
// Content // 60
require_once trailingslashit( get_template_directory() ) . 'inc/customize/section/content.php';
// Posts // 61
require_once trailingslashit( get_template_directory() ) . 'inc/customize/section/posts.php';
// Footer // 65
require_once trailingslashit( get_template_directory() ) . 'inc/customize/section/footer.php';
// Homepage // 70
require_once trailingslashit( get_template_directory() ) . 'inc/customize/section/homepage.php';
// Newsletter // 75
require_once trailingslashit( get_template_directory() ) . 'inc/customize/section/newsletter.php';
// Shop // 80
require_once trailingslashit( get_template_directory() ) . 'inc/customize/section/shop.php';
// Socials // 100
require_once trailingslashit( get_template_directory() ) . 'inc/customize/section/socials.php';
// Forms // 101
require_once trailingslashit( get_template_directory() ) . 'inc/customize/section/forms.php';
// Slugs // 102
require_once trailingslashit( get_template_directory() ) . 'inc/customize/section/slugs.php';
