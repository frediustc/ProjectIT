<?php
$page = "Admin Billboards";
$rep = "../../";
include($rep . "php/include/head.php");
include($rep . "php/include/menu.php");

?>
<div class="row">
    <div class="col-xs-9">
        <div class="action-table box">
            <h1 class="table-title bg-primary text-capitalize box text-center">Edit Billboard information</h1>
            <div class="alert-info-box">
                <?php require $rep . 'php/script/admin/update_billboards.php';
                $selbill = $db->prepare('SELECT * FROM billboards WHERE billboard_id = ?');
                $selbill->execute(array($_GET['id']));
                $sb = $selbill->fetch();
                ?>
            </div>
            <form class="form-horizontal add-bill-form" method="post" action="./editbillboard.php?id=<?php echo $sb['billboard_id'];?>">

                <div class="form-group">
                    <h1 class="legend legend-left text-primary"><span class="legend-text">General Information</span></h1>
                    <div class="col-xs-6">
                        <label for="loc">Location</label>
                        <input type="text" name="location" id="loc" value="<?php echo $sb['billboard_location']; ?>" class="form-control" placeholder="ex: Labone"/>
                    </div>
                    <div class="col-xs-6">
                        <label for="price">Price</label>
                        <div class="input-group">
                            <span class="input-group-addon">Cedis</span>
                            <input type="text" name="price" value="<?php echo $sb['billboard_price']; ?>" id="price" class="form-control"  placeholder="ex: 100.00"/>
                        </div>

                    </div>
                </div>
                <div class="form-group">
                    <h1 class="legend legend-left text-primary"><span class="legend-text">Size Information</span></h1>
                    <div class="col-xs-6">
                        <label for="width">Width</label>
                        <div class="input-group">
                            <span class="input-group-addon">meter</span>
                            <input type="text" name="width" value="<?php echo $sb['billboard_width']; ?>" id="width" class="form-control" placeholder="ex: 2.6"/>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <label for="height">Height</label>
                        <div class="input-group">
                            <span class="input-group-addon">meter</span>
                            <input type="text" name="height" value="<?php echo $sb['billboard_height']; ?>" id="height" class="form-control" placeholder="ex: 3.3" />
                        </div>

                    </div>
                </div>
                <div class="form-group">
                    <h1 class="legend legend-left text-primary"><span class="legend-text">Map View Information</span></h1>
                    <div class="col-xs-4">
                        <label for="lat">Lattitude</label>
                        <div class="input-group">
                            <span class="input-group-addon">decimal</span>
                            <input type="text" name="lattitude" value="<?php echo $sb['billboard_map_lat']; ?>" id="lat" class="form-control" placeholder="ex: 2.685" />
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <label for="lon">Longitude</label>
                        <div class="input-group">
                            <span class="input-group-addon">decimal</span>
                            <input type="text" name="longitude" value="<?php echo $sb['billboard_map_lon']; ?>" id="lon" class="form-control" placeholder="ex: 2.685"/>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <label for="zoom">Zoom</label>
                        <div class="input-group">
                            <span class="input-group-addon">decimal</span>
                            <input type="text" name="zoom" value="<?php echo $sb['billboard_map_zoom']; ?>" id="zoom" class="form-control" placeholder="ex: 2.685"/>
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
                        <input type="submit" name="update-bill" value="Update Billboard" class="btn btn-success btn-lg btn-3d " />
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php include($rep . "php/include/admin/notif.php");?>
</div>
<?php include($rep . "php/include/footer.php");?>
