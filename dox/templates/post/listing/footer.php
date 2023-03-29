<?php

/*

Post Footer Template

*/

?>

<footer class="fy-post-footer">

    <div class="fy-flex-container fy-flex-container-center fy-flex-gutter-small">
        <div class="fy-flex-column-auto">
			<?php if ( get_theme_mod( 'dox_post_meta' ) != 'disabled' ) {
			    get_template_part( 'templates/post/listing/meta' );
			} ?>
        </div>

        <div class="fy-flex-column">
			<?php get_template_part( 'templates/post/listing/button' ); ?>
        </div>
    </div>

</footer>