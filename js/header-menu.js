// BEGIN SHOW/HIDE MAIN MENU
jQuery('#menu-button').on('click', function(e) {
'use strict';
        jQuery('#header-menu').toggleClass('header-menu-active');
});
// END SHOW/HIDE MAIN MENU

// BEGIN DISABLE TOP-LEVEL MENU ITEM AS LINK
jQuery('ul.menu > li > a').on('click', function(e) {
e.preventDefault();
});
// END DISABLE TOP-LEVEL MENU ITEM AS LINK