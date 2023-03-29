<?php

/*

Categories Section Template

*/

// Taxonomy
$taxonomy = get_theme_mod( 'dox_homepage_categories_tax', dox_default( 'dox_homepage_categories_tax' ) );

// Type
if ( $taxonomy == 'section' ) {
	$type = 'menu';
} else if ( $taxonomy == 'category-event' ) {
	$type = 'event';
} else if ( $taxonomy == 'category-gallery' ) {
	$type = 'gallery';
} else if ( $taxonomy == 'category-portfolio' ) {
	$type = 'project';
} else if ( $taxonomy == 'category-album' ) {
	$type = 'album';
} else if ( forqy_woocommerce_activated() && $taxonomy == 'product_cat' ) {
	$type = 'product';
} else {
	$type = 'post';
}

if ( taxonomy_exists( $taxonomy ) ) {

	// Counter
	$count = 1;

	// Terms
	$terms = get_terms( $taxonomy, array(
		'order'      => 'ASC',
		'hide_empty' => 1,
		'parent'     => 0,
	) );

	if ( $terms ) { ?>

        <section id="<?php echo esc_attr_x( 'categories', 'section anchor', 'dox' ); ?>" class="fy-section--categories fy-section cs-categories">

            <div class="fy-section__container">

                <div class="fy-centerer fy-centerer-50 fy-align-center">

                    <header class="fy-section__header cs-categories-title">
                        <h2>
							<?php if ( get_theme_mod( 'dox_homepage_categories_button_page' ) ) { ?>
                                <a href="<?php echo get_permalink( get_theme_mod( 'dox_homepage_categories_button_page' ) ); ?>">
									<?php echo esc_html( get_theme_mod( 'dox_homepage_categories_title', esc_html__( 'Categories', 'dox' ) ) ); ?>
                                </a>
							<?php } else {
								echo esc_html( get_theme_mod( 'dox_homepage_categories_title', esc_html__( 'Categories', 'dox' ) ) );
							} ?>
                        </h2>
                    </header>

					<?php if ( get_theme_mod( 'dox_homepage_categories_content' ) ) { ?>
                        <div class="fy-section__content fy-content cs-categories-content js-images">
							<?php echo do_shortcode( get_theme_mod( 'dox_homepage_categories_content' ) ); ?>
                        </div>
					<?php } ?>

                </div>

                <div class="fy-centerer">

					<?php
					if ( function_exists( 'dox_terms' ) ) {
						dox_terms( $taxonomy );
					}

					if ( get_theme_mod( 'dox_homepage_categories_button_page' ) ) { ?>
                        <div class="fy-section__actions">
                            <a class="fy-button fy-button-bordered" href="<?php echo get_permalink( get_theme_mod( 'dox_homepage_categories_button_page' ) ); ?>">
								<?php if ( get_theme_mod( 'dox_homepage_categories_button' ) ) {
									echo esc_html( get_theme_mod( 'dox_homepage_categories_button' ) );
								} else {
									echo get_the_title( get_theme_mod( 'dox_homepage_categories_button_page' ) );
								} ?>
                            </a>
                        </div>
					<?php } ?>

                </div>
            </div>

        </section>

		<?php
		wp_reset_postdata();
	}
}
