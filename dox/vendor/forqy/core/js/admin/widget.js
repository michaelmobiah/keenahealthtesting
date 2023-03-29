/*jslint browser this:true long:true */
/*global jQuery, wp, translation */

/**
 * Widget
 * @version 1.0.2
 * @requires jQuery
 * @deprecated Moved to plugins
 */

(function ($) {
    "use strict";

    $(function () {

        // selectors
        const body = $("body");

        const buttonUpload = ".js-media-button-upload";
        const buttonRemove = ".js-media-button-remove";

        const imageInput = ".js-media-image-input";
        const imagePreview = ".js-media-image-preview";

        /**
         * Init Media Manager
         */

        body.on("click", buttonUpload, function (e) {
            e.preventDefault();

            const button = $(this);

            // Create new media manager instance
            const frame = wp.media.frames.file_frame = wp.media({
                title: translation.select_image,
                button: {
                    text: translation.use_selected_image
                },
                library: {
                    type: "image"
                },
                multiple: false
            });

            // Run callback when image selected
            frame.on("select", function () {
                const attachment = frame.state().get("selection").first().toJSON();

                button.siblings(imageInput).val(attachment.url).trigger("change");
                button.siblings(imagePreview).attr("src", attachment.url);

                button.siblings(buttonRemove).show();
            });

            // Open media manager
            frame.open();
        });

        /**
         * Remove Selected Image
         */

        body.on("click", buttonRemove, function (e) {
            e.preventDefault();

            const button = $(this);

            button.siblings(imageInput).val("").trigger("change");
            button.siblings(imagePreview).attr("src", "");

            button.hide();
        });

    });

}(jQuery));