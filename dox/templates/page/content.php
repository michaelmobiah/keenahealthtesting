<?php

/*

Page Content Template

*/

$content = get_the_content();

if ( ! empty( $content ) ) { ?>
    <div class="fy-page-content fy-main-content fy-content js-images">
		<?php
		the_content();
		wp_link_pages();
		?>
    </div>
<?php } else {
	the_content();
}
