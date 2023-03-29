<?php

/*

Post Header Template

*/

?>

<header class="fy-post-header">
	<?php if ( is_home() || is_front_page() ) { ?>
        <h3 class="entry-title">
            <a href="<?php the_permalink(); ?>" rel="bookmark">
                <?php the_title(); ?>
            </a>
        </h3>
	<?php } else { ?>
        <h2 class="entry-title">
            <a href="<?php the_permalink(); ?>" rel="bookmark">
                <?php the_title(); ?>
            </a>
        </h2>
	<?php } ?>
</header>