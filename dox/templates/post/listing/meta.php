<?php

/*

Post Meta Template

*/

?>

<ul class="fy-post-meta">
    <li class="fy-post-meta-date">
		<?php echo get_the_date(); ?>
    </li>

	<?php if ( is_single() ) {
		if ( comments_open() && ! post_password_required() ) { ?>
            <li class="fy-post-meta-comments">
				<?php comments_popup_link(); ?>
            </li>
		<?php }
	} ?>
</ul>
