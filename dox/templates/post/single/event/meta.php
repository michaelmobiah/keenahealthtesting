<?php

/*

Album Meta Template

*/

$event_status   = forqy_meta( 'fy_event_status' );
$event_location = forqy_meta( 'fy_event_location' );
$event_time     = forqy_meta( 'fy_event_time' );
?>

<ul class="fy-event-meta fy-post-meta">

	<?php if ( ! empty( $event_location ) ) { ?>
        <li class="fy-event-location">
            <a href="#location"><?php echo esc_html( $event_location ); ?></a>
        </li>
	<?php }

	if ( ! empty( $event_time ) ) { ?>
        <li class="fy-event-time">
			<?php echo esc_html( $event_time ); ?>
        </li>
	<?php } ?>

</ul>
