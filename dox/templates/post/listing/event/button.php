<?php

/*

Button Template

*/

// Current Date
$current_date = date( 'Y/m/d', current_time( 'timestamp' ) );

if ( forqy_meta( 'fy_event_button' ) && forqy_meta( 'fy_event_button_url' ) && forqy_meta( 'fy_event_date_end' ) >= $current_date ) { ?>
    <a href="<?php echo esc_url( forqy_meta( 'fy_event_button_url' ) ); ?>" target="_blank" rel="noopener" class="fy-post-button fy-button fy-button-small fy-button-bordered">
		<?php echo esc_html( forqy_meta( 'fy_event_button' ) ); ?>
    </a>
<?php } else {
	get_template_part( 'templates/post/listing/button' );
}
