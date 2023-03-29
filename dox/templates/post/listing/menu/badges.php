<?php

/*

Menu Prices Template

*/

$badges = forqy_meta( 'fy_menu_badges' );

if ( is_array( $badges ) ) {
	$badges = array_filter( $badges );
} else {
	$badges = array();
}

if ( ! empty( $badges ) ) {
	foreach ( $badges as $badge => $item ) {
		if ( preg_replace( '/\s/', '', $item ) === '' ) {
			unset( $badge[ $badge ] );
		}
	}
}

if ( ! empty( $badges ) ) { ?>
    <div class="fy-post-badges">
        <ul>
			<?php foreach ( $badges as $badge ) { ?>
                <li><?php echo esc_html( $badge ); ?></li>
			<?php } ?>
        </ul>
    </div>
<?php }
