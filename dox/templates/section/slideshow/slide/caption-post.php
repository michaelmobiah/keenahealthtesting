<?php

/*

Slideshow Slide Post Caption

*/

// Video
$video = forqy_meta( 'fy_video' );

// Caption
$caption_title = get_the_title();
$caption_url   = get_the_permalink();
?>

<div class="fy-caption-centerer">

    <div class="fy-caption fy-caption-<?php echo esc_attr( get_theme_mod( 'dox_slideshow_caption_background', dox_default( 'dox_slideshow_caption_background' ) ) ); ?> cs-slideshow-caption">

		<?php if ( ! empty ( $video ) ) {
			get_template_part( 'templates/video/controls' );
		} ?>

        <div class="fy-caption-meta">
			<?php get_template_part( 'templates/post/listing/categories' ); ?>
        </div>

        <header class="fy-caption-header">
            <h2>
                <a href="<?php echo esc_url( $caption_url ); ?>" tabindex="-1">
                    <?php the_title(); ?>
                </a>
            </h2>
        </header>

		<?php if ( get_theme_mod( 'dox_slideshow_caption_excerpt', dox_default( 'dox_slideshow_caption_excerpt' ) ) != 'disabled' ) { ?>
            <div class="fy-caption-content fy-content">
				<?php the_excerpt(); ?>
            </div>
		<?php } ?>

        <footer class="fy-caption-footer">
            <div class="fy-caption-buttons">
                <a href="<?php echo esc_url( $caption_url ); ?>"
                   class="fy-caption-button fy-button fy-button-<?php echo esc_attr( get_theme_mod( 'dox_slideshow_caption_button', dox_default( 'dox_slideshow_caption_button' ) ) ); ?>">
					<?php esc_html_e( 'View', 'dox' ); ?>
                </a>
            </div>
        </footer>

    </div>

</div>
