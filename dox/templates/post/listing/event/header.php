<?php

/*

Event Header Template

*/

?>

<header class="fy-post-header">

    <div class="fy-post-date">
		<?php if ( function_exists( 'forqy_date_event' ) ) {
			forqy_date_event( array(
				'date_start' => forqy_meta( 'fy_event_date' ),
				'date_end'   => forqy_meta( 'fy_event_date_end' )
			) );
		} ?>
    </div>

	<?php if ( is_home() || is_front_page() ) { ?>
        <h3>
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				<?php the_title(); ?>
            </a>
        </h3>
	<?php } else { ?>
        <h2>
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				<?php the_title(); ?>
            </a>
        </h2>
	<?php } ?>

</header>