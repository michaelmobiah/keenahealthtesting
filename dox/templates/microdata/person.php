<?php

/*

Microdata Restaurant Template

*/

?>
<div class="fy-microdata fy-microdata-person fy-hide" itemscope itemtype="https://schema.org/Person">

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

    get_template_part( 'templates/microdata/global/address' );
	get_template_part( 'templates/microdata/global/socials' );
    ?>
</div>
