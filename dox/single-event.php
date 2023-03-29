<?php

/*

Single Event Template

*/

get_header();

get_template_part( 'templates/heading/single', 'event' );
get_template_part( 'templates/layout/wrap', 'start' );
?>

    <main id="<?php echo esc_attr( forqy_title_to_slug( _x( 'content', 'anchor', 'dox' ) ) ); ?>" class="fy-main fy-main-single" itemscope itemtype="https://schema.org/Event">

		<?php
		get_template_part( 'templates/post/event', 'single' );

		if ( comments_open() || get_comments_number() ) {
			comments_template();
		} ?>

    </main>

<?php
get_template_part( 'templates/layout/wrap', 'end' );
get_footer();
