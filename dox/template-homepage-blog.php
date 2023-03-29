<?php

/*

Template Name: Homepage - Blog

*/

// Main
$main_class = is_active_sidebar( 'homepage-blog' ) ? 'sidebar-active' : 'sidebar-inactive';

get_header();
get_template_part( 'templates/homepage/slideshow' );
?>

    <div class="fy-wrap fy-wrap-homepage">
		<?php get_template_part( 'templates/design/border' ); ?>

        <div class="fy-homepage fy-homepage-blog">

			<?php
			get_template_part( 'templates/homepage/widgets', 'cta' );
			get_template_part( 'templates/homepage/widgets', 'top' );

			if ( ! empty( get_the_content() ) ) { ?>
                <div class="fy-section fy-section--content">
                    <div class="fy-section__container fy-centerer fy-centerer-<?php echo esc_attr( get_theme_mod( 'dox_content_layout', dox_default( 'dox_content_layout' ) ) ); ?>">
						<?php get_template_part( 'templates/page/content' ); ?>
                    </div>
                </div>
			<?php } else {
				the_content();
			} ?>

            <div class="fy-section fy-section--posts fy-section--posts-blog">

                <div class="fy-section__container fy-centerer fy-centerer-<?php echo esc_attr( get_theme_mod( 'dox_content_layout', dox_default( 'dox_content_layout' ) ) ); ?>">

                    <div class="fy-flex-container fy-flex-gutter-large">

                        <main id="<?php echo esc_attr( forqy_title_to_slug( _x( 'content', 'anchor', 'dox' ) ) ); ?>"
                              class="fy-main fy-main-homepage-blog fy-flex-column-auto <?php echo esc_attr( $main_class ); ?>">
							<?php get_template_part( 'templates/loop/blog', 'home' ); ?>
                        </main>

						<?php if ( is_active_sidebar( 'homepage-blog' ) ) {
							get_sidebar( 'homepage-blog' );
						} ?>

                    </div>

					<?php if ( get_theme_mod( 'dox_homepage_posts_button_page' ) ) { ?>
                        <div class="fy-go-to fy-go-to-posts">
                            <a class="fy-button fy-button-bordered"
                               href="<?php echo get_permalink( get_theme_mod( 'dox_homepage_posts_button_page' ) ); ?>">

								<?php if ( get_theme_mod( 'dox_homepage_posts_button' ) ) {
									echo esc_html( get_theme_mod( 'dox_homepage_posts_button' ) );
								} else {
									echo get_the_title( get_theme_mod( 'dox_homepage_posts_button_page' ) );
								} ?>
                            </a>
                        </div>
					<?php } ?>

                </div>

            </div>

			<?php
			get_template_part( 'templates/homepage/sections' );
			get_template_part( 'templates/homepage/widgets', 'bottom' );
			?>

        </div>

    </div>

<?php
get_footer();
