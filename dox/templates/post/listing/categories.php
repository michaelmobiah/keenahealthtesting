<?php

/*

Post Categories Template

*/

if ( has_category() ) { ?>

    <div class="fy-post-categories">
		<?php
		$categories = get_the_category();
		$separator  = ', ';
		$output     = '';

		if ( $categories ) {
			foreach ( $categories as $category ) {
				$output .= '<a href="' . get_category_link( $category->term_id ) . '" title="' . esc_attr( sprintf( esc_html__( 'View all posts in %s', 'dox' ), $category->name ) ) . '">' . $category->name . '</a>';
				$output .= $separator;
			}
			echo trim( $output, $separator );
		}
		?>
    </div>

<?php }
