$(document).ready(function () {
    $(".button-collapse").sideNav();
    $('#fullpage').fullpage({
        anchors: ['home', 'about', 'portfolio', 'contact']
    });
})