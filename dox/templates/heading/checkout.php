<?php

/*

Checkout Heading Template

*/

?>

<header class="fy-heading fy-heading-small js-video-container">

	<?php get_template_part( 'templates/image/background', 'shop' ); ?>

    <div class="fy-heading-container fy-centerer fy-centerer-<?php echo esc_attr( get_theme_mod( 'dox_page_width', dox_default( 'dox_page_width' ) ) ); ?>">

		<?php if ( get_the_title() ) { ?>
            <h1><?php the_title(); ?></h1>
		<?php } ?>

    </div>

	<?php get_template_part( 'templates/design/border' ); ?>
</header>
