<?php

/*

404 Heading Template

*/

?>

<header class="fy-heading fy-heading-404 fy-heading-full js-video-container">

    <?php get_template_part( 'templates/image/background' ); ?>

    <div class="fy-heading-container fy-centerer">

        <h1>
            <span class="fy-heading-icon"><?php get_template_part( 'images/icon/not-found' ); ?></span>
			<?php esc_html_e( 'Sorry, this page was not found', 'dox' ); ?>
        </h1>

        <div class="fy-heading-content fy-content">
            <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'dox' ); ?></p>
        </div>

        <div class="fy-heading-search">
			<?php get_search_form(); ?>
        </div>

    </div>

	<?php get_template_part( 'templates/design/border' ); ?>
</header>
