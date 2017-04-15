<?php
if(isset($_POST['sub']))
{
    $code = htmlspecialchars(trim($_POST['code']));
    $check = $db->prepare('SELECT * FROM users WHERE user_email_code = ?');
    $check->execute(array($code));
    $exist = $check->fetch();
    if(!empty($exist))
    {
        if ($exist['user_account_status'] !== "actived") {
            $update = $db->prepare('UPDATE users SET user_account_status = "actived" WHERE user_email_code = ?');
            $update->execute(array($code));
            echo '<p class="alert bg-success"><span class="glyphicon glyphicon-ok"></span>Your account has been successfuly actived <a href="../">go to the home page</a></p>';
            $_SESSION['user_id'] = $exist['user_id'];
        }
        else {
            echo '<p class="alert bg-primary"><span class="glyphicon glyphicon-ok"></span>Your account is already actived <a href="../">go to the home page</a></p>';
            $_SESSION['user_id'] = $exist['user_id'];
        }
    }
    else {
        echo '<p class="alert bg-danger"><span class="glyphicon glyphicon-warning-sign"></span>Wrong email code</p>';
    }
}
