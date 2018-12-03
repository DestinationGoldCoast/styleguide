jQuery.noConflict();

/**
 * Function: styleguideSwitcher
 * Switch the viewable area of the main display-switch area.
 */
// function styleguideSwitcher() {
// }

(function($) {
    // code using $ as alias to jQuery
    $("li.device a").on("click", function() {

        var id = $(this).attr('id');
        console.log(id);
        switch (id) {
            case 'small':
                width = '480';
                border = '1px solid #EEE';
                break;
            case 'medium':
                width = '760';
                border = '1px solid #EEE';
                break;
            default:
                width = '100%';
                border = '0';
        }

        $("#display-switch").css({ "width": width, "border": border });


    });


})(jQuery);