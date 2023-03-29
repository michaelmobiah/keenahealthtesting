<?php

/*

Project Microdata Template

*/

// Tags
$project_tags = get_the_term_list( get_the_ID(), 'tag-portfolio', '', ', ' );

// Creator
$project_creator      = forqy_meta( 'fy_project_creator' ) ? forqy_meta( 'fy_project_creator' ) : 'Organization';
$project_creator_name = forqy_meta( 'fy_project_creator_name' );
?>

<div class="fy-microdata-project">

    <meta itemprop="name" content="<?php the_title_attribute(); ?>">
    <meta itemprop="description" content="<?php echo get_the_excerpt(); ?>">

    <div itemprop="mainEntityOfPage" itemscope itemtype="https://schema.org/WebPage">
        <meta itemprop="url" content="<?php the_permalink(); ?>">
    </div>

	<?php if ( ! empty( $project_tags ) && ! is_wp_error( $project_tags ) ) { ?>
        <meta itemprop="keywords" content="<?php echo strip_tags( $project_tags ); ?>">
	<?php }

	if ( ! empty( $project_creator_name ) ) { ?>
        <div itemprop="creator" itemscope itemtype="https://schema.org/<?php echo esc_attr( $project_creator ); ?>">
            <meta itemprop="name" content="<?php echo esc_attr( $project_creator_name ); ?>">
        </div>
	<?php } ?>

</div>
