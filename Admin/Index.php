<?php
$rep = "../";
$page = "Administrator logIn";
include '../php/include/head.php';
?>
    <div class="container">
        <h1 class="text-center text-uppercase">Administrator login page</h1>
        <div class="row">
            <div class="col-xs-4 col-xs-push-4">
                <div class="">
                    <form class="adminForm form-vertical box box-top box-primary" method="post" action="./">
                        <?php include '../php/script/AdminLogin.php'; ?>
                        <div class="form-group">
                            <label for="admin-email">Email address</label>
                            <input type="email" name="admin-email" required="" id="admin-email" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="admin-pwd">Password</label>
                            <input type="password" name="admin-pwd" required="" id="admin-pwd" class="form-control" />
                        </div>
                        <div class="form-group text-center">
                            <input type="submit" name="admin-login" value="LogIn" class="btn-lg btn btn-primary btn-3d"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php include '../php/include/footer.php'; ?>
