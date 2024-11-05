document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar'); // Assuming 'calendar' is your element ID

    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        events: '/your-events-url',  // Your event source URL or event data
        // Other FullCalendar configurations here...
    });

    calendar.render();

    // Set an interval to refresh events every 5 minutes (300000 milliseconds)
    setInterval(function() {
        calendar.refetchEvents();
    }, 300000); // 300000 milliseconds = 5 minutes
});
