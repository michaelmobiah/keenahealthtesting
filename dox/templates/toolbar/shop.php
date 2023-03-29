<?php

/*

Shop Toolbar Template

*/

global $current_user;
?>

<nav class="fy-toolbar">
    <ul class="fy-toolbar__list">

		<?php if ( get_theme_mod( 'dox_shop_toolbar_search', dox_default( 'dox_shop_toolbar_search' ) == 'enabled' ) ) { ?>
            <li class="fy-toolbar__item-search cs-toolbar-search">
                <button type="button" class="js-off__trigger" data-off="search" aria-controls="<?php echo esc_attr( forqy_title_to_slug( _x( 'toolbar-search', 'anchor', 'dox' ) ) ); ?>"
                        aria-expanded="false">
					<?php get_template_part( 'images/icon/search' ); ?>
                    <span class="screen-reader-text"><?php esc_html_e( 'Search', 'dox' ); ?></span>
                </button>
            </li>
		<?php }

		if ( get_theme_mod( 'dox_shop_toolbar_account', dox_default( 'dox_shop_toolbar_account' ) == 'enabled' ) ) { ?>
            <li class="fy-toolbar__item-account">
                <a href="<?php echo get_permalink( get_option( 'woocommerce_myaccount_page_id' ) ); ?>">
                    <span class="fy-icon"><?php get_template_part( 'images/icon/user' ); ?></span>
                    <span class="screen-reader-text"><?php echo is_user_logged_in() ? esc_attr( $current_user->display_name ) : esc_attr__( 'Login/Register', 'dox' ); ?></span>
                </a>
            </li>
		<?php }

		/**
		 * Hook: dox_toolbar_shop_cart
		 * @hooked dox_woocommerce_toolbar_cart - 10
		 */
		do_action( 'dox_toolbar_shop_cart' );
		?>

    </ul>
</nav>
