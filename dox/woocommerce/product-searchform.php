<?php
/**
 * The template for displaying product search form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/product-searchform.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<form method="get" class="woocommerce-product-search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="fy-field fy-field-search">

        <label class="fy-label screen-reader-text" for="woocommerce-product-search-field-<?php echo isset( $index ) ? absint( $index ) : 0; ?>">
            <?php esc_html_e( 'Search', 'woocommerce' ); ?>
        </label>

        <input type="search" id="woocommerce-product-search-field-<?php echo isset( $index ) ? absint( $index ) : 0; ?>" class="fy-input search-field"
               placeholder="<?php echo esc_attr__( 'Search products', 'woocommerce' ); ?> ..." value="<?php echo get_search_query(); ?>" name="s">

        <button type="submit" class="fy-button">
            <?php get_template_part( 'images/icon/search' ); ?>
            <span class="screen-reader-text"><?php echo esc_html_x( 'Search', 'submit button', 'woocommerce' ); ?></span>
        </button>

        <input type="hidden" name="post_type" value="product">
    </div>
</form>