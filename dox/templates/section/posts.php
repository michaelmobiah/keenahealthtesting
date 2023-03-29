<?php

/*

Posts Section Template

*/

// Query
$query = new WP_Query( array(
	'ignore_sticky_posts' => true,
	'no_found_rows'       => true,
	'posts_per_page'      => get_theme_mod( 'dox_homepage_posts_count', dox_default( 'dox_homepage_posts_count' ) ),
) );

if ( $query->have_posts() ) { ?>

    <section id="<?php echo esc_attr_x( 'posts', 'section anchor', 'dox' ); ?>" class="fy-section-posts fy-section cs-posts">

        <div class="fy-section__container fy-centerer fy-centerer-<?php echo esc_attr( get_theme_mod( 'dox_content_layout', dox_default( 'dox_content_layout' ) ) ); ?>">

            <div class="fy-centerer fy-centerer-50 fy-align-center">

                <header class="fy-section__header cs-posts-title">
                    <h2>
						<?php if ( get_theme_mod( 'dox_homepage_posts_button_page' ) ) { ?>
                            <a href="<?php echo get_permalink( get_theme_mod( 'dox_homepage_posts_button_page' ) ); ?>">
								<?php echo esc_html( get_theme_mod( 'dox_homepage_posts_title', esc_html__( 'Recent News', 'dox' ) ) ); ?>
                            </a>
						<?php } else {
							echo esc_html( get_theme_mod( 'dox_homepage_posts_title', esc_html__( 'Recent News', 'dox' ) ) );
						} ?>
                    </h2>
                </header>

				<?php if ( get_theme_mod( 'dox_homepage_posts_content' ) ) { ?>
                    <div class="fy-section__content fy-content cs-posts-content js-images">
						<?php echo do_shortcode( get_theme_mod( 'dox_homepage_posts_content' ) ); ?>
                    </div>
				<?php } ?>

            </div>

			<?php
			get_template_part( 'templates/layout/container', 'start' );

			while ( $query->have_posts() ) {
				$query->the_post();

				get_template_part( 'templates/layout/column', 'start' );

				if ( get_post_type() != 'post' ) {
					get_template_part( 'templates/post/' . get_post_type() );
				} else if ( get_post_type() == 'post' ) {

					if ( get_post_format() ) {
						get_template_part( 'templates/post/' . get_post_format() );
					} else {
						get_template_part( 'templates/post/standard' );
					}

				}

				get_template_part( 'templates/layout/column', 'end' );

			}

			get_template_part( 'templates/layout/container', 'end' );

			if ( get_theme_mod( 'dox_homepage_posts_button_page' ) ) { ?>
                <div class="fy-section__actions">
                    <a class="fy-button fy-button-bordered" href="<?php echo get_permalink( get_theme_mod( 'dox_homepage_posts_button_page' ) ); ?>">
						<?php if ( get_theme_mod( 'dox_homepage_posts_button' ) ) {
							echo esc_html( get_theme_mod( 'dox_homepage_posts_button' ) );
						} else {
							echo get_the_title( get_theme_mod( 'dox_homepage_posts_button_page' ) );
						} ?>
                    </a>
                </div>
			<?php } ?>

        </div>

    </section>

	<?php
	wp_reset_postdata();
}
