<?php

/*

Image Thumbnail Attachment Template

*/

?>

<figure class="fy-post-image">
	<?php
	echo wp_get_attachment_image( get_the_ID(), FORQY_THEME_SLUG . '-large' );
	get_template_part( 'templates/image/loading' );

	if ( wp_get_attachment_caption( get_the_ID() ) ) { ?>
        <figcaption class="fy-post-image-caption">
			<?php echo wp_get_attachment_caption( get_the_ID() ); ?>
        </figcaption>
	<?php } ?>
</figure>
