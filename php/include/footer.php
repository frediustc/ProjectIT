    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/plugins/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/bootstrap.me.js"></script>
    <!-- High Chart -->
    <?php echo ($page === 'Admin Dashboard') ? '<script src="js/plugins/highcharts.js"></script>' : null; ?>
    <?php echo ($page === 'Admin Dashboard') ? '<script src="http://chartwidget/myChart.js"></script>' : null; ?>
    <!--general js script -->
    <script src="js/general.js"></script>
    <!-- for admin dashboard -->
    <script src="http://projectit/js/plugins/jquery-ui.min.js"></script>
    <?php echo ($page === 'Admin Dashboard') ? "
    <script>
    $('#calendar').datepicker({
        inline: true,
        firstDay: 1,
        showOtherMonths: true,
        dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat']
    });
    var vis_list = [10, 20, 30, 40, 50, 60];
    var rep_list = [60, 50, 40, 30, 20, 10];
    var ord_list = [10, 50, 30, 60, 50, 20];
    createChart('#visitors', vis_list, 'Uniques Visitors', '#4CB8FF');
    createChart('#orders', ord_list, 'Orders', '#FE7167');
    createChart('#reports', rep_list, 'Reports', '#00C484'); " : null; ?>
    </script>
    <script>
        jQuery(document).ready(function() {
            function switchCheck(_clicked, _affected)
            {
                if($(_clicked).hasClass('actived')) {
                    $(_affected).removeClass('actived');
                }
                else {
                    $(_affected).addClass('actived');
                }
            }
            $('.chk-lab').click(function() {
                if($(this).hasClass('check-all-reports'))
                {
                    switchCheck(this, '.chk-lab');
                }
                else {
                    switchCheck(this, this);
                }
            });
        });
    </script>
</body>

</html>
