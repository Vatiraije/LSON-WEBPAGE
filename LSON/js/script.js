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
