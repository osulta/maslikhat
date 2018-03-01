$('document').ready(function () {

    $('.left-sidebar-a').on('click', function (e) {
        e.preventDefault();
        var target = $(this).attr('href');
        $(target).collapse('toggle');
    });

});