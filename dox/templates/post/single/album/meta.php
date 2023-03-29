<?php

/*

Album Meta Template

*/

$album_label     = forqy_meta( 'fy_album_label' );
$album_label_url = forqy_meta( 'fy_album_label_url' );

$album_price  = forqy_meta( 'fy_album_price' );
$album_status = forqy_meta( 'fy_album_status' );
$album_date   = forqy_meta( 'fy_album_date' );
$album_number = forqy_meta( 'fy_album_number' );
?>

<ul class="fy-album-meta fy-post-meta">

	<?php if ( ! empty( $album_price ) ) { ?>
        <li>
            <div class="fy-album-price fy-price">
				<?php echo esc_html( $album_price ); ?>
            </div>
        </li>
	<?php }

	if ( ! empty( $album_status ) ) { ?>
        <li>
            <div class="fy-album-status">
				<?php echo esc_html( $album_status ); ?>
            </div>
        </li>
	<?php }

	if ( ! empty( $album_date ) ) { ?>
        <li>
            <div class="fy-album-date">
	            <?php if ( function_exists( 'forqy_date' ) ) {
		            forqy_date( array(
			            'date' => forqy_meta( 'fy_album_date' )
		            ) );
	            } ?>
            </div>
        </li>
	<?php }

	if ( ! empty( $album_label ) ) { ?>
        <li>
            <div class="fy-album-label">
				<?php if ( ! empty( $album_label_url ) ) { ?>
                    <a href="<?php echo esc_url( $album_label_url ); ?>" target="_blank" rel="noopener">
						<?php echo esc_html( $album_label ); ?>
                    </a>
				<?php } else {
				    echo esc_html( $album_label );
				} ?>
            </div>
        </li>
	<?php }

	if ( ! empty( $album_number ) ) { ?>
        <li>
            <div class="fy-album-number">
				<?php echo esc_html( $album_number ); ?>
            </div>
        </li>
	<?php } ?>

</ul>
