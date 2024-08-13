document.addEventListener('DOMContentLoaded', function() {
    const date = new Date();
    let currentYear = date.getFullYear();
    let currentMonth = date.getMonth();
    let activeCategory = 'NAGU';

    const monthNames = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

    const monthYearElement = document.getElementById('month-year');
    const calendarBody = document.getElementById('calendar-body');
    const tabs = document.querySelectorAll('.calendar-menu li');

    const eventsData = {
        'NAGU': { '12': ['NAGU Event 1'], '14': ['NAGU Event 2'] },
        'NALGU': { '5': ['NALGU Event 1'], '20': ['NALGU Event 2'] },
        'NJGF': { '7': ['NJGF Event 1'], '21': ['NJGF Event 2'] },
        'SAGES': { '2': ['SAGES Event 1'], '18': ['SAGES Event 2'] },
        'SENIORS': { '9': ['SENIORS Event 1'], '25': ['SENIORS Event 2'] },
    };

    function getEventClass(category) {
        switch (category) {
            case 'NAGU': return 'nagu-event';
            case 'NALGU': return 'nalgu-event';
            case 'NJGF': return 'njgf-event';
            case 'SAGES': return 'sages-event';
            case 'SENIORS': return 'seniors-event';
            default: return '';
        }
    }

    function renderCalendar() {
        monthYearElement.textContent = `${monthNames[currentMonth]} ${currentYear}`;
        calendarBody.innerHTML = '';

        const firstDayOfMonth = new Date(currentYear, currentMonth, 1).getDay();
        const lastDateOfMonth = new Date(currentYear, currentMonth + 1, 0).getDate();
        let date = 1;

        for (let i = 0; i < 6; i++) {
            const row = document.createElement('tr');

            for (let j = 1; j <= 7; j++) {
                const cell = document.createElement('td');
                
                if (i === 0 && j < firstDayOfMonth) {
                    cell.classList.add('empty');
                } else if (date > lastDateOfMonth) {
                    break;
                } else {
                    cell.textContent = date;

                    if (eventsData[activeCategory] && eventsData[activeCategory][date]) {
                        const eventList = document.createElement('ul');
                        eventsData[activeCategory][date].forEach(event => {
                            const eventItem = document.createElement('li');
                            eventItem.textContent = event;
                            eventItem.classList.add(getEventClass(activeCategory)); // Apply the corresponding class
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

    tabs.forEach(tab => {
        tab.addEventListener('click', function() {
            tabs.forEach(tab => tab.classList.remove('active'));
            this.classList.add('active');
            activeCategory = this.getAttribute('data-category');
            renderCalendar();
        });
    });

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

    // Set the initial active tab and render the calendar
    document.getElementById('tab-nagu').classList.add('active');
    renderCalendar();
});
