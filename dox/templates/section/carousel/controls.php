<?php

/*

Carousel Controls

*/

?>

<div class="fy-carousel__controls">

    <div class="fy-flex-container fy-flex-container-center fy-flex-gutter-small">
        <div class="fy-flex-column">

            <div class="fy-carousel__prev js-carousel-prev" aria-controls="<?php echo esc_attr( forqy_title_to_slug( _x( 'carousel', 'section anchor', 'dox' ) ) ); ?>">
				<?php get_template_part( 'images/icon/prev' ); ?>
            </div>

        </div>
        <div class="fy-flex-column-auto">
			<?php get_template_part( 'templates/section/carousel/pagination' ); ?>
        </div>
        <div class="fy-flex-column">

            <div class="fy-carousel__next js-carousel-next" aria-controls="<?php echo esc_attr( forqy_title_to_slug( _x( 'carousel', 'section anchor', 'dox' ) ) ); ?>">
				<?php get_template_part( 'images/icon/next' ); ?>
            </div>

        </div>
    </div>

</div>
