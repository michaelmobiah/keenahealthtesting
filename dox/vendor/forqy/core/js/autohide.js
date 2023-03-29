/*jslint browser */
/*global window */

/**
 * Auto-hide
 *
 * @description     Auto-hide Element on Scroll
 * @version         1.0.3
 */

(function () {
    "use strict";

    const autohides = document.querySelectorAll(".js-autohide");

    // Auto-hide scroll
    let autohideScroll = 0;
    // Auto-hide scroll current
    let autohideScrollCurrent = window.pageYOffset;
    let autohideScrollCurrentTop = document.scrollingElement.scrollTop;

    // Auto-hide start
    let autohideStart;

    // Classes
    const autohideClassHidden = "is-hidden";
    const autohideClassVisible = "is-visible";
    const autohideClassOnTop = "is-on-top";

    /**
     * Auto-hide Classes
     *
     * @param element
     * @param start
     */
    function forqyAutoHide(element, start) {

        // Scrolling listener
        document.addEventListener("scroll", function () {

            Promise.resolve(1).then(function resolve() {

                // Auto-hide scroll current
                autohideScrollCurrent = window.pageYOffset;
                autohideScrollCurrentTop = document.scrollingElement.scrollTop;

                /**
                 * Auto-hide Active
                 */
                if (autohideScrollCurrentTop >= start) {
                    element.classList.add(autohideClassVisible);
                    element.setAttribute("aria-hidden", "false");

                    if (autohideScrollCurrent < autohideScroll) {
                        // Visible - Scrolling ↑
                        element.classList.remove(autohideClassOnTop);
                        element.classList.add(autohideClassVisible);
                        element.classList.remove(autohideClassHidden);
                        element.setAttribute("aria-hidden", "false");
                    } else if (autohideScrollCurrent > autohideScroll) {
                        // Hidden - Scrolling ↓
                        element.classList.remove(autohideClassOnTop);
                        element.classList.remove(autohideClassVisible);
                        element.classList.add(autohideClassHidden);
                        element.setAttribute("aria-hidden", "true");
                    }
                } else if (autohideScrollCurrent === 0) {
                    // Is On Top
                    element.classList.add(autohideClassOnTop);
                    element.classList.remove(autohideClassVisible);
                    element.classList.remove(autohideClassHidden);
                    element.setAttribute("aria-hidden", "false");
                } else {
                    element.classList.remove(autohideClassOnTop);
                    element.classList.remove(autohideClassVisible);
                    element.classList.remove(autohideClassHidden);
                    element.setAttribute("aria-hidden", "false");
                }
            });

            autohideScroll = autohideScrollCurrent;

        }, false);

    }

    /**
     * Init Auto-hide
     */
    autohides.forEach(function (autohide) {

        // Position of auto-hide
        const positionTop = autohide.getBoundingClientRect().top + document.documentElement.scrollTop;
        const positionBottom = autohide.getBoundingClientRect().top + autohide.offsetHeight + document.documentElement.scrollTop;

        if (autohide.getAttribute("data-autohide-start")) {
            if (autohide.getAttribute("data-autohide-start") === "top") {
                autohideStart = positionTop;
            } else if (autohide.getAttribute("data-autohide-start") === "bottom") {
                autohideStart = positionBottom;
            } else {
                autohideStart = autohide.getAttribute("data-autohide-start");
            }
        } else {
            // Default
            autohideStart = positionBottom;
        }

        forqyAutoHide(autohide, autohideStart);

    });

}());