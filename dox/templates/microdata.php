<?php

/*

Microdata Template

*/

get_template_part( 'templates/microdata/default' );
get_template_part( 'templates/microdata/' . get_theme_mod( 'dox_website_type', dox_default( 'dox_website_type' ) ) );
