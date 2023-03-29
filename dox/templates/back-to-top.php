<?php

/*

Back to Top Template

*/

?>
<a href="#<?php echo esc_attr( forqy_title_to_slug( _x( 'top', 'anchor', 'dox' ) ) ); ?>" class="fy-back-to-top js-back-to-top">
    <span class="fy-icon"><?php get_template_part( 'images/icon/top' ); ?></span>
    <span class="screen-reader-text"><?php esc_html_e( 'Back to Top', 'dox' ); ?></span>
</a>