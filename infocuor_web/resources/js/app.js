import './bootstrap';

import { Calendar } from '@fullcalendar/core';
import dayGridPlugin from '@fullcalendar/daygrid';
import interactionPlugin from '@fullcalendar/interaction'; // for clickable events

document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new Calendar(calendarEl, {
        plugins: [dayGridPlugin, interactionPlugin],
        initialView: 'dayGridMonth',
        events: '/api/event-bookings', // Fetch events from your backend
        editable: false, // Members can't edit
        eventClick: function(info) {
            alert('Event: ' + info.event.title);
        }
    });

    calendar.render();
});
