<?php
$rep = "../";
$section_type = 'store';
$page = "Store Home Page";
include '../php/include/head.php';
?>
<aside class="sidebar sidebar-fixed-left" id="menuLeft">
    <div class="sidebar-fit nav text-ubillboardsercase text-center">
        <h1>Store</h1>
        <ul class="text-center list-unstyled">
            <li><a href="./" class="actived">Home</a></li>
            <li><a href="./" class="">Account</a></li>
            <li><a href="./" class="">Contact</a></li>
        </ul>
    </div>
</aside>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-top box-primary">
                <h1 class="text-center">Search for a Billboard</h1>
                <form class="form-search">
                    <div class="form-group">
                      <label for="search" class="sr-only">Make by location</label>
                      <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-map-marker"></span></span>
                        <input type="search" class="form-control" id="search" placeholder="Type your location here">
                      </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-3">
                                <label for="sort">Sort By</label>
                                <select id="sort" name="sort" class="form-control">
                                    <option value="date">date</option>
                                    <option value="price">price</option>
                                    <option value="avail">availability</option>
                                </select>
                            </div>
                            <div class="col-xs-3">
                                <label for="order">Order</label>
                                <select id="order" name="order" class="text-center form-control">
                                    <option value="date">Ascendant</option>
                                    <option value="location">Descendant</option>
                                </select>
                            </div>
                            <div class="col-xs-6">
                                <label for="price">Search by Price</label>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">Min</span>
                                            <input type="number" name="min-price" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">Max</span>
                                            <input type="number" name="max-price" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <button class="btn btn-success col-xs-12" type="submit" name="searchAll">Search</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-lg-3">
            <div class="box crop box-squared-w-h">
                <img src="../media/images/billboards/1.jpg" alt="Picture Billboards" class="img-responsive center-el-V"/>
                <div class="infobill text-center trans">
                    <div class="text-block center-el-V">
                        <div class="trans">
                            <h1 class="text-success">$70 <br> <small>per Month</small></h1>
                            <p class="loc"><span class="glyphicon glyphicon-map-marker"></span>Labone</p>
                            <!-- <p>This billboard located at <b><i>Labone</i></b> has a width of <b><i>2 meters</i></b> and an height of <b><i>5 meters</i></b></p> -->
                            <p>
                                <a href="articles/?id=1" class="btn btn-primary bg-primary btn-3d btn-lg"><span class="glyphicon glyphicon-search"></span></a>
                                <button href="articles/?id=1" class="btn btn-primary bg-primary btn-3d btn-lg"><span class="glyphicon glyphicon-shopping-cart"></span></button>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="box crop box-squared-w-h">
                <img src="../media/images/billboards/1.jpg" alt="Picture Billboards" class="img-responsive center-el-V"/>
                <div class="infobill text-center trans">
                    <div class="text-block center-el-V">
                        <div class="trans">
                            <h1 class="text-success">$70 <br> <small>per Month</small></h1>
                            <p class="loc"><span class="glyphicon glyphicon-map-marker"></span>Labone</p>
                            <!-- <p>This billboard located at <b><i>Labone</i></b> has a width of <b><i>2 meters</i></b> and an height of <b><i>5 meters</i></b></p> -->
                            <p>
                                <a href="articles/?id=1" class="btn btn-primary bg-primary btn-3d btn-lg"><span class="glyphicon glyphicon-search"></span></a>
                                <button href="articles/?id=1" class="btn btn-primary bg-primary btn-3d btn-lg"><span class="glyphicon glyphicon-shopping-cart"></span></button>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="box crop box-squared-w-h">
                <img src="../media/images/billboards/1.jpg" alt="Picture Billboards" class="img-responsive center-el-V"/>
                <div class="infobill text-center trans">
                    <div class="text-block center-el-V">
                        <div class="trans">
                            <h1 class="text-success">$70 <br> <small>per Month</small></h1>
                            <p class="loc"><span class="glyphicon glyphicon-map-marker"></span>Labone</p>
                            <!-- <p>This billboard located at <b><i>Labone</i></b> has a width of <b><i>2 meters</i></b> and an height of <b><i>5 meters</i></b></p> -->
                            <p>
                                <a href="articles/?id=1" class="btn btn-primary bg-primary btn-3d btn-lg"><span class="glyphicon glyphicon-search"></span></a>
                                <button href="articles/?id=1" class="btn btn-primary bg-primary btn-3d btn-lg"><span class="glyphicon glyphicon-shopping-cart"></span></button>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="box crop box-squared-w-h">
                <img src="../media/images/billboards/1.jpg" alt="Picture Billboards" class="img-responsive center-el-V"/>
                <div class="infobill text-center trans">
                    <div class="text-block center-el-V">
                        <div class="trans">
                            <h1 class="text-success">$70 <br> <small>per Month</small></h1>
                            <p class="loc"><span class="glyphicon glyphicon-map-marker"></span>Labone</p>
                            <!-- <p>This billboard located at <b><i>Labone</i></b> has a width of <b><i>2 meters</i></b> and an height of <b><i>5 meters</i></b></p> -->
                            <p>
                                <a href="articles/?id=1" class="btn btn-primary bg-primary btn-3d btn-lg"><span class="glyphicon glyphicon-search"></span></a>
                                <button href="articles/?id=1" class="btn btn-primary bg-primary btn-3d btn-lg"><span class="glyphicon glyphicon-shopping-cart"></span></button>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php include '../php/include/footer.php'; ?>
