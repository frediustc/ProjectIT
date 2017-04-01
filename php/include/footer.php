    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/plugins/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/bootstrap.me.js"></script>
    <!-- High Chart -->
    <?php echo ($page === 'Admin Dashboard') ? '<script src="js/plugins/highcharts.js"></script><script src="js/Admin.Chart.js"></script>' : null; ?>
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
    });" : null; ?>
    </script>
</body>

</html>
