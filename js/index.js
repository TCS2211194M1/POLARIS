document.addEventListener('DOMContentLoaded', function () {
    var swiper = new Swiper('.swiper-container', {
        // Opciones de Swiper.js
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
});
