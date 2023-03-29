<?php

/*

Menu Microdata Template

*/

?>

<div class="fy-microdata-menu">

    <meta itemprop="name" content="<?php the_title_attribute(); ?>">
    <meta itemprop="description" content="<?php echo get_the_excerpt(); ?>">

    <div itemprop="mainEntityOfPage" itemscope itemtype="https://schema.org/WebPage">
        <meta itemprop="url" content="<?php the_permalink(); ?>">
    </div>

</div>
