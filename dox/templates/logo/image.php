<?php

/*

Logo Image Template

*/

// Logo Added Using Action
if ( has_action( 'dox_logo' ) ) {
	do_action( 'dox_logo' );

	// Sticky Logo Added Using Filter
	if ( has_action( 'dox_logo_sticky' ) ) {
		do_action( 'dox_logo_sticky' );
	}
} else {
// Logo Uploaded
	if ( get_theme_mod( 'custom_logo' ) ) {

		/**
		 * Image Logo
		 */
		$logo_id   = get_theme_mod( 'custom_logo' );
		$logo      = wp_get_attachment_image_src( $logo_id, 'full' );
		$logo_alt  = get_post_meta( $logo_id, '_wp_attachment_image_alt', true );
		$logo_meta = wp_get_attachment_metadata( $logo_id );
		?>

        <img class="fy-logo-img"
             alt="<?php echo esc_attr( $logo_alt ); ?>"
             width="<?php echo( esc_attr( round( $logo_meta['width'] / 2 ) ) ); ?>"
             height="<?php echo( esc_attr( round( $logo_meta['height'] / 2 ) ) ); ?>"
             src="<?php echo esc_url( $logo[0] ); ?>">

		<?php

		/**
		 * Image Logo - Sticky
		 */
		if ( get_theme_mod( 'dox_logo_image_sticky' ) && get_theme_mod( 'dox_header_sticky', dox_default( 'dox_header_sticky' ) ) == 'enabled' ) {
			$logo_sticky_id   = attachment_url_to_postid( get_theme_mod( 'dox_logo_image_sticky' ) );
			$logo_sticky_alt  = get_post_meta( $logo_sticky_id, '_wp_attachment_image_alt', true );
			$logo_sticky_meta = wp_get_attachment_metadata( $logo_sticky_id );
			?>
            <img class="fy-logo-img-sticky" aria-hidden="true"
                 alt="<?php echo esc_attr( $logo_sticky_alt ); ?>"
                 width="<?php echo( esc_attr( round( $logo_sticky_meta['width'] / 2 ) ) ); ?>"
                 height="<?php echo( esc_attr( round( $logo_sticky_meta['height'] / 2 ) ) ); ?>"
                 src="<?php echo esc_url( get_theme_mod( 'dox_logo_image_sticky' ) ); ?>">
		<?php }

	} else {

		/**
		 * Text Logo
		 */
		echo esc_html( get_bloginfo( 'name' ) );
	}
}
