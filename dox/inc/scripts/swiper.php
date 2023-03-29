<?php

/*

Swiper Scripts

*/

if ( ! function_exists( 'dox_scripts_swiper' ) ) {

	function dox_scripts_swiper() {

		$slideshow_posts = get_theme_mod( 'dox_slideshow_posts', dox_default( 'dox_slideshow_posts' ) );

		// Slides
		$slides = post_type_exists( 'slide' ) ? wp_count_posts( 'slide' )->publish : 0;
		// Projects
		$projects = post_type_exists( 'project' ) ? wp_count_posts( 'project' )->publish : 0;
		// Events
		$events = post_type_exists( 'event' ) ? wp_count_posts( 'event' )->publish : 0;
		// Galleries
		$galleries = post_type_exists( 'gallery' ) ? wp_count_posts( 'gallery' )->publish : 0;
		// Stickies
		$stickies = count( get_option( 'sticky_posts' ) );

		// If There Are More Than One Published Slide/Sticky/Gallery/Project, Load Scripts
		if ( ( $slideshow_posts == 'slide' && $slides > 1 )
			|| ( $slideshow_posts == 'project' && $projects > 1 )
			|| ( $slideshow_posts == 'event' && $events > 1 )
			|| ( $slideshow_posts == 'gallery' && $galleries > 1 )
			|| ( $slideshow_posts == 'sticky' && $stickies > 1 )
			|| get_theme_mod( 'dox_homepage_carousel', dox_default( 'dox_homepage_carousel' ) ) == 'enabled' ) {

			/**
			 * Swiper
			 * @url https://github.com/nolimits4web/swiper
			 * @source Custom Build, https://swiperjs.com/api/#custom-build
			 */
			wp_enqueue_script( 'swiper', trailingslashit( get_template_directory_uri() ) . 'vendor/forqy/core/js/lib/swiper.js', false, '8.0.6', true );

			/**
			 * CORE Slideshow
			 */
			$slideshow_slides      = get_theme_mod( 'dox_slideshow_slides', dox_default( 'dox_slideshow_slides' ) );
			$slideshow_slides_480  = 1;
			$slideshow_slides_1024 = $slideshow_slides > 1 ? $slideshow_slides - 1 : 1;
			$slideshow_slides_1280 = $slideshow_slides;

			// Register
			wp_register_script( get_template() . '-slideshow', trailingslashit( get_template_directory_uri() ) . 'vendor/forqy/core/js/slideshow.js', array(
				'swiper',
			), '1.0.1', true );

			// Localize
			wp_localize_script( get_template() . '-slideshow', 'parameter', array(
				'effect'        => esc_js( get_theme_mod( 'dox_slideshow_effect', dox_default( 'dox_slideshow_effect' ) ) ),
				'loop'          => esc_js( get_theme_mod( 'dox_slideshow_loop', dox_default( 'dox_slideshow_loop' ) ) ),
				'speed'         => esc_js( get_theme_mod( 'dox_slideshow_speed', dox_default( 'dox_slideshow_speed' ) ) ),
				'direction'     => esc_js( get_theme_mod( 'dox_slideshow_direction', dox_default( 'dox_slideshow_direction' ) ) ),
				'spaceBetween'  => esc_js( get_theme_mod( 'dox_slideshow_gutter', dox_default( 'dox_slideshow_gutter' ) ) ),
				'autoplayDelay' => esc_js( get_theme_mod( 'dox_slideshow_autoplay', dox_default( 'dox_slideshow_autoplay' ) ) ),

				'slidesPerView480'  => esc_js( $slideshow_slides_480 ),
				'slidesPerView1024' => esc_js( $slideshow_slides_1024 ),
				'slidesPerView1280' => esc_js( $slideshow_slides_1280 ),

				'prevSlideMessage'        => esc_js( _x( 'Previous slide', 'slideshow accessibility', 'dox' ) ),
				'nextSlideMessage'        => esc_js( _x( 'Next slide', 'slideshow accessibility', 'dox' ) ),
				'firstSlideMessage'       => esc_js( _x( 'First slide', 'slideshow accessibility', 'dox' ) ),
				'lastSlideMessage'        => esc_js( _x( 'Last slide', 'slideshow accessibility', 'dox' ) ),
				'paginationBulletMessage' => esc_js( _x( 'Go to slide {{index}}', 'slideshow accessibility', 'dox' ) ),
			) );

			// Enqueue
			wp_enqueue_script( get_template() . '-slideshow' );

			/**
			 * CORE Carousel
			 */

			if ( get_theme_mod( 'dox_homepage_carousel', dox_default( 'dox_homepage_carousel' ) ) == 'enabled' ) {

				// Register
				wp_register_script( get_template() . '-carousel', trailingslashit( get_template_directory_uri() ) . 'vendor/forqy/core/js/carousel.js', array(
					'swiper',
				), '1.0.0', true );

				// Localize
				wp_localize_script( get_template() . '-carousel', 'parameter', array(
					'speed'         => esc_js( get_theme_mod( 'dox_slideshow_speed', dox_default( 'dox_slideshow_speed' ) ) ),
					'spaceBetween'  => esc_js( get_theme_mod( 'dox_carousel_gutter', dox_default( 'dox_carousel_gutter' ) ) ),
					'autoplayDelay' => esc_js( get_theme_mod( 'dox_slideshow_autoplay', dox_default( 'dox_slideshow_autoplay' ) ) ),

					'prevSlideMessage'        => esc_js( _x( 'Previous slide', 'slideshow accessibility', 'dox' ) ),
					'nextSlideMessage'        => esc_js( _x( 'Next slide', 'slideshow accessibility', 'dox' ) ),
					'firstSlideMessage'       => esc_js( _x( 'First slide', 'slideshow accessibility', 'dox' ) ),
					'lastSlideMessage'        => esc_js( _x( 'Last slide', 'slideshow accessibility', 'dox' ) ),
					'paginationBulletMessage' => esc_js( _x( 'Go to slide {{index}}', 'slideshow accessibility', 'dox' ) ),
				) );

				// Enqueue
				wp_enqueue_script( get_template() . '-carousel' );

			}

		}

	}

	add_action( 'wp_enqueue_scripts', 'dox_scripts_swiper', 10 );

}
