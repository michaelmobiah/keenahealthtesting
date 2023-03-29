<?php

/*

Template Name: Page - 75% width

*/

get_header();
get_template_part( 'templates/heading/page' );
get_template_part( 'templates/layout/wrap', 'start' );
?>

    <div class="fy-centerer fy-centerer-75">

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
