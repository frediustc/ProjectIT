<?php
$page = "Admin Billboards";
$rep = "../../";
include($rep . "php/include/head.php");
include($rep . "php/include/menu.php");
$o = $db->prepare('SELECT orders.order_id AS o_id, orders.order_date AS o_dt, orders.order_status AS o_st,
     users.user_full_name AS u_fn, users.user_email AS u_em,
     billboards.billboard_location AS b_lo
     FROM orders
     INNER JOIN users ON users.user_id = orders.order_user_id
     INNER JOIN billboards ON orders.order_billboard_id = billboards.billboard_id
     ORDER BY orders.order_date LIMIT 20 ');
     $o->execute();
$t = $db->prepare('SELECT
     (select COUNT(*) FROM orders) AS o_mx,
     (select COUNT(*) FROM orders WHERE order_status = "actived") AS o_ac,
     (select COUNT(*) FROM orders WHERE order_status = "pending") AS o_pn
     FROM orders');
$t->execute();
$_t = $t->fetch();
?>
<div class="row">
    <div class="col-xs-9">
        <div class="row">
            <div class="col-xs-8">
                <div class="crop box">
                    <div id="carousel-generic" class="carousel slide" data-ride="carousel">
                      <!-- Indicators -->
                      <ol class="carousel-indicators">
                        <li data-target="#carousel-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-generic" data-slide-to="1"></li>
                      </ol>

                      <!-- Wrapper for slides -->
                      <div class="carousel-inner">
                        <div class="item active">
                          <img src="<?php echo $rep; ?>media/images/billboards/1.jpg" alt="billboards image 1">
                        </div>
                        <div class="item">
                            <img src="<?php echo $rep; ?>media/images/billboards/5.jpg" alt="billboards image 2">
                        </div>

                      </div>

                      <!-- Controls -->
                      <a class="left carousel-control" href="#carousel-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                      </a>
                      <a class="right carousel-control" href="#carousel-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                      </a>
                    </div>
                </div>
            </div>
            <div class="col-xs-4">
                <div class="crop box">
                    <div id="map">
                        <div class="box">
                            <h2 class="title-box bg-alt text-center box">Information</h2>
                            <div class="row">
                                <div class="col-xs-6">
                                    <p class="text-primary">Location</p>
                                    <p class="h2"><?php echo $pdct['billboard_location']; ?></p>
                                </div>
                                <div class="col-xs-6 text-right">
                                    <p class="text-primary">Price</p>
                                    <p class="h2"><?php echo $pdct['billboard_price']; ?>Ghc</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <p class="text-primary">Size</p>
                                    <p class="h2"><?php echo $pdct['billboard_width']; ?>m. x <?php echo $pdct['billboard_height']; ?>m.</p>
                                </div>
                                <div class="col-xs-6 text-right">
                                    <p class="text-primary">Status</p>
                                    <p class="h2"><?php echo $pdct['billboard_availability']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include($rep . "php/include/admin/notif.php");?>
</div>
<?php include($rep . "php/include/footer.php");?>
