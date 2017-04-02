
function createChart(_el, _list, _title, _color)
{
    //get current time
    var _d = new Date();
    var _Y = _d.getYear() + 1900;
    var _M = _d.getMonth();
    var _D = _d.getDay();
    var _t = _d.getDate();
    var _st = _t - _D + 1;
    //setting color
    _color = (_color) ? _color : '#59d4db';
    //creating chart base on selected element
    $(_el).highcharts({
        chart:{type: 'areaspline', height: 200, style:{fontFamily: 'roboto, Arial, verdana, serif, sans-serif'}},
        title:{ text: _title, align: 'left'},
        credits:{enabled: false},
        xAxis:{type: 'datetime', title:{ text: null}, gridLineWidth: 1, tickWidth: 0},
        yAxis:{tickAmount: 5, title:{text: null}},
        series:[{data: _list}],
        legend:{enabled: false},
        plotOptions:{areaspline:{
            color: _color,
            fillOpacity: 0.75,
            marker:{enabled: false},
            pointIntervalUnit: 'day',
            pointStart: Date.UTC(_Y, _M, _st, 0, 0, 0)}
        }
    });
}
