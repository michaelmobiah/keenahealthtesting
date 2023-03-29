<?php

/*

Single Gallery Template

*/

get_header();

get_template_part( 'templates/heading/single' );
get_template_part( 'templates/layout/wrap', 'start' );
?>
    <div itemscope itemtype="https://schema.org/Blog">

        <main id="<?php echo esc_attr( forqy_title_to_slug( _x( 'content', 'anchor', 'dox' ) ) ); ?>" class="fy-main fy-main-single" itemprop="blogPost" itemscope
              itemtype="https://schema.org/BlogPosting">

			<?php
			get_template_part( 'templates/post/gallery', 'single' );

			if ( comments_open() || get_comments_number() ) {
				comments_template();
			} ?>

        </main>

    </div>

<?php
get_template_part( 'templates/layout/wrap', 'end' );
get_footer();
