<?php

/*

Footer Template

*/

?>

</div>
<?php
// END fy-canvas

if ( function_exists( 'mc4wp_show_form' ) ) {
	get_template_part( 'templates/section/newsletter' );
} ?>

<footer id="<?php echo esc_attr( forqy_title_to_slug( _x( 'footer', 'anchor', 'dox' ) ) ); ?>" class="fy-footer"
        aria-label="<?php echo esc_attr_x( 'Footer', 'aria label', 'dox' ); ?>">
	<?php
	get_template_part( 'templates/footer/section/widgets' );
	get_template_part( 'templates/footer/section/bar' );
	?>
</footer>

</div>
<?php
// END fy-container

get_template_part( 'templates/search' );
get_template_part( 'templates/overlays' );
get_template_part( 'templates/loading' );
get_template_part( 'templates/background' );

// Microdata
get_template_part( 'templates/microdata' );

/**
 * Hook: dox_footer
 *
 * @hooked dox_photoswipe - 10
 */
do_action( 'dox_footer' );

wp_footer();
?>

</body>
</html>