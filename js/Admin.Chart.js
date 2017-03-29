
$(function () {
    //DATE
    var d = new Date();
    var Y = d.getYear() + 1900;
    var M = d.getMonth();
    var D = d.getDay();
    var t = d.getDate();
    var st = t - D + 1;
    
    //UVC
    var _lineColor = ['#29a9dc', '#6bd48e', '#ef414d'];
    var _listData = [[0, 300, 400, 450, 700, 800, 1000], [7, 50, 9, 30, 15, 40, 10], [100, 70, 50, 30, 20, 10, 11]];
    var _currentData = [_listData[0], 'Unique Visitors'];
    var _heightChart = 400;
    function chartChange(_this)
    {   
        var tle = $(_this).attr('title');
        var idt = $('.chart-change').index(_this);
        _currentData = [_listData[idt], tle];
    }
    function chart_Apply(){
        $('#chart-display').highcharts({
        credits:{
          enabled: false  
        },
        chart:{
            borderRadius: 3,
            backgroundColor: 'transparent',
            type: 'areaspline',
            height: _heightChart,
            spacing: 0,
            style:{fontFamily: '"roboto", arial, serif, sans-serif'}
        },
        legend:{
            enabled: false  
        },
        title: {
            text: null
        },
        xAxis: {
            lineColor: '#2f323e',
            tickColor: 'transparent',
            type: 'datetime'
        },
        plotOptions:{
            areaspline:{
                marker:{
                    enabled: false
                },
                pointIntervalUnit: 'day',
                pointStart: Date.UTC(Y, M, st, 0, 0, 0),
                fillOpacity: 0.1,
                color:  _lineColor[0]
            }
        },
        yAxis: {
            title: {
                text: null
            },
            gridLineColor: '#2f323e',
            tickAmount: 50,
            labels:{
                enabled:false
            }
        },
        series: [{
            name: _currentData[1],
            data: _currentData[0],
            marker:{
                enabled:true,
                radius:3,
                fillColor:'#ef414d',
                states:{
                    hover:{
                        lineColor: '#2d2e32',
                        linePlusWidth:3,
                        lineWidth:6
                    }
                }
            },
            states:{
                hover:{
                    halo:{
                        attributes:{
                            fill: '#ef414d'
                        },
                        opacity:1,
                        size: 9
                    },
                    marker:{
                        fillColor: '#ef414d'
                    }
                }
            },
            lineWidth:2
        }],
        tooltip:{
            backgroundColor: '#25262a',
            style:{'color': '#e5e6e7'}
        }
    })};
    chart_Apply();
    $('.chart-change').click(function(){
        chartChange(this);
        chart_Apply();
    });
});