<?php

/*

Single Heading Template

*/

$video = forqy_meta( 'fy_video', false, get_the_ID() );
?>

<header class="fy-heading fy-heading-single fy-heading-<?php echo esc_attr( get_theme_mod( 'dox_heading_height_single', dox_default( 'dox_heading_height_single' ) ) ); ?> js-video-container">

	<?php get_template_part( 'templates/image/background' ); ?>

    <div class="fy-heading-container fy-centerer<?php if ( is_single() ) { ?> fy-centerer-<?php echo esc_attr( get_theme_mod( 'dox_post_single_width', dox_default( 'dox_post_single_width' ) ) ); ?><?php } ?>">

		<?php if ( ! empty( $video ) ) {
			get_template_part( 'templates/video/controls' );
		}

		if ( get_the_title() ) { ?>
            <h1><?php the_title(); ?></h1>
		<?php }

		if ( is_singular( array( 'post', 'gallery' ) ) ) {
			get_template_part( 'templates/post/single/meta' );
		} ?>

    </div>

	<?php get_template_part( 'templates/design/border' ); ?>
</header>
