<?php

/*

Single Menu Template

*/

get_header();
get_template_part( 'templates/heading/single', 'menu' );
get_template_part( 'templates/layout/wrap', 'start' );
?>

    <main id="<?php echo esc_attr( forqy_title_to_slug( _x( 'content', 'anchor', 'dox' ) ) ); ?>" class="fy-main fy-main-single" itemprop="hasMenuItem" itemscope
          itemtype="https://schema.org/MenuItem">

		<?php get_template_part( 'templates/post/menu', 'single' ); ?>

    </main>

<?php
get_template_part( 'templates/layout/wrap', 'end' );
get_footer();
