<?php

/*

Author Template

*/

get_header();
get_template_part( 'templates/heading/archive' );
get_template_part( 'templates/layout/wrap', 'start' );
?>

    <div class="fy-centerer fy-centerer-<?php echo esc_attr( get_theme_mod( 'dox_content_layout', dox_default( 'dox_content_layout' ) ) ); ?>">

        <main id="<?php echo esc_attr( forqy_title_to_slug( _x( 'content', 'anchor', 'dox' ) ) ); ?>" class="fy-main fy-main-author">

			<?php
			if ( category_description() ) { ?>
                <div class="fy-page-content fy-content">
					<?php echo category_description(); ?>
                </div>
			<?php }

			get_template_part( 'templates/loop/archive' );
			?>

        </main>

    </div>

<?php
get_template_part( 'templates/layout/wrap', 'end' );
get_footer();
