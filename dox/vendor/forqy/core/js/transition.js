/*jslint browser this:true long:true */
/*global window, jQuery */

/**
 * Transition
 *
 * @version     1.0.2
 * @requires    jQuery
 */

(function ($) {
    "use strict";

    const body = $("body");

    /**
     * Transition
     * @param link
     */
    function forqyTransition(link) {

        link.each(function () {

            if (location.hostname === this.hostname || !this.hostname.length) {
                const url = $(this).attr("href");

                $(this).on("click", function (e) {
                    e.preventDefault();

                    setTimeout(function () {
                        body.addClass("transition-out");
                    }, 200);

                    setTimeout(function () {
                        window.location = url;
                    }, 400);

                });
            }
        });

    }

    forqyTransition($("a:not([target='_blank']):not([href*='#']):not([href*='mailto:']):not([href*='tel:']):not([class*='ajax']):not([class*='js-image']):not([class*='pswp__button']):not([class*='remove']):not([href*='.png']):not([href*='.jpg']):not([href*='.gif']):not([class*='woocommerce-MyAccount-downloads-file'])"));

}(jQuery));