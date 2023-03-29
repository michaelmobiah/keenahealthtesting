<?php

/*

Navigation Trigger Template

*/

?>
<button type="button" class="fy-navigation-trigger js-off__trigger"
        data-off="navigation"
        aria-expanded="false"
        aria-controls="<?php echo esc_attr( forqy_title_to_slug( _x( 'navigation', 'anchor', 'dox' ) ) ); ?>">
	<?php get_template_part( 'images/icon/navigation' ); ?>
    <span class="screen-reader-text"><?php esc_html_e( 'Navigation', 'dox' ); ?></span>
</button>
