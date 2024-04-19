document.addEventListener('DOMContentLoaded', function() {
    const increase = document.getElementById('increase-value');
    const decrease = document.getElementById('decrease-value');
    var currentSlide = document.querySelector('.slide.active');
    setInterval(function() {
        let nextSlide = currentSlide.nextElementSibling;
        if (!nextSlide) {
            nextSlide = document.querySelector('.slide:first-child');
        }

        currentSlide.classList.remove('active');
        nextSlide.classList.add('active');

        currentSlide = nextSlide;
    }, 3000);
});