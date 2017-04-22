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
?>
<div class="row">
    <div class="col-sm-4">
        <div class="box box-left box-alt general-info-table-top box-round">
            <p class="text-capitalize no-margin general-info-table-top-title"><strong>Rented billboards</strong></p>
            <h1 class="no-margin text-alt"><?php echo $_t['r']; ?></h1>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="box box-left box-warning general-info-table-top box-round">
            <p class="text-capitalize no-margin general-info-table-top-title"><strong>Pending orders</strong></p>
            <h1 class="no-margin text-warning"><?php echo $_t['o_pn']; ?></h1>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="box box-left box-success general-info-table-top box-round">
            <p class="text-capitalize no-margin general-info-table-top-title"><strong>actived orders</strong></p>
            <h1 class="no-margin text-success"><?php echo $_t['o_ac']; ?></h1>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12">
        <div class="action-table box">
            <h1 class="table-title bg-alt text-capitalize box text-center">Billboards Purchases</h1>
            <table class="data-table table table-hover">
                <?php
                $o = $db->prepare('SELECT orders.order_id AS o_id, orders.order_date AS o_dt, orders.order_starting_date AS o_sd, orders.order_ending_date AS o_ed, orders.order_status AS o_st,
                     users.user_full_name AS u_fn, users.user_email AS u_em,
                     billboards.billboard_location AS b_lo
                     FROM orders
                     INNER JOIN users ON users.user_id = orders.order_user_id
                     INNER JOIN billboards ON orders.order_billboard_id = billboards.billboard_id
                     WHERE order_user_id = ? ORDER BY orders.order_date DESC LIMIT 20 ');
                     $o->execute(array($u_id));
                     ?>
                <thead>
                    <tr class="text-alt">
                        <th class="text-center text-capitalize">ID</th>
                        <th class="text-center text-capitalize">billboard Location</th>
                        <th class="text-center text-capitalize">Purchased about</th>
                        <th class="text-center text-capitalize">Starting date</th>
                        <th class="text-center text-capitalize">Ending date</th>
                        <th class="text-center text-capitalize">Purchases Status</th>
                        <th class="text-center text-capitalize">option<s/th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php
                    while($_o = $o->fetch())
                    {
                        $ac_dec = ($_o['o_st'] === "pending") ? "validate" : "decline";
                        $ac_dec_ico = ($_o['o_st'] === "pending") ? "glyphicon-ok" : "glyphicon-remove";
                        $ac_dec_col = ($_o['o_st'] === "pending") ? "bg-success" : "bg-warning";
                    $ordered_date = DateTime::createFromFormat('Y-m-d H:i:s', $_o['o_dt']);
                     ?>

                    <tr>
                        <td class="text-capitalize"><?php echo $_o['o_id']; ?></td>
                        <td class="text-capitalize"><?php echo $_o['b_lo']; ?></td>
                        <td class="text-capitalize"><?php echo retrieve_duration($ordered_date); ?></td>
                        <td class="text-capitalize"><?php echo $_o['o_sd']; ?></td>
                        <td class="text-capitalize"><?php echo $_o['o_ed']; ?></td>
                        <td class="text-capitalize"><?php echo $_o['o_st']; ?></td>
                        <td>
                            <a href="./view.php?id=<?php echo $_o['o_id']; ?>" class="btn bg-primary glyphicon glyphicon-eye-open" title="more information"></a>

                            <form class="btn-form form-inline" action="./" method="post">
                                <button type="submit" name="delete" value="<?php echo $_o['o_id']; ?>" class="btn bg-danger glyphicon glyphicon-trash" title="delete"></button>
                            </form>
                        </td>
                    </tr>
                <?php    } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include $rep . 'php/include/footer.php'; ?>
