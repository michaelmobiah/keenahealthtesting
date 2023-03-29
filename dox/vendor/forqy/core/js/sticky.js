/*jslint browser long:true */
/*global window */

/**
 * Sticky
 *
 * @description     Sticky with auto-hide using clone in a DOM
 * @version         1.0.1
 */

(function () {
    "use strict";

    const stickies = document.querySelectorAll(".js-sticky");
    const stickyContainer = document.querySelectorAll(".js-sticky-container")[0];

    // Sticky counter
    let stickyCounter = 0;

    // Sticky start
    let stickyStart;

    // Auto-hide scroll
    let stickyScroll = 0;
    // Auto-hide scroll current
    let stickyScrollCurrent = window.pageYOffset;
    let stickyScrollCurrentTop = document.scrollingElement.scrollTop;

    // Classes
    const stickyClassHidden = "is-hidden";
    const stickyClassVisible = "is-visible";
    const stickyClassOnTop = "is-on-top";

    /**
     * Stick the Element
     *
     * @param element
     * @param start
     * @param counter
     */
    function forqySticky(element, start, counter) {

        // Scrolling listener
        document.addEventListener("scroll", function () {

            Promise.resolve(1).then(function resolve() {

                // Auto-hide scroll current
                stickyScrollCurrent = window.pageYOffset;
                stickyScrollCurrentTop = document.scrollingElement.scrollTop;

                /**
                 * Toggle State of Auto-hide
                 */
                if (element.classList.contains("js-autohide")) {
                    /**
                     * Auto-hide Active
                     */
                    if (stickyScrollCurrentTop >= start) {

                        if (stickyScrollCurrent < stickyScroll) {
                            // Visible - Scrolling ↑
                            element.classList.remove(stickyClassOnTop);
                            element.classList.add(stickyClassVisible);
                            element.classList.remove(stickyClassHidden);
                            element.setAttribute("aria-hidden", "false");
                            document.body.classList.add(stickyClassVisible + "-sticky-" + counter);
                        } else if (stickyScrollCurrent > stickyScroll) {
                            // Hidden - Scrolling ↓
                            element.classList.remove(stickyClassOnTop);
                            element.classList.remove(stickyClassVisible);
                            element.classList.add(stickyClassHidden);
                            element.setAttribute("aria-hidden", "true");
                            document.body.classList.remove(stickyClassVisible + "-sticky-" + counter);
                        }
                    } else if (stickyScrollCurrent === 0) {
                        // Is On Top
                        element.classList.add(stickyClassOnTop);
                        element.classList.remove(stickyClassVisible);
                        element.classList.remove(stickyClassHidden);
                        element.setAttribute("aria-hidden", "true");
                    } else {
                        element.classList.remove(stickyClassOnTop);
                        element.classList.remove(stickyClassVisible);
                        element.classList.remove(stickyClassHidden);
                        element.setAttribute("aria-hidden", "true");
                    }

                } else {
                    /**
                     * Auto-hide Inactive
                     */
                    if (stickyScrollCurrentTop >= start) {
                        // Visible
                        element.classList.add(stickyClassVisible);
                        element.classList.remove(stickyClassHidden);
                        element.setAttribute("aria-hidden", "false");
                        document.body.classList.add(stickyClassVisible + "-sticky-" + counter);
                    } else {
                        // Hidden
                        element.classList.remove(stickyClassVisible);
                        element.classList.add(stickyClassHidden);
                        element.setAttribute("aria-hidden", "true");
                        document.body.classList.remove(stickyClassVisible + "-sticky-" + counter);
                    }
                }
            });

            stickyScroll = stickyScrollCurrent;

        }, false);

    }

    /**
     * Create a Sticky Clone
     *
     * @param element
     * @param container
     * @param start
     * @param counter
     */
    function forqyStickyClone(element, container, start, counter) {

        /**
         * Create Clone
         */
        const stickyClone = element.cloneNode(true);

        /**
         * Add/remove Attributes of the Clone
         */
        const all = stickyClone.querySelectorAll("*");
        const links = stickyClone.querySelectorAll("a");
        const navs = stickyClone.querySelectorAll("nav");

        // Add 'sticky-clone' class
        stickyClone.classList.add("sticky-clone");
        stickyClone.classList.add("sticky-clone-" + counter);
        // Add 'is-sticky' class
        stickyClone.classList.add("is-sticky");
        // Add 'aria-hidden' attribute
        stickyClone.setAttribute("aria-hidden", "true");
        all.forEach(function (item) {
            item.removeAttribute("id");
        });
        // Navs
        navs.forEach(function (nav) {
            // Add negative 'tabindex' to links to avoid focus
            nav.removeAttribute("aria-label");
            nav.removeAttribute("itemscope");
            nav.removeAttribute("itemtype");
            nav.removeAttribute("data-navigation");
        });
        // Links
        links.forEach(function (link) {
            // Add negative 'tabindex' to links to avoid focus
            link.setAttribute("tabindex", "-1");
        });

        /**
         * Append Clone
         */
        container.insertBefore(stickyClone, container.firstChild);

        /**
         * Stick Clone
         */
        forqySticky(stickyClone, start, counter);

    }

    /**
     * Init Stickies
     */
    stickies.forEach(function (sticky) {

        // Position of sticky
        const positionTop = sticky.getBoundingClientRect().top + document.documentElement.scrollTop;
        const positionBottom = sticky.getBoundingClientRect().top + sticky.offsetHeight + document.documentElement.scrollTop;

        if (sticky.getAttribute("data-sticky-start")) {
            if (sticky.getAttribute("data-sticky-start") === "top") {
                stickyStart = positionTop;
            } else if (sticky.getAttribute("data-sticky-start") === "bottom") {
                stickyStart = positionBottom;
            } else {
                stickyStart = sticky.getAttribute("data-sticky-start");
            }
        } else {
            // Default
            stickyStart = document.documentElement.clientHeight;
        }

        forqyStickyClone(sticky, stickyContainer, stickyStart, stickyCounter);

        // Increase counter
        stickyCounter = stickyCounter + 1;

    });

}());