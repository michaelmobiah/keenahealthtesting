<?php

/*

Attachment Single Content Template

*/

// Post
$post_class = array( 'fy-post', 'fy-post-single', 'fy-post-attachment' ); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class( $post_class ); ?>>

	<?php
	if ( wp_attachment_is_image() ) {

		get_template_part( 'templates/image/thumbnail', 'attachment' );

	} else { ?>

        <div class="fy-content">
            <a href="<?php echo wp_get_attachment_url( get_the_ID() ) ?>" class="fy-button">
				<?php echo get_the_title( get_the_ID() ); ?>
            </a>

            <p><em><?php echo get_post_mime_type( get_the_ID() ) ?></em></p>
        </div>

	<?php }

	get_template_part( 'templates/post/single/content' );
	?>

    <footer class="fy-post-footer">
		<?php get_template_part( 'templates/social/share' ); ?>
    </footer>

    <?php get_template_part( 'templates/post/microdata/image' ); ?>
</article>
