
$('#calendar').fullCalendar({
    // put your options and callbacks here
    events: '/event/getEvents',
    monthNames: getMonthNames(),
    header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,basicWeek,basicDay'
    },
    firstDay: 1, // lunes
    defaultView: 'month',
    buttonText: {
        today:    'hoy',
        month:    'mes',
        week:     'semana',
        day:      'd&iacute;a'
    },
    dayNamesShort: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'S&aacute;'],
    dayClick: function() {
        alert('a day has been clicked!');
    },
    eventClick: function(event) {
        if (event.title) {
            $("#myModalLabel").text(event.title);
            $(".modal-body > .date > .start > .start_date").text(getDate(event.start_date, true));
            $(".modal-body > .date > .start > .start_date").text(event.start_time);

            $(".modal-body > .date > .end > .end_date").text(getDate(event.end_date, true));
            $(".modal-body > .date > .end > .end_time").text(event.end_time);

            $("#eventUrl").attr('href', event.url);
            $('#myModal').modal('show');
        } else {
        }
        return false;
    }
});