(function ($) {
    $(document).ready(function () {
        document.addEventListener('wpcf7invalid', function (event) {
            $('.wpcf7-form-control').each(function () {
                var $this = $(this);
                var $parent = $this.parent();
                if ($this.hasClass('wpcf7-not-valid')) {
                    $parent.addClass('not-valid');
                } else {
                    $parent.removeClass('not-valid');
                }
            });
        }, false);
    });
})(jQuery);

$(function () {
    var wpcf7Elm = document.querySelector('.wpcf7');
    wpcf7Elm.addEventListener('wpcf7mailsent', function (event) {
        var form = $('.wpcf7');
        var form_thanks = $('.contact__form_thanks');
        var overlay = $('#overlay');
        form.animate({opacity: 0, top: '45%'}, 200,
            function () {
                $(this).css('display', 'none');
                overlay.fadeOut(400);
            }
        );
        form_thanks.addClass('block');
    }, false);
});