            <footer class="footer text-center">
                <p>Copyright (c) 2017 <a href="http://www.mounti.xyz">Diomande Dro Freddy Junior Authors</a> - <b>Holala</b></p>
            </footer>
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo $rep; ?>js/plugins/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo $rep; ?>bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo $rep; ?>js/bootstrap.me.js"></script>
    <!-- High Chart -->
    <?php echo ($page === 'Admin Dashboard') ? '<script src="' . $rep . 'js/plugins/highcharts.js"></script>' : null; ?>
    <?php echo ($page === 'Admin Dashboard') ? '<script src="'. $rep . 'Asset/Widgets/Chart/myChart.js"></script>' : null; ?>
    <?php echo ($page === 'Setup page') ? '<script src="js/jsScan/setup.js"></script>' : null; ?>
    <!--general js script -->
    <script src="<?php echo $rep; ?>js/general.js"></script>
    <!-- for admin dashboard -->
    <script src="<?php echo $rep; ?>js/plugins/jquery-ui.min.js"></script>
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
    createChart('#reports', rep_list, 'Reports', '#00C484'); </script>" : null; ?>

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
    <?php ($page === "Store Article Page") ? include($rep . 'php/include/store/articleFooter.php') : null; ?>
    <?php ($page === "Admin Billboards") ? include($rep . 'php/include/billboardFooter.php') : null; ?>
    <script>
    setTimeout(function(){
        $('.alert').fadeOut(500);
    },5000);
    </script>
</body>

</html>
