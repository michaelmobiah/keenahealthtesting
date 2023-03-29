<?php

/*

Search Form Template

*/

?>

<form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="fy-field fy-field-search">
        <label for="search" class="fy-label screen-reader-text">
			<?php esc_html_e( 'Search', 'dox' ); ?>
        </label>

        <input id="search" type="text" class="fy-input" placeholder="<?php esc_attr_e( 'Search', 'dox' ); ?> ..." value="<?php echo get_search_query(); ?>" name="s" required>

        <button type="submit" class="fy-button">
			<?php get_template_part( 'images/icon/search' ); ?>
            <span class="screen-reader-text"><?php esc_html_e( 'Search', 'dox' ); ?></span>
        </button>
    </div>
</form>