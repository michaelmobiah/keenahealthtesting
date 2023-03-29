<?php

/*

Bar Trigger Template

*/

?>
<button type="button" class="fy-navigation-trigger-bar js-off__trigger"
        data-off="navigation-bar"
        aria-expanded="false"
        aria-controls="<?php echo esc_attr( forqy_title_to_slug( _x( 'navigation-bar', 'anchor', 'aidea' ) ) ); ?>">
	<?php get_template_part( 'images/icon/navigation' ); ?>
    <span class="screen-reader-text"><?php esc_html_e( 'Bar Navigation', 'dox' ); ?></span>
</button>
