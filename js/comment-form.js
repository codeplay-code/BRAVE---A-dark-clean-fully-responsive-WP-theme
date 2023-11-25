// BEGIN NAME, EMAIL FIELD FADE-IN
jQuery('#commentform-fields').hide().animate({opacity: 0}, 0);
jQuery('#cancel-comment').hide().animate({opacity: 0}, 0);

jQuery('#comment,.comment-reply-link').click(function() {
        jQuery('#commentform-fields,#cancel-comment').show(0).animate({opacity: 1}, 350);
    });

jQuery('#cancel-comment,#cancel-comment-reply').click(function() {
        jQuery('#commentform-fields').animate({opacity: 0}, 150).hide(0);
		jQuery('#cancel-comment').animate({opacity: 0}, 150).hide(0);
    });
// END NAME, EMAIL FIELD FADE-IN