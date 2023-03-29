<?php

/*

Menu Single Content Template

*/

// Post
$post_class = array( 'fy-post', 'fy-post-single', 'fy-post-menu' ); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class( $post_class ); ?>>

	<?php
	if ( has_post_thumbnail() ) {
		get_template_part( 'templates/image/thumbnail', 'single' );
	}

	get_template_part( 'templates/post/single/content' );
	?>

    <div class="fy-centerer fy-centerer-<?php echo esc_attr( get_theme_mod( 'dox_post_single_width', dox_default( 'dox_post_single_width' ) ) ); ?> fy-align-center">

		<?php if ( has_term( '', 'ingredient' ) ) { ?>
            <div class="fy-post-ingredients fy-post-tags">
				<?php if ( get_theme_mod( 'dox_menu_filter_by_ingredients' ) == 'disabled' ) {
					dox_terms_post( get_the_ID(), 'ingredient', 0 );
				} else {
					dox_terms_post( get_the_ID(), 'ingredient', 1 );
				} ?>
            </div>
		<?php }

		get_template_part( 'templates/post/single/footer' );
		?>

    </div>

	<?php
	get_template_part( 'templates/post/microdata/menu' );
	get_template_part( 'templates/post/microdata/image' );
	?>
</article>
