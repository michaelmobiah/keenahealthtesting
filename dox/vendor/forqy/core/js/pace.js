/*jslint browser */
/*global window, Pace */

/**
 * Pace
 *
 * @version     1.0.1
 * @requires    Pace
 * @url         https://github.com/CodeByZach/pace/
 */

(function () {
    "use strict";

    window.paceOptions = {
        ajax: false,
        eventLag: false,
        restartOnRequestAfter: false,
        document: true,
        elements: {
            selectors: ["body"]
        }
    };

    Pace.on("done", function () {
        document.body.classList.add("loading-hiding");

        if (document.body.classList.contains("loading-hiding")) {
            setTimeout(function () {
                document.body.classList.remove("loading-hiding");
                document.body.classList.add("loading-hidden");
            }, 1200);
        }
    });

}());