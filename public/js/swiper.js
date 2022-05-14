var swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
     navigation: {
         nextEl: ".swiper-button-next",
         prevEl: ".swiper-button-prev",
     },
});
new Swiper(".swiperTwo", {
    effect: "cards",
    grabCursor: true,
});
new Swiper(".swiperThree", {
    effect: "cards",
    grabCursor: true,
});
