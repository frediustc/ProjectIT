<?php
$rep = "../../";
$section_type = 'store';
$page = "Store Account Page";

include $rep . 'php/include/head.php';
include $rep . 'php/include/store/menu.php';
if(!isset($_SESSION['user_id']))
{
    header('location: ../');
}
?>

    <div class="row">
        <div class="col-xs-6">
            <div class="box">
                <h2 class="title-box bg-success text-center box">Information</h2>
                <div class="text-center">
                    <h1 class="pp-account <?php echo $u_pp_bg; ?> box-circle"><?php echo $u_pp_txt; ?></h1>
                </div>
                <div class="group-info">
                    <p class="text-primary">Full name</p>
                    <h1 class=" text-capitalize"><?php echo $u_fn; ?></p>
                </div>
                <div class="group-info">
                    <p class="text-primary">email</p>
                    <h1 class=" text-capitalize"><?php echo $u_email; ?></p>
                </div>
                <div class="group-info">
                    <p class="text-primary">Account Status</p>
                    <h1 class=" text-capitalize"><?php echo $u_status; ?></p>
                </div>
                <div class="group-info">
                    <p class="text-primary">Password</p>
                    <h1 class=" text-capitalize">Selected One</p>
                </div>
            </div>
        </div>
        <div class="col-xs-6 editProf">
            <?php include $rep . 'php/script/store/updateProfile.php'; ?>
            <div class="box">
                <h2 class="title-box bg-primary text-center box">Update Information</h2>
                <form method="post" action="./">
                    <div class="form-group">
                        <label for="color-pick" class="text-capitalize">Pick a Color for Profile Picture's background <i class="small">(optionnal)</i></label>
                        <select name="color-pick" id="color-pick" class="form-control">
                            <option value=""></option>
                            <option value="bg-primary">blue</option>
                            <option value="bg-danger">pink</option>
                            <option value="bg-warning">orange</option>
                            <option value="bg-success">green</option>
                            <option value="bg-alt">pruple</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="fn">Full Name (optionnal)</label>
                      <input type="text" class="form-control" name="fn" id="fn" placeholder="your full name">
                    </div>
                    <div class="form-group">
                      <label for="em">email (optionnal)</label>
                      <input type="email" class="form-control" name="em" id="em" placeholder="your email address">
                    </div>
                    <div class="form-group">
                      <label>current password</label>
                      <input type="password" class="form-control" name="pass" placeholder="your password" required="">
                    </div>
                    <div class="form-group text-center">
                      <input type="submit" name="passinfos" value="Update Informations" class="btn btn-primary btn-3d bg-primary btn-lg">
                    </div>
                </form>
            </div>
            <?php include $rep . 'php/script/store/updatepass.php'; ?>
            <div class="box">
                <h2 class="title-box bg-warning text-center box">Update password</h2>
                <form method="post" action="./">
                    <div class="form-group">
                      <label for="psw">New password</label>
                      <input type="password" class="form-control" name="n-psw" id="psw" placeholder="your password" required="">
                    </div>
                    <div class="form-group">
                      <label for="c-psw">confirm New password</label>
                      <input type="password" class="form-control" name="c-psw" id="c-psw" placeholder="confirm your password" required="">
                    </div>
                    <div class="form-group">
                      <label for="pass">current password</label>
                      <input type="password" class="form-control" name="passpsw" id="pass" placeholder="confirm your password" required="">
                    </div>
                    <div class="form-group text-center">
                      <input type="submit" name="passupdate" value="update password" class="btn btn-primary btn-3d bg-primary btn-lg">
                    </div>
                </form>
            </div>
        </div>
    </div>





<?php include $rep . 'php/include/footer.php'; ?>
