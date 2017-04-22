<?php
$rep = "../../";
$section_type = 'store';
$page = "Store Account Page";
include $rep . 'php/include/head.php';
include $rep . 'php/include/store/menu.php';
if(isset($u_id['id']) && !empty($u_id['id']) && is_int((int)$u_id['id']) && (int)$u_id['id'] > 0)
{
    $pdcts = $db->prepare('SELECT * FROM billboards WHERE billboard_id = ?');
    $pdcts->execute(array($_GET['id']));
    $pdct = $pdcts->fetch();

    $pp = $db->prepare('SELECT *, (SELECT COUNT(*) FROM billboards_img where billboards_img_billboard_id = :x) AS nbrImg FROM billboards_img WHERE billboards_img_billboard_id = :x');
    $pp->bindValue(':x', $pdct['billboard_id'], PDO::PARAM_INT);
    $pp->execute();

}
else {
    header('location: ../');
}
//
// AIzaSyCKnq0whu8gFu9THGpFyurNy_TNI_pFKyY
?>
    <div class="row">
        <div class="col-sm-7">
            <?php
            include $rep . 'php/script/storeLogin.php';
            include $rep . 'php/script/storeSignUp.php';
            include $rep . 'php/script/order.php';
            ?>
            <div class="box">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">

                      <?php $first = true;
                        $i = 0;
                        $img = [];
                        $nbrImg = 0;
                      while ($p = $pp->fetch()) {
                          echo '<li data-target="#myCarousel" data-slide-to="'. $i . '" ' . (($first) ? ('class="active"') : '') .'></li>';
                          $first = false;
                          $img[$i] = $p['billboard_img_name'] .'.' . $p['billboard_img_extension'];
                          $i++;
                          $nbrImg = (int)$p['nbrImg'];
                     } ?>


                  </ol>

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                      <?php $_first = true;
                      if($nbrImg > 0)
                      {
                          for ($j=0; $j < $nbrImg; $j++) {
                              $act = ($_first) ? (' active') : '';
                              echo '<div class="item' . $act .'"><img src="'. $rep . 'media/images/billboards/' . $img[$j] . '" alt="Picture Billboards" class="img-responsive"/> </div>';
                          $_first = false; }
                      }
                      ?>
                  </div>

                  <!-- Left and right controls -->
                  <?php if ($nbrImg > 0): ?>
                      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                  <?php endif; ?>

                </div>
            </div>
            <div class="box text-center" id="map">
                <p>No map</p>
            </div>
        </div>
        <div class="col-sm-5 info">
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
            <div class="box signopt" id="rent-order">
                <h2 class="title-box bg-success text-center box">Rents / Orders</h2>
                <ul class="list-unstyled order-rent-history">
                    <?php
                    $ordersview = $db->prepare('SELECT * FROM orders WHERE order_billboard_id = ? AND (order_starting_date >= NOW() OR order_ending_date >= NOW())');
                    $ordersview->execute(array($pdct['billboard_id']));
                    $ordercalrem = [];
                    $i = 0;
                    while ($order_view = $ordersview->fetch()) {
                        $label = ($order_view["order_status"] == "pending") ? 'primary' : 'success';
                        $ordercalrem[$i] = $order_view["order_starting_date"];
                        $ordercalrem[++$i] = $order_view["order_ending_date"];
                        $i++;
                        // $start_date = new DateTime::createFormatfr
                        // $rent_or_order = ($order_view['order_starting_date']->getTimestamp() <= now) ? '' : '';
                        echo '<li class="text-center">used from '. $order_view["order_starting_date"] .' to '. $order_view["order_ending_date"] .' <span class="label label-'.$label.'">'. $order_view["order_status"] .'</span></li>';
                    }
                    ?>

                    <!-- <li class="text-center">Ordered from 12/4/2017 to 31/12/2017 <span class="label label-primary">pending</span></li>
                    <li class="text-center">Ordered from 12/4/2017 to 31/12/2017 <span class="label label-success">actived</span></li> -->
                </ul>
            </div>
            <?php if(!isset($_SESSION['user_id']))
                { ?>
                <div class="box signopt">
                    <h2 class="title-box bg-primary text-center box">Sign to order</h2>
                    <ul class="list-unstyled option-log">
                        <li class="text-center"><button class="btn btn-success bg-success box-rounded" data-toggle="modal" data-target="#signin">Sign In</button></li>
                        <li>
                            <p class="legend legend-center"><span class="legend-text">or</span></p>
                        </li>
                        <li class="text-center"><button class="btn btn-primary bg-primary box-rounded" data-toggle="modal" data-target="#signup">Sign Up</button></li>
                    </ul>
                </div>
                <div id="signup" class="modal fade" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header text-center">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Sign up</h4>
                      </div>
                      <div class="modal-body">
                        <form method="post" action="<?php echo './?id=' . $pdct['billboard_id']; ?>">
                            <div class="form-group">
                              <label for="fn">Full Name</label>
                              <input type="text" class="form-control" name="fn" id="fn" placeholder="your full name" required="">
                            </div>
                            <div class="form-group">
                              <label for="em">email</label>
                              <input type="email" class="form-control" name="em" id="em" placeholder="your email address" required="">
                            </div>
                            <div class="form-group">
                              <label for="psw">password</label>
                              <input type="password" class="form-control" name="psw" id="psw" placeholder="your password" required="">
                            </div>
                            <div class="form-group">
                              <label for="c-psw">confirm password</label>
                              <input type="password" class="form-control" name="c-psw" id="c-psw" placeholder="confirm your password" required="">
                            </div>
                            <div class="form-group text-center">
                              <input type="submit" name="reg" value="Sign up" class="btn btn-primary btn-3d bg-primary btn-lg">
                            </div>
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="signin" class="modal fade" role="dialog">

                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header text-center">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Sign in</h4>
                      </div>
                      <div class="modal-body">
                        <form method="post" action="<?php echo './?id=' . $pdct['billboard_id']; ?>">
                            <div class="form-group">
                              <label for="em">email</label>
                              <input type="email" class="form-control" id="em" name="email" placeholder="your email address" required="">
                            </div>
                            <div class="form-group">
                              <label for="psw">password</label>
                              <input type="password" class="form-control" name="psw" id="psw" placeholder="your password" required="">
                            </div>
                            <div class="form-group text-center">
                              <input type="submit" name="log" value="Sign in" class="btn btn-success btn-3d bg-success btn-lg">
                            </div>
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
        <?php } ?>
            <?php if(isset($_SESSION['user_id']))
            { ?>
            <div class="box signopt">
                <h2 class="title-box bg-warning text-center box">order</h2>

                <form class="orderit" action="<?php echo './?id=' . $pdct['billboard_id']; ?>" method="post">
                    <p class="alert bg-danger orderMsg"></p>

                    <div class="form-group">
                      <label for="">Select a date from</label>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        <input type="text" class="form-control pickDate" name="sd" id="datepickerFrom" placeholder="04/16/2017">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="">Select a date to</label>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        <input type="text" class="form-control pickDate" name="ed" id="datepickerTo" placeholder="04/15/2017">
                      </div>
                    </div>
                    <div class="form-group">
                      <button class="card btn btn-3d btn-success bg-success" name="orderitnow" type="submit" disabled="">Order it now</button>
                    </div>
                </form>
            </div>
            <?php } ?>
        </div>
    </div>

<?php include $rep . 'php/include/footer.php'; ?>
