/* Author: Tomás Solar Castro

*/

var getDate = function (myDate, formatted) {
    formatted = typeof formatted !== 'undefined' ? formatted : false;
    //    myDate = typeof myDate !== 'undefined' ? myDate: '0000-01-01';

    var formattedDate = null;
    if(typeof myDate !== 'undefined') {
        var date = new Date(myDate);
        if (formatted === true) {
            formattedDate = (date.getDate()+1) + ' de ' + getMonthName(date.getMonth()) + ' de ' + date.getFullYear();
        } else {
            formattedDate = (date.getDate()+1) + '-' + (date.getMonth()+1) + '-' + date.getFullYear();
        }
    }
    return formattedDate;
//    return date;
};

var getMonthNames = function() {
    return ['enero', 'febrero', 'marzo',
    'abril',
    'mayo',
    'junio',
    'julio',
    'agosto',
    'septiembre',
    'octubre',
    'noviembre',
    'diciembre'
    ];
};
var getMonthName = function (month) {
    var months = getMonthNames();
    return months[month];
};



$(document).ready(function() {
    $.featureList(
        $("#tabs li a"),
        $("#output li"),
        {
            start_item	:	1
        }
        );
/*
                // Alternative
                $('#tabs li a').featureList({
                    output			:	'#output li',
                    start_item		:	1
                });
                */
});