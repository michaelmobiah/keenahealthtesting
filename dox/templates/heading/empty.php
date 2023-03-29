<?php

/*

Empty Heading Template

*/

?>

<header class="fy-heading fy-heading-empty">

	<?php get_template_part( 'templates/image/background' ); ?>

    <div class="fy-heading-container">

		<?php if ( get_the_title() ) { ?>
            <h1><?php the_title(); ?></h1>
		<?php } ?>

    </div>

</header>
