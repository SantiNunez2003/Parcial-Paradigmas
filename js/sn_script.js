$(document).ready(function() {
    $('.carrusel').slick({
        dots: true,           // Muestra puntos de navegación
        infinite: true,      // Carrusel infinito
        speed: 500,          // Velocidad de transición
        slidesToShow: 1,     // Número de imágenes a mostrar
        slidesToScroll: 1,   // Número de imágenes a desplazar
        autoplay: true,      // Activar el autoplay
        autoplaySpeed: 2000, // Velocidad del autoplay
        arrows: true         // Mostrar flechas de navegación
    });
});