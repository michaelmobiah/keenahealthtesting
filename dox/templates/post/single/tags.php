<?php

/*

Post Tags Template

*/

if ( has_tag() ) { ?>
    <div class="fy-post-tags">
		<?php the_tags( '<ul><li>', '</li><li>', '</li></ul>' ); ?>
    </div>
<?php }
