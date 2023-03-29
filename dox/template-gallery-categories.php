<?php

/*

Template Name: Gallery - Categories

*/

get_header();
get_template_part( 'templates/heading' );
get_template_part( 'templates/layout/wrap', 'start' );
?>

    <div class="fy-centerer">

        <main id="<?php echo esc_attr( forqy_title_to_slug( _x( 'content', 'anchor', 'dox' ) ) ); ?>" class="fy-main fy-main-gallery">

			<?php
			// Content
			get_template_part( 'templates/page/content' );

			// Terms
			if ( function_exists( 'dox_terms' ) ) {
				dox_terms( 'category-gallery' );
			} ?>

        </main>

    </div>

<?php
get_template_part( 'templates/layout/wrap', 'end' );
get_footer();
