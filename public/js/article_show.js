$(document).ready(function () {
    $('.js-article-like').on('click', function (e) {
        e.preventDefault();

        var $link = $(e.currentTarget);
        $link.toggleClass('fa-heart-o').toggleClass('fa-heart');

        $.ajax({
            method: 'POST',
            url: $link.attr('href')
        }).done(function (data) {
            $('.js-article-like-count').html(data.hearts);
        });
    });

});