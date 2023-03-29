<?php

/*

Search Template

*/

if ( get_theme_mod( 'dox_shop_toolbar_search', dox_default( 'dox_shop_toolbar_search' ) == 'enabled' ) ) { ?>

    <aside id="<?php echo esc_attr( forqy_title_to_slug( _x( 'toolbar-search', 'anchor', 'dox' ) ) ); ?>"
           class="fy-search fy-off--search fy-off js-off"
           data-off="search"
           data-off-breakpoint="all"
           data-off-position="top"
           data-off-relocate="false"
           aria-labelledby="search-heading"
           aria-hidden="true">

        <div class="fy-search__container fy-centerer fy-centerer-50">

            <div class="fy-search__form fy-off__form cs-search">
		        <?php if ( forqy_woocommerce_activated() ) { ?>
                    <h3 id="search-heading"><?php echo esc_html__( 'Search products', 'woocommerce' ); ?></h3>
			        <?php get_product_search_form(); ?>
		        <?php } else { ?>
                    <h3 id="search-heading"><?php echo esc_html__( 'Search', 'dox' ); ?></h3>
			        <?php get_search_form(); ?>
		        <?php } ?>
            </div>

            <button type="button" class="fy-search__close fy-off__close js-off__close"
                    aria-controls="<?php echo esc_attr( forqy_title_to_slug( _x( 'toolbar-search', 'anchor', 'dox' ) ) ); ?>">
		        <?php get_template_part( 'images/icon/close' ); ?>
                <span class="screen-reader-text"><?php esc_html_e( 'Close', 'dox' ); ?></span>
            </button>

			<?php
			/**
			 * Hook: dox_search
			 */
			do_action( 'dox_search' );
			?>

        </div>

    </aside>

<?php }
