/*jslint browser this:true */

/**
 * Links
 *
 * @description     Smooth scrolling as a fallback for the Safari browser.
 *                  Modern browsers use the CSS property 'scroll-behavior: smooth'.
 *                  https://caniuse.com/css-scroll-behavior
 * @version         1.0.0
 */

(function () {
    "use strict";

    document.querySelectorAll("a[href^='#']").forEach(function (anchor) {

        anchor.addEventListener("click", function (event) {

            // Get 'href' Attribute
            const href = this.getAttribute("href");

            if (href !== "#" && href !== "#reviews") { // #reviews: WooCommerce single product reviews tab anchor
                event.preventDefault();

                // Scroll Into View
                document.querySelector(href).scrollIntoView({
                    behavior: "smooth"
                });
            }
        });
    });

}());