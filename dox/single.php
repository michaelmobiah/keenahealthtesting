<?php

/*

Single Template

*/

// Main
$main_class = is_active_sidebar( 'post' ) ? 'sidebar-active' : 'sidebar-inactive';

get_header();

get_template_part( 'templates/heading/single' );
get_template_part( 'templates/layout/wrap', 'start' );
?>

    <div class="fy-flex-container fy-flex-gutter-large" itemscope itemtype="https://schema.org/Blog">

        <main id="<?php echo esc_attr( forqy_title_to_slug( _x( 'content', 'anchor', 'dox' ) ) ); ?>"
              class="fy-main fy-main-single fy-flex-column-auto <?php echo esc_attr( $main_class ); ?>" itemprop="blogPost" itemscope
              itemtype="https://schema.org/BlogPosting">

			<?php
			if ( get_post_type() == 'post' ) {

				if ( get_post_format() ) {
					get_template_part( 'templates/post/' . get_post_format(), 'single' );
				} else {
					get_template_part( 'templates/post/standard', 'single' );
				}

			} else {

				get_template_part( 'templates/post/standard', 'single' );

			}

			if ( comments_open() || get_comments_number() ) {
				comments_template();
			} ?>

        </main>

		<?php if ( is_active_sidebar( 'post' ) ) {
			get_sidebar( 'post' );
		} ?>

    </div>

<?php
get_template_part( 'templates/layout/wrap', 'end' );
get_footer();
