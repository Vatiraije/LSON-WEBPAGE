document.addEventListener("DOMContentLoaded", () => {
    const whiteOverlay = document.querySelector('.white-overlay');
    const secondWhiteOverlay = document.querySelector('.second-white-overlay');
    const backgroundContainer = document.querySelector('.background-container');
    const imageBoxesContainer = document.querySelector('.image-boxes-container');
    const levelSportsText = document.querySelector('.level-sports-text');
    const newsSection = document.getElementById('newsSection');
// const images = [
//     'images/tennis.jpg',
//     'images/rugby3.jpg',
//     'images/soccer.jpg',
//     'images/swimming2.jpg',
//     'images/boxing54.jpg',
//     'images/golf2547.jpg',
//     'images/cricket25.jpg'
// ];

// const columns = document.querySelectorAll('.column');

// function rotateImages() {
//     columns.forEach((column, index) => {
//         const imageIndex = (index + Math.floor(Date.now() / 4000)) % images.length;
//         column.style.backgroundImage = `url('${images[imageIndex]}')`;
//     });
// }

// // Initial call to set images
// rotateImages();

// // Set interval to rotate images every 4 seconds
// setInterval(rotateImages, 4000);

    
    document.addEventListener('DOMContentLoaded', function() {
    const columns = document.querySelectorAll('.column');
    columns.forEach((column, index) => {
        column.style.animationDelay = `${index * -10}s`;
    });
});


    window.addEventListener('scroll', () => {
        requestAnimationFrame(() => {
            if (window.scrollY > 100) {
                whiteOverlay.classList.add('scrolled');
                secondWhiteOverlay.classList.add('scrolled');
                levelSportsText.classList.add('expanded');
                backgroundContainer.classList.add('scrolled');
                imageBoxesContainer.classList.add('scrolled');
            } else {
                whiteOverlay.classList.remove('scrolled');
                secondWhiteOverlay.classList.remove('scrolled');
                levelSportsText.classList.remove('expanded');
                backgroundContainer.classList.remove('scrolled');
                imageBoxesContainer.classList.remove('scrolled');
            }
        });
    });

    window.addEventListener('scroll', function() {
        if (window.scrollY > 0) {
            whiteOverlay.classList.add('scrolled');
            imageBoxesContainer.classList.add('scrolled');
            levelSportsText.classList.add('expanded');
        } else {
            whiteOverlay.classList.remove('scrolled');
            imageBoxesContainer.classList.remove('scrolled');
            levelSportsText.classList.remove('expanded');
        }
    });

    const tickerWrapper = document.querySelector('.ticker-wrapper');
    secondWhiteOverlay.addEventListener('mouseenter', () => {
        tickerWrapper.style.animationPlayState = 'paused';
    });
    secondWhiteOverlay.addEventListener('mouseleave', () => {
        tickerWrapper.style.animationPlayState = 'running';
    });

    const searchInput = document.getElementById('searchInput');
    const searchButton = document.getElementById('searchButton');
    const newsCards = document.querySelectorAll('.news-card');

    function filterArticles() {
        const query = searchInput.value.toLowerCase();
        newsCards.forEach(card => {
            const title = card.querySelector('.news-title').innerText.toLowerCase();
            if (title.includes(query)) {
                card.style.display = 'flex';
            } else {
                card.style.display = 'none';
            }
        });
    }

    searchButton.addEventListener('click', filterArticles);
    searchInput.addEventListener('keyup', (event) => {
        if (event.key === 'Enter') filterArticles();
    });

    // Enhancements for the "LSON" logo
    const logoContainer = document.querySelector('.logo-container');
    logoContainer.classList.add('animated'); // Add a class to initiate animation

    // Adding hover effect for logo letters
    const logoLetters = document.querySelectorAll('.logo-letter');
    logoLetters.forEach(letter => {
        letter.addEventListener('mouseenter', () => {
            letter.style.transform = 'scale(1.2)';
            letter.style.transition = 'transform 0.3s';
        });
        letter.addEventListener('mouseleave', () => {
            letter.style.transform = 'scale(1)';
            letter.style.transition = 'transform 0.3s';
        });
    });
});

// Function to handle header minimization and logo change on scroll
window.addEventListener('scroll', function() {
    const header = document.getElementById('header');
    const mainLogo = document.getElementById('main-logo');

    if (window.scrollY > 50) {
        header.classList.add('minimized');
        mainLogo.innerHTML = '<div class="full-logo">Level Sports Of Namibia</div>';
    } else {
        header.classList.remove('minimized');
        mainLogo.innerHTML = `
            <div class="logo-container">
            <span class="logo-letter blue">L</span>
            <span class="logo-letter red">S</span>
            <span class="logo-letter green">O</span>
            <span class="logo-letter yellow">N</span>
        </div>
        `;
    }
});