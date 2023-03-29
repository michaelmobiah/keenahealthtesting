<?php

/*

Socials Template

*/

if ( function_exists( 'forqy_socials' ) ) { ?>
    <nav class="fy-socials cs-socials" itemscope itemtype="https://schema.org/SiteNavigationElement"
         aria-label="<?php echo esc_attr_x( 'Social Networks', 'aria label', 'dox' ); ?>">
		<?php forqy_socials(); ?>
    </nav>
<?php }
