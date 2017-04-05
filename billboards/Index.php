<?php
$page = "Admin Billboards";
$rep = "../";
include($rep . "php/include/head.php");
include($rep . "php/include/menu.php");
?>

<div class="row">
    <div class="col-sm-4">
        <div class="box box-left box-primary general-info-reports-top box-round">
            <p class="text-capitalize no-margin general-info-reports-top-title"><strong>Total Billboards</strong></p>
            <h1 class="no-margin text-primary">2000</h1>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="box box-left box-warning general-info-reports-top box-round">
            <p class="text-capitalize no-margin general-info-reports-top-title"><strong>Rented Billboards</strong></p>
            <h1 class="no-margin text-warning">1300</h1>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="box box-left box-success general-info-reports-top box-round">
            <p class="text-capitalize no-margin general-info-reports-top-title"><strong>Available Billboards</strong></p>
            <h1 class="no-margin text-success">700</h1>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12">
        <div class="action-billboard-table box">
            <h1 class="table-title">posted Billboards</h1>
            <table class="report-table table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Location</th>
                        <th>Posted date</th>
                        <th>Files</th>
                        <th>Mapped</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Labone</td>
                        <td>1<sup>St</sup> March 2017</td>
                        <td>2</td>
                        <td>yes</td>
                        <td>Rented</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Labone</td>
                        <td>1<sup>St</sup> March 2017</td>
                        <td>2</td>
                        <td>yes</td>
                        <td>Rented</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include($rep . "php/include/footer.php");?>
