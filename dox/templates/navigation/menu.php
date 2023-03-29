<?php

/*

Navigation Template

*/

?>

<div id="<?php echo esc_attr( forqy_title_to_slug( _x( 'navigation', 'anchor', 'dox' ) ) ); ?>"
    class="fy-navigation-container fy-navigation-mobile-container fy-off js-off" data-off="navigation"
    data-off-breakpoint="<?php if ( get_theme_mod( 'dox_navigation_mobile_on_desktop', dox_default( 'dox_navigation_mobile_on_desktop' ) ) == 'enabled' ) { ?>all<?php } else { ?>1024<?php } ?>"
    data-off-position="<?php echo esc_attr( get_theme_mod( 'dox_navigation_mobile_position', dox_default( 'dox_navigation_mobile_position' ) ) ); ?>">

    <button type="button" class="fy-navigation-close js-off__close" data-off="navigation"
        aria-controls="<?php echo esc_attr( forqy_title_to_slug( _x( 'navigation', 'anchor', 'dox' ) ) ); ?>">
        <?php get_template_part( 'images/icon/close' ); ?>
        <span class="screen-reader-text"><?php esc_html_e( 'Close', 'dox' ); ?></span>
    </button>

    <?php if ( has_nav_menu( 'navigation_primary' ) ) { ?>

    <nav class="fy-navigation" itemscope itemtype="https://schema.org/SiteNavigationElement"
        aria-label="<?php echo esc_attr_x( 'Primary Navigation', 'aria label', 'dox' ); ?>">
        <?php if ( function_exists( 'dox_navigation' ) ) {
				dox_navigation();
			} ?>
    </nav>

    <?php } else {

		wp_page_menu( array(
			'container'  => 'nav',
			'menu_class' => 'fy-navigation',
			'before'     => '<ul class="fy-navigation-list fy-navigation-mobile-list">',
			'after'      => '</ul>',
		) );

	} ?>


</div>