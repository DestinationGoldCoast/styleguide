jQuery.noConflict();
(function($) {
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