<?php //$inter = $db->prepare('SELECT * FROM orders WHERE order_billboard_id = ?') ?>
<script>
    var listDate = [<?php for ($i=0; $i < count($ordercalrem) ; $i++) { ?>
        [new Date('<?php echo $ordercalrem[$i]; ?>'), new Date('<?php echo $ordercalrem[++$i]; ?>')],
    <?php } ?> [new Date('0001-01-01'), new Date('0001-01-02')]];
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

<script type="text/javascript">
jQuery(document).ready(function($) {
    $('.orderit input').change(function(event) {
        var inp = $('.orderit input');
        var changed = true;
        var breaks = false;
        var startdate = $(inp[0]).val().replace(/\//g, '-');
        var enddate = $(inp[1]).val().replace(/\//g, '-');
        for(var i = 0; i < inp.length; i++)
        {
            if($(inp[i]).val() === '')
            {
                changed = false;
            }
        }

        for(var i = 0 ; i < rent.length; i++)
        {
            if(startdate <= rent[i] && enddate >= rent[i])
            {
                breaks = true;
            }
        }
        if(!breaks)
        {
            if(changed)
            {
                if(enddate > startdate)
                {
                    $('.orderMsg').text('').fadeOut(500);
                    $('.orderit button').attr('disabled', false);
                }
                else
                {
                    $('.orderit button').attr('disabled', true);
                    $('.orderMsg').text('your starting date must be lower than your ending date check the ').append('<a href="#rent-order">rent and orders list</a>').fadeIn(500);
                }
            }
        }
        else
        {
            $('.orderit button').attr('disabled', true);
            $('.orderMsg').text('you can\'t order during this periode because some has order this banner within this same periode select a continous time check the ').append('<a href="#rent-order">rent and orders list</a>').fadeIn(500);
        }
        $('.orderit').on('submit', function(e){
            // if(breaks || !changed || enddate < startdate)
            // {
            //     e.preventDefault();
            //     // return false;
            // }
        });
    });
});

</script>
<script src="<?php echo $rep; ?>js/order.js"></script>
