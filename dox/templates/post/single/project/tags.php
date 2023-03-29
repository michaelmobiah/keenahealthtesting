<?php

/*

Post Single Project Tags Template

*/

$tags = get_the_terms( get_the_ID(), 'tag-portfolio' );

if ( ! empty( $tags ) && ! is_wp_error( $tags ) ) { ?>
    <ul class="fy-post-tags">
		<?php foreach ( $tags as $tag ) { ?>
            <li><a href="<?php echo esc_url( get_term_link( $tag ) ) ?>"><?php echo esc_html( $tag->name ); ?></a></li>
		<?php } ?>
    </ul>
<?php }
