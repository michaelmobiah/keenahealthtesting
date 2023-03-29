<?php

/*

Album Footer Template

*/

?>

<footer class="fy-post-footer">

    <div class="fy-flex-container fy-flex-container-center fy-flex-gutter-small">
        <div class="fy-flex-column-auto">
			<?php if ( get_theme_mod( 'dox_post_meta' ) != 'disabled' ) {
				if ( forqy_meta( 'fy_album_date' ) ) { ?>
                    <div class="fy-post-status">
						<?php if ( function_exists( 'forqy_date' ) ) {
							forqy_date( array(
								'date' => forqy_meta( 'fy_album_date' )
							) );
						} ?>
                    </div>
				<?php }
			} ?>
        </div>

        <div class="fy-flex-column">
			<?php get_template_part( 'templates/post/listing/button' ); ?>
        </div>
    </div>

</footer>