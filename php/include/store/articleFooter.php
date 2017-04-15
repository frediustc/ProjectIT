<script>
$( function() {

    var listDate = [[new Date('2017-04-11'), new Date('2017-04-14')], [new Date('2017-04-16'), new Date('2017-05-18')]];
    var disabledList = function (listDate)
    {
        var _list = [];
        for(var i = 0; listDate.length > i; i++ )
        {
            while(listDate[i][0] <= listDate[i][1])
            {
                var m = (listDate[i][0].getMonth() > 9) ? (listDate[i][0].getMonth() + 1) : '0' + (listDate[i][0].getMonth() + 1);
                var d = (listDate[i][0].getDate() > 9) ? listDate[i][0].getDate() : '0' + listDate[i][0].getDate();
                var y = listDate[i][0].getYear() + 1900;
                _list.push( m + '-' + d + '-' + y);
                listDate[i][0].setDate(listDate[i][0].getDate() + 1);
            }
        }
        return _list;
    }

    var rent = disabledList(listDate);

    var from = $( "#datepickerFrom" )
      .datepicker({
          beforeShowDay: function(date){
            var string = jQuery.datepicker.formatDate('mm-dd-yy', date);
            return [ rent.indexOf(string) == -1 ];
        },
        defaultDate: "+1w",
        changeMonth: true
      })
      .on( "change", function() {
        to.datepicker( "option", "minDate", getDate( this ) );
      }),
    to = $( "#datepickerTo" ).datepicker({
        beforeShowDay: function(date){
            var string = jQuery.datepicker.formatDate('mm-dd-yy', date);
            return [ rent.indexOf(string) == -1 ];
      },
      defaultDate: "+1w",
      changeMonth: true
    })
    .on( "change", function() {
      from.datepicker( "option", "maxDate", getDate( this ) );
    });

  function getDate( element ) {
    var date;
    try {
      date = $.datepicker.parseDate( dateFormat, element.value );
    } catch( error ) {
      date = null;
    }

    return date;
  }
} );
</script>
<?php if(!empty($pdct['billboard_map_lat']) && !empty($pdct['billboard_map_lon']) && !empty($pdct['billboard_map_zoom']))
{ ?>
<script>
  function initMap() {
    var uluru = {lat: <?php echo $pdct['billboard_map_lat']; ?>, lng: <?php echo $pdct['billboard_map_lon']; ?>};
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: <?php echo $pdct['billboard_map_zoom']; ?>,
      center: uluru
    });
    var marker = new google.maps.Marker({
      position: uluru,
      map: map
    });
  }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKnq0whu8gFu9THGpFyurNy_TNI_pFKyY&callback=initMap"
async defer></script>
<?php } ?>
