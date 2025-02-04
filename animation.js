// Slider Animation

const slider = document.querySelector('.slider');
const slides = document.querySelectorAll('.slide');

let currentSlide = 0;

setInterval(() => {
    slides[currentSlide].style.opacity = 0;
    currentSlide = (currentSlide + 1) % slides.length;
    slides[currentSlide].style.opacity = 1;
}, 3000);

// Hamburger Menu

const hamburger = document.querySelector('.hamburger');
const navLinks = document.querySelector('.nav-links');

hamburger.addEventListener('click', () => {
    navLinks.classList.toggle('show');
});

// Responsive Design

window.addEventListener('resize', () => {
    const width = window .innerWidth;

    if (width <= 768) {
        navLinks.style.display = 'none';
        hamburger.style.display = 'block';
    } else {
        navLinks.style.display = 'flex';
        hamburger.style.display = 'none';
    }
});