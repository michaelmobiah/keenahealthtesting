/*jslint browser long:true */
/*global window, Swiper */

/**
 * Carousel
 *
 * @version     1.0.0
 * @requires    Swiper
 * @url         https://github.com/nolimits4web/swiper
 */

(function () {
    "use strict";

    const forqyCarousel = new Swiper(".js-carousel", {
        effect: "slide",
        loop: false,
        speed: parseInt(parameter.speed),
        direction: "horizontal",
        threshold: 5,
        grabCursor: true,
        keyboard: true,
        noSwipingSelector: "a.fy-button,button,input",

        // Gutter
        spaceBetween: parseInt(parameter.spaceBetween),

        // Slides per View
        slidesPerView: 1,

        breakpoints: {
            768: {
                slidesPerView: 1
            },
            1024: {
                slidesPerView: 2
            },
            1280: {
                slidesPerView: 3
            },
            1600: {
                slidesPerView: 4
            }
        },

        // Progress
        watchSlidesProgress: true,
        watchSlidesVisibility: true,

        // Lazy
        preloadImages: false,
        lazy: {
            loadPrevNext: true
        },

        // Pagination
        pagination: {
            el: ".js-carousel-pagination",
            type: "bullets",
            clickable: true
        },

        // Navigation
        navigation: {
            nextEl: ".js-carousel-next",
            prevEl: ".js-carousel-prev"
        },

        // Accessibility
        a11y: {
            prevSlideMessage: parameter.prevSlideMessage,
            nextSlideMessage: parameter.nextSlideMessage,
            firstSlideMessage: parameter.firstSlideMessage,
            lastSlideMessage: parameter.lastSlideMessage,
            paginationBulletMessage: parameter.paginationBulletMessage
        },

        on: {

            // Loaded Image
            lazyImageReady: function () {

                // Autoplay
                if (!forqyCarousel.autoplay.running) {

                    forqyCarousel.params.autoplay = {
                        delay: parseInt(parameter.autoplayDelay),
                        stopOnLast: true,
                        disableOnInteraction: true
                    };

                    forqyCarousel.autoplay.start();
                }
            }
        }
    });

}());