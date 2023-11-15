$(document).ready(function () {
    window.scrollTo(0, 0);
    AOS.init({
        offset: 200,
        easing: "ease-out-cubic",
        duration: 1000,
    });
    $(window).on("load", function () {
        AOS.refresh();
    });

    //exhibition 섹션에 마우스오버시 이미지 나오게 하기
    $(".con-txt2 > a").mouseover(function () {
        $(".con-img2").addClass("active");
    });
    $(".con-txt2").mouseout(function () {
        $(".con-img2").removeClass("active");
    });
    $(".con-txt3 > a").mouseover(function () {
        $(".con-img3").addClass("active");
    });
    $(".con-txt3").mouseout(function () {
        $(".con-img3").removeClass("active");
    });

    //메인페이지 슬릭 슬라이더
    $(".slider-for").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        arrow: false,
        asNavFor: ".slider-nav",
    });
    $(".slider-nav").slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        asNavFor: ".slider-for",
        dots: true,
        dotsClass: "custom_paging",

        centerMode: false,
        centerPadding: "20px",
        focusOnSelect: true,
        arrows: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                },
            },
            {
                breakpoint: 744,
                settings: {
                    slidesToShow: 1,
                    dots: false,
                    arrows: false,
                },
            },
        ],
    });

    //메인스와이퍼
    var swiper = new Swiper(".swiper-container", {
        slidesPerView: 1,
        initialSlide: 1,
        loop: true,

        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".mainswiper-button-next",
            prevEl: ".mainswiper-button-prev",
        },
    });

    //서브페이지(about) 스와이퍼
    var swiper = new Swiper(".about-swiper-container", {
        slidesPerView: 1,
        initialSlide: 1,
        loop: true,

        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
});
