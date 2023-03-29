<?php

/*

Loading Template

*/

// Image
$loading_image_id = attachment_url_to_postid( get_theme_mod( 'dox_loading_logo' ) );
$loading_image    = wp_get_attachment_image_src( $loading_image_id );

if ( get_theme_mod( 'dox_loading' ) != 'disabled' ) { ?>

    <div class="fy-site-loading" aria-hidden="true">
        <div class="fy-site-loading-logo<?php if ( get_theme_mod( 'dox_loading_logo' ) ) { ?> has-logo<?php } ?>">

			<?php if ( get_theme_mod( 'dox_loading_logo' ) ) { ?>
                <img alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"
                     width="<?php echo( esc_attr( $loading_image[1] / 2 ) ); ?>"
                     height="<?php echo( esc_attr( $loading_image[2] / 2 ) ); ?>"
                     src="<?php echo esc_url( $loading_image[0] ); ?>">
			<?php } else {
				echo esc_html( get_bloginfo( 'name' ) );
			} ?>

        </div>

        <div class="fy-site-loading-spinner"></div>
    </div>

<?php }
