<?php

/*

Comments Template

*/

?>

<div class="fy-centerer fy-centerer-<?php echo esc_attr( get_theme_mod( 'dox_post_single_width', dox_default( 'dox_post_single_width' ) ) ); ?>">
	<?php get_template_part( 'vendor/forqy/core/templates/comments' ); ?>
</div>
