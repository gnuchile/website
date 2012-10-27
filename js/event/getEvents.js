
$('#calendar').fullCalendar({
    // put your options and callbacks here
    events: '/event/getEvents',
    dayClick: function() {
        alert('a day has been clicked!');
    },
    eventClick: function(event) {
        if (event.title) {
            alert(event.title);
        } else {
        }
        return false;
    }
});