// fixed header script starts
$(window).scroll(function () {
    if ($(this).scrollTop() > 120) {
        $('.header').addClass('fixed');
    } else {
        $('.header').removeClass('fixed');
    }
});
// fixed header script ends

// story slider js stats
const outerStorySwiper = new Swiper('.outerStorySwiper', {
    loop: false,
    slidesPerView: 7,
    spaceBetween: 15,
    breakpoints: {
        320: {
            slidesPerView: 4,
            spaceBetween: 50
        },
        400: {
            slidesPerView: 4,
            spaceBetween: 15
        },
        480: {
            slidesPerView: 5,
            spaceBetween: 15
        },
        768: {
            slidesPerView: 6,
            spaceBetween: 15
        },
        992: {
            slidesPerView: 7,
            spaceBetween: 15
        },
        1200: {
            slidesPerView: 5,
            spaceBetween: 15
        }
    }

});

// open story slider
// $('.os-slider').slick({
//     slidesToShow: 1,
//     slidesToScroll: 1,
//     // autoplay: true,
//     autoplaySpeed: 1000,
// });