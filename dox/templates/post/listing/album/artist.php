<?php

/*

Album Artist Template

*/

// Artist
$album_artist     = forqy_meta( 'fy_album_artist' );
$album_artist_url = forqy_meta( 'fy_album_artist_url' );

if ( get_theme_mod( 'fy_post_meta' ) != 'disabled' ) {
	if ( ! empty( $album_artist ) ) { ?>
        <div class="fy-post-artist">
			<?php echo esc_html( $album_artist ); ?>
        </div>
	<?php }
}
