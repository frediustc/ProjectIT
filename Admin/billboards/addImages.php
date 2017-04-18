<?php
$page = "Admin Billboards";
$rep = "../../";
include($rep . "php/include/head.php");
include($rep . "php/include/menu.php");
$selbill = $db->prepare('SELECT * FROM billboards WHERE billboard_id = ?');
$selbill->execute(array($_GET['id']));
$sb = $selbill->fetch();
?>

<div class="row">
    <div class="col-xs-9">
        <div class="action-table box">
            <h1 class="table-title bg-primary text-capitalize box text-center">Add Picture to billboard</h1>
s
            <div class="img-uploader-box">
            <?php include $rep .'php/script/uploadBillboardImages/Index.php';?>
                <h1>Related images</h1>
                <ul class="list-unstyled list-inline view-posted-img">
                    <?php $img_bill_view_all = $db->prepare('SELECT * FROM billboards_img WHERE billboards_img_billboard_id = ?');
                    $img_bill_view_all->execute(array($sb['billboard_id']));
                    while ($ibv = $img_bill_view_all->fetch()) { ?>
                        <li><img src="<?php echo $rep;?>media/images/billboards/<?php echo $ibv['billboard_img_name'] . '.' . $ibv['billboard_img_extension'];?>" alt="<?php echo $ibv['billboard_img_name'];?>" class="img-responsive box"/></li>
                    <?php } ?>
                </ul>
                <form class="btn btn-success fileinput-button" method="post" action="./addImages.php?id=<?php echo $sb['billboard_id']; ?>" enctype="multipart/form-data">
                    <i class="glyphicon glyphicon-plus"></i>
                    <label for="fileupload">Add files...</label>
                    <!-- The file input field used as target for the file upload widget -->
                    <input id="fileupload" type="file" name="files" required="">
                    <input type="submit" name="upload" value="upload" class="btn btn-default"/>
                </form>
                <br>
                <br>
                <!-- The container for the uploaded files -->
                <div id="files" class="files"></div>
                <br>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Requirement Notes</h3>
                    </div>
                    <div class="panel-body">
                        <ul>
                            <li>The maximum file size for uploads is <strong>4 Mo</strong> per file</li>
                            <li>Only image files (<strong>JPG, PNG</strong>) are allowed</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        </div>
    <?php include($rep . "php/include/admin/notif.php");?>
</div>
<?php include($rep . "php/include/footer.php");?>
