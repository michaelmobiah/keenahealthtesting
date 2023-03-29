<?php

/*

Events Heading Template

*/

// Video
$video = forqy_meta( 'fy_video', false, get_the_ID() );
?>

<header class="fy-heading fy-heading-<?php echo esc_attr( get_theme_mod( 'dox_heading_height', dox_default( 'dox_heading_height' ) ) ); ?> js-video-container">

	<?php get_template_part( 'templates/image/background' ); ?>

    <div class="fy-heading-container fy-centerer fy-centerer-<?php echo esc_attr( get_theme_mod( 'dox_content_layout', dox_default( 'dox_content_layout' ) ) ); ?>">

		<?php if ( ! empty( $video ) ) {
		    get_template_part( 'templates/video/controls' );
		}

		if ( get_the_title() ) { ?>
            <h1><?php the_title(); ?></h1>
		<?php }

		if ( get_theme_mod( 'dox_heading_categories' ) != 'disabled' ) {
		    get_template_part( 'templates/navigation/tax/events' );
		} ?>

    </div>

	<?php get_template_part( 'templates/design/border' ); ?>
</header>
