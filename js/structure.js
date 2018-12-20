jQuery.noConflict();
(function($) {
    $("li.device a").on("click", function() {
        var id = $(this).attr('id');
        switch (id) {
            case 'small':
                col = 'col-4 mr-auto ml-auto';
                break;
            case 'medium':
                col = 'col-8 mr-auto ml-auto';
                break;
            default:
                col = 'col-12';
        }
        $("#display-switch").removeClass().addClass(col);

    });

    // Menu and sub menu
    $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
        var $subMenu = $(this).next('.dropdown-menu');
        $subMenu.toggleClass('show');

        $(this).parents('.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
            $('.dropdown-submenu .show').removeClass('show');
        });

        return false;
    });


})(jQuery);