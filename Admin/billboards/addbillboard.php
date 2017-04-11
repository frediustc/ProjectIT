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
            <form class="form-horizontal add-bill-form" method="post" action="./addbillboard.php">
                <?php require $rep . 'php/script/admin/add_billboards.php'; ?>
                <div class="form-group">
                    <h1 class="legend legend-left text-primary"><span class="legend-text">General Information</span></h1>
                    <div class="col-xs-6">
                        <label for="loc">Location</label>
                        <input type="text" name="location" required="" id="loc" class="form-control" placeholder="ex: Labone"/>
                    </div>
                    <div class="col-xs-6">
                        <label for="price">Price</label>
                        <div class="input-group">
                            <span class="input-group-addon">Cedis</span>
                            <input type="text" name="price" required="" id="price" class="form-control"  placeholder="ex: 100.00"/>
                        </div>

                    </div>
                </div>
                <div class="form-group">
                    <h1 class="legend legend-left text-primary"><span class="legend-text">Size Information</span></h1>
                    <div class="col-xs-6">
                        <label for="width">Width</label>
                        <div class="input-group">
                            <span class="input-group-addon">meter</span>
                            <input type="text" name="width" required="" id="width" class="form-control" placeholder="ex: 2.6"/>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <label for="height">Height</label>
                        <div class="input-group">
                            <span class="input-group-addon">meter</span>
                            <input type="text" name="height" required="" id="height" class="form-control" placeholder="ex: 3.3" />
                        </div>

                    </div>
                </div>
                <div class="form-group">
                    <h1 class="legend legend-left text-primary"><span class="legend-text">Map View Information</span></h1>
                    <div class="col-xs-4">
                        <label for="lat">Lattitude</label>
                        <div class="input-group">
                            <span class="input-group-addon">decimal</span>
                            <input type="text" name="lattitude" required="" id="lat" class="form-control" placeholder="ex: 2.685" />
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <label for="lon">Longitude</label>
                        <div class="input-group">
                            <span class="input-group-addon">decimal</span>
                            <input type="text" name="longitude" required="" id="lon" class="form-control" placeholder="ex: 2.685"/>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <label for="zoom">Zoom</label>
                        <div class="input-group">
                            <span class="input-group-addon">decimal</span>
                            <input type="text" name="zoom" required="" id="zoom" class="form-control" placeholder="ex: 2.685"/>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <h1 class="legend legend-left text-primary"><span class="legend-text">Authentification</span></h1>
                    <div class="col-xs-12">
                        <label for="psw">Your password</label>
                        <input type="password" name="psw" required="" id="psw" class="form-control" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12 text-center">
                        <input type="submit" name="add-bill" value="Add Billboard" class="btn btn-success btn-lg btn-3d " />
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php include($rep . "php/include/admin/notif.php");?>
</div>
<?php include($rep . "php/include/footer.php");?>
