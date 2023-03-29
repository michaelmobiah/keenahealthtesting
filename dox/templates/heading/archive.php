<?php

/*

Archive Heading Template

*/

?>

<header class="fy-heading fy-heading-<?php echo esc_attr( get_theme_mod( 'dox_heading_height', dox_default( 'dox_heading_height' ) ) ); ?> js-video-container">

	<?php get_template_part( 'templates/image/background' ); ?>

    <div class="fy-heading-container fy-centerer fy-centerer-<?php echo esc_attr( get_theme_mod( 'dox_content_layout', dox_default( 'dox_content_layout' ) ) ); ?>">

        <h1>
			<?php if ( is_category() ) {
				single_cat_title();
			} else if ( is_tag() ) {
				single_tag_title();
			} else if ( is_tax() ) {
				single_term_title();
			} else if ( is_author() ) {
				?>
                <small class="fy-author-avatar"><?php echo get_avatar( get_the_author_meta( 'ID' ), '160' ); ?></small>
				<?php
				echo get_the_author();

			} else if ( is_day() ) {
				the_time( esc_html__( 'F jS, Y', 'dox' ) );
			} else if ( is_month() ) {
				the_time( esc_html__( 'F, Y', 'dox' ) );
			} else if ( is_year() ) {
				the_time( esc_html__( 'Y', 'dox' ) );
			} else if ( get_post_format() ) {
				echo get_post_format();
			} else if ( isset( $_GET['paged'] ) && ! empty( $_GET['paged'] ) ) {
				esc_html_e( 'Archive', 'dox' );
			} else {
				esc_html_e( 'Archive', 'dox' );
			} ?>
        </h1>

		<?php if ( category_description() ) { ?>
            <div class="fy-centerer fy-centerer-75<?php if ( get_theme_mod( 'dox_heading_align_horizontal', dox_default( 'dox_heading_align_horizontal' ) ) == 'left' ) { ?> fy-centerer-left<?php } else if ( get_theme_mod( 'dox_heading_align_horizontal', dox_default( 'dox_heading_align_horizontal' ) ) == 'right' ) { ?> fy-centerer-right<?php } ?>">
                <div class="fy-heading-content fy-content">
					<?php echo category_description(); ?>
                </div>
            </div>
		<?php } ?>

    </div>

	<?php get_template_part( 'templates/design/border' ); ?>
</header>
