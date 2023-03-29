<?php

/*

Publisher Microdata Template

*/

if ( get_theme_mod( 'dox_website_type', dox_default( 'dox_website_type' ) ) == 'person' ) {
	$publisher_type  = 'Person';
	$publisher_image = 'image';
} else {
	$publisher_type  = 'Organization';
	$publisher_image = 'logo';
}
?>

<div class="fy-microdata-publisher" itemprop="publisher" itemscope itemtype="https://schema.org/<?php echo esc_attr( $publisher_type ); ?>">

    <meta itemprop="name" content="<?php echo esc_attr( get_theme_mod( 'dox_about_publisher', get_bloginfo( 'name' ) ) ); ?>">

	<?php if ( get_theme_mod( 'dox_about_publisher_logo' ) ) {
		$logo_id = attachment_url_to_postid( get_theme_mod( 'dox_about_publisher_logo' ) );
		$logo    = wp_get_attachment_metadata( $logo_id );

		if ( ! empty( $logo ) ) {
			?>

            <div itemprop="<?php echo esc_attr( $publisher_image ); ?>" itemscope itemtype="https://schema.org/ImageObject">
                <meta itemprop="url" content="<?php echo esc_url( get_theme_mod( 'dox_about_publisher_logo' ) ); ?>">
                <meta itemprop="width" content="<?php echo esc_attr( $logo['width'] ); ?>">
                <meta itemprop="height" content="<?php echo esc_attr( $logo['height'] ); ?>">
            </div>
		<?php }
	} ?>

</div>