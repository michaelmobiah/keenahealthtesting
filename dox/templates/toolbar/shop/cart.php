<?php

/*

Cart Shop Toolbar Template

*/

?>

<li class="fy-toolbar__item-cart<?php if ( WC()->cart->get_cart_contents_count() >= 1 ) { ?> has-product<?php } ?>">
    <a href="<?php echo wc_get_cart_url(); ?>">
        <div class="fy-flex-container fy-flex-container-center fy-flex-gutter-0">
            <div class="fy-flex-column-auto">
                <span class="fy-icon"><?php get_template_part( 'images/icon/cart' ); ?></span>
                <span class="screen-reader-text"><?php esc_html_e( 'Cart', 'dox' ); ?></span>
            </div>
			<?php if ( WC()->cart->get_cart_contents_count() >= 1 ) { ?>
                <div class="fy-flex-column-auto">
                    <div class="fy-cart-count">
						<?php echo WC()->cart->get_cart_contents_count(); ?>
                    </div>
                </div>
			<?php } ?>
        </div>
    </a>

	<?php if ( WC()->cart->get_cart_contents_count() >= 1 ) { ?>
        <ul>
            <li class="fy-toolbar__minicart">
				<?php woocommerce_mini_cart(); ?>
            </li>
        </ul>
	<?php } ?>
</li>
