<?php

/*

Template Name: Coming soon

*/

get_header();
get_template_part( 'templates/heading/coming' );
?>

</div>
<?php // END fy-canvas

if ( function_exists( 'mc4wp_show_form' ) ) {
	get_template_part( 'templates/section/newsletter' );
} ?>

</div>
<?php // END fy-container

get_template_part( 'templates/overlays' );
get_template_part( 'templates/loading' );

// Microdata
get_template_part( 'templates/microdata' );

wp_footer();
?>

</body>
</html>
