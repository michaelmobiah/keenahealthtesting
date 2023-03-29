<?php

/*

Archive Template

*/

// Main
$main_class = is_active_sidebar( 'blog' ) ? 'sidebar-active' : 'sidebar-inactive';

get_header();
get_template_part( 'templates/heading/archive' );
get_template_part( 'templates/layout/wrap', 'start' );
?>

    <div class="fy-centerer fy-centerer-<?php echo esc_attr( get_theme_mod( 'dox_content_layout', dox_default( 'dox_content_layout' ) ) ); ?>">

        <div class="fy-flex-container fy-flex-gutter-large">

            <main id="<?php echo esc_attr( forqy_title_to_slug( _x( 'content', 'anchor', 'dox' ) ) ); ?>"
                  class="fy-main fy-flex-column-auto <?php echo esc_attr( $main_class ); ?>">
				<?php get_template_part( 'templates/loop/archive' ); ?>
            </main>

			<?php if ( is_active_sidebar( 'blog' ) ) {
				get_sidebar( 'blog' );
			} ?>

        </div>

    </div>

<?php
get_template_part( 'templates/layout/wrap', 'end' );
get_footer();
