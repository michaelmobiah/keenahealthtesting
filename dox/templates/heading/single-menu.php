<?php

/*

Menu Item Heading Template

*/

// Prices
$prices = forqy_meta( 'fy_menu_price' );

if ( is_array( $prices ) ) {
	$prices = array_filter( $prices );
} else {
	$prices = array();
}

if ( ! empty( $prices ) ) {
	foreach ( $prices as $price => $item ) {
		if ( preg_replace( '/\s/', '', $item ) === '' ) {
			unset( $prices[ $price ] );
		}
	}
}

// Badges
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
?>

<header class="fy-heading fy-heading-single fy-heading-<?php echo esc_attr( get_theme_mod( 'dox_heading_height_single', dox_default( 'dox_heading_height_single' ) ) ); ?> js-video-container">

	<?php get_template_part( 'templates/image/background' ); ?>

    <div class="fy-heading-container fy-centerer<?php if ( is_single() ) { ?> fy-centerer-<?php echo esc_attr( get_theme_mod( 'dox_post_single_width', dox_default( 'dox_post_single_width' ) ) ); ?><?php } ?>">

		<?php if ( ! empty( $badges ) ) { ?>
            <div class="fy-post-badges fy-post-tags">
                <ul>
					<?php foreach ( $badges as $badge ) { ?>
                        <li><?php echo esc_html( $badge ); ?></li>
					<?php } ?>
                </ul>
            </div>
		<?php }

		if ( get_the_title() ) { ?>
            <h1><?php the_title(); ?></h1>
		<?php }

		if ( ! empty( $prices ) ) { ?>
            <div class="fy-heading-price">
				<?php echo esc_attr( implode( ', ', $prices ) ); ?>
            </div>
		<?php } ?>

    </div>

	<?php get_template_part( 'templates/design/border' ); ?>
</header>
