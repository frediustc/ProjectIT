<?php
$page = "Admin Billboards";
$rep = "../../";
include($rep . "php/include/head.php");
include($rep . "php/include/menu.php");

include 'delete.php';
$selbill = $db->query('SELECT * FROM billboards ORDER BY billboard_post_date DESC LIMIT 20 ');
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
            <h1 class="table-title bg-primary text-capitalize box text-center">Posted Billboards</h1>
            <p class="text-right addbill"><a href="./addbillboard.php" class="btn-3d btn-lg btn btn-success bg-success">Add Billboards</a></p>
            <?php
            if (!empty($selbill)) { ?>
                <table class="data-table table table-hover">
                    <thead>
                        <tr class="text-primary">
                            <th class="text-center text-capitalize">ID</th>
                            <th class="text-center text-capitalize">Location</th>
                            <th class="text-center text-capitalize">Posted since</th>
                            <th class="text-center text-capitalize">Files</th>
                            <th class="text-center text-capitalize">Mapped</th>
                            <th class="text-center text-capitalize">Status</th>
                            <th class="text-center text-capitalize">option<s/th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                <?php
                while ($eachbill = $selbill->fetch()) {
                    $ct = $db->prepare('SELECT COUNT(*) AS ct FROM billboards_img WHERE billboards_img_billboard_id = ?');
                    $ct->execute(array($eachbill['billboard_id']));
                    $count = $ct->fetch();
                    $posted_date = DateTime::createFromFormat('Y-m-d H:i:s', $eachbill['billboard_post_date']);
                    ?>
                    <tr>
                        <td class="text-danger">#<?php echo $eachbill['billboard_id']; ?></td>
                        <td class="text-capitalize"><?php echo $eachbill['billboard_location']; ?></td>
                        <td class="text-capitalize"><?php echo elapsed_time($posted_date->getTimestamp()); ?></td>
                        <td class="text-capitalize"><?php echo $count['ct']; ?></td>
                        <td class="text-capitalize"><?php echo ($eachbill['billboard_map_lat'] > 0 && $eachbill['billboard_map_lon'] > 0 && $eachbill['billboard_map_zoom'] > 0) ? 'yes' : 'no'; ?></td>
                        <td class="text-capitalize"><?php echo $eachbill['billboard_availability']; ?></td>
                        <td>
                            <a href="./addImages.php?id=<?php echo $eachbill['billboard_id']; ?>" class="btn bg-alt glyphicon glyphicon-picture" title="add pictures"></a>
                            <a href="./view.php?id=<?php echo $eachbill['billboard_id']; ?>" class="btn bg-success glyphicon glyphicon-eye-open" title="more details"></a>
                            <a href="editbillboard.php?id=<?php echo $eachbill['billboard_id']; ?>" class="btn bg-primary glyphicon glyphicon-edit" title=""></a>
                            <form class="btn-form form-inline" action="./" method="post">
                                <button type="submit" name="delete" value="<?php echo $eachbill['billboard_id']; ?>" class="delete btn bg-danger glyphicon glyphicon-trash" title=""></a>
                            </form>
                        </td>
                    </tr>
            <?php } ?>
                    </tbody>
                </table>
                <?php
            }
            else
            {

            }
            ?>
        </div>
    </div>
    <?php include($rep . "php/include/admin/notif.php");?>
</div>
<script>
//<!--
var del = document.querySelectorAll('.delete');
for(var i = 0; i < del.length; i++)
{
    del[i].addEventListener('click', function(e){
        if(!confirm('do you really want to delete this billboard? '))
        {
            e.preventDefault();
            return false;
        }
    }, true);
}
//-->
</script>
<?php include($rep . "php/include/footer.php"); ?>
