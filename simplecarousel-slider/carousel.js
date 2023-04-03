const slider = document.querySelector('.slider');
const slidesContainer = document.querySelector('.slides-container');
const slides = document.querySelectorAll('.slide');
const slideWidth = slides[0].offsetWidth;
const numVisibleSlides = 4;

let currentSlide = 0;

function updateSlider() {
    const offset = currentSlide * slideWidth * -1;
    slidesContainer.style.transform = `translateX(${offset}px)`;
}

function handleArrowClick(direction) {
    if (direction === 'left') {
        currentSlide = Math.max(0, currentSlide - 1);
    } else {
        currentSlide = Math.min(slides.length - numVisibleSlides, currentSlide + 1);
    }
    updateSlider();
}

document.querySelector('.arrow.left').addEventListener('click', () => {
    handleArrowClick('left');
});

document.querySelector('.arrow.right').addEventListener('click', () => {
    handleArrowClick('right');
});

window.addEventListener('resize', () => {
    slideWidth = slides[0].offsetWidth;
    updateSlider();
});

updateSlider();
