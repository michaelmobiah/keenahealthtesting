<?php

/*

Address Global Microdata

*/

if ( get_theme_mod( 'dox_about_address_street' ) ) { ?>

	<div itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">

		<?php if ( get_theme_mod( 'dox_about_address_street' ) ) { ?>
			<meta itemprop="streetAddress" content="<?php echo esc_attr( get_theme_mod( 'dox_about_address_street' ) ); ?>">
		<?php }

		if ( get_theme_mod( 'dox_about_address_postal' ) ) { ?>
			<meta itemprop="postalCode" content="<?php echo esc_attr( get_theme_mod( 'dox_about_address_postal' ) ); ?>">
		<?php }

		if ( get_theme_mod( 'dox_about_address_city' ) ) { ?>
			<meta itemprop="addressLocality" content="<?php echo esc_attr( get_theme_mod( 'dox_about_address_city' ) ); ?>">
		<?php }

		if ( get_theme_mod( 'dox_about_address_country' ) ) { ?>
			<meta itemprop="addressCountry" content="<?php echo esc_attr( get_theme_mod( 'dox_about_address_country' ) ); ?>">
		<?php } ?>

	</div>

<?php }
