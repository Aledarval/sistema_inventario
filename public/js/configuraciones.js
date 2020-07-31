$(document).ready(function(){

    $('.nav-link').click(function (e) {
        e.preventDefault();
        var href = $(this).attr('href');
        window.location.href = href;
    });
 });
