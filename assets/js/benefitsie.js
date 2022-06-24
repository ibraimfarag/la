var swiper = new Swiper(".questionslider", {
    slidesPerView: 1,
    freeMode: true,
    autoplay: false,
    pagination: {
        el: ".swiper-pagination",
        type: "progressbar",
    },
});

var swiper2 = new Swiper(".benefitslider", {
    slidesPerView: 4,
    freeMode: true,
    breakpoints: {
        // when window width is >= 320px
        120: {
            slidesPerView: 1,
        },
        // when window width is >= 991
        767: {
            slidesPerView: 2,
        },
        // when window width is >= 991
        991: {
            slidesPerView: 3,
        },
        // when window width is >= 640px
        1366: {
            slidesPerView: 4,
        }
    },
    autoplay: false,
    pagination: {
        el: ".swiper-pagination",
        type: "progressbar",
    },
});

function animateValue() {}
function animateData(){
}
