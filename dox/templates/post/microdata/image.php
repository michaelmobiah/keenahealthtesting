<?php

/*

Image Microdata Template

*/

if ( has_post_thumbnail() ) {
	$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id(), FORQY_THEME_SLUG . '-huge' );
	?>

    <div class="fy-microdata-image" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
        <meta itemprop="url" content="<?php echo esc_url( $thumbnail[0] ); ?>">
        <meta itemprop="height" content="<?php echo esc_attr( $thumbnail[1] ); ?>">
        <meta itemprop="width" content="<?php echo esc_attr( $thumbnail[2] ); ?>">

		<?php if ( get_the_post_thumbnail_caption() ) { ?>
            <meta itemprop="caption" content="<?php the_post_thumbnail_caption(); ?>">
		<?php } ?>
    </div>
	<?php
}
