<?php

/*

Menu Content Template

*/

// Prices
$prices = forqy_meta( 'fy_menu_price' );

if ( is_array( $prices ) ) {
	$prices = array_filter( $prices );
} else {
	$prices = array();
}

if ( ! empty( $prices ) ) {
	foreach ( $prices as $price => $item ) {
		if ( preg_replace( '/\s/', '', $item ) === '' ) {
			unset( $prices[ $price ] );
		}
	}
}

// Badges
$badges = forqy_meta( 'fy_menu_badges' );

if ( is_array( $badges ) ) {
	$badges = array_filter( $badges );
} else {
	$badges = array();
}

if ( ! empty( $badges ) ) {
	foreach ( $badges as $badge => $item ) {
		if ( preg_replace( '/\s/', '', $item ) === '' ) {
			unset( $badge[ $badge ] );
		}
	}
}

// Post
$post_layout     = get_theme_mod( 'dox_menu_post_layout', dox_default( 'dox_menu_post_layout' ) );
$post_appearance = get_theme_mod( 'dox_post_appearance', dox_default( 'dox_post_appearance' ) );
$post_overlay    = get_theme_mod( 'dox_post_overlay_type', dox_default( 'dox_post_overlay_type' ) );

$post_class = array( 'fy-post', 'fy-post-listing', 'fy-post-menu', 'cs-post', 'js-post' );

array_push( $post_class, 'fy-post-' . $post_layout );
array_push( $post_class, 'fy-post-' . $post_appearance );

if ( ! has_post_thumbnail() ) {
	array_push( $post_class, 'has-no-thumbnail' );
}
if ( ! empty( $badges ) ) {
	array_push( $post_class, 'has-badges' );
}
if ( ! empty( $prices ) ) {
	array_push( $post_class, 'has-prices' );
} ?>

<article id="post-<?php the_ID(); ?>" <?php post_class( $post_class ); ?> itemprop="hasMenuItem" itemscope itemtype="https://schema.org/MenuItem">

    <div class="fy-flex-container fy-flex-container-stretch fy-flex-gutter-0">

		<?php if ( get_theme_mod( 'dox_menu_images' ) != 'disabled' ) {
			if ( has_post_thumbnail() ) { ?>
                <div class="fy-post-image-column fy-flex-column-100">
					<?php get_template_part( 'templates/image/thumbnail', 'menu' ); ?>
                </div>
			<?php }
		} ?>

        <div class="fy-post-content-column fy-flex-column-100">

            <div class="fy-post-container">
				<?php
				get_template_part( 'templates/post/listing/menu/badges' );
				get_template_part( 'templates/post/listing/menu/header' );
				get_template_part( 'templates/post/listing/menu/content' );
				get_template_part( 'templates/post/listing/menu/prices' );
				get_template_part( 'templates/post/listing/menu/ingredients' );
				?>
            </div>

        </div>

    </div>

	<?php
	get_template_part( 'templates/post/microdata/menu' );
	get_template_part( 'templates/post/microdata/image' );
	?>
</article>
