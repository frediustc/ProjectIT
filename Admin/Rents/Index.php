<?php
$page = "Admin Rents";
$rep = "../../";
include($rep . "php/include/head.php");
include($rep . "php/include/menu.php");
?>
<div class="row">
    <div class="col-sm-4">
        <div class="box box-left box-success general-info-table-top box-round">
            <p class="text-capitalize no-margin general-info-table-top-title"><strong>Total Rents</strong></p>
            <h1 class="no-margin text-success">2000</h1>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="box box-left box-warning general-info-table-top box-round">
            <p class="text-capitalize no-margin general-info-table-top-title"><strong>Rented Rents</strong></p>
            <h1 class="no-margin text-warning">1300</h1>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="box box-left box-alt general-info-table-top box-round">
            <p class="text-capitalize no-margin general-info-table-top-title"><strong>Available Rents</strong></p>
            <h1 class="no-margin text-alt">700</h1>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-10 col-xs-push-1">
        <div class="action-table box">
            <h1 class="table-title bg-success text-capitalize box text-center">Billboards Rented</h1>
            <table class="data-table table table-hover">
                <thead>
                    <tr class="text-success">
                        <th class="text-center text-capitalize">ID</th>
                        <th class="text-center text-capitalize">Customer</th>
                        <th class="text-center text-capitalize">Contact</th>
                        <th class="text-center text-capitalize">Location</th>
                        <th class="text-center text-capitalize">Order date</th>
                        <th class="text-center text-capitalize">Status</th>
                        <th class="text-center text-capitalize">option<s/th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr>
                        <td class="text-danger">#AF05020317</td>
                        <td>Fredius Tout Court</td>
                        <td>Frediustc@gmail.con</td>
                        <td>Labone</td>
                        <td>1<sup>St</sup> March 2017</td>
                        <td>Rented</td>
                        <td>
                            <button class="btn bg-success glyphicon glyphicon-eye-open"></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include($rep . "php/include/footer.php");?>
