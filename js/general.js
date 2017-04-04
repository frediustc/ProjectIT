jQuery(document).ready(function(){
    //no jump for simple anchor
    $('a[href="#"]').click(function(event){
        event.preventDefault();
    });

    //tooltips initialization
    $('[data-toggle="tooltip"]').tooltip();

    //var to get date and time in letters
    var getActualDateTime = (function()
    {
        //date
        var d = new Date();
        var _d = d.getDay();
        var _days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
        var _D = d.getDate();
        var _m = d.getMonth();
        var _month = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        var _year = d.getYear() + 1900;
        switch (_D) {
            case (_D % 10) == 1:
                _D += '<sup>St</sup>';
                break;
            case (_D % 10) == 2:
                _D += '<sup>Nd</sup>';
                break;
            case (_D % 10) == 3:
                _D += '<sup>Rd</sup>';
                break;
            default:
                _D += '<sup>Th</sup>';

        }
        //time
        //return
        return {
            day: _days[_d],
            date: _D,
            month: _month[_m],
            year: _year
        };
    })();
    //set the date and time at the top of the page
    $('.todayDateTop').empty().append(getActualDateTime.day + ', ' + getActualDateTime.date + ' ' + getActualDateTime.month + ' ' + getActualDateTime.year);
});
