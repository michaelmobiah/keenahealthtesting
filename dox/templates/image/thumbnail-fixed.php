<?php

/*

Thumbnail Fixed Template

*/

?>

<figure class="fy-post-image">
    <a href="<?php the_permalink(); ?>" class="fy-image-landscape fy-image-cover" tabindex="-1">

		<?php
		the_post_thumbnail( FORQY_THEME_SLUG . '-medium-fixed' );
		get_template_part( 'templates/image/loading' );

		if ( get_post_format() == 'video' || get_post_format() == 'audio' ) { ?>
            <div class="fy-post-play">
				<?php get_template_part( 'images/icon/play' ); ?>
            </div>
		<?php } ?>
    </a>
</figure>
