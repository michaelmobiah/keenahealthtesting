<?php

/*

Footer Copyright Template

*/

?>

<div class="fy-footer-copyright cs-footer-copyright">

	<?php esc_html_e( 'Copyright &copy;', 'dox' ); ?> <?php echo date( 'Y' ); ?> <a
            href="<?php echo esc_url( home_url( '/' ) ); ?>"
            title="<?php echo get_bloginfo( 'description' ); ?>"><?php echo get_bloginfo( 'name' ); ?></a><?php if ( get_theme_mod( 'dox_copyright', __( 'All rights reserved.', 'dox' ) ) ) { ?>.<?php } ?>

	<?php echo wp_kses( get_theme_mod( 'dox_copyright', __( 'All rights reserved.', 'dox' ) ), array(
		'a'      => array(
			'href'   => array(),
			'target' => array()
		),
		'em'     => array(),
		'strong' => array()
	) ); ?>

<!--	<?php if ( ! get_theme_mod( 'dox_themeby', '1' ) ) { ?>
        <div class="screen-reader-text">
			<?php esc_html_e( 'WordPress Theme by', 'dox' ); ?> <a href="<?php echo esc_url( 'https://forqy.website/' ); ?>">FORQY</a>
        </div>
	<?php } else { ?>
        <div class="fy-footer-themeby">
			<?php esc_html_e( 'WordPress Theme by', 'dox' ); ?> <a href="<?php echo esc_url( 'https://forqy.website/' ); ?>">FORQY</a>
        </div>
	<?php } ?>-->

</div>
