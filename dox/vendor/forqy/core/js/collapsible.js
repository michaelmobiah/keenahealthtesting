/*jslint browser this:true long:true */

/**
 * Collapsible
 *
 * @description     An interactive component which expands/collapses a panel.
 * @version         1.0.1
 */

(function () {
    "use strict";

    // Collapsible Triggers
    const collapsibles = document.querySelectorAll(".js-collapsible");

    // Focus
    let returnFocus;

    collapsibles.forEach(function (collapsible) {

        collapsible.addEventListener("click", function (event) {

            // ID
            const collapsibleID = collapsible.getAttribute("data-collapsible");

            // FOCUS Return To
            returnFocus = document.activeElement;
            // console.log(returnFocus);

            if (collapsibleID) {

                // All Associated Collapsible Triggers
                const triggers = document.querySelectorAll(".js-collapsible[data-collapsible=" + collapsibleID + "]");

                triggers.forEach(function (trigger) {

                    const triggerExpanded = (trigger.getAttribute("aria-expanded") === "true");

                    // Change 'aria-expanded' Attribute to Opposite State
                    trigger.setAttribute("aria-expanded", String(!triggerExpanded));

                    // Toggle 'active' Class
                    if (triggerExpanded) {
                        trigger.classList.remove("active");
                    } else {
                        trigger.classList.add("active");
                    }

                });

                // All Associated Collapsible Sections
                const sections = document.querySelectorAll(".js-collapsible__section[data-collapsible=" + collapsibleID + "]");

                sections.forEach(function (section) {

                    const sectionHidden = (section.getAttribute("aria-hidden") === "true");

                    // Change 'aria-hidden' Attribute to Opposite State
                    section.setAttribute("aria-hidden", String(!sectionHidden));

                    // All Associated Required Fields
                    const fields = section.querySelectorAll("[data-required=true]");

                    // Toggle 'active' Class
                    if (sectionHidden) {

                        section.classList.add("active");

                        // FOCUS Closer
                        const closer = section.querySelector(".js-collapsible__close");

                        if (closer) {
                            setTimeout(function () {
                                closer.focus();
                            }, 30);
                        }

                        document.body.addEventListener(
                            "focus",
                            (ev) => {
                                if (closer && !ev.target.closest(".js-collapsible[data-collapsible=" + collapsibleID + "]")) {
                                    closer.focus();
                                }
                            }, {capture: true}
                        );

                        // Required Fields
                        fields.forEach(function (field) {
                            field.setAttribute("aria-required", "true");
                            field.setAttribute("required", "true");
                        });

                    } else {

                        section.classList.remove("active");

                        // FOCUS
                        window.requestAnimationFrame(() => {
                            setTimeout(function () {
                                returnFocus.focus();
                            }, 30);
                        });

                        // Required Fields
                        fields.forEach(function (field) {
                            field.removeAttribute("aria-required");
                            field.removeAttribute("required");
                        });
                    }

                });

            }

        });

    });

}());