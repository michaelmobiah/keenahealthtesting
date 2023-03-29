<?php

/*

Single Template

*/

get_header();
get_template_part( 'templates/heading' );
get_template_part( 'templates/layout/wrap', 'start' );
?>

    <div class="fy-centerer fy-centerer-<?php echo esc_attr( get_theme_mod( 'dox_content_layout', dox_default( 'dox_content_layout' ) ) ); ?>">

        <main id="<?php echo esc_attr( forqy_title_to_slug( _x( 'content', 'anchor', 'dox' ) ) ); ?>" class="fy-main fy-main-single">

			<?php if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();

					get_template_part( 'templates/post/attachment', 'single' );

					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				}
			} ?>

        </main>

    </div>

<?php
get_template_part( 'templates/layout/wrap', 'end' );
get_footer();
