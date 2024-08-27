JS:
document.addEventListener('DOMContentLoaded', function () {
    // Extended event data with additional fields
    const eventsData = {
        '12': {
            category: 'nagu-event',
            details: ['NAGU Event'],
            time: '10:00 AM',
            venue: 'Windhoek Golf Club',
            description: 'An exciting NAGU golf event for all skill levels.'
        },
        '14': {
            category: 'nalgu-event',
            details: ['NALGU Event'],
            time: '11:00 AM',
            venue: 'Swakopmund Golf Club',
            description: 'Join the ladies of NALGU for a competitive and fun event.'
        },
        '5': {
            category: 'njgf-event',
            details: ['NJGF Event'],
            time: '09:00 AM',
            venue: 'Oshakati Golf Course',
            description: 'NJGF junior golf event aimed at promoting youth involvement.'
        },
        '20': {
            category: 'sages-event',
            details: ['SAGES Event'],
            time: '1:00 PM',
            venue: 'Walvis Bay Golf Club',
            description: 'SAGES golf event for seniors with exciting prizes.'
        },
        '7': {
            category: 'seniors-event',
            details: ['Seniors Event'],
            time: '08:00 AM',
            venue: 'Gobabis Golf Club',
            description: 'A seniors golf event open to all with experience in the sport.'
        }
    };

    let currentDate = new Date();
    const monthEl = document.getElementById('new-month');
    const datesEl = document.getElementById('new-dates');
    const eventTab = document.getElementById('new-eventTab');
    const eventDetails = document.getElementById('new-eventDetails');
    const eventTime = document.getElementById('new-eventTime');
    const eventVenue = document.getElementById('new-eventVenue');
    const eventDescription = document.getElementById('new-eventDescription');

    function renderCalendar() {
        datesEl.innerHTML = '';
        const year = currentDate.getFullYear();
        const month = currentDate.getMonth();

        const firstDayIndex = new Date(year, month, 1).getDay();
        const lastDay = new Date(year, month + 1, 0).getDate();

        monthEl.innerText = currentDate.toLocaleDateString('en-US', { month: 'long', year: 'numeric' });

        // Fill in empty cells for days before the first of the month
        for (let i = 0; i < firstDayIndex; i++) {
            datesEl.innerHTML += `<div></div>`;
        }

        // Render each day of the month
        for (let day = 1; day <= lastDay; day++) {
            const dayStr = day.toString(); // Get the day as a string for comparison
            let eventClass = '';
            let eventDetailText = '';

            // Check if there is an event for this day (regardless of month/year)
            if (eventsData[dayStr]) {
                eventClass = eventsData[dayStr].category;
                eventDetailText = eventsData[dayStr].details.join(', ');
            }

            // Create a calendar cell with the event class (if any)
            datesEl.innerHTML += `<div class="${eventClass}" data-day="${day}">${day}</div>`;
        }

        // Add click event listeners to each date
        document.querySelectorAll('.new-dates div').forEach(dateEl => {
            dateEl.addEventListener('click', () => {
                const dayStr = dateEl.getAttribute('data-day');
                if (eventsData[dayStr]) {
                    eventDetails.innerText = eventsData[dayStr].details.join(', ');
                    eventTime.innerText = `Time: ${eventsData[dayStr].time}`;
                    eventVenue.innerText = `Venue: ${eventsData[dayStr].venue}`;
                    eventDescription.innerText = `Description: ${eventsData[dayStr].description}`;
                    eventTab.classList.add('active');
                } else {
                    eventDetails.innerText = 'No events on this date';
                    eventTime.innerText = '';
                    eventVenue.innerText = '';
                    eventDescription.innerText = '';
                    eventTab.classList.remove('active');
                }
            });
        });
    }

    // Navigation for previous month
    document.getElementById('new-prev').addEventListener('click', () => {
        currentDate.setMonth(currentDate.getMonth() - 1);
        renderCalendar();
    });

    // Navigation for next month
    document.getElementById('new-next').addEventListener('click', () => {
        currentDate.setMonth(currentDate.getMonth() + 1);
        renderCalendar();
    });

    // Initial render of the calendar
    renderCalendar();
});
