<?php

/*

Index Heading Template

*/

// Get Blog Page Title
$title = get_the_title( get_option( 'page_for_posts', true ) );

// Video
$video = forqy_meta( 'fy_video', false, get_option( 'page_for_posts' ) );

if ( ! is_front_page() ) { ?>
    <header class="fy-heading<?php if ( ! $title ) { ?> fy-heading-empty<?php } else { ?> fy-heading-<?php echo esc_attr( get_theme_mod( 'dox_heading_height', dox_default( 'dox_heading_height' ) ) ); ?><?php } ?> js-video-container">
		<?php if ( get_theme_mod( 'dox_heading_background_image', dox_default( 'dox_heading_background_image' ) ) != 'disabled' ) {
			get_template_part( 'templates/image/background' );
		} ?>

        <div class="fy-heading-container fy-centerer fy-centerer-<?php echo esc_attr( get_theme_mod( 'dox_content_layout', dox_default( 'dox_content_layout' ) ) ); ?>">

			<?php if ( is_home() && get_option( 'page_for_posts' ) ) {
				if ( ! empty( $video ) ) {
					get_template_part( 'templates/video/controls' );
				}
			}

			if ( $title ) { ?>
                <h1><?php echo esc_html( $title ); ?></h1>
			<?php } ?>

        </div>

		<?php get_template_part( 'templates/design/border' ); ?>
    </header>
<?php } else {
	get_template_part( 'templates/heading/empty' );
}
