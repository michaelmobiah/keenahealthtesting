<?php

/*

Template Name: Page - Stretched

*/

get_header();
get_template_part( 'templates/heading/page' );
get_template_part( 'templates/layout/wrap', 'start-stretched' );
?>

    <div class="fy-centerer fy-centerer-stretched">

        <main id="<?php echo esc_attr( forqy_title_to_slug( _x( 'content', 'anchor', 'dox' ) ) ); ?>" class="fy-main fy-main-page">

			<?php
			// Content
			get_template_part( 'templates/page/content' );

			if ( comments_open() || get_comments_number() ) {
				comments_template();
			} ?>

        </main>

    </div>

<?php
get_template_part( 'templates/layout/wrap', 'end' );
get_footer();
