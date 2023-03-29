<?php

/*

Search Heading Template

*/

?>

<header class="fy-heading fy-heading-<?php echo esc_attr( get_theme_mod( 'dox_heading_height', dox_default( 'dox_heading_height' ) ) ); ?> js-video-container">

	<?php get_template_part( 'templates/image/background' ); ?>

    <div class="fy-heading-container fy-centerer fy-centerer-<?php echo esc_attr( get_theme_mod( 'dox_content_layout', dox_default( 'dox_content_layout' ) ) ); ?>">

        <h1><?php
			printf( esc_html( /* translators: %1$s: the number of search results, %2$s: search query */ _n( '%1$s result for \'%2$s\'', '%1$s results for \'%2$s\'', (int) $wp_query->found_posts, 'dox' ) ), (int) $wp_query->found_posts, esc_html( get_search_query() ) ); ?></h1>

    </div>

	<?php get_template_part( 'templates/design/border' ); ?>
</header>
