$(document).ready(function () {
    // rollover effect
    $('li').hover(
        function () {
            var $media = $(this).find('.media');
            var height = $media.height();
            $media.stop().animate({marginTop: -(height - 82)}, 1000);
        }, function () {
            var $media = $(this).find('.media');
            $media.stop().animate({marginTop: '0px'}, 1000);
        }
    );
});