<?php
$rep = "./";
$page = "Setup page";
include './php/include/head.php';
?>
    <div class="container">
        <h1 class="text-center text-uppercase">Administrator Setup page</h1>
        <div class="row">
            <div class="col-xs-4 col-xs-push-4">
                <div class="">
                    <form class="adminForm form-vertical box box-top box-primary" method="post" action="Index.php">
                        <?php include('php/script/Setup.php'); ?>
                        <div class="form-group">
                            <label for="setup-server">Server Name</label>
                            <input type="text" name="setup-server" required="" id="setup-server" class="form-control" />
                        </div>
                        <p class="alert bg-danger hide"><span class="glyphicon glyphicon-warning-sign"></span>Server Name is empty</p>
                        <div class="form-group">
                            <label for="setup-user">Database Username</label>
                            <input type="text" name="setup-user" required="" id="setup-user" class="form-control" />
                        </div>
                        <p class="alert bg-danger hide"><span class="glyphicon glyphicon-warning-sign"></span>UserName is empty</p>
                        <div class="form-group">
                            <label for="setup-dbname">Database Name</label>
                            <input type="text" name="setup-dbname" required="" id="setup-dbname" class="form-control" />
                        </div>
                        <p class="alert bg-danger hide"><span class="glyphicon glyphicon-warning-sign"></span>Database Name is empty</p>
                        <div class="form-group">
                            <label for="setup-pwd">Password</label>
                            <input type="text" name="setup-pwd" id="setup-pwd" class="form-control" />
                        </div>
                        <p class="alert bg-primary hide"><span class="glyphicon glyphicon-warning-sign"></span>is your password really empty?</p>
                        <div class="form-group text-center">
                            <input type="submit" name="setup-page" value="Setup Page" class="btn-lg btn btn-primary btn-3d"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jsScan/setup.js"></script>
<?php include './php/include/footer.php';
// header('location: Dashboard/');
?>
