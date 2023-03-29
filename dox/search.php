<?php

/*

Search Template

*/

get_header();
get_template_part( 'templates/heading/search' );
get_template_part( 'templates/layout/wrap', 'start' );
?>

    <div class="fy-centerer">

        <main id="<?php echo esc_attr( forqy_title_to_slug( _x( 'content', 'anchor', 'dox' ) ) ); ?>" class="fy-main">

			<?php
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();

					get_template_part( 'templates/post/search' );
				}

				if ( function_exists( 'forqy_pagination' ) ) {
					forqy_pagination();
				}
			} else { ?>

                <div class="fy-centerer fy-centerer-50">
                    <div class="fy-page-content fy-content fy-content-empty fy-align-center">
                        <h4><?php esc_html_e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'dox' ); ?></h4>
						<?php get_search_form(); ?>
                    </div>
                </div>

			<?php } ?>

        </main>

    </div>

<?php
get_template_part( 'templates/layout/wrap', 'end' );
get_footer();
