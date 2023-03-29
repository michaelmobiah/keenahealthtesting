<?php

/*

Page Template

*/

// Main
$main_class = is_active_sidebar( 'page' ) ? 'sidebar-active' : 'sidebar-inactive';

get_header();

if ( forqy_woocommerce_activated() ) {
	if ( is_shop() || is_product() || is_product_category() || is_product_tag() || is_account_page() ) {
		get_template_part( 'templates/heading/shop' );
	} else if ( is_cart() || is_checkout() ) {
		get_template_part( 'templates/heading/checkout' );
	} else {
		get_template_part( 'templates/heading' );
	}
} else {
	get_template_part( 'templates/heading' );
}

get_template_part( 'templates/layout/wrap', 'start' );
?>

    <div class="fy-centerer fy-centerer-<?php echo esc_attr( get_theme_mod( 'dox_page_width', dox_default( 'dox_page_width' ) ) ); ?>">

        <div class="fy-flex-container fy-flex-gutter-large">

            <main id="<?php echo esc_attr( forqy_title_to_slug( _x( 'content', 'anchor', 'dox' ) ) ); ?>"
                  class="fy-main fy-main-page fy-flex-column-auto <?php echo esc_attr( $main_class ); ?>">

				<?php
				// Content
				get_template_part( 'templates/page/content' );

				if ( comments_open() || get_comments_number() ) {
					comments_template();
				} ?>

            </main>

			<?php if ( is_active_sidebar( 'page' ) ) {
				get_sidebar();
			} ?>

        </div>

    </div>

<?php
get_template_part( 'templates/layout/wrap', 'end' );
get_footer();
