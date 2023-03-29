<?php

/*

Standard Single Content Template

*/

// Post
$post_class = array( 'fy-post', 'fy-post-single', 'fy-post-standard' ); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class( $post_class ); ?>>

	<?php
	get_template_part( 'templates/post/single/content' );
	get_template_part( 'templates/image/gallery' );
	?>

    <div class="fy-centerer fy-centerer-<?php echo esc_attr( get_theme_mod( 'dox_post_single_width', dox_default( 'dox_post_single_width' ) ) ); ?>">
		<?php get_template_part( 'templates/post/single/footer' ); ?>
    </div>

	<?php
    get_template_part( 'templates/post/single/navigation' );

	get_template_part( 'templates/post/microdata/post' );
	get_template_part( 'templates/post/microdata/image' );
	get_template_part( 'templates/post/microdata/publisher' );
	?>
</article>
