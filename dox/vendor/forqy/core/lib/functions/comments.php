<?php

/**
 * Comments Functions
 *
 * @package forqy/core
 * @since 1.0.0
 */

if ( ! function_exists( 'forqy_comments_list' ) ) {

	/**
	 * Comments List
	 *
	 * @param $comment
	 * @param $args
	 * @param $depth
	 */
	function forqy_comments_list( $comment, $args, $depth ) {
		$globals['comment'] = $comment;

		// Avatar
		$avatar = get_avatar( $comment ); ?>

        <article id="comment-<?php comment_ID(); ?>" <?php comment_class( array( 'fy-comment' ) ); ?> itemscope itemtype="https://schema.org/Comment">

            <div class="fy-comment__body">

                <header class="fy-comment__header">
                    <div class="fy-flex-container fy-flex-container-center fy-flex-gutter-small">

                        <?php if ( ! empty( $avatar ) ) { ?>
                            <div class="fy-flex-column">
                                <div class="fy-comment__avatar">
                                    <?php echo get_avatar( $comment, '96' ); ?>
                                </div>
                            </div>
                        <?php } ?>

                        <div class="fy-flex-column-auto">

                            <h5 class="fy-comment__author" itemprop="name">
                                <?php echo get_comment_author_link(); ?>
                            </h5>

                            <div class="fy-comment__meta">
                                <time class="fy-comment__date" datetime="<?php comment_time( 'c' ); ?>">
                                    <a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
                                        <?php echo get_comment_date() . ' &mdash; ' . get_comment_time(); ?>
                                    </a>
                                </time>
                            </div>

                        </div>

                        <div class="fy-flex-column">

                            <div class="fy-comment__toolbar">
                                <div class="fy-flex-container fy-flex-container-center fy-flex-gutter-small">
                                    <div class="fy-flex-column-auto fy-flex-column-phone-100">

                                        <div class="fy-comment__reply">
                                            <?php comment_reply_link( array_merge( $args, array(
                                                'depth'     => $depth,
                                                'max_depth' => $args['max_depth']
                                            ) ) ); ?>
                                        </div>

                                    </div>
                                    <?php if ( current_user_can( 'edit_comment', $comment->comment_ID ) ) { ?>
                                        <div class="fy-flex-column-auto fy-flex-column-phone-100">

                                            <div class="fy-comment__edit">
                                                <?php edit_comment_link(); ?>
                                            </div>

                                        </div>
                                    <?php } ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </header>

                <?php if ( $comment->comment_approved == '0' ) { ?>
                    <div class="fy-alert fy-margin-top">
                        <?php echo apply_filters( 'forqy_theme_translation', 'comments_comment_awaiting_moderation' ); ?>
                    </div>
                <?php } ?>

                <div class="fy-comment__content fy-content" itemprop="text">
                    <?php comment_text(); ?>
                </div>

            </div>

	<?php }

}

if ( ! function_exists( 'forqy_comments_list_end' ) ) {

	/**
	 * Comments List - End
	 */
	function forqy_comments_list_end() {
		echo '</article>';
	}

}
