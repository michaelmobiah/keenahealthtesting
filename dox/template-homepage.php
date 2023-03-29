<?php

/*

Template Name: Homepage

*/

get_header();
get_template_part( 'templates/homepage/slideshow' );
?>

    <div class="fy-wrap fy-wrap-homepage">
		<?php get_template_part( 'templates/design/border' ); ?>

        <div class="fy-homepage">

            <main id="<?php echo esc_attr( forqy_title_to_slug( _x( 'content', 'anchor', 'dox' ) ) ); ?>" class="fy-main fy-main-homepage">

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
				}

				get_template_part( 'templates/homepage/sections' );
				get_template_part( 'templates/homepage/widgets', 'bottom' );
				?>

            </main>

        </div>

    </div>

<?php
get_footer();
