/*jslint browser this:true long:true */
/*global window */

/**
 * Navigation
 *
 * @description     Open/Close Navigation
 * @version         1.0.3
 */

(function () {
    "use strict";

    const body = document.getElementsByTagName("body")[0];

    const site = document.querySelectorAll(".js-site")[0];

    const navigations = document.querySelectorAll(".js-navigation");
    const navigationTriggers = document.querySelectorAll(".js-navigation-trigger");
    const navigationClosers = document.querySelectorAll(".js-navigation-close");

    const navigationLinksAnchor = document.querySelectorAll(".js-navigation a[href*='#']");
    const navigationLinksAnchorEmpty = document.querySelectorAll(".js-navigation a[href='#']");

    // Navigation
    let isNavigationOpen = false;

    // Focus
    let returnFocus;

    // Touch
    let touchstartX = 0;
    let touchstartY = 0;

    /**
     * Relocate the Navigation
     *
     * @param element
     * @param location
     * @param target
     */
    function forqyNavigationRelocate(element, location, target) {

        const viewportWidth = window.innerWidth;
        const viewportBreakpoint = element.getAttribute("data-breakpoint") ? element.getAttribute("data-breakpoint") : '1024';

        if (viewportWidth < viewportBreakpoint || body.classList.contains("navigation-mobile-enabled")) {
            target.insertAdjacentElement("afterbegin", element);
            element.classList.add("relocated");
        } else {
            location.appendChild(element);
            element.classList.remove("relocated");
        }

    }

    /**
     * Open Navigation
     *
     * @param trigger
     * @param element
     */
    function forqyNavigationOpen(trigger, element) {
        isNavigationOpen = true;

        const navigationID = element.getAttribute("data-navigation");

        // FOCUS Return To
        returnFocus = document.activeElement;

        // TRIGGER
        // Add 'expanded' Class to Trigger
        trigger.classList.add("expanded");
        // Change 'aria-expanded' Attribute to 'true'
        trigger.setAttribute("aria-expanded", "true");

        // NAVIGATION
        // Add 'active' Class to Navigation
        element.classList.add("active");

        // BODY
        // Add 'active' Class to <body>
        body.classList.add("navigation-active");
        body.classList.add("navigation-active--" + navigationID);

        // FOCUS Closer
        const closer = element.querySelector(".js-navigation-close");

        if (closer && isNavigationOpen) {
            Promise.resolve(1).then(function resolve() {
                closer.focus();
            });
        }

        document.body.addEventListener(
            "focus",
            (ev) => {
                if (closer && isNavigationOpen && !ev.target.closest(".js-navigation[data-navigation=" + navigationID + "]")) {
                    closer.focus();
                }
            }, {capture: true}
        );
    }

    /**
     * Close Navigation
     *
     * @param element
     * @param focus
     */
    function forqyNavigationClose(element, focus = true) {

        isNavigationOpen = false;

        const navigationID = element.getAttribute("data-navigation");

        // TRIGGER
        // Remove 'expanded' Class on Trigger
        const triggers = document.querySelectorAll(".js-navigation-trigger.expanded");

        triggers.forEach(function (trigger) {

            Promise.resolve(1).then(function resolve() {

                // Remove 'expanded' Class on Trigger
                trigger.classList.remove("expanded");
                // Change 'aria-expanded' Attribute to 'false'
                trigger.setAttribute("aria-expanded", "false");

            });
        });

        // NAVIGATION
        // Remove 'active' Class from Navigation with 'closing' Delay
        if (element.classList.contains("active")) {
            element.classList.add("closing");

            setTimeout(function () {
                element.classList.remove("closing");
                element.classList.remove("active");
            }, 500); // +100ms More Then CSS Transition
        }

        // BODY
        // Remove 'navigation-active' Class from <body> with 'navigation-closing' Delay
        if (body.classList.contains("navigation-active")) {
            body.classList.add("navigation-closing");

            setTimeout(function () {
                body.classList.remove("navigation-closing");
                body.classList.remove("navigation-active");
                body.classList.remove("navigation-active--" + navigationID);
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
     * Relocate Navigations
     */
    navigations.forEach(function (navigation) {

        const container = navigation.closest(".js-navigation-container");

        forqyNavigationRelocate(navigation, container, site);

        // Relocate Navigation On Resize
        window.addEventListener("resize", function () {
            forqyNavigationRelocate(navigation, container, site);
        });
    });

    /**
     * Prevent Default on Empty Anchor Links
     */
    navigationLinksAnchorEmpty.forEach(function (navigationLinkAnchorEmpty) {

        navigationLinkAnchorEmpty.addEventListener("click", function (event) {
            event.preventDefault();
        });
    });

    /**
     * Open Navigation on Click to Trigger
     */
    navigationTriggers.forEach(function (navigationTrigger) {

        const navigationID = navigationTrigger.getAttribute("data-navigation");
        const navigationToOpen = document.querySelectorAll(".js-navigation[data-navigation=" + navigationID + "]")[0];

        // Find Clicked Trigger in a Document - Due to Event Delegation of Cloned Elements like Cloned Header
        document.addEventListener("click", function (event) {

            if (event.target && event.target.matches(".js-navigation-trigger[data-navigation=" + navigationID + "]")) {
                event.preventDefault();

                forqyNavigationOpen(event.target, navigationToOpen);
            }
        });

    });

    /**
     * Close Navigation on Click to Closer
     */
    navigationClosers.forEach(function (navigationCloser) {

        const navigationsToClose = document.querySelectorAll(".js-navigation");

        navigationCloser.addEventListener("click", function (event) {

            navigationsToClose.forEach(function (navigation) {

                if (navigation.classList.contains("active")) {
                    event.preventDefault();

                    forqyNavigationClose(navigation);
                }
            });
        });

    });

    /**
     * Close Navigation on Click to Anchor Link
     */
    navigationLinksAnchor.forEach(function (navigationLinkAnchor) {

        navigationLinkAnchor.addEventListener("click", function (event) {

            const navigation = this.closest(".js-navigation");

            forqyNavigationClose(navigation, false);
        });
    });

    /**
     * Close Navigation on Escape Key
     */
    document.addEventListener("keyup", function (event) {

        const key = event.key;
        const navigationsToClose = document.querySelectorAll(".js-navigation");

        if (key === "Escape" || key === "Esc") {

            navigationsToClose.forEach(function (navigation) {

                if (navigation.classList.contains("active")) {
                    forqyNavigationClose(navigation);
                }
            });
        }
    });

    /**
     * Close Navigation on Swipe
     */
    navigations.forEach(function (navigation) {

        navigation.addEventListener("touchstart", function (event) {
            touchstartX = event.changedTouches[0].screenX;
            touchstartY = event.changedTouches[0].screenY;
        }, {passive: true});

        navigation.addEventListener("touchend", function (event) {

            const diffX = event.changedTouches[0].screenX - touchstartX;
            const diffY = event.changedTouches[0].screenY - touchstartY;

            const ratioX = Math.abs(diffX / diffY);
            const ratioY = Math.abs(diffY / diffX);

            // Navigation
            const navigationID = this.getAttribute("data-navigation");
            const navigationsToClose = document.querySelectorAll(".js-navigation[data-navigation=" + navigationID + "]");

            navigationsToClose.forEach(function (navigation) {

                const navigationPosition = navigation.getAttribute("data-position");

                if (ratioX > ratioY) {

                    // Position on Right
                    if (navigationPosition === "right" && diffX >= 0) {
                        forqyNavigationClose(navigation);
                    }

                    // Position on Left
                    if (navigationPosition === "left" && diffX <= 0) {
                        forqyNavigationClose(navigation);
                    }
                }
            });
        }, {passive: true});
    });

}());