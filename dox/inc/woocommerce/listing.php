<?php

/*

WooCommerce Listing

*/

/*
 * If the WooCommerce plugin is not activated, return early
 */
if ( ! forqy_woocommerce_activated() ) {
	return;
}


if ( ! function_exists( 'dox_woocommerce_loop_product_thumbnail' ) ) {

	/**
	 * Product Image
	 */
	function dox_woocommerce_loop_product_thumbnail() { ?>

        <div class="fy-product-image fy-image">
			<?php
			echo woocommerce_get_product_thumbnail();
			get_template_part( 'templates/image/loading' );
			?>
        </div>

	<?php }

	remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail' );
	add_filter( 'woocommerce_before_shop_loop_item_title', 'dox_woocommerce_loop_product_thumbnail' );

}

if ( ! function_exists( 'dox_woocommerce_loop_product_title' ) ) {

	/**
	 * Product Title
	 */
	function dox_woocommerce_loop_product_title() {

		if ( is_home() || is_front_page() ) {
			echo '<h3 class="' . esc_attr( apply_filters( 'woocommerce_product_loop_title_classes', 'woocommerce-loop-product__title' ) ) . '"><span>' . get_the_title() . '</span></h3>';
		} else {
			echo '<h2 class="' . esc_attr( apply_filters( 'woocommerce_product_loop_title_classes', 'woocommerce-loop-product__title' ) ) . '"><span>' . get_the_title() . '</span></h2>';
		}

	}

	remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title' );
	add_filter( 'woocommerce_shop_loop_item_title', 'dox_woocommerce_loop_product_title' );

}

/**
 * Remove "Add to Cart" Button
 */
if ( get_theme_mod( 'dox_shop_product_add_to_cart' ) == 'disabled' ) {
	remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart' );
}

if ( ! function_exists( 'dox_woocommerce_loop_category_title' ) ) {

	/**
	 * Product Category Listing
	 *
	 * @param $category
	 */
	function dox_woocommerce_loop_category_title( $category ) { ?>

        <h3>
			<?php echo '<span>' . $category->name . '</span>';

			if ( $category->count > 0 ) {
				echo apply_filters( 'woocommerce_subcategory_count_html', ' <mark class="count">(' . $category->count . ')</mark>', $category );
			} ?>
        </h3>

	<?php }

	remove_action( 'woocommerce_shop_loop_subcategory_title', 'woocommerce_template_loop_category_title', 10 );
	add_filter( 'woocommerce_shop_loop_subcategory_title', 'dox_woocommerce_loop_category_title', 10 );

}

/**
 * Remove Counter on Product Category Listing
 */
add_filter( 'woocommerce_subcategory_count_html', '__return_false' );