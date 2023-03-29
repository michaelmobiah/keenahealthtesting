<?php

/*

Bar Navigation Template

*/

?>

<div id="<?php echo esc_attr( forqy_title_to_slug( _x( 'navigation-bar', 'anchor', 'dox' ) ) ); ?>"
     class="fy-navigation-mobile-container-bar fy-off js-off"
     data-off="navigation-bar"
     data-off-breakpoint="<?php if ( get_theme_mod( 'dox_navigation_mobile_on_desktop', dox_default( 'dox_navigation_mobile_on_desktop' ) ) == 'enabled' ) { ?>all<?php } else { ?>1024<?php } ?>"
     data-off-position="left">

    <button type="button" class="fy-navigation-close-bar js-off__close"
            data-off="navigation-bar"
            aria-controls="<?php echo esc_attr( forqy_title_to_slug( _x( 'navigation-bar', 'anchor', 'aidea' ) ) ); ?>">
		<?php get_template_part( 'images/icon/close' ); ?>
        <span class="screen-reader-text"><?php esc_html_e( 'Close', 'dox' ); ?></span>
    </button>

    <nav class="fy-navigation-bar" itemscope itemtype="https://schema.org/SiteNavigationElement"
         aria-label="<?php echo esc_attr_x( 'Bar Navigation', 'aria label', 'dox' ); ?>">
		<?php if ( function_exists( 'dox_navigation_bar' ) ) {
			dox_navigation_bar();
		} ?>
    </nav>

</div>
