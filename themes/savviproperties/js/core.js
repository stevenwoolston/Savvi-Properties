
$(function() {
    $("[aria-required=true]").closest(".form-group").find(".control-label").addClass("required");

    $(window).scroll(function () {
        
        if ($(window).scrollTop() > 100) {
            $(".nav-call-us-button").addClass("fixed-in-place");
        } else {
            $(".nav-call-us-button").removeClass("fixed-in-place");
        }
    });
});