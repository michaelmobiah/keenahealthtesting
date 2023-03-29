<?php

/*

WooCommerce Layout

*/

/*
 * If the WooCommerce plugin is not activated, return early
 */
if ( ! forqy_woocommerce_activated() ) {
	return;
}

/**
 * Remove WooCommerce Page Title
 */
add_filter( 'woocommerce_show_page_title', '__return_false' );

/**
 * Remove WooCommerce Sidebar
 */
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar' );


if ( ! function_exists( 'dox_woocommerce_wrapper_start' ) ) {

	/**
	 * Main Wrapper - Start
	 */
	function dox_woocommerce_wrapper_start() {

		// Main
		$main_class = array(
			'fy-main',
			'fy-main--shop',
			'fy-flex-column-auto',
		);

		if ( ( is_shop() || is_product_category() ) && is_active_sidebar( 'shop' ) ) {
			array_push( $main_class, 'sidebar-left sidebar-active' );
		}

		// Heading
		if ( is_cart() || is_checkout() ) {
			get_template_part( 'templates/heading/checkout' );
		} else if ( is_product() ) {
			get_template_part( 'templates/heading/shop', 'empty' );
		} else {
			get_template_part( 'templates/heading/shop' );
		}

		get_template_part( 'templates/layout/wrap', 'start' );
		?>

        <div class="fy-centerer fy-centerer-<?php echo esc_attr( get_theme_mod( 'dox_content_layout', dox_default( 'dox_content_layout' ) ) ); ?>">
        <div class="fy-flex-container fy-flex-gutter-large">

		<?php if ( is_shop() || is_product_category() ) {
			if ( is_active_sidebar( 'shop' ) ) {
				get_sidebar( 'shop' );
			}
		} ?>

        <main id="<?php echo esc_attr( forqy_title_to_slug( _x( 'content', 'anchor', 'dox' ) ) ); ?>" <?php forqy_class( $main_class ); ?>>

	<?php }

	add_action( 'woocommerce_before_main_content', 'dox_woocommerce_wrapper_start', 10 );

}

if ( ! function_exists( 'dox_woocommerce_wrapper_end' ) ) {

	/**
	 * Main Wrapper - End
	 */
	function dox_woocommerce_wrapper_end() { ?>

        </main>

        </div>
        </div>

		<?php
		get_template_part( 'templates/layout/wrap', 'end' );

	}

	add_action( 'woocommerce_after_main_content', 'dox_woocommerce_wrapper_end', 10 );

}

if ( ! function_exists( 'dox_woocommerce_shop_columns' ) ) {

	/**
	 * Products per Row
	 *
	 * @return int
	 */
	function dox_woocommerce_shop_columns(): int {
		return get_theme_mod( 'dox_shop_product_columns', dox_default( 'dox_shop_product_columns' ) );
	}

	add_filter( 'loop_shop_columns', 'dox_woocommerce_shop_columns', 999 );

}

if ( ! function_exists( 'dox_woocommerce_shop_per_page' ) ) {

	/**
	 * Products per Page
	 *
	 * @return mixed
	 */
	function dox_woocommerce_shop_per_page() {
		return get_theme_mod( 'dox_shop_products_per_page', dox_default( 'dox_shop_products_per_page' ) );
	}

	add_filter( 'loop_shop_per_page', 'dox_woocommerce_shop_per_page', 20 );

}

if ( ! function_exists( 'dox_woocommerce_related_products' ) ) {

	/**
	 * Related & Upsell Products per Row
	 *
	 * @param $args
	 *
	 * @return mixed
	 */
	function dox_woocommerce_related_products( $args ) {

		if ( get_theme_mod( 'dox_content_layout', dox_default( 'dox_content_layout' ) ) == '100' ) {
			$args['posts_per_page'] = 4;
			$args['columns']        = 4;
		} else {
			$args['posts_per_page'] = 5;
			$args['columns']        = 5;
		}

		return $args;

	}

	add_filter( 'woocommerce_output_related_products_args', 'dox_woocommerce_related_products' );

}
