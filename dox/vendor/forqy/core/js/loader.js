/*jslint browser */
/*global document */

/**
 * Loader
 *
 * @version 1.0.1
 */

(function () {
    "use strict";

    document.body.onload = function () {

        const body = document.getElementsByTagName("body");
        const loader = document.getElementById("js-loader");

        setTimeout(function () {

            if (!body.classList.contains("loading-done")) {
                loader.classList.add("loading-done");
            }

            if (!loader.classList.contains("loading-done")) {
                loader.classList.add("loading-done");
            }
        }, 600);
    };

}());