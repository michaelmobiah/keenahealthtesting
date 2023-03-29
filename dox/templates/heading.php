<?php

/*

Heading Template

*/

global $page_id;

// Video
$video = forqy_meta( 'fy_video', '', $page_id );

// Centerer
$centerer_class = array();

if ( is_single() ) {
	array_push( $centerer_class, 'fy-centerer-' . get_theme_mod( 'dox_post_single_width', dox_default( 'dox_post_single_width' ) ) );
} else if ( is_page() ) {
	array_push( $centerer_class, 'fy-centerer-' . get_theme_mod( 'dox_page_width', dox_default( 'dox_page_width' ) ) );
}
?>

<header class="fy-heading fy-heading-<?php echo esc_attr( get_theme_mod( 'dox_heading_height', dox_default( 'dox_heading_height' ) ) ); ?> js-video-container">
	<?php if ( get_theme_mod( 'dox_heading_background_image', dox_default( 'dox_heading_background_image' ) ) != 'disabled' ) {
	    get_template_part( 'templates/image/background' );
	} ?>

    <div class="fy-heading-container fy-centerer <?php echo implode( ' ', $centerer_class ); ?>">

		<?php if ( ! empty( $video ) ) {
		    get_template_part( 'templates/video/controls' );
		}

		?>

    </div>

	<?php get_template_part( 'templates/design/border' ); ?>
</header>
