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
            </div>
        </div>
        <div class="col-xs-6 editProf">
            <?php include $rep . 'php/script/admin/updateProfile.php'; ?>
            <div class="box">
                <h2 class="title-box bg-primary text-center box">Update Information</h2>
                <form method="post" action="./">
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
            <div class="box">
                <h2 class="title-box bg-warning text-center box">Update password</h2>
                <form method="post" action="./">
                    <div class="form-group">
                      <label for="psw">New password</label>
                      <input type="password" class="form-control" name="psw" id="psw" placeholder="your password" required="">
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
