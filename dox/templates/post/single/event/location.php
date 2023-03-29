<?php

/*

Event Location Template

*/

$event_location        = forqy_meta( 'fy_event_location' );
$event_location_street = forqy_meta( 'fy_event_location_street' );
$event_location_city   = forqy_meta( 'fy_event_location_city' );
$event_location_state  = forqy_meta( 'fy_event_location_state' );

$event_location_map = forqy_meta( 'fy_event_map_embed' );

if ( ! empty( $event_location ) ) { ?>

    <div id="location" class="fy-post-event-location">

        <h3><?php echo esc_html( $event_location ); ?></h3>

		<?php if ( ! empty( $event_location_street ) || ! empty( $event_location_city ) || ! empty( $event_location_state ) ) { ?>

            <ul class="fy-post-meta">

				<?php if ( ! empty( $event_location_street ) ) { ?>
                    <li class="fy-post-location-street">
						<?php echo esc_html( forqy_meta( 'fy_event_location_street' ) ); ?>
                    </li>
				<?php }

				if ( ! empty( $event_location_city ) ) { ?>
                    <li class="fy-post-location-city">
						<?php echo esc_html( forqy_meta( 'fy_event_location_city' ) ); ?>
                    </li>
				<?php }

				if ( ! empty( $event_location_state ) ) { ?>
                    <li class="fy-post-location-state">
						<?php echo esc_html( forqy_meta( 'fy_event_location_state' ) ); ?>
                    </li>
				<?php } ?>
            </ul>

		<?php }

		if ( ! empty( $event_location_map ) ) { ?>
            <div class="fy-post-map" itemscope itemtype="https://schema.org/Map">
				<?php echo wp_kses( $event_location_map, array(
					'p'      => array(),
					'iframe' => array(
						'src'             => array(),
						'width'           => array(),
						'height'          => array(),
						'loading'         => array(),
						'title'           => array(),
						'allowfullscreen' => array(),
						'aria-label'      => array()
					)
				) ); ?>
            </div>
		<?php } ?>

    </div>

<?php }
