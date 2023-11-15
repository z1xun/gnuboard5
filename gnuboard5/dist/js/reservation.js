$(function () {
    $(".AccordionMenu .select").on("click", function () {
        var $li = $(this).parent("li");
        if ($li.hasClass("show") == true) {
            $li.toggleClass("show");
        } else {
            $li.toggleClass("show");
        }
    });
    $(".reservation-subtit-wrap a").mouseover(function () {
        if ($(this).hasClass("check")) {
            $(this).siblings().removeClass("check");
        } else {
            $(this).addClass("check");
            $(this).siblings().removeClass("check");
        }
    });

    flatpickr("#datepicker", {
        dateFormat: "Y-m-d",
        inline: true,
        minDate: "today",
    });
});
