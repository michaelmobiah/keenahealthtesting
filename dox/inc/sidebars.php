<?php

/*

Sidebars

*/

if ( ! function_exists( 'dox_sidebars' ) ) {

	/**
	 * Sidebars
	 */
	function dox_sidebars() {

		if ( function_exists( 'register_sidebar' ) ) {

			/**
			 * Blog
			 */
			register_sidebar( array(
				'name'          => esc_html__( 'Blog', 'dox' ),
				'id'            => 'blog',
				'before_widget' => '<div id="%1$s" class="fy-widget widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="fy-widget-title">',
				'after_title'   => '</h3>',
			) );

			/**
			 * Homepage
			 */
			register_sidebar( array(
				'name'          => esc_html__( 'Homepage - Call to Action', 'dox' ),
				'id'            => 'homepage-call-to-action',
				'before_widget' => '<div class="fy-widget-column fy-flex-column-auto fy-flex-column-desktop-33 fy-flex-column-tablet-100"><div id="%1$s" class="fy-widget widget %2$s">',
				'after_widget'  => '</div></div>',
				'before_title'  => '<h3 class="fy-widget-title">',
				'after_title'   => '</h3>',
			) );
			register_sidebar( array(
				'name'          => esc_html__( 'Homepage - Top', 'dox' ),
				'id'            => 'homepage-top',
				'before_widget' => '<div class="fy-widget-column fy-flex-column-auto fy-flex-column-tablet-50 fy-flex-column-phone-100"><div id="%1$s" class="fy-widget widget %2$s">',
				'after_widget'  => '</div></div>',
				'before_title'  => '<h3 class="fy-widget-title"><span>',
				'after_title'   => '</span></h3>',
			) );
			register_sidebar( array(
				'name'          => esc_html__( 'Homepage - Bottom', 'dox' ),
				'id'            => 'homepage-bottom',
				'before_widget' => '<div class="fy-widget-column fy-flex-column-auto fy-flex-column-tablet-50 fy-flex-column-phone-100"><div id="%1$s" class="fy-widget widget %2$s">',
				'after_widget'  => '</div></div>',
				'before_title'  => '<h3 class="fy-widget-title"><span>',
				'after_title'   => '</span></h3>',
			) );
			register_sidebar( array(
				'name'          => esc_html__( 'Homepage - Blog', 'dox' ),
				'id'            => 'homepage-blog',
				'before_widget' => '<div id="%1$s" class="fy-widget widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="fy-widget-title"><span>',
				'after_title'   => '</span></h3>',
			) );

			/**
			 * Post
			 */
			register_sidebar( array(
				'name'          => esc_html__( 'Post', 'dox' ),
				'id'            => 'post',
				'before_widget' => '<div id="%1$s" class="fy-widget widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="fy-widget-title">',
				'after_title'   => '</h3>',
			) );

			/**
			 * Page
			 */
			register_sidebar( array(
				'name'          => esc_html__( 'Page', 'dox' ),
				'id'            => 'page',
				'before_widget' => '<div id="%1$s" class="fy-widget widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="fy-widget-title">',
				'after_title'   => '</h3>',
			) );

			/**
			 * Menu
			 */
			register_sidebar( array(
				'name'          => esc_html__( 'Menu', 'dox' ),
				'id'            => 'menu',
				'before_widget' => '<div id="%1$s" class="fy-widget widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="fy-widget-title">',
				'after_title'   => '</h3>',
			) );

			/**
			 * Portfolio
			 */
			register_sidebar( array(
				'name'          => esc_html__( 'Portfolio', 'dox' ),
				'id'            => 'project',
				'before_widget' => '<div id="%1$s" class="fy-widget widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="fy-widget-title">',
				'after_title'   => '</h3>',
			) );

			/**
			 * Albums
			 */
			register_sidebar( array(
				'name'          => esc_html__( 'Albums', 'dox' ),
				'id'            => 'album',
				'before_widget' => '<div id="%1$s" class="fy-widget widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="fy-widget-title">',
				'after_title'   => '</h3>',
			) );

			/**
			 * Events
			 */
			register_sidebar( array(
				'name'          => esc_html__( 'Events', 'dox' ),
				'id'            => 'event',
				'before_widget' => '<div id="%1$s" class="fy-widget widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="fy-widget-title">',
				'after_title'   => '</h3>',
			) );

			/**
			 * Gallery
			 */
			register_sidebar( array(
				'name'          => esc_html__( 'Galleries', 'dox' ),
				'id'            => 'gallery',
				'before_widget' => '<div id="%1$s" class="fy-widget widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="fy-widget-title">',
				'after_title'   => '</h3>',
			) );

			/**
			 * Contact
			 */
			register_sidebar( array(
				'name'          => esc_html__( 'Contact', 'dox' ),
				'id'            => 'contact',
				'before_widget' => '<div id="%1$s" class="fy-widget widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="fy-widget-title">',
				'after_title'   => '</h3>',
			) );

			/**
			 * Shop
			 */
			if ( forqy_woocommerce_activated() ) {

				register_sidebar( array(
					'name'          => esc_html__( 'Shop', 'dox' ),
					'id'            => 'shop',
					'before_widget' => '<div id="%1$s" class="fy-widget widget %2$s">',
					'after_widget'  => '</div>',
					'before_title'  => '<h3 class="fy-widget-title">',
					'after_title'   => '</h3>',
				) );

			}

			/**
			 * Footer
			 */
			register_sidebar( array(
				'name'          => esc_html__( 'Footer', 'dox' ),
				'id'            => 'footer',
				'before_widget' => '<div class="fy-widget-column fy-flex-column-auto fy-flex-column-tablet-50 fy-flex-column-phone-100"><div id="%1$s" class="fy-widget widget %2$s">',
				'after_widget'  => '</div></div>',
				'before_title'  => '<h3 class="fy-widget-title"><span>',
				'after_title'   => '</span></h3>',
			) );

		}

	}

	add_action( 'widgets_init', 'dox_sidebars' );

}
