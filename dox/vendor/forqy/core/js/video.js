/*jslint browser this:true long:true */
/*global window */

/**
 * Video
 *
 * @description     Video Controls
 * @version         1.0.1
 */

(function () {
    "use strict";

    const videos = document.querySelectorAll(".js-video");

    /**
     * Get Video Containers
     *
     * @param video
     * @param selector
     * @returns {*[]}
     */
    function forqyGetVideoContainers(video, selector) {

        // Set up a containers array
        const containers = [];
        // Push each container element to the array
        for (; video && video !== document; video = video.parentNode) {
            if (selector && video.matches(selector)) {
                containers.push(video);
            }
        }

        return containers;
    }

    /**
     * Video State
     *
     * @param video
     */
    function forqyVideoState(video) {

        const videoContainers = forqyGetVideoContainers(video, ".js-video-container");

        if (videoContainers) {
            videoContainers.forEach(function (videoContainer) {

                if (video.paused) {
                    // Paused
                    videoContainer.classList.remove("video-playing");
                    videoContainer.classList.add("video-paused");
                    videoContainer.classList.remove("video-ended");
                } else {
                    // Playing
                    videoContainer.classList.add("video-playing");
                    videoContainer.classList.remove("video-paused");
                    videoContainer.classList.remove("video-ended");
                }

                if (video.ended) {
                    // Ended
                    videoContainer.classList.remove("video-playing");
                    videoContainer.classList.remove("video-paused");
                    videoContainer.classList.add("video-ended");
                }
            });
        }
    }


    /**
     * Video Control
     *
     * @param video
     * @param container
     */
    function forqyVideoStateControl(video, container) {

        if (video.paused || video.ended) {
            video.play();
            forqyVideoState(video);
        } else {
            video.pause();
            forqyVideoState(video);
        }

    }

    /**
     * Video
     */
    videos.forEach(function (video) {

        video.addEventListener("play", function () {
            forqyVideoState(video);
        });
        video.addEventListener("pause", function () {
            forqyVideoState(video);
        });
        forqyVideoState(video);

        /**
         * Video Control
         */
        const videoControls = document.querySelectorAll(".js-video-playpause");

        if (videoControls) {
            videoControls.forEach(function (videoControl) {

                // Play/Pause Video on Click to Control
                videoControl.addEventListener("click", function (event) {
                    event.preventDefault();
                    forqyVideoStateControl(video);
                });
            });
        }
    });

}());