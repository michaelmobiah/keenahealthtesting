<?php

/*

Library

*/

/*
====================================================================================================
Components
====================================================================================================
*/

// TGM Plugin Activation
/** @noinspection PhpIncludeInspection */
require_once trailingslashit( get_template_directory() ) . 'lib/components/class-tgm-plugin-activation.php';

/*
====================================================================================================
Functions [forqy/core]
====================================================================================================
*/

// Properties
require_once trailingslashit( get_template_directory() ) . 'vendor/forqy/core/lib/properties.php';
require_once trailingslashit( get_template_directory() ) . 'vendor/forqy/core/inc/properties.php';
// Fonts
require_once trailingslashit( get_template_directory() ) . 'vendor/forqy/core/lib/fonts.php';

// Common
require_once trailingslashit( get_template_directory() ) . 'vendor/forqy/core/lib/functions/common.php';
// Head
require_once trailingslashit( get_template_directory() ) . 'vendor/forqy/core/lib/functions/head.php';
// Meta
require_once trailingslashit( get_template_directory() ) . 'vendor/forqy/core/lib/functions/meta.php';
// Date
require_once trailingslashit( get_template_directory() ) . 'vendor/forqy/core/lib/functions/date.php';
// Page
require_once trailingslashit( get_template_directory() ) . 'vendor/forqy/core/lib/functions/page.php';
// Pagination
require_once trailingslashit( get_template_directory() ) . 'vendor/forqy/core/lib/functions/pagination.php';
// Comments
require_once trailingslashit( get_template_directory() ) . 'vendor/forqy/core/lib/functions/comments.php';

// Image
require_once trailingslashit( get_template_directory() ) . 'vendor/forqy/core/lib/functions/image.php';
// Taximage
require_once trailingslashit( get_template_directory() ) . 'vendor/forqy/core/lib/functions/taximage.php';
// Background
require_once trailingslashit( get_template_directory() ) . 'vendor/forqy/core/lib/functions/background.php';

// RSS
require_once trailingslashit( get_template_directory() ) . 'vendor/forqy/core/lib/functions/rss.php';

// WooCommerce
require_once trailingslashit( get_template_directory() ) . 'vendor/forqy/core/lib/functions/woocommerce.php';

/*
====================================================================================================
WooCommerce [forqy/woocommerce]
====================================================================================================
*/

// Login
require_once trailingslashit( get_template_directory() ) . 'vendor/forqy/woocommerce/lib/login.php';
// Breadcrumbs
require_once trailingslashit( get_template_directory() ) . 'vendor/forqy/woocommerce/lib/breadcrumbs.php';
// Quantity
require_once trailingslashit( get_template_directory() ) . 'vendor/forqy/woocommerce/lib/quantity.php';
// Checkout
require_once trailingslashit( get_template_directory() ) . 'vendor/forqy/woocommerce/lib/checkout.php';

/*
====================================================================================================
Editor [forqy/gutenberg]
====================================================================================================
*/

// Editor - Properties
require_once trailingslashit( get_template_directory() ) . 'vendor/forqy/gutenberg/lib/editor/properties.php';
// Editor - Styles
require_once trailingslashit( get_template_directory() ) . 'vendor/forqy/gutenberg/lib/editor/styles.php';

// Gradients
require_once trailingslashit( get_template_directory() ) . 'vendor/forqy/gutenberg/lib/gradients.php';

/*
====================================================================================================
Patterns [forqy/pattern]
====================================================================================================
*/

require_once trailingslashit( get_template_directory() ) . 'vendor/forqy/pattern/inc/pattern.php';

/*
====================================================================================================
Borders [forqy/border]
====================================================================================================
*/

require_once trailingslashit( get_template_directory() ) . 'vendor/forqy/border/inc/border.php';

/*
====================================================================================================
Filters [forqy/filter]
====================================================================================================
*/

require_once trailingslashit( get_template_directory() ) . 'vendor/forqy/filter/inc/filter.php';

/*
====================================================================================================
Masks [forqy/mask]
====================================================================================================
*/

require_once trailingslashit( get_template_directory() ) . 'vendor/forqy/mask/inc/mask.php';
