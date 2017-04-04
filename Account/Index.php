<?php
$page = "Admin Account";
$rep = "../";
include($rep . "php/include/head.php");
include($rep . "php/include/menu.php");
?>
<div class="row">
    <div class="col-sm-3">
        <div class="box">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h1 class="pp-account bg-success box-circle">FT</h1>
                    <div class="account-info-block text-left">
                        <p class="legend legend-right text-uppercase text-primary"><strong><span class="legend-text">Full Name</span></strong></p>
                        <p class="text-capitalize"><i>Fredius Tout Court</i></p>
                    </div>
                    <div class="account-info-block text-left">
                        <p class="legend legend-left text-uppercase text-primary"><strong><span class="legend-text">Email address</span></strong></p>
                        <p class="text-capitalize"><i>Frediustc@gmail.com</i></p>
                    </div>
                    <div class="account-info-block text-left">
                        <p class="legend legend-right text-uppercase text-primary"><strong><span class="legend-text">gender</span></strong></p>
                        <p class="text-capitalize"><i>Male</i></p>
                    </div>
                    <div class="account-info-block text-left">
                        <p class="legend legend-right text-uppercase text-primary"><strong><span class="legend-text">Password</span></strong></p>
                        <p class="text-capitalize"><i>Selected Password</i></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-9">
        <div class="box">
            <div class="row">
                <div class="col-xs-12">
                    <form class="form-vertical">
                        <div class="form-group">
                            <label for="color-pick" class="text-capitalize">Pick a Color for Profile Picture's background</label><br />
                            <select name="color-pick" id="color-pick">
                                <option value="danger">pink</option>
                                <option value="warning">orange</option>
                                <option value="primary" selected="">blue</option>
                                <option value="success">green</option>
                                <option value="alt">pruple</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="fn" class="text-capitalize">Your Full Name</label><br />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include($rep . "php/include/footer.php");?>
