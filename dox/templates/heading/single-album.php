<?php

/*

Album Heading Template

*/

// Video
$video = forqy_meta( 'fy_video', false, get_the_ID() );

// Artist
$album_artist     = forqy_meta( 'fy_album_artist' );
$album_artist_url = forqy_meta( 'fy_album_artist_url' );

// Buttons
$album_buttons = forqy_meta( 'fy_album_button' );
?>

<header class="fy-heading fy-heading-single fy-heading-<?php echo esc_attr( get_theme_mod( 'dox_heading_height_single', dox_default( 'dox_heading_height_single' ) ) ); ?> js-video-container">

	<?php get_template_part( 'templates/image/background' ); ?>

    <div class="fy-heading-container fy-centerer<?php if ( is_single() ) { ?> fy-centerer-<?php echo esc_attr( get_theme_mod( 'dox_post_single_width', dox_default( 'dox_post_single_width' ) ) ); ?><?php } ?>">

		<?php
		if ( ! empty( $video ) ) {
			get_template_part( 'templates/video/controls' );
		}

		if ( ! empty( $album_artist ) ) { ?>
            <div class="fy-heading-subtitle">
				<?php if ( ! empty( $album_artist_url ) ) { ?>
                    <a href="<?php echo esc_url( $album_artist_url ); ?>" target="_blank" rel="noopener">
						<?php echo esc_attr( $album_artist ); ?>
                    </a>
				<?php } else {
					echo esc_attr( $album_artist );
				} ?>
            </div>
		<?php }

		if ( get_the_title() ) { ?>
            <h1><?php the_title(); ?></h1>
		<?php }

		get_template_part( 'templates/post/single/album/meta' );

		if ( ! empty( $album_buttons ) ) { ?>

            <div class="fy-heading-buttons">
				<?php foreach ( $album_buttons as $button ) {
					$values = explode( '|', $button );
					$text   = $values[0];

					if ( ! isset( $values[1] ) ) {
						$url = null;
					} else {
						$url = $values[1];
					}

					if ( ! empty( $text ) && ! empty( $url ) ) { ?>

                        <a href="<?php echo esc_url( $url ); ?>" target="_blank" rel="noopener"
                           class="fy-heading-button fy-button fy-button-<?php echo esc_attr( get_theme_mod( 'dox_heading_button', 'accent' ) ); ?>">
							<?php echo esc_attr( $text ); ?>
                        </a>

					<?php }
				} ?>
            </div>

		<?php } ?>

    </div>

	<?php get_template_part( 'templates/design/border' ); ?>
</header>
