jQuery(document).ready(function(){
    //no jump for simple anchor
    $('a[href="#"]').click(function(event){
        event.preventDefault();
    });

    //tooltips initialization
    $('[data-toggle="tooltip"]').tooltip();

    //var to get date and time in letters

        //date - days - months - years


    var getActualDateTime = (function()
    {
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
        var _min = (d.getMinutes() > 9) ? d.getMinutes() : 0 + '' + d.getMinutes();
        var _sec = (d.getSeconds() > 9) ? d.getSeconds() : 0 + '' + d.getSeconds();
        var _ghr = d.getHours();
        var _hr = (_ghr > 12) ? (_ghr - 12) : _ghr;
        _hr =  (_hr > 9) ? _hr : 0 + '' + _hr;
        _ts = (_ghr > 12) ? 'PM' : 'AM';
        //hours - minutes - seconds
        var _min = (d.getMinutes() > 9) ? d.getMinutes() : 0 + '' + d.getMinutes();
        var _sec = (d.getSeconds() > 9) ? d.getSeconds() : 0 + '' + d.getSeconds();
        var _ghr = d.getHours();
        var _hr = (_ghr > 12) ? (_ghr - 12) : _ghr;
        _hr =  (_hr > 9) ? _hr : 0 + '' + _hr;
        _ts = (_ghr > 12) ? 'PM' : 'AM';
        return {
            day: _days[_d],
            date: _D,
            month: _month[_m],
            year: _year,
            min: _min,
            sec: _sec,
            hr: _hr,
            timeState: _ts
        };
    })();
    //set the date and time at the top of the page
    $('.todayDateTop').empty().append(getActualDateTime.day + ', ' + getActualDateTime.date + ' ' + getActualDateTime.month + ' ' + getActualDateTime.year);
    setInterval(function(){
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
        var _min = (d.getMinutes() > 9) ? d.getMinutes() : 0 + '' + d.getMinutes();
        var _sec = (d.getSeconds() > 9) ? d.getSeconds() : 0 + '' + d.getSeconds();
        var _ghr = d.getHours();
        var _hr = (_ghr > 12) ? (_ghr - 12) : _ghr;
        _hr =  (_hr > 9) ? _hr : 0 + '' + _hr;
        _ts = (_ghr > 12) ? 'PM' : 'AM';
        //hours - minutes - seconds
        var _min = (d.getMinutes() > 9) ? d.getMinutes() : 0 + '' + d.getMinutes();
        var _sec = (d.getSeconds() > 9) ? d.getSeconds() : 0 + '' + d.getSeconds();
        var _ghr = d.getHours();
        var _hr = (_ghr > 12) ? (_ghr - 12) : _ghr;
        _hr =  (_hr > 9) ? _hr : 0 + '' + _hr;
        _ts = (_ghr > 12) ? 'PM' : 'AM';
        $('.actualTimeTop').empty().append(_hr + ':' + _min +  ':' + _sec + '' + _ts);
    }, 1000);


});
