<?php

/*

Featured Products Section Template

*/

// Default number of posts
$posts_number_default = '4';

if ( forqy_woocommerce_activated() ) {

	$meta_query  = WC()->query->get_meta_query();
	$tax_query   = WC()->query->get_tax_query();
	$tax_query[] = array(
		'taxonomy' => 'product_visibility',
		'field'    => 'name',
		'terms'    => 'featured',
		'operator' => 'IN',
	);

	$featured_query = new WP_Query( array(
		'post_type'           => 'product',
		'post_status'         => 'publish',
		'ignore_sticky_posts' => true,
		'no_found_rows'       => true,
		'meta_query'          => $meta_query,
		'tax_query'           => $tax_query,
	) );

	if ( $featured_query->have_posts() ) { ?>

        <section id="<?php echo esc_attr_x( 'products-featured', 'section anchor', 'dox' ); ?>" class="fy-section--products-featured fy-section">

            <div class="fy-section__container fy-centerer fy-centerer-<?php echo esc_attr( get_theme_mod( 'dox_content_layout', dox_default( 'dox_content_layout' ) ) ); ?>">

                <div class="fy-centerer fy-centerer-50 fy-align-center">

                    <header class="fy-section__header cs-products-featured-title">
                        <h2>
                            <span><?php echo esc_html( get_theme_mod( 'dox_homepage_products_featured_title', esc_html__( 'Explore Top Products', 'dox' ) ) ); ?></span>
                        </h2>
                    </header>

					<?php if ( get_theme_mod( 'dox_homepage_products_featured_content' ) ) { ?>
                        <div class="fy-section__content fy-content cs-products-featured-content js-images">
							<?php echo do_shortcode( get_theme_mod( 'dox_homepage_products_featured_content' ) ); ?>
                        </div>
					<?php } ?>

                </div>

				<?php echo do_shortcode( apply_filters( 'dox_section_products_featured_shortcode', "[products visibility='featured' limit='" . get_theme_mod( 'dox_homepage_products_featured_count', $posts_number_default ) . "']" ) ); ?>

            </div>

        </section>

		<?php
		wp_reset_postdata();
	}
}
