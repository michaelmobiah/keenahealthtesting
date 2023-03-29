<?php

/*

Template Name: Reservations

*/

// Main
$main_class = is_active_sidebar( 'reservations' ) ? 'sidebar-active' : 'sidebar-inactive';

get_header();
get_template_part( 'templates/heading/page' );
get_template_part( 'templates/layout/wrap', 'start' );
?>

    <div class="fy-centerer fy-centerer-<?php echo esc_attr( get_theme_mod( 'dox_page_width', dox_default( 'dox_page_width' ) ) ); ?>">

        <div class="fy-flex-container fy-flex-gutter-large">

            <main id="<?php echo esc_attr( forqy_title_to_slug( _x( 'content', 'anchor', 'dox' ) ) ); ?>"
                  class="fy-main fy-main-reservations fy-flex-column-auto <?php echo esc_attr( $main_class ); ?>">

				<?php
				// Content
				get_template_part( 'templates/page/content' );

				// Form
				if ( post_type_exists( 'reservation' ) && shortcode_exists( 'forqy-form-reservation' ) ) {
					echo do_shortcode( '[forqy-form-reservation width="auto"]' );
				} ?>

            </main>

			<?php if ( is_active_sidebar( 'reservations' ) ) {
				get_sidebar( 'reservations' );
			} ?>

        </div>

    </div>

<?php
get_template_part( 'templates/layout/wrap', 'end' );
get_footer();
