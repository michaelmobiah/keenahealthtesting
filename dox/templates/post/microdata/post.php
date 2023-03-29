<?php

/*

Post Microdata Template

*/

?>

<div class="fy-microdata-post">

    <meta itemprop="headline" content="<?php the_title_attribute(); ?>">
    <meta itemprop="description" content="<?php echo get_the_excerpt(); ?>">

    <div itemprop="mainEntityOfPage" itemscope itemtype="https://schema.org/WebPage">
        <meta itemprop="url" content="<?php the_permalink(); ?>">
    </div>

    <div itemprop="author" itemscope itemtype="https://schema.org/Person">
        <meta itemprop="name" content="<?php echo esc_attr( get_the_author_meta( 'display_name', $post->post_author ) ); ?>">
        <meta itemprop="url" content="<?php echo esc_url( get_author_posts_url( $post->post_author ) ); ?>">
    </div>

    <meta itemprop="datePublished" content="<?php echo get_the_date( DATE_W3C ); ?>">
    <meta itemprop="dateModified" content="<?php echo get_the_modified_date( DATE_W3C ); ?>">

</div>
