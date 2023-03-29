<?php

/*

Video Controls Template

*/

?>
<div class="fy-video-controls">
    <button type="button" class="fy-video-playpause js-video-playpause fy-button">
		<span class="fy-icon fy-icon-play">
            <?php get_template_part( 'images/icon/play' ); ?>
            <span class="screen-reader-text"><?php esc_html_e( 'Play video', 'dox' ); ?></span>
        </span>
        <span class="fy-icon fy-icon-pause">
            <?php get_template_part( 'images/icon/pause' ); ?>
            <span class="screen-reader-text"><?php esc_html_e( 'Pause video', 'dox' ); ?></span>
        </span>
    </button>
</div>