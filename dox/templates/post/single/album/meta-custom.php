<?php

/*

Album Custom Template

*/

// Meta
$album_custom_meta = forqy_meta( 'fy_album_meta' );

if ( ! empty( $album_custom_meta ) ) { ?>
    <div class="fy-album-meta-custom fy-album-section">

        <div class="fy-flex-container fy-flex-gutter-small">

			<?php foreach ( $album_custom_meta as $meta ) {
				$values = explode( '|', $meta );

				$name = $values[0];
				if ( ! isset( $values[1] ) ) {
					$value = null;
				} else {
					$value = $values[1];
				}

				if ( ! empty( $name ) ) { ?>

                    <div class="fy-flex-column-33 fy-flex-column-tablet-50 fy-flex-column-phone-100">

                        <div class="fy-meta-item">

							<?php if ( ! empty( $name ) ) { ?>
                                <div class="fy-meta-name">
									<?php echo wp_kses( $name, array(
										'a'      => array(
											'href'   => array(),
											'target' => array(),
										),
										'br'     => array(),
										'em'     => array(),
										'strong' => array()
									) ); ?>
                                </div>
							<?php }

							if ( ! empty( $value ) ) { ?>
                                <div class="fy-meta-value">
									<?php echo wp_kses( $value, array(
										'a'      => array(
											'href'   => array(),
											'target' => array(),
										),
										'br'     => array(),
										'em'     => array(),
										'strong' => array()
									) ); ?>
                                </div>
							<?php } ?>

                        </div>

                    </div>

				<?php }
			} ?>

        </div>

    </div>

<?php }
