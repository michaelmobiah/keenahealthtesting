<?php

/*

Template Name: Contact

*/

// Main
$main_class = is_active_sidebar( 'contact' ) ? 'sidebar-active' : 'sidebar-inactive';

get_header();
get_template_part( 'templates/heading/page' );
get_template_part( 'templates/layout/wrap', 'start' );
?>

    <div class="fy-centerer fy-centerer-<?php echo esc_attr( get_theme_mod( 'dox_page_width', dox_default( 'dox_page_width' ) ) ); ?>">

        <div class="fy-flex-container fy-flex-gutter-large">

            <main id="<?php echo esc_attr( forqy_title_to_slug( _x( 'content', 'anchor', 'dox' ) ) ); ?>"
                  class="fy-main fy-main-contact fy-main-page fy-flex-column-auto <?php echo esc_attr( $main_class ); ?>">

				<?php
				// Content
				get_template_part( 'templates/page/content' );

				// Form
				if ( shortcode_exists( 'forqy-form-contact' ) ) {
					echo do_shortcode( '[forqy-form-contact]' );
				} ?>

            </main>

			<?php if ( is_active_sidebar( 'contact' ) ) {
				get_sidebar( 'contact' );
			} ?>

        </div>

    </div>

<?php
get_template_part( 'templates/layout/wrap', 'end' );
get_footer();
