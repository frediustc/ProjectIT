<?php
$rep = "../../";
$section_type = 'store';
$page = "Store Home Page";
include $rep . 'php/include/head.php';
include $rep . 'php/include/store/menu.php';
?>
    <div class="row">
        <div class="col-sm-7">
            <div class="box">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                  </ol>

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="<?php echo $rep; ?>media/images/billboards/1.jpg" alt="Picture Billboards" class="img-responsive"/>
                    </div>

                    <div class="item">
                        <img src="<?php echo $rep; ?>media/images/billboards/2.jpg" alt="Picture Billboards" class="img-responsive"/>
                    </div>

                    <div class="item">
                        <img src="<?php echo $rep; ?>media/images/billboards/3.jpg" alt="Picture Billboards" class="img-responsive"/>
                    </div>

                    <div class="item">
                        <img src="<?php echo $rep; ?>media/images/billboards/4.jpg" alt="Picture Billboards" class="img-responsive"/>
                    </div>
                  </div>

                  <!-- Left and right controls -->
                  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>
        </div>
        <div class="col-sm-5 info">
            <div class="box">
                <h2 class="title-box bg-alt text-center box">Information</h2>
                <div class="row">
                    <div class="col-xs-6">
                        <p class="text-primary">Location</p>
                        <p class="h2">Labone</p>
                    </div>
                    <div class="col-xs-6 text-right">
                        <p class="text-primary">Price</p>
                        <p class="h2">750Ghc</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <p class="text-primary">Size</p>
                        <p class="h2">3m. x 6m.</p>
                    </div>
                    <div class="col-xs-6 text-right">
                        <p class="text-primary">Status</p>
                        <p class="h2">Available</p>
                    </div>
                </div>
            </div>
            <div class="box signopt" id="rent-order">
                <h2 class="title-box bg-success text-center box">Rents / Orders</h2>
                <ul class="list-unstyled order-rent-history">
                    <li class="text-center">Rented from 12/4/2017 to 31/12/2017 <span class="label label-success">6 months</span></li>
                    <li class="text-center">Ordered from 12/4/2017 to 31/12/2017 <span class="label label-primary">6 months</span></li>
                    <li class="text-center">Ordered from 12/4/2017 to 31/12/2017 <span class="label label-primary">6 months</span></li>
                </ul>
            </div>
            <div class="box signopt">
                <h2 class="title-box bg-primary text-center box">Sign to order</h2>
                <ul class="list-unstyled option-log">
                    <li class="text-center"><button class="btn btn-success bg-success box-rounded">Sign In</button></li>
                    <li>
                        <p class="legend legend-center"><span class="legend-text">or</span></p>
                    </li>
                    <li class="text-center"><button class="btn btn-primary bg-primary box-rounded">Sign Up</button></li>
                </ul>
            </div>
            <div class="box signopt">
                <h2 class="title-box bg-warning text-center box">order</h2>

                <form class="orderit" action="#" method="post">
                    <p class="alert alert-danger">the Billboard will not be free for this duration starting from 3/04/2014 check the <a href="#rent-order">rent and orders list</a></p>
                    <div class="form-group">
                      <label for="">Select a date from</label>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        <input type="text" class="form-control pickDate" id="datepickerFrom" placeholder="04/11/2017">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="">Select a date to</label>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        <input type="text" class="form-control pickDate" id="datepickerTo" placeholder="04/11/2017">
                      </div>
                    </div>
                    <div class="form-group">
                      <button class="card btn btn-3d btn-success bg-success" type="submit" disabled="">Add to card</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php include $rep . 'php/include/footer.php'; ?>
