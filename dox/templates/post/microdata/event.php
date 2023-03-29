<?php

/*

Event Microdata Template

*/

// Date
$event_date_start = forqy_meta( 'fy_event_date' );
$event_date_end   = forqy_meta( 'fy_event_date_end' );

// Status
$event_status = forqy_meta( 'fy_event_status' ) ? forqy_meta( 'fy_event_status' ) : 'EventScheduled';
// Attendance
$event_attendance_mode = forqy_meta( 'fy_event_attendance_mode' ) ? forqy_meta( 'fy_event_attendance_mode' ) : 'OfflineEventAttendanceMode';

// Location
$event_location_type   = forqy_meta( 'fy_event_location_type' ) ? forqy_meta( 'fy_event_location_type' ) : 'Place';
$event_location        = forqy_meta( 'fy_event_location' );
$event_location_street = forqy_meta( 'fy_event_location_street' );
$event_location_city   = forqy_meta( 'fy_event_location_city' );
$event_location_state  = forqy_meta( 'fy_event_location_state' );
$event_location_url    = forqy_meta( 'fy_event_location_url' );

// Button
$event_button     = forqy_meta( 'fy_event_button' );
$event_button_url = forqy_meta( 'fy_event_button_url' );

// Price
$event_price          = forqy_meta( 'fy_event_price' );
$event_price_currency = forqy_meta( 'fy_event_price_currency' );

// Availability
$event_availability = forqy_meta( 'fy_event_availability' );

// Performer
$event_performer      = forqy_meta( 'fy_event_performer' ) ? forqy_meta( 'fy_event_performer' ) : 'PerformingGroup';
$event_performer_name = forqy_meta( 'fy_event_performer_name' );

// Organizer
$event_organizer      = forqy_meta( 'fy_event_organizer' ) ? forqy_meta( 'fy_event_organizer' ) : 'Organization';
$event_organizer_name = forqy_meta( 'fy_event_organizer_name' );
$event_organizer_url  = forqy_meta( 'fy_event_organizer_url' );
?>

<div class="fy-microdata-event">

    <meta itemprop="name" content="<?php the_title_attribute(); ?>">

    <div itemprop="mainEntityOfPage" itemscope itemtype="https://schema.org/WebPage">
        <meta itemprop="url" content="<?php the_permalink(); ?>">
    </div>

	<?php if ( ! empty( $event_date_start ) ) { ?>
        <meta itemprop="startDate" content="<?php echo esc_attr( date_i18n( 'Y-m-d', strtotime( $event_date_start ) ) ); ?>">
	<?php }

	if ( ! empty( $event_date_end ) ) { ?>
        <meta itemprop="endDate" content="<?php echo esc_attr( date_i18n( 'Y-m-d', strtotime( $event_date_end ) ) ); ?>">
	<?php }

	if ( ! empty( $event_status ) ) { ?>
        <meta itemprop="eventStatus" content="https://schema.org/<?php echo esc_attr( $event_status ); ?>">
	<?php }

	if ( ! empty( $event_attendance_mode ) ) { ?>
        <meta itemprop="eventAttendanceMode" content="https://schema.org/<?php echo esc_attr( $event_attendance_mode ); ?>">
	<?php }

	// Location
	if ( $event_location_type == 'Place' && ! empty( $event_location ) ) { ?>
        <div itemprop="location" itemscope itemtype="https://schema.org/Place">

            <meta itemprop="name" content="<?php echo esc_attr( $event_location ); ?>">

			<?php if ( ! empty( $event_location_street ) || ! empty( $event_location_city ) || ! empty( $event_location_state ) ) { ?>
                <div itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
					<?php if ( ! empty( $event_location_street ) ) { ?>
                        <meta itemprop="streetAddress" content="<?php echo esc_attr( $event_location_street ); ?>">
					<?php }
					if ( ! empty( $event_location_city ) ) { ?>
                        <meta itemprop="addressLocality" content="<?php echo esc_attr( $event_location_city ); ?>">
					<?php }
					if ( ! empty( $event_location_state ) ) { ?>
                        <meta itemprop="addressRegion" content="<?php echo esc_attr( $event_location_state ); ?>">
					<?php } ?>
                </div>
			<?php } ?>
        </div>
	<?php } else if ( $event_location_type == 'VirtualLocation' ) { ?>
        <div itemprop="location" itemscope itemtype="https://schema.org/VirtualLocation">
            <meta itemprop="url" content="<?php echo esc_attr( $event_location_url ); ?>">
        </div>
	<?php }

	// Offers
	if ( ! empty( $event_button ) ) { ?>
        <div itemprop="offers" itemscope itemtype="https://schema.org/Offer">
			<?php if ( ! empty( $event_button ) ) { ?>
                <meta itemprop="url" content="<?php echo esc_attr( $event_button_url ); ?>">
			<?php }

			if ( ! empty( $event_price ) ) { ?>
                <meta itemprop="price" content="<?php echo esc_attr( preg_replace( '/[^0-9,"."]/', '', $event_price ) ); ?>">
				<?php if ( ! empty( $event_price_currency ) ) { ?>
                    <meta itemprop="priceCurrency" content="<?php echo esc_attr( $event_price_currency ); ?>">
				<?php } else { ?>
                    <meta itemprop="priceCurrency" content="<?php echo esc_attr( get_theme_mod( 'dox_about_currency', dox_default( 'dox_about_currency' ) ) ); ?>">
				<?php }
			}

			if ( ! empty( $event_availability ) ) { ?>
                <meta itemprop="availability" content="https://schema.org/<?php echo esc_attr( $event_availability ); ?>">
                <meta itemprop="validFrom" content="<?php echo get_the_date( DATE_W3C ); ?>">
			<?php }
			?>
        </div>
		<?php
	}

	// Performer
	if ( ! empty( $event_performer_name ) ) { ?>
        <div itemprop="performer" itemscope itemtype="https://schema.org/<?php echo esc_attr( $event_performer ); ?>">
            <meta itemprop="name" content="<?php echo esc_attr( $event_performer_name ); ?>">
        </div>
		<?php
	}

	// Organizer
	if ( ! empty( $event_organizer_name ) ) { ?>
        <div itemprop="organizer" itemscope itemtype="https://schema.org/<?php echo esc_attr( $event_organizer ); ?>">
            <meta itemprop="name" content="<?php echo esc_attr( $event_organizer_name ); ?>">
            <meta itemprop="url" content="<?php echo esc_attr( $event_organizer_url ); ?>">
        </div>
		<?php
	} ?>

</div>
