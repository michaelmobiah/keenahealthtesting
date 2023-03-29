<?php

/*

Event Button Template

*/

// Button
$event_button     = forqy_meta( 'fy_event_button' );
$event_button_url = forqy_meta( 'fy_event_button_url' );

// Price
$event_price          = forqy_meta( 'fy_event_price' );
$event_price_currency = forqy_meta( 'fy_event_price_currency' );

if ( ! empty( $event_button ) ) { ?>
    <a href="<?php echo esc_url( $event_button_url ); ?>" target="_blank" rel="noopener" class="fy-button-purchase fy-button fy-button-accent">
		<?php if ( ! empty( $event_button_url ) ) { ?>
            <a href="<?php echo esc_url( $event_button_url ); ?>" target="_blank" rel="noopener" class="fy-button-purchase fy-button fy-button-accent">
				<?php echo esc_html( $event_button );
				if ( ! empty( $event_price ) ) { ?><span class="fy-price"><?php echo esc_html( $event_price ); ?></span><?php } ?>
                <span class="screen-reader-text"><?php echo esc_html_x( 'New Window', 'link to a new window', 'dox' ); ?></span>
            </a>
		<?php } else { ?>
            <div class="fy-button fy-button-disabled">
				<?php echo esc_html( $event_button ); ?>
            </div>
		<?php } ?>
    </a>
<?php }
