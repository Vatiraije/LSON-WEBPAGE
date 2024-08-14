document.addEventListener('DOMContentLoaded', function() {
    const date = new Date();
    let currentYear = date.getFullYear();
    let currentMonth = date.getMonth();

    const monthNames = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

    const monthYearElement = document.getElementById('month-year');
    const calendarBody = document.getElementById('calendar-body');

    // Sample events data with categories
    const eventsData = {
        '12': { category: 'nagu-event', details: ['NAGU '] }, // December 12
        '14': { category: 'nalgu-event', details: ['NALGU '] }, // December 14
        '5': { category: 'njgf-event', details: ['NJGF '] },  // May 5
        '20': { category: 'sages-event', details: ['SAGES '] }, // May 20
        '7': { category: 'seniors-event', details: ['SENIORS '] }  // July 7
    };

    function renderCalendar() {
        monthYearElement.textContent = `${monthNames[currentMonth]} ${currentYear}`;
        calendarBody.innerHTML = '';

        const firstDayOfMonth = new Date(currentYear, currentMonth, 1).getDay();
        const lastDateOfMonth = new Date(currentYear, currentMonth + 1, 0).getDate();
        let date = 1;

        for (let i = 0; i < 6; i++) { // 6 weeks max
            const row = document.createElement('tr');

            for (let j = 0; j < 7; j++) { // 7 days a week
                const cell = document.createElement('td');
                
                if (i === 0 && j < firstDayOfMonth) {
                    cell.classList.add('empty');
                } else if (date > lastDateOfMonth) {
                    break;
                } else {
                    cell.textContent = date;

                    const eventDate = date.toString();
                    if (eventsData[eventDate]) {
                        cell.classList.add('has-event', eventsData[eventDate].category);
                        
                        const eventList = document.createElement('ul');
                        eventList.classList.add('event-details');
                        eventsData[eventDate].details.forEach(event => {
                            const eventItem = document.createElement('li');
                            eventItem.textContent = event;
                            eventList.appendChild(eventItem);
                        });
                        cell.appendChild(eventList);
                    }

                    if (date === new Date().getDate() && currentMonth === new Date().getMonth() && currentYear === new Date().getFullYear()) {
                        cell.classList.add('active');
                    }

                    date++;
                }

                row.appendChild(cell);
            }

            calendarBody.appendChild(row);
        }
    }

    document.querySelector('.prev-month').addEventListener('click', function() {
        currentMonth = (currentMonth === 0) ? 11 : currentMonth - 1;
        if (currentMonth === 11) currentYear--;
        renderCalendar();
    });

    document.querySelector('.next-month').addEventListener('click', function() {
        currentMonth = (currentMonth === 11) ? 0 : currentMonth + 1;
        if (currentMonth === 0) currentYear++;
        renderCalendar();
    });

    // Render the calendar immediately after setting up everything
    renderCalendar();
});
