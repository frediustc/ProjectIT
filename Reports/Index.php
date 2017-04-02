<?php
$page = "Admin Reports";
$rep = "../";
include($rep . "php/include/head.php");
include($rep . "php/include/menu.php");
?>
<div class="row">
    <div class="col-sm-3">
        <div class="box box-left box-primary general-info-reports-top box-round">
            <p class="text-capitalize no-margin general-info-reports-top-title"><strong>Total Reports</strong></p>
            <h1 class="no-margin text-primary">2000</h1>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="box box-left box-warning general-info-reports-top box-round">
            <p class="text-capitalize no-margin general-info-reports-top-title"><strong>Unseen Reports</strong></p>
            <h1 class="no-margin text-warning">1300</h1>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="box box-left box-success general-info-reports-top box-round">
            <p class="text-capitalize no-margin general-info-reports-top-title"><strong>viewed Reports</strong></p>
            <h1 class="no-margin text-success">700</h1>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="box box-left box-alt general-info-reports-top box-round">
            <p class="text-capitalize no-margin general-info-reports-top-title"><strong>Customers Online</strong></p>
            <h1 class="no-margin text-alt">50</h1>
        </div>
    </div>
</div>
<?php include($rep . "php/include/footer.php");?>
