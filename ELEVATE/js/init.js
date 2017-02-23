(function ($) {
    $(function () {
        $('.button-collapse').sideNav();
        $('.collapsible').collapsible();
        $('.modal').modal();
        Materialize.updateTextFields();
        $('select').material_select();
        $("#fadein").addClass("load");
    }); // end of document ready
})(jQuery); // end of jQuery name space