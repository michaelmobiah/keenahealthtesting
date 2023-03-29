/*jslint browser long:true */
/*global window, Swiper */

/**
 * Slideshow
 *
 * @version     1.0.1
 * @requires    Swiper
 * @url         https://github.com/nolimits4web/swiper
 */

(function () {
    "use strict";

    /**
     * Slideshow
     */
    const forqySlideshow = new Swiper(".js-slideshow", {
        effect: parameter.effect ? parameter.effect : 'slide',
        loop: !!parameter.loop,
        speed: parameter.speed ? parseInt(parameter.speed) : 600,
        direction: parameter.direction ? parameter.direction : 'horizontal',
        threshold: 5,
        grabCursor: true,
        keyboard: true,

        // Rewind
        rewind: !!parameter.rewind,

        // No Swiping
        noSwiping: true,
        noSwipingSelector: "a,button,input",

        // Gutter
        spaceBetween: parameter.spaceBetween ? parseInt(parameter.spaceBetween) : 0,

        // Slides per View
        slidesPerView: 1,

        breakpoints: {
            480: {
                slidesPerView: parameter.slidesPerView480 ? parseInt(parameter.slidesPerView480) : 1,
            },
            1024: {
                slidesPerView: parameter.slidesPerView1024 ? parseInt(parameter.slidesPerView1024) : 1,
            },
            1280: {
                slidesPerView: parameter.slidesPerView1280 ? parseInt(parameter.slidesPerView1280) : 1,
            },
        },

        // Progress
        watchSlidesProgress: true,

        // Effect - Fade
        fadeEffect: {
            crossFade: true,
        },

        // Effect - Creative
        creativeEffect: {
            prev: {
                translate: ["-20%", 0, -1],
            },
            next: {
                translate: ["100%", 0, 0],
            },
        },

        // Lazy
        preloadImages: false,
        lazy: {
            loadPrevNext: true
        },

        // Pagination
        pagination: {
            el: ".js-slideshow-pagination",
            type: "bullets",
            clickable: true,
        },

        // Navigation
        navigation: {
            nextEl: ".js-slideshow-next",
            prevEl: ".js-slideshow-prev",
        },

        // Accessibility
        a11y: {
            prevSlideMessage: parameter.prevSlideMessage,
            nextSlideMessage: parameter.nextSlideMessage,
            firstSlideMessage: parameter.firstSlideMessage,
            lastSlideMessage: parameter.lastSlideMessage,
            paginationBulletMessage: parameter.paginationBulletMessage,
        },

        on: {

            // On 'slideChange' Update LazyLoad Instance
            slideChange: function () {

                // Check If LazyLoad Exists
                if (typeof LazyLoad === "function" && typeof forqyLazyLoad !== "undefined") {
                    forqyLazyLoad.update();
                }
            },

            // On 'lazyImageReady' Start Autoplay
            lazyImageReady: function () {

                // Autoplay
                if (!this.autoplay.running) {

                    this.params.autoplay = {
                        delay: parameter.autoplayDelay ? parseInt(parameter.autoplayDelay) : 10000,
                        stopOnLast: true,
                        disableOnInteraction: true,
                    };

                    this.autoplay.start();
                }
            }
        }
    });

}());