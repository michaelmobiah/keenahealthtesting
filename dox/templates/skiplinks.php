<?php

/*

Skip Links Template

*/

?>

<nav id="skip-links" class="fy-skip-links" aria-label="<?php echo esc_attr_x( 'Skip Links', 'aria label', 'dox' ); ?>">
    <ul>
        <li><a href="#<?php echo esc_attr( forqy_title_to_slug( _x( 'navigation', 'anchor', 'dox' ) ) ); ?>"><?php esc_html_e( 'Skip to Navigation', 'dox' ); ?></a></li>
        <li><a href="#<?php echo esc_attr( forqy_title_to_slug( _x( 'content', 'anchor', 'dox' ) ) ); ?>"><?php esc_html_e( 'Skip to Content', 'dox' ); ?></a></li>
		<?php if ( get_theme_mod( 'dox_footer', dox_default( 'dox_footer' ) ) != 'disabled' ) { ?>
            <li><a href="#<?php echo esc_attr( forqy_title_to_slug( _x( 'footer', 'anchor', 'dox' ) ) ); ?>"><?php esc_html_e( 'Skip to Footer', 'dox' ); ?></a></li>
		<?php } ?>
    </ul>
</nav>
