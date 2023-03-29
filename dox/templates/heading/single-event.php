<?php

/*

Event Heading Template

*/

// Current Date
$current_date = date( 'Y/m/d', current_time( 'timestamp' ) );

// Video
$video = forqy_meta( 'fy_video', false, get_the_ID() );

// Event
$event_price = forqy_meta( 'fy_event_price' );

$event_button     = forqy_meta( 'fy_event_button' );
$event_button_url = forqy_meta( 'fy_event_button_url' ); ?>

<header class="fy-heading fy-heading-single fy-heading-<?php echo esc_attr( get_theme_mod( 'dox_heading_height_single', dox_default( 'dox_heading_height_single' ) ) ); ?> js-video-container">

	<?php get_template_part( 'templates/image/background' ); ?>

    <div class="fy-heading-container fy-centerer<?php if ( is_single() ) { ?> fy-centerer-<?php echo esc_attr( get_theme_mod( 'dox_post_single_width', dox_default( 'dox_post_single_width' ) ) ); ?><?php } ?>">

		<?php if ( ! empty( $video ) ) {
			get_template_part( 'templates/video/controls' );
		}

		if ( forqy_meta( 'fy_event_date' ) ) { ?>
            <div class="fy-heading-date<?php if ( forqy_meta( 'fy_event_date_end' ) < $current_date ) { ?> fy-date-past<?php } ?>">
				<?php if ( function_exists( 'forqy_date_event' ) ) {
					forqy_date_event( array(
						'date_start' => forqy_meta( 'fy_event_date' ),
						'date_end'   => forqy_meta( 'fy_event_date_end' )
					) );
				} ?>
            </div>
		<?php }

		if ( get_the_title() ) { ?>
            <h1><?php the_title(); ?></h1>
		<?php }

		get_template_part( 'templates/post/single/event/meta' );

		if ( ! empty( $event_button ) && ! empty( $event_button_url ) ) { ?>
            <div class="fy-heading-buttons">
                <a href="<?php echo esc_url( $event_button_url ); ?>" target="_blank" rel="noopener" class="fy-button-purchase fy-heading-button fy-button fy-button-accent">
					<?php echo esc_html( $event_button );

					if ( ! empty( $event_price ) ) { ?>
                        <span class="fy-price"><?php echo esc_html( $event_price ); ?></span>
					<?php } ?>
                </a>
            </div>
		<?php } ?>

    </div>

	<?php get_template_part( 'templates/design/border' ); ?>
</header>
