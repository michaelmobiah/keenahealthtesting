<?php

/*

WooCommerce Single

*/

/*
 * If the WooCommerce plugin is not activated, return early
 */
if ( ! forqy_woocommerce_activated() ) {
	return;
}

if ( ! function_exists( 'dox_woocommerce_single_navigation_links' ) ) {

	/**
	 * Prev/Next Product
	 */
	function dox_woocommerce_single_navigation_links() {

		if ( is_product() ) {

			if ( get_adjacent_post() || get_adjacent_post( false, '', false ) ) { ?>

				<div class="fy-navigation-products">
					<div class="fy-flex-container fy-flex-container-center fy-flex-gutter-0">

						<div class="fy-flex-column-50 fy-flex-column-phone-100">
							<?php if ( get_adjacent_post() ) { ?>
								<div class="fy-product-prev">
									<?php previous_post_link( '%link', __( 'Previous', 'dox' ) . ' &mdash; ' . '%title' ); ?>
								</div>
							<?php } ?>
						</div>

						<div class="fy-flex-column-50 fy-flex-column-phone-100">
							<?php if ( get_adjacent_post( false, '', false ) ) { ?>
								<div class="fy-product-next">
									<?php next_post_link( '%link', '%title' . ' &mdash; ' . __( 'Next', 'dox' ) ); ?>
								</div>
							<?php } ?>
						</div>

					</div>
				</div>

			<?php }

		}

	}

	if ( get_theme_mod( 'dox_shop_product_navigation' ) != 'disabled' ) {
		add_action( 'woocommerce_after_single_product_summary', 'dox_woocommerce_single_navigation_links', 12 );
	}

}

if ( ! function_exists( 'dox_woocommerce_single_gallery_settings' ) ) {

	/**
	 * Product Gallery Zoom
	 */
	function dox_woocommerce_single_gallery_settings() {

		if ( get_theme_mod( 'dox_shop_product_gallery_zoom', dox_default( 'dox_shop_product_gallery_zoom' ) ) == 'disabled' ) {
			remove_theme_support( 'wc-product-gallery-zoom' );
		}
		if ( get_theme_mod( 'dox_shop_product_gallery_slider', dox_default( 'dox_shop_product_gallery_slider' ) ) == 'disabled' ) {
			remove_theme_support( 'wc-product-gallery-slider' );
		}

	}

	add_action( 'after_setup_theme', 'dox_woocommerce_single_gallery_settings' );

}

if ( ! function_exists( 'dox_woocommerce_single_share' ) ) {

	/**
	 * Share
	 */
	function dox_woocommerce_single_share() { ?>

		<div class="fy-product-share">
			<?php get_template_part( 'templates/social/share' ); ?>
		</div>

	<?php }

	add_action( 'woocommerce_share', 'dox_woocommerce_single_share', 50 );

}
