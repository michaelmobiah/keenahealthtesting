<?php

/*

Thumbnail Single Template

*/

// Attachment
$attachment = get_post( get_post_thumbnail_id() );
// Attachment Image
$attachment_image = wp_get_attachment_image_src( get_post_thumbnail_id(), FORQY_THEME_SLUG . '-huge' );
// Attachment URL
$attachment_url = $attachment_image[0];
// Attachment Width
$attachment_width = $attachment_image[1];
// Attachment Height
$attachment_height = $attachment_image[2];
?>

<figure class="fy-post-image js-images">
    <a href="<?php echo esc_url( $attachment_url ); ?>"
       class="fy-image-landscape-16-9 fy-image-cover js-image"
       data-size="<?php echo esc_attr( $attachment_width ); ?>x<?php echo esc_attr( $attachment_height ); ?>">

		<?php
		the_post_thumbnail( FORQY_THEME_SLUG . '-large' );
		get_template_part( 'templates/image/loading' );
		?>
    </a>

	<?php if ( get_the_post_thumbnail_caption() ) { ?>
        <figcaption class="fy-post-image-caption screen-reader-text">
			<?php the_post_thumbnail_caption(); ?>
        </figcaption>
	<?php } ?>
</figure>
