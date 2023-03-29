<?php

/*

Menu Prices Template

*/

// Menu
$prices = forqy_meta( 'fy_menu_price' );

if ( is_array( $prices ) ) {
	$prices = array_filter( $prices );
} else {
	$prices = array();
}

// Prices
if ( ! empty( $prices ) ) {
	foreach ( $prices as $price => $item ) {
		if ( preg_replace( '/\s/', '', $item ) === '' ) {
			unset( $prices[ $price ] );
		}
	}
}

if ( ! empty( $prices ) ) { ?>
	<div class="fy-post-prices">
		<?php echo esc_html( implode( ', ', $prices ) ); ?>
	</div>
<?php }
