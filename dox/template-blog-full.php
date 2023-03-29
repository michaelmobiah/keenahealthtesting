<?php

/*

Template Name: Blog - Full-width

*/

// Type
$type = 'post';

get_header();
get_template_part( 'templates/heading' );
get_template_part( 'templates/layout/wrap', 'start-stretched' );
?>

    <main id="<?php echo esc_attr( forqy_title_to_slug( _x( 'content', 'anchor', 'dox' ) ) ); ?>" class="fy-main fy-main-blog">

        <div class="fy-centerer fy-centerer-<?php echo esc_attr( get_theme_mod( 'dox_content_layout', dox_default( 'dox_content_layout' ) ) ); ?>">

			<?php
			// Content
			get_template_part( 'templates/page/content' );

			// Query
			get_template_part( 'templates/loop/blog' );
			?>

        </div>

    </main>

<?php
get_template_part( 'templates/layout/wrap', 'end' );
get_footer();