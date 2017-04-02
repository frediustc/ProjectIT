<?php
$page = "Admin Reports";
$rep = "../";
include($rep . "php/include/head.php");
include($rep . "php/include/menu.php");
?>
<div class="row">
    <div class="col-sm-3">
        <div class="box box-left box-primary general-info-reports-top box-round">
            <p class="text-capitalize no-margin general-info-reports-top-title"><strong>Total Reports</strong></p>
            <h1 class="no-margin text-primary">2000</h1>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="box box-left box-warning general-info-reports-top box-round">
            <p class="text-capitalize no-margin general-info-reports-top-title"><strong>Unseen Reports</strong></p>
            <h1 class="no-margin text-warning">1300</h1>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="box box-left box-success general-info-reports-top box-round">
            <p class="text-capitalize no-margin general-info-reports-top-title"><strong>viewed Reports</strong></p>
            <h1 class="no-margin text-success">700</h1>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="box box-left box-alt general-info-reports-top box-round">
            <p class="text-capitalize no-margin general-info-reports-top-title"><strong>Customers Online</strong></p>
            <h1 class="no-margin text-alt">50</h1>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12">
        <div class="action-report-table box box-top box-top">
            <!--<div class="row">
                <div class="col-sm-10">
                    <form class="form-inline">
                        <div class="form-group">
                            <label class="sr-only">Search a particular report</label>
                            <input type="text" name="search-report" placeholder="Search for a particular reports" class="form-control" required="" />
                        </div>
                        <button type="submit" class="no-margin btn-circle btn glyphicon glyphicon-search"></button>
                    </form>
                </div>
                <div class="col-sm-2">
                    <p class="text-center no-margin"><button data-type="removal" class="btn btn-primary btn-round">Delete</button></p>
                </div>
            </div>-->
            <table class="report-table table table-hover">
                <thead>
                    <tr>
                        <th class="text-center"><a href="#" class="text-capitalize sort sort-order-by-contact asc">Contact<span class="glyphicon glyphicon-menu-down"></span></a></th>
                        <th class="text-center"><a href="#" class="text-capitalize sort sort-order-by-name asc">Customer<span class="glyphicon glyphicon-menu-down"></span></a></th>
                        <th class="text-center"><a href="#" class="text-capitalize sort sort-order-by-post-date asc">Posted date<span class="glyphicon glyphicon-menu-down"></span></a></th>
                        <th class="text-center"><a href="#" class="text-capitalize sort sort-order-by-last-activity asc">Last Activity<span class="glyphicon glyphicon-menu-down"></span></a></th>
                        <th class="text-center"><a href="#" class="text-capitalize sort sort-order-by-location asc">Location<span class="glyphicon glyphicon-menu-down"></span></a></th>
                        <th class="text-center"><a href="#" class="text-capitalize sort sort-order-by-files asc">files<span class="glyphicon glyphicon-menu-down"></span></a></th>
                        <th class="text-center"><a href="#" class="text-capitalize sort sort-order-by-status asc">status<span class="glyphicon glyphicon-menu-down"></span></a></th>
                        <th class="text-center"><a href="#" class="text-capitalize">select</a></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-capitalize text-center"><a href="#" ><span class="img-sizing"><img src="<?php echo $rep ; ?>media/images/pp/1.jpg" class="img-responsive img-circle"alt="pp cust"/></span>Fredius Tout Court</a></td>
                        <td class="text-center"><i>frediustc@gmail.com</i></td>
                        <td class="text-center"><span class="glyphicon glyphicon-share-alt"></span>27<sup>th</sup> March 2017</td>
                        <td class="text-center"><span class="glyphicon glyphicon-time"></span>1 Week ago</td>
                        <td class="text-center"><span class="glyphicon glyphicon-map-marker"></span>Lapaz</td>
                        <td class="text-center"><span class="glyphicon glyphicon-paperclip view-icon"></span><b>1</b></td>
                        <td class="text-center"><span class="glyphicon glyphicon-eye-open view-icon"></span></td>
                        <td class="text-center"><span class="glyphicon glyphicon-trash view-icon"></span></td>
                    </tr>
                    <tr>
                        <td class="text-capitalize text-center"><a href="#" ><span class="img-sizing"><img src="<?php echo $rep ; ?>media/images/pp/1.jpg" class="img-responsive img-circle"alt="pp cust"/></span>Fredius Tout Court</a></td>
                        <td class="text-center"><i>frediustc@gmail.com</i></td>
                        <td class="text-center"><span class="glyphicon glyphicon-share-alt"></span>27<sup>th</sup> March 2017</td>
                        <td class="text-center"><span class="glyphicon glyphicon-time"></span>1 Week ago</td>
                        <td class="text-center"><span class="glyphicon glyphicon-map-marker"></span>Lapaz</td>
                        <td class="text-center"><span class="glyphicon glyphicon-paperclip view-icon"></span><b>1</b></td>
                        <td class="text-center"><span class="glyphicon glyphicon-eye-open view-icon"></span></td>
                        <td class="text-center"><span class="glyphicon glyphicon-trash view-icon"></span></td>
                    </tr>
                    <tr>
                        <td class="text-capitalize text-center"><a href="#" ><span class="img-sizing"><img src="<?php echo $rep ; ?>media/images/pp/1.jpg" class="img-responsive img-circle"alt="pp cust"/></span>Fredius Tout Court</a></td>
                        <td class="text-center"><i>frediustc@gmail.com</i></td>
                        <td class="text-center"><span class="glyphicon glyphicon-share-alt"></span>27<sup>th</sup> March 2017</td>
                        <td class="text-center"><span class="glyphicon glyphicon-time"></span>1 Week ago</td>
                        <td class="text-center"><span class="glyphicon glyphicon-map-marker"></span>Lapaz</td>
                        <td class="text-center"><span class="glyphicon glyphicon-paperclip view-icon"></span><b>1</b></td>
                        <td class="text-center"><span class="glyphicon glyphicon-eye-open view-icon"></span></td>
                        <td class="text-center"><span class="glyphicon glyphicon-trash view-icon"></span></td>
                    </tr>
                    <tr>
                        <td class="text-capitalize text-center"><a href="#" ><span class="img-sizing"><img src="<?php echo $rep ; ?>media/images/pp/1.jpg" class="img-responsive img-circle"alt="pp cust"/></span>Fredius Tout Court</a></td>
                        <td class="text-center"><i>frediustc@gmail.com</i></td>
                        <td class="text-center"><span class="glyphicon glyphicon-share-alt"></span>27<sup>th</sup> March 2017</td>
                        <td class="text-center"><span class="glyphicon glyphicon-time"></span>1 Week ago</td>
                        <td class="text-center"><span class="glyphicon glyphicon-map-marker"></span>Lapaz</td>
                        <td class="text-center"><span class="glyphicon glyphicon-paperclip view-icon"></span><b>1</b></td>
                        <td class="text-center"><span class="glyphicon glyphicon-eye-open view-icon"></span></td>
                        <td class="text-center"><span class="glyphicon glyphicon-trash view-icon"></span></td>
                    </tr>
                    <tr>
                        <td class="text-capitalize text-center"><a href="#" ><span class="img-sizing"><img src="<?php echo $rep ; ?>media/images/pp/1.jpg" class="img-responsive img-circle"alt="pp cust"/></span>Fredius Tout Court</a></td>
                        <td class="text-center"><i>frediustc@gmail.com</i></td>
                        <td class="text-center"><span class="glyphicon glyphicon-share-alt"></span>27<sup>th</sup> March 2017</td>
                        <td class="text-center"><span class="glyphicon glyphicon-time"></span>1 Week ago</td>
                        <td class="text-center"><span class="glyphicon glyphicon-map-marker"></span>Lapaz</td>
                        <td class="text-center"><span class="glyphicon glyphicon-paperclip view-icon"></span><b>1</b></td>
                        <td class="text-center"><span class="glyphicon glyphicon-eye-open view-icon"></span></td>
                        <td class="text-center"><span class="glyphicon glyphicon-trash view-icon"></span></td>
                    </tr>
                    <tr>
                        <td class="text-capitalize text-center"><a href="#" ><span class="img-sizing"><img src="<?php echo $rep ; ?>media/images/pp/1.jpg" class="img-responsive img-circle"alt="pp cust"/></span>Fredius Tout Court</a></td>
                        <td class="text-center"><i>frediustc@gmail.com</i></td>
                        <td class="text-center"><span class="glyphicon glyphicon-share-alt"></span>27<sup>th</sup> March 2017</td>
                        <td class="text-center"><span class="glyphicon glyphicon-time"></span>1 Week ago</td>
                        <td class="text-center"><span class="glyphicon glyphicon-map-marker"></span>Lapaz</td>
                        <td class="text-center"><span class="glyphicon glyphicon-paperclip view-icon"></span><b>1</b></td>
                        <td class="text-center"><span class="glyphicon glyphicon-eye-open view-icon"></span></td>
                        <td class="text-center"><span class="glyphicon glyphicon-trash view-icon"></span></td>
                    </tr>
                    <tr>
                        <td class="text-capitalize text-center"><a href="#" ><span class="img-sizing"><img src="<?php echo $rep ; ?>media/images/pp/1.jpg" class="img-responsive img-circle"alt="pp cust"/></span>Fredius Tout Court</a></td>
                        <td class="text-center"><i>frediustc@gmail.com</i></td>
                        <td class="text-center"><span class="glyphicon glyphicon-share-alt"></span>27<sup>th</sup> March 2017</td>
                        <td class="text-center"><span class="glyphicon glyphicon-time"></span>1 Week ago</td>
                        <td class="text-center"><span class="glyphicon glyphicon-map-marker"></span>Lapaz</td>
                        <td class="text-center"><span class="glyphicon glyphicon-paperclip view-icon"></span><b>1</b></td>
                        <td class="text-center"><span class="glyphicon glyphicon-eye-open view-icon"></span></td>
                        <td class="text-center"><span class="glyphicon glyphicon-trash view-icon"></span></td>
                    </tr>
                    <tr>
                        <td class="text-capitalize text-center"><a href="#" ><span class="img-sizing"><img src="<?php echo $rep ; ?>media/images/pp/1.jpg" class="img-responsive img-circle"alt="pp cust"/></span>Fredius Tout Court</a></td>
                        <td class="text-center"><i>frediustc@gmail.com</i></td>
                        <td class="text-center"><span class="glyphicon glyphicon-share-alt"></span>27<sup>th</sup> March 2017</td>
                        <td class="text-center"><span class="glyphicon glyphicon-time"></span>1 Week ago</td>
                        <td class="text-center"><span class="glyphicon glyphicon-map-marker"></span>Lapaz</td>
                        <td class="text-center"><span class="glyphicon glyphicon-paperclip view-icon"></span><b>1</b></td>
                        <td class="text-center"><span class="glyphicon glyphicon-eye-open view-icon"></span></td>
                        <td class="text-center"><span class="glyphicon glyphicon-trash view-icon"></span></td>
                    </tr>
                    <tr>
                        <td class="text-capitalize text-center"><a href="#" ><span class="img-sizing"><img src="<?php echo $rep ; ?>media/images/pp/1.jpg" class="img-responsive img-circle"alt="pp cust"/></span>Fredius Tout Court</a></td>
                        <td class="text-center"><i>frediustc@gmail.com</i></td>
                        <td class="text-center"><span class="glyphicon glyphicon-share-alt"></span>27<sup>th</sup> March 2017</td>
                        <td class="text-center"><span class="glyphicon glyphicon-time"></span>1 Week ago</td>
                        <td class="text-center"><span class="glyphicon glyphicon-map-marker"></span>Lapaz</td>
                        <td class="text-center"><span class="glyphicon glyphicon-paperclip view-icon"></span><b>1</b></td>
                        <td class="text-center"><span class="glyphicon glyphicon-eye-open view-icon"></span></td>
                        <td class="text-center"><span class="glyphicon glyphicon-trash view-icon"></span></td>
                    </tr>
                    <tr>
                        <td class="text-capitalize text-center"><a href="#" ><span class="img-sizing"><img src="<?php echo $rep ; ?>media/images/pp/1.jpg" class="img-responsive img-circle"alt="pp cust"/></span>Fredius Tout Court</a></td>
                        <td class="text-center"><i>frediustc@gmail.com</i></td>
                        <td class="text-center"><span class="glyphicon glyphicon-share-alt"></span>27<sup>th</sup> March 2017</td>
                        <td class="text-center"><span class="glyphicon glyphicon-time"></span>1 Week ago</td>
                        <td class="text-center"><span class="glyphicon glyphicon-map-marker"></span>Lapaz</td>
                        <td class="text-center"><span class="glyphicon glyphicon-paperclip view-icon"></span><b>1</b></td>
                        <td class="text-center"><span class="glyphicon glyphicon-eye-open view-icon"></span></td>
                        <td class="text-center"><span class="glyphicon glyphicon-trash view-icon"></span></td>
                    </tr>
                    <tr>
                        <td class="text-capitalize text-center"><a href="#" ><span class="img-sizing"><img src="<?php echo $rep ; ?>media/images/pp/1.jpg" class="img-responsive img-circle"alt="pp cust"/></span>Fredius Tout Court</a></td>
                        <td class="text-center"><i>frediustc@gmail.com</i></td>
                        <td class="text-center"><span class="glyphicon glyphicon-share-alt"></span>27<sup>th</sup> March 2017</td>
                        <td class="text-center"><span class="glyphicon glyphicon-time"></span>1 Week ago</td>
                        <td class="text-center"><span class="glyphicon glyphicon-map-marker"></span>Lapaz</td>
                        <td class="text-center"><span class="glyphicon glyphicon-paperclip view-icon"></span><b>1</b></td>
                        <td class="text-center"><span class="glyphicon glyphicon-eye-open view-icon"></span></td>
                        <td class="text-center"><span class="glyphicon glyphicon-trash view-icon"></span></td>
                    </tr>
                    <tr>
                        <td class="text-capitalize text-center"><a href="#" ><span class="img-sizing"><img src="<?php echo $rep ; ?>media/images/pp/1.jpg" class="img-responsive img-circle"alt="pp cust"/></span>Fredius Tout Court</a></td>
                        <td class="text-center"><i>frediustc@gmail.com</i></td>
                        <td class="text-center"><span class="glyphicon glyphicon-share-alt"></span>27<sup>th</sup> March 2017</td>
                        <td class="text-center"><span class="glyphicon glyphicon-time"></span>1 Week ago</td>
                        <td class="text-center"><span class="glyphicon glyphicon-map-marker"></span>Lapaz</td>
                        <td class="text-center"><span class="glyphicon glyphicon-paperclip view-icon"></span><b>1</b></td>
                        <td class="text-center"><span class="glyphicon glyphicon-eye-open view-icon"></span></td>
                        <td class="text-center"><span class="glyphicon glyphicon-trash view-icon"></span></td>
                    </tr>
                    <tr>
                        <td class="text-capitalize text-center"><a href="#" ><span class="img-sizing"><img src="<?php echo $rep ; ?>media/images/pp/1.jpg" class="img-responsive img-circle"alt="pp cust"/></span>Fredius Tout Court</a></td>
                        <td class="text-center"><i>frediustc@gmail.com</i></td>
                        <td class="text-center"><span class="glyphicon glyphicon-share-alt"></span>27<sup>th</sup> March 2017</td>
                        <td class="text-center"><span class="glyphicon glyphicon-time"></span>1 Week ago</td>
                        <td class="text-center"><span class="glyphicon glyphicon-map-marker"></span>Lapaz</td>
                        <td class="text-center"><span class="glyphicon glyphicon-paperclip view-icon"></span><b>1</b></td>
                        <td class="text-center"><span class="glyphicon glyphicon-eye-open view-icon"></span></td>
                        <td class="text-center"><span class="glyphicon glyphicon-trash view-icon"></span></td>
                    </tr>
                    <tr>
                        <td class="text-capitalize text-center"><a href="#" ><span class="img-sizing"><img src="<?php echo $rep ; ?>media/images/pp/1.jpg" class="img-responsive img-circle"alt="pp cust"/></span>Fredius Tout Court</a></td>
                        <td class="text-center"><i>frediustc@gmail.com</i></td>
                        <td class="text-center"><span class="glyphicon glyphicon-share-alt"></span>27<sup>th</sup> March 2017</td>
                        <td class="text-center"><span class="glyphicon glyphicon-time"></span>1 Week ago</td>
                        <td class="text-center"><span class="glyphicon glyphicon-map-marker"></span>Lapaz</td>
                        <td class="text-center"><span class="glyphicon glyphicon-paperclip view-icon"></span><b>1</b></td>
                        <td class="text-center"><span class="glyphicon glyphicon-eye-open view-icon"></span></td>
                        <td class="text-center"><span class="glyphicon glyphicon-trash view-icon"></span></td>
                    </tr>
                    <tr>
                        <td class="text-capitalize text-center"><a href="#" ><span class="img-sizing"><img src="<?php echo $rep ; ?>media/images/pp/1.jpg" class="img-responsive img-circle"alt="pp cust"/></span>Fredius Tout Court</a></td>
                        <td class="text-center"><i>frediustc@gmail.com</i></td>
                        <td class="text-center"><span class="glyphicon glyphicon-share-alt"></span>27<sup>th</sup> March 2017</td>
                        <td class="text-center"><span class="glyphicon glyphicon-time"></span>1 Week ago</td>
                        <td class="text-center"><span class="glyphicon glyphicon-map-marker"></span>Lapaz</td>
                        <td class="text-center"><span class="glyphicon glyphicon-paperclip view-icon"></span><b>1</b></td>
                        <td class="text-center"><span class="glyphicon glyphicon-eye-open view-icon"></span></td>
                        <td class="text-center"><span class="glyphicon glyphicon-trash view-icon"></span></td>
                    </tr>
                    <tr>
                        <td class="text-capitalize text-center"><a href="#" ><span class="img-sizing"><img src="<?php echo $rep ; ?>media/images/pp/1.jpg" class="img-responsive img-circle"alt="pp cust"/></span>Fredius Tout Court</a></td>
                        <td class="text-center"><i>frediustc@gmail.com</i></td>
                        <td class="text-center"><span class="glyphicon glyphicon-share-alt"></span>27<sup>th</sup> March 2017</td>
                        <td class="text-center"><span class="glyphicon glyphicon-time"></span>1 Week ago</td>
                        <td class="text-center"><span class="glyphicon glyphicon-map-marker"></span>Lapaz</td>
                        <td class="text-center"><span class="glyphicon glyphicon-paperclip view-icon"></span><b>1</b></td>
                        <td class="text-center"><span class="glyphicon glyphicon-eye-open view-icon"></span></td>
                        <td class="text-center"><span class="glyphicon glyphicon-trash view-icon"></span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include($rep . "php/include/footer.php");?>
