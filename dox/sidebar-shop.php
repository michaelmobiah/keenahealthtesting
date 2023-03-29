<?php

/*

Shop Sidebar Template

*/

?>

<div class="fy-sidebar-column fy-flex-column-25 fy-flex-column-desktop-30 fy-flex-column-tablet-35 fy-flex-column-phone-100">

    <aside class="fy-sidebar fy-sidebar--shop js-off__container">

        <button type="button" class="fy-button fy-button--icon-left fy-off__trigger js-off__trigger"
                data-off="sidebar-shop"
                data-off-breakpoint="768">
			<?php
			get_template_part( 'images/icon/filter' );
			esc_html_e( 'Filter products', 'dox' );
			?>
        </button>

        <div class="fy-off--sidebar fy-off js-off"
             data-off="sidebar-shop"
             data-off-breakpoint="768"
             data-off-position="left">

            <button type="button" class="fy-off__close js-off__close"
                    data-off="sidebar-shop">
				<?php get_template_part( 'images/icon/close' ); ?>
                <span class="screen-reader-text"><?php esc_html_e( 'Close', 'dox' ); ?></span>
            </button>

			<?php dynamic_sidebar( 'shop' ); ?>
        </div>
    </aside>

</div>