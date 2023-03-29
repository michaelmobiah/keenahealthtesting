<?php

/*

Project Heading Template

*/

// Video
$video = forqy_meta( 'fy_video', false, get_the_ID() );

// Summary
$project_summary = forqy_meta( 'fy_project_summary' );

// Client
$project_client     = forqy_meta( 'fy_project_client' );
$project_client_url = forqy_meta( 'fy_project_client_url' );

// Preview
$project_preview     = forqy_meta( 'fy_project_preview' );
$project_preview_url = forqy_meta( 'fy_project_preview_url' );

// Purchase
$project_price        = forqy_meta( 'fy_project_price' );
$project_purchase     = forqy_meta( 'fy_project_purchase' );
$project_purchase_url = forqy_meta( 'fy_project_purchase_url' );
?>

<header class="fy-heading fy-heading-single fy-heading-<?php echo esc_attr( get_theme_mod( 'dox_heading_height_single', dox_default( 'dox_heading_height_single' ) ) ); ?> js-video-container">

	<?php get_template_part( 'templates/image/background' ); ?>

    <div class="fy-heading-container fy-centerer<?php if ( is_single() ) { ?> fy-centerer-<?php echo esc_attr( get_theme_mod( 'dox_post_single_width', dox_default( 'dox_post_single_width' ) ) ); ?><?php } ?>">

		<?php if ( ! empty( $video ) ) {
			get_template_part( 'templates/video/controls' );
		}

		if ( ! empty( $project_client ) ) { ?>
            <div class="fy-heading-subtitle">
				<?php if ( ! empty( $project_client_url ) ) { ?>
                    <a href="<?php echo esc_url( $project_client_url ); ?>" target="_blank" rel="noopener">
						<?php echo esc_attr( $project_client ); ?>
                    </a>
				<?php } else {
					echo esc_attr( $project_client );
				} ?>
            </div>
			<?php
		}

		if ( get_the_title() ) { ?>
            <h1><?php the_title(); ?></h1>
		<?php }

		if ( ! empty( $project_summary ) ) { ?>
            <div class="fy-heading-content fy-post-summary fy-content">
				<?php echo wpautop( do_shortcode( wp_kses( $project_summary, array(
					'a'      => array(
						'href'   => array(),
						'target' => array(),
					),
					'p'      => array(),
					'br'     => array(),
					'em'     => array(),
					'strong' => array()
				) ) ) ); ?>
            </div>
			<?php
		}

		if ( ! empty( $project_preview ) || ! empty( $project_purchase ) ) { ?>

            <div class="fy-heading-buttons">
				<?php if ( ! empty( $project_preview ) && ! empty( $project_preview_url ) ) { ?>
                    <a href="<?php echo esc_url( $project_preview_url ); ?>" target="_blank" rel="noopener"
                       class="fy-button-preview fy-heading-button fy-button fy-button-<?php echo esc_attr( get_theme_mod( 'dox_heading_button', 'accent' ) ); ?>">
						<?php echo esc_html( $project_preview ); ?>
                    </a>
				<?php }

				if ( ! empty( $project_purchase ) && ! empty( $project_purchase_url ) ) { ?>
                    <a href="<?php echo esc_url( $project_purchase_url ); ?>" target="_blank" rel="noopener"
                       class="fy-button-purchase fy-heading-button fy-button fy-button-<?php echo esc_attr( get_theme_mod( 'dox_heading_button', 'accent' ) ); ?>">
						<?php echo esc_attr( $project_purchase );

						if ( ! empty( $project_price ) ) { ?>
                            <span class="fy-price"><?php echo esc_html( $project_price ); ?></span>
						<?php } ?>
                    </a>
				<?php } ?>
            </div>

		<?php } ?>

    </div>

	<?php get_template_part( 'templates/design/border' ); ?>
</header>
