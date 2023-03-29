<?php

/*

Playlist Template

*/

// Ids
$ids = array();

// Tracks
$tracks = forqy_meta( 'fy_album_tracks', true );

if ( ! empty( $tracks ) ) {
	foreach ( $tracks as $track ) {
		array_push( $ids, $track['ID'] );
	}

	$attr = array(
		'ids'          => $ids,
		'type'         => 'audio',
		'tracklist'    => true,
		'tracknumbers' => true,
		'images'       => true,
		'artists'      => true
	);

	echo wp_playlist_shortcode( $attr );
}
