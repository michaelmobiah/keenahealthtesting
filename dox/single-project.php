<?php

/*

Single Project Template

*/

get_header();

get_template_part( 'templates/heading/single', 'project' );
get_template_part( 'templates/layout/wrap', 'start' );
?>

    <main id="<?php echo esc_attr( forqy_title_to_slug( _x( 'content', 'anchor', 'dox' ) ) ); ?>" class="fy-main fy-main-single" itemscope
          itemtype="https://schema.org/CreativeWork">

		<?php get_template_part( 'templates/post/project', 'single' ); ?>

    </main>

<?php
get_template_part( 'templates/layout/wrap', 'end' );
get_footer();
