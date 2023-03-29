/*jslint browser */
/*global window, Colcade */

/**
 * Colcade
 *
 * @version     1.0.0
 * @requires    Colcade
 * @url         https://github.com/desandro/colcade
 */

(function () {
    "use strict";

    const forqyColcades = document.querySelectorAll(".js-masonry");

    forqyColcades.forEach(function (forqyColcade) {

        const colcade = new Colcade(forqyColcade, {
            columns: ".js-masonry-column",
            items: ".js-masonry-item"
        });
    });

}());