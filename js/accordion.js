// BEGIN CONVERTING DEFAULT WP MENU TO A SLIDE-DOWN ONE
jQuery(document).ready(function ($) {
    jQuery('.menu ul').slideUp(0);

    jQuery('.menu li.menu-item-has-children').on('click', function(e) {
    'use strict';
        var target = jQuery(this).children('a');
        if(target.hasClass('menu-expanded')){
            target.removeClass('menu-expanded');
        }else{
            jQuery('.menu-item > a').removeClass('menu-expanded');
            target.addClass('menu-expanded');
        }
        jQuery(this).find('ul:first')
                    .slideToggle(350)
                    .end()
                    .siblings('li')
                    .find('ul')
                    .slideUp(350);
    });
});
// END CONVERTING DEFAULT WP MENU TO A SLIDE-DOWN ONE