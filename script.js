document.addEventListener("DOMContentLoaded", () => {
    const images = [
        "images/tennis.jpg",
        "images/rugby3.jpg",
        "images/soccer.jpg",
        "images/swimming2.jpg",
        "images/boxing54.jpg",
        "images/golf2547.jpg",
        "images/cricket25.jpg"
    ];

    const columns = document.querySelectorAll('.column');
    const whiteOverlay = document.querySelector('.white-overlay');
    const secondWhiteOverlay = document.querySelector('.second-white-overlay');
    const backgroundContainer = document.querySelector('.background-container');
    const imageBoxesContainer = document.querySelector('.image-boxes-container');
    const levelSportsText = document.querySelector('.level-sports-text');  // Added this line

    function setColumnBackgrounds() {
        const usedImages = new Set();
        columns.forEach((column) => {
            column.classList.add('fade-out');
            setTimeout(() => {
                let newImage;
                do {
                    newImage = images[Math.floor(Math.random() * images.length)];
                } while (usedImages.has(newImage));
                usedImages.add(newImage);
                column.style.backgroundImage = `url(${newImage})`;
                column.classList.remove('fade-out');
            }, 1000);
        });
    }

    setColumnBackgrounds();
    setInterval(setColumnBackgrounds, 3000);

    // Pause ticker on hover
    const tickerWrapper = document.querySelector('.ticker-wrapper');
    secondWhiteOverlay.addEventListener('mouseenter', () => {
        tickerWrapper.style.animationPlayState = 'paused';
    });
    secondWhiteOverlay.addEventListener('mouseleave', () => {
        tickerWrapper.style.animationPlayState = 'running';
    });

    // Hamburger menu toggle
    const hamburgerMenu = document.querySelector('.hamburger-menu');
    const navMenu = document.querySelector('.nav-menu');
    hamburgerMenu.addEventListener('click', () => {
        navMenu.style.display = navMenu.style.display === 'block' ? 'none' : 'block';
    });

    

    // Scroll event handler
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

    //filter
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


    

});
