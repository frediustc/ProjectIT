<?php
$page = "Admin Billboards";
$rep = "../";
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
    <div class="col-xs-12">
        <div class="action-table box">
            <h1 class="table-title bg-primary text-capitalize box text-center">Posted Billboards</h1>
            <p class="text-right addbill"><a href="#" class="btn-3d btn-lg btn btn-success bg-success">Add Billboards</a></p>
            <table class="data-table table table-hover">
                <thead>
                    <tr class="text-primary">
                        <th class="text-center text-capitalize">ID</th>
                        <th class="text-center text-capitalize">Location</th>
                        <th class="text-center text-capitalize">Posted date</th>
                        <th class="text-center text-capitalize">Files</th>
                        <th class="text-center text-capitalize">Mapped</th>
                        <th class="text-center text-capitalize">Status</th>
                        <th class="text-center text-capitalize">option<s/th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr>
                        <td class="text-danger">1</td>
                        <td>Labone</td>
                        <td>1<sup>St</sup> March 2017</td>
                        <td>2</td>
                        <td>yes</td>
                        <td>Rented</td>
                        <td>
                            <button class="btn bg-success glyphicon glyphicon-eye-open"></button>
                            <button class="btn bg-primary glyphicon glyphicon-edit"></button>
                            <button class="btn bg-danger glyphicon glyphicon-trash"></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-alt">1</td>
                        <td>Labone</td>
                        <td>1<sup>St</sup> March 2017</td>
                        <td>2</td>
                        <td>yes</td>
                        <td>Rented</td>
                        <td>
                            <button class="btn bg-success glyphicon glyphicon-eye-open"></button>
                            <button class="btn bg-primary glyphicon glyphicon-edit"></button>
                            <button class="btn bg-danger glyphicon glyphicon-trash"></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>


    </div>
</div>
<?php include($rep . "php/include/footer.php");?>
