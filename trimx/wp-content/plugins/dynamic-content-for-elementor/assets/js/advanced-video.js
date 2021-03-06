(function ($) {
    var WidgetElements_AdvancedVideoHandler = function ($scope, $) {
        var elementSettings = get_Dyncontel_ElementSettings($scope);
        var id_scope = $scope.attr('data-id');
        var customControls = elementSettings.dce_video_custom_controls;

        if (customControls) {
            var showImageOverlay = Boolean(elementSettings.show_image_overlay);
            var videoType = elementSettings.video_type;
            var autoplay = Boolean(elementSettings.autoplay);
            var lightbox = Boolean(elementSettings.lightbox);

            var muted = Boolean(elementSettings.mute);
            var loop = Boolean(elementSettings.loop);
            var controls = elementSettings.dce_video_controls;

            var generatePlyrVideo = function () {
                var videoContainer = '.elementor-element-' + id_scope;
                var videoSelector = videoContainer + ' .elementor-wrapper';
                if (videoType == 'hosted') {
                    videoSelector = videoContainer + ' .elementor-video';
                }

                // Lightbox
                if (lightbox) {
                    videoContainer = '#elementor-lightbox-' + id_scope;
                    videoSelector = videoContainer + ' .elementor-video-container > div';
                }
                var player = new Plyr(videoSelector, {
                    autoplay: autoplay,
                    muted: muted,
                    loop: {active: loop},
                    disableContextMenu: false,
                    hideControls: false
                });
            };


            if ($scope.find('.elementor-custom-embed-image-overlay').length) {
                $scope.on('mouseup', '.elementor-custom-embed-image-overlay', function () {
                    if (lightbox) {
                        setTimeout(function () {
                            generatePlyrVideo();
                        }, 1000);

                    } else {
                        setTimeout(function () {
                            generatePlyrVideo();
                        }, 400);
                    }
                });
            } else {
                setTimeout(function () {
                    generatePlyrVideo();
                }, 400);
            }
        }
    };

    // Make sure you run this code under Elementor..
    $(window).on('elementor/frontend/init', function () {
        elementorFrontend.hooks.addAction('frontend/element_ready/video.default', WidgetElements_AdvancedVideoHandler);
    });
})(jQuery);
