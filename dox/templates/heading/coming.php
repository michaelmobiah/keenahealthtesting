<?php

/*

Coming Soon Heading Template

*/

$video = forqy_meta( 'fy_video', false, get_the_ID() );
?>

<header class="fy-heading fy-heading-full fy-heading-coming js-video-container">

	<?php get_template_part( 'templates/image/background' ); ?>

    <div class="fy-heading-container fy-centerer fy-centerer-<?php echo esc_attr( get_theme_mod( 'dox_content_layout', dox_default( 'dox_content_layout' ) ) ); ?>">

		<?php if ( ! empty( $video ) ) {
			get_template_part( 'templates/video/controls' );
		}

		if ( get_the_title() ) { ?>
            <h1><?php the_title(); ?></h1>
		<?php }

		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post(); ?>

                <div class="fy-heading-content fy-content">
					<?php the_content(); ?>
                </div>

			<?php }
		} ?>

    </div>

</header>
