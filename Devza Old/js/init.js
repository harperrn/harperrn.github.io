$(document).ready(function () {
    $(".button-collapse").sideNav();
    $('#fullpage').fullpage({
        anchors: ['home', 'about', 'portfolio', 'services', 'contact']
    });
});
