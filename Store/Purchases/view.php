<?php
$rep = "../../";
$section_type = 'store';
$page = "Store Purchases Page";

include $rep . 'php/include/head.php';
include $rep . 'php/include/store/menu.php';
if(!isset($_SESSION['user_id']))
{
    header('location: ../');
}
else {
    $t = $db->prepare('SELECT
         (select COUNT(*) FROM orders WHERE order_user_id = :x AND order_status = "actived" AND (order_starting_date <= NOW() AND order_ending_date >= NOW())) AS r,
         (select COUNT(*) FROM orders WHERE  order_user_id = :x AND order_status = "actived" AND order_starting_date > NOW()) AS o_ac,
         (select COUNT(*) FROM orders WHERE order_status = "pending") AS o_pn
         FROM orders');
    $t->bindValue(':x', $u_id, PDO::PARAM_INT);
    $t->execute();
    $_t = $t->fetch();
}
$orders = $db->prepare('SELECT orders.*, billboards.*, users.*
     FROM orders
     INNER JOIN users ON orders.order_user_id = users.user_id
     INNER JOIN billboards ON Orders.order_billboard_id = billboards.billboard_id
     WHERE order_id = ?');
$orders->execute(array($_GET['id']));
$order = $orders->fetch();
?>
<div class="row">
    <div class="col-xs-12">
        <div class="action-table box">
            <h1 class="table-title bg-alt text-capitalize box text-center">View Billboard Related images</h1>
            <div class="img-info-box">
                <ul class="list-unstyled list-inline view-posted-img">
                    <?php $img_bill_view_all = $db->prepare('SELECT * FROM billboards_img WHERE billboards_img_billboard_id = ?');
                    $img_bill_view_all->execute(array($order['billboard_id']));
                    while ($ibv = $img_bill_view_all->fetch()) { ?>
                        <li><img src="<?php echo $rep;?>media/images/billboards/<?php echo $ibv['billboard_img_name'] . '.' . $ibv['billboard_img_extension'];?>" alt="<?php echo $ibv['billboard_img_name'];?>" class="img-responsive box"/></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <div class="box">
            <div class="gen-info-box">
                <h1 class="table-title bg-alt text-capitalize box text-center">General information</h1>
                <div class="row">
                  <div class="col-xs-6 info">
                      <h3><strong>Order starting date</strong></h3>
                      <p class="h1"><?php echo $order['order_starting_date']; ?></p>
                  </div>
                  <div class="col-xs-6 info text-right">
                      <h3><strong>Order ending date</strong></h3>
                      <p class="h1"><?php echo $order['order_ending_date']; ?></p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-6 info">
                      <h3><strong>Location</strong></h3>
                      <p class="h1"><?php echo $order['billboard_location']; ?></p>
                  </div>
                  <div class="col-xs-6 info text-right">
                      <h3><strong>Price</strong></h3>
                      <p class="h1"><?php echo $order['billboard_price']; ?>Ghc</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-6 info">
                      <h3><strong>size</strong></h3>
                      <p class="h1"><?php echo $order['billboard_width']; ?>m. x <?php echo $order['billboard_height']; ?>m.</p>
                  </div>
                  <div class="col-xs-6 info text-right">
                      <h3><strong>Status</strong></h3>
                      <p class="h1"><?php echo $order['billboard_availability']; ?></p>
                  </div>
                </div>
                <div class="info">
                    <h3><strong>Map</strong></h3>
                    <p class="h1">Lat: <i><?php echo $order['billboard_map_lat']; ?></i>, Lng: <i><?php echo $order['billboard_map_lon']; ?></i>, Zoom: <i><?php echo $order['billboard_map_zoom']; ?></i></p>
                </div>
            </div>

        </div>
    </div>
</div>
<?php include($rep . "php/include/footer.php");?>
