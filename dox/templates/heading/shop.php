<?php

/*

Shop Heading Template

*/

?>

<header class="fy-heading fy-heading-small js-video-container<?php if ( get_theme_mod( 'dox_shop_title', dox_default( 'dox_shop_title' ) ) == 'disabled' ) { ?> fy-heading-empty<?php } ?>">

	<?php get_template_part( 'templates/image/background', 'shop' ); ?>

    <div class="fy-heading-container fy-centerer fy-centerer-<?php echo esc_attr( get_theme_mod( 'dox_content_layout', dox_default( 'dox_content_layout' ) ) ); ?>">

        <h1><?php woocommerce_page_title(); ?></h1>

    </div>

	<?php get_template_part( 'templates/design/border' ); ?>
</header>
