<?php
$page = "Admin Account";
$rep = "../";
include($rep . "../php/include/head.php");
include($rep . "../php/include/menu.php");
?>
<div class="row">
    <div class="col-sm-3">
        <div class="box">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h1 class="text-capitalize">Actual profile</h1>
                    <h1 class="pp-account bg-success box-circle">FT</h1>
                    <div class="account-info-block">
                        <p class="legend legend-center text-uppercase text-primary"><strong><span class="legend-text">Full Name</span></strong></p>
                        <p class="text-capitalize h3"><i>Fredius Tout Court</i></p>
                    </div>
                    <div class="account-info-block">
                        <p class="legend legend-center text-uppercase text-primary"><strong><span class="legend-text">Email address</span></strong></p>
                        <p class="text-capitalize h3"><i>Frediustc@gmail.com</i></p>
                    </div>
                    <div class="account-info-block">
                        <p class="legend legend-center text-uppercase text-primary"><strong><span class="legend-text">gender</span></strong></p>
                        <p class="text-capitalize h3"><i>Male</i></p>
                    </div>
                    <div class="account-info-block">
                        <p class="legend legend-center text-uppercase text-primary"><strong><span class="legend-text">Password</span></strong></p>
                        <p class="text-capitalize h3"><i>Selected Password</i></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-9">
        <div class="box">
            <div class="row">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-8 col-xs-push-2">
                            <h1 class="text-capitalize text-center">Update profile</h1>
                            <form class="form-vertical update-profile">
                                <div class="form-group">
                                    <label for="color-pick" class="text-capitalize">Pick a Color for Profile Picture's background <i class="small">(optionnal)</i></label>
                                    <select name="color-pick" id="color-pick" class="form-control">
                                        <option value="danger">pink</option>
                                        <option value="warning">orange</option>
                                        <option value="primary" selected="">blue</option>
                                        <option value="success">green</option>
                                        <option value="alt">pruple</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="fn" class="text-capitalize">Your Full Name <i class="small">(optionnal)</i></label>
                                    <input type="text" name="fn" id="fn" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="mail" class="text-capitalize">email <i class="small">(optionnal)</i></label>
                                    <input type="email" name="mail" id="mail" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="n-psw" class="text-capitalize">New Password <i class="small">(optionnal)</i></label>
                                    <input type="password" name="n-psw" id="n-psw" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="c-psw" class="text-capitalize">Confirm New Password <i class="small">(optionnal)</i></label>
                                    <input type="password" name="c-psw" id="c-psw" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="psw" class="text-capitalize">Actual Password <i class="small">(required)</i></label>
                                    <input type="password" name="psw" id="psw" class="form-control" required="required"/>
                                </div>
                                <div class="text-center">
                                    <input type="submit" name="update-profile" value="Update Profile" class="btn-3d btn-lg btn btn-success" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include($rep . "../php/include/footer.php");?>
