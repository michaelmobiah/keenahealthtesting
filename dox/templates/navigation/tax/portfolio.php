<?php

/*

Portfolio Navigation Template

*/

// Taxonomy
$taxonomy = 'category-portfolio';

if ( get_terms( $taxonomy ) ) { ?>

    <nav class="fy-heading__navigation fy-navigation" itemscope itemtype="https://schema.org/SiteNavigationElement" aria-label="<?php echo esc_attr_x( 'Portfolio Navigation', 'aria label', 'dox' ); ?>">
        <ul class="fy-heading__navigation-list fy-navigation-list">
			<?php
			wp_list_categories( array(
				'taxonomy'           => $taxonomy,
				'orderby'            => 'none',
				'order'              => 'ASC',
				'show_count'         => 0,
				'depth'              => 1,
				'hide_empty'         => 0,
				'use_desc_for_title' => 0,
				'title_li'           => '',
				'show_option_none'   => '',
			) );
			?>
        </ul>
    </nav>

<?php }
