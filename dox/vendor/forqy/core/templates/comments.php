<?php

/*

Comments Template

*/

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
} ?>

<section id="comments" class="fy-comments">

    <div class="fy-comments__container">

        <header class="fy-comments__header">
            <h2><?php comments_number(); ?></h2>
        </header>

		<?php if ( have_comments() ) { ?>

            <div class="fy-comments__list">
				<?php wp_list_comments( array(
					'avatar_size'  => 96,
					'short_ping'   => true,
					'style'        => 'div',
					'callback'     => 'forqy_comments_list',
					'end-callback' => 'forqy_comments_list_end',
				) ); ?>
            </div>

		<?php } else {
			if ( comments_open() ) { ?>

                <div class="fy-comments__no">
					<?php echo apply_filters( 'forqy_theme_translation', 'comments_comment_first' ); ?>
                </div>

			<?php }
		}

		if ( get_comment_pages_count() > 1 ) { ?>

            <div class="fy-comments__pagination fy-pagination">
				<?php paginate_comments_links( array(
					'prev_text' => apply_filters( 'forqy_theme_translation', 'comments_pagination_prev' ),
					'next_text' => apply_filters( 'forqy_theme_translation', 'comments_pagination_next' ),
				) ); ?>
            </div>

		<?php }

		if ( comments_open() || pings_open() ) { ?>

            <div class="fy-comments__form">
				<?php comment_form( array(
					'logged_in_as'    => null,
					'class_container' => 'fy-form comment-respond',
				) ); ?>
            </div>

		<?php }

		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) { ?>

            <div class="fy-comments__closed">
				<?php echo apply_filters( 'forqy_theme_translation', 'comments_closed' ); ?>
            </div>

		<?php } ?>
    </div>

</section>
