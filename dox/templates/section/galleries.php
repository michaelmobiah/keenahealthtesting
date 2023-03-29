<?php

/*

Galleries Section Template

*/

// Query
$query = new WP_Query( array(
	'post_type'      => 'gallery',
	'orderby'        => array(
		'menu_order' => 'ASC',
		'date'       => 'DESC',
	),
	'no_found_rows'  => true,
	'posts_per_page' => get_theme_mod( 'dox_homepage_galleries_count', dox_default( 'dox_homepage_galleries_count' ) ),
) );

if ( $query->have_posts() ) { ?>

    <section id="<?php echo esc_attr_x( 'galleries', 'section anchor', 'dox' ); ?>" class="fy-section--galleries fy-section cs-galleries">

        <div class="fy-section__container fy-centerer fy-centerer-<?php echo esc_attr( get_theme_mod( 'dox_content_layout', dox_default( 'dox_content_layout' ) ) ); ?>">

            <div class="fy-centerer fy-centerer-50 fy-align-center">

                <header class="fy-section__header cs-galleries-title">
                    <h2>
						<?php if ( get_theme_mod( 'dox_homepage_galleries_button_page' ) ) { ?>
                            <a href="<?php echo get_permalink( get_theme_mod( 'dox_homepage_galleries_button_page' ) ); ?>">
								<?php echo esc_html( get_theme_mod( 'dox_homepage_galleries_title', esc_html__( 'Galleries', 'dox' ) ) ); ?>
                            </a>
						<?php } else {
							echo esc_html( get_theme_mod( 'dox_homepage_galleries_title', esc_html__( 'Galleries', 'dox' ) ) );
						} ?>
                    </h2>
                </header>

				<?php if ( get_theme_mod( 'dox_homepage_galleries_content' ) ) { ?>
                    <div class="fy-section__content fy-content cs-galleries-content js-images">
						<?php echo do_shortcode( get_theme_mod( 'dox_homepage_galleries_content' ) ); ?>
                    </div>
				<?php } ?>

            </div>

			<?php
			get_template_part( 'templates/layout/container', 'start' );

			while ( $query->have_posts() ) {
				$query->the_post();

				get_template_part( 'templates/layout/column', 'start' );
				get_template_part( 'templates/post/gallery' );
				get_template_part( 'templates/layout/column', 'end' );
			}

			get_template_part( 'templates/layout/container', 'end' );

			if ( get_theme_mod( 'dox_homepage_galleries_button_page' ) ) { ?>
                <div class="fy-section__actions">
                    <a class="fy-button fy-button-bordered" href="<?php echo get_permalink( get_theme_mod( 'dox_homepage_galleries_button_page' ) ); ?>">
						<?php if ( get_theme_mod( 'dox_homepage_galleries_button' ) ) {
							echo esc_html( get_theme_mod( 'dox_homepage_galleries_button' ) );
						} else {
							echo get_the_title( get_theme_mod( 'dox_homepage_galleries_button_page' ) );
						} ?>
                    </a>
                </div>
			<?php } ?>

        </div>

    </section>

	<?php
	wp_reset_postdata();
}
