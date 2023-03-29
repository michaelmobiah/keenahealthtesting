/*jslint browser long:true */
/*global window */

/**
 * Sticky - Clone
 * @description Clone sticky in a DOM
 * @version 1.0.2
 * @deprecated
 */

(function () {
    "use strict";

    const stickies = document.querySelectorAll(".js-sticky");
    const stickyContainer = document.querySelectorAll(".js-sticky-container")[0];

    // Start
    let stickyStart;

    /**
     * Stick the Element
     *
     * @param element
     * @param start
     */
    function forqySticky(element, start) {

        // Add 'is-sticky' class
        element.classList.add("is-sticky");

        document.addEventListener("scroll", function () {

            if (document.scrollingElement.scrollTop >= start) {
                // Visible
                element.classList.add("is-sticky-visible");
                element.classList.remove("is-sticky-hidden");
                element.setAttribute("aria-hidden", "false");
            } else {
                // Hidden
                element.classList.add("is-sticky-hidden");
                element.classList.remove("is-sticky-visible");
                element.setAttribute("aria-hidden", "true");
            }

        });
    }

    /**
     * Create a Sticky Clone
     *
     * @param element
     * @param container
     * @param start
     */
    function forqyStickyClone(element, container, start) {

        // Create clone
        const stickyClone = element.cloneNode(true);

        // Find elements
        const all = stickyClone.querySelectorAll("*");
        const links = stickyClone.querySelectorAll("a");
        const navs = stickyClone.querySelectorAll("nav");

        // Add class
        stickyClone.classList.add("sticky-clone");
        // Add 'aria-hidden' attribute
        stickyClone.setAttribute("aria-hidden", "true");

        // Add/remove attributes of the clone

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

        // Append clone
        container.insertBefore(stickyClone, container.firstChild);

        // Stick clone
        forqySticky(stickyClone, start);
    }

    /**
     * Init Stickies
     */
    stickies.forEach(function (sticky) {

        // Position of sticky
        const position = sticky.getBoundingClientRect();

        if (sticky.getAttribute("data-start")) {
            if (sticky.getAttribute("data-start") === "top") {
                stickyStart = position.top;
            } else if (sticky.getAttribute("data-start") === "bottom") {
                stickyStart = position.bottom;
            } else {
                stickyStart = sticky.getAttribute("data-start");
            }
        } else {
            stickyStart = document.documentElement.clientHeight;
        }

        forqyStickyClone(sticky, stickyContainer, stickyStart);
    });

}());