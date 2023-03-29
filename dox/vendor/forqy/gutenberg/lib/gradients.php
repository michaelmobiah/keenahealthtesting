<?php

/**
 * Gradients
 *
 * @package forqy/gutenberg
 * @since 1.0.1
 */

if ( ! function_exists( 'forqy_gutenberg_editor_gradient_presets' ) ) {

	/**
	 * Define Default Editor Gradient Presets
	 *
	 * @return array[]
	 */
	function forqy_gutenberg_editor_gradient_presets(): array {

		return array(

			// Two Colors
			array(
				'name'     => 'Oxford Blue → French Lilac',
				'gradient' => 'linear-gradient(135deg, #001432 0%, #8c64a0 100%)',
				'slug'     => 'o-blue--f-lilac',
			),
			array(
				'name'     => 'Persian Indigo → Robin Egg Blue',
				'gradient' => 'linear-gradient(135deg, #321464 0%, #32c8c8 100%)',
				'slug'     => 'p-indigo--re-blue',
			),
			array(
				'name'     => 'Cornflower Blue → Violet Red',
				'gradient' => 'linear-gradient(135deg, #0f3c82 0%, #ff508c 100%)',
				'slug'     => 'c-blue--v-red',
			),
			array(
				'name'     => 'Russian Violet → Lavender Floral',
				'gradient' => 'linear-gradient(135deg, #3c2864 0%, #b978eb 100%)',
				'slug'     => 'r-violet--l-floral',
			),
			array(
				'name'     => 'Spanish Violet → Sandy Brown',
				'gradient' => 'linear-gradient(135deg, #462878 0%, #faaa78 100%)',
				'slug'     => 's-violet--s-brown',
			),
			array(
				'name'     => 'Glossy Grape → Tumbleweed',
				'gradient' => 'linear-gradient(135deg, #b496be 0%, #e6b496 100%)',
				'slug'     => 'g-grape--tumbleweed',
			),
			array(
				'name'     => 'Light Salmon → Tart Orange',
				'gradient' => 'linear-gradient(135deg, #fab496 0%, #f05050 100%)',
				'slug'     => 'l-salmon--t-orange',
			),
			array(
				'name'     => 'Light Salmon → Red Crayola',
				'gradient' => 'linear-gradient(135deg, #fab496 0%, #fa0a4b 100%)',
				'slug'     => 'l-salmon--r-crayola',
			),
			array(
				'name'     => 'Orange Soda → Atomic Tangerine',
				'gradient' => 'linear-gradient(135deg, #ff4b32 0%, #ff9664 100%)',
				'slug'     => 'o-soda--a-tangerine',
			),
			array(
				'name'     => 'Red Salsa → Carmine',
				'gradient' => 'linear-gradient(135deg, #e14b4b 0%, #960019 100%)',
				'slug'     => 'r-salsa--carmine',
			),
			array(
				'name'     => 'Bittersweet Shimmer → Space Cadet',
				'gradient' => 'linear-gradient(135deg, #c84b55 0%, #323264 100%)',
				'slug'     => 'b-shimmer--s-cadet',
			),
			array(
				'name'     => 'Cream → Dogwood Rose',
				'gradient' => 'linear-gradient(135deg, #fafac8 0%, #c80064 100%)',
				'slug'     => 'cream--d-rose',
			),
			array(
				'name'     => 'Lemon Yellow Crayola → Acid Green',
				'gradient' => 'linear-gradient(135deg, #fafaaf 0%, #c8c832 100%)',
				'slug'     => 'ly-crayola--a-green',
			),
			array(
				'name'     => 'Peach Crayola → Bronze',
				'gradient' => 'linear-gradient(135deg, #fac896 0%, #c87d32 100%)',
				'slug'     => 'p-crayola--bronze',
			),
			array(
				'name'     => 'Seashell → Uranian Blue',
				'gradient' => 'linear-gradient(135deg, #fff0eb 0%, #afe1fa 100%)',
				'slug'     => 'seashell--u-blue',
			),
			array(
				'name'     => 'Wild Blue Yonder → Cornflower Blue',
				'gradient' => 'linear-gradient(135deg, #9bafd7 0%, #0f3c82 100%)',
				'slug'     => 'w-blue-y--c-blue',
			),
			array(
				'name'     => 'Space Cadet → Purple Navy',
				'gradient' => 'linear-gradient(135deg, #23234b 0%, #4b4b7d 100%)',
				'slug'     => 's-cadet--p-navy',
			),
			array(
				'name'     => 'Vivid Sky Blue → Azure',
				'gradient' => 'linear-gradient(135deg, #00c8fa 0%, #007dfa 100%)',
				'slug'     => 'vs-blue--azure',
			),
			array(
				'name'     => 'Spring Green → Dodger Blue',
				'gradient' => 'linear-gradient(135deg, #28f08c 0%, #0096fa 100%)',
				'slug'     => 's-green--d-blue',
			),
			array(
				'name'     => 'Blond → Verdigris',
				'gradient' => 'linear-gradient(135deg, #fff5c8 0%, #32afaf 100%)',
				'slug'     => 'blond--verdigris',
			),
			array(
				'name'     => 'Middle Blue Green → Indigo Dye',
				'gradient' => 'linear-gradient(135deg, #7de1c8 0%, #0a5078 100%)',
				'slug'     => 'mb-green--i-dye',
			),
			array(
				'name'     => 'Emerald → Deep Jungle Green',
				'gradient' => 'linear-gradient(135deg, #4bc87d 0%, #004b4b 100%)',
				'slug'     => 'emerald--dj-green',
			),
			array(
				'name'     => 'Alabaster → Dark Green X11',
				'gradient' => 'linear-gradient(135deg, #e1e1d2 0%, #196400 100%)',
				'slug'     => 'alabaster--d-green-x11',
			),
			array(
				'name'     => 'Baby Powder → Champagne Pink',
				'gradient' => 'linear-gradient(135deg, #fafaf6 0%, #e1d2c8 100%)',
				'slug'     => 'b-powder--ch-pink',
			),
			array(
				'name'     => 'Cinereous → Dark Liver',
				'gradient' => 'linear-gradient(135deg, #967d73 0%, #4b4141 100%)',
				'slug'     => 'cinereous--d-liver',
			),
			array(
				'name'     => 'Robin Egg Blue → Fuchsia',
				'gradient' => 'linear-gradient(135deg, #00e1e1 0%, #fa00fa 100%)',
				'slug'     => 're-blue--fuchsia',
			),

			// Three Colors
			array(
				'name'     => 'Maize Crayola → Fuchsia Crayola → St Patrick Blue',
				'gradient' => 'linear-gradient(135deg, #f0c864 0%, #c850c8 50%, #28287d 100%)',
				'slug'     => 'm-crayola--f-crayola--sp-blue',
			),
			array(
				'name'     => 'Persian Indigo → Cinnamon Satin → Gold Crayola',
				'gradient' => 'linear-gradient(135deg, #321964 0%, #c8647d 50%, #fac87d 100%)',
				'slug'     => 'p-indigo--c-satin--g-crayola',
			),
			array(
				'name'     => 'Uranian Blue → Green Blue → Brink Pink',
				'gradient' => 'linear-gradient(135deg, #afe1fa 0%, #2364aa 50%, #ff4b7d 100%)',
				'slug'     => 'u-blue--g-blue--b-pink',
			),

			// Neutral Colors
			// https://coolors.co/f8f8fa-eeeef2-c8c8d0-828291-5a5a69-323241
			array(
				'name'     => 'White → Ghost White',
				'gradient' => 'linear-gradient(135deg, #ffffff 0%, #eeeef2 100%)',
				'slug'     => 'white--g-white',
			),
			array(
				'name'     => 'Cultured → Lavender Gray',
				'gradient' => 'linear-gradient(135deg, #f8f8fa 0%, #c8c8d0 100%)',
				'slug'     => 'cultured--l-gray',
			),
			array(
				'name'     => 'Ghost White → Roman Silver',
				'gradient' => 'linear-gradient(135deg, #eeeef2 0%, #828291 100%)',
				'slug'     => 'g-white--r-silver',
			),
			array(
				'name'     => 'Lavender Gray → Independence',
				'gradient' => 'linear-gradient(135deg, #c8c8d0 0%, #5a5a69 100%)',
				'slug'     => 'l-gray--independence',
			),
			array(
				'name'     => 'Roman Silver → Raisin Black',
				'gradient' => 'linear-gradient(135deg, #828291 0%, #323241 100%)',
				'slug'     => 'r-silver--r-black',
			),
		);

	}

}
