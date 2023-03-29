<?php

/*

Event Categories Template

*/

if ( has_term( '', 'category-event' ) ) { ?>
    <div class="fy-event-categories fy-post-tags">
		<?php dox_terms_post( get_the_ID(), 'category-event' ); ?>
    </div>
<?php }
