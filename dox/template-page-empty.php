<?php

/*

Template Name: Page - Empty

*/

get_header();
?>

    <main id="<?php echo esc_attr( forqy_title_to_slug( _x( 'content', 'anchor', 'dox' ) ) ); ?>">

		<?php
		the_content();
		wp_link_pages();
		?>

    </main>

<?php
get_footer();
