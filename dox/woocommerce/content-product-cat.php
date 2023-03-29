<?php
/**
 * The template for displaying product category thumbnails within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product_cat.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 4.7.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<div class="fy-category-column fy-flex-column-20 fy-flex-column-desktop-wide-20 fy-flex-column-desktop-25 fy-flex-column-tablet-33 fy-flex-column-phone-100">
    <div <?php wc_product_cat_class( '', $category ); ?>>
        <div class="fy-product-category fy-term fy-term-<?php echo esc_attr( get_theme_mod( 'dox_post_appearance', dox_default( 'dox_post_appearance' ) ) ); ?>">
			<?php
			/**
			 * woocommerce_before_subcategory hook.
			 *
			 * @hooked woocommerce_template_loop_category_link_open - 10
			 */
			do_action( 'woocommerce_before_subcategory', $category );
			?>
            <div class="fy-term-image">
				<?php
				/**
				 * woocommerce_before_subcategory_title hook.
				 *
				 * @hooked woocommerce_subcategory_thumbnail - 10
				 */
				do_action( 'woocommerce_before_subcategory_title', $category );
				?>
            </div>
            <div class="fy-term-header">
				<?php
				/**
				 * woocommerce_shop_loop_subcategory_title hook.
				 *
				 * @hooked woocommerce_template_loop_category_title - 10
				 */
				do_action( 'woocommerce_shop_loop_subcategory_title', $category );

				/**
				 * woocommerce_after_subcategory_title hook.
				 */
				do_action( 'woocommerce_after_subcategory_title', $category );
				?>
            </div>
			<?php
			/**
			 * woocommerce_after_subcategory hook.
			 *
			 * @hooked woocommerce_template_loop_category_link_close - 10
			 */
			do_action( 'woocommerce_after_subcategory', $category ); ?>
        </div>
    </div>
</div>