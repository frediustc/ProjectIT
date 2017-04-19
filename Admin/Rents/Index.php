<?php
$page = "Admin Rents";
$rep = "../../";
include($rep . "php/include/head.php");
include($rep . "php/include/menu.php");
$t = $db->prepare('SELECT COUNT(*) AS mx FROM orders WHERE (order_starting_date <= NOW() AND order_ending_date >= NOW()) AND order_status = "actived"');
$t->execute();
$_t = $t->fetch();
// SELECT * FROM orders WHERE (order_starting_date <= NOW() AND order_ending_date >= NOW()) AND order_status = "actived" AND order_billboard_id = 4
?>
<div class="row">
    <div class="col-sm-4">
        <div class="box box-left box-success general-info-table-top box-round">
            <p class="text-capitalize no-margin general-info-table-top-title"><strong>Total Rents</strong></p>
            <h1 class="no-margin text-success"><?php echo $_t['mx'];?></h1>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-9">
        <div class="action-table box">
            <h1 class="table-title bg-success text-capitalize box text-center">Billboards Rented</h1>
            <table class="data-table table table-hover">
                <thead>
                    <?php
                    $r = $db->prepare('SELECT orders.order_id AS r_id, orders.order_starting_date AS r_frm, orders.order_ending_date AS r_to,
                         users.user_full_name AS u_fn, users.user_email AS u_em,
                         billboards.billboard_location AS b_lo
                         FROM orders
                         INNER JOIN users ON users.user_id = orders.order_user_id
                         INNER JOIN billboards ON orders.order_billboard_id = billboards.billboard_id
                         WHERE (order_starting_date <= NOW() AND order_ending_date >= NOW()) AND order_status = "actived"
                         ORDER BY orders.order_date DESC LIMIT 20');
                         $r->execute();
                         ?>
                    <tr class="text-success">
                        <th class="text-center text-capitalize">ID</th>
                        <th class="text-center text-capitalize">Customer full name</th>
                        <th class="text-center text-capitalize">customer Contact</th>
                        <th class="text-center text-capitalize">billboard Location</th>
                        <th class="text-center text-capitalize">Rented from</th>
                        <th class="text-center text-capitalize">rented to</th>
                        <th class="text-center text-capitalize">option</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php
                    while($_r = $r->fetch())
                    {
                     ?>
                    <tr>
                        <td class="text-danger">#<?php echo $_r['r_id']; ?></td>
                        <td class="text-capitalize"><?php echo $_r['u_fn']; ?></td>
                        <td class="text-capitalize"><?php echo $_r['u_em']; ?></td>
                        <td class="text-capitalize"><?php echo $_r['b_lo']; ?></td>
                        <td class="text-capitalize"><?php echo $_r['r_frm']; ?></td>
                        <td class="text-capitalize"><?php echo $_r['r_to']; ?></td>
                        <td>
                            <a href="./view.php?id=<?php echo $_r['r_id']; ?>" class="btn bg-success glyphicon glyphicon-eye-open"></a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php include($rep . "php/include/admin/notif.php");?>
</div>
<?php include($rep . "php/include/footer.php");?>
