/*jslint browser this:true long:true */
/*global window */

/**
 * Off
 *
 * @description     Off-canvas
 * @version         1.0.0
 */

const forqyOff = function (options) {
    "use strict";

    /**
     * Defaults
     */
    const defaults = {
        name: "off",
        breakpoint: "1024",
        selector: ".js-off",
        selectorContainer: ".js-off__container", // Container around the off to relocate
        selectorTrigger: ".js-off__trigger", // Trigger to open the off
        selectorCloser: ".js-off__close", // Closer to close the off
        selectorLocation: ".js-off__location", // Location of the relocated off element
        selectorFocusables: "a[href]:not([disabled]), input[type='text']:not([disabled]), input[type='search']:not([disabled]), button:not([disabled])", // Focusable elements within the off
        transitionDuration: 500 // ms // Should be increased by 100ms of CSS transition duration
    };

    /**
     * Settings
     * @type {any}
     */
    const settings = Object.assign({}, defaults, options); // Merge 'options' with 'defaults'

    /**
     * Variables
     */
    const body = document.getElementsByTagName("body")[0];
    const location = document.querySelectorAll(settings.selectorLocation)[0] ? document.querySelectorAll(settings.selectorLocation)[0] : body;
    const offs = document.querySelectorAll(settings.selector);
    const offTriggers = document.querySelectorAll(settings.selectorTrigger);
    const offClosers = document.querySelectorAll(settings.selectorCloser);

    // Off
    let isOffOpen = false;

    // Focus
    let returnFocus;

    // Touch
    let touchstartX = 0;
    let touchstartY = 0;


    /**
     * Off Init
     *
     * @param element
     * @param container
     * @param location
     */
    function forqyOffInit(element, container, location) {

        const viewportWidth = window.innerWidth;
        const viewportBreakpoint = element.getAttribute("data-" + settings.name + "-breakpoint") ? element.getAttribute("data-" + settings.name + "-breakpoint") : settings.breakpoint;

        if (viewportWidth < viewportBreakpoint || viewportBreakpoint === "all" || body.classList.contains(settings.name + "-all--enabled")) {

            element.classList.add("initialized");
            element.setAttribute("aria-hidden", "true");

            /**
             * Relocate to the Target Location If Not Disabled by Attribute 'data-off-relocate=false'
             */
            if (location && !element.hasAttribute("data-" + settings.name + "-relocate")) {
                location.insertAdjacentElement("afterbegin", element);
                element.classList.add("relocated");
            }
        } else {

            element.classList.remove("initialized");
            element.removeAttribute("aria-hidden", "true");

            /**
             * Append Back to the Original Container
             */
            if (container && !element.hasAttribute("data-" + settings.name + "-relocate")) {
                container.appendChild(element);
                element.classList.remove("relocated");
            }
        }

    }

    /**
     * Get Focusable Elements of the Off
     *
     * @param element
     * @returns {*[]}
     */
    function forqyOffGetFocusableElements(element) {
        return [...element.querySelectorAll(settings.selectorFocusables)].filter(el => !el.hasAttribute('disabled') && !el.getAttribute("aria-hidden"));
    }

    /**
     * Off Focus Trap
     *
     * @param element
     */
    function forqyOffFocusTrap(element) {

        // All focusable elements within element
        const focusables = forqyOffGetFocusableElements(element);
        // First/Last focusable elements
        const focusableFirst = focusables[0];
        const focusableLast = focusables[focusables.length - 1];

        // Focus the first element immediately
        focusableFirst.focus();

        element.addEventListener("keydown", function (event) {

            if (!(event.key === "Tab" || event.keyCode === 9)) {
                return;
            }

            if (event.shiftKey) { // Shift + Tab
                if (document.activeElement === focusableFirst) {
                    focusableLast.focus();
                    event.preventDefault();
                }
            } else { // Tab
                if (document.activeElement === focusableLast) {
                    focusableFirst.focus();
                    event.preventDefault();
                }
            }
        });
    }

    /**
     * Open Off
     *
     * @param trigger
     * @param element
     */
    function forqyOffOpen(trigger, element) {
        isOffOpen = true;

        const offID = element.getAttribute("data-" + settings.name);

        // FOCUS return to the trigger
        returnFocus = trigger;

        // TRIGGER
        // Add 'expanded' class to the trigger
        trigger.classList.add("expanded");
        // Change 'aria-expanded' attribute to 'true'
        trigger.setAttribute("aria-expanded", "true");

        // OFF
        // Add 'active' class to the off
        element.classList.add("active");
        // Change 'aria-hidden' attribute to 'false' if is set
        if (element.hasAttribute("aria-hidden")) {
            element.setAttribute("aria-hidden", "false");
        }

        // BODY
        // Add 'active' class to the <body>
        body.classList.add("off-active");
        body.classList.add("off-active--" + offID);

        // FOCUSER

        if (isOffOpen) {

            Promise.resolve(1).then(function resolve() {

                // Focus trap within opened off
                forqyOffFocusTrap(element);
            });
        }
    }

    /**
     * Close Off
     *
     * @param element
     * @param focus
     */
    function forqyOffClose(element, focus = true) {

        isOffOpen = false;

        const offID = element.getAttribute("data-" + settings.name);

        // TRIGGER
        // Remove 'expanded' class of the trigger
        const offTriggersExpanded = document.querySelectorAll(settings.selectorTrigger + ".expanded");

        offTriggersExpanded.forEach(function (triggerExpanded) {

            Promise.resolve(1).then(function resolve() {

                // Remove 'expanded' class on trigger
                triggerExpanded.classList.remove("expanded");
                // Change 'aria-expanded' attribute to 'false'
                triggerExpanded.setAttribute("aria-expanded", "false");

            });
        });

        // OFF
        // Remove 'active' class of the off with 'closing' delay
        if (element.classList.contains("active")) {
            element.classList.add("closing");

            setTimeout(function () {
                element.classList.remove("closing");
                element.classList.remove("active");
            }, settings.transitionDuration);
        }
        // Change 'aria-hidden' attribute to 'true'
        if (element.hasAttribute("aria-hidden")) {
            element.setAttribute("aria-hidden", "true");
        }

        // BODY
        // Remove 'off-active' class of the <body> with 'off-closing' delay
        if (body.classList.contains("off-active")) {
            body.classList.add("off-closing");

            setTimeout(function () {
                body.classList.remove("off-closing");
                body.classList.remove("off-active");
                body.classList.remove("off-active--" + offID);
            }, settings.transitionDuration);
        }

        // FOCUS
        window.requestAnimationFrame(() => {
            if (focus && returnFocus) {
                Promise.resolve(1).then(function resolve() {
                    returnFocus.focus();
                });
            }
        });
    }

    /**
     * Off
     */
    offs.forEach(function (off) {

        const container = off.closest(settings.selectorContainer);

        const linksAnchor = off.querySelectorAll("a[href*='#']");
        const linksAnchorEmpty = off.querySelectorAll("a[href='#']");

        /**
         * Off Relocation
         */
        forqyOffInit(off, container, location);
        // Relocate off on resize
        window.addEventListener("resize", function () {
            forqyOffInit(off, container, location);
        });

        /**
         * Close Off on Click to Any Anchor Link
         */
        linksAnchor.forEach(function (linkAnchor) {

            linkAnchor.addEventListener("click", function () {

                const offToClose = this.closest(settings.selector);

                forqyOffClose(offToClose, false);
            });
        });

        /**
         * Prevent Default on Empty Anchor Link
         */
        linksAnchorEmpty.forEach(function (linkAnchorEmpty) {

            linkAnchorEmpty.addEventListener("click", function (event) {
                event.preventDefault();
            });
        });
    });

    /**
     * Open Off on Click to Trigger
     */
    offTriggers.forEach(function (offTrigger) {

        const offID = offTrigger.getAttribute("data-" + settings.name);
        const offToOpen = document.querySelectorAll(settings.selector + "[data-" + settings.name + "=" + offID + "]")[0];

        // Find clicked trigger in a document - due to event delegation of cloned elements like cloned header
        document.addEventListener("click", function (event) {

            if (event.target && event.target.matches(settings.selectorTrigger + "[data-" + settings.name + "=" + offID + "]")) {
                event.preventDefault();

                forqyOffOpen(event.target, offToOpen);
            }
        });

    });

    /**
     * Close Off on Click to Closer
     */
    offClosers.forEach(function (offCloser) {

        const offsToClose = document.querySelectorAll(settings.selector);

        offCloser.addEventListener("click", function (event) {

            offsToClose.forEach(function (off) {

                if (off.classList.contains("active")) {
                    event.preventDefault();

                    forqyOffClose(off);
                }
            });
        });

    });

    /**
     * Close Off on Escape Key
     */
    document.addEventListener("keyup", function (event) {

        const key = event.key;
        const offsToClose = document.querySelectorAll(settings.selector);

        if (key === "Escape" || key === "Esc") {

            offsToClose.forEach(function (off) {

                if (off.classList.contains("active")) {
                    forqyOffClose(off);
                }
            });
        }
    });

    /**
     * Close Off on Swipe
     */
    offs.forEach(function (off) {

        off.addEventListener("touchstart", function (event) {
            touchstartX = event.changedTouches[0].screenX;
            touchstartY = event.changedTouches[0].screenY;
        }, {passive: true});

        off.addEventListener("touchend", function (event) {

            const diffX = event.changedTouches[0].screenX - touchstartX;
            const diffY = event.changedTouches[0].screenY - touchstartY;

            const ratioX = Math.abs(diffX / diffY);
            const ratioY = Math.abs(diffY / diffX);

            // Off
            const offID = this.getAttribute("data-" + settings.name);
            const offsToClose = document.querySelectorAll(".js-" + settings.name + "[data-" + settings.name + "=" + offID + "]");

            offsToClose.forEach(function (off) {

                const offPosition = off.getAttribute("data-" + settings.name + "-position");

                if (ratioX > ratioY) {

                    // Position on right
                    if (offPosition === "right" && diffX >= 0) {
                        forqyOffClose(off);
                    }

                    // Position on left
                    if (offPosition === "left" && diffX <= 0) {
                        forqyOffClose(off);
                    }
                }

                if (ratioY > ratioX) {

                    // Position on top
                    if (offPosition === "top" && diffY <= 0) {
                        forqyOffClose(off);
                    }

                    // Position on bottom
                    if (offPosition === "bottom" && diffY >= 0) {
                        forqyOffClose(off);
                    }
                }
            });
        }, {passive: true});
    });

};

/**
 * Init the Off
 */
forqyOff();
// Navigation
forqyOff({
    name: "navigation",
    selector: ".js-navigation",
    selectorLocation: ".js-site",
    selectorContainer: ".js-navigation-container",
    selectorTrigger: ".js-navigation-trigger",
    selectorCloser: ".js-navigation-close"
});