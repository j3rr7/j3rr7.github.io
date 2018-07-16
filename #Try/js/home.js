$(document).ready(function() {
    $('.btn-open-menu').click(function () {
        $('header').addClass('open');
    });

    $('.link-menu').click(function () {
        $('header').removeClass('open');
    });

    $('.btn-close-menu').click(function () {
        $('header').removeClass('open');
    });
});