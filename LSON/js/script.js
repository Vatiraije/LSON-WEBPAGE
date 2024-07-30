document.addEventListener("DOMContentLoaded", function() {
    const sports = [
        'soccer', 'rugby', 'tennis', 'netball', 'hockey', 'cycling',
        'boxing', 'fistball', 'golf', 'karate', 'mix martial arts',
        'cricket', 'darts', 'athletics', 'swimming', 'horse racing',
        'chess', 'checkers'
    ];

    const sportsImagesDiv = document.getElementById('sports-images');

    sports.forEach(sport => {
        let imgElement = document.createElement('img');
        imgElement.src = `images/${sport}.jpg`;  // Ensure you have images with these names in an "images" folder
        imgElement.alt = sport;
        sportsImagesDiv.appendChild(imgElement);
    });

    fetch('events.php')
        .then(response => response.json())
        .then(events => {
            const contentDiv = document.getElementById('content');
            events.forEach(event => {
                let eventElement = document.createElement('div');
                eventElement.classList.add('event');
                eventElement.innerHTML = `<h3>${event.name}</h3><p>${event.date}</p>`;
                contentDiv.appendChild(eventElement);
            });
        });
});
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

    function setColumnBackgrounds() {
        const usedImages = new Set();
        columns.forEach((column) => {
            column.classList.add('fade-out'); // Start fading out
            setTimeout(() => {
                let newImage;
                do {
                    newImage = images[Math.floor(Math.random() * images.length)];
                } while (usedImages.has(newImage));
                usedImages.add(newImage);
                column.style.backgroundImage = `url(${newImage})`;
                column.classList.remove('fade-out'); // Fade in new image
            }, 1000); // Wait for the fade-out transition to complete (same duration as in CSS)
        });
    }

    setColumnBackgrounds();

    // Optional: if you want the columns to change images periodically
    setInterval(setColumnBackgrounds, 3000);
});
