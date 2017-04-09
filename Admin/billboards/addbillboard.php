<?php
$page = "Admin Billboards";
$rep = "../../";
include($rep . "php/include/head.php");
include($rep . "php/include/menu.php");
?>

<div class="row">
    <div class="col-sm-4">
        <div class="box box-left box-primary general-info-table-top box-round">
            <p class="text-capitalize no-margin general-info-table-top-title"><strong>Total Billboards</strong></p>
            <h1 class="no-margin text-primary">2000</h1>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="box box-left box-warning general-info-table-top box-round">
            <p class="text-capitalize no-margin general-info-table-top-title"><strong>Rented Billboards</strong></p>
            <h1 class="no-margin text-warning">1300</h1>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="box box-left box-success general-info-table-top box-round">
            <p class="text-capitalize no-margin general-info-table-top-title"><strong>Available Billboards</strong></p>
            <h1 class="no-margin text-success">700</h1>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-9">
        <div class="action-table box">
            <h1 class="table-title bg-primary text-capitalize box text-center">Add Billboards</h1>
            <form>
                <div>
                    
                </div>
            </form>
        </div>
    </div>
    <?php include($rep . "php/include/admin/notif.php");?>
</div>
<?php include($rep . "php/include/footer.php");?>
