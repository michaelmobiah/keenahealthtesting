<?php

/*

Frontend Init

*/

/*
====================================================================================================
Skin
====================================================================================================
*/

// Defaults
require_once trailingslashit( get_template_directory() ) . 'inc/skin/defaults.php';
// Variables
require_once trailingslashit( get_template_directory() ) . 'inc/skin/variables.php';
// Classes
require_once trailingslashit( get_template_directory() ) . 'inc/skin/classes.php';

/*
====================================================================================================
Functions
====================================================================================================
*/

// Locale
require_once trailingslashit( get_template_directory() ) . 'inc/functions/locale.php';
// Translation
require_once trailingslashit( get_template_directory() ) . 'inc/functions/translation.php';

// Template
require_once trailingslashit( get_template_directory() ) . 'inc/functions/template.php';

// Image
require_once trailingslashit( get_template_directory() ) . 'inc/functions/image.php';
// PhotoSwipe
require_once trailingslashit( get_template_directory() ) . 'inc/functions/photoswipe.php';
// Content
require_once trailingslashit( get_template_directory() ) . 'inc/functions/content.php';
// Navigation
require_once trailingslashit( get_template_directory() ) . 'inc/functions/navigation.php';
// Post
require_once trailingslashit( get_template_directory() ) . 'inc/functions/post.php';
// Term
require_once trailingslashit( get_template_directory() ) . 'inc/functions/term.php';

// Social
require_once trailingslashit( get_template_directory() ) . 'inc/functions/social.php';

// Filter
require_once trailingslashit( get_template_directory() ) . 'inc/functions/filter.php';

// Compatibility
require_once trailingslashit( get_template_directory() ) . 'inc/functions/compatibility.php';

//
// Post
//

// Menu
require_once trailingslashit( get_template_directory() ) . 'inc/functions/post/menu.php';

//
// Plugin
//

// Newsletter
require_once trailingslashit( get_template_directory() ) . 'inc/functions/plugin/newsletter.php';

//
// Admin
//

// State
require_once trailingslashit( get_template_directory() ) . 'inc/functions/admin/state.php';
