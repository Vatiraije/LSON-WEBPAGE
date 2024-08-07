document.querySelectorAll('.circle').forEach(circle => {
    circle.addEventListener('mouseover', () => {
        circle.style.width = '200px';
        circle.style.height = '200px';
        circle.style.backgroundColor = '#1d2a38';
        circle.querySelector('h2').style.transform = 'translateY(-20px)';
        circle.querySelector('.hidden-text').style.opacity = '1';
        circle.querySelector('.hidden-text').style.transform = 'translateY(10px)';
    });

    circle.addEventListener('mouseout', () => {
        circle.style.width = '180px';
        circle.style.height = '180px';
        circle.style.backgroundColor = '#1d2a38';
        circle.querySelector('h2').style.transform = 'translateY(0)';
        circle.querySelector('.hidden-text').style.opacity = '0';
        circle.querySelector('.hidden-text').style.transform = 'translateY(0)';
    });
});

// Existing circle event listeners...

// Slideshow functionality
const slides = document.querySelectorAll('.slide');
let currentSlide = 0;

function showSlide(n) {
    slides[currentSlide].classList.remove('active');
    slides[currentSlide].classList.add('prev');
    currentSlide = (n + slides.length) % slides.length;
    slides[currentSlide].classList.remove('prev');
    slides[currentSlide].classList.add('active');
}

function nextSlide() {
    showSlide(currentSlide + 1);
}

// Change slide every 5 seconds
setInterval(nextSlide, 5000);