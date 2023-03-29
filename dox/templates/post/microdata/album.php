<?php

/*

Album Microdata Template

*/

// Tracks
$album_tracks = forqy_meta( 'fy_album_tracks', true );

// Artist
$album_artist     = forqy_meta( 'fy_album_artist' );
$album_artist_url = forqy_meta( 'fy_album_artist_url' );
$album_artist_bio = forqy_meta( 'fy_album_artist_bio' );

// Meta
$album_number = forqy_meta( 'fy_album_number' );
$album_date   = forqy_meta( 'fy_album_date' );
$album_price  = forqy_meta( 'fy_album_price' );
$album_status = forqy_meta( 'fy_album_status' );
$album_genre  = forqy_meta( 'fy_album_genre' );

// Label
$album_label     = forqy_meta( 'fy_album_label' );
$album_label_url = forqy_meta( 'fy_album_label_url' );
?>

<div class="fy-microdata-album">

    <meta itemprop="name" content="<?php the_title_attribute(); ?>">
    <meta itemprop="description" content="<?php echo get_the_excerpt(); ?>">

    <div itemprop="mainEntityOfPage" itemscope itemtype="https://schema.org/WebPage">
        <meta itemprop="url" content="<?php the_permalink(); ?>">
    </div>

    <div itemprop="albumRelease" itemscope itemtype="http://schema.org/MusicRelease">
        <meta itemprop="name" content="<?php the_title_attribute(); ?>">

		<?php
		if ( ! empty( $album_number ) ) { ?>
            <meta itemprop="catalogNumber" content="<?php echo esc_attr( $album_number ); ?>">
		<?php }

		if ( ! empty( $album_date ) ) { ?>
            <meta itemprop="datePublished" content="<?php echo esc_attr( date_i18n( 'Y-m-d', strtotime( $album_date ) ) ); ?>">
		<?php }

		if ( ! empty( $album_label ) ) { ?>
            <div itemprop="recordLabel" itemscope itemtype="https://schema.org/Organization">
                <meta itemprop="name" content="<?php echo esc_attr( $album_label ); ?>">
                <meta itemprop="url" content="<?php echo esc_url( $album_label_url ); ?>">
            </div>
		<?php } ?>
    </div>

	<?php
	if ( ! empty( $album_artist ) ) { ?>
        <div itemprop="byArtist" itemscope itemtype="http://schema.org/MusicGroup">
            <meta itemprop="name" content="<?php echo esc_attr( $album_artist ); ?>">
            <meta itemprop="url" content="<?php echo esc_url( $album_artist_url ); ?>">
            <meta itemprop="description" content="<?php echo esc_attr( $album_artist_bio ); ?>">
        </div>
	<?php }

	if ( ! empty( $album_genre ) ) {
		$genres = explode( ', ', $album_genre );

		foreach ( $genres as $genre ) { ?>
            <meta itemprop="genre" content="<?php echo esc_attr( $genre ); ?>">
		<?php }
	}

	if ( ! empty( $album_tracks ) ) { ?>
        <meta itemprop="numTracks" content="<?php echo esc_attr( count( $album_tracks ) ); ?>">

		<?php foreach ( $album_tracks as $track ) { ?>
            <div itemprop="track" itemscope itemtype="https://schema.org/MusicRecording">
				<?php if ( isset( $track['track_number'] ) ) { ?>
                    <meta itemprop="position" content="<?php echo esc_attr( $track['track_number'] ); ?>">
				<?php }
				if ( isset( $track['title'] ) ) { ?>
                    <meta itemprop="name" content="<?php echo esc_attr( $track['title'] ); ?>">
				<?php }
				if ( isset( $track['url'] ) ) { ?>
                    <meta itemprop="url" content="<?php echo esc_attr( $track['url'] ); ?>">
				<?php }
				if ( isset( $track['length'] ) ) { ?>
                    <meta itemprop="duration" content="<?php echo esc_attr( 'PT' . date( 'i', $track['length'] ) . 'M' . date( 's', $track['length'] ) . 'S' ); ?>">
				<?php } ?>
                <meta itemprop="inAlbum" content="<?php the_title_attribute(); ?>">

				<?php if ( ! empty( $album_artist ) ) { ?>
                    <meta itemprop="byArtist" content="<?php echo esc_attr( $album_artist ); ?>">
				<?php } ?>
            </div>
		<?php }
	} ?>

</div>
