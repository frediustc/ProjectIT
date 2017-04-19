<?php
$page = "Admin Reports";
$rep = "../../";
include($rep . "php/include/head.php");
include($rep . "php/include/menu.php");
?>
<div class="row">
    <div class="col-sm-3">
        <div class="box box-left box-primary general-info-table-top box-round">
            <p class="text-capitalize no-margin general-info-table-top-title"><strong>Total Reports</strong></p>
            <h1 class="no-margin text-primary">2000</h1>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="box box-left box-warning general-info-table-top box-round">
            <p class="text-capitalize no-margin general-info-table-top-title"><strong>Unseen Reports</strong></p>
            <h1 class="no-margin text-warning">1300</h1>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="box box-left box-success general-info-table-top box-round">
            <p class="text-capitalize no-margin general-info-table-top-title"><strong>viewed Reports</strong></p>
            <h1 class="no-margin text-success">700</h1>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="box box-left box-alt general-info-table-top box-round">
            <p class="text-capitalize no-margin general-info-table-top-title"><strong>Customers Online</strong></p>
            <h1 class="no-margin text-alt">50</h1>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-9">
        <div class="action-table box">
            <h1 class="table-title bg-warning text-capitalize text-center box">Received Reports</h1>
            <table class="data-table table table-hover">
                <thead>
                    <tr class="text-warning">
                        <th class="text-center"><a href="#" class="text-warning text-capitalize sort sort-order-by-name asc">ID</a></th>
                        <th class="text-center"><a href="#" class="text-warning text-capitalize sort sort-order-by-name asc">Customer full name</a></th>
                        <th class="text-center"><a href="#" class="text-warning text-capitalize sort sort-order-by-contact asc">customer Contact</a></th>
                        <th class="text-center"><a href="#" class="text-warning text-capitalize sort sort-order-by-post-date asc">Posted date</a></th>
                        <th class="text-center"><a href="#" class="text-warning text-capitalize sort sort-order-by-location asc">billboard Location</a></th>
                        <th class="text-center"><a href="#" class="text-warning text-capitalize">options</a></th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr>
                        <td class="text-capitalize text-center">#35</td>
                        <td class="text-capitalize text-center"><a href="#">Fredius Tout Court</a></td>
                        <td class="text-center"><i>frediustc@gmail.com</i></td>
                        <td class="text-center">1 Week ago</td>
                        <td class="text-center">Lapaz</td>
                        <td>
                            <button class="btn bg-success glyphicon glyphicon-eye-open"></button>
                            <button class="btn bg-danger glyphicon glyphicon-trash"></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <?php include($rep . "php/include/admin/notif.php");?>
</div>
<?php include($rep . "php/include/footer.php");?>
