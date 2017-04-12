<?php
$rep = "../../";
$section_type = 'store';
$page = "Store Home Page";
include $rep . 'php/include/head.php';
include $rep . 'php/include/store/menu.php';
?>
    <div class="row">
        <div class="col-sm-8">
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
        <div class="col-sm-4">
            <div class="box">
                <p class="legend legend-center text-primary"><span class="legend-text">Location</span></p>
                <p class="text-center h2">Labone</p>
                <p class="legend legend-center text-primary"><span class="legend-text">Price</span></p>
                <p class="text-center h2">750 cedis</p>
                <p class="legend legend-center text-primary"><span class="legend-text">Size</span></p>
                <p class="text-center h2">5m x 3m</p>
                <p class="legend legend-center text-primary"><span class="legend-text">Status</span></p>
                <p class="text-center h2">Available</p>
                <p class="legend legend-center text-primary"><span class="legend-text">Action</span></p>
                <form class="" action="index.html" method="post">
                    <div class="form-group">
                      <label for=""></label>
                      <input type="text" class="form-control" id="" placeholder="">
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php include $rep . 'php/include/footer.php'; ?>
