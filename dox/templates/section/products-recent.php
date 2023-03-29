<?php

/*

Recent Products Section Template

*/

// Default number of posts
$posts_number_default = '4';

if ( forqy_woocommerce_activated() ) {

	$args = array(
		'post_type'     => 'product',
		'no_found_rows' => true,
	);

	$recent_query = new WP_Query( $args );

	if ( $recent_query->have_posts() ) { ?>

        <section id="<?php echo esc_attr_x( 'products-recent', 'section anchor', 'dox' ); ?>" class="fy-section--products-recent fy-section">

            <div class="fy-section__container fy-centerer fy-centerer-<?php echo esc_attr( get_theme_mod( 'dox_content_layout', dox_default( 'dox_content_layout' ) ) ); ?>">

                <div class="fy-centerer fy-centerer-50 fy-align-center">

                    <header class="fy-section__header cs-products-recent-title">
                        <h2>
                            <span><?php echo esc_html( get_theme_mod( 'dox_homepage_products_recent_title', esc_html__( 'Latest Products', 'dox' ) ) ); ?></span>
                        </h2>
                    </header>

					<?php if ( get_theme_mod( 'dox_homepage_products_recent_content' ) ) { ?>
                        <div class="fy-section__content fy-content cs-products-recent-content js-images">
							<?php echo do_shortcode( get_theme_mod( 'dox_homepage_products_recent_content' ) ); ?>
                        </div>
					<?php } ?>

                </div>

				<?php echo do_shortcode( apply_filters( 'dox_section_products_recent_shortcode', "[products orderby='id' order='DESC' visibility='visible' limit='" . get_theme_mod( 'dox_homepage_products_recent_count', $posts_number_default ) . "']" ) ); ?>

            </div>

        </section>

		<?php
		wp_reset_postdata();
	}
}
