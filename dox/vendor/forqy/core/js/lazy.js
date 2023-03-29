/*jslint browser */
/*global window, LazyLoad */

/**
 * Lazy
 *
 * @version     1.0.0
 * @requires    LazyLoad
 * @url         https://github.com/verlok/vanilla-lazyload
 */

(function () {
    "use strict";

    const forqyLazyLoad = new LazyLoad({
        elements_selector: ".js-lazy",
        class_loading: "lazy-loading",
        class_loaded: "lazy-loaded",
        class_error: "lazy-error",
        class_entered: "lazy-entered",
        class_exited: "lazy-exited",
        use_native: true,

        callback_loaded: function (el) {

            const parent = el.parentNode;
            parent.classList.add("lazy-loaded");

        }
    });

}());