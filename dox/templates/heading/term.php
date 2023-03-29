<?php

/*

Term Heading Template

*/

?>

<header class="fy-heading fy-heading-<?php echo esc_attr( get_theme_mod( 'dox_heading_height', dox_default( 'dox_heading_height' ) ) ); ?> js-video-container">

	<?php get_template_part( 'templates/image/background' ); ?>

    <div class="fy-heading-container fy-centerer fy-centerer-<?php echo esc_attr( get_theme_mod( 'dox_content_layout', dox_default( 'dox_content_layout' ) ) ); ?>">

        <h1><?php single_term_title(); ?></h1>

		<?php if ( term_description() ) { ?>
            <div class="fy-centerer fy-centerer-75<?php if ( get_theme_mod( 'dox_heading_align_horizontal', dox_default( 'dox_heading_align_horizontal' ) ) == 'left' ) { ?> fy-centerer-left<?php } else if ( get_theme_mod( 'dox_heading_align_horizontal', dox_default( 'dox_heading_align_horizontal' ) ) == 'right' ) { ?> fy-centerer-right<?php } ?>">
                <div class="fy-heading-content fy-content">
					<?php echo term_description(); ?>
                </div>
            </div>
		<?php }

		if ( get_theme_mod( 'dox_heading_categories' ) != 'disabled' ) {
			if ( is_tax( 'category-portfolio' ) ) {
				get_template_part( 'templates/navigation/tax/portfolio' );
			} else if ( is_tax( 'category-album' ) ) {
				get_template_part( 'templates/navigation/tax/albums' );
			} else if ( is_tax( 'category-event' ) ) {
				get_template_part( 'templates/navigation/tax/events' );
			} else if ( is_tax( 'category-gallery' ) ) {
				get_template_part( 'templates/navigation/tax/gallery' );
			} else if ( is_tax( 'section' ) ) {
				get_template_part( 'templates/navigation/tax/menu' );
			}
		} ?>

    </div>

	<?php get_template_part( 'templates/design/border' ); ?>
</header>
