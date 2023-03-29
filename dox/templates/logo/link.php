<?php

/*

Logo Image Template

*/

?>

<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" title="<?php echo esc_attr( get_bloginfo( 'name' ) ) . ' &mdash; ' . esc_attr( get_bloginfo( 'description' ) ); ?>">
	<?php get_template_part( 'templates/logo/image' ); ?>
</a>
