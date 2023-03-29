<?php

/*

Template Name: Blog

*/

get_header();
get_template_part( 'templates/heading' );
get_template_part( 'templates/layout/wrap', 'start-stretched' );
?>


    <main id="<?php echo esc_attr( forqy_title_to_slug( _x( 'content', 'anchor', 'dox' ) ) ); ?>" class="fy-main fy-main-blog">

        <div class="fy-centerer">

			<?php
			// Content
			get_template_part( 'templates/page/content' );

			// Terms
			get_template_part( 'templates/loop/blog' );
			?>

        </div>

    </main>


<?php
get_template_part( 'templates/layout/wrap', 'end' );
get_footer();
