/*jslint browser this:true long:true */
/*global window */

/**
 * Search
 *
 * @description     Open/Close Search
 * @version         1.0.0
 */

(function () {
    "use strict";

    const body = document.getElementsByTagName("body")[0];

    const search = document.querySelectorAll(".js-search")[0];
    const searchTriggers = document.querySelectorAll(".js-search-trigger");
    const searchClosers = document.querySelectorAll(".js-search-close");

    // Search
    let isSearchOpen = false;

    // Focus
    let returnFocus;

    // Touch
    let touchstartX = 0;
    let touchstartY = 0;

    /**
     * Open Search
     *
     * @param trigger
     * @param element
     */
    function forqySearchOpen(trigger, element) {
        isSearchOpen = true;

        // FOCUS Return To
        returnFocus = document.activeElement;

        // TRIGGER
        // Add 'expanded' Class to Trigger
        trigger.classList.add("expanded");
        // Change 'aria-expanded' Attribute to 'true'
        trigger.setAttribute("aria-expanded", "true");

        // SEARCH
        // Add 'active' Class to Search
        element.classList.add("active");
        // Change 'aria-hidden' Attribute to 'false'
        element.setAttribute("aria-hidden", "false");

        // BODY
        // Add 'active' Class to <body>
        body.classList.add("search-active");

        // FOCUS Input
        const input = element.querySelector("input[type='search']");

        if (input && isSearchOpen) {
            Promise.resolve(1).then(function resolve() {
                input.focus();
            });
        }

        document.body.addEventListener(
            "focus",
            (ev) => {
                if (input && isSearchOpen && !ev.target.closest(".js-search")) {
                    input.focus();
                }
            }, {capture: true}
        );
    }

    /**
     * Close Search
     *
     * @param element
     * @param focus
     */
    function forqySearchClose(element, focus = true) {

        isSearchOpen = false;

        // TRIGGER
        // Remove 'expanded' Class on Trigger
        const trigger = document.querySelectorAll(".js-search-trigger.expanded")[0];

        Promise.resolve(1).then(function resolve() {

            // Remove 'expanded' Class on Trigger
            trigger.classList.remove("expanded");
            // Change 'aria-expanded' Attribute to 'false'
            trigger.setAttribute("aria-expanded", "false");
        });

        // SEARCH
        // Remove 'active' Class from Search with 'closing' Delay
        if (element.classList.contains("active")) {
            element.classList.add("closing");
            // Change 'aria-hidden' Attribute to 'true'
            element.setAttribute("aria-hidden", "true");

            setTimeout(function () {
                element.classList.remove("closing");
                element.classList.remove("active");
            }, 500); // +100ms More Then CSS Transition
        }

        // BODY
        // Remove 'search-active' Class from <body> with 'search-closing' Delay
        if (body.classList.contains("search-active")) {
            body.classList.add("search-closing");

            setTimeout(function () {
                body.classList.remove("search-closing");
                body.classList.remove("search-active");
            }, 500); // +100ms More Then CSS Transition
        }

        // FOCUS
        window.requestAnimationFrame(() => {
            if (focus) {
                Promise.resolve(1).then(function resolve() {
                    returnFocus.focus();
                });
            }
        });
    }

    /**
     * Open Search on Click to Trigger
     */
    searchTriggers.forEach(function (searchTrigger) {

        // Find Clicked Trigger in a Document - Due to Event Delegation of Cloned Elements like Cloned Header
        searchTrigger.addEventListener("click", function (event) {

            event.preventDefault();
            forqySearchOpen(searchTrigger, search);
        });

    });

    /**
     * Close Search on Click to Closer
     */
    searchClosers.forEach(function (searchCloser) {

        searchCloser.addEventListener("click", function (event) {

            if (search.classList.contains("active")) {
                event.preventDefault();

                forqySearchClose(search);
            }
        });

    });

    /**
     * Close Search on Escape Key
     */
    document.addEventListener("keyup", function (event) {

        const key = event.key;

        if (key === "Escape" || key === "Esc") {

            if (search.classList.contains("active")) {
                forqySearchClose(search);
            }
        }
    });

    /**
     * Close Search on Swipe
     */
    search.addEventListener("touchstart", function (event) {
        touchstartX = event.changedTouches[0].screenX;
        touchstartY = event.changedTouches[0].screenY;
    }, {passive: true});

    search.addEventListener("touchend", function (event) {

        const diffX = event.changedTouches[0].screenX - touchstartX;
        const diffY = event.changedTouches[0].screenY - touchstartY;

        const ratioX = Math.abs(diffX / diffY);
        const ratioY = Math.abs(diffY / diffX);

        // Search
        const searchPosition = search.getAttribute("data-position");

        if (ratioY > ratioX) {

            // Position on Top
            if (searchPosition === "top" && diffY <= 0) {
                forqySearchClose(search);
            }
        }
    }, {passive: true});

}());