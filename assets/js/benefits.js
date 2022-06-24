
var swiper = new Swiper(".questionslider", {
    slidesPerView: 1,
    autoplay: true,
    pagination: {
        el: ".swiper-pagination",
    },
});

var swiper2 = new Swiper(".benefitslider", {
    slidesPerView: 4,
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
    autoplay: true,
    pagination: {
        el: ".swiper-pagination",
    },
});

function animateValue(obj, start, end, duration) {
    let startTimestamp = null;
    const step = (timestamp) => {
        if (!startTimestamp) startTimestamp = timestamp;
        const progress = Math.min((timestamp - startTimestamp) / duration, 1);
        obj.innerHTML = Math.floor(progress * (end - start) + start);
        if (progress < 1) {
            window.requestAnimationFrame(step);
        }
    };
    window.requestAnimationFrame(step);
}

var animatedData = false;
function animateData(){
    if(!animatedData){
        $('.data .value').each(function(){
            vl = $(this).attr('data-value');
            animateValue(this, 0, vl, 3000);
        });
        animatedData = true;
    }
}
