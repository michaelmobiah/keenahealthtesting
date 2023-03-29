<?php

/*

PhotoSwipe Template

*/

?>
<div class="pswp fy-pswp js-pswp" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="pswp__bg"></div>

    <div class="pswp__scroll-wrap">

        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>

        <div class="pswp__ui pswp__ui--hidden">
            <div class="pswp__top-bar">
                <div class="pswp__counter"></div>

                <button type="button" class="pswp__button pswp__button--close" title="<?php esc_attr_e( 'Close (Esc)', 'dox' ); ?>">
                    <span class="screen-reader-text"><?php esc_html_e( 'Close (Esc)', 'dox' ); ?></span>
                </button>
                <button type="button" class="pswp__button pswp__button--share" title="<?php esc_attr_e( 'Share', 'dox' ); ?>">
                    <span class="screen-reader-text"><?php esc_html_e( 'Share', 'dox' ); ?></span>
                </button>
                <button type="button" class="pswp__button pswp__button--fs" title="<?php esc_attr_e( 'Toggle Full-screen', 'dox' ); ?>">
                    <span class="screen-reader-text"><?php esc_html_e( 'Toggle Full-screen', 'dox' ); ?></span>
                </button>
                <button class="pswp__button pswp__button--zoom" title="<?php esc_attr_e( 'Zoom In/Out', 'dox' ); ?>">
                    <span class="screen-reader-text"><?php esc_html_e( 'Zoom In/Out', 'dox' ); ?></span>
                </button>

                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                        </div>
                    </div>
                </div>
            </div>

            <button type="button" class="pswp__button pswp__button--arrow--left" title="<?php esc_attr_e( 'Previous', 'dox' ); ?>">
                <span class="screen-reader-text"><?php esc_html_e( 'Previous', 'dox' ); ?></span>
            </button>
            <button type="button" class="pswp__button pswp__button--arrow--right" title="<?php esc_attr_e( 'Next', 'dox' ); ?>">
                <span class="screen-reader-text"><?php esc_html_e( 'Next', 'dox' ); ?></span>
            </button>

            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>
        </div>
    </div>
</div>
