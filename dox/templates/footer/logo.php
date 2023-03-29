<?php

/*

Footer Logo Template

*/

?>

<div class="fy-footer-logo cs-footer-logo">
	<?php
	// Logo Added Using Action
	if ( has_action( 'dox_footer_logo' ) ) {
		do_action( 'dox_footer_logo' );
	} else if ( get_theme_mod( 'dox_footer_logo' ) ) {
		// Logo Uploaded
		$footer_image_id = attachment_url_to_postid( get_theme_mod( 'dox_footer_logo' ) );
		$footer_image    = wp_get_attachment_image_src( $footer_image_id ); ?>

        <img class="fy-lazy js-lazy"
             alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"
             width="<?php echo( esc_attr( $footer_image[1] / 2 ) ); ?>"
             height="<?php echo( esc_attr( $footer_image[2] / 2 ) ); ?>"
             src="<?php echo forqy_image_placeholder( $footer_image[1] / 2, $footer_image[2] / 2 ); ?>"
             data-src="<?php echo esc_url( $footer_image[0] ); ?>">

	<?php } ?>
</div>
