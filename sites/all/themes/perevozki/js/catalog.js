

/**
 * Created by Igor on 26.06.14.
 */

(function($) {
    jQuery(function($) {
        $(".view-catalog > div > div").addClass("float").filter(":nth-child(2n)").after('<div class="clr"></div>');
    });
})(jQuery);

