<!DOCTYPE html>
<html id="<?php echo esc_attr( forqy_title_to_slug( _x( 'top', 'anchor', 'dox' ) ) ); ?>" <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="<?php echo esc_attr( get_theme_mod( 'dox_background_color', dox_default( 'dox_background_color' ) ) ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php
wp_body_open();
get_template_part( 'templates/skiplinks' );
?>

<div class="fy-container">

    <div class="fy-canvas">

        <?php get_template_part( 'templates/header', get_theme_mod( 'dox_header_layout', dox_default( 'dox_header_layout' ) ) );
