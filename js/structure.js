jQuery.noConflict();
(function($) {
    $("li.device a").on("click", function() {
        var id = $(this).attr('id');
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

        //col-4
        //col-6
        //col-10

    });

    // Menu and sub menu
    $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
        var $subMenu = $(this).next(".dropdown-menu");
        $subMenu.toggleClass('show');


        $(this).parents('.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
            $('.dropdown-submenu .show').removeClass("show");
        });


        return false;
    });


})(jQuery);