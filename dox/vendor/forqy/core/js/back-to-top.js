/*jslint browser */
/*global window */

/**
 * Back to Top
 *
 * @version 1.0.1
 */

(function () {
    "use strict";

    const forqyBackToTop = document.querySelectorAll(".js-back-to-top")[0];

    /**
     * Back to Top State
     *
     * @param element
     */
    function forqyBackToTopState(element) {

        // Back to Top Starts On
        const backToTopStart = document.documentElement.clientHeight;

        if (document.scrollingElement.scrollTop >= backToTopStart) {
            // Is Active
            element.classList.add("active");
        } else {
            // Is Inactive
            element.classList.remove("active");
        }
    }

    /**
     * Check Back to Top State
     */
    if (forqyBackToTop) {

        forqyBackToTopState(forqyBackToTop);

        // On Scroll
        document.addEventListener("scroll", function () {
            forqyBackToTopState(forqyBackToTop);
        });
    }

}());