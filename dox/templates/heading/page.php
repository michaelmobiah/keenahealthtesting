<?php

/*

Page Heading Template

*/

// Video
$video = forqy_meta( 'fy_video', false, get_the_ID() );

// Class
$container_class = array( 'fy-heading-container', 'fy-centerer' );

if ( is_page() && is_page_template( 'template-page-50.php' ) ) {
	array_push( $container_class, 'fy-centerer-50' );
} else if ( is_page() && is_page_template( 'template-page-75.php' ) ) {
	array_push( $container_class, 'fy-centerer-75' );
} else if ( is_page() && is_page_template( 'template-page-100.php' ) ) {
	array_push( $container_class, 'fy-centerer-100' );
} else if ( is_page() && is_page_template( 'template-page-stretched.php' ) ) {
	array_push( $container_class, 'fy-centerer-stretched' );
} else {
	array_push( $container_class, 'fy-centerer-' . get_theme_mod( 'dox_page_width', dox_default( 'dox_page_width' ) ) );
}
?>

<header class="fy-heading fy-heading-page fy-heading-<?php echo esc_attr( get_theme_mod( 'dox_heading_height', dox_default( 'dox_heading_height' ) ) ); ?> js-video-container">

	<?php get_template_part( 'templates/image/background' ); ?>

    <div <?php forqy_class( $container_class ); ?>>

		<?php if ( ! empty( $video ) ) {
			get_template_part( 'templates/video/controls' );
		}

		if ( get_the_title() ) { ?>
            <h1><?php the_title(); ?></h1>
		<?php } ?>

    </div>

	<?php get_template_part( 'templates/design/border' ); ?>
</header>
