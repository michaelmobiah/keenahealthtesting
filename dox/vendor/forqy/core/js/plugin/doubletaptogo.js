/*jslint browser long:true */
/*global window, jQuery */

/**
 * Double Tap to Go
 * @version 1.0.0
 * @requires jQuery
 */

(function ($) {
    "use strict";

    let curItem = false;

    /**
     * Handle Touch
     * @param e
     */
    function forqyDTTGHandleTouch(e) {
        const parents = $(e.target).parents();
        let resetItem = true;

        for (let i = 0; i < parents.length; i++) {

            if (parents[i] === curItem[0]) {
                resetItem = false;
            }
        }

        if (resetItem) {
            curItem = false;
        }
    }

    /**
     * forqyDoubleTapToGo to jQuery.fn Object
     * @param action
     * @returns {boolean|jQuery}
     */
    $.fn.forqyDoubleTapToGo = function (action) {

        if (!("ontouchstart" in window) &&
            !navigator.msMaxTouchPoints &&
            !navigator.userAgent.toLowerCase().match(/windows\sphone\sos\s7/i)) {
            return false;
        }

        if (action === "unbind") {

            this.each(function () {
                $(this).off();
                $(document).off("click touchstart MSPointerDown", forqyDTTGHandleTouch);
            });

        } else {

            this.each(function () {

                $(this).on("click", function (e) {
                    const item = $(this);

                    if (item[0] !== curItem[0]) {
                        e.preventDefault();
                        curItem = item;
                    }
                });

                $(document).on("click touchstart MSPointerDown", forqyDTTGHandleTouch);

            });

        }

        return this;

    };

}(jQuery, window, document));