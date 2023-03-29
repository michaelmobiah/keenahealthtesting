<?php
/**
 * Product loop sale flash
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/sale-flash.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $post, $product;

$postdate       = get_the_time( 'Y-m-d' );
$postdate_stamp = strtotime( $postdate );
$newness        = get_theme_mod( 'dox_shop_product_badge_new', '14' );

if ( $product->is_on_sale() || ( time() - ( 60 * 60 * 24 * $newness ) ) < $postdate_stamp ) { ?>
    <div class="fy-badges">
		<?php
		if ( ( time() - ( 60 * 60 * 24 * $newness ) ) < $postdate_stamp ) {
			echo '<div class="fy-badge-new">' . __( 'New', 'dox' ) . '</div>';
		}

		if ( $product->is_on_sale() ) {
			echo apply_filters( 'woocommerce_sale_flash', '<span class="fy-badge-onsale">' . esc_html__( 'Sale', 'woocommerce' ) . '</span>', $post, $product );
		}
		?>
    </div>
<?php }
