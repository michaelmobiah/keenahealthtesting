<?php

/*

Microdata Restaurant Template

*/

?>
<div class="fy-microdata fy-microdata-restaurant fy-hide" itemscope itemtype="https://schema.org/Restaurant">

    <meta itemprop="name" content="<?php echo get_bloginfo( 'name' ); ?>">

	<?php if ( get_theme_mod( 'dox_about_image' ) ) { ?>
        <meta itemprop="image" content="<?php echo esc_url( get_theme_mod( 'dox_about_image' ) ); ?>">
	<?php }

	if ( get_theme_mod( 'dox_about_phone' ) ) { ?>
        <meta itemprop="telephone" content="<?php echo esc_attr( get_theme_mod( 'dox_about_phone' ) ); ?>">
	<?php }

	if ( get_theme_mod( 'dox_about_email' ) ) { ?>
        <meta itemprop="email" content="<?php echo esc_attr( get_theme_mod( 'dox_about_email' ) ); ?>">
	<?php }

	if ( get_theme_mod( 'dox_about_hours' ) ) { ?>
        <meta itemprop="openingHours" content="<?php echo esc_attr( get_theme_mod( 'dox_about_hours' ) ); ?>">
	<?php }

	if ( get_theme_mod( 'dox_about_cuisine' ) ) { ?>
        <meta itemprop="servesCuisine" content="<?php echo esc_attr( get_theme_mod( 'dox_about_cuisine' ) ); ?>">
	<?php }

	if ( get_theme_mod( 'dox_about_price' ) ) { ?>
        <meta itemprop="priceRange" content="<?php echo esc_attr( get_theme_mod( 'dox_about_price' ) ); ?>">
	<?php }

	if ( get_theme_mod( 'dox_about_reservations' ) ) { ?>
        <meta itemprop="acceptsReservations" content="<?php echo esc_attr( get_theme_mod( 'dox_about_reservations', 'Yes' ) ); ?>">
	<?php }

	if ( get_theme_mod( 'dox_about_menu' ) ) { ?>
        <meta itemprop="hasMenu menu" content="<?php echo get_permalink( get_theme_mod( 'dox_about_menu' ) ); ?>">
	<?php } ?>

    <meta itemprop="paymentAccepted" content="<?php echo esc_attr( get_theme_mod( 'dox_about_payment', esc_html__( 'Cash, Credit Card', 'dox' ) ) ); ?>">

	<?php
	get_template_part( 'templates/microdata/global/address' );
	get_template_part( 'templates/microdata/global/socials' );
	?>
</div>
