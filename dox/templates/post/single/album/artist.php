<?php

/*

Album Artist Template

*/

$album_artist     = forqy_meta( 'fy_album_artist' );
$album_artist_url = forqy_meta( 'fy_album_artist_url' );
$album_artist_bio = forqy_meta( 'fy_album_artist_bio' );

if ( ! empty( $album_artist ) ) { ?>

    <div class="fy-post-content fy-main-content fy-content">

        <h3 itemprop="byArtist" itemscope itemtype="https://schema.org/MusicGroup">

			<?php if ( ! empty( $album_artist_url ) ) { ?>
                <a href="<?php echo esc_url( $album_artist_url ); ?>"
                   target="_blank" rel="noopener" itemprop="url">
                    <span itemprop="name"><?php echo esc_html( $album_artist ); ?></span>
                </a>
			<?php } else { ?>
                <span itemprop="name"><?php echo esc_html( $album_artist ); ?></span>
			<?php } ?>
        </h3>

		<?php
		if ( ! empty( $album_artist_bio ) ) {
			echo wpautop( do_shortcode( wp_kses( $album_artist_bio, array(
				'a'      => array(
					'href'   => array(),
					'target' => array(),
				),
				'p'      => array(),
				'br'     => array(),
				'em'     => array(),
				'strong' => array()
			) ) ) );
		} ?>

    </div>

<?php }
